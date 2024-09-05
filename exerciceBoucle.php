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
while ($annee <= $anneeEncour) {
    echo "<li>" . $annee . "</li>";
    $annee++;
}
echo "</ul>";
?>

<h3>Exercice 3 : Boucle do...while</h3>

<?php

$num = 3;
do {
    echo $num . "<br>";
    $num += 3;
} while ($num < 30);

?>

<h3>Exercice 4 : Boucle for</h3>

<?php


$number = 5; // Remplacer 5 par le nombre voulu
for ($i = 1; $i <= 10; $i++) {
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

$person = [
    "prenom" => "Jean",
    "nom" => "Dupont",
    "email" => "jean.dupont@example.com",
    "age" => 30
];

foreach ($person as $key => $value) {
    if ($key == "email") {
        echo "<p>$key : <a href='mailto:$value'>$value</a></p>";
    } else {
        echo "<p>$key : $value</p>";
    }
}
?>
<h3>Exercice 7 : Foreach avec des clés personnalisées</h3>

<?php

$menu = [
    "Accueil" => "/accueil.html",
    "Produits" => "/produits.html",
    "Contact" => "/contact.html"
];

foreach ($menu as $title => $link) {
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


<?php
require 'partials/footer.php';
?>