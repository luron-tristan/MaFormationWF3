<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cb5e155d9b8161ed87ff3cebb8128a460dbb01ce6033df59218ba38c6fa03052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f4369c992ebab4d58f3b45d6233d48db0ff6458738308947e292cef547f288cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4369c992ebab4d58f3b45d6233d48db0ff6458738308947e292cef547f288cc->enter($__internal_f4369c992ebab4d58f3b45d6233d48db0ff6458738308947e292cef547f288cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1bec6199cedc60ca3429dfa75ef591cf038dde2ac6a11df297efb38e92d35805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bec6199cedc60ca3429dfa75ef591cf038dde2ac6a11df297efb38e92d35805->enter($__internal_1bec6199cedc60ca3429dfa75ef591cf038dde2ac6a11df297efb38e92d35805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4369c992ebab4d58f3b45d6233d48db0ff6458738308947e292cef547f288cc->leave($__internal_f4369c992ebab4d58f3b45d6233d48db0ff6458738308947e292cef547f288cc_prof);

        
        $__internal_1bec6199cedc60ca3429dfa75ef591cf038dde2ac6a11df297efb38e92d35805->leave($__internal_1bec6199cedc60ca3429dfa75ef591cf038dde2ac6a11df297efb38e92d35805_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7f98d2951ddbaa5f84416866b7f8f0952a1eb2cac9e03717f7c5d8215e1babf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f98d2951ddbaa5f84416866b7f8f0952a1eb2cac9e03717f7c5d8215e1babf2->enter($__internal_7f98d2951ddbaa5f84416866b7f8f0952a1eb2cac9e03717f7c5d8215e1babf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3cdf808cb42a206d302787c0daafa09dd3da9513d9a034f50e01162d1296e8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdf808cb42a206d302787c0daafa09dd3da9513d9a034f50e01162d1296e8ca->enter($__internal_3cdf808cb42a206d302787c0daafa09dd3da9513d9a034f50e01162d1296e8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3cdf808cb42a206d302787c0daafa09dd3da9513d9a034f50e01162d1296e8ca->leave($__internal_3cdf808cb42a206d302787c0daafa09dd3da9513d9a034f50e01162d1296e8ca_prof);

        
        $__internal_7f98d2951ddbaa5f84416866b7f8f0952a1eb2cac9e03717f7c5d8215e1babf2->leave($__internal_7f98d2951ddbaa5f84416866b7f8f0952a1eb2cac9e03717f7c5d8215e1babf2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae961fe3ec1ecb15630bc98c2ab6922359c160c234cd6bb477bb79499ed1cdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae961fe3ec1ecb15630bc98c2ab6922359c160c234cd6bb477bb79499ed1cdf8->enter($__internal_ae961fe3ec1ecb15630bc98c2ab6922359c160c234cd6bb477bb79499ed1cdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d5a02e7371736b422a894e74db4f1a3ee9a06067e92137f54d84fe349a7bb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5a02e7371736b422a894e74db4f1a3ee9a06067e92137f54d84fe349a7bb30->enter($__internal_2d5a02e7371736b422a894e74db4f1a3ee9a06067e92137f54d84fe349a7bb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d5a02e7371736b422a894e74db4f1a3ee9a06067e92137f54d84fe349a7bb30->leave($__internal_2d5a02e7371736b422a894e74db4f1a3ee9a06067e92137f54d84fe349a7bb30_prof);

        
        $__internal_ae961fe3ec1ecb15630bc98c2ab6922359c160c234cd6bb477bb79499ed1cdf8->leave($__internal_ae961fe3ec1ecb15630bc98c2ab6922359c160c234cd6bb477bb79499ed1cdf8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_683e89d116e5844c6ba52c94940a06c4d8915aa6764035136ef6746f29e842de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683e89d116e5844c6ba52c94940a06c4d8915aa6764035136ef6746f29e842de->enter($__internal_683e89d116e5844c6ba52c94940a06c4d8915aa6764035136ef6746f29e842de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16a67a423523ff1012d1eb1babf936a7b74ada5da0acee7d75b5c0756177a258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a67a423523ff1012d1eb1babf936a7b74ada5da0acee7d75b5c0756177a258->enter($__internal_16a67a423523ff1012d1eb1babf936a7b74ada5da0acee7d75b5c0756177a258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16a67a423523ff1012d1eb1babf936a7b74ada5da0acee7d75b5c0756177a258->leave($__internal_16a67a423523ff1012d1eb1babf936a7b74ada5da0acee7d75b5c0756177a258_prof);

        
        $__internal_683e89d116e5844c6ba52c94940a06c4d8915aa6764035136ef6746f29e842de->leave($__internal_683e89d116e5844c6ba52c94940a06c4d8915aa6764035136ef6746f29e842de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
