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

/* home/booking/index.html.twig */
class __TwigTemplate_0e5a2412f995fa2a330af1c82036f55b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/booking/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/booking/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Booking index
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
\t\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Booking List</h1>
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Restaurant</th>
\t\t\t\t\t\t<th>nbPerson</th>
\t\t\t\t\t\t<th>Booking At</th>
\t\t\t\t\t\t<th>Stat</th>
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "restaurant", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "nbPerson", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["booking"], "bookingAt", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "bookingAt", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["booking"], "stat", [], "any", false, false, false, 27)) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Valid</div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-warning text-white\" style=\"width: fit-content; border-radius: 4px;\">Invalid</div>
\t\t\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_show", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">Show</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Edit</a>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking_new");
        echo "\">Create new</a>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/booking/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 47,  148 => 44,  139 => 40,  129 => 35,  125 => 34,  121 => 32,  117 => 30,  113 => 28,  111 => 27,  106 => 25,  102 => 24,  98 => 23,  95 => 22,  90 => 21,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Booking index
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Booking List</h1>
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Restaurant</th>
\t\t\t\t\t\t<th>nbPerson</th>
\t\t\t\t\t\t<th>Booking At</th>
\t\t\t\t\t\t<th>Stat</th>
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for booking in bookings %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ booking.restaurant }}</td>
\t\t\t\t\t\t\t<td>{{ booking.nbPerson }}</td>
\t\t\t\t\t\t\t<td>{{ booking.bookingAt ? booking.bookingAt|date('Y-m-d') : ''  }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if booking.stat %}
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Valid</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-warning text-white\" style=\"width: fit-content; border-radius: 4px;\">Invalid</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_booking_show', {'id': booking.id}) }}\">Show</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_booking_edit', {'id': booking.id}) }}\">Edit</a>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_booking_new') }}\">Create new</a>
\t\t</div>
\t</div>
{% endblock %}
", "home/booking/index.html.twig", "/home/sadek/projects/symfony-restaurants/templates/home/booking/index.html.twig");
    }
}
