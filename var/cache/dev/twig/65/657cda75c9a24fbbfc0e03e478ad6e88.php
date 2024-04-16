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

/* home/verify.html.twig */
class __TwigTemplate_016af783e68d78375d5a19439563c251 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/verify.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/verify.html.twig"));

        // line 1
        echo "<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Elite Forte - Verify</title>
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
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 88, $this->source); })()) === true)) {
            // line 89
            echo "                <div class=\"alert alert-danger\">
                    Your Account Has not been Activated Yet , Contact our Support Team To Help Activate Your Account
                </div>
                ";
        } else {
            // line 93
            echo "            
            <form class=\"account-form\" id=\"verifyform\">
                             <div class=\"form-group\">
                    <label for=\"username\">Enter Your Account Pin *</label>
                    <input type=\"text\" name=\"pin\" value=\"\"
                        placeholder=\"0000\" class=\"form--control\" required>
                </div>
                

                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                                            </div>
                </div>
            

                <button type=\"submit\"  id=\"registerbtn\" class=\"btn btn--base w-100\">Verify</button>
            </form>
            ";
        }
        // line 111
        echo "        </div>
       
    </div>
</section>


    </div>





    <!-- jQuery library -->
  <script src=";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/jquery-3.5.1.min.js"), "html", null, true);
        echo "></script>

  <script src=";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lightcase.js"), "html", null, true);
        echo "></script>

  <!-- bootstrap js -->
  <script src=";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/slick.min.js"), "html", null, true);
        echo "></script>
  <!-- scroll animation -->
  <script src=";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/wow.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/js/verify.js"), "html", null, true);
        echo "></script>

    <!-- main js -->
  <script src=";
        // line 136
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
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/css/iziToast.min.css"), "html", null, true);
        echo ">
<script src=";
        // line 159
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
        return "home/verify.html.twig";
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
        return array (  270 => 159,  266 => 158,  241 => 136,  235 => 133,  231 => 132,  226 => 130,  222 => 129,  216 => 126,  211 => 124,  196 => 111,  176 => 93,  170 => 89,  168 => 88,  161 => 84,  157 => 83,  149 => 78,  140 => 72,  111 => 46,  106 => 44,  100 => 41,  95 => 39,  90 => 37,  85 => 35,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Elite Forte - Verify</title>
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
            {% if status is same as(true) %}
                <div class=\"alert alert-danger\">
                    Your Account Has not been Activated Yet , Contact our Support Team To Help Activate Your Account
                </div>
                {% else %}
            
            <form class=\"account-form\" id=\"verifyform\">
                             <div class=\"form-group\">
                    <label for=\"username\">Enter Your Account Pin *</label>
                    <input type=\"text\" name=\"pin\" value=\"\"
                        placeholder=\"0000\" class=\"form--control\" required>
                </div>
                

                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                                            </div>
                </div>
            

                <button type=\"submit\"  id=\"registerbtn\" class=\"btn btn--base w-100\">Verify</button>
            </form>
            {% endif %}
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
  <script src={{ asset(\"assets/auth/assets/global/js/verify.js\") }}></script>

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
</html>", "home/verify.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\verify.html.twig");
    }
}
