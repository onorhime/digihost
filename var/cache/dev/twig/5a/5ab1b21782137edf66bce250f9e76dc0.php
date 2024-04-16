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

/* home/faq.html.twig */
class __TwigTemplate_7838d067f793d6b0aa66ed16705a378a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/faq.html.twig", 1);
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

        echo "Eliteforte FAQ";
        
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
        echo "              <!-- 1.3 uicore_page -->\t\t\t
\t\t<div id=\"content\" class=\"uicore-content\">

\t\t\t<!-- 1.4 uicore_before_content --><div id=\"primary\" class=\"content-area\">

\t        <article id=\"post-194\" class=\"post-194 page type-page status-publish hentry\">
            <div class=\"entry-content\">
                \t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"194\" class=\"elementor elementor-194\">
\t\t\t\t\t\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-7e0bfe65 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7e0bfe65\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-e4055d2 elementor-hidden-phone\" data-id=\"e4055d2\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-1af5acd6\" data-id=\"1af5acd6\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-26622913 elementor-invisible elementor-widget elementor-widget-image\" data-id=\"26622913\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src\$=\".svg\"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2021/02/app-landing-support.png\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-2914c146 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"2914c146\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h3 class=\"elementor-heading-title elementor-size-default\">Everyone wants to be heard and understood. At Choice Horizon, our core goal is to easily connect with people and understand their preferences.</h3>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-3eecb89a elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"3eecb89a\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>\t\t\t\t<p><a href=\"../about-us.1.html\">Learn more about us</a></p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-3935ddd6 elementor-hidden-phone\" data-id=\"3935ddd6\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-6a5c289c elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"6a5c289c\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5794440a elementor-invisible\" data-id=\"5794440a\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeIn&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-7ea1a796 bdt-title-link-yes bdt-icon-type-icon elementor-position-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"7ea1a796\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"icon icon-instagram-2\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\" onclick=\"window.open(&#039;#&#039;, &#039;_self&#039;)\">
\t\t\t\t<span >
\t\t\t\t\tSocial Media\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>You can also contact and follow us on our social media platforms.</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4a6d0847 elementor-invisible\" data-id=\"4a6d0847\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-675607b7 bdt-title-link-yes bdt-icon-type-icon elementor-position-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"675607b7\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"ti ti-email\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\" onclick=\"window.open(&#039;https://choicehorizone.com/contact-us/&#039;, &#039;_self&#039;)\">
\t\t\t\t<span >
\t\t\t\t\tContact Us\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Choice Horizon support is here to help with any issue</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1bcc30c1 elementor-invisible\" data-id=\"1bcc30c1\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-4f63ef6a bdt-title-link-yes bdt-icon-type-icon elementor-position-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"4f63ef6a\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"ti ti-comment-alt\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\" onclick=\"window.open(&#039;https://choicehorizone.com/contact-us/&#039;, &#039;_self&#039;)\">
\t\t\t\t<span >
\t\t\t\t\tGet Support\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Open a support ticket on our help center</p>\t\t\t\t\t</div>
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-3032a604 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"3032a604\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fe7cebf\" data-id=\"6fe7cebf\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2b982f2c elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"2b982f2c\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Frequently Asked Questions</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c7f0b10 elementor-invisible elementor-widget elementor-widget-bdt-accordion\" data-id=\"c7f0b10\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-accordion.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t        <div class=\"bdt-accordion-container\">
            <div id=\"bdt-accordion-c7f0b10\" class=\"bdt-accordion\" data-bdt-accordion=\"{&quot;collapsible&quot;:true,&quot;multiple&quot;:false,&quot;transition&quot;:&quot;ease-in-out&quot;}\" data-settings=\"{&quot;id&quot;:&quot;bdt-accordion-c7f0b10&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;activeScrollspy&quot;:null,&quot;hashTopOffset&quot;:false,&quot;hashScrollspyTime&quot;:false}\">
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-181bbc94 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"181bbc94\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;clouds&quot;}\">
\t\t\t\t\t<div class=\"elementor-shape elementor-shape-top\" data-negative=\"false\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 283.5 27.8\" preserveAspectRatio=\"xMidYMax slice\">
  <path class=\"elementor-shape-fill\" d=\"M0 0v6.7c1.9-.8 4.7-1.4 8.5-1 9.5 1.1 11.1 6 11.1 6s2.1-.7 4.3-.2c2.1.5 2.8 2.6 2.8 2.6s.2-.5 1.4-.7c1.2-.2 1.7.2 1.7.2s0-2.1 1.9-2.8c1.9-.7 3.6.7 3.6.7s.7-2.9 3.1-4.1 4.7 0 4.7 0 1.2-.5 2.4 0 1.7 1.4 1.7 1.4h1.4c.7 0 1.2.7 1.2.7s.8-1.8 4-2.2c3.5-.4 5.3 2.4 6.2 4.4.4-.4 1-.7 1.8-.9 2.8-.7 4 .7 4 .7s1.7-5 11.1-6c9.5-1.1 12.3 3.9 12.3 3.9s1.2-4.8 5.7-5.7c4.5-.9 6.8 1.8 6.8 1.8s.6-.6 1.5-.9c.9-.2 1.9-.2 1.9-.2s5.2-6.4 12.6-3.3c7.3 3.1 4.7 9 4.7 9s1.9-.9 4 0 2.8 2.4 2.8 2.4 1.9-1.2 4.5-1.2 4.3 1.2 4.3 1.2.2-1 1.4-1.7 2.1-.7 2.1-.7-.5-3.1 2.1-5.5 5.7-1.4 5.7-1.4 1.5-2.3 4.2-1.1c2.7 1.2 1.7 5.2 1.7 5.2s.3-.1 1.3.5c.5.4.8.8.9 1.1.5-1.4 2.4-5.8 8.4-4 7.1 2.1 3.5 8.9 3.5 8.9s.8-.4 2 0 1.1 1.1 1.1 1.1 1.1-1.1 2.3-1.1 2.1.5 2.1.5 1.9-3.6 6.2-1.2 1.9 6.4 1.9 6.4 2.6-2.4 7.4 0c3.4 1.7 3.9 4.9 3.9 4.9s3.3-6.9 10.4-7.9 11.5 2.6 11.5 2.6.8 0 1.2.2c.4.2.9.9.9.9s4.4-3.1 8.3.2c1.9 1.7 1.5 5 1.5 5s.3-1.1 1.6-1.4c1.3-.3 2.3.2 2.3.2s-.1-1.2.5-1.9 1.9-.9 1.9-.9-4.7-9.3 4.4-13.4c5.6-2.5 9.2.9 9.2.9s5-6.2 15.9-6.2 16.1 8.1 16.1 8.1.7-.2 1.6-.4V0H0z\"/>
</svg>
\t\t</div>
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ea8a4cf\" data-id=\"1ea8a4cf\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5b3b0f06 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"5b3b0f06\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h1 class=\"elementor-heading-title elementor-size-default\">Brought to you
by Choice Horizon LLC.</h1>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-11f0ab9 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"11f0ab9\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">Choice Horizon LLC. is a leading full-service commercial Bank operating through a network of more than 600 branches and service outlets, spanning three continents, 12 countries and 31 million customers. The Bank employs 28,000 people in its operations in America and has subsidiaries in Sub-Saharan Africa and the United Kingdom (with a branch in Dubai, UAE) and representative offices in China, Lebanon and India.</h3>\t\t</div>
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
        return "home/faq.html.twig";
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eliteforte FAQ{% endblock %}

{% block main %}
              <!-- 1.3 uicore_page -->\t\t\t
\t\t<div id=\"content\" class=\"uicore-content\">

\t\t\t<!-- 1.4 uicore_before_content --><div id=\"primary\" class=\"content-area\">

\t        <article id=\"post-194\" class=\"post-194 page type-page status-publish hentry\">
            <div class=\"entry-content\">
                \t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"194\" class=\"elementor elementor-194\">
\t\t\t\t\t\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-7e0bfe65 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"7e0bfe65\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-e4055d2 elementor-hidden-phone\" data-id=\"e4055d2\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-1af5acd6\" data-id=\"1af5acd6\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-26622913 elementor-invisible elementor-widget elementor-widget-image\" data-id=\"26622913\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:100}\" data-widget_type=\"image.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src\$=\".svg\"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>\t\t\t\t\t\t\t\t\t\t\t\t<img decoding=\"async\" src=\"https://library.uicore.co/wp-content/uploads/2021/02/app-landing-support.png\" title=\"\" alt=\"\" loading=\"lazy\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-2914c146 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"2914c146\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h3 class=\"elementor-heading-title elementor-size-default\">Everyone wants to be heard and understood. At Choice Horizon, our core goal is to easily connect with people and understand their preferences.</h3>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-3eecb89a elementor-invisible elementor-widget elementor-widget-text-editor\" data-id=\"3eecb89a\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:300}\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>\t\t\t\t<p><a href=\"../about-us.1.html\">Learn more about us</a></p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-3935ddd6 elementor-hidden-phone\" data-id=\"3935ddd6\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap\">
\t\t\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</section>
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-6a5c289c elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"6a5c289c\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5794440a elementor-invisible\" data-id=\"5794440a\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeIn&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-7ea1a796 bdt-title-link-yes bdt-icon-type-icon elementor-position-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"7ea1a796\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"icon icon-instagram-2\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\" onclick=\"window.open(&#039;#&#039;, &#039;_self&#039;)\">
\t\t\t\t<span >
\t\t\t\t\tSocial Media\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>You can also contact and follow us on our social media platforms.</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4a6d0847 elementor-invisible\" data-id=\"4a6d0847\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-675607b7 bdt-title-link-yes bdt-icon-type-icon elementor-position-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"675607b7\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"ti ti-email\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\" onclick=\"window.open(&#039;https://choicehorizone.com/contact-us/&#039;, &#039;_self&#039;)\">
\t\t\t\t<span >
\t\t\t\t\tContact Us\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Choice Horizon support is here to help with any issue</p>\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t</div>

\t\t
\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1bcc30c1 elementor-invisible\" data-id=\"1bcc30c1\" data-element_type=\"column\" data-settings=\"{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-4f63ef6a bdt-title-link-yes bdt-icon-type-icon elementor-position-top bdt-icon-effect-none elementor-invisible elementor-widget elementor-widget-bdt-advanced-icon-box\" data-id=\"4f63ef6a\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-advanced-icon-box.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-advanced-icon-box\">

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-icon\">
\t\t\t\t\t<span class=\"bdt-icon-wrapper\">


\t\t\t\t\t\t
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"ti ti-comment-alt\"></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t<div class=\"bdt-advanced-icon-box-content\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t<h3 class=\"bdt-advanced-icon-box-title\" onclick=\"window.open(&#039;https://choicehorizone.com/contact-us/&#039;, &#039;_self&#039;)\">
\t\t\t\t<span >
\t\t\t\t\tGet Support\t\t\t\t</span>
\t\t\t</h3>
\t\t

\t\t
\t\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"bdt-advanced-icon-box-description\">
\t\t\t\t\t\t<p>Open a support ticket on our help center</p>\t\t\t\t\t</div>
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-3032a604 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"3032a604\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fe7cebf\" data-id=\"6fe7cebf\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-2b982f2c elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"2b982f2c\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Frequently Asked Questions</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-c7f0b10 elementor-invisible elementor-widget elementor-widget-bdt-accordion\" data-id=\"c7f0b10\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-accordion.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t        <div class=\"bdt-accordion-container\">
            <div id=\"bdt-accordion-c7f0b10\" class=\"bdt-accordion\" data-bdt-accordion=\"{&quot;collapsible&quot;:true,&quot;multiple&quot;:false,&quot;transition&quot;:&quot;ease-in-out&quot;}\" data-settings=\"{&quot;id&quot;:&quot;bdt-accordion-c7f0b10&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;activeScrollspy&quot;:null,&quot;hashTopOffset&quot;:false,&quot;hashScrollspyTime&quot;:false}\">
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-181bbc94 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"181bbc94\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;clouds&quot;}\">
\t\t\t\t\t<div class=\"elementor-shape elementor-shape-top\" data-negative=\"false\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 283.5 27.8\" preserveAspectRatio=\"xMidYMax slice\">
  <path class=\"elementor-shape-fill\" d=\"M0 0v6.7c1.9-.8 4.7-1.4 8.5-1 9.5 1.1 11.1 6 11.1 6s2.1-.7 4.3-.2c2.1.5 2.8 2.6 2.8 2.6s.2-.5 1.4-.7c1.2-.2 1.7.2 1.7.2s0-2.1 1.9-2.8c1.9-.7 3.6.7 3.6.7s.7-2.9 3.1-4.1 4.7 0 4.7 0 1.2-.5 2.4 0 1.7 1.4 1.7 1.4h1.4c.7 0 1.2.7 1.2.7s.8-1.8 4-2.2c3.5-.4 5.3 2.4 6.2 4.4.4-.4 1-.7 1.8-.9 2.8-.7 4 .7 4 .7s1.7-5 11.1-6c9.5-1.1 12.3 3.9 12.3 3.9s1.2-4.8 5.7-5.7c4.5-.9 6.8 1.8 6.8 1.8s.6-.6 1.5-.9c.9-.2 1.9-.2 1.9-.2s5.2-6.4 12.6-3.3c7.3 3.1 4.7 9 4.7 9s1.9-.9 4 0 2.8 2.4 2.8 2.4 1.9-1.2 4.5-1.2 4.3 1.2 4.3 1.2.2-1 1.4-1.7 2.1-.7 2.1-.7-.5-3.1 2.1-5.5 5.7-1.4 5.7-1.4 1.5-2.3 4.2-1.1c2.7 1.2 1.7 5.2 1.7 5.2s.3-.1 1.3.5c.5.4.8.8.9 1.1.5-1.4 2.4-5.8 8.4-4 7.1 2.1 3.5 8.9 3.5 8.9s.8-.4 2 0 1.1 1.1 1.1 1.1 1.1-1.1 2.3-1.1 2.1.5 2.1.5 1.9-3.6 6.2-1.2 1.9 6.4 1.9 6.4 2.6-2.4 7.4 0c3.4 1.7 3.9 4.9 3.9 4.9s3.3-6.9 10.4-7.9 11.5 2.6 11.5 2.6.8 0 1.2.2c.4.2.9.9.9.9s4.4-3.1 8.3.2c1.9 1.7 1.5 5 1.5 5s.3-1.1 1.6-1.4c1.3-.3 2.3.2 2.3.2s-.1-1.2.5-1.9 1.9-.9 1.9-.9-4.7-9.3 4.4-13.4c5.6-2.5 9.2.9 9.2.9s5-6.2 15.9-6.2 16.1 8.1 16.1 8.1.7-.2 1.6-.4V0H0z\"/>
</svg>
\t\t</div>
\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ea8a4cf\" data-id=\"1ea8a4cf\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-5b3b0f06 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"5b3b0f06\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h1 class=\"elementor-heading-title elementor-size-default\">Brought to you
by Choice Horizon LLC.</h1>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-11f0ab9 elementor-invisible elementor-widget elementor-widget-heading\" data-id=\"11f0ab9\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">Choice Horizon LLC. is a leading full-service commercial Bank operating through a network of more than 600 branches and service outlets, spanning three continents, 12 countries and 31 million customers. The Bank employs 28,000 people in its operations in America and has subsidiaries in Sub-Saharan Africa and the United Kingdom (with a branch in Dubai, UAE) and representative offices in China, Lebanon and India.</h3>\t\t</div>
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
{% endblock %}", "home/faq.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\faq.html.twig");
    }
}
