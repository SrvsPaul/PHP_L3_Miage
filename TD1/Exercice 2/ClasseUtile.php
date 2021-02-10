<?php


class ClasseUtile
{
    static public string $language = "html";

    public static function formatterTexte(string $chaine):string
    {
        if (self::$language =="html")
        {
            return "<i>".$chaine."</i><br>";
        }
        return "Sorry, ça va pas pouvoir le faire ! ";
    }
}