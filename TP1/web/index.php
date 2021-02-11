<?php
require_once "../app/Controllers/ContactController.php";
require_once "../app/Models/ContactModel.php";
require_once "../Util/View.php";

$contactController = new \Controllers\ContactController();
$contactController->listContacts();

