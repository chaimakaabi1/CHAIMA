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

/* payment/_form.html.twig */
class __TwigTemplate_afe178195ab9cdde8c96f639be0a9381 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "mt-4"]]);
        echo "

<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "cardNumber", [], "any", false, false, false, 5), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Card Number"]]);
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "expirationDate", [], "any", false, false, false, 8), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Expiration Date"]]);
        echo "
    </div>
</div>

<div class=\"row mt-3\">
    <div class=\"col-md-6\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "eightCard", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Eight Card"]]);
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "captcha", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Captcha"]]);
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "captcha", [], "any", false, false, false, 18), 'errors');
        echo "
    </div>
</div>

<div class=\"mt-3\">
    <button class=\"btn btn-primary\">";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 23, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
</div>

";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "payment/_form.html.twig";
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
        return array (  89 => 26,  83 => 23,  75 => 18,  71 => 17,  65 => 14,  56 => 8,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'mt-4'}}) }}

<div class=\"row\">
    <div class=\"col-md-6\">
        {{ form_row(form.cardNumber, {'attr': {'class': 'form-control', 'placeholder': 'Card Number'}}) }}
    </div>
    <div class=\"col-md-6\">
        {{ form_row(form.expirationDate, {'attr': {'class': 'form-control', 'placeholder': 'Expiration Date'}}) }}
    </div>
</div>

<div class=\"row mt-3\">
    <div class=\"col-md-6\">
        {{ form_row(form.eightCard, {'attr': {'class': 'form-control', 'placeholder': 'Eight Card'}}) }}
    </div>
    <div class=\"col-md-6\">
        {{ form_row(form.captcha, {'attr': {'class': 'form-control', 'placeholder': 'Captcha'}}) }}
        {{ form_errors(form.captcha) }}
    </div>
</div>

<div class=\"mt-3\">
    <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
</div>

{{ form_end(form) }}
", "payment/_form.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\payment\\_form.html.twig");
    }
}
