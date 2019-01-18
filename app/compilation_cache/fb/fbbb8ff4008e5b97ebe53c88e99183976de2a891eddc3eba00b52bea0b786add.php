<?php

/* AgentNew.html */
class __TwigTemplate_92b2f3e324a40bb8be821cc1aaba64fa4ed9769fcdd696c0d36b96a1d5036a22 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "AgentNew.html", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo "Add new Agent";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "<form action='/agent/save' method='post'>
    <label for=\"name\">AgentName:</label>
    <input type=\"text\" name=\"name\">
    <br>
    <label for=\"status\">AgentStatus:</label>
    <input type=\"text\" name=\"status\">
    <br>
    <br>
    <button type=\"submit\">Save</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "AgentNew.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AgentNew.html", "/home/alex/srv/electricity/app/templates/AgentNew.html");
    }
}
