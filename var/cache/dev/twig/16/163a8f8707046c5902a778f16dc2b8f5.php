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

/* home/login.html.twig */
class __TwigTemplate_a65b68b5452aa8e839a8d845243906c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        // line 1
        echo "<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Elite Forte - Sign In</title>
  <meta name=\"title\" Content=\"Elite Forte - Sign In\">
    <meta name=\"description\" content=\"jj\">
    <meta name=\"keywords\" content=\"laon\">
    <link rel=\"shortcut icon\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/logoIcon/favicon.png"), "html", null, true);
        echo " type=\"image/x-icon\">

    
    <link rel=\"apple-touch-icon\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/logoIcon/logo.png"), "html", null, true);
        echo ">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Elite Forte - Sign In\">
    
    <meta itemprop=\"name\" content=\"Elite Forte - Sign In\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\">
    
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"jj\">
    <meta property=\"og:description\" content=\"jj\">
    <meta property=\"og:image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\"/>
    <meta property=\"og:image:type\" content=\"image/jpg\" />
        <meta property=\"og:image:width\" content=\"600\" />
    <meta property=\"og:image:height\" content=\"315\" />
    <meta property=\"og:url\" content=\"https://accounts.Eliteforte.net/login\">
    
    <meta name=\"twitter:card\" content=\"summary_large_image\">

  <!-- bootstrap 5  -->
  <link rel=\"stylesheet\" href=";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/lib/bootstrap.min.css"), "html", null, true);
        echo ">
  <!-- fontawesome 5  -->
  <link rel=\"stylesheet\" href=";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/all.min.css"), "html", null, true);
        echo ">
  <!-- lineawesome font -->
  <link rel=\"stylesheet\" href=";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/line-awesome.min.css"), "html", null, true);
        echo ">

  <link rel=\"stylesheet\" href=";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/custom.css"), "html", null, true);
        echo ">

  <!-- main css -->
  <link rel=\"stylesheet\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/main.css"), "html", null, true);
        echo ">

  <link rel=\"stylesheet\" href=";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/color.css"), "html", null, true);
        echo ">

  
  <style>
    .capcha div{
        width: 100% !important;
    }
</style>

</head>
  <body>

    <div class=\"preloader\">
        <div class=\"dl\">
            <div class=\"dl__container\">
            <div class=\"dl__corner--top\"></div>
            <div class=\"dl__corner--bottom\"></div>
            </div>
            <div class=\"dl__square\"></div>
        </div>
    </div>


    <div class=\"main-wrapper\">
        

<section class=\"account-section bg_img\" style=\"background-image: url(";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/frontend/breadcumb/60c7569dec4f01623676573.jpg"), "html", null, true);
        echo ");\">
    <div class=\"account-section-left\">
        <div class=\"account-section-left-inner\">
            <h4 class=\"title text-white mb-2\">Welcome to Elite Forte LLC</h4>
            <p class=\"text-white\">Please input your username and password then login into your account</p>

            <p class=\"mt-xl-5 mt-3 text-white\">Haven't an account? <a href=";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo " class=\"text--base\">Signup here</a></p>
        </div>
    </div>
    <div class=\"account-section-right\">
        <div class=\"top text-center\">
            <a href=";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " class=\"account-logo\">
                <img src=";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/logoIcon/logo.png"), "html", null, true);
        echo " alt=\"logo\">
            </a>
        </div>
        <div class=\"middle\">
            ";
        // line 88
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 88, $this->source); })())) {
            // line 89
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 90, $this->source); })()), "messageKey", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 90, $this->source); })()), "messageData", [], "any", false, false, false, 90), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 93
        echo "            <form class=\"account-form\" id=\"loginform\" action=";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo " method=\"post\">
                <input type=\"hidden\" name=\"_token\" value=\"KtKnOgIEWlS0wAarFmH7QxckpKRzwyKSAjJjoAuZ\">                <div class=\"form-group\">
                    <label for=\"username\">Email *</label>
                    <input type=\"text\" name=\"_username\" value=\"\"
                        placeholder=\"Email\" class=\"form--control\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Password *</label>
                    <input id=\"password\" type=\"password\" placeholder=\"Password\" class=\"form--control\"
                        name=\"_password\" required autocomplete=\"current-password\" required>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <div class=\"form-check custom--checkbox\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"remember_me\" id=\"remember\"
                                >
                            <label class=\"form-check-label\" for=\"remember\">
                                Remember Me                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-5 text-md-end\">
                        <a href=\"password/reset.html\" class=\"custom--cl\">
                            Forgot password?
                        </a>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                                            </div>
                </div>
                <div class=\"form-group col-lg-12\">
        <label for=\"recaptcha-code\">Captcha</label>
        <link href=\"https://fonts.googleapis.com/css?family=Henny+Penny&display=swap\" rel=\"stylesheet\"><div style=\"height: 46px; line-height: 46px; width:100%; text-align: center; background-color: #003; color: #0d9315; font-size: 26px; font-weight: bold; letter-spacing: 20px; font-family: 'Henny Penny', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;\"><span style=\"    float:left;     -webkit-transform: rotate(-37deg);\">2</span><span style=\"    float:left;     -webkit-transform: rotate(38deg);\">0</span><span style=\"    float:left;     -webkit-transform: rotate(-1deg);\">7</span><span style=\"    float:left;     -webkit-transform: rotate(29deg);\">1</span><span style=\"    float:left;     -webkit-transform: rotate(-34deg);\">2</span><span style=\"    float:left;     -webkit-transform: rotate(51deg);\">6</span></div><input type=\"hidden\" name=\"captcha_secret\" value=\"7294f9053968d3579e86a7f54bc6c18dc5a11778df0e4cc083662baadf01d706\">        <input type=\"text\" name=\"captcha\" id=\"recaptcha-code\" placeholder=\"Enter Captcha\" class=\"form--control mt-3\" autocomplete=\"off\">
    </div>


                <button type=\"submit\" class=\"btn btn--base w-100\">Sign In</button>
            </form>
        </div>
        <div class=\"bottom\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <ul class=\"d-flex flex-wrap align-items-center account-short-link justify-content-center\">
                                                            <li><a href=";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("policy");
        echo " target=\"blank\">
                        Company Policy</a>
                        ,</li>
                                                            <li><a href=";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms");
        echo " target=\"blank\">
                        Terms of Services</a>
                        ,</li>
                                                            <li><a href=";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo " target=\"blank\">
                        Privacy Policy</a>
                        .</li>
                                                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


    </div>





    <!-- jQuery library -->
  <script src=";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/jquery-3.5.1.min.js"), "html", null, true);
        echo "></script>

  <script src=";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lightcase.js"), "html", null, true);
        echo "></script>

  <!-- bootstrap js -->
  <script src=";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/slick.min.js"), "html", null, true);
        echo "></script>
  <!-- scroll animation -->
  <script src=";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/wow.min.js"), "html", null, true);
        echo "></script>

    <!-- main js -->
  <script src=";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/app.js"), "html", null, true);
        echo "></script>

      <script>
        \"use strict\";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    '<span style=\"color:red;\">Captcha field is required.</span>';
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }

    </script>


  <link rel=\"stylesheet\" href=";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/css/iziToast.min.css"), "html", null, true);
        echo ">
<script src=";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/js/iziToast.min.js"), "html", null, true);
        echo "></script>




  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/login.html.twig";
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
        return array (  316 => 196,  312 => 195,  287 => 173,  281 => 170,  276 => 168,  272 => 167,  266 => 164,  261 => 162,  240 => 144,  234 => 141,  228 => 138,  179 => 93,  173 => 90,  170 => 89,  168 => 88,  161 => 84,  157 => 83,  149 => 78,  140 => 72,  111 => 46,  106 => 44,  100 => 41,  95 => 39,  90 => 37,  85 => 35,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Elite Forte - Sign In</title>
  <meta name=\"title\" Content=\"Elite Forte - Sign In\">
    <meta name=\"description\" content=\"jj\">
    <meta name=\"keywords\" content=\"laon\">
    <link rel=\"shortcut icon\" href={{ asset(\"assets/auth/assets/images/logoIcon/favicon.png\") }} type=\"image/x-icon\">

    
    <link rel=\"apple-touch-icon\" href={{ asset(\"assets/auth/assets/images/logoIcon/logo.png\") }}>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Elite Forte - Sign In\">
    
    <meta itemprop=\"name\" content=\"Elite Forte - Sign In\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\">
    
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"jj\">
    <meta property=\"og:description\" content=\"jj\">
    <meta property=\"og:image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\"/>
    <meta property=\"og:image:type\" content=\"image/jpg\" />
        <meta property=\"og:image:width\" content=\"600\" />
    <meta property=\"og:image:height\" content=\"315\" />
    <meta property=\"og:url\" content=\"https://accounts.Eliteforte.net/login\">
    
    <meta name=\"twitter:card\" content=\"summary_large_image\">

  <!-- bootstrap 5  -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/lib/bootstrap.min.css\") }}>
  <!-- fontawesome 5  -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/all.min.css\") }}>
  <!-- lineawesome font -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/line-awesome.min.css\") }}>

  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/custom.css\") }}>

  <!-- main css -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/main.css\") }}>

  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/color.css\") }}>

  
  <style>
    .capcha div{
        width: 100% !important;
    }
</style>

</head>
  <body>

    <div class=\"preloader\">
        <div class=\"dl\">
            <div class=\"dl__container\">
            <div class=\"dl__corner--top\"></div>
            <div class=\"dl__corner--bottom\"></div>
            </div>
            <div class=\"dl__square\"></div>
        </div>
    </div>


    <div class=\"main-wrapper\">
        

<section class=\"account-section bg_img\" style=\"background-image: url({{ asset('assets/auth/assets/images/frontend/breadcumb/60c7569dec4f01623676573.jpg') }});\">
    <div class=\"account-section-left\">
        <div class=\"account-section-left-inner\">
            <h4 class=\"title text-white mb-2\">Welcome to Elite Forte LLC</h4>
            <p class=\"text-white\">Please input your username and password then login into your account</p>

            <p class=\"mt-xl-5 mt-3 text-white\">Haven't an account? <a href={{ path('register') }} class=\"text--base\">Signup here</a></p>
        </div>
    </div>
    <div class=\"account-section-right\">
        <div class=\"top text-center\">
            <a href={{ path('home') }} class=\"account-logo\">
                <img src={{ asset(\"assets/auth/assets/images/logoIcon/logo.png\") }} alt=\"logo\">
            </a>
        </div>
        <div class=\"middle\">
            {% if error %}
                <div class=\"alert alert-danger\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}
            <form class=\"account-form\" id=\"loginform\" action={{ path('login') }} method=\"post\">
                <input type=\"hidden\" name=\"_token\" value=\"KtKnOgIEWlS0wAarFmH7QxckpKRzwyKSAjJjoAuZ\">                <div class=\"form-group\">
                    <label for=\"username\">Email *</label>
                    <input type=\"text\" name=\"_username\" value=\"\"
                        placeholder=\"Email\" class=\"form--control\" required>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Password *</label>
                    <input id=\"password\" type=\"password\" placeholder=\"Password\" class=\"form--control\"
                        name=\"_password\" required autocomplete=\"current-password\" required>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <div class=\"form-check custom--checkbox\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"remember_me\" id=\"remember\"
                                >
                            <label class=\"form-check-label\" for=\"remember\">
                                Remember Me                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-5 text-md-end\">
                        <a href=\"password/reset.html\" class=\"custom--cl\">
                            Forgot password?
                        </a>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                                            </div>
                </div>
                <div class=\"form-group col-lg-12\">
        <label for=\"recaptcha-code\">Captcha</label>
        <link href=\"https://fonts.googleapis.com/css?family=Henny+Penny&display=swap\" rel=\"stylesheet\"><div style=\"height: 46px; line-height: 46px; width:100%; text-align: center; background-color: #003; color: #0d9315; font-size: 26px; font-weight: bold; letter-spacing: 20px; font-family: 'Henny Penny', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;\"><span style=\"    float:left;     -webkit-transform: rotate(-37deg);\">2</span><span style=\"    float:left;     -webkit-transform: rotate(38deg);\">0</span><span style=\"    float:left;     -webkit-transform: rotate(-1deg);\">7</span><span style=\"    float:left;     -webkit-transform: rotate(29deg);\">1</span><span style=\"    float:left;     -webkit-transform: rotate(-34deg);\">2</span><span style=\"    float:left;     -webkit-transform: rotate(51deg);\">6</span></div><input type=\"hidden\" name=\"captcha_secret\" value=\"7294f9053968d3579e86a7f54bc6c18dc5a11778df0e4cc083662baadf01d706\">        <input type=\"text\" name=\"captcha\" id=\"recaptcha-code\" placeholder=\"Enter Captcha\" class=\"form--control mt-3\" autocomplete=\"off\">
    </div>


                <button type=\"submit\" class=\"btn btn--base w-100\">Sign In</button>
            </form>
        </div>
        <div class=\"bottom\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <ul class=\"d-flex flex-wrap align-items-center account-short-link justify-content-center\">
                                                            <li><a href={{ path(\"policy\") }} target=\"blank\">
                        Company Policy</a>
                        ,</li>
                                                            <li><a href={{ path(\"terms\") }} target=\"blank\">
                        Terms of Services</a>
                        ,</li>
                                                            <li><a href={{ path(\"privacy\") }} target=\"blank\">
                        Privacy Policy</a>
                        .</li>
                                                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


    </div>





    <!-- jQuery library -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lib/jquery-3.5.1.min.js\") }}></script>

  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lightcase.js\") }}></script>

  <!-- bootstrap js -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lib/bootstrap.bundle.min.js\") }}></script>
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lib/slick.min.js\") }}></script>
  <!-- scroll animation -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lib/wow.min.js\") }}></script>

    <!-- main js -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/app.js\") }}></script>

      <script>
        \"use strict\";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    '<span style=\"color:red;\">Captcha field is required.</span>';
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }

    </script>


  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/global/css/iziToast.min.css\") }}>
<script src={{ asset(\"assets/auth/assets/global/js/iziToast.min.js\") }}></script>




  </body>
</html>", "home/login.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\login.html.twig");
    }
}
