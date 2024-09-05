<?php

require 'partials/head.php';
?>

<?php

/** Exercice 1 : Afficher la date actuelle
 * 
 * Objectif : Afficher la date sous le format 'jour/mois/annee' suivi de 'heure:minute:secondes'
 * 
 */

echo date('d/m/Y H:i:s');  // Affiche la date au format 'jour/mois/année heure:minute:secondes'


/** Exercice 2 : Formater une date
 * 
 * Objectif : Transformer la date '2024-08-08' en format de type 08/08/2024
 * 
 */

$date = '2024-08-08';
echo date('d/m/Y', strtotime($date));  // Utilise strtotime pour transformer la date


/** Exercice 3 : Calculer l'âge d'une personne
 * 
 * Objectif : Ecrire un script qui calcul l'âge d'une personne née le '15-02-1990'
 * 
 */

$birthdate = '15-02-1990';
$birthDateTimestamp = strtotime($birthdate);
$age = date('Y') - date('Y', $birthDateTimestamp);
if (date('md', $birthDateTimestamp) > date('md')) {
    $age--;  // Ajustement si la personne n'a pas encore fêté son anniversaire cette année
}
echo "L'âge de la personne est : $age ans";


/** Exercice 4 : Valider une date
 * 
 * Objectif : Ecrire une fonction qui valide si une date donnée sous la forme 'dd-mm-yyyy' est valide ou non
 * 
 */

function validerDate($date) {
    $timestamp = strtotime($date);
    return $timestamp && date('d-m-Y', $timestamp) === $date;
}

$dateTest = '29-02-2024';  // Tester avec une date
if (validerDate($dateTest)) {
    echo "La date $dateTest est valide.";
} else {
    echo "La date $dateTest n'est pas valide.";
}


/** Exercice 5 : Afficher le timestamp actuel
 * 
 * Objectif : Afficher le timestamp actuel et expliquer sa signification
 * 
 */

$timestamp = time();
echo "Le timestamp actuel est : $timestamp";
// Le timestamp représente le nombre de secondes écoulées depuis le 1er janvier 1970 à 00:00:00 UTC (l'époque Unix).


/** Exercice 6 : Convertir timestamp en date
 * 
 * Objectif : Convertir le timestamp actuel en date lisible sous le format 'jour/mois/annee'
 * 
 */

echo date('d/m/Y', time());  // Convertit le timestamp actuel en date lisible sous le format jour/mois/année


/** Exercice 7 : Date dans une semaine
 * 
 * Objectif : Afficher la date qui sera exactement une semaine après la date d'aujourd'hui
 * 
 */

echo date('d/m/Y', strtotime('+1 week'));  // Affiche la date exactement une semaine après aujourd'hui


/** Exercice 8 : Nombre de jours entre deux dates (BONUS)
 * 
 * Objectif : Calculer le nombre de jours entre le 01-01-2024 et aujourd'hui
 * 
 */

$date1 = strtotime('01-01-2024');
$date2 = time();
$diffSeconds = $date1 - $date2;
$daysDiff = floor($diffSeconds / (60 * 60 * 24));  // Conversion des secondes en jours
echo "Il reste $daysDiff jours entre le 01-01-2024 et aujourd'hui.";

?>

<?php
require 'partials/footer.php';
?>