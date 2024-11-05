
<?php

/* Iniciando - Como funciona uma "string" ou "cadeia de caracteres" */
echo "<pre>";    // Apenas para facilitar a visualização no formato HTML
echo PHP_EOL;   // Quebra de linha

// String utilizando Aspas simples ( ' )
echo 'This is a simple string.'; 
echo PHP_EOL;   // Quebra de linha

// String Utilizando varias Linhas 
echo 'You can also have embedded newlines in
strings this way as it is
okay to do.';
echo PHP_EOL;   // Quebra de linha

// String utilizando Aspas duplas ( " )
echo "This is a simple string with double quotes"; 
echo PHP_EOL; // Quebra de linha

// Com aspas simples os caracteres especias como \n não são interpretados
echo 'Single Quotes - This will not expand: \n a newline';
echo PHP_EOL; // Quebra de linha

// Já com aspas duplas, os caracteres especias como \n serão interpretados e irá gerar uma quebra de linha
echo "Double Quotes - This will expand: \n a newline";
echo PHP_EOL; // Quebra de linha


// Setando o valor de uma variável
$variable = "Variable Value Expanded";

// Com aspas simples as variáveis não são expandidas
echo 'Single Quotes - Variables do not expand: $variable';
echo PHP_EOL; // Quebra de linha

// Com aspas Duplas as variáveis são expandidas
echo "Double Quotes - Variables will expand: $variable";
echo PHP_EOL; // Quebra de linha

// Concatenando Strings - Utilizar o operador ponto ( . )
echo "First String" . " - " . "Second String";

/* Finalizando o primeiro Bloco */
echo "</pre>";    // Apenas para facilitar a visualização no formato HTML
echo "\n\n<br /><hr /><br />\n\n";

/* Iniciando segundo bloco */
echo "<pre>";    // Apenas para facilitar a visualização no formato HTML
echo PHP_EOL; // Quebra de linha

// Definindo algumas variáveis com um nome
$name = "John von Neumann";
$theory = "the single-memory, stored-program architecture";
$called = "von Neumann architecture";

// Primeira forma de embutir variáveis em uma string - Utilizando o operador de concatenação ponto ( . )
echo "My name is ". $name . ". I was inventor of " . $theory . " that is commonly called " . $called . ".";
echo PHP_EOL; // Quebra de linha

// Segunda forma 
echo "My name is $name. I was inventor of $theory that is commonly called $called.";
echo PHP_EOL; // Quebra de linha

// Terceira forma 
echo "My name is {$name}. I was inventor of {$theory} that is commonly called {$called}.";
echo PHP_EOL; // Quebra de linha

// Forma antiga - Vai apresentar um "NOTICE" dizendo que essa forma esta obsoleta (deprecated)
echo "My name is ${name}. I was inventor of ${theory} that is commonly called ${called}.";
echo PHP_EOL; // Quebra de linha

// Usando metodos dentro da string
class Oper 
{
    function Sum ($a, $b)
    {
        return $a + $b;
    }
}

$oper = new Oper();

$i = 2;
$j = 4;

// Sem utilizar chaves o resultado nao fica correto
echo " $i + $j = $oper->Sum($i,$j) ";   // Vai gerar um "Warning"
echo PHP_EOL; // Quebra de linha

// Utilizando chaves o resultado fica melhor quando se usa objetos de classes e arrays
echo " {$i} + {$j} = {$oper->Sum($i,$j)}";
echo PHP_EOL; // Quebra de linha

echo PHP_EOL; // Quebra de linha

/* Finalizando o segundo Bloco */
echo "</pre>";    // Apenas para facilitar a visualização no formato HTML
echo "\n\n<br /><hr /><br />\n\n";

?>
