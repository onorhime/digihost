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

/* choicehorizone.com/xmlrpc.php@rsd.html */
class __TwigTemplate_4ed659381dd2526199f66c9119e61024 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choicehorizone.com/xmlrpc.php@rsd.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choicehorizone.com/xmlrpc.php@rsd.html"));

        // line 1
        echo "
<?xml version=\"1.0\" encoding=\"UTF-8\"?><rsd version=\"1.0\" xmlns=\"http://archipelago.phrasewise.com/rsd\">
\t<service>
\t\t<engineName>WordPress</engineName>
\t\t<engineLink>https://wordpress.org/</engineLink>
\t\t<homePageLink>https://choicehorizone.com</homePageLink>
\t\t<apis>
\t\t\t<api name=\"WordPress\" blogID=\"1\" preferred=\"true\" apiLink=\"https://choicehorizone.com/xmlrpc.php\" />
\t\t\t<api name=\"Movable Type\" blogID=\"1\" preferred=\"false\" apiLink=\"https://choicehorizone.com/xmlrpc.php\" />
\t\t\t<api name=\"MetaWeblog\" blogID=\"1\" preferred=\"false\" apiLink=\"https://choicehorizone.com/xmlrpc.php\" />
\t\t\t<api name=\"Blogger\" blogID=\"1\" preferred=\"false\" apiLink=\"https://choicehorizone.com/xmlrpc.php\" />
\t\t\t\t<api name=\"WP-API\" blogID=\"1\" preferred=\"false\" apiLink=\"https://choicehorizone.com/wp-json/\" />
\t\t\t</apis>
\t</service>
</rsd>
\t";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "choicehorizone.com/xmlrpc.php@rsd.html";
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
<?xml version=\"1.0\" encoding=\"UTF-8\"?><rsd version=\"1.0\" xmlns=\"http://archipelago.phrasewise.com/rsd\">
\t<service>
\t\t<engineName>WordPress</engineName>
\t\t<engineLink>https://wordpress.org/</engineLink>
\t\t<homePageLink>https://choicehorizone.com</homePageLink>
\t\t<apis>
\t\t\t<api name=\"WordPress\" blogID=\"1\" preferred=\"true\" apiLink=\"https://choicehorizone.com/xmlrpc.php\" />
\t\t\t<api name=\"Movable Type\" blogID=\"1\" preferred=\"false\" apiLink=\"https://choicehorizone.com/xmlrpc.php\" />
\t\t\t<api name=\"MetaWeblog\" blogID=\"1\" preferred=\"false\" apiLink=\"https://choicehorizone.com/xmlrpc.php\" />
\t\t\t<api name=\"Blogger\" blogID=\"1\" preferred=\"false\" apiLink=\"https://choicehorizone.com/xmlrpc.php\" />
\t\t\t\t<api name=\"WP-API\" blogID=\"1\" preferred=\"false\" apiLink=\"https://choicehorizone.com/wp-json/\" />
\t\t\t</apis>
\t</service>
</rsd>
\t", "choicehorizone.com/xmlrpc.php@rsd.html", "C:\\xampp\\htdocs\\eliteforte\\templates\\choicehorizone.com\\xmlrpc.php@rsd.html");
    }
}
