<?php

/* bibliotheque/abonne.html.twig */
class __TwigTemplate_3449fd484c5ccbd8686b2842b9ecadaf8f7398476fc1f4ed928bbebef402b526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonne.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    Id abonne : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : null), "id_abonne", array()), "html", null, true);
        echo "<br>
    Prénom : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : null), "prenom", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bibliotheque/abonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bibliotheque/abonne.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\bibliotheque\\abonne.html.twig");
    }
}
