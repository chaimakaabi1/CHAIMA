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

/* prof/index.html.twig */
class __TwigTemplate_e3fbd75a5612e47950972b112966b7fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/index.html.twig"));

        $this->parent = $this->loadTemplate("prof/profdashboard.html.twig", "prof/index.html.twig", 1);
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

        echo "Course Index";
        
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
        echo "
    ";
        // line 8
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-switch@3/dist/css/bootstrap3/bootstrap-switch.min.css\">
";
        
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
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Is Active</th>
                                        <th>Updated At</th>
                                        <th>Created At</th>
                                        <th>Course Content</th>
                                        <th>Instructor ID</th>
                                        <th>Instructor Name</th>
                                        <th>Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 37
            echo "                                        <tr>
                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "price", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                            <td>
                                                <input type=\"checkbox\" class=\"toggle-active\" data-course-id=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 43), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["course"], "isactive", [], "any", false, false, false, 43)) {
                echo "checked";
            }
            echo " data-toggle=\"switch\">
                                            </td>
                                            <td>";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["course"], "updatedat", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "updatedat", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["course"], "createdat", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "createdat", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "coursecontent", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "instructorid", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "instructorname", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_edit", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Edit</a>
                                                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_delete", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure you want to delete this course?')\">Delete</a>
                                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-info\">PDF</a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                                        <tr>
                                            <td colspan=\"12\">No records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-switch@3/dist/js/bootstrap-switch.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleActiveButtons = document.querySelectorAll('.toggle-active');

            toggleActiveButtons.forEach(function (button) {
                \$(button).bootstrapSwitch({
                    size: 'small',
                    onSwitchChange: function (event, state) {
                        const courseId = \$(this).data('course-id');
                        // You may need to send an AJAX request to update the \"Is Active\" status in the database
                        // For simplicity, I'll just show an alert here
                        alert(`Toggle \"Is Active\" for course with ID \${courseId} to \${state}`);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "prof/index.html.twig";
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
        return array (  222 => 61,  213 => 57,  204 => 53,  200 => 52,  196 => 51,  191 => 49,  187 => 48,  183 => 47,  179 => 46,  175 => 45,  166 => 43,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  146 => 37,  141 => 36,  115 => 12,  105 => 11,  94 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/profdashboard.html.twig' %}

{% block title %}Course Index{% endblock %}

{% block styles %}
    {{ parent() }}
    {# Add additional styles specific to the admin_dashboard_admins page if needed #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-switch@3/dist/css/bootstrap3/bootstrap-switch.min.css\">
{% endblock %}

{% block main %}
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-16 grid-margin stretch-card\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Is Active</th>
                                        <th>Updated At</th>
                                        <th>Created At</th>
                                        <th>Course Content</th>
                                        <th>Instructor ID</th>
                                        <th>Instructor Name</th>
                                        <th>Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for course in courses %}
                                        <tr>
                                            <td>{{ course.title }}</td>
                                            <td>{{ course.description }}</td>
                                            <td>{{ course.price }}</td>
                                            <td>{{ course.image }}</td>
                                            <td>
                                                <input type=\"checkbox\" class=\"toggle-active\" data-course-id=\"{{ course.courseId }}\" {% if course.isactive %}checked{% endif %} data-toggle=\"switch\">
                                            </td>
                                            <td>{{ course.updatedat ? course.updatedat|date('Y-m-d') : '' }}</td>
                                            <td>{{ course.createdat ? course.createdat|date('Y-m-d') : '' }}</td>
                                            <td>{{ course.coursecontent }}</td>
                                            <td>{{ course.instructorid }}</td>
                                            <td>{{ course.instructorname }}</td>
                                            <td>
                                                <a href=\"{{ path('app_course_edit', {'courseId': course.courseId}) }}\" class=\"btn btn-warning\">Edit</a>
                                                <a href=\"{{ path('app_course_delete', {'courseId': course.courseId}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Are you sure you want to delete this course?')\">Delete</a>
                                                <a href=\"{{ path('app_course_pdf', {'id': course.courseId}) }}\" class=\"btn btn-info\">PDF</a>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"12\">No records found</td>
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

    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-switch@3/dist/js/bootstrap-switch.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleActiveButtons = document.querySelectorAll('.toggle-active');

            toggleActiveButtons.forEach(function (button) {
                \$(button).bootstrapSwitch({
                    size: 'small',
                    onSwitchChange: function (event, state) {
                        const courseId = \$(this).data('course-id');
                        // You may need to send an AJAX request to update the \"Is Active\" status in the database
                        // For simplicity, I'll just show an alert here
                        alert(`Toggle \"Is Active\" for course with ID \${courseId} to \${state}`);
                    }
                });
            });
        });
    </script>
{% endblock %}
", "prof/index.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\prof\\index.html.twig");
    }
}
