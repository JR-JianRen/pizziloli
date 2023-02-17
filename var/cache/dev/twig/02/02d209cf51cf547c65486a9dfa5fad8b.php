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

/* index.html.twig */
class __TwigTemplate_d1b0f67ee427839780be007056bbf6f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'content2' => [$this, 'block_content2'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Pizziloli home ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"text-light\">
        <hr><br>
    </div>
    <div class=\"carousel row mx-1\">

        <div class=\"col-md-12 col-lg-6 px-5\">
            <h1 class=\"mt-5 text-light fw-bolder\">Welkom bij Pizziloli</h1>
            <br>
            <p class=\"text-light\">
                Wij hebben 17.000  winkels over de hele wereld. Alleen al in Nederland  maken wij ieder
                jaar 20 miljoen pizza's. Al onze pizza's worden vers gemaakt, direct nadat je bestelling
                plaats.
            </p>
            <br><br>
            <orderbtn class=\"d-flex justify-content-start my-4\">
                <button class=\"orderBtn w-75 py-4\">Bestellen</button>
            </orderbtn>
            </div>

        <div class=\"carouselImg col-md-12 col-lg-6 d-flex justify-content-center\">
            <img class=\"carouselImg rounded img-fluid\" src=\"/img/carouselImg.jpg\" alt=\"pizzaImg\">
        </div>
    </div>
    <div class=\"text-light\">
        <hr><br>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_content2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content2"));

        // line 34
        echo "
    <div class=\"row\">
        <div class=\"col-1\"></div>
        <div class=\"col-10\"><h3 class=\" pb-1 text-light fw-bold\">Kies uit</h3></div>
        <div class=\"col-1\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col-1\"></div>
        <div class=\"col-10\">
            <div class=\"row gap-5 d-flex justify-content-between\">
                <div class=\"col px-1\">
                    <div class=\"catoCard card\">
                        <a class=\"catoA\" href=\"#\">
                        <img class=\"catoImg1 card-img-top\" src=\"/img/catoImg1.jpg\" alt=\"Card image\">
                        <div class=\"card-img-overlay h-100 d-flex flex-column justify-content-center align-items-center\">
                            <h1 class=\"card-title text-light fw-bold\">Vegatarische </h1>
                            <h1 class=\"card-title text-light fw-bold\">pizza</h1>
                        </div>
                        </a>
                    </div>
                </div>
                <div class=\"col px-1\">
                    <div class=\"catoCard card\">
                        <a class=\"catoA\" href=\"#\">
                        <img class=\"catoImg1 card-img-top\" src=\"/img/catoImg2.jpg\" alt=\"Card image\">
                        <div class=\"card-img-overlay h-100 d-flex flex-column justify-content-center align-items-center\">
                            <h1 class=\"card-title text-light fw-bold\"> Vlees pizza</h1>
                        </div>
                        </a>
                    </div>
                </div>
                <div class=\"col px-1\">
                    <div class=\"catoCard card\">
                        <a class=\"catoA\" href=\"#\">
                        <img class=\"catoImg1 card-img-top\" src=\"/img/catoImg3.jpg\" alt=\"Card image\">
                        <div class=\"card-img-overlay h-100 d-flex flex-column justify-content-center align-items-center\">
                            <h1 class=\"card-title text-light fw-bold\">Vis pizza</h1>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-1\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 34,  125 => 33,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Pizziloli home {% endblock %}

{% block content %}
    <div class=\"text-light\">
        <hr><br>
    </div>
    <div class=\"carousel row mx-1\">

        <div class=\"col-md-12 col-lg-6 px-5\">
            <h1 class=\"mt-5 text-light fw-bolder\">Welkom bij Pizziloli</h1>
            <br>
            <p class=\"text-light\">
                Wij hebben 17.000  winkels over de hele wereld. Alleen al in Nederland  maken wij ieder
                jaar 20 miljoen pizza's. Al onze pizza's worden vers gemaakt, direct nadat je bestelling
                plaats.
            </p>
            <br><br>
            <orderbtn class=\"d-flex justify-content-start my-4\">
                <button class=\"orderBtn w-75 py-4\">Bestellen</button>
            </orderbtn>
            </div>

        <div class=\"carouselImg col-md-12 col-lg-6 d-flex justify-content-center\">
            <img class=\"carouselImg rounded img-fluid\" src=\"/img/carouselImg.jpg\" alt=\"pizzaImg\">
        </div>
    </div>
    <div class=\"text-light\">
        <hr><br>
    </div>
{% endblock %}
{% block content2 %}

    <div class=\"row\">
        <div class=\"col-1\"></div>
        <div class=\"col-10\"><h3 class=\" pb-1 text-light fw-bold\">Kies uit</h3></div>
        <div class=\"col-1\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col-1\"></div>
        <div class=\"col-10\">
            <div class=\"row gap-5 d-flex justify-content-between\">
                <div class=\"col px-1\">
                    <div class=\"catoCard card\">
                        <a class=\"catoA\" href=\"#\">
                        <img class=\"catoImg1 card-img-top\" src=\"/img/catoImg1.jpg\" alt=\"Card image\">
                        <div class=\"card-img-overlay h-100 d-flex flex-column justify-content-center align-items-center\">
                            <h1 class=\"card-title text-light fw-bold\">Vegatarische </h1>
                            <h1 class=\"card-title text-light fw-bold\">pizza</h1>
                        </div>
                        </a>
                    </div>
                </div>
                <div class=\"col px-1\">
                    <div class=\"catoCard card\">
                        <a class=\"catoA\" href=\"#\">
                        <img class=\"catoImg1 card-img-top\" src=\"/img/catoImg2.jpg\" alt=\"Card image\">
                        <div class=\"card-img-overlay h-100 d-flex flex-column justify-content-center align-items-center\">
                            <h1 class=\"card-title text-light fw-bold\"> Vlees pizza</h1>
                        </div>
                        </a>
                    </div>
                </div>
                <div class=\"col px-1\">
                    <div class=\"catoCard card\">
                        <a class=\"catoA\" href=\"#\">
                        <img class=\"catoImg1 card-img-top\" src=\"/img/catoImg3.jpg\" alt=\"Card image\">
                        <div class=\"card-img-overlay h-100 d-flex flex-column justify-content-center align-items-center\">
                            <h1 class=\"card-title text-light fw-bold\">Vis pizza</h1>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-1\"></div>
    </div>
{% endblock %}", "index.html.twig", "C:\\Users\\0jian\\Documents\\pizziloli-website\\templates\\index.html.twig");
    }
}
