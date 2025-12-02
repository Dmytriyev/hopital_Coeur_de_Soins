<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Twig/Exception/errer.html.twig */
class __TwigTemplate_a68e352d53fbae67754f709bab24bdd5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/errer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/errer.html.twig"));

        // line 1
        yield "<div>
\t<div>
\t\t";
        // line 3
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 3, $this->source); })()) == 404)) {
            // line 4
            yield "\t\t\t<h1>Erreur
\t\t\t\t";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "</h1>
\t\t\t<p class=\"text-5xl text-center mt-5 mb-5\">La page n'est pas cree</p>
\t\t";
        }
        // line 8
        yield "\t</div>
\t<div>
\t\t";
        // line 10
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 10, $this->source); })()) == 400)) {
            // line 11
            yield "\t\t\t<h1>Erreur
\t\t\t\t";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "</h1>
\t\t\t<p class=\"text-5xl text-center mt-5 mb-5\">La requete est incorrecte</p>
\t\t";
        }
        // line 15
        yield "\t</div>
\t<div>
\t\t";
        // line 17
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 17, $this->source); })()) == 500)) {
            // line 18
            yield "\t\t\t<h1>Erreur
\t\t\t\t";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "</h1>
\t\t\t<p class=\"text-5xl text-center mt-5 mb-5\">Une erreur interne est survenue</p>
\t\t";
        }
        // line 22
        yield "\t</div>
\t<div>
\t\t";
        // line 24
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 24, $this->source); })()) == 403)) {
            // line 25
            yield "\t\t\t<h1>Erreur
\t\t\t\t";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 26, $this->source); })()), "html", null, true);
            yield "</h1>
\t\t\t<p class=\"text-5xl text-center mt-5 mb-5\">Acces interdit</p>
\t\t";
        }
        // line 29
        yield "\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Twig/Exception/errer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  108 => 29,  102 => 26,  99 => 25,  97 => 24,  93 => 22,  87 => 19,  84 => 18,  82 => 17,  78 => 15,  72 => 12,  69 => 11,  67 => 10,  63 => 8,  57 => 5,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div>
\t<div>
\t\t{% if status_code == 404 %}
\t\t\t<h1>Erreur
\t\t\t\t{{status_code}}</h1>
\t\t\t<p class=\"text-5xl text-center mt-5 mb-5\">La page n'est pas cree</p>
\t\t{% endif %}
\t</div>
\t<div>
\t\t{% if status_code == 400 %}
\t\t\t<h1>Erreur
\t\t\t\t{{status_code}}</h1>
\t\t\t<p class=\"text-5xl text-center mt-5 mb-5\">La requete est incorrecte</p>
\t\t{% endif %}
\t</div>
\t<div>
\t\t{% if status_code == 500 %}
\t\t\t<h1>Erreur
\t\t\t\t{{status_code}}</h1>
\t\t\t<p class=\"text-5xl text-center mt-5 mb-5\">Une erreur interne est survenue</p>
\t\t{% endif %}
\t</div>
\t<div>
\t\t{% if status_code == 403 %}
\t\t\t<h1>Erreur
\t\t\t\t{{status_code}}</h1>
\t\t\t<p class=\"text-5xl text-center mt-5 mb-5\">Acces interdit</p>
\t\t{% endif %}
\t</div>
</div>
", "@Twig/Exception/errer.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/bundles/TwigBundle/Exception/errer.html.twig");
    }
}
