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

/* prof/mystudent.html.twig */
class __TwigTemplate_bce5c59fcddfdda822a2150cc730afaa extends Template
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
        return "prof/profdashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/mystudent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/mystudent.html.twig"));

        $this->parent = $this->loadTemplate("prof/profdashboard.html.twig", "prof/mystudent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 4
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 5
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo " ";
        // line 6
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 10
        echo "
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-16 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <form action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_students");
        echo "\" method=\"get\">
                                    <label>
                                        <input type=\"text\" name=\"q\" placeholder=\"Search\">
                                    </label>
                                    <button type=\"submit\">Search</button>
                                </form>




                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>DateOfBirth</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>PhoneNumber</th>
                                        <th>ProfilePicture</th>
                                        <th>UserType</th>
                                        <th>RegistrationDate</th>
                                        <th>CurrentGradeLevel</th>
                                        <th>Major</th>
                                        <th>IsActive</th>
                                        <th>actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 52
            echo "                                        <tr>
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "username", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "password", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "email", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "firstName", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "lastName", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                            <td>";
            // line 59
            ((twig_get_attribute($this->env, $this->source, $context["student"], "dateOfBirth", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "dateOfBirth", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "gender", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "address", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "phoneNumber", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "profilePicture", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "userType", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                            <td>";
            // line 65
            ((twig_get_attribute($this->env, $this->source, $context["student"], "registrationDate", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "registrationDate", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "currentGradeLevel", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "major", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                                            <td>";
            // line 68
            echo ((twig_get_attribute($this->env, $this->source, $context["student"], "isActive", [], "any", false, false, false, 68)) ? ("Yes") : ("No"));
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_students_show", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">show</a>
                                                <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_students_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">edit</a>
                                                <form method=\"post\" action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_students_toggle_active", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" style=\"display: inline;\">
                                                    <button type=\"submit\">Toggle Active</button>
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 74))), "html", null, true);
            echo "\">
                                                </form>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                    </tbody>
                                </table>
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
        return "prof/mystudent.html.twig";
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
        return array (  264 => 83,  255 => 79,  245 => 74,  240 => 72,  236 => 71,  232 => 70,  227 => 68,  223 => 67,  219 => 66,  215 => 65,  211 => 64,  207 => 63,  203 => 62,  199 => 61,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  179 => 56,  175 => 55,  171 => 54,  167 => 53,  164 => 52,  159 => 51,  123 => 18,  113 => 10,  103 => 9,  93 => 6,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/profdashboard.html.twig' %}
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
                                <form action=\"{{ path('admin_dashboard_students') }}\" method=\"get\">
                                    <label>
                                        <input type=\"text\" name=\"q\" placeholder=\"Search\">
                                    </label>
                                    <button type=\"submit\">Search</button>
                                </form>




                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>DateOfBirth</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>PhoneNumber</th>
                                        <th>ProfilePicture</th>
                                        <th>UserType</th>
                                        <th>RegistrationDate</th>
                                        <th>CurrentGradeLevel</th>
                                        <th>Major</th>
                                        <th>IsActive</th>
                                        <th>actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for student in students %}
                                        <tr>
                                            <td>{{ student.id }}</td>
                                            <td>{{ student.username }}</td>
                                            <td>{{ student.password }}</td>
                                            <td>{{ student.email }}</td>
                                            <td>{{ student.firstName }}</td>
                                            <td>{{ student.lastName }}</td>
                                            <td>{{ student.dateOfBirth ? student.dateOfBirth|date('Y-m-d') : '' }}</td>
                                            <td>{{ student.gender }}</td>
                                            <td>{{ student.address }}</td>
                                            <td>{{ student.phoneNumber }}</td>
                                            <td>{{ student.profilePicture }}</td>
                                            <td>{{ student.userType }}</td>
                                            <td>{{ student.registrationDate ? student.registrationDate|date('Y-m-d') : '' }}</td>
                                            <td>{{ student.currentGradeLevel }}</td>
                                            <td>{{ student.major }}</td>
                                            <td>{{ student.isActive ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <a href=\"{{ path('admin_dashboard_students_show', {'id': student.id}) }}\">show</a>
                                                <a href=\"{{ path('admin_dashboard_students_edit', {'id': student.id}) }}\">edit</a>
                                                <form method=\"post\" action=\"{{ path('admin_dashboard_students_toggle_active', {'id': student.id}) }}\" style=\"display: inline;\">
                                                    <button type=\"submit\">Toggle Active</button>
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ student.id) }}\">
                                                </form>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "prof/mystudent.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\prof\\mystudent.html.twig");
    }
}
