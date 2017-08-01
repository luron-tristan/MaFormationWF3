<?php

/* bibliotheque/abonne.html.twig */
class __TwigTemplate_d0d8eac04b58a13f454cc54fdc851e88290de37ea6374d581dfcd984daa8563b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonne.html.twig", 1);
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
        $__internal_5091049972b697ac489f0c7b6e98eb4b64d810359f99c5f4a5725f8a25e7fb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5091049972b697ac489f0c7b6e98eb4b64d810359f99c5f4a5725f8a25e7fb43->enter($__internal_5091049972b697ac489f0c7b6e98eb4b64d810359f99c5f4a5725f8a25e7fb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne.html.twig"));

        $__internal_c5ba2272a0828e17e8a519052f42fca04c89bc19a999bfa003dcc33d587466a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ba2272a0828e17e8a519052f42fca04c89bc19a999bfa003dcc33d587466a1->enter($__internal_c5ba2272a0828e17e8a519052f42fca04c89bc19a999bfa003dcc33d587466a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5091049972b697ac489f0c7b6e98eb4b64d810359f99c5f4a5725f8a25e7fb43->leave($__internal_5091049972b697ac489f0c7b6e98eb4b64d810359f99c5f4a5725f8a25e7fb43_prof);

        
        $__internal_c5ba2272a0828e17e8a519052f42fca04c89bc19a999bfa003dcc33d587466a1->leave($__internal_c5ba2272a0828e17e8a519052f42fca04c89bc19a999bfa003dcc33d587466a1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f7771894d71cddf2056faa0a55631b3d01046976407709da17a3f6349f59ff01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7771894d71cddf2056faa0a55631b3d01046976407709da17a3f6349f59ff01->enter($__internal_f7771894d71cddf2056faa0a55631b3d01046976407709da17a3f6349f59ff01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_67b7dfe637dca0573e53944e1b2f53177b2eee321f81f55ceae45a597c3d6c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b7dfe637dca0573e53944e1b2f53177b2eee321f81f55ceae45a597c3d6c9d->enter($__internal_67b7dfe637dca0573e53944e1b2f53177b2eee321f81f55ceae45a597c3d6c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    Id abonne : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "id_abonne", array()), "html", null, true);
        echo "<br>
    Prénom : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "prenom", array()), "html", null, true);
        echo "<br><br>
    <a href='";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonnes");
        echo "'>Retour vers la liste</a>
";
        
        $__internal_67b7dfe637dca0573e53944e1b2f53177b2eee321f81f55ceae45a597c3d6c9d->leave($__internal_67b7dfe637dca0573e53944e1b2f53177b2eee321f81f55ceae45a597c3d6c9d_prof);

        
        $__internal_f7771894d71cddf2056faa0a55631b3d01046976407709da17a3f6349f59ff01->leave($__internal_f7771894d71cddf2056faa0a55631b3d01046976407709da17a3f6349f59ff01_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  54 => 6,  49 => 5,  40 => 3,  11 => 1,);
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
{#    <pre>{{ dump(abonne) }}</pre>#}
    Id abonne : {{abonne.id_abonne}}<br>
    Prénom : {{abonne.prenom}}<br><br>
    <a href='{{path('abonnes')}}'>Retour vers la liste</a>
{% endblock %}", "bibliotheque/abonne.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\bibliotheque\\abonne.html.twig");
    }
}
