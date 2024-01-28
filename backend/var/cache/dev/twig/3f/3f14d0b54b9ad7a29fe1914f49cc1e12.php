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

/* test/emailTest.html.twig */
class __TwigTemplate_03f3a16c49837e0e4e838e8b3659c429 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/emailTest.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/emailTest.html.twig"));

        // line 1
        echo "<h1>Test sending emails</h1>
<p>data interpolation ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["variable0"]) || array_key_exists("variable0", $context) ? $context["variable0"] : (function () { throw new RuntimeError('Variable "variable0" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</p>
<p>data interpolation ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["variable1"]) || array_key_exists("variable1", $context) ? $context["variable1"] : (function () { throw new RuntimeError('Variable "variable1" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</p>
<p>data interpolation ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["variable2"]) || array_key_exists("variable2", $context) ? $context["variable2"] : (function () { throw new RuntimeError('Variable "variable2" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "test/emailTest.html.twig";
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
        return array (  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Test sending emails</h1>
<p>data interpolation {{ variable0 }}</p>
<p>data interpolation {{ variable1 }}</p>
<p>data interpolation {{ variable2 }}</p>", "test/emailTest.html.twig", "/srv/app/templates/test/emailTest.html.twig");
    }
}
