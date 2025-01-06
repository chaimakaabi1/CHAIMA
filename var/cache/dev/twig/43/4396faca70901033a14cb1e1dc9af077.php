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

/* student/profile.html.twig */
class __TwigTemplate_591cd8ae3fc9816119cac481a76e007d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar' => [$this, 'block_navbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "student/profile.html.twig", 1);
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

    // line 4
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 5
        echo "    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>Coursify</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_dashboard");
        echo "\" class=\"nav-item nav-link\">Courses</a>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_dashboard_profile");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My profile</span>
                    </a>
                </li>
            </div>
            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Logout<i class=\"fa fa-arrow-right ms-3\"></i></a>
            ";
        } else {
            // line 26
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Login<i class=\"fa fa-arrow-right ms-3\"></i></a>
            ";
        }
        // line 28
        echo "        </div>
    </nav>
    <!-- Navbar End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-16 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <h2>Current Profile Picture:</h2>
                                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 41, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 41))), "html", null, true);
        echo "\" alt=\"Profile Picture\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>FirstName</th>
                                        <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 62, $this->source); })()), "firstName", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>LastName</th>
                                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 66, $this->source); })()), "lastName", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>DateOfBirth</th>
                                        <td>";
        // line 70
        ((twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 70, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 70, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 74, $this->source); })()), "gender", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 78, $this->source); })()), "address", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>PhoneNumber</th>
                                        <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 82, $this->source); })()), "phoneNumber", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>ProfilePicture</th>
                                        <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 86, $this->source); })()), "profilePicture", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>UserType</th>
                                        <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 90, $this->source); })()), "userType", [], "any", false, false, false, 90), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>RegistrationDate</th>
                                        <td>";
        // line 94
        ((twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 94, $this->source); })()), "registrationDate", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 94, $this->source); })()), "registrationDate", [], "any", false, false, false, 94), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>major</th>
                                        <td>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 98, $this->source); })()), "major", [], "any", false, false, false, 98), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>currentGradeLevel</th>
                                        <td>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 102, $this->source); })()), "currentGradeLevel", [], "any", false, false, false, 102), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>IsActive</th>
                                        <td>";
        // line 106
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 106, $this->source); })()), "isActive", [], "any", false, false, false, 106)) ? ("Yes") : ("No"));
        echo "</td>
                                    </tr>
                                    ";
        // line 108
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 108, $this->source); })()), "isVerified", [], "any", false, false, false, 108)) {
            // line 109
            echo "                                        <tr>
                                            <th>Verification</th>
                                            <td>
                                                <form action=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_dashboard_send_verification_code", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\" method=\"POST\">
                                                    <button type=\"submit\">Verify Now</button>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 118
            echo "                                        <tr>
                                            <th>IsVerified</th>
                                            <td>
                                                <!-- Display a verified tick (check mark) -->
                                                <span style=\"color: green;\">✓ Verified</span>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 126
        echo "                                    </tbody>
                                </table>

                                <a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_dashboard");
        echo "\">back</a>
                                <br>
                                <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_dashboard_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131)]), "html", null, true);
        echo "\">edit</a>

                                ";
        // line 133
        echo twig_include($this->env, $context, "student/_delete_form.html.twig");
        echo "

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
        return "student/profile.html.twig";
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
        return array (  321 => 133,  316 => 131,  311 => 129,  306 => 126,  296 => 118,  287 => 112,  282 => 109,  280 => 108,  275 => 106,  268 => 102,  261 => 98,  254 => 94,  247 => 90,  240 => 86,  233 => 82,  226 => 78,  219 => 74,  212 => 70,  205 => 66,  198 => 62,  191 => 58,  184 => 54,  177 => 50,  170 => 46,  162 => 41,  152 => 33,  142 => 32,  129 => 28,  123 => 26,  117 => 24,  115 => 23,  106 => 17,  100 => 14,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}
{% block navbar %}
    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>Coursify</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"{{ path('student_dashboard') }}\" class=\"nav-item nav-link\">Courses</a>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('student_dashboard_profile') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My profile</span>
                    </a>
                </li>
            </div>
            {% if app.user %}
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Logout<i class=\"fa fa-arrow-right ms-3\"></i></a>
            {% else %}
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Login<i class=\"fa fa-arrow-right ms-3\"></i></a>
            {% endif %}
        </div>
    </nav>
    <!-- Navbar End -->
{% endblock %}
{% block content %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-16 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <h2>Current Profile Picture:</h2>
                                <img src=\"{{ asset('uploads/' ~ student.getProfilePicture()) }}\" alt=\"Profile Picture\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ student.id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>{{ student.username }}</td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>{{ student.password }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ student.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>FirstName</th>
                                        <td>{{ student.firstName }}</td>
                                    </tr>
                                    <tr>
                                        <th>LastName</th>
                                        <td>{{ student.lastName }}</td>
                                    </tr>
                                    <tr>
                                        <th>DateOfBirth</th>
                                        <td>{{ student.dateOfBirth ? student.dateOfBirth|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>{{ student.gender }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ student.address }}</td>
                                    </tr>
                                    <tr>
                                        <th>PhoneNumber</th>
                                        <td>{{ student.phoneNumber }}</td>
                                    </tr>
                                    <tr>
                                        <th>ProfilePicture</th>
                                        <td>{{ student.profilePicture }}</td>
                                    </tr>
                                    <tr>
                                        <th>UserType</th>
                                        <td>{{ student.userType }}</td>
                                    </tr>
                                    <tr>
                                        <th>RegistrationDate</th>
                                        <td>{{ student.registrationDate ? student.registrationDate|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>major</th>
                                        <td>{{ student.major }}</td>
                                    </tr>
                                    <tr>
                                        <th>currentGradeLevel</th>
                                        <td>{{ student.currentGradeLevel }}</td>
                                    </tr>
                                    <tr>
                                        <th>IsActive</th>
                                        <td>{{ student.isActive ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    {% if not student.isVerified %}
                                        <tr>
                                            <th>Verification</th>
                                            <td>
                                                <form action=\"{{ path('student_dashboard_send_verification_code', {'id': student.id}) }}\" method=\"POST\">
                                                    <button type=\"submit\">Verify Now</button>
                                                </form>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <th>IsVerified</th>
                                            <td>
                                                <!-- Display a verified tick (check mark) -->
                                                <span style=\"color: green;\">✓ Verified</span>
                                            </td>
                                        </tr>
                                    {% endif %}
                                    </tbody>
                                </table>

                                <a href=\"{{ path('student_dashboard') }}\">back</a>
                                <br>
                                <a href=\"{{ path('student_dashboard_edit', {'id': student.id}) }}\">edit</a>

                                {{ include('student/_delete_form.html.twig') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "student/profile.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\student\\profile.html.twig");
    }
}
