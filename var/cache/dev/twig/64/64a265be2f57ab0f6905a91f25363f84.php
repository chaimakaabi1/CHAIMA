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

/* instructor/profile.html.twig */
class __TwigTemplate_0b3a903bacf9ae6ccd06f9c33b83b27b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "instructor/profile.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard");
        echo "\" class=\"nav-item nav-link\">Courses</a>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard_profile");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My profile</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Reclamation</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_donation_new");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Donate</span>
                    </a>
                </li>
            </div>
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Logout<i class=\"fa fa-arrow-right ms-3\"></i></a>
            ";
        } else {
            // line 38
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Login<i class=\"fa fa-arrow-right ms-3\"></i></a>
            ";
        }
        // line 40
        echo "        </div>
    </nav>
    <!-- Navbar End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-16 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <h2>Current Profile Picture:</h2>
                                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 53, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 53))), "html", null, true);
        echo "\" alt=\"Profile Picture\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 62, $this->source); })()), "username", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 66, $this->source); })()), "password", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>FirstName</th>
                                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 74, $this->source); })()), "firstName", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>LastName</th>
                                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 78, $this->source); })()), "lastName", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>DateOfBirth</th>
                                        <td>";
        // line 82
        ((twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 82, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 82, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 82), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 86, $this->source); })()), "gender", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 90, $this->source); })()), "address", [], "any", false, false, false, 90), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>PhoneNumber</th>
                                        <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 94, $this->source); })()), "phoneNumber", [], "any", false, false, false, 94), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>ProfilePicture</th>
                                        <td>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 98, $this->source); })()), "profilePicture", [], "any", false, false, false, 98), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>UserType</th>
                                        <td>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 102, $this->source); })()), "userType", [], "any", false, false, false, 102), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>RegistrationDate</th>
                                        <td>";
        // line 106
        ((twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 106, $this->source); })()), "registrationDate", [], "any", false, false, false, 106)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 106, $this->source); })()), "registrationDate", [], "any", false, false, false, 106), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>YearsOfExperience</th>
                                        <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 110, $this->source); })()), "yearsOfExperience", [], "any", false, false, false, 110), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Bio</th>
                                        <td>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 114, $this->source); })()), "bio", [], "any", false, false, false, 114), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>IsActive</th>
                                        <td>";
        // line 118
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 118, $this->source); })()), "isActive", [], "any", false, false, false, 118)) ? ("Yes") : ("No"));
        echo "</td>
                                    </tr>
                                    ";
        // line 120
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 120, $this->source); })()), "isVerified", [], "any", false, false, false, 120)) {
            // line 121
            echo "                                        <tr>
                                            <th>Verification</th>
                                            <td>
                                                <form action=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard_send_verification_code", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124)]), "html", null, true);
            echo "\" method=\"POST\">
                                                    <button type=\"submit\">Verify Now</button>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 130
            echo "                                        <tr>
                                            <th>IsVerified</th>
                                            <td>
                                                <!-- Display a verified tick (check mark) -->
                                                <span style=\"color: green;\">✓ Verified</span>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 138
        echo "                                    </tbody>
                                </table>

                                <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard");
        echo "\">back</a>
                                                <br>
                                <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["instructor"]) || array_key_exists("instructor", $context) ? $context["instructor"] : (function () { throw new RuntimeError('Variable "instructor" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143)]), "html", null, true);
        echo "\">edit</a>

                                ";
        // line 145
        echo twig_include($this->env, $context, "instructor/_delete_form.html.twig");
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
        return "instructor/profile.html.twig";
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
        return array (  339 => 145,  334 => 143,  329 => 141,  324 => 138,  314 => 130,  305 => 124,  300 => 121,  298 => 120,  293 => 118,  286 => 114,  279 => 110,  272 => 106,  265 => 102,  258 => 98,  251 => 94,  244 => 90,  237 => 86,  230 => 82,  223 => 78,  216 => 74,  209 => 70,  202 => 66,  195 => 62,  188 => 58,  180 => 53,  170 => 45,  160 => 44,  147 => 40,  141 => 38,  135 => 36,  133 => 35,  124 => 29,  115 => 23,  106 => 17,  100 => 14,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
                <a href=\"{{ path('instructor_dashboard') }}\" class=\"nav-item nav-link\">Courses</a>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('instructor_dashboard_profile') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My profile</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_reclamation_new') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Reclamation</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_donation_new') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Donate</span>
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
                                <img src=\"{{ asset('uploads/' ~ instructor.getProfilePicture()) }}\" alt=\"Profile Picture\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ instructor.id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>{{ instructor.username }}</td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>{{ instructor.password }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ instructor.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>FirstName</th>
                                        <td>{{ instructor.firstName }}</td>
                                    </tr>
                                    <tr>
                                        <th>LastName</th>
                                        <td>{{ instructor.lastName }}</td>
                                    </tr>
                                    <tr>
                                        <th>DateOfBirth</th>
                                        <td>{{ instructor.dateOfBirth ? instructor.dateOfBirth|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>{{ instructor.gender }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ instructor.address }}</td>
                                    </tr>
                                    <tr>
                                        <th>PhoneNumber</th>
                                        <td>{{ instructor.phoneNumber }}</td>
                                    </tr>
                                    <tr>
                                        <th>ProfilePicture</th>
                                        <td>{{ instructor.profilePicture }}</td>
                                    </tr>
                                    <tr>
                                        <th>UserType</th>
                                        <td>{{ instructor.userType }}</td>
                                    </tr>
                                    <tr>
                                        <th>RegistrationDate</th>
                                        <td>{{ instructor.registrationDate ? instructor.registrationDate|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>YearsOfExperience</th>
                                        <td>{{ instructor.yearsOfExperience }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bio</th>
                                        <td>{{ instructor.bio }}</td>
                                    </tr>
                                    <tr>
                                        <th>IsActive</th>
                                        <td>{{ instructor.isActive ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    {% if not instructor.isVerified %}
                                        <tr>
                                            <th>Verification</th>
                                            <td>
                                                <form action=\"{{ path('instructor_dashboard_send_verification_code', {'id': instructor.id}) }}\" method=\"POST\">
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

                                <a href=\"{{ path('instructor_dashboard') }}\">back</a>
                                                <br>
                                <a href=\"{{ path('instructor_dashboard_edit', {'id': instructor.id}) }}\">edit</a>

                                {{ include('instructor/_delete_form.html.twig') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "instructor/profile.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\instructor\\profile.html.twig");
    }
}
