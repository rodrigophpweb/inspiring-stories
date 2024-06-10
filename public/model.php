<?php
// Configurações do banco de dados
$host = 'senacHistory_db'; // Endereço do servidor do banco de dados
$dbname = 'senacMyhistory'; // Nome do banco de dados
$username = 'root'; // Nome de usuário do banco de dados
$password = 's3nacHlst0ry'; // Senha do banco de dados

try {
    // Conectando ao banco de dados usando PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Configurando o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Mensagem de sucesso
    echo "Conexão bem-sucedida!";
} catch(PDOException $e) {
    // Em caso de erro na conexão, exibir mensagem de erro
    echo "Erro na conexão: " . $e->getMessage();
}


// https://siteslucrativos.com/inscreva-se-g/?id=325&src=GOAds_lc-abr24-ppl-g-ad-07-lc-jun24-vid_05_Tecnologia_25_44_AD06_HTML_CSS_Campanha_PF_01&utm_source=GOAds&utm_medium=lc-abr24-ppl-g-ad-07-lc-jun24-vid&utm_content=05_Tecnologia_25_44&utm_campaign=Campanha_PF_01&utm_term=AD06_HTML_CSS&utm_source=&utm_campaign=&utm_term=&utm_ad=&utm_keyword=&utm_matchtype=&utm_device=c&gclid=CjwKCAjw34qzBhBmEiwAOUQcF9nE1h2ZkdLTv9Ml38QBhfd8BAT4d9MPeEPePGn3q58xwY0FR5uUlBoC_d4QAvD_BwE