<body>
<?php
/*
linha 1
linha 2
*/

$variavel1 = 'midira';
# comentario de linha
$variavel2 = "William é legal ({$variavel1})"; // comentario dessa linha
// array com indices anonimos
$variavel3 = array('Maçã', 'Banana', 'Pêra', 'Xuxu', 'Quiabo');
// array associativo
$variavel4 = array(
  'a' => $variavel3, 'b' => 'Banana', 'c' => 'Pêra', 'd' => 'Xuxu', 'e' => 'Quiabo'
);
// boolean
$variavel5 = false;
// class
//$variavel6 = new Classe();

echo $variavel1;
echo '<br>';
echo $variavel2;
echo '<br>';
echo implode(',', $variavel3);
echo '<br>';
echo $variavel4['b'];

require 'printer.php';

?>
</body>
