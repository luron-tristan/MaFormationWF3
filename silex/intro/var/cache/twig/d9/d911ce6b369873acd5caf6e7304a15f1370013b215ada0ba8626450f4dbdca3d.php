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
        $__internal_437d6fb3607e9229140f45226437ea2ff0a629267d48d3d82a53d851c2e2c10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437d6fb3607e9229140f45226437ea2ff0a629267d48d3d82a53d851c2e2c10e->enter($__internal_437d6fb3607e9229140f45226437ea2ff0a629267d48d3d82a53d851c2e2c10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonnes_emprunts.html.twig"));

        $__internal_9b4883cf7848824fc189a5a3eff0425fe775d50b312b6828f60c2379bdc45f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4883cf7848824fc189a5a3eff0425fe775d50b312b6828f60c2379bdc45f0e->enter($__internal_9b4883cf7848824fc189a5a3eff0425fe775d50b312b6828f60c2379bdc45f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliotheque/abonnes_emprunts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437d6fb3607e9229140f45226437ea2ff0a629267d48d3d82a53d851c2e2c10e->leave($__internal_437d6fb3607e9229140f45226437ea2ff0a629267d48d3d82a53d851c2e2c10e_prof);

        
        $__internal_9b4883cf7848824fc189a5a3eff0425fe775d50b312b6828f60c2379bdc45f0e->leave($__internal_9b4883cf7848824fc189a5a3eff0425fe775d50b312b6828f60c2379bdc45f0e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_87ebb70393a682907e9389c944f42d7789738be3df849e2bc8c481ab20371a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ebb70393a682907e9389c944f42d7789738be3df849e2bc8c481ab20371a1d->enter($__internal_87ebb70393a682907e9389c944f42d7789738be3df849e2bc8c481ab20371a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_78c57d3cc49cf2dbb0f61dd3488a5bc999970a5498f284a755e60503be5cf346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c57d3cc49cf2dbb0f61dd3488a5bc999970a5498f284a755e60503be5cf346->enter($__internal_78c57d3cc49cf2dbb0f61dd3488a5bc999970a5498f284a755e60503be5cf346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            // line 22
            if ( !twig_test_empty($this->getAttribute($context["emprunt"], "date_rendu", array()))) {
                // line 23
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["emprunt"], "date_rendu", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 25
                echo "                <td></td>
                ";
            }
            // line 27
            echo "                
            </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emprunt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </table>
";
        
        $__internal_78c57d3cc49cf2dbb0f61dd3488a5bc999970a5498f284a755e60503be5cf346->leave($__internal_78c57d3cc49cf2dbb0f61dd3488a5bc999970a5498f284a755e60503be5cf346_prof);

        
        $__internal_87ebb70393a682907e9389c944f42d7789738be3df849e2bc8c481ab20371a1d->leave($__internal_87ebb70393a682907e9389c944f42d7789738be3df849e2bc8c481ab20371a1d_prof);

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
        return array (  108 => 30,  100 => 27,  96 => 25,  90 => 23,  88 => 22,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  64 => 15,  60 => 14,  49 => 5,  40 => 3,  11 => 1,);
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
