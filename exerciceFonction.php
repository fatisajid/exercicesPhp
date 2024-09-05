<?php

require 'partials/head.php';
?>

<?php
// 1. Fonction sans paramètres et sans valeur de retour
function greet() {
    echo "Hello, world!";
}
greet(); // Affiche "Hello, world!"

// 2. Fonction avec paramètres et sans valeur de retour
function greetUser($name) {
    echo "Hello, $name!";
}
greetUser("John"); // Affiche "Hello, John!"

// 3. Fonction avec paramètres et avec valeur de retour
function sum($a, $b) {
    return $a + $b;
}
echo sum(5, 10); // Affiche 15

// 4. Fonction qui calcule la somme des nombres d'un tableau
function sumArray($numbers) {
    return array_sum($numbers);
}
echo sumArray([1, 2, 3, 4]); // Affiche 10

// 5. Fonction avec paramètre par défaut
function greetWithTime($name, $timeOfDay = "day") {
    echo "Good $timeOfDay, $name!";
}
greetWithTime("John", "morning"); // Affiche "Good morning, John!"
greetWithTime("Sarah"); // Affiche "Good day, Sarah!"

// 6. Fonction qui retourne un tableau
function getFruits() {
    return ["Apple", "Banana", "Orange"];
}
$fruits = getFruits();
print_r($fruits); // Affiche Array([0] => Apple, [1] => Banana, [2] => Orange)

// 7. Fonction avec une chaîne de caractères comme paramètre
function reverseString($str) {
    return strrev($str);
}
echo reverseString("Hello"); // Affiche "olleH"

// 8. Fonction avec paramètres et vérification de type
function divide($a, $b) {
    if ($b == 0) {
        return "Erreur : Division par zéro!";
    }
    return $a / $b;
}
echo divide(10, 2); // Affiche 5
echo divide(10, 0); // Affiche "Erreur : Division par zéro!"

// 9. Fonction qui utilise une boucle pour générer un résultat
function generateMultiplicationTable($number) {
    $table = [];
    for ($i = 1; $i <= 10; $i++) {
        $table[$i] = $number * $i;
    }
    return $table;
}
print_r(generateMultiplicationTable(5)); // Affiche la table de multiplication de 5

// 10. Fonction avec une condition complexe
function checkEligibility($age, $hasLicense) {
    if ($age >= 18 && $hasLicense) {
        return "Eligible";
    }
    return "Not Eligible";
}
echo checkEligibility(20, true); // Affiche "Eligible"
echo checkEligibility(16, false); // Affiche "Not Eligible"
?>







<?php
require 'partials/footer.php';
?>