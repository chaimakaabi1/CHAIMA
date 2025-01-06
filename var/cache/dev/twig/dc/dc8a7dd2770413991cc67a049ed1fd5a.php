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

/* chatgpt/index.html.twig */
class __TwigTemplate_e5fd835c6ea437947b794e7cff31a2f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "prof/profdashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatgpt/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatgpt/index.html.twig"));

        $this->parent = $this->loadTemplate("prof/profdashboard.html.twig", "chatgpt/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>COURSIFYGPT</title>

        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
            }

            #container {
                max-width: 600px;
                margin: 50px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                text-align: center;
                color: #333;
            }

            form {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }

            label {
                flex: 1;
                margin-right: 10px;
            }

            input {
                flex: 2;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            #container {
                max-width: 800px; /* Adjust the width to your preference */
                margin: 100px auto;
                padding: 20px;
                width: 800px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            button {
                flex: 1;
                padding: 10px;
                background-color: #4caf50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: #45a049;
            }

            .chat-container {
                margin-top: 20px;
            }

            .message {
                margin-bottom: 10px;
                padding: 10px;
                background-color: #e0f7fa;
                border-radius: 4px;
                border: 1px solid #b2ebf2;
            }

            .message strong {
                color: #039be5;
            }
        </style>
    </head>

    <body>
    <div id=\"container\">
        <h1>CoursifyGPT</h1>
        <form id=\"chatForm\" method=\"post\" action=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_chat");
        echo "\">
            <label for=\"text\">Ask a question:</label>
            <input type=\"text\" name=\"text\" id=\"text\" required>
            <button type=\"submit\">Send</button>
        </form>

        ";
        // line 99
        if ((array_key_exists("question", $context) && array_key_exists("response", $context))) {
            // line 100
            echo "            <div class=\"chat-container\">
                <div class=\"message\">
                    <strong>Question:</strong> ";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "
                </div>
                <div class=\"message\">
                    <strong>Response:</strong> ";
            // line 105
            echo twig_escape_filter($this->env, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 109
        echo "    </div>

    <script>
        // Example JavaScript for additional interactivity (you can customize this further)
        document.getElementById('chatForm').addEventListener('submit', function (event) {
            // You can add more interactions here, such as showing a loading spinner
            alert('Question sent! Waiting for a response...');
        });
    </script>
    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "chatgpt/index.html.twig";
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
        return array (  187 => 109,  180 => 105,  174 => 102,  170 => 100,  168 => 99,  159 => 93,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/profdashboard.html.twig' %}

{% block main %}
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>COURSIFYGPT</title>

        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
            }

            #container {
                max-width: 600px;
                margin: 50px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                text-align: center;
                color: #333;
            }

            form {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
            }

            label {
                flex: 1;
                margin-right: 10px;
            }

            input {
                flex: 2;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            #container {
                max-width: 800px; /* Adjust the width to your preference */
                margin: 100px auto;
                padding: 20px;
                width: 800px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            button {
                flex: 1;
                padding: 10px;
                background-color: #4caf50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: #45a049;
            }

            .chat-container {
                margin-top: 20px;
            }

            .message {
                margin-bottom: 10px;
                padding: 10px;
                background-color: #e0f7fa;
                border-radius: 4px;
                border: 1px solid #b2ebf2;
            }

            .message strong {
                color: #039be5;
            }
        </style>
    </head>

    <body>
    <div id=\"container\">
        <h1>CoursifyGPT</h1>
        <form id=\"chatForm\" method=\"post\" action=\"{{ path('send_chat') }}\">
            <label for=\"text\">Ask a question:</label>
            <input type=\"text\" name=\"text\" id=\"text\" required>
            <button type=\"submit\">Send</button>
        </form>

        {% if question is defined and response is defined %}
            <div class=\"chat-container\">
                <div class=\"message\">
                    <strong>Question:</strong> {{ question }}
                </div>
                <div class=\"message\">
                    <strong>Response:</strong> {{ response }}
                </div>
            </div>
        {% endif %}
    </div>

    <script>
        // Example JavaScript for additional interactivity (you can customize this further)
        document.getElementById('chatForm').addEventListener('submit', function (event) {
            // You can add more interactions here, such as showing a loading spinner
            alert('Question sent! Waiting for a response...');
        });
    </script>
    </body>

{% endblock %}
", "chatgpt/index.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\chatgpt\\index.html.twig");
    }
}
