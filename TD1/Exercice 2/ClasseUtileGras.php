<?php


class ClasseUtileGras extends ClasseUtile
{
    public static function formatterTexte(string $chaine): string
    {
        return "<b>".$chaine."</b><br>";
    }
}