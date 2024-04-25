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
class __TwigTemplate_4f0bf432bb1abbef26f9ea388eadc367 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Order
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
\t\t\t<h2 style=\"margin: 50px 0 40px 0;text-align: center;\">Order</h2>

\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Restaurant</th>
\t\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "restaurant", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Food</th>
\t\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "food", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Qty</th>
\t\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "Qty", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "address", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>OrderAt</th>
\t\t\t\t\t\t<td>";
        // line 31
        ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 31, $this->source); })()), "orderAt", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 31, $this->source); })()), "orderAt", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 35, $this->source); })()), "Qty", [], "any", false, false, false, 35) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 35, $this->source); })()), "food", [], "any", false, false, false, 35), "getPrice", [], "method", false, false, false, 35)), "html", null, true);
        echo "DT</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>State</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "isDelivred", [], "any", false, false, false, 40)) {
            // line 41
            echo "\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div style=\"display: flex;\">
\t\t\t\t";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })()), "isDelivred", [], "any", false, false, false, 50) == false)) {
            // line 51
            echo "\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" style=\"margin: 0 10px\">edit</a>

\t\t\t\t\t";
            // line 53
            echo twig_include($this->env, $context, "order/_delete_form.html.twig");
            echo "
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  157 => 55,  152 => 53,  146 => 51,  144 => 50,  137 => 45,  133 => 43,  129 => 41,  127 => 40,  119 => 35,  112 => 31,  105 => 27,  98 => 23,  91 => 19,  84 => 15,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h2 style=\"margin: 50px 0 40px 0;text-align: center;\">Order</h2>

\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Restaurant</th>
\t\t\t\t\t\t<td>{{ order.restaurant }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Food</th>
\t\t\t\t\t\t<td>{{ order.food }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Qty</th>
\t\t\t\t\t\t<td>{{ order.Qty }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<td>{{ order.address }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>OrderAt</th>
\t\t\t\t\t\t<td>{{ order.orderAt ? order.orderAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t<td>{{ order.Qty * order.food.getPrice() }}DT</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>State</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if order.isDelivred %}
\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div style=\"display: flex;\">
\t\t\t\t{%if order.isDelivred ==false %}
\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_edit', {'id': order.id, 'Uid': app.user.id}) }}\" style=\"margin: 0 10px\">edit</a>

\t\t\t\t\t{{ include('order/_delete_form.html.twig') }}
\t\t\t\t\t{%endif%}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock %}
", "order/show.html.twig", "/home/sadek/projects/symfony-restaurants/templates/order/show.html.twig");
    }
}
