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
            'content' => [$this, 'block_content'],
            'nav' => [$this, 'block_nav'],
            'content2' => [$this, 'block_content2'],
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
<html lang=\"eng\">
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
<div class=\"mainContainer container-fluid mt-1\">
    <div class=\"row align-items-start\">
        <div class=\"col-1\"></div>
";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "        </div>
";
        // line 43
        $this->displayBlock('nav', $context, $blocks);
        // line 91
        echo "    </div>
    ";
        // line 92
        $this->displayBlock('content2', $context, $blocks);
        // line 95
        echo "</div>
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

    // line 33
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 34
        echo "        <div class=\"col-10\">
            <header class=\"header mb-3\">
                <h1 style=\"font-size: 75px\" class=\"mt-3\"><a class=\"fw-bolder text-light text-decoration-none\" href=\"/home\">Pizziloli</a></h1>
            </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 44
        echo "    <div class=\"col-1\">
        <nav class=\"navbar\"  style=\"transition: 0.5s; z-index: 4;\">
            <ul class=\"navbar-nav text-center mt-2 w-100\">
                <li class=\"nav-item\">
                    <!--  Nav up & down btn  -->
                    <div class=\"navBtn\">
                        <script>
                            let clicks = 0;
                        </script>
                        <button class=\"navbar-toggler bg-black\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"color: white; font-size: 50px;\">
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
                            }
                        </script>
                    </div>
                </li>
            <nav-dropdown-items id=\"navId\">
            <ul class=\"navbar-nav text-center mt-2 w-100\">
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light fs-3\" href=\"/home\"><i class=\"fa-solid fa-house\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light fs-3\" href=\"/login\"><i class=\"bi bi-person-fill\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light fs-1\" href=\"/contact\"><i class=\"bi bi-info-lg\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light fs-2\" href=\"/bestelling\"><i class=\"bi bi-box2-fill\"></i></a>
                </li>
            </ul>
            </nav-dropdown-items>
            </ul>
        </nav>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_content2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content2"));

        // line 93
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
        return array (  277 => 93,  267 => 92,  211 => 44,  201 => 43,  190 => 40,  180 => 39,  166 => 34,  156 => 33,  145 => 21,  141 => 18,  137 => 15,  133 => 12,  131 => 11,  121 => 10,  102 => 5,  90 => 95,  88 => 92,  85 => 91,  83 => 43,  80 => 42,  77 => 39,  75 => 33,  68 => 28,  66 => 23,  64 => 10,  61 => 9,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"eng\">
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
<div class=\"mainContainer container-fluid mt-1\">
    <div class=\"row align-items-start\">
        <div class=\"col-1\"></div>
{% block header %}
        <div class=\"col-10\">
            <header class=\"header mb-3\">
                <h1 style=\"font-size: 75px\" class=\"mt-3\"><a class=\"fw-bolder text-light text-decoration-none\" href=\"/home\">Pizziloli</a></h1>
            </header>
{% endblock %}
        {% block content %}

        {% endblock %}
        </div>
{% block nav %}
    <div class=\"col-1\">
        <nav class=\"navbar\"  style=\"transition: 0.5s; z-index: 4;\">
            <ul class=\"navbar-nav text-center mt-2 w-100\">
                <li class=\"nav-item\">
                    <!--  Nav up & down btn  -->
                    <div class=\"navBtn\">
                        <script>
                            let clicks = 0;
                        </script>
                        <button class=\"navbar-toggler bg-black\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" style=\"color: white; font-size: 50px;\">
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
                            }
                        </script>
                    </div>
                </li>
            <nav-dropdown-items id=\"navId\">
            <ul class=\"navbar-nav text-center mt-2 w-100\">
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light fs-3\" href=\"/home\"><i class=\"fa-solid fa-house\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light fs-3\" href=\"/login\"><i class=\"bi bi-person-fill\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light fs-1\" href=\"/contact\"><i class=\"bi bi-info-lg\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light fs-2\" href=\"/bestelling\"><i class=\"bi bi-box2-fill\"></i></a>
                </li>
            </ul>
            </nav-dropdown-items>
            </ul>
        </nav>
    </div>
{% endblock %}
    </div>
    {% block content2 %}

    {% endblock %}
</div>
</body>
</html>", "base.html.twig", "C:\\Users\\0jian\\Documents\\pizziloli-website\\templates\\base.html.twig");
    }
}
