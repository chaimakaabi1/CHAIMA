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

/* Statistique/index.html.twig */
class __TwigTemplate_d3e60c9a2a325ba20dfe285823186fb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Statistique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Statistique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Statistique/index.html.twig", 1);
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

        echo "Average Rating per Course";
        
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
        echo "    <style>
        /* Add any additional styles here */
        canvas {
            max-width: 800px;
            margin: 20px 0;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h1 class=\"mb-4\">Statistics</h1>

    ";
        // line 20
        echo "    <div>
        <canvas id=\"ratingChart\" width=\"600\" height=\"300\"></canvas>
    </div>



    ";
        // line 27
        echo "    <h2 class=\"mt-5\">Top 3 Instructors with Most Reviews (Pie Chart)</h2>
    <div>
        <canvas id=\"instructorPieChart\" width=\"600\" height=\"300\"></canvas>
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avgRatingsByCourse"]) || array_key_exists("avgRatingsByCourse", $context) ? $context["avgRatingsByCourse"] : (function () { throw new RuntimeError('Variable "avgRatingsByCourse" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avgRating"]) {
            echo "\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avgRating"], "courseTitle", [], "any", false, false, false, 43), "html", null, true);
            echo "\",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avgRating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                    datasets: [{
                        label: 'Average Rating',
                        data: [";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avgRatingsByCourse"]) || array_key_exists("avgRatingsByCourse", $context) ? $context["avgRatingsByCourse"] : (function () { throw new RuntimeError('Variable "avgRatingsByCourse" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avgRating"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avgRating"], "averageRating", [], "any", false, false, false, 46), "html", null, true);
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
                            text: 'Average Rating per Course',
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
                        duration: 2000, // Adjust animation duration as needed
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
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topInstructors"]) || array_key_exists("topInstructors", $context) ? $context["topInstructors"] : (function () { throw new RuntimeError('Variable "topInstructors" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 103
            echo "                        \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "instructorName", [], "any", false, false, false, 103), "html", null, true);
            echo "\",
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                    ],
                    datasets: [{
                        data: [
                            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topInstructors"]) || array_key_exists("topInstructors", $context) ? $context["topInstructors"] : (function () { throw new RuntimeError('Variable "topInstructors" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 109
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instructor"], "reviewCount", [], "any", false, false, false, 109), "html", null, true);
            echo ",
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instructor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
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
                            text: 'Top 3 Instructors with Most Reviews (Pie Chart)',
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
                        duration: 2000, // Adjust animation duration as needed
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
        return "Statistique/index.html.twig";
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
        return array (  261 => 111,  252 => 109,  248 => 108,  243 => 105,  234 => 103,  230 => 102,  163 => 46,  148 => 43,  130 => 27,  122 => 20,  118 => 17,  108 => 16,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Average Rating per Course{% endblock %}
{% block styles %}
    <style>
        /* Add any additional styles here */
        canvas {
            max-width: 800px;
            margin: 20px 0;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
    </style>
{% endblock %}

{% block content %}
    <h1 class=\"mb-4\">Statistics</h1>

    {# Display the chart #}
    <div>
        <canvas id=\"ratingChart\" width=\"600\" height=\"300\"></canvas>
    </div>



    {# Display the pie chart for the top 3 instructors with most reviews #}
    <h2 class=\"mt-5\">Top 3 Instructors with Most Reviews (Pie Chart)</h2>
    <div>
        <canvas id=\"instructorPieChart\" width=\"600\" height=\"300\"></canvas>
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
                            text: 'Average Rating per Course',
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
                        duration: 2000, // Adjust animation duration as needed
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
                            text: 'Top 3 Instructors with Most Reviews (Pie Chart)',
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
                        duration: 2000, // Adjust animation duration as needed
                    }
                }
            });
        });
    </script>
{% endblock %}
", "Statistique/index.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\statistique\\index.html.twig");
    }
}
