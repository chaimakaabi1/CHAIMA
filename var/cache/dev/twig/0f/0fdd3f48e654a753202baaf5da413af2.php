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

/* course/search_results.html.twig */
class __TwigTemplate_22430333086ead235e1da13217f9a0f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/search_results.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 4, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 5
            echo "        <div class=\"col-md-3 mb-4\">
            <div class=\"card h-100 border-3\" style=\"border-radius: 15px;\">
                ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 7)) {
                // line 8
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 8))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 8), "html", null, true);
                echo "\" style=\"object-fit: cover; height: 150px; border-radius: 10%;\">
                ";
            } else {
                // line 10
                echo "                    <div class=\"text-center\" style=\"height: 150px; display: flex; align-items: center; justify-content: center;\">
                        No Image
                    </div>
                ";
            }
            // line 14
            echo "                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">Price: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "price", [], "any", false, false, false, 18), "html", null, true);
            echo "</li>
                        <li class=\"list-group-item\">Instructor: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "instructorName", [], "any", false, false, false, 19), "html", null, true);
            echo "</li>
                        <li class=\"list-group-item\">Created At: ";
            // line 20
            ((twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</li>
                    </ul>
                </div>
                <div class=\"card-footer\">
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_show", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Show</a>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_edit", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Edit</a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_deleteprof", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">delete</a>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_reviews", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\" style=\"width: 50px; height: 30px;\">Rev</a>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <div class=\"col-md-12\">
            <p>No records found</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "course/search_results.html.twig";
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
        return array (  130 => 36,  121 => 32,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  92 => 20,  88 => 19,  84 => 18,  79 => 16,  75 => 15,  72 => 14,  66 => 10,  58 => 8,  56 => 7,  52 => 5,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/course/search_results.html.twig #}

<div class=\"row\">
    {% for course in courses %}
        <div class=\"col-md-3 mb-4\">
            <div class=\"card h-100 border-3\" style=\"border-radius: 15px;\">
                {% if course.image %}
                    <img src=\"{{ asset('uploads/images/' ~ course.image) }}\" class=\"card-img-top\" alt=\"{{ course.title }}\" style=\"object-fit: cover; height: 150px; border-radius: 10%;\">
                {% else %}
                    <div class=\"text-center\" style=\"height: 150px; display: flex; align-items: center; justify-content: center;\">
                        No Image
                    </div>
                {% endif %}
                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title\">{{ course.title }}</h5>
                    <p class=\"card-text\">{{ course.description }}</p>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\">Price: {{ course.price }}</li>
                        <li class=\"list-group-item\">Instructor: {{ course.instructorName }}</li>
                        <li class=\"list-group-item\">Created At: {{ course.createdAt ? course.createdAt|date('Y-m-d') : '' }}</li>
                    </ul>
                </div>
                <div class=\"card-footer\">
                    <a href=\"{{ path('app_course_show', {'courseId': course.courseId}) }}\" class=\"btn btn-info btn-sm\">Show</a>
                    <a href=\"{{ path('app_course_edit', {'courseId': course.courseId}) }}\" class=\"btn btn-primary btn-sm\">Edit</a>
                    <a href=\"{{ path('app_course_deleteprof', {'courseId': course.courseId}) }}\" class=\"btn btn-info btn-sm\">delete</a>
                    <a href=\"{{ path('app_show_reviews', {'courseId': course.courseId}) }}\" class=\"btn btn-success btn-sm\" style=\"width: 50px; height: 30px;\">Rev</a>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"col-md-12\">
            <p>No records found</p>
        </div>
    {% endfor %}
</div>
", "course/search_results.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\course\\search_results.html.twig");
    }
}
