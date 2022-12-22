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

/* booking/_form.html.twig */
class __TwigTemplate_1ceb2ec56a6bc79dda06ea0155efa9e847400371a2f9f2f2e428f0d24780589d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/_form.html.twig"));

        // line 1
        echo "<div style=\" min-height: 50vh;display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        echo "
\t\t<div class=\"col-12\">
\t\t\t<label>Owner</label>
\t\t\t<input type=\"text\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 6, $this->source); })()), "owner", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"form-control frm-input\" disabled>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t<label>Restaurant</label>
\t\t\t<input type=\"text\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 10, $this->source); })()), "restaurant", [], "any", false, false, false, 10), "html", null, true);
        echo "\" class=\"form-control frm-input\" disabled>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nbPerson", [], "any", false, false, false, 13), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nbPerson", [], "any", false, false, false, 15), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nbPerson", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t<small>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nbPerson", [], "any", false, false, false, 18), 'help');
        echo "</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "bookingAt", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t<div class=\"form-error\">
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "bookingAt", [], "any", false, false, false, 23), 'errors');
        echo "
\t\t\t</div>
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "bookingAt", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => ""]]);
        echo "
\t\t\t<small>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "bookingAt", [], "any", false, false, false, 26), 'help');
        echo "</small>
\t\t</div>
\t\t<button style=\"width: 80px; margin: 16px 0 0 10px;\" class=\"btn btn-primary\">";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 28, $this->source); })()), "Book")) : ("Book")), "html", null, true);
        echo "</button>

\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "

\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "booking/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  102 => 28,  97 => 26,  93 => 25,  88 => 23,  83 => 21,  77 => 18,  73 => 17,  68 => 15,  63 => 13,  57 => 10,  50 => 6,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\" min-height: 50vh;display: flex;flex-direction: column; justify-content: center; align-items: center; margin: 0 0 30px 0;\">
\t<div style=\"width: 400px;\">
\t\t{{ form_start(form, {'attr': {'class': 'row g-3'}}) }}
\t\t<div class=\"col-12\">
\t\t\t<label>Owner</label>
\t\t\t<input type=\"text\" value=\"{{booking.owner}}\" class=\"form-control frm-input\" disabled>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t<label>Restaurant</label>
\t\t\t<input type=\"text\" value=\"{{booking.restaurant}}\" class=\"form-control frm-input\" disabled>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.nbPerson) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.nbPerson) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.nbPerson, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t<small>{{ form_help(form.nbPerson) }}</small>
\t\t</div>
\t\t<div class=\"col-12\">
\t\t\t{{ form_label(form.bookingAt) }}
\t\t\t<div class=\"form-error\">
\t\t\t\t{{ form_errors(form.bookingAt) }}
\t\t\t</div>
\t\t\t{{ form_widget(form.bookingAt, {'attr': {'class': ''}}) }}
\t\t\t<small>{{ form_help(form.bookingAt) }}</small>
\t\t</div>
\t\t<button style=\"width: 80px; margin: 16px 0 0 10px;\" class=\"btn btn-primary\">{{ button_label|default('Book') }}</button>

\t\t{{ form_end(form) }}

\t</div>
</div>
", "booking/_form.html.twig", "/home/sadek/projects/Restaurant/templates/booking/_form.html.twig");
    }
}
