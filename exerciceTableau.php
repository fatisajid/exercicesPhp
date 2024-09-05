<?php
require 'partials/head.php';
?>

<h2>exo1</h2><br>
<?php
// Déclarez un tableau avec vos cinq films préférés(ex film:"Inception","The Matrix","Interstellar","The Dark Knight","Fight Club")

$films = ["film1" , "film2", "film3", "film4" , "film5"];
// Affichez chaque film sur une ligne séparée
foreach ($films as $valeur){
    echo $valeur . "<br>";
}
?>

<h2>exo2</h2><br>
<?php
// Créez un tableau avec quelques fruits
$fruits = ["Ananas", "Fraise", "Mangue", "Banane"];
// Ajoutez un fruit à la fin du tableau
$fruits[] = "Kiwi";
// Supprimez le premier fruit du tableau
array_shift($fruits);
// Affichez le tableau modifié avec print-r
echo print_r($fruits) . "<br>";
 // Affichez le tableau modifié avec foreach   
foreach ($fruits as $valeur) {
    echo $valeur . "<br>";
}
?>

<h2>exo3</h2><br>
<?php
// Créez un tableau associatif avec prénom, nom, et âge
$information =[
    "prenom" => "Sajid",
     "nom" => "Salah",
      "age" => 5
];
// Affichez chaque information avec une phrase descriptive
echo "<p> Mon prenom est " . $information["prenom"] . " </P>";
echo "<p> Mon nom est " . $information["nom"] . "</p>";
echo "<p> Mon age est " . $information["age"] . " ans </p>";
?>

<h2>exo4</h2><br>
<?php
// Créez un tableau avec plusieurs villes
$villes = ["Rabat", "kenitra", "Marrakesh", "Casablanca", "Agadir", "Tanger"];

// Affichez le nombre d'éléments dans le tableau avec count et sizeof
echo "<p> Nombre de villes : " . count($villes) . "</p> <br>";
echo "<p> Nombre de villes : " . sizeof($villes) . "</p> <br>";

?>

<h2>exo5</h2><br>
<?php
// Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants
$etudiants = [
    ["prenom" => "vera", "nom" => "Dos Santos", "note" => 5],
    ["prenom" => "Fatima", "nom" => "Salah", "note" => 19],
    ["prenom" => "Khaoula", "nom" => "Jouini", "note" => 13]   
];

// Affichez la note du premier étudiant
echo "<p> La note de " . $etudiants[0]['prenom'] ." est :" . $etudiants[0]['note'] . "</p>";
?>

<h2>exo6</h2><br>
<?php
// Utilisez le tableau multidimensionnel de l'exercice précédent
$etudiants = [
    ["prénom" => "vera", "nom" => "DosAntos", "note" => 5],
    ["prénom" => "Fatima", "nom" => "Salah", "note" => 19],
    ["prénom" => "Khaoula", "nom" => "Jouini", "note" => 17] 
   
];
// Changez la note du deuxième étudiant
$etudiants[1]["note"] = 20;


// Affichez toutes les informations du tableau modifié
foreach ($etudiants as $valeur) {
    echo $valeur["prénom"] . " " . $valeur["nom"] . " a obtenu la note de " . $valeur["note"] . "<br>";
}
?>

<h2>exo7</h2><br>
<?php
// Créez un tableau avec les mois de l'année
$mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

// Utilisez une boucle for pour afficher chaque mois
for ($i = 0; $i < count($mois); $i++) {
    echo $mois[$i] . "<br>";
}
?>

<h2>exo8</h2><br>
<?php
// Créez un tableau associatif avec des noms d'animaux et leurs bruits
$animaux = [
    "chien" => "aboi",
    "chat" => "miaul",
    "coq" => "cocorico"
];

// Utilisez une boucle foreach pour afficher chaque animal et son bruit
foreach ($animaux as $valeur => $indice) {
    echo "L'animal " . $valeur . " fait " . $indice . "<br>";
}
?>

<h2>exo9</h2><br>
<?php
// Créez un tableau avec des numéros aléatoires
$numeros = [6, 35, 61, 70, 45, 42, 40];

// Cherchez si un numéro spécifique est présent dans le tableau
$numSpecifique = 61;

if (in_array($numSpecifique, $numeros)) {
    echo "<p> Le numéro " . $numSpecifique . " est présent dans le tableau.</p><br>";
} else {
    echo "<p> Le numéro " . $numSpecifique . " n'est pas présent dans le tableau.</p><br>";
}
?>


<h2>exo10</h2><br>

<?php
$prenoms = ["Sajid", "Fatima", "Salma"];
$noms = ["Sahmoudi", "Salah", "Dupont"];

// Fusionnez ces deux tableaux pour créer un tableau de noms complets
$nomsComplets = array_map(function ($prenom, $nom) {
    return $prenom . " " . $nom;
}, $prenoms, $noms);

// Affichez chaque nom complet sur une ligne
foreach ($nomsComplets as $nomComplet) {

    echo $nomComplet . "<br>";
}

?>


<?php
require 'partials/footer.php';
?>