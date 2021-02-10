<?php
require ('ITemplate.php');
require('Template.php');


$template = new Template();
$template->setVariable("nom","Leclercq");
$template->setVariable("prenom"," Baptiste");
$template->setVariable("race","MJ sans Story");

echo $template->getHtml("<p>Bonjour{nom} {prenom}, voice ta catégorie : {race}</p>");