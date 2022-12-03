<?php

$idade = $_POST["idade"];

if($idade >= 18){
    echo "Maior de Idade";
    }else{
        echo "Menor de Idade";
    }