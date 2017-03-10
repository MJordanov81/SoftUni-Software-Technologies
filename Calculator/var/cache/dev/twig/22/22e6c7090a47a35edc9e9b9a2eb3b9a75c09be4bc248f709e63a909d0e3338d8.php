<?php

/* base.html.twig */
class __TwigTemplate_05f92580ed711c6e3f0b4f963e765fac7e97736f05d6abf90b3a925f9095aca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72720ae1ba71e7dfa60ac92f35070721496f16deed26a7032bba7d8bb1eaefc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72720ae1ba71e7dfa60ac92f35070721496f16deed26a7032bba7d8bb1eaefc4->enter($__internal_72720ae1ba71e7dfa60ac92f35070721496f16deed26a7032bba7d8bb1eaefc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "
<div class=\"container body-container\">
    ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "</div>


";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
</body>
</html>
";
        
        $__internal_72720ae1ba71e7dfa60ac92f35070721496f16deed26a7032bba7d8bb1eaefc4->leave($__internal_72720ae1ba71e7dfa60ac92f35070721496f16deed26a7032bba7d8bb1eaefc4_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d03da9068b3189841e40685821c7dcf00aaaffbd11fb200dbf72488184f1f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d03da9068b3189841e40685821c7dcf00aaaffbd11fb200dbf72488184f1f1a->enter($__internal_6d03da9068b3189841e40685821c7dcf00aaaffbd11fb200dbf72488184f1f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_6d03da9068b3189841e40685821c7dcf00aaaffbd11fb200dbf72488184f1f1a->leave($__internal_6d03da9068b3189841e40685821c7dcf00aaaffbd11fb200dbf72488184f1f1a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_622291a203060523697268aa0eba9aa2996ddd168fefaf08b249f387b13fcc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622291a203060523697268aa0eba9aa2996ddd168fefaf08b249f387b13fcc7a->enter($__internal_622291a203060523697268aa0eba9aa2996ddd168fefaf08b249f387b13fcc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_622291a203060523697268aa0eba9aa2996ddd168fefaf08b249f387b13fcc7a->leave($__internal_622291a203060523697268aa0eba9aa2996ddd168fefaf08b249f387b13fcc7a_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c2bbe484c2e604f0ef23e96a96578af040824842c35a2a5e6eb98a938209917e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bbe484c2e604f0ef23e96a96578af040824842c35a2a5e6eb98a938209917e->enter($__internal_c2bbe484c2e604f0ef23e96a96578af040824842c35a2a5e6eb98a938209917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_c2bbe484c2e604f0ef23e96a96578af040824842c35a2a5e6eb98a938209917e->leave($__internal_c2bbe484c2e604f0ef23e96a96578af040824842c35a2a5e6eb98a938209917e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_99a08536b533e6a55c9597a23398408f42cb1db9026465b29b6df8da0215dbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a08536b533e6a55c9597a23398408f42cb1db9026465b29b6df8da0215dbc4->enter($__internal_99a08536b533e6a55c9597a23398408f42cb1db9026465b29b6df8da0215dbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR &reg;</a>
                    <div class=\"navbar-collapse collapse\">
                        <div class=\"nav navbar-nav navbar-right\">
                            by MJ
                        </div>
                    </div>


                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_99a08536b533e6a55c9597a23398408f42cb1db9026465b29b6df8da0215dbc4->leave($__internal_99a08536b533e6a55c9597a23398408f42cb1db9026465b29b6df8da0215dbc4_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a14cbe30b19bae4bf6acb54124e205f390b5d5f0a2eb34baddcf7d6e620c9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a14cbe30b19bae4bf6acb54124e205f390b5d5f0a2eb34baddcf7d6e620c9c0->enter($__internal_7a14cbe30b19bae4bf6acb54124e205f390b5d5f0a2eb34baddcf7d6e620c9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 50
        $this->displayBlock('main', $context, $blocks);
        // line 51
        echo "            </div>
        </div>
    ";
        
        $__internal_7a14cbe30b19bae4bf6acb54124e205f390b5d5f0a2eb34baddcf7d6e620c9c0->leave($__internal_7a14cbe30b19bae4bf6acb54124e205f390b5d5f0a2eb34baddcf7d6e620c9c0_prof);

    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        $__internal_7c3979ec23fd4a56c1e59c0435496bc03618efa1af64749209e6a8f5fa612733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3979ec23fd4a56c1e59c0435496bc03618efa1af64749209e6a8f5fa612733->enter($__internal_7c3979ec23fd4a56c1e59c0435496bc03618efa1af64749209e6a8f5fa612733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_7c3979ec23fd4a56c1e59c0435496bc03618efa1af64749209e6a8f5fa612733->leave($__internal_7c3979ec23fd4a56c1e59c0435496bc03618efa1af64749209e6a8f5fa612733_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a02d9d03d62e13a34580a99cf1c3b3a7315155292353518c613aa185d26d630b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02d9d03d62e13a34580a99cf1c3b3a7315155292353518c613aa185d26d630b->enter($__internal_a02d9d03d62e13a34580a99cf1c3b3a7315155292353518c613aa185d26d630b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a02d9d03d62e13a34580a99cf1c3b3a7315155292353518c613aa185d26d630b->leave($__internal_a02d9d03d62e13a34580a99cf1c3b3a7315155292353518c613aa185d26d630b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 61,  207 => 60,  203 => 59,  198 => 58,  192 => 57,  181 => 50,  172 => 51,  170 => 50,  166 => 48,  160 => 47,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 63,  67 => 57,  62 => 54,  60 => 47,  56 => 45,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR &reg;</a>
                    <div class=\"navbar-collapse collapse\">
                        <div class=\"nav navbar-nav navbar-right\">
                            by MJ
                        </div>
                    </div>


                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
