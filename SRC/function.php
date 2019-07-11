<?php
function sayHello($name)
{
    if ($name == "") {
        echo "Hello Dr Manhatan";
    }
    return $name;
}
/*echo sayHello("Hello Nite Owl");*/

$watchmen = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'];

function whoAmI(string $name, array $watchmen)
{ 
    for ($i=0; $i < count($watchmen); $i++) { 
                if ($name ==  $watchmen[$i]) {
                return "$name est un watchmen ";
        }
        
    }
}
?>