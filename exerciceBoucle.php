<?php

require 'partials/head.php';
?>

<h3>Exercice 1 : Boucle while basique</h3>
<?php

$i = 0;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
    $i++;
}

?>

<h3>Exercice 2 : Générer une liste d'années avec une boucle while</h3>

<?php
/** Objectif : Afficher les années de 2000 à l'année actuelle
 *  (qui doit être incluse) dans une liste non ordonnée (<ul>)
 */

$annee = 2000;
$anneeEncour = date("Y");
echo "<ul>";
while ($annee <= $anneeEncour) { //ALORS QUE
    echo "<li>" . $annee . "</li>";
    $annee++;
}
echo "</ul>";
?>

<h3>Exercice 3 : Boucle do...while</h3>

<?php

$num = 3;
do { //FAIRE
    echo $num . "<br>";
    $num += 3;
} while ($num < 30); //PENDANT

?>

<h3>Exercice 4 : Boucle for</h3>

<?php

$number = 7;
for ($i = 1; $i <= 10; $i++) { //POUR
    echo "$number x $i = " . ($number * $i) . "<br>";
}
?>

<h3>Exercice 5 : Boucles imbriquées pour créer une grille</h3>

<?php

echo "<table border='1'>";
for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 5; $col++) {
        echo "<td>($row, $col)</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

<h3>Exercice 6 : foreach pour un tableau associatif</h3>

<?php
$information = [
    "prenom" => "Sajid",
    "nom" => "Salah",
    "email" => "sajid.salah@gmail.com",
    "age" => 5
];

foreach ($information as $cle => $valeur) { //POUR CHAQUE
    if ($cle == "email") {
        echo "<p>$cle : <a href= $valeur>$valeur</a></p>";
    } else {
        echo "<p>$cle: $valeur</p>";
    }
}
?>

<h3>Exercice 7 : Foreach avec des clés personnalisées</h3>

<?php

$menuNavigation = [
    "Accueil" => "/index.php",
    "produits" => "/produit.php",
    "contact" => "/contact.php"
];

foreach ($menuNavigation as $title => $link) {
    echo "<a href='$link'>$title</a><br>";
}
?>

<h3>Exercice 8 : Boucles imbriquées et conditions</h3>

<?php

echo "<table border='1'>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {
        $randomNum = rand(1, 100);
        $bgColor = ($randomNum % 2 == 0) ? "style='background-color:green;'" : "";
        echo "<td $bgColor>$randomNum</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
<h3>Exercice 9 : Generation d'un calendrier</h3>

<?php

echo "<table border='1'><tr>";
for ($day = 1; $day <= 31; $day++) {
    $weekend = ($day % 7 == 6 || $day % 7 == 0) ? "style='color:red;'" : "";
    echo "<td $weekend>$day</td>";
    if ($day % 7 == 0) {
        echo "</tr><tr>";
    }
}
echo "</tr></table>";

?>
<h3>Exercice 10 : Tableau de tableaux</h3>

<?php

$people = [
    ["prenom" => "Alice", "nom" => "Martin", "age" => 25],
    ["prenom" => "Bob", "nom" => "Durand", "age" => 30],
    ["prenom" => "Charlie", "nom" => "Lemoine", "age" => 35]
];

echo "<ol>";
foreach ($people as $person) {
    echo "<li>Personne</li><ul>";
    foreach ($person as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}
echo "</ol>";

?>

<h1>correction class</h1>
<h1>Exercice les boucles</h1>
    <h2>Exercice 1</h2>
<?php
    $i = 0;

    while ($i <= 20) {
        if ($i % 2 == 0) {
            echo "<p>$i</p>"; 
        }
        $i++;  
    }
?>

<h2>Exercice 2</h2>
<?php
    $annee_actuelle = date("Y");

    echo "<ul>";

    for ($annee = 2000; $annee <= $annee_actuelle; $annee++) {
        echo "<li>$annee</li>";
    }

    echo "</ul>";


    $currentAnnee = date("Y");
    $annee = 2000;

    echo "<ul>";
    while ($annee <= $currentAnnee) {
        echo "<li>" . $annee . "</li>";
        $annee++;
    }
    echo "</ul>";

?>

    <h2>Exercice 3</h2>
<?php
    $resultat = 0;
    do{
        echo "<p>$resultat</p>";
        $i = 3;
        $resultat+= $i;
    }while( $resultat < 30);
?>

    <h2>Exercice 4</h2>
<?php
    $num = 2;
    for($i = 0; $i <= 10; $i++){
        $valeur = $num * $i;
        echo "<p>$valeur</p>";
    };
?>

    <h2>Exercice 5</h2>
<?php
    echo "<table border='1'><tbody>";
    for ($row = 1; $row <= 5; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 5; $col++) {
            echo "<td><p>($row,$col)</p></td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
?>

    <h2>Exercice 6</h2>
<?php
    $information = [
        "prenom" => "Sajid",
        "nom" => "Salah",
        "email" => "sajid.salah@gmail.com",
        "age" => 5
    ];

    foreach ($information as $cle => $valeur) { //POUR CHAQUE
        if ($cle == "email") {
            echo "<p>$cle : <a href= $valeur>$valeur</a></p>";
        } else {
            echo "<p>$cle: $valeur</p>";
        }
    }
?>

    <h2>Exercice 7</h2>
<?php
    $menu = [
        'accueil' => 'index.php',
        'produits' => 'produits.php',
        'contact' => 'contact.php'
    ];

    foreach ($menu as $title => $link) {
        echo "<a href='$link'>$title</a><br>";
    }
?>

    <h2>Exercice 8</h2>
<?php
    echo '<table style="border: 1px solid black; padding: 20px;"><tbody">';
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 10; $j++) {
            // random_int : genere un nombre entier aleatoire entre les valeurs passées en paramètres (1,100);
            $number = random_int(1, 100);
            // Ajoute un 0 devant les chiffres en dessous de 10;
            $zero = sprintf("%02d", $number);
            if($zero %2 == 0 ){
                echo "<td style='border: 2px solid black; padding: 5px; text-align: center; background-color: green'> $zero </td>";
            }else {
                echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'> $zero </td>";
            } 
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
?>

    <h2>Exercice 9</h2>
<?php

$mois = ['janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];

echo '<table border="1" cellspacing="0" cellpadding="5">';

// Boucle pour chaque mois
for ($i = 0; $i < 12; $i++) {
    echo "<tr><th>$mois[$i]</th>";

    // Boucle pour les jours du mois (jusqu'à 31 jours)
    for ($j = 1; $j <= 31; $j++) {
        // Calcule le numéro du jour de la semaine pour le jour actuel
        $dayOfWeek = ($j - 1) % 7;

        // Appliquer le style rouge aux jours qui sont les 6e et 7e jours de chaque semaine
        if ($dayOfWeek == 5 || $dayOfWeek == 6) {
            echo "<td style='color: red;'>" . sprintf('%02d', $j) . "</td>";
        } else {
            echo "<td>" . sprintf('%02d', $j) . "</td>";
        }
    }

    echo '</tr>';
}

echo '</table>';
?>

<h2>Exercice 10</h2>
<?php
     $personnes = array(
        array(
            'prenom' => 'Vera',
            'nom' => 'Dos Santos',
            'age' => 25
        ),
        array(
            'prenom' => 'Sarah',
            'nom' => 'Ghobrial',
            'age' => 22
        ),
        array(
            'prenom' => 'Dupond',
            'nom' => 'de ligonnes',
            'age' => 90
        )
    );

    echo "<ol>";

    foreach ($personnes as $identite => $personne) {
        echo "<li>Personne " . ($identite + 1) . "</li>";
        echo "<ul>";
            foreach ($personne as $cle => $valeur) {
                echo "<li>$cle : $valeur</li>";
            }
        echo "</ul>";
    }

    echo "</ol>";
?>


<?php
require 'partials/footer.php';
?>