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

/* dossier_medical/index.html.twig */
class __TwigTemplate_6129adf1b638a74ad2580c68b33f9c82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier_medical/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier_medical/index.html.twig"));

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

        yield "Dossiers Medicaux";
        
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
        yield "    <h1>Dossiers Medicaux</h1>

    <table class=\"table\">
        <thead>
            <tr>
                ";
        // line 12
        yield "                <th>Numero de dossier</th>
                <th>Date de creation</th>
                <th>Nom de medecin</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dossier_medicals"]) || array_key_exists("dossier_medicals", $context) ? $context["dossier_medicals"] : (function () { throw new RuntimeError('Variable "dossier_medicals" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dossier_medical"]) {
            // line 21
            yield "            <tr>
                ";
            // line 23
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "numeroDossier", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "dateCreation", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "dateCreation", [], "any", false, false, false, 24), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "nomMedecin", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "image", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>
                    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">Voir</a>
                    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 32
        if (!$context['_iterated']) {
            // line 33
            yield "            <tr>
                <td colspan=\"6\">Aucun dosssier en cour</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dossier_medical'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        </tbody>
    </table>

    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_new");
        yield "\">Creer</a>
    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"";
        // line 41
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
        return "dossier_medical/index.html.twig";
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
        return array (  175 => 41,  171 => 40,  166 => 37,  157 => 33,  155 => 32,  147 => 29,  143 => 28,  138 => 26,  134 => 25,  130 => 24,  125 => 23,  122 => 21,  117 => 20,  107 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossiers Medicaux{% endblock %}

{% block body %}
    <h1>Dossiers Medicaux</h1>

    <table class=\"table\">
        <thead>
            <tr>
                {# <th>Id</th> #}
                <th>Numero de dossier</th>
                <th>Date de creation</th>
                <th>Nom de medecin</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for dossier_medical in dossier_medicals %}
            <tr>
                {# <td>{{ dossier_medical.id }}</td> #}
                <td>{{ dossier_medical.numeroDossier }}</td>
                <td>{{ dossier_medical.dateCreation ? dossier_medical.dateCreation|date('d/m/Y H:i') : '' }}</td>
                <td>{{ dossier_medical.nomMedecin }}</td>
                <td>{{ dossier_medical.image }}</td>
                <td>
                    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_dossier_medical_show', {'id': dossier_medical.id}) }}\">Voir</a>
                    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_dossier_medical_edit', {'id': dossier_medical.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Aucun dosssier en cour</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_dossier_medical_new') }}\">Creer</a>
    <a class=\"btn btn-outline-dark btn-primary mb-3\"  href=\"{{ path('app_home') }}\">Retour à l'accueil</a>
{% endblock %}
", "dossier_medical/index.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/dossier_medical/index.html.twig");
    }
}
