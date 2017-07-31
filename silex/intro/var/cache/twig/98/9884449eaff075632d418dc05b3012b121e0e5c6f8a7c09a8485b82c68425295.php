<?php

/* included.html.twig */
class __TwigTemplate_a032fb08530b4e86cba696d5278e63129e917423bc3ed4abdfd9bdd3d5f733e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7a50cb021130d2ea4edcdc1f5cc537e390b539c1733fc40e94f19ac2d566903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a50cb021130d2ea4edcdc1f5cc537e390b539c1733fc40e94f19ac2d566903->enter($__internal_b7a50cb021130d2ea4edcdc1f5cc537e390b539c1733fc40e94f19ac2d566903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "included.html.twig"));

        $__internal_f573dba1170015f2c1fa65a4fcebdd894ebf406f1371870fe4493e6265eb49ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f573dba1170015f2c1fa65a4fcebdd894ebf406f1371870fe4493e6265eb49ef->enter($__internal_f573dba1170015f2c1fa65a4fcebdd894ebf406f1371870fe4493e6265eb49ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "included.html.twig"));

        // line 1
        echo "<p>Fichier inclus</p>

<p> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "html", null, true);
        echo "</p>

<p> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["bla"]) ? $context["bla"] : $this->getContext($context, "bla")), "html", null, true);
        echo "</p>";
        
        $__internal_b7a50cb021130d2ea4edcdc1f5cc537e390b539c1733fc40e94f19ac2d566903->leave($__internal_b7a50cb021130d2ea4edcdc1f5cc537e390b539c1733fc40e94f19ac2d566903_prof);

        
        $__internal_f573dba1170015f2c1fa65a4fcebdd894ebf406f1371870fe4493e6265eb49ef->leave($__internal_f573dba1170015f2c1fa65a4fcebdd894ebf406f1371870fe4493e6265eb49ef_prof);

    }

    public function getTemplateName()
    {
        return "included.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Fichier inclus</p>

<p> {{ var }}</p>

<p> {{ bla }}</p>", "included.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\included.html.twig");
    }
}
