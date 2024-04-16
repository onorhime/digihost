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

/* dashboard/withdrawal.html.twig */
class __TwigTemplate_23fdd36dade3664f12688ecad8189a75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'customStyle' => [$this, 'block_customStyle'],
            'main' => [$this, 'block_main'],
            'customJs' => [$this, 'block_customJs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/withdrawal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/withdrawal.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "dashboard/withdrawal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EliteForte Withdrawal";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_customStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customStyle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customStyle"));

        // line 5
        echo "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/simple-datatables@9.0.0/dist/style.min.css\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/js-datepicker/dist/datepicker.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "     <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
      <h2 class=\"h2\">Make Withdrawal</h2>

      </div>

      <div class=\"grid grid-cols-12 gap-4 xxl:gap-6\">
        <div class=\"col-span-12 md:col-span-7 xxl:col-span-8\">
          <!-- Payment Actions -->
          <div class=\"grid grid-cols-12 gap-4 xxl:gap-6 p-4 box min-[1880px]:p-6 mb-4 xxl:mb-6\">
            <div
              class=\"col-span-12 cursor-pointer border border-dashed qt-modal-btn duration-300 border-transparent hover:border-primary lg:col-span-6 xxxl:col-span-4 box  bg-primary/5 dark:bg-bg3 flex items-center gap-4 4xl:gap-6 xl:p-3 min-[1880px]:p-6\">
              <span
                class=\"bg-n0 dark:bg-bg4 w-10 h-10 xxl:w-16 xxl:h-16 flex items-center justify-center shrink-0 rounded-full shadow-[0px_6px_40px_0px_rgba(0,0,0,0.02)]\">
                <i class=\"las text-2xl xxl:text-3xl la-exchange-alt\"></i>
              </span>
              <div>
                <h5 class=\"text-base xxl:text-lg 4xl:text-xl font-medium mb-1 xxl:mb-2\">
                  Swift Transfer
                </h5>
                <span class=\"text-xs xxl:text-sm\">465 Credits</span>
              </div>
            </div>
            <div
              class=\"col-span-12 cursor-pointer border border-dashed qt-modal-crypto-btn duration-300 border-transparent hover:border-primary lg:col-span-6 xxxl:col-span-4 box  bg-primary/5 dark:bg-bg3 flex items-center gap-4 4xl:gap-6 xl:p-3 min-[1880px]:p-6\">
              <span
                class=\"bg-n0 dark:bg-bg4 w-10 h-10 xxl:w-16 xxl:h-16 flex items-center justify-center shrink-0 rounded-full shadow-[0px_6px_40px_0px_rgba(0,0,0,0.02)]\">
                <i class=\"las text-2xl xxl:text-3xl la-qrcode\"></i>
              </span>
              <div>
                <h5 class=\"text-base xxl:text-lg 4xl:text-xl font-medium mb-1 xxl:mb-2\">
                  Crypto-Currency Transfer
                </h5>
                <span class=\"text-xs xxl:text-sm\">365 Credits</span>
              </div>
            </div>
            ";
        // line 65
        echo "          </div>
          <!-- payment Overview -->
         
        </div>
       

      </div>
    </div>
  </main>

  ";
        // line 76
        echo "
   <div class=\"qt-modal fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
        <div class=\"overflow-y-auto\">
            <div
            class=\"modal box modal-inner absolute left-1/2 -translate-y-1/2 top-1/2 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8\">
            <div class=\"relative\">
                <button class=\"qt-modal-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
                <i class=\"las la-times\"></i>
                </button>
                <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
                <h4 class=\"h4\">Swift Transfer</h4>
                </div>

                <form class=\"grid grid-cols-2 gap-4 xxxl:gap-6\" id=\"swiftform\">
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"name\" class=\"mb-4 md:text-lg font-medium block\">
                    Account Name
                    </label>
                    <input type=\"text\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"John Doe\" name=\"name\" id=\"name\" required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"payfor\" class=\"mb-4 md:text-lg font-medium block\">
                    Account Type
                    </label>
                    <select name=\"accounttype\" class=\"nc-select full\" >
                    <option value=\"checking\">Checking</option>
                    <option value=\"savings\">Savings</option>
                    
                    </select>
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Enter Amount
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"0.00\" max=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114), "totalbalance", [], "any", false, false, false, 114), "html", null, true);
        echo "\" min=\"100\" name=\"amount\" id=\"amount\" required />
                </div>
                

                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"number\" class=\"md:text-lg font-medium block mb-4\">
                    Bank Account Number (IBAN)
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"000-000-000-000-000\" name=\"accountnumber\" id=\"accountnumber\" required />
                </div>
                
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"number\" class=\"md:text-lg font-medium block mb-4\">
                    Bic/Swift Code
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"000-000-000-000-000\" name=\"swift\" id=\"swift\" required />
                </div>
                
               
                <div class=\"col-span-2 flex gap-4 md:gap-6 mt-2\">
                    <button class=\"btn\" type=\"submit\">
                    Pay Now
                    </button>
                    <button class=\"btn-outline\" type=\"reset\">
                    Cancel
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>
   </div>


   ";
        // line 153
        echo "
   <div class=\"qt-modal-crypto fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
        <div class=\"overflow-y-auto\">
            <div
            class=\"modal box modal-inner absolute left-1/2 -translate-y-1/2 top-1/2 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8\">
            <div class=\"relative\">
                <button class=\"qt-modal-crypto-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
                <i class=\"las la-times\"></i>
                </button>
                <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
                <h4 class=\"h4\">Crypto WIthdrawal</h4>
                </div>

                <form class=\"grid grid-cols-2 gap-4 xxxl:gap-6\" id=\"cryptoform\">
                
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"payfor\" class=\"mb-4 md:text-lg font-medium block\">
                    Select Wallet Type
                    </label>
                    <select name=\"walletselect\" id=\"walletselect\" class=\"nc-select full\">
                    <option value=\"Btc\" selected>Bitcoin Wallet</option>
                    <option value=\"Eth\">Ethereum Wallet</option>
                    <option value=\"Usdt\">USDT (TRC 20)</option>
                    </select>
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Enter Wallet Address
                    </label>
                    <input type=\"text\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"Enter Wallet Address\" name=\"wallet\" id=\"wallet\" required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Enter Amount
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"Enter Amount\" max=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "user", [], "any", false, false, false, 192), "totalbalance", [], "any", false, false, false, 192), "html", null, true);
        echo "\" min=\"100\" name=\"amount\" id=\"account\" required />
                </div>
                
                
                

                
                
                <div class=\"col-span-2 flex gap-4 md:gap-6 mt-2\">
                    <button class=\"btn\" type=\"submit\">
                    Pay Now
                    </button>
                    <button class=\"btn-outline\" type=\"reset\">
                    Cancel
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>
   </div>

    ";
        // line 215
        echo "
   <div class=\"qt-modal-paypal fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
        <div class=\"overflow-y-auto\">
            <div
            class=\"modal box modal-inner absolute left-1/2 -translate-y-1/2 top-1/2 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8\">
            <div class=\"relative\">
                <button class=\"qt-modal-paypal-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
                <i class=\"las la-times\"></i>
                </button>
                <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
                <h4 class=\"h4\">Deposit By Paypal</h4>
                </div>

                <form class=\"grid grid-cols-2 gap-4 xxxl:gap-6\" id=\"paypalform\">
                
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Paypal Account Name
                    </label>
                    <input type=\"text\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    value=\"Account Name\" readonly id=\"account\" required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Paypal Email Address
                    </label>
                    <input type=\"text\" readonly
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"Enter Account\" name=\"wallet\" value=\"Paypal Email\"required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Enter Amount
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"Enter Amount\" name=\"amount\" id=\"account\" required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Payment Proof
                    </label>
                    <input type=\"file\" accept=\"image/*\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    name=\"image\" name=\"image\" id=\"account\" required />
                </div>
                
                

                
                
                <div class=\"col-span-2 flex gap-4 md:gap-6 mt-2\">
                    <button class=\"btn\" type=\"submit\">
                    Pay Now
                    </button>
                    <button class=\"btn-outline\" type=\"reset\">
                    Cancel
                    </button>
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

    // line 282
    public function block_customJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customJs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customJs"));

        // line 283
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/js/withdrawal.js"), "html", null, true);
        echo "></script>
    ";
        // line 285
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/withdrawal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  406 => 285,  401 => 283,  391 => 282,  316 => 215,  291 => 192,  250 => 153,  209 => 114,  169 => 76,  157 => 65,  117 => 14,  107 => 13,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}EliteForte Withdrawal{% endblock %}
{% block customStyle %}
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/simple-datatables@9.0.0/dist/style.min.css\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/js-datepicker/dist/datepicker.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\">
{% endblock %}
{% block main %}
     <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
      <h2 class=\"h2\">Make Withdrawal</h2>

      </div>

      <div class=\"grid grid-cols-12 gap-4 xxl:gap-6\">
        <div class=\"col-span-12 md:col-span-7 xxl:col-span-8\">
          <!-- Payment Actions -->
          <div class=\"grid grid-cols-12 gap-4 xxl:gap-6 p-4 box min-[1880px]:p-6 mb-4 xxl:mb-6\">
            <div
              class=\"col-span-12 cursor-pointer border border-dashed qt-modal-btn duration-300 border-transparent hover:border-primary lg:col-span-6 xxxl:col-span-4 box  bg-primary/5 dark:bg-bg3 flex items-center gap-4 4xl:gap-6 xl:p-3 min-[1880px]:p-6\">
              <span
                class=\"bg-n0 dark:bg-bg4 w-10 h-10 xxl:w-16 xxl:h-16 flex items-center justify-center shrink-0 rounded-full shadow-[0px_6px_40px_0px_rgba(0,0,0,0.02)]\">
                <i class=\"las text-2xl xxl:text-3xl la-exchange-alt\"></i>
              </span>
              <div>
                <h5 class=\"text-base xxl:text-lg 4xl:text-xl font-medium mb-1 xxl:mb-2\">
                  Swift Transfer
                </h5>
                <span class=\"text-xs xxl:text-sm\">465 Credits</span>
              </div>
            </div>
            <div
              class=\"col-span-12 cursor-pointer border border-dashed qt-modal-crypto-btn duration-300 border-transparent hover:border-primary lg:col-span-6 xxxl:col-span-4 box  bg-primary/5 dark:bg-bg3 flex items-center gap-4 4xl:gap-6 xl:p-3 min-[1880px]:p-6\">
              <span
                class=\"bg-n0 dark:bg-bg4 w-10 h-10 xxl:w-16 xxl:h-16 flex items-center justify-center shrink-0 rounded-full shadow-[0px_6px_40px_0px_rgba(0,0,0,0.02)]\">
                <i class=\"las text-2xl xxl:text-3xl la-qrcode\"></i>
              </span>
              <div>
                <h5 class=\"text-base xxl:text-lg 4xl:text-xl font-medium mb-1 xxl:mb-2\">
                  Crypto-Currency Transfer
                </h5>
                <span class=\"text-xs xxl:text-sm\">365 Credits</span>
              </div>
            </div>
            {# <div
              class=\"col-span-12 cursor-pointer border border-dashed qt-modal-paypal-btn duration-300 border-transparent hover:border-primary lg:col-span-6 xxxl:col-span-4 box  bg-primary/5 dark:bg-bg3 flex items-center gap-4 4xl:gap-6 xl:p-3 min-[1880px]:p-6\">
              <span
                class=\"bg-n0 dark:bg-bg4 w-10 h-10 xxl:w-16 xxl:h-16 flex items-center justify-center shrink-0 rounded-full shadow-[0px_6px_40px_0px_rgba(0,0,0,0.02)]\">
                <i class=\"lab text-2xl xxl:text-3xl la-paypal\"></i>
              </span>
              <div>
                <h5 class=\"text-base xxl:text-lg 4xl:text-xl font-medium mb-1 xxl:mb-2\">
                  Deposit By Paypal
                </h5>
                <span class=\"text-xs xxl:text-sm\">365 Credits</span>
              </div>
            </div> #}
          </div>
          <!-- payment Overview -->
         
        </div>
       

      </div>
    </div>
  </main>

  {# modal 1 #}

   <div class=\"qt-modal fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
        <div class=\"overflow-y-auto\">
            <div
            class=\"modal box modal-inner absolute left-1/2 -translate-y-1/2 top-1/2 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8\">
            <div class=\"relative\">
                <button class=\"qt-modal-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
                <i class=\"las la-times\"></i>
                </button>
                <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
                <h4 class=\"h4\">Swift Transfer</h4>
                </div>

                <form class=\"grid grid-cols-2 gap-4 xxxl:gap-6\" id=\"swiftform\">
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"name\" class=\"mb-4 md:text-lg font-medium block\">
                    Account Name
                    </label>
                    <input type=\"text\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 !border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"John Doe\" name=\"name\" id=\"name\" required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"payfor\" class=\"mb-4 md:text-lg font-medium block\">
                    Account Type
                    </label>
                    <select name=\"accounttype\" class=\"nc-select full\" >
                    <option value=\"checking\">Checking</option>
                    <option value=\"savings\">Savings</option>
                    
                    </select>
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Enter Amount
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"0.00\" max=\"{{app.user.totalbalance}}\" min=\"100\" name=\"amount\" id=\"amount\" required />
                </div>
                

                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"number\" class=\"md:text-lg font-medium block mb-4\">
                    Bank Account Number (IBAN)
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"000-000-000-000-000\" name=\"accountnumber\" id=\"accountnumber\" required />
                </div>
                
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"number\" class=\"md:text-lg font-medium block mb-4\">
                    Bic/Swift Code
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"000-000-000-000-000\" name=\"swift\" id=\"swift\" required />
                </div>
                
               
                <div class=\"col-span-2 flex gap-4 md:gap-6 mt-2\">
                    <button class=\"btn\" type=\"submit\">
                    Pay Now
                    </button>
                    <button class=\"btn-outline\" type=\"reset\">
                    Cancel
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>
   </div>


   {# modal 2 #}

   <div class=\"qt-modal-crypto fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
        <div class=\"overflow-y-auto\">
            <div
            class=\"modal box modal-inner absolute left-1/2 -translate-y-1/2 top-1/2 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8\">
            <div class=\"relative\">
                <button class=\"qt-modal-crypto-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
                <i class=\"las la-times\"></i>
                </button>
                <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
                <h4 class=\"h4\">Crypto WIthdrawal</h4>
                </div>

                <form class=\"grid grid-cols-2 gap-4 xxxl:gap-6\" id=\"cryptoform\">
                
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"payfor\" class=\"mb-4 md:text-lg font-medium block\">
                    Select Wallet Type
                    </label>
                    <select name=\"walletselect\" id=\"walletselect\" class=\"nc-select full\">
                    <option value=\"Btc\" selected>Bitcoin Wallet</option>
                    <option value=\"Eth\">Ethereum Wallet</option>
                    <option value=\"Usdt\">USDT (TRC 20)</option>
                    </select>
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Enter Wallet Address
                    </label>
                    <input type=\"text\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"Enter Wallet Address\" name=\"wallet\" id=\"wallet\" required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Enter Amount
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"Enter Amount\" max=\"{{app.user.totalbalance}}\" min=\"100\" name=\"amount\" id=\"account\" required />
                </div>
                
                
                

                
                
                <div class=\"col-span-2 flex gap-4 md:gap-6 mt-2\">
                    <button class=\"btn\" type=\"submit\">
                    Pay Now
                    </button>
                    <button class=\"btn-outline\" type=\"reset\">
                    Cancel
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>
   </div>

    {# modal 3 #}

   <div class=\"qt-modal-paypal fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
        <div class=\"overflow-y-auto\">
            <div
            class=\"modal box modal-inner absolute left-1/2 -translate-y-1/2 top-1/2 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8\">
            <div class=\"relative\">
                <button class=\"qt-modal-paypal-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
                <i class=\"las la-times\"></i>
                </button>
                <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
                <h4 class=\"h4\">Deposit By Paypal</h4>
                </div>

                <form class=\"grid grid-cols-2 gap-4 xxxl:gap-6\" id=\"paypalform\">
                
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Paypal Account Name
                    </label>
                    <input type=\"text\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    value=\"Account Name\" readonly id=\"account\" required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Paypal Email Address
                    </label>
                    <input type=\"text\" readonly
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"Enter Account\" name=\"wallet\" value=\"Paypal Email\"required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Enter Amount
                    </label>
                    <input type=\"number\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    placeholder=\"Enter Amount\" name=\"amount\" id=\"account\" required />
                </div>
                <div class=\"col-span-2 md:col-span-1\">
                    <label for=\"account\" class=\"mb-4 md:text-lg font-medium block\">
                    Payment Proof
                    </label>
                    <input type=\"file\" accept=\"image/*\"
                    class=\"w-full text-sm  bg-secondary1/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                    name=\"image\" name=\"image\" id=\"account\" required />
                </div>
                
                

                
                
                <div class=\"col-span-2 flex gap-4 md:gap-6 mt-2\">
                    <button class=\"btn\" type=\"submit\">
                    Pay Now
                    </button>
                    <button class=\"btn-outline\" type=\"reset\">
                    Cancel
                    </button>
                </div>
                </form>
            </div>
            </div>
        </div>
   </div>
{% endblock %}

{% block customJs %}
    <script src={{ asset(\"assets/dashboard/js/withdrawal.js\")}}></script>
    {#  #}
  {% endblock %}", "dashboard/withdrawal.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\dashboard\\withdrawal.html.twig");
    }
}
