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

/* order/show.html.twig */
class __TwigTemplate_e24399ecf51b656fc89fb755a1c283a9ff0301c06e643a848b13e49868e45826 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Order
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
        echo "\t<h1>Order</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Food</th>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "food", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Qty</th>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "Qty", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Address</th>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "address", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>OrderAt</th>
\t\t\t\t<td>";
        // line 25
        ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "orderAt", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "orderAt", [], "any", false, false, false, 25), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Total</th>
\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "Qty", [], "any", false, false, false, 29) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "food", [], "any", false, false, false, 29), "getPrice", [], "method", false, false, false, 29)), "html", null, true);
        echo "DT</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>State</th>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 34, $this->source); })()), "isDelivred", [], "any", false, false, false, 34)) {
            // line 35
            echo "\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t<div style=\"display: flex;\">
\t\t<a class=\"btn btn-primary\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_index");
        echo "\">back to list</a>

\t\t<a class=\"btn btn-primary\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" style=\"margin: 0 10px\">edit</a>

\t\t";
        // line 48
        echo twig_include($this->env, $context, "order/_delete_form.html.twig");
        echo "
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "order/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  140 => 46,  135 => 44,  128 => 39,  124 => 37,  120 => 35,  118 => 34,  110 => 29,  103 => 25,  96 => 21,  89 => 17,  82 => 13,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order
{% endblock %}

{% block body %}
\t<h1>Order</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Food</th>
\t\t\t\t<td>{{ order.food }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Qty</th>
\t\t\t\t<td>{{ order.Qty }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Address</th>
\t\t\t\t<td>{{ order.address }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>OrderAt</th>
\t\t\t\t<td>{{ order.orderAt ? order.orderAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Total</th>
\t\t\t\t<td>{{ order.Qty * order.food.getPrice() }}DT</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>State</th>
\t\t\t\t<td>
\t\t\t\t\t{% if order.isDelivred %}
\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t<div style=\"display: flex;\">
\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_index') }}\">back to list</a>

\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_edit', {'id': order.id}) }}\" style=\"margin: 0 10px\">edit</a>

\t\t{{ include('order/_delete_form.html.twig') }}
\t</div>
{% endblock %}
", "order/show.html.twig", "/home/sadek/projects/project1/templates/order/show.html.twig");
    }
}
