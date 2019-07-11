<?php
function sayHello($name){
   /*  echo "Hello Nite Owl"; */
   if ($name == "") {
    $name = "Hello Dr Manhattan";
   }
   return $name;
}
function whoAmI (string $nom ,array $watchmen ){
    foreach ($watchmen as $value){ 
        if ($nom == $value){ 
        return $nom. "est un watchmen";}
    }
} ;
 

                                                   