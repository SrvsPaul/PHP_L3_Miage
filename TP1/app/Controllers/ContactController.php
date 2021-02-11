<?php

namespace Controllers;

use Models\ContactModel;
use Util\View;

class ContactController
{
    public function listContacts()
    {
        $contact = new ContactModel();
        $contacts = $contact->getContacts();
        $nom = new View();
        $nom->render("contacts/index",["contacts" => $contacts]);
    }

}