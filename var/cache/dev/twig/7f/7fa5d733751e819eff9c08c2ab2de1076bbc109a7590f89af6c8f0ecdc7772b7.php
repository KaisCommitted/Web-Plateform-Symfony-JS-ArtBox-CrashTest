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

/* signalisation/show.html.twig */
class __TwigTemplate_8e1753e0da9b4d586958c707f6d6861e4938714621b453d97a743585548069c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalisation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalisation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "signalisation/show.html.twig", 1);
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

        echo "Signalisation";
        
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
        echo "    <h1>Signalisation</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdSignal</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["signalisation"]) || array_key_exists("signalisation", $context) ? $context["signalisation"] : (function () { throw new RuntimeError('Variable "signalisation" does not exist.', 13, $this->source); })()), "idSignal", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ContenuSignal</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["signalisation"]) || array_key_exists("signalisation", $context) ? $context["signalisation"] : (function () { throw new RuntimeError('Variable "signalisation" does not exist.', 17, $this->source); })()), "contenuSignal", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TypeSignal</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["signalisation"]) || array_key_exists("signalisation", $context) ? $context["signalisation"] : (function () { throw new RuntimeError('Variable "signalisation" does not exist.', 21, $this->source); })()), "typeSignal", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>EtatSignal</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["signalisation"]) || array_key_exists("signalisation", $context) ? $context["signalisation"] : (function () { throw new RuntimeError('Variable "signalisation" does not exist.', 25, $this->source); })()), "etatSignal", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateSignal</th>
                <td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["signalisation"]) || array_key_exists("signalisation", $context) ? $context["signalisation"] : (function () { throw new RuntimeError('Variable "signalisation" does not exist.', 29, $this->source); })()), "dateSignal", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["signalisation"]) || array_key_exists("signalisation", $context) ? $context["signalisation"] : (function () { throw new RuntimeError('Variable "signalisation" does not exist.', 29, $this->source); })()), "dateSignal", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalisation_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalisation_edit", ["idSignal" => twig_get_attribute($this->env, $this->source, (isset($context["signalisation"]) || array_key_exists("signalisation", $context) ? $context["signalisation"] : (function () { throw new RuntimeError('Variable "signalisation" does not exist.', 36, $this->source); })()), "idSignal", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 38
        echo twig_include($this->env, $context, "signalisation/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "signalisation/show.html.twig";
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

{% block title %}Signalisation{% endblock %}


{% block content %}
    <h1>Signalisation</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdSignal</th>
                <td>{{ signalisation.idSignal }}</td>
            </tr>
            <tr>
                <th>ContenuSignal</th>
                <td>{{ signalisation.contenuSignal }}</td>
            </tr>
            <tr>
                <th>TypeSignal</th>
                <td>{{ signalisation.typeSignal }}</td>
            </tr>
            <tr>
                <th>EtatSignal</th>
                <td>{{ signalisation.etatSignal }}</td>
            </tr>
            <tr>
                <th>DateSignal</th>
                <td>{{ signalisation.dateSignal ? signalisation.dateSignal|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('signalisation_index') }}\">back to list</a>

    <a href=\"{{ path('signalisation_edit', {'idSignal': signalisation.idSignal}) }}\">edit</a>

    {{ include('signalisation/_delete_form.html.twig') }}
{% endblock %}
", "signalisation/show.html.twig", "C:\\Users\\louay\\Documents\\GitHub\\ArtBox-CrashTest-WEB\\templates\\signalisation\\show.html.twig");
    }
}
