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

/* annonce/show.html.twig */
class __TwigTemplate_8d290481570f9b82d4f648357e7fadbd9aed31955207f4cec8a00112cfb1a3e0 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce/show.html.twig", 1);
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

        echo "Annonce";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Annonce</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdAnn</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 13, $this->source); })()), "idAnn", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TitreAnn</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 17, $this->source); })()), "titreAnn", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DescAnn</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 21, $this->source); })()), "descAnn", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pay</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 25, $this->source); })()), "pay", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DdlAnn</th>
                <td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 29, $this->source); })()), "ddlAnn", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 29, $this->source); })()), "ddlAnn", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_edit", ["idAnn" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 36, $this->source); })()), "idAnn", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 38
        echo twig_include($this->env, $context, "annonce/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  137 => 36,  132 => 34,  124 => 29,  117 => 25,  110 => 21,  103 => 17,  96 => 13,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Annonce{% endblock %}


{% block content %}
    <h1>Annonce</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdAnn</th>
                <td>{{ annonce.idAnn }}</td>
            </tr>
            <tr>
                <th>TitreAnn</th>
                <td>{{ annonce.titreAnn }}</td>
            </tr>
            <tr>
                <th>DescAnn</th>
                <td>{{ annonce.descAnn }}</td>
            </tr>
            <tr>
                <th>Pay</th>
                <td>{{ annonce.pay }}</td>
            </tr>
            <tr>
                <th>DdlAnn</th>
                <td>{{ annonce.ddlAnn ? annonce.ddlAnn|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('annonce_index') }}\">back to list</a>

    <a href=\"{{ path('annonce_edit', {'idAnn': annonce.idAnn}) }}\">edit</a>

    {{ include('annonce/_delete_form.html.twig') }}
{% endblock %}
", "annonce/show.html.twig", "C:\\Users\\louay\\Documents\\GitHub\\ArtBox-CrashTest-WEB\\templates\\annonce\\show.html.twig");
    }
}
