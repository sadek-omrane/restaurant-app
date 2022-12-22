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

/* home/booking/_form.html.twig */
class __TwigTemplate_b11c6a77f5e164d7d5d4faac80a5602e5b156d0e005815494e8c0cf1e8a5500a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/booking/_form.html.twig"));

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
\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t<input width=\"20\" type=\"email\" class=\"form-control\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 9, $this->source); })()), "owner", [], "any", false, false, false, 9), "html", null, true);
        echo "\" disabled placeholder=\"Email\"/>

\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "restaurant", [], "any", false, false, false, 13), 'label');
        echo "
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "restaurant", [], "any", false, false, false, 15), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "restaurant", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control frm-input", "placeholder" => "How many persons?"]]);
        echo "
\t\t\t\t\t\t<small>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "restaurant", [], "any", false, false, false, 18), 'help');
        echo "</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nbPerson", [], "any", false, false, false, 21), 'label');
        echo "
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nbPerson", [], "any", false, false, false, 23), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nbPerson", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control frm-input"]]);
        echo "
\t\t\t\t\t\t<small>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nbPerson", [], "any", false, false, false, 26), 'help');
        echo "</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "bookingAt", [], "any", false, false, false, 29), 'label');
        echo "
\t\t\t\t\t\t<div class=\"form-error\">
\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "bookingAt", [], "any", false, false, false, 31), 'errors');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "bookingAt", [], "any", false, false, false, 33), 'widget');
        echo "
\t\t\t\t\t\t<small>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "bookingAt", [], "any", false, false, false, 34), 'help');
        echo "</small>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn_box\">
\t\t\t\t\t\t<button>";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 37, $this->source); })()), "Book Now")) : ("Book Now")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/booking/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  120 => 37,  114 => 34,  110 => 33,  105 => 31,  100 => 29,  94 => 26,  90 => 25,  85 => 23,  80 => 21,  74 => 18,  70 => 17,  65 => 15,  60 => 13,  53 => 9,  47 => 6,  40 => 1,);
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
\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t<input width=\"20\" type=\"email\" class=\"form-control\" value=\"{{booking.owner}}\" disabled placeholder=\"Email\"/>

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
\t\t\t\t\t<div class=\"btn_box\">
\t\t\t\t\t\t<button>{{ button_label|default('Book Now') }}</button>
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
", "home/booking/_form.html.twig", "/home/sadek/projects/Restaurant/templates/home/booking/_form.html.twig");
    }
}
