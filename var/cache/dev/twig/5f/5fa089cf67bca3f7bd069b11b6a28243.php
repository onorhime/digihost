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

/* base1.html.twig */
class __TwigTemplate_1662983e722ebc207482a07390bd7d4c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'customStyle' => [$this, 'block_customStyle'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'modal' => [$this, 'block_modal'],
            'customJs' => [$this, 'block_customJs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 485
        echo "
";
        // line 486
        $this->displayBlock('main', $context, $blocks);
        // line 489
        echo "
";
        // line 490
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <!DOCTYPE html>
    <html dir=\"ltr\" lang=\"en\">

    <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/css/style.css"), "html", null, true);
        echo " />
    <link rel=\"shortcut icon\" href=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/images/favicon.ico"), "html", null, true);
        echo " type=\"image/x-icon\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/third-party/nice-select2.css"), "html", null, true);
        echo " />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/js-datepicker/dist/datepicker.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/third-party/line-awesome/css/line-awesome.min.css"), "html", null, true);
        echo " />
    <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "</title>
    ";
        // line 19
        $this->displayBlock('customStyle', $context, $blocks);
        // line 22
        echo "    </head>

    <body class=\"vertical bg-secondary1/5 dark:bg-bg3 hidden\">
    <!-- Loader -->
    <div class=\"loader flex items-center justify-center min-w-screen min-h-screen fixed !z-50 inset-0 bg-n0 dark:bg-bg4\">
        <svg viewBox=\"25 25 50 50\">
        <circle r=\"20\" cy=\"50\" cx=\"50\"></circle>
        </svg>
    </div>
    <!-- Navigation -->
    <section class=\"topbar-container z-30\">
        <nav
        class=\"navbar-top topbarfull z-20 gap-3 bg-n0 py-3 shadow-sm duration-300 border-b border-n0 dark:border-n700 dark:bg-bg4 xl:py-4 xxxl:py-6\"
        id=\"topbar\">
        <div class=\"topbar-inner flex items-center justify-between\">
            <div class=\"flex grow items-center gap-4 xxl:gap-6\">
            <a href=";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo " class=\"topbar-logo hidden shrink-0\">
                <img width=\"174\" height=\"38\" src=";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/images/logo-with-text.png"), "html", null, true);
        echo " alt=\"logo\"
                class=\"logo-full2 hidden lg:block\" />
            </a>
            <button class=\"flex items-center rounded-s-2xl bg-primary px-0.5 py-3 text-xl text-n0\"
                id=\"sidebar-toggle-btn\">
                <i class=\"las la-angle-left text-lg\"></i>
            </button>
            <!-- Select layout -->
            <div class=\"topnav-layout\">
                <div id=\"layout-btn\"
                class=\"flex w-full cursor-pointer items-center justify-between gap-2 rounded-[30px] border border-n30 bg-primary/5 px-4 py-1 dark:border-n500 dark:bg-bg3 lg:py-1.5 xxl:px-6 xxl:py-2\">
                <span class=\"flex select-none items-center gap-2\">
                    <i class=\"las la-border-all text-3xl text-primary\"></i>
                    <span id=\"selected-layout\" class=\"capitalize\">Vertical</span>
                </span>
                <i id=\"drop-arrow\" class=\"las la-angle-down shrink-0 text-lg duration-300\"></i>
                </div>
                <ul id=\"layout\"
                class=\"hide absolute left-0 top-full z-20 w-full origin-top rounded-lg bg-n0 p-2 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg4\">
                <li data-layout=\"vertical\"
                    class=\"active block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Vertical
                </li>
                <li data-layout=\"two-column\"
                    class=\"block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Two-Column
                </li>
                <li data-layout=\"hovered\"
                    class=\"block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Hovered
                </li>
                <li data-layout=\"horizontal\"
                    class=\"block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Horizontal
                </li>
                <li data-layout=\"detached\"
                    class=\"block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Detached
                </li>
                </ul>
            </div>

            <!-- Search bar -->
            <form class=\"topnav-search\">
                <input type=\"text\" placeholder=\"Search\"
                class=\"w-full border-none bg-transparent py-2 focus:border-none focus:shadow-none focus:outline-none md:py-2.5 xxl:py-3 ltr:pl-4 rtl:pr-4\" />
                <button aria-label=\"search btn\"
                class=\"flex h-8 w-9 items-center justify-center rounded-full bg-primary text-n0\">
                <i class=\"las la-search text-lg\"></i>
                </button>
            </form>
            </div>
            <div class=\"flex items-center gap-3 sm:gap-4 xxl:gap-6\">
            <!-- mobile Search  -->
            <div class=\"relative lg:hidden\">
                <button id=\"mobile-search-btn\"
                class=\"flex h-10 w-10 cursor-pointer select-none items-center justify-center gap-2 rounded-full border border-n30 bg-primary/5 dark:border-n500 dark:bg-bg3 md:h-12 md:w-12\">
                <i class=\"las la-search\"></i>
                </button>
                <div id=\"mobile-search\"
                class=\"hide invisible absolute -left-8 top-full z-20 flex min-w-max max-w-[250px] origin-[20%_20%] gap-3 overflow-y-auto rounded-md bg-n0 p-3 opacity-0 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg4\">
                <form
                    class=\"flex w-full items-center justify-between gap-3 rounded-[30px] border border-n30 bg-secondary1/5 p-1 focus-within:border-primary dark:border-n500 dark:bg-bg3 xxl:p-2\">
                    <input type=\"text\" placeholder=\"Search\" class=\"w-full bg-transparent py-1 ltr:pl-4 rtl:pr-4\" />
                    <button
                    class=\"flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary text-n0 lg:h-8 lg:w-8\">
                    <i class=\"las la-search text-lg\"></i>
                    </button>
                </form>
                </div>
            </div>
            <!-- dark mode toggle -->
            <button id=\"darkModeToggle\" aria-label=\"dark mode switch\"
                class=\"h-10 w-10 shrink-0 rounded-full border border-n30 bg-primary/5 dark:border-n500 dark:bg-bg3 md:h-12 md:w-12\">
                <i class=\"las la-sun text-2xl dark:hidden\"></i>
                <span class=\"hidden text-n30 dark:block\">
                <i class=\"las la-moon text-2xl\"></i>
                </span>
            </button>
        
            <!-- Profile dropdown -->
            <div class=\"relative shrink-0\">
                <div id=\"profile-btn\" class=\"w-10 cursor-pointer md:w-12\">
                <h1 class=\"rounded-full\" width=\"48\" height=\"48\" alt=\"profile img\" >";
        // line 122
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "username", [], "any", false, false, false, 122), 0, 1)), "html", null, true);
        echo "</h1>
                </div>
                <div id=\"profile\"
                class=\"hide absolute top-full z-20 rounded-md bg-n0 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg4 ltr:right-0 ltr:origin-top-right rtl:left-0 rtl:origin-top-left\">
                <div class=\"flex flex-col items-center border-b p-3 text-center dark:border-n500 lg:p-4\">
                    <h1  width=\"60\" height=\"60\" class=\"rounded-full\" alt=\"profile img\" >";
        // line 127
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "username", [], "any", false, false, false, 127), 0, 1)), "html", null, true);
        echo "</h1>
                    <h6 class=\"h6 mt-2\">";
        // line 128
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "firstname", [], "any", false, false, false, 128) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "lastname", [], "any", false, false, false, 128)), "html", null, true);
        echo "</h6>
                    <span class=\"text-sm\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "email", [], "any", false, false, false, 129), "html", null, true);
        echo "</span>
                </div>
                <ul class=\"flex w-[250px] flex-col p-4\">
                    <li>
                    <a href=";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "
                        class=\"flex items-center gap-2 rounded-md p-2 duration-300 hover:bg-primary hover:text-n0\">
                        <span>
                        <i class=\"las la-user mt-1 text-xl\"></i>
                        </span>
                        Profile
                    </a>
                    </li>
                    
                    <li>
                    <a href=";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings");
        echo "
                        class=\"flex items-center gap-2 rounded-md p-2 duration-300 hover:bg-primary hover:text-n0\">
                        <span>
                        <i class=\"las la-cog mt-1 text-xl\"></i>
                        </span>
                        Settings
                    </a>
                    </li>
                    <li>
                    <a href=";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "
                        class=\"flex items-center gap-2 rounded-md p-2 duration-300 hover:bg-primary hover:text-n0\">
                        <span>
                        <i class=\"las la-sign-out-alt mt-1 text-xl\"></i>
                        </span>
                        Logout
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </nav>

        <!-- Vertical -->
        <aside id=\"sidebar\" class=\"sidebar bg-n0 dark:!bg-bg4\">
        <div class=\"sidebar-inner relative\">
            <div class=\"logo-column\">
            <div class=\"logo-container\">
                <div class=\"logo-inner\">
                <a href=";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo " class=\"logo-wrapper\">
                    <img src=";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/images/logo-with-text.png"), "html", null, true);
        echo " width=\"174\" height=\"38\" class=\"logo-full\" alt=\"logo\" />
                    <img src=";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/images/logo.png"), "html", null, true);
        echo " width=\"37\" height=\"36\" class=\"logo-icon hidden\" alt=\"logo\" />
                </a>
                <img width=\"141\" height=\"38\" class=\"logo-text hidden\" src=";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/images/logo-text.png"), "html", null, true);
        echo " alt=\"logo text\" />
                <button class=\"sidebar-close-btn xl:hidden\" id=\"sidebar-close-btn\">
                    <i class=\"las la-times\"></i>
                </button>
                </div>
            </div>
            <div class=\"menu-container pb-28\">
                <div class=\"menu-wrapper\">
                <p class=\"menu-heading\">Navigation</p>
                <ul class=\"menu-ul\">
                    <li class=\"menu-li\">
                    <button class=\"menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-home\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Dashboard</span>
                        </span>
                       
                    </button>
                    <ul class=\"submenu-hide submenu\">
                    <li>
                      <a href=";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo " class=\"submenu-link\">
                        <i class=\"las la-minus text-xl\"></i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-piggy-bank\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Accounts</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=\"./accounts/bank-account.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Bank Account</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"./accounts/account-overview.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Account Overview</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"./accounts/account-details.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Account Details</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"./accounts/deposit-details.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Deposit Details</span>
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-credit-card\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Cards</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=\"./cards/card-overview.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Card Overview</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"./cards/card-details.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Card Details</span>
                        </a>
                        </li>
                    </ul>
                    </li>
                    
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-wallet\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Payment</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deposit");
        echo " class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Make Payment</span>
                        </a>
                        </li>
                        
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-wallet\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Transfer</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=";
        // line 325
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawal");
        echo " class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Make Withdrawal</span>
                        </a>
                        </li>
                        
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-exchange-alt\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Transaction</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=";
        // line 351
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transactions");
        echo " class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Transaction History</span>
                        </a>
                        </li>
                        
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-cog\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Settings</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=";
        // line 377
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo " class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Profile</span>
                        </a>
                        </li>
                        <li>
                        <a href=";
        // line 383
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings");
        echo " class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Security</span>
                        </a>
                        </li>
                       
                    </ul>
                    </li>
                    
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-chart-bar\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Trading</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=\"#\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Investments</span>
                        </a>
                        </li>
                       
                    </ul>
                    </li>
                    
                </ul>
                </div>
                <div class=\"px-4 xxl:px-6 xxxl:px-8\">
                ";
        // line 467
        echo "                ";
        // line 478
        echo "                </div>
            </div>
            </div>
        </div>
        </aside>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 17
        echo "        
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_customStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customStyle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customStyle"));

        // line 20
        echo "        
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 486
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 487
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 490
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 491
        echo "     <footer class=\"footer bg-n0 dark:bg-bg4\">
  <div
    class=\"flex flex-col items-center justify-center gap-3 px-4 py-5 lg:flex-row lg:justify-between xxl:px-8\">
    <p class=\"text-sm max-md:w-full max-md:text-center lg:text-base\">
      Copyright @ <span id=\"current-year\"></span>
      <a class=\"text-primary\" href=\"/\"> EliteForte </a>
      . Designed By
      <a href=\"#\" class=\"text-secondary1\"> DevKing </a>
    </p>
    <div class=\"justify-center max-md:flex max-md:w-full\"></div>
    <ul class=\"flex gap-2 xxxl:gap-3\">
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-facebook-f\"></i>
    </a>
  </li>
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-twitter\"></i>
    </a>
  </li>
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-skype\"></i>
    </a>
  </li>
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-instagram\"></i>
    </a>
  </li>
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-linkedin-in\"></i>
    </a>
  </li>
</ul>

    <ul
      class=\"flex gap-3 text-sm max-lg:w-full max-lg:justify-center lg:gap-4 lg:text-base\">
      <li>
        <a href=";
        // line 547
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo ">Privacy Policy</a>
      </li>
      <li>
        <a href=";
        // line 550
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms");
        echo ">Terms of condition</a>
      </li>
    </ul>
  </div>
</footer>

 ";
        // line 556
        $this->displayBlock('modal', $context, $blocks);
        // line 654
        echo "  <!-- Theme Customizer  -->
  <div id=\"customizer-container\" class=\"z-[60] w-full\"></div>
  <script src=";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/js/apexcharts.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/js/customizer.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/third-party/nice-select2.js"), "html", null, true);
        echo "></script>
  <script src=\"https://unpkg.com/js-datepicker\"></script>
  <script src=";
        // line 660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/js/main.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/js/charts.js"), "html", null, true);
        echo "></script>
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
  ";
        // line 663
        $this->displayBlock('customJs', $context, $blocks);
        // line 666
        echo "</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 556
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 557
        echo "     <!-- modal -->
  <div class=\"ac-modal-overlay fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
  <div class=\"overflow-y-auto\">
    <div
      class=\"modal box modal-inner absolute left-1/2 my-10 max-h-[90vh] w-[95%] max-w-[710px] duration-300 -translate-x-1/2 overflow-y-auto xl:p-8\">
      <!-- { \"translate-y-0 scale-100 opacity-100 my-10\": open } -->
      <div class=\"relative\">
        <button class=\"ac-modal-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
          <i class=\"las la-times\"></i>
        </button>
        <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
          <h4 class=\"h4\">Create Bank Account</h4>
        </div>
        <form>
          <p class=\"mb-4 text-lg font-medium\">Profile Photo</p>
          <div class=\"mb-6 flex flex-wrap items-center gap-5 xl:gap-10\">
            <img src=";
        // line 573
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/images/placeholder.png"), "html", null, true);
        echo " class=\"h-20 w-20 lg:h-auto lg:w-auto\" alt=\"placeholder\" />
            <div class=\"flex gap-4\">
              <input type=\"file\" name=\"photo\" id=\"photo\" class=\"hidden\" />
              <label for=\"photo\" class=\"btn\"> Upload Photo </label>
              <button class=\"btn-outline\">Cancel</button>
            </div>
          </div>
          <div class=\"mt-6 grid grid-cols-2 gap-4 xl:mt-8 xxxl:gap-6\">
            <div class=\"col-span-2\">
              <label for=\"name\" class=\"mb-4 block font-medium md:text-lg\">
                Account Holder Name
              </label>
              <input type=\"text\"
                class=\"w-full rounded-3xl border border-n30 bg-secondary1/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3\"
                placeholder=\"Enter Name\" id=\"name\" required />
            </div>
            <div class=\"col-span-2\">
              <label for=\"number\" class=\"mb-4 block font-medium md:text-lg\">
                Phone Number
              </label>
              <input type=\"number\"
                class=\"w-full rounded-3xl border border-n30 bg-secondary1/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3\"
                placeholder=\"Enter Number\" id=\"number\" required />
            </div>
            <div class=\"col-span-2\">
              <label for=\"currency\" class=\"mb-4 block font-medium md:text-lg\">
                Select Currency
              </label>
              <select name=\"currency\" class=\"nc-select full dark:!border-n500\">
                <option value=\"usd\">USD</option>
                <option value=\"gbp\">GBP</option>
                <option value=\"yen\">YEN</option>
                <option value=\"jpn\">JPN</option>
              </select>
            </div>
            <div class=\"col-span-2 md:col-span-1\">
              <label for=\"rate\" class=\"mb-4 block font-medium md:text-lg\">
                Interest Rate
              </label>
              <input type=\"number\"
                class=\"w-full rounded-3xl border border-n30 bg-secondary1/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3\"
                placeholder=\"Interest Rate %\" id=\"rate\" required />
            </div>
            <div class=\"col-span-2 md:col-span-1\">
              <label for=\"expire\" class=\"mb-4 block font-medium md:text-lg\">
                Expiry Date
              </label>
              <div class=\"relative bg-secondary1/5 py-3 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl\">
                <input id=\"date\" class=\"border-none\" placeholder=\"Select Date\" autocomplete=\"off\" />
                <i class=\"las la-calendar absolute ltr:right-4 rtl:left-4 top-1/2 -translate-y-1/2 cursor-pointer\"></i>
              </div>
            </div>
            <div class=\"col-span-2\">
              <label for=\"amount\" class=\"mb-4 block font-medium md:text-lg\">
                Amount
              </label>
              <input type=\"number\"
                class=\"w-full rounded-3xl border border-n30 bg-secondary1/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3\"
                placeholder=\"Enter Amount\" id=\"amount\" required />
            </div>
            <div class=\"col-span-2\">
              <label for=\"status\" class=\"mb-4 block font-medium md:text-lg\">
                Select Status
              </label>
              <select name=\"currency\" class=\"nc-select full dark:!border-n500\">
                <option value=\"active\">Active</option>
                <option value=\"inactive\">Inactive</option>
              </select>
            </div>
            <div class=\"col-span-2 mt-4\">
              <button class=\"btn flex w-full justify-center\" type=\"submit\">
                Create Account
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 663
    public function block_customJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customJs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customJs"));

        // line 664
        echo "    
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  910 => 664,  900 => 663,  809 => 573,  791 => 557,  781 => 556,  768 => 666,  766 => 663,  761 => 661,  757 => 660,  752 => 658,  748 => 657,  744 => 656,  740 => 654,  738 => 556,  729 => 550,  723 => 547,  665 => 491,  655 => 490,  644 => 487,  634 => 486,  623 => 20,  613 => 19,  602 => 17,  592 => 16,  576 => 478,  574 => 467,  532 => 383,  523 => 377,  494 => 351,  465 => 325,  436 => 299,  333 => 199,  308 => 177,  303 => 175,  299 => 174,  295 => 173,  271 => 152,  259 => 143,  246 => 133,  239 => 129,  235 => 128,  231 => 127,  223 => 122,  137 => 39,  133 => 38,  115 => 22,  113 => 19,  110 => 18,  108 => 16,  104 => 15,  97 => 11,  92 => 9,  88 => 8,  80 => 2,  70 => 1,  60 => 490,  57 => 489,  55 => 486,  52 => 485,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <!DOCTYPE html>
    <html dir=\"ltr\" lang=\"en\">

    <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"stylesheet\" href={{ asset(\"assets/dashboard/css/style.css\")}} />
    <link rel=\"shortcut icon\" href={{ asset(\"assets/dashboard/images/favicon.ico\")}} type=\"image/x-icon\" />
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"stylesheet\" href={{ asset(\"assets/dashboard/third-party/nice-select2.css\")}} />
    <link rel=\"stylesheet\" href=\"https://unpkg.com/js-datepicker/dist/datepicker.min.css\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href={{ asset(\"assets/dashboard/third-party/line-awesome/css/line-awesome.min.css\")}} />
    <title>{% block title %}
        
    {% endblock %}</title>
    {% block customStyle %}
        
    {% endblock %}
    </head>

    <body class=\"vertical bg-secondary1/5 dark:bg-bg3 hidden\">
    <!-- Loader -->
    <div class=\"loader flex items-center justify-center min-w-screen min-h-screen fixed !z-50 inset-0 bg-n0 dark:bg-bg4\">
        <svg viewBox=\"25 25 50 50\">
        <circle r=\"20\" cy=\"50\" cx=\"50\"></circle>
        </svg>
    </div>
    <!-- Navigation -->
    <section class=\"topbar-container z-30\">
        <nav
        class=\"navbar-top topbarfull z-20 gap-3 bg-n0 py-3 shadow-sm duration-300 border-b border-n0 dark:border-n700 dark:bg-bg4 xl:py-4 xxxl:py-6\"
        id=\"topbar\">
        <div class=\"topbar-inner flex items-center justify-between\">
            <div class=\"flex grow items-center gap-4 xxl:gap-6\">
            <a href={{ path('dashboard') }} class=\"topbar-logo hidden shrink-0\">
                <img width=\"174\" height=\"38\" src={{ asset(\"assets/dashboard/images/logo-with-text.png\")}} alt=\"logo\"
                class=\"logo-full2 hidden lg:block\" />
            </a>
            <button class=\"flex items-center rounded-s-2xl bg-primary px-0.5 py-3 text-xl text-n0\"
                id=\"sidebar-toggle-btn\">
                <i class=\"las la-angle-left text-lg\"></i>
            </button>
            <!-- Select layout -->
            <div class=\"topnav-layout\">
                <div id=\"layout-btn\"
                class=\"flex w-full cursor-pointer items-center justify-between gap-2 rounded-[30px] border border-n30 bg-primary/5 px-4 py-1 dark:border-n500 dark:bg-bg3 lg:py-1.5 xxl:px-6 xxl:py-2\">
                <span class=\"flex select-none items-center gap-2\">
                    <i class=\"las la-border-all text-3xl text-primary\"></i>
                    <span id=\"selected-layout\" class=\"capitalize\">Vertical</span>
                </span>
                <i id=\"drop-arrow\" class=\"las la-angle-down shrink-0 text-lg duration-300\"></i>
                </div>
                <ul id=\"layout\"
                class=\"hide absolute left-0 top-full z-20 w-full origin-top rounded-lg bg-n0 p-2 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg4\">
                <li data-layout=\"vertical\"
                    class=\"active block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Vertical
                </li>
                <li data-layout=\"two-column\"
                    class=\"block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Two-Column
                </li>
                <li data-layout=\"hovered\"
                    class=\"block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Hovered
                </li>
                <li data-layout=\"horizontal\"
                    class=\"block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Horizontal
                </li>
                <li data-layout=\"detached\"
                    class=\"block cursor-pointer select-none rounded-md p-2 duration-300 hover:text-primary\">
                    Detached
                </li>
                </ul>
            </div>

            <!-- Search bar -->
            <form class=\"topnav-search\">
                <input type=\"text\" placeholder=\"Search\"
                class=\"w-full border-none bg-transparent py-2 focus:border-none focus:shadow-none focus:outline-none md:py-2.5 xxl:py-3 ltr:pl-4 rtl:pr-4\" />
                <button aria-label=\"search btn\"
                class=\"flex h-8 w-9 items-center justify-center rounded-full bg-primary text-n0\">
                <i class=\"las la-search text-lg\"></i>
                </button>
            </form>
            </div>
            <div class=\"flex items-center gap-3 sm:gap-4 xxl:gap-6\">
            <!-- mobile Search  -->
            <div class=\"relative lg:hidden\">
                <button id=\"mobile-search-btn\"
                class=\"flex h-10 w-10 cursor-pointer select-none items-center justify-center gap-2 rounded-full border border-n30 bg-primary/5 dark:border-n500 dark:bg-bg3 md:h-12 md:w-12\">
                <i class=\"las la-search\"></i>
                </button>
                <div id=\"mobile-search\"
                class=\"hide invisible absolute -left-8 top-full z-20 flex min-w-max max-w-[250px] origin-[20%_20%] gap-3 overflow-y-auto rounded-md bg-n0 p-3 opacity-0 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg4\">
                <form
                    class=\"flex w-full items-center justify-between gap-3 rounded-[30px] border border-n30 bg-secondary1/5 p-1 focus-within:border-primary dark:border-n500 dark:bg-bg3 xxl:p-2\">
                    <input type=\"text\" placeholder=\"Search\" class=\"w-full bg-transparent py-1 ltr:pl-4 rtl:pr-4\" />
                    <button
                    class=\"flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary text-n0 lg:h-8 lg:w-8\">
                    <i class=\"las la-search text-lg\"></i>
                    </button>
                </form>
                </div>
            </div>
            <!-- dark mode toggle -->
            <button id=\"darkModeToggle\" aria-label=\"dark mode switch\"
                class=\"h-10 w-10 shrink-0 rounded-full border border-n30 bg-primary/5 dark:border-n500 dark:bg-bg3 md:h-12 md:w-12\">
                <i class=\"las la-sun text-2xl dark:hidden\"></i>
                <span class=\"hidden text-n30 dark:block\">
                <i class=\"las la-moon text-2xl\"></i>
                </span>
            </button>
        
            <!-- Profile dropdown -->
            <div class=\"relative shrink-0\">
                <div id=\"profile-btn\" class=\"w-10 cursor-pointer md:w-12\">
                <h1 class=\"rounded-full\" width=\"48\" height=\"48\" alt=\"profile img\" >{{ app.user.username|slice(0, 1)| capitalize }}</h1>
                </div>
                <div id=\"profile\"
                class=\"hide absolute top-full z-20 rounded-md bg-n0 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg4 ltr:right-0 ltr:origin-top-right rtl:left-0 rtl:origin-top-left\">
                <div class=\"flex flex-col items-center border-b p-3 text-center dark:border-n500 lg:p-4\">
                    <h1  width=\"60\" height=\"60\" class=\"rounded-full\" alt=\"profile img\" >{{ app.user.username|slice(0, 1)| capitalize }}</h1>
                    <h6 class=\"h6 mt-2\">{{app.user.firstname ~ \" \" ~ app.user.lastname}}</h6>
                    <span class=\"text-sm\">{{app.user.email}}</span>
                </div>
                <ul class=\"flex w-[250px] flex-col p-4\">
                    <li>
                    <a href={{ path(\"profile\") }}
                        class=\"flex items-center gap-2 rounded-md p-2 duration-300 hover:bg-primary hover:text-n0\">
                        <span>
                        <i class=\"las la-user mt-1 text-xl\"></i>
                        </span>
                        Profile
                    </a>
                    </li>
                    
                    <li>
                    <a href={{ path(\"settings\") }}
                        class=\"flex items-center gap-2 rounded-md p-2 duration-300 hover:bg-primary hover:text-n0\">
                        <span>
                        <i class=\"las la-cog mt-1 text-xl\"></i>
                        </span>
                        Settings
                    </a>
                    </li>
                    <li>
                    <a href={{ path('logout') }}
                        class=\"flex items-center gap-2 rounded-md p-2 duration-300 hover:bg-primary hover:text-n0\">
                        <span>
                        <i class=\"las la-sign-out-alt mt-1 text-xl\"></i>
                        </span>
                        Logout
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </nav>

        <!-- Vertical -->
        <aside id=\"sidebar\" class=\"sidebar bg-n0 dark:!bg-bg4\">
        <div class=\"sidebar-inner relative\">
            <div class=\"logo-column\">
            <div class=\"logo-container\">
                <div class=\"logo-inner\">
                <a href={{ path(\"dashboard\") }} class=\"logo-wrapper\">
                    <img src={{ asset(\"assets/dashboard/images/logo-with-text.png\")}} width=\"174\" height=\"38\" class=\"logo-full\" alt=\"logo\" />
                    <img src={{ asset(\"assets/dashboard/images/logo.png\")}} width=\"37\" height=\"36\" class=\"logo-icon hidden\" alt=\"logo\" />
                </a>
                <img width=\"141\" height=\"38\" class=\"logo-text hidden\" src={{ asset(\"assets/dashboard/images/logo-text.png\")}} alt=\"logo text\" />
                <button class=\"sidebar-close-btn xl:hidden\" id=\"sidebar-close-btn\">
                    <i class=\"las la-times\"></i>
                </button>
                </div>
            </div>
            <div class=\"menu-container pb-28\">
                <div class=\"menu-wrapper\">
                <p class=\"menu-heading\">Navigation</p>
                <ul class=\"menu-ul\">
                    <li class=\"menu-li\">
                    <button class=\"menu-btn border-n30 bg-n0 dark:!border-n500 dark:bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-home\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Dashboard</span>
                        </span>
                       
                    </button>
                    <ul class=\"submenu-hide submenu\">
                    <li>
                      <a href={{ path(\"dashboard\") }} class=\"submenu-link\">
                        <i class=\"las la-minus text-xl\"></i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-piggy-bank\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Accounts</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=\"./accounts/bank-account.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Bank Account</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"./accounts/account-overview.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Account Overview</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"./accounts/account-details.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Account Details</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"./accounts/deposit-details.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Deposit Details</span>
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-credit-card\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Cards</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=\"./cards/card-overview.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Card Overview</span>
                        </a>
                        </li>
                        <li>
                        <a href=\"./cards/card-details.html\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Card Details</span>
                        </a>
                        </li>
                    </ul>
                    </li>
                    
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-wallet\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Payment</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href={{ path('deposit') }} class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Make Payment</span>
                        </a>
                        </li>
                        
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-wallet\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Transfer</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href={{ path('withdrawal') }} class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Make Withdrawal</span>
                        </a>
                        </li>
                        
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-exchange-alt\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Transaction</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href={{ path(\"transactions\") }} class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Transaction History</span>
                        </a>
                        </li>
                        
                    </ul>
                    </li>
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-cog\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Settings</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href={{ path(\"profile\") }} class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Profile</span>
                        </a>
                        </li>
                        <li>
                        <a href={{ path(\"settings\") }} class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Security</span>
                        </a>
                        </li>
                       
                    </ul>
                    </li>
                    
                    <li class=\"menu-li\">
                    <button class=\"menu-btn group bg-n0 dark:!border-n500 dark:!bg-bg4\">
                        <span class=\"flex items-center justify-center gap-2\">
                        <span class=\"menu-icon\">
                            <i class=\"las la-chart-bar\"></i>
                        </span>
                        <span class=\"menu-title font-medium\">Trading</span>
                        </span>
                        <span class=\"plus-minus\">
                        <i class=\"las la-plus text-xl\"></i>
                        <i class=\"las la-minus text-xl\"></i>
                        </span>
                        <span class=\"chevron-down hidden\">
                        <i class=\"las la-angle-down text-base\"></i>
                        </span>
                    </button>
                    <ul class=\"submenu-hide submenu\">
                        <li>
                        <a href=\"#\" class=\"submenu-link\">
                            <i class=\"las la-minus text-xl\"></i>
                            <span>Investments</span>
                        </a>
                        </li>
                       
                    </ul>
                    </li>
                    
                </ul>
                </div>
                <div class=\"px-4 xxl:px-6 xxxl:px-8\">
                {# <div class=\"balance-part\">
                    <p class=\"border-t-2 border-dashed border-primary/20 py-4 text-xs font-semibold lg:py-6\">
                    Balance
                    </p>
                    <ul>
                    <li>
                        <button
                        class=\"group flex w-full items-center justify-between rounded-xl px-4 py-2.5 lg:py-3 xxxl:px-6\">
                        <span class=\"flex items-center gap-2\">
                            <span class=\"-mb-1 self-center text-primary\">
                            <i class=\"las la-dollar-sign\"></i>
                            </span>
                            <span class=\"font-medium\">33,215.00 USD</span>
                        </span>
                        </button>
                        <button
                        class=\"group flex w-full items-center justify-between rounded-xl px-4 py-2.5 lg:py-3 xxxl:px-6\">
                        <span class=\"flex items-center gap-2\">
                            <span class=\"-mb-1 self-center text-primary\">
                            <i class=\"las la-euro-sign\"></i>
                            </span>
                            <span class=\"font-medium\">15,254.32 EUR</span>
                        </span>
                        </button>
                        <button
                        class=\"group flex w-full items-center justify-between rounded-xl px-4 py-2.5 lg:py-3 xxxl:px-6\">
                        <span class=\"flex items-center gap-2\">
                            <span class=\"-mb-1 self-center text-primary\">
                            <i class=\"las la-pound-sign\"></i>
                            </span>
                            <span class=\"font-medium\">7,029.14 GBP</span>
                        </span>
                        </button>
                        <button
                        class=\"group flex w-full items-center justify-between rounded-xl px-4 py-2.5 lg:py-3 xxxl:px-6\">
                        <span class=\"flex items-center gap-2\">
                            <span class=\"-mb-1 self-center text-primary\">
                            <i class=\"las la-plus-circle\"></i>
                            </span>
                            <span class=\"font-medium\">Add More Balance</span>
                        </span>
                        </button>
                    </li>
                    </ul>
                </div> #}
                {# <div class=\"upgrade-part\">
                    <img src={{ asset(\"assets/dashboard/images/upgrade.png\")}} width=\"272\" height=\"173\" alt=\"upgrade\" />
                    <p class=\"mb-8 mt-6 text-sm\">
                    Upgrade your account to
                    <span class=\"font-semibold text-primary\">PRO</span> for even
                    more examples.
                    </p>
                    <a href=\"#\" class=\"btn flex w-full justify-center\">
                    Upgrade Now
                    </a>
                </div> #}
                </div>
            </div>
            </div>
        </div>
        </aside>
    </section>
{% endblock %}

{% block main %}
    
{% endblock %}

{% block footer %}
     <footer class=\"footer bg-n0 dark:bg-bg4\">
  <div
    class=\"flex flex-col items-center justify-center gap-3 px-4 py-5 lg:flex-row lg:justify-between xxl:px-8\">
    <p class=\"text-sm max-md:w-full max-md:text-center lg:text-base\">
      Copyright @ <span id=\"current-year\"></span>
      <a class=\"text-primary\" href=\"/\"> EliteForte </a>
      . Designed By
      <a href=\"#\" class=\"text-secondary1\"> DevKing </a>
    </p>
    <div class=\"justify-center max-md:flex max-md:w-full\"></div>
    <ul class=\"flex gap-2 xxxl:gap-3\">
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-facebook-f\"></i>
    </a>
  </li>
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-twitter\"></i>
    </a>
  </li>
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-skype\"></i>
    </a>
  </li>
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-instagram\"></i>
    </a>
  </li>
  <li>
    <a
      href=\"#\"
      aria-label=\"social link\"
      class=\"inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2\">
      <i class=\"lab la-linkedin-in\"></i>
    </a>
  </li>
</ul>

    <ul
      class=\"flex gap-3 text-sm max-lg:w-full max-lg:justify-center lg:gap-4 lg:text-base\">
      <li>
        <a href={{ path(\"privacy\") }}>Privacy Policy</a>
      </li>
      <li>
        <a href={{ path(\"terms\") }}>Terms of condition</a>
      </li>
    </ul>
  </div>
</footer>

 {% block modal %}
     <!-- modal -->
  <div class=\"ac-modal-overlay fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
  <div class=\"overflow-y-auto\">
    <div
      class=\"modal box modal-inner absolute left-1/2 my-10 max-h-[90vh] w-[95%] max-w-[710px] duration-300 -translate-x-1/2 overflow-y-auto xl:p-8\">
      <!-- { \"translate-y-0 scale-100 opacity-100 my-10\": open } -->
      <div class=\"relative\">
        <button class=\"ac-modal-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
          <i class=\"las la-times\"></i>
        </button>
        <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
          <h4 class=\"h4\">Create Bank Account</h4>
        </div>
        <form>
          <p class=\"mb-4 text-lg font-medium\">Profile Photo</p>
          <div class=\"mb-6 flex flex-wrap items-center gap-5 xl:gap-10\">
            <img src={{ asset(\"assets/dashboard/images/placeholder.png\")}} class=\"h-20 w-20 lg:h-auto lg:w-auto\" alt=\"placeholder\" />
            <div class=\"flex gap-4\">
              <input type=\"file\" name=\"photo\" id=\"photo\" class=\"hidden\" />
              <label for=\"photo\" class=\"btn\"> Upload Photo </label>
              <button class=\"btn-outline\">Cancel</button>
            </div>
          </div>
          <div class=\"mt-6 grid grid-cols-2 gap-4 xl:mt-8 xxxl:gap-6\">
            <div class=\"col-span-2\">
              <label for=\"name\" class=\"mb-4 block font-medium md:text-lg\">
                Account Holder Name
              </label>
              <input type=\"text\"
                class=\"w-full rounded-3xl border border-n30 bg-secondary1/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3\"
                placeholder=\"Enter Name\" id=\"name\" required />
            </div>
            <div class=\"col-span-2\">
              <label for=\"number\" class=\"mb-4 block font-medium md:text-lg\">
                Phone Number
              </label>
              <input type=\"number\"
                class=\"w-full rounded-3xl border border-n30 bg-secondary1/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3\"
                placeholder=\"Enter Number\" id=\"number\" required />
            </div>
            <div class=\"col-span-2\">
              <label for=\"currency\" class=\"mb-4 block font-medium md:text-lg\">
                Select Currency
              </label>
              <select name=\"currency\" class=\"nc-select full dark:!border-n500\">
                <option value=\"usd\">USD</option>
                <option value=\"gbp\">GBP</option>
                <option value=\"yen\">YEN</option>
                <option value=\"jpn\">JPN</option>
              </select>
            </div>
            <div class=\"col-span-2 md:col-span-1\">
              <label for=\"rate\" class=\"mb-4 block font-medium md:text-lg\">
                Interest Rate
              </label>
              <input type=\"number\"
                class=\"w-full rounded-3xl border border-n30 bg-secondary1/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3\"
                placeholder=\"Interest Rate %\" id=\"rate\" required />
            </div>
            <div class=\"col-span-2 md:col-span-1\">
              <label for=\"expire\" class=\"mb-4 block font-medium md:text-lg\">
                Expiry Date
              </label>
              <div class=\"relative bg-secondary1/5 py-3 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl\">
                <input id=\"date\" class=\"border-none\" placeholder=\"Select Date\" autocomplete=\"off\" />
                <i class=\"las la-calendar absolute ltr:right-4 rtl:left-4 top-1/2 -translate-y-1/2 cursor-pointer\"></i>
              </div>
            </div>
            <div class=\"col-span-2\">
              <label for=\"amount\" class=\"mb-4 block font-medium md:text-lg\">
                Amount
              </label>
              <input type=\"number\"
                class=\"w-full rounded-3xl border border-n30 bg-secondary1/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3\"
                placeholder=\"Enter Amount\" id=\"amount\" required />
            </div>
            <div class=\"col-span-2\">
              <label for=\"status\" class=\"mb-4 block font-medium md:text-lg\">
                Select Status
              </label>
              <select name=\"currency\" class=\"nc-select full dark:!border-n500\">
                <option value=\"active\">Active</option>
                <option value=\"inactive\">Inactive</option>
              </select>
            </div>
            <div class=\"col-span-2 mt-4\">
              <button class=\"btn flex w-full justify-center\" type=\"submit\">
                Create Account
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
 {% endblock %}
  <!-- Theme Customizer  -->
  <div id=\"customizer-container\" class=\"z-[60] w-full\"></div>
  <script src={{ asset(\"assets/dashboard/js/apexcharts.min.js\")}}></script>
  <script src={{ asset(\"assets/dashboard/js/customizer.js\")}}></script>
  <script src={{ asset(\"assets/dashboard/third-party/nice-select2.js\")}}></script>
  <script src=\"https://unpkg.com/js-datepicker\"></script>
  <script src={{ asset(\"assets/dashboard/js/main.js\")}}></script>
  <script src={{ asset(\"assets/dashboard/js/charts.js\")}}></script>
  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
  {% block customJs %}
    
  {% endblock %}
</body>

</html>
{% endblock %}", "base1.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\base1.html.twig");
    }
}
