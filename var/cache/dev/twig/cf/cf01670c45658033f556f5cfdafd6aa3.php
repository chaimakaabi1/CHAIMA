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

/* review/index.html.twig */
class __TwigTemplate_4a1f897e99a832c0360be4aaf4650d91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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

        echo "Review Index";
        
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
        echo "    <style>




        .no-results {
            color: #888;
            font-style: italic;
        }

        .table-container {
            max-width: 800px; /* Adjust the maximum width as needed */
            margin: 20px auto; /* Center the table */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd; /* Add border */
        }

        .table th {
            background-color: #007bff;
            color: #fff;
        }

        .create-link {
            display: block;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 47
        echo "<br>
    <br>
        <form id=\"searchForm\" class=\"search-form\">
    <label for=\"reviewerName\">Search by Reviewer Name:</label>
    <input type=\"text\" id=\"reviewerName\" name=\"reviewerName\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "get", ["reviewerName"], "method", false, false, false, 51), "html", null, true);
        echo "\" />
    <button type=\"button\" id=\"searchButton\">Search</button>

    <!-- Display the results here -->
    <div id=\"search-results\"></div>
        </form>

    <div class=\"table-container\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Reviewid</th>
                <th>Coursetitle</th>
                <th>Reviewername</th>
                <th>Rating</th>
                <th>Commenttitle</th>
                <th>Commentcontent</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "isXmlHttpRequest", [], "any", false, false, false, 73)) {
            // line 74
            echo "                ";
            // line 75
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 75, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 76
                echo "                    <tr>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "reviewid", [], "any", false, false, false, 77), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "coursetitle", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                        <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "reviewername", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
                        <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 80), "html", null, true);
                echo "</td>
                        <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "commenttitle", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
                        <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "commentcontent", [], "any", false, false, false, 82), "html", null, true);
                echo "</td>
                        <td>";
                // line 83
                ((twig_get_attribute($this->env, $this->source, $context["review"], "createdat", [], "any", false, false, false, 83)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdat", [], "any", false, false, false, 83), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                        <td>
                            <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_show", ["reviewid" => twig_get_attribute($this->env, $this->source, $context["review"], "reviewid", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Show</a>
                            <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_edit", ["reviewid" => twig_get_attribute($this->env, $this->source, $context["review"], "reviewid", [], "any", false, false, false, 86)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Edit</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                ";
            if (twig_test_empty((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 90, $this->source); })()))) {
                // line 91
                echo "                    <tr>
                        <td colspan=\"8\">No records found</td>
                    </tr>
                ";
            }
            // line 95
            echo "            ";
        } else {
            // line 96
            echo "                ";
            // line 97
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 97, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 98
                echo "                    <tr>
                        <td>";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "reviewid", [], "any", false, false, false, 99), "html", null, true);
                echo "</td>
                        <td>";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "coursetitle", [], "any", false, false, false, 100), "html", null, true);
                echo "</td>
                        <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "reviewername", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
                        <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
                        <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "commenttitle", [], "any", false, false, false, 103), "html", null, true);
                echo "</td>
                        <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "commentcontent", [], "any", false, false, false, 104), "html", null, true);
                echo "</td>
                        <td>";
                // line 105
                ((twig_get_attribute($this->env, $this->source, $context["review"], "createdat", [], "any", false, false, false, 105)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdat", [], "any", false, false, false, 105), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                        <td>
                            <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_show", ["reviewid" => twig_get_attribute($this->env, $this->source, $context["review"], "reviewid", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Show</a>
                            <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_edit", ["reviewid" => twig_get_attribute($this->env, $this->source, $context["review"], "reviewid", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Edit</a>
                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 112
                echo "                    <tr>
                        <td colspan=\"8\">No records found</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            ";
        }
        // line 117
        echo "            </tbody>
        </table>
    </div>

    <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_new");
        echo "\" class=\"btn btn-success create-link\">Create new</a>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function () {
            var typingTimer; // Timer identifier
            var doneTypingInterval = 500; // Time in milliseconds (0.5 seconds)

            // On keyup, start the countdown
            \$('#reviewerName').keyup(function () {
                clearTimeout(typingTimer);
                if (\$('#reviewerName').val()) {
                    typingTimer = setTimeout(doneTyping, doneTypingInterval);
                }
            });

            // On keydown, clear the countdown
            \$('#reviewerName').keydown(function () {
                clearTimeout(typingTimer);
            });

            // Function to execute after typing is done
            function doneTyping() {
                var reviewerName = \$('#reviewerName').val();

                // Make an AJAX request to the Symfony controller
                \$.ajax({
                    url: \"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index");
        echo "\",
                    type: \"GET\",
                    data: { reviewerName: reviewerName },
                    dataType: \"json\",
                    success: function (data) {
                        // Update the search results div with the received data
                        \$('#search-results').html('');

                        if (data.reviews) {
                            \$.each(data.reviews, function (index, review) {
                                // Style the results with a simple border and padding
                                \$('#search-results').append('<div class=\"search-result\">' + review.reviewername + '</div>');
                            });
                        } else {
                            // Handle the case when no reviews are available
                            \$('#search-results').append('<p class=\"no-results\">No reviews found.</p>');
                        }
                    },
                });
            }

            // Trigger the search on button click
            \$('#searchButton').click(function () {
                doneTyping();
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
        return "review/index.html.twig";
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
        return array (  346 => 148,  316 => 121,  310 => 117,  307 => 116,  298 => 112,  289 => 108,  285 => 107,  280 => 105,  276 => 104,  272 => 103,  268 => 102,  264 => 101,  260 => 100,  256 => 99,  253 => 98,  247 => 97,  245 => 96,  242 => 95,  236 => 91,  233 => 90,  223 => 86,  219 => 85,  214 => 83,  210 => 82,  206 => 81,  202 => 80,  198 => 79,  194 => 78,  190 => 77,  187 => 76,  182 => 75,  180 => 74,  178 => 73,  153 => 51,  147 => 47,  137 => 46,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Review Index{% endblock %}

{% block styles %}
    <style>




        .no-results {
            color: #888;
            font-style: italic;
        }

        .table-container {
            max-width: 800px; /* Adjust the maximum width as needed */
            margin: 20px auto; /* Center the table */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd; /* Add border */
        }

        .table th {
            background-color: #007bff;
            color: #fff;
        }

        .create-link {
            display: block;
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
{% endblock %}

{% block content %}
<br>
    <br>
        <form id=\"searchForm\" class=\"search-form\">
    <label for=\"reviewerName\">Search by Reviewer Name:</label>
    <input type=\"text\" id=\"reviewerName\" name=\"reviewerName\" value=\"{{ app.request.query.get('reviewerName') }}\" />
    <button type=\"button\" id=\"searchButton\">Search</button>

    <!-- Display the results here -->
    <div id=\"search-results\"></div>
        </form>

    <div class=\"table-container\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>Reviewid</th>
                <th>Coursetitle</th>
                <th>Reviewername</th>
                <th>Rating</th>
                <th>Commenttitle</th>
                <th>Commentcontent</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% if app.request.isXmlHttpRequest %}
                {# Handle AJAX response #}
                {% for review in reviews %}
                    <tr>
                        <td>{{ review.reviewid }}</td>
                        <td>{{ review.coursetitle }}</td>
                        <td>{{ review.reviewername }}</td>
                        <td>{{ review.rating }}</td>
                        <td>{{ review.commenttitle }}</td>
                        <td>{{ review.commentcontent }}</td>
                        <td>{{ review.createdat ? review.createdat|date('Y-m-d') : '' }}</td>
                        <td>
                            <a href=\"{{ path('app_review_show', {'reviewid': review.reviewid}) }}\" class=\"btn btn-info\">Show</a>
                            <a href=\"{{ path('app_review_edit', {'reviewid': review.reviewid}) }}\" class=\"btn btn-warning\">Edit</a>
                        </td>
                    </tr>
                {% endfor %}
                {% if reviews is empty %}
                    <tr>
                        <td colspan=\"8\">No records found</td>
                    </tr>
                {% endif %}
            {% else %}
                {# Handle non-AJAX request #}
                {% for review in reviews %}
                    <tr>
                        <td>{{ review.reviewid }}</td>
                        <td>{{ review.coursetitle }}</td>
                        <td>{{ review.reviewername }}</td>
                        <td>{{ review.rating }}</td>
                        <td>{{ review.commenttitle }}</td>
                        <td>{{ review.commentcontent }}</td>
                        <td>{{ review.createdat ? review.createdat|date('Y-m-d') : '' }}</td>
                        <td>
                            <a href=\"{{ path('app_review_show', {'reviewid': review.reviewid}) }}\" class=\"btn btn-info\">Show</a>
                            <a href=\"{{ path('app_review_edit', {'reviewid': review.reviewid}) }}\" class=\"btn btn-warning\">Edit</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\">No records found</td>
                    </tr>
                {% endfor %}
            {% endif %}
            </tbody>
        </table>
    </div>

    <a href=\"{{ path('app_review_new') }}\" class=\"btn btn-success create-link\">Create new</a>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function () {
            var typingTimer; // Timer identifier
            var doneTypingInterval = 500; // Time in milliseconds (0.5 seconds)

            // On keyup, start the countdown
            \$('#reviewerName').keyup(function () {
                clearTimeout(typingTimer);
                if (\$('#reviewerName').val()) {
                    typingTimer = setTimeout(doneTyping, doneTypingInterval);
                }
            });

            // On keydown, clear the countdown
            \$('#reviewerName').keydown(function () {
                clearTimeout(typingTimer);
            });

            // Function to execute after typing is done
            function doneTyping() {
                var reviewerName = \$('#reviewerName').val();

                // Make an AJAX request to the Symfony controller
                \$.ajax({
                    url: \"{{ path('app_review_index') }}\",
                    type: \"GET\",
                    data: { reviewerName: reviewerName },
                    dataType: \"json\",
                    success: function (data) {
                        // Update the search results div with the received data
                        \$('#search-results').html('');

                        if (data.reviews) {
                            \$.each(data.reviews, function (index, review) {
                                // Style the results with a simple border and padding
                                \$('#search-results').append('<div class=\"search-result\">' + review.reviewername + '</div>');
                            });
                        } else {
                            // Handle the case when no reviews are available
                            \$('#search-results').append('<p class=\"no-results\">No reviews found.</p>');
                        }
                    },
                });
            }

            // Trigger the search on button click
            \$('#searchButton').click(function () {
                doneTyping();
            });
        });
    </script>
{% endblock %}
", "review/index.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\review\\index.html.twig");
    }
}
