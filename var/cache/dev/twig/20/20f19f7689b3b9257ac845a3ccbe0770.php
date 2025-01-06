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

/* home/index.html.twig */
class __TwigTemplate_41b9bf0c9c709333934ee4d416f7db70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Coursify - Home</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\">
</head>

<body>
<!-- Spinner Start -->
<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
    <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
    <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
        <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>Coursify</h2>
    </a>
    <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
            <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
            <a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>
            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"nav-item nav-link\">Login</a>

        </div>
    </div>
    <div class=\"nav-item dropdown\">
        <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Join Now<i class=\"fa fa-arrow-right ms-3\"></i></a>
        <div class=\"dropdown-menu fade-down m-0\">
            <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"dropdown-item\">Join as student</a>
            <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_instructor");
        echo "\" class=\"dropdown-item\">Join as instructor</a>

        </div>
    </div>
</nav>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class=\"container-fluid p-0 mb-5\">
    <div class=\"owl-carousel header-carousel position-relative\">
        <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"img/carousel-1.jpg\" alt=\"\">
            <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                <div class=\"container\">
                    <div class=\"row justify-content-start\">
                        <div class=\"col-sm-10 col-lg-8\">
                            <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                            <h1 class=\"display-3 text-white animated slideInDown\">The Best Online Learning Platform</h1>
                            <p class=\"fs-5 text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                            <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
                            <a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"img/carousel-2.jpg\" alt=\"\">
            <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                <div class=\"container\">
                    <div class=\"row justify-content-start\">
                        <div class=\"col-sm-10 col-lg-8\">
                            <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                            <h1 class=\"display-3 text-white animated slideInDown\">Get Educated Online From Your Home</h1>
                            <p class=\"fs-5 text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                            <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
                            <a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->




<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Quick Link</h4>
                <a class=\"btn btn-link\" href=\"\">About Us</a>
                <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                <a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Contact</h4>
                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                <div class=\"d-flex pt-2\">
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Gallery</h4>
                <div class=\"row g-2 pt-2\">
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                    <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                    <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"copyright\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
                    Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <div class=\"footer-menu\">
                        <a href=\"\">Home</a>
                        <a href=\"\">Cookies</a>
                        <a href=\"\">Help</a>
                        <a href=\"\">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"lib/wow/wow.min.js\"></script>
<script src=\"lib/easing/easing.min.js\"></script>
<script src=\"lib/waypoints/waypoints.min.js\"></script>
<script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

<!-- Template Javascript -->
<script src=\"js/main.js\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  116 => 66,  112 => 65,  102 => 58,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Coursify - Home</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\">
</head>

<body>
<!-- Spinner Start -->
<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
    <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
    <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
        <h2 class=\"m-0 text-primary\"><i class=\"fa fa-book me-3\"></i>Coursify</h2>
    </a>
    <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
            <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
            <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
            <a href=\"courses.html\" class=\"nav-item nav-link\">Courses</a>
            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            <a href=\"{{ path('app_login') }}\" class=\"nav-item nav-link\">Login</a>

        </div>
    </div>
    <div class=\"nav-item dropdown\">
        <a href=\"\" class=\"btn btn-primary py-4 px-lg-5 d-none d-lg-block\">Join Now<i class=\"fa fa-arrow-right ms-3\"></i></a>
        <div class=\"dropdown-menu fade-down m-0\">
            <a href=\"{{ path('app_register') }}\" class=\"dropdown-item\">Join as student</a>
            <a href=\"{{ path('app_register_instructor') }}\" class=\"dropdown-item\">Join as instructor</a>

        </div>
    </div>
</nav>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class=\"container-fluid p-0 mb-5\">
    <div class=\"owl-carousel header-carousel position-relative\">
        <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"img/carousel-1.jpg\" alt=\"\">
            <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                <div class=\"container\">
                    <div class=\"row justify-content-start\">
                        <div class=\"col-sm-10 col-lg-8\">
                            <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                            <h1 class=\"display-3 text-white animated slideInDown\">The Best Online Learning Platform</h1>
                            <p class=\"fs-5 text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                            <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
                            <a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"owl-carousel-item position-relative\">
            <img class=\"img-fluid\" src=\"img/carousel-2.jpg\" alt=\"\">
            <div class=\"position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center\" style=\"background: rgba(24, 29, 56, .7);\">
                <div class=\"container\">
                    <div class=\"row justify-content-start\">
                        <div class=\"col-sm-10 col-lg-8\">
                            <h5 class=\"text-primary text-uppercase mb-3 animated slideInDown\">Best Online Courses</h5>
                            <h1 class=\"display-3 text-white animated slideInDown\">Get Educated Online From Your Home</h1>
                            <p class=\"fs-5 text-white mb-4 pb-2\">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                            <a href=\"\" class=\"btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft\">Read More</a>
                            <a href=\"\" class=\"btn btn-light py-md-3 px-md-5 animated slideInRight\">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->




<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Quick Link</h4>
                <a class=\"btn btn-link\" href=\"\">About Us</a>
                <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                <a class=\"btn btn-link\" href=\"\">FAQs & Help</a>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Contact</h4>
                <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                <div class=\"d-flex pt-2\">
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Gallery</h4>
                <div class=\"row g-2 pt-2\">
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"col-4\">
                        <img class=\"img-fluid bg-light p-1\" src=\"img/course-1.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <h4 class=\"text-white mb-3\">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                    <input class=\"form-control border-0 w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                    <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"copyright\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a><br><br>
                    Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <div class=\"footer-menu\">
                        <a href=\"\">Home</a>
                        <a href=\"\">Cookies</a>
                        <a href=\"\">Help</a>
                        <a href=\"\">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"lib/wow/wow.min.js\"></script>
<script src=\"lib/easing/easing.min.js\"></script>
<script src=\"lib/waypoints/waypoints.min.js\"></script>
<script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>

<!-- Template Javascript -->
<script src=\"js/main.js\"></script>
</body>

</html>", "home/index.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\home\\index.html.twig");
    }
}
