<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_da9ed7ab2f2f50ccc3459cc95104cd19143156cf3c3e3b34057002767d0de8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5da6798a3f7debbfe693de3b7457c2ffd7edebd9f29b6cbb8816d9a12a7ebea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da6798a3f7debbfe693de3b7457c2ffd7edebd9f29b6cbb8816d9a12a7ebea4->enter($__internal_5da6798a3f7debbfe693de3b7457c2ffd7edebd9f29b6cbb8816d9a12a7ebea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_94d2846b1994a8dcb72d353f23c71a834fa3d343f49d4ddfdf28fb3d6c6af4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d2846b1994a8dcb72d353f23c71a834fa3d343f49d4ddfdf28fb3d6c6af4aa->enter($__internal_94d2846b1994a8dcb72d353f23c71a834fa3d343f49d4ddfdf28fb3d6c6af4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da6798a3f7debbfe693de3b7457c2ffd7edebd9f29b6cbb8816d9a12a7ebea4->leave($__internal_5da6798a3f7debbfe693de3b7457c2ffd7edebd9f29b6cbb8816d9a12a7ebea4_prof);

        
        $__internal_94d2846b1994a8dcb72d353f23c71a834fa3d343f49d4ddfdf28fb3d6c6af4aa->leave($__internal_94d2846b1994a8dcb72d353f23c71a834fa3d343f49d4ddfdf28fb3d6c6af4aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e71133084340c24b8b04dc06ced1361aceb9db73eef3e4b32eb61db3bee82e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71133084340c24b8b04dc06ced1361aceb9db73eef3e4b32eb61db3bee82e25->enter($__internal_e71133084340c24b8b04dc06ced1361aceb9db73eef3e4b32eb61db3bee82e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5aa615fb147de991b9318b648a30175b52275b5705e96c3e138238cfdcc89ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa615fb147de991b9318b648a30175b52275b5705e96c3e138238cfdcc89ce3->enter($__internal_5aa615fb147de991b9318b648a30175b52275b5705e96c3e138238cfdcc89ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5aa615fb147de991b9318b648a30175b52275b5705e96c3e138238cfdcc89ce3->leave($__internal_5aa615fb147de991b9318b648a30175b52275b5705e96c3e138238cfdcc89ce3_prof);

        
        $__internal_e71133084340c24b8b04dc06ced1361aceb9db73eef3e4b32eb61db3bee82e25->leave($__internal_e71133084340c24b8b04dc06ced1361aceb9db73eef3e4b32eb61db3bee82e25_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c15b95e40e853c72e4bd7ffa71b7b8b6cb3a37c32592403f5c3b44211fafafd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15b95e40e853c72e4bd7ffa71b7b8b6cb3a37c32592403f5c3b44211fafafd8->enter($__internal_c15b95e40e853c72e4bd7ffa71b7b8b6cb3a37c32592403f5c3b44211fafafd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_875b2d212443fb105f5526fb2af52c4a51657400d5be21f695c15133e56d5b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875b2d212443fb105f5526fb2af52c4a51657400d5be21f695c15133e56d5b63->enter($__internal_875b2d212443fb105f5526fb2af52c4a51657400d5be21f695c15133e56d5b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_875b2d212443fb105f5526fb2af52c4a51657400d5be21f695c15133e56d5b63->leave($__internal_875b2d212443fb105f5526fb2af52c4a51657400d5be21f695c15133e56d5b63_prof);

        
        $__internal_c15b95e40e853c72e4bd7ffa71b7b8b6cb3a37c32592403f5c3b44211fafafd8->leave($__internal_c15b95e40e853c72e4bd7ffa71b7b8b6cb3a37c32592403f5c3b44211fafafd8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58378b2a0cf62629562def4fc09291b393d047ae18aad1d259418c754e7e5d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58378b2a0cf62629562def4fc09291b393d047ae18aad1d259418c754e7e5d84->enter($__internal_58378b2a0cf62629562def4fc09291b393d047ae18aad1d259418c754e7e5d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e552ddafbdeb29486d57f60de4397cc376d3fc29a23c6cdb0c28e05343d8482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e552ddafbdeb29486d57f60de4397cc376d3fc29a23c6cdb0c28e05343d8482->enter($__internal_7e552ddafbdeb29486d57f60de4397cc376d3fc29a23c6cdb0c28e05343d8482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7e552ddafbdeb29486d57f60de4397cc376d3fc29a23c6cdb0c28e05343d8482->leave($__internal_7e552ddafbdeb29486d57f60de4397cc376d3fc29a23c6cdb0c28e05343d8482_prof);

        
        $__internal_58378b2a0cf62629562def4fc09291b393d047ae18aad1d259418c754e7e5d84->leave($__internal_58378b2a0cf62629562def4fc09291b393d047ae18aad1d259418c754e7e5d84_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
