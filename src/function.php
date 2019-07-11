<?php
$autor = ['Arthur','Gaetan',''];
$name = $autor [rand(0,2)];

function sayHello($name)
{
    if ($name == 'Arthur' || $name == 'Gaetan') {
        return "Hello $name";
    }
    else {
        return "Hello Dr. Manattan";
    }

}

echo sayHello($name);

echo '<br>'.'<br>';

//====================================================================

$leTableauWatchmens = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'];
$leNomATester = "arthur";
function whoAmI(string $leNomATester, array $leTableauWatchmens): string
{
    foreach ($leTableauWatchmens as $valeurDuleTableauWatchmens) {
        if ($leNomATester == $valeurDuleTableauWatchmens) {
            return "$leNomATester est un watchemen";
        }
    }
    return "rien";
}
echo whoAmI($leNomATester, $leTableauWatchmens);

?>

