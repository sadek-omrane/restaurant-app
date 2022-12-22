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

/* order/index.html.twig */
class __TwigTemplate_cd5a02d9ec2e1e5f7b3cb5f94db2c7c79eb213682bd24364b05ec135a529fc7c extends Template
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
            'order' => [$this, 'block_order'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Order index
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
        echo "\t";
        $this->displayBlock('order', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_order($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order"));

        // line 8
        echo "\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h3>Order List</h3>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Restaurant</th>
\t\t\t\t\t\t<th>Food</th>
\t\t\t\t\t\t<th>Qty</th>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<th>OrderAt</th>
\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t<th>State</th>
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 26
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "restaurant", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "food", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "Qty", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["order"], "orderAt", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderAt", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["order"], "Qty", [], "any", false, false, false, 32) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "food", [], "any", false, false, false, 32), "getPrice", [], "method", false, false, false, 32)), "html", null, true);
            echo "DT</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["order"], "isDelivred", [], "any", false, false, false, 34)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 36
$context["order"], "isPayed", [], "any", false, false, false, 36)) {
                // line 37
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-warning text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Incomplete</div>
\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 44
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order"], "isDelivred", [], "any", false, false, false, 44), false))) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 45), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">Show</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 46), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">Edit</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_checkout", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">Pay</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 48
            echo "</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t</tbody>
\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 56,  185 => 52,  177 => 48,  172 => 47,  168 => 46,  163 => 45,  161 => 44,  156 => 41,  152 => 39,  148 => 37,  146 => 36,  143 => 35,  141 => 34,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  113 => 26,  108 => 25,  89 => 8,  75 => 7,  68 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order index
{% endblock %}

{% block body %}
\t{% block order %}
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h3>Order List</h3>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Restaurant</th>
\t\t\t\t\t\t<th>Food</th>
\t\t\t\t\t\t<th>Qty</th>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<th>OrderAt</th>
\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t<th>State</th>
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ order.restaurant }}</td>
\t\t\t\t\t\t\t<td>{{ order.food }}</td>
\t\t\t\t\t\t\t<td>{{ order.Qty }}</td>
\t\t\t\t\t\t\t<td>{{ order.address }}</td>
\t\t\t\t\t\t\t<td>{{ order.orderAt ? order.orderAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ order.Qty * order.food.getPrice() }}DT</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if order.isDelivred %}
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t\t\t\t{% elseif order.isPayed %}
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-warning text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Incomplete</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{%if order.isDelivred == false %}
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_show', {'id': order.id, 'Uid': app.user.id}) }}\">Show</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_edit', {'id': order.id, 'Uid': app.user.id}) }}\">Edit</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_checkout', {'id': order.id}) }}\">Pay</a>
\t\t\t\t\t\t\t\t\t{%endif%}</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}{% endblock %}
", "order/index.html.twig", "/home/sadek/projects/Restaurant/templates/order/index.html.twig");
    }
}
