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

/* admin/index.html.twig */
class __TwigTemplate_453d79fe75f2e8b3a663e493a59f9362bfa82cce81d9d4a3acf87be0456fc28b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'dashboard' => [$this, 'block_dashboard'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_dashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        // line 6
        echo "\t<div class=\"d-flex flex-column flex-shrink-0 p-3\" style=\"width: 230px; height: 100vh;\">
\t\t<hr>
\t\t<ul class=\"nav nav-pills flex-column mb-auto myDIV\">
\t\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "\t\t\t\t<li>

\t\t\t\t\t<a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
            echo "\" class=\"nav-link active link-dark dashLink\">
\t\t\t\t\t\t<i class=\"fa-solid fa-gauge-high\" style=\"font-size: 18px; margin: 0 5px 0 0;\"></i>
\t\t\t\t\t\tDashboard
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 17
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "roles", [], "any", false, false, false, 17))) {
                // line 18
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_crud_index");
                echo "\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 25
            echo "
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_crud_index");
            echo "\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#grid\"/></svg>
\t\t\t\t\t\tOrders
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 32
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32))) {
                // line 33
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_restaurant_crud_index");
                echo "\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#people-circle\"/></svg>
\t\t\t\t\t\t\tRestaurants
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_food_crud_index");
            echo "\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#people-circle\"/></svg>
\t\t\t\t\t\tFoods
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_crud_index");
            echo "\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#people-circle\"/></svg>
\t\t\t\t\t\tCategories
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 53
        echo "\t\t\t</ul>
\t\t\t<hr>

\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "\t\t<div style=\"height: 70vh;\"></div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  166 => 59,  155 => 53,  146 => 47,  137 => 41,  134 => 40,  125 => 34,  122 => 33,  120 => 32,  112 => 27,  108 => 25,  99 => 19,  96 => 18,  94 => 17,  86 => 12,  82 => 10,  80 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}
{% block dashboard %}
\t<div class=\"d-flex flex-column flex-shrink-0 p-3\" style=\"width: 230px; height: 100vh;\">
\t\t<hr>
\t\t<ul class=\"nav nav-pills flex-column mb-auto myDIV\">
\t\t\t{%if app.user %}
\t\t\t\t<li>

\t\t\t\t\t<a href=\"{{path('app_admin_dashboard')}}\" class=\"nav-link active link-dark dashLink\">
\t\t\t\t\t\t<i class=\"fa-solid fa-gauge-high\" style=\"font-size: 18px; margin: 0 5px 0 0;\"></i>
\t\t\t\t\t\tDashboard
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in app.user.roles %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('app_admin_user_crud_index')}}\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#table\"/></svg>
\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_admin_order_crud_index')}}\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#grid\"/></svg>
\t\t\t\t\t\tOrders
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in app.user.roles %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('app_admin_restaurant_crud_index')}}\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#people-circle\"/></svg>
\t\t\t\t\t\t\tRestaurants
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_admin_food_crud_index')}}\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#people-circle\"/></svg>
\t\t\t\t\t\tFoods
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_admin_category_crud_index')}}\" id=\"dashLink\" class=\"nav-link link-dark dashLink\">
\t\t\t\t\t\t<svg class=\"bi me-2\" width=\"16\" height=\"16\"><use xlink:href=\"#people-circle\"/></svg>
\t\t\t\t\t\tCategories
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{%endif%}
\t\t\t</ul>
\t\t\t<hr>

\t\t</div>
\t{% endblock %}

\t{% block body %}
\t\t<div style=\"height: 70vh;\"></div>
\t{% endblock %}
", "admin/index.html.twig", "/home/sadek/projects/Restaurant/templates/admin/index.html.twig");
    }
}
