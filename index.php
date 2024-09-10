<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Cartão</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>
    <header>
        <h1>Verificador de Cartão - FEBET765</h1>
    </header>

    <main>
        <div class="container">
            <form id="card-form" action="process.php" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">

                <label for="card">Número do Cartão:</label>
                <input type="text" id="card" name="card" required pattern="\d{13,16}" placeholder="Número do cartão">

                <label for="expiry">Data de Validade:</label>
                <input type="text" id="expiry" name="expiry" required pattern="\d{2}/\d{2}" placeholder="MM/AA">

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required pattern="\d{3}" placeholder="CVV">

                <input type="submit" value="Cadastrar">
            </form>

            <div id="response" class="response"></div>
        </div>
    </main>
''    <footer>
        <p>© FEBET765 2024  - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
