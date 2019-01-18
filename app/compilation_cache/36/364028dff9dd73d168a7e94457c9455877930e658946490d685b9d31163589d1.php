<?php

/* base.html */
class __TwigTemplate_fff5d6d2f4a4c5b3ceaf17315392ed82e311a2c06ab3f5c001f59d33b31ee5ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<div id=\"content\">
    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "</div>

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  52 => 9,  47 => 5,  40 => 11,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "/home/alex/srv/electricity/app/templates/base.html");
    }
}
