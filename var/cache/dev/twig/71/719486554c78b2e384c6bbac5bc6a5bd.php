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

/* admin/restaurant_crud/index.html.twig */
class __TwigTemplate_774385bc7d0fca1af73e5251cf6b2073 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/restaurant_crud/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Restaurant index
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
        echo "\t<div style=\"min-height: 70vh;\">
\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Restaurant index</h1>
\t\t<div style=\"display:flex; flex-direction: column;align-items: flex-start;\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "\t\t\t\t<p class=\"alert alert-success\">
\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "\t\t\t\t<p class=\"alert alert-danger\">
\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</div>
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Owner</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Address</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 31
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "owner", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "address", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_restaurant_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_restaurant_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t</tbody>
\t\t</table>

\t\t<a class=\"btn btn-primary\" style=\"margin: 0 0 50px 0;\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_restaurant_crud_new");
        echo "\">Create new</a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/restaurant_crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 48,  168 => 45,  159 => 41,  150 => 37,  146 => 36,  141 => 34,  137 => 33,  133 => 32,  130 => 31,  125 => 30,  112 => 19,  103 => 16,  100 => 15,  95 => 14,  86 => 11,  83 => 10,  79 => 9,  74 => 6,  67 => 5,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}
{% block title %}Restaurant index
{% endblock %}

{% block adminContent %}
\t<div style=\"min-height: 70vh;\">
\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Restaurant index</h1>
\t\t<div style=\"display:flex; flex-direction: column;align-items: flex-start;\">
\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t<p class=\"alert alert-success\">
\t\t\t\t\t{{ message }}
\t\t\t\t</p>
\t\t\t{% endfor %}
\t\t\t{% for message in app.flashes('danger') %}
\t\t\t\t<p class=\"alert alert-danger\">
\t\t\t\t\t{{ message }}
\t\t\t\t</p>
\t\t\t{% endfor %}
\t\t</div>
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Owner</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Address</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for restaurant in restaurants %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ restaurant.owner }}</td>
\t\t\t\t\t\t<td>{{ restaurant.name }}</td>
\t\t\t\t\t\t<td>{{ restaurant.address }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_restaurant_crud_show', {'id': restaurant.id}) }}\">show</a>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_restaurant_crud_edit', {'id': restaurant.id}) }}\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t\t<a class=\"btn btn-primary\" style=\"margin: 0 0 50px 0;\" href=\"{{ path('app_admin_restaurant_crud_new') }}\">Create new</a>
\t</div>
{% endblock %}
", "admin/restaurant_crud/index.html.twig", "/home/sadek/projects/symfony-restaurants/templates/admin/restaurant_crud/index.html.twig");
    }
}
