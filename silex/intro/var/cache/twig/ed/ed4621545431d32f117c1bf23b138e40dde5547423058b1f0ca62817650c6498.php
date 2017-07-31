<?php

/* helloWorld.html.twig */
class __TwigTemplate_72254b9771a683fd90f5f383a20c2ba3dd045d81f537322e88c6daa0d8870e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "helloWorld.html.twig", 1);
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
        $__internal_abcf1a1c25af855791ca9ddc26198eea2bae954c18a86d999e450eb7217ca92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcf1a1c25af855791ca9ddc26198eea2bae954c18a86d999e450eb7217ca92c->enter($__internal_abcf1a1c25af855791ca9ddc26198eea2bae954c18a86d999e450eb7217ca92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloWorld.html.twig"));

        $__internal_3396df386dbd33d464a9d0564cd40d7c0743b78a478baf31260789c2af5a9649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3396df386dbd33d464a9d0564cd40d7c0743b78a478baf31260789c2af5a9649->enter($__internal_3396df386dbd33d464a9d0564cd40d7c0743b78a478baf31260789c2af5a9649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "helloWorld.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abcf1a1c25af855791ca9ddc26198eea2bae954c18a86d999e450eb7217ca92c->leave($__internal_abcf1a1c25af855791ca9ddc26198eea2bae954c18a86d999e450eb7217ca92c_prof);

        
        $__internal_3396df386dbd33d464a9d0564cd40d7c0743b78a478baf31260789c2af5a9649->leave($__internal_3396df386dbd33d464a9d0564cd40d7c0743b78a478baf31260789c2af5a9649_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0187188beddd3a60a00be0d0b762f50e566270f4ac6f82d21329737c3f22a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0187188beddd3a60a00be0d0b762f50e566270f4ac6f82d21329737c3f22a45->enter($__internal_c0187188beddd3a60a00be0d0b762f50e566270f4ac6f82d21329737c3f22a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b48369bf163c91f4bd412ff76d44bac85e3e49523f93c05e771ce6a67ec58a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48369bf163c91f4bd412ff76d44bac85e3e49523f93c05e771ce6a67ec58a4a->enter($__internal_b48369bf163c91f4bd412ff76d44bac85e3e49523f93c05e771ce6a67ec58a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <p>Hello World !</p>
    ";
        // line 6
        echo "    <p><a href =\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hello", array("name" => "Tristan"));
        echo "\">Vers la page Hello Tristan</a></p>
";
        
        $__internal_b48369bf163c91f4bd412ff76d44bac85e3e49523f93c05e771ce6a67ec58a4a->leave($__internal_b48369bf163c91f4bd412ff76d44bac85e3e49523f93c05e771ce6a67ec58a4a_prof);

        
        $__internal_c0187188beddd3a60a00be0d0b762f50e566270f4ac6f82d21329737c3f22a45->leave($__internal_c0187188beddd3a60a00be0d0b762f50e566270f4ac6f82d21329737c3f22a45_prof);

    }

    public function getTemplateName()
    {
        return "helloWorld.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <p>Hello World !</p>
    {# génère le chemin d'une route avec une variable #}
    <p><a href =\"{{path('hello', {name: 'Tristan'})}}\">Vers la page Hello Tristan</a></p>
{% endblock %}
", "helloWorld.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\helloWorld.html.twig");
    }
}
