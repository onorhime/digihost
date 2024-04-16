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

/* home/privacy.html.twig */
class __TwigTemplate_03ba3409d7cc1e7b631d6bb94abb1e3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/privacy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/privacy.html.twig"));

        // line 1
        echo "<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Elite Forte - Privacy Policy</title>
  <meta name=\"title\" Content=\"Elite Forte - Privacy Policy\">
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
    <meta name=\"apple-mobile-web-app-title\" content=\"Elite Forte - Privacy Policy\">
    
    <meta itemprop=\"name\" content=\"Elite Forte - Privacy Policy\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\">
    
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"jj\">
    <meta property=\"og:description\" content=\"jj\">
    <meta property=\"og:image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\"/>
    <meta property=\"og:image:type\" content=\"image/jpg\" />
        <meta property=\"og:image:width\" content=\"600\" />
    <meta property=\"og:image:height\" content=\"315\" />
    <meta property=\"og:url\" content=\"https://accounts.Eliteforte.net/privacy\">
    
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
  <!-- slick slider css -->
  <link rel=\"stylesheet\" href=";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/lib/slick.css"), "html", null, true);
        echo ">

  <link rel=\"stylesheet\" href=";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/lightcase.css"), "html", null, true);
        echo ">

  <link rel=\"stylesheet\" href=";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/custom.css"), "html", null, true);
        echo ">

  <!-- main css -->
  <link rel=\"stylesheet\" href=";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/main.css"), "html", null, true);
        echo ">

  <link rel=\"stylesheet\" href=";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/css/color.css"), "html", null, true);
        echo ">

  
  
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


    <!-- header-section start  -->
    <header class=\"header\">
        <div class=\"header__bottom\">
          <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg p-0 align-items-center justify-content-between\">
              <a class=\"site-logo site-title\" href=";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo ">
                <img src=";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/logoIcon/logo.png"), "html", null, true);
        echo " alt=\"logo\">
            </a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"menu-toggle\"></span>
              </button>
            <div class=\"collapse navbar-collapse mt-xl-0 mt-3\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav main-menu m-auto\" id=\"linkItem\">
                  <li><a class=\"\" href=";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo ">Home</a></li>
                                            <li>
                            <a class=\"\" href=";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo ">
                                About Us
                            </a>
                        </li>
                                            <li>
                            <a class=\"\" href=";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo ">
                                Services
                            </a>
                        </li>
                                            <li>
                            <a class=\"\" href=";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo ">
                                FAQ
                            </a>
                        </li>
                                        <li><a class=\"\" href=";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo ">Contact</a></li>
                </ul>
                <div class=\"nav-right\">
                    <select class=\"language-select me-3 langSel\">
                                                    <option value=\"en\"  selected  >English</option>
                                                    <option value=\"bn\" >Bangla</option>
                                                    <option value=\"sp\" >Spanish</option>
                                                    <option value=\"fr\" >French</option>
                                            </select>

                                            <a href=";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo " class=\"btn btn-sm py-2 btn-outline--gradient me-3\">Sign In</a>
                        <a href=";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo " class=\"btn btn-sm py-2 custom--bg text-white\">Sign Up</a>
                    
                </div>
              </div>
            </nav>
          </div>
        </div><!-- header__bottom end -->
      </header>
      <!-- header-section end  -->

    <div class=\"main-wrapper\">

                    <section class=\"inner-hero bg_img overlay--one\" style=\"background-image: url('";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/frontend/breadcumb/60c7569dec4f01623676573.jpg"), "html", null, true);
        echo "');\">

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 text-center\">
                <h2 class=\"page-title text-white\">Privacy Policy</h2>

            </div>
        </div>
    </div>
</section>

        
            <section class=\"pt-100 pb-100\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-none-30\">
                <div><b><span style=\"color:rgb(33,37,41);font-size:1rem;\">What information do we collect?</span><br /></b></div><div><br /></div><div>We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.</div><div><br /></div><div><b>How do we protect your information?</b></div><div><br /></div><div>All provided delicate/credit data is sent through Stripe.</div><div>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won't be put away on our workers.</div><div><br /></div><div><b>Do we disclose any information to outside parties?</b></div><div><br /></div><div>We don't sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others' rights, property, or wellbeing.</div><div><br /></div><div><b>Children's Online Privacy Protection Act Compliance</b></div><div><br /></div><div>We are consistent with the prerequisites of COPPA (Children's Online Privacy Protection Act), we don't gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.</div><div><br /></div><div><b>Changes to our Privacy Policy</b></div><div><br /></div><div>If we decide to change our privacy policy, we will post those changes on this page.</div><div>How long we retain your information?</div><div><br /></div><div>At the point when you register for our site, we cycle and keep your information we have about you however long you don't erase the record or withdraw yourself (subject to laws and guidelines).</div><div><br /></div><div><b>What we don’t do with your data</b></div><div><br /></div><div>We don't and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.</div><div><br /></div>            </div><!-- row end -->
        </div>
    </section>

    </div>

    


    <!-- Modal -->
    <div class=\"cookie-modal\" id=\"cookieModal\">
        <div class=\"container\">
            <div class=\"cookie-header mb-1\">
                <h5 class=\"text--base\">Cookie Policy</h5>
                <button class=\"close-btn\"><i class=\"fas fa-times\"></i></button>
            </div>
            <p class=\"mb-2 d-inline\">
                We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.            </p>

            <a class=\"btn btn-sm btn--success ms-3\" href=\"https://accounts.Eliteforte.net/page/page/84-privacy-policy\" target=\"_blank\">Learn More</a>
            <button type=\"button\" class=\"btn btn-sm btn--base cookie-accept\">Accept</button>
        </div>
    </div>


    <script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
<script type=\"text/javascript\">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<!-- footer section start -->
<footer class=\"footer position-relative z-index-2\">
    <div class=\"footer-bottom-wave\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,256L48,266.7C96,277,192,299,288,282.7C384,267,480,213,576,165.3C672,117,768,75,864,96C960,117,1056,203,1152,213.3C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path></svg>
    </div>

    <div class=\"container\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-4 col-sm-6 order-lg-1 order-1\">
          <div class=\"footer-widget\">
            <h3 class=\"footer-widget__title\">About Us</h3>
            <p>Business banking provides tailor made services to cater for the needs of the diverse segments of the economy alongside, customers who constitute the value chain of the bank’s commercial, corporate &amp;amp; investment banking divisions’.</p>
            <ul class=\"social-media-links d-flex align-items-center mt-3\">
                              <li>
                  <a href=\"https://bd.linkedin.com/\" target=\"_blank\">
                    <i class=\"fab fa-linkedin-in\"></i>                  </a>
                </li>
                              <li>
                  <a href=\"https://www.instagram.com/\" target=\"_blank\">
                    <i class=\"fab fa-instagram\"></i>                  </a>
                </li>
                              <li>
                  <a href=\"https://twitter.com/\" target=\"_blank\">
                    <i class=\"fab fa-twitter\"></i>                  </a>
                </li>
                              <li>
                  <a href=\"https://www.facebook.com/\" target=\"_blank\">
                    <i class=\"fab fa-facebook-f\"></i>                  </a>
                </li>
                          </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-sm-6 order-lg-2 order-3\">
          <div class=\"footer-widget\">
            <h3 class=\"footer-widget__title\">Quick Links</h3>
            <ul class=\"short-link-list\">
                <li><a href=";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo ">Login</a></li>
                <li><a href=";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo ">Register</a></li>
                <li><a href=";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo ">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-sm-6 order-lg-3 order-4\">
          <div class=\"footer-widget\">
            <h3 class=\"footer-widget__title\">Page</h3>
            <ul class=\"short-link-list\">
                                    <li>
                        <a href=\"111-company-policy.html\">
                        Company Policy</a>
                    </li>
                                    <li>
                        <a href=\"85-terms-of-services.html\">
                        Terms of Services</a>
                    </li>
                                    <li>
                        <a href=";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo ">
                        Privacy Policy</a>
                    </li>
                            </ul>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 order-lg-4 order-2\">
          <div class=\"footer-widget\">
            <h3 class=\"footer-widget__title\">Contact Us</h3>
            <ul class=\"footer-info-list\">
                                <li>
                    <i class=\"fas fa-map-marked\"></i>                    <p>Arkanas, US</p>
                </li>
                                <li>
                    <i class=\"fas fa-envelope\"></i>                    <p>support@Eliteforte.net</p>
                </li>
                                <li>
                    <i class=\"las la-headset\"></i>                    <p>+1 (458) 265‑9225</p>
                </li>
                            </ul>
          </div>
        </div>
      </div>
      <div class=\"footer__bottom\">
        <div class=\"row gy-4 align-items-center\">
          <div class=\"col-lg-3 col-sm-6 order-lg-1 order-1 text-sm-start text-center\">
            <a href=";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " class=\"footer-logo\"><img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/logoIcon/logo.png"), "html", null, true);
        echo " alt=\"logo\"></a>
          </div>

          <div class=\"col-lg-9 col-sm-6 order-lg-3 order-2 text-sm-end text-center\">
            <p>Copyright © 2022. Elite Forte LLC. All Right Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->

    <!-- jQuery library -->
  <script src=";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/jquery-3.5.1.min.js"), "html", null, true);
        echo "></script>

  <script src=";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lightcase.js"), "html", null, true);
        echo "></script>

  <!-- bootstrap js -->
  <script src=";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
  <!-- slick slider js -->
  <script src=";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/slick.min.js"), "html", null, true);
        echo "></script>
  <!-- scroll animation -->
  <script src=";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/wow.min.js"), "html", null, true);
        echo "></script>
  <!-- main js -->
  <script src=";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/app.js"), "html", null, true);
        echo "></script>

  
  
  
    <script>
        \"use strict\";
        (function (\$) {


            

           

            let myModal = document.getElementById('cookieModal');
                            myModal.classList.add('show');
            
            \$('.cookie-modal .close-btn').on('click', function(){
                \$('#cookieModal').removeClass('show');
            });

            \$('.cookie-accept').on('click', function(){
                 notify('success', response.success);
                            \$('#cookieModal').removeClass('show');
            });

        })(jQuery);
    </script>

  <link rel=\"stylesheet\" href=";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/css/iziToast.min.css"), "html", null, true);
        echo ">
<script src=";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/js/iziToast.min.js"), "html", null, true);
        echo "></script>

<script>
    \"use strict\";
        function notify(status, message) {
            if(typeof message == 'string'){
                iziToast[status]({
                    message: message,
                    position: \"topRight\"
                });
            }else{
                \$.each(message, function(i, val) {
                    iziToast[status]({
                        message: val,
                        position: \"topRight\"
                    });
                });
            }

        }
</script>


  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/privacy.html.twig";
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
        return array (  445 => 303,  441 => 302,  409 => 273,  404 => 271,  399 => 269,  394 => 267,  388 => 264,  383 => 262,  365 => 249,  336 => 223,  316 => 206,  312 => 205,  308 => 204,  221 => 120,  206 => 108,  202 => 107,  189 => 97,  182 => 93,  174 => 88,  166 => 83,  161 => 81,  151 => 74,  147 => 73,  121 => 50,  116 => 48,  110 => 45,  105 => 43,  100 => 41,  95 => 39,  90 => 37,  85 => 35,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Elite Forte - Privacy Policy</title>
  <meta name=\"title\" Content=\"Elite Forte - Privacy Policy\">
    <meta name=\"description\" content=\"jj\">
    <meta name=\"keywords\" content=\"laon\">
    <link rel=\"shortcut icon\" href={{ asset(\"assets/auth/assets/images/logoIcon/favicon.png\")}} type=\"image/x-icon\">

    
    <link rel=\"apple-touch-icon\" href={{ asset(\"assets/auth/assets/images/logoIcon/logo.png\")}}>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Elite Forte - Privacy Policy\">
    
    <meta itemprop=\"name\" content=\"Elite Forte - Privacy Policy\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\">
    
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"jj\">
    <meta property=\"og:description\" content=\"jj\">
    <meta property=\"og:image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\"/>
    <meta property=\"og:image:type\" content=\"image/jpg\" />
        <meta property=\"og:image:width\" content=\"600\" />
    <meta property=\"og:image:height\" content=\"315\" />
    <meta property=\"og:url\" content=\"https://accounts.Eliteforte.net/privacy\">
    
    <meta name=\"twitter:card\" content=\"summary_large_image\">

  <!-- bootstrap 5  -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/lib/bootstrap.min.css\")}}>
  <!-- fontawesome 5  -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/all.min.css\")}}>
  <!-- lineawesome font -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/line-awesome.min.css\")}}>
  <!-- slick slider css -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/lib/slick.css\")}}>

  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/lightcase.css\")}}>

  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/custom.css\")}}>

  <!-- main css -->
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/main.css\")}}>

  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/templates/basic/css/color.css\")}}>

  
  
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


    <!-- header-section start  -->
    <header class=\"header\">
        <div class=\"header__bottom\">
          <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg p-0 align-items-center justify-content-between\">
              <a class=\"site-logo site-title\" href={{ path(\"home\") }}>
                <img src={{ asset(\"assets/auth/assets/images/logoIcon/logo.png\")}} alt=\"logo\">
            </a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"menu-toggle\"></span>
              </button>
            <div class=\"collapse navbar-collapse mt-xl-0 mt-3\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav main-menu m-auto\" id=\"linkItem\">
                  <li><a class=\"\" href={{ path(\"home\") }}>Home</a></li>
                                            <li>
                            <a class=\"\" href={{ path(\"about\") }}>
                                About Us
                            </a>
                        </li>
                                            <li>
                            <a class=\"\" href={{ path(\"services\") }}>
                                Services
                            </a>
                        </li>
                                            <li>
                            <a class=\"\" href={{ path(\"faq\") }}>
                                FAQ
                            </a>
                        </li>
                                        <li><a class=\"\" href={{ path(\"contact\") }}>Contact</a></li>
                </ul>
                <div class=\"nav-right\">
                    <select class=\"language-select me-3 langSel\">
                                                    <option value=\"en\"  selected  >English</option>
                                                    <option value=\"bn\" >Bangla</option>
                                                    <option value=\"sp\" >Spanish</option>
                                                    <option value=\"fr\" >French</option>
                                            </select>

                                            <a href={{ path(\"login\") }} class=\"btn btn-sm py-2 btn-outline--gradient me-3\">Sign In</a>
                        <a href={{ path(\"register\") }} class=\"btn btn-sm py-2 custom--bg text-white\">Sign Up</a>
                    
                </div>
              </div>
            </nav>
          </div>
        </div><!-- header__bottom end -->
      </header>
      <!-- header-section end  -->

    <div class=\"main-wrapper\">

                    <section class=\"inner-hero bg_img overlay--one\" style=\"background-image: url('{{ asset(\"assets/auth/assets/images/frontend/breadcumb/60c7569dec4f01623676573.jpg\")}}');\">

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 text-center\">
                <h2 class=\"page-title text-white\">Privacy Policy</h2>

            </div>
        </div>
    </div>
</section>

        
            <section class=\"pt-100 pb-100\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-none-30\">
                <div><b><span style=\"color:rgb(33,37,41);font-size:1rem;\">What information do we collect?</span><br /></b></div><div><br /></div><div>We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.</div><div><br /></div><div><b>How do we protect your information?</b></div><div><br /></div><div>All provided delicate/credit data is sent through Stripe.</div><div>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won't be put away on our workers.</div><div><br /></div><div><b>Do we disclose any information to outside parties?</b></div><div><br /></div><div>We don't sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others' rights, property, or wellbeing.</div><div><br /></div><div><b>Children's Online Privacy Protection Act Compliance</b></div><div><br /></div><div>We are consistent with the prerequisites of COPPA (Children's Online Privacy Protection Act), we don't gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.</div><div><br /></div><div><b>Changes to our Privacy Policy</b></div><div><br /></div><div>If we decide to change our privacy policy, we will post those changes on this page.</div><div>How long we retain your information?</div><div><br /></div><div>At the point when you register for our site, we cycle and keep your information we have about you however long you don't erase the record or withdraw yourself (subject to laws and guidelines).</div><div><br /></div><div><b>What we don’t do with your data</b></div><div><br /></div><div>We don't and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.</div><div><br /></div>            </div><!-- row end -->
        </div>
    </section>

    </div>

    


    <!-- Modal -->
    <div class=\"cookie-modal\" id=\"cookieModal\">
        <div class=\"container\">
            <div class=\"cookie-header mb-1\">
                <h5 class=\"text--base\">Cookie Policy</h5>
                <button class=\"close-btn\"><i class=\"fas fa-times\"></i></button>
            </div>
            <p class=\"mb-2 d-inline\">
                We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.            </p>

            <a class=\"btn btn-sm btn--success ms-3\" href=\"https://accounts.Eliteforte.net/page/page/84-privacy-policy\" target=\"_blank\">Learn More</a>
            <button type=\"button\" class=\"btn btn-sm btn--base cookie-accept\">Accept</button>
        </div>
    </div>


    <script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
<script type=\"text/javascript\">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<!-- footer section start -->
<footer class=\"footer position-relative z-index-2\">
    <div class=\"footer-bottom-wave\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,256L48,266.7C96,277,192,299,288,282.7C384,267,480,213,576,165.3C672,117,768,75,864,96C960,117,1056,203,1152,213.3C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path></svg>
    </div>

    <div class=\"container\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-4 col-sm-6 order-lg-1 order-1\">
          <div class=\"footer-widget\">
            <h3 class=\"footer-widget__title\">About Us</h3>
            <p>Business banking provides tailor made services to cater for the needs of the diverse segments of the economy alongside, customers who constitute the value chain of the bank’s commercial, corporate &amp;amp; investment banking divisions’.</p>
            <ul class=\"social-media-links d-flex align-items-center mt-3\">
                              <li>
                  <a href=\"https://bd.linkedin.com/\" target=\"_blank\">
                    <i class=\"fab fa-linkedin-in\"></i>                  </a>
                </li>
                              <li>
                  <a href=\"https://www.instagram.com/\" target=\"_blank\">
                    <i class=\"fab fa-instagram\"></i>                  </a>
                </li>
                              <li>
                  <a href=\"https://twitter.com/\" target=\"_blank\">
                    <i class=\"fab fa-twitter\"></i>                  </a>
                </li>
                              <li>
                  <a href=\"https://www.facebook.com/\" target=\"_blank\">
                    <i class=\"fab fa-facebook-f\"></i>                  </a>
                </li>
                          </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-sm-6 order-lg-2 order-3\">
          <div class=\"footer-widget\">
            <h3 class=\"footer-widget__title\">Quick Links</h3>
            <ul class=\"short-link-list\">
                <li><a href={{ path(\"login\")}}>Login</a></li>
                <li><a href={{ path(\"register\")}}>Register</a></li>
                <li><a href={{ path(\"contact\")}}>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-sm-6 order-lg-3 order-4\">
          <div class=\"footer-widget\">
            <h3 class=\"footer-widget__title\">Page</h3>
            <ul class=\"short-link-list\">
                                    <li>
                        <a href=\"111-company-policy.html\">
                        Company Policy</a>
                    </li>
                                    <li>
                        <a href=\"85-terms-of-services.html\">
                        Terms of Services</a>
                    </li>
                                    <li>
                        <a href={{ path(\"privacy\") }}>
                        Privacy Policy</a>
                    </li>
                            </ul>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 order-lg-4 order-2\">
          <div class=\"footer-widget\">
            <h3 class=\"footer-widget__title\">Contact Us</h3>
            <ul class=\"footer-info-list\">
                                <li>
                    <i class=\"fas fa-map-marked\"></i>                    <p>Arkanas, US</p>
                </li>
                                <li>
                    <i class=\"fas fa-envelope\"></i>                    <p>support@Eliteforte.net</p>
                </li>
                                <li>
                    <i class=\"las la-headset\"></i>                    <p>+1 (458) 265‑9225</p>
                </li>
                            </ul>
          </div>
        </div>
      </div>
      <div class=\"footer__bottom\">
        <div class=\"row gy-4 align-items-center\">
          <div class=\"col-lg-3 col-sm-6 order-lg-1 order-1 text-sm-start text-center\">
            <a href={{ path(\"home\") }} class=\"footer-logo\"><img src={{ asset(\"assets/auth/assets/images/logoIcon/logo.png\")}} alt=\"logo\"></a>
          </div>

          <div class=\"col-lg-9 col-sm-6 order-lg-3 order-2 text-sm-end text-center\">
            <p>Copyright © 2022. Elite Forte LLC. All Right Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->

    <!-- jQuery library -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lib/jquery-3.5.1.min.js\")}}></script>

  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lightcase.js\")}}></script>

  <!-- bootstrap js -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lib/bootstrap.bundle.min.js\")}}></script>
  <!-- slick slider js -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lib/slick.min.js\")}}></script>
  <!-- scroll animation -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/lib/wow.min.js\")}}></script>
  <!-- main js -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/app.js\")}}></script>

  
  
  
    <script>
        \"use strict\";
        (function (\$) {


            

           

            let myModal = document.getElementById('cookieModal');
                            myModal.classList.add('show');
            
            \$('.cookie-modal .close-btn').on('click', function(){
                \$('#cookieModal').removeClass('show');
            });

            \$('.cookie-accept').on('click', function(){
                 notify('success', response.success);
                            \$('#cookieModal').removeClass('show');
            });

        })(jQuery);
    </script>

  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/global/css/iziToast.min.css\")}}>
<script src={{ asset(\"assets/auth/assets/global/js/iziToast.min.js\")}}></script>

<script>
    \"use strict\";
        function notify(status, message) {
            if(typeof message == 'string'){
                iziToast[status]({
                    message: message,
                    position: \"topRight\"
                });
            }else{
                \$.each(message, function(i, val) {
                    iziToast[status]({
                        message: val,
                        position: \"topRight\"
                    });
                });
            }

        }
</script>


  </body>
</html>
", "home/privacy.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\privacy.html.twig");
    }
}
