<?php

/* index.html.twig */
class __TwigTemplate_fbb2b49d7149a3fe2e5f866badddf3e8f9ac64f4165c565a82d13f501468ab61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
        $__internal_b18f24c1a66d066678ea1b408521505586aa536ca045d72dd26aa228f01c39bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18f24c1a66d066678ea1b408521505586aa536ca045d72dd26aa228f01c39bb->enter($__internal_b18f24c1a66d066678ea1b408521505586aa536ca045d72dd26aa228f01c39bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_8e78a9dff5401ce808500331c6ca5eb7bde00aba9a11d1ebc575e40603c363c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e78a9dff5401ce808500331c6ca5eb7bde00aba9a11d1ebc575e40603c363c1->enter($__internal_8e78a9dff5401ce808500331c6ca5eb7bde00aba9a11d1ebc575e40603c363c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18f24c1a66d066678ea1b408521505586aa536ca045d72dd26aa228f01c39bb->leave($__internal_b18f24c1a66d066678ea1b408521505586aa536ca045d72dd26aa228f01c39bb_prof);

        
        $__internal_8e78a9dff5401ce808500331c6ca5eb7bde00aba9a11d1ebc575e40603c363c1->leave($__internal_8e78a9dff5401ce808500331c6ca5eb7bde00aba9a11d1ebc575e40603c363c1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_63bb15ddc7b77926a63e557c156e46bc004b1bed5663c044069f5ccec68b7fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bb15ddc7b77926a63e557c156e46bc004b1bed5663c044069f5ccec68b7fe2->enter($__internal_63bb15ddc7b77926a63e557c156e46bc004b1bed5663c044069f5ccec68b7fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6c22ae55ff0d6e9817d60c7ace5ee2710733d08ffa05e984e8e2224ff90585e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c22ae55ff0d6e9817d60c7ace5ee2710733d08ffa05e984e8e2224ff90585e4->enter($__internal_6c22ae55ff0d6e9817d60c7ace5ee2710733d08ffa05e984e8e2224ff90585e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Welcome to your new Silex Application : ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "!
";
        
        $__internal_6c22ae55ff0d6e9817d60c7ace5ee2710733d08ffa05e984e8e2224ff90585e4->leave($__internal_6c22ae55ff0d6e9817d60c7ace5ee2710733d08ffa05e984e8e2224ff90585e4_prof);

        
        $__internal_63bb15ddc7b77926a63e557c156e46bc004b1bed5663c044069f5ccec68b7fe2->leave($__internal_63bb15ddc7b77926a63e557c156e46bc004b1bed5663c044069f5ccec68b7fe2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    Welcome to your new Silex Application : {{ nom }}!
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\index.html.twig");
    }
}
