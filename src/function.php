<?php


function sayHello($name)
{
    if ($name) {
        return 'hello' . $name;
    }
    else{
return 'Hello Docteur Manathan';
    }
};
$watchMan = ['Docteur Manathan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'];
$name = " ";
function whoMamI($name,$watchMan){
    for ($i = 0; $i < count($watchMan); $i++){
        if($name == $watchMan[$i]){
            return $name.'est un watchman';
        }
       
    }
    return 'Rien du tout.';

};
