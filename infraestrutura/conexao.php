<?php
/*
$servidor = "localhost"; // ou o IP do servidor
$porta = "1433";         // porta padrão do SQL Server (opcional)
$banco   = "nome_do_banco";
$usuario = "seu_usuario";
$senha   = "sua_senha";
*/
try {
    // String de conexão (DSN) para SQL Server
    $dsn = "sqlsrv:Server=DESKTOP-HMNS7NF;Database=confeitaria";
    
    $conn = new PDO($dsn, null, null);
    
    // Configura o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
