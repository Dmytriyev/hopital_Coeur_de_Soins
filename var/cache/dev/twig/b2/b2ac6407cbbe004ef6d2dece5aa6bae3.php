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

/* dossier_medical/show.html.twig */
class __TwigTemplate_2ffe51a8e96d15a01fa78344e18f3d09 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier_medical/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier_medical/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dossier Medical";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Dossier Medical</h1>

    <table class=\"table\">
        <tbody>
            ";
        // line 14
        yield "            <tr>
                <th>Numero de dossier</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 16, $this->source); })()), "numeroDossier", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date de creation</th>
                <td>";
        // line 20
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 20, $this->source); })()), "dateCreation", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 20, $this->source); })()), "dateCreation", [], "any", false, false, false, 20), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Nom de medecin</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 24, $this->source); })()), "nomMedecin", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_index");
        yield "\">Retour à la liste</a>

    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\">Modifier</a>

    ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "dossier_medical/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dossier_medical/show.html.twig";
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
        return array (  149 => 37,  144 => 35,  139 => 33,  131 => 28,  124 => 24,  117 => 20,  110 => 16,  106 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossier Medical{% endblock %}

{% block body %}
    <h1>Dossier Medical</h1>

    <table class=\"table\">
        <tbody>
            {# <tr>
                <th>Id</th>
                <td>{{ dossier_medical.id }}</td>
            </tr> #}
            <tr>
                <th>Numero de dossier</th>
                <td>{{ dossier_medical.numeroDossier }}</td>
            </tr>
            <tr>
                <th>Date de creation</th>
                <td>{{ dossier_medical.dateCreation ? dossier_medical.dateCreation|date('d/m/Y H:i') : '' }}</td>
            </tr>
            <tr>
                <th>Nom de medecin</th>
                <td>{{ dossier_medical.nomMedecin }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ dossier_medical.image }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_dossier_medical_index') }}\">Retour à la liste</a>

    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_dossier_medical_edit', {'id': dossier_medical.id}) }}\">Modifier</a>

    {{ include('dossier_medical/_delete_form.html.twig') }}
{% endblock %}
", "dossier_medical/show.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/dossier_medical/show.html.twig");
    }
}
