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

/* choicehorizone.com/index.html */
class __TwigTemplate_31f2259d54a63c7562d6d275df53ea6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choicehorizone.com/index.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choicehorizone.com/index.html"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en-US\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">

\t<title>Horizon &#8211; More than you can see</title>
<meta name='robots' content='noindex, nofollow' />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Feed\" href=\"feed/index.html\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Comments Feed\" href=\"comments/feed/index.html\" />
<script>
window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/choicehorizone.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=6.5\"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case\"flag\":return n(e,\"\\ud83c\\udff3\\ufe0f\\u200d\\u26a7\\ufe0f\",\"\\ud83c\\udff3\\ufe0f\\u200b\\u26a7\\ufe0f\")?!1:!n(e,\"\\ud83c\\uddfa\\ud83c\\uddf3\",\"\\ud83c\\uddfa\\u200b\\ud83c\\uddf3\")&&!n(e,\"\\ud83c\\udff4\\udb40\\udc67\\udb40\\udc62\\udb40\\udc65\\udb40\\udc6e\\udb40\\udc67\\udb40\\udc7f\",\"\\ud83c\\udff4\\u200b\\udb40\\udc67\\u200b\\udb40\\udc62\\u200b\\udb40\\udc65\\u200b\\udb40\\udc6e\\u200b\\udb40\\udc67\\u200b\\udb40\\udc7f\");case\"emoji\":return!n(e,\"\\ud83d\\udc26\\u200d\\u2b1b\",\"\\ud83d\\udc26\\u200b\\u2b1b\")}return!1}function f(e,t,n){var r=\"undefined\"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement(\"canvas\"),a=r.getContext(\"2d\",{willReadFrequently:!0}),o=(a.textBaseline=\"top\",a.font=\"600 32px Arial\",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement(\"script\");t.src=e,t.defer=!0,i.head.appendChild(t)}\"undefined\"!=typeof Promise&&(o=\"wpEmojiSettingsSupports\",s=[\"flag\",\"emoji\"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener(\"DOMContentLoaded\",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if(\"object\"==typeof e&&\"number\"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&\"object\"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if(\"undefined\"!=typeof Worker&&\"undefined\"!=typeof OffscreenCanvas&&\"undefined\"!=typeof URL&&URL.createObjectURL&&\"undefined\"!=typeof Blob)try{var e=\"postMessage(\"+f.toString()+\"(\"+[JSON.stringify(s),u.toString(),p.toString()].join(\",\")+\"));\",r=new Blob([e],{type:\"text/javascript\"}),a=new Worker(URL.createObjectURL(r),{name:\"wpTestEmojiSupports\"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],\"flag\"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<link rel='stylesheet' id='bdt-uikit-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css@ver=3.7.2.css' media='all' />
<link rel='stylesheet' id='element-pack-site-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/element-pack-site.css@ver=5.15.2.css' media='all' />
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
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min.css@ver=6.5.css' media='all' />
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
<link rel='stylesheet' id='elementor-icons-ekiticons-css' href='wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css@ver=5.20.0.css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.min.css@ver=3.13.2.css' media='all' />
<link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css@ver=5.3.6.css' media='all' />
<link rel='stylesheet' id='elementor-post-172-css' href='wp-content/uploads/elementor/css/post-172.css@ver=1684262608.css' media='all' />
<link rel='stylesheet' id='uicore_global-css' href='wp-content/uploads/uicore-global.css@ver=7795.css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='ekit-responsive-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Heebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css@ver=5.15.3.css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css@ver=5.15.3.css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css@ver=5.15.3.css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-1-css' href='wp-content/plugins/uicore-framework/assets/fonts/themify-icons.css@ver=1.0.0.css' media='all' />
<link rel='stylesheet' id='elementor-icons-uicore-icons-css' href='wp-content/plugins/uicore-framework/assets/fonts/themify-icons.css@ver=1.0.0.css' media='all' />
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin><script src=\"wp-includes/js/jquery/jquery.min.js@ver=3.7.1\" id=\"jquery-core-js\"></script>
<script src=\"wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.1\" id=\"jquery-migrate-js\"></script>
<link rel=\"https://api.w.org/\" href=\"wp-json/index.html\" /><link rel=\"alternate\" type=\"application/json\" href=\"wp-json/wp/v2/pages/172.html\" /><link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"xmlrpc.php@rsd.html\" />
<meta name=\"generator\" content=\"WordPress 6.5\" />
<link rel=\"canonical\" href=\"index.html\" />
<link rel='shortlink' href='index.html' />
<link rel=\"alternate\" type=\"application/json+oembed\" href=\"wp-json/oembed/1.0/embed@url=https%253A%252F%252Fchoicehorizone.com%252F.html\" />
<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"wp-json/oembed/1.0/embed@url=https%253A%252F%252Fchoicehorizone.com%252F&amp;format=xml.html\" />
<meta name=\"generator\" content=\"Elementor 3.13.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto\">
<meta name=\"theme-color\" content=\"#FFFFFF\" />
        <link rel=\"shortcut icon\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\" >
\t\t<link rel=\"icon\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\" >
\t\t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\">
        <link rel=\"apple-touch-icon\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\">
        
</head>

<body class=\"home page-template-default page page-id-172 wp-embed-responsive  uicore-menu-focus elementor-default elementor-kit-6 elementor-page elementor-page-172\">
\t\t<!-- 1.1 uicore_before_body_content -->\t<div class=\"uicore-body-content\">
\t\t<!-- 1.2 uicore_before_page_content -->\t\t<div id=\"uicore-page\">
\t\t
        <div id=\"wrapper-navbar\" itemscope itemtype=\"http://schema.org/WebSite\" class=\"uicore uicore-navbar elementor-section elementor-section-boxed uicore-h-classic uicore-sticky ui-smart-sticky \"><div class=\"uicore-header-wrapper\">
            <nav class=\"uicore elementor-container\">
            \t\t <div class=\"uicore-branding\">
                
\t\t\t<a href=\"index.html\" rel=\"home\">
                <img class=\"uicore uicore-logo uicore-main\" src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\"/>
\t\t\t\t<img class=\"uicore uicore-logo uicore-second\" src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t\t<img class=\"uicore uicore-logo uicore-mobile-main\" src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t\t<img class=\"uicore uicore-logo uicore-mobile-second\" src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t</a>

\t\t        </div>
\t\t        <div class='uicore-nav-menu'>
            <div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"services/index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
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
        <!-- 1.3 uicore_page -->\t\t\t
\t\t<div id=\"content\" class=\"uicore-content\">

\t\t\t<!-- 1.4 uicore_before_content -->
\t\t\t<div id=\"primary\" class=\"content-area\">

\t        <article id=\"post-172\" class=\"post-172 page type-page status-publish hentry\">
            <div class=\"entry-content\">
                \t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"172\" class=\"elementor elementor-172\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-12e90c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"12e90c4\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-706cf58\" data-id=\"706cf58\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5110d77 bdt-icon-type-image elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"5110d77\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Mobile-App-Hero-Emoji.webp\" alt=\"Track your Cashflow\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tTrack your Cashflow\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c9bf52e elementor-widget elementor-widget-spacer\" data-id=\"c9bf52e\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}</style>\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-616ff21 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"616ff21\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h1 class=\"elementor-heading-title elementor-size-default\">Managing money, made simple</h1>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-181e565 elementor-widget elementor-widget-spacer\" data-id=\"181e565\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-4b5bde5 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"4b5bde5\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>\t\t\t\t<p>Business banking provides tailor made services to cater for the needs of the diverse segments of the economy alongside, customers who constitute the value chain of the bank’s commercial, corporate &amp; investment banking divisions’.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-41c8cb4 elementor-widget elementor-widget-spacer\" data-id=\"41c8cb4\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-53ced6b elementor-mobile-align-center elementor-widget elementor-widget-button\" data-id=\"53ced6b\" data-element_type=\"widget\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"https://accounts.choicehorizone.com\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\">Get Started</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-0bdf500 elementor-widget elementor-widget-spacer\" data-id=\"0bdf500\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-21cb0e5 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"21cb0e5\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-21cb0e5&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:2,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;M&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content bdt-flex-inline bdt-flex-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-21cb0e5\" >
\t\t\t\t\t2\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Monthly Users                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-4e5a34c elementor-widget__width-auto elementor-widget-mobile__width-initial elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider\" data-id=\"4e5a34c\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"divider.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:\"\";border-bottom:0;flex-grow:1;border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}</style>\t\t<div class=\"elementor-divider\">
\t\t\t<span class=\"elementor-divider-separator\">
\t\t\t\t\t\t</span>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9f724ed elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"9f724ed\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-9f724ed&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:5,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;.0&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content bdt-flex-inline bdt-flex-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-9f724ed\" >
\t\t\t\t\t5\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Average Rating                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-11f804b elementor-invisible\" data-id=\"11f804b\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-9304d5f elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"9304d5f\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src\$=\".svg\"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Mobile-App-Hero-BG-Element.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9ee06df elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"9ee06df\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Mobile-App-Hero-BG-Element-2.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-dce83bc elementor-widget elementor-widget-image\" data-id=\"dce83bc\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Mobile-App-Hero-Image.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-a964bcf elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"a964bcf\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5a1b765\" data-id=\"5a1b765\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-f68a454 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"f68a454\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h1 class=\"elementor-heading-title elementor-size-default\">Simplify all your business financial transactions</h1>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-a10038b elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"a10038b\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>We have a wide range of accounts to fit everyone, regardless of situation or lifestyle. So whether you want a basic account or one bursting with options, you will find the right account that meets your expectations.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-f5d24f4 elementor-tablet-align-center elementor-mobile-align-left elementor-invisible elementor-widget elementor-widget-button\" data-id=\"f5d24f4\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"https://accounts.choicehorizone.com\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\">Get started</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0ff8adf\" data-id=\"0ff8adf\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-9b65099 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"9b65099\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img fetchpriority=\"high\" decoding=\"async\" width=\"562\" height=\"411\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1.webp\" class=\"attachment-full size-full wp-image-160\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1-300x219.webp 300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d7d0881 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"d7d0881\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"562\" height=\"410\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2.webp\" class=\"attachment-full size-full wp-image-161\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2-300x219.webp 300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-028cccd elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"028cccd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:600}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"562\" height=\"197\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3.webp\" class=\"attachment-full size-full wp-image-162\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3-300x105.webp 300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9c2dddd elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"9c2dddd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:850}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"562\" height=\"253\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4.webp\" class=\"attachment-full size-full wp-image-163\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4-300x135.webp 300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-f5dd543 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"f5dd543\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-09c58ac\" data-id=\"09c58ac\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-4995696 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"4995696\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0a6ef49\" data-id=\"0a6ef49\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-c7ee751 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"c7ee751\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">We provide the best service for you</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-43091c0\" data-id=\"43091c0\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3c4eab7 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"3c4eab7\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon LLC. is designed to provide easy and convenient access to your funds, because you have worked hard all month.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e3b4d55\" data-id=\"e3b4d55\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-0882781 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-invisible elementor-widget elementor-widget-bdt-total-count\" data-id=\"0882781\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-total-count.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter bdt-total-count\" data-settings=\"{&quot;id&quot;:&quot;bdt-total-count-data-0882781&quot;,&quot;countStart&quot;:0,&quot;countNumber&quot;:99,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;decimalPlaces&quot;:&quot;0&quot;,&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;counterSeparator&quot;:null,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterPrefix&quot;:&quot;&quot;,&quot;counterSuffix&quot;:&quot;%&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-total-count-content\">
\t\t\t\t\t\t\t\t\t\t\t
            <div class=\"bdt-total-count-number\">
            <span class=\"bdt-count-this\"
                  id=\"bdt-total-count-data-0882781\" >
                                </span>
            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-total-count-content-text\"                    >
\t\t\t\t\tSatisfaction rate                </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-41e2465 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-invisible elementor-widget elementor-widget-bdt-total-count\" data-id=\"41e2465\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-total-count.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter bdt-total-count\" data-settings=\"{&quot;id&quot;:&quot;bdt-total-count-data-41e2465&quot;,&quot;countStart&quot;:0,&quot;countNumber&quot;:98,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;decimalPlaces&quot;:&quot;0&quot;,&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;counterSeparator&quot;:null,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterPrefix&quot;:&quot;&quot;,&quot;counterSuffix&quot;:&quot;M&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-total-count-content\">
\t\t\t\t\t\t\t\t\t\t\t
            <div class=\"bdt-total-count-number\">
            <span class=\"bdt-count-this\"
                  id=\"bdt-total-count-data-41e2465\" >
                                </span>
            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-total-count-content-text\"                    >
\t\t\t\t\tRegistered users                </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-4c5c2f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible\" data-id=\"4c5c2f7\" data-element_type=\"section\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8ff4dc8\" data-id=\"8ff4dc8\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-de51ada elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon\" data-id=\"de51ada\" data-element_type=\"widget\" data-widget_type=\"icon.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-icon-wrapper\">
\t\t\t<div class=\"elementor-icon\">
\t\t\t<i aria-hidden=\"true\" class=\"far fa-credit-card\"></i>\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-f2c8fb5 elementor-widget elementor-widget-heading\" data-id=\"f2c8fb5\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h4 class=\"elementor-heading-title elementor-size-default\">Super easy to use</h4>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-25b655c\" data-id=\"25b655c\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-cb8885a elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon\" data-id=\"cb8885a\" data-element_type=\"widget\" data-widget_type=\"icon.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-icon-wrapper\">
\t\t\t<div class=\"elementor-icon\">
\t\t\t<i aria-hidden=\"true\" class=\"fas fa-id-card-alt\"></i>\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-be24523 elementor-widget elementor-widget-heading\" data-id=\"be24523\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h4 class=\"elementor-heading-title elementor-size-default\">Send and receive money effeciently</h4>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5527a87\" data-id=\"5527a87\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-b76bf13 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon\" data-id=\"b76bf13\" data-element_type=\"widget\" data-widget_type=\"icon.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-icon-wrapper\">
\t\t\t<div class=\"elementor-icon\">
\t\t\t<i aria-hidden=\"true\" class=\"fas fa-shield-virus\"></i>\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-5d4a977 elementor-widget elementor-widget-heading\" data-id=\"5d4a977\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h4 class=\"elementor-heading-title elementor-size-default\">Safe and protected</h4>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-96bf821\" data-id=\"96bf821\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3a56cb7 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon\" data-id=\"3a56cb7\" data-element_type=\"widget\" data-widget_type=\"icon.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-icon-wrapper\">
\t\t\t<div class=\"elementor-icon\">
\t\t\t<i aria-hidden=\"true\" class=\"far fa-money-bill-alt\"></i>\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d1b05af elementor-widget elementor-widget-heading\" data-id=\"d1b05af\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h4 class=\"elementor-heading-title elementor-size-default\">More efficient transaction fees</h4>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-ec44f11 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"ec44f11\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b6f5bcb elementor-invisible\" data-id=\"b6f5bcb\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-6e23442 elementor-position-left bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"6e23442\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tMaximum cashback fee for virtual account  transactions is \$49 for 8 months.\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-11625c1 elementor-widget elementor-widget-text-editor\" data-id=\"11625c1\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>The program period runs from 14 December 2021 to 24 November 2022.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-527c1fd elementor-widget-divider--view-line elementor-widget elementor-widget-divider\" data-id=\"527c1fd\" data-element_type=\"widget\" data-widget_type=\"divider.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-divider\">
\t\t\t<span class=\"elementor-divider-separator\">
\t\t\t\t\t\t</span>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-5983602 elementor-widget elementor-widget-text-editor\" data-id=\"5983602\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Transaction fees will be calculated when the merchant can make a transaction.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d0643a4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider\" data-id=\"d0643a4\" data-element_type=\"widget\" data-widget_type=\"divider.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-divider\">
\t\t\t<span class=\"elementor-divider-separator\">
\t\t\t\t\t\t</span>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-b7ac6b8 elementor-widget elementor-widget-text-editor\" data-id=\"b7ac6b8\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Cashback will be paid up to 1 week after registration for 8 months.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-ba05e2d elementor-widget-divider--view-line elementor-widget elementor-widget-divider\" data-id=\"ba05e2d\" data-element_type=\"widget\" data-widget_type=\"divider.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-divider\">
\t\t\t<span class=\"elementor-divider-separator\">
\t\t\t\t\t\t</span>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cd26b52\" data-id=\"cd26b52\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-c60b76d elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"c60b76d\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Get the best services with the lowest fees</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-6e6db94 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"6e6db94\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>At Choice Horizon LLC. , we believe that the beauty of life lies in the little things that give us a better expression of ourselves, make us more social and connect emotionally.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-7d24a4d elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7d24a4d\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0023add\" data-id=\"0023add\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-bbc19f8 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"bbc19f8\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">How Choice Horizon works</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-8b42dc6 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"8b42dc6\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9fc6691 elementor-invisible elementor-widget elementor-widget-bdt-tabs\" data-id=\"9fc6691\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-tabs.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t

        <div class=\"bdt-tabs-area\">

            <div id=\"bdt-tabs-9fc6691\" class=\"bdt-tabs  bdt-tabs-default\" data-settings=\"{&quot;id&quot;:&quot;bdt-tabs-9fc6691&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;hashTopOffset&quot;:70,&quot;hashScrollspyTime&quot;:1500,&quot;navStickyOffset&quot;:1,&quot;linkWidgetSettings&quot;:[&quot;#pin-customization&quot;,&quot;#flexible-interface&quot;,&quot;#payment-tracking&quot;],&quot;linkWidgetId&quot;:&quot;9fc6691&quot;}\">
                
                
                        <div >
            <div >
                <div class=\"bdt-tab bdt-tab-default bdt-flex-center\" data-bdt-tab=\"connect: #bdt-tab-content-9fc6691;\" data-bdt-height-match=\"target: &gt; .bdt-tabs-item &gt; .bdt-tabs-item-title; row: false;\">
                                            <div class=\"bdt-tabs-item\">
                            <a data-title=\"1-register-an-account\" class=\"bdt-tabs-item-title\" id=\"bdt-tab-1-register-an-account\" data-tab-index=\"0\" href=\"index.html#\">
                                <div class=\"bdt-tab-text-wrapper bdt-flex-column\">

                                    <div class=\"bdt-tab-title-icon-wrapper\">

                                        
                                                                                    <span class=\"bdt-tab-text\">
                                                1. Register An Account                                            </span>
                                        
                                        
                                    </div>

                                    
                                </div>
                            </a>
                        </div>
                                            <div class=\"bdt-tabs-item\">
                            <a data-title=\"2-verify-identity\" class=\"bdt-tabs-item-title\" id=\"bdt-tab-2-verify-identity\" data-tab-index=\"1\" href=\"index.html#\">
                                <div class=\"bdt-tab-text-wrapper bdt-flex-column\">

                                    <div class=\"bdt-tab-title-icon-wrapper\">

                                        
                                                                                    <span class=\"bdt-tab-text\">
                                                2. Verify Identity                                            </span>
                                        
                                        
                                    </div>

                                    
                                </div>
                            </a>
                        </div>
                                            <div class=\"bdt-tabs-item\">
                            <a data-title=\"3-start-transactions\" class=\"bdt-tabs-item-title\" id=\"bdt-tab-3-start-transactions\" data-tab-index=\"2\" href=\"index.html#\">
                                <div class=\"bdt-tab-text-wrapper bdt-flex-column\">

                                    <div class=\"bdt-tab-title-icon-wrapper\">

                                        
                                                                                    <span class=\"bdt-tab-text\">
                                                3. Start Transactions                                            </span>
                                        
                                        
                                    </div>

                                    
                                </div>
                            </a>
                        </div>
                                    </div>
            </div>
        </div>


                                    
        <div class=\"bdt-switcher-wrapper\">
            <div id=\"bdt-tab-content-9fc6691\" class=\"bdt-switcher bdt-switcher-item-content\">
                                                        <div class=\"\" data-content-id=\"1-register-an-account\">
                        <div>
                                                    </div>
                    </div>
                                                        <div class=\"\" data-content-id=\"2-verify-identity\">
                        <div>
                                                    </div>
                    </div>
                                                        <div class=\"\" data-content-id=\"3-start-transactions\">
                        <div>
                                                    </div>
                    </div>
                            </div>
        </div>
                    
                                <a href=\"index.html#\" id=\"bottom-anchor-9fc6691\" data-bdt-hidden></a>
            </div>
        </div>
    \t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-7b31d04 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7b31d04\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4ab55e0\" data-id=\"4ab55e0\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-3ed08af3 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"3ed08af3\" data-element_type=\"section\" id=\"pin-customization\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-696cb4d5\" data-id=\"696cb4d5\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-1fa6f037 elementor-widget elementor-widget-image\" data-id=\"1fa6f037\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1033\" height=\"712\" src=\"wp-content/uploads/2022/07/undraw_secure_login_pdn4.png\" class=\"attachment-full size-full wp-image-310\" alt=\"\" srcset=\"wp-content/uploads/2022/07/undraw_secure_login_pdn4.png 1033w, wp-content/uploads/2022/07/undraw_secure_login_pdn4-300x207.png 300w, wp-content/uploads/2022/07/undraw_secure_login_pdn4-1024x706.png 1024w, wp-content/uploads/2022/07/undraw_secure_login_pdn4-768x529.png 768w, wp-content/uploads/2022/07/undraw_secure_login_pdn4-650x448.png 650w\" sizes=\"(max-width: 1033px) 100vw, 1033px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7b6e4e90\" data-id=\"7b6e4e90\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2caa449b elementor-widget elementor-widget-heading\" data-id=\"2caa449b\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">1. Register An Account</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-3a978b2d elementor-widget elementor-widget-text-editor\" data-id=\"3a978b2d\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>The Choice Horizon Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-fd96ef7 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"fd96ef7\" data-element_type=\"section\" id=\"flexible-interface\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e5e5895\" data-id=\"e5e5895\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-fd109bc elementor-widget elementor-widget-image\" data-id=\"fd109bc\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"783\" height=\"794\" src=\"wp-content/uploads/2022/07/undraw_Authentication_re_svpt.png\" class=\"attachment-full size-full wp-image-311\" alt=\"\" srcset=\"wp-content/uploads/2022/07/undraw_Authentication_re_svpt.png 783w, wp-content/uploads/2022/07/undraw_Authentication_re_svpt-296x300.png 296w, wp-content/uploads/2022/07/undraw_Authentication_re_svpt-768x779.png 768w, wp-content/uploads/2022/07/undraw_Authentication_re_svpt-641x650.png 641w\" sizes=\"(max-width: 783px) 100vw, 783px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a240e37\" data-id=\"a240e37\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-313f88d elementor-widget elementor-widget-heading\" data-id=\"313f88d\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">2. Verify Identity</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-7a8a77d elementor-widget elementor-widget-text-editor\" data-id=\"7a8a77d\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>At Choice Horizon Bank we know that issues like security, protection from fraud and personal privacy, we make to sure to take extra steps by verifying customer identity with our state of art software</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-d5dd9b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"d5dd9b0\" data-element_type=\"section\" id=\"payment-tracking\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-da6fc84\" data-id=\"da6fc84\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-166a2e3 elementor-widget elementor-widget-image\" data-id=\"166a2e3\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1144\" height=\"746\" src=\"wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2.png\" class=\"attachment-full size-full wp-image-312\" alt=\"\" srcset=\"wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2.png 1144w, wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-300x196.png 300w, wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-1024x668.png 1024w, wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-768x501.png 768w, wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-650x424.png 650w\" sizes=\"(max-width: 1144px) 100vw, 1144px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-834d209\" data-id=\"834d209\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-64dd3de elementor-widget elementor-widget-heading\" data-id=\"64dd3de\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">3. Start Transactions</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-6e3abb1 elementor-widget elementor-widget-text-editor\" data-id=\"6e3abb1\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon is designed to facilitate financial inclusion, permitting individuals with minimal amount of income to enjoy all benefits we offer. Enjoy a value adding banking relationship with us.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-2b52e3b elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"2b52e3b\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-809ac74\" data-id=\"809ac74\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2013003 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"2013003\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">We help your needs to receive payments faster</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-3bcfff4 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"3bcfff4\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-57eb409 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-widget-mobile__width-inherit elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list\" data-id=\"57eb409\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"icon-list.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<link rel=\"stylesheet\" href=\"wp-content/plugins/elementor/assets/css/widget-icon-list.min.css\">\t\t<ul class=\"elementor-icon-list-items\">
\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Bank Transfer</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Credit Card</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Debit Card</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9da40b7 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-widget-mobile__width-inherit elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list\" data-id=\"9da40b7\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"icon-list.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<ul class=\"elementor-icon-list-items\">
\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Visa</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">E-money</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Mobile Money</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b835fa2\" data-id=\"b835fa2\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2e21171 ep-parallax-effects-yes elementor-invisible elementor-widget elementor-widget-image\" data-id=\"2e21171\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;ep_parallax_effects_show&quot;:&quot;yes&quot;,&quot;ep_parallax_effects_y&quot;:&quot;yes&quot;,&quot;ep_parallax_effects_y_start&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-100,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_y_end&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_rotate_start&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_rotate_end&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_scale_start&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_scale_end&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_hue_value&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_sepia_value&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_easing_value&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_viewport_value&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_target&quot;:&quot;self&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"742\" height=\"469\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1.webp\" class=\"attachment-full size-full wp-image-165\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1.webp 742w, wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1-300x190.webp 300w, wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1-650x411.webp 650w\" sizes=\"(max-width: 742px) 100vw, 742px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-21bdb4d elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image\" data-id=\"21bdb4d\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"581\" height=\"266\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2.webp\" class=\"attachment-full size-full wp-image-166\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2.webp 581w, wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2-300x137.webp 300w\" sizes=\"(max-width: 581px) 100vw, 581px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-1a8fb8e elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image\" data-id=\"1a8fb8e\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"581\" height=\"217\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3.webp\" class=\"attachment-full size-full wp-image-167\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3.webp 581w, wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3-300x112.webp 300w\" sizes=\"(max-width: 581px) 100vw, 581px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-1ba76f2 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"1ba76f2\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f5dd6d8\" data-id=\"f5dd6d8\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2bf6703 elementor-invisible elementor-widget elementor-widget-image\" data-id=\"2bf6703\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1098\" height=\"672\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1.webp\" class=\"attachment-full size-full wp-image-168\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1.webp 1098w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-300x184.webp 300w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-1024x627.webp 1024w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-768x470.webp 768w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-650x398.webp 650w\" sizes=\"(max-width: 1098px) 100vw, 1098px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c06585e elementor-invisible elementor-widget elementor-widget-image\" data-id=\"c06585e\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"527\" height=\"333\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2.webp\" class=\"attachment-full size-full wp-image-169\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2.webp 527w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2-300x190.webp 300w\" sizes=\"(max-width: 527px) 100vw, 527px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c558b25\" data-id=\"c558b25\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-e1fd041 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"e1fd041\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">One dashboard for all business financial needs</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-efc3b24 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"efc3b24\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon is designed to facilitate financial inclusion, permitting individuals with minimal amount of income to enjoy all benefits we offer. Enjoy a value adding banking relationship with us.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-44268a6 elementor-position-left elementor-widget__width-initial elementor-widget-tablet__width-auto bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"44268a6\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tEasy to use\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t\t\t\t<div class=\"bdt-advanced-icon-box-sub-title\">
\t\t\t\tFor everyone\t\t\t</div>
\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-b93108b elementor-position-left elementor-widget__width-initial elementor-widget-tablet__width-auto bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"b93108b\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tSuper safe\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t\t\t\t<div class=\"bdt-advanced-icon-box-sub-title\">
\t\t\t\tSecurity system\t\t\t</div>
\t\t
\t\t\t\t\t\t
\t\t\t\t
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-dd2bfca elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"dd2bfca\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e09f850\" data-id=\"e09f850\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-10bdb05 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"10bdb05\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Simplify your financial trancasction today!</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-8d99bef elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"8d99bef\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Forgot your PIN? Want a saving account to help with your business transactions? No matter what you might need, we’re always on hand to happily provide answers and assistance.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-6aec56f elementor-button-align-center elementor-invisible elementor-widget elementor-widget-bdt-contact-form\" data-id=\"6aec56f\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-contact-form.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-contact-form bdt-contact-form-skin-default\">
\t\t\t<div class=\"elementor-form-fields-wrapper\">
\t\t\t\t\t\t<div class=\"bdt-contact-form-wrapper\">
\t\t\t<form class=\"bdt-contact-form-form bdt-form-stacked bdt-grid bdt-grid-small without-recaptcha\" data-bdt-grid=\"\" action=\"https://choicehorizone.com/wp-admin/admin-ajax.php\" method=\"post\">

\t\t\t\t
\t\t\t\t\t<div class=\"bdt-field-group elementor-field-required bdt-width-1-2@m bdt-name-email-inline\">
\t\t\t\t\t\t<div class=\"bdt-form-controls\"><input type=\"text\" name=\"name\" id=\"user_name6aec56f\" placeholder=\"Your Name\" class=\"bdt-input bdt-form-default\" required =\"required\"></div>\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"bdt-field-group elementor-field-required bdt-width-1-2@m bdt-name-email-inline\">
\t\t\t\t\t\t<div class=\"bdt-form-controls\"><input type=\"email\" name=\"email\" id=\"email6aec56f\" placeholder=\"example@email.com\" class=\"bdt-input bdt-form-default\" required=\"required\"></div>\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<input type=\"hidden\" class=\"widget_id\" name=\"widget_id\" value=\"6aec56f\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"bdt-sf-6aec56f\" value=\"true\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"page_id\" name=\"page_id\" value=\"172\"/>

\t\t\t\t\t<div class=\"elementor-field-type-submit bdt-field-group bdt-flex bdt-width-1-1\">
\t\t\t\t\t\t<button type=\"submit\" class=\"elementor-button bdt-button bdt-button-primary\" name=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Get started</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t</div>\t

\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"element_pack_contact_form\" />

\t\t\t\t\t
\t\t\t</form>
\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-52df81e elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"52df81e\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-32b2f89\" data-id=\"32b2f89\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3f43081 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"3f43081\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">We help your needs to receive payments faster</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-39667bc elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"39667bc\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-f373f3e elementor-invisible elementor-widget elementor-widget-bdt-accordion\" data-id=\"f373f3e\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-accordion.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t        <div class=\"bdt-accordion-container\">
            <div id=\"bdt-accordion-f373f3e\" class=\"bdt-accordion\" data-bdt-accordion=\"{&quot;collapsible&quot;:true,&quot;multiple&quot;:false,&quot;transition&quot;:&quot;ease-in-out&quot;}\" data-settings=\"{&quot;id&quot;:&quot;bdt-accordion-f373f3e&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;activeScrollspy&quot;:null,&quot;hashTopOffset&quot;:false,&quot;hashScrollspyTime&quot;:false}\">
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-01-what-should-i-do-if-i-forgot-my-security-pin\" data-accordion-index=\"0\" data-title=\"01-what-should-i-do-if-i-forgot-my-security-pin\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                01. What should I do if I forgot my security pin?                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Contact our support team and they will help with all issues you are facing.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-02-how-to-register-on-this-platform\" data-accordion-index=\"1\" data-title=\"02-how-to-register-on-this-platform\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                02. How to register on this platform?                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Click on the secured login button on the header and the get started button.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-03-what-should-i-do-if-my-account-is-banned\" data-accordion-index=\"2\" data-title=\"03-what-should-i-do-if-my-account-is-banned\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                03. What should i do if my account is banned?                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Contact our support team and they will help with all issues you are facing.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-04-forgotten-atm-pin\" data-accordion-index=\"3\" data-title=\"04-forgotten-atm-pin\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                04. Forgotten ATM pin                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Contact our support team and they will help with all issues you are facing.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-05-change-of-phone-number\" data-accordion-index=\"4\" data-title=\"05-change-of-phone-number\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                05. Change of Phone Number                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>You can do that on your account dashboard.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-06-over-limit-following-temporary-card-limit-increase\" data-accordion-index=\"5\" data-title=\"06-over-limit-following-temporary-card-limit-increase\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                06. Over Limit Following Temporary Card Limit Increase                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Contact our support team and they will help with all issues you are facing.</p>                        </div>
                    </div>
                            </div>
        </div>
\t\t</div>
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

\t<footer class=\"uicore-footer-wrapper elementor\">        
\t<div class=\"uicore uicore-inner-footer elementor-section elementor-section-boxed \">
            <div class=\"uicore elementor-container four_left_2 \">

            <div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<figure class=\"wp-block-image size-large is-resized\"><img loading=\"lazy\" decoding=\"async\" src=\"wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png\" alt=\"\" class=\"wp-image-184\" width=\"184\" height=\"60\" srcset=\"wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png 1024w, wp-content/uploads/2022/07/Logopit_1657607749541-300x100.png 300w, wp-content/uploads/2022/07/Logopit_1657607749541-768x256.png 768w, wp-content/uploads/2022/07/Logopit_1657607749541-1536x512.png 1536w, wp-content/uploads/2022/07/Logopit_1657607749541-2048x683.png 2048w, wp-content/uploads/2022/07/Logopit_1657607749541-650x217.png 650w\" sizes=\"(max-width: 184px) 100vw, 184px\" /></figure>



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
                \t\t\t\t\t<a href=\"index.html\" rel=\"home\">
\t\t\t\t\t\t<img class=\"uicore uicore-logo\"  src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\"/>
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
\t\t\t\t<div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"services/index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
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
<link rel='stylesheet' id='ep-advanced-icon-box-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-icon-box.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-advanced-counter-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-counter.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-total-count-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-total-count.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-tabs-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-tabs.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-contact-form-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-contact-form.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-accordion-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-accordion.css@ver=5.15.2.css' media='all' />
<script src=\"wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js@ver=2.8.5\" id=\"elementskit-framework-js-frontend-js\"></script>
<script id=\"elementskit-framework-js-frontend-js-after\">
\t\tvar elementskit = {
\t\t\tresturl: 'https://choicehorizone.com/wp-json/elementskit/v1/',
\t\t}

\t\t
</script>
<script src=\"wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js@ver=2.8.5\" id=\"ekit-widget-scripts-js\"></script>
<script src=\"wp-content/uploads/uicore-global.js@ver=7795\" id=\"uicore_global-js\"></script>
<script src=\"wp-content/plugins/bdthemes-element-pack/assets/vendor/js/countUp.min.js@ver=2.0.4\" id=\"advanced-counter-js\"></script>
<script id=\"bdt-uikit-js-extra\">
var element_pack_ajax_login_config = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"language\":\"en\",\"loadingmessage\":\"Sending user info, please wait...\",\"unknownerror\":\"Unknown error, make sure access is correct!\"};
var ElementPackConfig = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"5a0d3f4c6e\",\"data_table\":{\"language\":{\"lengthMenu\":\"Show _MENU_ Entries\",\"info\":\"Showing _START_ to _END_ of _TOTAL_ entries\",\"search\":\"Search :\",\"paginate\":{\"previous\":\"Previous\",\"next\":\"Next\"}}},\"contact_form\":{\"sending_msg\":\"Sending message please wait...\",\"captcha_nd\":\"Invisible captcha not defined!\",\"captcha_nr\":\"Could not get invisible captcha response!\"},\"mailchimp\":{\"subscribing\":\"Subscribing you please wait...\"},\"elements_data\":{\"sections\":[],\"columns\":[],\"widgets\":[]}};
</script>
<script src=\"wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min.js@ver=3.7.2\" id=\"bdt-uikit-js\"></script>
<script src=\"wp-content/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.13.2\" id=\"elementor-webpack-runtime-js\"></script>
<script src=\"wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.13.2\" id=\"elementor-frontend-modules-js\"></script>
<script src=\"wp-includes/js/jquery/ui/core.min.js@ver=1.13.2\" id=\"jquery-ui-core-js\"></script>
<script id=\"elementor-frontend-js-before\">
var elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false,\"isScriptDebug\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"download\":\"Download\",\"downloadImage\":\"Download image\",\"fullscreen\":\"Fullscreen\",\"zoom\":\"Zoom\",\"share\":\"Share\",\"playVideo\":\"Play Video\",\"previous\":\"Previous\",\"next\":\"Next\",\"close\":\"Close\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"responsive\":{\"breakpoints\":{\"mobile\":{\"label\":\"Mobile Portrait\",\"value\":767,\"default_value\":767,\"direction\":\"max\",\"is_enabled\":true},\"mobile_extra\":{\"label\":\"Mobile Landscape\",\"value\":880,\"default_value\":880,\"direction\":\"max\",\"is_enabled\":false},\"tablet\":{\"label\":\"Tablet Portrait\",\"value\":1024,\"default_value\":1024,\"direction\":\"max\",\"is_enabled\":true},\"tablet_extra\":{\"label\":\"Tablet Landscape\",\"value\":1200,\"default_value\":1200,\"direction\":\"max\",\"is_enabled\":false},\"laptop\":{\"label\":\"Laptop\",\"value\":1366,\"default_value\":1366,\"direction\":\"max\",\"is_enabled\":false},\"widescreen\":{\"label\":\"Widescreen\",\"value\":2400,\"default_value\":2400,\"direction\":\"min\",\"is_enabled\":false}}},\"version\":\"3.13.2\",\"is_static\":false,\"experimentalFeatures\":{\"e_dom_optimization\":true,\"e_optimized_assets_loading\":true,\"e_optimized_css_loading\":true,\"a11y_improvements\":true,\"additional_custom_breakpoints\":true,\"landing-pages\":true},\"urls\":{\"assets\":\"https:\\/\\/choicehorizone.com\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"swiperClass\":\"swiper-container\",\"settings\":{\"page\":[],\"editorPreferences\":[]},\"kit\":{\"active_breakpoints\":[\"viewport_mobile\",\"viewport_tablet\"],\"global_image_lightbox\":\"yes\",\"lightbox_enable_counter\":\"yes\",\"lightbox_enable_fullscreen\":\"yes\",\"lightbox_enable_zoom\":\"yes\",\"lightbox_enable_share\":\"yes\",\"lightbox_title_src\":\"title\",\"lightbox_description_src\":\"description\"},\"post\":{\"id\":172,\"title\":\"Horizon%20%E2%80%93%20More%20than%20you%20can%20see\",\"excerpt\":\"\",\"featuredImage\":false}};
</script>
<script src=\"wp-content/plugins/elementor/assets/js/frontend.min.js@ver=3.13.2\" id=\"elementor-frontend-js\"></script>
<script src=\"wp-content/plugins/bdthemes-element-pack/assets/js/element-pack-site.min.js@ver=5.15.2\" id=\"element-pack-site-js\"></script>
<script src=\"wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js@ver=2.8.5\" id=\"animate-circle-js\"></script>
<script id=\"elementskit-elementor-js-extra\">
var ekit_config = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"e0a234a04f\"};
</script>
<script src=\"wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js@ver=2.8.5\" id=\"elementskit-elementor-js\"></script>
<script src=\"wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js@ver=2.8.5\" id=\"swiper-js\"></script>
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
        return "choicehorizone.com/index.html";
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

\t<title>Horizon &#8211; More than you can see</title>
<meta name='robots' content='noindex, nofollow' />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Feed\" href=\"feed/index.html\" />
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Comments Feed\" href=\"comments/feed/index.html\" />
<script>
window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/choicehorizone.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=6.5\"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case\"flag\":return n(e,\"\\ud83c\\udff3\\ufe0f\\u200d\\u26a7\\ufe0f\",\"\\ud83c\\udff3\\ufe0f\\u200b\\u26a7\\ufe0f\")?!1:!n(e,\"\\ud83c\\uddfa\\ud83c\\uddf3\",\"\\ud83c\\uddfa\\u200b\\ud83c\\uddf3\")&&!n(e,\"\\ud83c\\udff4\\udb40\\udc67\\udb40\\udc62\\udb40\\udc65\\udb40\\udc6e\\udb40\\udc67\\udb40\\udc7f\",\"\\ud83c\\udff4\\u200b\\udb40\\udc67\\u200b\\udb40\\udc62\\u200b\\udb40\\udc65\\u200b\\udb40\\udc6e\\u200b\\udb40\\udc67\\u200b\\udb40\\udc7f\");case\"emoji\":return!n(e,\"\\ud83d\\udc26\\u200d\\u2b1b\",\"\\ud83d\\udc26\\u200b\\u2b1b\")}return!1}function f(e,t,n){var r=\"undefined\"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement(\"canvas\"),a=r.getContext(\"2d\",{willReadFrequently:!0}),o=(a.textBaseline=\"top\",a.font=\"600 32px Arial\",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement(\"script\");t.src=e,t.defer=!0,i.head.appendChild(t)}\"undefined\"!=typeof Promise&&(o=\"wpEmojiSettingsSupports\",s=[\"flag\",\"emoji\"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener(\"DOMContentLoaded\",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if(\"object\"==typeof e&&\"number\"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&\"object\"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if(\"undefined\"!=typeof Worker&&\"undefined\"!=typeof OffscreenCanvas&&\"undefined\"!=typeof URL&&URL.createObjectURL&&\"undefined\"!=typeof Blob)try{var e=\"postMessage(\"+f.toString()+\"(\"+[JSON.stringify(s),u.toString(),p.toString()].join(\",\")+\"));\",r=new Blob([e],{type:\"text/javascript\"}),a=new Worker(URL.createObjectURL(r),{name:\"wpTestEmojiSupports\"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],\"flag\"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<link rel='stylesheet' id='bdt-uikit-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css@ver=3.7.2.css' media='all' />
<link rel='stylesheet' id='element-pack-site-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/element-pack-site.css@ver=5.15.2.css' media='all' />
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
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min.css@ver=6.5.css' media='all' />
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
<link rel='stylesheet' id='elementor-icons-ekiticons-css' href='wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css@ver=5.20.0.css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.min.css@ver=3.13.2.css' media='all' />
<link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css@ver=5.3.6.css' media='all' />
<link rel='stylesheet' id='elementor-post-172-css' href='wp-content/uploads/elementor/css/post-172.css@ver=1684262608.css' media='all' />
<link rel='stylesheet' id='uicore_global-css' href='wp-content/uploads/uicore-global.css@ver=7795.css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='ekit-responsive-css' href='wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css@ver=2.8.5.css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Heebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css@ver=5.15.3.css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css@ver=5.15.3.css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css@ver=5.15.3.css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-1-css' href='wp-content/plugins/uicore-framework/assets/fonts/themify-icons.css@ver=1.0.0.css' media='all' />
<link rel='stylesheet' id='elementor-icons-uicore-icons-css' href='wp-content/plugins/uicore-framework/assets/fonts/themify-icons.css@ver=1.0.0.css' media='all' />
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin><script src=\"wp-includes/js/jquery/jquery.min.js@ver=3.7.1\" id=\"jquery-core-js\"></script>
<script src=\"wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.1\" id=\"jquery-migrate-js\"></script>
<link rel=\"https://api.w.org/\" href=\"wp-json/index.html\" /><link rel=\"alternate\" type=\"application/json\" href=\"wp-json/wp/v2/pages/172.html\" /><link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"xmlrpc.php@rsd.html\" />
<meta name=\"generator\" content=\"WordPress 6.5\" />
<link rel=\"canonical\" href=\"index.html\" />
<link rel='shortlink' href='index.html' />
<link rel=\"alternate\" type=\"application/json+oembed\" href=\"wp-json/oembed/1.0/embed@url=https%253A%252F%252Fchoicehorizone.com%252F.html\" />
<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"wp-json/oembed/1.0/embed@url=https%253A%252F%252Fchoicehorizone.com%252F&amp;format=xml.html\" />
<meta name=\"generator\" content=\"Elementor 3.13.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto\">
<meta name=\"theme-color\" content=\"#FFFFFF\" />
        <link rel=\"shortcut icon\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\" >
\t\t<link rel=\"icon\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\" >
\t\t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\">
        <link rel=\"apple-touch-icon\" href=\"wp-content/uploads/2022/07/Logopit_16575763848961.png\">
        
</head>

<body class=\"home page-template-default page page-id-172 wp-embed-responsive  uicore-menu-focus elementor-default elementor-kit-6 elementor-page elementor-page-172\">
\t\t<!-- 1.1 uicore_before_body_content -->\t<div class=\"uicore-body-content\">
\t\t<!-- 1.2 uicore_before_page_content -->\t\t<div id=\"uicore-page\">
\t\t
        <div id=\"wrapper-navbar\" itemscope itemtype=\"http://schema.org/WebSite\" class=\"uicore uicore-navbar elementor-section elementor-section-boxed uicore-h-classic uicore-sticky ui-smart-sticky \"><div class=\"uicore-header-wrapper\">
            <nav class=\"uicore elementor-container\">
            \t\t <div class=\"uicore-branding\">
                
\t\t\t<a href=\"index.html\" rel=\"home\">
                <img class=\"uicore uicore-logo uicore-main\" src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\"/>
\t\t\t\t<img class=\"uicore uicore-logo uicore-second\" src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t\t<img class=\"uicore uicore-logo uicore-mobile-main\" src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t\t<img class=\"uicore uicore-logo uicore-mobile-second\" src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\" />
\t\t\t</a>

\t\t        </div>
\t\t        <div class='uicore-nav-menu'>
            <div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"services/index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
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
        <!-- 1.3 uicore_page -->\t\t\t
\t\t<div id=\"content\" class=\"uicore-content\">

\t\t\t<!-- 1.4 uicore_before_content -->
\t\t\t<div id=\"primary\" class=\"content-area\">

\t        <article id=\"post-172\" class=\"post-172 page type-page status-publish hentry\">
            <div class=\"entry-content\">
                \t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"172\" class=\"elementor elementor-172\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-12e90c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"12e90c4\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-706cf58\" data-id=\"706cf58\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5110d77 bdt-icon-type-image elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"5110d77\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Mobile-App-Hero-Emoji.webp\" alt=\"Track your Cashflow\">
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tTrack your Cashflow\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c9bf52e elementor-widget elementor-widget-spacer\" data-id=\"c9bf52e\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}</style>\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-616ff21 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"616ff21\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h1 class=\"elementor-heading-title elementor-size-default\">Managing money, made simple</h1>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-181e565 elementor-widget elementor-widget-spacer\" data-id=\"181e565\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-4b5bde5 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"4b5bde5\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>\t\t\t\t<p>Business banking provides tailor made services to cater for the needs of the diverse segments of the economy alongside, customers who constitute the value chain of the bank’s commercial, corporate &amp; investment banking divisions’.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-41c8cb4 elementor-widget elementor-widget-spacer\" data-id=\"41c8cb4\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-53ced6b elementor-mobile-align-center elementor-widget elementor-widget-button\" data-id=\"53ced6b\" data-element_type=\"widget\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"https://accounts.choicehorizone.com\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\">Get Started</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-0bdf500 elementor-widget elementor-widget-spacer\" data-id=\"0bdf500\" data-element_type=\"widget\" data-widget_type=\"spacer.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-spacer\">
\t\t\t<div class=\"elementor-spacer-inner\"></div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-21cb0e5 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"21cb0e5\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-21cb0e5&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:2,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;M&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content bdt-flex-inline bdt-flex-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-21cb0e5\" >
\t\t\t\t\t2\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Monthly Users                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-4e5a34c elementor-widget__width-auto elementor-widget-mobile__width-initial elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider\" data-id=\"4e5a34c\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"divider.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:\"\";border-bottom:0;flex-grow:1;border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-top:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}</style>\t\t<div class=\"elementor-divider\">
\t\t\t<span class=\"elementor-divider-separator\">
\t\t\t\t\t\t</span>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9f724ed elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-bdt-advanced-counter\" data-id=\"9f724ed\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"bdt-advanced-counter.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter\" data-settings=\"{&quot;id&quot;:&quot;bdt-advanced-counter-data-9f724ed&quot;,&quot;countStart&quot;:1,&quot;countNumber&quot;:5,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterSuffix&quot;:&quot;.0&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-advanced-counter-content bdt-flex-inline bdt-flex-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t                <div class=\"bdt-advanced-counter-number\">
                <span class=\"bdt-count-this\"
                      id=\"bdt-advanced-counter-data-9f724ed\" >
\t\t\t\t\t5\t\t\t\t</span>
                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-advanced-counter-content-text\"                    >
\t\t\t\t\t    Average Rating                    </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-11f804b elementor-invisible\" data-id=\"11f804b\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-9304d5f elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"9304d5f\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src\$=\".svg\"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Mobile-App-Hero-BG-Element.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9ee06df elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image\" data-id=\"9ee06df\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Mobile-App-Hero-BG-Element-2.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-dce83bc elementor-widget elementor-widget-image\" data-id=\"dce83bc\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2022/06/Mobile-App-Hero-Image.webp\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-a964bcf elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"a964bcf\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5a1b765\" data-id=\"5a1b765\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-f68a454 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"f68a454\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h1 class=\"elementor-heading-title elementor-size-default\">Simplify all your business financial transactions</h1>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-a10038b elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"a10038b\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>We have a wide range of accounts to fit everyone, regardless of situation or lifestyle. So whether you want a basic account or one bursting with options, you will find the right account that meets your expectations.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-f5d24f4 elementor-tablet-align-center elementor-mobile-align-left elementor-invisible elementor-widget elementor-widget-button\" data-id=\"f5d24f4\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=\"https://accounts.choicehorizone.com\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
\t\t\t\t\t\t<span class=\"elementor-button-content-wrapper\">
\t\t\t\t\t\t<span class=\"elementor-button-text\">Get started</span>
\t\t</span>
\t\t\t\t\t</a>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0ff8adf\" data-id=\"0ff8adf\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-9b65099 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"9b65099\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img fetchpriority=\"high\" decoding=\"async\" width=\"562\" height=\"411\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1.webp\" class=\"attachment-full size-full wp-image-160\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1-300x219.webp 300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d7d0881 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"d7d0881\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"562\" height=\"410\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2.webp\" class=\"attachment-full size-full wp-image-161\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2-300x219.webp 300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-028cccd elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"028cccd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:600}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"562\" height=\"197\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3.webp\" class=\"attachment-full size-full wp-image-162\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3-300x105.webp 300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9c2dddd elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"9c2dddd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:850}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"562\" height=\"253\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4.webp\" class=\"attachment-full size-full wp-image-163\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4-300x135.webp 300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-f5dd543 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"f5dd543\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-09c58ac\" data-id=\"09c58ac\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-4995696 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"4995696\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0a6ef49\" data-id=\"0a6ef49\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-c7ee751 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"c7ee751\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">We provide the best service for you</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-43091c0\" data-id=\"43091c0\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3c4eab7 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"3c4eab7\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon LLC. is designed to provide easy and convenient access to your funds, because you have worked hard all month.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e3b4d55\" data-id=\"e3b4d55\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-0882781 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-invisible elementor-widget elementor-widget-bdt-total-count\" data-id=\"0882781\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-total-count.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter bdt-total-count\" data-settings=\"{&quot;id&quot;:&quot;bdt-total-count-data-0882781&quot;,&quot;countStart&quot;:0,&quot;countNumber&quot;:99,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;decimalPlaces&quot;:&quot;0&quot;,&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;counterSeparator&quot;:null,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterPrefix&quot;:&quot;&quot;,&quot;counterSuffix&quot;:&quot;%&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-total-count-content\">
\t\t\t\t\t\t\t\t\t\t\t
            <div class=\"bdt-total-count-number\">
            <span class=\"bdt-count-this\"
                  id=\"bdt-total-count-data-0882781\" >
                                </span>
            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-total-count-content-text\"                    >
\t\t\t\t\tSatisfaction rate                </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-41e2465 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-invisible elementor-widget elementor-widget-bdt-total-count\" data-id=\"41e2465\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-total-count.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t            <div class=\"bdt-advanced-counter bdt-total-count\" data-settings=\"{&quot;id&quot;:&quot;bdt-total-count-data-41e2465&quot;,&quot;countStart&quot;:0,&quot;countNumber&quot;:98,&quot;language&quot;:[&quot;0&quot;,&quot;1&quot;,&quot;2&quot;,&quot;3&quot;,&quot;4&quot;,&quot;5&quot;,&quot;6&quot;,&quot;7&quot;,&quot;8&quot;,&quot;9&quot;],&quot;decimalPlaces&quot;:&quot;0&quot;,&quot;duration&quot;:&quot;2&quot;,&quot;useEasing&quot;:&quot;yes&quot;,&quot;useGrouping&quot;:&quot;no&quot;,&quot;counterSeparator&quot;:null,&quot;decimalSymbol&quot;:&quot;.&quot;,&quot;counterPrefix&quot;:&quot;&quot;,&quot;counterSuffix&quot;:&quot;M&quot;}\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t                <div class=\"bdt-total-count-content\">
\t\t\t\t\t\t\t\t\t\t\t
            <div class=\"bdt-total-count-number\">
            <span class=\"bdt-count-this\"
                  id=\"bdt-total-count-data-41e2465\" >
                                </span>
            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <h4 class=\"bdt-total-count-content-text\"                    >
\t\t\t\t\tRegistered users                </h4>
\t\t\t            </div>
            </div>
\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-4c5c2f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible\" data-id=\"4c5c2f7\" data-element_type=\"section\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8ff4dc8\" data-id=\"8ff4dc8\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-de51ada elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon\" data-id=\"de51ada\" data-element_type=\"widget\" data-widget_type=\"icon.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-icon-wrapper\">
\t\t\t<div class=\"elementor-icon\">
\t\t\t<i aria-hidden=\"true\" class=\"far fa-credit-card\"></i>\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-f2c8fb5 elementor-widget elementor-widget-heading\" data-id=\"f2c8fb5\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h4 class=\"elementor-heading-title elementor-size-default\">Super easy to use</h4>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-25b655c\" data-id=\"25b655c\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-cb8885a elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon\" data-id=\"cb8885a\" data-element_type=\"widget\" data-widget_type=\"icon.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-icon-wrapper\">
\t\t\t<div class=\"elementor-icon\">
\t\t\t<i aria-hidden=\"true\" class=\"fas fa-id-card-alt\"></i>\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-be24523 elementor-widget elementor-widget-heading\" data-id=\"be24523\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h4 class=\"elementor-heading-title elementor-size-default\">Send and receive money effeciently</h4>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5527a87\" data-id=\"5527a87\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-b76bf13 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon\" data-id=\"b76bf13\" data-element_type=\"widget\" data-widget_type=\"icon.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-icon-wrapper\">
\t\t\t<div class=\"elementor-icon\">
\t\t\t<i aria-hidden=\"true\" class=\"fas fa-shield-virus\"></i>\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-5d4a977 elementor-widget elementor-widget-heading\" data-id=\"5d4a977\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h4 class=\"elementor-heading-title elementor-size-default\">Safe and protected</h4>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-96bf821\" data-id=\"96bf821\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3a56cb7 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon\" data-id=\"3a56cb7\" data-element_type=\"widget\" data-widget_type=\"icon.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-icon-wrapper\">
\t\t\t<div class=\"elementor-icon\">
\t\t\t<i aria-hidden=\"true\" class=\"far fa-money-bill-alt\"></i>\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d1b05af elementor-widget elementor-widget-heading\" data-id=\"d1b05af\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h4 class=\"elementor-heading-title elementor-size-default\">More efficient transaction fees</h4>\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-ec44f11 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"ec44f11\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b6f5bcb elementor-invisible\" data-id=\"b6f5bcb\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-6e23442 elementor-position-left bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"6e23442\" data-element_type=\"widget\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h4 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tMaximum cashback fee for virtual account  transactions is \$49 for 8 months.\t\t\t\t</span>
\t\t\t</h4>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-11625c1 elementor-widget elementor-widget-text-editor\" data-id=\"11625c1\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>The program period runs from 14 December 2021 to 24 November 2022.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-527c1fd elementor-widget-divider--view-line elementor-widget elementor-widget-divider\" data-id=\"527c1fd\" data-element_type=\"widget\" data-widget_type=\"divider.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-divider\">
\t\t\t<span class=\"elementor-divider-separator\">
\t\t\t\t\t\t</span>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-5983602 elementor-widget elementor-widget-text-editor\" data-id=\"5983602\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Transaction fees will be calculated when the merchant can make a transaction.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d0643a4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider\" data-id=\"d0643a4\" data-element_type=\"widget\" data-widget_type=\"divider.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-divider\">
\t\t\t<span class=\"elementor-divider-separator\">
\t\t\t\t\t\t</span>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-b7ac6b8 elementor-widget elementor-widget-text-editor\" data-id=\"b7ac6b8\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Cashback will be paid up to 1 week after registration for 8 months.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-ba05e2d elementor-widget-divider--view-line elementor-widget elementor-widget-divider\" data-id=\"ba05e2d\" data-element_type=\"widget\" data-widget_type=\"divider.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-divider\">
\t\t\t<span class=\"elementor-divider-separator\">
\t\t\t\t\t\t</span>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cd26b52\" data-id=\"cd26b52\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-c60b76d elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"c60b76d\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Get the best services with the lowest fees</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-6e6db94 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"6e6db94\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>At Choice Horizon LLC. , we believe that the beauty of life lies in the little things that give us a better expression of ourselves, make us more social and connect emotionally.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-7d24a4d elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7d24a4d\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0023add\" data-id=\"0023add\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-bbc19f8 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"bbc19f8\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">How Choice Horizon works</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-8b42dc6 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"8b42dc6\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9fc6691 elementor-invisible elementor-widget elementor-widget-bdt-tabs\" data-id=\"9fc6691\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-tabs.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t

        <div class=\"bdt-tabs-area\">

            <div id=\"bdt-tabs-9fc6691\" class=\"bdt-tabs  bdt-tabs-default\" data-settings=\"{&quot;id&quot;:&quot;bdt-tabs-9fc6691&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;hashTopOffset&quot;:70,&quot;hashScrollspyTime&quot;:1500,&quot;navStickyOffset&quot;:1,&quot;linkWidgetSettings&quot;:[&quot;#pin-customization&quot;,&quot;#flexible-interface&quot;,&quot;#payment-tracking&quot;],&quot;linkWidgetId&quot;:&quot;9fc6691&quot;}\">
                
                
                        <div >
            <div >
                <div class=\"bdt-tab bdt-tab-default bdt-flex-center\" data-bdt-tab=\"connect: #bdt-tab-content-9fc6691;\" data-bdt-height-match=\"target: &gt; .bdt-tabs-item &gt; .bdt-tabs-item-title; row: false;\">
                                            <div class=\"bdt-tabs-item\">
                            <a data-title=\"1-register-an-account\" class=\"bdt-tabs-item-title\" id=\"bdt-tab-1-register-an-account\" data-tab-index=\"0\" href=\"index.html#\">
                                <div class=\"bdt-tab-text-wrapper bdt-flex-column\">

                                    <div class=\"bdt-tab-title-icon-wrapper\">

                                        
                                                                                    <span class=\"bdt-tab-text\">
                                                1. Register An Account                                            </span>
                                        
                                        
                                    </div>

                                    
                                </div>
                            </a>
                        </div>
                                            <div class=\"bdt-tabs-item\">
                            <a data-title=\"2-verify-identity\" class=\"bdt-tabs-item-title\" id=\"bdt-tab-2-verify-identity\" data-tab-index=\"1\" href=\"index.html#\">
                                <div class=\"bdt-tab-text-wrapper bdt-flex-column\">

                                    <div class=\"bdt-tab-title-icon-wrapper\">

                                        
                                                                                    <span class=\"bdt-tab-text\">
                                                2. Verify Identity                                            </span>
                                        
                                        
                                    </div>

                                    
                                </div>
                            </a>
                        </div>
                                            <div class=\"bdt-tabs-item\">
                            <a data-title=\"3-start-transactions\" class=\"bdt-tabs-item-title\" id=\"bdt-tab-3-start-transactions\" data-tab-index=\"2\" href=\"index.html#\">
                                <div class=\"bdt-tab-text-wrapper bdt-flex-column\">

                                    <div class=\"bdt-tab-title-icon-wrapper\">

                                        
                                                                                    <span class=\"bdt-tab-text\">
                                                3. Start Transactions                                            </span>
                                        
                                        
                                    </div>

                                    
                                </div>
                            </a>
                        </div>
                                    </div>
            </div>
        </div>


                                    
        <div class=\"bdt-switcher-wrapper\">
            <div id=\"bdt-tab-content-9fc6691\" class=\"bdt-switcher bdt-switcher-item-content\">
                                                        <div class=\"\" data-content-id=\"1-register-an-account\">
                        <div>
                                                    </div>
                    </div>
                                                        <div class=\"\" data-content-id=\"2-verify-identity\">
                        <div>
                                                    </div>
                    </div>
                                                        <div class=\"\" data-content-id=\"3-start-transactions\">
                        <div>
                                                    </div>
                    </div>
                            </div>
        </div>
                    
                                <a href=\"index.html#\" id=\"bottom-anchor-9fc6691\" data-bdt-hidden></a>
            </div>
        </div>
    \t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-7b31d04 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7b31d04\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4ab55e0\" data-id=\"4ab55e0\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-3ed08af3 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"3ed08af3\" data-element_type=\"section\" id=\"pin-customization\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-696cb4d5\" data-id=\"696cb4d5\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-1fa6f037 elementor-widget elementor-widget-image\" data-id=\"1fa6f037\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1033\" height=\"712\" src=\"wp-content/uploads/2022/07/undraw_secure_login_pdn4.png\" class=\"attachment-full size-full wp-image-310\" alt=\"\" srcset=\"wp-content/uploads/2022/07/undraw_secure_login_pdn4.png 1033w, wp-content/uploads/2022/07/undraw_secure_login_pdn4-300x207.png 300w, wp-content/uploads/2022/07/undraw_secure_login_pdn4-1024x706.png 1024w, wp-content/uploads/2022/07/undraw_secure_login_pdn4-768x529.png 768w, wp-content/uploads/2022/07/undraw_secure_login_pdn4-650x448.png 650w\" sizes=\"(max-width: 1033px) 100vw, 1033px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7b6e4e90\" data-id=\"7b6e4e90\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2caa449b elementor-widget elementor-widget-heading\" data-id=\"2caa449b\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">1. Register An Account</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-3a978b2d elementor-widget elementor-widget-text-editor\" data-id=\"3a978b2d\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>The Choice Horizon Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-fd96ef7 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"fd96ef7\" data-element_type=\"section\" id=\"flexible-interface\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e5e5895\" data-id=\"e5e5895\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-fd109bc elementor-widget elementor-widget-image\" data-id=\"fd109bc\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"783\" height=\"794\" src=\"wp-content/uploads/2022/07/undraw_Authentication_re_svpt.png\" class=\"attachment-full size-full wp-image-311\" alt=\"\" srcset=\"wp-content/uploads/2022/07/undraw_Authentication_re_svpt.png 783w, wp-content/uploads/2022/07/undraw_Authentication_re_svpt-296x300.png 296w, wp-content/uploads/2022/07/undraw_Authentication_re_svpt-768x779.png 768w, wp-content/uploads/2022/07/undraw_Authentication_re_svpt-641x650.png 641w\" sizes=\"(max-width: 783px) 100vw, 783px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a240e37\" data-id=\"a240e37\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-313f88d elementor-widget elementor-widget-heading\" data-id=\"313f88d\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">2. Verify Identity</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-7a8a77d elementor-widget elementor-widget-text-editor\" data-id=\"7a8a77d\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>At Choice Horizon Bank we know that issues like security, protection from fraud and personal privacy, we make to sure to take extra steps by verifying customer identity with our state of art software</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-inner-section elementor-element elementor-element-d5dd9b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"d5dd9b0\" data-element_type=\"section\" id=\"payment-tracking\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-da6fc84\" data-id=\"da6fc84\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-166a2e3 elementor-widget elementor-widget-image\" data-id=\"166a2e3\" data-element_type=\"widget\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1144\" height=\"746\" src=\"wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2.png\" class=\"attachment-full size-full wp-image-312\" alt=\"\" srcset=\"wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2.png 1144w, wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-300x196.png 300w, wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-1024x668.png 1024w, wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-768x501.png 768w, wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-650x424.png 650w\" sizes=\"(max-width: 1144px) 100vw, 1144px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-834d209\" data-id=\"834d209\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-64dd3de elementor-widget elementor-widget-heading\" data-id=\"64dd3de\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">3. Start Transactions</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-6e3abb1 elementor-widget elementor-widget-text-editor\" data-id=\"6e3abb1\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon is designed to facilitate financial inclusion, permitting individuals with minimal amount of income to enjoy all benefits we offer. Enjoy a value adding banking relationship with us.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-2b52e3b elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"2b52e3b\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-809ac74\" data-id=\"809ac74\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2013003 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"2013003\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">We help your needs to receive payments faster</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-3bcfff4 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"3bcfff4\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-57eb409 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-widget-mobile__width-inherit elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list\" data-id=\"57eb409\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"icon-list.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<link rel=\"stylesheet\" href=\"wp-content/plugins/elementor/assets/css/widget-icon-list.min.css\">\t\t<ul class=\"elementor-icon-list-items\">
\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Bank Transfer</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Credit Card</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Debit Card</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9da40b7 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-widget-mobile__width-inherit elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list\" data-id=\"9da40b7\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"icon-list.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<ul class=\"elementor-icon-list-items\">
\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Visa</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">E-money</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-check-square\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Mobile Money</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b835fa2\" data-id=\"b835fa2\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2e21171 ep-parallax-effects-yes elementor-invisible elementor-widget elementor-widget-image\" data-id=\"2e21171\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;ep_parallax_effects_show&quot;:&quot;yes&quot;,&quot;ep_parallax_effects_y&quot;:&quot;yes&quot;,&quot;ep_parallax_effects_y_start&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-100,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_y_end&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_rotate_start&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_rotate_end&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_scale_start&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_scale_end&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_hue_value&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_sepia_value&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_easing_value&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_viewport_value&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;ep_parallax_effects_target&quot;:&quot;self&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"742\" height=\"469\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1.webp\" class=\"attachment-full size-full wp-image-165\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1.webp 742w, wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1-300x190.webp 300w, wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1-650x411.webp 650w\" sizes=\"(max-width: 742px) 100vw, 742px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-21bdb4d elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image\" data-id=\"21bdb4d\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"581\" height=\"266\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2.webp\" class=\"attachment-full size-full wp-image-166\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2.webp 581w, wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2-300x137.webp 300w\" sizes=\"(max-width: 581px) 100vw, 581px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-1a8fb8e elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image\" data-id=\"1a8fb8e\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"581\" height=\"217\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3.webp\" class=\"attachment-full size-full wp-image-167\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3.webp 581w, wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3-300x112.webp 300w\" sizes=\"(max-width: 581px) 100vw, 581px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-1ba76f2 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"1ba76f2\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f5dd6d8\" data-id=\"f5dd6d8\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2bf6703 elementor-invisible elementor-widget elementor-widget-image\" data-id=\"2bf6703\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1098\" height=\"672\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1.webp\" class=\"attachment-full size-full wp-image-168\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1.webp 1098w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-300x184.webp 300w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-1024x627.webp 1024w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-768x470.webp 768w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-650x398.webp 650w\" sizes=\"(max-width: 1098px) 100vw, 1098px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c06585e elementor-invisible elementor-widget elementor-widget-image\" data-id=\"c06585e\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"527\" height=\"333\" src=\"wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2.webp\" class=\"attachment-full size-full wp-image-169\" alt=\"\" srcset=\"wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2.webp 527w, wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2-300x190.webp 300w\" sizes=\"(max-width: 527px) 100vw, 527px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c558b25\" data-id=\"c558b25\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-e1fd041 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"e1fd041\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">One dashboard for all business financial needs</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-efc3b24 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"efc3b24\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon is designed to facilitate financial inclusion, permitting individuals with minimal amount of income to enjoy all benefits we offer. Enjoy a value adding banking relationship with us.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-44268a6 elementor-position-left elementor-widget__width-initial elementor-widget-tablet__width-auto bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"44268a6\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tEasy to use\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t\t\t\t<div class=\"bdt-advanced-icon-box-sub-title\">
\t\t\t\tFor everyone\t\t\t</div>
\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-b93108b elementor-position-left elementor-widget__width-initial elementor-widget-tablet__width-auto bdt-icon-type-icon elementor-vertical-align-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"b93108b\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\">
\t\t\t\t<span >
\t\t\t\t\tSuper safe\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t\t\t\t<div class=\"bdt-advanced-icon-box-sub-title\">
\t\t\t\tSecurity system\t\t\t</div>
\t\t
\t\t\t\t\t\t
\t\t\t\t
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-dd2bfca elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"dd2bfca\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e09f850\" data-id=\"e09f850\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-10bdb05 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"10bdb05\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Simplify your financial trancasction today!</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-8d99bef elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"8d99bef\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Forgot your PIN? Want a saving account to help with your business transactions? No matter what you might need, we’re always on hand to happily provide answers and assistance.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-6aec56f elementor-button-align-center elementor-invisible elementor-widget elementor-widget-bdt-contact-form\" data-id=\"6aec56f\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-contact-form.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-contact-form bdt-contact-form-skin-default\">
\t\t\t<div class=\"elementor-form-fields-wrapper\">
\t\t\t\t\t\t<div class=\"bdt-contact-form-wrapper\">
\t\t\t<form class=\"bdt-contact-form-form bdt-form-stacked bdt-grid bdt-grid-small without-recaptcha\" data-bdt-grid=\"\" action=\"https://choicehorizone.com/wp-admin/admin-ajax.php\" method=\"post\">

\t\t\t\t
\t\t\t\t\t<div class=\"bdt-field-group elementor-field-required bdt-width-1-2@m bdt-name-email-inline\">
\t\t\t\t\t\t<div class=\"bdt-form-controls\"><input type=\"text\" name=\"name\" id=\"user_name6aec56f\" placeholder=\"Your Name\" class=\"bdt-input bdt-form-default\" required =\"required\"></div>\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"bdt-field-group elementor-field-required bdt-width-1-2@m bdt-name-email-inline\">
\t\t\t\t\t\t<div class=\"bdt-form-controls\"><input type=\"email\" name=\"email\" id=\"email6aec56f\" placeholder=\"example@email.com\" class=\"bdt-input bdt-form-default\" required=\"required\"></div>\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<input type=\"hidden\" class=\"widget_id\" name=\"widget_id\" value=\"6aec56f\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"bdt-sf-6aec56f\" value=\"true\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"page_id\" name=\"page_id\" value=\"172\"/>

\t\t\t\t\t<div class=\"elementor-field-type-submit bdt-field-group bdt-flex bdt-width-1-1\">
\t\t\t\t\t\t<button type=\"submit\" class=\"elementor-button bdt-button bdt-button-primary\" name=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Get started</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t</div>\t

\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"element_pack_contact_form\" />

\t\t\t\t\t
\t\t\t</form>
\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-52df81e elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"52df81e\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-32b2f89\" data-id=\"32b2f89\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-3f43081 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"3f43081\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">We help your needs to receive payments faster</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-39667bc elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"39667bc\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Choice Horizon has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-f373f3e elementor-invisible elementor-widget elementor-widget-bdt-accordion\" data-id=\"f373f3e\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-accordion.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t        <div class=\"bdt-accordion-container\">
            <div id=\"bdt-accordion-f373f3e\" class=\"bdt-accordion\" data-bdt-accordion=\"{&quot;collapsible&quot;:true,&quot;multiple&quot;:false,&quot;transition&quot;:&quot;ease-in-out&quot;}\" data-settings=\"{&quot;id&quot;:&quot;bdt-accordion-f373f3e&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;activeScrollspy&quot;:null,&quot;hashTopOffset&quot;:false,&quot;hashScrollspyTime&quot;:false}\">
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-01-what-should-i-do-if-i-forgot-my-security-pin\" data-accordion-index=\"0\" data-title=\"01-what-should-i-do-if-i-forgot-my-security-pin\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                01. What should I do if I forgot my security pin?                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Contact our support team and they will help with all issues you are facing.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-02-how-to-register-on-this-platform\" data-accordion-index=\"1\" data-title=\"02-how-to-register-on-this-platform\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                02. How to register on this platform?                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Click on the secured login button on the header and the get started button.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-03-what-should-i-do-if-my-account-is-banned\" data-accordion-index=\"2\" data-title=\"03-what-should-i-do-if-my-account-is-banned\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                03. What should i do if my account is banned?                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Contact our support team and they will help with all issues you are facing.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-04-forgotten-atm-pin\" data-accordion-index=\"3\" data-title=\"04-forgotten-atm-pin\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                04. Forgotten ATM pin                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Contact our support team and they will help with all issues you are facing.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-05-change-of-phone-number\" data-accordion-index=\"4\" data-title=\"05-change-of-phone-number\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                05. Change of Phone Number                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>You can do that on your account dashboard.</p>                        </div>
                    </div>
                                    <div class=\"bdt-accordion-item\">
                        <div class=\"bdt-accordion-title bdt-flex bdt-flex-middle bdt-flex-between\" id=\"bdt-accordion-06-over-limit-following-temporary-card-limit-increase\" data-accordion-index=\"5\" data-title=\"06-over-limit-following-temporary-card-limit-increase\" role=\"heading\">

                                                            <span class=\"bdt-accordion-icon bdt-flex-align-right\" aria-hidden=\"true\">

                                                                            <span class=\"bdt-accordion-icon-closed\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-plus\"></i>                                        </span>
                                    
                                                                            <span class=\"bdt-accordion-icon-opened\">
                                            <i aria-hidden=\"true\" class=\"fa-fw ti ti-close\"></i>                                        </span>
                                    
                                </span>
                            
                            <span class=\"bdt-title bdt-flex bdt-flex-middle\">

                                                                06. Over Limit Following Temporary Card Limit Increase                            </span>

                        </div>
                        <div class=\"bdt-accordion-content\">
                            <p>Contact our support team and they will help with all issues you are facing.</p>                        </div>
                    </div>
                            </div>
        </div>
\t\t</div>
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

\t<footer class=\"uicore-footer-wrapper elementor\">        
\t<div class=\"uicore uicore-inner-footer elementor-section elementor-section-boxed \">
            <div class=\"uicore elementor-container four_left_2 \">

            <div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
<div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
<figure class=\"wp-block-image size-large is-resized\"><img loading=\"lazy\" decoding=\"async\" src=\"wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png\" alt=\"\" class=\"wp-image-184\" width=\"184\" height=\"60\" srcset=\"wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png 1024w, wp-content/uploads/2022/07/Logopit_1657607749541-300x100.png 300w, wp-content/uploads/2022/07/Logopit_1657607749541-768x256.png 768w, wp-content/uploads/2022/07/Logopit_1657607749541-1536x512.png 1536w, wp-content/uploads/2022/07/Logopit_1657607749541-2048x683.png 2048w, wp-content/uploads/2022/07/Logopit_1657607749541-650x217.png 650w\" sizes=\"(max-width: 184px) 100vw, 184px\" /></figure>



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
                \t\t\t\t\t<a href=\"index.html\" rel=\"home\">
\t\t\t\t\t\t<img class=\"uicore uicore-logo\"  src=\"wp-content/uploads/2022/07/Logopit_1657606850818.png\" alt=\"Horizon\"/>
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
\t\t\t\t<div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"services/index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
<li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
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
<link rel='stylesheet' id='ep-advanced-icon-box-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-icon-box.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-advanced-counter-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-counter.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-total-count-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-total-count.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-tabs-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-tabs.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-contact-form-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-contact-form.css@ver=5.15.2.css' media='all' />
<link rel='stylesheet' id='ep-accordion-css' href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-accordion.css@ver=5.15.2.css' media='all' />
<script src=\"wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js@ver=2.8.5\" id=\"elementskit-framework-js-frontend-js\"></script>
<script id=\"elementskit-framework-js-frontend-js-after\">
\t\tvar elementskit = {
\t\t\tresturl: 'https://choicehorizone.com/wp-json/elementskit/v1/',
\t\t}

\t\t
</script>
<script src=\"wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js@ver=2.8.5\" id=\"ekit-widget-scripts-js\"></script>
<script src=\"wp-content/uploads/uicore-global.js@ver=7795\" id=\"uicore_global-js\"></script>
<script src=\"wp-content/plugins/bdthemes-element-pack/assets/vendor/js/countUp.min.js@ver=2.0.4\" id=\"advanced-counter-js\"></script>
<script id=\"bdt-uikit-js-extra\">
var element_pack_ajax_login_config = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"language\":\"en\",\"loadingmessage\":\"Sending user info, please wait...\",\"unknownerror\":\"Unknown error, make sure access is correct!\"};
var ElementPackConfig = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"5a0d3f4c6e\",\"data_table\":{\"language\":{\"lengthMenu\":\"Show _MENU_ Entries\",\"info\":\"Showing _START_ to _END_ of _TOTAL_ entries\",\"search\":\"Search :\",\"paginate\":{\"previous\":\"Previous\",\"next\":\"Next\"}}},\"contact_form\":{\"sending_msg\":\"Sending message please wait...\",\"captcha_nd\":\"Invisible captcha not defined!\",\"captcha_nr\":\"Could not get invisible captcha response!\"},\"mailchimp\":{\"subscribing\":\"Subscribing you please wait...\"},\"elements_data\":{\"sections\":[],\"columns\":[],\"widgets\":[]}};
</script>
<script src=\"wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min.js@ver=3.7.2\" id=\"bdt-uikit-js\"></script>
<script src=\"wp-content/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.13.2\" id=\"elementor-webpack-runtime-js\"></script>
<script src=\"wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.13.2\" id=\"elementor-frontend-modules-js\"></script>
<script src=\"wp-includes/js/jquery/ui/core.min.js@ver=1.13.2\" id=\"jquery-ui-core-js\"></script>
<script id=\"elementor-frontend-js-before\">
var elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false,\"isScriptDebug\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"download\":\"Download\",\"downloadImage\":\"Download image\",\"fullscreen\":\"Fullscreen\",\"zoom\":\"Zoom\",\"share\":\"Share\",\"playVideo\":\"Play Video\",\"previous\":\"Previous\",\"next\":\"Next\",\"close\":\"Close\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"responsive\":{\"breakpoints\":{\"mobile\":{\"label\":\"Mobile Portrait\",\"value\":767,\"default_value\":767,\"direction\":\"max\",\"is_enabled\":true},\"mobile_extra\":{\"label\":\"Mobile Landscape\",\"value\":880,\"default_value\":880,\"direction\":\"max\",\"is_enabled\":false},\"tablet\":{\"label\":\"Tablet Portrait\",\"value\":1024,\"default_value\":1024,\"direction\":\"max\",\"is_enabled\":true},\"tablet_extra\":{\"label\":\"Tablet Landscape\",\"value\":1200,\"default_value\":1200,\"direction\":\"max\",\"is_enabled\":false},\"laptop\":{\"label\":\"Laptop\",\"value\":1366,\"default_value\":1366,\"direction\":\"max\",\"is_enabled\":false},\"widescreen\":{\"label\":\"Widescreen\",\"value\":2400,\"default_value\":2400,\"direction\":\"min\",\"is_enabled\":false}}},\"version\":\"3.13.2\",\"is_static\":false,\"experimentalFeatures\":{\"e_dom_optimization\":true,\"e_optimized_assets_loading\":true,\"e_optimized_css_loading\":true,\"a11y_improvements\":true,\"additional_custom_breakpoints\":true,\"landing-pages\":true},\"urls\":{\"assets\":\"https:\\/\\/choicehorizone.com\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"swiperClass\":\"swiper-container\",\"settings\":{\"page\":[],\"editorPreferences\":[]},\"kit\":{\"active_breakpoints\":[\"viewport_mobile\",\"viewport_tablet\"],\"global_image_lightbox\":\"yes\",\"lightbox_enable_counter\":\"yes\",\"lightbox_enable_fullscreen\":\"yes\",\"lightbox_enable_zoom\":\"yes\",\"lightbox_enable_share\":\"yes\",\"lightbox_title_src\":\"title\",\"lightbox_description_src\":\"description\"},\"post\":{\"id\":172,\"title\":\"Horizon%20%E2%80%93%20More%20than%20you%20can%20see\",\"excerpt\":\"\",\"featuredImage\":false}};
</script>
<script src=\"wp-content/plugins/elementor/assets/js/frontend.min.js@ver=3.13.2\" id=\"elementor-frontend-js\"></script>
<script src=\"wp-content/plugins/bdthemes-element-pack/assets/js/element-pack-site.min.js@ver=5.15.2\" id=\"element-pack-site-js\"></script>
<script src=\"wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js@ver=2.8.5\" id=\"animate-circle-js\"></script>
<script id=\"elementskit-elementor-js-extra\">
var ekit_config = {\"ajaxurl\":\"https:\\/\\/choicehorizone.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"e0a234a04f\"};
</script>
<script src=\"wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js@ver=2.8.5\" id=\"elementskit-elementor-js\"></script>
<script src=\"wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js@ver=2.8.5\" id=\"swiper-js\"></script>
</body>
</html>
", "choicehorizone.com/index.html", "C:\\xampp\\htdocs\\eliteforte\\templates\\choicehorizone.com\\index.html");
    }
}
