<?php


/* Iniciando - Como funciona uma "array" ou "vetor" ou "agregado"" */
echo "<pre>";    // Apenas para facilitar a visualização no formato HTML
echo PHP_EOL;   // Quebra de linha

// Primeira Forma de Criar um Array - forma tradicional
$cars = array("Volvo", "BMW", "Toyota");
echo "\$cars:\n";
var_dump($cars);
echo "\n\n";    // Pulando linhas

// Forma alternativa
$cars2 = ["Volvo", "BMW", "Toyota"];
echo "\$cars2:\n";
var_dump($cars2);
echo "\n\n";    // Pulando linhas

// Usar a função count para mostrar a quantidade de elementos
echo 'Size of $cars: ' . count($cars);
echo "\n\n\n";    // Pulando linhas

// Alterando o segundo elemento - Lembrando que começa com o índice 0
$cars[1] = "Ford";
echo "\$cars (Alterado):\n";
var_dump($cars);
echo "\n\n";    // Pulando linhas


// Pode-se criar um array vazio e ir inserindo dados nele
$cars3 = [];
$cars3[0] = "Volvo";
$cars3[1] = "BMW";
$cars3[2] = "Toyota";
echo "\$cars3:\n";
var_dump($cars3);
echo "\n\n";    // Pulando linhas

// Pode-se criar um array vazio e ir inserindo dados nele de outra forma
$cars4 = [];
$cars4[] = "Volvo";
$cars4[] = "BMW";
$cars4[] = "Toyota";
echo "\$cars4:\n";
var_dump($cars4);
echo "\n\n";    // Pulando linhas


// Utilizar o operador foreach  - Formato PHP
foreach ($cars as $car) {
  echo "My car is a {$car}\n";
}

/* Finalizando o primeiro Bloco */
echo "</pre>";    // Apenas para facilitar a visualização no formato HTML
echo "\n\n<br /><hr /><br />\n\n";


/* Iniciando segundo bloco */
echo "<pre>";    // Apenas para facilitar a visualização no formato HTML
echo PHP_EOL; // Quebra de linha

// Arrays no formato de dicionário - Chave => Valor
$mustang = array(
    "brand"=>"Ford",
    "model"=>"Mustang",
    "year"=>1964
);
echo "\$mustang:\n";
var_dump($mustang);
echo "\n\n";    // Pulando linhas



// Na forma alternativa
$corolla = [
    "brand"=>"Toyota",
    "model"=>"Corolla",
    "year"=>1999
];
echo "\$corolla:\n";
var_dump($corolla);
echo "\n\n";    // Pulando linhas

// Formando um array de arrays
$fancyCars = [$mustang, $corolla];

// Dois formatos de foreach
foreach ($fancyCars as $car)    // Utilizando apenas a iteração por valor
{
    echo " - My Fancy Car is a : \n";
    foreach($car as $key => $value) // Iteração de chave => valor
    {
        echo "\t {$key}: {$value}\n";
    }
    echo "\n\n";    // Pulando linhas
}

/* Finalizando o segundo Bloco */
echo "</pre>";    // Apenas para facilitar a visualização no formato HTML
echo "\n\n<br /><hr /><br />\n\n";


/* Iniciando terceiro bloco */
echo "<pre>";    // Apenas para facilitar a visualização no formato HTML
echo PHP_EOL; // Quebra de linha


// Arrays podem ter um misto de vetores e dicionarios
$strangeArray = [
    4,
    "banana",
    9 => 35.7,
    "name" => "Little John",
    ["array", "inside", "other", "array"],
    99,
    3.14,
];

var_dump($strangeArray);

// Outra maneira de mostrar os dados de um array utilizando o comando "print_r"
print_r($strangeArray);


/* Finalizando o terceiro Bloco */
echo "</pre>";    // Apenas para facilitar a visualização no formato HTML
echo "\n\n<br /><hr /><br />\n\n";


?>