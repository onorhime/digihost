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

/* dashboard/profile.html.twig */
class __TwigTemplate_b39c257bdb562ec82f3a28d59c99d33b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/profile.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "dashboard/profile.html.twig", 1);
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

        echo "EliteForte Profile";
        
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
        echo "     <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
  <h2 class=\"h2\">Profile</h2>
  <button class=\"btn ac-modal-btn\">
    <i class=\"las la-plus-circle text-base md:text-lg\"></i>
    Open an Account
  </button>
</div>

      <div class=\"grid grid-cols-12 gap-4 xxxxxl:gap-6\">
        <div class=\"col-span-12 lg:col-span-6\">
          <div class=\"box xxl:p-8 xxxl:p-10\">
            <h4 class=\"h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6\">
              Account Settings
            </h4>
            ";
        // line 24
        echo "            <div class=\"flex flex-wrap gap-6 xxl:gap-10 items-center bb-dashed mb-6 pb-6\">
              <h1  width=\"120\" height=\"120\" class=\"rounded-xl\" alt=\"img\" >";
        // line 25
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25), 0, 1)), "html", null, true);
        echo "</h1>
              ";
        // line 33
        echo "            </div>
            <form class=\"mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxxxl:gap-6\">
              <div class=\"col-span-2 md:col-span-1\">
                <label for=\"fname\" class=\"md:text-lg font-medium block mb-4\">
                  First Name
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  id=\"fname\" placeholder=\"First Name\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41), "html", null, true);
        echo "\" required readonly/>
              </div>
              <div class=\"col-span-2 md:col-span-1\">
                <label for=\"lname\" class=\"md:text-lg font-medium block mb-4\">
                  Last Name
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Last Name\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "lastname", [], "any", false, false, false, 49), "html", null, true);
        echo "\" id=\"lname\" required readonly/>
              </div>
              <div class=\"col-span-2\">
                <label for=\"email\" class=\"md:text-lg font-medium block mb-4\">
                  Email
                </label>
                <input type=\"email\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Email\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "email", [], "any", false, false, false, 57), "html", null, true);
        echo "\" id=\"email\" required  readonly/>
              </div>
              <div class=\"col-span-2\">
                <label for=\"phone\" class=\"md:text-lg font-medium block mb-4\">
                  Phone (Optional)
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Phone\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "mobile", [], "any", false, false, false, 65), "html", null, true);
        echo "\" id=\"phone\" readonly required />
              </div>
             

            
              <div></div>
              <div class=\"col-span-2\">
                <div class=\"flex flex-col gap-4\">
                  <div class=\"flex items-center relative\">
    <input type=\"checkbox\" id=\"I agree to the privacy &amp; policy\" name=\"A3-confirmation\" class=\"opacity-0 absolute h-8 w-8\" />
    <div
        class=\"bg-n0 dark:bg-bg4 border border-gray-400 rounded-full w-5 h-5 flex shrink-0 justify-center items-center ltr:mr-2 rtl:ml-2 focus-within:border-primary\">
        <svg class=\"fill-current hidden w-[10px] h-[10px] text-primary pointer-events-none\" version=\"1.1\"
            viewBox=\"0 0 17 12\" xmlns=\"http://www.w3.org/2000/svg\">
            <g fill=\"none\" fill-rule=\"evenodd\">
                <g transform=\"translate(-9 -11)\" fill=\"#20B757\" fill-rule=\"nonzero\">
                    <path
                        d=\"m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z\" />
                </g>
            </g>
        </svg>
    </div>
    <label for=\"I agree to the privacy &amp; policy\" class=\"select-none text-sm md:text-base flex gap-2 cursor-pointer items-center\">
        I agree to the privacy &amp; policy
    </label>
</div>
                  <div class=\"flex items-center relative\">
    <input type=\"checkbox\" id=\"I agree with all terms &amp; conditions\" name=\"A3-confirmation\" class=\"opacity-0 absolute h-8 w-8\" />
    <div
        class=\"bg-n0 dark:bg-bg4 border border-gray-400 rounded-full w-5 h-5 flex shrink-0 justify-center items-center ltr:mr-2 rtl:ml-2 focus-within:border-primary\">
        <svg class=\"fill-current hidden w-[10px] h-[10px] text-primary pointer-events-none\" version=\"1.1\"
            viewBox=\"0 0 17 12\" xmlns=\"http://www.w3.org/2000/svg\">
            <g fill=\"none\" fill-rule=\"evenodd\">
                <g transform=\"translate(-9 -11)\" fill=\"#20B757\" fill-rule=\"nonzero\">
                    <path
                        d=\"m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z\" />
                </g>
            </g>
        </svg>
    </div>
    <label for=\"I agree with all terms &amp; conditions\" class=\"select-none text-sm md:text-base flex gap-2 cursor-pointer items-center\">
        I agree with all terms &amp; conditions
    </label>
</div>
                </div>
                <div class=\"flex mt-6 xxl:mt-10 gap-4\">
                  <button class=\"btn px-5\">Save Changes</button>
                  <button class=\"btn-outline px-5\">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class=\"col-span-12 lg:col-span-6\">
          <div class=\"box xxl:p-8 xxxl:p-10 mb-6\">
            <h4 class=\"h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6\">Address</h4>
            <form class=\"mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxl:gap-6\">
              
              <div class=\"col-span-2 md:col-span-1\">
                <label for=\"address1\" class=\"md:text-lg font-medium block mb-4\">
                  Address 1
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Address 1\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "address", [], "any", false, false, false, 129), "html", null, true);
        echo "\" id=\"address1\" required />
              </div>
              <div class=\"col-span-2 md:col-span-1\">
                <label for=\"address2\" class=\"md:text-lg font-medium block mb-4\">
                  Address 2 (Optional)
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Address 2\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "city", [], "any", false, false, false, 137), "html", null, true);
        echo "\" id=\"address2\" required />
              </div>
              <div class=\"col-span-2\">
                <label for=\"zip\" class=\"md:text-lg font-medium block mb-4\">
                  Zip Code
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Zip Code\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "zip", [], "any", false, false, false, 145), "html", null, true);
        echo "\" id=\"zip\" required />
              </div>
              <div class=\"col-span-2 flex pt-4 gap-4\">
                <button class=\"btn px-5\">Save Changes</button>
                <button class=\"btn-outline px-5\">Cancel</button>
              </div>
            </form>
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
        return "dashboard/profile.html.twig";
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
        return array (  246 => 145,  235 => 137,  224 => 129,  157 => 65,  146 => 57,  135 => 49,  124 => 41,  114 => 33,  110 => 25,  107 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}EliteForte Profile{% endblock %}

{% block main %}
     <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
  <h2 class=\"h2\">Profile</h2>
  <button class=\"btn ac-modal-btn\">
    <i class=\"las la-plus-circle text-base md:text-lg\"></i>
    Open an Account
  </button>
</div>

      <div class=\"grid grid-cols-12 gap-4 xxxxxl:gap-6\">
        <div class=\"col-span-12 lg:col-span-6\">
          <div class=\"box xxl:p-8 xxxl:p-10\">
            <h4 class=\"h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6\">
              Account Settings
            </h4>
            {# <p class=\"text-lg font-medium mb-4\">Profile Photo</p> #}
            <div class=\"flex flex-wrap gap-6 xxl:gap-10 items-center bb-dashed mb-6 pb-6\">
              <h1  width=\"120\" height=\"120\" class=\"rounded-xl\" alt=\"img\" >{{ app.user.username|slice(0, 1)| capitalize }}</h1>
              {# <div class=\"flex gap-4\">
                <label for=\"photo-upload\" class=\"btn\">
                  Upload Photo
                </label>
                <input type=\"file\" id=\"photo-upload\" class=\"hidden\" />
                <button class=\"btn-outline\">Cancel</button>
              </div> #}
            </div>
            <form class=\"mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxxxl:gap-6\">
              <div class=\"col-span-2 md:col-span-1\">
                <label for=\"fname\" class=\"md:text-lg font-medium block mb-4\">
                  First Name
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  id=\"fname\" placeholder=\"First Name\" value=\"{{app.user.firstname}}\" required readonly/>
              </div>
              <div class=\"col-span-2 md:col-span-1\">
                <label for=\"lname\" class=\"md:text-lg font-medium block mb-4\">
                  Last Name
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Last Name\" value=\"{{app.user.lastname}}\" id=\"lname\" required readonly/>
              </div>
              <div class=\"col-span-2\">
                <label for=\"email\" class=\"md:text-lg font-medium block mb-4\">
                  Email
                </label>
                <input type=\"email\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Email\" value=\"{{app.user.email}}\" id=\"email\" required  readonly/>
              </div>
              <div class=\"col-span-2\">
                <label for=\"phone\" class=\"md:text-lg font-medium block mb-4\">
                  Phone (Optional)
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Phone\" value=\"{{app.user.mobile}}\" id=\"phone\" readonly required />
              </div>
             

            
              <div></div>
              <div class=\"col-span-2\">
                <div class=\"flex flex-col gap-4\">
                  <div class=\"flex items-center relative\">
    <input type=\"checkbox\" id=\"I agree to the privacy &amp; policy\" name=\"A3-confirmation\" class=\"opacity-0 absolute h-8 w-8\" />
    <div
        class=\"bg-n0 dark:bg-bg4 border border-gray-400 rounded-full w-5 h-5 flex shrink-0 justify-center items-center ltr:mr-2 rtl:ml-2 focus-within:border-primary\">
        <svg class=\"fill-current hidden w-[10px] h-[10px] text-primary pointer-events-none\" version=\"1.1\"
            viewBox=\"0 0 17 12\" xmlns=\"http://www.w3.org/2000/svg\">
            <g fill=\"none\" fill-rule=\"evenodd\">
                <g transform=\"translate(-9 -11)\" fill=\"#20B757\" fill-rule=\"nonzero\">
                    <path
                        d=\"m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z\" />
                </g>
            </g>
        </svg>
    </div>
    <label for=\"I agree to the privacy &amp; policy\" class=\"select-none text-sm md:text-base flex gap-2 cursor-pointer items-center\">
        I agree to the privacy &amp; policy
    </label>
</div>
                  <div class=\"flex items-center relative\">
    <input type=\"checkbox\" id=\"I agree with all terms &amp; conditions\" name=\"A3-confirmation\" class=\"opacity-0 absolute h-8 w-8\" />
    <div
        class=\"bg-n0 dark:bg-bg4 border border-gray-400 rounded-full w-5 h-5 flex shrink-0 justify-center items-center ltr:mr-2 rtl:ml-2 focus-within:border-primary\">
        <svg class=\"fill-current hidden w-[10px] h-[10px] text-primary pointer-events-none\" version=\"1.1\"
            viewBox=\"0 0 17 12\" xmlns=\"http://www.w3.org/2000/svg\">
            <g fill=\"none\" fill-rule=\"evenodd\">
                <g transform=\"translate(-9 -11)\" fill=\"#20B757\" fill-rule=\"nonzero\">
                    <path
                        d=\"m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z\" />
                </g>
            </g>
        </svg>
    </div>
    <label for=\"I agree with all terms &amp; conditions\" class=\"select-none text-sm md:text-base flex gap-2 cursor-pointer items-center\">
        I agree with all terms &amp; conditions
    </label>
</div>
                </div>
                <div class=\"flex mt-6 xxl:mt-10 gap-4\">
                  <button class=\"btn px-5\">Save Changes</button>
                  <button class=\"btn-outline px-5\">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class=\"col-span-12 lg:col-span-6\">
          <div class=\"box xxl:p-8 xxxl:p-10 mb-6\">
            <h4 class=\"h4 bb-dashed mb-4 pb-4 md:mb-6 md:pb-6\">Address</h4>
            <form class=\"mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxl:gap-6\">
              
              <div class=\"col-span-2 md:col-span-1\">
                <label for=\"address1\" class=\"md:text-lg font-medium block mb-4\">
                  Address 1
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Address 1\" value=\"{{app.user.address}}\" id=\"address1\" required />
              </div>
              <div class=\"col-span-2 md:col-span-1\">
                <label for=\"address2\" class=\"md:text-lg font-medium block mb-4\">
                  Address 2 (Optional)
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Address 2\" value=\"{{app.user.city}}\" id=\"address2\" required />
              </div>
              <div class=\"col-span-2\">
                <label for=\"zip\" class=\"md:text-lg font-medium block mb-4\">
                  Zip Code
                </label>
                <input type=\"text\"
                  class=\"w-full text-sm bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3\"
                  placeholder=\"Enter Zip Code\" value=\"{{app.user.zip}}\" id=\"zip\" required />
              </div>
              <div class=\"col-span-2 flex pt-4 gap-4\">
                <button class=\"btn px-5\">Save Changes</button>
                <button class=\"btn-outline px-5\">Cancel</button>
              </div>
            </form>
          </div>
         
          
        </div>
      </div>
    </div>
  </main>
{% endblock %}", "dashboard/profile.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\dashboard\\profile.html.twig");
    }
}
