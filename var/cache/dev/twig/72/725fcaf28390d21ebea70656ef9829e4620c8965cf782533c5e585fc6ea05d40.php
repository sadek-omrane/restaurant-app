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

/* home/index.html.twig */
class __TwigTemplate_b53679fb2f9b9d685ad41783da286a751c42fafa0df72694041b992390a3a2c5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "\t<div style=\"display: flex; flex-wrap: wrap;\">

\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 10
            echo "
\t\t\t<div class=\"col-lg-4\" style=\"margin: 30px 0; display:flex; flex-direction: column; align-items: center; justify-content: center;\">
\t\t\t\t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "image", [], "any", false, false, false, 12))), "html", null, true);
            echo "\" class=\"bd-placeholder-img rounded-circle\" width=\"170\" height=\"170\">
\t\t\t\t<h4 style=\"margin: 10px 0 0 0\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</h4>
\t\t\t\t<p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "address", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">View details &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- /.col-lg-4 -->

\t\t\t<!-- /.col-lg-4 -->

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 24,  99 => 16,  94 => 14,  90 => 13,  86 => 12,  82 => 10,  78 => 9,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}
\t<div style=\"display: flex; flex-wrap: wrap;\">

\t\t{% for restaurant in restaurants %}

\t\t\t<div class=\"col-lg-4\" style=\"margin: 30px 0; display:flex; flex-direction: column; align-items: center; justify-content: center;\">
\t\t\t\t<img src=\"{{ asset('uploads/brochures/'~restaurant.image) }}\" class=\"bd-placeholder-img rounded-circle\" width=\"170\" height=\"170\">
\t\t\t\t<h4 style=\"margin: 10px 0 0 0\">{{restaurant.name}}</h4>
\t\t\t\t<p>{{restaurant.address}}</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"{{path('restaurant', {id: restaurant.id})}}\">View details &raquo;</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<!-- /.col-lg-4 -->

\t\t\t<!-- /.col-lg-4 -->

\t\t{% endfor %}
\t</div>
{% endblock %}
", "home/index.html.twig", "/home/sadek/projects/Restaurant/templates/home/index.html.twig");
    }
}
