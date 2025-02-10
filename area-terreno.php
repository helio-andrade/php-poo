<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Área</title>
</head>
<body>
    <h2>Calculadora de Área</h2>
    <form method="post">
        <label>Largura:</label>
        <input type="number" name="largura" step="0.01" required>
        <br><br>

        <label>Comprimento:</label>
        <input type="number" name="comprimento" step="0.01" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
        $area = ""; // Inicializa a variável

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $largura = (float) $_POST["largura"];
            $comprimento = (float) $_POST["comprimento"];
            $area = $largura * $comprimento;
        }
    ?>

    <h3>Área: <?= $area ? number_format($area, 2, ",", ".") . " m²" : "" ?></h3>
</body>
</html>
