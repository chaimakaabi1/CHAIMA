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

/* donation/search.html.twig */
class __TwigTemplate_a976223e06cd210d3d33ddb8635d1407 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "donation/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "donation/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "donation/search.html.twig", 3);
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
        <h1>Search donation</h1>
        <form method=\"get\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_donation_search");
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
        if ( !twig_test_empty((isset($context["donations"]) || array_key_exists("donations", $context) ? $context["donations"] : (function () { throw new RuntimeError('Variable "donations" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "            <!-- Affichage des résultats de la recherche -->
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>NumeroMobile</th>
                    <th>Address</th>
                    <th>CodePostal</th>
                    <th>Montant</th>
                    <th>actions</th>


                </tr>
                </thead>
                <tbody>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["donations"]) || array_key_exists("donations", $context) ? $context["donations"] : (function () { throw new RuntimeError('Variable "donations" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["donation"]) {
                // line 46
                echo "                    <tr>

                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation"], "nom", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation"], "prenom", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation"], "email", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation"], "montant", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                        <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation"], "numeroMobile", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                        <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation"], "address", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation"], "codePostal", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["donation"], "montant", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_donation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["donation"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">edit</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['donation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 64
            echo "            <p>Aucune réclamation trouvée pour ces critères de recherche.</p>
        ";
        }
        // line 66
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
        return "donation/search.html.twig";
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
        return array (  193 => 66,  189 => 64,  184 => 61,  174 => 57,  169 => 55,  165 => 54,  161 => 53,  157 => 52,  153 => 51,  149 => 50,  145 => 49,  141 => 48,  137 => 46,  133 => 45,  113 => 27,  111 => 26,  92 => 10,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/reclamation/search.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Search Results{% endblock %}

{% block content %}
    <div class=\"container my-5\">
        <h1>Search donation</h1>
        <form method=\"get\" action=\"{{ path('app_donation_search') }}\">
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

        {% if donations is not empty %}
            <!-- Affichage des résultats de la recherche -->
            <table class=\"table\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>NumeroMobile</th>
                    <th>Address</th>
                    <th>CodePostal</th>
                    <th>Montant</th>
                    <th>actions</th>


                </tr>
                </thead>
                <tbody>
                {% for donation in donations %}
                    <tr>

                        <td>{{ donation.nom }}</td>
                        <td>{{ donation.prenom }}</td>
                        <td>{{ donation.email }}</td>
                        <td>{{ donation.montant }}</td>
                        <td>{{ donation.numeroMobile }}</td>
                        <td>{{ donation.address }}</td>
                        <td>{{ donation.codePostal }}</td>
                        <td>{{ donation.montant }}</td>
                        <td>
                            <a href=\"{{ path('app_donation_edit', {'id': donation.id}) }}\">edit</a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p>Aucune réclamation trouvée pour ces critères de recherche.</p>
        {% endif %}
    </div>
{% endblock %}", "donation/search.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\donation\\search.html.twig");
    }
}
