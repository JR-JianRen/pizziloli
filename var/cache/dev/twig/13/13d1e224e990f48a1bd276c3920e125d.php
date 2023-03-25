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

/* index/orderForm.html.twig */
class __TwigTemplate_05ee375ae65ae61f268e97ac2e1a8f11 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/orderForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/orderForm.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "index/orderForm.html.twig", 1);
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

        echo " Bestelling overzicht ";
        
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
        echo "    <h3 class=\"fw-bold text-light mt-5\">Bestelling overzicht</h3>
    <div class=\"orderViewForm wrapper bg-light\" style=\"height: 30rem\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "flashBag", [], "any", false, false, false, 8), "get", [0 => "succes"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 9
            echo "            <div class=\"alert alert-primary text-center\" role=\"alert\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            ";
        if (((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 13, $this->source); })()) == "http://127.0.0.1:8000/orderForm")) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "flashBag", [], "any", false, false, false, 14), "get", [0 => "succes"], "method", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 15
                echo "                    <div class=\"alert alert-secondary\" role=\"alert\">
                        ";
                // line 16
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                <div class=\"row py-5 mx-3\">
                    <div class=\"col-5\">
                        <div class=\"offset-2\">
                            ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderForm"]) || array_key_exists("orderForm", $context) ? $context["orderForm"] : (function () { throw new RuntimeError('Variable "orderForm" does not exist.', 22, $this->source); })()), 'form');
            echo "
                        </div>
                    </div>
                    <div class=\"col-1\"></div>
                    <div class=\"col-5\">
                        <div class=\"orderView\">
                            <p class=\"\">Bestelling:</p>
                            <div>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["addProduct"]) || array_key_exists("addProduct", $context) ? $context["addProduct"] : (function () { throw new RuntimeError('Variable "addProduct" does not exist.', 29, $this->source); })()), "amount", [], "any", false, false, false, 29), "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["addProduct"]) || array_key_exists("addProduct", $context) ? $context["addProduct"] : (function () { throw new RuntimeError('Variable "addProduct" does not exist.', 29, $this->source); })()), "size", [], "any", false, false, false, 29), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
            echo " I €";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["addProduct"]) || array_key_exists("addProduct", $context) ? $context["addProduct"] : (function () { throw new RuntimeError('Variable "addProduct" does not exist.', 29, $this->source); })()), "amount", [], "any", false, false, false, 29) * twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "price", [], "any", false, false, false, 29)), "html", null, true);
            echo "</div>
                            <br>
                            <p class=\"\">Totaal:</p>
                            <p> € ";
            // line 32
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["addProduct"]) || array_key_exists("addProduct", $context) ? $context["addProduct"] : (function () { throw new RuntimeError('Variable "addProduct" does not exist.', 32, $this->source); })()), "amount", [], "any", false, false, false, 32) * twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32)), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if (((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 38, $this->source); })()) == "http://127.0.0.1:8000/orderForm/admin")) {
            // line 39
            echo "                <div class=\"row py-5 mx-3\">
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 41
                echo "                    <div class=\"col-2\">
                    <p>
                        Status: ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderStatus", [], "any", false, false, false, 43), "html", null, true);
                echo "
                        <br><br>
                        ";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 45), "m/d/Y"), "html", null, true);
                echo "
                        <br>
                        ";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "time", [], "any", false, false, false, 47), "H:i:s"), "html", null, true);
                echo "
                        <br><br>
                        Naam: ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 49), "html", null, true);
                echo "
                        <br>
                        Adres: ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 51), "html", null, true);
                echo "

                    </p>
                    <p>
                        Bestelling: <br> ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "amount", [], "any", false, false, false, 55), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                echo "
                        <br><br>
                        Totaal prijs: ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 57), "html", null, true);
                echo "
                    </p>
                        <p>

                        </p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </div>
            ";
        }
        // line 66
        echo "    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "index/orderForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 66,  226 => 64,  213 => 57,  206 => 55,  199 => 51,  194 => 49,  189 => 47,  184 => 45,  179 => 43,  175 => 41,  171 => 40,  168 => 39,  166 => 38,  163 => 37,  155 => 32,  143 => 29,  133 => 22,  128 => 19,  119 => 16,  116 => 15,  111 => 14,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base.html.twig' %}

{% block title %} Bestelling overzicht {% endblock %}

{% block content %}
    <h3 class=\"fw-bold text-light mt-5\">Bestelling overzicht</h3>
    <div class=\"orderViewForm wrapper bg-light\" style=\"height: 30rem\">
        {% for msg in app.session.flashBag.get('succes') %}
            <div class=\"alert alert-primary text-center\" role=\"alert\">
                {{ msg }}
            </div>
        {% endfor %}
            {% if url == 'http://127.0.0.1:8000/orderForm' %}
                {% for msg in app.session.flashBag.get('succes') %}
                    <div class=\"alert alert-secondary\" role=\"alert\">
                        {{ msg }}
                    </div>
                {% endfor %}
                <div class=\"row py-5 mx-3\">
                    <div class=\"col-5\">
                        <div class=\"offset-2\">
                            {{ form(orderForm) }}
                        </div>
                    </div>
                    <div class=\"col-1\"></div>
                    <div class=\"col-5\">
                        <div class=\"orderView\">
                            <p class=\"\">Bestelling:</p>
                            <div>{{ addProduct.amount }} x {{ addProduct.size}} {{ product.name }} I €{{ addProduct.amount * product.price }}</div>
                            <br>
                            <p class=\"\">Totaal:</p>
                            <p> € {{ addProduct.amount * product.price }}</p>
                        </div>
                    </div>
                </div>
            {% endif %}

            {% if url == 'http://127.0.0.1:8000/orderForm/admin' %}
                <div class=\"row py-5 mx-3\">
                {%  for order in orders %}
                    <div class=\"col-2\">
                    <p>
                        Status: {{ order.orderStatus }}
                        <br><br>
                        {{ order.date|date('m/d/Y') }}
                        <br>
                        {{ order.time|date('H:i:s') }}
                        <br><br>
                        Naam: {{ order.name }}
                        <br>
                        Adres: {{ order.address }}

                    </p>
                    <p>
                        Bestelling: <br> {{ order.amount }} x {{ order.product.name }}
                        <br><br>
                        Totaal prijs: {{ order.totalPrice }}
                    </p>
                        <p>

                        </p>
                    </div>
                {% endfor %}
                </div>
            {% endif %}
    </div>


{% endblock %}", "index/orderForm.html.twig", "C:\\Users\\0jian\\Documents\\Education\\Github\\pizziloli-website\\templates\\index\\orderForm.html.twig");
    }
}
