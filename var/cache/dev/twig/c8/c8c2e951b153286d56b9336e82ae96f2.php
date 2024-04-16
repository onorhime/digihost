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

/* home/index.html.twig */
class __TwigTemplate_fbcf3be6ebbd526b2f96ef8ef3586616 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Eliteforte Home";
        
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
        echo "     <!-- 1.3 uicore_page -->\t\t\t
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
\t\t\t<a href=";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo " class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
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
\t\t\t<a href=";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo " class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img fetchpriority=\"high\" decoding=\"async\" width=\"562\" height=\"411\" src=";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-160\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1.webp"), "html", null, true);
        echo " 562w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1-300x219.webp"), "html", null, true);
        echo " \"300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d7d0881 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"d7d0881\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"562\" height=\"410\" src=";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-161\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2-300x219.webp"), "html", null, true);
        echo " 300w sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-028cccd elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"028cccd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:600}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"562\" height=\"197\" src=";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-162\" alt=\"\" srcset='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3.webp"), "html", null, true);
        echo " 562w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3-300x105.webp"), "html", null, true);
        echo " 300w' sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9c2dddd elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"9c2dddd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:850}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"562\" height=\"253\" src=";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-163\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4.webp"), "html", null, true);
        echo " 562w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4-300x135.webp"), "html", null, true);
        echo " 300w sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>Elite Forte LLC. is designed to provide easy and convenient access to your funds, because you have worked hard all month.</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>At Elite Forte LLC. , we believe that the beauty of life lies in the little things that give us a better expression of ourselves, make us more social and connect emotionally.</p>\t\t\t\t\t\t</div>
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
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">How Elite Forte works</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-8b42dc6 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"8b42dc6\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Elite Forte has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1033\" height=\"712\" src=";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4.png"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-310\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4.png"), "html", null, true);
        echo " 1033w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4-300x207.png"), "html", null, true);
        echo " 300w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4-1024x706.png"), "html", null, true);
        echo " 1024w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4-768x529.png"), "html", null, true);
        echo " 768w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4-650x448.png"), "html", null, true);
        echo " 650w sizes=\"(max-width: 1033px) 100vw, 1033px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>The Elite Forte Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"783\" height=\"794\" src=";
        // line 578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt.png"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-311\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt.png"), "html", null, true);
        echo " 783w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt-296x300.png"), "html", null, true);
        echo " 296w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt-768x779.png"), "html", null, true);
        echo " 768w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt-641x650.png"), "html", null, true);
        echo " 641w sizes=\"(max-width: 783px) 100vw, 783px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>At Elite Forte Bank we know that issues like security, protection from fraud and personal privacy, we make to sure to take extra steps by verifying customer identity with our state of art software</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1144\" height=\"746\" src=";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2.png"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-312\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2.png"), "html", null, true);
        echo " 1144w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-300x196.png"), "html", null, true);
        echo " 300w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-1024x668.png"), "html", null, true);
        echo " 1024w,";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/ wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-768x501.png"), "html", null, true);
        echo " 768w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-650x424.png"), "html", null, true);
        echo " 650w sizes=\"(max-width: 1144px) 100vw, 1144px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>Elite Forte is designed to facilitate financial inclusion, permitting individuals with minimal amount of income to enjoy all benefits we offer. Enjoy a value adding banking relationship with us.</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>Elite Forte has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-57eb409 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-widget-mobile__width-inherit elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list\" data-id=\"57eb409\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"icon-list.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<link rel=\"stylesheet\" href=";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css"), "html", null, true);
        echo ">\t\t<ul class=\"elementor-icon-list-items\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"742\" height=\"469\" src=";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-165\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1.webp"), "html", null, true);
        echo " 742w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1-300x190.webp"), "html", null, true);
        echo " 300w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1-650x411.webp"), "html", null, true);
        echo " 650w sizes=\"(max-width: 742px) 100vw, 742px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-21bdb4d elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image\" data-id=\"21bdb4d\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"581\" height=\"266\" src=";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-166\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2.webp"), "html", null, true);
        echo " 581w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2-300x137.webp"), "html", null, true);
        echo " 300w sizes=\"(max-width: 581px) 100vw, 581px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-1a8fb8e elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image\" data-id=\"1a8fb8e\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"581\" height=\"217\" src=";
        // line 692
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-167\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3.webp"), "html", null, true);
        echo " 581w,";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/ wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3-300x112.webp"), "html", null, true);
        echo " 300w sizes=\"(max-width: 581px) 100vw, 581px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1098\" height=\"672\" src=";
        // line 704
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-168\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1.webp"), "html", null, true);
        echo " 1098w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-300x184.webp"), "html", null, true);
        echo " 300w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-1024x627.webp"), "html", null, true);
        echo " 1024w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-768x470.webp"), "html", null, true);
        echo " 768w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-650x398.webp"), "html", null, true);
        echo " 650w sizes=\"(max-width: 1098px) 100vw, 1098px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c06585e elementor-invisible elementor-widget elementor-widget-image\" data-id=\"c06585e\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"527\" height=\"333\" src=";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2.webp"), "html", null, true);
        echo " class=\"attachment-full size-full wp-image-169\" alt=\"\" srcset=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2.webp"), "html", null, true);
        echo " 527w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2-300x190.webp"), "html", null, true);
        echo " 300w sizes=\"(max-width: 527px) 100vw, 527px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>Elite Forte is designed to facilitate financial inclusion, permitting individuals with minimal amount of income to enjoy all benefits we offer. Enjoy a value adding banking relationship with us.</p>\t\t\t\t\t\t</div>
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
\t\t\t<form class=\"bdt-contact-form-form bdt-form-stacked bdt-grid bdt-grid-small without-recaptcha\" data-bdt-grid=\"\" action=\"https://Eliteforte.net/wp-admin/admin-ajax.php\" method=\"post\">

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
\t\t\t\t\t\t\t<p>Elite Forte has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  900 => 708,  883 => 704,  864 => 692,  853 => 688,  840 => 684,  791 => 638,  742 => 602,  707 => 578,  670 => 554,  321 => 212,  310 => 208,  301 => 204,  290 => 200,  273 => 186,  172 => 88,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eliteforte Home{% endblock %}

{% block main %}
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
\t\t\t<a href={{ path(\"login\")}} class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
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
\t\t\t<a href={{ path(\"login\")}} class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img fetchpriority=\"high\" decoding=\"async\" width=\"562\" height=\"411\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1.webp\")}} class=\"attachment-full size-full wp-image-160\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1.webp\")}} 562w, {{asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-1-300x219.webp\")}} \"300w\" sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d7d0881 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"d7d0881\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:400}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"562\" height=\"410\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2.webp\")}} class=\"attachment-full size-full wp-image-161\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2.webp 562w, wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-2-300x219.webp\")}} 300w sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-028cccd elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"028cccd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:600}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" width=\"562\" height=\"197\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3.webp\")}} class=\"attachment-full size-full wp-image-162\" alt=\"\" srcset='{{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3.webp\")}} 562w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-3-300x105.webp\")}} 300w' sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-9c2dddd elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-image\" data-id=\"9c2dddd\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:850}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"562\" height=\"253\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4.webp\")}} class=\"attachment-full size-full wp-image-163\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4.webp\")}} 562w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Hero-Image-4-300x135.webp\")}} 300w sizes=\"(max-width: 562px) 100vw, 562px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>Elite Forte LLC. is designed to provide easy and convenient access to your funds, because you have worked hard all month.</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>At Elite Forte LLC. , we believe that the beauty of life lies in the little things that give us a better expression of ourselves, make us more social and connect emotionally.</p>\t\t\t\t\t\t</div>
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
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">How Elite Forte works</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-8b42dc6 elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"8b42dc6\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>Elite Forte has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1033\" height=\"712\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4.png\")}} class=\"attachment-full size-full wp-image-310\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4.png\")}} 1033w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4-300x207.png\")}} 300w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4-1024x706.png\")}} 1024w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4-768x529.png\")}} 768w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_secure_login_pdn4-650x448.png\")}} 650w sizes=\"(max-width: 1033px) 100vw, 1033px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>The Elite Forte Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"783\" height=\"794\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt.png\")}} class=\"attachment-full size-full wp-image-311\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt.png\")}} 783w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt-296x300.png\")}} 296w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt-768x779.png\")}} 768w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Authentication_re_svpt-641x650.png\")}} 641w sizes=\"(max-width: 783px) 100vw, 783px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>At Elite Forte Bank we know that issues like security, protection from fraud and personal privacy, we make to sure to take extra steps by verifying customer identity with our state of art software</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1144\" height=\"746\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2.png\")}} class=\"attachment-full size-full wp-image-312\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2.png\")}} 1144w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-300x196.png\")}} 300w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-1024x668.png\")}} 1024w,{{ asset(\"assets/home/ wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-768x501.png\")}} 768w, {{ asset(\"assets/home/wp-content/uploads/2022/07/undraw_Online_payments_re_y8f2-650x424.png\")}} 650w sizes=\"(max-width: 1144px) 100vw, 1144px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>Elite Forte is designed to facilitate financial inclusion, permitting individuals with minimal amount of income to enjoy all benefits we offer. Enjoy a value adding banking relationship with us.</p>\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>Elite Forte has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-57eb409 elementor-widget__width-initial elementor-widget-tablet__width-auto elementor-widget-mobile__width-inherit elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list\" data-id=\"57eb409\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}\" data-widget_type=\"icon-list.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<link rel=\"stylesheet\" href={{ asset(\"assets/home/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css\")}}>\t\t<ul class=\"elementor-icon-list-items\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"742\" height=\"469\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1.webp\")}} class=\"attachment-full size-full wp-image-165\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1.webp\")}} 742w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1-300x190.webp\")}} 300w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-1-650x411.webp\")}} 650w sizes=\"(max-width: 742px) 100vw, 742px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-21bdb4d elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image\" data-id=\"21bdb4d\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"581\" height=\"266\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2.webp\")}} class=\"attachment-full size-full wp-image-166\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2.webp\")}} 581w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-2-300x137.webp\")}} 300w sizes=\"(max-width: 581px) 100vw, 581px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-1a8fb8e elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image\" data-id=\"1a8fb8e\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"581\" height=\"217\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3.webp\")}} class=\"attachment-full size-full wp-image-167\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3.webp\")}} 581w,{{ asset(\"assets/home/ wp-content/uploads/2022/07/Payment-Solutions-Payments-Image-3-300x112.webp\")}} 300w sizes=\"(max-width: 581px) 100vw, 581px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"1098\" height=\"672\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1.webp\")}} class=\"attachment-full size-full wp-image-168\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1.webp\")}} 1098w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-300x184.webp\")}} 300w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-1024x627.webp\")}} 1024w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-768x470.webp\")}} 768w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-1-650x398.webp\")}} 650w sizes=\"(max-width: 1098px) 100vw, 1098px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c06585e elementor-invisible elementor-widget elementor-widget-image\" data-id=\"c06585e\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img loading=\"lazy\" decoding=\"async\" width=\"527\" height=\"333\" src={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2.webp\")}} class=\"attachment-full size-full wp-image-169\" alt=\"\" srcset={{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2.webp\")}} 527w, {{ asset(\"assets/home/wp-content/uploads/2022/07/Payment-Solutions-Financial-Image-2-300x190.webp\")}} 300w sizes=\"(max-width: 527px) 100vw, 527px\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<p>Elite Forte is designed to facilitate financial inclusion, permitting individuals with minimal amount of income to enjoy all benefits we offer. Enjoy a value adding banking relationship with us.</p>\t\t\t\t\t\t</div>
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
\t\t\t<form class=\"bdt-contact-form-form bdt-form-stacked bdt-grid bdt-grid-small without-recaptcha\" data-bdt-grid=\"\" action=\"https://Eliteforte.net/wp-admin/admin-ajax.php\" method=\"post\">

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
\t\t\t\t\t\t\t<p>Elite Forte has clearly distinguished itself in the banking industry through superior service quality, unique customer experience, and sound financial indices.</p>\t\t\t\t\t\t</div>
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
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\index.html.twig");
    }
}
