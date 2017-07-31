<?php

/* test.html.twig */
class __TwigTemplate_d302aa49f3fccf669d9c77ea7c7984ddf714a1b8c5f3a7cec46196a03b2ed902 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "test.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aceed0baa6ce07d2efd6890851c6042523f9b342054ba9507cbd471276ec8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aceed0baa6ce07d2efd6890851c6042523f9b342054ba9507cbd471276ec8a4->enter($__internal_0aceed0baa6ce07d2efd6890851c6042523f9b342054ba9507cbd471276ec8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_5b19281bc599adcd1583c669435d96d3d5f6ac86bc38d468875cc5dbf982a696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b19281bc599adcd1583c669435d96d3d5f6ac86bc38d468875cc5dbf982a696->enter($__internal_5b19281bc599adcd1583c669435d96d3d5f6ac86bc38d468875cc5dbf982a696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aceed0baa6ce07d2efd6890851c6042523f9b342054ba9507cbd471276ec8a4->leave($__internal_0aceed0baa6ce07d2efd6890851c6042523f9b342054ba9507cbd471276ec8a4_prof);

        
        $__internal_5b19281bc599adcd1583c669435d96d3d5f6ac86bc38d468875cc5dbf982a696->leave($__internal_5b19281bc599adcd1583c669435d96d3d5f6ac86bc38d468875cc5dbf982a696_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_707f16b4d0d63d2061c5c9183d15b9bd8e90496a55d5eb40277c3fe2204f8679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707f16b4d0d63d2061c5c9183d15b9bd8e90496a55d5eb40277c3fe2204f8679->enter($__internal_707f16b4d0d63d2061c5c9183d15b9bd8e90496a55d5eb40277c3fe2204f8679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dc135ab8664995b060c9be40dfec1bd390399d5cf75eefdf40e6aebd4cc9250f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc135ab8664995b060c9be40dfec1bd390399d5cf75eefdf40e6aebd4cc9250f->enter($__internal_dc135ab8664995b060c9be40dfec1bd390399d5cf75eefdf40e6aebd4cc9250f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <p class='test'><b>Page de test</b></p>
";
        
        $__internal_dc135ab8664995b060c9be40dfec1bd390399d5cf75eefdf40e6aebd4cc9250f->leave($__internal_dc135ab8664995b060c9be40dfec1bd390399d5cf75eefdf40e6aebd4cc9250f_prof);

        
        $__internal_707f16b4d0d63d2061c5c9183d15b9bd8e90496a55d5eb40277c3fe2204f8679->leave($__internal_707f16b4d0d63d2061c5c9183d15b9bd8e90496a55d5eb40277c3fe2204f8679_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c25a2b0bafbc794b24e8a2fb9d6bfdfdec1a7f4f4dbf796f3482318208c4b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c25a2b0bafbc794b24e8a2fb9d6bfdfdec1a7f4f4dbf796f3482318208c4b99->enter($__internal_2c25a2b0bafbc794b24e8a2fb9d6bfdfdec1a7f4f4dbf796f3482318208c4b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94e5115fc75a13d6b69d75f714ccf95f989868d79d05de6881f5ca07fbf4d27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e5115fc75a13d6b69d75f714ccf95f989868d79d05de6881f5ca07fbf4d27c->enter($__internal_94e5115fc75a13d6b69d75f714ccf95f989868d79d05de6881f5ca07fbf4d27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Test";
        
        $__internal_94e5115fc75a13d6b69d75f714ccf95f989868d79d05de6881f5ca07fbf4d27c->leave($__internal_94e5115fc75a13d6b69d75f714ccf95f989868d79d05de6881f5ca07fbf4d27c_prof);

        
        $__internal_2c25a2b0bafbc794b24e8a2fb9d6bfdfdec1a7f4f4dbf796f3482318208c4b99->leave($__internal_2c25a2b0bafbc794b24e8a2fb9d6bfdfdec1a7f4f4dbf796f3482318208c4b99_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# La page hérite du layout #}
{% extends \"layout.html.twig\" %}

{# Surcharge du bloc \"content\" défini dans le layout #}
{% block content %}
    <p class='test'><b>Page de test</b></p>
{% endblock %}

{# Surcharge du bloc \"title\" défini dans le layout #}
{% block title 'Test' %}
{# 
équivaut à {% block title %}Test{%endblock%}
#}
", "test.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\test.html.twig");
    }
}
