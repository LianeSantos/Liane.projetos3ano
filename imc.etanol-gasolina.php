<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Comparação de Combustível</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@600&display=swap');

  body {
    background: linear-gradient(135deg, #FF6FD8 0%, #3813C2 100%);
    font-family: 'Nunito', sans-serif;
    color: #fff;
    margin: 0;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
  }

  .container {
    background: rgba(255, 255, 255, 0.15);
    border-radius: 20px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    padding: 2.5rem 3rem;
    max-width: 400px;
    width: 100%;
    text-align: center;
    backdrop-filter: blur(10px);
  }

  h2 {
    font-family: 'Fredoka One', cursive;
    font-size: 2.4rem;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 6px #7b1fa2;
  }

  label {
    display: block;
    text-align: left;
    margin-bottom: 0.3rem;
    font-weight: 700;
    font-size: 1.1rem;
    text-shadow: 1px 1px 3px #5e35b1;
  }

  input[type="number"] {
    width: 100%;
    padding: 0.6rem 0.9rem;
    border-radius: 10px;
    border: none;
    font-size: 1.1rem;
    margin-bottom: 1.4rem;
    outline: none;
    transition: all 0.3s ease;
    font-weight: 600;
    color: #3813c2;
  }

  input[type="number"]:focus {
    box-shadow: 0 0 10px #ff6fd8;
  }

  button {
    background: #ff6fd8;
    border: none;
    padding: 0.75rem 2.5rem;
    border-radius: 30px;
    font-size: 1.25rem;
    font-weight: 700;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 6px 15px #ff6fd8aa;
  }

  button:hover {
    background-color: #d54db0;
  }

  .resultado {
    margin-top: 1.8rem;
    padding: 1rem 1.5rem;
    background: #fff3fe;
    color: #3813c2;
    border-radius: 15px;
    font-weight: 700;
    font-size: 1.2rem;
    box-shadow: 0 4px 15px #7b1fa22b;
  }

  .destaque {
    color: #ff6fd8;
    font-family: 'Fredoka One', cursive;
  }
</style>
</head>
<body>
  <div class="container">
    <h2>🚗 Escolha o Melhor Combustível 🚀</h2>
    <form method="post" action="">
      <label for="etanol">Preço do Etanol (R$):</label>
      <input type="number" step="0.01" id="etanol" name="etanol" required placeholder="Ex: 4.59" />

      <label for="gasolina">Preço da Gasolina (R$):</label>
      <input type="number" step="0.01" id="gasolina" name="gasolina" required placeholder="Ex: 6.39" />

      <button type="submit">Calcular 🔥</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $etanol = floatval($_POST["etanol"]);
        $gasolina = floatval($_POST["gasolina"]);
        $setenta_por_cento = $gasolina * 0.7;

        echo '<div class="resultado">';
        echo "70% do preço da gasolina: <span class='destaque'>R$ " . number_format($setenta_por_cento, 2, ',', '.') . "</span><br>";
        echo "Preço do etanol: <span class='destaque'>R$ " . number_format($etanol, 2, ',', '.') . "</span><br><br>";

        if ($etanol <= $setenta_por_cento) {
            echo "<strong>🚀 O <span class='destaque'>Etanol</span> é mais vantajoso!</strong>";
        } else {
            echo "<strong>⛽ A <span class='destaque'>Gasolina</span> é mais vantajosa!</strong>";
        }
        echo "</div>";
    }
    ?>
  </div>
</body>
</html>
