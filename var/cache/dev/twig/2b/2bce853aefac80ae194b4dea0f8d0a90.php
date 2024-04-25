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

/* home/booking/show.html.twig */
class __TwigTemplate_dc8673d9b68ebbefcdddc1fe8e7cbbf5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/booking/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Booking
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
        echo "\t<div class=\"container\">
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Booking</h1>

\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Table</th>
\t\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 19, $this->source); })()), "nbPerson", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>BookingAt</th>
\t\t\t\t\t\t<td>";
        // line 23
        ((twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 23, $this->source); })()), "bookingAt", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 23, $this->source); })()), "bookingAt", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Stat</th>
\t\t\t\t\t\t<td>";
        // line 27
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 27, $this->source); })()), "stat", [], "any", false, false, false, 27)) ? ("Yes") : ("No"));
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div style=\"display: flex;\">
\t\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\" style=\"margin: 0 10px\">edit</a>

\t\t\t\t";
        // line 35
        echo twig_include($this->env, $context, "home/booking/_delete_form.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  114 => 33,  105 => 27,  98 => 23,  91 => 19,  84 => 15,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Booking
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Booking</h1>

\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t<td>{{ booking.id }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Table</th>
\t\t\t\t\t\t<td>{{ booking.nbPerson }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>BookingAt</th>
\t\t\t\t\t\t<td>{{ booking.bookingAt ? booking.bookingAt|date('Y-m-d') : '' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Stat</th>
\t\t\t\t\t\t<td>{{ booking.stat ? 'Yes' : 'No' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div style=\"display: flex;\">
\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_booking_edit', {'id': booking.id}) }}\" style=\"margin: 0 10px\">edit</a>

\t\t\t\t{{ include('home/booking/_delete_form.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "home/booking/show.html.twig", "/home/sadek/projects/symfony-restaurants/templates/home/booking/show.html.twig");
    }
}
