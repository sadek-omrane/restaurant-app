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

/* admin/food_crud/index.html.twig */
class __TwigTemplate_d883eb0ed927a4f32b62a684f5a535ef72f3c95238be84d057f282653aeb4ad7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/food_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/food_crud/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Food index
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
\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Food index</h1>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Price</th>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["food"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 21
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "price", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "image", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_food_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_food_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t</tbody>
\t\t</table>

\t\t<a class=\"btn btn-primary\" style=\"margin: 0 0 50px 0;\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_food_crud_new");
        echo "\">Create new</a>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/food_crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 40,  138 => 37,  129 => 33,  120 => 29,  116 => 28,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  95 => 21,  90 => 20,  74 => 6,  67 => 5,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}
{% block title %}Food index
{% endblock %}

{% block adminContent %}
\t<div style=\"min-height: 70vh;\">
\t\t<h1 style=\"margin: 50px 0 40px 0;text-align: center;\">Food index</h1>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Price</th>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for food in food %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ food.id }}</td>
\t\t\t\t\t\t<td>{{ food.name }}</td>
\t\t\t\t\t\t<td>{{ food.price }}</td>
\t\t\t\t\t\t<td>{{ food.image }}</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_food_crud_show', {'id': food.id}) }}\">show</a>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('app_admin_food_crud_edit', {'id': food.id}) }}\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t\t<a class=\"btn btn-primary\" style=\"margin: 0 0 50px 0;\" href=\"{{ path('app_admin_food_crud_new') }}\">Create new</a>
\t</div>
{% endblock %}
", "admin/food_crud/index.html.twig", "/home/sadek/projects/Restaurant/templates/admin/food_crud/index.html.twig");
    }
}
