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
class __TwigTemplate_d025d312f4711aafc523fadd0b760b7137afdb4c4acf0b3066e6528cb48f7c34 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<!-- Mobile Metas -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<!-- Site Metas -->
\t\t<meta name=\"keywords\" content=\"\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>

\t\t<title>
\t\t\t";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "\t\t</title>
\t\t";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "

\t</head>

\t<body ";
        // line 45
        if ((0 !== twig_compare((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 45, $this->source); })()), "home"))) {
            echo " class=\"sub_page\" ";
        }
        echo ">
\t\t";
        // line 46
        echo twig_include($this->env, $context, "base/header.html.twig");
        echo "


\t\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "

\t\t";
        // line 52
        echo twig_include($this->env, $context, "base/footer.html.twig");
        echo "
\t\t";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Restaurant
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "\t\t\t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/favicon.png"), "html", null, true);
        echo "\" type=\"\">
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t\t";
        // line 27
        echo "\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>

\t\t\t<!--owl slider stylesheet -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\"/>
\t\t\t<!-- nice select  -->
\t\t\t<!-- font awesome style -->
\t\t\t<link
\t\t\thref=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/> <!-- responsive style -->
\t\t\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@8/swiper-bundle.min.css\"/>

\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "\t\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
\t\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- jQery -->
\t\t\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- popper js -->
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- bootstrap js -->
\t\t\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- owl slider -->
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
\t\t\t<!-- isotope js -->
\t\t\t<script src=\"https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js\"></script>
\t\t\t<!-- nice select -->

\t\t\t<!-- custom js -->
\t\t\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Google Map -->
\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\"></script>
\t\t\t<!-- End Google Map -->

\t\t\t<script src=\"https://unpkg.com/swiper@8/swiper-bundle.min.js\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 70,  211 => 62,  204 => 58,  199 => 56,  193 => 54,  186 => 53,  174 => 49,  165 => 39,  159 => 36,  155 => 35,  145 => 28,  142 => 27,  136 => 23,  130 => 21,  123 => 20,  109 => 17,  100 => 77,  98 => 53,  94 => 52,  90 => 50,  88 => 49,  82 => 46,  76 => 45,  70 => 41,  68 => 20,  65 => 19,  63 => 17,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set route_name = app.request.attributes.get('_route') %}
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<!-- Mobile Metas -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t\t<!-- Site Metas -->
\t\t<meta name=\"keywords\" content=\"\"/>
\t\t<meta name=\"description\" content=\"\"/>
\t\t<meta name=\"author\" content=\"\"/>

\t\t<title>
\t\t\t{% block title %}Restaurant
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<link rel=\"shortcut icon\" href=\"{{asset('uploads/brochures/favicon.png')}}\" type=\"\">
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" integrity=\"sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
\t\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/bootstrap.css')}}\"/>

\t\t\t<!--owl slider stylesheet -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\"/>
\t\t\t<!-- nice select  -->
\t\t\t<!-- font awesome style -->
\t\t\t<link
\t\t\thref=\"{{asset('css/font-awesome.min.css')}}\" rel=\"stylesheet\"/> <!-- responsive style -->
\t\t\t<link href=\"{{asset('css/responsive.css')}}\" rel=\"stylesheet\"/>
\t\t\t<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@8/swiper-bundle.min.css\"/>

\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}


\t</head>

\t<body {% if route_name != 'home' %} class=\"sub_page\" {% endif %}>
\t\t{{ include('base/header.html.twig') }}


\t\t{% block body %}{% endblock %}


\t\t{{ include('base/footer.html.twig') }}
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t\t<script src=\"{{asset('js/script.js')}}\"></script>
\t\t\t<!-- jQery -->
\t\t\t<script src=\"{{asset('js/jquery-3.4.1.min.js')}}\"></script>
\t\t\t<!-- popper js -->
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- bootstrap js -->
\t\t\t<script src=\"{{asset('js/bootstrap.js')}}\"></script>
\t\t\t<!-- owl slider -->
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
\t\t\t<!-- isotope js -->
\t\t\t<script src=\"https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js\"></script>
\t\t\t<!-- nice select -->

\t\t\t<!-- custom js -->
\t\t\t<script src=\"{{asset('js/custom.js')}}\"></script>
\t\t\t<!-- Google Map -->
\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\"></script>
\t\t\t<!-- End Google Map -->

\t\t\t<script src=\"https://unpkg.com/swiper@8/swiper-bundle.min.js\"></script>
\t\t{% endblock %}
\t</body>
</html>
", "base.html.twig", "/home/sadek/projects/Restaurant/templates/base.html.twig");
    }
}
