<?php

/* bibliotheque/abonnes_emprunts.html.twig */
class __TwigTemplate_8485b763b27004861bfbaed19345ec68969de0a3f108b1fc7bbfb99945667f87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "bibliotheque/abonnes_emprunts.html.twig", 1);
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
        $__internal_ce38ac21af1c36b31ce18c7527e56b134193d615aad50e4ba8cbdc0cff2a87da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce38ac21af1c36b31ce18c7527e56b134193d615aad50e4ba8cbdc0cff2a87da->enter($__internal_ce38ac21af1c36b31ce18c7527e56b134193d615aad50e4ba8cbdc0cff2a87da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonnes_emprunts.html.twig"));

        $__internal_6dafc7a5e7e373d71e3408c5d27f8e53c07305b8ee8f3a17d0a3fb13643778b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dafc7a5e7e373d71e3408c5d27f8e53c07305b8ee8f3a17d0a3fb13643778b6->enter($__internal_6dafc7a5e7e373d71e3408c5d27f8e53c07305b8ee8f3a17d0a3fb13643778b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonnes_emprunts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce38ac21af1c36b31ce18c7527e56b134193d615aad50e4ba8cbdc0cff2a87da->leave($__internal_ce38ac21af1c36b31ce18c7527e56b134193d615aad50e4ba8cbdc0cff2a87da_prof);

        
        $__internal_6dafc7a5e7e373d71e3408c5d27f8e53c07305b8ee8f3a17d0a3fb13643778b6->leave($__internal_6dafc7a5e7e373d71e3408c5d27f8e53c07305b8ee8f3a17d0a3fb13643778b6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_323c235f752e002d6d33bb09ab2342cee951cda86f4e60a071f48a5e3cb4cff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323c235f752e002d6d33bb09ab2342cee951cda86f4e60a071f48a5e3cb4cff3->enter($__internal_323c235f752e002d6d33bb09ab2342cee951cda86f4e60a071f48a5e3cb4cff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9bfa6de5484d53770e1024b9526356cde60e3f4c12a3f181e5909bbf2ce808bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfa6de5484d53770e1024b9526356cde60e3f4c12a3f181e5909bbf2ce808bc->enter($__internal_9bfa6de5484d53770e1024b9526356cde60e3f4c12a3f181e5909bbf2ce808bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <table>
            <thead>
                <th>Id emprunt</th>
                <th>Prénom</th>
                <th>Auteur</th>
                <th>Titre</th>
                <th>Date sortie</th>
                <th>Date rendu</th>
            </thead>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnes_emprunts"]) ? $context["abonnes_emprunts"] : $this->getContext($context, "abonnes_emprunts")));
        foreach ($context['_seq'] as $context["_key"] => $context["emprunt"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "id_emprunt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["emprunt"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunt"], "date_sortie", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                ";
            // line 21
            if ( !twig_test_empty($this->getAttribute($context["emprunt"], "date_rendu", array()))) {
                // line 22
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunt"], "date_rendu", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 24
                echo "                <td></td>
                ";
            }
            // line 26
            echo "            </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emprunt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </table>
";
        
        $__internal_9bfa6de5484d53770e1024b9526356cde60e3f4c12a3f181e5909bbf2ce808bc->leave($__internal_9bfa6de5484d53770e1024b9526356cde60e3f4c12a3f181e5909bbf2ce808bc_prof);

        
        $__internal_323c235f752e002d6d33bb09ab2342cee951cda86f4e60a071f48a5e3cb4cff3->leave($__internal_323c235f752e002d6d33bb09ab2342cee951cda86f4e60a071f48a5e3cb4cff3_prof);

    }

    public function getTemplateName()
    {
        return "bibliotheque/abonnes_emprunts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  99 => 26,  95 => 24,  89 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  64 => 15,  60 => 14,  49 => 5,  40 => 3,  11 => 1,);
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
{#     <pre>{{ dump(abonnes_emprunts) }}</pre>#}
        <table>
            <thead>
                <th>Id emprunt</th>
                <th>Prénom</th>
                <th>Auteur</th>
                <th>Titre</th>
                <th>Date sortie</th>
                <th>Date rendu</th>
            </thead>
            {% for emprunt in abonnes_emprunts %}
            <tr>
                <td>{{emprunt.id_emprunt}}</td>
                <td>{{emprunt.prenom}}</td>
                <td>{{emprunt.auteur}}</td>
                <td>{{emprunt.titre}}</td>
                <td>{{emprunt.date_sortie|date('d/m/Y')}}</td>
                {% if emprunt.date_rendu is not empty %}
                <td>{{emprunt.date_rendu|date('d/m/Y')}}</td>
                {% else %}
                <td></td>
                {% endif %}
            </tr>
       {% endfor %}
    </table>
{% endblock %}
", "bibliotheque/abonnes_emprunts.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\bibliotheque\\abonnes_emprunts.html.twig");
    }
}
