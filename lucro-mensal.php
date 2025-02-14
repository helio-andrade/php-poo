<?php
    $lucro = 0; // Inicializa o lucro

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o valor de vendas a partir do formulário
        if (isset($_POST["vendas"])) {
            $vendas = (float) $_POST["vendas"];
            $lucro = 10 * $vendas - 5000;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Lucro</title>
</head>
<body>
    <h1>Cálculo de Lucro</h1>

    <!-- Formulário para entrada dos dados -->
    <form method="POST" action="">
        <label for="vendas">Valor das Vendas (R$): </label>
        <input type="number" id="vendas" name="vendas" step="0.01" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($vendas)): ?>
        <h2>Resultado:</h2>
        <p>Lucro: R$ <?php echo number_format($lucro, 2, ",", "."); ?></p>
    <?php endif; ?>

</body>
</html>
