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

/* admin/profile.html.twig */
class __TwigTemplate_4fe7de41d57bca728c2a56cf2b74f4de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard.html.twig", "admin/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Manage students";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 7
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo " ";
        // line 8
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-16 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <h2>Current Profile Picture:</h2>
                                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 20, $this->source); })()), "getProfilePicture", [], "method", false, false, false, 20))), "html", null, true);
        echo "\" alt=\"Profile Picture\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 29, $this->source); })()), "username", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })()), "password", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>FirstName</th>
                                        <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 41, $this->source); })()), "firstName", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>LastName</th>
                                        <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>DateOfBirth</th>
                                        <td>";
        // line 49
        ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 49, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 49, $this->source); })()), "dateOfBirth", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 53, $this->source); })()), "gender", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 57, $this->source); })()), "address", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>PhoneNumber</th>
                                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 61, $this->source); })()), "phoneNumber", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>ProfilePicture</th>
                                        <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 65, $this->source); })()), "profilePicture", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>UserType</th>
                                        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 69, $this->source); })()), "userType", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>RegistrationDate</th>
                                        <td>";
        // line 73
        ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 73, $this->source); })()), "registrationDate", [], "any", false, false, false, 73)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 73, $this->source); })()), "registrationDate", [], "any", false, false, false, 73), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>IsActive</th>
                                        <td>";
        // line 77
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 77, $this->source); })()), "isActive", [], "any", false, false, false, 77)) ? ("Yes") : ("No"));
        echo "</td>
                                    </tr>
                                    ";
        // line 79
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 79, $this->source); })()), "isVerified", [], "any", false, false, false, 79)) {
            // line 80
            echo "                                        <tr>
                                            <th>Verification</th>
                                            <td>
                                                <form action=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_admins_send_verification_code", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" method=\"POST\">
                                                    <button type=\"submit\">Verify Now</button>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
        } else {
            // line 89
            echo "                                        <tr>
                                            <th>IsVerified</th>
                                            <td>
                                                <!-- Display a verified tick (check mark) -->
                                                <span style=\"color: green;\">✓ Verified</span>
                                            </td>
                                        </tr>
                                    ";
        }
        // line 97
        echo "                                    </tbody>
                                </table>



                                <a class=\"btn\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_admins");
        echo "\">back to list</a>

                                <a class=\"buttons\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_admins_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">edit</a>

                             <a >";
        // line 106
        echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
        echo "</a>

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
        return "admin/profile.html.twig";
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
        return array (  270 => 106,  265 => 104,  260 => 102,  253 => 97,  243 => 89,  234 => 83,  229 => 80,  227 => 79,  222 => 77,  215 => 73,  208 => 69,  201 => 65,  194 => 61,  187 => 57,  180 => 53,  173 => 49,  166 => 45,  159 => 41,  152 => 37,  145 => 33,  138 => 29,  131 => 25,  123 => 20,  113 => 12,  103 => 11,  93 => 8,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard.html.twig' %}


{% block title %}Manage students{% endblock %}

{% block styles %}
    {{ parent() }} {# This will include the parent styles from the dashboard.html.twig file #}
    {# Add additional styles specific to the admin_dashboard_admins page if needed #}
{% endblock %}

{% block main %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-16 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <h2>Current Profile Picture:</h2>
                                <img src=\"{{ asset('uploads/' ~ admin.getProfilePicture()) }}\" alt=\"Profile Picture\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ admin.id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>{{ admin.username }}</td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>{{ admin.password }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ admin.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>FirstName</th>
                                        <td>{{ admin.firstName }}</td>
                                    </tr>
                                    <tr>
                                        <th>LastName</th>
                                        <td>{{ admin.lastName }}</td>
                                    </tr>
                                    <tr>
                                        <th>DateOfBirth</th>
                                        <td>{{ admin.dateOfBirth ? admin.dateOfBirth|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>{{ admin.gender }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ admin.address }}</td>
                                    </tr>
                                    <tr>
                                        <th>PhoneNumber</th>
                                        <td>{{ admin.phoneNumber }}</td>
                                    </tr>
                                    <tr>
                                        <th>ProfilePicture</th>
                                        <td>{{ admin.profilePicture }}</td>
                                    </tr>
                                    <tr>
                                        <th>UserType</th>
                                        <td>{{ admin.userType }}</td>
                                    </tr>
                                    <tr>
                                        <th>RegistrationDate</th>
                                        <td>{{ admin.registrationDate ? admin.registrationDate|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>IsActive</th>
                                        <td>{{ admin.isActive ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    {% if not admin.isVerified %}
                                        <tr>
                                            <th>Verification</th>
                                            <td>
                                                <form action=\"{{ path('admin_dashboard_admins_send_verification_code', {'id': admin.id}) }}\" method=\"POST\">
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



                                <a class=\"btn\" href=\"{{ path('admin_dashboard_admins') }}\">back to list</a>

                                <a class=\"buttons\" href=\"{{ path('admin_dashboard_admins_edit', {'id': admin.id}) }}\">edit</a>

                             <a >{{ include('admin/_delete_form.html.twig') }}</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/profile.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\admin\\profile.html.twig");
    }
}
