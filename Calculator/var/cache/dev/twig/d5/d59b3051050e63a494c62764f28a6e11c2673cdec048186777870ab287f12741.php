<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be7ad87c75dd6f7780051a0c0fdcbc3cf39c529de6a7036cac47d7c98d4e03b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_361f6a77159f8742051d14eedc1c1816816011177d9f3503fe0330bcf6b5394b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361f6a77159f8742051d14eedc1c1816816011177d9f3503fe0330bcf6b5394b->enter($__internal_361f6a77159f8742051d14eedc1c1816816011177d9f3503fe0330bcf6b5394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_361f6a77159f8742051d14eedc1c1816816011177d9f3503fe0330bcf6b5394b->leave($__internal_361f6a77159f8742051d14eedc1c1816816011177d9f3503fe0330bcf6b5394b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7da4ce8162fbe41b1e45b9d59bc27ae8b4b71731443980e852b2809f758be5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da4ce8162fbe41b1e45b9d59bc27ae8b4b71731443980e852b2809f758be5a3->enter($__internal_7da4ce8162fbe41b1e45b9d59bc27ae8b4b71731443980e852b2809f758be5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7da4ce8162fbe41b1e45b9d59bc27ae8b4b71731443980e852b2809f758be5a3->leave($__internal_7da4ce8162fbe41b1e45b9d59bc27ae8b4b71731443980e852b2809f758be5a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9f39ba8cc5c0c4191499a2d6447907909275ae4f3fbaa7f6480aba40c94b534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f39ba8cc5c0c4191499a2d6447907909275ae4f3fbaa7f6480aba40c94b534->enter($__internal_c9f39ba8cc5c0c4191499a2d6447907909275ae4f3fbaa7f6480aba40c94b534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c9f39ba8cc5c0c4191499a2d6447907909275ae4f3fbaa7f6480aba40c94b534->leave($__internal_c9f39ba8cc5c0c4191499a2d6447907909275ae4f3fbaa7f6480aba40c94b534_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24a01720940a7d49675a366bb98ad7f605a581c7d4b30566f30db960b56ac71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a01720940a7d49675a366bb98ad7f605a581c7d4b30566f30db960b56ac71e->enter($__internal_24a01720940a7d49675a366bb98ad7f605a581c7d4b30566f30db960b56ac71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_24a01720940a7d49675a366bb98ad7f605a581c7d4b30566f30db960b56ac71e->leave($__internal_24a01720940a7d49675a366bb98ad7f605a581c7d4b30566f30db960b56ac71e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
