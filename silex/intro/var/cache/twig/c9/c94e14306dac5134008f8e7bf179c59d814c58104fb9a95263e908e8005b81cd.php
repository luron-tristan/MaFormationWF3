<?php

/* hello.html.twig */
class __TwigTemplate_8429a7437653f49caa9499ed6baf5e9112183be2b33f1cf89ec817952385146c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "hello.html.twig", 1);
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
        $__internal_c5a85b42e566de55f8a2c1ad3420a8f9a7f677b36dc7aac89344e085e05043c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a85b42e566de55f8a2c1ad3420a8f9a7f677b36dc7aac89344e085e05043c4->enter($__internal_c5a85b42e566de55f8a2c1ad3420a8f9a7f677b36dc7aac89344e085e05043c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $__internal_6e3ffbd580ac4e3512764c953c553630179da01869747a76f2a9aa5a102dde1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3ffbd580ac4e3512764c953c553630179da01869747a76f2a9aa5a102dde1a->enter($__internal_6e3ffbd580ac4e3512764c953c553630179da01869747a76f2a9aa5a102dde1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5a85b42e566de55f8a2c1ad3420a8f9a7f677b36dc7aac89344e085e05043c4->leave($__internal_c5a85b42e566de55f8a2c1ad3420a8f9a7f677b36dc7aac89344e085e05043c4_prof);

        
        $__internal_6e3ffbd580ac4e3512764c953c553630179da01869747a76f2a9aa5a102dde1a->leave($__internal_6e3ffbd580ac4e3512764c953c553630179da01869747a76f2a9aa5a102dde1a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_707a2a536346d912cb15eeadce055b37c4328714c6563996f15326fdfb79a485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707a2a536346d912cb15eeadce055b37c4328714c6563996f15326fdfb79a485->enter($__internal_707a2a536346d912cb15eeadce055b37c4328714c6563996f15326fdfb79a485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_281b8002a32b576dd791ecb177c61ff94f3684d7ec9fc4d43ca2c9a8152e8c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281b8002a32b576dd791ecb177c61ff94f3684d7ec9fc4d43ca2c9a8152e8c7a->enter($__internal_281b8002a32b576dd791ecb177c61ff94f3684d7ec9fc4d43ca2c9a8152e8c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <p>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " !</p>
    ";
        // line 6
        echo "    <p><a href =\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hello_world");
        echo "\">Vers la page Hello World</a></p>
";
        
        $__internal_281b8002a32b576dd791ecb177c61ff94f3684d7ec9fc4d43ca2c9a8152e8c7a->leave($__internal_281b8002a32b576dd791ecb177c61ff94f3684d7ec9fc4d43ca2c9a8152e8c7a_prof);

        
        $__internal_707a2a536346d912cb15eeadce055b37c4328714c6563996f15326fdfb79a485->leave($__internal_707a2a536346d912cb15eeadce055b37c4328714c6563996f15326fdfb79a485_prof);

    }

    public function getTemplateName()
    {
        return "hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <p>Hello {{ name }} !</p>
    {# path('nom_de_la_route') génère le chemin correspondant #}
    <p><a href =\"{{path('hello_world')}}\">Vers la page Hello World</a></p>
{% endblock %}
", "hello.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\hello.html.twig");
    }
}
