<?php

$erreur = "";

$sucees = "";

$verifier_nombre_1 = nombre_existe($_GET["nombre-1"]);

if(!$verifier_nombre_1){
    $erreur = $erreur . "Le nombre 1 est vide ou incorrect.</br>";
}

$verifier_nombre_2 = nombre_existe($_GET["nombre-2"]);

if(!$verifier_nombre_1){
    $erreur = $erreur . "Le nombre 2 est vide ou incorrect.</br>";
}

if($verifier_nombre_1 && $verifier_nombre_2){

    $nombre_1 = (float) $_GET["nombre-1"];
    $nombre_2 = (float) $_GET["nombre-2"];
    $operateur = (string) $_GET["operateur"];
    $calcul = calculer($nombre_1, $nombre_2, $operateur);
    $sucees =  "L'opération $nombre_1 $operateur $nombre_2  = $calcul";
}

header("location: index.php?erreur=". $erreur . "&sucees=" . $sucees );


/**
 * Cette fonction permet de verifier si un nombre existe et est non vide.
 * 
 * @param float $nombre Le nombre.
 * @return bool Es ce que le nombre existe ou pas.
 */
function nombre_existe($nombre): bool
{

    return (isset($nombre) && (!empty($nombre) ||  $nombre == 0) && is_numeric($nombre));

}

/**
 * Cette fonction permet d'éffectuer un calcul en fonction de l'opérateur.
 * 
 * @param float $nombre_1 Le nombre 1.
 * @param float $nombre_2 Le nombre 2.
 * @param string $operateur L'opérateur.
 */
function calculer(float $nombre_1, float $nombre_2, string $operateur): float
{

    $resultat = 0;

    switch($operateur){

        case "+":
            $resultat = $nombre_1 + $nombre_2;
            break;

        case "-":
            $resultat = $nombre_1 - $nombre_2;
            break;

        case "*":
            $resultat = $nombre_1 * $nombre_2;
            break;

        case "/":
            if($nombre_2 != 0){
                $resultat = $nombre_1 / $nombre_2;
            }
            break;

    }

    return $resultat;

}