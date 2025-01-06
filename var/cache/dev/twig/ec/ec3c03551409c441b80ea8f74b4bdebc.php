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

/* course/index.html.twig */
class __TwigTemplate_e83f3510419fe3c0290aa97ed54be9e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
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

        echo "Coursify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 7
        echo "    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
            <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>Coursify</h2>
        </a>
        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard_profile");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My profile</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index_prof");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My Reviews</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_stat");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Statistique</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("instructor_dashboard_profile");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My profile</span>
                    </a>
                </li>
            </div>
            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
            // line 44
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Logout<i class=\"fa fa-arrow-right ms-3\"></i></a>
            ";
        } else {
            // line 46
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Login<i class=\"fa fa-arrow-right ms-3\"></i></a>
            ";
        }
        // line 48
        echo "        </div>
    </nav>
    <!-- Navbar End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "    <div class=\"container mt-4\">
        <h2 class=\"mb-4\">See Courses</h2>
        ";
        // line 56
        echo "        <form class=\"form-inline\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_search");
        echo "\" method=\"GET\" style=\"display: inline; margin-bottom: 800px; margin-top: 800px;\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" id=\"searchInput\" name=\"searchInput\" placeholder=\"Search by name\" style=\"max-width: 500px; height: 38px; line-height: 35px; margin-right: 10px;\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-primary mb-2\">Search</button>
                </div>
            </div>
        </form>

        <p></p>
        <br>
        <p></p>
        <div class=\"row\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 70
            echo "                <div class=\"col-md-3 mb-4\">
                    <div class=\"card h-100  border-3\" style=\"border-radius: 15px;\">
                        ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 72)) {
                // line 73
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 73))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 73), "html", null, true);
                echo "\" style=\"object-fit: cover; height: 150px; border-radius: 10%;\">
                        ";
            } else {
                // line 75
                echo "                            <div class=\"text-center\" style=\"height: 150px; display: flex; align-items: center; justify-content: center;\">
                                No Image
                            </div>
                        ";
            }
            // line 79
            echo "                        <div class=\"card-body d-flex flex-column\">
                            <h5 class=\"card-title\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 80), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 81), "html", null, true);
            echo "</p>
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">Price: ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "price", [], "any", false, false, false, 83), "html", null, true);
            echo "</li>
                                <li class=\"list-group-item\">Instructor: ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "instructorName", [], "any", false, false, false, 84), "html", null, true);
            echo "</li>
                                <li class=\"list-group-item\">Created At: ";
            // line 85
            ((twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 85)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 85), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</li>
                            </ul>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_show", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">Show</a>
                            <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_edit", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Edit</a>
                            <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_deleteprof", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">delete</a>
                            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_show_reviews", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\" style=\"width: 50px; height: 30px;\">Rev</a>

                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 98
            echo "                <div class=\"col-md-12\">
                    <p>No records found</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </div>

        <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_new");
        echo "\" class=\"btn btn-success btn-sm\">Create new</a>
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
        return "course/index.html.twig";
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
        return array (  285 => 104,  281 => 102,  272 => 98,  261 => 92,  257 => 91,  253 => 90,  249 => 89,  242 => 85,  238 => 84,  234 => 83,  229 => 81,  225 => 80,  222 => 79,  216 => 75,  208 => 73,  206 => 72,  202 => 70,  197 => 69,  180 => 56,  176 => 53,  166 => 52,  153 => 48,  147 => 46,  141 => 44,  139 => 43,  130 => 37,  121 => 31,  112 => 25,  103 => 19,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Coursify{% endblock %}


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
                <a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('instructor_dashboard_profile') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My profile</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_review_index_prof') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">My Reviews</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_review_stat') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Statistique</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('instructor_dashboard_profile') }}\">
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
    <div class=\"container mt-4\">
        <h2 class=\"mb-4\">See Courses</h2>
        {# Search Form #}
        <form class=\"form-inline\" action=\"{{ path('app_course_search') }}\" method=\"GET\" style=\"display: inline; margin-bottom: 800px; margin-top: 800px;\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" id=\"searchInput\" name=\"searchInput\" placeholder=\"Search by name\" style=\"max-width: 500px; height: 38px; line-height: 35px; margin-right: 10px;\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-primary mb-2\">Search</button>
                </div>
            </div>
        </form>

        <p></p>
        <br>
        <p></p>
        <div class=\"row\">
            {% for course in courses %}
                <div class=\"col-md-3 mb-4\">
                    <div class=\"card h-100  border-3\" style=\"border-radius: 15px;\">
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

        <a href=\"{{ path('app_course_new') }}\" class=\"btn btn-success btn-sm\">Create new</a>
    </div>
{% endblock %}
", "course/index.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\course\\index.html.twig");
    }
}
