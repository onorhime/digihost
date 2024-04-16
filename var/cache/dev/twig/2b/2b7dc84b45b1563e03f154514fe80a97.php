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

/* choicehorizone.com/index.html@p=192.html */
class __TwigTemplate_c76c8d3b747727282c03acfa5a8c5e5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choicehorizone.com/index.html@p=192.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choicehorizone.com/index.html@p=192.html"));

        // line 1
        echo "
<br />
<b>Warning</b>:  Cannot modify header information - headers already sent by (output started at /home/choiceh1/public_html/wp-config.php:1) in <b>/home/choiceh1/public_html/wp-includes/pluggable.php</b> on line <b>1435</b><br />
<br />
<b>Warning</b>:  Cannot modify header information - headers already sent by (output started at /home/choiceh1/public_html/wp-config.php:1) in <b>/home/choiceh1/public_html/wp-includes/pluggable.php</b> on line <b>1438</b><br />
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "choicehorizone.com/index.html@p=192.html";
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
<br />
<b>Warning</b>:  Cannot modify header information - headers already sent by (output started at /home/choiceh1/public_html/wp-config.php:1) in <b>/home/choiceh1/public_html/wp-includes/pluggable.php</b> on line <b>1435</b><br />
<br />
<b>Warning</b>:  Cannot modify header information - headers already sent by (output started at /home/choiceh1/public_html/wp-config.php:1) in <b>/home/choiceh1/public_html/wp-includes/pluggable.php</b> on line <b>1438</b><br />
", "choicehorizone.com/index.html@p=192.html", "C:\\xampp\\htdocs\\eliteforte\\templates\\choicehorizone.com\\index.html@p=192.html");
    }
}
