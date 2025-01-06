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

/* security/login.html.twig */
class __TwigTemplate_a8a5d0b33bd482d1ebb57578f23ea409 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'navbar' => [$this, 'block_navbar'],
            'sidebar' => [$this, 'block_sidebar'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard.html.twig", "security/login.html.twig", 1);
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

        echo "Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 6
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo " ";
        // line 7
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 17
        echo "    <div class=\"main-panel  fullscreen\">
        <div class=\"row\">
            <div class=\"col-lg-5 mx-auto mt-5 grid-margin stretch-card center\">
                <div class=\"card center\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <form method=\"post\">
                                <form method=\"post\" novalidate>
                                ";
        // line 25
        if ((isset($context["inactive_error"]) || array_key_exists("inactive_error", $context) ? $context["inactive_error"] : (function () { throw new RuntimeError('Variable "inactive_error" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["inactive_error"]) || array_key_exists("inactive_error", $context) ? $context["inactive_error"] : (function () { throw new RuntimeError('Variable "inactive_error" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "</div>
                                ";
        } elseif (        // line 27
(isset($context["no_account_error"]) || array_key_exists("no_account_error", $context) ? $context["no_account_error"] : (function () { throw new RuntimeError('Variable "no_account_error" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["no_account_error"]) || array_key_exists("no_account_error", $context) ? $context["no_account_error"] : (function () { throw new RuntimeError('Variable "no_account_error" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "</div>
                                ";
        } elseif (        // line 29
(isset($context["empty_fields_error"]) || array_key_exists("empty_fields_error", $context) ? $context["empty_fields_error"] : (function () { throw new RuntimeError('Variable "empty_fields_error" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["empty_fields_error"]) || array_key_exists("empty_fields_error", $context) ? $context["empty_fields_error"] : (function () { throw new RuntimeError('Variable "empty_fields_error" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "</div>
                                ";
        } elseif (        // line 31
(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                                 <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageKey", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageData", [], "any", false, false, false, 32), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 34
        echo "
                                ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "                                    <div class=\"mb-3\">
                                       You are logged in already , <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                    </div>
                                ";
        }
        // line 40
        echo "
                                <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                                <label for=\"inputEmail\">Email</label>
                                <input type=\"email\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                <label for=\"inputPassword\">Password</label>
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                >
                                    <br>
                                <button class=\"btn  btn-primary icon-login\" type=\"submit\">
                                    Sign in
                                </button>

                            </form>


                            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"btn btn-secondary  mt-3\">Forgot Password?</a

                             <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"btn btn-secondary mt-3\">Mot de passe oublié</a>

                        </div>
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
        return "security/login.html.twig";
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
        return array (  235 => 60,  230 => 58,  217 => 48,  209 => 43,  204 => 40,  198 => 37,  195 => 36,  193 => 35,  190 => 34,  184 => 32,  182 => 31,  177 => 30,  175 => 29,  170 => 28,  168 => 27,  163 => 26,  161 => 25,  151 => 17,  141 => 16,  123 => 13,  105 => 10,  95 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard.html.twig' %}

{% block title %}Login{% endblock %}

{% block styles %}
    {{ parent() }} {# This will include the parent styles from the dashboard.html.twig file #}
    {# Add additional styles specific to the admin_dashboard_admins page if needed #}
{% endblock %}

{% block navbar %}
{% endblock %}

{% block sidebar %}
{% endblock %}

{% block main %}
    <div class=\"main-panel  fullscreen\">
        <div class=\"row\">
            <div class=\"col-lg-5 mx-auto mt-5 grid-margin stretch-card center\">
                <div class=\"card center\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <form method=\"post\">
                                <form method=\"post\" novalidate>
                                {% if inactive_error %}
                                    <div class=\"alert alert-danger\">{{ inactive_error }}</div>
                                {% elseif no_account_error %}
                                    <div class=\"alert alert-danger\">{{ no_account_error }}</div>
                                {% elseif empty_fields_error %}
                                    <div class=\"alert alert-danger\">{{ empty_fields_error }}</div>
                                {% elseif error %}
                                 <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}

                                {% if app.user %}
                                    <div class=\"mb-3\">
                                       You are logged in already , <a href=\"{{ path('app_logout') }}\">Logout</a>
                                    </div>
                                {% endif %}

                                <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                                <label for=\"inputEmail\">Email</label>
                                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                <label for=\"inputPassword\">Password</label>
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"{{ csrf_token('authenticate') }}\"
                                >
                                    <br>
                                <button class=\"btn  btn-primary icon-login\" type=\"submit\">
                                    Sign in
                                </button>

                            </form>


                            <a href=\"{{ path('app_forgot_password_request') }}\" class=\"btn btn-secondary  mt-3\">Forgot Password?</a

                             <a href=\"{{ path('app_forgot_password_request') }}\" class=\"btn btn-secondary mt-3\">Mot de passe oublié</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "security/login.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\security\\login.html.twig");
    }
}
