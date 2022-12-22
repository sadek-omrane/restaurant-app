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
class __TwigTemplate_d79169b1827a997d0090e006e5a91b5c16d2ad0a9d21cf133c82bd4b6789a863 extends Template
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
        echo "\t<h1>Order index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Food</th>
\t\t\t\t<th>Qty</th>
\t\t\t\t<th>Address</th>
\t\t\t\t<th>OrderAt</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th>State</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 23
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "food", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "Qty", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["order"], "orderAt", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderAt", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["order"], "Qty", [], "any", false, false, false, 28) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "food", [], "any", false, false, false, 28), "getPrice", [], "method", false, false, false, 28)), "html", null, true);
            echo "DT</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["order"], "isDelivred", [], "any", false, false, false, 30)) {
                // line 31
                echo "\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t</tbody>
\t</table>

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
        return array (  157 => 47,  148 => 43,  139 => 39,  135 => 38,  130 => 35,  126 => 33,  122 => 31,  120 => 30,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  96 => 23,  91 => 22,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order index
{% endblock %}

{% block body %}
\t<h1>Order index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Food</th>
\t\t\t\t<th>Qty</th>
\t\t\t\t<th>Address</th>
\t\t\t\t<th>OrderAt</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th>State</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for order in orders %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ order.food }}</td>
\t\t\t\t\t<td>{{ order.Qty }}</td>
\t\t\t\t\t<td>{{ order.address }}</td>
\t\t\t\t\t<td>{{ order.orderAt ? order.orderAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t<td>{{ order.Qty * order.food.getPrice() }}DT</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if order.isDelivred %}
\t\t\t\t\t\t\t<div class=\"p-1 bg-success text-white\" style=\"width: fit-content; border-radius: 4px;\">Delivred</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"p-1 bg-danger text-white\" style=\"width: fit-content; border-radius: 4px;\">Prepared</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>

\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_show', {'id': order.id}) }}\">show</a>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_order_edit', {'id': order.id}) }}\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

{% endblock %}
", "order/index.html.twig", "/home/sadek/projects/project1/templates/order/index.html.twig");
    }
}
