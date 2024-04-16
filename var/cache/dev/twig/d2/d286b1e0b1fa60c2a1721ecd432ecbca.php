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

/* base.html.twig */
class __TwigTemplate_2b1b367ca33a9e6242c17549b0a8e24a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'customStyle' => [$this, 'block_customStyle'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'customJs' => [$this, 'block_customJs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('main', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    
        <!doctype html>
        <html lang=\"en-US\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">

            <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "</title>
        <meta name='robots' content='noindex, nofollow' />
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Feed\" href=\"feed/index.html\" />
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Comments Feed\" href=\"comments/feed/index.html\" />
        <script>
        window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/72x72\\/\",\"ext\":\".png\") }},\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/Eliteforte.net\\/assets/home/wp-includes\\/js\\/wp-emoji-release.min.js?ver=6.5\"}};
        /*! This file is auto-generated */
        !function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case\"flag\":return n(e,\"\\ud83c\\udff3\\ufe0f\\u200d\\u26a7\\ufe0f\",\"\\ud83c\\udff3\\ufe0f\\u200b\\u26a7\\ufe0f\")?!1:!n(e,\"\\ud83c\\uddfa\\ud83c\\uddf3\",\"\\ud83c\\uddfa\\u200b\\ud83c\\uddf3\")&&!n(e,\"\\ud83c\\udff4\\udb40\\udc67\\udb40\\udc62\\udb40\\udc65\\udb40\\udc6e\\udb40\\udc67\\udb40\\udc7f\",\"\\ud83c\\udff4\\u200b\\udb40\\udc67\\u200b\\udb40\\udc62\\u200b\\udb40\\udc65\\u200b\\udb40\\udc6e\\u200b\\udb40\\udc67\\u200b\\udb40\\udc7f\");case\"emoji\":return!n(e,\"\\ud83d\\udc26\\u200d\\u2b1b\",\"\\ud83d\\udc26\\u200b\\u2b1b\")}return!1}function f(e,t,n){var r=\"undefined\"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement(\"canvas\"),a=r.getContext(\"2d\",{willReadFrequently:!0}),o=(a.textBaseline=\"top\",a.font=\"600 32px Arial\",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement(\"script\");t.src=e,t.defer=!0,i.head.appendChild(t)}\"undefined\"!=typeof Promise&&(o=\"wpEmojiSettingsSupports\",s=[\"flag\",\"emoji\"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener(\"DOMContentLoaded\",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if(\"object\"==typeof e&&\"number\"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&\"object\"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if(\"undefined\"!=typeof Worker&&\"undefined\"!=typeof OffscreenCanvas&&\"undefined\"!=typeof URL&&URL.createObjectURL&&\"undefined\"!=typeof Blob)try{var e=\"postMessage(\"+f.toString()+\"(\"+[JSON.stringify(s),u.toString(),p.toString()].join(\",\")+\"));\",r=new Blob([e],{type:\"text/javascript\"}),a=new Worker(URL.createObjectURL(r),{name:\"wpTestEmojiSupports\"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],\"flag\"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
        </script>
        <link rel='stylesheet' id='bdt-uikit-css' href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css@ver=3.7.2.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='element-pack-site-css' href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/element-pack-site.css@ver=5.15.2.css"), "html", null, true);
        echo " media='all' />
        <style id='wp-emoji-styles-inline-css'>

            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        ";
        // line 37
        $this->displayBlock('customStyle', $context, $blocks);
        // line 40
        echo "        <link rel='stylesheet' id='wp-block-library-css' href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-includes/css/dist/block-library/style.min.css@ver=6.5.css"), "html", null, true);
        echo " media='all' />
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
        <link rel='stylesheet' id='elementor-icons-ekiticons-css' href=";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css@ver=2.8.5.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='elementor-icons-css' href=";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css@ver=5.20.0.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='elementor-frontend-css' href=";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/css/frontend-lite.min.css@ver=3.13.2.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='swiper-css' href=";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css@ver=5.3.6.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='elementor-post-172-css' href=";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/elementor/css/post-172.css@ver=1684262608.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='uicore_global-css' href=";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/uicore-global.css@ver=7795.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='ekit-widget-styles-css' href=";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css@ver=2.8.5.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='ekit-responsive-css' href=";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css@ver=2.8.5.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Heebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5' media='all' />
        <link rel='stylesheet' id='elementor-icons-shared-0-css' href=";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css@ver=5.15.3.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='elementor-icons-fa-regular-css' href=";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css@ver=5.15.3.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='elementor-icons-fa-solid-css' href=";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css@ver=5.15.3.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='elementor-icons-shared-1-css' href=";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/uicore-framework/assets/fonts/themify-icons.css@ver=1.0.0.css"), "html", null, true);
        echo " media='all' />
        <link rel='stylesheet' id='elementor-icons-uicore-icons-css' href=";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/uicore-framework/assets/fonts/themify-icons.css@ver=1.0.0.css"), "html", null, true);
        echo " media='all' />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin><script src=";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-includes/js/jquery/jquery.min.js@ver=3.7.1"), "html", null, true);
        echo " id=\"jquery-core-js\"></script>
        <script src=";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.1"), "html", null, true);
        echo " id=\"jquery-migrate-js\"></script>
        <link rel=\"https://api.w.org/\" href=";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-json/index.html"), "html", null, true);
        echo " /><link rel=\"alternate\" type=\"application/json\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-json/wp/v2/pages/172.html"), "html", null, true);
        echo " /><link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"xmlrpc.php@rsd.html\" />
        <meta name=\"generator\" content=\"WordPress 6.5\" />
        <link rel=\"canonical\" href=\"index.html\" />
        <link rel='shortlink' href='index.html' />
        <link rel=\"alternate\" type=\"application/json+oembed\" href=";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-json/oembed/1.0/embed@url=https%253A%252F%252FEliteforte.net%252F.html"), "html", null, true);
        echo " />
        <link rel=\"alternate\" type=\"text/xml+oembed\" href=";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-json/oembed/1.0/embed@url=https%253A%252F%252FEliteforte.net%252F&amp;format=xml.html"), "html", null, true);
        echo " />
        <meta name=\"generator\" content=\"Elementor 3.13.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto\">
        <meta name=\"theme-color\" content=\"#FFFFFF\" />
                <link rel=\"shortcut icon\" href=";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png"), "html", null, true);
        echo " >
                <link rel=\"icon\" href=";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png"), "html", null, true);
        echo " >
                <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png"), "html", null, true);
        echo ">
                <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png"), "html", null, true);
        echo ">
                <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png"), "html", null, true);
        echo ">
                <link rel=\"apple-touch-icon\" href=";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png"), "html", null, true);
        echo ">
                
        </head>

        <body class=\"home page-template-default page page-id-172 wp-embed-responsive  uicore-menu-focus elementor-default elementor-kit-6 elementor-page elementor-page-172\">
                <!-- 1.1 uicore_before_body_content -->\t<div class=\"uicore-body-content\">
                <!-- 1.2 uicore_before_page_content -->\t\t<div id=\"uicore-page\">
                
                <div id=\"wrapper-navbar\" itemscope itemtype=\"http://schema.org/WebSite\" class=\"uicore uicore-navbar elementor-section elementor-section-boxed uicore-h-classic uicore-sticky ui-smart-sticky \"><div class=\"uicore-header-wrapper\">
                    <nav class=\"uicore elementor-container\">
                            <div class=\"uicore-branding\">
                        
                    <a href=";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " rel=\"home\">
                        <img class=\"uicore uicore-logo uicore-main\" src=";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png"), "html", null, true);
        echo " alt=\"Horizon\"/>
                        <img class=\"uicore uicore-logo uicore-second\" src=";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png"), "html", null, true);
        echo " alt=\"Horizon\" />
                        <img class=\"uicore uicore-logo uicore-mobile-main\" src=";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png"), "html", null, true);
        echo " alt=\"Horizon\" />
                        <img class=\"uicore uicore-logo uicore-mobile-second\" src=";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png"), "html", null, true);
        echo " alt=\"Horizon\" />
                    </a>

                        </div>
                        <div class='uicore-nav-menu'>
                    <div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo " aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
        </ul></div><div class=\"uicore uicore-extra\">            <div class=\"uicore-cta-wrapper\">
                        <a href=";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "
                            target=\"_self\"
                            class=\"uicore-btn uicore-inverted\">
                                Secure Login\t\t\t\t</a>
                    </div>
                </div>        </div>
                            <button type=\"button\" class=\"uicore-toggle uicore-ham\">
                        <span class=\"bars\">
                            <span class=\"bar\"></span>
                            <span class=\"bar\"></span>
                            <span class=\"bar\"></span>
                        </span>
                    </button>
                                </nav>

                    </div>
                </div><!-- #wrapper-navbar end -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "                
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_customStyle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customStyle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customStyle"));

        // line 38
        echo "            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 128
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 129
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 132
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 133
        echo "    <footer class=\"uicore-footer-wrapper elementor\">        
        <div class=\"uicore uicore-inner-footer elementor-section elementor-section-boxed \">
                <div class=\"uicore elementor-container four_left_2 \">

                <div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
    <div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
    <figure class=\"wp-block-image size-large is-resized\"><img loading=\"lazy\" decoding=\"async\" src=";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png"), "html", null, true);
        echo " alt=\"\" class=\"wp-image-184\" width=\"184\" height=\"60\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png"), "html", null, true);
        echo " 1024w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-300x100.png"), "html", null, true);
        echo " 300w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-768x256.png"), "html", null, true);
        echo " 768w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-1536x512.png"), "html", null, true);
        echo " 1536w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-2048x683.png"), "html", null, true);
        echo " 2048w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-650x217.png"), "html", null, true);
        echo " 650w sizes=\"(max-width: 184px) 100vw, 184px\" /></figure>



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
                        <p data-pm-slice=\"1 1 [&quot;bulletList&quot;,null,&quot;listItem&quot;,null]\">© 2024 Made with <a href=\"https://emojis.wiki/red-heart/\" data-mce-href=\"https://emojis.wiki/red-heart/\"><img data-mce-resize=\"false\" data-mce-placeholder=\"1\" data-wp-emoji=\"1\" class=\"emoji\" alt=\"❤️\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg\" data-mce-src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg\">️</a> from Ocean Sys for Elite Forte LLC. All Rights Reserved.</p>                    </div>
                        <div class=\"uicore-copy-socials uicore-animate\"><a class=\"uicore-social-icon uicore-link social_fb\" href=\"index.html#\" target=\"_blank\" aria-label=\"Facebook\"></a><a class=\"uicore-social-icon uicore-link social_tw\" href=\"index.html#\" target=\"_blank\" aria-label=\"Tweeter\"></a><a class=\"uicore-social-icon uicore-link social_in\" href=\"index.html#\" target=\"_blank\" aria-label=\"Instagram\"></a><a class=\"uicore-social-icon uicore-link social_th\" href=\"index.html#\" target=\"_blank\" aria-label=\"Twitch\"></a></div>                </div>
                </div>
            </div>

        </footer><!-- 1.5 uicore_content_end -->
    </div><!-- #page -->

    <div id=\"uicore-back-to-top\" class=\"uicore-back-to-top uicore-i-arrow\"></div>        <div class=\"uicore-navigation-wrapper uicore-navbar elementor-section elementor-section-boxed uicore-mobile-menu-wrapper
                    \">
                <nav class=\"uicore elementor-container\">
                    <div class=\"uicore-branding uicore-mobile\">
                                        <a href=";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo " rel=\"home\">
                            <img class=\"uicore uicore-logo\"  src=";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png"), "html", null, true);
        echo " alt=\"Horizon\"/>
                        </a>
                                    </div>


                    <div class=\"uicore-branding uicore-desktop\">
                                    </div>


                    <button type=\"button\" class=\"uicore-toggle uicore-ham\">
                        <span class=\"bars\">
                            <span class=\"bar\"></span>
                            <span class=\"bar\"></span>
                            <span class=\"bar\"></span>
                        </span>
                    </button>
                </nav>
                <div class=\"uicore-navigation-content\">
                    <div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"services/index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
    </ul></div><div class=\"uicore uicore-extra\">            <div class=\"uicore-cta-wrapper\">
                    <a href=";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "
                        target=\"_self\"
                        class=\"uicore-btn uicore-inverted\">
                            Secure Login\t\t\t\t</a>
                </div>
            </div>\t\t\t</div>
            </div>
            <!-- 1.6 uicore_body_end --></div>
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
        var s1 = document.createElement( 'script' ),s0=document.getElementsByTagName( 'script' )[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/64ac5e33cc26a871b02790eb/1h50kvvns';
        s1.charset = 'UTF-8';
        s1.setAttribute( 'crossorigin','*' );
        s0.parentNode.insertBefore( s1, s0 );
    })();
    </script>
    <!--End of Tawk.to Script (0.7.2)-->
    <link rel='stylesheet' id='ep-advanced-icon-box-css' href=";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-icon-box.css@ver=5.15.2.css"), "html", null, true);
        echo " media='all' />
    <link rel='stylesheet' id='ep-advanced-counter-css' href=";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-counter.css@ver=5.15.2.css"), "html", null, true);
        echo " media='all' />
    <link rel='stylesheet' id='ep-total-count-css' href=";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-total-count.css@ver=5.15.2.css"), "html", null, true);
        echo " media='all' />
    <link rel='stylesheet' id='ep-tabs-css' href=";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-tabs.css@ver=5.15.2.css"), "html", null, true);
        echo " media='all' />
    <link rel='stylesheet' id='ep-contact-form-css' href=";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-contact-form.css@ver=5.15.2.css"), "html", null, true);
        echo " media='all' />
    <link rel='stylesheet' id='ep-accordion-css' href=";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-accordion.css@ver=5.15.2.css"), "html", null, true);
        echo " media='all' />
    <script src=";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js@ver=2.8.5"), "html", null, true);
        echo " id=\"elementskit-framework-js-frontend-js\"></script>
    <script id=\"elementskit-framework-js-frontend-js-after\">
            var elementskit = {
                resturl: 'https://Eliteforte.net/assets/home/wp-json/elementskit/v1/',
            }

            
    </script>
    <script src=";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js@ver=2.8.5"), "html", null, true);
        echo " id=\"ekit-widget-scripts-js\"></script>
    <script src=";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/uicore-global.js@ver=7795"), "html", null, true);
        echo " id=\"uicore_global-js\"></script>
    <script src=";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/vendor/js/countUp.min.js@ver=2.0.4"), "html", null, true);
        echo " id=\"advanced-counter-js\"></script>
    <script id=\"bdt-uikit-js-extra\">
    var element_pack_ajax_login_config = {\"ajaxurl\":\"https:\\/\\/Eliteforte.net\\/wp-admin\\/admin-ajax.php\",\"language\":\"en\",\"loadingmessage\":\"Sending user info, please wait...\",\"unknownerror\":\"Unknown error, make sure access is correct!\"};
    var ElementPackConfig = {\"ajaxurl\":\"https:\\/\\/Eliteforte.net\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"5a0d3f4c6e\",\"data_table\":{\"language\":{\"lengthMenu\":\"Show _MENU_ Entries\",\"info\":\"Showing _START_ to _END_ of _TOTAL_ entries\",\"search\":\"Search :\",\"paginate\":{\"previous\":\"Previous\",\"next\":\"Next\"}}},\"contact_form\":{\"sending_msg\":\"Sending message please wait...\",\"captcha_nd\":\"Invisible captcha not defined!\",\"captcha_nr\":\"Could not get invisible captcha response!\"},\"mailchimp\":{\"subscribing\":\"Subscribing you please wait...\"},\"elements_data\":{\"sections\":[],\"columns\":[],\"widgets\":[]}};
    </script>
    <script src=";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min.js@ver=3.7.2"), "html", null, true);
        echo " id=\"bdt-uikit-js\"></script>
    <script src=";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.13.2"), "html", null, true);
        echo " id=\"elementor-webpack-runtime-js\"></script>
    <script src=";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.13.2"), "html", null, true);
        echo " id=\"elementor-frontend-modules-js\"></script>
    <script src=";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-includes/js/jquery/ui/core.min.js@ver=1.13.2"), "html", null, true);
        echo " id=\"jquery-ui-core-js\"></script>
    <script id=\"elementor-frontend-js-before\">
    var elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false,\"isScriptDebug\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"download\":\"Download\",\"downloadImage\":\"Download image\",\"fullscreen\":\"Fullscreen\",\"zoom\":\"Zoom\",\"share\":\"Share\",\"playVideo\":\"Play Video\",\"previous\":\"Previous\",\"next\":\"Next\",\"close\":\"Close\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"responsive\":{\"breakpoints\":{\"mobile\":{\"label\":\"Mobile Portrait\",\"value\":767,\"default_value\":767,\"direction\":\"max\",\"is_enabled\":true},\"mobile_extra\":{\"label\":\"Mobile Landscape\",\"value\":880,\"default_value\":880,\"direction\":\"max\",\"is_enabled\":false},\"tablet\":{\"label\":\"Tablet Portrait\",\"value\":1024,\"default_value\":1024,\"direction\":\"max\",\"is_enabled\":true},\"tablet_extra\":{\"label\":\"Tablet Landscape\",\"value\":1200,\"default_value\":1200,\"direction\":\"max\",\"is_enabled\":false},\"laptop\":{\"label\":\"Laptop\",\"value\":1366,\"default_value\":1366,\"direction\":\"max\",\"is_enabled\":false},\"widescreen\":{\"label\":\"Widescreen\",\"value\":2400,\"default_value\":2400,\"direction\":\"min\",\"is_enabled\":false}}},\"version\":\"3.13.2\",\"is_static\":false,\"experimentalFeatures\":{\"e_dom_optimization\":true,\"e_optimized_assets_loading\":true,\"e_optimized_css_loading\":true,\"a11y_improvements\":true,\"additional_custom_breakpoints\":true,\"landing-pages\":true},\"urls\":{\"assets\":\"https:\\/\\/Eliteforte.net\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"swiperClass\":\"swiper-container\",\"settings\":{\"page\":[],\"editorPreferences\":[]},\"kit\":{\"active_breakpoints\":[\"viewport_mobile\",\"viewport_tablet\"],\"global_image_lightbox\":\"yes\",\"lightbox_enable_counter\":\"yes\",\"lightbox_enable_fullscreen\":\"yes\",\"lightbox_enable_zoom\":\"yes\",\"lightbox_enable_share\":\"yes\",\"lightbox_title_src\":\"title\",\"lightbox_description_src\":\"description\"},\"post\":{\"id\":172,\"title\":\"Horizon%20%E2%80%93%20More%20than%20you%20can%20see\",\"excerpt\":\"\",\"featuredImage\":false}};
    </script>
    <script src=";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/js/frontend.min.js@ver=3.13.2"), "html", null, true);
        echo " id=\"elementor-frontend-js\"></script>
    <script src=";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/bdthemes-element-pack/assets/js/element-pack-site.min.js@ver=5.15.2"), "html", null, true);
        echo " id=\"element-pack-site-js\"></script>
    <script src=";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js@ver=2.8.5"), "html", null, true);
        echo " id=\"animate-circle-js\"></script>
    <script id=\"elementskit-elementor-js-extra\">
    var ekit_config = {\"ajaxurl\":\"https:\\/\\/Eliteforte.net\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"e0a234a04f\"};
    </script>
    <script src=";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js@ver=2.8.5"), "html", null, true);
        echo " id=\"elementskit-elementor-js\"></script>
    <script src=";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js@ver=2.8.5"), "html", null, true);
        echo " id=\"swiper-js\"></script>
    </body>
    </html>


    ";
        // line 319
        $this->displayBlock('customJs', $context, $blocks);
        // line 322
        echo "        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 319
    public function block_customJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customJs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customJs"));

        // line 320
        echo "        
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  696 => 320,  686 => 319,  675 => 322,  673 => 319,  665 => 314,  661 => 313,  654 => 309,  650 => 308,  646 => 307,  639 => 303,  635 => 302,  631 => 301,  627 => 300,  619 => 295,  615 => 294,  611 => 293,  600 => 285,  596 => 284,  592 => 283,  588 => 282,  584 => 281,  580 => 280,  576 => 279,  546 => 252,  519 => 228,  515 => 227,  412 => 139,  404 => 133,  394 => 132,  383 => 129,  373 => 128,  362 => 38,  352 => 37,  341 => 11,  331 => 10,  302 => 108,  297 => 106,  293 => 105,  289 => 104,  285 => 103,  281 => 102,  273 => 97,  269 => 96,  265 => 95,  261 => 94,  257 => 93,  242 => 81,  238 => 80,  234 => 79,  230 => 78,  226 => 77,  222 => 76,  216 => 73,  212 => 72,  203 => 68,  199 => 67,  195 => 66,  191 => 65,  187 => 64,  183 => 63,  179 => 62,  175 => 61,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  154 => 55,  150 => 54,  146 => 53,  142 => 52,  126 => 40,  124 => 37,  106 => 22,  102 => 21,  91 => 12,  89 => 10,  79 => 2,  69 => 1,  59 => 132,  56 => 131,  54 => 128,  51 => 127,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    
        <!doctype html>
        <html lang=\"en-US\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"profile\" href=\"https://gmpg.org/xfn/11\">

            <title>{% block title %}
                
            {% endblock %}</title>
        <meta name='robots' content='noindex, nofollow' />
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Feed\" href=\"feed/index.html\" />
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"Horizon &raquo; Comments Feed\" href=\"comments/feed/index.html\" />
        <script>
        window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/72x72\\/\",\"ext\":\".png\") }},\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/15.0.3\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"https:\\/\\/Eliteforte.net\\/assets/home/wp-includes\\/js\\/wp-emoji-release.min.js?ver=6.5\"}};
        /*! This file is auto-generated */
        !function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case\"flag\":return n(e,\"\\ud83c\\udff3\\ufe0f\\u200d\\u26a7\\ufe0f\",\"\\ud83c\\udff3\\ufe0f\\u200b\\u26a7\\ufe0f\")?!1:!n(e,\"\\ud83c\\uddfa\\ud83c\\uddf3\",\"\\ud83c\\uddfa\\u200b\\ud83c\\uddf3\")&&!n(e,\"\\ud83c\\udff4\\udb40\\udc67\\udb40\\udc62\\udb40\\udc65\\udb40\\udc6e\\udb40\\udc67\\udb40\\udc7f\",\"\\ud83c\\udff4\\u200b\\udb40\\udc67\\u200b\\udb40\\udc62\\u200b\\udb40\\udc65\\u200b\\udb40\\udc6e\\u200b\\udb40\\udc67\\u200b\\udb40\\udc7f\");case\"emoji\":return!n(e,\"\\ud83d\\udc26\\u200d\\u2b1b\",\"\\ud83d\\udc26\\u200b\\u2b1b\")}return!1}function f(e,t,n){var r=\"undefined\"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement(\"canvas\"),a=r.getContext(\"2d\",{willReadFrequently:!0}),o=(a.textBaseline=\"top\",a.font=\"600 32px Arial\",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement(\"script\");t.src=e,t.defer=!0,i.head.appendChild(t)}\"undefined\"!=typeof Promise&&(o=\"wpEmojiSettingsSupports\",s=[\"flag\",\"emoji\"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener(\"DOMContentLoaded\",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if(\"object\"==typeof e&&\"number\"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&\"object\"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if(\"undefined\"!=typeof Worker&&\"undefined\"!=typeof OffscreenCanvas&&\"undefined\"!=typeof URL&&URL.createObjectURL&&\"undefined\"!=typeof Blob)try{var e=\"postMessage(\"+f.toString()+\"(\"+[JSON.stringify(s),u.toString(),p.toString()].join(\",\")+\"));\",r=new Blob([e],{type:\"text/javascript\"}),a=new Worker(URL.createObjectURL(r),{name:\"wpTestEmojiSupports\"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],\"flag\"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
        </script>
        <link rel='stylesheet' id='bdt-uikit-css' href={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css@ver=3.7.2.css\") }} media='all' />
        <link rel='stylesheet' id='element-pack-site-css' href={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/element-pack-site.css@ver=5.15.2.css\") }} media='all' />
        <style id='wp-emoji-styles-inline-css'>

            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        {% block customStyle %}
            
        {% endblock %}
        <link rel='stylesheet' id='wp-block-library-css' href={{ asset(\"assets/home/wp-includes/css/dist/block-library/style.min.css@ver=6.5.css\") }} media='all' />
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
        <link rel='stylesheet' id='elementor-icons-ekiticons-css' href={{ asset(\"assets/home/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css@ver=2.8.5.css\") }} media='all' />
        <link rel='stylesheet' id='elementor-icons-css' href={{ asset(\"assets/home/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css@ver=5.20.0.css\") }} media='all' />
        <link rel='stylesheet' id='elementor-frontend-css' href={{ asset(\"assets/home/wp-content/plugins/elementor/assets/css/frontend-lite.min.css@ver=3.13.2.css\") }} media='all' />
        <link rel='stylesheet' id='swiper-css' href={{ asset(\"assets/home/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css@ver=5.3.6.css\") }} media='all' />
        <link rel='stylesheet' id='elementor-post-172-css' href={{ asset(\"assets/home/wp-content/uploads/elementor/css/post-172.css@ver=1684262608.css\") }} media='all' />
        <link rel='stylesheet' id='uicore_global-css' href={{ asset(\"assets/home/wp-content/uploads/uicore-global.css@ver=7795.css\") }} media='all' />
        <link rel='stylesheet' id='ekit-widget-styles-css' href={{ asset(\"assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css@ver=2.8.5.css\") }} media='all' />
        <link rel='stylesheet' id='ekit-responsive-css' href={{ asset(\"assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css@ver=2.8.5.css\") }} media='all' />
        <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Heebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5' media='all' />
        <link rel='stylesheet' id='elementor-icons-shared-0-css' href={{ asset(\"assets/home/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css@ver=5.15.3.css\") }} media='all' />
        <link rel='stylesheet' id='elementor-icons-fa-regular-css' href={{ asset(\"assets/home/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css@ver=5.15.3.css\") }} media='all' />
        <link rel='stylesheet' id='elementor-icons-fa-solid-css' href={{ asset(\"assets/home/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css@ver=5.15.3.css\") }} media='all' />
        <link rel='stylesheet' id='elementor-icons-shared-1-css' href={{ asset(\"assets/home/wp-content/plugins/uicore-framework/assets/fonts/themify-icons.css@ver=1.0.0.css\") }} media='all' />
        <link rel='stylesheet' id='elementor-icons-uicore-icons-css' href={{ asset(\"assets/home/wp-content/plugins/uicore-framework/assets/fonts/themify-icons.css@ver=1.0.0.css\") }} media='all' />
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin><script src={{ asset(\"assets/home/wp-includes/js/jquery/jquery.min.js@ver=3.7.1\")}} id=\"jquery-core-js\"></script>
        <script src={{ asset(\"assets/home/wp-includes/js/jquery/jquery-migrate.min.js@ver=3.4.1\")}} id=\"jquery-migrate-js\"></script>
        <link rel=\"https://api.w.org/\" href={{ asset(\"assets/home/wp-json/index.html\")}} /><link rel=\"alternate\" type=\"application/json\" href={{ asset(\"assets/home/wp-json/wp/v2/pages/172.html\")}} /><link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"xmlrpc.php@rsd.html\" />
        <meta name=\"generator\" content=\"WordPress 6.5\" />
        <link rel=\"canonical\" href=\"index.html\" />
        <link rel='shortlink' href='index.html' />
        <link rel=\"alternate\" type=\"application/json+oembed\" href={{ asset(\"assets/home/wp-json/oembed/1.0/embed@url=https%253A%252F%252FEliteforte.net%252F.html\")}} />
        <link rel=\"alternate\" type=\"text/xml+oembed\" href={{ asset(\"assets/home/wp-json/oembed/1.0/embed@url=https%253A%252F%252FEliteforte.net%252F&amp;format=xml.html\")}} />
        <meta name=\"generator\" content=\"Elementor 3.13.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto\">
        <meta name=\"theme-color\" content=\"#FFFFFF\" />
                <link rel=\"shortcut icon\" href={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png\") }} >
                <link rel=\"icon\" href={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png\") }} >
                <link rel=\"apple-touch-icon\" sizes=\"152x152\" href={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png\") }}>
                <link rel=\"apple-touch-icon\" sizes=\"120x120\" href={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png\") }}>
                <link rel=\"apple-touch-icon\" sizes=\"76x76\" href={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png\") }}>
                <link rel=\"apple-touch-icon\" href={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png\") }}>
                
        </head>

        <body class=\"home page-template-default page page-id-172 wp-embed-responsive  uicore-menu-focus elementor-default elementor-kit-6 elementor-page elementor-page-172\">
                <!-- 1.1 uicore_before_body_content -->\t<div class=\"uicore-body-content\">
                <!-- 1.2 uicore_before_page_content -->\t\t<div id=\"uicore-page\">
                
                <div id=\"wrapper-navbar\" itemscope itemtype=\"http://schema.org/WebSite\" class=\"uicore uicore-navbar elementor-section elementor-section-boxed uicore-h-classic uicore-sticky ui-smart-sticky \"><div class=\"uicore-header-wrapper\">
                    <nav class=\"uicore elementor-container\">
                            <div class=\"uicore-branding\">
                        
                    <a href={{ path('home') }} rel=\"home\">
                        <img class=\"uicore uicore-logo uicore-main\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png\") }} alt=\"Horizon\"/>
                        <img class=\"uicore uicore-logo uicore-second\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png\") }} alt=\"Horizon\" />
                        <img class=\"uicore uicore-logo uicore-mobile-main\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png\") }} alt=\"Horizon\" />
                        <img class=\"uicore uicore-logo uicore-mobile-second\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png\") }} alt=\"Horizon\" />
                    </a>

                        </div>
                        <div class='uicore-nav-menu'>
                    <div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href={{ path(\"home\") }}><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href={{ path(\"about\") }}><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href={{ path(\"services\") }}><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href={{ path(\"faq\") }}><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
        <li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href={{ path(\"contact\") }} aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
        </ul></div><div class=\"uicore uicore-extra\">            <div class=\"uicore-cta-wrapper\">
                        <a href={{ path(\"login\")}}
                            target=\"_self\"
                            class=\"uicore-btn uicore-inverted\">
                                Secure Login\t\t\t\t</a>
                    </div>
                </div>        </div>
                            <button type=\"button\" class=\"uicore-toggle uicore-ham\">
                        <span class=\"bars\">
                            <span class=\"bar\"></span>
                            <span class=\"bar\"></span>
                            <span class=\"bar\"></span>
                        </span>
                    </button>
                                </nav>

                    </div>
                </div><!-- #wrapper-navbar end -->

{% endblock %}

{% block main %}
    
{% endblock %}

{% block footer %}
    <footer class=\"uicore-footer-wrapper elementor\">        
        <div class=\"uicore uicore-inner-footer elementor-section elementor-section-boxed \">
                <div class=\"uicore elementor-container four_left_2 \">

                <div class=\"uicore-footer-column uicore-animate\"><div class=\"uicore-footer-widget\">
    <div class=\"wp-block-group\"><div class=\"wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow\">
    <figure class=\"wp-block-image size-large is-resized\"><img loading=\"lazy\" decoding=\"async\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png\") }} alt=\"\" class=\"wp-image-184\" width=\"184\" height=\"60\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-1024x341.png\")}} 1024w, {{asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-300x100.png\")}} 300w, {{asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-768x256.png\")}} 768w, {{asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-1536x512.png\")}} 1536w, {{asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-2048x683.png\")}} 2048w, {{asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657607749541-650x217.png\")}} 650w sizes=\"(max-width: 184px) 100vw, 184px\" /></figure>



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
                        <p data-pm-slice=\"1 1 [&quot;bulletList&quot;,null,&quot;listItem&quot;,null]\">© 2024 Made with <a href=\"https://emojis.wiki/red-heart/\" data-mce-href=\"https://emojis.wiki/red-heart/\"><img data-mce-resize=\"false\" data-mce-placeholder=\"1\" data-wp-emoji=\"1\" class=\"emoji\" alt=\"❤️\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg\" data-mce-src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg\">️</a> from Ocean Sys for Elite Forte LLC. All Rights Reserved.</p>                    </div>
                        <div class=\"uicore-copy-socials uicore-animate\"><a class=\"uicore-social-icon uicore-link social_fb\" href=\"index.html#\" target=\"_blank\" aria-label=\"Facebook\"></a><a class=\"uicore-social-icon uicore-link social_tw\" href=\"index.html#\" target=\"_blank\" aria-label=\"Tweeter\"></a><a class=\"uicore-social-icon uicore-link social_in\" href=\"index.html#\" target=\"_blank\" aria-label=\"Instagram\"></a><a class=\"uicore-social-icon uicore-link social_th\" href=\"index.html#\" target=\"_blank\" aria-label=\"Twitch\"></a></div>                </div>
                </div>
            </div>

        </footer><!-- 1.5 uicore_content_end -->
    </div><!-- #page -->

    <div id=\"uicore-back-to-top\" class=\"uicore-back-to-top uicore-i-arrow\"></div>        <div class=\"uicore-navigation-wrapper uicore-navbar elementor-section elementor-section-boxed uicore-mobile-menu-wrapper
                    \">
                <nav class=\"uicore elementor-container\">
                    <div class=\"uicore-branding uicore-mobile\">
                                        <a href={{ path('home') }} rel=\"home\">
                            <img class=\"uicore uicore-logo\"  src={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_1657606850818.png\") }} alt=\"Horizon\"/>
                        </a>
                                    </div>


                    <div class=\"uicore-branding uicore-desktop\">
                                    </div>


                    <button type=\"button\" class=\"uicore-toggle uicore-ham\">
                        <span class=\"bars\">
                            <span class=\"bar\"></span>
                            <span class=\"bar\"></span>
                            <span class=\"bar\"></span>
                        </span>
                    </button>
                </nav>
                <div class=\"uicore-navigation-content\">
                    <div class=\"uicore-menu-container uicore-nav\"><ul class=\"uicore-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-188\"><a href=\"index.html\"><span class=\"ui-menu-item-wrapper\">Home</span></a></li>
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-198\"><a href=\"about-us/index.html\"><span class=\"ui-menu-item-wrapper\">About Us</span></a></li>
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-197\"><a href=\"services/index.html\"><span class=\"ui-menu-item-wrapper\">Services</span></a></li>
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-196\"><a href=\"faqs/index.html\"><span class=\"ui-menu-item-wrapper\">FAQs</span></a></li>
    <li class=\"menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-142 current_page_item menu-item-189\"><a href=\"contact-us/index.html\" aria-current=\"page\"><span class=\"ui-menu-item-wrapper\">Contact Us</span></a></li>
    </ul></div><div class=\"uicore uicore-extra\">            <div class=\"uicore-cta-wrapper\">
                    <a href={{ path(\"login\")}}
                        target=\"_self\"
                        class=\"uicore-btn uicore-inverted\">
                            Secure Login\t\t\t\t</a>
                </div>
            </div>\t\t\t</div>
            </div>
            <!-- 1.6 uicore_body_end --></div>
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
        var s1 = document.createElement( 'script' ),s0=document.getElementsByTagName( 'script' )[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/64ac5e33cc26a871b02790eb/1h50kvvns';
        s1.charset = 'UTF-8';
        s1.setAttribute( 'crossorigin','*' );
        s0.parentNode.insertBefore( s1, s0 );
    })();
    </script>
    <!--End of Tawk.to Script (0.7.2)-->
    <link rel='stylesheet' id='ep-advanced-icon-box-css' href={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-icon-box.css@ver=5.15.2.css\") }} media='all' />
    <link rel='stylesheet' id='ep-advanced-counter-css' href={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-advanced-counter.css@ver=5.15.2.css\") }} media='all' />
    <link rel='stylesheet' id='ep-total-count-css' href={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-total-count.css@ver=5.15.2.css\") }} media='all' />
    <link rel='stylesheet' id='ep-tabs-css' href={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-tabs.css@ver=5.15.2.css\") }} media='all' />
    <link rel='stylesheet' id='ep-contact-form-css' href={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-contact-form.css@ver=5.15.2.css\") }} media='all' />
    <link rel='stylesheet' id='ep-accordion-css' href={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/css/ep-accordion.css@ver=5.15.2.css\") }} media='all' />
    <script src={{ asset(\"assets/home/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js@ver=2.8.5\")}} id=\"elementskit-framework-js-frontend-js\"></script>
    <script id=\"elementskit-framework-js-frontend-js-after\">
            var elementskit = {
                resturl: 'https://Eliteforte.net/assets/home/wp-json/elementskit/v1/',
            }

            
    </script>
    <script src={{ asset(\"assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js@ver=2.8.5\")}} id=\"ekit-widget-scripts-js\"></script>
    <script src={{ asset(\"assets/home/wp-content/uploads/uicore-global.js@ver=7795\")}} id=\"uicore_global-js\"></script>
    <script src={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/vendor/js/countUp.min.js@ver=2.0.4\")}} id=\"advanced-counter-js\"></script>
    <script id=\"bdt-uikit-js-extra\">
    var element_pack_ajax_login_config = {\"ajaxurl\":\"https:\\/\\/Eliteforte.net\\/wp-admin\\/admin-ajax.php\",\"language\":\"en\",\"loadingmessage\":\"Sending user info, please wait...\",\"unknownerror\":\"Unknown error, make sure access is correct!\"};
    var ElementPackConfig = {\"ajaxurl\":\"https:\\/\\/Eliteforte.net\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"5a0d3f4c6e\",\"data_table\":{\"language\":{\"lengthMenu\":\"Show _MENU_ Entries\",\"info\":\"Showing _START_ to _END_ of _TOTAL_ entries\",\"search\":\"Search :\",\"paginate\":{\"previous\":\"Previous\",\"next\":\"Next\"}}},\"contact_form\":{\"sending_msg\":\"Sending message please wait...\",\"captcha_nd\":\"Invisible captcha not defined!\",\"captcha_nr\":\"Could not get invisible captcha response!\"},\"mailchimp\":{\"subscribing\":\"Subscribing you please wait...\"},\"elements_data\":{\"sections\":[],\"columns\":[],\"widgets\":[]}};
    </script>
    <script src={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min.js@ver=3.7.2\")}} id=\"bdt-uikit-js\"></script>
    <script src={{ asset(\"assets/home/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js@ver=3.13.2\")}} id=\"elementor-webpack-runtime-js\"></script>
    <script src={{ asset(\"assets/home/wp-content/plugins/elementor/assets/js/frontend-modules.min.js@ver=3.13.2\")}} id=\"elementor-frontend-modules-js\"></script>
    <script src={{ asset(\"assets/home/wp-includes/js/jquery/ui/core.min.js@ver=1.13.2\")}} id=\"jquery-ui-core-js\"></script>
    <script id=\"elementor-frontend-js-before\">
    var elementorFrontendConfig = {\"environmentMode\":{\"edit\":false,\"wpPreview\":false,\"isScriptDebug\":false},\"i18n\":{\"shareOnFacebook\":\"Share on Facebook\",\"shareOnTwitter\":\"Share on Twitter\",\"pinIt\":\"Pin it\",\"download\":\"Download\",\"downloadImage\":\"Download image\",\"fullscreen\":\"Fullscreen\",\"zoom\":\"Zoom\",\"share\":\"Share\",\"playVideo\":\"Play Video\",\"previous\":\"Previous\",\"next\":\"Next\",\"close\":\"Close\"},\"is_rtl\":false,\"breakpoints\":{\"xs\":0,\"sm\":480,\"md\":768,\"lg\":1025,\"xl\":1440,\"xxl\":1600},\"responsive\":{\"breakpoints\":{\"mobile\":{\"label\":\"Mobile Portrait\",\"value\":767,\"default_value\":767,\"direction\":\"max\",\"is_enabled\":true},\"mobile_extra\":{\"label\":\"Mobile Landscape\",\"value\":880,\"default_value\":880,\"direction\":\"max\",\"is_enabled\":false},\"tablet\":{\"label\":\"Tablet Portrait\",\"value\":1024,\"default_value\":1024,\"direction\":\"max\",\"is_enabled\":true},\"tablet_extra\":{\"label\":\"Tablet Landscape\",\"value\":1200,\"default_value\":1200,\"direction\":\"max\",\"is_enabled\":false},\"laptop\":{\"label\":\"Laptop\",\"value\":1366,\"default_value\":1366,\"direction\":\"max\",\"is_enabled\":false},\"widescreen\":{\"label\":\"Widescreen\",\"value\":2400,\"default_value\":2400,\"direction\":\"min\",\"is_enabled\":false}}},\"version\":\"3.13.2\",\"is_static\":false,\"experimentalFeatures\":{\"e_dom_optimization\":true,\"e_optimized_assets_loading\":true,\"e_optimized_css_loading\":true,\"a11y_improvements\":true,\"additional_custom_breakpoints\":true,\"landing-pages\":true},\"urls\":{\"assets\":\"https:\\/\\/Eliteforte.net\\/wp-content\\/plugins\\/elementor\\/assets\\/\"},\"swiperClass\":\"swiper-container\",\"settings\":{\"page\":[],\"editorPreferences\":[]},\"kit\":{\"active_breakpoints\":[\"viewport_mobile\",\"viewport_tablet\"],\"global_image_lightbox\":\"yes\",\"lightbox_enable_counter\":\"yes\",\"lightbox_enable_fullscreen\":\"yes\",\"lightbox_enable_zoom\":\"yes\",\"lightbox_enable_share\":\"yes\",\"lightbox_title_src\":\"title\",\"lightbox_description_src\":\"description\"},\"post\":{\"id\":172,\"title\":\"Horizon%20%E2%80%93%20More%20than%20you%20can%20see\",\"excerpt\":\"\",\"featuredImage\":false}};
    </script>
    <script src={{ asset(\"assets/home/wp-content/plugins/elementor/assets/js/frontend.min.js@ver=3.13.2\")}} id=\"elementor-frontend-js\"></script>
    <script src={{ asset(\"assets/home/wp-content/plugins/bdthemes-element-pack/assets/js/element-pack-site.min.js@ver=5.15.2\")}} id=\"element-pack-site-js\"></script>
    <script src={{ asset(\"assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js@ver=2.8.5\")}} id=\"animate-circle-js\"></script>
    <script id=\"elementskit-elementor-js-extra\">
    var ekit_config = {\"ajaxurl\":\"https:\\/\\/Eliteforte.net\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"e0a234a04f\"};
    </script>
    <script src={{ asset(\"assets/home/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js@ver=2.8.5\")}} id=\"elementskit-elementor-js\"></script>
    <script src={{ asset(\"assets/home/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js@ver=2.8.5\")}} id=\"swiper-js\"></script>
    </body>
    </html>


    {% block customJs %}
        
    {% endblock %}
        
{% endblock %}", "base.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\base.html.twig");
    }
}
