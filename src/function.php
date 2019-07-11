<?php
function sayHello(string $name){
   return $name. " Hello Nite Owl "; 
     if ($name) {
      $name = " Hello Dr Manhattan ";
      return $name;}
}
echo "</br>";
function whoAmI (string $nom ,array $watchmen ){
    foreach ($watchmen as $value){ 
        if ($nom == $value){ 
        return $nom. " est un watchmen";}
    }
}