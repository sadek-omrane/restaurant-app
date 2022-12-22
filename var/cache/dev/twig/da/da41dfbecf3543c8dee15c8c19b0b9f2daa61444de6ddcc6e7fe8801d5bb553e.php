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

/* admin/booking_crud/index.html.twig */
class __TwigTemplate_bcd9ff075e6cee9ef961a6df02e146aea1dcfc0e42104ac811eb438f6adc91b7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/booking_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/booking_crud/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Category index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_adminContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "adminContent"));

        // line 6
        echo "\t<div class=\"container\">
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Booking List</h1>
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Restaurant</th>
\t\t\t\t\t\t<th>nbPerson</th>
\t\t\t\t\t\t<th>Stat</th>
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 20
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "restaurant", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "nbPerson", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["booking"], "stat", [], "any", false, false, false, 24)) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Valid</div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-warning text-white\" style=\"width: fit-content; border-radius: 4px;\">Invalid</div>
\t\t\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Show</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">Edit</a>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_booking_crud_new");
        echo "\">Create new</a>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/booking_crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 45,  144 => 42,  135 => 38,  125 => 33,  121 => 32,  116 => 29,  112 => 27,  108 => 25,  106 => 24,  101 => 22,  97 => 21,  94 => 20,  89 => 19,  74 => 6,  67 => 5,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}
{% block title %}Category index
{% endblock %}

{% block adminContent %}
\t<div class=\"container\">
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Booking List</h1>
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Restaurant</th>
\t\t\t\t\t\t<th>nbPerson</th>
\t\t\t\t\t\t<th>Stat</th>
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for booking in bookings %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ booking.restaurant }}</td>
\t\t\t\t\t\t\t<td>{{ booking.nbPerson }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if booking.stat %}
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Valid</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-warning text-white\" style=\"width: fit-content; border-radius: 4px;\">Invalid</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_booking_crud_show', {'id': booking.id}) }}\">Show</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_booking_crud_edit', {'id': booking.id}) }}\">Edit</a>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_booking_crud_new') }}\">Create new</a>
\t\t</div>
\t</div>
{% endblock %}
", "admin/booking_crud/index.html.twig", "/home/sadek/projects/Restaurant/templates/admin/booking_crud/index.html.twig");
    }
}
