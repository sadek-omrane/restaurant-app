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

/* restaurant/restaurant.html.twig */
class __TwigTemplate_1003a59f7e3af9983e117b03890c5cd6d24c27614b3a1e381a23d3e68d57c2e7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/restaurant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "restaurant/restaurant.html.twig", 1);
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<section class=\"food_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container heading_center\">
\t\t\t\t<h2>
\t\t\t\t\tOur Menu
\t\t\t\t</h2>
\t\t\t</div>

\t\t\t<ul class=\"filters_menu\">

\t\t\t\t<li class=\"active\" data-filter=\"*\">All</li>
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
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
        // line 21
        echo "

\t\t\t</ul>

\t\t\t<div class=\"filters-content\">
\t\t\t\t<div class=\"row grid\">
\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foods"]) || array_key_exists("foods", $context) ? $context["foods"] : (function () { throw new RuntimeError('Variable "foods" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 28
            echo "\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 all ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "category", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["food"], "image", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\tDelicious
\t\t\t\t\t\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tVeniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"options\">
\t\t\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t\t\t\$";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "price", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
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
        // line 57
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "restaurant/restaurant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  140 => 44,  130 => 37,  122 => 32,  114 => 28,  110 => 27,  102 => 21,  91 => 19,  87 => 18,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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

\t\t\t\t<li class=\"active\" data-filter=\"*\">All</li>
\t\t\t\t{% for category in categories %}
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
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
", "restaurant/restaurant.html.twig", "/home/sadek/projects/Restaurant/templates/restaurant/restaurant.html.twig");
    }
}
