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

/* user/user-form.html.twig */
class __TwigTemplate_cb3bff90bdd3d9c4e06a675eb74be45f562e6610d981df0fbec1c46f34bc7fb6 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user-form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user-form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("material-design-iconic-font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <!-- Font special for pages-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <!-- Vendor CSS-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <div class=\"page-wrapper bg-gra-03 p-t-45 p-b-50\">
        <div class=\"wrapper wrapper--w790\">
            <div class=\"card card-5\">
                <div class=\"card-heading\">
                    <h2 class=\"title\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["form_title"]) || array_key_exists("form_title", $context) ? $context["form_title"] : (function () { throw new RuntimeError('Variable "form_title" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"form-row m-b-55\">
                        <div class=\"name\">Name</div>
                        <div class=\"value\">
                            <div class=\"row row-space\">
                                <div class=\"col-2\">
                                    <div class=\"input-group-desc\">

                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 31, $this->source); })()), "first_name", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "input--style-5"]]);
        echo "

                                        <label class=\"label--desc\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 33, $this->source); })()), "first_name", [], "any", false, false, false, 33), 'label');
        echo "</label>
                                    </div>
                                </div>
                                <div class=\"col-2\">
                                    <div class=\"input-group-desc\">
                                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 38, $this->source); })()), "last_name", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "input--style-5"]]);
        echo "
                                        <label class=\"label--desc\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 39, $this->source); })()), "last_name", [], "any", false, false, false, 39), 'label');
        echo "</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 46, $this->source); })()), "username", [], "any", false, false, false, 46), 'label');
        echo "</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 49, $this->source); })()), "username", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "input--style-5"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), 'label');
        echo "</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "input--style-5"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'label');
        echo "</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "input--style-5"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 70, $this->source); })()), "number", [], "any", false, false, false, 70), 'label');
        echo "</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 73, $this->source); })()), "number", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "input--style-5"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 78, $this->source); })()), "birthday", [], "any", false, false, false, 78), 'label');
        echo "</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 81, $this->source); })()), "birthday", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "input--style-5"]]);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 86, $this->source); })()), "role", [], "any", false, false, false, 86), 'label');
        echo "</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                <div class=\"rs-select2 js-select-simple select--no-search\">
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 90, $this->source); })()), "role", [], "any", false, false, false, 90), 'widget');
        echo "
                                    <div class=\"select-dropdown\"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 98, $this->source); })()), "submit", [], "any", false, false, false, 98), 'row');
        echo "
                    </div>
                    ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_user"]) || array_key_exists("form_user", $context) ? $context["form_user"] : (function () { throw new RuntimeError('Variable "form_user" does not exist.', 100, $this->source); })()), 'form_end');
        echo "
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
        return "user/user-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 100,  233 => 98,  222 => 90,  215 => 86,  207 => 81,  201 => 78,  193 => 73,  187 => 70,  179 => 65,  173 => 62,  165 => 57,  159 => 54,  151 => 49,  145 => 46,  135 => 39,  131 => 38,  123 => 33,  118 => 31,  107 => 23,  101 => 20,  93 => 15,  87 => 12,  83 => 11,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

    <link href=\"{{ asset(\"material-design-iconic-font.css\")}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset(\"font-awesome.min.css\") }}\" rel=\"stylesheet\" media=\"all\">
    <!-- Font special for pages-->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i\" rel=\"stylesheet\">

    <!-- Vendor CSS-->
    <link href=\"{{ asset(\"select2.min.css\") }}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{asset(\"daterangepicker.css\") }}\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
    <link href=\"{{asset(\"main.css\" )}}\" rel=\"stylesheet\" media=\"all\">
    <div class=\"page-wrapper bg-gra-03 p-t-45 p-b-50\">
        <div class=\"wrapper wrapper--w790\">
            <div class=\"card card-5\">
                <div class=\"card-heading\">
                    <h2 class=\"title\">{{ form_title }}</h2>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form_user,{'attr':{'novalidate': 'novalidate'}}) }}
                    <div class=\"form-row m-b-55\">
                        <div class=\"name\">Name</div>
                        <div class=\"value\">
                            <div class=\"row row-space\">
                                <div class=\"col-2\">
                                    <div class=\"input-group-desc\">

                                        {{ form_widget(form_user.first_name,{'attr': {'class': 'input--style-5' }}) }}

                                        <label class=\"label--desc\">{{ form_label(form_user.first_name) }}</label>
                                    </div>
                                </div>
                                <div class=\"col-2\">
                                    <div class=\"input-group-desc\">
                                        {{ form_widget(form_user.last_name,{'attr': {'class': 'input--style-5' }}) }}
                                        <label class=\"label--desc\">{{ form_label(form_user.last_name) }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">{{ form_label(form_user.username) }}</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                {{ form_widget(form_user.username, {'attr': {'class': 'input--style-5' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">{{ form_label(form_user.password) }}</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                {{ form_widget(form_user.password, {'attr': {'class': 'input--style-5' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">{{ form_label(form_user.email) }}</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                {{ form_widget(form_user.email,{'attr': {'class': 'input--style-5' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">{{ form_label(form_user.number) }}</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                {{ form_widget(form_user.number,{'attr': {'class': 'input--style-5' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">{{ form_label(form_user.birthday) }}</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                {{ form_widget(form_user.birthday,{'attr': {'class': 'input--style-5' }}) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"name\">{{ form_label(form_user.role) }}</div>
                        <div class=\"value\">
                            <div class=\"input-group\">
                                <div class=\"rs-select2 js-select-simple select--no-search\">
                                    {{ form_widget(form_user.role) }}
                                    <div class=\"select-dropdown\"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        {{ form_row(form_user.submit) }}
                    </div>
                    {{ form_end (form_user) }}
                </div>
            </div>
        </div>
    </div>




{% endblock %}", "user/user-form.html.twig", "C:\\Users\\Mortadha\\Desktop\\Programming\\PiDev\\dev-mastersWEB\\templates\\user\\user-form.html.twig");
    }
}
