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

/* evenement/index.html.twig */
class __TwigTemplate_3ce1d68e908d0b0ff4358f023aaa124d1a48cce903e8016c9f47e4807a67ca27 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/index.html.twig", 1);
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


    <div id=\"content-page\" class=\"content-page\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-8 row m-0 p-0\">
                    <div class=\"iq-card-header-toolbar d-flex align-items-center\">
                        <div class=\"dropdown\">

                                 <span class=\"dropdown-toggle\" id=\"dropdownMenuButton01\" data-toggle=\"dropdown\" aria-expanded=\"false\" role=\"button\">
                                 <i class=\"ri-more-fill\"></i>
                                     Choose genre
                                 </span>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton01\" style=\"\">

                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 25
            echo "                                <a class=\"dropdown-item\"  href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_cat", ["name" => twig_get_attribute($this->env, $this->source, $context["c"], "categorieName", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"><i class=\"ri-eye-fill mr-2\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "categorieName", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
                            </div>
                        </div>
                        <div class=\"dropdown\">

                                 <span style=\"position: absolute; top:-10px; left: 450px; \" class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-expanded=\"false\" role=\"button\">
                                   Filter by
                                     <i class=\"ri-more-fill\"></i>

                                 </span>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\" style=\"\">
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-eye-fill mr-2\"></i>Most Rated</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-delete-bin-6-fill mr-2\"></i>This Month</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-pencil-fill mr-2\"></i>This Week</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-printer-fill mr-2\"></i>Today</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-file-download-fill mr-2\"></i>Download</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-sm-12\">
                        <form action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        echo "\">

                        <button  type=\"submit\" class=\"btn btn-primary d-block w-100 mt-3\">Host An Event</button>
                        </form>
                    </div>







                    <!-- EventBox -->
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 62
            echo "
                        <div class=\"col-sm-12\">
                            <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                                <div class=\"iq-card-body\">

                                    <div class=\"user-post-data\">
                                        <div class=\"d-flex flex-wrap\">
                                            <div class=\"media-support-user-img mr-3\">
                                                <img class=\"rounded-circle img-fluid\" src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/03.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                            </div>
                                            <div class=\"media-support-info mt-2\">
                                                <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "idOrg", [], "any", false, false, false, 73), "html", null, true);
            echo "</a></h5>
                                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\"  class=\"mb-0 d-inline-block\">";
            echo twig_escape_filter($this->env, ("Is Hosting " . twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvent", [], "any", false, false, false, 74)), "html", null, true);
            echo "</a>

                                            </div>
                                            <div class=\"iq-card-post-toolbar\">
                                                <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" id=\"postdata-5\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                    <div class=\"dropdown-menu m-0 p-0\" aria-labelledby=\"postdata-5\">
                                                        <a class=\"dropdown-item p-3\" href=\"#\">
                                                            <div class=\"d-flex align-items-top\">
                                                                <div class=\"icon font-size-20\"><i class=\"ri-save-line\"></i></div>
                                                                <div class=\"data ml-2\">
                                                                    <h6>Save Post</h6>
                                                                    <p class=\"mb-0\">Add this to your saved items</p>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a class=\"dropdown-item p-3\" href=\"#\">
                                                            <form  id=\"myform\" method=\"post\" action=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 95))), "html", null, true);
            echo "\">
                                                            <div class=\"d-flex align-items-top\">
                                                                <div onclick=\"document.getElementById('myform').submit();\" type=\"submit\" class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>

                                                                <div class=\"data ml-2\">

                                                                    <h6  onclick=\"document.getElementById('myform').submit();\">Delete Post </h6>


                                                                </div>

                                                            </div>
                                                            </form>
                                                        </a>

                                                        <a class=\"dropdown-item p-3\" href=\"#\">
                                                            <div class=\"d-flex align-items-top\">
                                                                <div class=\"icon font-size-20\"><i class=\"ri-user-unfollow-line\"></i></div>
                                                                <div class=\"data ml-2\">
                                                                    <h6>Unfollow User</h6>
                                                                    <p class=\"mb-0\">Stop seeing posts but stay friends.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class=\"dropdown-item p-3\" href=\"#\">
                                                            <div class=\"d-flex align-items-top\">
                                                                <div class=\"icon font-size-20\"><i class=\"ri-notification-line\"></i></div>
                                                                <div class=\"data ml-2\">
                                                                    <h6>Notifications</h6>
                                                                    <p class=\"mb-0\">Turn on notifications for this post</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mt-3\">
                                        <p href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 134), "html", null, true);
            echo "</p>
                                    </div>
                                    <div  class=\"user-post\">
                                        <a href=\"javascript:void();\"><img src=\"";
            // line 137
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagesEvent/") . twig_get_attribute($this->env, $this->source, $context["evenement"], "imageEvent", [], "any", false, false, false, 137)) . ""), "html", null, true);
            echo "\"  overflow=\"visible\" alt=\"post-image\" class=\"img-scale rounded w-100\"></a>
                                    </div>
                                    <div class=\"iq-card-body text-center\">
                                        <div class=\"group-details d-inline-block pb-3\">
                                            <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                                <li class=\"pl-1 pr-1\">
                                                    <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                                        <img width=\"20%\" height=\"auto\" src=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javaicons/location.png"), "html", null, true);
            echo "\" >
                                                        <p class=\"mb-0\">Event Location</p>
                                                    </ul>

                                                    <h6>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "locationEvent", [], "any", false, false, false, 148), "html", null, true);
            echo "</h6>
                                                </li>
                                                <li class=\"pl-1 pr-1\">
                                                    <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                                        <img width=\"20%\" height=\"auto\" src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javaicons/calendar.png"), "html", null, true);
            echo "\" >
                                                        <p class=\"mb-0\">Event Date</p>
                                                    </ul>
                                                    <h6>";
            // line 155
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 155)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 155), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</h6>
                                                </li>
                                                <li class=\"pl-1 pr-1\">
                                                    <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                                        <img width=\"20%\" height=\"auto\" src=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javaicons/icons8_Person_32px.png"), "html", null, true);
            echo "\" >
                                                        <p class=\"mb-0\">Event Capacity</p>
                                                    </ul>
                                                    <h6>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "capaciteEvent", [], "any", false, false, false, 162), "html", null, true);
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
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/14.png"), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"Join\">
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
            // line 188
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["evenement"], "nbMax", [], "any", false, false, false, 188) - twig_get_attribute($this->env, $this->source, $context["evenement"], "capaciteEvent", [], "any", false, false, false, 188)), "html", null, true);
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
            // line 229
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
            // line 246
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
                                </div>
                            </div>
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                <!-- EventBox -->
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"iq-card\">
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <h4 class=\"card-title\">Stories</h4>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">
                            <ul class=\"media-story m-0 p-0\">
                                <li class=\"d-flex mb-4 align-items-center\">
                                    <i class=\"ri-add-line font-size-18\"></i>
                                    <div class=\"stories-data ml-3\">
                                        <h5>Creat Your Story</h5>
                                        <p class=\"mb-0\">time to story</p>
                                    </div>
                                </li>
                                <li class=\"d-flex mb-4 align-items-center active\">
                                    <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/s2.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Anna Mull</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex mb-4 align-items-center\">
                                    <img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/s3.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Ira Membrit</h5>
                                        <p class=\"mb-0\">4 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/s1.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Bob Frapples</h5>
                                        <p class=\"mb-0\">9 hour ago</p>
                                    </div>
                                </li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-primary d-block mt-3\">See All</a>
                        </div>
                    </div>
                    <div class=\"iq-card\">
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <h4 class=\"card-title\">Events</h4>
                            </div>
                            <div class=\"iq-card-header-toolbar d-flex align-items-center\">
                                <div class=\"dropdown\">
                                 <span class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-expanded=\"false\" role=\"button\">
                                 <i class=\"ri-more-fill\"></i>
                                 </span>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\" style=\"\">
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-eye-fill mr-2\"></i>View</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-delete-bin-6-fill mr-2\"></i>Delete</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-pencil-fill mr-2\"></i>Edit</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-printer-fill mr-2\"></i>Print</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-file-download-fill mr-2\"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">
                            <ul class=\"media-story m-0 p-0\">
                                <li class=\"d-flex mb-4 align-items-center \">
                                    <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/s4.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Web Workshop</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/s5.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Fun Events and Festivals</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"iq-card\">
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <h4 class=\"card-title\">Upcoming Birthday</h4>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">
                            <ul class=\"media-story m-0 p-0\">
                                <li class=\"d-flex mb-4 align-items-center\">
                                    <img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/01.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Anna Sthesia</h5>
                                        <p class=\"mb-0\">Today</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Paul Molive</h5>
                                        <p class=\"mb-0\">Tomorrow</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"iq-card\">
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <h4 class=\"card-title\">Suggested Pages</h4>
                            </div>
                            <div class=\"iq-card-header-toolbar d-flex align-items-center\">
                                <div class=\"dropdown\">
                                 <span class=\"dropdown-toggle\" id=\"dropdownMenuButton01\" data-toggle=\"dropdown\" aria-expanded=\"false\" role=\"button\">
                                 <i class=\"ri-more-fill\"></i>
                                 </span>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton01\" style=\"\">
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-eye-fill mr-2\"></i>View</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-delete-bin-6-fill mr-2\"></i>Delete</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-pencil-fill mr-2\"></i>Edit</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-printer-fill mr-2\"></i>Print</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-file-download-fill mr-2\"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">
                            <ul class=\"suggested-page-story m-0 p-0 list-inline\">
                                <li class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/42.png"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid avatar-50\">
                                        <div class=\"stories-data ml-3\">
                                            <h5>Iqonic Studio</h5>
                                            <p class=\"mb-0\">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/img-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Responsive image\">
                                    <div class=\"mt-3\"><a href=\"#\" class=\"btn d-block\"><i class=\"ri-thumb-up-line mr-2\"></i> Like Page</a></div>
                                </li>
                                <li class=\"\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/42.png"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid avatar-50\">
                                        <div class=\"stories-data ml-3\">
                                            <h5>Cakes & Bakes </h5>
                                            <p class=\"mb-0\">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/img-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Responsive image\">
                                    <div class=\"mt-3\"><a href=\"#\" class=\"btn d-block\"><i class=\"ri-thumb-up-line mr-2\"></i> Like Page</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 text-center\">
                    <img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/page-load-loader.gif"), "html", null, true);
        echo "\" alt=\"loader\" style=\"height: 100px;\">
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
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 431,  618 => 423,  609 => 417,  601 => 412,  592 => 406,  556 => 373,  546 => 366,  525 => 348,  515 => 341,  479 => 308,  469 => 301,  459 => 294,  437 => 274,  403 => 246,  383 => 229,  339 => 188,  325 => 177,  307 => 162,  301 => 159,  294 => 155,  288 => 152,  281 => 148,  274 => 144,  264 => 137,  256 => 134,  214 => 95,  210 => 94,  185 => 74,  181 => 73,  175 => 70,  165 => 62,  161 => 61,  145 => 48,  122 => 27,  111 => 25,  107 => 24,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Evenement index{% endblock %}


{% block content %}
    <!-- Page Content  -->


    <div id=\"content-page\" class=\"content-page\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-8 row m-0 p-0\">
                    <div class=\"iq-card-header-toolbar d-flex align-items-center\">
                        <div class=\"dropdown\">

                                 <span class=\"dropdown-toggle\" id=\"dropdownMenuButton01\" data-toggle=\"dropdown\" aria-expanded=\"false\" role=\"button\">
                                 <i class=\"ri-more-fill\"></i>
                                     Choose genre
                                 </span>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton01\" style=\"\">

                                {% for c in categories %}
                                <a class=\"dropdown-item\"  href=\"{{ path('evenement_cat', {'name': c.categorieName}) }}\"><i class=\"ri-eye-fill mr-2\"></i>{{ c.categorieName}}</a>
                                {% endfor %}

                            </div>
                        </div>
                        <div class=\"dropdown\">

                                 <span style=\"position: absolute; top:-10px; left: 450px; \" class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-expanded=\"false\" role=\"button\">
                                   Filter by
                                     <i class=\"ri-more-fill\"></i>

                                 </span>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\" style=\"\">
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-eye-fill mr-2\"></i>Most Rated</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-delete-bin-6-fill mr-2\"></i>This Month</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-pencil-fill mr-2\"></i>This Week</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-printer-fill mr-2\"></i>Today</a>
                                <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-file-download-fill mr-2\"></i>Download</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-sm-12\">
                        <form action=\"{{ path('evenement_new') }}\">

                        <button  type=\"submit\" class=\"btn btn-primary d-block w-100 mt-3\">Host An Event</button>
                        </form>
                    </div>







                    <!-- EventBox -->
                    {% for evenement in evenements %}

                        <div class=\"col-sm-12\">
                            <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                                <div class=\"iq-card-body\">

                                    <div class=\"user-post-data\">
                                        <div class=\"d-flex flex-wrap\">
                                            <div class=\"media-support-user-img mr-3\">
                                                <img class=\"rounded-circle img-fluid\" src=\"{{ asset('images/user/03.jpg') }}\" alt=\"\">
                                            </div>
                                            <div class=\"media-support-info mt-2\">
                                                <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">{{ evenement.idOrg}}</a></h5>
                                                <a href=\"{{ path('evenement_show', {'id': evenement.id}) }}\"  class=\"mb-0 d-inline-block\">{{'Is Hosting ' ~ evenement.nomEvent}}</a>

                                            </div>
                                            <div class=\"iq-card-post-toolbar\">
                                                <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" id=\"postdata-5\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                    <div class=\"dropdown-menu m-0 p-0\" aria-labelledby=\"postdata-5\">
                                                        <a class=\"dropdown-item p-3\" href=\"#\">
                                                            <div class=\"d-flex align-items-top\">
                                                                <div class=\"icon font-size-20\"><i class=\"ri-save-line\"></i></div>
                                                                <div class=\"data ml-2\">
                                                                    <h6>Save Post</h6>
                                                                    <p class=\"mb-0\">Add this to your saved items</p>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a class=\"dropdown-item p-3\" href=\"#\">
                                                            <form  id=\"myform\" method=\"post\" action=\"{{ path('evenement_delete', {'id': evenement.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
                                                            <div class=\"d-flex align-items-top\">
                                                                <div onclick=\"document.getElementById('myform').submit();\" type=\"submit\" class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>

                                                                <div class=\"data ml-2\">

                                                                    <h6  onclick=\"document.getElementById('myform').submit();\">Delete Post </h6>


                                                                </div>

                                                            </div>
                                                            </form>
                                                        </a>

                                                        <a class=\"dropdown-item p-3\" href=\"#\">
                                                            <div class=\"d-flex align-items-top\">
                                                                <div class=\"icon font-size-20\"><i class=\"ri-user-unfollow-line\"></i></div>
                                                                <div class=\"data ml-2\">
                                                                    <h6>Unfollow User</h6>
                                                                    <p class=\"mb-0\">Stop seeing posts but stay friends.</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a class=\"dropdown-item p-3\" href=\"#\">
                                                            <div class=\"d-flex align-items-top\">
                                                                <div class=\"icon font-size-20\"><i class=\"ri-notification-line\"></i></div>
                                                                <div class=\"data ml-2\">
                                                                    <h6>Notifications</h6>
                                                                    <p class=\"mb-0\">Turn on notifications for this post</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mt-3\">
                                        <p href=\"{{ path('evenement_show', {'id': evenement.id}) }}\">{{ evenement.description }}</p>
                                    </div>
                                    <div  class=\"user-post\">
                                        <a href=\"javascript:void();\"><img src=\"{{ asset('imagesEvent/')~ evenement.imageEvent ~''}}\"  overflow=\"visible\" alt=\"post-image\" class=\"img-scale rounded w-100\"></a>
                                    </div>
                                    <div class=\"iq-card-body text-center\">
                                        <div class=\"group-details d-inline-block pb-3\">
                                            <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                                <li class=\"pl-1 pr-1\">
                                                    <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                                        <img width=\"20%\" height=\"auto\" src=\"{{ asset('javaicons/location.png')}}\" >
                                                        <p class=\"mb-0\">Event Location</p>
                                                    </ul>

                                                    <h6>{{  evenement.locationEvent }}</h6>
                                                </li>
                                                <li class=\"pl-1 pr-1\">
                                                    <ul class=\"d-flex align-items-center justify-content-between list-inline m-0 p-0\">
                                                        <img width=\"20%\" height=\"auto\" src=\"{{ asset('javaicons/calendar.png')}}\" >
                                                        <p class=\"mb-0\">Event Date</p>
                                                    </ul>
                                                    <h6>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</h6>
                                                </li>
                                                <li class=\"pl-1 pr-1\">
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
                                                <img src=\"{{ asset('images/icon/14.png') }}\" class=\"img-fluid\" alt=\"Join\">
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
                                </div>
                            </div>
                        </div>
                {% endfor %}
                <!-- EventBox -->
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"iq-card\">
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <h4 class=\"card-title\">Stories</h4>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">
                            <ul class=\"media-story m-0 p-0\">
                                <li class=\"d-flex mb-4 align-items-center\">
                                    <i class=\"ri-add-line font-size-18\"></i>
                                    <div class=\"stories-data ml-3\">
                                        <h5>Creat Your Story</h5>
                                        <p class=\"mb-0\">time to story</p>
                                    </div>
                                </li>
                                <li class=\"d-flex mb-4 align-items-center active\">
                                    <img src=\"{{ asset('images/page-img/s2.jpg') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Anna Mull</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex mb-4 align-items-center\">
                                    <img src=\"{{ asset('images/page-img/s3.jpg') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Ira Membrit</h5>
                                        <p class=\"mb-0\">4 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset('images/page-img/s1.jpg') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Bob Frapples</h5>
                                        <p class=\"mb-0\">9 hour ago</p>
                                    </div>
                                </li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-primary d-block mt-3\">See All</a>
                        </div>
                    </div>
                    <div class=\"iq-card\">
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <h4 class=\"card-title\">Events</h4>
                            </div>
                            <div class=\"iq-card-header-toolbar d-flex align-items-center\">
                                <div class=\"dropdown\">
                                 <span class=\"dropdown-toggle\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-expanded=\"false\" role=\"button\">
                                 <i class=\"ri-more-fill\"></i>
                                 </span>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\" style=\"\">
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-eye-fill mr-2\"></i>View</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-delete-bin-6-fill mr-2\"></i>Delete</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-pencil-fill mr-2\"></i>Edit</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-printer-fill mr-2\"></i>Print</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-file-download-fill mr-2\"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">
                            <ul class=\"media-story m-0 p-0\">
                                <li class=\"d-flex mb-4 align-items-center \">
                                    <img src=\"{{ asset('images/page-img/s4.jpg') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Web Workshop</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset('images/page-img/s5.jpg') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Fun Events and Festivals</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"iq-card\">
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <h4 class=\"card-title\">Upcoming Birthday</h4>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">
                            <ul class=\"media-story m-0 p-0\">
                                <li class=\"d-flex mb-4 align-items-center\">
                                    <img src=\"{{ asset('images/user/01.jpg') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Anna Sthesia</h5>
                                        <p class=\"mb-0\">Today</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset('images/user/02.jpg') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Paul Molive</h5>
                                        <p class=\"mb-0\">Tomorrow</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"iq-card\">
                        <div class=\"iq-card-header d-flex justify-content-between\">
                            <div class=\"iq-header-title\">
                                <h4 class=\"card-title\">Suggested Pages</h4>
                            </div>
                            <div class=\"iq-card-header-toolbar d-flex align-items-center\">
                                <div class=\"dropdown\">
                                 <span class=\"dropdown-toggle\" id=\"dropdownMenuButton01\" data-toggle=\"dropdown\" aria-expanded=\"false\" role=\"button\">
                                 <i class=\"ri-more-fill\"></i>
                                 </span>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton01\" style=\"\">
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-eye-fill mr-2\"></i>View</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-delete-bin-6-fill mr-2\"></i>Delete</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-pencil-fill mr-2\"></i>Edit</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-printer-fill mr-2\"></i>Print</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"ri-file-download-fill mr-2\"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"iq-card-body\">
                            <ul class=\"suggested-page-story m-0 p-0 list-inline\">
                                <li class=\"mb-3\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"{{ asset('images/page-img/42.png') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid avatar-50\">
                                        <div class=\"stories-data ml-3\">
                                            <h5>Iqonic Studio</h5>
                                            <p class=\"mb-0\">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src=\"{{ asset('images/small/img-1.jpg') }}\" class=\"img-fluid rounded\" alt=\"Responsive image\">
                                    <div class=\"mt-3\"><a href=\"#\" class=\"btn d-block\"><i class=\"ri-thumb-up-line mr-2\"></i> Like Page</a></div>
                                </li>
                                <li class=\"\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"{{ asset('images/page-img/42.png') }}\" alt=\"story-img\" class=\"rounded-circle img-fluid avatar-50\">
                                        <div class=\"stories-data ml-3\">
                                            <h5>Cakes & Bakes </h5>
                                            <p class=\"mb-0\">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src=\"{{ asset('images/small/img-2.jpg') }}\" class=\"img-fluid rounded\" alt=\"Responsive image\">
                                    <div class=\"mt-3\"><a href=\"#\" class=\"btn d-block\"><i class=\"ri-thumb-up-line mr-2\"></i> Like Page</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 text-center\">
                    <img src=\"{{ asset('images/page-img/page-load-loader.gif') }}\" alt=\"loader\" style=\"height: 100px;\">
                </div>
            </div>
        </div>
    </div>
    </div>
{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\louay\\Documents\\GitHub\\ArtBox-CrashTest-WEB\\templates\\evenement\\index.html.twig");
    }
}
