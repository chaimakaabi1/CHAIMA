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

/* post/show.html.twig */
class __TwigTemplate_61a3a403bd5627e7ec276d2babf8bd79 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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

        echo "Post";
        
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

        echo " 

<div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"img/about.jpg\" alt=\"\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h6 class=\"section-title bg-white text-start text-primary pe-3\">About Us</h6>
                    <h1 class=\"mb-4\">Welcome to eLEARNING</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class=\"row gy-2 gx-4 mb-4\">
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
                        </div>
                    </div>
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Read More</a>
                </div>
            </div>
        </div>
    </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Post{% endblock %}

{% block content %} 

<div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"min-height: 400px;\">
                    <div class=\"position-relative h-100\">
                        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"img/about.jpg\" alt=\"\" style=\"object-fit: cover;\">
                    </div>
                </div>
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h6 class=\"section-title bg-white text-start text-primary pe-3\">About Us</h6>
                    <h1 class=\"mb-4\">Welcome to eLEARNING</h1>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class=\"row gy-2 gx-4 mb-4\">
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Skilled Instructors</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>Online Classes</p>
                        </div>
                        <div class=\"col-sm-6\">
                            <p class=\"mb-0\"><i class=\"fa fa-arrow-right text-primary me-2\"></i>International Certificate</p>
                        </div>
                    </div>
                    <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Read More</a>
                </div>
            </div>
        </div>
    </div>
    
{% endblock %}
", "post/show.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\post\\show.html.twig");
    }
}
