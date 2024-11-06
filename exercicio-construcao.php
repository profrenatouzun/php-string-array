<?php
/* 

Música de Chico Buarque - Construção 

Amou daquela vez como se fosse a última
Beijou sua mulher como se fosse a última
E cada filho seu como se fosse o único
E atravessou a rua com seu passo tímido
Subiu a construção como se fosse máquina
Ergueu no patamar quatro paredes sólidas
Tijolo com tijolo num desenho mágico
Seus olhos embotados de cimento e lágrima
Sentou pra descansar como se fosse sábado
Comeu feijão com arroz como se fosse um príncipe
Bebeu e soluçou como se fosse um náufrago
Dançou e gargalhou como se ouvisse música
E tropeçou no céu como se fosse um bêbado
E flutuou no ar como se fosse um pássaro
E se acabou no chão feito um pacote flácido
Agonizou no meio do passeio público
Morreu na contramão atrapalhando o tráfego

Amou daquela vez como se fosse o último
Beijou sua mulher como se fosse a única
E cada filho seu como se fosse o pródigo
E atravessou a rua com seu passo bêbado
Subiu a construção como se fosse sólido
Ergueu no patamar quatro paredes mágicas
Tijolo com tijolo num desenho lógico
Seus olhos embotados de cimento e tráfego
Sentou pra descansar como se fosse um príncipe
Comeu feijão com arroz como se fosse o máximo
Bebeu e soluçou como se fosse máquina
Dançou e gargalhou como se fosse o próximo
E tropeçou no céu como se ouvisse música
E flutuou no ar como se fosse sábado
E se acabou no chão feito um pacote tímido
Agonizou no meio do passeio náufrago
Morreu na contramão atrapalhando o público

Amou daquela vez como se fosse máquina
Beijou sua mulher como se fosse lógico
Ergueu no patamar quatro paredes flácidas
Sentou pra descansar como se fosse um pássaro
E flutuou no ar como se fosse um príncipe
E se acabou no chão feito um pacote bêbado
Morreu na contramão atrapalhando o sábado

*/

/* Montar a letra utilizando:
        - concatenação de Strings,
        - arrays,
        - foreach
*/
// TODO: Inserir todos os prefixos (Inicios das frases) - Total de 17 itens.
$prefix = array(
    "Amou daquela vez como se fosse a ",
	"Beijou sua mulher como se fosse a ",
	"E cada filho seu como se fosse o ",
	"E atravessou a rua com seu passo ",
	"Subiu a construção como se fosse ",
	"Ergueu no patamar quatro paredes ",
	"Tijolo com tijolo num desenho ",
	"Seus olhos embotados de cimento e ",
	"Sentou pra descansar como se fosse ",
	"Comeu feijão com arroz como se fosse um ",
	"Bebeu e soluçou como se fosse um ",
	"Dançou e gargalhou como se ",
	"E tropeçou no céu como se fosse um ",
	"E flutuou no ar como se fosse um ",
	"E se acabou no chão feito um pacote ",
	"Agonizou no meio do passeio ",
	"Morreu na contramão atrapalhando o ",
);


// TODO: Continuar colocando os sufixos ( finais da letra ) - Total de 25 itens
$suffix = array (
    "última",
	"único",
	"tímido",
	"máquina",
	"sólidas",
	"mágico",
);


// TODO: Acertar as ordens dos sufixos conforme a parte correta
$order = array();
$order[0] = [ 0, 0, 1, 2, 3,  ];
$order[1] = [ 16, 17, 18, ];
$order[2] = [ 3, 21, false, false, false, 24, ];

// Iniciando bloco 
echo "<pre>\n";

// A musica tem 3 partes
for ($part = 0; $part < 3; $part++)
{
    $prefixIndex = 0;
    foreach($order[$part] as $suffixIndex)
    {
        if ($suffixIndex !== false) // Se a frase não deve existe nessa parte, colocar o sufixo como "false"
        {
            echo "{$prefix[$prefixIndex]}{$suffix[$suffixIndex]}\n";
        }
        $prefixIndex++ ;    // Proximo Prefixo
    }
    echo "\n\n";    // Pula linha para mudar de parte
}

// Finalizando bloco 
echo "</pre>\n";

?>