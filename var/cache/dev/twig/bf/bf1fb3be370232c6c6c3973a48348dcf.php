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

/* course/cataloguecourse.html.twig */
class __TwigTemplate_4271738978049312084a3755d77c407f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/cataloguecourse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/cataloguecourse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/cataloguecourse.html.twig", 1);
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

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #f8f9fa; /* Set the background color to grey */
        }

        .course-title a {
            color: #000; /* Set the default text color */
            transition: color 0.3s; /* Add a smooth color transition effect */
        }

        .course-title a:hover {
            color: #007bff !important; /* Change the text color on hover */
            text-decoration: underline; /* Add an underline on hover */
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        .text-center {
            text-align: center;
        }

        h2 {
            color: #3498db;
        }

        p {
            color: #555;
        }

        .tabs__nav {
            background-color: #3498db;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }

        .tabs__link {
            border: none;
            outline: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: #fff;
            background-color: #3498db;
            border-radius: 4px;
        }

        .tabs__link.active {
            background-color: #fff;
            color: #3498db;
        }

        .tab-content {
            display: none;
            padding: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 81
        echo "    <div class=\"container mt-4\">
        <h2 class=\"mb-4\">See Courses</h2>

        ";
        // line 85
        echo "        <form class=\"form-inline\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_search");
        echo "\" method=\"GET\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" id=\"searchInput\" name=\"searchInput\" placeholder=\"Search by name\" style=\"max-width: 500px; height: 38px; line-height: 35px; margin-right: 10px;\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-primary mb-2\">Search</button>
                </div>
            </div>
        </form>

        <div class=\"row mt-4\">
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 95, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 96
            echo "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 border-3\" style=\"border-radius: 15px; overflow: hidden;\">
                        ";
            // line 98
            $context["imagePath"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 98)));
            // line 99
            echo "                        ";
            $context["noImagePath"] = "No Image";
            // line 100
            echo "
                        <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 101)) ? ((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 101, $this->source); })())) : ((isset($context["noImagePath"]) || array_key_exists("noImagePath", $context) ? $context["noImagePath"] : (function () { throw new RuntimeError('Variable "noImagePath" does not exist.', 101, $this->source); })()))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 101), "html", null, true);
            echo "\" style=\"object-fit: cover; height: 200px; border-top-left-radius: 10%; border-top-right-radius: 10%; margin-top: -15px;\">

                        <div class=\"card-body d-flex flex-column\">
                            <div class=\"d-flex align-items-start course-title\">
                                <h5 class=\"card-title flex-grow-1\">
                                    <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_show", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\" class=\"text-decoration-none text-dark\">
                                        ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 107), "html", null, true);
            echo "
                                    </a>
                                </h5>
                                <a href=\"#\" class=\"text-decoration-none heart-icon\" data-course-id=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 110), "html", null, true);
            echo "\">
                                    <i class=\"far fa-heart text-danger\"></i>
                                    <i class=\"fas fa-heart text-danger\" style=\"display: none;\"></i>
                                </a>
                            </div>

                            <p class=\"card-text\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 116), "html", null, true);
            echo "</p>

                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    Rating:
                                    ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 122
                echo "                                        ";
                if (($context["i"] <= twig_get_attribute($this->env, $this->source, (isset($context["averageRatings"]) || array_key_exists("averageRatings", $context) ? $context["averageRatings"] : (function () { throw new RuntimeError('Variable "averageRatings" does not exist.', 122, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 122), [], "array", false, false, false, 122))) {
                    // line 123
                    echo "                                            <i class=\"fas fa-star text-warning\"></i>
                                        ";
                } else {
                    // line 125
                    echo "                                            <i class=\"far fa-star text-warning\"></i>
                                        ";
                }
                // line 127
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["averageRatings"]) || array_key_exists("averageRatings", $context) ? $context["averageRatings"] : (function () { throw new RuntimeError('Variable "averageRatings" does not exist.', 128, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 128), [], "array", false, false, false, 128), "html", null, true);
            echo "/5
                                </li>

                                <li class=\"list-group-item\">
                                    <i class=\"far fa-clock\" style=\"color: orange;\"></i> ";
            // line 132
            echo twig_escape_filter($this->env, twig_random($this->env, 1, 24), "html", null, true);
            echo " hours
                                    <span style=\"margin-left: 10px;\"></span>
                                    <i class=\"fas fa-chalkboard\" style=\"color: blue; margin-left: 5px;\"></i> ";
            // line 134
            echo twig_escape_filter($this->env, twig_random($this->env, 1, 10), "html", null, true);
            echo " lectures
                                </li>
                            </ul>
                        </div>

                        <div class=\"card-footer\">
                            <a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_show_student", ["courseId" => twig_get_attribute($this->env, $this->source, $context["course"], "courseId", [], "any", false, false, false, 140)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\">View Reviews</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 145
            echo "                <div class=\"col-md-12\">
                    <p>No records found</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        </div>

        ";
        // line 152
        echo "        <div class=\"pagination d-flex flex-column align-items-center mt-4\">
            <div class=\"text-center mb-2\">
                ";
        // line 154
        $context["startItem"] = ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 154, $this->source); })()) - 1) * (isset($context["perPage"]) || array_key_exists("perPage", $context) ? $context["perPage"] : (function () { throw new RuntimeError('Variable "perPage" does not exist.', 154, $this->source); })())) + 1);
        // line 155
        echo "                ";
        $context["endItem"] = ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 155, $this->source); })()) - 1) * (isset($context["perPage"]) || array_key_exists("perPage", $context) ? $context["perPage"] : (function () { throw new RuntimeError('Variable "perPage" does not exist.', 155, $this->source); })())) + twig_get_attribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 155, $this->source); })()), "count", [], "any", false, false, false, 155));
        // line 156
        echo "                Showing ";
        echo twig_escape_filter($this->env, (isset($context["startItem"]) || array_key_exists("startItem", $context) ? $context["startItem"] : (function () { throw new RuntimeError('Variable "startItem" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["endItem"]) || array_key_exists("endItem", $context) ? $context["endItem"] : (function () { throw new RuntimeError('Variable "endItem" does not exist.', 156, $this->source); })()), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, (isset($context["totalResults"]) || array_key_exists("totalResults", $context) ? $context["totalResults"] : (function () { throw new RuntimeError('Variable "totalResults" does not exist.', 156, $this->source); })()), "html", null, true);
        echo " results
            </div>
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    ";
        // line 160
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 160, $this->source); })()) > 1)) {
            // line 161
            echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_indexcatalogue", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 162, $this->source); })()) - 1), "searchInput" => (isset($context["searchInput"]) || array_key_exists("searchInput", $context) ? $context["searchInput"] : (function () { throw new RuntimeError('Variable "searchInput" does not exist.', 162, $this->source); })())]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                    ";
        }
        // line 167
        echo "
                    ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 168, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 169
            echo "                        <li class=\"page-item ";
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 169, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_indexcatalogue", ["page" => $context["page"], "searchInput" => (isset($context["searchInput"]) || array_key_exists("searchInput", $context) ? $context["searchInput"] : (function () { throw new RuntimeError('Variable "searchInput" does not exist.', 170, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
                    ";
        // line 174
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 174, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 174, $this->source); })()))) {
            // line 175
            echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_indexcatalogue", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 176, $this->source); })()) + 1), "searchInput" => (isset($context["searchInput"]) || array_key_exists("searchInput", $context) ? $context["searchInput"] : (function () { throw new RuntimeError('Variable "searchInput" does not exist.', 176, $this->source); })())]), "html", null, true);
            echo "\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    ";
        }
        // line 181
        echo "                </ul>
            </nav>
        </div>
        <br>
        <br>


        <div class=\"container\">
            <div class=\"row\">
                <div class=\"text-center\">
                    <h2 class=\"fs-1 fw-bold\">Most Popular Courses</h2>
                    <p>Choose from hundreds of courses from specialist organizations</p>
                </div>
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"tabs__nav d-flex justify-content-evenly flex-wrap rounded-3\" style=\"background-color: #ccc; padding: 10px; border-radius: 15px;\">
                        <button class=\"btn nav-link tabs__link active rounded\" data-tab-link=\"1\" data-tab-content=\"web-design\">Web Design</button>
                        <button class=\"btn nav-link tabs__link rounded\" data-tab-link=\"2\" data-tab-content=\"marketing\">Marketing</button>
                        <button class=\"btn nav-link tabs__link rounded\" data-tab-link=\"3\" data-tab-content=\"design\">Design</button>
                    </div>
                </div>
            </div>
        </div>




    <section class=\"instructor py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 position-relative\">
                        <div class=\"position-absolute instructor-circle\"></div>
                        <div class=\"card instructor-card rounded-instructor px-5 py-4\">
                            <div class=\"card-body\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-sm-7 text-white\">
                                        <h2 class=\"fw-bold mb-4 text-instructor-blue\">Become a Teacher!</h2>
                                        <p class=\"mb-4 text-instructor-light\">
                                            Become an expert in your field and inspire others with your knowledge. Take the lead in shaping the future and making a positive impact. Join us on a journey where learning meets passion, and together, let's create a brighter tomorrow.                                        </p>
                                    </div>
                                    <div class=\"col-sm-5 text-lg-end d-flex justify-content-md-end\">
                                        <a href=\"#\" class=\"btn btn-instructor-primary btn-lg\">Start Teaching Today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .instructor-circle {
                width: 150px;
                height: 150px;
                background-color: #b3e0f2; /* Light blue */
                border-radius: 50%;
                position: absolute;
                top: 50%;
                right: 10%;
                transform: translateY(-50%);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .rounded-instructor {
                border-radius: 20px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                background: linear-gradient(to bottom, #3498db, #2c3e50); /* Vertical gradient */
                position: relative;
                overflow: hidden;
                border: none;
            }

            .instructor-card .card-body {
                padding: 2rem;
            }

            .instructor-card h2 {
                color: #fff;
            }

            .instructor-card p {
                color: #f0f0f0;
            }

            .btn-instructor-primary {
                color: #fff;
                background-color: #2980b9;
                border-color: #2980b9;
            }

            .btn-instructor-primary:hover {
                background-color: #1f6070;
                border-color: #1f6070;
            }

            /* Additional Colors */
            .text-instructor-blue {
                color: #3498db;
            }

            .text-instructor-light {
                color: #e0e0e0;
            }
        </style>


    </div>

    <script>
        // JavaScript to toggle heart icon on click
        document.querySelectorAll('.heart-icon').forEach(function (icon) {
            icon.addEventListener('click', function () {
                this.querySelector('.fa-heart').classList.toggle('far');
                this.querySelector('.fa-heart').classList.toggle('fas');
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
        return "course/cataloguecourse.html.twig";
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
        return array (  397 => 181,  389 => 176,  386 => 175,  384 => 174,  381 => 173,  370 => 170,  363 => 169,  359 => 168,  356 => 167,  348 => 162,  345 => 161,  343 => 160,  331 => 156,  328 => 155,  326 => 154,  322 => 152,  318 => 149,  309 => 145,  299 => 140,  290 => 134,  285 => 132,  277 => 128,  271 => 127,  267 => 125,  263 => 123,  260 => 122,  256 => 121,  248 => 116,  239 => 110,  233 => 107,  229 => 106,  219 => 101,  216 => 100,  213 => 99,  211 => 98,  207 => 96,  202 => 95,  188 => 85,  183 => 81,  173 => 80,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Coursify{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body {
            background-color: #f8f9fa; /* Set the background color to grey */
        }

        .course-title a {
            color: #000; /* Set the default text color */
            transition: color 0.3s; /* Add a smooth color transition effect */
        }

        .course-title a:hover {
            color: #007bff !important; /* Change the text color on hover */
            text-decoration: underline; /* Add an underline on hover */
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }

        .text-center {
            text-align: center;
        }

        h2 {
            color: #3498db;
        }

        p {
            color: #555;
        }

        .tabs__nav {
            background-color: #3498db;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }

        .tabs__link {
            border: none;
            outline: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: #fff;
            background-color: #3498db;
            border-radius: 4px;
        }

        .tabs__link.active {
            background-color: #fff;
            color: #3498db;
        }

        .tab-content {
            display: none;
            padding: 20px;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"container mt-4\">
        <h2 class=\"mb-4\">See Courses</h2>

        {# Search Form #}
        <form class=\"form-inline\" action=\"{{ path('app_course_search') }}\" method=\"GET\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" id=\"searchInput\" name=\"searchInput\" placeholder=\"Search by name\" style=\"max-width: 500px; height: 38px; line-height: 35px; margin-right: 10px;\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-primary mb-2\">Search</button>
                </div>
            </div>
        </form>

        <div class=\"row mt-4\">
            {% for course in courses %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100 border-3\" style=\"border-radius: 15px; overflow: hidden;\">
                        {% set imagePath = asset('uploads/images/' ~ course.image) %}
                        {% set noImagePath = 'No Image' %}

                        <img src=\"{{ course.image ? imagePath : noImagePath }}\" class=\"card-img-top\" alt=\"{{ course.title }}\" style=\"object-fit: cover; height: 200px; border-top-left-radius: 10%; border-top-right-radius: 10%; margin-top: -15px;\">

                        <div class=\"card-body d-flex flex-column\">
                            <div class=\"d-flex align-items-start course-title\">
                                <h5 class=\"card-title flex-grow-1\">
                                    <a href=\"{{ path('app_course_show', {'courseId': course.courseId}) }}\" class=\"text-decoration-none text-dark\">
                                        {{ course.title }}
                                    </a>
                                </h5>
                                <a href=\"#\" class=\"text-decoration-none heart-icon\" data-course-id=\"{{ course.courseId }}\">
                                    <i class=\"far fa-heart text-danger\"></i>
                                    <i class=\"fas fa-heart text-danger\" style=\"display: none;\"></i>
                                </a>
                            </div>

                            <p class=\"card-text\">{{ course.description }}</p>

                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    Rating:
                                    {% for i in range(1, 5) %}
                                        {% if i <= averageRatings[course.courseId] %}
                                            <i class=\"fas fa-star text-warning\"></i>
                                        {% else %}
                                            <i class=\"far fa-star text-warning\"></i>
                                        {% endif %}
                                    {% endfor %}
                                    {{ averageRatings[course.courseId] }}/5
                                </li>

                                <li class=\"list-group-item\">
                                    <i class=\"far fa-clock\" style=\"color: orange;\"></i> {{ random(1, 24) }} hours
                                    <span style=\"margin-left: 10px;\"></span>
                                    <i class=\"fas fa-chalkboard\" style=\"color: blue; margin-left: 5px;\"></i> {{ random(1, 10) }} lectures
                                </li>
                            </ul>
                        </div>

                        <div class=\"card-footer\">
                            <a href=\"{{ path('app_review_show_student', {'courseId': course.courseId}) }}\" class=\"btn btn-success btn-sm\">View Reviews</a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-md-12\">
                    <p>No records found</p>
                </div>
            {% endfor %}
        </div>

        {# Pagination #}
        <div class=\"pagination d-flex flex-column align-items-center mt-4\">
            <div class=\"text-center mb-2\">
                {% set startItem = (currentPage - 1) * perPage + 1 %}
                {% set endItem = (currentPage - 1) * perPage + courses.count %}
                Showing {{ startItem }}-{{ endItem }} of {{ totalResults }} results
            </div>
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_course_indexcatalogue', {'page': currentPage - 1, 'searchInput': searchInput}) }}\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                    {% endif %}

                    {% for page in 1..totalPages %}
                        <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('app_course_indexcatalogue', {'page': page, 'searchInput': searchInput}) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}

                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_course_indexcatalogue', {'page': currentPage + 1, 'searchInput': searchInput}) }}\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
        <br>
        <br>


        <div class=\"container\">
            <div class=\"row\">
                <div class=\"text-center\">
                    <h2 class=\"fs-1 fw-bold\">Most Popular Courses</h2>
                    <p>Choose from hundreds of courses from specialist organizations</p>
                </div>
                <div class=\"col-lg-10 mx-auto\">
                    <div class=\"tabs__nav d-flex justify-content-evenly flex-wrap rounded-3\" style=\"background-color: #ccc; padding: 10px; border-radius: 15px;\">
                        <button class=\"btn nav-link tabs__link active rounded\" data-tab-link=\"1\" data-tab-content=\"web-design\">Web Design</button>
                        <button class=\"btn nav-link tabs__link rounded\" data-tab-link=\"2\" data-tab-content=\"marketing\">Marketing</button>
                        <button class=\"btn nav-link tabs__link rounded\" data-tab-link=\"3\" data-tab-content=\"design\">Design</button>
                    </div>
                </div>
            </div>
        </div>




    <section class=\"instructor py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 position-relative\">
                        <div class=\"position-absolute instructor-circle\"></div>
                        <div class=\"card instructor-card rounded-instructor px-5 py-4\">
                            <div class=\"card-body\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-sm-7 text-white\">
                                        <h2 class=\"fw-bold mb-4 text-instructor-blue\">Become a Teacher!</h2>
                                        <p class=\"mb-4 text-instructor-light\">
                                            Become an expert in your field and inspire others with your knowledge. Take the lead in shaping the future and making a positive impact. Join us on a journey where learning meets passion, and together, let's create a brighter tomorrow.                                        </p>
                                    </div>
                                    <div class=\"col-sm-5 text-lg-end d-flex justify-content-md-end\">
                                        <a href=\"#\" class=\"btn btn-instructor-primary btn-lg\">Start Teaching Today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .instructor-circle {
                width: 150px;
                height: 150px;
                background-color: #b3e0f2; /* Light blue */
                border-radius: 50%;
                position: absolute;
                top: 50%;
                right: 10%;
                transform: translateY(-50%);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .rounded-instructor {
                border-radius: 20px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                background: linear-gradient(to bottom, #3498db, #2c3e50); /* Vertical gradient */
                position: relative;
                overflow: hidden;
                border: none;
            }

            .instructor-card .card-body {
                padding: 2rem;
            }

            .instructor-card h2 {
                color: #fff;
            }

            .instructor-card p {
                color: #f0f0f0;
            }

            .btn-instructor-primary {
                color: #fff;
                background-color: #2980b9;
                border-color: #2980b9;
            }

            .btn-instructor-primary:hover {
                background-color: #1f6070;
                border-color: #1f6070;
            }

            /* Additional Colors */
            .text-instructor-blue {
                color: #3498db;
            }

            .text-instructor-light {
                color: #e0e0e0;
            }
        </style>


    </div>

    <script>
        // JavaScript to toggle heart icon on click
        document.querySelectorAll('.heart-icon').forEach(function (icon) {
            icon.addEventListener('click', function () {
                this.querySelector('.fa-heart').classList.toggle('far');
                this.querySelector('.fa-heart').classList.toggle('fas');
            });
        });
    </script>
{% endblock %}
", "course/cataloguecourse.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\course\\cataloguecourse.html.twig");
    }
}
