<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_fdd05f5f8bf44ac0cf6d53997d009b65c951345d79b91384bf2dfaef12773177 extends Twig_Template
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
        $__internal_ee37a889c1c6ab1a194f8f1e56bb55e878b257cddbddac0a5f9c3b098bd873b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee37a889c1c6ab1a194f8f1e56bb55e878b257cddbddac0a5f9c3b098bd873b3->enter($__internal_ee37a889c1c6ab1a194f8f1e56bb55e878b257cddbddac0a5f9c3b098bd873b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_404ef18184c375b2a0640c54c57ae80026b957e49a4b37b27eac778d310b5f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404ef18184c375b2a0640c54c57ae80026b957e49a4b37b27eac778d310b5f2a->enter($__internal_404ef18184c375b2a0640c54c57ae80026b957e49a4b37b27eac778d310b5f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ee37a889c1c6ab1a194f8f1e56bb55e878b257cddbddac0a5f9c3b098bd873b3->leave($__internal_ee37a889c1c6ab1a194f8f1e56bb55e878b257cddbddac0a5f9c3b098bd873b3_prof);

        
        $__internal_404ef18184c375b2a0640c54c57ae80026b957e49a4b37b27eac778d310b5f2a->leave($__internal_404ef18184c375b2a0640c54c57ae80026b957e49a4b37b27eac778d310b5f2a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
