<?php

require('Personne.php');
require('Etudiant.php');


$Thomas = new Personne("Thomas","LeFilou","20");
$Maloya = new Etudiant("Maloya","Locomotive","21","001");

//test
echo '<p>' . $Maloya . '</p>';
?>