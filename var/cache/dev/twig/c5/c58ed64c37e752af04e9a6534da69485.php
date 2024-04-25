<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* order/edit.html.twig */
class __TwigTemplate_88c24b5fb559d0fd1faf478b451bb698 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Order
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div>
\t\t<h2 style=\"margin: 50px 0 0 0;text-align: center;\">Edit Order</h2>

\t\t";
        // line 10
        echo twig_include($this->env, $context, "order/_form.html.twig", ["button_label" => "Update"]);
        echo "
\t\t";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "isDelivred", [], "any", false, false, false, 11) == false)) {
            // line 12
            echo "\t\t\t<span style=\"position: relative;left: 44%; bottom: 99px;\">
\t\t\t\t";
            // line 13
            echo twig_include($this->env, $context, "order/_delete_form.html.twig");
            echo "
\t\t\t</span>
\t\t\t";
        }
        // line 16
        echo "\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "order/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 16,  88 => 13,  85 => 12,  83 => 11,  79 => 10,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Order
{% endblock %}

{% block body %}
\t<div>
\t\t<h2 style=\"margin: 50px 0 0 0;text-align: center;\">Edit Order</h2>

\t\t{{ include('order/_form.html.twig', {'button_label': 'Update'}) }}
\t\t{%if order.isDelivred ==false %}
\t\t\t<span style=\"position: relative;left: 44%; bottom: 99px;\">
\t\t\t\t{{ include('order/_delete_form.html.twig') }}
\t\t\t</span>
\t\t\t{%endif%}
\t\t</div>
\t{% endblock %}
", "order/edit.html.twig", "/home/sadek/projects/symfony-restaurants/templates/order/edit.html.twig");
    }
}
