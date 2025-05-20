<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $distancia = $_POST['distancia'];
    $combustivel = $_POST['combustivel'];

    $consumo_medio = $distancia / $combustivel;

    if ($consumo_medio <= 8) {
        $classificacao = "Alto consumo";
    } elseif ($consumo_medio >= 8.1 && $consumo_medio <= 14) {
        $classificacao = "Consumo moderado";
    } else {
        $classificacao = "Bom consumo";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Consumo de Combustível</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e; 
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #2c3e50;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #f39c12;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #ecf0f1;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #2c3e50;
        }

        input[type="submit"] {
            background-color: #f39c12;
            color: #2c3e50;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #e67e22;
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
        }

        .resultado p {
            margin: 10px 0;
            font-weight: bold;
        }

        .resultado .classificacao {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Consumo de Combustível</h1>

        <!-- Formulário -->
        <form method="POST" action="">
            <label for="nome">Nome do Condutor:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="distancia">Distância Percorrida (em km):</label>
            <input type="number" id="distancia" name="distancia" step="0.1" required><br>

            <label for="combustivel">Combustível Gasto (em litros):</label>
            <input type="number" id="combustivel" name="combustivel" step="0.1" required><br>

            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<div class='resultado'>";
            echo "<p>Olá, $nome! Seu consumo médio foi de " . number_format($consumo_medio, 2) . " km/l.</p>";
            echo "<p class='classificacao'>Classificação: $classificacao</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
