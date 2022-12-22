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

/* base/footer.html.twig */
class __TwigTemplate_a39fbd1e05a24af5d4906dba92234f50a5395d87e6a0940e5f55ac958ae744ff extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer_section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 footer-col\">
\t\t\t\t<div class=\"footer_contact\">
\t\t\t\t\t<h4>
\t\t\t\t\t\tContact Us
\t\t\t\t\t</h4>
\t\t\t\t\t<div class=\"contact_link_box\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tLocation
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tCall +01 1234567890
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tdemo@gmail.com
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 footer-col\">
\t\t\t\t<div class=\"footer_detail\">
\t\t\t\t\t<a href=\"\" class=\"footer-logo\">
\t\t\t\t\t\tFeane
\t\t\t\t\t</a>
\t\t\t\t\t<p>
\t\t\t\t\t\tNecessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"footer_social\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 footer-col\">
\t\t\t\t<h4>
\t\t\t\t\tOpening Hours
\t\t\t\t</h4>
\t\t\t\t<p>
\t\t\t\t\tEveryday
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t10.00 Am -10.00 Pm
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-info\">
\t\t\t<p>
\t\t\t\t&copy;
\t\t\t\t<span id=\"displayYear\"></span>
\t\t\t\tAll Rights Reserved By
\t\t\t\t<a href=\"https://html.design/\">Free Html Templates</a><br><br>
\t\t\t\t&copy;
\t\t\t\t<span id=\"displayYear\"></span>
\t\t\t\tDistributed By
\t\t\t\t<a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
\t\t\t</p>
\t\t</div>
\t</div>
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer_section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 footer-col\">
\t\t\t\t<div class=\"footer_contact\">
\t\t\t\t\t<h4>
\t\t\t\t\t\tContact Us
\t\t\t\t\t</h4>
\t\t\t\t\t<div class=\"contact_link_box\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tLocation
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tCall +01 1234567890
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tdemo@gmail.com
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 footer-col\">
\t\t\t\t<div class=\"footer_detail\">
\t\t\t\t\t<a href=\"\" class=\"footer-logo\">
\t\t\t\t\t\tFeane
\t\t\t\t\t</a>
\t\t\t\t\t<p>
\t\t\t\t\t\tNecessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"footer_social\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 footer-col\">
\t\t\t\t<h4>
\t\t\t\t\tOpening Hours
\t\t\t\t</h4>
\t\t\t\t<p>
\t\t\t\t\tEveryday
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t10.00 Am -10.00 Pm
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-info\">
\t\t\t<p>
\t\t\t\t&copy;
\t\t\t\t<span id=\"displayYear\"></span>
\t\t\t\tAll Rights Reserved By
\t\t\t\t<a href=\"https://html.design/\">Free Html Templates</a><br><br>
\t\t\t\t&copy;
\t\t\t\t<span id=\"displayYear\"></span>
\t\t\t\tDistributed By
\t\t\t\t<a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
\t\t\t</p>
\t\t</div>
\t</div>
</footer>
", "base/footer.html.twig", "/home/sadek/projects/Restaurant/templates/base/footer.html.twig");
    }
}
