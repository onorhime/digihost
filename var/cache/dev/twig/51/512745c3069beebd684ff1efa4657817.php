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

/* home/services.html.twig */
class __TwigTemplate_06c7dd83a99bcc9ee1cd59dbad089e27 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/services.html.twig", 1);
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

        echo "Eliteforte Services";
        
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
        echo "        <!-- 1.3 uicore_page -->\t\t\t
\t\t<div id=\"content\" class=\"uicore-content\">

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
\t\t\t<div class='bdt-breadcrumbs-wrapper'><ul class=\"bdt-breadcrumb  breadcrumb-align-center \"><li><a href=";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo ">Horizon</a></li>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img fetchpriority=\"high\" decoding=\"async\" width=\"360\" height=\"360\" src=";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-105\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png"), "html", null, true);
        echo " 360w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961-300x300.png"), "html", null, true);
        echo " 300w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Logopit_16575763848961-150x150.png"), "html", null, true);
        echo " 150w sizes=\"(max-width: 360px) 100vw, 360px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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


\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/R.jpg"), "html", null, true);
        echo " alt=\"Jason Major\">
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
\t\t\t<a href=";
        // line 512
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo " class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
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
\t\t\t<a href=";
        // line 547
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo " class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/services.html.twig";
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
        return array (  649 => 547,  611 => 512,  562 => 466,  148 => 61,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eliteforte Services{% endblock %}

{% block main %}
        <!-- 1.3 uicore_page -->\t\t\t
\t\t<div id=\"content\" class=\"uicore-content\">

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
\t\t\t<div class='bdt-breadcrumbs-wrapper'><ul class=\"bdt-breadcrumb  breadcrumb-align-center \"><li><a href={{ path('home') }}>Horizon</a></li>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img fetchpriority=\"high\" decoding=\"async\" width=\"360\" height=\"360\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png\")}} class=\"attachment-full size-full wp-image-105\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961.png\")}} 360w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961-300x300.png\")}} 300w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Logopit_16575763848961-150x150.png\")}} 150w sizes=\"(max-width: 360px) 100vw, 360px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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


\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/R.jpg\")}} alt=\"Jason Major\">
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
\t\t\t<a href={{ path(\"login\")}} class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
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
\t\t\t<a href={{ path(\"login\")}} class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
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
{% endblock %}", "home/services.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\services.html.twig");
    }
}
