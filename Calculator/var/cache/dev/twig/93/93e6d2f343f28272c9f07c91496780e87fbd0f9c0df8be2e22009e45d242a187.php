<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12bdff109465907192d680179d6f4a189c811e51ecd97b77072200740dcb0aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_62b859e8250e281ffad78dc460089c39cebfd8a59bb01ee1029c9efe03069dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b859e8250e281ffad78dc460089c39cebfd8a59bb01ee1029c9efe03069dcc->enter($__internal_62b859e8250e281ffad78dc460089c39cebfd8a59bb01ee1029c9efe03069dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b859e8250e281ffad78dc460089c39cebfd8a59bb01ee1029c9efe03069dcc->leave($__internal_62b859e8250e281ffad78dc460089c39cebfd8a59bb01ee1029c9efe03069dcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d10e64c867c9c50d13264133490648716cd5d2ea2e45c00d7fb265ccad7d96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d10e64c867c9c50d13264133490648716cd5d2ea2e45c00d7fb265ccad7d96a->enter($__internal_5d10e64c867c9c50d13264133490648716cd5d2ea2e45c00d7fb265ccad7d96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5d10e64c867c9c50d13264133490648716cd5d2ea2e45c00d7fb265ccad7d96a->leave($__internal_5d10e64c867c9c50d13264133490648716cd5d2ea2e45c00d7fb265ccad7d96a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d40cc839eda0856c988b5582c8979c6f41402cbbae99a8184e8e5ece1f336b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d40cc839eda0856c988b5582c8979c6f41402cbbae99a8184e8e5ece1f336b6->enter($__internal_0d40cc839eda0856c988b5582c8979c6f41402cbbae99a8184e8e5ece1f336b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0d40cc839eda0856c988b5582c8979c6f41402cbbae99a8184e8e5ece1f336b6->leave($__internal_0d40cc839eda0856c988b5582c8979c6f41402cbbae99a8184e8e5ece1f336b6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4aaa9fbd46ec866121126044ddb0af8a269ecf1d6ac2f2c472eb1ac0ca0ed8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4aaa9fbd46ec866121126044ddb0af8a269ecf1d6ac2f2c472eb1ac0ca0ed8a->enter($__internal_b4aaa9fbd46ec866121126044ddb0af8a269ecf1d6ac2f2c472eb1ac0ca0ed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b4aaa9fbd46ec866121126044ddb0af8a269ecf1d6ac2f2c472eb1ac0ca0ed8a->leave($__internal_b4aaa9fbd46ec866121126044ddb0af8a269ecf1d6ac2f2c472eb1ac0ca0ed8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
