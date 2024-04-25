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

/* admin/order_crud/index.html.twig */
class __TwigTemplate_9c34f9262e76f0729fb3262c60505f79 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/order_crud/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Order index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_adminContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "adminContent"));

        // line 7
        echo "\t<div style=\"min-height: 70vh;\">
\t\t<div>
\t\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Order index</h1>
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
\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t<th>Qty</th>
\t\t\t\t\t\t<th>OrderAt</th>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<th>IsPayed</th>
\t\t\t\t\t\t<th>IsDelivred</th>
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 36
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "Qty", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["order"], "orderAt", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderAt", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "Address", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, $context["order"], "isPayed", [], "any", false, false, false, 41)) ? ("Yes") : ("No"));
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 42
            echo ((twig_get_attribute($this->env, $this->source, $context["order"], "isDelivred", [], "any", false, false, false, 42)) ? ("Yes") : ("No"));
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<a class=\"btn btn-primary\" style=\"margin: 0 0 50px 0;\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_crud_new");
        echo "\">Create new</a>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/order_crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 56,  184 => 53,  175 => 49,  166 => 45,  162 => 44,  157 => 42,  153 => 41,  149 => 40,  145 => 39,  141 => 38,  137 => 37,  134 => 36,  129 => 35,  113 => 21,  104 => 18,  101 => 17,  96 => 16,  87 => 13,  84 => 12,  80 => 11,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}

{% block title %}Order index
{% endblock %}

{% block adminContent %}
\t<div style=\"min-height: 70vh;\">
\t\t<div>
\t\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Order index</h1>
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
\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t<th>Qty</th>
\t\t\t\t\t\t<th>OrderAt</th>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<th>IsPayed</th>
\t\t\t\t\t\t<th>IsDelivred</th>
\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ order.id }}</td>
\t\t\t\t\t\t\t<td>{{ order.Qty }}</td>
\t\t\t\t\t\t\t<td>{{ order.orderAt ? order.orderAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ order.Address }}</td>
\t\t\t\t\t\t\t<td>{{ order.isPayed ? 'Yes' : 'No' }}</td>
\t\t\t\t\t\t\t<td>{{ order.isDelivred ? 'Yes' : 'No' }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_order_crud_show', {'id': order.id}) }}\">show</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_order_crud_edit', {'id': order.id}) }}\">edit</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<a class=\"btn btn-primary\" style=\"margin: 0 0 50px 0;\" href=\"{{ path('app_admin_order_crud_new') }}\">Create new</a>
\t\t</div>
\t</div>
{% endblock %}
", "admin/order_crud/index.html.twig", "/home/sadek/projects/symfony-restaurants/templates/admin/order_crud/index.html.twig");
    }
}
