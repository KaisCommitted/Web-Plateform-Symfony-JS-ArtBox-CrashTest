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

/* postes/show.html.twig */
class __TwigTemplate_c856ab57ad791e72f7537194e2604121af8c0ddf6cf5a54aaa8e96ae2633721a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "postes/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "postes/show.html.twig", 1);
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

        echo "Postes";
        
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
        echo "    <h1>Postes</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdPost</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 13, $this->source); })()), "idPost", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomPost</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 21, $this->source); })()), "nomPost", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>File</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 25, $this->source); })()), "file", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PostDate</th>
                <td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 29, $this->source); })()), "postDate", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 29, $this->source); })()), "postDate", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>AlbumCover</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 33, $this->source); })()), "albumCover", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Likes</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 37, $this->source); })()), "likes", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DescAnalys</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 41, $this->source); })()), "descAnalys", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PostType</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 45, $this->source); })()), "postType", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postes_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postes_edit", ["idPost" => twig_get_attribute($this->env, $this->source, (isset($context["poste"]) || array_key_exists("poste", $context) ? $context["poste"] : (function () { throw new RuntimeError('Variable "poste" does not exist.', 52, $this->source); })()), "idPost", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 54
        echo twig_include($this->env, $context, "postes/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "postes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  165 => 52,  160 => 50,  152 => 45,  145 => 41,  138 => 37,  131 => 33,  124 => 29,  117 => 25,  110 => 21,  103 => 17,  96 => 13,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Postes{% endblock %}


{% block content %}
    <h1>Postes</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdPost</th>
                <td>{{ poste.idPost }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ poste.description }}</td>
            </tr>
            <tr>
                <th>NomPost</th>
                <td>{{ poste.nomPost }}</td>
            </tr>
            <tr>
                <th>File</th>
                <td>{{ poste.file }}</td>
            </tr>
            <tr>
                <th>PostDate</th>
                <td>{{ poste.postDate ? poste.postDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>AlbumCover</th>
                <td>{{ poste.albumCover }}</td>
            </tr>
            <tr>
                <th>Likes</th>
                <td>{{ poste.likes }}</td>
            </tr>
            <tr>
                <th>DescAnalys</th>
                <td>{{ poste.descAnalys }}</td>
            </tr>
            <tr>
                <th>PostType</th>
                <td>{{ poste.postType }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('postes_index') }}\">back to list</a>

    <a href=\"{{ path('postes_edit', {'idPost': poste.idPost}) }}\">edit</a>

    {{ include('postes/_delete_form.html.twig') }}
{% endblock %}
", "postes/show.html.twig", "C:\\Users\\louay\\Documents\\GitHub\\ArtBox-CrashTest-WEB\\templates\\postes\\show.html.twig");
    }
}
