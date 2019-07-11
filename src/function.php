<?php

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





















$noms = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl', 'toto', 'tata', 'titi'];
$name =  $noms[rand(0, 8)];
