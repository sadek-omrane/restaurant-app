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

/* admin/food_crud/show.html.twig */
class __TwigTemplate_6dc39e13f6211f4815eb25f6c25be68637fe6f1d12be7f5e0e98531bf512b395 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/food_crud/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/food_crud/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Food
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
        echo "\t<div style=\"min-height: 70vh;\">
\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Food</h1>

\t\t<table class=\"table\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Price</th>
\t\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 21, $this->source); })()), "price", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Category</th>
\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Description</th>
\t\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>isFeatured</th>
\t\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 37, $this->source); })()), "isFeatured", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>isPromoted</th>
\t\t\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 41, $this->source); })()), "isPromoted", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>promotion</th>
\t\t\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 45, $this->source); })()), "promotion", [], "any", false, false, false, 45), "html", null, true);
        echo "%</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t\t<div style=\"display: flex\">
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_food_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["food"]) || array_key_exists("food", $context) ? $context["food"] : (function () { throw new RuntimeError('Variable "food" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">edit</a>
\t\t\t<span style=\"margin: 0 0 0 4px\">";
        // line 52
        echo twig_include($this->env, $context, "admin/food_crud/_delete_form.html.twig");
        echo "</span>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/food_crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  148 => 51,  139 => 45,  132 => 41,  125 => 37,  118 => 33,  111 => 29,  104 => 25,  97 => 21,  90 => 17,  83 => 13,  74 => 6,  67 => 5,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}
{% block title %}Food
{% endblock %}

{% block adminContent %}
\t<div style=\"min-height: 70vh;\">
\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Food</h1>

\t\t<table class=\"table\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>{{ food.id }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<td>{{ food.name }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Price</th>
\t\t\t\t\t<td>{{ food.price }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Category</th>
\t\t\t\t\t<td>{{ food.category }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Description</th>
\t\t\t\t\t<td>{{ food.description }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<td>{{ food.image }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>isFeatured</th>
\t\t\t\t\t<td>{{ food.isFeatured }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>isPromoted</th>
\t\t\t\t\t<td>{{ food.isPromoted }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>promotion</th>
\t\t\t\t\t<td>{{ food.promotion }}%</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t\t<div style=\"display: flex\">
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_food_crud_edit', {'id': food.id}) }}\">edit</a>
\t\t\t<span style=\"margin: 0 0 0 4px\">{{ include('admin/food_crud/_delete_form.html.twig') }}</span>
\t\t</div>
\t</div>
{% endblock %}
", "admin/food_crud/show.html.twig", "/home/sadek/projects/Restaurant/templates/admin/food_crud/show.html.twig");
    }
}
