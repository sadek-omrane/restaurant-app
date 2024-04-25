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

/* home/about/about.html.twig */
class __TwigTemplate_f134b5ad2e38b6379491503c9b119ca0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<section class=\"about_section layout_padding\">
\t\t<div class=\"container  \">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/about-img.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t<div class=\"heading_container\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tWe Are Feane
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              the middle of text. All
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}
\t<section class=\"about_section layout_padding\">
\t\t<div class=\"container  \">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/about-img.png')}}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t<div class=\"heading_container\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tWe Are Feane
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              the middle of text. All
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "home/about/about.html.twig", "/home/sadek/projects/symfony-restaurants/templates/home/about/about.html.twig");
    }
}
