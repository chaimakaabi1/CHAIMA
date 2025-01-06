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

/* prof/progress.html.twig */
class __TwigTemplate_4cf9e98e2230287d6e3b0f09f52f0d5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/progress.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prof/progress.html.twig"));

        $this->parent = $this->loadTemplate("prof/profdashboard.html.twig", "prof/progress.html.twig", 1);
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

        // line 4
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"home-tab\">
                        <div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Audiences</a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Demographics</a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">More</a>
                                </li>
                            </ul>
                            <div>
                                <div class=\"btn-wrapper\">
                                    <a href=\"#\" class=\"btn btn-otline-dark align-items-center\"><i class=\"icon-share\"></i> Share</a>
                                    <a href=\"#\" class=\"btn btn-otline-dark\"><i class=\"icon-printer\"></i> Print</a>
                                    <a href=\"#\" class=\"btn btn-primary text-white me-0\"><i class=\"icon-download\"></i> Export</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-content tab-content-basic\">
                            <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">

                                <div class=\"row\">
                                    <div class=\"col-lg-8 d-flex flex-column\">
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                            <div>
                                                                <h4 class=\"card-title card-title-dash\">coursify Overview</h4>
                                                                <p class=\"card-subtitle card-subtitle-dash\">voici votre statistique progress pour cette mois</p>
                                                            </div>
                                                            <div>
                                                                <div class=\"dropdown\">
                                                                    <button class=\"btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> This month </button>
                                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\" style=\"\">
                                                                        <h6 class=\"dropdown-header\">Settings</h6>
                                                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                                                        <div class=\"dropdown-divider\"></div>
                                                                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"d-sm-flex align-items-center mt-1 justify-content-between\">
                                                            <div class=\"d-sm-flex align-items-center mt-4 justify-content-between\"><h2 class=\"me-2 fw-bold\">\$36</h2><h4 class=\"me-2\">USD</h4><h4 class=\"text-success\">(+1.37%)</h4></div>
                                                            <div class=\"me-3\"><div id=\"marketingOverview-legend\"><ul>

                                                                        <li>
                                                                            <span style=\"background-color: #1F3BB3\"></span>
                                                                            This week
                                                                        </li>
                                                                    </ul></div></div>
                                                        </div>
                                                        <div class=\"chartjs-bar-wrapper mt-3\">
                                                            <canvas id=\"marketingOverview\" width=\"850\" height=\"187\" style=\"display: block; box-sizing: border-box; height: 149.6px; width: 680px;\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                            <div>
                                                                <h4 class=\"card-title card-title-dash\">liste des etudiants</h4>
                                                                <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                            </div>
                                                            <div>
                                                                <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\">
                                                                    <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mystudents");
        echo "\" class=\"text-white\">
                                                                        <i class=\"mdi mdi-account-plus\"></i> Add new member
                                                                    </a>
                                                                </button>                                                            </div>
                                                        </div>
                                                        <div class=\"table-responsive  mt-1\">
                                                            <table class=\"table select-table\">
                                                                <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </th>
                                                                    <th>etudiant</th>
                                                                    <th>etablissment</th>
                                                                    <th>Progress</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex \">
                                                                            <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/aziz.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                                            <div>
                                                                                <h6>aziz ghanmi</h6>
                                                                                <p> software engineer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>esprit</h6>
                                                                        <p>esprit bloc g</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">79%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 85%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-warning\">In progress</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex\">
                                                                            <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/hsan.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                                            <div>
                                                                                <h6>hsan jebri</h6>
                                                                                <p> software engineer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>esprit</h6>
                                                                        <p>esprit</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">65%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-warning\">In progress</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex\">
                                                                            <img  src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/manel.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                                            <div>
                                                                                <h6>manel jouili</h6>
                                                                                <p>software engineer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>tekup</h6>
                                                                        <p>tekup </p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">65%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 38%\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-warning\">In progress</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex\">
                                                                            <img  src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/aymen.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                                            <div>
                                                                                <h6>aymen khiari</h6>
                                                                                <p>responsable </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>seasame </h6>
                                                                        <p>seasame </p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">65%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-danger\">Pending</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex\">
                                                                            <img  src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/aymen.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                                            <div>
                                                                                <h6>wissem zarrami</h6>
                                                                                <p>etudiant</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>prepa </h6>
                                                                        <p>ipeib</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">65%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-success\">Completed</div></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body card-rounded\">
                                                        <h4 class=\"card-title  card-title-dash\">Recent Events</h4>
                                                        <div class=\"list align-items-center border-bottom py-2\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-2 font-weight-medium\">
                                                                    Change in Directors
                                                                </p>
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <i class=\"mdi mdi-calendar text-muted me-1\"></i>
                                                                        <p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"list align-items-center border-bottom py-2\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-2 font-weight-medium\">
                                                                    Other Events
                                                                </p>
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <i class=\"mdi mdi-calendar text-muted me-1\"></i>
                                                                        <p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"list align-items-center border-bottom py-2\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-2 font-weight-medium\">
                                                                    Quarterly Report
                                                                </p>
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <i class=\"mdi mdi-calendar text-muted me-1\"></i>
                                                                        <p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"list align-items-center border-bottom py-2\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-2 font-weight-medium\">
                                                                    Change in Directors
                                                                </p>
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <i class=\"mdi mdi-calendar text-muted me-1\"></i>
                                                                        <p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"list align-items-center pt-3\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-0\">
                                                                    <a href=\"";
        // line 348
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_index");
        echo "\" class=\"btn btn-primary fw-bold\">Show all <i class=\"mdi mdi-arrow-right ms-2\"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                                            <h4 class=\"card-title card-title-dash\">Activities</h4>
                                                            <p class=\"mb-0\">20 finished, 5 remaining</p>
                                                        </div>
                                                        <ul class=\"bullet-line-list\">
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Ben Tossell</span> assign you a task</div>
                                                                    <p>Just now</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Oliver Noah</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Jack William</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Leo Lucas</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Thomas Henry</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Ben Tossell</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Ben Tossell</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class=\"list align-items-center pt-3\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-0\">
                                                                    <a href=\"#\" class=\"fw-bold text-primary\">Show all <i class=\"mdi mdi-arrow-right ms-2\"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 d-flex flex-column\">
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <h4 class=\"card-title card-title-dash\">Todo list</h4>
                                                                    <div class=\"add-items d-flex mb-0\">
                                                                        <!-- <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"What do you need to do today?\"> -->
                                                                        <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p\"><i class=\"mdi mdi-plus\"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-wrapper\">
                                                                    <ul class=\"todo-list todo-list-rounded\">
                                                                        <li class=\"d-block\">
                                                                            <div class=\"form-check w-100\">
                                                                                <label class=\"form-check-label\">
                                                                                    <input class=\"checkbox\" type=\"checkbox\"> course java et spring framework at 7:pm <i class=\"input-helper rounded\"></i>
                                                                                    <i class=\"input-helper\"></i></label>
                                                                                <div class=\"d-flex mt-2\">
                                                                                    <div class=\"ps-4 text-small me-3\">12 decembre 2023</div>
                                                                                    <div class=\"badge badge-opacity-warning me-3\">Due tomorrow</div>
                                                                                    <i class=\"mdi mdi-flag ms-2 flag-color\"></i>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"d-block\">
                                                                            <div class=\"form-check w-100\">
                                                                                <label class=\"form-check-label\">
                                                                                    <input class=\"checkbox\" type=\"checkbox\"> validation de l 'integration<i class=\"input-helper rounded\"></i>
                                                                                    <i class=\"input-helper\"></i></label>
                                                                                <div class=\"d-flex mt-2\">
                                                                                    <div class=\"ps-4 text-small me-3\">12 decembre 2023</div>
                                                                                    <div class=\"badge badge-opacity-success me-3\">Done</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class=\"form-check w-100\">
                                                                                <label class=\"form-check-label\">
                                                                                    <input class=\"checkbox\" type=\"checkbox\"> a good epesido of jujutsu kaisen<i class=\"input-helper rounded\"></i>
                                                                                    <i class=\"input-helper\"></i></label>
                                                                                <div class=\"d-flex mt-2\">
                                                                                    <div class=\"ps-4 text-small me-3\">12 decembre 2023</div>
                                                                                    <div class=\"badge badge-opacity-success me-3\">Done</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"border-bottom-0\">
                                                                            <div class=\"form-check w-100\">
                                                                                <label class=\"form-check-label\">
                                                                                    <input class=\"checkbox\" type=\"checkbox\"> validation des api <i class=\"input-helper rounded\"></i>
                                                                                    <i class=\"input-helper\"></i></label>
                                                                                <div class=\"d-flex mt-2\">
                                                                                    <div class=\"ps-4 text-small me-3\">24 June 2020</div>
                                                                                    <div class=\"badge badge-opacity-danger me-3\">Expired</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                                    <h4 class=\"card-title card-title-dash\">Type By Amount</h4>
                                                                </div>
                                                                <div>
                                                                    <div class=\"card card-rounded\">
                                                                        <div class=\"card-body\">
                                                                            <div class=\"row\">

                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">Leave Report</h4>
                                                                    </div>
                                                                    <div>
                                                                        <div class=\"dropdown\">
                                                                            <button class=\"btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton3\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> Month Wise </button>
                                                                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton3\">
                                                                                <h6 class=\"dropdown-header\">week Wise</h6>
                                                                                <a class=\"dropdown-item\" href=\"#\">Year Wise</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"mt-3\">
                                                                    <canvas id=\"leaveReport\" width=\"376\" height=\"187\" style=\"display: block; box-sizing: border-box; height: 149.6px; width: 300.8px;\"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">Top Performer</h4>
                                                                    </div>
                                                                </div>
                                                                <div class=\"mt-3\">
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face1.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Brandon Washington</p>
                                                                                <small class=\"text-muted mb-0\">162543</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face2.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Wayne Murphy</p>
                                                                                <small class=\"text-muted mb-0\">162543</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face3.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Katherine Butler</p>
                                                                                <small class=\"text-muted mb-0\">162543</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face4.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Matthew Bailey</p>
                                                                                <small class=\"text-muted mb-0\">162543</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between pt-2\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face5.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Rafell John</p>
                                                                                <small class=\"text-muted mb-0\">Alaska, USA</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
            <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a> from BootstrapDash.</span>
                <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
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
        return "prof/progress.html.twig";
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
        return array (  450 => 348,  355 => 256,  319 => 223,  283 => 190,  247 => 157,  211 => 124,  177 => 93,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'prof/profdashboard.html.twig' %}

{% block title %}

{% endblock %}

{% block main %}

    <div class=\"main-panel\">
        <div class=\"content-wrapper\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"home-tab\">
                        <div class=\"d-sm-flex align-items-center justify-content-between border-bottom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link active ps-0\" id=\"home-tab\" data-bs-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\" aria-selected=\"true\">Overview</a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\" href=\"#audiences\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Audiences</a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link\" id=\"contact-tab\" data-bs-toggle=\"tab\" href=\"#demographics\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Demographics</a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link border-0\" id=\"more-tab\" data-bs-toggle=\"tab\" href=\"#more\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">More</a>
                                </li>
                            </ul>
                            <div>
                                <div class=\"btn-wrapper\">
                                    <a href=\"#\" class=\"btn btn-otline-dark align-items-center\"><i class=\"icon-share\"></i> Share</a>
                                    <a href=\"#\" class=\"btn btn-otline-dark\"><i class=\"icon-printer\"></i> Print</a>
                                    <a href=\"#\" class=\"btn btn-primary text-white me-0\"><i class=\"icon-download\"></i> Export</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-content tab-content-basic\">
                            <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview\">

                                <div class=\"row\">
                                    <div class=\"col-lg-8 d-flex flex-column\">
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                            <div>
                                                                <h4 class=\"card-title card-title-dash\">coursify Overview</h4>
                                                                <p class=\"card-subtitle card-subtitle-dash\">voici votre statistique progress pour cette mois</p>
                                                            </div>
                                                            <div>
                                                                <div class=\"dropdown\">
                                                                    <button class=\"btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> This month </button>
                                                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton2\" style=\"\">
                                                                        <h6 class=\"dropdown-header\">Settings</h6>
                                                                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                                                                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                                                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                                                        <div class=\"dropdown-divider\"></div>
                                                                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"d-sm-flex align-items-center mt-1 justify-content-between\">
                                                            <div class=\"d-sm-flex align-items-center mt-4 justify-content-between\"><h2 class=\"me-2 fw-bold\">\$36</h2><h4 class=\"me-2\">USD</h4><h4 class=\"text-success\">(+1.37%)</h4></div>
                                                            <div class=\"me-3\"><div id=\"marketingOverview-legend\"><ul>

                                                                        <li>
                                                                            <span style=\"background-color: #1F3BB3\"></span>
                                                                            This week
                                                                        </li>
                                                                    </ul></div></div>
                                                        </div>
                                                        <div class=\"chartjs-bar-wrapper mt-3\">
                                                            <canvas id=\"marketingOverview\" width=\"850\" height=\"187\" style=\"display: block; box-sizing: border-box; height: 149.6px; width: 680px;\"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-sm-flex justify-content-between align-items-start\">
                                                            <div>
                                                                <h4 class=\"card-title card-title-dash\">liste des etudiants</h4>
                                                                <p class=\"card-subtitle card-subtitle-dash\">You have 50+ new requests</p>
                                                            </div>
                                                            <div>
                                                                <button class=\"btn btn-primary btn-lg text-white mb-0 me-0\" type=\"button\">
                                                                    <a href=\"{{ path('mystudents') }}\" class=\"text-white\">
                                                                        <i class=\"mdi mdi-account-plus\"></i> Add new member
                                                                    </a>
                                                                </button>                                                            </div>
                                                        </div>
                                                        <div class=\"table-responsive  mt-1\">
                                                            <table class=\"table select-table\">
                                                                <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </th>
                                                                    <th>etudiant</th>
                                                                    <th>etablissment</th>
                                                                    <th>Progress</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex \">
                                                                            <img src=\"{{ asset('uploads/aziz.jpg') }}\" alt=\"\">
                                                                            <div>
                                                                                <h6>aziz ghanmi</h6>
                                                                                <p> software engineer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>esprit</h6>
                                                                        <p>esprit bloc g</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">79%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 85%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-warning\">In progress</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex\">
                                                                            <img src=\"{{ asset('uploads/images/hsan.jpg') }}\" alt=\"\">
                                                                            <div>
                                                                                <h6>hsan jebri</h6>
                                                                                <p> software engineer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>esprit</h6>
                                                                        <p>esprit</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">65%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-warning\">In progress</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex\">
                                                                            <img  src=\"{{ asset('uploads/images/manel.jpg') }}\" alt=\"\">
                                                                            <div>
                                                                                <h6>manel jouili</h6>
                                                                                <p>software engineer</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>tekup</h6>
                                                                        <p>tekup </p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">65%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 38%\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-warning\">In progress</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex\">
                                                                            <img  src=\"{{ asset('uploads/images/aymen.jpg') }}\" alt=\"\">
                                                                            <div>
                                                                                <h6>aymen khiari</h6>
                                                                                <p>responsable </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>seasame </h6>
                                                                        <p>seasame </p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">65%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 15%\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-danger\">Pending</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class=\"form-check form-check-flat mt-0\">
                                                                            <label class=\"form-check-label\">
                                                                                <input type=\"checkbox\" class=\"form-check-input\" aria-checked=\"false\"><i class=\"input-helper\"></i><i class=\"input-helper\"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class=\"d-flex\">
                                                                            <img  src=\"{{ asset('uploads/images/aymen.jpg') }}\" alt=\"\">
                                                                            <div>
                                                                                <h6>wissem zarrami</h6>
                                                                                <p>etudiant</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>prepa </h6>
                                                                        <p>ipeib</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class=\"d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap\">
                                                                                <p class=\"text-success\">65%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class=\"progress progress-md\">
                                                                                <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class=\"badge badge-opacity-success\">Completed</div></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body card-rounded\">
                                                        <h4 class=\"card-title  card-title-dash\">Recent Events</h4>
                                                        <div class=\"list align-items-center border-bottom py-2\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-2 font-weight-medium\">
                                                                    Change in Directors
                                                                </p>
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <i class=\"mdi mdi-calendar text-muted me-1\"></i>
                                                                        <p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"list align-items-center border-bottom py-2\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-2 font-weight-medium\">
                                                                    Other Events
                                                                </p>
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <i class=\"mdi mdi-calendar text-muted me-1\"></i>
                                                                        <p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"list align-items-center border-bottom py-2\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-2 font-weight-medium\">
                                                                    Quarterly Report
                                                                </p>
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <i class=\"mdi mdi-calendar text-muted me-1\"></i>
                                                                        <p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"list align-items-center border-bottom py-2\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-2 font-weight-medium\">
                                                                    Change in Directors
                                                                </p>
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <div class=\"d-flex align-items-center\">
                                                                        <i class=\"mdi mdi-calendar text-muted me-1\"></i>
                                                                        <p class=\"mb-0 text-small text-muted\">Mar 14, 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"list align-items-center pt-3\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-0\">
                                                                    <a href=\"{{ path('app_review_index') }}\" class=\"btn btn-primary fw-bold\">Show all <i class=\"mdi mdi-arrow-right ms-2\"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 col-lg-6 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                                            <h4 class=\"card-title card-title-dash\">Activities</h4>
                                                            <p class=\"mb-0\">20 finished, 5 remaining</p>
                                                        </div>
                                                        <ul class=\"bullet-line-list\">
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Ben Tossell</span> assign you a task</div>
                                                                    <p>Just now</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Oliver Noah</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Jack William</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Leo Lucas</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Thomas Henry</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Ben Tossell</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=\"d-flex justify-content-between\">
                                                                    <div><span class=\"text-light-green\">Ben Tossell</span> assign you a task</div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class=\"list align-items-center pt-3\">
                                                            <div class=\"wrapper w-100\">
                                                                <p class=\"mb-0\">
                                                                    <a href=\"#\" class=\"fw-bold text-primary\">Show all <i class=\"mdi mdi-arrow-right ms-2\"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 d-flex flex-column\">
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                                    <h4 class=\"card-title card-title-dash\">Todo list</h4>
                                                                    <div class=\"add-items d-flex mb-0\">
                                                                        <!-- <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"What do you need to do today?\"> -->
                                                                        <button class=\"add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p\"><i class=\"mdi mdi-plus\"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class=\"list-wrapper\">
                                                                    <ul class=\"todo-list todo-list-rounded\">
                                                                        <li class=\"d-block\">
                                                                            <div class=\"form-check w-100\">
                                                                                <label class=\"form-check-label\">
                                                                                    <input class=\"checkbox\" type=\"checkbox\"> course java et spring framework at 7:pm <i class=\"input-helper rounded\"></i>
                                                                                    <i class=\"input-helper\"></i></label>
                                                                                <div class=\"d-flex mt-2\">
                                                                                    <div class=\"ps-4 text-small me-3\">12 decembre 2023</div>
                                                                                    <div class=\"badge badge-opacity-warning me-3\">Due tomorrow</div>
                                                                                    <i class=\"mdi mdi-flag ms-2 flag-color\"></i>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"d-block\">
                                                                            <div class=\"form-check w-100\">
                                                                                <label class=\"form-check-label\">
                                                                                    <input class=\"checkbox\" type=\"checkbox\"> validation de l 'integration<i class=\"input-helper rounded\"></i>
                                                                                    <i class=\"input-helper\"></i></label>
                                                                                <div class=\"d-flex mt-2\">
                                                                                    <div class=\"ps-4 text-small me-3\">12 decembre 2023</div>
                                                                                    <div class=\"badge badge-opacity-success me-3\">Done</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class=\"form-check w-100\">
                                                                                <label class=\"form-check-label\">
                                                                                    <input class=\"checkbox\" type=\"checkbox\"> a good epesido of jujutsu kaisen<i class=\"input-helper rounded\"></i>
                                                                                    <i class=\"input-helper\"></i></label>
                                                                                <div class=\"d-flex mt-2\">
                                                                                    <div class=\"ps-4 text-small me-3\">12 decembre 2023</div>
                                                                                    <div class=\"badge badge-opacity-success me-3\">Done</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class=\"border-bottom-0\">
                                                                            <div class=\"form-check w-100\">
                                                                                <label class=\"form-check-label\">
                                                                                    <input class=\"checkbox\" type=\"checkbox\"> validation des api <i class=\"input-helper rounded\"></i>
                                                                                    <i class=\"input-helper\"></i></label>
                                                                                <div class=\"d-flex mt-2\">
                                                                                    <div class=\"ps-4 text-small me-3\">24 June 2020</div>
                                                                                    <div class=\"badge badge-opacity-danger me-3\">Expired</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                                    <h4 class=\"card-title card-title-dash\">Type By Amount</h4>
                                                                </div>
                                                                <div>
                                                                    <div class=\"card card-rounded\">
                                                                        <div class=\"card-body\">
                                                                            <div class=\"row\">

                                                                            </div>
                                                                        </div>
                                                                    </div>                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">Leave Report</h4>
                                                                    </div>
                                                                    <div>
                                                                        <div class=\"dropdown\">
                                                                            <button class=\"btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0\" type=\"button\" id=\"dropdownMenuButton3\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> Month Wise </button>
                                                                            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton3\">
                                                                                <h6 class=\"dropdown-header\">week Wise</h6>
                                                                                <a class=\"dropdown-item\" href=\"#\">Year Wise</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"mt-3\">
                                                                    <canvas id=\"leaveReport\" width=\"376\" height=\"187\" style=\"display: block; box-sizing: border-box; height: 149.6px; width: 300.8px;\"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row flex-grow\">
                                            <div class=\"col-12 grid-margin stretch-card\">
                                                <div class=\"card card-rounded\">
                                                    <div class=\"card-body\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                                    <div>
                                                                        <h4 class=\"card-title card-title-dash\">Top Performer</h4>
                                                                    </div>
                                                                </div>
                                                                <div class=\"mt-3\">
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face1.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Brandon Washington</p>
                                                                                <small class=\"text-muted mb-0\">162543</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face2.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Wayne Murphy</p>
                                                                                <small class=\"text-muted mb-0\">162543</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face3.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Katherine Butler</p>
                                                                                <small class=\"text-muted mb-0\">162543</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face4.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Matthew Bailey</p>
                                                                                <small class=\"text-muted mb-0\">162543</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"wrapper d-flex align-items-center justify-content-between pt-2\">
                                                                        <div class=\"d-flex\">
                                                                            <img class=\"img-sm rounded-10\" src=\"../../images/faces/face5.jpg\" alt=\"profile\">
                                                                            <div class=\"wrapper ms-3\">
                                                                                <p class=\"ms-1 mb-1 fw-bold\">Rafell John</p>
                                                                                <small class=\"text-muted mb-0\">Alaska, USA</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"text-muted text-small\">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
            <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Premium <a href=\"https://www.bootstrapdash.com/\" target=\"_blank\">Bootstrap admin template</a> from BootstrapDash.</span>
                <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Copyright © 2021. All rights reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
{% endblock %}

", "prof/progress.html.twig", "C:\\Users\\hassa\\Videos\\CoursifyWeb\\templates\\prof\\progress.html.twig");
    }
}
