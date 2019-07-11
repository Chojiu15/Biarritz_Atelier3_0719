<?php
function sayHello(string $name): string
{
    if ($name) {
        return "Hello $name";
    }else {
        return "Hello Dr Manhattan";
    }
    
}


$watchmen = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'];

function whoAmI(string $name, array $watchmen):string
{ 
    for ($i=0; $i < count($watchmen); $i++) { 
                if ($name ==  $watchmen[$i]) {
                return "$name est un watchmen ";
        }
        
    }
    return "rien du tout";
}
?>