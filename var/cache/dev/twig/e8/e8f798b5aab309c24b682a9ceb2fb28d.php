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

/* review/showreviewstudent.html.twig */
class __TwigTemplate_71d0b2cbdb0d365029c9e312096fe45a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/showreviewstudent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/showreviewstudent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "review/showreviewstudent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <h1>Reviews</h1>

        <div class=\"row\">
            ";
        // line 9
        if ( !twig_test_empty((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 11
                echo "                    <div class=\"col-md-4\">
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Coursetitle: ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "coursetitle", [], "any", false, false, false, 14), "html", null, true);
                echo "</h5>
                                <p class=\"card-text\">Reviewername: ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "reviewername", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
                                <p class=\"card-text\">Rating: ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] <= twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 16))) {
                        echo "⭐";
                    } else {
                        echo "☆";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</p>
                                <p class=\"card-text\">Commenttitle: ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "commenttitle", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
                                <p class=\"card-text\">Commentcontent: ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "commentcontent", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                                <p class=\"card-text\">Createdat: ";
                // line 19
                ((twig_get_attribute($this->env, $this->source, $context["review"], "createdat", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdat", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</p>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            ";
        } else {
            // line 25
            echo "                <div class=\"col-md-12\">
                    <p>No reviews found for this course.</p>
                </div>
            ";
        }
        // line 29
        echo "        </div>

        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index");
        echo "\" class=\"btn btn-secondary\">See other reviews</a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "review/showreviewstudent.html.twig";
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
        return array (  163 => 31,  159 => 29,  153 => 25,  150 => 24,  139 => 19,  135 => 18,  131 => 17,  116 => 16,  112 => 15,  108 => 14,  103 => 11,  98 => 10,  96 => 9,  91 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    {% block body %}
        <h1>Reviews</h1>

        <div class=\"row\">
            {% if reviews is not empty %}
                {% for review in reviews %}
                    <div class=\"col-md-4\">
                        <div class=\"card mb-4\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Coursetitle: {{ review.coursetitle }}</h5>
                                <p class=\"card-text\">Reviewername: {{ review.reviewername }}</p>
                                <p class=\"card-text\">Rating: {% for i in range(1, 5) %}{% if i <= review.rating %}⭐{% else %}☆{% endif %}{% endfor %}</p>
                                <p class=\"card-text\">Commenttitle: {{ review.commenttitle }}</p>
                                <p class=\"card-text\">Commentcontent: {{ review.commentcontent }}</p>
                                <p class=\"card-text\">Createdat: {{ review.createdat ? review.createdat|date('Y-m-d') : '' }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"col-md-12\">
                    <p>No reviews found for this course.</p>
                </div>
            {% endif %}
        </div>

        <a href=\"{{ path('app_review_index') }}\" class=\"btn btn-secondary\">See other reviews</a>
    {% endblock %}
{% endblock %}
", "review/showreviewstudent.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\review\\showreviewstudent.html.twig");
    }
}
