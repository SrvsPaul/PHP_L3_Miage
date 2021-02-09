<?php
require('Etudiant.php');
require('Exercice1.php');

$Thomas = new Personne("Thomas","LeFilou",20);
$Maloya = new Etudiant(20,"Maloya","Locomotive","001");

//test
echo '<p>' . $Maloya . '</p>';
?>