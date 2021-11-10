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

/* user/userinterface.html.twig */
class __TwigTemplate_8f5d2cee2bdeb57146f7dc345984ed9687d37442443c15aefc31571e6f7972e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/userinterface.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/userinterface.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/userinterface.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello UserController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
    <style>
    .table-responsive {
    margin: 30px 0;
    }
    .table-wrapper {
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    min-width: 1000px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    min-width: 100%;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
    }
    .table-title .btn-group {
    float: right;
    }
    .table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
    }
    .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
    }
    .table-title .btn span {
    float: left;
    margin-top: 2px;
    }
    table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
    }
    table.table tr th:first-child {
    width: 60px;
    }
    table.table tr th:last-child {
    width: 100px;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
    }
    table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
    }
    table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
    }
    table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
    }
    table.table td a:hover {
    color: #2196F3;
    }
    table.table td a.edit {
    color: #FFC107;
    }
    table.table td a.delete {
    color: #F44336;
    }
    table.table td i {
    font-size: 19px;
    }
    table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
    }
    .pagination {
    float: right;
    margin: 0 0 5px;
    }
    .pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
    }
    .pagination li a:hover {
    color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
    }
    .pagination li.active a:hover {
    background: #0397d6;
    }
    .pagination li.disabled i {
    color: #ccc;
    }
    .pagination li i {
    font-size: 16px;
    padding-top: 6px
    }
    .hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
    }
    /* Custom checkbox */
    .custom-checkbox {
    position: relative;
    }
    .custom-checkbox input[type=\"checkbox\"] {
    opacity: 0;
    position: absolute;
    margin: 5px 0 0 3px;
    z-index: 9;
    }
    .custom-checkbox label:before{
    width: 18px;
    height: 18px;
    }
    .custom-checkbox label:before {
    content: '';
    margin-right: 10px;
    display: inline-block;
    vertical-align: text-top;
    background: white;
    border: 1px solid #bbb;
    border-radius: 2px;
    box-sizing: border-box;
    z-index: 2;
    }
    .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
    content: '';
    position: absolute;
    left: 6px;
    top: 3px;
    width: 6px;
    height: 11px;
    border: solid #000;
    border-width: 0 3px 3px 0;
    transform: inherit;
    z-index: 3;
    transform: rotateZ(45deg);
    }
    .custom-checkbox input[type=\"checkbox\"]:checked + label:before {
    border-color: #03A9F4;
    background: #03A9F4;
    }
    .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
    border-color: #fff;
    }
    .custom-checkbox input[type=\"checkbox\"]:disabled + label:before {
    color: #b8b8b8;
    cursor: auto;
    box-shadow: none;
    background: #ddd;
    }
    /* Modal styles */
    .modal .modal-dialog {
    max-width: 400px;
    }
    .modal .modal-header, .modal .modal-body, .modal .modal-footer {
    padding: 20px 30px;
    }
    .modal .modal-content {
    border-radius: 3px;
    font-size: 14px;
    }
    .modal .modal-footer {
    background: #ecf0f1;
    border-radius: 0 0 3px 3px;
    }
    .modal .modal-title {
    display: inline-block;
    }
    .modal .form-control {
    border-radius: 2px;
    box-shadow: none;
    border-color: #dddddd;
    }
    .modal textarea.form-control {
    resize: vertical;
    }
    .modal .btn {
    border-radius: 2px;
    min-width: 100px;
    }
    .modal form label {
    font-weight: normal;
    }
    </style>
<div class=\"container-xl\">
    <div class=\"table-responsive\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>Manage <b>Employees</b></h2>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"#addEmployeeModal\" class=\"btn btn-success\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add New Employee</span></a>
                        <a href=\"#deleteEmployeeModal\" class=\"btn btn-danger\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE15C;</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>

                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>
                                <span class=\"custom-checkbox\">
                                    <input type=\"checkbox\" id=\"selectAll\">
                                    <label for=\"selectAll\"></label>
                                </span>
                        </th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Birthday</th>
                        <th>Created user date</th>
                        <th>Last updated user</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 271, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 272
            echo "                        <tr>
                            <td>
                                    <span class=\"custom-checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox1\" name=\"options[]\" value=\"1\">
                                        <label for=\"checkbox1\"></label>
                                    </span>
                            </td>
                            <td>";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 279), "html", null, true);
            echo "</td>
                            <td>";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getFirstName", [], "method", false, false, false, 280), "html", null, true);
            echo "</td>
                            <td>";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getLastName", [], "method", false, false, false, 281), "html", null, true);
            echo "</td>
                            <td>";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 282), "html", null, true);
            echo "</td>
                            <td>";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getNumber", [], "method", false, false, false, 283), "html", null, true);
            echo "</td>
                            <td>";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getUsername", [], "method", false, false, false, 284), "html", null, true);
            echo "</td>
                            <td>";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPassword", [], "method", false, false, false, 285), "html", null, true);
            echo "</td>
                            <td>";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getRole", [], "method", false, false, false, 286), "html", null, true);
            echo "</td>
                            <td>";
            // line 287
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getBirthday", [], "method", false, false, false, 287), "m/d/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 288
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getCreatedDateUser", [], "method", false, false, false, 288), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 289
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getLastUpdatedUser", [], "method", false, false, false, 289), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                                <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                    </tbody>
                </table>

            <div class=\"clearfix\">
                <div class=\"hint-text\">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class=\"pagination\">
                    <li class=\"page-item disabled\"><a href=\"#\">Previous</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                    <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">3</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/userinterface.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 296,  408 => 289,  404 => 288,  400 => 287,  396 => 286,  392 => 285,  388 => 284,  384 => 283,  380 => 282,  376 => 281,  372 => 280,  368 => 279,  359 => 272,  355 => 271,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello UserController!{% endblock %}

{% block body %}
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
    <style>
    .table-responsive {
    margin: 30px 0;
    }
    .table-wrapper {
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    min-width: 1000px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    min-width: 100%;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
    }
    .table-title .btn-group {
    float: right;
    }
    .table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
    }
    .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
    }
    .table-title .btn span {
    float: left;
    margin-top: 2px;
    }
    table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
    }
    table.table tr th:first-child {
    width: 60px;
    }
    table.table tr th:last-child {
    width: 100px;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
    }
    table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
    }
    table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
    }
    table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
    }
    table.table td a:hover {
    color: #2196F3;
    }
    table.table td a.edit {
    color: #FFC107;
    }
    table.table td a.delete {
    color: #F44336;
    }
    table.table td i {
    font-size: 19px;
    }
    table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
    }
    .pagination {
    float: right;
    margin: 0 0 5px;
    }
    .pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
    }
    .pagination li a:hover {
    color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
    }
    .pagination li.active a:hover {
    background: #0397d6;
    }
    .pagination li.disabled i {
    color: #ccc;
    }
    .pagination li i {
    font-size: 16px;
    padding-top: 6px
    }
    .hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
    }
    /* Custom checkbox */
    .custom-checkbox {
    position: relative;
    }
    .custom-checkbox input[type=\"checkbox\"] {
    opacity: 0;
    position: absolute;
    margin: 5px 0 0 3px;
    z-index: 9;
    }
    .custom-checkbox label:before{
    width: 18px;
    height: 18px;
    }
    .custom-checkbox label:before {
    content: '';
    margin-right: 10px;
    display: inline-block;
    vertical-align: text-top;
    background: white;
    border: 1px solid #bbb;
    border-radius: 2px;
    box-sizing: border-box;
    z-index: 2;
    }
    .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
    content: '';
    position: absolute;
    left: 6px;
    top: 3px;
    width: 6px;
    height: 11px;
    border: solid #000;
    border-width: 0 3px 3px 0;
    transform: inherit;
    z-index: 3;
    transform: rotateZ(45deg);
    }
    .custom-checkbox input[type=\"checkbox\"]:checked + label:before {
    border-color: #03A9F4;
    background: #03A9F4;
    }
    .custom-checkbox input[type=\"checkbox\"]:checked + label:after {
    border-color: #fff;
    }
    .custom-checkbox input[type=\"checkbox\"]:disabled + label:before {
    color: #b8b8b8;
    cursor: auto;
    box-shadow: none;
    background: #ddd;
    }
    /* Modal styles */
    .modal .modal-dialog {
    max-width: 400px;
    }
    .modal .modal-header, .modal .modal-body, .modal .modal-footer {
    padding: 20px 30px;
    }
    .modal .modal-content {
    border-radius: 3px;
    font-size: 14px;
    }
    .modal .modal-footer {
    background: #ecf0f1;
    border-radius: 0 0 3px 3px;
    }
    .modal .modal-title {
    display: inline-block;
    }
    .modal .form-control {
    border-radius: 2px;
    box-shadow: none;
    border-color: #dddddd;
    }
    .modal textarea.form-control {
    resize: vertical;
    }
    .modal .btn {
    border-radius: 2px;
    min-width: 100px;
    }
    .modal form label {
    font-weight: normal;
    }
    </style>
<div class=\"container-xl\">
    <div class=\"table-responsive\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>Manage <b>Employees</b></h2>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"#addEmployeeModal\" class=\"btn btn-success\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Add New Employee</span></a>
                        <a href=\"#deleteEmployeeModal\" class=\"btn btn-danger\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE15C;</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>

                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>
                                <span class=\"custom-checkbox\">
                                    <input type=\"checkbox\" id=\"selectAll\">
                                    <label for=\"selectAll\"></label>
                                </span>
                        </th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Birthday</th>
                        <th>Created user date</th>
                        <th>Last updated user</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr>
                            <td>
                                    <span class=\"custom-checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox1\" name=\"options[]\" value=\"1\">
                                        <label for=\"checkbox1\"></label>
                                    </span>
                            </td>
                            <td>{{ user.id }}</td>
                            <td>{{ user.getFirstName() }}</td>
                            <td>{{ user.getLastName() }}</td>
                            <td>{{ user.getEmail() }}</td>
                            <td>{{ user.getNumber() }}</td>
                            <td>{{ user.getUsername() }}</td>
                            <td>{{ user.getPassword() }}</td>
                            <td>{{ user.getRole() }}</td>
                            <td>{{ user.getBirthday()|date(\"m/d/Y\") }}</td>
                            <td>{{ user.getCreatedDateUser()|date('Y-m-d H:i:s') }}</td>
                            <td>{{ user.getLastUpdatedUser()|date('Y-m-d H:i:s') }}</td>
                            <td>
                                <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                                <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

            <div class=\"clearfix\">
                <div class=\"hint-text\">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class=\"pagination\">
                    <li class=\"page-item disabled\"><a href=\"#\">Previous</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                    <li class=\"page-item active\"><a href=\"#\" class=\"page-link\">3</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">4</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">5</a></li>
                    <li class=\"page-item\"><a href=\"#\" class=\"page-link\">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "user/userinterface.html.twig", "C:\\Users\\Mortadha\\Desktop\\Programming\\PiDev\\dev-mastersWEB\\templates\\user\\userinterface.html.twig");
    }
}
