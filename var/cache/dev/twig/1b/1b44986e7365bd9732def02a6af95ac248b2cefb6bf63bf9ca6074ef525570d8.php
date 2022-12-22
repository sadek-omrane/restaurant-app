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

/* order/_form.html.twig */
class __TwigTemplate_47a72c89a5bb6fd687fd304238e4e3016814a96e0450f78dc05c826c0b2a8edb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/_form.html.twig"));

        // line 1
        echo "<div style=\"height: 70vh; display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        echo "

\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Create Order</h1>
\t\t<div class=\"col-md-6\">
\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "food", [], "any", false, false, false, 7), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "food", [], "any", false, false, false, 9), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "food", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control frm-input"], "value" => "default"]);
        echo "
\t\t\t<small>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "food", [], "any", false, false, false, 12), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "Qty", [], "any", false, false, false, 15), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "Qty", [], "any", false, false, false, 17), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "Qty", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Qty", [], "any", false, false, false, 20), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "address", [], "any", false, false, false, 23), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "address", [], "any", false, false, false, 25), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "address", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "address", [], "any", false, false, false, 28), 'help');
        echo "</small>
\t\t</div>

\t\t<button style=\"width: 80px; margin: 16px 10px 0 0;\" class=\"btn btn-primary\">";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 31, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
\t\t<a style=\"width: 120px;\" class=\"btn btn-primary\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_index");
        echo "\">back to list</a>

\t\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "order/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  115 => 32,  111 => 31,  105 => 28,  101 => 27,  96 => 25,  91 => 23,  85 => 20,  81 => 19,  76 => 17,  71 => 15,  65 => 12,  61 => 11,  56 => 9,  51 => 7,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"height: 70vh; display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t{{ form_start(form, {'attr': {'class': 'row g-3'}}) }}

\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Create Order</h1>
\t\t<div class=\"col-md-6\">
\t\t\t{{ form_label(form.food) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.food) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.food, {'attr': {'class': 'form-control frm-input'}, 'value': 'default'}) }}
\t\t\t<small>{{ form_help(form.food) }}</small>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t{{ form_label(form.Qty) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.Qty) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.Qty, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.Qty) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.address) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.address) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.address, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.address) }}</small>
\t\t</div>

\t\t<button style=\"width: 80px; margin: 16px 10px 0 0;\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
\t\t<a style=\"width: 120px;\" class=\"btn btn-primary\" href=\"{{ path('app_order_index') }}\">back to list</a>

\t\t{{ form_end(form) }}

\t</div>
", "order/_form.html.twig", "/home/sadek/projects/project1/templates/order/_form.html.twig");
    }
}
