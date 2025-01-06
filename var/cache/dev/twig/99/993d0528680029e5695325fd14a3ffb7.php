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

/* baseBack.html.twig */
class __TwigTemplate_da503e736cac2b48a8f6cd4985bc63c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--CUSTOM BASIC STYLES-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/basic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!--CUSTOM MAIN STYLES-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

";
        // line 21
        $this->displayBlock('nav', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
</div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "<div id=\"wrapper\">
    <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Visit website </a>
        </div>

        <div class=\"header-right\">
            <!-- Ces liens semblent être des exemples de fonctionnalités fictives -->
            <a href=\"message-task.html\" class=\"btn btn-info\" title=\"New Message\"><b>30 </b><i class=\"fa fa-envelope-o fa-2x\"></i></a>
            <a href=\"message-task.html\" class=\"btn btn-primary\" title=\"New Task\"><b>40 </b><i class=\"fa fa-bars fa-2x\"></i></a>
            <a href=\"login.html\" class=\"btn btn-danger\" title=\"Logout\"><i class=\"fa fa-exclamation-circle fa-2x\"></i></a>
        </div>
    </nav>

    <!-- /. NAV TOP  -->
    <nav class=\"navbar-default navbar-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">
            <ul class=\"nav\" id=\"main-menu\">
                <li>
                    <div class=\"user-img-div\">
                        <img src=\"assets/img/user.png\" class=\"img-thumbnail\" />
                        <div class=\"inner-text\">
                            Jhon Deo Alex
                            <br />
                            <small>Last Login : 2 Weeks Ago </small>
                        </div>
                    </div>
                </li>

                <li>
                    <a class=\"active-menu\" href=\"index.html\"><i class=\"fa fa-dashboard \"></i>Dashboard</a>
                </li>

                <li>
                    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_donation_new");
        echo "\"><i class=\"fa fa-heart\"></i>Donation</a>
                </li>

                <li>
                    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\"><i class=\"fa fa-exclamation-circle\"></i>Reclamation</a>
                </li>

                <!-- Vos autres liens ici -->

            </ul>
        </div>
    </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "        <!-- Votre contenu ici -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseBack.html.twig";
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
        return array (  211 => 77,  201 => 76,  182 => 66,  175 => 62,  141 => 31,  130 => 22,  120 => 21,  105 => 87,  101 => 86,  97 => 85,  92 => 83,  86 => 79,  84 => 76,  81 => 75,  79 => 21,  70 => 15,  65 => 13,  60 => 11,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href=\"{{asset('back/assets/css/bootstrap.css')}}\" rel=\"stylesheet\" />

    <link href=\"{{asset('back/assets/css/font-awesome.css')}}\" rel=\"stylesheet\" />
    <!--CUSTOM BASIC STYLES-->
    <link href=\"{{asset('back/assets/css/basic.css')}}\" rel=\"stylesheet\" />
    <!--CUSTOM MAIN STYLES-->
    <link href=\"{{asset('back/assets/css/custom.css')}}\" rel=\"stylesheet\" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

{% block nav %}
<div id=\"wrapper\">
    <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{path('app_home')}}\">Visit website </a>
        </div>

        <div class=\"header-right\">
            <!-- Ces liens semblent être des exemples de fonctionnalités fictives -->
            <a href=\"message-task.html\" class=\"btn btn-info\" title=\"New Message\"><b>30 </b><i class=\"fa fa-envelope-o fa-2x\"></i></a>
            <a href=\"message-task.html\" class=\"btn btn-primary\" title=\"New Task\"><b>40 </b><i class=\"fa fa-bars fa-2x\"></i></a>
            <a href=\"login.html\" class=\"btn btn-danger\" title=\"Logout\"><i class=\"fa fa-exclamation-circle fa-2x\"></i></a>
        </div>
    </nav>

    <!-- /. NAV TOP  -->
    <nav class=\"navbar-default navbar-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">
            <ul class=\"nav\" id=\"main-menu\">
                <li>
                    <div class=\"user-img-div\">
                        <img src=\"assets/img/user.png\" class=\"img-thumbnail\" />
                        <div class=\"inner-text\">
                            Jhon Deo Alex
                            <br />
                            <small>Last Login : 2 Weeks Ago </small>
                        </div>
                    </div>
                </li>

                <li>
                    <a class=\"active-menu\" href=\"index.html\"><i class=\"fa fa-dashboard \"></i>Dashboard</a>
                </li>

                <li>
                    <a href=\"{{ path('app_donation_new') }}\"><i class=\"fa fa-heart\"></i>Donation</a>
                </li>

                <li>
                    <a href=\"{{ path('app_reclamation_new') }}\"><i class=\"fa fa-exclamation-circle\"></i>Reclamation</a>
                </li>

                <!-- Vos autres liens ici -->

            </ul>
        </div>
    </nav>
    {% endblock %}

    {% block body %}
        <!-- Votre contenu ici -->
    {% endblock %}

    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src=\"{{asset('back/assets/js/jquery-1.10.2.js')}}\"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src=\"{{asset('back/assets/js/bootstrap.js')}}\"></script>
    <script src=\"{{asset('back/assets/js/jquery.metisMenu.js')}}\"></script>
    <script src=\"{{asset('back/assets/js/custom.js')}}\"></script>
</div>
</body>
</html>
", "baseBack.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\baseBack.html.twig");
    }
}
