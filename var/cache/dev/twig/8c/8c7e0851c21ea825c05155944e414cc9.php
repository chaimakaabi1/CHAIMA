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

/* reclamation/statistiques_reclamations.html.twig */
class __TwigTemplate_b7112f6435225b08277386bb406cd4d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/statistiques_reclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/statistiques_reclamations.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Graphique des réclamations par objet</title>
    <!-- Include Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <style>
        /* CSS styles for better layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        canvas {
            background-color: #f8f8f8;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class=\"container\">
    <h1>Graphique des réclamations par objet</h1>
    <canvas id=\"reclamationsChart\" width=\"800\" height=\"400\"></canvas>
</div>

<script>
    // Retrieve data from Symfony and store it in a JavaScript variable
    const data = ";
        // line 35
        echo json_encode((isset($context["reclamationsByObject"]) || array_key_exists("reclamationsByObject", $context) ? $context["reclamationsByObject"] : (function () { throw new RuntimeError('Variable "reclamationsByObject" does not exist.', 35, $this->source); })()));
        echo ";

    // Extract labels and values for the chart
    const labels = data.map(item => item.objet);
    const values = data.map(item => item.countObjet);

    // Create a context for the chart
    const ctx = document.getElementById('reclamationsChart').getContext('2d');

    // Create the chart
    const chart = new Chart(ctx, {
        type: 'bar', // Choose the chart type (bar, line, pie, etc.)
        data: {
            labels: labels, // Use labels as chart labels
            datasets: [{
                label: 'Nombre de réclamations par objet',
                data: values, // Use corresponding values
                backgroundColor: 'rgba(75, 192, 192, 0.6)', // Background color
                borderColor: 'rgba(75, 192, 192, 1)', // Border color
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Start y-axis from 0
                }
            }
            // Additional chart configurations if needed
        }
    });
</script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/statistiques_reclamations.html.twig";
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
        return array (  78 => 35,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# statistiques_reclamations.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <title>Graphique des réclamations par objet</title>
    <!-- Include Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <style>
        /* CSS styles for better layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        canvas {
            background-color: #f8f8f8;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class=\"container\">
    <h1>Graphique des réclamations par objet</h1>
    <canvas id=\"reclamationsChart\" width=\"800\" height=\"400\"></canvas>
</div>

<script>
    // Retrieve data from Symfony and store it in a JavaScript variable
    const data = {{ reclamationsByObject | json_encode | raw }};

    // Extract labels and values for the chart
    const labels = data.map(item => item.objet);
    const values = data.map(item => item.countObjet);

    // Create a context for the chart
    const ctx = document.getElementById('reclamationsChart').getContext('2d');

    // Create the chart
    const chart = new Chart(ctx, {
        type: 'bar', // Choose the chart type (bar, line, pie, etc.)
        data: {
            labels: labels, // Use labels as chart labels
            datasets: [{
                label: 'Nombre de réclamations par objet',
                data: values, // Use corresponding values
                backgroundColor: 'rgba(75, 192, 192, 0.6)', // Background color
                borderColor: 'rgba(75, 192, 192, 1)', // Border color
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true // Start y-axis from 0
                }
            }
            // Additional chart configurations if needed
        }
    });
</script>
</body>
</html>
", "reclamation/statistiques_reclamations.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\reclamation\\statistiques_reclamations.html.twig");
    }
}
