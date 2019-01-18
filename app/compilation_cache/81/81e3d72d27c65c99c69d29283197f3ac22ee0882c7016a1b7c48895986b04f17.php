<?php

/* AgentEdit.html */
class __TwigTemplate_0ed62155a770697828c9548ef73ef1e8c58bcd16d95951a7b1406fb1becd25ee extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "AgentEdit.html", 1);
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
        echo "Editing Agent ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", []), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "<h1>Editing Agent with Id #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "id", []), "html", null, true);
        echo "</h1>
<form action='/agent/overwrite' method='post'>
    <label for=\"name\">AgentName:</label>
    <input type=\"text\" name=\"name\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "name", []), "html", null, true);
        echo "\">
    <br>
    <label for=\"status\">AgentStatus:</label>
    <input type=\"text\" name=\"status\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["agent"] ?? null), "status", []), "html", null, true);
        echo "\">
    <br>
    <br>
    <button type=\"submit\">Save</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "AgentEdit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  50 => 9,  43 => 6,  40 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AgentEdit.html", "/home/alex/srv/electricity/app/templates/AgentEdit.html");
    }
}
