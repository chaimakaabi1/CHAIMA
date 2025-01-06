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

/* review/showw.html.twig */
class __TwigTemplate_9c28ce624a30c0796098ae6169d30343 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/showw.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/showw.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "review/showw.html.twig", 1);
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

        ";
        // line 8
        if ( !twig_test_empty((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 9, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 10
                echo "                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Coursetitle</th>
                        <td>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "coursetitle", [], "any", false, false, false, 14), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th>Reviewername</th>
                        <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "reviewername", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th>Rating</th>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th>Commenttitle</th>
                        <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "commenttitle", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th>Commentcontent</th>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "commentcontent", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th>Createdat</th>
                        <td>";
                // line 34
                ((twig_get_attribute($this->env, $this->source, $context["review"], "createdat", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdat", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_edit", ["reviewid" => twig_get_attribute($this->env, $this->source, $context["review"], "reviewid", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Edit</a>
                ";
                // line 40
                echo twig_include($this->env, $context, "review/_delete_form.html.twig");
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        } else {
            // line 43
            echo "            <p>No reviews found for this course.</p>
        ";
        }
        // line 45
        echo "
        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index");
        echo "\" class=\"btn btn-secondary\">see other reviews</a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "review/showw.html.twig";
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
        return array (  194 => 46,  191 => 45,  187 => 43,  184 => 42,  168 => 40,  164 => 39,  156 => 34,  149 => 30,  142 => 26,  135 => 22,  128 => 18,  121 => 14,  115 => 10,  97 => 9,  95 => 8,  91 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    {% block body %}
        <h1>Reviews</h1>

        {% if reviews is not empty %}
            {% for review in reviews %}
                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Coursetitle</th>
                        <td>{{ review.coursetitle }}</td>
                    </tr>
                    <tr>
                        <th>Reviewername</th>
                        <td>{{ review.reviewername }}</td>
                    </tr>
                    <tr>
                        <th>Rating</th>
                        <td>{{ review.rating }}</td>
                    </tr>
                    <tr>
                        <th>Commenttitle</th>
                        <td>{{ review.commenttitle }}</td>
                    </tr>
                    <tr>
                        <th>Commentcontent</th>
                        <td>{{ review.commentcontent }}</td>
                    </tr>
                    <tr>
                        <th>Createdat</th>
                        <td>{{ review.createdat ? review.createdat|date('Y-m-d') : '' }}</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"{{ path('app_review_edit', {'reviewid': review.reviewid}) }}\" class=\"btn btn-primary\">Edit</a>
                {{ include('review/_delete_form.html.twig') }}
            {% endfor %}
        {% else %}
            <p>No reviews found for this course.</p>
        {% endif %}

        <a href=\"{{ path('app_review_index') }}\" class=\"btn btn-secondary\">see other reviews</a>
    {% endblock %}
{% endblock %}
", "review/showw.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\review\\showw.html.twig");
    }
}
