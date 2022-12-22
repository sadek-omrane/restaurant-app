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

/* auth/register.html.twig */
class __TwigTemplate_cbe83f47e8647f9754e0bca056f00a6989d55475c0d757960b2095a0c11211f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"frm\">
\t\t<div style=\"width: 380px;\">
\t\t\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        echo "

\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Please Sign Up</h1>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), "email", [], "any", false, false, false, 13), 'label');
        echo "
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<small>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), 'help');
        echo "</small>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), 'label', ["label" => "Password"]);
        echo "
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "plainPassword", [], "any", false, false, false, 23), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "plainPassword", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<small>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), 'help');
        echo "</small>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), 'label', ["label" => "Full Name"]);
        echo "
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<small>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'help');
        echo "</small>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "cin", [], "any", false, false, false, 37), 'label', ["label" => "CIN"]);
        echo "
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "cin", [], "any", false, false, false, 39), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "cin", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<small>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "cin", [], "any", false, false, false, 42), 'help');
        echo "</small>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), 'label', ["label" => "Phone Number"]);
        echo "
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "phone", [], "any", false, false, false, 47), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "phone", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<small>";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "phone", [], "any", false, false, false, 50), 'help');
        echo "</small>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "agreeTerms", [], "any", false, false, false, 53), 'widget');
        echo "
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "agreeTerms", [], "any", false, false, false, 54), 'label');
        echo "
\t\t\t</div>
\t\t\t<div class=\"mb-2\">
\t\t\t\tYou have account ?
\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn btn-lg btn-primary\">Sign Up</button>
\t\t\t";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "auth/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 61,  196 => 58,  189 => 54,  185 => 53,  179 => 50,  175 => 49,  170 => 47,  165 => 45,  159 => 42,  155 => 41,  150 => 39,  145 => 37,  139 => 34,  135 => 33,  130 => 31,  125 => 29,  119 => 26,  115 => 25,  110 => 23,  105 => 21,  99 => 18,  95 => 17,  90 => 15,  85 => 13,  78 => 9,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register
{% endblock %}

{% block body %}
\t<div class=\"frm\">
\t\t<div style=\"width: 380px;\">
\t\t\t{{ form_start(registrationForm, {'attr': {'class': 'row g-3'}}) }}

\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Please Sign Up</h1>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_label(registrationForm.email) }}
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t{{ form_errors(registrationForm.email) }}
\t\t\t\t</div>
\t\t\t\t{{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<small>{{ form_help(registrationForm.email) }}</small>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{{ form_label(registrationForm.plainPassword, 'Password') }}
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t{{ form_errors(registrationForm.plainPassword) }}
\t\t\t\t</div>
\t\t\t\t{{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<small>{{ form_help(registrationForm.plainPassword) }}</small>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{{ form_label(registrationForm.name, 'Full Name') }}
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t{{ form_errors(registrationForm.name) }}
\t\t\t\t</div>
\t\t\t\t{{ form_widget(registrationForm.name, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<small>{{ form_help(registrationForm.name) }}</small>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{{ form_label(registrationForm.cin, 'CIN') }}
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t{{ form_errors(registrationForm.cin) }}
\t\t\t\t</div>
\t\t\t\t{{ form_widget(registrationForm.cin, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<small>{{ form_help(registrationForm.cin) }}</small>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{{ form_label(registrationForm.phone, 'Phone Number') }}
\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t{{ form_errors(registrationForm.phone) }}
\t\t\t\t</div>
\t\t\t\t{{ form_widget(registrationForm.phone, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t<small>{{ form_help(registrationForm.phone) }}</small>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{{ form_widget(registrationForm.agreeTerms) }}
\t\t\t\t{{ form_label(registrationForm.agreeTerms) }}
\t\t\t</div>
\t\t\t<div class=\"mb-2\">
\t\t\t\tYou have account ?
\t\t\t\t<a href=\"{{path('login')}}\">Login</a>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn btn-lg btn-primary\">Sign Up</button>
\t\t\t{{ form_end(registrationForm) }}
\t\t</div>
\t</div>


{% endblock %}
", "auth/register.html.twig", "/home/sadek/projects/Restaurant/templates/auth/register.html.twig");
    }
}
