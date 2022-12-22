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
class __TwigTemplate_060cb5b4f2ce87fff6a8611dc52bc117c7e6240f59f522f4f5a46513d294b6ff extends Template
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
        echo "\t<h3>Order</h3>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Restaurant</th>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "restaurant", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Food</th>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "food", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Qty</th>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "Qty", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Address</th>
\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "address", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>OrderAt</th>
\t\t\t\t<td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "orderAt", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "orderAt", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Total</th>
\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "Qty", [], "any", false, false, false, 33) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 33, $this->source); })()), "food", [], "any", false, false, false, 33), "getPrice", [], "method", false, false, false, 33)), "html", null, true);
        echo "DT</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>State</th>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "isDelivred", [], "any", false, false, false, 38)) {
            // line 39
            echo "\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
\t<div style=\"display: flex;\">
\t\t";
        // line 48
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "isDelivred", [], "any", false, false, false, 48), false))) {
            // line 49
            echo "\t\t\t<a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" style=\"margin: 0 10px\">edit</a>

\t\t\t";
            // line 51
            echo twig_include($this->env, $context, "order/_delete_form.html.twig");
            echo "
\t\t\t";
        }
        // line 53
        echo "\t\t</div>
\t";
        
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
        return array (  155 => 53,  150 => 51,  144 => 49,  142 => 48,  135 => 43,  131 => 41,  127 => 39,  125 => 38,  117 => 33,  110 => 29,  103 => 25,  96 => 21,  89 => 17,  82 => 13,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order
{% endblock %}

{% block body %}
\t<h3>Order</h3>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Restaurant</th>
\t\t\t\t<td>{{ order.restaurant }}</td>
\t\t\t</tr>
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
\t\t{%if order.isDelivred ==false %}
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_edit', {'id': order.id, 'Uid': app.user.id}) }}\" style=\"margin: 0 10px\">edit</a>

\t\t\t{{ include('order/_delete_form.html.twig') }}
\t\t\t{%endif%}
\t\t</div>
\t{% endblock %}
", "order/show.html.twig", "/home/sadek/projects/Restaurant/templates/order/show.html.twig");
    }
}
