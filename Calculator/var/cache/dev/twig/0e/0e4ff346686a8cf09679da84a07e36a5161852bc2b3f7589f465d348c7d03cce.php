<?php

/* form/fields.html.twig */
class __TwigTemplate_732067767a8f8aa33bcd119fdfb23285c7933ac8fb998b6cb7db3a89391528a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32ed7a1d1158ce79f3ab893b29b3691da34b4a82f1eaf089cda60e483e8e5fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ed7a1d1158ce79f3ab893b29b3691da34b4a82f1eaf089cda60e483e8e5fb5->enter($__internal_32ed7a1d1158ce79f3ab893b29b3691da34b4a82f1eaf089cda60e483e8e5fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_32ed7a1d1158ce79f3ab893b29b3691da34b4a82f1eaf089cda60e483e8e5fb5->leave($__internal_32ed7a1d1158ce79f3ab893b29b3691da34b4a82f1eaf089cda60e483e8e5fb5_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_0ff771af41b0c0e8d9cd04cd56137c5163e5fc3e5d02e949ec7d746286c65bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff771af41b0c0e8d9cd04cd56137c5163e5fc3e5d02e949ec7d746286c65bda->enter($__internal_0ff771af41b0c0e8d9cd04cd56137c5163e5fc3e5d02e949ec7d746286c65bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0ff771af41b0c0e8d9cd04cd56137c5163e5fc3e5d02e949ec7d746286c65bda->leave($__internal_0ff771af41b0c0e8d9cd04cd56137c5163e5fc3e5d02e949ec7d746286c65bda_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
