<?php
$nome = 'Diego';
$sobrenome = 'Silva';







$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';

//fazendo o mesmo de forma simples

$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;