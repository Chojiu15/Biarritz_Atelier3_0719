<?php
function sayHello(string $name){

    if ($name) {
        return 'hello' . $name;
    }
    else{
    return 'Hello Dr Manathan ';
    }
}

function whoAmI (string $nom ,array $watchmen ){
    foreach ($watchmen as $value){ 
        if ($nom == $value){ 
        return $nom. " est un watchmen";}
    }
    
}