<?php
interface ITemplate
{
    public function setVariable($name,$var);
    public function getHtml($template);
}
