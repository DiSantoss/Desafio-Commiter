<?php

$idade = 19;

if($idade < 18) {
    echo "Você não pode fazer isso."."<br>";
} else {
    echo "Você pode fazer isso. "."<br>";
};


//condicional ternária.

echo ($idade < 18) ? 'Você não pode fazer isso.'."<br>" : 'Você pode fazer isso.'."<br>";

//para armazenar um boolean?

$menorDeIdade = ($idade < 18) ? true : false;

if($menorDeIdade) {
    echo 'menor';
} else {
    echo 'maior';
}

