<?php


// Crée une fonction nommée sayHello permettant d'écrire "Hello Nite Owl". Cette fonction ne doit pouvoir retourner que des chaînes.
function sayHello(string $name): string
{
    if (isset($name)) {
        return "Hello $name";
    } else {
        return "Hello Dr. Manhattan";
    }
}



// Retourne "{name} est un watchmen" uniquement si {name} est un watchmen : Rien du tout si{name} n'en est pas un.

function whoAmI(string $name, array $watchmen): string
{
    for ($i = 0; $i < count($watchmen); $i++) {
        if ($name == $watchmen[$i]) {
            return "$name est un watchmen";
        }
    }
    return "Rien du tout";
}