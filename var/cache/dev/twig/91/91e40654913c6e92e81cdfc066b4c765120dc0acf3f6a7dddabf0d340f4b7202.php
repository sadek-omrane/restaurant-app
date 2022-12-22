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
class __TwigTemplate_d07ab82f1efc6477e0e0078ab37c0675c8c0018a4c3765194b9c72eabeb2d07c extends Template
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
            'dashboard' => [$this, 'block_dashboard'],
            'adminContent' => [$this, 'block_adminContent'],
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div style=\"display: flex;\">
\t\t";
        // line 7
        $this->displayBlock('dashboard', $context, $blocks);
        // line 66
        echo "\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 67
        $this->displayBlock('adminContent', $context, $blocks);
        // line 70
        echo "\t\t\t</div>

\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_dashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        // line 8
        echo "\t\t\t<div class=\"d-flex flex-column flex-shrink-0 p-3\" style=\"width: 230px; min-height: 89vh;\">
\t\t\t\t<hr>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto myDIV\">
\t\t\t\t\t";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 13, $this->source); })()), [0 => "app_admin_dashboard"])) {
                echo " class=\"nav-link link-dark active \" style=\"background-color: #ffbe33;\" ";
            } else {
                echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chart-line\"></i>
\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 18
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "roles", [], "any", false, false, false, 18))) {
                // line 19
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 20
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 20, $this->source); })()), [0 => "app_admin_user_crud_index", 1 => "app_admin_user_crud_new", 2 => "app_admin_user_crud_show", 3 => "app_admin_user_crud_edit", 4 => "app_admin_user_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
                } else {
                    echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user-group\"></i>
\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 26
            echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_crud_index");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 28, $this->source); })()), [0 => "app_admin_order_crud_index", 1 => "app_admin_order_crud_new", 2 => "app_admin_order_crud_show", 3 => "app_admin_order_crud_edit", 4 => "app_admin_order_crud_delete"])) {
                echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
            } else {
                echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-shopify\"></i>
\t\t\t\t\t\t\t\tOrders
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 33
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "roles", [], "any", false, false, false, 33))) {
                // line 34
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 35
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_restaurant_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 35, $this->source); })()), [0 => "app_admin_restaurant_crud_index", 1 => "app_admin_restaurant_crud_new", 2 => "app_admin_restaurant_crud_show", 3 => "app_admin_restaurant_crud_edit", 4 => "app_admin_restaurant_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
                } else {
                    echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-shop\"></i>
\t\t\t\t\t\t\t\t\tRestaurants
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_crud_index");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 42, $this->source); })()), [0 => "app_admin_booking_crud_index", 1 => "app_admin_booking_crud_new", 2 => "app_admin_booking_crud_show", 3 => "app_admin_booking_crud_edit", 4 => "app_admin_booking_crud_delete"])) {
                echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
            } else {
                echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-door-closed\"></i>
\t\t\t\t\t\t\t\tBookings
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_food_crud_index");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 48, $this->source); })()), [0 => "app_admin_food_crud_index", 1 => "app_admin_food_crud_new", 2 => "app_admin_food_crud_show", 3 => "app_admin_food_crud_edit", 4 => "app_admin_food_crud_delete"])) {
                echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
            } else {
                echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-utensils\"></i>
\t\t\t\t\t\t\t\tFoods
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_crud_index");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 54, $this->source); })()), [0 => "app_admin_category_crud_index", 1 => "app_admin_category_crud_new", 2 => "app_admin_category_crud_show", 3 => "app_admin_category_crud_edit", 4 => "app_admin_category_crud_delete"])) {
                echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
            } else {
                echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-tags\"></i>
\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<hr>

\t\t\t\t</div>

\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 67
    public function block_adminContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "adminContent"));

        // line 68
        echo "\t\t\t\t\t<h1 style=\"margin: 50px 0 20px 0;text-align: center;\">Dashboard</h1>
\t\t\t\t";
        
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
        return array (  252 => 68,  245 => 67,  233 => 60,  218 => 54,  203 => 48,  188 => 42,  185 => 41,  170 => 35,  167 => 34,  165 => 33,  151 => 28,  147 => 26,  132 => 20,  129 => 19,  127 => 18,  113 => 13,  110 => 12,  108 => 11,  103 => 8,  96 => 7,  86 => 70,  84 => 67,  81 => 66,  79 => 7,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}
{% block body %}
\t<div style=\"display: flex;\">
\t\t{% block dashboard %}
\t\t\t<div class=\"d-flex flex-column flex-shrink-0 p-3\" style=\"width: 230px; min-height: 89vh;\">
\t\t\t\t<hr>
\t\t\t\t<ul class=\"nav nav-pills flex-column mb-auto myDIV\">
\t\t\t\t\t{%if app.user %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_admin_dashboard')}}\" {% if route_name in ['app_admin_dashboard'] %} class=\"nav-link link-dark active \" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chart-line\"></i>
\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_user_crud_index')}}\" {% if route_name in ['app_admin_user_crud_index', 'app_admin_user_crud_new', 'app_admin_user_crud_show', 'app_admin_user_crud_edit', 'app_admin_user_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user-group\"></i>
\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_admin_order_crud_index')}}\" {% if route_name in ['app_admin_order_crud_index', 'app_admin_order_crud_new', 'app_admin_order_crud_show', 'app_admin_order_crud_edit', 'app_admin_order_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-shopify\"></i>
\t\t\t\t\t\t\t\tOrders
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_restaurant_crud_index')}}\" {% if route_name in ['app_admin_restaurant_crud_index', 'app_admin_restaurant_crud_new', 'app_admin_restaurant_crud_show', 'app_admin_restaurant_crud_edit', 'app_admin_restaurant_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-shop\"></i>
\t\t\t\t\t\t\t\t\tRestaurants
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_admin_booking_crud_index')}}\" {% if route_name in ['app_admin_booking_crud_index', 'app_admin_booking_crud_new', 'app_admin_booking_crud_show', 'app_admin_booking_crud_edit', 'app_admin_booking_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-door-closed\"></i>
\t\t\t\t\t\t\t\tBookings
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_admin_food_crud_index')}}\" {% if route_name in ['app_admin_food_crud_index', 'app_admin_food_crud_new', 'app_admin_food_crud_show', 'app_admin_food_crud_edit', 'app_admin_food_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-utensils\"></i>
\t\t\t\t\t\t\t\tFoods
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('app_admin_category_crud_index')}}\" {% if route_name in ['app_admin_category_crud_index', 'app_admin_category_crud_new', 'app_admin_category_crud_show', 'app_admin_category_crud_edit', 'app_admin_category_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-tags\"></i>
\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{%endif%}
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>

\t\t\t\t</div>

\t\t\t{% endblock %}
\t\t\t<div class=\"container\">
\t\t\t\t{% block adminContent %}
\t\t\t\t\t<h1 style=\"margin: 50px 0 20px 0;text-align: center;\">Dashboard</h1>
\t\t\t\t{% endblock %}
\t\t\t</div>

\t\t</div>
\t{% endblock %}
", "admin/index.html.twig", "/home/sadek/projects/Restaurant/templates/admin/index.html.twig");
    }
}
