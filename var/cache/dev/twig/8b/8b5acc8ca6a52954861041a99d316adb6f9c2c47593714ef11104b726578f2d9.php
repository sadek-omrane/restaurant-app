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

/* auth/login.html.twig */
class __TwigTemplate_9d0003c20681dff6289ffcbc5af747365b6a76e81d7f85a8df1bb9a32721f823 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auth/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!
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
\t\t<form method=\"post\" style=\"width: 300px\">
\t\t\t";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageKey", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), "messageData", [], "any", false, false, false, 10), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 12
        echo "
\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Please Login</h1>
\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t<input type=\"email\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control frm-input\" autocomplete=\"email\" required autofocus>
\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control frm-input\" autocomplete=\"current-password\" required>

\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t<div class=\"checkbox \">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">
\t\t\t\t\tRemember me
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"mb-2\">
\t\t\t\tDon't have account ?
\t\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Sign Up</a>
\t\t\t</div>
\t\t\t<button class=\"btn btn-lg btn-primary\" style=\"width: 100%\" type=\"submit\">
\t\t\t\tLogin
\t\t\t</button>
\t\t</form>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  98 => 19,  91 => 15,  86 => 12,  80 => 10,  78 => 9,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!
{% endblock %}

{% block body %}
\t<div class=\"frm\">
\t\t<form method=\"post\" style=\"width: 300px\">
\t\t\t{% if error %}
\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Please Login</h1>
\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control frm-input\" autocomplete=\"email\" required autofocus>
\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control frm-input\" autocomplete=\"current-password\" required>

\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t<div class=\"checkbox \">
\t\t\t\t<label>
\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">
\t\t\t\t\tRemember me
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"mb-2\">
\t\t\t\tDon't have account ?
\t\t\t\t<a href=\"{{path('app_register')}}\">Sign Up</a>
\t\t\t</div>
\t\t\t<button class=\"btn btn-lg btn-primary\" style=\"width: 100%\" type=\"submit\">
\t\t\t\tLogin
\t\t\t</button>
\t\t</form>
\t</div>
{% endblock %}
", "auth/login.html.twig", "/home/sadek/projects/Restaurant/templates/auth/login.html.twig");
    }
}
