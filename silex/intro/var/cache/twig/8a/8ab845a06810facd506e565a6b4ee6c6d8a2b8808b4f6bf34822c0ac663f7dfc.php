<?php

/* twig.html.twig */
class __TwigTemplate_e2bdc30477b1e9d5ae5d9bbd92aba389f03953a4d9cdf760f4a1686bfc8b81eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "twig.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_989bb2214336697ce8ae0f5bea2f59c1a468503d22ec64050875aba2dd25d2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989bb2214336697ce8ae0f5bea2f59c1a468503d22ec64050875aba2dd25d2d2->enter($__internal_989bb2214336697ce8ae0f5bea2f59c1a468503d22ec64050875aba2dd25d2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "twig.html.twig"));

        $__internal_43b70f13e1df5985d1edfe32d50f54ba9c4270829e03e3ca8f176e5869416429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b70f13e1df5985d1edfe32d50f54ba9c4270829e03e3ca8f176e5869416429->enter($__internal_43b70f13e1df5985d1edfe32d50f54ba9c4270829e03e3ca8f176e5869416429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_989bb2214336697ce8ae0f5bea2f59c1a468503d22ec64050875aba2dd25d2d2->leave($__internal_989bb2214336697ce8ae0f5bea2f59c1a468503d22ec64050875aba2dd25d2d2_prof);

        
        $__internal_43b70f13e1df5985d1edfe32d50f54ba9c4270829e03e3ca8f176e5869416429->leave($__internal_43b70f13e1df5985d1edfe32d50f54ba9c4270829e03e3ca8f176e5869416429_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86e6a835e30843e7ae3f24767651ebd9eac6e4f2654e6b9f0bab06bb3e2ee7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e6a835e30843e7ae3f24767651ebd9eac6e4f2654e6b9f0bab06bb3e2ee7c4->enter($__internal_86e6a835e30843e7ae3f24767651ebd9eac6e4f2654e6b9f0bab06bb3e2ee7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ef666770e708f5fff9ff9b27edc76729a83e3ca084aec41903864538e246c23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef666770e708f5fff9ff9b27edc76729a83e3ca084aec41903864538e246c23f->enter($__internal_ef666770e708f5fff9ff9b27edc76729a83e3ca084aec41903864538e246c23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " ";
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/test.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_ef666770e708f5fff9ff9b27edc76729a83e3ca084aec41903864538e246c23f->leave($__internal_ef666770e708f5fff9ff9b27edc76729a83e3ca084aec41903864538e246c23f_prof);

        
        $__internal_86e6a835e30843e7ae3f24767651ebd9eac6e4f2654e6b9f0bab06bb3e2ee7c4->leave($__internal_86e6a835e30843e7ae3f24767651ebd9eac6e4f2654e6b9f0bab06bb3e2ee7c4_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_8bb70d9ba9bda50633aafa64825fa07754cc09024ae8eb92d4985715f9ae5da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb70d9ba9bda50633aafa64825fa07754cc09024ae8eb92d4985715f9ae5da4->enter($__internal_8bb70d9ba9bda50633aafa64825fa07754cc09024ae8eb92d4985715f9ae5da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8ea55217b2e28cf9ef48e799019d7aef301651aa1b765965a4126fffd50d5b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea55217b2e28cf9ef48e799019d7aef301651aa1b765965a4126fffd50d5b55->enter($__internal_8ea55217b2e28cf9ef48e799019d7aef301651aa1b765965a4126fffd50d5b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <p class='test'><b>Page de test</b></p>
    
    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    <p>";
        echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "html", null, true);
        echo "</p>
    
    ";
        // line 17
        echo "    ";
        $context["newVar"] = "Autre variable";
        // line 18
        echo "
    <p>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["newVar"]) ? $context["newVar"] : $this->getContext($context, "newVar")), "html", null, true);
        echo "</p>

    ";
        // line 22
        echo "    <p>";
        echo twig_escape_filter($this->env, ((isset($context["newVar"]) ? $context["newVar"] : $this->getContext($context, "newVar")) . "!"), "html", null, true);
        echo "</p>
    
    ";
        // line 24
        $context["vrai"] = true;
        // line 25
        echo "    
    ";
        // line 27
        echo "    ";
        if ((isset($context["vrai"]) ? $context["vrai"] : $this->getContext($context, "vrai"))) {
            // line 28
            echo "        <p>C'est vrai</p>
    ";
        } else {
            // line 30
            echo "        <p>C'est faux</p>
    ";
        }
        // line 32
        echo "    
    ";
        // line 34
        echo "    ";
        if (((isset($context["newVar"]) ? $context["newVar"] : $this->getContext($context, "newVar")) == "Autre variable")) {
            // line 35
            echo "        <p>newVar vaut \"Autre variable\"</p>
    ";
        }
        // line 37
        echo "    
    ";
        // line 39
        echo "    ";
        if ((((isset($context["newVar"]) ? $context["newVar"] : $this->getContext($context, "newVar")) == "Autre variable") && (isset($context["vrai"]) ? $context["vrai"] : $this->getContext($context, "vrai")))) {
            // line 40
            echo "        ";
        }
        // line 41
        echo "        
    ";
        // line 43
        echo "    ";
        if ( !(isset($context["vrai"]) ? $context["vrai"] : $this->getContext($context, "vrai"))) {
            // line 44
            echo "        <p>C'est faux</p>
    ";
        }
        // line 46
        echo "    
    ";
        // line 48
        echo "    ";
        $context["tab"] = array(0 => 1, 1 => 2, 2 => 3, 3 => 4);
        // line 49
        echo "    
    <p>
    ";
        // line 52
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")));
        foreach ($context['_seq'] as $context["_key"] => $context["nb"]) {
            // line 53
            echo "        ";
            echo twig_escape_filter($this->env, $context["nb"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </p>
    
    <p>
    ";
        // line 59
        echo "    ";
        // line 60
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["nb"]) {
            // line 61
            echo "        ";
            echo twig_escape_filter($this->env, $context["nb"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </p>
    
    ";
        // line 66
        echo "    ";
        // line 67
        echo "    ";
        $context["hash"] = array("foo" => "Foo", "bar" => "Bar");
        // line 68
        echo "    <p>
    ";
        // line 70
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 71
            echo "        ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </p>
    
    ";
        // line 75
        $context["emptyArray"] = array();
        // line 76
        echo "    
    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emptyArray"]) ? $context["emptyArray"] : $this->getContext($context, "emptyArray")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 78
            echo "        ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo " ";
            echo " 
        <p>Le tableau emptyArray est vide </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        
    <p>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "foo", array(), "array"), "html", null, true);
        echo "</p> ";
        // line 84
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "foo", array()), "html", null, true);
        echo "</p> ";
        // line 85
        echo "    
    ";
        // line 87
        echo "    ";
        if (twig_test_empty((isset($context["emptyArray"]) ? $context["emptyArray"] : $this->getContext($context, "emptyArray")))) {
            // line 88
            echo "        <p>Le tableau array est vide </p>
    ";
        }
        // line 90
        echo "    
    ";
        // line 91
        if ( !twig_test_empty((isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")))) {
            // line 92
            echo "        <p>Le tableau hash n'est pas vide </p>
    ";
        }
        // line 94
        echo "    
    ";
        // line 95
        $context["dix"] = 10;
        // line 96
        echo "    
    ";
        // line 97
        if ((0 == (isset($context["dix"]) ? $context["dix"] : $this->getContext($context, "dix")) % 5)) {
            // line 98
            echo "        <p>Dix est divisible par cinq</p>
    ";
        }
        // line 100
        echo "    
    ";
        // line 101
        if (((isset($context["dix"]) ? $context["dix"] : $this->getContext($context, "dix")) % 2 == 0)) {
            echo " ";
            // line 102
            echo "        <p>Dix est pair</p>
    ";
        }
        // line 104
        echo "    
    <p>
    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["nb"]) {
            // line 107
            echo "
        ";
            // line 109
            echo "        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 110
                echo "            premier tour de boucle : <br>
        ";
            }
            // line 112
            echo "
        ";
            // line 113
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 114
                echo "            dernier tour de boucle : <br>
        ";
            }
            // line 116
            echo "
        ";
            // line 117
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                // line 118
                echo "            tour impair : <br>
        ";
            }
            // line 120
            echo "        ";
            echo twig_escape_filter($this->env, $context["nb"], "html", null, true);
            echo "<br>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "    </p>
        
    ";
        // line 125
        echo "    <p>";
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash"))), "html", null, true);
        echo "</p>
    
    ";
        // line 128
        echo "    <p>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var"))), "html", null, true);
        echo "</p>

    <p>";
        // line 130
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "d/m/Y"), "html", null, true);
        echo "</p>
    
    ";
        // line 132
        $context["html"] = "<p>Paragraphe</p>";
        // line 133
        echo "    
    ";
        // line 135
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html")), "html", null, true);
        echo "

    ";
        // line 138
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "

    ";
        // line 141
        echo "    
    ";
        // line 143
        echo "    ";
        $this->loadTemplate("included.html.twig", "twig.html.twig", 143)->display(array_merge($context, array("bla" => "Blabla")));
        // line 144
        echo "
    ";
        // line 146
        echo "    ";
        // line 147
        echo "
























";
        
        $__internal_8ea55217b2e28cf9ef48e799019d7aef301651aa1b765965a4126fffd50d5b55->leave($__internal_8ea55217b2e28cf9ef48e799019d7aef301651aa1b765965a4126fffd50d5b55_prof);

        
        $__internal_8bb70d9ba9bda50633aafa64825fa07754cc09024ae8eb92d4985715f9ae5da4->leave($__internal_8bb70d9ba9bda50633aafa64825fa07754cc09024ae8eb92d4985715f9ae5da4_prof);

    }

    public function getTemplateName()
    {
        return "twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 147,  422 => 146,  419 => 144,  416 => 143,  413 => 141,  407 => 138,  401 => 135,  398 => 133,  396 => 132,  391 => 130,  385 => 128,  379 => 125,  375 => 122,  358 => 120,  354 => 118,  352 => 117,  349 => 116,  345 => 114,  343 => 113,  340 => 112,  336 => 110,  333 => 109,  330 => 107,  313 => 106,  309 => 104,  305 => 102,  302 => 101,  299 => 100,  295 => 98,  293 => 97,  290 => 96,  288 => 95,  285 => 94,  281 => 92,  279 => 91,  276 => 90,  272 => 88,  269 => 87,  266 => 85,  262 => 84,  259 => 83,  256 => 82,  247 => 79,  239 => 78,  234 => 77,  231 => 76,  229 => 75,  225 => 73,  214 => 71,  209 => 70,  206 => 68,  203 => 67,  201 => 66,  197 => 63,  188 => 61,  183 => 60,  181 => 59,  176 => 55,  167 => 53,  162 => 52,  158 => 49,  155 => 48,  152 => 46,  148 => 44,  145 => 43,  142 => 41,  139 => 40,  136 => 39,  133 => 37,  129 => 35,  126 => 34,  123 => 32,  119 => 30,  115 => 28,  112 => 27,  109 => 25,  107 => 24,  101 => 22,  96 => 19,  93 => 18,  90 => 17,  84 => 14,  82 => 13,  80 => 12,  76 => 9,  67 => 8,  54 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{ parent() }} {# reprend le contenu du bloc parent #}
    <link href=\"{{ asset('css/test.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

{% block content %}
    <p class='test'><b>Page de test</b></p>
    
    {# pour l'affichage : double accolade #}
    {# affiche la variable var qui a été passée à la vue par le contrôleur #}
    {# en php : <?= \$var; ?> #}
    <p>{{ var }}</p>
    
    {# définit une variable dans la vue #}
    {% set newVar = 'Autre variable' %}

    <p>{{ newVar }}</p>

    {# ~ Pour concaténer #}
    <p>{{ newVar ~ '!' }}</p>
    
    {% set vrai = true %}
    
    {# condition sur un booléen #}
    {% if vrai %}
        <p>C'est vrai</p>
    {% else %}
        <p>C'est faux</p>
    {% endif %}
    
    {# Mêmes opérateurs de comparaison qu'en PHP #}
    {% if newVar == 'Autre variable' %}
        <p>newVar vaut \"Autre variable\"</p>
    {% endif %}
    
    {# and et or pour && et || #}
    {% if newVar == 'Autre variable' and vrai %}
        {% endif %}
        
    {# not pour ! #}
    {% if not vrai %}
        <p>C'est faux</p>
    {% endif %}
    
    {# tableau indexé #}
    {% set tab = [1, 2, 3, 4] %}
    
    <p>
    {# en PHP : foreach (\$tab as \$nb) #}
    {% for nb in tab %}
        {{ nb }}<br>
    {% endfor %}
    </p>
    
    <p>
    {# .. pour créer une séquence à la volée #}
    {# en PHP : for (\$nb = 0 ;\$nb<= 5;nb++) #}
    {% for nb in 0..5 %}
        {{ nb }}<br>
    {% endfor %}
    </p>
    
    {# tableau associatif #}
    {# \$hash = ['foo' => 'Foo', 'bar' => 'Bar']; #}
    {% set hash = {foo: \"Foo\", bar: \"Bar\"} %}
    <p>
    {# en PHP : foreach (\$hash as \$key => \$value #}
    {% for key, value in hash %}
        {{ key }} : {{ value }}<br>
    {% endfor %}
    </p>
    
    {% set emptyArray = [] %}
    
    {% for val in emptyArray %}
        {{ val }}
    {% else %} {# on rentre dans le else si le tableau est vide #} 
        <p>Le tableau emptyArray est vide </p>
    {% endfor %}
        
    <p>{{ hash['foo']}}</p> {# élément d'un tableau #}
    <p>{{ hash.foo }}</p> {# notation courte #}
    
    {# test avec is/is not #}
    {% if emptyArray is empty %}
        <p>Le tableau array est vide </p>
    {% endif %}
    
    {% if hash is not empty %}
        <p>Le tableau hash n'est pas vide </p>
    {% endif %}
    
    {% set dix = 10 %}
    
    {% if dix is divisibleby(5) %}
        <p>Dix est divisible par cinq</p>
    {% endif %}
    
    {% if dix is even(5) %} {# even/odd : pair/impair #}
        <p>Dix est pair</p>
    {% endif %}
    
    <p>
    {% for nb in 0..5 %}

        {# loop donne des informations sur l'état de la boucle #}
        {% if loop.first %}
            premier tour de boucle : <br>
        {% endif %}

        {% if loop.last %}
            dernier tour de boucle : <br>
        {% endif %}

        {% if loop.index is odd %}
            tour impair : <br>
        {% endif %}
        {{ nb }}<br>
    {% endfor %}
    </p>
        
    {# var_dump(\$hash) #}
    <p>{{ dump(hash) }}</p>
    
    {# application d'un filtre avec | #}
    <p>{{ var|upper }}</p>

    <p>{{ now|date('d/m/Y') }}</p>
    
    {% set html = '<p>Paragraphe</p>' %}
    
    {# Par défaut, twig échappe le html #}
    {{ html }}

    {# pour ne pas échapper le html #}
    {{ html|raw }}

    {# inclusion de fichier #}
    
    {# inclusion de fichier #}
    {% include 'included.html.twig' with {bla : 'Blabla' } %}

    {# inclusion de fichier #}
    {# {% include 'included.html.twig' with {bla : 'Blabla' } only %} #}

























{% endblock %}", "twig.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\twig.html.twig");
    }
}
