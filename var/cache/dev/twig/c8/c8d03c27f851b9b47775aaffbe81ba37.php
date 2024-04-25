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

/* @MercurySeriesFlashy/flashy.html.twig */
class __TwigTemplate_1cffd402286ae3337d5318634c4d6a1b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MercurySeriesFlashy/flashy.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", [0 => "mercuryseries_flashy_notification"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "    <script id=\"flashy-template\" type=\"text/template\">
        <div class=\"flashy flashy--";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
            <a href=\"#\" class=\"flashy__body\" target=\"_blank\"></a>
        </div>
    </script>

    <script>
        flashy(\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 9), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "link", [], "any", false, false, false, 9), "html", null, true);
            echo "\");
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@MercurySeriesFlashy/flashy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  47 => 3,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for message in app.flashes('mercuryseries_flashy_notification') %}
    <script id=\"flashy-template\" type=\"text/template\">
        <div class=\"flashy flashy--{{ message.type }}\">
            <a href=\"#\" class=\"flashy__body\" target=\"_blank\"></a>
        </div>
    </script>

    <script>
        flashy(\"{{ message.message }}\", \"{{ message.link }}\");
    </script>
{% endfor %}
", "@MercurySeriesFlashy/flashy.html.twig", "/home/sadek/projects/symfony-restaurants/vendor/mercuryseries/flashy-bundle/src/Resources/views/flashy.html.twig");
    }
}
