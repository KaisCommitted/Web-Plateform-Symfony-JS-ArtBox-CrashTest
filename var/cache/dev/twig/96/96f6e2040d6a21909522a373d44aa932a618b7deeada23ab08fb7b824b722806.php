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

/* base.html.twig */
class __TwigTemplate_7d5cb018100de09b243a238d189e7ad3aba428dcbf5d635178590b343d30c162 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>SocialV - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 19
        echo "</head>
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 1838
        echo "<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
";
        // line 1841
        $this->displayBlock('js', $context, $blocks);
        // line 1885
        echo "
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Typography CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/typography.css"), "html", null, true);
        echo "\">
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 625
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 1818
        echo "<!-- Wrapper END -->
";
        // line 1819
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "<body class=\"right-column-fixed\">
<!-- loader Start -->
<div id=\"loading\">
    <div id=\"loading-center\">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class=\"wrapper\">
    <!-- Sidebar  -->
    <div class=\"iq-sidebar\">
        <div id=\"sidebar-scrollbar\">
            <nav class=\"iq-sidebar-menu\">
                <ul id=\"iq-sidebar-toggle\" class=\"iq-menu\">
                    <li class=\"active\">
                        <a  href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postes_index");
        echo "\" class=\"iq-waves-effect\"><i class=\"las la-newspaper\"></i><span>Newsfeed</span></a>
                    </li>
                    <li>
                        <a href=\"#mailbox\" class=\"iq-waves-effect collapsed\"  data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-mail-line\"></i><span>Events</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                        <ul id=\"mailbox\" class=\"iq-submenu collapse\" data-parent=\"#iq-sidebar-toggle\">
                                                      <li><a  href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_index");
        echo "\" ><i class=\"ri-inbox-line\"></i>Upcoming Events</a></li>
                                                     <li><a  href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_new");
        echo "\" ><i class=\"ri-edit-line\"></i>Host an Event</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\" class=\"iq-waves-effect\"><i class=\"las la-user-friends\"></i><span>Jobs</span></a>
                    </li>
                    <li>
                        <a href=\"group.html\" class=\"iq-waves-effect\"><i class=\"las la-users\"></i><span>Group</span></a>
                    </li>
                    <li>
                        <a href=\"profile-images.html\" class=\"iq-waves-effect\"><i class=\"las la-image\"></i><span>Profile Image</span></a>
                    </li>
                    <li>
                        <a href=\"profile-video.html\" class=\"iq-waves-effect\"><i class=\"las la-video\"></i><span>Profile Video</span></a>
                    </li>
                    <li>
                        <a href=\"profile-event.html\" class=\"iq-waves-effect\"><i class=\"las la-film\"></i><span>Profile Events</span></a>
                    </li>
                    <li>
                        <a href=\"notification.html\" class=\"iq-waves-effect\"><i class=\"las la-bell\"></i><span>Notification</span></a>
                    </li>
                    <li>
                        <a href=\"file.html\" class=\"iq-waves-effect\"><i class=\"las la-file\"></i><span>Files</span></a>
                    </li>
                    <li>
                        <a href=\"friend-request.html\" class=\"iq-waves-effect\"><i class=\"las la-anchor\"></i><span>Friend Request</span></a>
                    </li>
                    <li>
                        <a href=\"chat.html\" class=\"iq-waves-effect\"><i class=\"lab la-rocketchat\"></i><span>Chat</span></a>
                    </li>
                    <li>
                        <a href=\"todo.html\" class=\"iq-waves-effect\"><i class=\"las la-check-circle\"></i><span>Todo</span></a>
                    </li>
                    <li>
                        <a href=\"calendar.html\" class=\"iq-waves-effect\"><i class=\"las la-calendar\"></i><span>Calendar</span></a>
                    </li>
                    <li>
                        <a href=\"birthday.html\" class=\"iq-waves-effect\"><i class=\"las la-birthday-cake\"></i><span>Birthday</span></a>
                    </li>
                    <li>
                        <a href=\"weather.html\" class=\"iq-waves-effect\"><i class=\"ri-snowy-line\"></i><span>Weather</span></a>
                    </li>
                    <li>
                        <a href=\"music.html\" class=\"iq-waves-effect\"><i class=\"ri-play-circle-line\"></i><span>Music</span></a>
                    </li>

                    <li>
                        <a href=\"#ui-elements\" class=\"iq-waves-effect collapsed\"  data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-focus-2-line\"></i><span>Ui-Elements</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                        <ul id=\"ui-elements\" class=\"iq-submenu collapse\" data-parent=\"#iq-sidebar-toggle\">
                            <li>
                                <a href=\"#ui-kit\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-pencil-ruler-line\"></i><span>UI Kit</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"ui-kit\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"ui-colors.html\"><i class=\"ri-font-color\"></i>colors</a></li>
                                    <li><a href=\"ui-typography.html\"><i class=\"ri-text\"></i>Typography</a></li>
                                    <li><a href=\"ui-alerts.html\"><i class=\"ri-alert-line\"></i>Alerts</a></li>
                                    <li><a href=\"ui-badges.html\"><i class=\"ri-building-3-line\"></i>Badges</a></li>
                                    <li><a href=\"ui-breadcrumb.html\"><i class=\"ri-menu-2-line\"></i>Breadcrumb</a></li>
                                    <li><a href=\"ui-buttons.html\"><i class=\"ri-checkbox-blank-line\"></i>Buttons</a></li>
                                    <li><a href=\"ui-cards.html\"><i class=\"ri-bank-card-line\"></i>Cards</a></li>
                                    <li><a href=\"ui-carousel.html\"><i class=\"ri-slideshow-line\"></i>Carousel</a></li>
                                    <li><a href=\"ui-embed-video.html\"><i class=\"ri-slideshow-2-line\"></i>Video</a></li>
                                    <li><a href=\"ui-grid.html\"><i class=\"ri-grid-line\"></i>Grid</a></li>
                                    <li><a href=\"ui-images.html\"><i class=\"ri-image-line\"></i>Images</a></li>
                                    <li><a href=\"ui-list-group.html\"><i class=\"ri-file-list-3-line\"></i>list Group</a></li>
                                    <li><a href=\"ui-media-object.html\"><i class=\"ri-camera-line\"></i>Media</a></li>
                                    <li><a href=\"ui-modal.html\"><i class=\"ri-stop-mini-line\"></i>Modal</a></li>
                                    <li><a href=\"ui-notifications.html\"><i class=\"ri-notification-line\"></i>Notifications</a></li>
                                    <li><a href=\"ui-pagination.html\"><i class=\"ri-pages-line\"></i>Pagination</a></li>
                                    <li><a href=\"ui-popovers.html\"><i class=\"ri-folder-shield-2-line\"></i>Popovers</a></li>
                                    <li><a href=\"ui-progressbars.html\"><i class=\"ri-battery-low-line\"></i>Progressbars</a></li>
                                    <li><a href=\"ui-tabs.html\"><i class=\"ri-database-line\"></i>Tabs</a></li>
                                    <li><a href=\"ui-tooltips.html\"><i class=\"ri-record-mail-line\"></i>Tooltips</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#forms\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-profile-line\"></i><span>Forms</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"forms\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"form-layout.html\"><i class=\"ri-tablet-line\"></i>Form Elements</a></li>
                                    <li><a href=\"form-validation.html\"><i class=\"ri-device-line\"></i>Form Validation</a></li>
                                    <li><a href=\"form-switch.html\"><i class=\"ri-toggle-line\"></i>Form Switch</a></li>
                                    <li><a href=\"form-chechbox.html\"><i class=\"ri-checkbox-line\"></i>Form Checkbox</a></li>
                                    <li><a href=\"form-radio.html\"><i class=\"ri-radio-button-line\"></i>Form Radio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#wizard-form\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-archive-drawer-line\"></i><span>Forms Wizard</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"wizard-form\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"form-wizard.html\"><i class=\"ri-clockwise-line\"></i>Simple Wizard</a></li>
                                    <li><a href=\"form-wizard-validate.html\"><i class=\"ri-clockwise-2-line\"></i>Validate Wizard</a></li>
                                    <li><a href=\"form-wizard-vertical.html\"><i class=\"ri-anticlockwise-line\"></i>Vertical Wizard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#tables\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-table-line\"></i><span>Table</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"tables\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"tables-basic.html\"><i class=\"ri-table-line\"></i>Basic Tables</a></li>
                                    <li><a href=\"data-table.html\"><i class=\"ri-database-line\"></i>Data Table</a></li>
                                    <li><a href=\"table-editable.html\"><i class=\"ri-refund-line\"></i>Editable Table</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#icons\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-list-check\"></i><span>Icons</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"icons\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"icon-dripicons.html\"><i class=\"ri-stack-line\"></i>Dripicons</a></li>
                                    <li><a href=\"icon-fontawesome-5.html\"><i class=\"ri-facebook-fill\"></i>Font Awesome 5</a></li>
                                    <li><a href=\"icon-lineawesome.html\"><i class=\"ri-keynote-line\"></i>line Awesome</a></li>
                                    <li><a href=\"icon-remixicon.html\"><i class=\"ri-remixicon-line\"></i>Remixicon</a></li>
                                    <li><a href=\"icon-unicons.html\"><i class=\"ri-underline\"></i>unicons</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#pages\" class=\"iq-waves-effect collapsed\"  data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-pages-line\"></i><span>Pages</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                        <ul id=\"pages\" class=\"iq-submenu collapse\" data-parent=\"#iq-sidebar-toggle\">
                            <li>
                                <a href=\"#authentication\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-pages-line\"></i><span>Authentication</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"authentication\" class=\"iq-submenu collapse\" data-parent=\"#pages\">
                                    <li><a href=\"sign-in.html\"><i class=\"ri-login-box-line\"></i>Login</a></li>
                                    <li><a href=\"sign-up.html\"><i class=\"ri-login-circle-line\"></i>Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\"><i class=\"ri-record-mail-line\"></i>Recover Password</a></li>
                                    <li><a href=\"pages-confirm-mail.html\"><i class=\"ri-file-code-line\"></i>Confirm Mail</a></li>
                                    <li><a href=\"pages-lock-screen.html\"><i class=\"ri-lock-line\"></i>Lock Screen</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#extra-pages\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-pantone-line\"></i><span>Extra Pages</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"extra-pages\" class=\"iq-submenu collapse\" data-parent=\"#pages\">
                                    <li><a href=\"pages-timeline.html\"><i class=\"ri-map-pin-time-line\"></i>Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\"><i class=\"ri-question-answer-line\"></i>Invoice</a></li>
                                    <li><a href=\"blank-page.html\"><i class=\"ri-invision-line\"></i>Blank Page</a></li>
                                    <li><a href=\"pages-error.html\"><i class=\"ri-error-warning-line\"></i>Error 404</a></li>
                                    <li><a href=\"pages-error-500.html\"><i class=\"ri-error-warning-line\"></i>Error 500</a></li>
                                    <li><a href=\"pages-pricing.html\"><i class=\"ri-price-tag-line\"></i>Pricing</a></li>
                                    <li><a href=\"pages-pricing-one.html\"><i class=\"ri-price-tag-2-line\"></i>Pricing 1</a></li>
                                    <li><a href=\"pages-maintenance.html\"><i class=\"ri-archive-line\"></i>Maintenance</a></li>
                                    <li><a href=\"pages-comingsoon.html\"><i class=\"ri-mastercard-line\"></i>Coming Soon</a></li>
                                    <li><a href=\"pages-faq.html\"><i class=\"ri-compasses-line\"></i>Faq</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <div class=\"p-3\"></div>
        </div>
    </div>

    <!-- TOP Nav Bar -->
    <div class=\"iq-top-navbar\">
        <div class=\"iq-navbar-custom\">
            <nav class=\"navbar navbar-expand-lg navbar-light p-0\">
                <div class=\"iq-navbar-logo d-flex justify-content-between\">
                    <a href=\"index.html\">
                        <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                        <span>SocialV</span>
                    </a>
                    <div class=\"iq-menu-bt align-self-center\">
                        <div class=\"wrapper-menu\">
                            <div class=\"main-circle\"><i class=\"ri-menu-line\"></i></div>
                        </div>
                    </div>
                </div>
                <div class=\"iq-search-bar\">
                    <form action=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_search");
        echo "\"  method=\"post\" class=\"searchbox\">
                        <input name=\"mots\" type=\"text\" class=\"text search-input\" placeholder=\"Type here to search...\">
                        <a class=\"search-link\" href=\"#\"><i class=\"ri-search-line\"></i></a>
                    </form>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"  aria-label=\"Toggle navigation\">
                    <i class=\"ri-menu-3-line\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto navbar-list\">
                        <li>
                            <a href=\"profile.html\" class=\"iq-waves-effect d-flex align-items-center\">
                                <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle mr-3\" alt=\"user\">
                                <div class=\"caption\">
                                    <h6 class=\"mb-0 line-height\">Bni Cyst</h6>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html\" class=\"iq-waves-effect d-flex align-items-center\">
                                <i class=\"ri-home-line\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"search-toggle iq-waves-effect\" href=\"#\"><i class=\"ri-group-line\"></i></a>
                            <div class=\"iq-sub-dropdown iq-sub-dropdown-large\">
                                <div class=\"iq-card shadow-none m-0\">
                                    <div class=\"iq-card-body p-0 \">
                                        <div class=\"bg-primary p-3\">
                                            <h5 class=\"mb-0 text-white\">Friend Request<small class=\"badge  badge-light float-right pt-1\">4</small></h5>
                                        </div>
                                        <div class=\"iq-friend-request\">
                                            <div class=\"iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between\" >
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <img class=\"avatar-40 rounded\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"media-body ml-3\">
                                                        <h6 class=\"mb-0 \">Jaques Amole</h6>
                                                        <p class=\"mb-0\">40  friends</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-primary rounded\">Confirm</a>
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-secondary rounded\">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"iq-friend-request\">
                                            <div class=\"iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between\" >
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <img class=\"avatar-40 rounded\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"media-body ml-3\">
                                                        <h6 class=\"mb-0 \">Lucy Tania</h6>
                                                        <p class=\"mb-0\">12  friends</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-primary rounded\">Confirm</a>
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-secondary rounded\">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"iq-friend-request\">
                                            <div class=\"iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between\" >
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <img class=\"avatar-40 rounded\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"media-body ml-3\">
                                                        <h6 class=\"mb-0 \">Manny Petty</h6>
                                                        <p class=\"mb-0\">3  friends</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-primary rounded\">Confirm</a>
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-secondary rounded\">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"iq-friend-request\">
                                            <div class=\"iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between\" >
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <img class=\"avatar-40 rounded\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/04.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"media-body ml-3\">
                                                        <h6 class=\"mb-0 \">Marsha Mello</h6>
                                                        <p class=\"mb-0\">15  friends</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-primary rounded\">Confirm</a>
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-secondary rounded\">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"text-center\">
                                            <a href=\"#\" class=\"mr-3 btn text-primary\">View More Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"search-toggle iq-waves-effect\">
                                <div id=\"lottie-beil\"></div>
                                <span class=\"bg-danger dots\"></span>
                            </a>
                            <div class=\"iq-sub-dropdown\">
                                <div class=\"iq-card shadow-none m-0\">
                                    <div class=\"iq-card-body p-0 \">
                                        <div class=\"bg-primary p-3\">
                                            <h5 class=\"mb-0 text-white\">All Notifications<small class=\"badge  badge-light float-right pt-1\">4</small></h5>
                                        </div>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Emma Watson Bni</h6>
                                                    <small class=\"float-right font-size-12\">Just Now</small>
                                                    <p class=\"mb-0\">95 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">New customer is join</h6>
                                                    <small class=\"float-right font-size-12\">5 days ago</small>
                                                    <p class=\"mb-0\">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Two customer is left</h6>
                                                    <small class=\"float-right font-size-12\">2 days ago</small>
                                                    <p class=\"mb-0\">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/04.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">New Mail from Fenny</h6>
                                                    <small class=\"float-right font-size-12\">3 days ago</small>
                                                    <p class=\"mb-0\">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"search-toggle iq-waves-effect\">
                                <div id=\"lottie-mail\"></div>
                                <span class=\"bg-primary count-mail\"></span>
                            </a>
                            <div class=\"iq-sub-dropdown\">
                                <div class=\"iq-card shadow-none m-0\">
                                    <div class=\"iq-card-body p-0 \">
                                        <div class=\"bg-primary p-3\">
                                            <h5 class=\"mb-0 text-white\">All Messages<small class=\"badge  badge-light float-right pt-1\">5</small></h5>
                                        </div>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Bni Emma Watson</h6>
                                                    <small class=\"float-left font-size-12\">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Lorem Ipsum Watson</h6>
                                                    <small class=\"float-left font-size-12\">20 Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Why do we use it?</h6>
                                                    <small class=\"float-left font-size-12\">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/04.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Variations Passages</h6>
                                                    <small class=\"float-left font-size-12\">12 Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/05.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Lorem Ipsum generators</h6>
                                                    <small class=\"float-left font-size-12\">5 Dec</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"navbar-list\">
                        <li>
                            <a href=\"#\" class=\"search-toggle iq-waves-effect d-flex align-items-center\">
                                <i class=\"ri-arrow-down-s-fill\"></i>
                            </a>
                            <div class=\"iq-sub-dropdown iq-user-dropdown\">
                                <div class=\"iq-card shadow-none m-0\">
                                    <div class=\"iq-card-body p-0 \">
                                        <div class=\"bg-primary p-3 line-height\">
                                            <h5 class=\"mb-0 text-white line-height\">Hello Bni Cyst</h5>
                                            <span class=\"text-white font-size-12\">Available</span>
                                        </div>
                                        <a href=\"profile.html\" class=\"iq-sub-card iq-bg-primary-hover\">
                                            <div class=\"media align-items-center\">
                                                <div class=\"rounded iq-card-icon iq-bg-primary\">
                                                    <i class=\"ri-file-user-line\"></i>
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">My Profile</h6>
                                                    <p class=\"mb-0 font-size-12\">View personal profile details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"profile-edit.html\" class=\"iq-sub-card iq-bg-warning-hover\">
                                            <div class=\"media align-items-center\">
                                                <div class=\"rounded iq-card-icon iq-bg-warning\">
                                                    <i class=\"ri-profile-line\"></i>
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Edit Profile</h6>
                                                    <p class=\"mb-0 font-size-12\">Modify your personal details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"account-setting.html\" class=\"iq-sub-card iq-bg-info-hover\">
                                            <div class=\"media align-items-center\">
                                                <div class=\"rounded iq-card-icon iq-bg-info\">
                                                    <i class=\"ri-account-box-line\"></i>
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Account settings</h6>
                                                    <p class=\"mb-0 font-size-12\">Manage your account parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"privacy-setting.html\" class=\"iq-sub-card iq-bg-danger-hover\">
                                            <div class=\"media align-items-center\">
                                                <div class=\"rounded iq-card-icon iq-bg-danger\">
                                                    <i class=\"ri-lock-line\"></i>
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Privacy Settings</h6>
                                                    <p class=\"mb-0 font-size-12\">Control your privacy parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"d-inline-block w-100 text-center p-3\">
                                            <a class=\"bg-primary iq-sign-btn\" href=\"sign-in.html\" role=\"button\">Sign out<i class=\"ri-login-box-line ml-2\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <!-- TOP Nav Bar END -->
    <!-- Right Sidebar Panel Start-->
    <div class=\"right-sidebar-mini right-sidebar\">
        <div class=\"right-sidebar-panel p-0\">
            <div class=\"iq-card shadow-none\">
                <div class=\"iq-card-body p-0\">
                    <div class=\"media-height p-3\">
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Anna Sthesia</a></h6>
                                <p class=\"mb-0\">Just Now</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Paul Molive</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Anna Mull</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/04.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Paige Turner</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Bob Frapples</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Barb Ackue</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Greta Life</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-away\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Ira Membrit</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-away\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Pete Sariya</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center\">
                            <div class=\"iq-profile-avatar\">
                                <img class=\"rounded-circle avatar-50\" src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Monty Carlo</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"right-sidebar-toggle bg-primary mt-3\">
                        <i class=\"ri-arrow-left-line side-left-icon\"></i>
                        <i class=\"ri-arrow-right-line side-right-icon\"><span class=\"ml-3 d-inline-block\">Close Menu</span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 625
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 626
        echo "    <!-- Right Sidebar Panel End-->

    <!-- Page Content  -->
    <div id=\"content-page\" class=\"content-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 row m-0 p-0\">
                    <div class=\"col-sm-12\">
                        <div id=\"post-modal-data\" class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-header d-flex justify-content-between\">
                                <div class=\"iq-header-title\">
                                    <h4 class=\"card-title\">Create Post</h4>
                                </div>
                            </div>
                            <div class=\"iq-card-body\" data-toggle=\"modal\" data-target=\"#post-modal\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"user-img\">
                                        <img src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/1.jpg"), "html", null, true);
        echo "\" alt=\"userimg\" class=\"avatar-60 rounded-circle\">
                                    </div>
                                    <form class=\"post-text ml-3 w-100\" action=\"javascript:void();\">
                                        <input type=\"text\" class=\"form-control rounded\" placeholder=\"Write something here...\" style=\"border:none;\">
                                    </form>
                                </div>
                                <hr>
                                <ul class=\"post-opt-block d-flex align-items-center list-inline m-0 p-0\">
                                    <li class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/07.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Photo/Video</li>
                                    <li class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/08.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Tag Friend</li>
                                    <li class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/09.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Feeling/Activity</li>
                                    <li class=\"iq-bg-primary rounded p-2 pointer\">
                                        <div class=\"iq-card-header-toolbar d-flex align-items-center\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" id=\"post-option\" data-toggle=\"dropdown\" >
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"post-option\" style=\"\">
                                                    <a class=\"dropdown-item\" href=\"#\">Check in</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Live Video</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Gif</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Watch Party</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Play with Friend</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"modal fade\" id=\"post-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"post-modalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"post-modalLabel\">Create Post</h5>
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\"><i class=\"ri-close-fill\"></i></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"user-img\">
                                                    <img src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/1.jpg"), "html", null, true);
        echo "\" alt=\"userimg\" class=\"avatar-60 rounded-circle img-fluid\">
                                                </div>
                                                <form class=\"post-text ml-3 w-100\" action=\"javascript:void();\">
                                                    <input type=\"text\" class=\"form-control rounded\" placeholder=\"Write something here...\" style=\"border:none;\">
                                                </form>
                                            </div>
                                            <hr>
                                            <ul class=\"d-flex flex-wrap align-items-center list-inline m-0 p-0\">
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/07.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Photo/Video</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/08.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Tag Friend</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/09.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Feeling/Activity</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/10.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Check in</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/11.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Live Video</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/12.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Gif</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/13.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Watch Party</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/14.png"), "html", null, true);
        echo "\" alt=\"icon\" class=\"img-fluid\"> Play with Friends</div>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class=\"other-option\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <div class=\"user-img mr-3\">
                                                            <img src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/1.jpg"), "html", null, true);
        echo "\" alt=\"userimg\" class=\"avatar-60 rounded-circle img-fluid\">
                                                        </div>
                                                        <h6>Your Story</h6>
                                                    </div>
                                                    <div class=\"iq-card-post-toolbar\">
                                                        <div class=\"dropdown\">
                                                   <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                   <span class=\"btn btn-primary\">Friend</span>
                                                   </span>
                                                            <div class=\"dropdown-menu m-0 p-0\">
                                                                <a class=\"dropdown-item p-3\" href=\"#\">
                                                                    <div class=\"d-flex align-items-top\">
                                                                        <div class=\"icon font-size-20\"><i class=\"ri-save-line\"></i></div>
                                                                        <div class=\"data ml-2\">
                                                                            <h6>Public</h6>
                                                                            <p class=\"mb-0\">Anyone on or off Facebook</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class=\"dropdown-item p-3\" href=\"#\">
                                                                    <div class=\"d-flex align-items-top\">
                                                                        <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                                        <div class=\"data ml-2\">
                                                                            <h6>Friends</h6>
                                                                            <p class=\"mb-0\">Your Friend on facebook</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class=\"dropdown-item p-3\" href=\"#\">
                                                                    <div class=\"d-flex align-items-top\">
                                                                        <div class=\"icon font-size-20\"><i class=\"ri-user-unfollow-line\"></i></div>
                                                                        <div class=\"data ml-2\">
                                                                            <h6>Friends except</h6>
                                                                            <p class=\"mb-0\">Don't show to some friends</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class=\"dropdown-item p-3\" href=\"#\">
                                                                    <div class=\"d-flex align-items-top\">
                                                                        <div class=\"icon font-size-20\"><i class=\"ri-notification-line\"></i></div>
                                                                        <div class=\"data ml-2\">
                                                                            <h6>Only Me</h6>
                                                                            <p class=\"mb-0\">Only me</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-primary d-block w-100 mt-3\">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"user-post-data\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/01.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Anna Sthesia</a></h5>
                                            <p class=\"mb-0 d-inline-block\">Add New Post</p>
                                            <p class=\"mb-0 text-primary\">Just Now</p>
                                        </div>
                                        <div class=\"iq-card-post-toolbar\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu m-0 p-0\">
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                </div>
                                <div class=\"user-post\">
                                    <div class=\"d-flex\">
                                        <div class=\"col-md-6\">
                                            <a href=\"javascript:void();\"><img src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/p2.jpg"), "html", null, true);
        echo "\" alt=\"post-image\" class=\"img-fluid rounded w-100\"></a>
                                        </div>
                                        <div class=\"col-md-6 row m-0 p-0\">
                                            <div class=\"col-sm-12\">
                                                <a href=\"javascript:void();\"><img src=\"";
        // line 848
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/p1.jpg"), "html", null, true);
        echo "\" alt=\"post-image\" class=\"img-fluid rounded w-100\"></a>
                                            </div>
                                            <div class=\"col-sm-12 mt-3\">
                                                <a href=\"javascript:void();\"><img src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/p3.jpg"), "html", null, true);
        echo "\" alt=\"post-image\" class=\"img-fluid rounded w-100\"></a>
                                            </div>
                                        </div>
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
        // line 863
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"";
        // line 866
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"";
        // line 867
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/02.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/03.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/04.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"";
        // line 870
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/05.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"";
        // line 871
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/06.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"";
        // line 872
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/07.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
        // line 920
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
        // line 937
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
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"user-post-data\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"";
        // line 970
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/03.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Barb Ackue</a></h5>
                                            <p class=\"mb-0 d-inline-block\">Added New Image in a Post</p>
                                            <p class=\"mb-0 text-primary\">1 hour ago</p>
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                </div>
                                <div class=\"user-post\">
                                    <a href=\"javascript:void();\"><img src=\"";
        // line 1028
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/p4.jpg"), "html", null, true);
        echo "\" alt=\"post-image\" class=\"img-fluid rounded w-100\"></a>
                                </div>
                                <div class=\"comment-area mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"like-block position-relative d-flex align-items-center\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"like-data\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"";
        // line 1037
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"";
        // line 1040
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"";
        // line 1041
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/02.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"";
        // line 1042
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/03.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"";
        // line 1043
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/04.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"";
        // line 1044
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/05.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"";
        // line 1045
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/06.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"";
        // line 1046
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/07.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
        // line 1094
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
        // line 1111
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
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"user-post-data\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"";
        // line 1144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/04.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Ira Membrit</a></h5>
                                            <p class=\"mb-0 d-inline-block\">Update her Status</p>
                                            <p class=\"mb-0 text-primary\">6 hour ago</p>
                                        </div>
                                        <div class=\"iq-card-post-toolbar\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu m-0 p-0\">
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                </div>
                                <div class=\"comment-area mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"like-block position-relative d-flex align-items-center\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"like-data\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"";
        // line 1208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"";
        // line 1211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"";
        // line 1212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/02.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"";
        // line 1213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/03.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"";
        // line 1214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/04.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"";
        // line 1215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/05.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"";
        // line 1216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/06.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"";
        // line 1217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/07.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
        // line 1265
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
        // line 1282
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
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"post-item\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"";
        // line 1315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Bni Cyst</a></h5>
                                            <p class=\"ml-1 mb-0 d-inline-block\">Changed Profile Picture</p>
                                            <p class=\"mb-0\">3 day ago</p>
                                        </div>
                                        <div class=\"iq-card-post-toolbar\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu m-0 p-0\">
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                <div class=\"user-post text-center\">
                                    <a href=\"javascript:void();\"><img src=\"";
        // line 1370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/p5.jpg"), "html", null, true);
        echo "\" alt=\"post-image\" class=\"img-fluid rounded w-100 mt-3\"></a>
                                </div>
                                <div class=\"comment-area mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"like-block position-relative d-flex align-items-center\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"like-data\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"";
        // line 1379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"";
        // line 1382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"";
        // line 1383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/02.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"";
        // line 1384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/03.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"";
        // line 1385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/04.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"";
        // line 1386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/05.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"";
        // line 1387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/06.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"";
        // line 1388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/07.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
        // line 1436
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
        // line 1453
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
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"user-post-data\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"";
        // line 1486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/02.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Paige Turner</a></h5>
                                            <p class=\"mb-0 d-inline-block\">Added New Video in his Timeline</p>
                                            <p class=\"mb-0 text-primary\">1 day ago</p>
                                        </div>
                                        <div class=\"iq-card-post-toolbar\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu m-0 p-0\">
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                </div>
                                <div class=\"user-post\">
                                    <div class=\"embed-responsive embed-responsive-16by9\">
                                        <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/j_GsIanLxZk?rel=0\" allowfullscreen></iframe>
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
        // line 1555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"";
        // line 1558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/01.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"";
        // line 1559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/02.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"";
        // line 1560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/03.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"";
        // line 1561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/04.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"";
        // line 1562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/05.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"";
        // line 1563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/06.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"";
        // line 1564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon/07.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
        // line 1612
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
        // line 1629
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
        // line 1674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/s2.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Anna Mull</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex mb-4 align-items-center\">
                                    <img src=\"";
        // line 1681
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/s3.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Ira Membrit</h5>
                                        <p class=\"mb-0\">4 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"";
        // line 1688
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
        // line 1721
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/s4.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Web Workshop</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"";
        // line 1728
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
        // line 1746
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user/01.jpg"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Anna Sthesia</h5>
                                        <p class=\"mb-0\">Today</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"";
        // line 1753
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
        // line 1786
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/42.png"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid avatar-50\">
                                        <div class=\"stories-data ml-3\">
                                            <h5>Iqonic Studio</h5>
                                            <p class=\"mb-0\">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src=\"";
        // line 1792
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/small/img-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Responsive image\">
                                    <div class=\"mt-3\"><a href=\"#\" class=\"btn d-block\"><i class=\"ri-thumb-up-line mr-2\"></i> Like Page</a></div>
                                </li>
                                <li class=\"\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"";
        // line 1797
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/page-img/42.png"), "html", null, true);
        echo "\" alt=\"story-img\" class=\"rounded-circle img-fluid avatar-50\">
                                        <div class=\"stories-data ml-3\">
                                            <h5>Cakes & Bakes </h5>
                                            <p class=\"mb-0\">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src=\"";
        // line 1803
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
        // line 1811
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

    // line 1819
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1820
        echo "<!-- Footer -->
<footer class=\"bg-white iq-footer\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item\"><a href=\"privacy-policy.html\">Privacy Policy</a></li>
                    <li class=\"list-inline-item\"><a href=\"terms-of-service.html\">Terms of Use</a></li>
                </ul>
            </div>
            <div class=\"col-lg-6 text-right\">
                Copyright 2020 <a href=\"#\">SocialV</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1841
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 1842
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1843
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1844
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Appear JavaScript -->
<script src=\"";
        // line 1846
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
<!-- Countdown JavaScript -->
<script src=\"";
        // line 1848
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/countdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- Counterup JavaScript -->
<script src=\"";
        // line 1850
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<!-- Wow JavaScript -->
<script src=\"";
        // line 1853
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
<!-- Apexcharts JavaScript -->
<script src=\"";
        // line 1855
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/apexcharts.js"), "html", null, true);
        echo "\"></script>
<!-- Slick JavaScript -->
<script src=\"";
        // line 1857
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<!-- Select2 JavaScript -->
<script src=\"";
        // line 1859
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
<!-- Owl Carousel JavaScript -->
<script src=\"";
        // line 1861
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- Magnific Popup JavaScript -->
<script src=\"";
        // line 1863
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src=\"";
        // line 1865
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/smooth-scrollbar.js"), "html", null, true);
        echo "\"></script>
<!-- lottie JavaScript -->
<script src=\"";
        // line 1867
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lottie.js"), "html", null, true);
        echo "\"></script>
<!-- am core JavaScript -->
<script src=\"";
        // line 1869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core.js"), "html", null, true);
        echo "\"></script>
<!-- am charts JavaScript -->
<script src=\"";
        // line 1871
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script>
<!-- am animated JavaScript -->
<script src=\"";
        // line 1873
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/animated.js"), "html", null, true);
        echo "\"></script>
<!-- am kelly JavaScript -->
<script src=\"";
        // line 1875
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/kelly.js"), "html", null, true);
        echo "\"></script>
<!-- am maps JavaScript -->
<script src=\"";
        // line 1877
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/maps.js"), "html", null, true);
        echo "\"></script>
<!-- am worldLow JavaScript -->
<script src=\"";
        // line 1879
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/worldLow.js"), "html", null, true);
        echo "\"></script>
<!-- Chart Custom JavaScript -->
<script src=\"";
        // line 1881
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chart-custom.js"), "html", null, true);
        echo "\"></script>
<!-- Custom JavaScript -->
<script src=\"";
        // line 1883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2490 => 1883,  2485 => 1881,  2480 => 1879,  2475 => 1877,  2470 => 1875,  2465 => 1873,  2460 => 1871,  2455 => 1869,  2450 => 1867,  2445 => 1865,  2440 => 1863,  2435 => 1861,  2430 => 1859,  2425 => 1857,  2420 => 1855,  2415 => 1853,  2410 => 1851,  2406 => 1850,  2401 => 1848,  2396 => 1846,  2391 => 1844,  2387 => 1843,  2382 => 1842,  2372 => 1841,  2346 => 1820,  2336 => 1819,  2319 => 1811,  2308 => 1803,  2299 => 1797,  2291 => 1792,  2282 => 1786,  2246 => 1753,  2236 => 1746,  2215 => 1728,  2205 => 1721,  2169 => 1688,  2159 => 1681,  2149 => 1674,  2101 => 1629,  2081 => 1612,  2030 => 1564,  2026 => 1563,  2022 => 1562,  2018 => 1561,  2014 => 1560,  2010 => 1559,  2006 => 1558,  2000 => 1555,  1928 => 1486,  1892 => 1453,  1872 => 1436,  1821 => 1388,  1817 => 1387,  1813 => 1386,  1809 => 1385,  1805 => 1384,  1801 => 1383,  1797 => 1382,  1791 => 1379,  1779 => 1370,  1721 => 1315,  1685 => 1282,  1665 => 1265,  1614 => 1217,  1610 => 1216,  1606 => 1215,  1602 => 1214,  1598 => 1213,  1594 => 1212,  1590 => 1211,  1584 => 1208,  1517 => 1144,  1481 => 1111,  1461 => 1094,  1410 => 1046,  1406 => 1045,  1402 => 1044,  1398 => 1043,  1394 => 1042,  1390 => 1041,  1386 => 1040,  1380 => 1037,  1368 => 1028,  1307 => 970,  1271 => 937,  1251 => 920,  1200 => 872,  1196 => 871,  1192 => 870,  1188 => 869,  1184 => 868,  1180 => 867,  1176 => 866,  1170 => 863,  1155 => 851,  1149 => 848,  1142 => 844,  1079 => 784,  1012 => 720,  1001 => 712,  995 => 709,  989 => 706,  983 => 703,  977 => 700,  971 => 697,  965 => 694,  959 => 691,  947 => 682,  915 => 653,  911 => 652,  907 => 651,  896 => 643,  877 => 626,  867 => 625,  840 => 608,  828 => 599,  816 => 590,  804 => 581,  792 => 572,  780 => 563,  768 => 554,  756 => 545,  744 => 536,  732 => 527,  637 => 435,  623 => 424,  609 => 413,  595 => 402,  581 => 391,  551 => 364,  536 => 352,  521 => 340,  506 => 328,  469 => 294,  449 => 277,  429 => 260,  409 => 243,  383 => 220,  368 => 208,  355 => 198,  201 => 47,  194 => 43,  190 => 42,  182 => 37,  165 => 22,  155 => 21,  145 => 1819,  142 => 1818,  139 => 625,  137 => 21,  127 => 20,  116 => 18,  111 => 16,  106 => 14,  101 => 12,  95 => 10,  85 => 9,  73 => 1885,  71 => 1841,  66 => 1838,  64 => 20,  61 => 19,  59 => 9,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>SocialV - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    {% block css%}
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.ico') }}\" />
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\">
    <!-- Typography CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/typography.css') }}\">
    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/responsive.css') }}\">{% endblock %}
</head>
{% block body %}
{% block header%}
<body class=\"right-column-fixed\">
<!-- loader Start -->
<div id=\"loading\">
    <div id=\"loading-center\">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class=\"wrapper\">
    <!-- Sidebar  -->
    <div class=\"iq-sidebar\">
        <div id=\"sidebar-scrollbar\">
            <nav class=\"iq-sidebar-menu\">
                <ul id=\"iq-sidebar-toggle\" class=\"iq-menu\">
                    <li class=\"active\">
                        <a  href=\"{{ path('postes_index') }}\" class=\"iq-waves-effect\"><i class=\"las la-newspaper\"></i><span>Newsfeed</span></a>
                    </li>
                    <li>
                        <a href=\"#mailbox\" class=\"iq-waves-effect collapsed\"  data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-mail-line\"></i><span>Events</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                        <ul id=\"mailbox\" class=\"iq-submenu collapse\" data-parent=\"#iq-sidebar-toggle\">
                                                      <li><a  href=\"{{ path('evenement_index') }}\" ><i class=\"ri-inbox-line\"></i>Upcoming Events</a></li>
                                                     <li><a  href=\"{{ path('evenement_new') }}\" ><i class=\"ri-edit-line\"></i>Host an Event</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('annonce_index') }}\" class=\"iq-waves-effect\"><i class=\"las la-user-friends\"></i><span>Jobs</span></a>
                    </li>
                    <li>
                        <a href=\"group.html\" class=\"iq-waves-effect\"><i class=\"las la-users\"></i><span>Group</span></a>
                    </li>
                    <li>
                        <a href=\"profile-images.html\" class=\"iq-waves-effect\"><i class=\"las la-image\"></i><span>Profile Image</span></a>
                    </li>
                    <li>
                        <a href=\"profile-video.html\" class=\"iq-waves-effect\"><i class=\"las la-video\"></i><span>Profile Video</span></a>
                    </li>
                    <li>
                        <a href=\"profile-event.html\" class=\"iq-waves-effect\"><i class=\"las la-film\"></i><span>Profile Events</span></a>
                    </li>
                    <li>
                        <a href=\"notification.html\" class=\"iq-waves-effect\"><i class=\"las la-bell\"></i><span>Notification</span></a>
                    </li>
                    <li>
                        <a href=\"file.html\" class=\"iq-waves-effect\"><i class=\"las la-file\"></i><span>Files</span></a>
                    </li>
                    <li>
                        <a href=\"friend-request.html\" class=\"iq-waves-effect\"><i class=\"las la-anchor\"></i><span>Friend Request</span></a>
                    </li>
                    <li>
                        <a href=\"chat.html\" class=\"iq-waves-effect\"><i class=\"lab la-rocketchat\"></i><span>Chat</span></a>
                    </li>
                    <li>
                        <a href=\"todo.html\" class=\"iq-waves-effect\"><i class=\"las la-check-circle\"></i><span>Todo</span></a>
                    </li>
                    <li>
                        <a href=\"calendar.html\" class=\"iq-waves-effect\"><i class=\"las la-calendar\"></i><span>Calendar</span></a>
                    </li>
                    <li>
                        <a href=\"birthday.html\" class=\"iq-waves-effect\"><i class=\"las la-birthday-cake\"></i><span>Birthday</span></a>
                    </li>
                    <li>
                        <a href=\"weather.html\" class=\"iq-waves-effect\"><i class=\"ri-snowy-line\"></i><span>Weather</span></a>
                    </li>
                    <li>
                        <a href=\"music.html\" class=\"iq-waves-effect\"><i class=\"ri-play-circle-line\"></i><span>Music</span></a>
                    </li>

                    <li>
                        <a href=\"#ui-elements\" class=\"iq-waves-effect collapsed\"  data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-focus-2-line\"></i><span>Ui-Elements</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                        <ul id=\"ui-elements\" class=\"iq-submenu collapse\" data-parent=\"#iq-sidebar-toggle\">
                            <li>
                                <a href=\"#ui-kit\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-pencil-ruler-line\"></i><span>UI Kit</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"ui-kit\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"ui-colors.html\"><i class=\"ri-font-color\"></i>colors</a></li>
                                    <li><a href=\"ui-typography.html\"><i class=\"ri-text\"></i>Typography</a></li>
                                    <li><a href=\"ui-alerts.html\"><i class=\"ri-alert-line\"></i>Alerts</a></li>
                                    <li><a href=\"ui-badges.html\"><i class=\"ri-building-3-line\"></i>Badges</a></li>
                                    <li><a href=\"ui-breadcrumb.html\"><i class=\"ri-menu-2-line\"></i>Breadcrumb</a></li>
                                    <li><a href=\"ui-buttons.html\"><i class=\"ri-checkbox-blank-line\"></i>Buttons</a></li>
                                    <li><a href=\"ui-cards.html\"><i class=\"ri-bank-card-line\"></i>Cards</a></li>
                                    <li><a href=\"ui-carousel.html\"><i class=\"ri-slideshow-line\"></i>Carousel</a></li>
                                    <li><a href=\"ui-embed-video.html\"><i class=\"ri-slideshow-2-line\"></i>Video</a></li>
                                    <li><a href=\"ui-grid.html\"><i class=\"ri-grid-line\"></i>Grid</a></li>
                                    <li><a href=\"ui-images.html\"><i class=\"ri-image-line\"></i>Images</a></li>
                                    <li><a href=\"ui-list-group.html\"><i class=\"ri-file-list-3-line\"></i>list Group</a></li>
                                    <li><a href=\"ui-media-object.html\"><i class=\"ri-camera-line\"></i>Media</a></li>
                                    <li><a href=\"ui-modal.html\"><i class=\"ri-stop-mini-line\"></i>Modal</a></li>
                                    <li><a href=\"ui-notifications.html\"><i class=\"ri-notification-line\"></i>Notifications</a></li>
                                    <li><a href=\"ui-pagination.html\"><i class=\"ri-pages-line\"></i>Pagination</a></li>
                                    <li><a href=\"ui-popovers.html\"><i class=\"ri-folder-shield-2-line\"></i>Popovers</a></li>
                                    <li><a href=\"ui-progressbars.html\"><i class=\"ri-battery-low-line\"></i>Progressbars</a></li>
                                    <li><a href=\"ui-tabs.html\"><i class=\"ri-database-line\"></i>Tabs</a></li>
                                    <li><a href=\"ui-tooltips.html\"><i class=\"ri-record-mail-line\"></i>Tooltips</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#forms\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-profile-line\"></i><span>Forms</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"forms\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"form-layout.html\"><i class=\"ri-tablet-line\"></i>Form Elements</a></li>
                                    <li><a href=\"form-validation.html\"><i class=\"ri-device-line\"></i>Form Validation</a></li>
                                    <li><a href=\"form-switch.html\"><i class=\"ri-toggle-line\"></i>Form Switch</a></li>
                                    <li><a href=\"form-chechbox.html\"><i class=\"ri-checkbox-line\"></i>Form Checkbox</a></li>
                                    <li><a href=\"form-radio.html\"><i class=\"ri-radio-button-line\"></i>Form Radio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#wizard-form\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-archive-drawer-line\"></i><span>Forms Wizard</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"wizard-form\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"form-wizard.html\"><i class=\"ri-clockwise-line\"></i>Simple Wizard</a></li>
                                    <li><a href=\"form-wizard-validate.html\"><i class=\"ri-clockwise-2-line\"></i>Validate Wizard</a></li>
                                    <li><a href=\"form-wizard-vertical.html\"><i class=\"ri-anticlockwise-line\"></i>Vertical Wizard</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#tables\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-table-line\"></i><span>Table</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"tables\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"tables-basic.html\"><i class=\"ri-table-line\"></i>Basic Tables</a></li>
                                    <li><a href=\"data-table.html\"><i class=\"ri-database-line\"></i>Data Table</a></li>
                                    <li><a href=\"table-editable.html\"><i class=\"ri-refund-line\"></i>Editable Table</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#icons\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-list-check\"></i><span>Icons</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"icons\" class=\"iq-submenu collapse\" data-parent=\"#ui-elements\">
                                    <li><a href=\"icon-dripicons.html\"><i class=\"ri-stack-line\"></i>Dripicons</a></li>
                                    <li><a href=\"icon-fontawesome-5.html\"><i class=\"ri-facebook-fill\"></i>Font Awesome 5</a></li>
                                    <li><a href=\"icon-lineawesome.html\"><i class=\"ri-keynote-line\"></i>line Awesome</a></li>
                                    <li><a href=\"icon-remixicon.html\"><i class=\"ri-remixicon-line\"></i>Remixicon</a></li>
                                    <li><a href=\"icon-unicons.html\"><i class=\"ri-underline\"></i>unicons</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#pages\" class=\"iq-waves-effect collapsed\"  data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-pages-line\"></i><span>Pages</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                        <ul id=\"pages\" class=\"iq-submenu collapse\" data-parent=\"#iq-sidebar-toggle\">
                            <li>
                                <a href=\"#authentication\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-pages-line\"></i><span>Authentication</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"authentication\" class=\"iq-submenu collapse\" data-parent=\"#pages\">
                                    <li><a href=\"sign-in.html\"><i class=\"ri-login-box-line\"></i>Login</a></li>
                                    <li><a href=\"sign-up.html\"><i class=\"ri-login-circle-line\"></i>Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\"><i class=\"ri-record-mail-line\"></i>Recover Password</a></li>
                                    <li><a href=\"pages-confirm-mail.html\"><i class=\"ri-file-code-line\"></i>Confirm Mail</a></li>
                                    <li><a href=\"pages-lock-screen.html\"><i class=\"ri-lock-line\"></i>Lock Screen</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#extra-pages\" class=\"iq-waves-effect collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\"><i class=\"ri-pantone-line\"></i><span>Extra Pages</span><i class=\"ri-arrow-right-s-line iq-arrow-right\"></i></a>
                                <ul id=\"extra-pages\" class=\"iq-submenu collapse\" data-parent=\"#pages\">
                                    <li><a href=\"pages-timeline.html\"><i class=\"ri-map-pin-time-line\"></i>Timeline</a></li>
                                    <li><a href=\"pages-invoice.html\"><i class=\"ri-question-answer-line\"></i>Invoice</a></li>
                                    <li><a href=\"blank-page.html\"><i class=\"ri-invision-line\"></i>Blank Page</a></li>
                                    <li><a href=\"pages-error.html\"><i class=\"ri-error-warning-line\"></i>Error 404</a></li>
                                    <li><a href=\"pages-error-500.html\"><i class=\"ri-error-warning-line\"></i>Error 500</a></li>
                                    <li><a href=\"pages-pricing.html\"><i class=\"ri-price-tag-line\"></i>Pricing</a></li>
                                    <li><a href=\"pages-pricing-one.html\"><i class=\"ri-price-tag-2-line\"></i>Pricing 1</a></li>
                                    <li><a href=\"pages-maintenance.html\"><i class=\"ri-archive-line\"></i>Maintenance</a></li>
                                    <li><a href=\"pages-comingsoon.html\"><i class=\"ri-mastercard-line\"></i>Coming Soon</a></li>
                                    <li><a href=\"pages-faq.html\"><i class=\"ri-compasses-line\"></i>Faq</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <div class=\"p-3\"></div>
        </div>
    </div>

    <!-- TOP Nav Bar -->
    <div class=\"iq-top-navbar\">
        <div class=\"iq-navbar-custom\">
            <nav class=\"navbar navbar-expand-lg navbar-light p-0\">
                <div class=\"iq-navbar-logo d-flex justify-content-between\">
                    <a href=\"index.html\">
                        <img src=\"{{ asset('images/logo.png')}}\" class=\"img-fluid\" alt=\"\">
                        <span>SocialV</span>
                    </a>
                    <div class=\"iq-menu-bt align-self-center\">
                        <div class=\"wrapper-menu\">
                            <div class=\"main-circle\"><i class=\"ri-menu-line\"></i></div>
                        </div>
                    </div>
                </div>
                <div class=\"iq-search-bar\">
                    <form action=\"{{path('evenement_search')}}\"  method=\"post\" class=\"searchbox\">
                        <input name=\"mots\" type=\"text\" class=\"text search-input\" placeholder=\"Type here to search...\">
                        <a class=\"search-link\" href=\"#\"><i class=\"ri-search-line\"></i></a>
                    </form>
                </div>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"  aria-label=\"Toggle navigation\">
                    <i class=\"ri-menu-3-line\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto navbar-list\">
                        <li>
                            <a href=\"profile.html\" class=\"iq-waves-effect d-flex align-items-center\">
                                <img src=\"{{ asset('images/user/1.jpg')}}\" class=\"img-fluid rounded-circle mr-3\" alt=\"user\">
                                <div class=\"caption\">
                                    <h6 class=\"mb-0 line-height\">Bni Cyst</h6>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html\" class=\"iq-waves-effect d-flex align-items-center\">
                                <i class=\"ri-home-line\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"search-toggle iq-waves-effect\" href=\"#\"><i class=\"ri-group-line\"></i></a>
                            <div class=\"iq-sub-dropdown iq-sub-dropdown-large\">
                                <div class=\"iq-card shadow-none m-0\">
                                    <div class=\"iq-card-body p-0 \">
                                        <div class=\"bg-primary p-3\">
                                            <h5 class=\"mb-0 text-white\">Friend Request<small class=\"badge  badge-light float-right pt-1\">4</small></h5>
                                        </div>
                                        <div class=\"iq-friend-request\">
                                            <div class=\"iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between\" >
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/01.jpg')}}\" alt=\"\">
                                                    </div>
                                                    <div class=\"media-body ml-3\">
                                                        <h6 class=\"mb-0 \">Jaques Amole</h6>
                                                        <p class=\"mb-0\">40  friends</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-primary rounded\">Confirm</a>
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-secondary rounded\">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"iq-friend-request\">
                                            <div class=\"iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between\" >
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/02.jpg')}}\" alt=\"\">
                                                    </div>
                                                    <div class=\"media-body ml-3\">
                                                        <h6 class=\"mb-0 \">Lucy Tania</h6>
                                                        <p class=\"mb-0\">12  friends</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-primary rounded\">Confirm</a>
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-secondary rounded\">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"iq-friend-request\">
                                            <div class=\"iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between\" >
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/03.jpg')}}\" alt=\"\">
                                                    </div>
                                                    <div class=\"media-body ml-3\">
                                                        <h6 class=\"mb-0 \">Manny Petty</h6>
                                                        <p class=\"mb-0\">3  friends</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-primary rounded\">Confirm</a>
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-secondary rounded\">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"iq-friend-request\">
                                            <div class=\"iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between\" >
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"\">
                                                        <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/04.jpg')}}\" alt=\"\">
                                                    </div>
                                                    <div class=\"media-body ml-3\">
                                                        <h6 class=\"mb-0 \">Marsha Mello</h6>
                                                        <p class=\"mb-0\">15  friends</p>
                                                    </div>
                                                </div>
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-primary rounded\">Confirm</a>
                                                    <a href=\"javascript:void();\" class=\"mr-3 btn btn-secondary rounded\">Delete Request</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"text-center\">
                                            <a href=\"#\" class=\"mr-3 btn text-primary\">View More Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"search-toggle iq-waves-effect\">
                                <div id=\"lottie-beil\"></div>
                                <span class=\"bg-danger dots\"></span>
                            </a>
                            <div class=\"iq-sub-dropdown\">
                                <div class=\"iq-card shadow-none m-0\">
                                    <div class=\"iq-card-body p-0 \">
                                        <div class=\"bg-primary p-3\">
                                            <h5 class=\"mb-0 text-white\">All Notifications<small class=\"badge  badge-light float-right pt-1\">4</small></h5>
                                        </div>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/01.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Emma Watson Bni</h6>
                                                    <small class=\"float-right font-size-12\">Just Now</small>
                                                    <p class=\"mb-0\">95 MB</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/02.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">New customer is join</h6>
                                                    <small class=\"float-right font-size-12\">5 days ago</small>
                                                    <p class=\"mb-0\">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/03.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Two customer is left</h6>
                                                    <small class=\"float-right font-size-12\">2 days ago</small>
                                                    <p class=\"mb-0\">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/04.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">New Mail from Fenny</h6>
                                                    <small class=\"float-right font-size-12\">3 days ago</small>
                                                    <p class=\"mb-0\">Cyst Bni</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"search-toggle iq-waves-effect\">
                                <div id=\"lottie-mail\"></div>
                                <span class=\"bg-primary count-mail\"></span>
                            </a>
                            <div class=\"iq-sub-dropdown\">
                                <div class=\"iq-card shadow-none m-0\">
                                    <div class=\"iq-card-body p-0 \">
                                        <div class=\"bg-primary p-3\">
                                            <h5 class=\"mb-0 text-white\">All Messages<small class=\"badge  badge-light float-right pt-1\">5</small></h5>
                                        </div>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/01.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Bni Emma Watson</h6>
                                                    <small class=\"float-left font-size-12\">13 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/02.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Lorem Ipsum Watson</h6>
                                                    <small class=\"float-left font-size-12\">20 Apr</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/03.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Why do we use it?</h6>
                                                    <small class=\"float-left font-size-12\">30 Jun</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/04.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Variations Passages</h6>
                                                    <small class=\"float-left font-size-12\">12 Sep</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"#\" class=\"iq-sub-card\" >
                                            <div class=\"media align-items-center\">
                                                <div class=\"\">
                                                    <img class=\"avatar-40 rounded\" src=\"{{ asset('images/user/05.jpg')}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Lorem Ipsum generators</h6>
                                                    <small class=\"float-left font-size-12\">5 Dec</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"navbar-list\">
                        <li>
                            <a href=\"#\" class=\"search-toggle iq-waves-effect d-flex align-items-center\">
                                <i class=\"ri-arrow-down-s-fill\"></i>
                            </a>
                            <div class=\"iq-sub-dropdown iq-user-dropdown\">
                                <div class=\"iq-card shadow-none m-0\">
                                    <div class=\"iq-card-body p-0 \">
                                        <div class=\"bg-primary p-3 line-height\">
                                            <h5 class=\"mb-0 text-white line-height\">Hello Bni Cyst</h5>
                                            <span class=\"text-white font-size-12\">Available</span>
                                        </div>
                                        <a href=\"profile.html\" class=\"iq-sub-card iq-bg-primary-hover\">
                                            <div class=\"media align-items-center\">
                                                <div class=\"rounded iq-card-icon iq-bg-primary\">
                                                    <i class=\"ri-file-user-line\"></i>
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">My Profile</h6>
                                                    <p class=\"mb-0 font-size-12\">View personal profile details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"profile-edit.html\" class=\"iq-sub-card iq-bg-warning-hover\">
                                            <div class=\"media align-items-center\">
                                                <div class=\"rounded iq-card-icon iq-bg-warning\">
                                                    <i class=\"ri-profile-line\"></i>
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Edit Profile</h6>
                                                    <p class=\"mb-0 font-size-12\">Modify your personal details.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"account-setting.html\" class=\"iq-sub-card iq-bg-info-hover\">
                                            <div class=\"media align-items-center\">
                                                <div class=\"rounded iq-card-icon iq-bg-info\">
                                                    <i class=\"ri-account-box-line\"></i>
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Account settings</h6>
                                                    <p class=\"mb-0 font-size-12\">Manage your account parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href=\"privacy-setting.html\" class=\"iq-sub-card iq-bg-danger-hover\">
                                            <div class=\"media align-items-center\">
                                                <div class=\"rounded iq-card-icon iq-bg-danger\">
                                                    <i class=\"ri-lock-line\"></i>
                                                </div>
                                                <div class=\"media-body ml-3\">
                                                    <h6 class=\"mb-0 \">Privacy Settings</h6>
                                                    <p class=\"mb-0 font-size-12\">Control your privacy parameters.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class=\"d-inline-block w-100 text-center p-3\">
                                            <a class=\"bg-primary iq-sign-btn\" href=\"sign-in.html\" role=\"button\">Sign out<i class=\"ri-login-box-line ml-2\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <!-- TOP Nav Bar END -->
    <!-- Right Sidebar Panel Start-->
    <div class=\"right-sidebar-mini right-sidebar\">
        <div class=\"right-sidebar-panel p-0\">
            <div class=\"iq-card shadow-none\">
                <div class=\"iq-card-body p-0\">
                    <div class=\"media-height p-3\">
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/01.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Anna Sthesia</a></h6>
                                <p class=\"mb-0\">Just Now</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/02.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Paul Molive</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/03.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Anna Mull</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/04.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Paige Turner</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/11.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Bob Frapples</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/02.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Barb Ackue</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-online\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/03.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Greta Life</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-away\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/12.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Ira Membrit</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center mb-4\">
                            <div class=\"iq-profile-avatar status-away\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/01.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Pete Sariya</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                        <div class=\"media align-items-center\">
                            <div class=\"iq-profile-avatar\">
                                <img class=\"rounded-circle avatar-50\" src=\"{{ asset('images/user/02.jpg')}}\" alt=\"\">
                            </div>
                            <div class=\"media-body ml-3\">
                                <h6 class=\"mb-0\"><a href=\"#\">Monty Carlo</a></h6>
                                <p class=\"mb-0\">Admin</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"right-sidebar-toggle bg-primary mt-3\">
                        <i class=\"ri-arrow-left-line side-left-icon\"></i>
                        <i class=\"ri-arrow-right-line side-right-icon\"><span class=\"ml-3 d-inline-block\">Close Menu</span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
    {% block content %}
    <!-- Right Sidebar Panel End-->

    <!-- Page Content  -->
    <div id=\"content-page\" class=\"content-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 row m-0 p-0\">
                    <div class=\"col-sm-12\">
                        <div id=\"post-modal-data\" class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-header d-flex justify-content-between\">
                                <div class=\"iq-header-title\">
                                    <h4 class=\"card-title\">Create Post</h4>
                                </div>
                            </div>
                            <div class=\"iq-card-body\" data-toggle=\"modal\" data-target=\"#post-modal\">
                                <div class=\"d-flex align-items-center\">
                                    <div class=\"user-img\">
                                        <img src=\"{{ asset('images/user/1.jpg')}}\" alt=\"userimg\" class=\"avatar-60 rounded-circle\">
                                    </div>
                                    <form class=\"post-text ml-3 w-100\" action=\"javascript:void();\">
                                        <input type=\"text\" class=\"form-control rounded\" placeholder=\"Write something here...\" style=\"border:none;\">
                                    </form>
                                </div>
                                <hr>
                                <ul class=\"post-opt-block d-flex align-items-center list-inline m-0 p-0\">
                                    <li class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/07.png')}}\" alt=\"icon\" class=\"img-fluid\"> Photo/Video</li>
                                    <li class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/08.png')}}\" alt=\"icon\" class=\"img-fluid\"> Tag Friend</li>
                                    <li class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/09.png')}}\" alt=\"icon\" class=\"img-fluid\"> Feeling/Activity</li>
                                    <li class=\"iq-bg-primary rounded p-2 pointer\">
                                        <div class=\"iq-card-header-toolbar d-flex align-items-center\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" id=\"post-option\" data-toggle=\"dropdown\" >
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"post-option\" style=\"\">
                                                    <a class=\"dropdown-item\" href=\"#\">Check in</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Live Video</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Gif</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Watch Party</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Play with Friend</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"modal fade\" id=\"post-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"post-modalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title\" id=\"post-modalLabel\">Create Post</h5>
                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\"><i class=\"ri-close-fill\"></i></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"user-img\">
                                                    <img src=\"{{ asset('images/user/1.jpg')}}\" alt=\"userimg\" class=\"avatar-60 rounded-circle img-fluid\">
                                                </div>
                                                <form class=\"post-text ml-3 w-100\" action=\"javascript:void();\">
                                                    <input type=\"text\" class=\"form-control rounded\" placeholder=\"Write something here...\" style=\"border:none;\">
                                                </form>
                                            </div>
                                            <hr>
                                            <ul class=\"d-flex flex-wrap align-items-center list-inline m-0 p-0\">
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/07.png')}}\" alt=\"icon\" class=\"img-fluid\"> Photo/Video</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/08.png')}}\" alt=\"icon\" class=\"img-fluid\"> Tag Friend</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/09.png')}}\" alt=\"icon\" class=\"img-fluid\"> Feeling/Activity</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/10.png')}}\" alt=\"icon\" class=\"img-fluid\"> Check in</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/11.png')}}\" alt=\"icon\" class=\"img-fluid\"> Live Video</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/12.png')}}\" alt=\"icon\" class=\"img-fluid\"> Gif</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/13.png')}}\" alt=\"icon\" class=\"img-fluid\"> Watch Party</div>
                                                </li>
                                                <li class=\"col-md-6 mb-3\">
                                                    <div class=\"iq-bg-primary rounded p-2 pointer mr-3\"><a href=\"#\"></a><img src=\"{{ asset('images/small/14.png')}}\" alt=\"icon\" class=\"img-fluid\"> Play with Friends</div>
                                                </li>
                                            </ul>
                                            <hr>
                                            <div class=\"other-option\">
                                                <div class=\"d-flex align-items-center justify-content-between\">
                                                    <div class=\"d-flex align-items-center\">
                                                        <div class=\"user-img mr-3\">
                                                            <img src=\"{{ asset('images/user/1.jpg')}}\" alt=\"userimg\" class=\"avatar-60 rounded-circle img-fluid\">
                                                        </div>
                                                        <h6>Your Story</h6>
                                                    </div>
                                                    <div class=\"iq-card-post-toolbar\">
                                                        <div class=\"dropdown\">
                                                   <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                   <span class=\"btn btn-primary\">Friend</span>
                                                   </span>
                                                            <div class=\"dropdown-menu m-0 p-0\">
                                                                <a class=\"dropdown-item p-3\" href=\"#\">
                                                                    <div class=\"d-flex align-items-top\">
                                                                        <div class=\"icon font-size-20\"><i class=\"ri-save-line\"></i></div>
                                                                        <div class=\"data ml-2\">
                                                                            <h6>Public</h6>
                                                                            <p class=\"mb-0\">Anyone on or off Facebook</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class=\"dropdown-item p-3\" href=\"#\">
                                                                    <div class=\"d-flex align-items-top\">
                                                                        <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                                        <div class=\"data ml-2\">
                                                                            <h6>Friends</h6>
                                                                            <p class=\"mb-0\">Your Friend on facebook</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class=\"dropdown-item p-3\" href=\"#\">
                                                                    <div class=\"d-flex align-items-top\">
                                                                        <div class=\"icon font-size-20\"><i class=\"ri-user-unfollow-line\"></i></div>
                                                                        <div class=\"data ml-2\">
                                                                            <h6>Friends except</h6>
                                                                            <p class=\"mb-0\">Don't show to some friends</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a class=\"dropdown-item p-3\" href=\"#\">
                                                                    <div class=\"d-flex align-items-top\">
                                                                        <div class=\"icon font-size-20\"><i class=\"ri-notification-line\"></i></div>
                                                                        <div class=\"data ml-2\">
                                                                            <h6>Only Me</h6>
                                                                            <p class=\"mb-0\">Only me</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-primary d-block w-100 mt-3\">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"user-post-data\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"{{ asset('images/user/01.jpg')}}\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Anna Sthesia</a></h5>
                                            <p class=\"mb-0 d-inline-block\">Add New Post</p>
                                            <p class=\"mb-0 text-primary\">Just Now</p>
                                        </div>
                                        <div class=\"iq-card-post-toolbar\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu m-0 p-0\">
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                </div>
                                <div class=\"user-post\">
                                    <div class=\"d-flex\">
                                        <div class=\"col-md-6\">
                                            <a href=\"javascript:void();\"><img src=\"{{ asset('images/page-img/p2.jpg')}}\" alt=\"post-image\" class=\"img-fluid rounded w-100\"></a>
                                        </div>
                                        <div class=\"col-md-6 row m-0 p-0\">
                                            <div class=\"col-sm-12\">
                                                <a href=\"javascript:void();\"><img src=\"{{ asset('images/page-img/p1.jpg')}}\" alt=\"post-image\" class=\"img-fluid rounded w-100\"></a>
                                            </div>
                                            <div class=\"col-sm-12 mt-3\">
                                                <a href=\"javascript:void();\"><img src=\"{{ asset('images/page-img/p3.jpg')}}\" alt=\"post-image\" class=\"img-fluid rounded w-100\"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"comment-area mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"like-block position-relative d-flex align-items-center\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"like-data\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"{{ asset('images/icon/02.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"{{ asset('images/icon/03.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"{{ asset('images/icon/04.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"{{ asset('images/icon/05.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"{{ asset('images/icon/06.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"{{ asset('images/icon/07.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
                                                    <img src=\"{{ asset('images/user/02.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                                                    <img src=\"{{ asset('images/user/03.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"user-post-data\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"{{ asset('images/user/03.jpg')}}\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Barb Ackue</a></h5>
                                            <p class=\"mb-0 d-inline-block\">Added New Image in a Post</p>
                                            <p class=\"mb-0 text-primary\">1 hour ago</p>
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                </div>
                                <div class=\"user-post\">
                                    <a href=\"javascript:void();\"><img src=\"{{ asset('images/page-img/p4.jpg')}}\" alt=\"post-image\" class=\"img-fluid rounded w-100\"></a>
                                </div>
                                <div class=\"comment-area mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"like-block position-relative d-flex align-items-center\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"like-data\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"{{ asset('images/icon/02.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"{{ asset('images/icon/03.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"{{ asset('images/icon/04.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"{{ asset('images/icon/05.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"{{ asset('images/icon/06.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"{{ asset('images/icon/07.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
                                                    <img src=\"{{ asset('images/user/02.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                                                    <img src=\"{{ asset('images/user/03.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"user-post-data\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"{{ asset('images/user/04.jpg')}}\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Ira Membrit</a></h5>
                                            <p class=\"mb-0 d-inline-block\">Update her Status</p>
                                            <p class=\"mb-0 text-primary\">6 hour ago</p>
                                        </div>
                                        <div class=\"iq-card-post-toolbar\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu m-0 p-0\">
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                </div>
                                <div class=\"comment-area mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"like-block position-relative d-flex align-items-center\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"like-data\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"{{ asset('images/icon/02.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"{{ asset('images/icon/03.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"{{ asset('images/icon/04.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"{{ asset('images/icon/05.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"{{ asset('images/icon/06.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"{{ asset('images/icon/07.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
                                                    <img src=\"{{ asset('images/user/02.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                                                    <img src=\"{{ asset('images/user/03.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"post-item\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"{{ asset('images/user/1.jpg')}}\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Bni Cyst</a></h5>
                                            <p class=\"ml-1 mb-0 d-inline-block\">Changed Profile Picture</p>
                                            <p class=\"mb-0\">3 day ago</p>
                                        </div>
                                        <div class=\"iq-card-post-toolbar\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu m-0 p-0\">
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                <div class=\"user-post text-center\">
                                    <a href=\"javascript:void();\"><img src=\"{{ asset('images/page-img/p5.jpg')}}\" alt=\"post-image\" class=\"img-fluid rounded w-100 mt-3\"></a>
                                </div>
                                <div class=\"comment-area mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"like-block position-relative d-flex align-items-center\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"like-data\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"{{ asset('images/icon/02.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"{{ asset('images/icon/03.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"{{ asset('images/icon/04.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"{{ asset('images/icon/05.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"{{ asset('images/icon/06.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"{{ asset('images/icon/07.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
                                                    <img src=\"{{ asset('images/user/02.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                                                    <img src=\"{{ asset('images/user/03.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                    <div class=\"col-sm-12\">
                        <div class=\"iq-card iq-card-block iq-card-stretch iq-card-height\">
                            <div class=\"iq-card-body\">
                                <div class=\"user-post-data\">
                                    <div class=\"d-flex flex-wrap\">
                                        <div class=\"media-support-user-img mr-3\">
                                            <img class=\"rounded-circle img-fluid\" src=\"{{ asset('images/user/02.jpg')}}\" alt=\"\">
                                        </div>
                                        <div class=\"media-support-info mt-2\">
                                            <h5 class=\"mb-0 d-inline-block\"><a href=\"#\" class=\"\">Paige Turner</a></h5>
                                            <p class=\"mb-0 d-inline-block\">Added New Video in his Timeline</p>
                                            <p class=\"mb-0 text-primary\">1 day ago</p>
                                        </div>
                                        <div class=\"iq-card-post-toolbar\">
                                            <div class=\"dropdown\">
                                          <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                          <i class=\"ri-more-fill\"></i>
                                          </span>
                                                <div class=\"dropdown-menu m-0 p-0\">
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
                                                        <div class=\"d-flex align-items-top\">
                                                            <div class=\"icon font-size-20\"><i class=\"ri-close-circle-line\"></i></div>
                                                            <div class=\"data ml-2\">
                                                                <h6>Hide Post</h6>
                                                                <p class=\"mb-0\">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                                </div>
                                <div class=\"user-post\">
                                    <div class=\"embed-responsive embed-responsive-16by9\">
                                        <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/j_GsIanLxZk?rel=0\" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class=\"comment-area mt-3\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div class=\"like-block position-relative d-flex align-items-center\">
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"like-data\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                <img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\">
                                                </span>
                                                        <div class=\"dropdown-menu\">
                                                            <a class=\"ml-2 mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Like\"><img src=\"{{ asset('images/icon/01.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Love\"><img src=\"{{ asset('images/icon/02.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Happy\"><img src=\"{{ asset('images/icon/03.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"HaHa\"><img src=\"{{ asset('images/icon/04.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Think\"><img src=\"{{ asset('images/icon/05.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Sade\"><img src=\"{{ asset('images/icon/06.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                            <a class=\"mr-2\" href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Lovely\"><img src=\"{{ asset('images/icon/07.png')}}\" class=\"img-fluid\" alt=\"\"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"total-like-block ml-2 mr-3\">
                                                    <div class=\"dropdown\">
                                                <span class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"button\">
                                                140 Likes
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
                                                    <img src=\"{{ asset('images/user/02.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                                                    <img src=\"{{ asset('images/user/03.jpg')}}\" alt=\"userimg\" class=\"avatar-35 rounded-circle img-fluid\">
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
                                    <img src=\"{{ asset('images/page-img/s2.jpg')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Anna Mull</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex mb-4 align-items-center\">
                                    <img src=\"{{ asset('images/page-img/s3.jpg')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Ira Membrit</h5>
                                        <p class=\"mb-0\">4 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset('images/page-img/s1.jpg')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
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
                                    <img src=\"{{ asset('images/page-img/s4.jpg')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Web Workshop</h5>
                                        <p class=\"mb-0\">1 hour ago</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset('images/page-img/s5.jpg')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
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
                                    <img src=\"{{ asset('images/user/01.jpg')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
                                    <div class=\"stories-data ml-3\">
                                        <h5>Anna Sthesia</h5>
                                        <p class=\"mb-0\">Today</p>
                                    </div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset('images/user/02.jpg')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid\">
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
                                        <img src=\"{{ asset('images/page-img/42.png')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid avatar-50\">
                                        <div class=\"stories-data ml-3\">
                                            <h5>Iqonic Studio</h5>
                                            <p class=\"mb-0\">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src=\"{{ asset('images/small/img-1.jpg')}}\" class=\"img-fluid rounded\" alt=\"Responsive image\">
                                    <div class=\"mt-3\"><a href=\"#\" class=\"btn d-block\"><i class=\"ri-thumb-up-line mr-2\"></i> Like Page</a></div>
                                </li>
                                <li class=\"\">
                                    <div class=\"d-flex align-items-center mb-3\">
                                        <img src=\"{{ asset('images/page-img/42.png')}}\" alt=\"story-img\" class=\"rounded-circle img-fluid avatar-50\">
                                        <div class=\"stories-data ml-3\">
                                            <h5>Cakes & Bakes </h5>
                                            <p class=\"mb-0\">Lorem Ipsum</p>
                                        </div>
                                    </div>
                                    <img src=\"{{ asset('images/small/img-2.jpg')}}\" class=\"img-fluid rounded\" alt=\"Responsive image\">
                                    <div class=\"mt-3\"><a href=\"#\" class=\"btn d-block\"><i class=\"ri-thumb-up-line mr-2\"></i> Like Page</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 text-center\">
                    <img src=\"{{ asset('images/page-img/page-load-loader.gif')}}\" alt=\"loader\" style=\"height: 100px;\">
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock  %}
<!-- Wrapper END -->
{% block footer %}
<!-- Footer -->
<footer class=\"bg-white iq-footer\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item\"><a href=\"privacy-policy.html\">Privacy Policy</a></li>
                    <li class=\"list-inline-item\"><a href=\"terms-of-service.html\">Terms of Use</a></li>
                </ul>
            </div>
            <div class=\"col-lg-6 text-right\">
                Copyright 2020 <a href=\"#\">SocialV</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
{% endblock %}
{% endblock %}
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{% block js %}
<script src=\"{{ asset('js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<!-- Appear JavaScript -->
<script src=\"{{ asset('js/jquery.appear.js') }}\"></script>
<!-- Countdown JavaScript -->
<script src=\"{{ asset('js/countdown.min.js') }}\"></script>
<!-- Counterup JavaScript -->
<script src=\"{{ asset('js/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.counterup.min.js') }}\"></script>
<!-- Wow JavaScript -->
<script src=\"{{ asset('js/wow.min.js')}}\"></script>
<!-- Apexcharts JavaScript -->
<script src=\"{{ asset('js/apexcharts.js')}}\"></script>
<!-- Slick JavaScript -->
<script src=\"{{ asset('js/slick.min.js') }}\"></script>
<!-- Select2 JavaScript -->
<script src=\"{{ asset('js/select2.min.js') }}\"></script>
<!-- Owl Carousel JavaScript -->
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<!-- Magnific Popup JavaScript -->
<script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src=\"{{ asset('js/smooth-scrollbar.js') }}\"></script>
<!-- lottie JavaScript -->
<script src=\"{{ asset('js/lottie.js') }}\"></script>
<!-- am core JavaScript -->
<script src=\"{{ asset('js/core.js') }}\"></script>
<!-- am charts JavaScript -->
<script src=\"{{ asset('js/charts.js') }}\"></script>
<!-- am animated JavaScript -->
<script src=\"{{ asset('js/animated.js') }}\"></script>
<!-- am kelly JavaScript -->
<script src=\"{{ asset('js/kelly.js') }}\"></script>
<!-- am maps JavaScript -->
<script src=\"{{ asset('js/maps.js') }}\"></script>
<!-- am worldLow JavaScript -->
<script src=\"{{ asset('js/worldLow.js') }}\"></script>
<!-- Chart Custom JavaScript -->
<script src=\"{{ asset('js/chart-custom.js') }}\"></script>
<!-- Custom JavaScript -->
<script src=\"{{ asset('js/custom.js') }}\"></script>
{% endblock %}

</html>
", "base.html.twig", "C:\\Users\\louay\\Documents\\GitHub\\ArtBox-CrashTest-WEB\\templates\\base.html.twig");
    }
}
