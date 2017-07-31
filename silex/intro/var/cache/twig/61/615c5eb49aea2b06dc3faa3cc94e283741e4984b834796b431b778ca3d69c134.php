<?php

/* layout.html.twig */
class __TwigTemplate_5fae0f9774b33050cda0f32f2eecaa1377b3ecb7a155bf2dee68f06dd56b8b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c5ba49d7cc29df15065d0a2750796acfd7c0b6bcbe485a23ad38e126182098e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5ba49d7cc29df15065d0a2750796acfd7c0b6bcbe485a23ad38e126182098e->enter($__internal_4c5ba49d7cc29df15065d0a2750796acfd7c0b6bcbe485a23ad38e126182098e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_f048be265bf4f0025eecd07538fcbf5a0f9ecf205968fd94f51cebc3e027c9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f048be265bf4f0025eecd07538fcbf5a0f9ecf205968fd94f51cebc3e027c9ed->enter($__internal_f048be265bf4f0025eecd07538fcbf5a0f9ecf205968fd94f51cebc3e027c9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Silex Application</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "            
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_4c5ba49d7cc29df15065d0a2750796acfd7c0b6bcbe485a23ad38e126182098e->leave($__internal_4c5ba49d7cc29df15065d0a2750796acfd7c0b6bcbe485a23ad38e126182098e_prof);

        
        $__internal_f048be265bf4f0025eecd07538fcbf5a0f9ecf205968fd94f51cebc3e027c9ed->leave($__internal_f048be265bf4f0025eecd07538fcbf5a0f9ecf205968fd94f51cebc3e027c9ed_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7cc2ed0ac9e643f13ccae7541b80e6b18d42f2f9c82978719c0ad85a76eab01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cc2ed0ac9e643f13ccae7541b80e6b18d42f2f9c82978719c0ad85a76eab01->enter($__internal_b7cc2ed0ac9e643f13ccae7541b80e6b18d42f2f9c82978719c0ad85a76eab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1ecdadc845e58a4b49bc591601a3e68e14e04bc95d28530435591668d798c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ecdadc845e58a4b49bc591601a3e68e14e04bc95d28530435591668d798c7c->enter($__internal_b1ecdadc845e58a4b49bc591601a3e68e14e04bc95d28530435591668d798c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_b1ecdadc845e58a4b49bc591601a3e68e14e04bc95d28530435591668d798c7c->leave($__internal_b1ecdadc845e58a4b49bc591601a3e68e14e04bc95d28530435591668d798c7c_prof);

        
        $__internal_b7cc2ed0ac9e643f13ccae7541b80e6b18d42f2f9c82978719c0ad85a76eab01->leave($__internal_b7cc2ed0ac9e643f13ccae7541b80e6b18d42f2f9c82978719c0ad85a76eab01_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6877595d1849b414ccca3e4f65116f9273e1b1ca5ccd1ba8191050f28a0a3354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6877595d1849b414ccca3e4f65116f9273e1b1ca5ccd1ba8191050f28a0a3354->enter($__internal_6877595d1849b414ccca3e4f65116f9273e1b1ca5ccd1ba8191050f28a0a3354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62042b15fd7667bb339be750b4c0ec515ddf79a67d7e8ed683559f18577c1da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62042b15fd7667bb339be750b4c0ec515ddf79a67d7e8ed683559f18577c1da7->enter($__internal_62042b15fd7667bb339be750b4c0ec515ddf79a67d7e8ed683559f18577c1da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            ";
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_62042b15fd7667bb339be750b4c0ec515ddf79a67d7e8ed683559f18577c1da7->leave($__internal_62042b15fd7667bb339be750b4c0ec515ddf79a67d7e8ed683559f18577c1da7_prof);

        
        $__internal_6877595d1849b414ccca3e4f65116f9273e1b1ca5ccd1ba8191050f28a0a3354->leave($__internal_6877595d1849b414ccca3e4f65116f9273e1b1ca5ccd1ba8191050f28a0a3354_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_e8910adfb43a3eae928ec3f6fd9ad3bbe3dd58b006e271489e578a0062652892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8910adfb43a3eae928ec3f6fd9ad3bbe3dd58b006e271489e578a0062652892->enter($__internal_e8910adfb43a3eae928ec3f6fd9ad3bbe3dd58b006e271489e578a0062652892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_14798d1aabf3013147a071145607d7d47dd3c296007fc3a103afc248396f5f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14798d1aabf3013147a071145607d7d47dd3c296007fc3a103afc248396f5f36->enter($__internal_14798d1aabf3013147a071145607d7d47dd3c296007fc3a103afc248396f5f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_14798d1aabf3013147a071145607d7d47dd3c296007fc3a103afc248396f5f36->leave($__internal_14798d1aabf3013147a071145607d7d47dd3c296007fc3a103afc248396f5f36_prof);

        
        $__internal_e8910adfb43a3eae928ec3f6fd9ad3bbe3dd58b006e271489e578a0062652892->leave($__internal_e8910adfb43a3eae928ec3f6fd9ad3bbe3dd58b006e271489e578a0062652892_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 12,  87 => 7,  85 => 6,  76 => 5,  58 => 4,  46 => 13,  44 => 12,  39 => 9,  37 => 5,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %} - My Silex Application</title>
        {% block stylesheets %}
            {# asset() génère le chemin pour les fichiers qui se trouvent dans le répertoire web #}
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% endblock %}
            
    </head>
    <body>
        {% block content %}{% endblock %}
    </body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\FORMATION\\silex\\intro\\templates\\layout.html.twig");
    }
}
