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

/* home/restaurant/restaurant.html.twig */
class __TwigTemplate_371c6f7db68f78043ee3bbc26aed54d9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/restaurant/restaurant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/restaurant/restaurant.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<section class=\"food_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container heading_center\">
\t\t\t\t<h2>
\t\t\t\t\tOur Menu
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t<ul class=\"filters_menu\">

\t\t\t\t";
        // line 17
        $context["newArray"] = [];
        // line 18
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "\t\t\t\t\t";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19), (isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 19, $this->source); })()))) {
                // line 20
                echo "\t\t\t\t\t\t";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 20, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20)]);
                // line 21
                echo "\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t<li class=\"active\" data-filter=\"*\">All</li>
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "\t\t\t\t\t<li data-filter=\".";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

\t\t\t</ul>

\t\t\t<div class=\"filters-content\">
\t\t\t\t<div class=\"row grid\">
\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foods"]) || array_key_exists("foods", $context) ? $context["foods"] : (function () { throw new RuntimeError('Variable "foods" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 34
            echo "\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 all ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "category", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["food"], "image", [], "any", false, false, false, 38))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\tDelicious
\t\t\t\t\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tVeniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"options\">
\t\t\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t\t\t\$";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "price", [], "any", false, false, false, 50), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_new", ["Fid" => twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 52), "Rid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "restaurant", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: white; font-size: 18px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn-box\">
\t\t\t\t<a href=\"\">
\t\t\t\t\tView More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/restaurant/restaurant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  169 => 52,  164 => 50,  154 => 43,  146 => 38,  138 => 34,  134 => 33,  126 => 27,  115 => 25,  111 => 24,  108 => 23,  102 => 22,  99 => 21,  96 => 20,  93 => 19,  88 => 18,  86 => 17,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}
\t<section class=\"food_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container heading_center\">
\t\t\t\t<h2>
\t\t\t\t\tOur Menu
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t<ul class=\"filters_menu\">

\t\t\t\t{% set newArray = [] %}
\t\t\t\t{% for category in categories %}
\t\t\t\t\t{% if category.name not in newArray %}
\t\t\t\t\t\t{% set newArray = newArray|merge([category.name]) %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t<li class=\"active\" data-filter=\"*\">All</li>
\t\t\t\t{% for category in newArray %}
\t\t\t\t\t<li data-filter=\".{{category}}\">{{category}}</li>
\t\t\t\t{% endfor %}


\t\t\t</ul>

\t\t\t<div class=\"filters-content\">
\t\t\t\t<div class=\"row grid\">
\t\t\t\t\t{% for food in foods %}
\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 all {{food.category}}\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~food.image)}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\tDelicious
\t\t\t\t\t\t\t\t\t\t\t{{food.name}}
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tVeniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"options\">
\t\t\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t\t\t\${{food.price}}
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_order_new', {Fid: food.id, Rid: food.restaurant.id, Uid: app.user.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: white; font-size: 18px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn-box\">
\t\t\t\t<a href=\"\">
\t\t\t\t\tView More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "home/restaurant/restaurant.html.twig", "/home/sadek/projects/symfony-restaurants/templates/home/restaurant/restaurant.html.twig");
    }
}
