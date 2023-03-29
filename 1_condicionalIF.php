<?php

$idade = 120;

if ($idade < 13) {
    echo 'Criança';
}  else if($idade > 13 && $idade <= 17) {
    echo 'Adolescente';
} else if($idade >= 18 && $idade < 75) {
   echo 'Adulto';
} else if ($idade >= 75) {
    echo 'Idoso';
}