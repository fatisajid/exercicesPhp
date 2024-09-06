<?php

require 'partials/head.php';
?>
<h3> Exercice 1 : Afficher la date actuelle</h3>
<?php

echo date('d/m/Y H:i:s'); 



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
// Le timestamp représente le nombre de secondes écoulées depuis
//  le 1er janvier 1970 à 00:00:00 UTC (l'époque Unix).


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

<h1>correction class</h1>
<h1>Exercice les dates en PHP</h1>
    <h2>Exercice 1</h2>
<?php
    $today = date('d/m/Y h-i-s');
    echo "<p>$today</p>"
?>

    <h2>Exercice 2</h2>
<?php
    $dateDonne = '2024-08-08';
    $date = strtotime($dateDonne);
    $dateFormat = date("d-m-Y", $date);
    echo "<p>$dateFormat</p>";
?>

    <h2>Exercice 3</h2>
<?php
    $ageUser = '15-02-1990';

    $naissance = strtotime($ageUser);

    // On récupère le timestamp actuel : 
    $now = time();

    // On calcul la différence en années :
    $age = date('Y', $now) - date('Y', $naissance);

    echo "<p>Tu as $age ans</p>";
?>

    <h2>Exercice 4</h2>
<?php
    function validateDate($date)
    {
        $newDate = strtotime($date);
    
        if (!$newDate) {
            echo '<p>Date invalide!</p>';
        } else {
            echo '<p>Date valide!</p>';
        }
    }

    validateDate('22-05-1992');
    validateDate('33-06-2024');
?>

    <h2>Exercice 5</h2>
<?php
    $timestamp = time();
    echo "<p>Le timestamp actuel est : $timestamp.</p>";
    echo "<p>Le timestamp actuel est le nombre de secondes écoulées depuis le 1er janvier 1970 à 00:00:00 UTC (système UNIX). Cette date est appelée 'Epoch'. Le timestamp est souvent utilisé en programmation pour représenter un instant précis dans le temps de manière numérique.</p>";
?>

    <h2>Exercice 6</h2>
<?php
     echo "<p>La date correspondant au timestamp actuel est : </p>" . date('d/m/Y', $timestamp) . "<br>";
?>

    <h2>Exercice 7</h2>
<?php
    $timestamp_aujourdhui = time();
    $timestamp_semaine_apres = strtotime('+1 week', $timestamp_aujourdhui);
    $date_semaine_apres = date('d/m/Y', $timestamp_semaine_apres);
    echo "<p>La date dans une semaine sera : $date_semaine_apres</p>";
?>

    <h2>Exercice 8</h2>
<?php
    $dateJanvier = strtotime("01-01-2024");
    $dateAujourdhui = time();
    $dateCalc = $dateAujourdhui - $dateJanvier;
    $calcul = round($dateCalc / (60 * 60 * 24));
    
    echo "<p>$calcul jours se sont écoulé depuis le 1er janvier 2024</p>";
?>

<?php
require 'partials/footer.php';
?>