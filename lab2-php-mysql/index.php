<?php
$servername = "mysql-container";
$username = "root";
$password = "rootpassword";
$dbname = "lab2_db";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "<h1>Conexão bem-sucedida com MySQL!</h1>";

// Criar tabela se não existir
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "<p>Tabela 'usuarios' criada/com verificação OK</p>";
} else {
    echo "Erro: " . $conn->error;
}

// Inserir dados de exemplo
$sql_insert = "INSERT INTO usuarios (nome, email) VALUES ('João Silva', 'joao@email.com')";
if ($conn->query($sql_insert) === TRUE) {
    echo "<p>Registro inserido com sucesso!</p>";
}

// Listar registros
echo "<h2>Usuários no banco:</h2>";
$result = $conn->query("SELECT * FROM usuarios");

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Email</th><th>Data</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome"]. "</td><td>" . $row["email"]. "</td><td>" . $row["data_criacao"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
