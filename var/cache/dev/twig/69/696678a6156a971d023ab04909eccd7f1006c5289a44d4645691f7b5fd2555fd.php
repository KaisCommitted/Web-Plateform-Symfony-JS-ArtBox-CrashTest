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

/* evenement/show.html.twig */
class __TwigTemplate_2159181676a1d3c4c600802e75e372e1243dbeb7721b5da3e5570412166b5639 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/show.html.twig", 1);
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

        echo "Evenement";
        
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
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('#imgDiv').hide();
            \$('#btn1').click(function(){
                \$('#imgDiv').show();
            });
            \$('#btn2').click(function(){
                \$('#imgDiv').hide();
            });
        });
    </script>
    <h1>Evenement</h1>
    <div id=\"content-page\" class=\"content-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-11\">
                    <div class=\"iq-card\" >
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                <h4 class=\"card-title\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 28, $this->source); })()), "nomEvent", [], "any", false, false, false, 28), "html", null, true);
        echo "</h4>
                                <li>
                                    <button style=\"position: absolute; top:10px; left: 700px; \" class=\"btn btn-primary\" type=\"button\" id=\"btn1\">Get Event QR code</button>
                                    <div id=\"imgDiv\">
                                        <p><img class=\"img-scale2\" style=\"position: absolute; top:45px; left: 785px; \" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodePathFunction(((((("Event name:  " . twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 32, $this->source); })()), "nomEvent", [], "any", false, false, false, 32)) . "
Remaining spots:  ") . twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 32, $this->source); })()), "capaciteEvent", [], "any", false, false, false, 32)) . "
Event Location:  ") . twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 32, $this->source); })()), "locationEvent", [], "any", false, false, false, 32))), "html", null, true);
        echo "\"  width=\"8%\" height=\"auto\"   border=\"0\"></p>
                                    </div>
                                </li>

                                </ul>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">

                            <h6>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
        echo "</h6>

                            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagesEvent/") . twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 43, $this->source); })()), "imageEvent", [], "any", false, false, false, 43)) . ""), "html", null, true);
        echo "\"  class=\"img-fluid rounded w-100\">


                            <div class=\"iq-card-body text-center\">
                            <div class=\"group-details d-inline-block pb-3\">
                                <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                    <li class=\"pl-3 pr-3\">
                                        <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                            <img width=\"20%\" height=\"auto\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javaicons/location.png"), "html", null, true);
        echo "\" >
                                            <p class=\"mb-0\">Event Location</p>
                                        </ul>

                                        <h6>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 55, $this->source); })()), "locationEvent", [], "any", false, false, false, 55), "html", null, true);
        echo "</h6>
                                    </li>
                                    <li class=\"pl-3 pr-3\">
                                        <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                            <img width=\"20%\" height=\"auto\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javaicons/calendar.png"), "html", null, true);
        echo "\" >
                                            <p class=\"mb-0\">Event Date</p>
                                        </ul>
                                        <h6>";
        // line 62
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 62, $this->source); })()), "date", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 62, $this->source); })()), "date", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</h6>
                                    </li>
                                    <li class=\"pl-3 pr-3\">
                                        <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                            <img width=\"20%\" height=\"auto\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javaicons/icons8_Person_32px.png"), "html", null, true);
        echo "\" >
                                            <p class=\"mb-0\">Event Capacity</p>
                                        </ul>
                                        <h6>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 69, $this->source); })()), "capaciteEvent", [], "any", false, false, false, 69), "html", null, true);
        echo "</h6>
                                    </li>


                                </ul>
                            </div>
                            </div>
                            <div class=\"comment-area mt-3\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"like-block position-relative d-flex align-items-center\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"like-data\">
                                                <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/14.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"#\" >Join</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"total-like-block ml-2 mr-3\">
                                                <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                ";
        // line 93
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 93, $this->source); })()), "nbMax", [], "any", false, false, false, 93) - twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 93, $this->source); })()), "capaciteEvent", [], "any", false, false, false, 93)), "html", null, true);
        echo " People going
                                                </span>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"#\">Max Emum</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Bill Yerds</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Hap E. Birthday</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Tara Misu</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Midge Itz</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Sal Vidge</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Other</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"total-comment-block\">
                                            <div class=\"dropdown\">
                                             <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                             20 Comment
                                             </span>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"#\">Max Emum</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Bill Yerds</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Hap E. Birthday</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Tara Misu</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Midge Itz</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Sal Vidge</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Other</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"share-block d-flex align-items-center feather-icon mr-3\">
                                        <a href=\"javascript:void();\"><i class=\"ri-share-line\"></i>
                                            <span class=\"ml-1\">99 Share</span></a>
                                    </div>
                                </div>
                                <hr>
                                <ul class=\"post-comments p-0 m-0\">
                                    <li class=\"mb-2\">
                                        <div class=\"d-flex flex-wrap\">
                                            <div class=\"user-img\">
                                                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
                                            </div>
                                            <div class=\"comment-data-block ml-3\">
                                                <h6>Monty Carlo</h6>
                                                <p class=\"mb-0\">Lorem ipsum dolor sit amet</p>
                                                <div class=\"d-flex flex-wrap align-items-center comment-activity\">
                                                    <a href=\"javascript:void();\">like</a>
                                                    <a href=\"javascript:void();\">reply</a>
                                                    <a href=\"javascript:void();\">translate</a>
                                                    <span> 5 min </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"d-flex flex-wrap\">
                                            <div class=\"user-img\">
                                                <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/03.jpg"), "html", null, true);
        echo "\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
                                            </div>
                                            <div class=\"comment-data-block ml-3\">
                                                <h6>Paul Molive</h6>
                                                <p class=\"mb-0\">Lorem ipsum dolor sit amet</p>
                                                <div class=\"d-flex flex-wrap align-items-center comment-activity\">
                                                    <a href=\"javascript:void();\">like</a>
                                                    <a href=\"javascript:void();\">reply</a>
                                                    <a href=\"javascript:void();\">translate</a>
                                                    <span> 5 min </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <form class=\"comment-text d-flex align-items-center mt-3\" action=\"javascript:void(0);\">
                                    <input type=\"text\" class=\"form-control rounded\">
                                    <div class=\"comment-attagement d-flex\">
                                        <a href=\"javascript:void();\"><i class=\"ri-link mr-3\"></i></a>
                                        <a href=\"javascript:void();\"><i class=\"ri-user-smile-line mr-3\"></i></a>
                                        <a href=\"javascript:void();\"><i class=\"ri-camera-line mr-3\"></i></a>
                                    </div>
                                </form>
                            </div>


                                

                                
                                






                            <a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\">Back to UPCOMING EVENTS</a>

                            <a style=\"position: absolute; top:15px; left: 480px;\" href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189)]), "html", null, true);
        echo "\">Edit my Event</a>

                            ";
        // line 191
        echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
        echo "
                        </div>
                    </div>
                </div>

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
        return "evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 191,  319 => 189,  314 => 187,  275 => 151,  255 => 134,  211 => 93,  198 => 83,  181 => 69,  175 => 66,  168 => 62,  162 => 59,  155 => 55,  148 => 51,  137 => 43,  132 => 41,  118 => 32,  111 => 28,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Evenement{% endblock %}


{% block content %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('#imgDiv').hide();
            \$('#btn1').click(function(){
                \$('#imgDiv').show();
            });
            \$('#btn2').click(function(){
                \$('#imgDiv').hide();
            });
        });
    </script>
    <h1>Evenement</h1>
    <div id=\"content-page\" class=\"content-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-11\">
                    <div class=\"iq-card\" >
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                <h4 class=\"card-title\">{{ evenement.nomEvent }}</h4>
                                <li>
                                    <button style=\"position: absolute; top:10px; left: 700px; \" class=\"btn btn-primary\" type=\"button\" id=\"btn1\">Get Event QR code</button>
                                    <div id=\"imgDiv\">
                                        <p><img class=\"img-scale2\" style=\"position: absolute; top:45px; left: 785px; \" src=\"{{ qr_code_path('Event name:  ' ~ evenement.nomEvent  ~'\\nRemaining spots:  ' ~ evenement.capaciteEvent   ~'\\nEvent Location:  ' ~ evenement.locationEvent  ) }}\"  width=\"8%\" height=\"auto\"   border=\"0\"></p>
                                    </div>
                                </li>

                                </ul>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">

                            <h6>{{ evenement.description }}</h6>

                            <img src=\"{{ asset('imagesEvent/')~ evenement.imageEvent ~''}}\"  class=\"img-fluid rounded w-100\">


                            <div class=\"iq-card-body text-center\">
                            <div class=\"group-details d-inline-block pb-3\">
                                <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                    <li class=\"pl-3 pr-3\">
                                        <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                            <img width=\"20%\" height=\"auto\" src=\"{{ asset('javaicons/location.png')}}\" >
                                            <p class=\"mb-0\">Event Location</p>
                                        </ul>

                                        <h6>{{  evenement.locationEvent }}</h6>
                                    </li>
                                    <li class=\"pl-3 pr-3\">
                                        <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                            <img width=\"20%\" height=\"auto\" src=\"{{ asset('javaicons/calendar.png')}}\" >
                                            <p class=\"mb-0\">Event Date</p>
                                        </ul>
                                        <h6>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</h6>
                                    </li>
                                    <li class=\"pl-3 pr-3\">
                                        <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                            <img width=\"20%\" height=\"auto\" src=\"{{ asset('javaicons/icons8_Person_32px.png')}}\" >
                                            <p class=\"mb-0\">Event Capacity</p>
                                        </ul>
                                        <h6>{{ evenement.capaciteEvent }}</h6>
                                    </li>


                                </ul>
                            </div>
                            </div>
                            <div class=\"comment-area mt-3\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"like-block position-relative d-flex align-items-center\">
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"like-data\">
                                                <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"{{ asset('images/icon/14.png') }}\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"#\" >Join</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"total-like-block ml-2 mr-3\">
                                                <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                {{ evenement.nbMax-evenement.capaciteEvent }} People going
                                                </span>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"#\">Max Emum</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Bill Yerds</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Hap E. Birthday</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Tara Misu</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Midge Itz</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Sal Vidge</a>
                                                        <a class=\"dropdown-item\" href=\"#\">Other</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"total-comment-block\">
                                            <div class=\"dropdown\">
                                             <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                             20 Comment
                                             </span>
                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"#\">Max Emum</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Bill Yerds</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Hap E. Birthday</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Tara Misu</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Midge Itz</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Sal Vidge</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Other</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"share-block d-flex align-items-center feather-icon mr-3\">
                                        <a href=\"javascript:void();\"><i class=\"ri-share-line\"></i>
                                            <span class=\"ml-1\">99 Share</span></a>
                                    </div>
                                </div>
                                <hr>
                                <ul class=\"post-comments p-0 m-0\">
                                    <li class=\"mb-2\">
                                        <div class=\"d-flex flex-wrap\">
                                            <div class=\"user-img\">
                                                <img src=\"{{ asset('images/user/02.jpg') }}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
                                            </div>
                                            <div class=\"comment-data-block ml-3\">
                                                <h6>Monty Carlo</h6>
                                                <p class=\"mb-0\">Lorem ipsum dolor sit amet</p>
                                                <div class=\"d-flex flex-wrap align-items-center comment-activity\">
                                                    <a href=\"javascript:void();\">like</a>
                                                    <a href=\"javascript:void();\">reply</a>
                                                    <a href=\"javascript:void();\">translate</a>
                                                    <span> 5 min </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"d-flex flex-wrap\">
                                            <div class=\"user-img\">
                                                <img src=\"{{ asset('images/user/03.jpg') }}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
                                            </div>
                                            <div class=\"comment-data-block ml-3\">
                                                <h6>Paul Molive</h6>
                                                <p class=\"mb-0\">Lorem ipsum dolor sit amet</p>
                                                <div class=\"d-flex flex-wrap align-items-center comment-activity\">
                                                    <a href=\"javascript:void();\">like</a>
                                                    <a href=\"javascript:void();\">reply</a>
                                                    <a href=\"javascript:void();\">translate</a>
                                                    <span> 5 min </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <form class=\"comment-text d-flex align-items-center mt-3\" action=\"javascript:void(0);\">
                                    <input type=\"text\" class=\"form-control rounded\">
                                    <div class=\"comment-attagement d-flex\">
                                        <a href=\"javascript:void();\"><i class=\"ri-link mr-3\"></i></a>
                                        <a href=\"javascript:void();\"><i class=\"ri-user-smile-line mr-3\"></i></a>
                                        <a href=\"javascript:void();\"><i class=\"ri-camera-line mr-3\"></i></a>
                                    </div>
                                </form>
                            </div>


                                

                                
                                






                            <a href=\"{{ path('evenement_index') }}\">Back to UPCOMING EVENTS</a>

                            <a style=\"position: absolute; top:15px; left: 480px;\" href=\"{{ path('evenement_edit', {'id': evenement.id}) }}\">Edit my Event</a>

                            {{ include('evenement/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>



{% endblock %}
", "evenement/show.html.twig", "C:\\Users\\louay\\Documents\\GitHub\\ArtBox-CrashTest-WEB\\templates\\evenement\\show.html.twig");
    }
}
