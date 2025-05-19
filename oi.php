<h1>Minha Primeira Aula de PHP</h1>

<?php
// Exibindo uma mensagem na tela
echo "<em>Olá, Mundo!</em>";
echo "<br>"; // Quebra de linha

// Comentário de uma linha
# comentário de uma linha
/*
     Comentário de múltiplas linhas
     Aqui vocé pode escrever várias linhas de comentários
     sem se preocupar com o limite de uma linha.
*/

// Variáveis
// Podem conter letras, números e o caracters de sublinhado
// Não podem começar com números
// Não podem conter espaços em branco
// Não podem conter caracteres especiais, exceto o sublinhado
// Não podem ser palavras reservadas do PHP
$nome = "<em>Liane</em>"; // string
$idade = 17; // Inteiro
$altura = 1.65; // Float
$peso = 60.0; // Float
$casado = false; // Booleano (true ou false)
$filhos = null; // Nulo (sem valor definido)

// Exibindo o valor de uma variável
echo "<strong>Nome:</strong> $nome <br>";
echo "<strong>Idade:</strong> $idade <br>";
echo "<strong>Altura:</strong> $altura <br>";
echo "<strong>Peso:</strong> $peso <br>";

// Calculando o IMC
$imc = $peso / ($altura * $altura);

// Exibinxo o resultado do IMC com uma mensagem
if ($imc < 18.5) {
     echo "Você está abaixo do peso.";
} elseif ($imc < 24.9) {
     echo "Você está com o peso normal.";
} elseif ($imc < 29.9) {
     echo "Você está com sobrepeso.";
} else {
    echo "Você está obeso.";
}

?>