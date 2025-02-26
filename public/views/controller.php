<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('../model.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ativar exibição de erros para debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar se os parâmetros foram enviados corretamente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        die("Erro: Parâmetros de login não foram enviados corretamente. Verifique o formulário.");
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if (empty($username) || empty($password)) {
        die("Erro: Usuário ou senha não podem estar vazios.");
    }
    
    // Hash da senha (ATENÇÃO: md5 não é seguro, recomendo password_hash)
    $password = md5($password);
    
    // Verificando se os nomes das colunas estão corretos
    $sql = "SELECT * FROM user WHERE email_user = :email_user AND password_user = :password_user";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email_user', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password_user', $password, PDO::PARAM_STR);
    
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $username; // Armazena o usuário na sessão
        header("Location: home.php"); // Redireciona para a home
        exit();
    } else {
        die("Erro: Usuário ou senha inválidos. Verifique as credenciais.");
    }
} 

// Configurações de paginação
$itemsPerPage = 25; // Número de itens por página
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Página atual
$offset = ($page - 1) * $itemsPerPage; // Calcula o deslocamento

// Consulta para contar o total de registros
$countQuery = "SELECT COUNT(*) as total FROM history";
$totalItemsResult = $conn->query($countQuery);
$totalItems = $totalItemsResult->fetch(PDO::FETCH_ASSOC)['total'];

// Calcula o total de páginas
$totalPages = ceil($totalItems / $itemsPerPage);

// Consulta principal com LIMIT e OFFSET
$query = "
SELECT 
    h.id AS historia_id,
    h.data_contato,
    h.nome_completo AS estudante,
    s.school AS unidade,
    r.region AS cidade,
    GROUP_CONCAT(DISTINCT ai.name SEPARATOR ', ') AS areas_interesse,
    GROUP_CONCAT(DISTINCT sl.level SEPARATOR ', ') AS niveis_ensino,
    h.status,
    h.codigo_crm AS classificacao
FROM 
    history h
LEFT JOIN history_areas_interests hai ON h.id = hai.id_historia
LEFT JOIN areas_of_interests ai ON hai.id_area_interesse = ai.id
LEFT JOIN history_school hs ON h.id = hs.id
LEFT JOIN schools s ON hs.id_school = s.id
LEFT JOIN regions r ON s.id_region = r.id
LEFT JOIN history_school_level hsl ON h.id = hsl.id
LEFT JOIN school_level sl ON hsl.id_school_level = sl.id
GROUP BY h.id
LIMIT :limit OFFSET :offset";

$stmt = $conn->prepare($query);
$stmt->bindValue(':limit', $itemsPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$listHistory = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Query para buscar os dados das áreas de interesse
$stmt = $conn->query("SELECT id, name FROM areas_of_interests");
$areasOfInterests = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Query para buscar os dados Nível de Ensino
$stmt = $conn->query("SELECT id, level FROM school_level");
$schoolLevel = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Query para buscar os dados Tipo de história
$stmt = $conn->query("SELECT id, type_history FROM type_history");
$typeHistory = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Consulta para buscar todas as unidades agrupadas por região
$sql = "SELECT id, id_region, school FROM schools ORDER BY id_region, school";
$stmt = $conn->prepare($sql);
$stmt->execute();
$schoolsData = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Verifica se há um ID passado via GET para edição
$id = $_POST['id'] ?? null;
$history = null;

if ($id) {
    // Buscar dados existentes para edição
    $stmt = $conn->prepare("SELECT * FROM history WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $history = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Mapeamento correto entre inputs e colunas do banco
        $columns = [
            'data_contato' => $_POST['dateContact'] ?? '',
            'data_atualizacao_historia' => $_POST['dateUpdate'] ?? '',
            'codigo_crm' => $_POST['cadUnico'] ?? '',
            'nome_completo' => $_POST['nameStudent'] ?? '',
            'data_nascimento' => $_POST['birthday'] ?? '',
            'genero' => $_POST['gender'] ?? '',
            'pagante_bolsista' => $_POST['pagante'] ?? ($_POST['bolsista'] ?? ''),
            'resumo_historia' => $_POST['resumeHistory'] ?? '',
            'status' => $_POST['status'] ?? '',
            'link_história' => $_POST['linkHistory'] ?? '',
            'observacao' => $_POST['observacao'] ?? ''
        ];
        
        if ($id) {
            // Atualização de registro existente
            $setClause = implode(", ", array_map(fn($col) => "$col = :$col", array_keys($columns)));
            $query = "UPDATE history SET $setClause WHERE id = :id";
        } else {
            // Inserção de novo registro
            $colNames = implode(", ", array_keys($columns));
            $placeholders = implode(", ", array_map(fn($col) => ":$col", array_keys($columns)));
            $query = "INSERT INTO history ($colNames) VALUES ($placeholders)";
        }
        
        $stmt = $conn->prepare($query);
        
        // Bind dos valores dinamicamente
        foreach ($columns as $column => $value) {
            $stmt->bindValue(":$column", $value, PDO::PARAM_STR);
        }
        
        if ($id) {
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        }
        
        // Executar a query
        $stmt->execute();
        $historyId = $id ?: $conn->lastInsertId();
        
        // Inserir ou atualizar tabelas relacionadas
        // history_areas_interests
        $areasOfInterest = $_POST['areas_of_interest'] ?? [];
        $conn->prepare("DELETE FROM history_areas_interests WHERE history_id = :history_id")->execute([':history_id' => $historyId]);
        foreach ($areasOfInterest as $area) {
            $stmt = $conn->prepare("INSERT INTO history_areas_interests (history_id, area_id) VALUES (:history_id, :area_id)");
            $stmt->execute([':history_id' => $historyId, ':area_id' => $area]);
        }
        
        // history_copyright
        $copyrights = $_POST['copyrights'] ?? [];
        $conn->prepare("DELETE FROM history_copyright WHERE history_id = :history_id")->execute([':history_id' => $historyId]);
        foreach ($copyrights as $copyright) {
            $stmt = $conn->prepare("INSERT INTO history_copyright (history_id, copyright_id) VALUES (:history_id, :copyright_id)");
            $stmt->execute([':history_id' => $historyId, ':copyright_id' => $copyright]);
        }
        
        // Redirecionar após a operação bem-sucedida
        header('Location: index.php?success=1');
        exit;
    } catch (PDOException $e) {
        die("Erro ao salvar: " . $e->getMessage());
    }
}