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

/* admin/dashboard.html.twig */
class __TwigTemplate_eec77b7334001e0076f1f2028b19eb12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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
        // line 24
        echo "    <!-- endinject -->

    <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/images/favicon.png"), "html", null, true);
        echo "\" />
</head>

<body>

";
        // line 31
        $this->displayBlock('navbar', $context, $blocks);
        // line 75
        echo "    <!-- partial -->
    ";
        // line 76
        $this->displayBlock('sidebar', $context, $blocks);
        // line 163
        echo "
    ";
        // line 164
        $this->displayBlock('main', $context, $blocks);
        // line 169
        echo "
</div>


<!-- plugins:js -->


<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/progressbar.js/progressbar.min.js"), "html", null, true);
        echo "\"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/template.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
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

        echo "Admin dashboard ";
        
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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/feather/feather.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/typicons/typicons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/simple-line-icons/css/simple-line-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
        <!-- Plugin css for this page -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/js/select.dataTables.min.css"), "html", null, true);
        echo "\">
        <!-- inject:css -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 32
        echo "

<!-- partial:partials/_navbar.html -->
<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
        <div class=\"me-3\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
                <span class=\"icon-menu\"></span>
            </button>
        </div>
        <div>
            <a class=\"navbar-brand brand-logo\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                Coursify
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        echo "\">
                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("template_admin/images/logo-mini.svg"), "html", null, true);
        echo "\" alt=\"logo\" />
            </a>
        </div>
    </div>
    <div class=\"navbar-menu-wrapper d-flex align-items-top\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
                <h1 class=\"welcome-text\">Admin Dashboard <span class=\"text-black fw-bold\"></span></h1>
            </li>
        </ul>
        <ul class=\"navbar-nav ms-auto\">

        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\"
                data-bs-toggle=\"offcanvas\">
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

    // line 76
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 77
        echo "    <!-- partial:partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_profile");
        echo "\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">My profile</span>
                </a>
            </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_admins");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Manage admins</span>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_instructors");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Manage instructors</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_students");
        echo "\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Manage students</span>
                    </a>
                </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_index_admin");
        echo "\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">Manage courses</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_postss");
        echo "\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">Manage Posts</span>
                </a>
            </li>

            <li class=\"nav-item\">

                <a class=\"nav-link\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_reclamation");
        echo "\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">Manage Reclamation</span>
                </a>
            </li>
            <li class=\"nav-item\">

                <a class=\"nav-link\" href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistiques_reclamations");
        echo "\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">voir statistique de reclamation</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_donation");
        echo "\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>

                    <span class=\"menu-title\">Manage Donation</span>
                </a>

                    <span class=\"menu-title\">Manage Donation</span></a>

            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cmntt_index");
        echo "\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">Manage Comments</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link icon-logout \" href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">

                    <span class=\"menu-title\">Logout</span>

                </a>
            </li>

        </ul>

    </nav>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 164
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 165
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
        return "admin/dashboard.html.twig";
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
        return array (  454 => 165,  444 => 164,  422 => 151,  413 => 145,  400 => 135,  391 => 129,  381 => 122,  370 => 114,  361 => 108,  352 => 102,  343 => 96,  333 => 89,  323 => 82,  316 => 77,  306 => 76,  268 => 47,  264 => 46,  258 => 43,  245 => 32,  235 => 31,  223 => 22,  218 => 20,  213 => 18,  209 => 17,  205 => 16,  201 => 15,  197 => 14,  192 => 13,  182 => 12,  163 => 9,  147 => 195,  143 => 194,  139 => 193,  132 => 189,  128 => 188,  124 => 187,  120 => 186,  113 => 182,  109 => 181,  105 => 180,  98 => 176,  89 => 169,  87 => 164,  84 => 163,  82 => 76,  79 => 75,  77 => 31,  69 => 26,  65 => 24,  63 => 12,  57 => 9,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/admin_dashboard/dashboard.html.twig #}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Admin dashboard {% endblock %}</title>

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
<nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row\">
    <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-start\">
        <div class=\"me-3\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-bs-toggle=\"minimize\">
                <span class=\"icon-menu\"></span>
            </button>
        </div>
        <div>
            <a class=\"navbar-brand brand-logo\" href=\"{{ path('admin_dashboard') }}\">
                Coursify
            </a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"{{ path('admin_dashboard') }}\">
                <img src=\"{{ asset('template_admin/images/logo-mini.svg') }}\" alt=\"logo\" />
            </a>
        </div>
    </div>
    <div class=\"navbar-menu-wrapper d-flex align-items-top\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item font-weight-semibold d-none d-lg-block ms-0\">
                <h1 class=\"welcome-text\">Admin Dashboard <span class=\"text-black fw-bold\"></span></h1>
            </li>
        </ul>
        <ul class=\"navbar-nav ms-auto\">

        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\"
                data-bs-toggle=\"offcanvas\">
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
    <!-- partial:partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('admin_dashboard_profile') }}\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">My profile</span>
                </a>
            </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('admin_dashboard_admins') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Manage admins</span>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('admin_dashboard_instructors') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Manage instructors</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('admin_dashboard_students') }}\">
                        <i class=\"mdi mdi-grid-large menu-icon\"></i>
                        <span class=\"menu-title\">Manage students</span>
                    </a>
                </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_course_index_admin') }}\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">Manage courses</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('list_postss') }}\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">Manage Posts</span>
                </a>
            </li>

            <li class=\"nav-item\">

                <a class=\"nav-link\" href=\"{{ path('admin_dashboard_reclamation') }}\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">Manage Reclamation</span>
                </a>
            </li>
            <li class=\"nav-item\">

                <a class=\"nav-link\" href=\"{{ path('statistiques_reclamations') }}\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">voir statistique de reclamation</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('admin_dashboard_donation') }}\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>

                    <span class=\"menu-title\">Manage Donation</span>
                </a>

                    <span class=\"menu-title\">Manage Donation</span></a>

            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_cmntt_index') }}\">
                    <i class=\"mdi mdi-grid-large menu-icon\"></i>
                    <span class=\"menu-title\">Manage Comments</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link icon-logout \" href=\"{{ path('app_logout') }}\">

                    <span class=\"menu-title\">Logout</span>

                </a>
            </li>

        </ul>

    </nav>

    {% endblock %}

    {% block main %}



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
", "admin/dashboard.html.twig", "C:\\Users\\KAABI\\OneDrive\\Bureau\\CoursifyWeb\\templates\\admin\\dashboard.html.twig");
    }
}
