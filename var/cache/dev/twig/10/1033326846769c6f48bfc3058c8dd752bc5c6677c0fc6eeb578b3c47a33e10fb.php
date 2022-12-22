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

/* base/admin-dash.html.twig */
class __TwigTemplate_30fa7a86340d8027e8bd9686f797eb79442fd4930dac9660556db47c14a2f1b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/admin-dash.html.twig"));

        // line 1
        echo "<div class=\"d-flex flex-column flex-shrink-0 p-3\" style=\"width: 230px; height: 100vh;\">
\t<hr>
\t<ul class=\"nav nav-pills flex-column mb-auto myDIV\">
\t\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 6, $this->source); })()), [0 => "app_admin_dashboard"])) {
                echo " class=\"nav-link link-dark active \" ";
            } else {
                echo " class=\"nav-link link-dark\" ";
            }
            echo ">
\t\t\t\t\t<i class=\"fa-solid fa-chart-line\"></i>
\t\t\t\t\tDashboard
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
            // line 11
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "roles", [], "any", false, false, false, 11))) {
                // line 12
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 13
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 13, $this->source); })()), [0 => "app_admin_user_crud_index", 1 => "app_admin_user_crud_new", 2 => "app_admin_user_crud_show", 3 => "app_admin_user_crud_edit", 4 => "app_admin_user_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" ";
                } else {
                    echo " class=\"nav-link link-dark\" ";
                }
                echo ">
\t\t\t\t\t\t<i class=\"fa-solid fa-user-group\"></i>
\t\t\t\t\t\tUsers
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 19
            echo "
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_crud_index");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 21, $this->source); })()), [0 => "app_admin_order_crud_index", 1 => "app_admin_order_crud_new", 2 => "app_admin_order_crud_show", 3 => "app_admin_order_crud_edit", 4 => "app_admin_order_crud_delete"])) {
                echo " class=\"nav-link link-dark active\" ";
            } else {
                echo " class=\"nav-link link-dark\" ";
            }
            echo ">
\t\t\t\t\t<i class=\"fa-brands fa-shopify\"></i>
\t\t\t\t\tOrders
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
            // line 26
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "roles", [], "any", false, false, false, 26))) {
                // line 27
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 28
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_restaurant_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 28, $this->source); })()), [0 => "app_admin_restaurant_crud_index", 1 => "app_admin_restaurant_crud_new", 2 => "app_admin_restaurant_crud_show", 3 => "app_admin_restaurant_crud_edit", 4 => "app_admin_restaurant_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" ";
                } else {
                    echo " class=\"nav-link link-dark\" ";
                }
                echo ">
\t\t\t\t\t\t<i class=\"fa-solid fa-shop\"></i>
\t\t\t\t\t\tRestaurants
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 34
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_food_crud_index");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 35, $this->source); })()), [0 => "app_admin_food_crud_index", 1 => "app_admin_food_crud_new", 2 => "app_admin_food_crud_show", 3 => "app_admin_food_crud_edit", 4 => "app_admin_food_crud_delete"])) {
                echo " class=\"nav-link link-dark active\" ";
            } else {
                echo " class=\"nav-link link-dark\" ";
            }
            echo ">
\t\t\t\t\t<i class=\"fa-solid fa-utensils\"></i>
\t\t\t\t\tFoods
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_crud_index");
            echo "\" ";
            if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 41, $this->source); })()), [0 => "app_admin_category_crud_index", 1 => "app_admin_category_crud_new", 2 => "app_admin_category_crud_show", 3 => "app_admin_category_crud_edit", 4 => "app_admin_category_crud_delete"])) {
                echo " class=\"nav-link link-dark active\" ";
            } else {
                echo " class=\"nav-link link-dark\" ";
            }
            echo ">
\t\t\t\t\t<i class=\"fa-solid fa-tags\"></i>
\t\t\t\t\tCategories
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        }
        // line 47
        echo "\t\t</ul>
\t\t<hr>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/admin-dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 47,  140 => 41,  125 => 35,  122 => 34,  107 => 28,  104 => 27,  102 => 26,  88 => 21,  84 => 19,  69 => 13,  66 => 12,  64 => 11,  50 => 6,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex flex-column flex-shrink-0 p-3\" style=\"width: 230px; height: 100vh;\">
\t<hr>
\t<ul class=\"nav nav-pills flex-column mb-auto myDIV\">
\t\t{%if app.user %}
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_admin_dashboard')}}\" {% if route_name in ['app_admin_dashboard'] %} class=\"nav-link link-dark active \" {% else %} class=\"nav-link link-dark\" {% endif %}>
\t\t\t\t\t<i class=\"fa-solid fa-chart-line\"></i>
\t\t\t\t\tDashboard
\t\t\t\t</a>
\t\t\t</li>
\t\t\t{% if 'ROLE_SUPER_ADMIN' in app.user.roles %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_admin_user_crud_index')}}\" {% if route_name in ['app_admin_user_crud_index', 'app_admin_user_crud_new', 'app_admin_user_crud_show', 'app_admin_user_crud_edit', 'app_admin_user_crud_delete'] %} class=\"nav-link link-dark active\" {% else %} class=\"nav-link link-dark\" {% endif %}>
\t\t\t\t\t\t<i class=\"fa-solid fa-user-group\"></i>
\t\t\t\t\t\tUsers
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}

\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_admin_order_crud_index')}}\" {% if route_name in ['app_admin_order_crud_index', 'app_admin_order_crud_new', 'app_admin_order_crud_show', 'app_admin_order_crud_edit', 'app_admin_order_crud_delete'] %} class=\"nav-link link-dark active\" {% else %} class=\"nav-link link-dark\" {% endif %}>
\t\t\t\t\t<i class=\"fa-brands fa-shopify\"></i>
\t\t\t\t\tOrders
\t\t\t\t</a>
\t\t\t</li>
\t\t\t{% if 'ROLE_SUPER_ADMIN' in app.user.roles %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{path('app_admin_restaurant_crud_index')}}\" {% if route_name in ['app_admin_restaurant_crud_index', 'app_admin_restaurant_crud_new', 'app_admin_restaurant_crud_show', 'app_admin_restaurant_crud_edit', 'app_admin_restaurant_crud_delete'] %} class=\"nav-link link-dark active\" {% else %} class=\"nav-link link-dark\" {% endif %}>
\t\t\t\t\t\t<i class=\"fa-solid fa-shop\"></i>
\t\t\t\t\t\tRestaurants
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_admin_food_crud_index')}}\" {% if route_name in ['app_admin_food_crud_index', 'app_admin_food_crud_new', 'app_admin_food_crud_show', 'app_admin_food_crud_edit', 'app_admin_food_crud_delete'] %} class=\"nav-link link-dark active\" {% else %} class=\"nav-link link-dark\" {% endif %}>
\t\t\t\t\t<i class=\"fa-solid fa-utensils\"></i>
\t\t\t\t\tFoods
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{path('app_admin_category_crud_index')}}\" {% if route_name in ['app_admin_category_crud_index', 'app_admin_category_crud_new', 'app_admin_category_crud_show', 'app_admin_category_crud_edit', 'app_admin_category_crud_delete'] %} class=\"nav-link link-dark active\" {% else %} class=\"nav-link link-dark\" {% endif %}>
\t\t\t\t\t<i class=\"fa-solid fa-tags\"></i>
\t\t\t\t\tCategories
\t\t\t\t</a>
\t\t\t</li>
\t\t\t{%endif%}
\t\t</ul>
\t\t<hr>

\t</div>
", "base/admin-dash.html.twig", "/home/sadek/projects/Restaurant/templates/base/admin-dash.html.twig");
    }
}
