<?php

/* bibliotheque/abonne_ajout.html.twig */
class __TwigTemplate_9378e94523639fc3ebb6c5fb93aefbd687ec2b0ea1f0c640d3c2598fa073ba4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonne_ajout.html.twig", 1);
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
        $__internal_15f03b60d10e11bd1dfb99d363592944878ad1f47010b7b6e8f99635daab6ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f03b60d10e11bd1dfb99d363592944878ad1f47010b7b6e8f99635daab6ad0->enter($__internal_15f03b60d10e11bd1dfb99d363592944878ad1f47010b7b6e8f99635daab6ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne_ajout.html.twig"));

        $__internal_073b66429fe8fa2d297e80866752502b20355a760555046f81720fae95b84297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073b66429fe8fa2d297e80866752502b20355a760555046f81720fae95b84297->enter($__internal_073b66429fe8fa2d297e80866752502b20355a760555046f81720fae95b84297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne_ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f03b60d10e11bd1dfb99d363592944878ad1f47010b7b6e8f99635daab6ad0->leave($__internal_15f03b60d10e11bd1dfb99d363592944878ad1f47010b7b6e8f99635daab6ad0_prof);

        
        $__internal_073b66429fe8fa2d297e80866752502b20355a760555046f81720fae95b84297->leave($__internal_073b66429fe8fa2d297e80866752502b20355a760555046f81720fae95b84297_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3be6eda20969331274c39052a2d28d7b4d61054b9f98b97dd74842e4a955d170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be6eda20969331274c39052a2d28d7b4d61054b9f98b97dd74842e4a955d170->enter($__internal_3be6eda20969331274c39052a2d28d7b4d61054b9f98b97dd74842e4a955d170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4a6ce3a3be6c7184d602227237e2c6e9edc3969bf4f1375480474d7544ce1add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6ce3a3be6c7184d602227237e2c6e9edc3969bf4f1375480474d7544ce1add->enter($__internal_4a6ce3a3be6c7184d602227237e2c6e9edc3969bf4f1375480474d7544ce1add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <form method='post'>
        Prénom : <input type='text' name='prenom'>
        <input type='submit' value='enregistrer'> 
    </form>
";
        
        $__internal_4a6ce3a3be6c7184d602227237e2c6e9edc3969bf4f1375480474d7544ce1add->leave($__internal_4a6ce3a3be6c7184d602227237e2c6e9edc3969bf4f1375480474d7544ce1add_prof);

        
        $__internal_3be6eda20969331274c39052a2d28d7b4d61054b9f98b97dd74842e4a955d170->leave($__internal_3be6eda20969331274c39052a2d28d7b4d61054b9f98b97dd74842e4a955d170_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonne_ajout.html.twig";
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
    <form method='post'>
        Prénom : <input type='text' name='prenom'>
        <input type='submit' value='enregistrer'> 
    </form>
{% endblock %}
", "bibliotheque/abonne_ajout.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\bibliotheque\\abonne_ajout.html.twig");
    }
}
