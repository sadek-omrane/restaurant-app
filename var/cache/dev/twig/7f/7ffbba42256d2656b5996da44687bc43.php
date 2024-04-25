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
class __TwigTemplate_e0409d8061ee377c83259fab717ce112 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/_form.html.twig"));

        // line 1
        echo "<div style=\" min-height: 50vh;display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        echo "
\t\t<div class=\"col-12\">
\t\t\t<label>Restaurant</label>
\t\t\t<input type=\"text\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "restaurant", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"form-control frm-input\" disabled>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t<label>Food</label>
\t\t\t<input type=\"text\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "food", [], "any", false, false, false, 10), "html", null, true);
        echo "\" class=\"form-control frm-input\" disabled>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "Qty", [], "any", false, false, false, 13), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "Qty", [], "any", false, false, false, 15), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "Qty", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Qty", [], "any", false, false, false, 18), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "address", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "address", [], "any", false, false, false, 23), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "address", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "address", [], "any", false, false, false, 26), 'help');
        echo "</small>
\t\t</div>
\t\t";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 28, $this->source); })()), "isDelivred", [], "any", false, false, false, 28) == false)) {
            // line 29
            echo "\t\t\t<button style=\"width: 80px; margin: 16px 0 0 10px;\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 29, $this->source); })()), "Order")) : ("Order")), "html", null, true);
            echo "</button>
\t\t\t";
        }
        // line 31
        echo "\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "

\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  110 => 31,  104 => 29,  102 => 28,  97 => 26,  93 => 25,  88 => 23,  83 => 21,  77 => 18,  73 => 17,  68 => 15,  63 => 13,  57 => 10,  50 => 6,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\" min-height: 50vh;display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t{{ form_start(form, {'attr': {'class': 'row g-3'}}) }}
\t\t<div class=\"col-12\">
\t\t\t<label>Restaurant</label>
\t\t\t<input type=\"text\" value=\"{{order.restaurant}}\" class=\"form-control frm-input\" disabled>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t<label>Food</label>
\t\t\t<input type=\"text\" value=\"{{order.food}}\" class=\"form-control frm-input\" disabled>
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
\t\t\t{{ form_label(form.address) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.address) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.address, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.address) }}</small>
\t\t</div>
\t\t{%if order.isDelivred ==false %}
\t\t\t<button style=\"width: 80px; margin: 16px 0 0 10px;\" class=\"btn btn-primary\">{{ button_label|default('Order') }}</button>
\t\t\t{%endif%}
\t\t\t{{ form_end(form) }}

\t\t</div>
\t</div>
", "order/_form.html.twig", "/home/sadek/projects/symfony-restaurants/templates/order/_form.html.twig");
    }
}
