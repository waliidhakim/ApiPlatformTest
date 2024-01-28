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

/* prestataire_membership_approuved.html.twig */
class __TwigTemplate_45771afa43456c7d15e2a45b7a4e9b44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestataire_membership_approuved.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestataire_membership_approuved.html.twig"));

        // line 1
        echo "<p>Hi ";
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ",</p>
<p>
    We are happy ton confirm your service provider membership under the name ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " <br>
    responding to the description ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " <br>
    and registered with the kbis : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["kbis"]) || array_key_exists("kbis", $context) ? $context["kbis"] : (function () { throw new RuntimeError('Variable "kbis" does not exist.', 5, $this->source); })()), "html", null, true);
        echo ".<br>

    Welcome on board !
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "prestataire_membership_approuved.html.twig";
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
        return array (  59 => 5,  55 => 4,  51 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Hi {{ firstname }} {{ lastname }},</p>
<p>
    We are happy ton confirm your service provider membership under the name {{ name }} <br>
    responding to the description {{ description }} <br>
    and registered with the kbis : {{ kbis }}.<br>

    Welcome on board !
</p>
", "prestataire_membership_approuved.html.twig", "/srv/app/templates/prestataire_membership_approuved.html.twig");
    }
}
