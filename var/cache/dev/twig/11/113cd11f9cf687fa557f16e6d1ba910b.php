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

/* choicehorizone.com/services/index.html */
class __TwigTemplate_35aba5df1e6697c43a4cd1e7de097793 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choicehorizone.com/services/index.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choicehorizone.com/services/index.html"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en-US\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">

\t<title>Services &#8211; Horizon</title>
<meta name='robots' content='noindex, nofollow' />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Feed\" href=\"../feed/index.html\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Comments Feed\" href=\"../comments/feed/index.html\" />
<script>
window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/choicehorizone.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=6.5\"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case\"flag\":return n(e,\"\\ud83c\\udff3\\ufe0f\\u200d\\u26a7\\ufe0f\",\"\\ud83c\\udff3\\ufe0f\\u200b\\u26a7\\ufe0f\")?!1:!n(e,\"\\ud83c\\uddfa\\ud83c\\uddf3\",\"\\ud83c\\uddfa\\u200b\\ud83c\\uddf3\")&&!n(e,\"\\ud83c\\udff4\\udb40\\udc67\\udb40\\udc62\\udb40\\udc65\\udb40\\udc6e\\udb40\\udc67\\udb40\\udc7f\",\"\\ud83c\\udff4\\u200b\\udb40\\udc67\\u200b\\udb40\\udc62\\u200b\\udb40\\udc65\\u200b\\udb40\\udc6e\\u200b\\udb40\\udc67\\u200b\\udb40\\udc7f\");case\"emoji\":return!n(e,\"\\ud83d\\udc26\\u200d\\u2b1b\",\"\\ud83d\\udc26\\u200b\\u2b1b\")}return!1}function f(e,t,n){var r=\"undefined\"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement(\"canvas\"),a=r.getContext(\"2d\",{willReadFrequently:!0}),o=(a.textBaseline=\"top\",a.font=\"600 32px Arial\",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement(\"script\");t.src=e,t.defer=!0,i.head.appendChild(t)}\"undefined\"!=typeof Promise&&(o=\"wpEmojiSettingsSupports\",s=[\"flag\",\"emoji\"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener(\"DOMContentLoaded\",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if(\"object\"==typeof e&&\"number\"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&\"object\"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if(\"undefined\"!=typeof Worker&&\"undefined\"!=typeof OffscreenCanvas&&\"undefined\"!=typeof URL&&URL.createObjectURL&&\"undefined\"!=typeof Blob)try{var e=\"postMessage(\"+f.toString()+\"(\"+[JSON.stringify(s),u.toString(),p.toString()].join(\",\")+\"));\",r=new Blob([e],{type:\"text/javascript\"}),a=new Worker(URL.createObjectURL(r),{name:\"wpTestEmojiSupports\"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],\"flag\"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<link rel='stylesheet' id='bdt-uikit-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css@ver=3.7.2.css' media='all' />
<link rel='stylesheet' id='element-pack-site-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/element-pack-site.css@ver=5.15.2.css' media='all' />
<style id='wp-emoji-styles-inline-css'>

\timg.wp-smiley, img.emoji {
\t\tdisplay: inline !important;
\t\tborder: none !important;
\t\tbox-shadow: none !important;
\t\theight: 1em !important;
\t\twidth: 1em !important;
\t\tmargin: 0 0.07em !important;
\t\tvertical-align: -0.1em !important;
\t\tbackground: none !important;
\t\tpadding: 0 !important;
\t}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.min.css@ver=6.5.css' media='all' />
<style id='classic-theme-styles-inline-css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='elementor-icons-ekiticons-css' href='../wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css@ver=5.20.0.css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='../wp-content/plugins/elementor/assets/css/frontend-lite.min.css@ver=3.13.2.css' media='all' />
<link rel='stylesheet' id='swiper-css' href='../wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css@ver=5.3.6.css' media='all' />
<link rel='stylesheet' id='elementor-post-192-css' href='../wp-content/uploads/elementor/css/post-192.css@ver=1684328299.css' media='all' />
<link rel='stylesheet' id='uicore_global-css' href='../wp-content/uploads/uicore-global.css@ver=7795.css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-css' href='../wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='ekit-responsive-css' href='../wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Heebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css@ver=5.15.3.css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css@ver=5.15.3.css' media='all' />
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin><script src=\"../wp-includes/js/jquery/jquery.min.js@ver=3.7.1\" id=\"jquery-core-js\"></script>
<script src=\"../wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.1\" id=\"jquery-migrate-js\"></script>
<link rel=\"https://api.w.org/\" href=\"../wp-json/index.html\" /><link rel=\"alternate\" type=\"application/json\" href=\"../wp-json/wp/v2/pages/192.html\" /><link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"../xmlrpc.php@rsd.html\" />
<meta name=\"generator\" content=\"WordPress 6.5\" />
<link rel=\"canonical\" href=\"index.html\" />
<link rel='shortlink' href='../index.html@p=192.html' />
<link rel=\"alternate\" type=\"application/json+oembed\" href=\"../wp-json/oembed/1.0/embed@url=https%253A%252F%252Fchoicehorizone.com%252Fservices%252F.html\" />
<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"../wp-json/oembed/1.0/embed@url=https%253A%252F%252Fchoicehorizone.com%252Fservices%252F&amp;format=xml.html\" />
<meta name=\"generator\" content=\"Elementor 3.13.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto\">
<meta name=\"theme-color\" content=\"#FFFFFF\" />
        <link rel=\"shortcut icon\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\" >
\t\t<link rel=\"icon\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\" >
\t\t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\">
        <link rel=\"apple-touch-icon\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\">
        
</head>

<body class=\"page-template-default page page-id-192 wp-embed-responsive  uicore-menu-focus elementor-default elementor-kit-6 elementor-page elementor-page-192\">
\t\t<!-- 1.1 uicore_before_body_content -->\t<div class=\"uicore-body-content\">
\t\t<!-- 1.2 uicore_before_page_content -->\t\t<div id=\"uicore-page\">
\t\t
        <div id=\"wrapper-navbar\" itemscope itemtype=\"http://schema.org/WebSite\" class=\"uicore uicore-navbar elementor-section elementor-section-boxed uicore-h-classic uicore-sticky ui-smart-sticky \"><div class=\"uicore-header-wrapper\">
            <nav class=\"uicore elementor-container\">
            \t\t <div class=\"uicore-branding\">
                
\t\t\t<a href=\"../index.html\" rel=\"home\">
                <img class=\"uicore uicore-logo uicore-main\" src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\"/>
\t\t\t\t<img class=\"uicore uicore-logo uicore-second\" src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t\t<img class=\"uicore uicore-logo uicore-mobile-main\" src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t\t<img class=\"uicore uicore-logo uicore-mobile-second\" src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t</a>

\t\t        </div>
\t\t        <div class='uicore-nav-menu'>
            <div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"../index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"../about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"../faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"../contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
</ul></div><div class=\"uicore uicore-extra\">            <div class=\"uicore-cta-wrapper\">
\t\t\t\t<a href=\"http://accounts.choicehorizone.com\"
\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\tclass=\"uicore-btn uicore-inverted\">
\t\t\t\t\t\tSecure Login\t\t\t\t</a>
            </div>
        </div>        </div>
\t\t            <button type=\"button\" class=\"uicore-toggle uicore-ham\">
                <span class=\"bars\">
                    <span class=\"bar\"></span>
                    <span class=\"bar\"></span>
                    <span class=\"bar\"></span>
                </span>
            </button>
                        </nav>

            </div>
        </div><!-- #wrapper-navbar end -->
        <!-- 1.3 uicore_page -->\t\t\t<div id=\"content\" class=\"uicore-content\">

\t\t\t<!-- 1.4 uicore_before_content --><div id=\"primary\" class=\"content-area\">

\t        <article id=\"post-192\" class=\"post-192 page type-page status-publish hentry\">
            <div class=\"entry-content\">
                \t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"192\" class=\"elementor elementor-192\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-08f353d elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"08f353d\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d4f3e5\" data-id=\"6d4f3e5\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-cdc0578 elementor-widget elementor-widget-bdt-breadcrumbs\" data-id=\"cdc0578\" data-element_type=\"widget\" data-widget_type=\"bdt-breadcrumbs.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<div class='bdt-breadcrumbs-wrapper'><ul class=\"bdt-breadcrumb  breadcrumb-align-center \"><li><a href=\"../index.html\">Horizon</a></li>
<li><span> Services</span></li>
</ul></div>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-2ec350f elementor-widget__width-initial ui-e-a-animate elementor-widget elementor-widget-highlighted-text\" data-id=\"2ec350f\" data-element_type=\"widget\" data-widget_type=\"highlighted-text.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<h1 class=\"ui-e--highlighted-text\">
        <span class=\"ui-e-headline-text\">The only</span> <span class=\"ui-e-headline-text ui-e-headline-stroke1\"><span class=\"ui-e-headline-text ui-e-headline-highlighted\">Banking & Payment</span><span class=\"uicore-svg-wrapper\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 500 150\" preserveAspectRatio=\"none\"><path d='M15.2,133.3L15.2,133.3c121.9-7.6,244-9.9,366.1-6.8c34.6,0.9,69.1,2.3,103.7,4'/></svg></span></span> <span class=\"ui-e-headline-text\">you’ll ever need.</span>         </h1>
        \t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-eafa9ca elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"eafa9ca\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0481863 elementor-invisible\" data-id=\"0481863\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-05c4b16 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"05c4b16\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src\$=\".svg\"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-Hero-Image-2.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9aa9ab9 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"9aa9ab9\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Team-Innovation-Element.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-e310b24 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"e310b24\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-Hero-Image-3.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9c65636 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"9c65636\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-Hero-Image-1.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-e443a34 elementor-widget elementor-widget-spacer\" data-id=\"e443a34\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}</style>\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-96dbb21 elementor-widget elementor-widget-image\" data-id=\"96dbb21\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img fetchpriority=\"high\" decoding=\"async\" width=\"360\" height=\"360\" src=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\" class=\"attachment-full size-full wp-image-105\" alt=\"\" srcset=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png 360w, ../wp-content/uploads/2022/07/Logopit_16575763848961-300x300.png 300w, ../wp-content/uploads/2022/07/Logopit_16575763848961-150x150.png 150w\" sizes=\"(max-width: 360px) 100vw, 360px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4f6f807 elementor-invisible\" data-id=\"4f6f807\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-e49a3e3 elementor-widget elementor-widget-spacer\" data-id=\"e49a3e3\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-587535b elementor-widget__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"587535b\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>\t\t\t\t<p>To become the leading United States of America, technology-driven, global financial institution that provides distinctive range of financial services.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-2619f0a elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"2619f0a\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a82315c\" data-id=\"a82315c\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-1e54344 elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"1e54344\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-1e54344&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:50,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;M+&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-1e54344\" >
\t\t\t\t\t50\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Transactions In a Month                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cd949fc\" data-id=\"cd949fc\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-541de9f elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"541de9f\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-541de9f&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:99,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;%&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-541de9f\" >
\t\t\t\t\t99\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Customer Retention                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5dde072\" data-id=\"5dde072\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-a179684 elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"a179684\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-a179684&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:250,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;%&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-a179684\" >
\t\t\t\t\t250\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Increase in E-mail Signups                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f8b4348\" data-id=\"f8b4348\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-133f0a0 elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"133f0a0\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-133f0a0&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:98,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;%&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-133f0a0\" >
\t\t\t\t\t98\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Positive Feedback                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-1f8b265 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"1f8b265\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f4c959e\" data-id=\"f4c959e\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-0ba7afe elementor-widget elementor-widget-heading\" data-id=\"0ba7afe\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class=\"elementor-heading-title elementor-size-default\">Our mission</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-ff29975 elementor-widget__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"ff29975\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>To build the Horizon brand into a reputable international financial institution recognized for innovation, superior performance and creation of premium value for all stakeholders</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-1de2585 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"1de2585\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-90f61a0 elementor-invisible\" data-id=\"90f61a0\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t<div class=\"elementor-background-overlay\"></div>
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-d2dccc9 elementor-align-left elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-button\" data-id=\"d2dccc9\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"index.html#\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-icon elementor-align-icon-right\">
\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-arrow-right\"></i>\t\t\t</span>
\t\t\t\t\t\t<span class=\"elementor-button-text\">Learn More</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-6cddd81 elementor-position-right bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"6cddd81\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"icon icon-save-money\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tAdvanced Platforms\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Choice Horizon will continue to offer specialised financial services</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7178875 elementor-invisible\" data-id=\"7178875\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t<div class=\"elementor-background-overlay\"></div>
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-40ddb5c elementor-position-right bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"40ddb5c\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"icon icon-money-bag2\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tSeamless Integration\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Choice Horizon will continue to offer specialised financial services</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-0b5bee7 elementor-align-left elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-button\" data-id=\"0b5bee7\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"index.html#\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-icon elementor-align-icon-right\">
\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-arrow-right\"></i>\t\t\t</span>
\t\t\t\t\t\t<span class=\"elementor-button-text\">Learn More</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c1df4e elementor-invisible\" data-id=\"3c1df4e\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t<div class=\"elementor-background-overlay\"></div>
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-651f7ca elementor-position-right bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"651f7ca\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"icon icon-money-3\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tRevenue Multiplier\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Choice Horizon will continue to offer specialised financial services</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-0f5d48a elementor-align-left elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-button\" data-id=\"0f5d48a\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"index.html#\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-icon elementor-align-icon-right\">
\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-arrow-right\"></i>\t\t\t</span>
\t\t\t\t\t\t<span class=\"elementor-button-text\">Learn More</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-915461a elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"915461a\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ff05f7\" data-id=\"8ff05f7\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2ac2126 elementor-widget elementor-widget-heading\" data-id=\"2ac2126\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Used by over 10,000 brands all over the world</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-36b4892 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"36b4892\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-147289c elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"147289c\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e37b80e\" data-id=\"e37b80e\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-b9645c3 elementor-widget elementor-widget-image\" data-id=\"b9645c3\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-1.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c004860\" data-id=\"c004860\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3d00d7a elementor-widget elementor-widget-image\" data-id=\"3d00d7a\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-2.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bcf0634\" data-id=\"bcf0634\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-fb54661 elementor-widget elementor-widget-image\" data-id=\"fb54661\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-3.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-23ea361 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"23ea361\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-46c309d\" data-id=\"46c309d\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-9eed19f elementor-widget elementor-widget-image\" data-id=\"9eed19f\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-4.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-97b25e9\" data-id=\"97b25e9\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-51c646b elementor-widget elementor-widget-image\" data-id=\"51c646b\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-5.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ca5f941\" data-id=\"ca5f941\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-b3de125 elementor-widget elementor-widget-image\" data-id=\"b3de125\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-6.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c83a903 elementor-widget elementor-widget-text-editor\" data-id=\"c83a903\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t&#8230;and many more\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-2ea9462 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"2ea9462\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3cf5def elementor-invisible\" data-id=\"3cf5def\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t<div class=\"elementor-background-overlay\"></div>
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-95d7bb0 elementor-widget elementor-widget-heading\" data-id=\"95d7bb0\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">““For me, becoming isn’t about arriving somewhere or achieving a certain aim. I see it instead as forward motion, a means of evolving, a way to reach continuously toward a better self. The journey doesn’t end.””</h3>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-5e8261e bdt-icon-type-image elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"5e8261e\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"../wp-content/uploads/2022/07/R.jpg\" alt=\"Jason Major\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tJason Major\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>CEO of Choice Horizon LLC.</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-2d75039 elementor-reverse-tablet elementor-reverse-mobile elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"2d75039\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0c77164\" data-id=\"0c77164\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-dae6771 elementor-widget__width-initial elementor-widget elementor-widget-heading\" data-id=\"dae6771\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Interested in developing our products & services?</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d6a742f elementor-widget__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"d6a742f\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon will continue to offer specialised financial services such as Pension Management but would discontinue services in Insurance, Capital Market dealings, Trusteeship, Registrar, Mortgage and financial advisory services in line with its decision to adopt the commercial banking license with international authorisation.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-039eab9 elementor-invisible elementor-widget elementor-widget-button\" data-id=\"039eab9\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"https://accounts.choicehorizone.com\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\">View Available Positions</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-233fa7b\" data-id=\"233fa7b\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2a8a705 elementor-invisible elementor-widget elementor-widget-image\" data-id=\"2a8a705\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-Interested-Image.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-6497b51 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"6497b51\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a4e8518 elementor-invisible\" data-id=\"a4e8518\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-d5212a2 elementor-widget elementor-widget-heading\" data-id=\"d5212a2\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Ready to get started?</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-4c4e847 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor\" data-id=\"4c4e847\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>The Choice Horizon Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d97f268 elementor-align-center elementor-widget elementor-widget-button\" data-id=\"d97f268\" data-element_type=\"widget\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"https://accounts.choicehorizone.com\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\">Sign Up</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t            </div>
        </article>
        
</div><!-- #primary -->


\t</div><!-- #content -->

\t<footer class=\"uicore-footer-wrapper elementor\">        <div class=\"uicore uicore-inner-footer elementor-section elementor-section-boxed \">
            <div class=\"uicore elementor-container four_left_2 \">

            <div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<figure class=\"wp-block-image size-large is-resized\"><img loading=\"lazy\" decoding=\"async\" src=\"../wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png\" alt=\"\" class=\"wp-image-184\" width=\"184\" height=\"60\" srcset=\"../wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png 1024w, ../wp-content/uploads/2022/07/Logopit_1657607749541-300x100.png 300w, ../wp-content/uploads/2022/07/Logopit_1657607749541-768x256.png 768w, ../wp-content/uploads/2022/07/Logopit_1657607749541-1536x512.png 1536w, ../wp-content/uploads/2022/07/Logopit_1657607749541-2048x683.png 2048w, ../wp-content/uploads/2022/07/Logopit_1657607749541-650x217.png 650w\" sizes=\"(max-width: 184px) 100vw, 184px\" /></figure>



<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<p>Flexible and secure checking accounts are the cornerstone of our community banking philosophy. With numerous account options and plenty of local banking experts, you can be sure your money will be well looked after. Get started today and never look back.</p>
</div></div>
</div></div>
</div></div>
</div></div>
</div><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\"></div></div>
</div><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\"></div></div>
</div></div><div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<h4 class=\"wp-block-heading\">Resources</h4>



<p><a href=\"index.html#\">Services</a></p>



<p><a href=\"index.html#\">Fintech Services</a></p>



<p><a href=\"index.html#\">About Us</a></p>
</div></div>
</div><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\"></div></div>
</div></div><div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<h4 class=\"wp-block-heading\">Company</h4>



<p><a href=\"index.html#\">Contact &amp; Support</a></p>



<p><a href=\"index.html#\">Success History</a></p>



<p><a href=\"index.html#\">Setting &amp; Privacy</a></p>
</div></div>
</div><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\"></div></div>
</div></div><div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<h4 class=\"wp-block-heading\">Contact Us</h4>



<p><a href=\"index.html#\">Location</a></p>



<p><a href=\"index.html#\">Email</a></p>



<p><a href=\"index.html#\">Telephone</a></p>
</div></div>
</div></div>            </div>
        </div>
        

        <div class=\"uicore uicore-copyrights elementor-section elementor-section-boxed \">
            <div class=\"uicore elementor-container\">
                <div class=\"uicore-copyrights-wrapper\">
                    <div class=\"uicore-copy-content uicore-animate \">
                    <p data-pm-slice=\"1 1 [&quot;bulletList&quot;,null,&quot;listItem&quot;,null]\">© 2024 Made with <a href=\"https://emojis.wiki/red-heart/\" data-mce-href=\"https://emojis.wiki/red-heart/\"><img data-mce-resize=\"false\" data-mce-placeholder=\"1\" data-wp-emoji=\"1\" class=\"emoji\" alt=\"❤️\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg\" data-mce-src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg\">️</a> from Ocean Sys for Choice Horizon LLC. All Rights Reserved.</p>                    </div>
                    <div class=\"uicore-copy-socials uicore-animate\"><a class=\"uicore-social-icon uicore-link social_fb\" href=\"index.html#\" target=\"_blank\" aria-label=\"Facebook\"></a><a class=\"uicore-social-icon uicore-link social_tw\" href=\"index.html#\" target=\"_blank\" aria-label=\"Tweeter\"></a><a class=\"uicore-social-icon uicore-link social_in\" href=\"index.html#\" target=\"_blank\" aria-label=\"Instagram\"></a><a class=\"uicore-social-icon uicore-link social_th\" href=\"index.html#\" target=\"_blank\" aria-label=\"Twitch\"></a></div>                </div>
            </div>
        </div>

    </footer><!-- 1.5 uicore_content_end -->
</div><!-- #page -->

<div id=\"uicore-back-to-top\" class=\"uicore-back-to-top uicore-i-arrow\"></div>        <div class=\"uicore-navigation-wrapper uicore-navbar elementor-section elementor-section-boxed uicore-mobile-menu-wrapper
                \">
\t\t\t<nav class=\"uicore elementor-container\">
\t\t\t\t<div class=\"uicore-branding uicore-mobile\">
                \t\t\t\t\t<a href=\"../index.html\" rel=\"home\">
\t\t\t\t\t\t<img class=\"uicore uicore-logo\"  src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\"/>
\t\t\t\t\t</a>
                \t\t\t\t</div>


                <div class=\"uicore-branding uicore-desktop\">
                \t\t\t\t</div>


\t\t\t\t<button type=\"button\" class=\"uicore-toggle uicore-ham\">
\t\t\t\t\t<span class=\"bars\">
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t</nav>
\t\t\t<div class=\"uicore-navigation-content\">
\t\t\t\t<div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"../index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"../about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"../faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"../contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
</ul></div><div class=\"uicore uicore-extra\">            <div class=\"uicore-cta-wrapper\">
\t\t\t\t<a href=\"http://accounts.choicehorizone.com\"
\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\tclass=\"uicore-btn uicore-inverted\">
\t\t\t\t\t\tSecure Login\t\t\t\t</a>
            </div>
        </div>\t\t\t</div>
\t\t</div>
\t\t<!-- 1.6 uicore_body_end --></div>
<!-- 1.7 uicore_after_body_content --><script> 
var uicore_frontend = {'back':'Back'};
 console.log( 'Using Level v.1.0.0');
 console.log( 'Powered By UiCore Framework v.3.2.1');
 </script> 
<!--Start of Tawk.to Script (0.7.2)-->
<script id=\"tawk-script\" type=\"text/javascript\">
var Tawk_API = Tawk_API || {};
var Tawk_LoadStart=new Date();
(function(){
\tvar s1 = document.createElement( 'script' ),s0=document.getElementsByTagName( 'script' )[0];
\ts1.async = true;
\ts1.src = 'https://embed.tawk.to/64ac5e33cc26a871b02790eb/1h50kvvns';
\ts1.charset = 'UTF-8';
\ts1.setAttribute( 'crossorigin','*' );
\ts0.parentNode.insertBefore( s1, s0 );
})();
</script>
<!--End of Tawk.to Script (0.7.2)-->
<link rel='stylesheet' id='ep-breadcrumbs-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/ep-breadcrumbs.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-advanced-counter-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-counter.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-advanced-icon-box-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-icon-box.css@ver=5.15.2.css' media='all' />
<script src=\"../wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js@ver=2.8.5\" id=\"elementskit-framework-js-frontend-js\"></script>
<script id=\"elementskit-framework-js-frontend-js-after\">
\t\tvar elementskit = {
\t\t\tresturl: 'https://choicehorizone.com/wp-json/elementskit/v1/',
\t\t}

\t\t
</script>
<script src=\"../wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js@ver=2.8.5\" id=\"ekit-widget-scripts-js\"></script>
<script src=\"../wp-content/uploads/uicore-global.js@ver=7795\" id=\"uicore_global-js\"></script>
<script src=\"../wp-content/plugins/bdthemes-element-pack/assets/vendor/js/countUp.min.js@ver=2.0.4\" id=\"advanced-counter-js\"></script>
<script id=\"bdt-uikit-js-extra\">
var element_pack_ajax_login_config = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"language\":\"en\",\"loadingmessage\":\"Sending user info, please wait...\",\"unknownerror\":\"Unknown error, make sure access is correct!\"};
var ElementPackConfig = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"5a0d3f4c6e\",\"data_table\":{\"language\":{\"lengthMenu\":\"Show _MENU_ Entries\",\"info\":\"Showing _START_ to _END_ of _TOTAL_ entries\",\"search\":\"Search :\",\"paginate\":{\"previous\":\"Previous\",\"next\":\"Next\"}}},\"contact_form\":{\"sending_msg\":\"Sending message please wait...\",\"captcha_nd\":\"Invisible captcha not defined!\",\"captcha_nr\":\"Could not get invisible captcha response!\"},\"mailchimp\":{\"subscribing\":\"Subscribing you please wait...\"},\"elements_data\":{\"sections\":[],\"columns\":[],\"widgets\":[]}};
</script>
<script src=\"../wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min.js@ver=3.7.2\" id=\"bdt-uikit-js\"></script>
<script src=\"../wp-content/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.13.2\" id=\"elementor-webpack-runtime-js\"></script>
<script src=\"../wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.13.2\" id=\"elementor-frontend-modules-js\"></script>
<script src=\"../wp-includes/js/jquery/ui/core.min.js@ver=1.13.2\" id=\"jquery-ui-core-js\"></script>
<script id=\"elementor-frontend-js-before\">
var elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false,\"isScriptDebug\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"download\":\"Download\",\"downloadImage\":\"Download image\",\"fullscreen\":\"Fullscreen\",\"zoom\":\"Zoom\",\"share\":\"Share\",\"playVideo\":\"Play Video\",\"previous\":\"Previous\",\"next\":\"Next\",\"close\":\"Close\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"responsive\":{\"breakpoints\":{\"mobile\":{\"label\":\"Mobile Portrait\",\"value\":767,\"default_value\":767,\"direction\":\"max\",\"is_enabled\":true},\"mobile_extra\":{\"label\":\"Mobile Landscape\",\"value\":880,\"default_value\":880,\"direction\":\"max\",\"is_enabled\":false},\"tablet\":{\"label\":\"Tablet Portrait\",\"value\":1024,\"default_value\":1024,\"direction\":\"max\",\"is_enabled\":true},\"tablet_extra\":{\"label\":\"Tablet Landscape\",\"value\":1200,\"default_value\":1200,\"direction\":\"max\",\"is_enabled\":false},\"laptop\":{\"label\":\"Laptop\",\"value\":1366,\"default_value\":1366,\"direction\":\"max\",\"is_enabled\":false},\"widescreen\":{\"label\":\"Widescreen\",\"value\":2400,\"default_value\":2400,\"direction\":\"min\",\"is_enabled\":false}}},\"version\":\"3.13.2\",\"is_static\":false,\"experimentalFeatures\":{\"e_dom_optimization\":true,\"e_optimized_assets_loading\":true,\"e_optimized_css_loading\":true,\"a11y_improvements\":true,\"additional_custom_breakpoints\":true,\"landing-pages\":true},\"urls\":{\"assets\":\"https:\\/\\/choicehorizone.com\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"swiperClass\":\"swiper-container\",\"settings\":{\"page\":[],\"editorPreferences\":[]},\"kit\":{\"active_breakpoints\":[\"viewport_mobile\",\"viewport_tablet\"],\"global_image_lightbox\":\"yes\",\"lightbox_enable_counter\":\"yes\",\"lightbox_enable_fullscreen\":\"yes\",\"lightbox_enable_zoom\":\"yes\",\"lightbox_enable_share\":\"yes\",\"lightbox_title_src\":\"title\",\"lightbox_description_src\":\"description\"},\"post\":{\"id\":192,\"title\":\"Services%20%E2%80%93%20Horizon\",\"excerpt\":\"\",\"featuredImage\":false}};
</script>
<script src=\"../wp-content/plugins/elementor/assets/js/frontend.min.js@ver=3.13.2\" id=\"elementor-frontend-js\"></script>
<script src=\"../wp-content/plugins/bdthemes-element-pack/assets/js/element-pack-site.min.js@ver=5.15.2\" id=\"element-pack-site-js\"></script>
<script src=\"../wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js@ver=2.8.5\" id=\"animate-circle-js\"></script>
<script id=\"elementskit-elementor-js-extra\">
var ekit_config = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"e0a234a04f\"};
</script>
<script src=\"../wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js@ver=2.8.5\" id=\"elementskit-elementor-js\"></script>
<script src=\"../wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js@ver=2.8.5\" id=\"swiper-js\"></script>
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
        return "choicehorizone.com/services/index.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html lang=\"en-US\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">

\t<title>Services &#8211; Horizon</title>
<meta name='robots' content='noindex, nofollow' />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Feed\" href=\"../feed/index.html\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Comments Feed\" href=\"../comments/feed/index.html\" />
<script>
window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/choicehorizone.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=6.5\"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case\"flag\":return n(e,\"\\ud83c\\udff3\\ufe0f\\u200d\\u26a7\\ufe0f\",\"\\ud83c\\udff3\\ufe0f\\u200b\\u26a7\\ufe0f\")?!1:!n(e,\"\\ud83c\\uddfa\\ud83c\\uddf3\",\"\\ud83c\\uddfa\\u200b\\ud83c\\uddf3\")&&!n(e,\"\\ud83c\\udff4\\udb40\\udc67\\udb40\\udc62\\udb40\\udc65\\udb40\\udc6e\\udb40\\udc67\\udb40\\udc7f\",\"\\ud83c\\udff4\\u200b\\udb40\\udc67\\u200b\\udb40\\udc62\\u200b\\udb40\\udc65\\u200b\\udb40\\udc6e\\u200b\\udb40\\udc67\\u200b\\udb40\\udc7f\");case\"emoji\":return!n(e,\"\\ud83d\\udc26\\u200d\\u2b1b\",\"\\ud83d\\udc26\\u200b\\u2b1b\")}return!1}function f(e,t,n){var r=\"undefined\"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement(\"canvas\"),a=r.getContext(\"2d\",{willReadFrequently:!0}),o=(a.textBaseline=\"top\",a.font=\"600 32px Arial\",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement(\"script\");t.src=e,t.defer=!0,i.head.appendChild(t)}\"undefined\"!=typeof Promise&&(o=\"wpEmojiSettingsSupports\",s=[\"flag\",\"emoji\"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener(\"DOMContentLoaded\",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if(\"object\"==typeof e&&\"number\"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&\"object\"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if(\"undefined\"!=typeof Worker&&\"undefined\"!=typeof OffscreenCanvas&&\"undefined\"!=typeof URL&&URL.createObjectURL&&\"undefined\"!=typeof Blob)try{var e=\"postMessage(\"+f.toString()+\"(\"+[JSON.stringify(s),u.toString(),p.toString()].join(\",\")+\"));\",r=new Blob([e],{type:\"text/javascript\"}),a=new Worker(URL.createObjectURL(r),{name:\"wpTestEmojiSupports\"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],\"flag\"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<link rel='stylesheet' id='bdt-uikit-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css@ver=3.7.2.css' media='all' />
<link rel='stylesheet' id='element-pack-site-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/element-pack-site.css@ver=5.15.2.css' media='all' />
<style id='wp-emoji-styles-inline-css'>

\timg.wp-smiley, img.emoji {
\t\tdisplay: inline !important;
\t\tborder: none !important;
\t\tbox-shadow: none !important;
\t\theight: 1em !important;
\t\twidth: 1em !important;
\t\tmargin: 0 0.07em !important;
\t\tvertical-align: -0.1em !important;
\t\tbackground: none !important;
\t\tpadding: 0 !important;
\t}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='../wp-includes/css/dist/block-library/style.min.css@ver=6.5.css' media='all' />
<style id='classic-theme-styles-inline-css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='elementor-icons-ekiticons-css' href='../wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css@ver=5.20.0.css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='../wp-content/plugins/elementor/assets/css/frontend-lite.min.css@ver=3.13.2.css' media='all' />
<link rel='stylesheet' id='swiper-css' href='../wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css@ver=5.3.6.css' media='all' />
<link rel='stylesheet' id='elementor-post-192-css' href='../wp-content/uploads/elementor/css/post-192.css@ver=1684328299.css' media='all' />
<link rel='stylesheet' id='uicore_global-css' href='../wp-content/uploads/uicore-global.css@ver=7795.css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-css' href='../wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='ekit-responsive-css' href='../wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Heebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css@ver=5.15.3.css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css@ver=5.15.3.css' media='all' />
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin><script src=\"../wp-includes/js/jquery/jquery.min.js@ver=3.7.1\" id=\"jquery-core-js\"></script>
<script src=\"../wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.1\" id=\"jquery-migrate-js\"></script>
<link rel=\"https://api.w.org/\" href=\"../wp-json/index.html\" /><link rel=\"alternate\" type=\"application/json\" href=\"../wp-json/wp/v2/pages/192.html\" /><link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"../xmlrpc.php@rsd.html\" />
<meta name=\"generator\" content=\"WordPress 6.5\" />
<link rel=\"canonical\" href=\"index.html\" />
<link rel='shortlink' href='../index.html@p=192.html' />
<link rel=\"alternate\" type=\"application/json+oembed\" href=\"../wp-json/oembed/1.0/embed@url=https%253A%252F%252Fchoicehorizone.com%252Fservices%252F.html\" />
<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"../wp-json/oembed/1.0/embed@url=https%253A%252F%252Fchoicehorizone.com%252Fservices%252F&amp;format=xml.html\" />
<meta name=\"generator\" content=\"Elementor 3.13.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto\">
<meta name=\"theme-color\" content=\"#FFFFFF\" />
        <link rel=\"shortcut icon\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\" >
\t\t<link rel=\"icon\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\" >
\t\t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\">
        <link rel=\"apple-touch-icon\" href=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\">
        
</head>

<body class=\"page-template-default page page-id-192 wp-embed-responsive  uicore-menu-focus elementor-default elementor-kit-6 elementor-page elementor-page-192\">
\t\t<!-- 1.1 uicore_before_body_content -->\t<div class=\"uicore-body-content\">
\t\t<!-- 1.2 uicore_before_page_content -->\t\t<div id=\"uicore-page\">
\t\t
        <div id=\"wrapper-navbar\" itemscope itemtype=\"http://schema.org/WebSite\" class=\"uicore uicore-navbar elementor-section elementor-section-boxed uicore-h-classic uicore-sticky ui-smart-sticky \"><div class=\"uicore-header-wrapper\">
            <nav class=\"uicore elementor-container\">
            \t\t <div class=\"uicore-branding\">
                
\t\t\t<a href=\"../index.html\" rel=\"home\">
                <img class=\"uicore uicore-logo uicore-main\" src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\"/>
\t\t\t\t<img class=\"uicore uicore-logo uicore-second\" src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t\t<img class=\"uicore uicore-logo uicore-mobile-main\" src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t\t<img class=\"uicore uicore-logo uicore-mobile-second\" src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t</a>

\t\t        </div>
\t\t        <div class='uicore-nav-menu'>
            <div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"../index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"../about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"../faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"../contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
</ul></div><div class=\"uicore uicore-extra\">            <div class=\"uicore-cta-wrapper\">
\t\t\t\t<a href=\"http://accounts.choicehorizone.com\"
\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\tclass=\"uicore-btn uicore-inverted\">
\t\t\t\t\t\tSecure Login\t\t\t\t</a>
            </div>
        </div>        </div>
\t\t            <button type=\"button\" class=\"uicore-toggle uicore-ham\">
                <span class=\"bars\">
                    <span class=\"bar\"></span>
                    <span class=\"bar\"></span>
                    <span class=\"bar\"></span>
                </span>
            </button>
                        </nav>

            </div>
        </div><!-- #wrapper-navbar end -->
        <!-- 1.3 uicore_page -->\t\t\t<div id=\"content\" class=\"uicore-content\">

\t\t\t<!-- 1.4 uicore_before_content --><div id=\"primary\" class=\"content-area\">

\t        <article id=\"post-192\" class=\"post-192 page type-page status-publish hentry\">
            <div class=\"entry-content\">
                \t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"192\" class=\"elementor elementor-192\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-08f353d elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"08f353d\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d4f3e5\" data-id=\"6d4f3e5\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-cdc0578 elementor-widget elementor-widget-bdt-breadcrumbs\" data-id=\"cdc0578\" data-element_type=\"widget\" data-widget_type=\"bdt-breadcrumbs.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<div class='bdt-breadcrumbs-wrapper'><ul class=\"bdt-breadcrumb  breadcrumb-align-center \"><li><a href=\"../index.html\">Horizon</a></li>
<li><span> Services</span></li>
</ul></div>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-2ec350f elementor-widget__width-initial ui-e-a-animate elementor-widget elementor-widget-highlighted-text\" data-id=\"2ec350f\" data-element_type=\"widget\" data-widget_type=\"highlighted-text.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<h1 class=\"ui-e--highlighted-text\">
        <span class=\"ui-e-headline-text\">The only</span> <span class=\"ui-e-headline-text ui-e-headline-stroke1\"><span class=\"ui-e-headline-text ui-e-headline-highlighted\">Banking & Payment</span><span class=\"uicore-svg-wrapper\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 500 150\" preserveAspectRatio=\"none\"><path d='M15.2,133.3L15.2,133.3c121.9-7.6,244-9.9,366.1-6.8c34.6,0.9,69.1,2.3,103.7,4'/></svg></span></span> <span class=\"ui-e-headline-text\">you’ll ever need.</span>         </h1>
        \t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-eafa9ca elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"eafa9ca\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0481863 elementor-invisible\" data-id=\"0481863\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-05c4b16 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"05c4b16\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src\$=\".svg\"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-Hero-Image-2.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9aa9ab9 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"9aa9ab9\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Team-Innovation-Element.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-e310b24 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"e310b24\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-Hero-Image-3.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9c65636 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"9c65636\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-Hero-Image-1.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-e443a34 elementor-widget elementor-widget-spacer\" data-id=\"e443a34\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}</style>\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-96dbb21 elementor-widget elementor-widget-image\" data-id=\"96dbb21\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img fetchpriority=\"high\" decoding=\"async\" width=\"360\" height=\"360\" src=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png\" class=\"attachment-full size-full wp-image-105\" alt=\"\" srcset=\"../wp-content/uploads/2022/07/Logopit_16575763848961.png 360w, ../wp-content/uploads/2022/07/Logopit_16575763848961-300x300.png 300w, ../wp-content/uploads/2022/07/Logopit_16575763848961-150x150.png 150w\" sizes=\"(max-width: 360px) 100vw, 360px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4f6f807 elementor-invisible\" data-id=\"4f6f807\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-e49a3e3 elementor-widget elementor-widget-spacer\" data-id=\"e49a3e3\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-587535b elementor-widget__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"587535b\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>\t\t\t\t<p>To become the leading United States of America, technology-driven, global financial institution that provides distinctive range of financial services.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-2619f0a elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"2619f0a\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a82315c\" data-id=\"a82315c\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-1e54344 elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"1e54344\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-1e54344&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:50,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;M+&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-1e54344\" >
\t\t\t\t\t50\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Transactions In a Month                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cd949fc\" data-id=\"cd949fc\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-541de9f elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"541de9f\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-541de9f&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:99,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;%&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-541de9f\" >
\t\t\t\t\t99\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Customer Retention                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5dde072\" data-id=\"5dde072\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-a179684 elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"a179684\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-a179684&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:250,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;%&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-a179684\" >
\t\t\t\t\t250\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Increase in E-mail Signups                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f8b4348\" data-id=\"f8b4348\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-133f0a0 elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"133f0a0\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-133f0a0&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:98,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;%&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-133f0a0\" >
\t\t\t\t\t98\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Positive Feedback                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-1f8b265 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"1f8b265\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f4c959e\" data-id=\"f4c959e\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-0ba7afe elementor-widget elementor-widget-heading\" data-id=\"0ba7afe\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class=\"elementor-heading-title elementor-size-default\">Our mission</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-ff29975 elementor-widget__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"ff29975\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>To build the Horizon brand into a reputable international financial institution recognized for innovation, superior performance and creation of premium value for all stakeholders</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-1de2585 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"1de2585\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-90f61a0 elementor-invisible\" data-id=\"90f61a0\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t<div class=\"elementor-background-overlay\"></div>
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-d2dccc9 elementor-align-left elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-button\" data-id=\"d2dccc9\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"index.html#\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-icon elementor-align-icon-right\">
\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-arrow-right\"></i>\t\t\t</span>
\t\t\t\t\t\t<span class=\"elementor-button-text\">Learn More</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-6cddd81 elementor-position-right bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"6cddd81\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"icon icon-save-money\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tAdvanced Platforms\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Choice Horizon will continue to offer specialised financial services</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7178875 elementor-invisible\" data-id=\"7178875\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t<div class=\"elementor-background-overlay\"></div>
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-40ddb5c elementor-position-right bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"40ddb5c\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"icon icon-money-bag2\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tSeamless Integration\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Choice Horizon will continue to offer specialised financial services</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-0b5bee7 elementor-align-left elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-button\" data-id=\"0b5bee7\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"index.html#\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-icon elementor-align-icon-right\">
\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-arrow-right\"></i>\t\t\t</span>
\t\t\t\t\t\t<span class=\"elementor-button-text\">Learn More</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c1df4e elementor-invisible\" data-id=\"3c1df4e\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t<div class=\"elementor-background-overlay\"></div>
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-651f7ca elementor-position-right bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"651f7ca\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"icon icon-money-3\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tRevenue Multiplier\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Choice Horizon will continue to offer specialised financial services</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-0f5d48a elementor-align-left elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-button\" data-id=\"0f5d48a\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"index.html#\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t\t<span class=\"elementor-button-icon elementor-align-icon-right\">
\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-arrow-right\"></i>\t\t\t</span>
\t\t\t\t\t\t<span class=\"elementor-button-text\">Learn More</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-915461a elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"915461a\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ff05f7\" data-id=\"8ff05f7\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2ac2126 elementor-widget elementor-widget-heading\" data-id=\"2ac2126\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Used by over 10,000 brands all over the world</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-36b4892 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"36b4892\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-147289c elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"147289c\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e37b80e\" data-id=\"e37b80e\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-b9645c3 elementor-widget elementor-widget-image\" data-id=\"b9645c3\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-1.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c004860\" data-id=\"c004860\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3d00d7a elementor-widget elementor-widget-image\" data-id=\"3d00d7a\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-2.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bcf0634\" data-id=\"bcf0634\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-fb54661 elementor-widget elementor-widget-image\" data-id=\"fb54661\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-3.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-23ea361 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"23ea361\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-46c309d\" data-id=\"46c309d\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-9eed19f elementor-widget elementor-widget-image\" data-id=\"9eed19f\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-4.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-97b25e9\" data-id=\"97b25e9\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-51c646b elementor-widget elementor-widget-image\" data-id=\"51c646b\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-5.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ca5f941\" data-id=\"ca5f941\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-b3de125 elementor-widget elementor-widget-image\" data-id=\"b3de125\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-logo-6.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c83a903 elementor-widget elementor-widget-text-editor\" data-id=\"c83a903\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t&#8230;and many more\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-2ea9462 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"2ea9462\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3cf5def elementor-invisible\" data-id=\"3cf5def\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t<div class=\"elementor-background-overlay\"></div>
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-95d7bb0 elementor-widget elementor-widget-heading\" data-id=\"95d7bb0\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">““For me, becoming isn’t about arriving somewhere or achieving a certain aim. I see it instead as forward motion, a means of evolving, a way to reach continuously toward a better self. The journey doesn’t end.””</h3>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-5e8261e bdt-icon-type-image elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"5e8261e\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"../wp-content/uploads/2022/07/R.jpg\" alt=\"Jason Major\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tJason Major\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>CEO of Choice Horizon LLC.</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-2d75039 elementor-reverse-tablet elementor-reverse-mobile elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"2d75039\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0c77164\" data-id=\"0c77164\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-dae6771 elementor-widget__width-initial elementor-widget elementor-widget-heading\" data-id=\"dae6771\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Interested in developing our products & services?</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d6a742f elementor-widget__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"d6a742f\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon will continue to offer specialised financial services such as Pension Management but would discontinue services in Insurance, Capital Market dealings, Trusteeship, Registrar, Mortgage and financial advisory services in line with its decision to adopt the commercial banking license with international authorisation.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-039eab9 elementor-invisible elementor-widget elementor-widget-button\" data-id=\"039eab9\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"https://accounts.choicehorizone.com\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\">View Available Positions</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-233fa7b\" data-id=\"233fa7b\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2a8a705 elementor-invisible elementor-widget elementor-widget-image\" data-id=\"2a8a705\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Pages-Interested-Image.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-6497b51 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"6497b51\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a4e8518 elementor-invisible\" data-id=\"a4e8518\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-d5212a2 elementor-widget elementor-widget-heading\" data-id=\"d5212a2\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Ready to get started?</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-4c4e847 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor\" data-id=\"4c4e847\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>The Choice Horizon Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d97f268 elementor-align-center elementor-widget elementor-widget-button\" data-id=\"d97f268\" data-element_type=\"widget\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"https://accounts.choicehorizone.com\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\">Sign Up</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t            </div>
        </article>
        
</div><!-- #primary -->


\t</div><!-- #content -->

\t<footer class=\"uicore-footer-wrapper elementor\">        <div class=\"uicore uicore-inner-footer elementor-section elementor-section-boxed \">
            <div class=\"uicore elementor-container four_left_2 \">

            <div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<figure class=\"wp-block-image size-large is-resized\"><img loading=\"lazy\" decoding=\"async\" src=\"../wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png\" alt=\"\" class=\"wp-image-184\" width=\"184\" height=\"60\" srcset=\"../wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png 1024w, ../wp-content/uploads/2022/07/Logopit_1657607749541-300x100.png 300w, ../wp-content/uploads/2022/07/Logopit_1657607749541-768x256.png 768w, ../wp-content/uploads/2022/07/Logopit_1657607749541-1536x512.png 1536w, ../wp-content/uploads/2022/07/Logopit_1657607749541-2048x683.png 2048w, ../wp-content/uploads/2022/07/Logopit_1657607749541-650x217.png 650w\" sizes=\"(max-width: 184px) 100vw, 184px\" /></figure>



<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<p>Flexible and secure checking accounts are the cornerstone of our community banking philosophy. With numerous account options and plenty of local banking experts, you can be sure your money will be well looked after. Get started today and never look back.</p>
</div></div>
</div></div>
</div></div>
</div></div>
</div><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\"></div></div>
</div><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\"></div></div>
</div></div><div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<h4 class=\"wp-block-heading\">Resources</h4>



<p><a href=\"index.html#\">Services</a></p>



<p><a href=\"index.html#\">Fintech Services</a></p>



<p><a href=\"index.html#\">About Us</a></p>
</div></div>
</div><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\"></div></div>
</div></div><div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<h4 class=\"wp-block-heading\">Company</h4>



<p><a href=\"index.html#\">Contact &amp; Support</a></p>



<p><a href=\"index.html#\">Success History</a></p>



<p><a href=\"index.html#\">Setting &amp; Privacy</a></p>
</div></div>
</div><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\"></div></div>
</div></div><div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<h4 class=\"wp-block-heading\">Contact Us</h4>



<p><a href=\"index.html#\">Location</a></p>



<p><a href=\"index.html#\">Email</a></p>



<p><a href=\"index.html#\">Telephone</a></p>
</div></div>
</div></div>            </div>
        </div>
        

        <div class=\"uicore uicore-copyrights elementor-section elementor-section-boxed \">
            <div class=\"uicore elementor-container\">
                <div class=\"uicore-copyrights-wrapper\">
                    <div class=\"uicore-copy-content uicore-animate \">
                    <p data-pm-slice=\"1 1 [&quot;bulletList&quot;,null,&quot;listItem&quot;,null]\">© 2024 Made with <a href=\"https://emojis.wiki/red-heart/\" data-mce-href=\"https://emojis.wiki/red-heart/\"><img data-mce-resize=\"false\" data-mce-placeholder=\"1\" data-wp-emoji=\"1\" class=\"emoji\" alt=\"❤️\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg\" data-mce-src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg\">️</a> from Ocean Sys for Choice Horizon LLC. All Rights Reserved.</p>                    </div>
                    <div class=\"uicore-copy-socials uicore-animate\"><a class=\"uicore-social-icon uicore-link social_fb\" href=\"index.html#\" target=\"_blank\" aria-label=\"Facebook\"></a><a class=\"uicore-social-icon uicore-link social_tw\" href=\"index.html#\" target=\"_blank\" aria-label=\"Tweeter\"></a><a class=\"uicore-social-icon uicore-link social_in\" href=\"index.html#\" target=\"_blank\" aria-label=\"Instagram\"></a><a class=\"uicore-social-icon uicore-link social_th\" href=\"index.html#\" target=\"_blank\" aria-label=\"Twitch\"></a></div>                </div>
            </div>
        </div>

    </footer><!-- 1.5 uicore_content_end -->
</div><!-- #page -->

<div id=\"uicore-back-to-top\" class=\"uicore-back-to-top uicore-i-arrow\"></div>        <div class=\"uicore-navigation-wrapper uicore-navbar elementor-section elementor-section-boxed uicore-mobile-menu-wrapper
                \">
\t\t\t<nav class=\"uicore elementor-container\">
\t\t\t\t<div class=\"uicore-branding uicore-mobile\">
                \t\t\t\t\t<a href=\"../index.html\" rel=\"home\">
\t\t\t\t\t\t<img class=\"uicore uicore-logo\"  src=\"../wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\"/>
\t\t\t\t\t</a>
                \t\t\t\t</div>


                <div class=\"uicore-branding uicore-desktop\">
                \t\t\t\t</div>


\t\t\t\t<button type=\"button\" class=\"uicore-toggle uicore-ham\">
\t\t\t\t\t<span class=\"bars\">
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t\t<span class=\"bar\"></span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t</nav>
\t\t\t<div class=\"uicore-navigation-content\">
\t\t\t\t<div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"../index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"../about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"../faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"../contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
</ul></div><div class=\"uicore uicore-extra\">            <div class=\"uicore-cta-wrapper\">
\t\t\t\t<a href=\"http://accounts.choicehorizone.com\"
\t\t\t\t\ttarget=\"_self\"
\t\t\t\t\tclass=\"uicore-btn uicore-inverted\">
\t\t\t\t\t\tSecure Login\t\t\t\t</a>
            </div>
        </div>\t\t\t</div>
\t\t</div>
\t\t<!-- 1.6 uicore_body_end --></div>
<!-- 1.7 uicore_after_body_content --><script> 
var uicore_frontend = {'back':'Back'};
 console.log( 'Using Level v.1.0.0');
 console.log( 'Powered By UiCore Framework v.3.2.1');
 </script> 
<!--Start of Tawk.to Script (0.7.2)-->
<script id=\"tawk-script\" type=\"text/javascript\">
var Tawk_API = Tawk_API || {};
var Tawk_LoadStart=new Date();
(function(){
\tvar s1 = document.createElement( 'script' ),s0=document.getElementsByTagName( 'script' )[0];
\ts1.async = true;
\ts1.src = 'https://embed.tawk.to/64ac5e33cc26a871b02790eb/1h50kvvns';
\ts1.charset = 'UTF-8';
\ts1.setAttribute( 'crossorigin','*' );
\ts0.parentNode.insertBefore( s1, s0 );
})();
</script>
<!--End of Tawk.to Script (0.7.2)-->
<link rel='stylesheet' id='ep-breadcrumbs-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/ep-breadcrumbs.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-advanced-counter-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-counter.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-advanced-icon-box-css' href='../wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-icon-box.css@ver=5.15.2.css' media='all' />
<script src=\"../wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js@ver=2.8.5\" id=\"elementskit-framework-js-frontend-js\"></script>
<script id=\"elementskit-framework-js-frontend-js-after\">
\t\tvar elementskit = {
\t\t\tresturl: 'https://choicehorizone.com/wp-json/elementskit/v1/',
\t\t}

\t\t
</script>
<script src=\"../wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js@ver=2.8.5\" id=\"ekit-widget-scripts-js\"></script>
<script src=\"../wp-content/uploads/uicore-global.js@ver=7795\" id=\"uicore_global-js\"></script>
<script src=\"../wp-content/plugins/bdthemes-element-pack/assets/vendor/js/countUp.min.js@ver=2.0.4\" id=\"advanced-counter-js\"></script>
<script id=\"bdt-uikit-js-extra\">
var element_pack_ajax_login_config = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"language\":\"en\",\"loadingmessage\":\"Sending user info, please wait...\",\"unknownerror\":\"Unknown error, make sure access is correct!\"};
var ElementPackConfig = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"5a0d3f4c6e\",\"data_table\":{\"language\":{\"lengthMenu\":\"Show _MENU_ Entries\",\"info\":\"Showing _START_ to _END_ of _TOTAL_ entries\",\"search\":\"Search :\",\"paginate\":{\"previous\":\"Previous\",\"next\":\"Next\"}}},\"contact_form\":{\"sending_msg\":\"Sending message please wait...\",\"captcha_nd\":\"Invisible captcha not defined!\",\"captcha_nr\":\"Could not get invisible captcha response!\"},\"mailchimp\":{\"subscribing\":\"Subscribing you please wait...\"},\"elements_data\":{\"sections\":[],\"columns\":[],\"widgets\":[]}};
</script>
<script src=\"../wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min.js@ver=3.7.2\" id=\"bdt-uikit-js\"></script>
<script src=\"../wp-content/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.13.2\" id=\"elementor-webpack-runtime-js\"></script>
<script src=\"../wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.13.2\" id=\"elementor-frontend-modules-js\"></script>
<script src=\"../wp-includes/js/jquery/ui/core.min.js@ver=1.13.2\" id=\"jquery-ui-core-js\"></script>
<script id=\"elementor-frontend-js-before\">
var elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false,\"isScriptDebug\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"download\":\"Download\",\"downloadImage\":\"Download image\",\"fullscreen\":\"Fullscreen\",\"zoom\":\"Zoom\",\"share\":\"Share\",\"playVideo\":\"Play Video\",\"previous\":\"Previous\",\"next\":\"Next\",\"close\":\"Close\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"responsive\":{\"breakpoints\":{\"mobile\":{\"label\":\"Mobile Portrait\",\"value\":767,\"default_value\":767,\"direction\":\"max\",\"is_enabled\":true},\"mobile_extra\":{\"label\":\"Mobile Landscape\",\"value\":880,\"default_value\":880,\"direction\":\"max\",\"is_enabled\":false},\"tablet\":{\"label\":\"Tablet Portrait\",\"value\":1024,\"default_value\":1024,\"direction\":\"max\",\"is_enabled\":true},\"tablet_extra\":{\"label\":\"Tablet Landscape\",\"value\":1200,\"default_value\":1200,\"direction\":\"max\",\"is_enabled\":false},\"laptop\":{\"label\":\"Laptop\",\"value\":1366,\"default_value\":1366,\"direction\":\"max\",\"is_enabled\":false},\"widescreen\":{\"label\":\"Widescreen\",\"value\":2400,\"default_value\":2400,\"direction\":\"min\",\"is_enabled\":false}}},\"version\":\"3.13.2\",\"is_static\":false,\"experimentalFeatures\":{\"e_dom_optimization\":true,\"e_optimized_assets_loading\":true,\"e_optimized_css_loading\":true,\"a11y_improvements\":true,\"additional_custom_breakpoints\":true,\"landing-pages\":true},\"urls\":{\"assets\":\"https:\\/\\/choicehorizone.com\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"swiperClass\":\"swiper-container\",\"settings\":{\"page\":[],\"editorPreferences\":[]},\"kit\":{\"active_breakpoints\":[\"viewport_mobile\",\"viewport_tablet\"],\"global_image_lightbox\":\"yes\",\"lightbox_enable_counter\":\"yes\",\"lightbox_enable_fullscreen\":\"yes\",\"lightbox_enable_zoom\":\"yes\",\"lightbox_enable_share\":\"yes\",\"lightbox_title_src\":\"title\",\"lightbox_description_src\":\"description\"},\"post\":{\"id\":192,\"title\":\"Services%20%E2%80%93%20Horizon\",\"excerpt\":\"\",\"featuredImage\":false}};
</script>
<script src=\"../wp-content/plugins/elementor/assets/js/frontend.min.js@ver=3.13.2\" id=\"elementor-frontend-js\"></script>
<script src=\"../wp-content/plugins/bdthemes-element-pack/assets/js/element-pack-site.min.js@ver=5.15.2\" id=\"element-pack-site-js\"></script>
<script src=\"../wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js@ver=2.8.5\" id=\"animate-circle-js\"></script>
<script id=\"elementskit-elementor-js-extra\">
var ekit_config = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"e0a234a04f\"};
</script>
<script src=\"../wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js@ver=2.8.5\" id=\"elementskit-elementor-js\"></script>
<script src=\"../wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js@ver=2.8.5\" id=\"swiper-js\"></script>
</body>
</html>
", "choicehorizone.com/services/index.html", "C:\\xampp\\htdocs\\eliteforte\\templates\\choicehorizone.com\\services\\index.html");
    }
}
