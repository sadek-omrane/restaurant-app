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

/* home/order/index.html.twig */
class __TwigTemplate_6b965ebc239c43cdb8270e4bce877bc31763dba67549505f836909f9b79dbcc6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/order/index.html.twig", 1);
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
        echo "\t<div class=\"container\">
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h2 style=\"margin: 50px 0 40px 0;text-align: center;\">Order List</h2>
\t\t\t<div style=\"display:flex; flex-direction: column;align-items: flex-start;\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "\t\t\t\t\t<p class=\"alert alert-success\">
\t\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "\t\t\t\t\t<p class=\"alert alert-danger\">
\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t</div>
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 37
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "restaurant", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "food", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "Qty", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 42
            ((twig_get_attribute($this->env, $this->source, $context["order"], "orderAt", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderAt", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["order"], "Qty", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "food", [], "any", false, false, false, 43), "getPrice", [], "method", false, false, false, 43)), "html", null, true);
            echo "DT</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["order"], "isDelivred", [], "any", false, false, false, 45)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 47
$context["order"], "isPayed", [], "any", false, false, false, 47)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-warning text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared..</div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Incomplete</div>
\t\t\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 55
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order"], "isDelivred", [], "any", false, false, false, 55), false))) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 56), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">Show</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 57), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">Edit</a>
\t\t\t\t\t\t\t\t\t";
                // line 58
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order"], "isPayed", [], "any", false, false, false, 58), false))) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_checkout", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                    echo "\">Pay</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t\t";
            }
            echo "</td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t</tbody>
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 69,  212 => 65,  202 => 61,  196 => 59,  194 => 58,  190 => 57,  185 => 56,  183 => 55,  178 => 52,  174 => 50,  170 => 48,  168 => 47,  165 => 46,  163 => 45,  158 => 43,  154 => 42,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  135 => 37,  130 => 36,  113 => 21,  104 => 18,  101 => 17,  96 => 16,  87 => 13,  84 => 12,  80 => 11,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order index
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div style=\"min-height: 70vh;\">
\t\t\t<h2 style=\"margin: 50px 0 40px 0;text-align: center;\">Order List</h2>
\t\t\t<div style=\"display:flex; flex-direction: column;align-items: flex-start;\">
\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<p class=\"alert alert-success\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</p>
\t\t\t\t{% endfor %}
\t\t\t\t{% for message in app.flashes('danger') %}
\t\t\t\t\t<p class=\"alert alert-danger\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</p>
\t\t\t\t{% endfor %}
\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-warning text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared..</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Incomplete</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{%if order.isDelivred == false %}
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_show', {'id': order.id, 'Uid': app.user.id}) }}\">Show</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_edit', {'id': order.id, 'Uid': app.user.id}) }}\">Edit</a>
\t\t\t\t\t\t\t\t\t{% if order.isPayed == false %}
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_checkout', {'id': order.id}) }}\">Pay</a>
\t\t\t\t\t\t\t\t\t{% endif %}
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
</div>{% endblock %}
", "home/order/index.html.twig", "/home/sadek/projects/Restaurant/templates/home/order/index.html.twig");
    }
}
