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

/* home/contact.html.twig */
class __TwigTemplate_a4b7f16f773403fc26f20149f901e57f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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

        echo "EliteForte Contact";
        
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
        echo "                <!-- 1.3 uicore_page -->\t\t\t<div id=\"content\" class=\"uicore-content\">

\t\t\t<!-- 1.4 uicore_before_content -->\t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"142\" class=\"elementor elementor-142\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-9e418c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"9e418c4\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aad1a76\" data-id=\"aad1a76\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-473f46e elementor-widget elementor-widget-bdt-breadcrumbs\" data-id=\"473f46e\" data-element_type=\"widget\" data-widget_type=\"bdt-breadcrumbs.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<div class='bdt-breadcrumbs-wrapper'><ul class=\"bdt-breadcrumb  breadcrumb-align-center \"><li><a href=\"../index.html\">Horizon</a></li>
<li><span> Contact Us</span></li>
</ul></div>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-29fb788 elementor-widget elementor-widget-heading\" data-id=\"29fb788\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h1 class=\"elementor-heading-title elementor-size-default\">Get in touch</h1>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-717c43d elementor-widget__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"717c43d\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>\t\t\t\t<p>The Elite Forte Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-b992b15 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"b992b15\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a546aaa\" data-id=\"a546aaa\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-62f73b5 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible\" data-id=\"62f73b5\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-53cf8ed\" data-id=\"53cf8ed\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-916d0f8 elementor-widget elementor-widget-bdt-contact-form\" data-id=\"916d0f8\" data-element_type=\"widget\" data-widget_type=\"bdt-contact-form.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-contact-form bdt-contact-form-skin-default\">
\t\t\t<div class=\"elementor-form-fields-wrapper\">
\t\t\t\t\t\t<div class=\"bdt-contact-form-wrapper\">
\t\t\t<form class=\"bdt-contact-form-form bdt-form-stacked bdt-grid bdt-grid-small without-recaptcha\" data-bdt-grid=\"\" action=\"https://Eliteforte.net/wp-admin/admin-ajax.php\" method=\"post\">

\t\t\t\t
\t\t\t\t\t<div class=\"bdt-field-group elementor-field-required bdt-width-1-1\">
\t\t\t\t\t\t<label for=\"user_name916d0f8\" class=\"bdt-form-label\">Name*</label><div class=\"bdt-form-controls\"><input type=\"text\" name=\"name\" id=\"user_name916d0f8\" placeholder=\"Enter your name...\" class=\"bdt-input bdt-form-default\" required =\"required\"></div>\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"bdt-field-group elementor-field-required bdt-width-1-1\">
\t\t\t\t\t\t<label for=\"email916d0f8\" class=\"bdt-form-label\">E-mail address*</label><div class=\"bdt-form-controls\"><input type=\"email\" name=\"email\" id=\"email916d0f8\" placeholder=\"Enter your e-mail address...\" class=\"bdt-input bdt-form-default\" required=\"required\"></div>\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bdt-field-group bdt-width-1-1 elementor-field-required\">
\t\t\t\t\t\t\t<label for=\"message916d0f8\" class=\"bdt-form-label\">Message*</label><div class=\"bdt-form-controls\"><textarea name=\"message\" id=\"message916d0f8\" rows=\"4\" placeholder=\"Enter your message....\" class=\"bdt-textarea bdt-form-default\" required=\"required\"></textarea></div>\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<input type=\"hidden\" class=\"widget_id\" name=\"widget_id\" value=\"916d0f8\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"bdt-sf-916d0f8\" value=\"true\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"page_id\" name=\"page_id\" value=\"142\"/>

\t\t\t\t\t<div class=\"elementor-field-type-submit bdt-field-group bdt-flex bdt-width-1-1\">
\t\t\t\t\t\t<button type=\"submit\" class=\"bdt-button-small elementor-button bdt-button bdt-button-primary\" name=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Submit</span>
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
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0df5f52\" data-id=\"0df5f52\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-ee940d0 elementor-widget elementor-widget-heading\" data-id=\"ee940d0\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">Contact Information</h3>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-32a01e1 elementor-widget elementor-widget-text-editor\" data-id=\"32a01e1\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p class=\"elementor-heading-title elementor-size-default\">Everyone wants to be heard and understood. At Elite Forte, our core goal is to easily connect with people and understand their preferences.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-02c090e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list\" data-id=\"02c090e\" data-element_type=\"widget\" data-widget_type=\"icon-list.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<link rel=\"stylesheet\" href=\"../wp-content/plugins/elementor/assets/css/widget-icon-list.min.css\">\t\t<ul class=\"elementor-icon-list-items\">
\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fab fa-instagram\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Instagram</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:support@Eliteforte.net\">

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-envelope\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">support@Eliteforte.net</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html#\">

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">(487) 436 - 6910</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html#\">

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-map-marker-alt\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Arkansas, US</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-af57cab elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"af57cab\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-efb9fe0\" data-id=\"efb9fe0\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-678e4e4 elementor-widget elementor-widget-heading\" data-id=\"678e4e4\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Frequently Asked Questions</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d0a3ae4 elementor-invisible elementor-widget elementor-widget-bdt-accordion\" data-id=\"d0a3ae4\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-accordion.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t        <div class=\"bdt-accordion-container\">
            <div id=\"bdt-accordion-d0a3ae4\" class=\"bdt-accordion\" data-bdt-accordion=\"{&quot;collapsible&quot;:true,&quot;multiple&quot;:false,&quot;transition&quot;:&quot;ease-in-out&quot;}\" data-settings=\"{&quot;id&quot;:&quot;bdt-accordion-d0a3ae4&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;activeScrollspy&quot;:null,&quot;hashTopOffset&quot;:false,&quot;hashScrollspyTime&quot;:false}\">
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-ca06a3a elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"ca06a3a\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f168181 elementor-invisible\" data-id=\"f168181\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-ab7fff2 elementor-widget elementor-widget-heading\" data-id=\"ab7fff2\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Ready to get started?</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-ed16816 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor\" data-id=\"ed16816\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>The Elite Forte Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-fea68f7 elementor-align-center elementor-widget elementor-widget-button\" data-id=\"fea68f7\" data-element_type=\"widget\" data-widget_type=\"button.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"elementor-button-wrapper\">
\t\t\t<a href=";
        // line 300
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
\t\t
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
        return "home/contact.html.twig";
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
        return array (  384 => 300,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}EliteForte Contact{% endblock %}

{% block main %}
                <!-- 1.3 uicore_page -->\t\t\t<div id=\"content\" class=\"uicore-content\">

\t\t\t<!-- 1.4 uicore_before_content -->\t\t<div data-elementor-type=\"wp-page\" data-elementor-id=\"142\" class=\"elementor elementor-142\">
\t\t\t\t\t\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-9e418c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"9e418c4\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aad1a76\" data-id=\"aad1a76\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-473f46e elementor-widget elementor-widget-bdt-breadcrumbs\" data-id=\"473f46e\" data-element_type=\"widget\" data-widget_type=\"bdt-breadcrumbs.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<div class='bdt-breadcrumbs-wrapper'><ul class=\"bdt-breadcrumb  breadcrumb-align-center \"><li><a href=\"../index.html\">Horizon</a></li>
<li><span> Contact Us</span></li>
</ul></div>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-29fb788 elementor-widget elementor-widget-heading\" data-id=\"29fb788\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h1 class=\"elementor-heading-title elementor-size-default\">Get in touch</h1>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-717c43d elementor-widget__width-initial elementor-widget elementor-widget-text-editor\" data-id=\"717c43d\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<style>/*! elementor - v3.13.2 - 11-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>\t\t\t\t<p>The Elite Forte Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t</div>
\t\t\t\t<div class=\"elementor-section elementor-top-section elementor-element elementor-element-b992b15 elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"b992b15\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a546aaa\" data-id=\"a546aaa\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<section class=\"elementor-section elementor-inner-section elementor-element elementor-element-62f73b5 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible\" data-id=\"62f73b5\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-53cf8ed\" data-id=\"53cf8ed\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-916d0f8 elementor-widget elementor-widget-bdt-contact-form\" data-id=\"916d0f8\" data-element_type=\"widget\" data-widget_type=\"bdt-contact-form.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t<div class=\"bdt-contact-form bdt-contact-form-skin-default\">
\t\t\t<div class=\"elementor-form-fields-wrapper\">
\t\t\t\t\t\t<div class=\"bdt-contact-form-wrapper\">
\t\t\t<form class=\"bdt-contact-form-form bdt-form-stacked bdt-grid bdt-grid-small without-recaptcha\" data-bdt-grid=\"\" action=\"https://Eliteforte.net/wp-admin/admin-ajax.php\" method=\"post\">

\t\t\t\t
\t\t\t\t\t<div class=\"bdt-field-group elementor-field-required bdt-width-1-1\">
\t\t\t\t\t\t<label for=\"user_name916d0f8\" class=\"bdt-form-label\">Name*</label><div class=\"bdt-form-controls\"><input type=\"text\" name=\"name\" id=\"user_name916d0f8\" placeholder=\"Enter your name...\" class=\"bdt-input bdt-form-default\" required =\"required\"></div>\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"bdt-field-group elementor-field-required bdt-width-1-1\">
\t\t\t\t\t\t<label for=\"email916d0f8\" class=\"bdt-form-label\">E-mail address*</label><div class=\"bdt-form-controls\"><input type=\"email\" name=\"email\" id=\"email916d0f8\" placeholder=\"Enter your e-mail address...\" class=\"bdt-input bdt-form-default\" required=\"required\"></div>\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bdt-field-group bdt-width-1-1 elementor-field-required\">
\t\t\t\t\t\t\t<label for=\"message916d0f8\" class=\"bdt-form-label\">Message*</label><div class=\"bdt-form-controls\"><textarea name=\"message\" id=\"message916d0f8\" rows=\"4\" placeholder=\"Enter your message....\" class=\"bdt-textarea bdt-form-default\" required=\"required\"></textarea></div>\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<input type=\"hidden\" class=\"widget_id\" name=\"widget_id\" value=\"916d0f8\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"bdt-sf-916d0f8\" value=\"true\"/>
\t\t\t\t\t<input type=\"hidden\" class=\"page_id\" name=\"page_id\" value=\"142\"/>

\t\t\t\t\t<div class=\"elementor-field-type-submit bdt-field-group bdt-flex bdt-width-1-1\">
\t\t\t\t\t\t<button type=\"submit\" class=\"bdt-button-small elementor-button bdt-button bdt-button-primary\" name=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Submit</span>
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
\t\t\t\t<div class=\"elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0df5f52\" data-id=\"0df5f52\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-ee940d0 elementor-widget elementor-widget-heading\" data-id=\"ee940d0\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h3 class=\"elementor-heading-title elementor-size-default\">Contact Information</h3>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-32a01e1 elementor-widget elementor-widget-text-editor\" data-id=\"32a01e1\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p class=\"elementor-heading-title elementor-size-default\">Everyone wants to be heard and understood. At Elite Forte, our core goal is to easily connect with people and understand their preferences.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-02c090e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list\" data-id=\"02c090e\" data-element_type=\"widget\" data-widget_type=\"icon-list.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<link rel=\"stylesheet\" href=\"../wp-content/plugins/elementor/assets/css/widget-icon-list.min.css\">\t\t<ul class=\"elementor-icon-list-items\">
\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fab fa-instagram\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Instagram</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:support@Eliteforte.net\">

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-envelope\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">support@Eliteforte.net</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html#\">

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">(487) 436 - 6910</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"elementor-icon-list-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html#\">

\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-icon\">
\t\t\t\t\t\t\t<i aria-hidden=\"true\" class=\"fas fa-map-marker-alt\"></i>\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"elementor-icon-list-text\">Arkansas, US</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-af57cab elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"af57cab\" data-element_type=\"section\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-efb9fe0\" data-id=\"efb9fe0\" data-element_type=\"column\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-678e4e4 elementor-widget elementor-widget-heading\" data-id=\"678e4e4\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Frequently Asked Questions</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-d0a3ae4 elementor-invisible elementor-widget elementor-widget-bdt-accordion\" data-id=\"d0a3ae4\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}\" data-widget_type=\"bdt-accordion.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t        <div class=\"bdt-accordion-container\">
            <div id=\"bdt-accordion-d0a3ae4\" class=\"bdt-accordion\" data-bdt-accordion=\"{&quot;collapsible&quot;:true,&quot;multiple&quot;:false,&quot;transition&quot;:&quot;ease-in-out&quot;}\" data-settings=\"{&quot;id&quot;:&quot;bdt-accordion-d0a3ae4&quot;,&quot;activeHash&quot;:&quot;no&quot;,&quot;activeScrollspy&quot;:null,&quot;hashTopOffset&quot;:false,&quot;hashScrollspyTime&quot;:false}\">
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
\t\t\t\t<section class=\"elementor-section elementor-top-section elementor-element elementor-element-ca06a3a elementor-section-boxed elementor-section-height-default elementor-section-height-default\" data-id=\"ca06a3a\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
\t\t\t\t\t\t<div class=\"elementor-container elementor-column-gap-default\">
\t\t\t\t\t<div class=\"elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f168181 elementor-invisible\" data-id=\"f168181\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}\">
\t\t\t<div class=\"elementor-widget-wrap elementor-element-populated\">
\t\t\t\t\t\t\t\t<div class=\"elementor-element elementor-element-ab7fff2 elementor-widget elementor-widget-heading\" data-id=\"ab7fff2\" data-element_type=\"widget\" data-widget_type=\"heading.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t<h2 class=\"elementor-heading-title elementor-size-default\">Ready to get started?</h2>\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-ed16816 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor\" data-id=\"ed16816\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">
\t\t\t\t<div class=\"elementor-widget-container\">
\t\t\t\t\t\t\t<p>The Elite Forte Account is recommended if you have a specific goal in mind or you just want to start setting money aside. This account offers interest on your funds regardless of the goal.</p>\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"elementor-element elementor-element-fea68f7 elementor-align-center elementor-widget elementor-widget-button\" data-id=\"fea68f7\" data-element_type=\"widget\" data-widget_type=\"button.default\">
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
\t\t
\t</div><!-- #content -->

{% endblock %}", "home/contact.html.twig", "C:\\xampp\\htdocs\\eliteforte\\templates\\home\\contact.html.twig");
    }
}
