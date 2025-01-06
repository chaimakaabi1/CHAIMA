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

/* reclamation/show.html.twig */
class __TwigTemplate_8e0902c39f55dc521c69f29df6115f4f extends Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard.html.twig", "reclamation/show.html.twig", 1);
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

        echo "Reclamation";
        
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
        echo "    ";
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
    <style>
        /* Custom styles specific to the Reclamation details page */
        .reclamation-details {
            margin-top: 20px;
        }

        .reclamation-details table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .reclamation-details th,
        .reclamation-details td {
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
        }

        .reclamation-details th {
            background-color: #f5f5f5;
        }

        .reclamation-details a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            padding: 8px 16px;
            background-color: #3498db;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .reclamation-details a:hover {
            background-color: #2980b9;
        }

        .reclamation-details .delete-form {
            display: inline-block;
            margin-top: 10px;
        }

        .reclamation-details .delete-button {
            padding: 8px 16px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .reclamation-details .delete-button:hover {
            background-color: #c0392b;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 67
        echo "    <h1>Reclamation</h1>
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive reclamation-details\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
                                    </tr>

                                    <tr>
                                        <th>NumeroMobile</th>
                                        <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 84, $this->source); })()), "numeroMobile", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Objet</th>
                                        <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 92, $this->source); })()), "objet", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Nom</th>
                                        <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Prenom</th>
                                        <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 100, $this->source); })()), "prenom", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 104, $this->source); })()), "email", [], "any", false, false, false, 104), "html", null, true);
        echo "</td>
                                    </tr>


                                    </tbody>
                                </table>

                                <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_reclamation");
        echo "\">Back to list</a>

                                <form class=\"delete-form\" method=\"post\" action=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this reclamation?')\">
                                    <button type=\"submit\" class=\"delete-button\">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "reclamation/show.html.twig";
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
        return array (  241 => 113,  236 => 111,  226 => 104,  219 => 100,  212 => 96,  205 => 92,  198 => 88,  191 => 84,  183 => 79,  169 => 67,  159 => 66,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboard.html.twig' %}

{% block title %}Reclamation{% endblock %}

{% block styles %}
    {{ parent() }}
    <style>
        /* Custom styles specific to the Reclamation details page */
        .reclamation-details {
            margin-top: 20px;
        }

        .reclamation-details table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .reclamation-details th,
        .reclamation-details td {
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
        }

        .reclamation-details th {
            background-color: #f5f5f5;
        }

        .reclamation-details a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            padding: 8px 16px;
            background-color: #3498db;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .reclamation-details a:hover {
            background-color: #2980b9;
        }

        .reclamation-details .delete-form {
            display: inline-block;
            margin-top: 10px;
        }

        .reclamation-details .delete-button {
            padding: 8px 16px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .reclamation-details .delete-button:hover {
            background-color: #c0392b;
        }
    </style>
{% endblock %}

{% block main %}
    <h1>Reclamation</h1>
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"table-responsive reclamation-details\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ reclamation.id }}</td>
                                    </tr>

                                    <tr>
                                        <th>NumeroMobile</th>
                                        <td>{{ reclamation.numeroMobile }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ reclamation.description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Objet</th>
                                        <td>{{ reclamation.objet }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nom</th>
                                        <td>{{ reclamation.nom }}</td>
                                    </tr>
                                    <tr>
                                        <th>Prenom</th>
                                        <td>{{ reclamation.prenom }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ reclamation.email }}</td>
                                    </tr>


                                    </tbody>
                                </table>

                                <a href=\"{{ path('admin_dashboard_reclamation') }}\">Back to list</a>

                                <form class=\"delete-form\" method=\"post\" action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this reclamation?')\">
                                    <button type=\"submit\" class=\"delete-button\">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "reclamation/show.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\reclamation\\show.html.twig");
    }
}
