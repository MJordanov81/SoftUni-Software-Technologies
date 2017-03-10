<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9326616993faa0b91db88137fa69032c632395fd8932ae12afe6eef9a648d4bc extends Twig_Template
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
        $__internal_fb1ce26ceaa42c2ce9391cb141d9bb2da96ac4995f86425f9a309d92d0e0c529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1ce26ceaa42c2ce9391cb141d9bb2da96ac4995f86425f9a309d92d0e0c529->enter($__internal_fb1ce26ceaa42c2ce9391cb141d9bb2da96ac4995f86425f9a309d92d0e0c529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb1ce26ceaa42c2ce9391cb141d9bb2da96ac4995f86425f9a309d92d0e0c529->leave($__internal_fb1ce26ceaa42c2ce9391cb141d9bb2da96ac4995f86425f9a309d92d0e0c529_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3916e883859980f4a6c0ad182b9052b00628220ad261ef53f6a3415183c1f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3916e883859980f4a6c0ad182b9052b00628220ad261ef53f6a3415183c1f8a->enter($__internal_c3916e883859980f4a6c0ad182b9052b00628220ad261ef53f6a3415183c1f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3916e883859980f4a6c0ad182b9052b00628220ad261ef53f6a3415183c1f8a->leave($__internal_c3916e883859980f4a6c0ad182b9052b00628220ad261ef53f6a3415183c1f8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbccd04ed575637d6d517cf9274886c1dd7623cfd013da23dc1adae1e23cb145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbccd04ed575637d6d517cf9274886c1dd7623cfd013da23dc1adae1e23cb145->enter($__internal_bbccd04ed575637d6d517cf9274886c1dd7623cfd013da23dc1adae1e23cb145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbccd04ed575637d6d517cf9274886c1dd7623cfd013da23dc1adae1e23cb145->leave($__internal_bbccd04ed575637d6d517cf9274886c1dd7623cfd013da23dc1adae1e23cb145_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d140b8693d66e18fe03c975c63d8701d3a4ef70311b3015dd8d5c726cb14d273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d140b8693d66e18fe03c975c63d8701d3a4ef70311b3015dd8d5c726cb14d273->enter($__internal_d140b8693d66e18fe03c975c63d8701d3a4ef70311b3015dd8d5c726cb14d273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d140b8693d66e18fe03c975c63d8701d3a4ef70311b3015dd8d5c726cb14d273->leave($__internal_d140b8693d66e18fe03c975c63d8701d3a4ef70311b3015dd8d5c726cb14d273_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
