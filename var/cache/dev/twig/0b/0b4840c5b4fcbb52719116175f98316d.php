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

/* base.html.twig */
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

    ";
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    ";
        // line 28
        echo "</head>
<body class=\"bg-black\">
    <div class=\"container\">
    ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "    ";
        $this->displayBlock('nav', $context, $blocks);
        // line 78
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        ";
        // line 12
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\">

        ";
        // line 15
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

        ";
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css\">

        ";
        // line 21
        echo "        <script src=\"https://kit.fontawesome.com/7a3d3c8241.js\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "        <header class=\"header mb-3 bg-warning\">
            <h2 class=\"mt-3\"><a class=\"fw-bolder text-light\" href=\"/home\">Pizziloli</a></h2>

            <!--  Nav up & down btn  -->
            <div class=\"navBtn d-flex justify-content-end\">
                <script>
                    let clicks = 0;
                </script>
                <button class=\"navbar-toggler  bg-danger d-flex justify-content-end\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"color: white; font-size: 30px;\">
                    <span id=\"navBtnId\" class=\"fa-solid fa-bars\"></span>
                </button>
                <script>
                    let navBtnId = document.getElementById(\"navBtnId\");
                    let toggler = document.getElementsByClassName(\"navbar-toggler\");
                    toggler[0].onclick = function() {
                        if (clicks == 0) {
                            document.getElementById(\"navId\").style.setProperty(\"display\", \"none\", \"important\");
                            clicks = 1;
                        }else {
                            document.getElementById(\"navId\").style.setProperty(\"display\", \"flex\", \"important\");
                            clicks = 0;
                        }
                    }</script>
            </div>
        </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 59
        echo "        <nav class=\"navbar lead bg-danger text-end d-flex justify-content-end\">
            <div id=\"navId\" style=\"transition: 0.5s; z-index: 4;\">
            <ul class=\"navbar-nav bg-warning\">
                <li class=\"nav-item grid\">
                    <a class=\"nav-link text-light\" href=\"/home\"><i class=\"fa-solid fa-house\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light\" href=\"/login\">Login</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light\" href=\"#\">Over ons</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light\" href=\"#\">Bestelling</a>
                </li>
            </ul>
            </div>
        </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  239 => 79,  229 => 78,  201 => 59,  191 => 58,  156 => 32,  146 => 31,  135 => 21,  131 => 18,  127 => 15,  123 => 12,  121 => 11,  111 => 10,  92 => 5,  80 => 81,  77 => 78,  74 => 58,  72 => 31,  67 => 28,  65 => 23,  63 => 10,  60 => 9,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

    {% block stylesheets %}
        {# CSS link: #}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/style.css\">

        {# Bootstrap CSS link: #}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

        {# Bootstrap icon link: #}
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css\">

        {# Link for icon: #}
        <script src=\"https://kit.fontawesome.com/7a3d3c8241.js\" crossorigin=\"anonymous\"></script>
    {% endblock %}
    {#
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
    #}
</head>
<body class=\"bg-black\">
    <div class=\"container\">
    {% block header %}
        <header class=\"header mb-3 bg-warning\">
            <h2 class=\"mt-3\"><a class=\"fw-bolder text-light\" href=\"/home\">Pizziloli</a></h2>

            <!--  Nav up & down btn  -->
            <div class=\"navBtn d-flex justify-content-end\">
                <script>
                    let clicks = 0;
                </script>
                <button class=\"navbar-toggler  bg-danger d-flex justify-content-end\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"color: white; font-size: 30px;\">
                    <span id=\"navBtnId\" class=\"fa-solid fa-bars\"></span>
                </button>
                <script>
                    let navBtnId = document.getElementById(\"navBtnId\");
                    let toggler = document.getElementsByClassName(\"navbar-toggler\");
                    toggler[0].onclick = function() {
                        if (clicks == 0) {
                            document.getElementById(\"navId\").style.setProperty(\"display\", \"none\", \"important\");
                            clicks = 1;
                        }else {
                            document.getElementById(\"navId\").style.setProperty(\"display\", \"flex\", \"important\");
                            clicks = 0;
                        }
                    }</script>
            </div>
        </header>
    {% endblock %}
    {% block nav %}
        <nav class=\"navbar lead bg-danger text-end d-flex justify-content-end\">
            <div id=\"navId\" style=\"transition: 0.5s; z-index: 4;\">
            <ul class=\"navbar-nav bg-warning\">
                <li class=\"nav-item grid\">
                    <a class=\"nav-link text-light\" href=\"/home\"><i class=\"fa-solid fa-house\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light\" href=\"/login\">Login</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light\" href=\"#\">Over ons</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light\" href=\"#\">Bestelling</a>
                </li>
            </ul>
            </div>
        </nav>
    {% endblock %}
    {% block body %}

    {% endblock %}
    </div>
</body>
</html>", "base.html.twig", "C:\\Users\\0jian\\Documents\\pizziloli-website\\templates\\base.html.twig");
    }
}
