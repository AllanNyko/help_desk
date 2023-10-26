<?php

echo '<pre>';

print_r($_POST);

echo '</pre>';

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$arquivoDB = fopen('chamados.txt', 'a');
$textoNovo = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
fwrite($arquivoDB, $textoNovo);
fclose($arquivoDB);
