<?php

/* bibliotheque/abonnes.html.twig */
class __TwigTemplate_5c307fa012195e195cb7259920a31e6cb38636724d3f7c2bc995365fd0d9781d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonnes.html.twig", 1);
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
        $__internal_ba2df59865a8f9078230c94f2960b69c46ed6abbae70fddc37e3dba1f792b552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2df59865a8f9078230c94f2960b69c46ed6abbae70fddc37e3dba1f792b552->enter($__internal_ba2df59865a8f9078230c94f2960b69c46ed6abbae70fddc37e3dba1f792b552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonnes.html.twig"));

        $__internal_c46a61578246085bfd24373f6ecc3e5d79403e186306ed70ed9cf99628368ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46a61578246085bfd24373f6ecc3e5d79403e186306ed70ed9cf99628368ae3->enter($__internal_c46a61578246085bfd24373f6ecc3e5d79403e186306ed70ed9cf99628368ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonnes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba2df59865a8f9078230c94f2960b69c46ed6abbae70fddc37e3dba1f792b552->leave($__internal_ba2df59865a8f9078230c94f2960b69c46ed6abbae70fddc37e3dba1f792b552_prof);

        
        $__internal_c46a61578246085bfd24373f6ecc3e5d79403e186306ed70ed9cf99628368ae3->leave($__internal_c46a61578246085bfd24373f6ecc3e5d79403e186306ed70ed9cf99628368ae3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6313eb133025e8d9febac24cb0c6223c4c82a5c9da93bb77a186bea1af554527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6313eb133025e8d9febac24cb0c6223c4c82a5c9da93bb77a186bea1af554527->enter($__internal_6313eb133025e8d9febac24cb0c6223c4c82a5c9da93bb77a186bea1af554527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6b725f260d94cced4d6ead884e26cdf83f4d835a2176356a1fd11d0ee810116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b725f260d94cced4d6ead884e26cdf83f4d835a2176356a1fd11d0ee810116->enter($__internal_e6b725f260d94cced4d6ead884e26cdf83f4d835a2176356a1fd11d0ee810116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    <table>
        <thead>
            <th>Id membre</th>
            <th>Prénom</th>
            <th></th>
        </thead>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnes"]) ? $context["abonnes"] : $this->getContext($context, "abonnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonne"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonne"], "id_abonne", array(), "array"), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["abonne"], "prenom", array()), "html", null, true);
            echo "</td>
            <td>
                <a href='";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonne_detail", array("id" => $this->getAttribute($context["abonne"], "id_abonne", array()))), "html", null, true);
            echo "'>Détails</a>
                <a href='";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonne_modif", array("id" => $this->getAttribute($context["abonne"], "id_abonne", array()))), "html", null, true);
            echo "'>Modifier</a>
                <a href='";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonne_suppression", array("id" => $this->getAttribute($context["abonne"], "id_abonne", array()))), "html", null, true);
            echo "'>Supprimer</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </table>
    <p><a href='";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("abonne_ajout");
        echo "'>Ajouter un abonné</a></p>

";
        
        $__internal_e6b725f260d94cced4d6ead884e26cdf83f4d835a2176356a1fd11d0ee810116->leave($__internal_e6b725f260d94cced4d6ead884e26cdf83f4d835a2176356a1fd11d0ee810116_prof);

        
        $__internal_6313eb133025e8d9febac24cb0c6223c4c82a5c9da93bb77a186bea1af554527->leave($__internal_6313eb133025e8d9febac24cb0c6223c4c82a5c9da93bb77a186bea1af554527_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonnes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  95 => 23,  85 => 19,  81 => 18,  77 => 17,  72 => 15,  68 => 14,  65 => 13,  61 => 12,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {# <pre>{{ dump(abonnes) }}</pre> #}
    {# construire un tableau html contenant les abonnés #}
    <table>
        <thead>
            <th>Id membre</th>
            <th>Prénom</th>
            <th></th>
        </thead>
    {% for abonne in abonnes %}
        <tr>
            <td>{{abonne['id_abonne']}}</td>
            <td>{{abonne.prenom}}</td>
            <td>
                <a href='{{path('abonne_detail', {id: abonne.id_abonne}) }}'>Détails</a>
                <a href='{{path('abonne_modif', {id: abonne.id_abonne}) }}'>Modifier</a>
                <a href='{{path('abonne_suppression', {id: abonne.id_abonne}) }}'>Supprimer</a>
            </td>
        </tr>
    {% endfor %}
    </table>
    <p><a href='{{ path('abonne_ajout') }}'>Ajouter un abonné</a></p>

{% endblock %}

", "bibliotheque/abonnes.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\bibliotheque\\abonnes.html.twig");
    }
}
