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

/* instructor/index.html.twig */
class __TwigTemplate_83eb03a831672551aef9f71d4b897de5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard.html.twig", "instructor/index.html.twig", 1);
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

        echo "Manage instructors";
        
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
                                <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_instructors");
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
                                        <th>YearsOfExperience</th>
                                        <th>Bio</th>
                                        <th>IsActive</th>
                                        <th>actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["instructors"]) || array_key_exists("instructors", $context) ? $context["instructors"] : (function () { throw new RuntimeError('Variable "instructors" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 50
            echo "                                        <tr>
                                            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "username", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "password", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "email", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "firstName", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "lastName", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["instructor"], "dateOfBirth", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "dateOfBirth", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "gender", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "address", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "phoneNumber", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "profilePicture", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "userType", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            ((twig_get_attribute($this->env, $this->source, $context["instructor"], "registrationDate", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "registrationDate", [], "any", false, false, false, 63), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "yearsOfExperience", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "bio", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                            <td>";
            // line 66
            echo ((twig_get_attribute($this->env, $this->source, $context["instructor"], "isActive", [], "any", false, false, false, 66)) ? ("Yes") : ("No"));
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_instructors_show", ["id" => twig_get_attribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">show</a>
                                                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_instructors_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">edit</a>
                                                <form method=\"post\" action=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_instructors_toggle_active", ["id" => twig_get_attribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" style=\"display: inline;\">
                                                    <button type=\"submit\">Toggle Active</button>
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle" . twig_get_attribute($this->env, $this->source, $context["instructor"], "id", [], "any", false, false, false, 72))), "html", null, true);
            echo "\">
                                                </form>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                    </tbody>
                                    <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_instructors_new");
        echo "\">Create new</a>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_instructors_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "instructor/index.html.twig";
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
        return array (  276 => 92,  263 => 82,  260 => 81,  251 => 77,  241 => 72,  236 => 70,  232 => 69,  228 => 68,  223 => 66,  219 => 65,  215 => 64,  211 => 63,  207 => 62,  203 => 61,  199 => 60,  195 => 59,  191 => 58,  187 => 57,  183 => 56,  179 => 55,  175 => 54,  171 => 53,  167 => 52,  163 => 51,  160 => 50,  155 => 49,  122 => 19,  113 => 12,  103 => 11,  93 => 8,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard.html.twig' %}


{% block title %}Manage instructors{% endblock %}

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
                                <form action=\"{{ path('admin_dashboard_instructors') }}\" method=\"get\">
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
                                        <th>YearsOfExperience</th>
                                        <th>Bio</th>
                                        <th>IsActive</th>
                                        <th>actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for instructor in instructors %}
                                        <tr>
                                            <td>{{ instructor.id }}</td>
                                            <td>{{ instructor.username }}</td>
                                            <td>{{ instructor.password }}</td>
                                            <td>{{ instructor.email }}</td>
                                            <td>{{ instructor.firstName }}</td>
                                            <td>{{ instructor.lastName }}</td>
                                            <td>{{ instructor.dateOfBirth ? instructor.dateOfBirth|date('Y-m-d') : '' }}</td>
                                            <td>{{ instructor.gender }}</td>
                                            <td>{{ instructor.address }}</td>
                                            <td>{{ instructor.phoneNumber }}</td>
                                            <td>{{ instructor.profilePicture }}</td>
                                            <td>{{ instructor.userType }}</td>
                                            <td>{{ instructor.registrationDate ? instructor.registrationDate|date('Y-m-d') : '' }}</td>
                                            <td>{{ instructor.yearsOfExperience }}</td>
                                            <td>{{ instructor.bio }}</td>
                                            <td>{{ instructor.isActive ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <a href=\"{{ path('admin_dashboard_instructors_show', {'id': instructor.id}) }}\">show</a>
                                                <a href=\"{{ path('admin_dashboard_instructors_edit', {'id': instructor.id}) }}\">edit</a>
                                                <form method=\"post\" action=\"{{ path('admin_dashboard_instructors_toggle_active', {'id': instructor.id}) }}\" style=\"display: inline;\">
                                                    <button type=\"submit\">Toggle Active</button>
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle' ~ instructor.id) }}\">
                                                </form>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                    <a href=\"{{ path('admin_dashboard_instructors_new') }}\">Create new</a>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href=\"{{ path('admin_dashboard_instructors_new') }}\">Create new</a>
{% endblock %}", "instructor/index.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\instructor\\index.html.twig");
    }
}
