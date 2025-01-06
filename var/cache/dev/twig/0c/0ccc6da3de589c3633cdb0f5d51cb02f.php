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

/* course/random_card.html.twig */
class __TwigTemplate_1bde05d597dcfb78fe978bb52431cb59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/random_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/random_card.html.twig"));

        // line 2
        echo "


";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <style>
        .coupon-container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }

        .coupon {
            border: 5px dotted #bbb; /* Dotted border */
            width: 60%; /* Adjust the width as needed */
            border-radius: 15px; /* Rounded border */
            margin: 0 auto; /* Center the coupon */
            max-width: 600px;
        }

        .container {
            padding: 2px 16px;
            background-color: #f1f1f1;
        }

        .promo {
            background: #ccc;
            padding: 3px;
        }

        .expire {
            color: red;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "    <div class=\"coupon-container\">
        <div class=\"coupon\">
            <div class=\"container\">
                <h3>Company Logo</h3>
            </div>
            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 43, $this->source); })()), "image", [], "any", false, false, false, 43))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 43, $this->source); })()), "title", [], "any", false, false, false, 43), "html", null, true);
        echo "\" style=\"width:100%;\">
            <div class=\"container\" style=\"background-color:white\">
                <h2><b>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fakeCoupon"]) || array_key_exists("fakeCoupon", $context) ? $context["fakeCoupon"] : (function () { throw new RuntimeError('Variable "fakeCoupon" does not exist.', 45, $this->source); })()), "discount", [], "any", false, false, false, 45), "html", null, true);
        echo "% OFF YOUR PURCHASE</b></h2>
                <p>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>
            </div>
            <div class=\"container\">
                <p>Use Promo Code: <span class=\"promo\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fakeCoupon"]) || array_key_exists("fakeCoupon", $context) ? $context["fakeCoupon"] : (function () { throw new RuntimeError('Variable "fakeCoupon" does not exist.', 49, $this->source); })()), "code", [], "any", false, false, false, 49), "html", null, true);
        echo "</span></p>
                <p class=\"expire\">Expires: ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", (("+" . twig_random($this->env, 1, 30)) . "days")), "M d, Y"), "html", null, true);
        echo "</p>
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
        return "course/random_card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  152 => 50,  148 => 49,  142 => 46,  138 => 45,  131 => 43,  124 => 38,  114 => 37,  75 => 6,  65 => 5,  55 => 37,  52 => 36,  50 => 5,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/course/random_coupon.html.twig #}



{% block stylesheets %}
    <style>
        .coupon-container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }

        .coupon {
            border: 5px dotted #bbb; /* Dotted border */
            width: 60%; /* Adjust the width as needed */
            border-radius: 15px; /* Rounded border */
            margin: 0 auto; /* Center the coupon */
            max-width: 600px;
        }

        .container {
            padding: 2px 16px;
            background-color: #f1f1f1;
        }

        .promo {
            background: #ccc;
            padding: 3px;
        }

        .expire {
            color: red;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"coupon-container\">
        <div class=\"coupon\">
            <div class=\"container\">
                <h3>Company Logo</h3>
            </div>
            <img src=\"{{ asset('uploads/images/' ~ course.image) }}\" alt=\"{{ course.title }}\" style=\"width:100%;\">
            <div class=\"container\" style=\"background-color:white\">
                <h2><b>{{ fakeCoupon.discount }}% OFF YOUR PURCHASE</b></h2>
                <p>{{ course.description }}</p>
            </div>
            <div class=\"container\">
                <p>Use Promo Code: <span class=\"promo\">{{ fakeCoupon.code }}</span></p>
                <p class=\"expire\">Expires: {{ 'now'|date_modify('+' ~ random(1, 30) ~ 'days')|date('M d, Y') }}</p>
            </div>
        </div>
    </div>
{% endblock %}
", "course/random_card.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\course\\random_card.html.twig");
    }
}
