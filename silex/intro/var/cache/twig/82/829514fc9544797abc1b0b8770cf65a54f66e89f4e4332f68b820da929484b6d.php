<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_563849d5bcab08d8786da2532714fce8a4242a332a9578814cdb0f520734b42b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e424636c792b288fbb082d89a055fe57f2b988eecf1dab04f31da8c0c011cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e424636c792b288fbb082d89a055fe57f2b988eecf1dab04f31da8c0c011cc3->enter($__internal_6e424636c792b288fbb082d89a055fe57f2b988eecf1dab04f31da8c0c011cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_92c7df9d8321628f1c008c5e9eda10c58cad9a9aedb5d627a8377da3bf844ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c7df9d8321628f1c008c5e9eda10c58cad9a9aedb5d627a8377da3bf844ce2->enter($__internal_92c7df9d8321628f1c008c5e9eda10c58cad9a9aedb5d627a8377da3bf844ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e424636c792b288fbb082d89a055fe57f2b988eecf1dab04f31da8c0c011cc3->leave($__internal_6e424636c792b288fbb082d89a055fe57f2b988eecf1dab04f31da8c0c011cc3_prof);

        
        $__internal_92c7df9d8321628f1c008c5e9eda10c58cad9a9aedb5d627a8377da3bf844ce2->leave($__internal_92c7df9d8321628f1c008c5e9eda10c58cad9a9aedb5d627a8377da3bf844ce2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66ff579b421097461ae5eb6de71dec896c2bb78d60b80290a76cf20472500bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ff579b421097461ae5eb6de71dec896c2bb78d60b80290a76cf20472500bea->enter($__internal_66ff579b421097461ae5eb6de71dec896c2bb78d60b80290a76cf20472500bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_54715cdf48b0dacfa3d84e5b5ebd11cab0581dec6ef41a18721ef289b4045f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54715cdf48b0dacfa3d84e5b5ebd11cab0581dec6ef41a18721ef289b4045f1d->enter($__internal_54715cdf48b0dacfa3d84e5b5ebd11cab0581dec6ef41a18721ef289b4045f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_54715cdf48b0dacfa3d84e5b5ebd11cab0581dec6ef41a18721ef289b4045f1d->leave($__internal_54715cdf48b0dacfa3d84e5b5ebd11cab0581dec6ef41a18721ef289b4045f1d_prof);

        
        $__internal_66ff579b421097461ae5eb6de71dec896c2bb78d60b80290a76cf20472500bea->leave($__internal_66ff579b421097461ae5eb6de71dec896c2bb78d60b80290a76cf20472500bea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
