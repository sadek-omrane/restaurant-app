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

/* base.html.twig */
class __TwigTemplate_3efd117dc785e49555b287727ee16e32d29e7ce699a8d1792d55f54e0df3db9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'dashboard' => [$this, 'block_dashboard'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "

\t</head>
\t<body>
\t\t<div style=\"display:flex;\"> ";
        // line 22
        $this->displayBlock('dashboard', $context, $blocks);
        // line 23
        echo "\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 24
        $this->displayBlock('nav', $context, $blocks);
        // line 66
        echo "
\t\t\t\t\t\t\t";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 186
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 189
        $this->displayBlock('javascripts', $context, $blocks);
        // line 193
        echo "\t\t\t\t</body>
\t\t\t</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Restaurant
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t\t";
        // line 15
        echo "
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_dashboard($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dashboard"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 25
        echo "\t\t\t\t\t<header class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom \">
\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"d-flex align-items-center col-md-3 mb-md-0 text-dark text-decoration-none h4 mb-3 font-weight-normal\">Restaurant</a>
\t\t\t\t\t\t<ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\">
\t\t\t\t\t\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "\t\t\t\t\t\t\t\t";
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "roles", [], "any", false, false, false, 29))) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 31
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                echo "\" class=\"nav-link px-2 link-dark\">
\t\t\t\t\t\t\t\t\t\t\tAdmin</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 35
            echo "
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"nav-link px-2 link-dark\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_index", ["Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"nav-link px-2 link-dark\">Order</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 link-dark\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 link-dark\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t<div class=\"col-md-3 text-end\">
\t\t\t\t\t\t\t\t\t";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user-check\" style=\"color: #0d6efd; margin: 0 10px 0 0; font-size: 17px;\"></i>
\t\t\t\t\t\t\t\t\t\t";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"btn btn-primary\" style=\"margin: 0 0 0 10px;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-from-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-outline-primary me-2\">Login</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"btn btn-outline-primary me-2\">Sign-up</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 69
        echo "\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<symbol id=\"bootstrap\" viewbox=\"0 0 118 94\">
\t\t\t\t\t\t\t\t\t\t<title>Bootstrap</title>
\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z\"></path>
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t<symbol id=\"facebook\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z\"/>
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t<symbol id=\"instagram\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z\"/>
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t<symbol id=\"twitter\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z\"/>
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t</svg>


\t\t\t\t\t\t\t\t<footer class=\"py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Section</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Section</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Section</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 offset-1\">
\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Subscribe to our newsletter</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Monthly digest of whats new and exciting from us.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex w-100 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"newsletter1\" class=\"visually-hidden\">Email address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"newsletter1\" type=\"text\" class=\"form-control\" placeholder=\"Email address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">Subscribe</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between py-3 my-3 border-top\">
\t\t\t\t\t\t\t\t\t\t<p>&copy; 2021 Company, Inc. All rights reserved.</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#twitter\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#instagram\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#facebook\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 189
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 190
        echo "\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
\t\t\t\t\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  394 => 190,  387 => 189,  264 => 69,  257 => 68,  245 => 67,  235 => 62,  230 => 60,  225 => 59,  218 => 55,  214 => 54,  211 => 53,  209 => 52,  204 => 49,  192 => 40,  186 => 37,  182 => 35,  175 => 31,  172 => 30,  169 => 29,  167 => 28,  162 => 26,  159 => 25,  152 => 24,  140 => 22,  131 => 16,  128 => 15,  122 => 11,  119 => 10,  112 => 9,  98 => 6,  89 => 193,  87 => 189,  82 => 186,  79 => 68,  77 => 67,  74 => 66,  72 => 24,  69 => 23,  67 => 22,  61 => 18,  59 => 9,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Restaurant
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}


\t</head>
\t<body>
\t\t<div style=\"display:flex;\"> {% block dashboard %}{% endblock %}
\t\t\t<div class=\"container\">
\t\t\t\t{% block nav %}
\t\t\t\t\t<header class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom \">
\t\t\t\t\t\t<a href=\"{{path('home')}}\" class=\"d-flex align-items-center col-md-3 mb-md-0 text-dark text-decoration-none h4 mb-3 font-weight-normal\">Restaurant</a>
\t\t\t\t\t\t<ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\">
\t\t\t\t\t\t\t{%if app.user %}
\t\t\t\t\t\t\t\t{% if 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_admin_dashboard')}}\" class=\"nav-link px-2 link-dark\">
\t\t\t\t\t\t\t\t\t\t\tAdmin</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{%endif%}

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('home')}}\" class=\"nav-link px-2 link-dark\">Home</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_order_index', {Uid: app.user.id})}}\" class=\"nav-link px-2 link-dark\">Order</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 link-dark\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 link-dark\">About</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{%endif%}
\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t<div class=\"col-md-3 text-end\">
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user-check\" style=\"color: #0d6efd; margin: 0 10px 0 0; font-size: 17px;\"></i>
\t\t\t\t\t\t\t\t\t\t{{app.user.email}}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('logout')}}\" class=\"btn btn-primary\" style=\"margin: 0 0 0 10px;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-from-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('login')}}\" class=\"btn btn-outline-primary me-2\">Login</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_register')}}\" class=\"btn btn-outline-primary me-2\">Sign-up</a>
\t\t\t\t\t\t\t\t\t\t{%endif%}

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t\t\t\t{% block footer %}
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<symbol id=\"bootstrap\" viewbox=\"0 0 118 94\">
\t\t\t\t\t\t\t\t\t\t<title>Bootstrap</title>
\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z\"></path>
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t<symbol id=\"facebook\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z\"/>
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t<symbol id=\"instagram\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z\"/>
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t<symbol id=\"twitter\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z\"/>
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t</svg>


\t\t\t\t\t\t\t\t<footer class=\"py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Section</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Section</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Section</h5>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Home</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Features</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link p-0 text-muted\">About</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 offset-1\">
\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Subscribe to our newsletter</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Monthly digest of whats new and exciting from us.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex w-100 gap-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"newsletter1\" class=\"visually-hidden\">Email address</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"newsletter1\" type=\"text\" class=\"form-control\" placeholder=\"Email address\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">Subscribe</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between py-3 my-3 border-top\">
\t\t\t\t\t\t\t\t\t\t<p>&copy; 2021 Company, Inc. All rights reserved.</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#twitter\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#instagram\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#facebook\"/></svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% block javascripts %}
\t\t\t\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t\t\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t\t\t\t{% endblock %}
\t\t\t\t</body>
\t\t\t</html>
", "base.html.twig", "/home/sadek/projects/Restaurant/templates/base.html.twig");
    }
}
