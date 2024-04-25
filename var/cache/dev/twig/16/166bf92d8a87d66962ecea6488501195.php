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

/* admin/booking_crud/show.html.twig */
class __TwigTemplate_f2237e84b55093f6c9176d5bd7d8a2cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'adminContent' => [$this, 'block_adminContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/booking_crud/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/booking_crud/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Category index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_adminContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "adminContent"));

        // line 6
        echo "\t<div style=\"min-height: 70vh\">
\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Booking</h1>

\t\t<table class=\"table\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Table</th>
\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 17, $this->source); })()), "nbPerson", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>BookingAt</th>
\t\t\t\t\t<td>";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 21, $this->source); })()), "bookingAt", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 21, $this->source); })()), "bookingAt", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Stat</th>
\t\t\t\t\t<td>";
        // line 25
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 25, $this->source); })()), "stat", [], "any", false, false, false, 25)) ? ("Yes") : ("No"));
        echo "</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>


\t\t<div style=\"display: flex\">
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">edit</a>
\t\t\t<span style=\"margin:0 0 0 4px\">";
        // line 33
        echo twig_include($this->env, $context, "admin/booking_crud/_delete_form.html.twig");
        echo "</span>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/booking_crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  114 => 32,  104 => 25,  97 => 21,  90 => 17,  83 => 13,  74 => 6,  67 => 5,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}
{% block title %}Category index
{% endblock %}

{% block adminContent %}
\t<div style=\"min-height: 70vh\">
\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Booking</h1>

\t\t<table class=\"table\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>{{ booking.id }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Table</th>
\t\t\t\t\t<td>{{ booking.nbPerson }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>BookingAt</th>
\t\t\t\t\t<td>{{ booking.bookingAt ? booking.bookingAt|date('Y-m-d') : '' }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Stat</th>
\t\t\t\t\t<td>{{ booking.stat ? 'Yes' : 'No' }}</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>


\t\t<div style=\"display: flex\">
\t\t\t<a class=\"btn btn-primary\" href=\"{{path('app_admin_booking_crud_edit',{'id':booking.id})}}\">edit</a>
\t\t\t<span style=\"margin:0 0 0 4px\">{{include('admin/booking_crud/_delete_form.html.twig')}}</span>
\t\t</div>
\t</div>
{% endblock %}
", "admin/booking_crud/show.html.twig", "/home/sadek/projects/symfony-restaurants/templates/admin/booking_crud/show.html.twig");
    }
}
