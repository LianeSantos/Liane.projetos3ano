<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff5733, #ffb300);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #ff5733;
            font-size: 2em;
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
        }

        label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
            color: #ff5733;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px;
            border-radius: 10px;
            border: 2px solid #ffb300;
            font-size: 16px;
            background-color: #fff7e1;
            color: #333;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            width: 100%;
            padding: 14px;
            background-color: #ff5733;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 20px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff3a00;
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .result {
            text-align: center;
            margin-top: 20px;
        }

        .result p {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .result a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ffb300; 
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .result a:hover {
            background-color: #ff5733;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Calculadora de IMC</h2>

        <form method="post">
            <label for="peso">Peso (kg):</label>
            <input type="number" name="peso" id="peso" step="0.1" required><br>
            
            <label for="altura">Altura (m):</label>
            <input type="number" name="altura" id="altura" step="0.01" required><br>

            <input type="submit" value="Calcular IMC">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST["peso"];
            $altura = $_POST["altura"];

            if ($altura > 0) {
                $imc = $peso / ($altura * $altura);
                echo "<div class='result'>";
                echo "<p><strong>Seu IMC é:</strong> " . number_format($imc, 2) . "</p>";

                if ($imc < 18.5) {
                    echo "<p><strong>Classificação:</strong> Abaixo do peso</p>";
                } elseif ($imc < 25) {
                    echo "<p><strong>Classificação:</strong> Peso normal</p>";
                } elseif ($imc < 30) {
                    echo "<p><strong>Classificação:</strong> Sobrepeso</p>";
                } elseif ($imc < 35) {
                    echo "<p><strong>Classificação:</strong> Obesidade grau 1</p>";
                } elseif ($imc < 40) {
                    echo "<p><strong>Classificação:</strong> Obesidade grau 2</p>";
                } else {
                    echo "<p><strong>Classificação:</strong> Obesidade grau 3</p>";
                }
                echo "<a href='index.php'>Voltar</a>";  // Link para voltar
                echo "</div>";
            }
        }
        ?>
    </div>

</body>
</html>
