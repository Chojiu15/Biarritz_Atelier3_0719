<?php
function sayHello(string $name){

    if ($name) {
        return 'hello' . $name;
    }
    else{
    return 'Hello Dr Manathan ';
    }
}
$watchmen = ['Dr Manhattan','Ozymandias','Silk Spectre','Rorschach','The comedian','Nite Owl'];
$name = " ";
function whoAmI ($name ,$watchmen ){
    for ($i = 0; $i < count($watchmen); $i++){
        if($name === $watchmen[$i]){ 
        return $name. " est un watchmen";}
      
    }

    return "ce n'est pas un watchmen";
  
}