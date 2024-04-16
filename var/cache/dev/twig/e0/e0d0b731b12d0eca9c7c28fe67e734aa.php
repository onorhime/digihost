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

/* home/register.html.twig */
class __TwigTemplate_3dd4fdc359b3d24da7291ef634bdb5c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/register.html.twig"));

        // line 1
        echo "<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Choice Horizon - Sign Up</title>
  <meta name=\"title\" Content=\"Choice Horizon - Sign Up\">
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
    <meta name=\"apple-mobile-web-app-title\" content=\"Choice Horizon - Sign Up\">
    
    <meta itemprop=\"name\" content=\"Choice Horizon - Sign Up\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"https://accounts.choicehorizone.com/assets/images/default.png\">
    
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"jj\">
    <meta property=\"og:description\" content=\"jj\">
    <meta property=\"og:image\" content=\"https://accounts.choicehorizone.com/assets/images/default.png\"/>
    <meta property=\"og:image:type\" content=\"image/jpg\" />
        <meta property=\"og:image:width\" content=\"600\" />
    <meta property=\"og:image:height\" content=\"315\" />
    <meta property=\"og:url\" content=\"\">
    
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
<style>
    .country-code .input-group-prepend .input-group-text{
        background: #fff !important;
    }
    .country-code select{
        border: none;
    }
    .country-code select:focus{
        border: none;
        outline: none;
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
        

  <section class=\"account-section registration-section bg_img\" style=\"background-image: url(";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/frontend/breadcumb/60c7569dec4f01623676573.jpg"), "html", null, true);
        echo ");\">
    <div class=\"account-section-left\">
        <div class=\"account-section-left-inner\">
            <h4 class=\"title text-white mb-2\">Create an Account with Choice Horizon</h4>
            <p class=\"text-white\">Please provide your valid information to register!</p>

            <p class=\"mt-xl-5 mt-3 text-white\">Have an account? <a href=";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo " class=\"text--base\">Login here</a></p>
        </div>
    </div>
    <div class=\"account-section-right\">
        <div class=\"top text-center\">
            <a href=";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " class=\"account-logo\">
                <img src=";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/images/logoIcon/logo.png"), "html", null, true);
        echo " alt=\"logo\">
            </a>
        </div>
        <div class=\"middle\">
            <form class=\"account-form\" id=\"regform\">
                <div class=\"row\">
                    <input type=\"hidden\" name=\"_token\" value=\"KtKnOgIEWlS0wAarFmH7QxckpKRzwyKSAjJjoAuZ\">
                    
                    <div class=\"col-lg-6 form-group\">
                        <label for=\"firstname\">First Name *</label>
                        <input id=\"firstname\" placeholder=\"First Name\" type=\"text\" class=\"form--control\" name=\"firstname\" value=\"\" required>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"lastname\">Last Name *</label>
                        <input id=\"lastname\" placeholder=\"Last Name\" type=\"text\" class=\"form--control\" name=\"lastname\" value=\"\" required>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"username\">Username *</label>
                        <input id=\"username\" id=\"username\" type=\"text\" class=\"form--control checkUser\" name=\"username\" value=\"\" placeholder=\"Enter username\" required>
                        <small class=\"text-danger usernameExist\"></small>
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        <label for=\"email\">E-Mail Address *</label>
                        <input id=\"email\" type=\"email\" class=\"form--control checkUser\" name=\"email\" value=\"\" placeholder=\"Enter email address\" required>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"lastname\">Country *</label>
                        <select name=\"country\" id=\"country\" class=\"form--control\">
                                                            <option data-mobile_code=\"93\" value=\"Afghanistan\" data-code=\"AF\">Afghanistan</option>
                                                            <option data-mobile_code=\"358\" value=\"Aland Islands\" data-code=\"AX\">Aland Islands</option>
                                                            <option data-mobile_code=\"355\" value=\"Albania\" data-code=\"AL\">Albania</option>
                                                            <option data-mobile_code=\"213\" value=\"Algeria\" data-code=\"DZ\">Algeria</option>
                                                            <option data-mobile_code=\"1684\" value=\"AmericanSamoa\" data-code=\"AS\">AmericanSamoa</option>
                                                            <option data-mobile_code=\"376\" value=\"Andorra\" data-code=\"AD\">Andorra</option>
                                                            <option data-mobile_code=\"244\" value=\"Angola\" data-code=\"AO\">Angola</option>
                                                            <option data-mobile_code=\"1264\" value=\"Anguilla\" data-code=\"AI\">Anguilla</option>
                                                            <option data-mobile_code=\"672\" value=\"Antarctica\" data-code=\"AQ\">Antarctica</option>
                                                            <option data-mobile_code=\"1268\" value=\"Antigua and Barbuda\" data-code=\"AG\">Antigua and Barbuda</option>
                                                            <option data-mobile_code=\"54\" value=\"Argentina\" data-code=\"AR\">Argentina</option>
                                                            <option data-mobile_code=\"374\" value=\"Armenia\" data-code=\"AM\">Armenia</option>
                                                            <option data-mobile_code=\"297\" value=\"Aruba\" data-code=\"AW\">Aruba</option>
                                                            <option data-mobile_code=\"61\" value=\"Australia\" data-code=\"AU\">Australia</option>
                                                            <option data-mobile_code=\"43\" value=\"Austria\" data-code=\"AT\">Austria</option>
                                                            <option data-mobile_code=\"994\" value=\"Azerbaijan\" data-code=\"AZ\">Azerbaijan</option>
                                                            <option data-mobile_code=\"1242\" value=\"Bahamas\" data-code=\"BS\">Bahamas</option>
                                                            <option data-mobile_code=\"973\" value=\"Bahrain\" data-code=\"BH\">Bahrain</option>
                                                            <option data-mobile_code=\"880\" value=\"Bangladesh\" data-code=\"BD\">Bangladesh</option>
                                                            <option data-mobile_code=\"1246\" value=\"Barbados\" data-code=\"BB\">Barbados</option>
                                                            <option data-mobile_code=\"375\" value=\"Belarus\" data-code=\"BY\">Belarus</option>
                                                            <option data-mobile_code=\"32\" value=\"Belgium\" data-code=\"BE\">Belgium</option>
                                                            <option data-mobile_code=\"501\" value=\"Belize\" data-code=\"BZ\">Belize</option>
                                                            <option data-mobile_code=\"229\" value=\"Benin\" data-code=\"BJ\">Benin</option>
                                                            <option data-mobile_code=\"1441\" value=\"Bermuda\" data-code=\"BM\">Bermuda</option>
                                                            <option data-mobile_code=\"975\" value=\"Bhutan\" data-code=\"BT\">Bhutan</option>
                                                            <option data-mobile_code=\"591\" value=\"Plurinational State of Bolivia\" data-code=\"BO\">Plurinational State of Bolivia</option>
                                                            <option data-mobile_code=\"387\" value=\"Bosnia and Herzegovina\" data-code=\"BA\">Bosnia and Herzegovina</option>
                                                            <option data-mobile_code=\"267\" value=\"Botswana\" data-code=\"BW\">Botswana</option>
                                                            <option data-mobile_code=\"55\" value=\"Brazil\" data-code=\"BR\">Brazil</option>
                                                            <option data-mobile_code=\"246\" value=\"British Indian Ocean Territory\" data-code=\"IO\">British Indian Ocean Territory</option>
                                                            <option data-mobile_code=\"673\" value=\"Brunei Darussalam\" data-code=\"BN\">Brunei Darussalam</option>
                                                            <option data-mobile_code=\"359\" value=\"Bulgaria\" data-code=\"BG\">Bulgaria</option>
                                                            <option data-mobile_code=\"226\" value=\"Burkina Faso\" data-code=\"BF\">Burkina Faso</option>
                                                            <option data-mobile_code=\"257\" value=\"Burundi\" data-code=\"BI\">Burundi</option>
                                                            <option data-mobile_code=\"855\" value=\"Cambodia\" data-code=\"KH\">Cambodia</option>
                                                            <option data-mobile_code=\"237\" value=\"Cameroon\" data-code=\"CM\">Cameroon</option>
                                                            <option data-mobile_code=\"1\" value=\"Canada\" data-code=\"CA\">Canada</option>
                                                            <option data-mobile_code=\"238\" value=\"Cape Verde\" data-code=\"CV\">Cape Verde</option>
                                                            <option data-mobile_code=\" 345\" value=\"Cayman Islands\" data-code=\"KY\">Cayman Islands</option>
                                                            <option data-mobile_code=\"236\" value=\"Central African Republic\" data-code=\"CF\">Central African Republic</option>
                                                            <option data-mobile_code=\"235\" value=\"Chad\" data-code=\"TD\">Chad</option>
                                                            <option data-mobile_code=\"56\" value=\"Chile\" data-code=\"CL\">Chile</option>
                                                            <option data-mobile_code=\"86\" value=\"China\" data-code=\"CN\">China</option>
                                                            <option data-mobile_code=\"61\" value=\"Christmas Island\" data-code=\"CX\">Christmas Island</option>
                                                            <option data-mobile_code=\"61\" value=\"Cocos (Keeling) Islands\" data-code=\"CC\">Cocos (Keeling) Islands</option>
                                                            <option data-mobile_code=\"57\" value=\"Colombia\" data-code=\"CO\">Colombia</option>
                                                            <option data-mobile_code=\"269\" value=\"Comoros\" data-code=\"KM\">Comoros</option>
                                                            <option data-mobile_code=\"242\" value=\"Congo\" data-code=\"CG\">Congo</option>
                                                            <option data-mobile_code=\"243\" value=\"The Democratic Republic of the Congo\" data-code=\"CD\">The Democratic Republic of the Congo</option>
                                                            <option data-mobile_code=\"682\" value=\"Cook Islands\" data-code=\"CK\">Cook Islands</option>
                                                            <option data-mobile_code=\"506\" value=\"Costa Rica\" data-code=\"CR\">Costa Rica</option>
                                                            <option data-mobile_code=\"225\" value=\"Cote d&#039;Ivoire\" data-code=\"CI\">Cote d&#039;Ivoire</option>
                                                            <option data-mobile_code=\"385\" value=\"Croatia\" data-code=\"HR\">Croatia</option>
                                                            <option data-mobile_code=\"53\" value=\"Cuba\" data-code=\"CU\">Cuba</option>
                                                            <option data-mobile_code=\"357\" value=\"Cyprus\" data-code=\"CY\">Cyprus</option>
                                                            <option data-mobile_code=\"420\" value=\"Czech Republic\" data-code=\"CZ\">Czech Republic</option>
                                                            <option data-mobile_code=\"45\" value=\"Denmark\" data-code=\"DK\">Denmark</option>
                                                            <option data-mobile_code=\"253\" value=\"Djibouti\" data-code=\"DJ\">Djibouti</option>
                                                            <option data-mobile_code=\"1767\" value=\"Dominica\" data-code=\"DM\">Dominica</option>
                                                            <option data-mobile_code=\"1849\" value=\"Dominican Republic\" data-code=\"DO\">Dominican Republic</option>
                                                            <option data-mobile_code=\"593\" value=\"Ecuador\" data-code=\"EC\">Ecuador</option>
                                                            <option data-mobile_code=\"20\" value=\"Egypt\" data-code=\"EG\">Egypt</option>
                                                            <option data-mobile_code=\"503\" value=\"El Salvador\" data-code=\"SV\">El Salvador</option>
                                                            <option data-mobile_code=\"240\" value=\"Equatorial Guinea\" data-code=\"GQ\">Equatorial Guinea</option>
                                                            <option data-mobile_code=\"291\" value=\"Eritrea\" data-code=\"ER\">Eritrea</option>
                                                            <option data-mobile_code=\"372\" value=\"Estonia\" data-code=\"EE\">Estonia</option>
                                                            <option data-mobile_code=\"251\" value=\"Ethiopia\" data-code=\"ET\">Ethiopia</option>
                                                            <option data-mobile_code=\"500\" value=\"Falkland Islands (Malvinas)\" data-code=\"FK\">Falkland Islands (Malvinas)</option>
                                                            <option data-mobile_code=\"298\" value=\"Faroe Islands\" data-code=\"FO\">Faroe Islands</option>
                                                            <option data-mobile_code=\"679\" value=\"Fiji\" data-code=\"FJ\">Fiji</option>
                                                            <option data-mobile_code=\"358\" value=\"Finland\" data-code=\"FI\">Finland</option>
                                                            <option data-mobile_code=\"33\" value=\"France\" data-code=\"FR\">France</option>
                                                            <option data-mobile_code=\"594\" value=\"French Guiana\" data-code=\"GF\">French Guiana</option>
                                                            <option data-mobile_code=\"689\" value=\"French Polynesia\" data-code=\"PF\">French Polynesia</option>
                                                            <option data-mobile_code=\"241\" value=\"Gabon\" data-code=\"GA\">Gabon</option>
                                                            <option data-mobile_code=\"220\" value=\"Gambia\" data-code=\"GM\">Gambia</option>
                                                            <option data-mobile_code=\"995\" value=\"Georgia\" data-code=\"GE\">Georgia</option>
                                                            <option data-mobile_code=\"49\" value=\"Germany\" data-code=\"DE\">Germany</option>
                                                            <option data-mobile_code=\"233\" value=\"Ghana\" data-code=\"GH\">Ghana</option>
                                                            <option data-mobile_code=\"350\" value=\"Gibraltar\" data-code=\"GI\">Gibraltar</option>
                                                            <option data-mobile_code=\"30\" value=\"Greece\" data-code=\"GR\">Greece</option>
                                                            <option data-mobile_code=\"299\" value=\"Greenland\" data-code=\"GL\">Greenland</option>
                                                            <option data-mobile_code=\"1473\" value=\"Grenada\" data-code=\"GD\">Grenada</option>
                                                            <option data-mobile_code=\"590\" value=\"Guadeloupe\" data-code=\"GP\">Guadeloupe</option>
                                                            <option data-mobile_code=\"1671\" value=\"Guam\" data-code=\"GU\">Guam</option>
                                                            <option data-mobile_code=\"502\" value=\"Guatemala\" data-code=\"GT\">Guatemala</option>
                                                            <option data-mobile_code=\"44\" value=\"Guernsey\" data-code=\"GG\">Guernsey</option>
                                                            <option data-mobile_code=\"224\" value=\"Guinea\" data-code=\"GN\">Guinea</option>
                                                            <option data-mobile_code=\"245\" value=\"Guinea-Bissau\" data-code=\"GW\">Guinea-Bissau</option>
                                                            <option data-mobile_code=\"595\" value=\"Guyana\" data-code=\"GY\">Guyana</option>
                                                            <option data-mobile_code=\"509\" value=\"Haiti\" data-code=\"HT\">Haiti</option>
                                                            <option data-mobile_code=\"379\" value=\"Holy See (Vatican City State)\" data-code=\"VA\">Holy See (Vatican City State)</option>
                                                            <option data-mobile_code=\"504\" value=\"Honduras\" data-code=\"HN\">Honduras</option>
                                                            <option data-mobile_code=\"852\" value=\"Hong Kong\" data-code=\"HK\">Hong Kong</option>
                                                            <option data-mobile_code=\"36\" value=\"Hungary\" data-code=\"HU\">Hungary</option>
                                                            <option data-mobile_code=\"354\" value=\"Iceland\" data-code=\"IS\">Iceland</option>
                                                            <option data-mobile_code=\"91\" value=\"India\" data-code=\"IN\">India</option>
                                                            <option data-mobile_code=\"62\" value=\"Indonesia\" data-code=\"ID\">Indonesia</option>
                                                            <option data-mobile_code=\"98\" value=\"Iran\" data-code=\"IR\">Iran</option>
                                                            <option data-mobile_code=\"964\" value=\"Iraq\" data-code=\"IQ\">Iraq</option>
                                                            <option data-mobile_code=\"353\" value=\"Ireland\" data-code=\"IE\">Ireland</option>
                                                            <option data-mobile_code=\"44\" value=\"Isle of Man\" data-code=\"IM\">Isle of Man</option>
                                                            <option data-mobile_code=\"972\" value=\"Israel\" data-code=\"IL\">Israel</option>
                                                            <option data-mobile_code=\"39\" value=\"Italy\" data-code=\"IT\">Italy</option>
                                                            <option data-mobile_code=\"1876\" value=\"Jamaica\" data-code=\"JM\">Jamaica</option>
                                                            <option data-mobile_code=\"81\" value=\"Japan\" data-code=\"JP\">Japan</option>
                                                            <option data-mobile_code=\"44\" value=\"Jersey\" data-code=\"JE\">Jersey</option>
                                                            <option data-mobile_code=\"962\" value=\"Jordan\" data-code=\"JO\">Jordan</option>
                                                            <option data-mobile_code=\"77\" value=\"Kazakhstan\" data-code=\"KZ\">Kazakhstan</option>
                                                            <option data-mobile_code=\"254\" value=\"Kenya\" data-code=\"KE\">Kenya</option>
                                                            <option data-mobile_code=\"686\" value=\"Kiribati\" data-code=\"KI\">Kiribati</option>
                                                            <option data-mobile_code=\"850\" value=\"Democratic People&#039;s Republic of Korea\" data-code=\"KP\">Democratic People&#039;s Republic of Korea</option>
                                                            <option data-mobile_code=\"82\" value=\"Republic of South Korea\" data-code=\"KR\">Republic of South Korea</option>
                                                            <option data-mobile_code=\"965\" value=\"Kuwait\" data-code=\"KW\">Kuwait</option>
                                                            <option data-mobile_code=\"996\" value=\"Kyrgyzstan\" data-code=\"KG\">Kyrgyzstan</option>
                                                            <option data-mobile_code=\"856\" value=\"Laos\" data-code=\"LA\">Laos</option>
                                                            <option data-mobile_code=\"371\" value=\"Latvia\" data-code=\"LV\">Latvia</option>
                                                            <option data-mobile_code=\"961\" value=\"Lebanon\" data-code=\"LB\">Lebanon</option>
                                                            <option data-mobile_code=\"266\" value=\"Lesotho\" data-code=\"LS\">Lesotho</option>
                                                            <option data-mobile_code=\"231\" value=\"Liberia\" data-code=\"LR\">Liberia</option>
                                                            <option data-mobile_code=\"218\" value=\"Libyan Arab Jamahiriya\" data-code=\"LY\">Libyan Arab Jamahiriya</option>
                                                            <option data-mobile_code=\"423\" value=\"Liechtenstein\" data-code=\"LI\">Liechtenstein</option>
                                                            <option data-mobile_code=\"370\" value=\"Lithuania\" data-code=\"LT\">Lithuania</option>
                                                            <option data-mobile_code=\"352\" value=\"Luxembourg\" data-code=\"LU\">Luxembourg</option>
                                                            <option data-mobile_code=\"853\" value=\"Macao\" data-code=\"MO\">Macao</option>
                                                            <option data-mobile_code=\"389\" value=\"Macedonia\" data-code=\"MK\">Macedonia</option>
                                                            <option data-mobile_code=\"261\" value=\"Madagascar\" data-code=\"MG\">Madagascar</option>
                                                            <option data-mobile_code=\"265\" value=\"Malawi\" data-code=\"MW\">Malawi</option>
                                                            <option data-mobile_code=\"60\" value=\"Malaysia\" data-code=\"MY\">Malaysia</option>
                                                            <option data-mobile_code=\"960\" value=\"Maldives\" data-code=\"MV\">Maldives</option>
                                                            <option data-mobile_code=\"223\" value=\"Mali\" data-code=\"ML\">Mali</option>
                                                            <option data-mobile_code=\"356\" value=\"Malta\" data-code=\"MT\">Malta</option>
                                                            <option data-mobile_code=\"692\" value=\"Marshall Islands\" data-code=\"MH\">Marshall Islands</option>
                                                            <option data-mobile_code=\"596\" value=\"Martinique\" data-code=\"MQ\">Martinique</option>
                                                            <option data-mobile_code=\"222\" value=\"Mauritania\" data-code=\"MR\">Mauritania</option>
                                                            <option data-mobile_code=\"230\" value=\"Mauritius\" data-code=\"MU\">Mauritius</option>
                                                            <option data-mobile_code=\"262\" value=\"Mayotte\" data-code=\"YT\">Mayotte</option>
                                                            <option data-mobile_code=\"52\" value=\"Mexico\" data-code=\"MX\">Mexico</option>
                                                            <option data-mobile_code=\"691\" value=\"Federated States of Micronesia\" data-code=\"FM\">Federated States of Micronesia</option>
                                                            <option data-mobile_code=\"373\" value=\"Moldova\" data-code=\"MD\">Moldova</option>
                                                            <option data-mobile_code=\"377\" value=\"Monaco\" data-code=\"MC\">Monaco</option>
                                                            <option data-mobile_code=\"976\" value=\"Mongolia\" data-code=\"MN\">Mongolia</option>
                                                            <option data-mobile_code=\"382\" value=\"Montenegro\" data-code=\"ME\">Montenegro</option>
                                                            <option data-mobile_code=\"1664\" value=\"Montserrat\" data-code=\"MS\">Montserrat</option>
                                                            <option data-mobile_code=\"212\" value=\"Morocco\" data-code=\"MA\">Morocco</option>
                                                            <option data-mobile_code=\"258\" value=\"Mozambique\" data-code=\"MZ\">Mozambique</option>
                                                            <option data-mobile_code=\"95\" value=\"Myanmar\" data-code=\"MM\">Myanmar</option>
                                                            <option data-mobile_code=\"264\" value=\"Namibia\" data-code=\"NA\">Namibia</option>
                                                            <option data-mobile_code=\"674\" value=\"Nauru\" data-code=\"NR\">Nauru</option>
                                                            <option data-mobile_code=\"977\" value=\"Nepal\" data-code=\"NP\">Nepal</option>
                                                            <option data-mobile_code=\"31\" value=\"Netherlands\" data-code=\"NL\">Netherlands</option>
                                                            <option data-mobile_code=\"599\" value=\"Netherlands Antilles\" data-code=\"AN\">Netherlands Antilles</option>
                                                            <option data-mobile_code=\"687\" value=\"New Caledonia\" data-code=\"NC\">New Caledonia</option>
                                                            <option data-mobile_code=\"64\" value=\"New Zealand\" data-code=\"NZ\">New Zealand</option>
                                                            <option data-mobile_code=\"505\" value=\"Nicaragua\" data-code=\"NI\">Nicaragua</option>
                                                            <option data-mobile_code=\"227\" value=\"Niger\" data-code=\"NE\">Niger</option>
                                                            <option data-mobile_code=\"234\" value=\"Nigeria\" data-code=\"NG\">Nigeria</option>
                                                            <option data-mobile_code=\"683\" value=\"Niue\" data-code=\"NU\">Niue</option>
                                                            <option data-mobile_code=\"672\" value=\"Norfolk Island\" data-code=\"NF\">Norfolk Island</option>
                                                            <option data-mobile_code=\"1670\" value=\"Northern Mariana Islands\" data-code=\"MP\">Northern Mariana Islands</option>
                                                            <option data-mobile_code=\"47\" value=\"Norway\" data-code=\"NO\">Norway</option>
                                                            <option data-mobile_code=\"968\" value=\"Oman\" data-code=\"OM\">Oman</option>
                                                            <option data-mobile_code=\"92\" value=\"Pakistan\" data-code=\"PK\">Pakistan</option>
                                                            <option data-mobile_code=\"680\" value=\"Palau\" data-code=\"PW\">Palau</option>
                                                            <option data-mobile_code=\"970\" value=\"Palestinian Territory\" data-code=\"PS\">Palestinian Territory</option>
                                                            <option data-mobile_code=\"507\" value=\"Panama\" data-code=\"PA\">Panama</option>
                                                            <option data-mobile_code=\"675\" value=\"Papua New Guinea\" data-code=\"PG\">Papua New Guinea</option>
                                                            <option data-mobile_code=\"595\" value=\"Paraguay\" data-code=\"PY\">Paraguay</option>
                                                            <option data-mobile_code=\"51\" value=\"Peru\" data-code=\"PE\">Peru</option>
                                                            <option data-mobile_code=\"63\" value=\"Philippines\" data-code=\"PH\">Philippines</option>
                                                            <option data-mobile_code=\"872\" value=\"Pitcairn\" data-code=\"PN\">Pitcairn</option>
                                                            <option data-mobile_code=\"48\" value=\"Poland\" data-code=\"PL\">Poland</option>
                                                            <option data-mobile_code=\"351\" value=\"Portugal\" data-code=\"PT\">Portugal</option>
                                                            <option data-mobile_code=\"1939\" value=\"Puerto Rico\" data-code=\"PR\">Puerto Rico</option>
                                                            <option data-mobile_code=\"974\" value=\"Qatar\" data-code=\"QA\">Qatar</option>
                                                            <option data-mobile_code=\"40\" value=\"Romania\" data-code=\"RO\">Romania</option>
                                                            <option data-mobile_code=\"7\" value=\"Russia\" data-code=\"RU\">Russia</option>
                                                            <option data-mobile_code=\"250\" value=\"Rwanda\" data-code=\"RW\">Rwanda</option>
                                                            <option data-mobile_code=\"262\" value=\"Reunion\" data-code=\"RE\">Reunion</option>
                                                            <option data-mobile_code=\"590\" value=\"Saint Barthelemy\" data-code=\"BL\">Saint Barthelemy</option>
                                                            <option data-mobile_code=\"290\" value=\"Saint Helena\" data-code=\"SH\">Saint Helena</option>
                                                            <option data-mobile_code=\"1869\" value=\"Saint Kitts and Nevis\" data-code=\"KN\">Saint Kitts and Nevis</option>
                                                            <option data-mobile_code=\"1758\" value=\"Saint Lucia\" data-code=\"LC\">Saint Lucia</option>
                                                            <option data-mobile_code=\"590\" value=\"Saint Martin\" data-code=\"MF\">Saint Martin</option>
                                                            <option data-mobile_code=\"508\" value=\"Saint Pierre and Miquelon\" data-code=\"PM\">Saint Pierre and Miquelon</option>
                                                            <option data-mobile_code=\"1784\" value=\"Saint Vincent and the Grenadines\" data-code=\"VC\">Saint Vincent and the Grenadines</option>
                                                            <option data-mobile_code=\"685\" value=\"Samoa\" data-code=\"WS\">Samoa</option>
                                                            <option data-mobile_code=\"378\" value=\"San Marino\" data-code=\"SM\">San Marino</option>
                                                            <option data-mobile_code=\"239\" value=\"Sao Tome and Principe\" data-code=\"ST\">Sao Tome and Principe</option>
                                                            <option data-mobile_code=\"966\" value=\"Saudi Arabia\" data-code=\"SA\">Saudi Arabia</option>
                                                            <option data-mobile_code=\"221\" value=\"Senegal\" data-code=\"SN\">Senegal</option>
                                                            <option data-mobile_code=\"381\" value=\"Serbia\" data-code=\"RS\">Serbia</option>
                                                            <option data-mobile_code=\"248\" value=\"Seychelles\" data-code=\"SC\">Seychelles</option>
                                                            <option data-mobile_code=\"232\" value=\"Sierra Leone\" data-code=\"SL\">Sierra Leone</option>
                                                            <option data-mobile_code=\"65\" value=\"Singapore\" data-code=\"SG\">Singapore</option>
                                                            <option data-mobile_code=\"421\" value=\"Slovakia\" data-code=\"SK\">Slovakia</option>
                                                            <option data-mobile_code=\"386\" value=\"Slovenia\" data-code=\"SI\">Slovenia</option>
                                                            <option data-mobile_code=\"677\" value=\"Solomon Islands\" data-code=\"SB\">Solomon Islands</option>
                                                            <option data-mobile_code=\"252\" value=\"Somalia\" data-code=\"SO\">Somalia</option>
                                                            <option data-mobile_code=\"27\" value=\"South Africa\" data-code=\"ZA\">South Africa</option>
                                                            <option data-mobile_code=\"211\" value=\"South Sudan\" data-code=\"SS\">South Sudan</option>
                                                            <option data-mobile_code=\"500\" value=\"South Georgia and the South Sandwich Islands\" data-code=\"GS\">South Georgia and the South Sandwich Islands</option>
                                                            <option data-mobile_code=\"34\" value=\"Spain\" data-code=\"ES\">Spain</option>
                                                            <option data-mobile_code=\"94\" value=\"Sri Lanka\" data-code=\"LK\">Sri Lanka</option>
                                                            <option data-mobile_code=\"249\" value=\"Sudan\" data-code=\"SD\">Sudan</option>
                                                            <option data-mobile_code=\"597\" value=\"Suricountry\" data-code=\"SR\">Suricountry</option>
                                                            <option data-mobile_code=\"47\" value=\"Svalbard and Jan Mayen\" data-code=\"SJ\">Svalbard and Jan Mayen</option>
                                                            <option data-mobile_code=\"268\" value=\"Swaziland\" data-code=\"SZ\">Swaziland</option>
                                                            <option data-mobile_code=\"46\" value=\"Sweden\" data-code=\"SE\">Sweden</option>
                                                            <option data-mobile_code=\"41\" value=\"Switzerland\" data-code=\"CH\">Switzerland</option>
                                                            <option data-mobile_code=\"963\" value=\"Syrian Arab Republic\" data-code=\"SY\">Syrian Arab Republic</option>
                                                            <option data-mobile_code=\"886\" value=\"Taiwan\" data-code=\"TW\">Taiwan</option>
                                                            <option data-mobile_code=\"992\" value=\"Tajikistan\" data-code=\"TJ\">Tajikistan</option>
                                                            <option data-mobile_code=\"255\" value=\"Tanzania\" data-code=\"TZ\">Tanzania</option>
                                                            <option data-mobile_code=\"66\" value=\"Thailand\" data-code=\"TH\">Thailand</option>
                                                            <option data-mobile_code=\"670\" value=\"Timor-Leste\" data-code=\"TL\">Timor-Leste</option>
                                                            <option data-mobile_code=\"228\" value=\"Togo\" data-code=\"TG\">Togo</option>
                                                            <option data-mobile_code=\"690\" value=\"Tokelau\" data-code=\"TK\">Tokelau</option>
                                                            <option data-mobile_code=\"676\" value=\"Tonga\" data-code=\"TO\">Tonga</option>
                                                            <option data-mobile_code=\"1868\" value=\"Trinidad and Tobago\" data-code=\"TT\">Trinidad and Tobago</option>
                                                            <option data-mobile_code=\"216\" value=\"Tunisia\" data-code=\"TN\">Tunisia</option>
                                                            <option data-mobile_code=\"90\" value=\"Turkey\" data-code=\"TR\">Turkey</option>
                                                            <option data-mobile_code=\"993\" value=\"Turkmenistan\" data-code=\"TM\">Turkmenistan</option>
                                                            <option data-mobile_code=\"1649\" value=\"Turks and Caicos Islands\" data-code=\"TC\">Turks and Caicos Islands</option>
                                                            <option data-mobile_code=\"688\" value=\"Tuvalu\" data-code=\"TV\">Tuvalu</option>
                                                            <option data-mobile_code=\"256\" value=\"Uganda\" data-code=\"UG\">Uganda</option>
                                                            <option data-mobile_code=\"380\" value=\"Ukraine\" data-code=\"UA\">Ukraine</option>
                                                            <option data-mobile_code=\"971\" value=\"United Arab Emirates\" data-code=\"AE\">United Arab Emirates</option>
                                                            <option data-mobile_code=\"44\" value=\"United Kingdom\" data-code=\"GB\">United Kingdom</option>
                                                            <option data-mobile_code=\"1\" value=\"United States\" data-code=\"US\">United States</option>
                                                            <option data-mobile_code=\"598\" value=\"Uruguay\" data-code=\"UY\">Uruguay</option>
                                                            <option data-mobile_code=\"998\" value=\"Uzbekistan\" data-code=\"UZ\">Uzbekistan</option>
                                                            <option data-mobile_code=\"678\" value=\"Vanuatu\" data-code=\"VU\">Vanuatu</option>
                                                            <option data-mobile_code=\"58\" value=\"Venezuela\" data-code=\"VE\">Venezuela</option>
                                                            <option data-mobile_code=\"84\" value=\"Vietnam\" data-code=\"VN\">Vietnam</option>
                                                            <option data-mobile_code=\"1284\" value=\"British Virgin Islands\" data-code=\"VG\">British Virgin Islands</option>
                                                            <option data-mobile_code=\"1340\" value=\"U.S. Virgin Islands\" data-code=\"VI\">U.S. Virgin Islands</option>
                                                            <option data-mobile_code=\"681\" value=\"Wallis and Futuna\" data-code=\"WF\">Wallis and Futuna</option>
                                                            <option data-mobile_code=\"967\" value=\"Yemen\" data-code=\"YE\">Yemen</option>
                                                            <option data-mobile_code=\"260\" value=\"Zambia\" data-code=\"ZM\">Zambia</option>
                                                            <option data-mobile_code=\"263\" value=\"Zimbabwe\" data-code=\"ZW\">Zimbabwe</option>
                                                    </select>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"mobile\">Mobile *</label>
                        <div class=\"input-group\">

                            <span class=\"input-group-text bg--base border--base text-white\">
                            <span name=\"moblie\" class=\"border-0 bg-transparent mobile-code\">

                            </span>
                            <input type=\"hidden\" name=\"mobile_code\">
                            <input type=\"hidden\" name=\"country_code\">
                            </span>

                            <input type=\"text\" name=\"mobile\" id=\"mobile\" value=\"\" class=\"form--control checkUser\" placeholder=\"Your Phone Number\" required>
                        </div>
                        <small class=\"text-danger mobileExist\"></small>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"city\">City *</label>
                        <input id=\"city\" id=\"city\" type=\"text\" class=\"form--control checkUser\" name=\"city\" value=\"\" placeholder=\"Enter City\" required>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"zip\">Zip Code *</label>
                        <input id=\"zip\" id=\"zip\" type=\"text\" class=\"form--control checkUser\" name=\"zip\" value=\"\" placeholder=\"Enter Zip\" required>
                    </div>

                    <div class=\"col-lg-12 form-group\">
                        <label for=\"address\">Address *</label>
                        <input id=\"address\" id=\"address\" type=\"text\" class=\"form--control checkUser\" name=\"address\" value=\"\" placeholder=\"Enter Address\" required>
                    </div>

                    <div class=\"col-lg-12 form-group\">
                        <label for=\"address\">Create Pin *</label>
                        <input id=\"pin\"  type=\"number\" maxlength=\"4\" minlength=\"4\" class=\"form--control checkUser\" name=\"pin\" value=\"\" placeholder=\"0000\" required>
                    </div>


                    <div class=\"col-lg-6 form-group hover-input-popup\">
                        <label for=\"password\">Password *</label>
                        <input type=\"password\" id=\"password\" name=\"password\" autocomplete=\"off\" class=\"form--control\" placeholder=\"Enter Password\">
                                            </div>
                    <div class=\"col-lg-6 form-group\">
                        <label for=\"password-confirm\">Confirm Password *</label>
                        <input id=\"password-confirm\" type=\"password\" class=\"form--control\" name=\"password_confirmation\" required autocomplete=\"new-password\" placeholder=\"Confirm password\">
                    </div>

                    
                    ";
        // line 424
        echo "

                                            <div class=\"col-lg-12 form-group\">
                            <div class=\"form-check custom--checkbox\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"agree\" name=\"agree\" required>
                                <label for=\"agree\" class=\"form-check-label\">
                                    I agree with                                                                            <a href=\"page/111-company-policy.html\" target=\"blank\" class=\"text--base\">
                                        Company Policy</a>
                                      ,
                                                                            <a href=\"page/85-terms-of-services.html\" target=\"blank\" class=\"text--base\">
                                        Terms of Services</a>
                                        ,
                                                                            <a href=\"page/84-privacy-policy.html\" target=\"blank\" class=\"text--base\">
                                        Privacy Policy</a>
                                        .
                                                                    </label>
                            </div>
                        </div>
                    
                    <div class=\"col-lg-12\">
                        <button type=\"submit\" id=\"registerbtn\" class=\"btn btn--base text-white w-100\">Sign Up</button>
                    </div>

                </div>
            </form>
        </div>
        <div class=\"bottom\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <ul class=\"d-flex flex-wrap align-items-center account-short-link justify-content-center\">
                                                            <li><a href=\"page/111-company-policy.html\" target=\"blank\">
                        Company Policy</a>
                        ,</li>
                                                            <li><a href=\"page/85-terms-of-services.html\" target=\"blank\">
                        Terms of Services</a>
                        ,</li>
                                                            <li><a href=\"page/84-privacy-policy.html\" target=\"blank\">
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
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/jquery-3.5.1.min.js"), "html", null, true);
        echo "></script>

  <script src=";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lightcase.js"), "html", null, true);
        echo "></script>

  <!-- bootstrap js -->
  <script src=";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
  <script src=";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/slick.min.js"), "html", null, true);
        echo "></script>
  <!-- scroll animation -->
  <script src=";
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/lib/wow.min.js"), "html", null, true);
        echo "></script>

  <script src=";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/js/secure_password.js"), "html", null, true);
        echo "></script>
  <!-- main js -->
  <script src=";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/templates/basic/js/app.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/js/auth.js"), "html", null, true);
        echo "></script>
    
  <link rel=\"stylesheet\" href=";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/auth/assets/global/css/iziToast.min.css"), "html", null, true);
        echo ">
<script src=";
        // line 493
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
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/register.html.twig";
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
        return array (  598 => 493,  594 => 492,  589 => 490,  585 => 489,  580 => 487,  575 => 485,  570 => 483,  566 => 482,  560 => 479,  555 => 477,  500 => 424,  173 => 96,  169 => 95,  161 => 90,  152 => 84,  111 => 46,  106 => 44,  100 => 41,  95 => 39,  90 => 37,  85 => 35,  61 => 14,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Choice Horizon - Sign Up</title>
  <meta name=\"title\" Content=\"Choice Horizon - Sign Up\">
    <meta name=\"description\" content=\"jj\">
    <meta name=\"keywords\" content=\"laon\">
    <link rel=\"shortcut icon\" href={{ asset(\"assets/auth/assets/images/logoIcon/favicon.png\") }} type=\"image/x-icon\">

    
    <link rel=\"apple-touch-icon\" href={{ asset(\"assets/auth/assets/images/logoIcon/logo.png\") }}>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Choice Horizon - Sign Up\">
    
    <meta itemprop=\"name\" content=\"Choice Horizon - Sign Up\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"https://accounts.choicehorizone.com/assets/images/default.png\">
    
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"jj\">
    <meta property=\"og:description\" content=\"jj\">
    <meta property=\"og:image\" content=\"https://accounts.choicehorizone.com/assets/images/default.png\"/>
    <meta property=\"og:image:type\" content=\"image/jpg\" />
        <meta property=\"og:image:width\" content=\"600\" />
    <meta property=\"og:image:height\" content=\"315\" />
    <meta property=\"og:url\" content=\"\">
    
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
<style>
    .country-code .input-group-prepend .input-group-text{
        background: #fff !important;
    }
    .country-code select{
        border: none;
    }
    .country-code select:focus{
        border: none;
        outline: none;
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
        

  <section class=\"account-section registration-section bg_img\" style=\"background-image: url({{ asset('assets/auth/assets/images/frontend/breadcumb/60c7569dec4f01623676573.jpg') }});\">
    <div class=\"account-section-left\">
        <div class=\"account-section-left-inner\">
            <h4 class=\"title text-white mb-2\">Create an Account with Choice Horizon</h4>
            <p class=\"text-white\">Please provide your valid information to register!</p>

            <p class=\"mt-xl-5 mt-3 text-white\">Have an account? <a href={{ path(\"login\") }} class=\"text--base\">Login here</a></p>
        </div>
    </div>
    <div class=\"account-section-right\">
        <div class=\"top text-center\">
            <a href={{ path('home') }} class=\"account-logo\">
                <img src={{ asset(\"assets/auth/assets/images/logoIcon/logo.png\") }} alt=\"logo\">
            </a>
        </div>
        <div class=\"middle\">
            <form class=\"account-form\" id=\"regform\">
                <div class=\"row\">
                    <input type=\"hidden\" name=\"_token\" value=\"KtKnOgIEWlS0wAarFmH7QxckpKRzwyKSAjJjoAuZ\">
                    
                    <div class=\"col-lg-6 form-group\">
                        <label for=\"firstname\">First Name *</label>
                        <input id=\"firstname\" placeholder=\"First Name\" type=\"text\" class=\"form--control\" name=\"firstname\" value=\"\" required>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"lastname\">Last Name *</label>
                        <input id=\"lastname\" placeholder=\"Last Name\" type=\"text\" class=\"form--control\" name=\"lastname\" value=\"\" required>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"username\">Username *</label>
                        <input id=\"username\" id=\"username\" type=\"text\" class=\"form--control checkUser\" name=\"username\" value=\"\" placeholder=\"Enter username\" required>
                        <small class=\"text-danger usernameExist\"></small>
                    </div>
                    <div class=\"col-lg-6 form-group\">
                        <label for=\"email\">E-Mail Address *</label>
                        <input id=\"email\" type=\"email\" class=\"form--control checkUser\" name=\"email\" value=\"\" placeholder=\"Enter email address\" required>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"lastname\">Country *</label>
                        <select name=\"country\" id=\"country\" class=\"form--control\">
                                                            <option data-mobile_code=\"93\" value=\"Afghanistan\" data-code=\"AF\">Afghanistan</option>
                                                            <option data-mobile_code=\"358\" value=\"Aland Islands\" data-code=\"AX\">Aland Islands</option>
                                                            <option data-mobile_code=\"355\" value=\"Albania\" data-code=\"AL\">Albania</option>
                                                            <option data-mobile_code=\"213\" value=\"Algeria\" data-code=\"DZ\">Algeria</option>
                                                            <option data-mobile_code=\"1684\" value=\"AmericanSamoa\" data-code=\"AS\">AmericanSamoa</option>
                                                            <option data-mobile_code=\"376\" value=\"Andorra\" data-code=\"AD\">Andorra</option>
                                                            <option data-mobile_code=\"244\" value=\"Angola\" data-code=\"AO\">Angola</option>
                                                            <option data-mobile_code=\"1264\" value=\"Anguilla\" data-code=\"AI\">Anguilla</option>
                                                            <option data-mobile_code=\"672\" value=\"Antarctica\" data-code=\"AQ\">Antarctica</option>
                                                            <option data-mobile_code=\"1268\" value=\"Antigua and Barbuda\" data-code=\"AG\">Antigua and Barbuda</option>
                                                            <option data-mobile_code=\"54\" value=\"Argentina\" data-code=\"AR\">Argentina</option>
                                                            <option data-mobile_code=\"374\" value=\"Armenia\" data-code=\"AM\">Armenia</option>
                                                            <option data-mobile_code=\"297\" value=\"Aruba\" data-code=\"AW\">Aruba</option>
                                                            <option data-mobile_code=\"61\" value=\"Australia\" data-code=\"AU\">Australia</option>
                                                            <option data-mobile_code=\"43\" value=\"Austria\" data-code=\"AT\">Austria</option>
                                                            <option data-mobile_code=\"994\" value=\"Azerbaijan\" data-code=\"AZ\">Azerbaijan</option>
                                                            <option data-mobile_code=\"1242\" value=\"Bahamas\" data-code=\"BS\">Bahamas</option>
                                                            <option data-mobile_code=\"973\" value=\"Bahrain\" data-code=\"BH\">Bahrain</option>
                                                            <option data-mobile_code=\"880\" value=\"Bangladesh\" data-code=\"BD\">Bangladesh</option>
                                                            <option data-mobile_code=\"1246\" value=\"Barbados\" data-code=\"BB\">Barbados</option>
                                                            <option data-mobile_code=\"375\" value=\"Belarus\" data-code=\"BY\">Belarus</option>
                                                            <option data-mobile_code=\"32\" value=\"Belgium\" data-code=\"BE\">Belgium</option>
                                                            <option data-mobile_code=\"501\" value=\"Belize\" data-code=\"BZ\">Belize</option>
                                                            <option data-mobile_code=\"229\" value=\"Benin\" data-code=\"BJ\">Benin</option>
                                                            <option data-mobile_code=\"1441\" value=\"Bermuda\" data-code=\"BM\">Bermuda</option>
                                                            <option data-mobile_code=\"975\" value=\"Bhutan\" data-code=\"BT\">Bhutan</option>
                                                            <option data-mobile_code=\"591\" value=\"Plurinational State of Bolivia\" data-code=\"BO\">Plurinational State of Bolivia</option>
                                                            <option data-mobile_code=\"387\" value=\"Bosnia and Herzegovina\" data-code=\"BA\">Bosnia and Herzegovina</option>
                                                            <option data-mobile_code=\"267\" value=\"Botswana\" data-code=\"BW\">Botswana</option>
                                                            <option data-mobile_code=\"55\" value=\"Brazil\" data-code=\"BR\">Brazil</option>
                                                            <option data-mobile_code=\"246\" value=\"British Indian Ocean Territory\" data-code=\"IO\">British Indian Ocean Territory</option>
                                                            <option data-mobile_code=\"673\" value=\"Brunei Darussalam\" data-code=\"BN\">Brunei Darussalam</option>
                                                            <option data-mobile_code=\"359\" value=\"Bulgaria\" data-code=\"BG\">Bulgaria</option>
                                                            <option data-mobile_code=\"226\" value=\"Burkina Faso\" data-code=\"BF\">Burkina Faso</option>
                                                            <option data-mobile_code=\"257\" value=\"Burundi\" data-code=\"BI\">Burundi</option>
                                                            <option data-mobile_code=\"855\" value=\"Cambodia\" data-code=\"KH\">Cambodia</option>
                                                            <option data-mobile_code=\"237\" value=\"Cameroon\" data-code=\"CM\">Cameroon</option>
                                                            <option data-mobile_code=\"1\" value=\"Canada\" data-code=\"CA\">Canada</option>
                                                            <option data-mobile_code=\"238\" value=\"Cape Verde\" data-code=\"CV\">Cape Verde</option>
                                                            <option data-mobile_code=\" 345\" value=\"Cayman Islands\" data-code=\"KY\">Cayman Islands</option>
                                                            <option data-mobile_code=\"236\" value=\"Central African Republic\" data-code=\"CF\">Central African Republic</option>
                                                            <option data-mobile_code=\"235\" value=\"Chad\" data-code=\"TD\">Chad</option>
                                                            <option data-mobile_code=\"56\" value=\"Chile\" data-code=\"CL\">Chile</option>
                                                            <option data-mobile_code=\"86\" value=\"China\" data-code=\"CN\">China</option>
                                                            <option data-mobile_code=\"61\" value=\"Christmas Island\" data-code=\"CX\">Christmas Island</option>
                                                            <option data-mobile_code=\"61\" value=\"Cocos (Keeling) Islands\" data-code=\"CC\">Cocos (Keeling) Islands</option>
                                                            <option data-mobile_code=\"57\" value=\"Colombia\" data-code=\"CO\">Colombia</option>
                                                            <option data-mobile_code=\"269\" value=\"Comoros\" data-code=\"KM\">Comoros</option>
                                                            <option data-mobile_code=\"242\" value=\"Congo\" data-code=\"CG\">Congo</option>
                                                            <option data-mobile_code=\"243\" value=\"The Democratic Republic of the Congo\" data-code=\"CD\">The Democratic Republic of the Congo</option>
                                                            <option data-mobile_code=\"682\" value=\"Cook Islands\" data-code=\"CK\">Cook Islands</option>
                                                            <option data-mobile_code=\"506\" value=\"Costa Rica\" data-code=\"CR\">Costa Rica</option>
                                                            <option data-mobile_code=\"225\" value=\"Cote d&#039;Ivoire\" data-code=\"CI\">Cote d&#039;Ivoire</option>
                                                            <option data-mobile_code=\"385\" value=\"Croatia\" data-code=\"HR\">Croatia</option>
                                                            <option data-mobile_code=\"53\" value=\"Cuba\" data-code=\"CU\">Cuba</option>
                                                            <option data-mobile_code=\"357\" value=\"Cyprus\" data-code=\"CY\">Cyprus</option>
                                                            <option data-mobile_code=\"420\" value=\"Czech Republic\" data-code=\"CZ\">Czech Republic</option>
                                                            <option data-mobile_code=\"45\" value=\"Denmark\" data-code=\"DK\">Denmark</option>
                                                            <option data-mobile_code=\"253\" value=\"Djibouti\" data-code=\"DJ\">Djibouti</option>
                                                            <option data-mobile_code=\"1767\" value=\"Dominica\" data-code=\"DM\">Dominica</option>
                                                            <option data-mobile_code=\"1849\" value=\"Dominican Republic\" data-code=\"DO\">Dominican Republic</option>
                                                            <option data-mobile_code=\"593\" value=\"Ecuador\" data-code=\"EC\">Ecuador</option>
                                                            <option data-mobile_code=\"20\" value=\"Egypt\" data-code=\"EG\">Egypt</option>
                                                            <option data-mobile_code=\"503\" value=\"El Salvador\" data-code=\"SV\">El Salvador</option>
                                                            <option data-mobile_code=\"240\" value=\"Equatorial Guinea\" data-code=\"GQ\">Equatorial Guinea</option>
                                                            <option data-mobile_code=\"291\" value=\"Eritrea\" data-code=\"ER\">Eritrea</option>
                                                            <option data-mobile_code=\"372\" value=\"Estonia\" data-code=\"EE\">Estonia</option>
                                                            <option data-mobile_code=\"251\" value=\"Ethiopia\" data-code=\"ET\">Ethiopia</option>
                                                            <option data-mobile_code=\"500\" value=\"Falkland Islands (Malvinas)\" data-code=\"FK\">Falkland Islands (Malvinas)</option>
                                                            <option data-mobile_code=\"298\" value=\"Faroe Islands\" data-code=\"FO\">Faroe Islands</option>
                                                            <option data-mobile_code=\"679\" value=\"Fiji\" data-code=\"FJ\">Fiji</option>
                                                            <option data-mobile_code=\"358\" value=\"Finland\" data-code=\"FI\">Finland</option>
                                                            <option data-mobile_code=\"33\" value=\"France\" data-code=\"FR\">France</option>
                                                            <option data-mobile_code=\"594\" value=\"French Guiana\" data-code=\"GF\">French Guiana</option>
                                                            <option data-mobile_code=\"689\" value=\"French Polynesia\" data-code=\"PF\">French Polynesia</option>
                                                            <option data-mobile_code=\"241\" value=\"Gabon\" data-code=\"GA\">Gabon</option>
                                                            <option data-mobile_code=\"220\" value=\"Gambia\" data-code=\"GM\">Gambia</option>
                                                            <option data-mobile_code=\"995\" value=\"Georgia\" data-code=\"GE\">Georgia</option>
                                                            <option data-mobile_code=\"49\" value=\"Germany\" data-code=\"DE\">Germany</option>
                                                            <option data-mobile_code=\"233\" value=\"Ghana\" data-code=\"GH\">Ghana</option>
                                                            <option data-mobile_code=\"350\" value=\"Gibraltar\" data-code=\"GI\">Gibraltar</option>
                                                            <option data-mobile_code=\"30\" value=\"Greece\" data-code=\"GR\">Greece</option>
                                                            <option data-mobile_code=\"299\" value=\"Greenland\" data-code=\"GL\">Greenland</option>
                                                            <option data-mobile_code=\"1473\" value=\"Grenada\" data-code=\"GD\">Grenada</option>
                                                            <option data-mobile_code=\"590\" value=\"Guadeloupe\" data-code=\"GP\">Guadeloupe</option>
                                                            <option data-mobile_code=\"1671\" value=\"Guam\" data-code=\"GU\">Guam</option>
                                                            <option data-mobile_code=\"502\" value=\"Guatemala\" data-code=\"GT\">Guatemala</option>
                                                            <option data-mobile_code=\"44\" value=\"Guernsey\" data-code=\"GG\">Guernsey</option>
                                                            <option data-mobile_code=\"224\" value=\"Guinea\" data-code=\"GN\">Guinea</option>
                                                            <option data-mobile_code=\"245\" value=\"Guinea-Bissau\" data-code=\"GW\">Guinea-Bissau</option>
                                                            <option data-mobile_code=\"595\" value=\"Guyana\" data-code=\"GY\">Guyana</option>
                                                            <option data-mobile_code=\"509\" value=\"Haiti\" data-code=\"HT\">Haiti</option>
                                                            <option data-mobile_code=\"379\" value=\"Holy See (Vatican City State)\" data-code=\"VA\">Holy See (Vatican City State)</option>
                                                            <option data-mobile_code=\"504\" value=\"Honduras\" data-code=\"HN\">Honduras</option>
                                                            <option data-mobile_code=\"852\" value=\"Hong Kong\" data-code=\"HK\">Hong Kong</option>
                                                            <option data-mobile_code=\"36\" value=\"Hungary\" data-code=\"HU\">Hungary</option>
                                                            <option data-mobile_code=\"354\" value=\"Iceland\" data-code=\"IS\">Iceland</option>
                                                            <option data-mobile_code=\"91\" value=\"India\" data-code=\"IN\">India</option>
                                                            <option data-mobile_code=\"62\" value=\"Indonesia\" data-code=\"ID\">Indonesia</option>
                                                            <option data-mobile_code=\"98\" value=\"Iran\" data-code=\"IR\">Iran</option>
                                                            <option data-mobile_code=\"964\" value=\"Iraq\" data-code=\"IQ\">Iraq</option>
                                                            <option data-mobile_code=\"353\" value=\"Ireland\" data-code=\"IE\">Ireland</option>
                                                            <option data-mobile_code=\"44\" value=\"Isle of Man\" data-code=\"IM\">Isle of Man</option>
                                                            <option data-mobile_code=\"972\" value=\"Israel\" data-code=\"IL\">Israel</option>
                                                            <option data-mobile_code=\"39\" value=\"Italy\" data-code=\"IT\">Italy</option>
                                                            <option data-mobile_code=\"1876\" value=\"Jamaica\" data-code=\"JM\">Jamaica</option>
                                                            <option data-mobile_code=\"81\" value=\"Japan\" data-code=\"JP\">Japan</option>
                                                            <option data-mobile_code=\"44\" value=\"Jersey\" data-code=\"JE\">Jersey</option>
                                                            <option data-mobile_code=\"962\" value=\"Jordan\" data-code=\"JO\">Jordan</option>
                                                            <option data-mobile_code=\"77\" value=\"Kazakhstan\" data-code=\"KZ\">Kazakhstan</option>
                                                            <option data-mobile_code=\"254\" value=\"Kenya\" data-code=\"KE\">Kenya</option>
                                                            <option data-mobile_code=\"686\" value=\"Kiribati\" data-code=\"KI\">Kiribati</option>
                                                            <option data-mobile_code=\"850\" value=\"Democratic People&#039;s Republic of Korea\" data-code=\"KP\">Democratic People&#039;s Republic of Korea</option>
                                                            <option data-mobile_code=\"82\" value=\"Republic of South Korea\" data-code=\"KR\">Republic of South Korea</option>
                                                            <option data-mobile_code=\"965\" value=\"Kuwait\" data-code=\"KW\">Kuwait</option>
                                                            <option data-mobile_code=\"996\" value=\"Kyrgyzstan\" data-code=\"KG\">Kyrgyzstan</option>
                                                            <option data-mobile_code=\"856\" value=\"Laos\" data-code=\"LA\">Laos</option>
                                                            <option data-mobile_code=\"371\" value=\"Latvia\" data-code=\"LV\">Latvia</option>
                                                            <option data-mobile_code=\"961\" value=\"Lebanon\" data-code=\"LB\">Lebanon</option>
                                                            <option data-mobile_code=\"266\" value=\"Lesotho\" data-code=\"LS\">Lesotho</option>
                                                            <option data-mobile_code=\"231\" value=\"Liberia\" data-code=\"LR\">Liberia</option>
                                                            <option data-mobile_code=\"218\" value=\"Libyan Arab Jamahiriya\" data-code=\"LY\">Libyan Arab Jamahiriya</option>
                                                            <option data-mobile_code=\"423\" value=\"Liechtenstein\" data-code=\"LI\">Liechtenstein</option>
                                                            <option data-mobile_code=\"370\" value=\"Lithuania\" data-code=\"LT\">Lithuania</option>
                                                            <option data-mobile_code=\"352\" value=\"Luxembourg\" data-code=\"LU\">Luxembourg</option>
                                                            <option data-mobile_code=\"853\" value=\"Macao\" data-code=\"MO\">Macao</option>
                                                            <option data-mobile_code=\"389\" value=\"Macedonia\" data-code=\"MK\">Macedonia</option>
                                                            <option data-mobile_code=\"261\" value=\"Madagascar\" data-code=\"MG\">Madagascar</option>
                                                            <option data-mobile_code=\"265\" value=\"Malawi\" data-code=\"MW\">Malawi</option>
                                                            <option data-mobile_code=\"60\" value=\"Malaysia\" data-code=\"MY\">Malaysia</option>
                                                            <option data-mobile_code=\"960\" value=\"Maldives\" data-code=\"MV\">Maldives</option>
                                                            <option data-mobile_code=\"223\" value=\"Mali\" data-code=\"ML\">Mali</option>
                                                            <option data-mobile_code=\"356\" value=\"Malta\" data-code=\"MT\">Malta</option>
                                                            <option data-mobile_code=\"692\" value=\"Marshall Islands\" data-code=\"MH\">Marshall Islands</option>
                                                            <option data-mobile_code=\"596\" value=\"Martinique\" data-code=\"MQ\">Martinique</option>
                                                            <option data-mobile_code=\"222\" value=\"Mauritania\" data-code=\"MR\">Mauritania</option>
                                                            <option data-mobile_code=\"230\" value=\"Mauritius\" data-code=\"MU\">Mauritius</option>
                                                            <option data-mobile_code=\"262\" value=\"Mayotte\" data-code=\"YT\">Mayotte</option>
                                                            <option data-mobile_code=\"52\" value=\"Mexico\" data-code=\"MX\">Mexico</option>
                                                            <option data-mobile_code=\"691\" value=\"Federated States of Micronesia\" data-code=\"FM\">Federated States of Micronesia</option>
                                                            <option data-mobile_code=\"373\" value=\"Moldova\" data-code=\"MD\">Moldova</option>
                                                            <option data-mobile_code=\"377\" value=\"Monaco\" data-code=\"MC\">Monaco</option>
                                                            <option data-mobile_code=\"976\" value=\"Mongolia\" data-code=\"MN\">Mongolia</option>
                                                            <option data-mobile_code=\"382\" value=\"Montenegro\" data-code=\"ME\">Montenegro</option>
                                                            <option data-mobile_code=\"1664\" value=\"Montserrat\" data-code=\"MS\">Montserrat</option>
                                                            <option data-mobile_code=\"212\" value=\"Morocco\" data-code=\"MA\">Morocco</option>
                                                            <option data-mobile_code=\"258\" value=\"Mozambique\" data-code=\"MZ\">Mozambique</option>
                                                            <option data-mobile_code=\"95\" value=\"Myanmar\" data-code=\"MM\">Myanmar</option>
                                                            <option data-mobile_code=\"264\" value=\"Namibia\" data-code=\"NA\">Namibia</option>
                                                            <option data-mobile_code=\"674\" value=\"Nauru\" data-code=\"NR\">Nauru</option>
                                                            <option data-mobile_code=\"977\" value=\"Nepal\" data-code=\"NP\">Nepal</option>
                                                            <option data-mobile_code=\"31\" value=\"Netherlands\" data-code=\"NL\">Netherlands</option>
                                                            <option data-mobile_code=\"599\" value=\"Netherlands Antilles\" data-code=\"AN\">Netherlands Antilles</option>
                                                            <option data-mobile_code=\"687\" value=\"New Caledonia\" data-code=\"NC\">New Caledonia</option>
                                                            <option data-mobile_code=\"64\" value=\"New Zealand\" data-code=\"NZ\">New Zealand</option>
                                                            <option data-mobile_code=\"505\" value=\"Nicaragua\" data-code=\"NI\">Nicaragua</option>
                                                            <option data-mobile_code=\"227\" value=\"Niger\" data-code=\"NE\">Niger</option>
                                                            <option data-mobile_code=\"234\" value=\"Nigeria\" data-code=\"NG\">Nigeria</option>
                                                            <option data-mobile_code=\"683\" value=\"Niue\" data-code=\"NU\">Niue</option>
                                                            <option data-mobile_code=\"672\" value=\"Norfolk Island\" data-code=\"NF\">Norfolk Island</option>
                                                            <option data-mobile_code=\"1670\" value=\"Northern Mariana Islands\" data-code=\"MP\">Northern Mariana Islands</option>
                                                            <option data-mobile_code=\"47\" value=\"Norway\" data-code=\"NO\">Norway</option>
                                                            <option data-mobile_code=\"968\" value=\"Oman\" data-code=\"OM\">Oman</option>
                                                            <option data-mobile_code=\"92\" value=\"Pakistan\" data-code=\"PK\">Pakistan</option>
                                                            <option data-mobile_code=\"680\" value=\"Palau\" data-code=\"PW\">Palau</option>
                                                            <option data-mobile_code=\"970\" value=\"Palestinian Territory\" data-code=\"PS\">Palestinian Territory</option>
                                                            <option data-mobile_code=\"507\" value=\"Panama\" data-code=\"PA\">Panama</option>
                                                            <option data-mobile_code=\"675\" value=\"Papua New Guinea\" data-code=\"PG\">Papua New Guinea</option>
                                                            <option data-mobile_code=\"595\" value=\"Paraguay\" data-code=\"PY\">Paraguay</option>
                                                            <option data-mobile_code=\"51\" value=\"Peru\" data-code=\"PE\">Peru</option>
                                                            <option data-mobile_code=\"63\" value=\"Philippines\" data-code=\"PH\">Philippines</option>
                                                            <option data-mobile_code=\"872\" value=\"Pitcairn\" data-code=\"PN\">Pitcairn</option>
                                                            <option data-mobile_code=\"48\" value=\"Poland\" data-code=\"PL\">Poland</option>
                                                            <option data-mobile_code=\"351\" value=\"Portugal\" data-code=\"PT\">Portugal</option>
                                                            <option data-mobile_code=\"1939\" value=\"Puerto Rico\" data-code=\"PR\">Puerto Rico</option>
                                                            <option data-mobile_code=\"974\" value=\"Qatar\" data-code=\"QA\">Qatar</option>
                                                            <option data-mobile_code=\"40\" value=\"Romania\" data-code=\"RO\">Romania</option>
                                                            <option data-mobile_code=\"7\" value=\"Russia\" data-code=\"RU\">Russia</option>
                                                            <option data-mobile_code=\"250\" value=\"Rwanda\" data-code=\"RW\">Rwanda</option>
                                                            <option data-mobile_code=\"262\" value=\"Reunion\" data-code=\"RE\">Reunion</option>
                                                            <option data-mobile_code=\"590\" value=\"Saint Barthelemy\" data-code=\"BL\">Saint Barthelemy</option>
                                                            <option data-mobile_code=\"290\" value=\"Saint Helena\" data-code=\"SH\">Saint Helena</option>
                                                            <option data-mobile_code=\"1869\" value=\"Saint Kitts and Nevis\" data-code=\"KN\">Saint Kitts and Nevis</option>
                                                            <option data-mobile_code=\"1758\" value=\"Saint Lucia\" data-code=\"LC\">Saint Lucia</option>
                                                            <option data-mobile_code=\"590\" value=\"Saint Martin\" data-code=\"MF\">Saint Martin</option>
                                                            <option data-mobile_code=\"508\" value=\"Saint Pierre and Miquelon\" data-code=\"PM\">Saint Pierre and Miquelon</option>
                                                            <option data-mobile_code=\"1784\" value=\"Saint Vincent and the Grenadines\" data-code=\"VC\">Saint Vincent and the Grenadines</option>
                                                            <option data-mobile_code=\"685\" value=\"Samoa\" data-code=\"WS\">Samoa</option>
                                                            <option data-mobile_code=\"378\" value=\"San Marino\" data-code=\"SM\">San Marino</option>
                                                            <option data-mobile_code=\"239\" value=\"Sao Tome and Principe\" data-code=\"ST\">Sao Tome and Principe</option>
                                                            <option data-mobile_code=\"966\" value=\"Saudi Arabia\" data-code=\"SA\">Saudi Arabia</option>
                                                            <option data-mobile_code=\"221\" value=\"Senegal\" data-code=\"SN\">Senegal</option>
                                                            <option data-mobile_code=\"381\" value=\"Serbia\" data-code=\"RS\">Serbia</option>
                                                            <option data-mobile_code=\"248\" value=\"Seychelles\" data-code=\"SC\">Seychelles</option>
                                                            <option data-mobile_code=\"232\" value=\"Sierra Leone\" data-code=\"SL\">Sierra Leone</option>
                                                            <option data-mobile_code=\"65\" value=\"Singapore\" data-code=\"SG\">Singapore</option>
                                                            <option data-mobile_code=\"421\" value=\"Slovakia\" data-code=\"SK\">Slovakia</option>
                                                            <option data-mobile_code=\"386\" value=\"Slovenia\" data-code=\"SI\">Slovenia</option>
                                                            <option data-mobile_code=\"677\" value=\"Solomon Islands\" data-code=\"SB\">Solomon Islands</option>
                                                            <option data-mobile_code=\"252\" value=\"Somalia\" data-code=\"SO\">Somalia</option>
                                                            <option data-mobile_code=\"27\" value=\"South Africa\" data-code=\"ZA\">South Africa</option>
                                                            <option data-mobile_code=\"211\" value=\"South Sudan\" data-code=\"SS\">South Sudan</option>
                                                            <option data-mobile_code=\"500\" value=\"South Georgia and the South Sandwich Islands\" data-code=\"GS\">South Georgia and the South Sandwich Islands</option>
                                                            <option data-mobile_code=\"34\" value=\"Spain\" data-code=\"ES\">Spain</option>
                                                            <option data-mobile_code=\"94\" value=\"Sri Lanka\" data-code=\"LK\">Sri Lanka</option>
                                                            <option data-mobile_code=\"249\" value=\"Sudan\" data-code=\"SD\">Sudan</option>
                                                            <option data-mobile_code=\"597\" value=\"Suricountry\" data-code=\"SR\">Suricountry</option>
                                                            <option data-mobile_code=\"47\" value=\"Svalbard and Jan Mayen\" data-code=\"SJ\">Svalbard and Jan Mayen</option>
                                                            <option data-mobile_code=\"268\" value=\"Swaziland\" data-code=\"SZ\">Swaziland</option>
                                                            <option data-mobile_code=\"46\" value=\"Sweden\" data-code=\"SE\">Sweden</option>
                                                            <option data-mobile_code=\"41\" value=\"Switzerland\" data-code=\"CH\">Switzerland</option>
                                                            <option data-mobile_code=\"963\" value=\"Syrian Arab Republic\" data-code=\"SY\">Syrian Arab Republic</option>
                                                            <option data-mobile_code=\"886\" value=\"Taiwan\" data-code=\"TW\">Taiwan</option>
                                                            <option data-mobile_code=\"992\" value=\"Tajikistan\" data-code=\"TJ\">Tajikistan</option>
                                                            <option data-mobile_code=\"255\" value=\"Tanzania\" data-code=\"TZ\">Tanzania</option>
                                                            <option data-mobile_code=\"66\" value=\"Thailand\" data-code=\"TH\">Thailand</option>
                                                            <option data-mobile_code=\"670\" value=\"Timor-Leste\" data-code=\"TL\">Timor-Leste</option>
                                                            <option data-mobile_code=\"228\" value=\"Togo\" data-code=\"TG\">Togo</option>
                                                            <option data-mobile_code=\"690\" value=\"Tokelau\" data-code=\"TK\">Tokelau</option>
                                                            <option data-mobile_code=\"676\" value=\"Tonga\" data-code=\"TO\">Tonga</option>
                                                            <option data-mobile_code=\"1868\" value=\"Trinidad and Tobago\" data-code=\"TT\">Trinidad and Tobago</option>
                                                            <option data-mobile_code=\"216\" value=\"Tunisia\" data-code=\"TN\">Tunisia</option>
                                                            <option data-mobile_code=\"90\" value=\"Turkey\" data-code=\"TR\">Turkey</option>
                                                            <option data-mobile_code=\"993\" value=\"Turkmenistan\" data-code=\"TM\">Turkmenistan</option>
                                                            <option data-mobile_code=\"1649\" value=\"Turks and Caicos Islands\" data-code=\"TC\">Turks and Caicos Islands</option>
                                                            <option data-mobile_code=\"688\" value=\"Tuvalu\" data-code=\"TV\">Tuvalu</option>
                                                            <option data-mobile_code=\"256\" value=\"Uganda\" data-code=\"UG\">Uganda</option>
                                                            <option data-mobile_code=\"380\" value=\"Ukraine\" data-code=\"UA\">Ukraine</option>
                                                            <option data-mobile_code=\"971\" value=\"United Arab Emirates\" data-code=\"AE\">United Arab Emirates</option>
                                                            <option data-mobile_code=\"44\" value=\"United Kingdom\" data-code=\"GB\">United Kingdom</option>
                                                            <option data-mobile_code=\"1\" value=\"United States\" data-code=\"US\">United States</option>
                                                            <option data-mobile_code=\"598\" value=\"Uruguay\" data-code=\"UY\">Uruguay</option>
                                                            <option data-mobile_code=\"998\" value=\"Uzbekistan\" data-code=\"UZ\">Uzbekistan</option>
                                                            <option data-mobile_code=\"678\" value=\"Vanuatu\" data-code=\"VU\">Vanuatu</option>
                                                            <option data-mobile_code=\"58\" value=\"Venezuela\" data-code=\"VE\">Venezuela</option>
                                                            <option data-mobile_code=\"84\" value=\"Vietnam\" data-code=\"VN\">Vietnam</option>
                                                            <option data-mobile_code=\"1284\" value=\"British Virgin Islands\" data-code=\"VG\">British Virgin Islands</option>
                                                            <option data-mobile_code=\"1340\" value=\"U.S. Virgin Islands\" data-code=\"VI\">U.S. Virgin Islands</option>
                                                            <option data-mobile_code=\"681\" value=\"Wallis and Futuna\" data-code=\"WF\">Wallis and Futuna</option>
                                                            <option data-mobile_code=\"967\" value=\"Yemen\" data-code=\"YE\">Yemen</option>
                                                            <option data-mobile_code=\"260\" value=\"Zambia\" data-code=\"ZM\">Zambia</option>
                                                            <option data-mobile_code=\"263\" value=\"Zimbabwe\" data-code=\"ZW\">Zimbabwe</option>
                                                    </select>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"mobile\">Mobile *</label>
                        <div class=\"input-group\">

                            <span class=\"input-group-text bg--base border--base text-white\">
                            <span name=\"moblie\" class=\"border-0 bg-transparent mobile-code\">

                            </span>
                            <input type=\"hidden\" name=\"mobile_code\">
                            <input type=\"hidden\" name=\"country_code\">
                            </span>

                            <input type=\"text\" name=\"mobile\" id=\"mobile\" value=\"\" class=\"form--control checkUser\" placeholder=\"Your Phone Number\" required>
                        </div>
                        <small class=\"text-danger mobileExist\"></small>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"city\">City *</label>
                        <input id=\"city\" id=\"city\" type=\"text\" class=\"form--control checkUser\" name=\"city\" value=\"\" placeholder=\"Enter City\" required>
                    </div>

                    <div class=\"col-lg-6 form-group\">
                        <label for=\"zip\">Zip Code *</label>
                        <input id=\"zip\" id=\"zip\" type=\"text\" class=\"form--control checkUser\" name=\"zip\" value=\"\" placeholder=\"Enter Zip\" required>
                    </div>

                    <div class=\"col-lg-12 form-group\">
                        <label for=\"address\">Address *</label>
                        <input id=\"address\" id=\"address\" type=\"text\" class=\"form--control checkUser\" name=\"address\" value=\"\" placeholder=\"Enter Address\" required>
                    </div>

                    <div class=\"col-lg-12 form-group\">
                        <label for=\"address\">Create Pin *</label>
                        <input id=\"pin\"  type=\"number\" maxlength=\"4\" minlength=\"4\" class=\"form--control checkUser\" name=\"pin\" value=\"\" placeholder=\"0000\" required>
                    </div>


                    <div class=\"col-lg-6 form-group hover-input-popup\">
                        <label for=\"password\">Password *</label>
                        <input type=\"password\" id=\"password\" name=\"password\" autocomplete=\"off\" class=\"form--control\" placeholder=\"Enter Password\">
                                            </div>
                    <div class=\"col-lg-6 form-group\">
                        <label for=\"password-confirm\">Confirm Password *</label>
                        <input id=\"password-confirm\" type=\"password\" class=\"form--control\" name=\"password_confirmation\" required autocomplete=\"new-password\" placeholder=\"Confirm password\">
                    </div>

                    
                    {# <div class=\"form-group col-lg-12\">
        <label for=\"recaptcha-code\">Captcha</label>
        <link href=\"https://fonts.googleapis.com/css?family=Henny+Penny&display=swap\" rel=\"stylesheet\"><div style=\"height: 46px; line-height: 46px; width:100%; text-align: center; background-color: #003; color: #0d9315; font-size: 26px; font-weight: bold; letter-spacing: 20px; font-family: 'Henny Penny', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;\"><span style=\"    float:left;     -webkit-transform: rotate(34deg);\">4</span><span style=\"    float:left;     -webkit-transform: rotate(45deg);\">9</span><span style=\"    float:left;     -webkit-transform: rotate(38deg);\">5</span><span style=\"    float:left;     -webkit-transform: rotate(9deg);\">5</span><span style=\"    float:left;     -webkit-transform: rotate(49deg);\">6</span><span style=\"    float:left;     -webkit-transform: rotate(9deg);\">0</span></div><input type=\"hidden\" name=\"captcha_secret\" value=\"a139b35904a41e89585ea033a1b9553f4aca77e985016a42b5fcc22932f8dc17\">        <input type=\"text\" name=\"captcha\" id=\"recaptcha-code\" placeholder=\"Enter Captcha\" class=\"form--control mt-3\" autocomplete=\"off\">
    </div> #}


                                            <div class=\"col-lg-12 form-group\">
                            <div class=\"form-check custom--checkbox\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"agree\" name=\"agree\" required>
                                <label for=\"agree\" class=\"form-check-label\">
                                    I agree with                                                                            <a href=\"page/111-company-policy.html\" target=\"blank\" class=\"text--base\">
                                        Company Policy</a>
                                      ,
                                                                            <a href=\"page/85-terms-of-services.html\" target=\"blank\" class=\"text--base\">
                                        Terms of Services</a>
                                        ,
                                                                            <a href=\"page/84-privacy-policy.html\" target=\"blank\" class=\"text--base\">
                                        Privacy Policy</a>
                                        .
                                                                    </label>
                            </div>
                        </div>
                    
                    <div class=\"col-lg-12\">
                        <button type=\"submit\" id=\"registerbtn\" class=\"btn btn--base text-white w-100\">Sign Up</button>
                    </div>

                </div>
            </form>
        </div>
        <div class=\"bottom\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <ul class=\"d-flex flex-wrap align-items-center account-short-link justify-content-center\">
                                                            <li><a href=\"page/111-company-policy.html\" target=\"blank\">
                        Company Policy</a>
                        ,</li>
                                                            <li><a href=\"page/85-terms-of-services.html\" target=\"blank\">
                        Terms of Services</a>
                        ,</li>
                                                            <li><a href=\"page/84-privacy-policy.html\" target=\"blank\">
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

  <script src={{ asset(\"assets/auth/assets/global/js/secure_password.js\") }}></script>
  <!-- main js -->
  <script src={{ asset(\"assets/auth/assets/templates/basic/js/app.js\") }}></script>
<script src={{ asset(\"assets/auth/assets/global/js/auth.js\") }}></script>
    
  <link rel=\"stylesheet\" href={{ asset(\"assets/auth/assets/global/css/iziToast.min.css\") }}>
<script src={{ asset(\"assets/auth/assets/global/js/iziToast.min.js\") }}></script>

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
</html>", "home/register.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\register.html.twig");
    }
}
