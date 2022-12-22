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
class __TwigTemplate_24ca0e0b8953b4d7b76af4a8d216dfba8a48bd95314ca0fdb77582b093a1f9b4 extends Template
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
            'aside' => [$this, 'block_aside'],
            'content' => [$this, 'block_content'],
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
        echo "\t<h2 style=\"text-align: center; margin: 30px 0\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
\t<div style=\"display: flex; \">
\t\t";
        // line 9
        $this->displayBlock('aside', $context, $blocks);
        // line 20
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        // line 10
        echo "\t\t\t<div class=\"list-group\" style=\"width: 260px; margin-right: 20px\">
\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action active\" aria-current=\"true\">
\t\t\t\t\tAll
\t\t\t\t</a>
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 15), "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
\t\t\t</div>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "\t\t\t<div style=\"width: 100%;display: flex; justify-content: space-between; flex-wrap: wrap;\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["foods"]) || array_key_exists("foods", $context) ? $context["foods"] : (function () { throw new RuntimeError('Variable "foods" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 23
            echo "\t\t\t\t\t<div class=\"card\" style=\"width: 18rem; margin-bottom: 20px\">
\t\t\t\t\t\t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["food"], "image", [], "any", false, false, false, 24))), "html", null, true);
            echo "\" class=\"card-img-top\" height=\"250\" alt=\"image\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">Price:
\t\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "price", [], "any", false, false, false, 29), "html", null, true);
            echo "DT</h6>
\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_new", ["Fid" => twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 30), "Rid" => twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Order</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t</div>
\t\t";
        
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
        return array (  172 => 34,  162 => 30,  158 => 29,  152 => 26,  147 => 24,  144 => 23,  140 => 22,  137 => 21,  130 => 20,  121 => 17,  112 => 15,  108 => 14,  102 => 10,  95 => 9,  87 => 36,  84 => 20,  82 => 9,  76 => 7,  69 => 6,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}
\t<h2 style=\"text-align: center; margin: 30px 0\">{{restaurant.name}}</h2>
\t<div style=\"display: flex; \">
\t\t{% block aside %}
\t\t\t<div class=\"list-group\" style=\"width: 260px; margin-right: 20px\">
\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action active\" aria-current=\"true\">
\t\t\t\t\tAll
\t\t\t\t</a>
\t\t\t\t{% for item in categories %}
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action\">{{ item.Name }}</a>
\t\t\t\t{% endfor %}

\t\t\t</div>
\t\t{% endblock %}
\t\t{% block content %}
\t\t\t<div style=\"width: 100%;display: flex; justify-content: space-between; flex-wrap: wrap;\">
\t\t\t\t{% for food in foods %}
\t\t\t\t\t<div class=\"card\" style=\"width: 18rem; margin-bottom: 20px\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/brochures/'~food.image) }}\" class=\"card-img-top\" height=\"250\" alt=\"image\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{food.name}}</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">Price:
\t\t\t\t\t\t\t\t{{food.price}}DT</h6>
\t\t\t\t\t\t\t<a href=\"{{ path('app_order_new', {Fid: food.id, Rid: restaurant.id, Uid: app.user.id}) }}\" class=\"btn btn-primary\">Order</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t{% endblock %}
\t</div>
{% endblock %}
", "restaurant/restaurant.html.twig", "/home/sadek/projects/Restaurant/templates/restaurant/restaurant.html.twig");
    }
}
