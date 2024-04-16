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

/* dashboard/settings.html.twig */
class __TwigTemplate_a1a366c5c21aeb17bfd39a8ed1f5fe47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/settings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/settings.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "dashboard/settings.html.twig", 1);
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
  <h2 class=\"h2\">Security</h2>
  <button class=\"btn ac-modal-btn\">
    <i class=\"las la-plus-circle text-base md:text-lg\"></i>
    Open an Account
  </button>
</div>

      <div class=\"flex flex-col gap-4 xxl:gap-6\">
        <!-- Change Password -->
        <div class=\"box xl:p-8 xxl:p-10\">
          <h4 class=\"h4 bb-dashed pb-4 mb-4 md:mb-6 md:pb-6\">
            Change Password
          </h4>
          <form class=\"mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxl:gap-6\" id=\"passwordform\">
            <div class=\"col-span-2 md:col-span-1\">
              <label for=\"email\" class=\"md:text-lg font-medium block mb-4\">
                Old Password
              </label>
              <div
                class=\"bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 relative\">
                <input type=\"password\" class=\"w-11/12 text-sm bg-transparent p-0 border-none\" placeholder=\"Old Password\"
                  id=\"password1\" name=\"oldpassword\" required />
                <span class=\"absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer\"
                  onclick=\"togglePassword('password1',this)\">
                  <i class=\"las la-eye\" style=\"display: none;\"></i>
                  <i class=\"las la-eye-slash\"></i>
                </span>
              </div>
            </div>
            <div class=\"col-span-2 md:col-span-1\">
              <label for=\"email\" class=\"md:text-lg font-medium block mb-4\">
                New Password
              </label>
              <div
                class=\"bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 relative\">
                <input type=\"password\" name=\"newpassword\" class=\"w-11/12 text-sm bg-transparent p-0 border-none\" placeholder=\"New Password\"
                  id=\"password2\" required />
                <span class=\"absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer\"
                  onclick=\"togglePassword('password2',this)\">
                  <i class=\"las la-eye\" style=\"display: none;\"></i>
                  <i class=\"las la-eye-slash\"></i>
                </span>
              </div>
            </div>
            <div class=\"col-span-2\">
              <label for=\"email\" class=\"md:text-lg font-medium block mb-4\">
                Confirm Password
              </label>
              <div
                class=\"bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 relative\">
                <input type=\"password\" name=\"confirm_password\" class=\"w-11/12 text-sm bg-transparent p-0 border-none\" placeholder=\"Old Password\"
                  id=\"password3\" required />
                <span class=\"absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer\"
                  onclick=\"togglePassword('password3',this)\">
                  <i class=\"las la-eye\" style=\"display: none;\"></i>
                  <i class=\"las la-eye-slash\"></i>
                </span>
              </div>
            </div>
            <div class=\"col-span-2\">
              <p class=\"font-medium text-lg mb-4\">
                New password must contain :
              </p>
              <ul class=\"marker:text-primary list-disc flex flex-col gap-3 list-inside\">
                <li>At least 8 characters</li>
                <li>At least 1 lower letter (a-z)</li>
                <li>At least 1 uppercase letter(A-Z)</li>
                <li>At least 1 number (0-9)</li>
                <li>At least 1 special characters</li>
              </ul>
            </div>
            <div class=\"col-span-2 flex gap-4\">
              <button type=\"submit\" class=\"btn px-5\">Save Changes</button>
              <button class=\"btn-outline px-5\">Cancel</button>
            </div>
          </form>
        </div>
        <!-- Two factor -->
        <div class=\"box xl:p-8\">
          <div class=\"flex justify-between items-center  bb-dashed mb-4 pb-4 lg:mb-6 lg:pb-6\">
            <h4 class=\"h4\">Two-Factor Authentication</h4>
            <div class=\"relative\">
  <i class=\"las la-ellipsis-h horiz-option-btn cursor-pointer\"></i>
  <ul
    class=\"horiz-option hide absolute top-full z-[3] min-w-[122px] rounded-md bg-n0 p-3 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg3 ltr:right-0 ltr:origin-top-right rtl:left-0 rtl:origin-top-left\">
    <li>
      <span
        class=\"block cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
        Edit
      </span>
    </li>
    <li>
      <span
        class=\"block cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
        Print
      </span>
    </li>
    <li>
      <span
        class=\"block cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
        Share
      </span>
    </li>
  </ul>
</div>

          </div>
          <div class=\"grid grid-cols-2 md:divide-x rtl:md:divide-x-reverse max-md:gap-4 divide-dashed divide-primary\">
            <div class=\"col-span-2 md:col-span-1 md:ltr:pr-5 md:rtl:pl-5 flex flex-col gap-4 xxl:gap-6\">
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    Authentication app
                  </p>
                  <span class=\"text-xs md:text-sm\">Google auth app</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"google\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"google\" class=\"custom-checkbox sr-only\" />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary/20\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition\"></div>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    Primary Email
                  </p>
                  <span class=\"text-xs md:text-sm\">E-mail used to send notifications</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"email\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"email\" class=\"custom-checkbox sr-only\" checked />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition translate-x-full\">
                      </div>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    SMS Recovery
                  </p>
                  <span class=\"text-xs md:text-sm\">Your phone number or something</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"sms\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"sms\" class=\"custom-checkbox sr-only\" />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary/20\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition\"></div>
                    </div>
                  </label>
                </div>
              </div>
            </div>
            <div class=\"col-span-2 md:col-span-1 md:ltr:pl-5 md:rtl:pr-5 flex flex-col gap-4 xxl:gap-6\">
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    Mobile Authenticator
                  </p>
                  <span class=\"text-xs md:text-sm\">Enhance security with a mobile authentication app.</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"mobile\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"mobile\" class=\"custom-checkbox sr-only\" checked />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition translate-x-full\">
                      </div>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    Email Notifications
                  </p>
                  <span class=\"text-xs md:text-sm\">Receive important notifications via your primary email.</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"recovery\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"recovery\" class=\"custom-checkbox sr-only\" />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary/20\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition\"></div>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    SMS Account Recovery
                  </p>
                  <span class=\"text-xs md:text-sm\">Enable SMS-based account recovery for added convenience.</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"sms-account\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"sms-account\" class=\"custom-checkbox sr-only\" />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary/20\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition\"></div>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 232
    public function block_customJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customJs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customJs"));

        // line 233
        echo "     <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/dashboard/js/settings.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/settings.html.twig";
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
        return array (  334 => 233,  324 => 232,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}EliteForte Transaction History{% endblock %}

{% block main %}
      <!-- Main Content -->
  <main class=\"main-content has-sidebar\">
    <div class=\"main-inner\">
      <div class=\"mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8\">
  <h2 class=\"h2\">Security</h2>
  <button class=\"btn ac-modal-btn\">
    <i class=\"las la-plus-circle text-base md:text-lg\"></i>
    Open an Account
  </button>
</div>

      <div class=\"flex flex-col gap-4 xxl:gap-6\">
        <!-- Change Password -->
        <div class=\"box xl:p-8 xxl:p-10\">
          <h4 class=\"h4 bb-dashed pb-4 mb-4 md:mb-6 md:pb-6\">
            Change Password
          </h4>
          <form class=\"mt-6 xl:mt-8 grid grid-cols-2 gap-4 xxxl:gap-6\" id=\"passwordform\">
            <div class=\"col-span-2 md:col-span-1\">
              <label for=\"email\" class=\"md:text-lg font-medium block mb-4\">
                Old Password
              </label>
              <div
                class=\"bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 relative\">
                <input type=\"password\" class=\"w-11/12 text-sm bg-transparent p-0 border-none\" placeholder=\"Old Password\"
                  id=\"password1\" name=\"oldpassword\" required />
                <span class=\"absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer\"
                  onclick=\"togglePassword('password1',this)\">
                  <i class=\"las la-eye\" style=\"display: none;\"></i>
                  <i class=\"las la-eye-slash\"></i>
                </span>
              </div>
            </div>
            <div class=\"col-span-2 md:col-span-1\">
              <label for=\"email\" class=\"md:text-lg font-medium block mb-4\">
                New Password
              </label>
              <div
                class=\"bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 relative\">
                <input type=\"password\" name=\"newpassword\" class=\"w-11/12 text-sm bg-transparent p-0 border-none\" placeholder=\"New Password\"
                  id=\"password2\" required />
                <span class=\"absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer\"
                  onclick=\"togglePassword('password2',this)\">
                  <i class=\"las la-eye\" style=\"display: none;\"></i>
                  <i class=\"las la-eye-slash\"></i>
                </span>
              </div>
            </div>
            <div class=\"col-span-2\">
              <label for=\"email\" class=\"md:text-lg font-medium block mb-4\">
                Confirm Password
              </label>
              <div
                class=\"bg-primary/5 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl px-3 md:px-6 py-2 md:py-3 relative\">
                <input type=\"password\" name=\"confirm_password\" class=\"w-11/12 text-sm bg-transparent p-0 border-none\" placeholder=\"Old Password\"
                  id=\"password3\" required />
                <span class=\"absolute eye-icon ltr:right-5 rtl:left-5 top-1/2 -translate-y-1/2 cursor-pointer\"
                  onclick=\"togglePassword('password3',this)\">
                  <i class=\"las la-eye\" style=\"display: none;\"></i>
                  <i class=\"las la-eye-slash\"></i>
                </span>
              </div>
            </div>
            <div class=\"col-span-2\">
              <p class=\"font-medium text-lg mb-4\">
                New password must contain :
              </p>
              <ul class=\"marker:text-primary list-disc flex flex-col gap-3 list-inside\">
                <li>At least 8 characters</li>
                <li>At least 1 lower letter (a-z)</li>
                <li>At least 1 uppercase letter(A-Z)</li>
                <li>At least 1 number (0-9)</li>
                <li>At least 1 special characters</li>
              </ul>
            </div>
            <div class=\"col-span-2 flex gap-4\">
              <button type=\"submit\" class=\"btn px-5\">Save Changes</button>
              <button class=\"btn-outline px-5\">Cancel</button>
            </div>
          </form>
        </div>
        <!-- Two factor -->
        <div class=\"box xl:p-8\">
          <div class=\"flex justify-between items-center  bb-dashed mb-4 pb-4 lg:mb-6 lg:pb-6\">
            <h4 class=\"h4\">Two-Factor Authentication</h4>
            <div class=\"relative\">
  <i class=\"las la-ellipsis-h horiz-option-btn cursor-pointer\"></i>
  <ul
    class=\"horiz-option hide absolute top-full z-[3] min-w-[122px] rounded-md bg-n0 p-3 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-bg3 ltr:right-0 ltr:origin-top-right rtl:left-0 rtl:origin-top-left\">
    <li>
      <span
        class=\"block cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
        Edit
      </span>
    </li>
    <li>
      <span
        class=\"block cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
        Print
      </span>
    </li>
    <li>
      <span
        class=\"block cursor-pointer rounded px-3 py-1 text-sm leading-normal duration-300 hover:bg-primary/10 dark:hover:bg-bg4\">
        Share
      </span>
    </li>
  </ul>
</div>

          </div>
          <div class=\"grid grid-cols-2 md:divide-x rtl:md:divide-x-reverse max-md:gap-4 divide-dashed divide-primary\">
            <div class=\"col-span-2 md:col-span-1 md:ltr:pr-5 md:rtl:pl-5 flex flex-col gap-4 xxl:gap-6\">
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    Authentication app
                  </p>
                  <span class=\"text-xs md:text-sm\">Google auth app</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"google\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"google\" class=\"custom-checkbox sr-only\" />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary/20\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition\"></div>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    Primary Email
                  </p>
                  <span class=\"text-xs md:text-sm\">E-mail used to send notifications</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"email\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"email\" class=\"custom-checkbox sr-only\" checked />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition translate-x-full\">
                      </div>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    SMS Recovery
                  </p>
                  <span class=\"text-xs md:text-sm\">Your phone number or something</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"sms\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"sms\" class=\"custom-checkbox sr-only\" />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary/20\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition\"></div>
                    </div>
                  </label>
                </div>
              </div>
            </div>
            <div class=\"col-span-2 md:col-span-1 md:ltr:pl-5 md:rtl:pr-5 flex flex-col gap-4 xxl:gap-6\">
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    Mobile Authenticator
                  </p>
                  <span class=\"text-xs md:text-sm\">Enhance security with a mobile authentication app.</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"mobile\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"mobile\" class=\"custom-checkbox sr-only\" checked />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition translate-x-full\">
                      </div>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    Email Notifications
                  </p>
                  <span class=\"text-xs md:text-sm\">Receive important notifications via your primary email.</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"recovery\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"recovery\" class=\"custom-checkbox sr-only\" />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary/20\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition\"></div>
                    </div>
                  </label>
                </div>
              </div>
              <div class=\"flex items-center justify-between\">
                <div>
                  <p class=\"font-medium text-base md:text-lg xl:text-xl mb-2\">
                    SMS Account Recovery
                  </p>
                  <span class=\"text-xs md:text-sm\">Enable SMS-based account recovery for added convenience.</span>
                </div>
                <div class=\"flex items-center justify-center\">
                  <label for=\"sms-account\" class=\"flex items-center cursor-pointer\">
                    <div class=\"relative\">
                      <input type=\"checkbox\" id=\"sms-account\" class=\"custom-checkbox sr-only\" />
                      <div class=\"block w-14 h-8 rounded-full bg bg-primary/20\"></div>
                      <div class=\"dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition\"></div>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
{% endblock %}
{% block customJs %}
     <script src={{ asset(\"assets/dashboard/js/settings.js\") }}></script>
{% endblock %}", "dashboard/settings.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\dashboard\\settings.html.twig");
    }
}
