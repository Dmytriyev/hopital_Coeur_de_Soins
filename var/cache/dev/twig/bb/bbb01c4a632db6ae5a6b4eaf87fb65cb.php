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

/* prescription/index.html.twig */
class __TwigTemplate_690d5fe2d5e8c93c1adf5813f914b291 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/index.html.twig"));

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

        yield "Prescriptions";
        
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
        yield "    <h1>Prescriptions</h1>

    <table class=\"table\">
        <thead>
            <tr>
                ";
        // line 12
        yield "                <th>Traitement</th>
                <th>Period</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prescriptions"]) || array_key_exists("prescriptions", $context) ? $context["prescriptions"] : (function () { throw new RuntimeError('Variable "prescriptions" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prescription"]) {
            // line 19
            yield "            <tr>
                ";
            // line 21
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "traitement", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "period", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>
                    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prescription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">Voir</a>
                    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prescription_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 28
        if (!$context['_iterated']) {
            // line 29
            yield "            <tr>
                <td colspan=\"4\">Aucune prescription en cour</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prescription'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </tbody>
    </table>

    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prescription_new");
        yield "\">Ajouter</a>
    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Retour à l'accueil</a>
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
        return "prescription/index.html.twig";
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
        return array (  165 => 37,  161 => 36,  156 => 33,  147 => 29,  145 => 28,  137 => 25,  133 => 24,  128 => 22,  123 => 21,  120 => 19,  115 => 18,  107 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Prescriptions{% endblock %}

{% block body %}
    <h1>Prescriptions</h1>

    <table class=\"table\">
        <thead>
            <tr>
                {# <th>Id</th> #}
                <th>Traitement</th>
                <th>Period</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for prescription in prescriptions %}
            <tr>
                {# <td>{{ prescription.id }}</td> #}
                <td>{{ prescription.traitement }}</td>
                <td>{{ prescription.period }}</td>
                <td>
                    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_prescription_show', {'id': prescription.id}) }}\">Voir</a>
                    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_prescription_edit', {'id': prescription.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">Aucune prescription en cour</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_prescription_new') }}\">Ajouter</a>
    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_home') }}\">Retour à l'accueil</a>
{% endblock %}
", "prescription/index.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/prescription/index.html.twig");
    }
}
