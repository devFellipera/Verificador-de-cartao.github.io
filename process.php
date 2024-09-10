<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $cpf = htmlspecialchars($_POST['cpf']);
    $card = htmlspecialchars($_POST['card']);

    // Conectar ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "febet765";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die(json_encode(['success' => false, 'message' => 'Conexão falhou: ' . $conn->connect_error]));
    }

    // Preparar e executar a consulta
    $stmt = $conn->prepare("INSERT INTO usuario_cartao (nome, cpf, numero_cartao) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $cpf, $card);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro: ' . $stmt->error]);
    }

    // Fechar a conexão
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Método de requisição inválido.']);
}
?>
