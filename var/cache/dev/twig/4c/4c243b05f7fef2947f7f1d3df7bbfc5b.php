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

/* back/listPost.html.twig */
class __TwigTemplate_29d1408e16339a12637b2579b81ec048 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/listPost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/listPost.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "back/listPost.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
  

<div id=\"page-wrapper\">
    <div id=\"page-inner\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">List of posts</h1>

            </div>
        </div>
        <!-- /. ROW  -->
      
    
       
          <!--   Kitchen Sink -->
            <div class=\"panel panel-default\">
              
             
                    <div class=\"table-responsive \">
                        <table class=\"table table-striped table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <th>title</th>
                                    <th>Content</th>
                                    <th>created at</th>
                                    <th>created at</th>

                                    <th>likes</th>
                                    <th>dislikes</th>
                                    <th>Student</th>
                                    <th>Instructor</th>
                                    <th>Action</th>



                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 45
            echo "                                <tr>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "content", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "createdAt", [], "any", false, false, false, 48)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "updatedAt", [], "any", false, false, false, 49)), "html", null, true);
            echo "</td>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "likes", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>

                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "dislikes", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "student", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "instructor", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                    <td><a  class=\"btn btn-danger\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"> delete</a>
                                    
                                        <a  class=\"btn btn-info\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\"> Update</a>
                                    </td>


                                </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
             <!-- End  Kitchen Sink -->
        </div>
        </div></div> 

                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/listPost.html.twig";
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
        return array (  166 => 64,  153 => 57,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  131 => 50,  127 => 49,  123 => 48,  119 => 47,  115 => 46,  112 => 45,  108 => 44,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source(" 
 {% extends 'baseBack.html.twig' %}


{% block body %} 
  

<div id=\"page-wrapper\">
    <div id=\"page-inner\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"page-head-line\">List of posts</h1>

            </div>
        </div>
        <!-- /. ROW  -->
      
    
       
          <!--   Kitchen Sink -->
            <div class=\"panel panel-default\">
              
             
                    <div class=\"table-responsive \">
                        <table class=\"table table-striped table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <th>title</th>
                                    <th>Content</th>
                                    <th>created at</th>
                                    <th>created at</th>

                                    <th>likes</th>
                                    <th>dislikes</th>
                                    <th>Student</th>
                                    <th>Instructor</th>
                                    <th>Action</th>



                                </tr>
                            </thead>
                            <tbody>
                                {% for p in posts %}
                                <tr>
                                    <td>{{p.title}}</td>
                                    <td>{{p.content}}</td>
                                    <td>{{p.createdAt|date}}</td>
                                    <td>{{p.updatedAt|date}}</td>
                                    <td>{{p.likes}}</td>

                                    <td>{{p.dislikes}}</td>
                                    <td>{{p.student}}</td>
                                    <td>{{p.instructor}}</td>
                                    <td><a  class=\"btn btn-danger\" href=\"{{path('app_post_delete',{id:p.id})}}\"> delete</a>
                                    
                                        <a  class=\"btn btn-info\" href=\"{{path('app_post_edit',{id:p.id})}}\"> Update</a>
                                    </td>


                                </tr>

                                {% endfor %}
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
             <!-- End  Kitchen Sink -->
        </div>
        </div></div> 

                        {% endblock %}", "back/listPost.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\back\\listPost.html.twig");
    }
}
