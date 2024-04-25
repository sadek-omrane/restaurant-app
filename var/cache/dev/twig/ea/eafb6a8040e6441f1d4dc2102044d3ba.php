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
class __TwigTemplate_b5935f5b4353478467da4a39f7fc426e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div style=\"display: flex;\">
\t\t";
        // line 7
        $this->displayBlock('dashboard', $context, $blocks);
        // line 74
        echo "\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 75
        $this->displayBlock('adminContent', $context, $blocks);
        // line 136
        echo "\t\t\t</div>

\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_dashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

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


\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 28, $this->source); })()), [0 => "app_admin_order_crud_index", 1 => "app_admin_order_crud_new", 2 => "app_admin_order_crud_show", 3 => "app_admin_order_crud_edit", 4 => "app_admin_order_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
                } else {
                    echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-shopify\"></i>
\t\t\t\t\t\t\t\t\tOrders
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
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
            } else {
                // line 41
                echo "
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 43, $this->source); })()), [0 => "app_admin_order_crud_index", 1 => "app_admin_order_crud_new", 2 => "app_admin_order_crud_show", 3 => "app_admin_order_crud_edit", 4 => "app_admin_order_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
                } else {
                    echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-shopify\"></i>
\t\t\t\t\t\t\t\t\tOrders
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 49, $this->source); })()), [0 => "app_admin_booking_crud_index", 1 => "app_admin_booking_crud_new", 2 => "app_admin_booking_crud_show", 3 => "app_admin_booking_crud_edit", 4 => "app_admin_booking_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
                } else {
                    echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-door-closed\"></i>
\t\t\t\t\t\t\t\t\tBookings
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 55
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_food_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 55, $this->source); })()), [0 => "app_admin_food_crud_index", 1 => "app_admin_food_crud_new", 2 => "app_admin_food_crud_show", 3 => "app_admin_food_crud_edit", 4 => "app_admin_food_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
                } else {
                    echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-utensils\"></i>
\t\t\t\t\t\t\t\t\tFoods
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 61
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_crud_index");
                echo "\" ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 61, $this->source); })()), [0 => "app_admin_category_crud_index", 1 => "app_admin_category_crud_new", 2 => "app_admin_category_crud_show", 3 => "app_admin_category_crud_edit", 4 => "app_admin_category_crud_delete"])) {
                    echo " class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" ";
                } else {
                    echo " class=\"nav-link link-dark\" style=\"background-color: transparent;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-tags\"></i>
\t\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<hr>

\t\t\t\t</div>

\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 75
    public function block_adminContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "adminContent"));

        // line 76
        echo "\t\t\t\t\t<h1 style=\"margin: 50px 0 20px 0;text-align: center;\">Dashboard</h1>
\t\t\t\t\t";
        // line 77
        if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "roles", [], "any", false, false, false, 77))) {
            // line 78
            echo "\t\t\t\t\t\t<div style=\"display:flex; justify-content: space-between;\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem; height: 450px\">

\t\t\t\t\t\t\t\t<div style=\"background-color: #ffbe33c2; width: ; height: 200px; display:flex; justify-content: center; align-items: center;\">
\t\t\t\t\t\t\t\t\t<i style=\"color: white; font-size: 80px;\" class=\"fa-solid fa-users-line\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"padding: 20px 10px\">
\t\t\t\t\t\t\t\t\t<h5 style=\"text-align: center;\">USERS</h5>
\t\t\t\t\t\t\t\t\t<div>how many admins</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div>how many users</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div>how many visitors</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 91, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem; height: 450px\">

\t\t\t\t\t\t\t\t<div style=\"background-color: #ffbe33c2; width: ; height: 200px; display:flex; justify-content: center; align-items: center;\">
\t\t\t\t\t\t\t\t\t<i style=\"color: white; font-size: 80px;\" class=\"fa-solid fa-list-check\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"padding: 20px 10px\">
\t\t\t\t\t\t\t\t\t<h5 style=\"text-align: center;\">ORDERS</h5>
\t\t\t\t\t\t\t\t\t<div>incoms</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["incoms"]) || array_key_exists("incoms", $context) ? $context["incoms"] : (function () { throw new RuntimeError('Variable "incoms" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\$</div>
\t\t\t\t\t\t\t\t\t<div>how many order</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div>order delivred</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["delivred"]) || array_key_exists("delivred", $context) ? $context["delivred"] : (function () { throw new RuntimeError('Variable "delivred" does not exist.', 108, $this->source); })()), "html", null, true);
            echo "%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>order payed</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["payed"]) || array_key_exists("payed", $context) ? $context["payed"] : (function () { throw new RuntimeError('Variable "payed" does not exist.', 112, $this->source); })()), "html", null, true);
            echo "%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem; height: 450px\">

\t\t\t\t\t\t\t\t<div style=\"background-color: #ffbe33c2; width: ; height: 200px; display:flex; justify-content: center; align-items: center;\">
\t\t\t\t\t\t\t\t\t<i style=\"color: white; font-size: 80px;\" class=\"fa-solid fa-building\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid \"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"padding: 20px 10px\">
\t\t\t\t\t\t\t\t\t<h5 style=\"text-align: center;\">RESTAURANT</h5>
\t\t\t\t\t\t\t\t\t<div>hom many restaurants</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 125, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>how many categories</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div>how many foods</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["foods"]) || array_key_exists("foods", $context) ? $context["foods"] : (function () { throw new RuntimeError('Variable "foods" does not exist.', 130, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 135
        echo "\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  360 => 135,  352 => 130,  347 => 128,  341 => 125,  325 => 112,  318 => 108,  312 => 105,  306 => 102,  292 => 91,  287 => 89,  282 => 87,  271 => 78,  269 => 77,  266 => 76,  259 => 75,  247 => 68,  244 => 67,  229 => 61,  214 => 55,  199 => 49,  184 => 43,  180 => 41,  165 => 35,  149 => 28,  132 => 20,  129 => 19,  127 => 18,  113 => 13,  110 => 12,  108 => 11,  103 => 8,  96 => 7,  86 => 136,  84 => 75,  81 => 74,  79 => 7,  76 => 6,  69 => 5,  55 => 3,  38 => 1,);
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


\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_order_crud_index')}}\" {% if route_name in ['app_admin_order_crud_index', 'app_admin_order_crud_new', 'app_admin_order_crud_show', 'app_admin_order_crud_edit', 'app_admin_order_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-shopify\"></i>
\t\t\t\t\t\t\t\t\tOrders
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_restaurant_crud_index')}}\" {% if route_name in ['app_admin_restaurant_crud_index', 'app_admin_restaurant_crud_new', 'app_admin_restaurant_crud_show', 'app_admin_restaurant_crud_edit', 'app_admin_restaurant_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-shop\"></i>
\t\t\t\t\t\t\t\t\tRestaurants
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_order_crud_index')}}\" {% if route_name in ['app_admin_order_crud_index', 'app_admin_order_crud_new', 'app_admin_order_crud_show', 'app_admin_order_crud_edit', 'app_admin_order_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-shopify\"></i>
\t\t\t\t\t\t\t\t\tOrders
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_booking_crud_index')}}\" {% if route_name in ['app_admin_booking_crud_index', 'app_admin_booking_crud_new', 'app_admin_booking_crud_show', 'app_admin_booking_crud_edit', 'app_admin_booking_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-door-closed\"></i>
\t\t\t\t\t\t\t\t\tBookings
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_food_crud_index')}}\" {% if route_name in ['app_admin_food_crud_index', 'app_admin_food_crud_new', 'app_admin_food_crud_show', 'app_admin_food_crud_edit', 'app_admin_food_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-utensils\"></i>
\t\t\t\t\t\t\t\t\tFoods
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_category_crud_index')}}\" {% if route_name in ['app_admin_category_crud_index', 'app_admin_category_crud_new', 'app_admin_category_crud_show', 'app_admin_category_crud_edit', 'app_admin_category_crud_delete'] %} class=\"nav-link link-dark active\" style=\"background-color: #ffbe33;\" {% else %} class=\"nav-link link-dark\" style=\"background-color: transparent;\" {% endif %}>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-tags\"></i>
\t\t\t\t\t\t\t\t\tCategories
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{%endif%}
\t\t\t\t\t</ul>
\t\t\t\t\t<hr>

\t\t\t\t</div>

\t\t\t{% endblock %}
\t\t\t<div class=\"container\">
\t\t\t\t{% block adminContent %}
\t\t\t\t\t<h1 style=\"margin: 50px 0 20px 0;text-align: center;\">Dashboard</h1>
\t\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in app.user.roles %}
\t\t\t\t\t\t<div style=\"display:flex; justify-content: space-between;\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem; height: 450px\">

\t\t\t\t\t\t\t\t<div style=\"background-color: #ffbe33c2; width: ; height: 200px; display:flex; justify-content: center; align-items: center;\">
\t\t\t\t\t\t\t\t\t<i style=\"color: white; font-size: 80px;\" class=\"fa-solid fa-users-line\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"padding: 20px 10px\">
\t\t\t\t\t\t\t\t\t<h5 style=\"text-align: center;\">USERS</h5>
\t\t\t\t\t\t\t\t\t<div>how many admins</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+{{admins}}</div>
\t\t\t\t\t\t\t\t\t<div>how many users</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+{{users}}</div>
\t\t\t\t\t\t\t\t\t<div>how many visitors</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+{{visitors}}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem; height: 450px\">

\t\t\t\t\t\t\t\t<div style=\"background-color: #ffbe33c2; width: ; height: 200px; display:flex; justify-content: center; align-items: center;\">
\t\t\t\t\t\t\t\t\t<i style=\"color: white; font-size: 80px;\" class=\"fa-solid fa-list-check\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"padding: 20px 10px\">
\t\t\t\t\t\t\t\t\t<h5 style=\"text-align: center;\">ORDERS</h5>
\t\t\t\t\t\t\t\t\t<div>incoms</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+{{incoms}}
\t\t\t\t\t\t\t\t\t\t\$</div>
\t\t\t\t\t\t\t\t\t<div>how many order</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+{{orders}}</div>
\t\t\t\t\t\t\t\t\t<div>order delivred</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{delivred}}%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>order payed</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{payed}}%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem; height: 450px\">

\t\t\t\t\t\t\t\t<div style=\"background-color: #ffbe33c2; width: ; height: 200px; display:flex; justify-content: center; align-items: center;\">
\t\t\t\t\t\t\t\t\t<i style=\"color: white; font-size: 80px;\" class=\"fa-solid fa-building\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid \"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"padding: 20px 10px\">
\t\t\t\t\t\t\t\t\t<h5 style=\"text-align: center;\">RESTAURANT</h5>
\t\t\t\t\t\t\t\t\t<div>hom many restaurants</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+{{restaurants}}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>how many categories</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+{{categories}}</div>
\t\t\t\t\t\t\t\t\t<div>how many foods</div>
\t\t\t\t\t\t\t\t\t<div style=\"color: #007bff; font-size: 20px\">+{{foods}}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endblock %}
\t\t\t</div>

\t\t</div>
\t{% endblock %}
", "admin/index.html.twig", "/home/sadek/projects/symfony-restaurants/templates/admin/index.html.twig");
    }
}
