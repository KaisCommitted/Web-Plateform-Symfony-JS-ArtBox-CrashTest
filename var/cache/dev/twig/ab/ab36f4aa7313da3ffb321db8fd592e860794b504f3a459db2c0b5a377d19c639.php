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

/* evenement/backindex.html.twig */
class __TwigTemplate_48f2f1c3bb61a887cdf279e31f1f14039a256c67be8857481d8a25a37aad010b extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/backindex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/backindex.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "evenement/backindex.html.twig", 1);
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

        echo "Evenement index";
        
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
        echo "    <!-- Page Content  -->

    <h1>Events</h1>

    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"1200\" \">
    <thead>
    <tr>
        <th>Id</th>
        <th>Date</th>
        <th>Event Name</th>

        <th>Event Capacity</th>

        <th>Event Location</th>
        <th>Event Rating</th>

        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 28
            echo "
    <tr>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvent", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>

        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "capaciteEvent", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>

        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "locationEvent", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "ratingEvent", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>

        <td>
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">show</a>
            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">edit</a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "    <tr>
        <td colspan=\"10\">no records found</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
    </table>

    <button type=“button” class=\"button-create\"><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_back_new");
        echo "\">Create new</a></button>

    <style>

        .button-create {
            display: inline-block;
            padding: 12px 18px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #fff3cd;
            font-size: 16px;
            font-weight: bold;
            color: red;
        }
        .button-show {
            display: inline-block;
            padding: 12px 18px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #d3e0ea;
            font-size: 16px;
            font-weight: bold;
            color: red;
        }
        .button-edit {
            display: inline-block;
            padding: 12px 18px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #fde8cd;
            font-size: 16px;
            font-weight: bold;
            color: red;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/backindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 52,  169 => 49,  160 => 45,  151 => 41,  147 => 40,  141 => 37,  137 => 36,  132 => 34,  127 => 32,  123 => 31,  119 => 30,  115 => 28,  110 => 27,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Evenement index{% endblock %}


{% block content %}
    <!-- Page Content  -->

    <h1>Events</h1>

    <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"1200\" \">
    <thead>
    <tr>
        <th>Id</th>
        <th>Date</th>
        <th>Event Name</th>

        <th>Event Capacity</th>

        <th>Event Location</th>
        <th>Event Rating</th>

        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    {% for evenement in evenements %}

    <tr>
        <td>{{ evenement.id }}</td>
        <td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
        <td>{{ evenement.nomEvent }}</td>

        <td>{{ evenement.capaciteEvent }}</td>

        <td>{{ evenement.locationEvent }}</td>
        <td>{{ evenement.ratingEvent }}</td>

        <td>
            <a href=\"{{ path('evenement_back_show', {'id': evenement.id}) }}\">show</a>
            <a href=\"{{ path('evenement_back_edit', {'id': evenement.id}) }}\">edit</a>
        </td>
    </tr>
    {% else %}
    <tr>
        <td colspan=\"10\">no records found</td>
    </tr>
    {% endfor %}
    </tbody>
    </table>

    <button type=“button” class=\"button-create\"><a href=\"{{ path('evenement_back_new') }}\">Create new</a></button>

    <style>

        .button-create {
            display: inline-block;
            padding: 12px 18px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #fff3cd;
            font-size: 16px;
            font-weight: bold;
            color: red;
        }
        .button-show {
            display: inline-block;
            padding: 12px 18px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #d3e0ea;
            font-size: 16px;
            font-weight: bold;
            color: red;
        }
        .button-edit {
            display: inline-block;
            padding: 12px 18px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #fde8cd;
            font-size: 16px;
            font-weight: bold;
            color: red;
        }

    </style>
{% endblock %}
", "evenement/backindex.html.twig", "C:\\Users\\louay\\Documents\\GitHub\\ArtBox-CrashTest-WEB\\templates\\evenement\\backindex.html.twig");
    }
}
