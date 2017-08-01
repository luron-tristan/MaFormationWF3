<?php

/* bibliotheque/abonne_modif.html.twig */
class __TwigTemplate_682c83934c696c2987c53faef3878229c006d1872c6401e5711880ff82f1a3af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonne_modif.html.twig", 1);
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
        $__internal_8398cf11795c6573fb5370e7385847d5b75a4462a24fac639d3d2690c6451aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8398cf11795c6573fb5370e7385847d5b75a4462a24fac639d3d2690c6451aac->enter($__internal_8398cf11795c6573fb5370e7385847d5b75a4462a24fac639d3d2690c6451aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne_modif.html.twig"));

        $__internal_79713c0bfd1f9b492c43812c039220f6ab634e7e51132b4a93f9d6890221b919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79713c0bfd1f9b492c43812c039220f6ab634e7e51132b4a93f9d6890221b919->enter($__internal_79713c0bfd1f9b492c43812c039220f6ab634e7e51132b4a93f9d6890221b919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne_modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8398cf11795c6573fb5370e7385847d5b75a4462a24fac639d3d2690c6451aac->leave($__internal_8398cf11795c6573fb5370e7385847d5b75a4462a24fac639d3d2690c6451aac_prof);

        
        $__internal_79713c0bfd1f9b492c43812c039220f6ab634e7e51132b4a93f9d6890221b919->leave($__internal_79713c0bfd1f9b492c43812c039220f6ab634e7e51132b4a93f9d6890221b919_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d842ca1947a2bbee4187a8fc6a2e38b9e1a9fd194bdd2ddc87b8f2bb3b1c781b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d842ca1947a2bbee4187a8fc6a2e38b9e1a9fd194bdd2ddc87b8f2bb3b1c781b->enter($__internal_d842ca1947a2bbee4187a8fc6a2e38b9e1a9fd194bdd2ddc87b8f2bb3b1c781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e58ebf0ef7619e9a0995f8a456807c9300cb1f8cbfeb818144548f3b94992ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58ebf0ef7619e9a0995f8a456807c9300cb1f8cbfeb818144548f3b94992ae5->enter($__internal_e58ebf0ef7619e9a0995f8a456807c9300cb1f8cbfeb818144548f3b94992ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <form method='post'>
        Prénom : <input type='text' name='prenom' value ='";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "prenom", array()), "html", null, true);
        echo "'>
        <input type='submit' value='enregistrer'> 
    </form>
";
        
        $__internal_e58ebf0ef7619e9a0995f8a456807c9300cb1f8cbfeb818144548f3b94992ae5->leave($__internal_e58ebf0ef7619e9a0995f8a456807c9300cb1f8cbfeb818144548f3b94992ae5_prof);

        
        $__internal_d842ca1947a2bbee4187a8fc6a2e38b9e1a9fd194bdd2ddc87b8f2bb3b1c781b->leave($__internal_d842ca1947a2bbee4187a8fc6a2e38b9e1a9fd194bdd2ddc87b8f2bb3b1c781b_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonne_modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <form method='post'>
        Prénom : <input type='text' name='prenom' value ='{{abonne.prenom}}'>
        <input type='submit' value='enregistrer'> 
    </form>
{% endblock %}
", "bibliotheque/abonne_modif.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\bibliotheque\\abonne_modif.html.twig");
    }
}
