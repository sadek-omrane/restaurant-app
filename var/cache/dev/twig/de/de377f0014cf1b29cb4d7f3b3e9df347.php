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

/* base/header.html.twig */
class __TwigTemplate_acee1fd14d9f3998c62cecb862808884 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/header.html.twig"));

        // line 1
        echo "<div class=\"hero_area\">
\t<div class=\"bg-box\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/hero-bg.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t</div>
\t<!-- header section strats -->
\t<header class=\"header_section\">
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-expand-lg custom_nav-container \">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\t<span>
\t\t\t\t\t\tFeane
\t\t\t\t\t</span>
\t\t\t\t</a>

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav  mx-auto \">
\t\t\t\t\t\t";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "\t\t\t\t\t\t\t";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "roles", [], "any", false, false, false, 22))) {
                // line 23
                echo "\t\t\t\t\t\t\t\t<li ";
                if (twig_in_filter((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 23, $this->source); })()), [0 => "app_admin_dashboard", 1 => "app_admin_category_crud_index", 2 => "app_admin_category_crud_new", 3 => "app_admin_category_crud_show", 4 => "app_admin_category_crud_edit", 5 => "app_admin_category_crud_delete", 6 => "app_admin_user_crud_delete", 7 => "app_admin_user_crud_edit", 8 => "app_admin_user_crud_show", 9 => "app_admin_user_crud_new", 10 => "app_admin_user_crud_index", 11 => "app_admin_restaurant_crud_index", 12 => "app_admin_restaurant_crud_new", 13 => "app_admin_restaurant_crud_show", 14 => "app_admin_restaurant_crud_edit", 15 => "app_admin_restaurant_crud_delete", 16 => "app_admin_restaurant_crud_delete", 17 => "app_admin_restaurant_crud_edit", 18 => "app_admin_restaurant_crud_show", 19 => "app_admin_restaurant_crud_new", 20 => "app_admin_restaurant_crud_index", 21 => "app_admin_order_crud_index", 22 => "app_admin_order_crud_new", 23 => "app_admin_order_crud_show", 24 => "app_admin_order_crud_edit", 25 => "app_admin_order_crud_delete", 26 => "app_admin_food_crud_delete", 27 => "app_admin_food_crud_edit", 28 => "app_admin_food_crud_show", 29 => "app_admin_food_crud_new", 30 => "app_admin_food_crud_index"])) {
                    echo " class=\"nav-item active\" ";
                } else {
                    echo " class=\"nav-item\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 24
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                echo "\">Admin</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_index");
        echo "\">Bookings</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"user_option\">
\t\t\t\t\t\t\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<a class=\"user_link\" style=\"text-decoration: none;\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_index", ["Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>

\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"user_link\" style=\"text-decoration: none;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 56
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56)), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"order_online\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-from-bracket\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"order_online\">Login
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t<!-- end header section -->
\t\t\t\t<!-- slider section -->
\t\t\t\t";
        // line 75
        if (((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 75, $this->source); })()) == "home")) {
            // line 76
            echo "\t\t\t\t\t<section class=\"slider_section \">
\t\t\t\t\t\t<div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-lg-6 \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFast Food Restaurant
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDoloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrder Now
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item \">
\t\t\t\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-lg-6 \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFast Food Restaurant
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDoloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrder Now
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-lg-6 \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFast Food Restaurant
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDoloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrder Now
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t<li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t\t<li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t<li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</section>
\t\t\t\t";
        }
        // line 154
        echo "
\t\t\t\t<!-- end slider section -->
\t\t\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 154,  169 => 76,  167 => 75,  158 => 68,  150 => 64,  143 => 60,  136 => 56,  125 => 48,  118 => 43,  116 => 42,  109 => 38,  103 => 35,  94 => 29,  91 => 28,  88 => 27,  82 => 24,  73 => 23,  70 => 22,  68 => 21,  53 => 9,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero_area\">
\t<div class=\"bg-box\">
\t\t<img src=\"{{asset('uploads/brochures/hero-bg.jpg')}}\" alt=\"\">
\t</div>
\t<!-- header section strats -->
\t<header class=\"header_section\">
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-expand-lg custom_nav-container \">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('home') }}\">
\t\t\t\t\t<span>
\t\t\t\t\t\tFeane
\t\t\t\t\t</span>
\t\t\t\t</a>

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav  mx-auto \">
\t\t\t\t\t\t{%if app.user %}
\t\t\t\t\t\t\t{% if 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t\t<li {% if route_name in ['app_admin_dashboard', 'app_admin_category_crud_index', 'app_admin_category_crud_new', 'app_admin_category_crud_show', 'app_admin_category_crud_edit', 'app_admin_category_crud_delete', 'app_admin_user_crud_delete', 'app_admin_user_crud_edit', 'app_admin_user_crud_show', 'app_admin_user_crud_new', 'app_admin_user_crud_index', 'app_admin_restaurant_crud_index', 'app_admin_restaurant_crud_new', 'app_admin_restaurant_crud_show', 'app_admin_restaurant_crud_edit', 'app_admin_restaurant_crud_delete', 'app_admin_restaurant_crud_delete', 'app_admin_restaurant_crud_edit', 'app_admin_restaurant_crud_show', 'app_admin_restaurant_crud_new', 'app_admin_restaurant_crud_index', 'app_admin_order_crud_index', 'app_admin_order_crud_new', 'app_admin_order_crud_show', 'app_admin_order_crud_edit', 'app_admin_order_crud_delete', 'app_admin_food_crud_delete', 'app_admin_food_crud_edit', 'app_admin_food_crud_show', 'app_admin_food_crud_new', 'app_admin_food_crud_index'] %} class=\"nav-item active\" {% else %} class=\"nav-item\" {% endif %}>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_admin_dashboard')}}\">Admin</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{%endif%}
\t\t\t\t\t\t\t\t{%endif%}
\t\t\t\t\t\t\t\t<li class=\"nav-item \">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('home')}}\">Home
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('about')}}\">About</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_booking_index')}}\">Bookings</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"user_option\">
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<a class=\"user_link\" style=\"text-decoration: none;\" href=\"{{path('app_order_index', {Uid: app.user.id})}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>

\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"user_link\" style=\"text-decoration: none;\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t<span>{{app.user.name|upper}}</span>
\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t<a href=\"{{path('logout')}}\" class=\"order_online\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-from-bracket\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"{{path('login')}}\" class=\"order_online\">Login
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{%endif%}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t<!-- end header section -->
\t\t\t\t<!-- slider section -->
\t\t\t\t{% if route_name == 'home' %}
\t\t\t\t\t<section class=\"slider_section \">
\t\t\t\t\t\t<div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-lg-6 \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFast Food Restaurant
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDoloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrder Now
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item \">
\t\t\t\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-lg-6 \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFast Food Restaurant
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDoloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrder Now
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-lg-6 \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFast Food Restaurant
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDoloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOrder Now
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t<li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t\t<li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t<li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</section>
\t\t\t\t{% endif %}

\t\t\t\t<!-- end slider section -->
\t\t\t</div>
", "base/header.html.twig", "/home/sadek/projects/symfony-restaurants/templates/base/header.html.twig");
    }
}
