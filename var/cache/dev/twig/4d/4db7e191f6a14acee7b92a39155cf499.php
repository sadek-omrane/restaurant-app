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

/* admin/order_crud/edit.html.twig */
class __TwigTemplate_156b65123f1ec7ebd57ee6a7af0e7c7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'adminContent' => [$this, 'block_adminContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order_crud/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/order_crud/edit.html.twig", 1);
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
    public function block_adminContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "adminContent"));

        // line 7
        echo "\t<div style=\"min-height: 70vh\">
\t\t<h1 style=\"margin: 50px 0 20px 0;text-align: center;\">Edit Order</h1>

\t\t";
        // line 10
        echo twig_include($this->env, $context, "admin/order_crud/_form.html.twig", ["button_label" => "Update"]);
        echo "
\t\t<span style=\"position: relative;left: 39%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbottom: 75px;\">
\t\t\t";
        // line 13
        echo twig_include($this->env, $context, "admin/order_crud/_delete_form.html.twig");
        echo "
\t\t</span>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/order_crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  79 => 10,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block title %}Edit Order
{% endblock %}

{% block adminContent %}
\t<div style=\"min-height: 70vh\">
\t\t<h1 style=\"margin: 50px 0 20px 0;text-align: center;\">Edit Order</h1>

\t\t{{ include('admin/order_crud/_form.html.twig', {'button_label': 'Update'}) }}
\t\t<span style=\"position: relative;left: 39%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbottom: 75px;\">
\t\t\t{{ include('admin/order_crud/_delete_form.html.twig') }}
\t\t</span>
\t</div>
{% endblock %}
", "admin/order_crud/edit.html.twig", "/home/sadek/projects/symfony-restaurants/templates/admin/order_crud/edit.html.twig");
    }
}
