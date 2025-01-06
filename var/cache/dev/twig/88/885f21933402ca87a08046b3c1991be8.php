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

/* reclamation/search.html.twig */
class __TwigTemplate_3fec625f76b7385ac12f587198c5a593 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/search.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Search Results";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"container my-5\">
        <h1>Search Reclamations</h1>
        <form method=\"get\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_search");
        echo "\">
            <div class=\"form-group\">
                <label for=\"nom\">Nom:</label>
                <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\">
            </div>
            <div class=\"form-group\">
                <label for=\"prenom\">Prénom:</label>
                <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\">
            </div>
            <div class=\"form-group\">
                <label for=\"numero_mobile\">Numéro Mobile:</label>
                <input type=\"text\" class=\"form-control\" id=\"numero_mobile\" name=\"numero_mobile\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </form>

        ";
        // line 26
        if ( !twig_test_empty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "            <!-- Affichage des résultats de la recherche -->
            <table class=\"table\">
                <thead>
                <tr>

                    <th>NumeroMobile</th>
                    <th>Description</th>
                    <th>Objet</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 43
                echo "                    <tr>

                        <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "numeroMobile", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "objet", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "prenom", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "email", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "status", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">edit</a>
                        </td>

                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 61
            echo "            <p>Aucune réclamation trouvée pour ces critères de recherche.</p>
        ";
        }
        // line 63
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/search.html.twig";
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
        return array (  187 => 63,  183 => 61,  178 => 58,  167 => 53,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  134 => 43,  130 => 42,  113 => 27,  111 => 26,  92 => 10,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/reclamation/search.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Search Results{% endblock %}

{% block content %}
    <div class=\"container my-5\">
        <h1>Search Reclamations</h1>
        <form method=\"get\" action=\"{{ path('app_reclamation_search') }}\">
            <div class=\"form-group\">
                <label for=\"nom\">Nom:</label>
                <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\">
            </div>
            <div class=\"form-group\">
                <label for=\"prenom\">Prénom:</label>
                <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\">
            </div>
            <div class=\"form-group\">
                <label for=\"numero_mobile\">Numéro Mobile:</label>
                <input type=\"text\" class=\"form-control\" id=\"numero_mobile\" name=\"numero_mobile\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </form>

        {% if reclamations is not empty %}
            <!-- Affichage des résultats de la recherche -->
            <table class=\"table\">
                <thead>
                <tr>

                    <th>NumeroMobile</th>
                    <th>Description</th>
                    <th>Objet</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                {% for reclamation in reclamations %}
                    <tr>

                        <td>{{ reclamation.numeroMobile }}</td>
                        <td>{{ reclamation.description }}</td>
                        <td>{{ reclamation.objet }}</td>
                        <td>{{ reclamation.nom }}</td>
                        <td>{{ reclamation.prenom }}</td>
                        <td>{{ reclamation.email }}</td>
                        <td>{{ reclamation.status }}</td>
                        <td>
                            <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\">edit</a>
                        </td>

                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p>Aucune réclamation trouvée pour ces critères de recherche.</p>
        {% endif %}
    </div>
{% endblock %}
", "reclamation/search.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\reclamation\\search.html.twig");
    }
}
