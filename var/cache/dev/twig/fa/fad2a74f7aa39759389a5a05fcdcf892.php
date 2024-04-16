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

/* dashboard/index.html.twig */
class __TwigTemplate_9e9ad52583d5f9bbf1af2cf0faa9407c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "dashboard/index.html.twig", 1);
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

        echo "EliteForte Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "      <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
  <h2 class=\"h2\">Welcome ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
  ";
        // line 15
        echo "</div>

      <div class=\"grid grid-cols-12 gap-4 xxl:gap-6\">
        <!-- Statistics -->
        <div class=\"box col-span-12 bg-n0 dark:bg-bg4 min-[650px]:col-span-6 xxxl:col-span-3\">
          <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
            <span class=\"font-medium\">Total Balance</span>
            <div class=\"relative\">
  

</div>

          </div>
          <div class=\"flex items-center justify-between\">
            <div>
              <h4 class=\"h4 mb-4\">\$";
        // line 30
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "totalbalance", [], "any", false, false, false, 30), "2", ".", ","), "html", null, true);
        echo " USD</h4>
              <span class=\"flex items-center gap-1 whitespace-nowrap text-primary\">
                <i class=\"las la-arrow-up text-lg\"></i> ";
        // line 32
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "totalbalance", [], "any", false, false, false, 32) / 100), "html", null, true);
        echo " AVG
              </span>
            </div>
            <div
              class=\"-my-3 shrink-0 ltr:translate-x-3 xl:ltr:translate-x-7 xxxl:ltr:translate-x-2 4xl:ltr:translate-x-9 rtl:-translate-x-3 xl:rtl:-translate-x-7 xxxl:rtl:-translate-x-2 4xl:rtl:-translate-x-9\">
              <div class=\"progress-chart\"></div>
            </div>
          </div>
        </div>
        <div class=\"box col-span-12 bg-n0 dark:bg-bg4 min-[650px]:col-span-6 xxxl:col-span-3\">
          <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
            <span class=\"font-medium\">Crypto Balance</span>
            <div class=\"relative\">
  
 
</div>

          </div>
          <div class=\"flex items-center justify-between\">
            <div>
              <h4 class=\"h4 mb-4\">\$";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "cryptobalance", [], "any", false, false, false, 52), "2", ".", ","), "html", null, true);
        echo " USD</h4>
              <span class=\"flex items-center gap-1 whitespace-nowrap text-primary\">
                <i class=\"las la-arrow-up text-lg\"></i> ";
        // line 54
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "cryptobalance", [], "any", false, false, false, 54) / 100), "html", null, true);
        echo " AVG
              </span>
            </div>
            <div
              class=\"-my-3 shrink-0 ltr:translate-x-3 xl:ltr:translate-x-7 xxxl:ltr:translate-x-2 4xl:ltr:translate-x-9 rtl:-translate-x-3 xl:rtl:-translate-x-7 xxxl:rtl:-translate-x-2 4xl:rtl:-translate-x-9\">
              <div class=\"progress-chart\"></div>
            </div>
          </div>
        </div>
        <div class=\"box col-span-12 bg-n0 dark:bg-bg4 min-[650px]:col-span-6 xxxl:col-span-3\">
          <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
            <span class=\"font-medium\">Loan Balance</span>
            <div class=\"relative\">
  
 
</div>

          </div>
          <div class=\"flex items-center justify-between\">
            <div>
              <h4 class=\"h4 mb-4\">\$";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "loanbalance", [], "any", false, false, false, 74), "2", ".", ","), "html", null, true);
        echo " USD</h4>
              <span class=\"flex items-center gap-1 whitespace-nowrap text-primary\">
                <i class=\"las la-arrow-up text-lg\"></i>  ";
        // line 76
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "loanbalance", [], "any", false, false, false, 76) / 100), "html", null, true);
        echo " AVG
              </span>
            </div>
            <div
              class=\"-my-3 shrink-0 ltr:translate-x-3 xl:ltr:translate-x-7 xxxl:ltr:translate-x-2 4xl:ltr:translate-x-9 rtl:-translate-x-3 xl:rtl:-translate-x-7 xxxl:rtl:-translate-x-2 4xl:rtl:-translate-x-9\">
              <div class=\"progress-chart\"></div>
            </div>
          </div>
        </div>
        <div class=\"box col-span-12 bg-n0 dark:bg-bg4 min-[650px]:col-span-6 xxxl:col-span-3\">
          <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
            <span class=\"font-medium\">Total Income</span>
            <div class=\"relative\">
  

</div>

          </div>
          <div class=\"flex items-center justify-between\">
            <div>
              <h4 class=\"h4 mb-4\">\$";
        // line 96
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "totalincome", [], "any", false, false, false, 96), "2", ".", ","), "html", null, true);
        echo " USD</h4>
              <span class=\"flex items-center gap-1 whitespace-nowrap text-primary\">
                <i class=\"las la-arrow-up text-lg\"></i> ";
        // line 98
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "totalincome", [], "any", false, false, false, 98) / 100), "html", null, true);
        echo " AVG
              </span>
            </div>
            <div
              class=\"-my-3 shrink-0 ltr:translate-x-3 xl:ltr:translate-x-7 xxxl:ltr:translate-x-2 4xl:ltr:translate-x-9 rtl:-translate-x-3 xl:rtl:-translate-x-7 xxxl:rtl:-translate-x-2 4xl:rtl:-translate-x-9\">
              <div class=\"progress-chart\"></div>
            </div>
          </div>
        </div>
        <!-- Assetchart -->
        ";
        // line 134
        echo "        <!-- Latest Transactions -->
        <div class=\"box col-span-12 lg:col-span-12\">
          <div class=\"bb-dashed mb-4 flex flex-wrap items-center justify-between gap-4 pb-4 lg:mb-6 lg:pb-6\">
            <h4 class=\"h4\">Latest Transaction</h4>
            <div class=\"relative\">
  
 
</div>

          </div>
          <div class=\"overflow-x-auto\">
            <div class=\"overflow-x-auto\">
        <div class=\"bg-n0 dark:bg-bg4 rounded-xl px-3 min-w-min mb-4 lg:mb-6\">
          <table cell-padding=\"0\" cell-spacing=\"0\" style=\"border-spacing: 0px 12px;\"
            class=\"w-full whitespace-nowrap p-0 border-none border-separate\">
            <tbody>
              ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "transactions", [], "any", false, false, false, 150)));
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
            // line 151
            echo "                <tr>
                <td>
                  <div class=\"py-5 pl-6 px-3 bg-secondary1/5 dark:bg-bg3 rounded-s-lg\">
                    ";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 154), "html", null, true);
            echo "
                  </div>
                </td>
                <td>
                  <div class=\"flex items-center py-2.5 gap-3 pr-6 min-w-[300px] px-3 bg-secondary1/5 dark:bg-bg3\">
                    ";
            // line 159
            $context["image"] = (((twig_get_attribute($this->env, $this->source,             // line 160
$context["transaction"], "title", [], "any", false, false, false, 160) === "Paypal Deposit")) ? ("assets/dashboard/images/paypal.png") : ((((twig_get_attribute($this->env, $this->source,             // line 161
$context["transaction"], "title", [], "any", false, false, false, 161) == "Card Deposit")) ? ("assets/dashboard/images/visa.png") : ((((twig_get_attribute($this->env, $this->source,             // line 162
$context["transaction"], "title", [], "any", false, false, false, 162) == "Crypto Deposit")) ? ("assets/dashboard/images/crypto.jpg") : ("assets/dashboard/images/crypto.jpg"))))));
            // line 165
            echo "
                    <img width=\"32\" height=\"32\" class=\"rounded-full shrink-0\" src=";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 166, $this->source); })())), "html", null, true);
            echo " alt=\"img\" />
                    <div class=\"flex flex-col\">
                      <span class=\"font-medium inline-block mb-1\">
                        ";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "title", [], "any", false, false, false, 169), "html", null, true);
            echo "
                      </span>
                      <span class=\"text-xs\">";
            // line 171
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 171), "j M, y. h:i a"), "html", null, true);
            echo "</span>
                    </div>
                  </div>
                </td>
                
                <td class=\"w-[15%]\">
                  <div class=\"bg-secondary1/5 dark:bg-bg3 py-5 px-3\">
                   ";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "title", [], "any", false, false, false, 178), "html", null, true);
            echo "
                  </div>
                </td>
                <td class=\"w-[15%]\">
                  <div class=\"bg-secondary1/5 dark:bg-bg3 py-5 px-3\">
                    \$";
            // line 183
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 183), "2", ".", ","), "html", null, true);
            echo "
                  </div>
                </td>
                <td>
                  <div class=\"bg-secondary1/5 dark:bg-bg3 px-3 py-[13px]\">
                  ";
            // line 188
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 188) === "failed")) {
                // line 189
                echo "                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-secondary2/10 dark:bg-bg3 text-secondary2\">
                      ";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 191), "html", null, true);
                echo "
                    </span>
                  ";
            }
            // line 194
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 194) === "pending")) {
                // line 195
                echo "                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-secondary3/10 dark:bg-bg3 text-secondary3\">
                      ";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 197), "html", null, true);
                echo "
                    </span>
                  ";
            }
            // line 200
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 200) === "complete")) {
                // line 201
                echo "                    <span
                      class=\"block text-xs w-28 xxl:w-36 text-center rounded-[30px] dark:border-n500 border border-n30 !py-[11px] bg-primary/10 dark:bg-bg3 text-primary\">
                      ";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "status", [], "any", false, false, false, 203), "html", null, true);
                echo "
                    </span>
                  ";
            }
            // line 206
            echo "                    
                  </div>
                </td>
                ";
            // line 237
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
        // line 239
        echo "             
            </tbody>
          </table>
        </div>
 
      </div>
          </div>
          <a class=\"group mt-6 inline-flex items-center gap-1 font-semibold text-primary\" href=";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transactions");
        echo ">
            See More
            <i class=\"las la-arrow-right duration-300 group-hover:pl-2\"></i>
          </a>
        </div>
       
        </div>
      </div>
    </div>
  </main>
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
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
        return array (  377 => 246,  368 => 239,  353 => 237,  348 => 206,  342 => 203,  338 => 201,  335 => 200,  329 => 197,  325 => 195,  322 => 194,  316 => 191,  312 => 189,  310 => 188,  302 => 183,  294 => 178,  284 => 171,  279 => 169,  273 => 166,  270 => 165,  268 => 162,  267 => 161,  266 => 160,  265 => 159,  257 => 154,  252 => 151,  235 => 150,  217 => 134,  204 => 98,  199 => 96,  176 => 76,  171 => 74,  148 => 54,  143 => 52,  120 => 32,  115 => 30,  98 => 15,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}EliteForte Dashboard{% endblock %}

{% block main %}
      <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
  <h2 class=\"h2\">Welcome {{app.user.firstname}}</h2>
  {# <button class=\"btn ac-modal-btn\">
    <i class=\"las la-plus-circle text-base md:text-lg\"></i>
    Make A Deposit
  </button> #}
</div>

      <div class=\"grid grid-cols-12 gap-4 xxl:gap-6\">
        <!-- Statistics -->
        <div class=\"box col-span-12 bg-n0 dark:bg-bg4 min-[650px]:col-span-6 xxxl:col-span-3\">
          <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
            <span class=\"font-medium\">Total Balance</span>
            <div class=\"relative\">
  

</div>

          </div>
          <div class=\"flex items-center justify-between\">
            <div>
              <h4 class=\"h4 mb-4\">\${{ app.user.totalbalance|number_format('2', '.', ',') }} USD</h4>
              <span class=\"flex items-center gap-1 whitespace-nowrap text-primary\">
                <i class=\"las la-arrow-up text-lg\"></i> {{app.user.totalbalance / 100}} AVG
              </span>
            </div>
            <div
              class=\"-my-3 shrink-0 ltr:translate-x-3 xl:ltr:translate-x-7 xxxl:ltr:translate-x-2 4xl:ltr:translate-x-9 rtl:-translate-x-3 xl:rtl:-translate-x-7 xxxl:rtl:-translate-x-2 4xl:rtl:-translate-x-9\">
              <div class=\"progress-chart\"></div>
            </div>
          </div>
        </div>
        <div class=\"box col-span-12 bg-n0 dark:bg-bg4 min-[650px]:col-span-6 xxxl:col-span-3\">
          <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
            <span class=\"font-medium\">Crypto Balance</span>
            <div class=\"relative\">
  
 
</div>

          </div>
          <div class=\"flex items-center justify-between\">
            <div>
              <h4 class=\"h4 mb-4\">\${{ app.user.cryptobalance|number_format('2', '.', ',') }} USD</h4>
              <span class=\"flex items-center gap-1 whitespace-nowrap text-primary\">
                <i class=\"las la-arrow-up text-lg\"></i> {{app.user.cryptobalance / 100}} AVG
              </span>
            </div>
            <div
              class=\"-my-3 shrink-0 ltr:translate-x-3 xl:ltr:translate-x-7 xxxl:ltr:translate-x-2 4xl:ltr:translate-x-9 rtl:-translate-x-3 xl:rtl:-translate-x-7 xxxl:rtl:-translate-x-2 4xl:rtl:-translate-x-9\">
              <div class=\"progress-chart\"></div>
            </div>
          </div>
        </div>
        <div class=\"box col-span-12 bg-n0 dark:bg-bg4 min-[650px]:col-span-6 xxxl:col-span-3\">
          <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
            <span class=\"font-medium\">Loan Balance</span>
            <div class=\"relative\">
  
 
</div>

          </div>
          <div class=\"flex items-center justify-between\">
            <div>
              <h4 class=\"h4 mb-4\">\${{ app.user.loanbalance|number_format('2', '.', ',') }} USD</h4>
              <span class=\"flex items-center gap-1 whitespace-nowrap text-primary\">
                <i class=\"las la-arrow-up text-lg\"></i>  {{app.user.loanbalance / 100}} AVG
              </span>
            </div>
            <div
              class=\"-my-3 shrink-0 ltr:translate-x-3 xl:ltr:translate-x-7 xxxl:ltr:translate-x-2 4xl:ltr:translate-x-9 rtl:-translate-x-3 xl:rtl:-translate-x-7 xxxl:rtl:-translate-x-2 4xl:rtl:-translate-x-9\">
              <div class=\"progress-chart\"></div>
            </div>
          </div>
        </div>
        <div class=\"box col-span-12 bg-n0 dark:bg-bg4 min-[650px]:col-span-6 xxxl:col-span-3\">
          <div class=\"bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6\">
            <span class=\"font-medium\">Total Income</span>
            <div class=\"relative\">
  

</div>

          </div>
          <div class=\"flex items-center justify-between\">
            <div>
              <h4 class=\"h4 mb-4\">\${{ app.user.totalincome|number_format('2', '.', ',') }} USD</h4>
              <span class=\"flex items-center gap-1 whitespace-nowrap text-primary\">
                <i class=\"las la-arrow-up text-lg\"></i> {{app.user.totalincome / 100}} AVG
              </span>
            </div>
            <div
              class=\"-my-3 shrink-0 ltr:translate-x-3 xl:ltr:translate-x-7 xxxl:ltr:translate-x-2 4xl:ltr:translate-x-9 rtl:-translate-x-3 xl:rtl:-translate-x-7 xxxl:rtl:-translate-x-2 4xl:rtl:-translate-x-9\">
              <div class=\"progress-chart\"></div>
            </div>
          </div>
        </div>
        <!-- Assetchart -->
        {# <div class=\"box col-span-12 overflow-x-hidden\">
          <div class=\"bb-dashed mb-4 flex flex-wrap items-center justify-between gap-3 pb-4\">
            <h4 class=\"h4\">Your Assets</h4>
            <div class=\"rounded-lg border border-n30 bg-primary/5 dark:border-n500\">
              <button id=\"one_month\"
                class=\"asset-btn px-4 py-2 text-xs font-medium first:rounded-s-lg last:rounded-e-lg\">
                1M
              </button>
              <button id=\"six_months\"
                class=\"asset-btn px-4 py-2 text-xs font-medium first:rounded-s-lg last:rounded-e-lg\">
                6M
              </button>
              <button id=\"one_year\"
                class=\"asset-btn active px-4 py-2 text-xs font-medium first:rounded-s-lg last:rounded-e-lg\">
                1Y
              </button>
              <button id=\"ytd\" class=\"asset-btn px-4 py-2 text-xs font-medium first:rounded-s-lg last:rounded-e-lg\">
                YTD
              </button>
              <button id=\"all\" class=\"asset-btn px-4 py-2 text-xs font-medium first:rounded-s-lg last:rounded-e-lg\">
                all
              </button>
            </div>
          </div>
          <div id=\"asset-chart\"></div>
        </div> #}
        <!-- Latest Transactions -->
        <div class=\"box col-span-12 lg:col-span-12\">
          <div class=\"bb-dashed mb-4 flex flex-wrap items-center justify-between gap-4 pb-4 lg:mb-6 lg:pb-6\">
            <h4 class=\"h4\">Latest Transaction</h4>
            <div class=\"relative\">
  
 
</div>

          </div>
          <div class=\"overflow-x-auto\">
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
                    (transaction.title is same as(\"Paypal Deposit\") ) ? \"assets/dashboard/images/paypal.png\" :
                    (transaction.title == \"Card Deposit\") ? \"assets/dashboard/images/visa.png\" :
                    (transaction.title == \"Crypto Deposit\") ? \"assets/dashboard/images/crypto.jpg\" :
                    \"assets/dashboard/images/crypto.jpg\"
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
          <a class=\"group mt-6 inline-flex items-center gap-1 font-semibold text-primary\" href={{ path(\"transactions\") }}>
            See More
            <i class=\"las la-arrow-right duration-300 group-hover:pl-2\"></i>
          </a>
        </div>
       
        </div>
      </div>
    </div>
  </main>
  
{% endblock %}", "dashboard/index.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\dashboard\\index.html.twig");
    }
}
