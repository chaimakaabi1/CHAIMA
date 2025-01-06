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

/* prof/see_stat.html.twig */
class __TwigTemplate_0d89f14f1cbaceacad441acbb2203924 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/see_stat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/see_stat.html.twig"));

        $this->parent = $this->loadTemplate("prof/profdashboard.html.twig", "prof/see_stat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 4
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "

    <style>
        /* Add any additional styles here */

        .chart-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Adjust as needed for spacing between charts */
            margin-left: 20px;
            margin-top: 20px;

        }

        canvas {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 28
        echo "    <div class=\"row\">
        <div class=\"col-lg-6\">
            ";
        // line 31
        echo "            <div class=\"chart-container\">
                <h4 class=\"text-center mt-3\">Average Rating per Course</h4>
                <canvas id=\"ratingChart\" width=\"600\" height=\"300\"></canvas>
            </div>
        </div>

        <div class=\"col-lg-6\">
            ";
        // line 39
        echo "            <div class=\"chart-container\">
                <h4 class=\"text-center mt-3\">Top 3 Instructors with Most Reviews (Pie Chart)</h4>
                <canvas id=\"instructorPieChart\" width=\"600\" height=\"300\"></canvas>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Bar Chart
            var ctx = document.getElementById('ratingChart').getContext('2d');
            var gradient = ctx.createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, 'rgba(75, 192, 192, 0.6)');
            gradient.addColorStop(1, 'rgba(75, 192, 192, 0)');
            var ratingChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avgRatingsByCourse"]) || array_key_exists("avgRatingsByCourse", $context) ? $context["avgRatingsByCourse"] : (function () { throw new RuntimeError('Variable "avgRatingsByCourse" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avgRating"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avgRating"], "courseTitle", [], "any", false, false, false, 57), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avgRating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                    datasets: [{
                        label: 'Average Rating',
                        data: [";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avgRatingsByCourse"]) || array_key_exists("avgRatingsByCourse", $context) ? $context["avgRatingsByCourse"] : (function () { throw new RuntimeError('Variable "avgRatingsByCourse" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avgRating"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avgRating"], "averageRating", [], "any", false, false, false, 60), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avgRating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                        backgroundColor: gradient,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        barPercentage: 0.8,
                        categoryPercentage: 0.7,
                        hoverBackgroundColor: 'rgba(75, 192, 192, 0.8)',
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 5 // Assuming rating scale is from 0 to 5
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: '',
                            font: {
                                size: 16,
                                weight: 'bold'
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(255, 255, 255, 0.9)',
                            titleColor: '#000',
                            bodyColor: '#000',
                            borderColor: 'rgba(0, 0, 0, 0.1)',
                            borderWidth: 1,
                            displayColors: false,
                            callbacks: {
                                label: function (tooltipItem) {
                                    return 'Average Rating: ' + tooltipItem.formattedValue;
                                }
                            }
                        }
                    },
                    animation: {
                        duration:6000, // Adjust animation duration as needed
                    }
                }
            });

            // Pie Chart
            var instructorPieCtx = document.getElementById('instructorPieChart').getContext('2d');
            var instructorPieChart = new Chart(instructorPieCtx, {
                type: 'pie',
                data: {
                    labels: [
                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topInstructors"]) || array_key_exists("topInstructors", $context) ? $context["topInstructors"] : (function () { throw new RuntimeError('Variable "topInstructors" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 117
            echo "                        \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "instructorName", [], "any", false, false, false, 117), "html", null, true);
            echo "\",
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                    ],
                    datasets: [{
                        label: ' Top 3 Instructors',
                        data: [
                            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topInstructors"]) || array_key_exists("topInstructors", $context) ? $context["topInstructors"] : (function () { throw new RuntimeError('Variable "topInstructors" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 124
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "reviewCount", [], "any", false, false, false, 124), "html", null, true);
            echo ",
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 205, 86, 0.8)',
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: '',
                            font: {
                                size: 16,
                                weight: 'bold'
                            }
                        },
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        tooltip: {
                            backgroundColor: 'rgba(255, 255, 255, 0.9)',
                            titleColor: '#000',
                            bodyColor: '#000',
                            borderColor: 'rgba(0, 0, 0, 0.1)',
                            borderWidth: 1,
                            displayColors: false,
                            callbacks: {
                                label: function (tooltipItem) {
                                    return instructorPieChart.data.labels[tooltipItem.index] +
                                        ': ' + instructorPieChart.data.datasets[0].data[tooltipItem.index] + ' reviews';
                                }
                            }
                        }
                    },
                    animation: {
                        duration: 6000, // Adjust animation duration as needed
                    }
                }
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
        return "prof/see_stat.html.twig";
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
        return array (  259 => 126,  250 => 124,  246 => 123,  240 => 119,  231 => 117,  227 => 116,  160 => 60,  145 => 57,  125 => 39,  116 => 31,  112 => 28,  102 => 27,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/profdashboard.html.twig' %}

{% block styles %}
    {{ parent() }}

    <style>
        /* Add any additional styles here */

        .chart-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px; /* Adjust as needed for spacing between charts */
            margin-left: 20px;
            margin-top: 20px;

        }

        canvas {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
{% endblock %}

{% block main %}
    <div class=\"row\">
        <div class=\"col-lg-6\">
            {# Display the bar chart #}
            <div class=\"chart-container\">
                <h4 class=\"text-center mt-3\">Average Rating per Course</h4>
                <canvas id=\"ratingChart\" width=\"600\" height=\"300\"></canvas>
            </div>
        </div>

        <div class=\"col-lg-6\">
            {# Display the pie chart for the top 3 instructors with most reviews #}
            <div class=\"chart-container\">
                <h4 class=\"text-center mt-3\">Top 3 Instructors with Most Reviews (Pie Chart)</h4>
                <canvas id=\"instructorPieChart\" width=\"600\" height=\"300\"></canvas>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Bar Chart
            var ctx = document.getElementById('ratingChart').getContext('2d');
            var gradient = ctx.createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, 'rgba(75, 192, 192, 0.6)');
            gradient.addColorStop(1, 'rgba(75, 192, 192, 0)');
            var ratingChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [{% for avgRating in avgRatingsByCourse %}\"{{ avgRating.courseTitle }}\",{% endfor %}],
                    datasets: [{
                        label: 'Average Rating',
                        data: [{% for avgRating in avgRatingsByCourse %}{{ avgRating.averageRating }},{% endfor %}],
                        backgroundColor: gradient,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        barPercentage: 0.8,
                        categoryPercentage: 0.7,
                        hoverBackgroundColor: 'rgba(75, 192, 192, 0.8)',
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 5 // Assuming rating scale is from 0 to 5
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: '',
                            font: {
                                size: 16,
                                weight: 'bold'
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(255, 255, 255, 0.9)',
                            titleColor: '#000',
                            bodyColor: '#000',
                            borderColor: 'rgba(0, 0, 0, 0.1)',
                            borderWidth: 1,
                            displayColors: false,
                            callbacks: {
                                label: function (tooltipItem) {
                                    return 'Average Rating: ' + tooltipItem.formattedValue;
                                }
                            }
                        }
                    },
                    animation: {
                        duration:6000, // Adjust animation duration as needed
                    }
                }
            });

            // Pie Chart
            var instructorPieCtx = document.getElementById('instructorPieChart').getContext('2d');
            var instructorPieChart = new Chart(instructorPieCtx, {
                type: 'pie',
                data: {
                    labels: [
                        {% for instructor in topInstructors %}
                        \"{{ instructor.instructorName }}\",
                        {% endfor %}
                    ],
                    datasets: [{
                        label: ' Top 3 Instructors',
                        data: [
                            {% for instructor in topInstructors %}
                            {{ instructor.reviewCount }},
                            {% endfor %}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 205, 86, 0.8)',
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: '',
                            font: {
                                size: 16,
                                weight: 'bold'
                            }
                        },
                        legend: {
                            display: true,
                            position: 'bottom'
                        },
                        tooltip: {
                            backgroundColor: 'rgba(255, 255, 255, 0.9)',
                            titleColor: '#000',
                            bodyColor: '#000',
                            borderColor: 'rgba(0, 0, 0, 0.1)',
                            borderWidth: 1,
                            displayColors: false,
                            callbacks: {
                                label: function (tooltipItem) {
                                    return instructorPieChart.data.labels[tooltipItem.index] +
                                        ': ' + instructorPieChart.data.datasets[0].data[tooltipItem.index] + ' reviews';
                                }
                            }
                        }
                    },
                    animation: {
                        duration: 6000, // Adjust animation duration as needed
                    }
                }
            });



        });

    </script>
{% endblock %}
", "prof/see_stat.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\prof\\see_stat.html.twig");
    }
}
