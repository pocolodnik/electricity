<?php

/* AgentsView.html */
class __TwigTemplate_882e6511486fe59712ca2be596d01e230b34ec5a413c2972d540a4ccd8c5212d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "AgentsView.html", 1);
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
        echo "Agents";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "<h1>Agents</h1>
<div id=\"agents\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 9
            echo "    <div class=\"agent\">

        <table style=\"width: 440px; height: 25px;\">
            <tbody>
            <tr>
                <td style=\"width: 108px;\"><strong>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "id", []), "html", null, true);
            echo "</strong></td>
                <td style=\"width: 233px;\"><em>\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "name", []), "html", null, true);
            echo "\"</em></td>
                <td style=\"width: 81px;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "status", []), "html", null, true);
            echo "</td>
                <td style=\"width: 100px;\"><form action='/agent/view/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "id", []), "html", null, true);
            echo "' method='get'>
                    <button type=\"submit\">Edit</button>
                </form></td>
                <td style=\"width: 100px;\"><form action='/agent/new' method='get'>
                    <button type=\"submit\">Del</button>
                </form></td>
            </tr>
            </tbody>
        </table>

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    <div id=\"ButtonAdd\">
        <form action='/agent/new' method='get'>
            <br>
            <button type=\"submit\">Add</button>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AgentsView.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  50 => 9,  46 => 8,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AgentsView.html", "/home/alex/srv/electricity/app/templates/AgentsView.html");
    }
}
