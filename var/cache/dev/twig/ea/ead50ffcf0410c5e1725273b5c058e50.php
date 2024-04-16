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

/* dashboard/transactions.html.twig */
class __TwigTemplate_6ebaa19adf7fc09e75be6663de0ba0f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/transactions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/transactions.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "dashboard/transactions.html.twig", 1);
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

        echo "EliteForte Transaction History";
        
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
        echo "      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/simple-datatables@9.0.0/dist/style.min.css\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/js-datepicker/dist/datepicker.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "     <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
  <h2 class=\"h2\">Transaction History</h2>

</div>

      <!-- Transaction style 03 -->
      <div class=\"overflow-x-auto\">
        <div class=\"bg-n0 dark:bg-bg4 rounded-xl px-3 min-w-min mb-4 lg:mb-6\">
          <table cell-padding=\"0\" cell-spacing=\"0\" style=\"border-spacing: 0px 12px;\"
            class=\"w-full whitespace-nowrap p-0 border-none border-separate\">
            <tbody>
              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "transactions", [], "any", false, false, false, 27)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 28
            echo "                <tr>
                <td>
                  <div class=\"py-5 pl-6 px-3 bg-secondary1/5 dark:bg-bg3 rounded-s-lg\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 31), "html", null, true);
            echo "
                  </div>
                </td>
                <td>
                  <div class=\"flex items-center py-2.5 gap-3 pr-6 min-w-[300px] px-3 bg-secondary1/5 dark:bg-bg3\">
                    ";
            // line 36
            $context["image"] = (((twig_get_attribute($this->env, $this->source,             // line 37
$context["transaction"], "title", [], "any", false, false, false, 37) == "Paypal Deposit")) ? ("assets/dashboard/images/paypal.png") : ((((twig_get_attribute($this->env, $this->source,             // line 38
$context["transaction"], "title", [], "any", false, false, false, 38) == "Card Deposit")) ? ("assets/dashboard/images/visa.png") : ((((twig_get_attribute($this->env, $this->source,             // line 39
$context["transaction"], "title", [], "any", false, false, false, 39) == "Alternative 2")) ? ("alternative_image_path_2") : ("default_image_path"))))));
            // line 42
            echo "
                    <img width=\"32\" height=\"32\" class=\"rounded-full shrink-0\" src=";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 43, $this->source); })())), "html", null, true);
            echo " alt=\"img\" />
                    <div class=\"flex flex-col\">
                      <span class=\"font-medium inline-block mb-1\">
                        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "
                      </span>
                      <span class=\"text-xs\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 48), "j M, y. h:i a"), "html", null, true);
            echo "</span>
                    </div>
                  </div>
                </td>
                
                <td class=\"w-[15%]\">
                  <div class=\"bg-secondary1/5 dark:bg-bg3 py-5 px-3\">
                   ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "
                  </div>
                </td>
                <td class=\"w-[15%]\">
                  <div class=\"bg-secondary1/5 dark:bg-bg3 py-5 px-3\">
                    \$";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 60), "2", ".", ","), "html", null, true);
            echo "
                  </div>
                </td>
                <td>
                  <div class=\"bg-secondary1/5 dark:bg-bg3 px-3 py-[13px]\">
                  ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 65) === "failed")) {
                // line 66
                echo "                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-secondary2/10 dark:bg-bg3 text-secondary2\">
                      ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 68), "html", null, true);
                echo "
                    </span>
                  ";
            }
            // line 71
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 71) === "pending")) {
                // line 72
                echo "                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-secondary3/10 dark:bg-bg3 text-secondary3\">
                      ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 74), "html", null, true);
                echo "
                    </span>
                  ";
            }
            // line 77
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 77) === "complete")) {
                // line 78
                echo "                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-primary/10 dark:bg-bg3 text-primary\">
                      ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 80), "html", null, true);
                echo "
                    </span>
                  ";
            }
            // line 83
            echo "                    
                  </div>
                </td>
                ";
            // line 114
            echo "              </tr>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "             
            </tbody>
          </table>
        </div>
 
      </div>
    </div>
  </main>

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
            <img src=\"../images/placeholder.png\" class=\"h-20 w-20 lg:h-auto lg:w-auto\" alt=\"placeholder\" />
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
  <div class=\"tn-modal fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
  <div class=\"overflow-y-auto\">
    <div
      class=\"modal box modal-inner absolute left-1/2 my-10 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8\">
      <div class=\"relative\">
        <button class=\"tn-modal-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
          <i class=\"las la-times\"></i>
        </button>
        <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
          <h4 class=\"h4\">Transaction Details</h4>
        </div>
        <div class=\"py-3 px-6 bg-secondary1/5 flex items-center gap-4 mb-6 lg:mb-8\">
          <img src=\"../images/paypal-big.png\" width=\"56\" height=\"56\" alt=\"paypal icon\" />
          <div>
            <p class=\"xm:text-xl font-medium mb-2\">Deposit Cash</p>
            <span class=\"text-sm\">Payment Successful</span>
          </div>
        </div>
        <ul class=\"flex flex-col gap-4 bb-dashed border-secondary1/20 pb-4 mb-4 lg:mb-6 lg:pb-6\">
          <li class=\"flex justify-between\">
            <span>Transfer:</span> <span class=\"font-medium\">#555443223</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Send To:</span> <span class=\"font-medium\">Felecia Brown</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Bank Account:</span> <span class=\"font-medium\">Wadk6265dlkd565</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Date:</span> <span class=\"font-medium\">11 August 2024</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Time:</span> <span class=\"font-medium\">10:36 AM</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Card Number:</span> <span class=\"font-medium\">325 *** *** ***</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Amount:</span> <span class=\"font-medium\">25,211.00 USD</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Fee:</span> <span class=\"font-medium\">98 USD</span>
          </li>
        </ul>
        <div class=\" bb-dashed border-secondary1/20 pb-4 mb-4 lg:mb-6 lg:pb-6\">
          <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2141.544710579929!2d90.39140680797202!3d23.87599993653183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1702184930477!5m2!1sen!2sbd\"
            width=\"100%\" height=\"200\" style=\"border: 0\" allowFullScreen={true} loading=\"lazy\"
            referrerPolicy=\"no-referrer-when-downgrade\"></iframe>
        </div>
        <div class=\"flex justify-center gap-4 flex-wrap lg:gap-6\">
          <button class=\"flex items-center gap-2\">
            <i class=\"las la-download border border-n30 dark:border-n500 rounded-full bg-primary/5 p-2\"></i>
            <span>Download PDF </span>
          </button>
          <button class=\"flex items-center gap-2\">
            <i class=\"las la-print border border-n30 dark:border-n500 rounded-full bg-primary/5 p-2\"></i>
            <span>Print PDF </span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/transactions.html.twig";
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
        return array (  264 => 116,  249 => 114,  244 => 83,  238 => 80,  234 => 78,  231 => 77,  225 => 74,  221 => 72,  218 => 71,  212 => 68,  208 => 66,  206 => 65,  198 => 60,  190 => 55,  180 => 48,  175 => 46,  169 => 43,  166 => 42,  164 => 39,  163 => 38,  162 => 37,  161 => 36,  153 => 31,  148 => 28,  131 => 27,  115 => 13,  105 => 12,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}EliteForte Transaction History{% endblock %}
{% block customStyle %}
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/simple-datatables@9.0.0/dist/style.min.css\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/js-datepicker/dist/datepicker.min.css\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\" />
  <link rel=\"stylesheet\" href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap\" />
{% endblock %}
{% block main %}
     <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
  <h2 class=\"h2\">Transaction History</h2>

</div>

      <!-- Transaction style 03 -->
      <div class=\"overflow-x-auto\">
        <div class=\"bg-n0 dark:bg-bg4 rounded-xl px-3 min-w-min mb-4 lg:mb-6\">
          <table cell-padding=\"0\" cell-spacing=\"0\" style=\"border-spacing: 0px 12px;\"
            class=\"w-full whitespace-nowrap p-0 border-none border-separate\">
            <tbody>
              {% for transaction in app.user.transactions|reverse %}
                <tr>
                <td>
                  <div class=\"py-5 pl-6 px-3 bg-secondary1/5 dark:bg-bg3 rounded-s-lg\">
                    {{loop.index}}
                  </div>
                </td>
                <td>
                  <div class=\"flex items-center py-2.5 gap-3 pr-6 min-w-[300px] px-3 bg-secondary1/5 dark:bg-bg3\">
                    {% set image = 
                    (transaction.title == \"Paypal Deposit\") ? \"assets/dashboard/images/paypal.png\" :
                    (transaction.title == \"Card Deposit\") ? \"assets/dashboard/images/visa.png\" :
                    (transaction.title == \"Alternative 2\") ? \"alternative_image_path_2\" :
                    \"default_image_path\"
                    %}

                    <img width=\"32\" height=\"32\" class=\"rounded-full shrink-0\" src={{ asset(image) }} alt=\"img\" />
                    <div class=\"flex flex-col\">
                      <span class=\"font-medium inline-block mb-1\">
                        {{transaction.title}}
                      </span>
                      <span class=\"text-xs\">{{ transaction.date|date('j M, y. h:i a') }}</span>
                    </div>
                  </div>
                </td>
                
                <td class=\"w-[15%]\">
                  <div class=\"bg-secondary1/5 dark:bg-bg3 py-5 px-3\">
                   {{transaction.title}}
                  </div>
                </td>
                <td class=\"w-[15%]\">
                  <div class=\"bg-secondary1/5 dark:bg-bg3 py-5 px-3\">
                    \${{ transaction.amount|number_format('2', '.', ',') }}
                  </div>
                </td>
                <td>
                  <div class=\"bg-secondary1/5 dark:bg-bg3 px-3 py-[13px]\">
                  {% if transaction.status is same as(\"failed\") %}
                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-secondary2/10 dark:bg-bg3 text-secondary2\">
                      {{transaction.status}}
                    </span>
                  {% endif %}
                  {% if transaction.status is same as(\"pending\")  %}
                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-secondary3/10 dark:bg-bg3 text-secondary3\">
                      {{transaction.status}}
                    </span>
                  {% endif %}
                  {% if transaction.status is same as(\"complete\")  %}
                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-primary/10 dark:bg-bg3 text-primary\">
                      {{transaction.status}}
                    </span>
                  {% endif %}
                    
                  </div>
                </td>
                {# <td>
                  <div class=\"bg-secondary1/5 dark:bg-bg3 px-3 py-5 rounded-e-xl flex justify-end pr-5\">
                        <div class=\"relative\">
                    <i class=\"las la-ellipsis-v horiz-option-btn cursor-pointer\"></i>
                    <ul
                        class=\"horiz-option hide absolute top-full z-[3] min-w-[122px] rounded-md bg-n0 p-3 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg3 ltr:right-0 ltr:origin-top-right rtl:left-0 rtl:origin-top-left\">
                    <li>
                    <button
                        class=\"block tn-modal-btn w-full text-start cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
                        See Details
                    </button>
                    </li>
                    <li>
                    <button
                        class=\"block w-full text-start cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
                        Delete
                    </button>
                    </li>
                    <li>
                    <button
                        class=\"block w-full text-start cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
                        Share
                    </button>
                    </li>
                    </ul>
                    </div>
                    </div>
                </td> #}
              </tr>
              {% endfor %}
             
            </tbody>
          </table>
        </div>
 
      </div>
    </div>
  </main>

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
            <img src=\"../images/placeholder.png\" class=\"h-20 w-20 lg:h-auto lg:w-auto\" alt=\"placeholder\" />
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
  <div class=\"tn-modal fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500\">
  <div class=\"overflow-y-auto\">
    <div
      class=\"modal box modal-inner absolute left-1/2 my-10 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8\">
      <div class=\"relative\">
        <button class=\"tn-modal-close-btn absolute top-0 ltr:right-0 rtl:left-0\">
          <i class=\"las la-times\"></i>
        </button>
        <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
          <h4 class=\"h4\">Transaction Details</h4>
        </div>
        <div class=\"py-3 px-6 bg-secondary1/5 flex items-center gap-4 mb-6 lg:mb-8\">
          <img src=\"../images/paypal-big.png\" width=\"56\" height=\"56\" alt=\"paypal icon\" />
          <div>
            <p class=\"xm:text-xl font-medium mb-2\">Deposit Cash</p>
            <span class=\"text-sm\">Payment Successful</span>
          </div>
        </div>
        <ul class=\"flex flex-col gap-4 bb-dashed border-secondary1/20 pb-4 mb-4 lg:mb-6 lg:pb-6\">
          <li class=\"flex justify-between\">
            <span>Transfer:</span> <span class=\"font-medium\">#555443223</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Send To:</span> <span class=\"font-medium\">Felecia Brown</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Bank Account:</span> <span class=\"font-medium\">Wadk6265dlkd565</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Date:</span> <span class=\"font-medium\">11 August 2024</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Time:</span> <span class=\"font-medium\">10:36 AM</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Card Number:</span> <span class=\"font-medium\">325 *** *** ***</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Amount:</span> <span class=\"font-medium\">25,211.00 USD</span>
          </li>
          <li class=\"flex justify-between\">
            <span>Fee:</span> <span class=\"font-medium\">98 USD</span>
          </li>
        </ul>
        <div class=\" bb-dashed border-secondary1/20 pb-4 mb-4 lg:mb-6 lg:pb-6\">
          <iframe
            src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2141.544710579929!2d90.39140680797202!3d23.87599993653183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1702184930477!5m2!1sen!2sbd\"
            width=\"100%\" height=\"200\" style=\"border: 0\" allowFullScreen={true} loading=\"lazy\"
            referrerPolicy=\"no-referrer-when-downgrade\"></iframe>
        </div>
        <div class=\"flex justify-center gap-4 flex-wrap lg:gap-6\">
          <button class=\"flex items-center gap-2\">
            <i class=\"las la-download border border-n30 dark:border-n500 rounded-full bg-primary/5 p-2\"></i>
            <span>Download PDF </span>
          </button>
          <button class=\"flex items-center gap-2\">
            <i class=\"las la-print border border-n30 dark:border-n500 rounded-full bg-primary/5 p-2\"></i>
            <span>Print PDF </span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "dashboard/transactions.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\dashboard\\transactions.html.twig");
    }
}
