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

/* back.html.twig */
class __TwigTemplate_81ebebd9933644c272a5eb90c99dbd5405e3fb97e3adf5be15e311312a7359b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'heeader' => [$this, 'block_heeader'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>

        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/summernote/summernote-bs4.min.css"), "html", null, true);
        echo "\">
</head>
<body>
";
        // line 36
        $this->displayBlock('heeader', $context, $blocks);
        // line 650
        echo "<div class=\"container\">
    <center>";
        // line 651
        $this->displayBlock('content', $context, $blocks);
        // line 657
        echo "</center>

";
        // line 659
        $this->displayBlock('footer', $context, $blocks);
        // line 668
        echo "<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Appear JavaScript -->
<script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
<!-- Countdown JavaScript -->
<script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/countdown.min.js"), "html", null, true);
        echo "\"></script>
<!-- Counterup JavaScript -->
<script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<!-- Wow JavaScript -->
<script src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
<!-- Apexcharts JavaScript -->
<script src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/apexcharts.js"), "html", null, true);
        echo "\"></script>
<!-- Slick JavaScript -->
<script src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<!-- Select2 JavaScript -->
<script src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
<!-- Owl Carousel JavaScript -->
<script src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- Magnific Popup JavaScript -->
<script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/smooth-scrollbar.js"), "html", null, true);
        echo "\"></script>
<!-- lottie JavaScript -->
<script src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lottie.js"), "html", null, true);
        echo "\"></script>
<!-- am core JavaScript -->
<script src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core.js"), "html", null, true);
        echo "\"></script>
<!-- am charts JavaScript -->
<script src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script>
<!-- am animated JavaScript -->
<script src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/animated.js"), "html", null, true);
        echo "\"></script>
<!-- am kelly JavaScript -->
<script src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/kelly.js"), "html", null, true);
        echo "\"></script>
<!-- am maps JavaScript -->
<script src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/maps.js"), "html", null, true);
        echo "\"></script>
<!-- am worldLow JavaScript -->
<script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/worldLow.js"), "html", null, true);
        echo "\"></script>
<!-- Chart Custom JavaScript -->
<script src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chart-custom.js"), "html", null, true);
        echo "\"></script>
<!-- Custom JavaScript -->
<script src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "            ArtBox
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_heeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heeader"));

        // line 37
        echo "    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"index3.html\" class=\"nav-link\">Home</a>
            </li>
            <li >
                <a href=\"#\"class=\"nav-link\">A propos</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\"class=\"nav-link\">Actualités</a>
            </li>

            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Navbar Search -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-search\"></i>
                </a>
                <div class=\"navbar-search-block\">
                    <form class=\"form-inline\">
                        <div class=\"input-group input-group-sm\">
                            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-navbar\" type=\"submit\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/dist/img/user1-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Brad Diesel
                                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">Call me whenever you can...</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/dist/img/user8-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-expand-arrows-alt\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>






    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"index3.html\" class=\"brand-link\">
            <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class=\"form-inline\">
                <div class=\"input-group\" data-widget=\"sidebar-search\">
                    <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-sidebar\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->


                    <li class=\"nav-item\">

                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/top-nav-sidebar.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/fixed-sidebar-custom.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/fixed-footer.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/collapsed-sidebar.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/pages/layout/collapsed-sidebar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>
                            <p>
                                Gestion Utilisateur
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Utilisateur</p>
                                </a>
                            </li>



                        </ul>
                    </li>





                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Gestion categorie et cours
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Catégorie</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Théme</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Cours</p>
                                </a>
                            </li>

                        </ul>
                    </li>





                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                Gestion Test
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Gestion questions</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Gestion reponses</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Gestion certificats</p>
                                </a>
                            </li>
                        </ul>
                    </li>
















                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                Gestion Partenariat et promotion
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Partenariat</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Promotion</p>
                                </a>
                            </li>



                        </ul>
                    </li>




                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Géstion Réclamation
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Reclamation</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Feedback</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-book\"></i>
                            <p>
                                Gestion Actualités et évènements
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Actualités</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Evenement</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Login & Register v1
                                        <i class=\"fas fa-angle-left right\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/login.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Login v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/register.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Register v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Forgot Password v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Recover Password v1</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Login & Register v2
                                        <i class=\"fas fa-angle-left right\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/login-v2.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Login v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/register-v2.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Register v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/forgot-password-v2.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Forgot Password v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/recover-password-v2.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Recover Password v2</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/404.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/500.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/blank.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"starter.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-search\"></i>
                            <p>
                                Search
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/search/simple.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Simple Search</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/search/enhanced.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Enhanced</p>
                                </a>
                            </li>
                        </ul>
                    </li>





                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>























";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 651
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "</center>
</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 659
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 660
        echo "    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2021 <a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.1.0
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  963 => 660,  953 => 659,  928 => 651,  548 => 280,  464 => 199,  452 => 190,  384 => 125,  365 => 109,  346 => 93,  288 => 37,  278 => 36,  267 => 9,  257 => 8,  242 => 717,  237 => 715,  232 => 713,  227 => 711,  222 => 709,  217 => 707,  212 => 705,  207 => 703,  202 => 701,  197 => 699,  192 => 697,  187 => 695,  182 => 693,  177 => 691,  172 => 689,  167 => 687,  162 => 685,  158 => 684,  153 => 682,  148 => 680,  143 => 678,  139 => 677,  135 => 676,  125 => 668,  123 => 659,  119 => 657,  117 => 651,  114 => 650,  112 => 36,  106 => 33,  101 => 31,  96 => 29,  91 => 27,  86 => 25,  81 => 23,  76 => 21,  71 => 19,  66 => 17,  58 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>

        {% block title %}
            ArtBox
        {% endblock %}

    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/fontawesome-free/css/all.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"{{ asset ('back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/jqvmap/jqvmap.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/dist/css/adminlte.min.css') }}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/daterangepicker/daterangepicker.css') }}\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/summernote/summernote-bs4.min.css') }}\">
</head>
<body>
{% block heeader %}
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"index3.html\" class=\"nav-link\">Home</a>
            </li>
            <li >
                <a href=\"#\"class=\"nav-link\">A propos</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\"class=\"nav-link\">Actualités</a>
            </li>

            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Navbar Search -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-search\"></i>
                </a>
                <div class=\"navbar-search-block\">
                    <form class=\"form-inline\">
                        <div class=\"input-group input-group-sm\">
                            <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-navbar\" type=\"submit\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                                <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                                    <i class=\"fas fa-times\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset('back/dist/img/user1-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Brad Diesel
                                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">Call me whenever you can...</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset('back/dist/img/user8-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"{{ asset('back/dist/img/user3-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-expand-arrows-alt\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>






    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"index3.html\" class=\"brand-link\">
            <img src=\"{{ asset('back/dist/img/AdminLTELogo.png')}}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"{{ asset('back/dist/img/user2-160x160.jpg')}}\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class=\"form-inline\">
                <div class=\"input-group\" data-widget=\"sidebar-search\">
                    <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-sidebar\">
                            <i class=\"fas fa-search fa-fw\"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->


                    <li class=\"nav-item\">

                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/top-nav-sidebar.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/fixed-sidebar-custom.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/fixed-footer.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/layout/collapsed-sidebar.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item\">
                        <a href=\"{{ asset('back/pages/layout/collapsed-sidebar.html') }}\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>
                            <p>
                                Gestion Utilisateur
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Utilisateur</p>
                                </a>
                            </li>



                        </ul>
                    </li>





                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Gestion categorie et cours
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Catégorie</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Théme</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Cours</p>
                                </a>
                            </li>

                        </ul>
                    </li>





                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                Gestion Test
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Gestion questions</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Gestion reponses</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Gestion certificats</p>
                                </a>
                            </li>
                        </ul>
                    </li>
















                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                Gestion Partenariat et promotion
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Partenariat</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Promotion</p>
                                </a>
                            </li>



                        </ul>
                    </li>




                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Géstion Réclamation
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Reclamation</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Feedback</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-book\"></i>
                            <p>
                                Gestion Actualités et évènements
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Actualités</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Evenement</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Login & Register v1
                                        <i class=\"fas fa-angle-left right\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/login.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Login v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/register.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Register v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Forgot Password v1</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Recover Password v1</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Login & Register v2
                                        <i class=\"fas fa-angle-left right\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/login-v2.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Login v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/register-v2.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Register v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/forgot-password-v2.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Forgot Password v2</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"pages/examples/recover-password-v2.html\" class=\"nav-link\">
                                            <i class=\"far fa-circle nav-icon\"></i>
                                            <p>Recover Password v2</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/404.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/500.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/blank.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"starter.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-search\"></i>
                            <p>
                                Search
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/search/simple.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Simple Search</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/search/enhanced.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Enhanced</p>
                                </a>
                            </li>
                        </ul>
                    </li>





                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>























{% endblock %}
<div class=\"container\">
    <center>{% block content %}</center>
</div>




{% endblock %}</center>

{% block footer %}
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2021 <a href=\"https://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.1.0
        </div>
    </footer>
{% endblock %}
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
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

</body>
</html>
", "back.html.twig", "C:\\Users\\louay\\Documents\\GitHub\\ArtBox-CrashTest-WEB\\templates\\back.html.twig");
    }
}
