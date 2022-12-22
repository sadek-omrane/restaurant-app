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

/* home/booking/booking.html.twig */
class __TwigTemplate_74a4788c25dec6096ded12b5cd04469267008658c709092a1639cba365ddbb9f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/booking/booking.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/booking/booking.html.twig", 1);
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
        echo "\t<section class=\"book_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container\">
\t\t\t\t<h2>
\t\t\t\t\tBook A Table
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Name\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Your Email\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<select class=\"form-control nice-select wide\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>
\t\t\t\t\t\t\t\t\t\tHow many persons?
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t3
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t4
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t5
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"datetime-local\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn_box\">
\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\tBook Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"map_container \">
\t\t\t\t\t\t<div id=\"googleMap\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/booking/booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}
\t<section class=\"book_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container\">
\t\t\t\t<h2>
\t\t\t\t\tBook A Table
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Name\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Your Email\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<select class=\"form-control nice-select wide\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>
\t\t\t\t\t\t\t\t\t\tHow many persons?
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t3
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t4
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t5
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"datetime-local\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn_box\">
\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\tBook Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"map_container \">
\t\t\t\t\t\t<div id=\"googleMap\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "home/booking/booking.html.twig", "/home/sadek/projects/Restaurant/templates/home/booking/booking.html.twig");
    }
}
