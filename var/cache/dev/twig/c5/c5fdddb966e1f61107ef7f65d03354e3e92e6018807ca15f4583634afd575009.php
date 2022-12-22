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

/* home/index.html.twig */
class __TwigTemplate_49241c7a45eb6a2444801f642a78c471448eb07d927797ca553849f18f2860b9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!
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
        echo "
\t<section class=\"offer_section \">
\t\t<div class=\"offer_container\">
\t\t\t<div class=\"container \">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 13
            echo "\t\t\t\t\t\t<div class=\"col-md-6  \">
\t\t\t\t\t\t\t<div class=\"box \">
\t\t\t\t\t\t\t\t<div class=\"img-box\" style=\"display: flex;justify-content: center;align-items: center;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["food"], "image", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tdays
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "promotion", [], "any", false, false, false, 24), "html", null, true);
            echo "%</span>
\t\t\t\t\t\t\t\t\t\tOff
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_new", ["Fid" => twig_get_attribute($this->env, $this->source, $context["food"], "id", [], "any", false, false, false, 27), "Rid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["food"], "restaurant", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "Uid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\tOrder Now
\t\t\t\t\t\t\t\t\t\t<span style=\"color: white; font-size: 18px\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t<div class=\"heading_container heading_center margin-section\">
\t\t<h2>
\t\t\tOur Restaurants
\t\t</h2>
\t</div>
\t<section id=\"gtco-special-dishes\" class=\" section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"section-content\">
\t\t\t\t";
        // line 52
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 52, $this->source); })())), 1))) {
            // line 53
            echo "\t\t\t\t\t";
            if ((0 === twig_compare((twig_length_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 53, $this->source); })())) % 2), 0))) {
                // line 54
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 54, $this->source); })())) - 2), 2));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 55
                    echo "\t\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center py-5\">
\t\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0";
                    // line 57
                    echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                    echo ".</h2>
\t\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 60, $this->source); })()), $context["i"], [], "array", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
                    echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>
\t\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, twig_random($this->env, 1, 4)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 65
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 71, $this->source); })()), $context["i"], [], "array", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
                    echo "\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 78, $this->source); })()), $context["i"], [], "array", false, false, false, 78), "image", [], "any", false, false, false, 78))), "html", null, true);
                    echo "\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 83, $this->source); })()), ($context["i"] + 1), [], "array", false, false, false, 83), "image", [], "any", false, false, false, 83))), "html", null, true);
                    echo "\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5\">
\t\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0";
                    // line 86
                    echo twig_escape_filter($this->env, ($context["i"] + 2), "html", null, true);
                    echo ".</h2>
\t\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 89, $this->source); })()), ($context["i"] + 1), [], "array", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
                    echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus eius. In a quis quibusdam omnis atque vero dolores!</p>
\t\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, twig_random($this->env, 1, 4)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 94
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 100, $this->source); })()), ($context["i"] + 1), [], "array", false, false, false, 100), "id", [], "any", false, false, false, 100)]), "html", null, true);
                    echo "\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "\t\t\t\t\t";
            } else {
                // line 109
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 109, $this->source); })())) - 3), 2));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 110
                    echo "\t\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center py-5\">
\t\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0";
                    // line 112
                    echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                    echo ".</h2>
\t\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 115, $this->source); })()), $context["i"], [], "array", false, false, false, 115), "name", [], "any", false, false, false, 115), "html", null, true);
                    echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>

\t\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, twig_random($this->env, 1, 4)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 121
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 127, $this->source); })()), $context["i"], [], "array", false, false, false, 127), "id", [], "any", false, false, false, 127)]), "html", null, true);
                    echo "\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 134, $this->source); })()), $context["i"], [], "array", false, false, false, 134), "image", [], "any", false, false, false, 134))), "html", null, true);
                    echo "\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 139, $this->source); })()), ($context["i"] + 1), [], "array", false, false, false, 139), "image", [], "any", false, false, false, 139))), "html", null, true);
                    echo "\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5\">
\t\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0";
                    // line 142
                    echo twig_escape_filter($this->env, ($context["i"] + 2), "html", null, true);
                    echo ".</h2>
\t\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 145
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 145, $this->source); })()), ($context["i"] + 1), [], "array", false, false, false, 145), "name", [], "any", false, false, false, 145), "html", null, true);
                    echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus eius. In a quis quibusdam omnis atque vero dolores!</p>
\t\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, twig_random($this->env, 1, 4)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 150
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 153
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 156
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 156, $this->source); })()), ($context["i"] + 1), [], "array", false, false, false, 156), "id", [], "any", false, false, false, 156)]), "html", null, true);
                    echo "\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center py-5\">
\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0";
                // line 166
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 166, $this->source); })())), "html", null, true);
                echo ".</h2>
\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 169, $this->source); })()), (twig_length_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 169, $this->source); })())) - 1), [], "array", false, false, false, 169), "name", [], "any", false, false, false, 169), "html", null, true);
                echo "</span><br>
\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>
\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t";
                // line 173
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_random($this->env, 1, 4)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 174
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 180, $this->source); })()), (twig_length_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 180, $this->source); })())) - 1), [], "array", false, false, false, 180), "id", [], "any", false, false, false, 180)]), "html", null, true);
                echo "\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 187, $this->source); })()), (twig_length_filter($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 187, $this->source); })())) - 1), [], "array", false, false, false, 187), "image", [], "any", false, false, false, 187))), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t";
        } else {
            // line 192
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 192, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
                // line 193
                echo "\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center py-5\">
\t\t\t\t\t\t\t\t<h2 class=\"special-number\">01.</h2>
\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "name", [], "any", false, false, false, 198), "html", null, true);
                echo "</span><br>
\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>
\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_random($this->env, 1, 4)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 203
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 209)]), "html", null, true);
                echo "\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "image", [], "any", false, false, false, 216))), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "\t\t\t\t";
        }
        // line 221
        echo "\t\t\t</div>
\t\t</div>
\t</section>
\t<div class=\"heading_container heading_center margin-section\">
\t\t<h2>
\t\t\tBest Spishes
\t\t</h2>
\t</div>

\t<section class=\"food_section layout_padding-bottom\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"filters_menu\">
\t\t\t\t";
        // line 233
        $context["newArray"] = [];
        // line 234
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 234, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 235
            echo "\t\t\t\t\t";
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 235), (isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 235, $this->source); })()))) {
                // line 236
                echo "\t\t\t\t\t\t";
                $context["newArray"] = twig_array_merge((isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 236, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 236)]);
                // line 237
                echo "\t\t\t\t\t";
            }
            // line 238
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "\t\t\t\t<li class=\"active\" data-filter=\"*\">All</li>
\t\t\t\t";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newArray"]) || array_key_exists("newArray", $context) ? $context["newArray"] : (function () { throw new RuntimeError('Variable "newArray" does not exist.', 240, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 241
            echo "\t\t\t\t\t<li data-filter=\".";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "

\t\t\t</ul>

\t\t\t<div class=\"filters-content\">
\t\t\t\t<div class=\"row grid\">
\t\t\t\t\t";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 249, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 250
            echo "\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 all ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "category", [], "any", false, false, false, 250), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->source, $context["food"], "image", [], "any", false, false, false, 254))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\tDelicious
\t\t\t\t\t\t\t\t\t\t\t";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 259), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tVeniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"options\">
\t\t\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t\t\t\$";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "price", [], "any", false, false, false, 266), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: white; font-size: 18px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn-box\">
\t\t\t\t<a href=\"\">
\t\t\t\t\tView More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"about_section layout_padding\">
\t\t<div class=\"container  \">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 \">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/about-img.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t<div class=\"heading_container\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tWe Are Restaurant
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tin some form, by injected humour, or randomised words which don't look even slightly believable. If you
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tare going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe middle of text. All
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"book_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container\">
\t\t\t\t<h2>
\t\t\t\t\tBook A Table
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Name\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Your Email\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<select class=\"form-control nice-select wide\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>
\t\t\t\t\t\t\t\t\t\tHow many persons?
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t3
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t4
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t5
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn_box\">
\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\tBook Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"map_container \">
\t\t\t\t\t\t<div id=\"googleMap\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"client_section layout_padding-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container heading_center psudo_white_primary mb_45\">
\t\t\t\t<h2>
\t\t\t\t\tWhat Says Our Customers
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"carousel-wrap row \">
\t\t\t\t<div class=\"owl-carousel client_owl-carousel\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\tMoana Michell
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tmagna aliqua
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/client1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"box-img\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\tMike Hamell
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tmagna aliqua
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/client2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"box-img\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 419,  717 => 401,  609 => 296,  590 => 279,  571 => 266,  561 => 259,  553 => 254,  545 => 250,  541 => 249,  533 => 243,  522 => 241,  518 => 240,  515 => 239,  509 => 238,  506 => 237,  503 => 236,  500 => 235,  495 => 234,  493 => 233,  479 => 221,  476 => 220,  466 => 216,  456 => 209,  451 => 206,  443 => 203,  439 => 202,  432 => 198,  425 => 193,  420 => 192,  417 => 191,  410 => 187,  400 => 180,  395 => 177,  387 => 174,  383 => 173,  376 => 169,  370 => 166,  366 => 164,  352 => 156,  347 => 153,  339 => 150,  335 => 149,  328 => 145,  322 => 142,  316 => 139,  308 => 134,  298 => 127,  293 => 124,  285 => 121,  281 => 120,  273 => 115,  267 => 112,  263 => 110,  258 => 109,  255 => 108,  241 => 100,  236 => 97,  228 => 94,  224 => 93,  217 => 89,  211 => 86,  205 => 83,  197 => 78,  187 => 71,  182 => 68,  174 => 65,  170 => 64,  163 => 60,  157 => 57,  153 => 55,  148 => 54,  145 => 53,  143 => 52,  126 => 37,  110 => 27,  104 => 24,  97 => 20,  90 => 16,  85 => 13,  81 => 12,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}

\t<section class=\"offer_section \">
\t\t<div class=\"offer_container\">
\t\t\t<div class=\"container \">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for food in promotions %}
\t\t\t\t\t\t<div class=\"col-md-6  \">
\t\t\t\t\t\t\t<div class=\"box \">
\t\t\t\t\t\t\t\t<div class=\"img-box\" style=\"display: flex;justify-content: center;align-items: center;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~food.image)}}\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t{{food.name}}
\t\t\t\t\t\t\t\t\t\tdays
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t<span>{{food.promotion}}%</span>
\t\t\t\t\t\t\t\t\t\tOff
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_order_new', {Fid: food.id, Rid: food.restaurant.id, Uid: app.user.id}) }}\">
\t\t\t\t\t\t\t\t\t\tOrder Now
\t\t\t\t\t\t\t\t\t\t<span style=\"color: white; font-size: 18px\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t<div class=\"heading_container heading_center margin-section\">
\t\t<h2>
\t\t\tOur Restaurants
\t\t</h2>
\t</div>
\t<section id=\"gtco-special-dishes\" class=\" section-padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"section-content\">
\t\t\t\t{% if restaurants|length > 1 %}
\t\t\t\t\t{% if restaurants|length % 2 == 0 %}
\t\t\t\t\t\t{% for i in range(0, restaurants|length-2, 2) %}
\t\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center py-5\">
\t\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0{{i+1}}.</h2>
\t\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<span>{{restaurants[i].name}}</span><br>
\t\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>
\t\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t\t{% for i in range(1, random(1, 4)) %}

\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('restaurant', {id: restaurants[i].id})}}\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~restaurants[i].image)}}\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~restaurants[i+1].image)}}\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5\">
\t\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0{{i+2}}.</h2>
\t\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<span>{{restaurants[i+1].name}}</span><br>
\t\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus eius. In a quis quibusdam omnis atque vero dolores!</p>
\t\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t\t{% for i in range(1, random(1, 4)) %}

\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('restaurant', {id: restaurants[i+1].id})}}\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% for i in range(0, restaurants|length-3, 2) %}
\t\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center py-5\">
\t\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0{{i+1}}.</h2>
\t\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<span>{{restaurants[i].name}}</span><br>
\t\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>

\t\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t\t{% for i in range(1, random(1, 4)) %}

\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('restaurant', {id: restaurants[i].id})}}\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~restaurants[i].image)}}\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~restaurants[i+1].image)}}\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5\">
\t\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0{{i+2}}.</h2>
\t\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t<span>{{restaurants[i+1].name}}</span><br>
\t\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus eius. In a quis quibusdam omnis atque vero dolores!</p>
\t\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t\t{% for i in range(1, random(1, 4)) %}

\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('restaurant', {id: restaurants[i+1].id})}}\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center py-5\">
\t\t\t\t\t\t\t\t<h2 class=\"special-number\">0{{restaurants|length}}.</h2>
\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>{{restaurants[restaurants|length-1].name}}</span><br>
\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>
\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t{% for i in range(1, random(1, 4)) %}

\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('restaurant', {id: restaurants[restaurants|length-1].id})}}\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~restaurants[restaurants|length-1].image)}}\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% else %}
\t\t\t\t\t{% for restaurant in restaurants %}
\t\t\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t\t\t<div class=\"col-lg-5 col-md-6 align-self-center py-5\">
\t\t\t\t\t\t\t\t<h2 class=\"special-number\">01.</h2>
\t\t\t\t\t\t\t\t<div class=\"dishes-text\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>{{restaurant.name}}</span><br>
\t\t\t\t\t\t\t\t\t\tRestaurant</h3>
\t\t\t\t\t\t\t\t\t<p class=\"pt-3\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ea vero alias perferendis quas animi doloribus voluptates. Atque explicabo ea nesciunt provident libero qui eum, corporis esse quos excepturi soluta?</p>
\t\t\t\t\t\t\t\t\t<div style=\"color: #ffbe33\">
\t\t\t\t\t\t\t\t\t\t{% for i in range(1, random(1, 4)) %}

\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-star-half\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('restaurant', {id: restaurant.id})}}\" class=\"btn-primary1 mt-3\">Visit Us<span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~restaurant.image)}}\" alt=\"\" class=\"img-fluid shadow w-100\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class=\"heading_container heading_center margin-section\">
\t\t<h2>
\t\t\tBest Spishes
\t\t</h2>
\t</div>

\t<section class=\"food_section layout_padding-bottom\">
\t\t<div class=\"container\">
\t\t\t<ul class=\"filters_menu\">
\t\t\t\t{% set newArray = [] %}
\t\t\t\t{% for category in categories %}
\t\t\t\t\t{% if category.name not in newArray %}
\t\t\t\t\t\t{% set newArray = newArray|merge([category.name]) %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t<li class=\"active\" data-filter=\"*\">All</li>
\t\t\t\t{% for category in newArray %}
\t\t\t\t\t<li data-filter=\".{{category}}\">{{category}}</li>
\t\t\t\t{% endfor %}


\t\t\t</ul>

\t\t\t<div class=\"filters-content\">
\t\t\t\t<div class=\"row grid\">
\t\t\t\t\t{% for food in features %}
\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 all {{food.category}}\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/'~food.image)}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\tDelicious
\t\t\t\t\t\t\t\t\t\t\t{{food.name}}
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tVeniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"options\">
\t\t\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t\t\t\t\${{food.price}}
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: white; font-size: 18px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn-box\">
\t\t\t\t<a href=\"\">
\t\t\t\t\tView More
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</section>
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
\t\t\t\t\t\t\t\tWe Are Restaurant
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tin some form, by injected humour, or randomised words which don't look even slightly believable. If you
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tare going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe middle of text. All
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"book_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container\">
\t\t\t\t<h2>
\t\t\t\t\tBook A Table
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"form_container\">
\t\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Name\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Phone Number\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Your Email\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<select class=\"form-control nice-select wide\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>
\t\t\t\t\t\t\t\t\t\tHow many persons?
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t3
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t4
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t\t\t\t5
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"btn_box\">
\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\tBook Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"map_container \">
\t\t\t\t\t\t<div id=\"googleMap\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"client_section layout_padding-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container heading_center psudo_white_primary mb_45\">
\t\t\t\t<h2>
\t\t\t\t\tWhat Says Our Customers
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"carousel-wrap row \">
\t\t\t\t<div class=\"owl-carousel client_owl-carousel\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\tMoana Michell
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tmagna aliqua
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/client1.jpg')}}\" alt=\"\" class=\"box-img\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\tMike Hamell
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tmagna aliqua
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/brochures/client2.jpg')}}\" alt=\"\" class=\"box-img\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "home/index.html.twig", "/home/sadek/projects/Restaurant/templates/home/index.html.twig");
    }
}
