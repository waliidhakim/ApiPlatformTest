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
class __TwigTemplate_3d468f0094e420d3dfca0c023d99b114 extends Template
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
        // line 1
        echo "<h1>Test sending emails</h1>
<p>data interpolation ";
        // line 2
        echo twig_escape_filter($this->env, ($context["variable0"] ?? null), "html", null, true);
        echo "</p>
<p>data interpolation ";
        // line 3
        echo twig_escape_filter($this->env, ($context["variable1"] ?? null), "html", null, true);
        echo "</p>
<p>data interpolation ";
        // line 4
        echo twig_escape_filter($this->env, ($context["variable2"] ?? null), "html", null, true);
        echo "</p>";
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
        return array (  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test/emailTest.html.twig", "/srv/app/templates/test/emailTest.html.twig");
    }
}
