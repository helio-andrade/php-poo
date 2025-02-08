<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Somar Dois Números</title>
</head>
<body>

    <h1>Somar Dois Números</h1>
    
    <form method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br><br>

        <input type="submit" value="Somar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        echo "<h2>A soma é: " . ($numero1 + $numero2) . "</h2>";
    }
    ?>

</body>
</html>
