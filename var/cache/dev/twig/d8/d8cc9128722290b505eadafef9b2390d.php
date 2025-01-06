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

/* prof/profile.html.twig */
class __TwigTemplate_91ef417f1311fa8675a22fd69e27a69c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "prof/profdashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/profile.html.twig"));

        $this->parent = $this->loadTemplate("prof/profdashboard.html.twig", "prof/profile.html.twig", 1);
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

        echo "Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"container-fluid\">
                                <h2 class=\"mb-4\">Profile Information</h2>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 16, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 16))), "html", null, true);
        echo "\" alt=\"Profile Picture\" class=\"img-fluid mb-4 rounded-circle\">
                                    </div>
                                    <div class=\"col-md-8\">
                                        <table class=\"table table-bordered\">
                                            <tbody>
                                            <tr>
                                                <th>ID</th>
                                                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Username</th>
                                                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 35, $this->source); })()), "firstName", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 35, $this->source); })()), "lastName", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                                            </tr>
                                            <!-- Add more fields as needed -->

                                            ";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 39, $this->source); })()), "isVerified", [], "any", false, false, false, 39)) {
            // line 40
            echo "                                                <tr>
                                                    <th>Verification</th>
                                                    <td>
                                                        <form action=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard_send_verification_code", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" method=\"POST\">
                                                            <button type=\"submit\" class=\"btn btn-warning\">Verify Now</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            ";
        } else {
            // line 49
            echo "                                                <tr>
                                                    <th>Verification Status</th>
                                                    <td>
                                                        <span class=\"text-success\">Verified <i class=\"fas fa-check-circle\"></i></span>
                                                    </td>
                                                </tr>
                                            ";
        }
        // line 56
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"mt-4\">
                                    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard");
        echo "\" class=\"btn btn-secondary\">Back to Dashboard</a>
                                    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit Profile</a>
                                </div>
                            </div>
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
        return "prof/profile.html.twig";
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
        return array (  177 => 63,  173 => 62,  165 => 56,  156 => 49,  147 => 43,  142 => 40,  140 => 39,  131 => 35,  124 => 31,  117 => 27,  110 => 23,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/profdashboard.html.twig' %}

{% block title %}Profile{% endblock %}

{% block main %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"container-fluid\">
                                <h2 class=\"mb-4\">Profile Information</h2>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <img src=\"{{ asset('uploads/' ~ instructor.getProfilePicture()) }}\" alt=\"Profile Picture\" class=\"img-fluid mb-4 rounded-circle\">
                                    </div>
                                    <div class=\"col-md-8\">
                                        <table class=\"table table-bordered\">
                                            <tbody>
                                            <tr>
                                                <th>ID</th>
                                                <td>{{ instructor.id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Username</th>
                                                <td>{{ instructor.username }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ instructor.email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ instructor.firstName }} {{ instructor.lastName }}</td>
                                            </tr>
                                            <!-- Add more fields as needed -->

                                            {% if not instructor.isVerified %}
                                                <tr>
                                                    <th>Verification</th>
                                                    <td>
                                                        <form action=\"{{ path('instructor_dashboard_send_verification_code', {'id': instructor.id}) }}\" method=\"POST\">
                                                            <button type=\"submit\" class=\"btn btn-warning\">Verify Now</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <th>Verification Status</th>
                                                    <td>
                                                        <span class=\"text-success\">Verified <i class=\"fas fa-check-circle\"></i></span>
                                                    </td>
                                                </tr>
                                            {% endif %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"mt-4\">
                                    <a href=\"{{ path('instructor_dashboard') }}\" class=\"btn btn-secondary\">Back to Dashboard</a>
                                    <a href=\"{{ path('instructor_dashboard_edit', {'id': instructor.id}) }}\" class=\"btn btn-primary\">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "prof/profile.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\prof\\profile.html.twig");
    }
}
