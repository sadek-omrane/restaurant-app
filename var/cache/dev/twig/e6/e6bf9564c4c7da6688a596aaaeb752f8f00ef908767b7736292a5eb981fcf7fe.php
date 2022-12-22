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

/* admin/order_crud/_form.html.twig */
class __TwigTemplate_04af46c83f2e486189a1f37ed0787e7b548532afe1cdb5834e532902477f5f2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order_crud/_form.html.twig"));

        // line 1
        echo "<div style=\" min-height: 50vh;display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        echo "
\t\t<div class=\"col-12\">
\t\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "owner", [], "any", false, false, false, 5), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "owner", [], "any", false, false, false, 7), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "owner", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "owner", [], "any", false, false, false, 10), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "food", [], "any", false, false, false, 13), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "food", [], "any", false, false, false, 15), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "food", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "food", [], "any", false, false, false, 18), 'help');
        echo "</small>
\t\t</div>
\t\t<div hidden class=\"col-12\">
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "restaurant", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "restaurant", [], "any", false, false, false, 23), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "restaurant", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "restaurant", [], "any", false, false, false, 26), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Qty", [], "any", false, false, false, 29), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "Qty", [], "any", false, false, false, 31), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Qty", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Qty", [], "any", false, false, false, 34), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Address", [], "any", false, false, false, 37), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "Address", [], "any", false, false, false, 39), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Address", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "Address", [], "any", false, false, false, 42), 'help');
        echo "</small>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "isDelivred", [], "any", false, false, false, 45), 'widget');
        echo "
\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "isDelivred", [], "any", false, false, false, 46), 'label');
        echo "
\t\t</div>
\t\t<div>
\t\t\t<button style=\"width: 80px;\" class=\"btn btn-primary\">";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>


\t\t</div>
\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "

\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/order_crud/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 53,  159 => 49,  153 => 46,  149 => 45,  143 => 42,  139 => 41,  134 => 39,  129 => 37,  123 => 34,  119 => 33,  114 => 31,  109 => 29,  103 => 26,  99 => 25,  94 => 23,  89 => 21,  83 => 18,  79 => 17,  74 => 15,  69 => 13,  63 => 10,  59 => 9,  54 => 7,  49 => 5,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\" min-height: 50vh;display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t{{ form_start(form, {'attr': {'class': 'row g-3'}}) }}
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.owner) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.owner) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.owner, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.owner) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.food) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.food) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.food, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.food) }}</small>
\t\t</div>
\t\t<div hidden class=\"col-12\">
\t\t\t{{ form_label(form.restaurant) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.restaurant) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.restaurant, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.restaurant) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.Qty) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.Qty) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.Qty, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.Qty) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.Address) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.Address) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.Address, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.Address) }}</small>
\t\t</div>
\t\t<div>
\t\t\t{{ form_widget(form.isDelivred) }}
\t\t\t{{ form_label(form.isDelivred) }}
\t\t</div>
\t\t<div>
\t\t\t<button style=\"width: 80px;\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>


\t\t</div>
\t\t{{ form_end(form) }}

\t</div>
</div>
", "admin/order_crud/_form.html.twig", "/home/sadek/projects/Restaurant/templates/admin/order_crud/_form.html.twig");
    }
}
