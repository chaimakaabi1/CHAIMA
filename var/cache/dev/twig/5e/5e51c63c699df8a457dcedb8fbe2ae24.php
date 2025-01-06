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

/* prof/profdashboard.html.twig */
class __TwigTemplate_e51737061c5c1316f9d54215aeec6b4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'navbar' => [$this, 'block_navbar'],
            'sidebar' => [$this, 'block_sidebar'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/profdashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/profdashboard.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- plugins:css -->
    ";
        // line 12
        $this->displayBlock('styles', $context, $blocks);
        // line 25
        echo "    <!-- endinject -->

    <link rel=\"shortcut icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/images/favicon.png"), "html", null, true);
        echo "\" />
</head>

<body>

";
        // line 32
        $this->displayBlock('navbar', $context, $blocks);
        // line 216
        echo "    <!-- partial -->
    ";
        // line 217
        $this->displayBlock('sidebar', $context, $blocks);
        // line 366
        echo "

</div>


<!-- plugins:js -->


<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/template.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/Chart.roundedBarCharts.js"), "html", null, true);
        echo "\"></script>
<!-- End custom js for this page-->

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "prof dashboard ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 13
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/feather/feather.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/typicons/typicons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
        <!-- Plugin css for this page -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/select.dataTables.min.css"), "html", null, true);
        echo "\">
        <!-- inject:css -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 33
        echo "

<!-- partial:partials/_navbar.html -->
<nav class=\"navbar default-layout col-lg-12 col-12 p-0 d-flex align-items-top flex-row fixed-top\">
    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
        <div class=\"me-3\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
                <span class=\"icon-menu\"></span>
            </button>
        </div>
        <div>
            <a class=\"navbar-brand brand-logo\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prof");
        echo "\">
                <Coursify></Coursify>
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prof");
        echo "\">
                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/images/logo-mini.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
            </a>
        </div>
    </div>
    <div class=\"navbar-menu-wrapper d-flex align-items-top\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
                <h1 class=\"welcome-text\">Good Morning, <span class=\"text-black fw-bold\">hsan jebri</span></h1>
                <h3 class=\"welcome-sub-text\">Your performance summary this week </h3>
            </li>
        </ul>
        <ul class=\"navbar-nav ms-auto\">
            <li class=\"nav-item dropdown d-none d-lg-block\">
                <a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Category </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
                    <a class=\"dropdown-item py-3\">
                        <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle </p>
                            <p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
                            <p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
                            <p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
                            <p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
                        </div>
                    </a>
                </div>
            </li>
            <li class=\"nav-item d-none d-lg-block\">
                <div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
              <span class=\"input-group-addon input-group-prepend border-right\">
                <span class=\"icon-calendar input-group-text calendar-icon\"></span>
              </span>
                    <input type=\"text\" class=\"form-control\">
                </div>
            </li>
            <li class=\"nav-item\">
                <form class=\"search-form\" action=\"#\">
                    <i class=\"icon-search\"></i>
                    <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
                </form>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"icon-mail icon-lg\"></i>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
                    <a class=\"dropdown-item py-3 border-bottom\">
                        <p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications </p>
                        <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                    </a>
                    <a class=\"dropdown-item preview-item py-3\">
                        <div class=\"preview-thumbnail\">
                            <i class=\"mdi mdi-alert m-auto text-primary\"></i>
                        </div>
                        <div class=\"preview-item-content\">
                            <h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
                            <p class=\"fw-light small-text mb-0\"> Just now </p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item py-3\">
                        <div class=\"preview-thumbnail\">
                            <i class=\"mdi mdi-settings m-auto text-primary\"></i>
                        </div>
                        <div class=\"preview-item-content\">
                            <h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
                            <p class=\"fw-light small-text mb-0\"> Private message </p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item py-3\">
                        <div class=\"preview-thumbnail\">
                            <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
                        </div>
                        <div class=\"preview-item-content\">
                            <h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
                            <p class=\"fw-light small-text mb-0\"> 2 days ago </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"icon-bell\"></i>
                    <span class=\"count\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
                    <a class=\"dropdown-item py-3\">
                        <p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails </p>
                        <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-thumbnail\">
                            <img src=\"images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                        </div>
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">coursify </p>
                            <p class=\"fw-light small-text mb-0\"> The course is cancelled </p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-thumbnail\">
                            <img src=\"images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                        </div>
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">coursify twilio </p>
                            <p class=\"fw-light small-text mb-0\"> course added succesfuly  </p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-thumbnail\">
                            <img src=\"images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                        </div>
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">  mail </p>
                            <p class=\"fw-light small-text mb-0\"> you are logged in </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
                <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img class=\"img-xs rounded-circle\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/hsan.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\"> </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                    <div class=\"dropdown-header text-center\">
                        <img class=\"img-md rounded-circle\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/hsan.jpg"), "html", null, true);
        echo "\" alt=\"Profile image\">
                        <p class=\"mb-1 mt-3 font-weight-semibold\">hsan jebri</p>
                        <p class=\"fw-light text-muted mb-0\">hsan.jebri@gmail.com</p>
                    </div>
                    <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i> My Profile <span class=\"badge badge-pill badge-danger\">1</span></a>
                    <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i> Messages</a>
                    <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i> Activity</a>
                    <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i> FAQ</a>
                    <a class=\"nav-link\" href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">logout</a>
                </div>
            </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
            <span class=\"mdi mdi-menu\"></span>
        </button>
    </div>
</nav>
<!-- partial -->

<div class=\"container-fluid page-body-wrapper\">
    <!-- partial:partials/_settings-panel.html -->
    <div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close ti-close\"></i>
        <!-- Rest of the settings panel content -->
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 217
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 218
        echo "        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prof");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item nav-category\">UI Elements</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">UI Elements</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"ui-basic\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_progresss");
        echo "\">progress</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prof");
        echo "\">Dropdowns</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prof");
        echo "\">Typography</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">COUPON CODE</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
                        <i class=\"menu-icon mdi mdi-card-text-outline\"></i>
                        <span class=\"menu-title\">to do list</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"form-elements\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_random_card");
        echo "\">COUPON CODE</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
                        <i class=\"menu-icon mdi mdi-chart-line\"></i>
                        <span class=\"menu-title\">Charts</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"charts\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 271
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_see_stat");
        echo "\">ChartJs</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
                        <i class=\"menu-icon mdi mdi-table\"></i>
                        <span class=\"menu-title\">review</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"tables\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_see_reviews");
        echo "\">see review</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
                        <i class=\"menu-icon mdi mdi-layers-outline\"></i>
                        <span class=\"menu-title\">MY calender</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"icons\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar");
        echo "\">to do list</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">Pages</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                        <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
                        <span class=\"menu-title\">User Pages</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"auth\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prof_dashboard_profile");
        echo "\">profile</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">chatbot</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                        <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
                        <span class=\"menu-title\">coursify gpt </span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"auth\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 329
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chatgpt");
        echo "\">coursify gpt</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">students</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                        <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
                        <span class=\"menu-title\">my student </span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"auth\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 344
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mystudents");
        echo "\">my student</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">Help</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html\">
                        <i class=\"menu-icon mdi mdi-file-document\"></i>
                        <span class=\"menu-title\">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        ";
        // line 358
        $this->displayBlock('main', $context, $blocks);
        // line 363
        echo "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 358
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 359
        echo "


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "prof/profdashboard.html.twig";
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
        return array (  662 => 359,  652 => 358,  640 => 363,  638 => 358,  621 => 344,  603 => 329,  585 => 314,  567 => 299,  550 => 285,  533 => 271,  516 => 257,  498 => 242,  492 => 239,  486 => 236,  468 => 221,  463 => 218,  453 => 217,  425 => 198,  414 => 190,  408 => 187,  266 => 48,  262 => 47,  256 => 44,  243 => 33,  233 => 32,  221 => 23,  216 => 21,  211 => 19,  207 => 18,  203 => 17,  199 => 16,  195 => 15,  191 => 14,  188 => 13,  178 => 12,  159 => 9,  143 => 393,  139 => 392,  135 => 391,  128 => 387,  124 => 386,  120 => 385,  116 => 384,  109 => 380,  105 => 379,  101 => 378,  94 => 374,  84 => 366,  82 => 217,  79 => 216,  77 => 32,  69 => 27,  65 => 25,  63 => 12,  57 => 9,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/prof_dashboared/dashboard.html.twig #}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}prof dashboard {% endblock %}</title>

    <!-- plugins:css -->
    {% block styles %}

        <link rel=\"stylesheet\" href=\"{{ asset('template_admin/vendors/feather/feather.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('template_admin/vendors/mdi/css/materialdesignicons.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('template_admin/vendors/ti-icons/css/themify-icons.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('template_admin/vendors/typicons/typicons.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('template_admin/vendors/simple-line-icons/css/simple-line-icons.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('template_admin/vendors/css/vendor.bundle.base.css') }}\">
        <!-- Plugin css for this page -->
        <link rel=\"stylesheet\" href=\"{{ asset('template_admin/js/select.dataTables.min.css') }}\">
        <!-- inject:css -->
        <link rel=\"stylesheet\" href=\"{{ asset('template_admin/css/vertical-layout-light/style.css') }}\">
    {% endblock %}
    <!-- endinject -->

    <link rel=\"shortcut icon\" href=\"{{ asset('template_admin/images/favicon.png') }}\" />
</head>

<body>

{% block navbar %}


<!-- partial:partials/_navbar.html -->
<nav class=\"navbar default-layout col-lg-12 col-12 p-0 d-flex align-items-top flex-row fixed-top\">
    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
        <div class=\"me-3\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
                <span class=\"icon-menu\"></span>
            </button>
        </div>
        <div>
            <a class=\"navbar-brand brand-logo\" href=\"{{ path('app_prof') }}\">
                <Coursify></Coursify>
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"{{ path('app_prof') }}\">
                <img src=\"{{ asset('template_admin/images/logo-mini.svg') }}\" alt=\"logo\" />
            </a>
        </div>
    </div>
    <div class=\"navbar-menu-wrapper d-flex align-items-top\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
                <h1 class=\"welcome-text\">Good Morning, <span class=\"text-black fw-bold\">hsan jebri</span></h1>
                <h3 class=\"welcome-sub-text\">Your performance summary this week </h3>
            </li>
        </ul>
        <ul class=\"navbar-nav ms-auto\">
            <li class=\"nav-item dropdown d-none d-lg-block\">
                <a class=\"nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Select Category </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
                    <a class=\"dropdown-item py-3\">
                        <p class=\"mb-0 font-weight-medium float-left\">Select category</p>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Bootstrap Bundle </p>
                            <p class=\"fw-light small-text mb-0\">This is a Bundle featuring 16 unique dashboards</p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">Angular Bundle</p>
                            <p class=\"fw-light small-text mb-0\">Everything you’ll ever need for your Angular projects</p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">VUE Bundle</p>
                            <p class=\"fw-light small-text mb-0\">Bundle of 6 Premium Vue Admin Dashboard</p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">React Bundle</p>
                            <p class=\"fw-light small-text mb-0\">Bundle of 8 Premium React Admin Dashboard</p>
                        </div>
                    </a>
                </div>
            </li>
            <li class=\"nav-item d-none d-lg-block\">
                <div id=\"datepicker-popup\" class=\"input-group date datepicker navbar-date-picker\">
              <span class=\"input-group-addon input-group-prepend border-right\">
                <span class=\"icon-calendar input-group-text calendar-icon\"></span>
              </span>
                    <input type=\"text\" class=\"form-control\">
                </div>
            </li>
            <li class=\"nav-item\">
                <form class=\"search-form\" action=\"#\">
                    <i class=\"icon-search\"></i>
                    <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\" title=\"Search here\">
                </form>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"icon-mail icon-lg\"></i>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
                    <a class=\"dropdown-item py-3 border-bottom\">
                        <p class=\"mb-0 font-weight-medium float-left\">You have 4 new notifications </p>
                        <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                    </a>
                    <a class=\"dropdown-item preview-item py-3\">
                        <div class=\"preview-thumbnail\">
                            <i class=\"mdi mdi-alert m-auto text-primary\"></i>
                        </div>
                        <div class=\"preview-item-content\">
                            <h6 class=\"preview-subject fw-normal text-dark mb-1\">Application Error</h6>
                            <p class=\"fw-light small-text mb-0\"> Just now </p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item py-3\">
                        <div class=\"preview-thumbnail\">
                            <i class=\"mdi mdi-settings m-auto text-primary\"></i>
                        </div>
                        <div class=\"preview-item-content\">
                            <h6 class=\"preview-subject fw-normal text-dark mb-1\">Settings</h6>
                            <p class=\"fw-light small-text mb-0\"> Private message </p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item py-3\">
                        <div class=\"preview-thumbnail\">
                            <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
                        </div>
                        <div class=\"preview-item-content\">
                            <h6 class=\"preview-subject fw-normal text-dark mb-1\">New user registration</h6>
                            <p class=\"fw-light small-text mb-0\"> 2 days ago </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link count-indicator\" id=\"countDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"icon-bell\"></i>
                    <span class=\"count\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"countDropdown\">
                    <a class=\"dropdown-item py-3\">
                        <p class=\"mb-0 font-weight-medium float-left\">You have 7 unread mails </p>
                        <span class=\"badge badge-pill badge-primary float-right\">View all</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-thumbnail\">
                            <img src=\"images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                        </div>
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">coursify </p>
                            <p class=\"fw-light small-text mb-0\"> The course is cancelled </p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-thumbnail\">
                            <img src=\"images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                        </div>
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">coursify twilio </p>
                            <p class=\"fw-light small-text mb-0\"> course added succesfuly  </p>
                        </div>
                    </a>
                    <a class=\"dropdown-item preview-item\">
                        <div class=\"preview-thumbnail\">
                            <img src=\"images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                        </div>
                        <div class=\"preview-item-content flex-grow py-2\">
                            <p class=\"preview-subject ellipsis font-weight-medium text-dark\">  mail </p>
                            <p class=\"fw-light small-text mb-0\"> you are logged in </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class=\"nav-item dropdown d-none d-lg-block user-dropdown\">
                <a class=\"nav-link\" id=\"UserDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img class=\"img-xs rounded-circle\" src=\"{{ asset('uploads/images/hsan.jpg') }}\" alt=\"Profile image\"> </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                    <div class=\"dropdown-header text-center\">
                        <img class=\"img-md rounded-circle\" src=\"{{ asset('uploads/images/hsan.jpg') }}\" alt=\"Profile image\">
                        <p class=\"mb-1 mt-3 font-weight-semibold\">hsan jebri</p>
                        <p class=\"fw-light text-muted mb-0\">hsan.jebri@gmail.com</p>
                    </div>
                    <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-account-outline text-primary me-2\"></i> My Profile <span class=\"badge badge-pill badge-danger\">1</span></a>
                    <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-message-text-outline text-primary me-2\"></i> Messages</a>
                    <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2\"></i> Activity</a>
                    <a class=\"dropdown-item\"><i class=\"dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2\"></i> FAQ</a>
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\">logout</a>
                </div>
            </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-bs-toggle=\"offcanvas\">
            <span class=\"mdi mdi-menu\"></span>
        </button>
    </div>
</nav>
<!-- partial -->

<div class=\"container-fluid page-body-wrapper\">
    <!-- partial:partials/_settings-panel.html -->
    <div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close ti-close\"></i>
        <!-- Rest of the settings panel content -->
    </div>
    {% endblock %}
    <!-- partial -->
    {% block sidebar %}
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_prof') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item nav-category\">UI Elements</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                        <i class=\"menu-icon mdi mdi-floor-plan\"></i>
                        <span class=\"menu-title\">UI Elements</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"ui-basic\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_progresss') }}\">progress</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_prof') }}\">Dropdowns</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_prof') }}\">Typography</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">COUPON CODE</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
                        <i class=\"menu-icon mdi mdi-card-text-outline\"></i>
                        <span class=\"menu-title\">to do list</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"form-elements\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_random_card') }}\">COUPON CODE</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
                        <i class=\"menu-icon mdi mdi-chart-line\"></i>
                        <span class=\"menu-title\">Charts</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"charts\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('prof_see_stat') }}\">ChartJs</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
                        <i class=\"menu-icon mdi mdi-table\"></i>
                        <span class=\"menu-title\">review</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"tables\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('prof_see_reviews') }}\">see review</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
                        <i class=\"menu-icon mdi mdi-layers-outline\"></i>
                        <span class=\"menu-title\">MY calender</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"icons\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_calendar') }}\">to do list</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">Pages</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                        <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
                        <span class=\"menu-title\">User Pages</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"auth\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('prof_dashboard_profile') }}\">profile</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">chatbot</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                        <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
                        <span class=\"menu-title\">coursify gpt </span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"auth\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_chatgpt') }}\">coursify gpt</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">students</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                        <i class=\"menu-icon mdi mdi-account-circle-outline\"></i>
                        <span class=\"menu-title\">my student </span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"auth\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('mystudents') }}\">my student</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item nav-category\">Help</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html\">
                        <i class=\"menu-icon mdi mdi-file-document\"></i>
                        <span class=\"menu-title\">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        {% block main %}



        {% endblock %}


    {% endblock %}


</div>


<!-- plugins:js -->


<script src=\"{{ asset('template_admin/vendors/js/vendor.bundle.base.js') }}\"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src=\"{{ asset('template_admin/vendors/chart.js/Chart.min.js') }}\"></script>
<script src=\"{{ asset('template_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}\"></script>
<script src=\"{{ asset('template_admin/vendors/progressbar.js/progressbar.min.js') }}\"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src=\"{{ asset('template_admin/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('template_admin/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('template_admin/js/template.js') }}\"></script>
<script src=\"{{ asset('template_admin/js/todolist.js') }}\"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src=\"{{ asset('template_admin/js/jquery.cookie.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('template_admin/js/dashboard.js') }}\"></script>
<script src=\"{{ asset('template_admin/js/Chart.roundedBarCharts.js') }}\"></script>
<!-- End custom js for this page-->

</body>
</html>
", "prof/profdashboard.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\prof\\profdashboard.html.twig");
    }
}
