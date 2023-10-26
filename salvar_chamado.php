<?php

$id = $_POST['id'];

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$arquivoDB = fopen('../../help_desk_protected/chamados.txt', 'a');
$textoNovo = $id . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
fwrite($arquivoDB, $textoNovo);
fclose($arquivoDB);

header('Location: abrir_chamado.php');
