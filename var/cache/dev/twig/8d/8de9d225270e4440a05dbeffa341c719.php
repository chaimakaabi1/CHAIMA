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

/* course/edit.html.twig */
class __TwigTemplate_bb7a6955039d251bfa1f2ccc407a8788 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/edit.html.twig", 1);
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

        echo "Edit Course";
        
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
        echo "    <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h1 class=\"mb-0\">Edit Course</h1>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" enctype=\"multipart/form-data\" novalidate>
                            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        echo "

                            <div class=\"mb-3\">
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Course Title"]]);
        echo "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Course Description"]]);
        echo "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Course Price"]]);
        echo "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"mb-3 form-check\">
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "isActive", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "isActive", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        echo "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "courseContent", [], "any", false, false, false, 34), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Course Content"]]);
        echo "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "instructorId", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Instructor ID"]]);
        echo "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "instructorName", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Instructor Name"]]);
        echo "
                            </div>

                            <div class=\"mt-3 text-center\">
                                <button type=\"submit\" class=\"btn btn-primary\">Update Course</button>
                            </div>

                            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
                        </form>

                        <div class=\"mt-3\">
                            <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_index");
        echo "\" class=\"btn btn-secondary\">Back to List</a>
                        </div>

                        ";
        // line 54
        echo twig_include($this->env, $context, "course/_delete_form.html.twig");
        echo "
                    </div>
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
        return "course/edit.html.twig";
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
        return array (  174 => 54,  168 => 51,  161 => 47,  151 => 40,  145 => 37,  139 => 34,  133 => 31,  129 => 30,  123 => 27,  117 => 24,  111 => 21,  105 => 18,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Course{% endblock %}

{% block content %}
    <div class=\"container mt-4\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h1 class=\"mb-0\">Edit Course</h1>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" enctype=\"multipart/form-data\" novalidate>
                            {{ form_start(form, {'attr': {'class': 'row g-3'}}) }}

                            <div class=\"mb-3\">
                                {{ form_row(form.title, {'attr': {'class': 'form-control', 'placeholder': 'Course Title'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Course Description'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(form.price, {'attr': {'class': 'form-control', 'placeholder': 'Course Price'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(form.image, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3 form-check\">
                                {{ form_widget(form.isActive, {'attr': {'class': 'form-check-input'}}) }}
                                {{ form_label(form.isActive, null, {'label_attr': {'class': 'form-check-label'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(form.courseContent, {'attr': {'class': 'form-control', 'placeholder': 'Course Content'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(form.instructorId, {'attr': {'class': 'form-control', 'placeholder': 'Instructor ID'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_row(form.instructorName, {'attr': {'class': 'form-control', 'placeholder': 'Instructor Name'}}) }}
                            </div>

                            <div class=\"mt-3 text-center\">
                                <button type=\"submit\" class=\"btn btn-primary\">Update Course</button>
                            </div>

                            {{ form_end(form) }}
                        </form>

                        <div class=\"mt-3\">
                            <a href=\"{{ path('app_course_index') }}\" class=\"btn btn-secondary\">Back to List</a>
                        </div>

                        {{ include('course/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "course/edit.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\course\\edit.html.twig");
    }
}
