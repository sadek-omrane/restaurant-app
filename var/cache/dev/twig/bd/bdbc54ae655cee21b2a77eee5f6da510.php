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

/* admin/booking_crud/_form.html.twig */
class __TwigTemplate_42964f78d44f50276701b5ffe02400a8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/booking_crud/_form.html.twig"));

        // line 1
        echo "<section class=\"book_section layout_padding\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "owner", [], "any", false, false, false, 8), 'label');
        echo "
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "owner", [], "any", false, false, false, 10), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "owner", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control frm-input", "placeholder" => "How many persons?"]]);
        echo "
\t\t\t\t\t\t<small>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "owner", [], "any", false, false, false, 13), 'help');
        echo "</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "restaurant", [], "any", false, false, false, 16), 'label');
        echo "
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "restaurant", [], "any", false, false, false, 18), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "restaurant", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control frm-input", "placeholder" => "How many persons?"]]);
        echo "
\t\t\t\t\t\t<small>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "restaurant", [], "any", false, false, false, 21), 'help');
        echo "</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nbPerson", [], "any", false, false, false, 24), 'label');
        echo "
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nbPerson", [], "any", false, false, false, 26), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nbPerson", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t\t\t\t<small>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nbPerson", [], "any", false, false, false, 29), 'help');
        echo "</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "bookingAt", [], "any", false, false, false, 32), 'label');
        echo "
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "bookingAt", [], "any", false, false, false, 34), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "bookingAt", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t\t\t\t\t<small>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "bookingAt", [], "any", false, false, false, 37), 'help');
        echo "</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "stat", [], "any", false, false, false, 40), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "stat", [], "any", false, false, false, 41), 'label');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"submit\" style=\"width: 80px;\" class=\"btn btn-primary\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "\">

\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\" style=\"margin: 45px 0 0 0;\">
\t\t\t\t<div class=\"map_container \">
\t\t\t\t\t<div id=\"googleMap\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/booking_crud/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  142 => 44,  136 => 41,  132 => 40,  126 => 37,  122 => 36,  117 => 34,  112 => 32,  106 => 29,  102 => 28,  97 => 26,  92 => 24,  86 => 21,  82 => 20,  77 => 18,  72 => 16,  66 => 13,  62 => 12,  57 => 10,  52 => 8,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"book_section layout_padding\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t<div>
\t\t\t\t\t\t{{ form_label(form.owner) }}
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t{{ form_errors(form.owner) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_widget(form.owner, {'attr': {'class': 'form-control frm-input', 'placeholder': 'How many persons?'}}) }}
\t\t\t\t\t\t<small>{{ form_help(form.owner) }}</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t{{ form_label(form.restaurant) }}
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t{{ form_errors(form.restaurant) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_widget(form.restaurant, {'attr': {'class': 'form-control frm-input', 'placeholder': 'How many persons?'}}) }}
\t\t\t\t\t\t<small>{{ form_help(form.restaurant) }}</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t{{ form_label(form.nbPerson) }}
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t{{ form_errors(form.nbPerson) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_widget(form.nbPerson, {'attr': {'class': 'form-control frm-input'}}) }}
\t\t\t\t\t\t<small>{{ form_help(form.nbPerson) }}</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t{{ form_label(form.bookingAt) }}
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t{{ form_errors(form.bookingAt) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_widget(form.bookingAt) }}
\t\t\t\t\t\t<small>{{ form_help(form.bookingAt) }}</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t{{ form_widget(form.stat) }}
\t\t\t\t\t\t{{ form_label(form.stat) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"submit\" style=\"width: 80px;\" class=\"btn btn-primary\" value=\"{{ button_label|default('Save') }}\">

\t\t\t\t\t</div>

\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\" style=\"margin: 45px 0 0 0;\">
\t\t\t\t<div class=\"map_container \">
\t\t\t\t\t<div id=\"googleMap\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "admin/booking_crud/_form.html.twig", "/home/sadek/projects/symfony-restaurants/templates/admin/booking_crud/_form.html.twig");
    }
}
