<?php
include('../model.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Login do Sistema
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Certifique-se de que a senha foi armazenada como MD5

    // Consulta para verificar as credenciais
    $sql = "SELECT * FROM user WHERE email_usuer = :email_usuer AND password_user = :password_user";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email_usuer', $username);
    $stmt->bindParam(':password_user', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $username; // Armazena o usuário na sessão
        header("Location: home.php"); // Redireciona para a home
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
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
