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

/* admin/user_crud/_form.html.twig */
class __TwigTemplate_d0d16f85cf6aa4997cc8d65ff064c735bfab7021b0d2cc71ed0bfb575eec4b31 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_crud/_form.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "email", [], "any", false, false, false, 5), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "password", [], "any", false, false, false, 13), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "password", [], "any", false, false, false, 15), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "password", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "password", [], "any", false, false, false, 18), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "roles", [], "any", false, false, false, 29), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "roles", [], "any", false, false, false, 31), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "roles", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control frm-input", "style" => "height: auto;"]]);
        echo "
\t\t\t<small>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "roles", [], "any", false, false, false, 34), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "cin", [], "any", false, false, false, 37), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "cin", [], "any", false, false, false, 39), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "cin", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "cin", [], "any", false, false, false, 42), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "phone", [], "any", false, false, false, 47), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "phone", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "phone", [], "any", false, false, false, 50), 'help');
        echo "</small>
\t\t</div>
\t\t<div>
\t\t\t<button style=\"width: 80px;\" class=\"btn btn-primary\">";
        // line 53
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 53, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>


\t\t</div>
\t\t";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "

\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/user_crud/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 57,  169 => 53,  163 => 50,  159 => 49,  154 => 47,  149 => 45,  143 => 42,  139 => 41,  134 => 39,  129 => 37,  123 => 34,  119 => 33,  114 => 31,  109 => 29,  103 => 26,  99 => 25,  94 => 23,  89 => 21,  83 => 18,  79 => 17,  74 => 15,  69 => 13,  63 => 10,  59 => 9,  54 => 7,  49 => 5,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\" min-height: 50vh;display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t{{ form_start(form, {'attr': {'class': 'row g-3'}}) }}
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.email) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.email) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.email, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.email) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.password) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.password) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.password, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.password) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.name) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.name) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.name, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.name) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.roles) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.roles) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.roles, {'attr': {'class': 'form-control frm-input', 'style' : 'height: auto;'}}) }}
\t\t\t<small>{{ form_help(form.roles) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.cin) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.cin) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.cin, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.cin) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.phone) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.phone) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.phone, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.phone) }}</small>
\t\t</div>
\t\t<div>
\t\t\t<button style=\"width: 80px;\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>


\t\t</div>
\t\t{{ form_end(form) }}

\t</div>
</div>
", "admin/user_crud/_form.html.twig", "/home/sadek/projects/Restaurant/templates/admin/user_crud/_form.html.twig");
    }
}
