<?php


class Template implements ITemplate
{
    private array $vars;

    public function setVariable($name, $var)
    {
        $this->vars[$name]=$var;// TODO: Implement setVariable() method.
    }

    public function getHtml($template)
    {
        foreach ($this->vars as $key=>$value){
            $template = str_replace('{'.$key.'}',"$value",$template);
        }
        return $template;
    }

    /**
     * @return array
     */
    public function getVars(): array
    {
        return $this->vars;
    }
}