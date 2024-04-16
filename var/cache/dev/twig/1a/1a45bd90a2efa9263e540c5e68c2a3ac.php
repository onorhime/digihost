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

/* home/terms.html.twig */
class __TwigTemplate_fa8acc8e8d4d25b7fb9e4788c0247226 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/terms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/terms.html.twig"));

        // line 1
        echo "<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Elite Forte - Terms of Services</title>
  <meta name=\"title\" Content=\"Elite Forte - Terms of Services\">
    <meta name=\"description\" content=\"jj\">
    <meta name=\"keywords\" content=\"laon\">
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/logoIcon/favicon.png"), "html", null, true);
        echo " type=\"image/x-icon\">

    
    <link rel=\"apple-touch-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/logoIcon/logo.png"), "html", null, true);
        echo ">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Elite Forte - Terms of Services\">
    
    <meta itemprop=\"name\" content=\"Elite Forte - Terms of Services\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\">
    
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"jj\">
    <meta property=\"og:description\" content=\"jj\">
    <meta property=\"og:image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\"/>
    <meta property=\"og:image:type\" content=\"image/jpg\" />
        <meta property=\"og:image:width\" content=\"600\" />
    <meta property=\"og:image:height\" content=\"315\" />
    <meta property=\"og:url\" content=\"https://accounts.Eliteforte.net/page/85-terms-of-services\">
    
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
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
                <h2 class=\"page-title text-white\">Terms of Services</h2>

            </div>
        </div>
    </div>
</section>

        
            <section class=\"pt-100 pb-100\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-none-30\">
                <div class=\"mb-5\" style=\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We claim all authority to dismiss, end, or handicap any help with or without cause per administrator discretion. This is a Complete independent facilitating, on the off chance that you misuse our ticket or Livechat or emotionally supportive network by submitting solicitations or protests we will impair your record. The solitary time you should reach us about the seaward facilitating is if there is an issue with the worker. We have not many substance limitations and everything is as per laws and guidelines. Try not to join on the off chance that you intend to do anything contrary to the guidelines, we do check these things and we will know, don't burn through our own and your time by joining on the off chance that you figure you will have the option to sneak by us and break the terms.</p></div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><ul class=\"font-18\" style=\"padding-left:15px;list-style-type:disc;font-size:18px;\"><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Configuration requests - If you have a fully managed dedicated server with us then we offer custom PHP/MySQL configurations, firewalls for dedicated IPs, DNS, and httpd configurations.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Software requests - Cpanel Extension Installation will be granted as long as it does not interfere with the security, stability, and performance of other users on the server.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Emergency Support - We do not provide emergency support / Phone Support / LiveChat Support. Support may take some hours sometimes.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Webmaster help - We do not offer any support for webmaster related issues and difficulty including coding, &amp; installs, Error solving. if there is an issue where a library or configuration of the server then we can help you if it's possible from our end.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Backups - We keep backups but we are not responsible for data loss, you are fully responsible for all backups.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">We Don't support any child porn or such material.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">No spam-related sites or material, such as email lists, mass mail programs, and scripts, etc.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">No harassing material that may cause people to retaliate against you.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">No phishing pages.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">You may not run any exploitation script from the server. reason can be terminated immediately.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">If Anyone attempting to hack or exploit the server by using your script or hosting, we will terminate your account to keep safe other users.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Malicious Botnets are strictly forbidden.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Spam, mass mailing, or email marketing in any way are strictly forbidden here.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Malicious hacking materials, trojans, viruses, &amp; malicious bots running or for download are forbidden.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Resource and cronjob abuse is forbidden and will result in suspension or termination.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Php/CGI proxies are strictly forbidden.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">CGI-IRC is strictly forbidden.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">No fake or disposal mailers, mass mailing, mail bombers, SMS bombers, etc.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">NO CREDIT OR REFUND will be granted for interruptions of service, due to User Agreement violations.</li></ul></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Terms &amp; Conditions for Users</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">Before getting to this site, you are consenting to be limited by these site Terms and Conditions of Use, every single appropriate law, and guidelines, and concur that you are answerable for consistency with any material neighborhood laws. If you disagree with any of these terms, you are restricted from utilizing or getting to this site.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Support</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">Whenever you have downloaded our item, you may get in touch with us for help through email and we will give a valiant effort to determine your issue. We will attempt to answer using the Email for more modest bug fixes, after which we will refresh the center bundle. Content help is offered to confirmed clients by Tickets as it were. Backing demands made by email and Livechat.</p><p class=\"my-3 font-18 font-weight-bold\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">On the off chance that your help requires extra adjustment of the System, at that point, you have two alternatives:</p><ul class=\"font-18\" style=\"padding-left:15px;list-style-type:disc;font-size:18px;\"><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Hang tight for additional update discharge.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Or on the other hand, enlist a specialist (We offer customization for extra charges).</li></ul></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Ownership</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">You may not guarantee scholarly or selective possession of any of our items, altered or unmodified. All items are property, we created them. Our items are given \"with no guarantees\" without guarantee of any sort, either communicated or suggested. On no occasion will our juridical individual be subject to any harms including, however not restricted to, immediate, roundabout, extraordinary, accidental, or significant harms or different misfortunes emerging out of the utilization of or powerlessness to utilize our items.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Warranty</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We don't offer any guarantee or assurance of these Services in any way. When our Services have been modified we can't ensure they will work with all outsider plugins, modules, or internet browsers. Program similarity ought to be tried against the show formats on the demo worker. If you don't mind guarantee that the programs you use will work with the component, as we can not ensure that our systems will work with all program mixes.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Unauthorized/Illegal Usage</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">You may not utilize our things for any illicit or unapproved reason or may you, in the utilization of the stage, disregard any laws in your locale (counting yet not restricted to copyright laws) just as the laws of your nation and International law. Specifically, it is disallowed to utilize the things on our foundation for pages that advance: brutality, illegal intimidation, hard sexual entertainment, bigotry, obscenity content or warez programming joins.<br /><br />You can't imitate, copy, duplicate, sell, exchange or adventure any of our segment, utilization of the offered on our things, or admittance to the administration without the express composed consent by us or item proprietor.<br /><br />Our Members are liable for all substance posted on the discussion and demo and movement that happens under your record.<br /><br />We hold the chance of hindering your participation account quickly if we will think about a particularly not allowed conduct.<br /><br />If you make a record on our site, you are liable for keeping up the security of your record, and you are completely answerable for all exercises that happen under the record and some other activities taken regarding the record. You should quickly inform us, of any unapproved employments of your record or some other penetrates of security.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Fiverr, Seoclerks Sellers Or Affiliates</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We do NOT ensure full SEO campaign conveyance within 24 hours. We make no assurance for conveyance time by any means. We give our best assessment to orders during the putting in of requests, anyway, these are gauges. We won't be considered liable for loss of assets, negative surveys or you being prohibited for late conveyance. If you are selling on a site that requires time touchy outcomes, utilize Our SEO Services at your own risk.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Payment/Refund Policy</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">No refund or cash back will be made. After a deposit has been finished, it is extremely unlikely to invert it. You should utilize your equilibrium on requests our administrations, Hosting, SEO campaign. You concur that once you complete a deposit, you won't document a debate or a chargeback against us in any way, shape, or form.<br /><br />If you document a debate or chargeback against us after a deposit, we claim all authority to end every single future request, prohibit you from our site. False action, for example, utilizing unapproved or taken charge cards will prompt the end of your record. There are no special cases.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Free Balance / Coupon Policy</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We offer numerous approaches to get FREE Balance, Coupons and Deposit offers yet we generally reserve the privilege to audit it and deduct it from your record offset with any explanation we may it is a sort of misuse. If we choose to deduct a few or all of free Balance from your record balance, and your record balance becomes negative, at that point the record will naturally be suspended. If your record is suspended because of a negative Balance you can request to make a custom payment to settle your equilibrium to actuate your record.</p></div></div>            </div><!-- row end -->
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

            <a class=\"btn btn-sm btn--success ms-3\" href=";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo " target=\"_blank\">Learn More</a>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
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
                        <a href=";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms");
        echo ">
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


            

            \$(\".langSel\").on(\"change\", function() {
                window.location.href = \"https://accounts.Eliteforte.net/change/\"+\$(this).val();
            });

            let myModal = document.getElementById('cookieModal');
                            myModal.classList.add('show');
            
            \$('.cookie-modal .close-btn').on('click', function(){
                \$('#cookieModal').removeClass('show');
            });

            \$('.cookie-accept').on('click', function(){
                \$.get(\"https://accounts.Eliteforte.net/cookie/accept\",
                    function (response) {
                        if(response.success){
                            notify('success', response.success);
                            \$('#cookieModal').removeClass('show');
                        }
                    }
                );
            });

        })(jQuery);
    </script>

  <link rel=\"stylesheet\" href=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/css/iziToast.min.css"), "html", null, true);
        echo ">
<script src=\"";
        // line 311
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
        return "home/terms.html.twig";
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
        return array (  459 => 311,  455 => 310,  415 => 273,  410 => 271,  405 => 269,  400 => 267,  394 => 264,  389 => 262,  371 => 249,  342 => 223,  335 => 219,  319 => 206,  315 => 205,  311 => 204,  259 => 155,  221 => 120,  206 => 108,  202 => 107,  189 => 97,  182 => 93,  174 => 88,  166 => 83,  161 => 81,  151 => 74,  147 => 73,  121 => 50,  116 => 48,  110 => 45,  105 => 43,  100 => 41,  95 => 39,  90 => 37,  85 => 35,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Elite Forte - Terms of Services</title>
  <meta name=\"title\" Content=\"Elite Forte - Terms of Services\">
    <meta name=\"description\" content=\"jj\">
    <meta name=\"keywords\" content=\"laon\">
    <link rel=\"shortcut icon\" href=\"{{ asset(\"assets/auth/assets/images/logoIcon/favicon.png\")}} type=\"image/x-icon\">

    
    <link rel=\"apple-touch-icon\" href=\"{{ asset(\"assets/auth/assets/images/logoIcon/logo.png\")}}>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Elite Forte - Terms of Services\">
    
    <meta itemprop=\"name\" content=\"Elite Forte - Terms of Services\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\">
    
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"jj\">
    <meta property=\"og:description\" content=\"jj\">
    <meta property=\"og:image\" content=\"https://accounts.Eliteforte.net/assets/images/default.png\"/>
    <meta property=\"og:image:type\" content=\"image/jpg\" />
        <meta property=\"og:image:width\" content=\"600\" />
    <meta property=\"og:image:height\" content=\"315\" />
    <meta property=\"og:url\" content=\"https://accounts.Eliteforte.net/page/85-terms-of-services\">
    
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

                                            <a href={{ path(\"home\") }} class=\"btn btn-sm py-2 btn-outline--gradient me-3\">Sign In</a>
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
                <h2 class=\"page-title text-white\">Terms of Services</h2>

            </div>
        </div>
    </div>
</section>

        
            <section class=\"pt-100 pb-100\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-none-30\">
                <div class=\"mb-5\" style=\"margin-bottom:3rem;color:rgb(111,111,111);font-family:Nunito, sans-serif;\"><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We claim all authority to dismiss, end, or handicap any help with or without cause per administrator discretion. This is a Complete independent facilitating, on the off chance that you misuse our ticket or Livechat or emotionally supportive network by submitting solicitations or protests we will impair your record. The solitary time you should reach us about the seaward facilitating is if there is an issue with the worker. We have not many substance limitations and everything is as per laws and guidelines. Try not to join on the off chance that you intend to do anything contrary to the guidelines, we do check these things and we will know, don't burn through our own and your time by joining on the off chance that you figure you will have the option to sneak by us and break the terms.</p></div><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><ul class=\"font-18\" style=\"padding-left:15px;list-style-type:disc;font-size:18px;\"><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Configuration requests - If you have a fully managed dedicated server with us then we offer custom PHP/MySQL configurations, firewalls for dedicated IPs, DNS, and httpd configurations.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Software requests - Cpanel Extension Installation will be granted as long as it does not interfere with the security, stability, and performance of other users on the server.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Emergency Support - We do not provide emergency support / Phone Support / LiveChat Support. Support may take some hours sometimes.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Webmaster help - We do not offer any support for webmaster related issues and difficulty including coding, &amp; installs, Error solving. if there is an issue where a library or configuration of the server then we can help you if it's possible from our end.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Backups - We keep backups but we are not responsible for data loss, you are fully responsible for all backups.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">We Don't support any child porn or such material.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">No spam-related sites or material, such as email lists, mass mail programs, and scripts, etc.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">No harassing material that may cause people to retaliate against you.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">No phishing pages.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">You may not run any exploitation script from the server. reason can be terminated immediately.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">If Anyone attempting to hack or exploit the server by using your script or hosting, we will terminate your account to keep safe other users.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Malicious Botnets are strictly forbidden.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Spam, mass mailing, or email marketing in any way are strictly forbidden here.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Malicious hacking materials, trojans, viruses, &amp; malicious bots running or for download are forbidden.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Resource and cronjob abuse is forbidden and will result in suspension or termination.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Php/CGI proxies are strictly forbidden.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">CGI-IRC is strictly forbidden.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">No fake or disposal mailers, mass mailing, mail bombers, SMS bombers, etc.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">NO CREDIT OR REFUND will be granted for interruptions of service, due to User Agreement violations.</li></ul></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Terms &amp; Conditions for Users</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">Before getting to this site, you are consenting to be limited by these site Terms and Conditions of Use, every single appropriate law, and guidelines, and concur that you are answerable for consistency with any material neighborhood laws. If you disagree with any of these terms, you are restricted from utilizing or getting to this site.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Support</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">Whenever you have downloaded our item, you may get in touch with us for help through email and we will give a valiant effort to determine your issue. We will attempt to answer using the Email for more modest bug fixes, after which we will refresh the center bundle. Content help is offered to confirmed clients by Tickets as it were. Backing demands made by email and Livechat.</p><p class=\"my-3 font-18 font-weight-bold\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">On the off chance that your help requires extra adjustment of the System, at that point, you have two alternatives:</p><ul class=\"font-18\" style=\"padding-left:15px;list-style-type:disc;font-size:18px;\"><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Hang tight for additional update discharge.</li><li style=\"margin-top:0px;margin-right:0px;margin-left:0px;\">Or on the other hand, enlist a specialist (We offer customization for extra charges).</li></ul></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Ownership</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">You may not guarantee scholarly or selective possession of any of our items, altered or unmodified. All items are property, we created them. Our items are given \"with no guarantees\" without guarantee of any sort, either communicated or suggested. On no occasion will our juridical individual be subject to any harms including, however not restricted to, immediate, roundabout, extraordinary, accidental, or significant harms or different misfortunes emerging out of the utilization of or powerlessness to utilize our items.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Warranty</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We don't offer any guarantee or assurance of these Services in any way. When our Services have been modified we can't ensure they will work with all outsider plugins, modules, or internet browsers. Program similarity ought to be tried against the show formats on the demo worker. If you don't mind guarantee that the programs you use will work with the component, as we can not ensure that our systems will work with all program mixes.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Unauthorized/Illegal Usage</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">You may not utilize our things for any illicit or unapproved reason or may you, in the utilization of the stage, disregard any laws in your locale (counting yet not restricted to copyright laws) just as the laws of your nation and International law. Specifically, it is disallowed to utilize the things on our foundation for pages that advance: brutality, illegal intimidation, hard sexual entertainment, bigotry, obscenity content or warez programming joins.<br /><br />You can't imitate, copy, duplicate, sell, exchange or adventure any of our segment, utilization of the offered on our things, or admittance to the administration without the express composed consent by us or item proprietor.<br /><br />Our Members are liable for all substance posted on the discussion and demo and movement that happens under your record.<br /><br />We hold the chance of hindering your participation account quickly if we will think about a particularly not allowed conduct.<br /><br />If you make a record on our site, you are liable for keeping up the security of your record, and you are completely answerable for all exercises that happen under the record and some other activities taken regarding the record. You should quickly inform us, of any unapproved employments of your record or some other penetrates of security.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Fiverr, Seoclerks Sellers Or Affiliates</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We do NOT ensure full SEO campaign conveyance within 24 hours. We make no assurance for conveyance time by any means. We give our best assessment to orders during the putting in of requests, anyway, these are gauges. We won't be considered liable for loss of assets, negative surveys or you being prohibited for late conveyance. If you are selling on a site that requires time touchy outcomes, utilize Our SEO Services at your own risk.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Payment/Refund Policy</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">No refund or cash back will be made. After a deposit has been finished, it is extremely unlikely to invert it. You should utilize your equilibrium on requests our administrations, Hosting, SEO campaign. You concur that once you complete a deposit, you won't document a debate or a chargeback against us in any way, shape, or form.<br /><br />If you document a debate or chargeback against us after a deposit, we claim all authority to end every single future request, prohibit you from our site. False action, for example, utilizing unapproved or taken charge cards will prompt the end of your record. There are no special cases.</p></div><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;font-family:Exo, sans-serif;color:rgb(54,54,54);\">Free Balance / Coupon Policy</h3><h3 class=\"mb-3\" style=\"font-weight:600;line-height:1.3;font-size:24px;color:rgb(54,54,54);font-family:Exo, sans-serif;\"></h3><div class=\"mb-5\" style=\"color:rgb(111,111,111);font-family:Nunito, sans-serif;font-size:16px;font-weight:400;margin-bottom:3rem;\"><p class=\"font-18\" style=\"margin-right:0px;margin-left:0px;font-size:18px;\">We offer numerous approaches to get FREE Balance, Coupons and Deposit offers yet we generally reserve the privilege to audit it and deduct it from your record offset with any explanation we may it is a sort of misuse. If we choose to deduct a few or all of free Balance from your record balance, and your record balance becomes negative, at that point the record will naturally be suspended. If your record is suspended because of a negative Balance you can request to make a custom payment to settle your equilibrium to actuate your record.</p></div></div>            </div><!-- row end -->
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

            <a class=\"btn btn-sm btn--success ms-3\" href={{ path(\"privacy\") }} target=\"_blank\">Learn More</a>
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
                <li><a href={{ path(\"home\") }}>Login</a></li>
                <li><a href={{ path(\"register\") }}>Register</a></li>
                <li><a href={{ path(\"contact\") }}>Contact</a></li>
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
                        <a href={{ path(\"terms\") }}>
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


            

            \$(\".langSel\").on(\"change\", function() {
                window.location.href = \"https://accounts.Eliteforte.net/change/\"+\$(this).val();
            });

            let myModal = document.getElementById('cookieModal');
                            myModal.classList.add('show');
            
            \$('.cookie-modal .close-btn').on('click', function(){
                \$('#cookieModal').removeClass('show');
            });

            \$('.cookie-accept').on('click', function(){
                \$.get(\"https://accounts.Eliteforte.net/cookie/accept\",
                    function (response) {
                        if(response.success){
                            notify('success', response.success);
                            \$('#cookieModal').removeClass('show');
                        }
                    }
                );
            });

        })(jQuery);
    </script>

  <link rel=\"stylesheet\" href=\"{{ asset(\"assets/auth/assets/global/css/iziToast.min.css\")}}>
<script src=\"{{ asset(\"assets/auth/assets/global/js/iziToast.min.js\")}}></script>

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
", "home/terms.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\terms.html.twig");
    }
}
