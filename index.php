<?php

// En utilisant toutes les fonctions que nous venons de voir.

/**
 * 1. Vérifiez si cette variable est vide, si c'est le cas, affichez vide si non affichez pas vide.
 */
$var = 0;
// TODO votre code ici.
if(empty($var)) {
    echo "empty";
}
else {
    echo "not empty";
}
echo "<br>";

/**
 * 2. Détruisez la variable déclarée, tentez de l'afficher ensuite en utilisant un print_r.
 */
$eraseMe = "Please erase me !";
// TODO votre code ici.
unset($eraseMe);

print_r($eraseMe);
echo "<br>";
/**
 * 3. Déclarez vous même un tableau et utilisez var_dump pour afficher toutes les informations de debug.
 */
// TODO votre code ici.
$array = [1 ,2 ,3];
var_dump($array);
echo "<br>";

/**
 * 4. Faites la même chose avec le même tableau, mais pour la méthode print_r.
 */
// TODO votre code ici.
print_r($array);
echo "<br>";


/**
 * 5. A l'aide de la méthode isset, testez si la clé du tableau associatif 'doNotExists' existe ( SANS TOUCHER AU TABLEAU )
 *    Si c'est le cas, affichez le message 'Existe', si ce n'est pas le cas, affichez le message 'Existe pas'.
 */
$tab = ["test" => true, "name" => "Doe", "age" => 32];
// TODO Votre code ici.
if (isset($tab[0])) {
    echo "la clé 0 de tab 'Existe'";
}
elseif (isset($tab[1])) {
    echo "la clé 1 de tab 'Existe'";
}
elseif (isset($tab[2])) {
    echo "la clé 2 de tab 'Existe'";
}
else {
    echo "les autres clé n'Existe pas ";
}

/**
 * 6. Créez une variable contenant:
 *    - un booléen
 *    - un nombre entier
 *    - un nombre flottant ( à virgule )
 *    - une chaîne de caractère.
 *
 * Créez une fonction qui prend en paramètre une simple variable, cette fonction doit tester le type du contenu de la variable
 * et afficher le texte "La variable passé en paramètre est de type: TYPE".
 *
 * exemple: funct maFunct(monparam){
 *              si monparam EST boolean {
 *                  afficher -> Ma variable est de type: boolean
 *              }
 *              SI monparam EST ENTIER...
 *              SI...
 *              SI...
 *          }
 * Passez toutes les variables créées précédemment dans cette fonction.
 */

// TODO votre code ici.
$bool = true;
$int = 9;
$floa = 1.25;
$stri = "hello";

function mafunction ($var) {
    if (is_bool($var) === true) {
        echo "la variable et un booléen en true ";
    }

    elseif (is_int($var)) {
        echo "la variable et nombre entier ";
    }

    elseif (is_float($var)) {
        echo "la variable et nombre a virgule ";
    }

    elseif (is_string($var)) {
        echo "la variable et une chaine de caractere ";
    }

    else {
        echo " la variable n'est ni un booléen, ni un nombre entier ,ni un nombre a virgule et 
        non plus une chaine de caractere";
    }

}

mafunction($bool);
mafunction($floa);
mafunction($int);
mafunction($stri);
