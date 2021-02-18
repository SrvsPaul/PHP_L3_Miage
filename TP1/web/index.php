<?php
if (file_exists("../vendor/autoload.php"))
{
    require_once "../vendor/autoload.php";
}

//$contactController = new \Controllers\ContactController();
//$contactController->listContacts();
//call_user_func_array(array($contactController,"listContacts"),array("Jean","Pierre"));
$Route = new \Util\Route();

const ENVIRONMENT = "pop";
echo ENVIRONMENT;
