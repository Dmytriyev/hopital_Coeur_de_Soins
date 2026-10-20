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
class __TwigTemplate_81942601f7497924e9d585c275eb5e30 extends Template
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

        yield "Dossiers Medicaux
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<h1>Dossiers Medicaux</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t";
        // line 13
        yield "\t\t\t\t<th>Numero de dossier</th>
\t\t\t\t<th>Date de creation</th>
\t\t\t\t<th>Nom de medecin</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dossier_medicals"]) || array_key_exists("dossier_medicals", $context) ? $context["dossier_medicals"] : (function () { throw new RuntimeError('Variable "dossier_medicals" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dossier_medical"]) {
            // line 22
            yield "\t\t\t\t<tr>
\t\t\t\t\t";
            // line 24
            yield "\t\t\t\t\t<td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "numeroDossier", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 25
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "dateCreation", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "dateCreation", [], "any", false, false, false, 25), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "</td>
\t\t\t\t\t<td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "nomMedecin", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "images", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 29
                yield "\t\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 29))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 29), "html", null, true);
                yield "\" style=\"width: 100px; height: auto;\">
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 33
            yield "\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\">Voir</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dossier_medical"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">Modifier</a>
\t\t\t\t\t\t";
            // line 37
            yield "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        // line 39
        if (!$context['_iterated']) {
            // line 40
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">Aucun dosssier en cour</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dossier_medical'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "\t\t</tbody>
\t</table>

\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_new");
        yield "\">Creer</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 48
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
        return array (  195 => 48,  191 => 47,  186 => 44,  177 => 40,  175 => 39,  169 => 37,  165 => 35,  161 => 34,  158 => 33,  155 => 31,  144 => 29,  140 => 28,  135 => 26,  131 => 25,  126 => 24,  123 => 22,  118 => 21,  108 => 13,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossiers Medicaux
{% endblock %}

{% block body %}
\t<h1>Dossiers Medicaux</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t{# <th>Id</th> #}
\t\t\t\t<th>Numero de dossier</th>
\t\t\t\t<th>Date de creation</th>
\t\t\t\t<th>Nom de medecin</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for dossier_medical in dossier_medicals %}
\t\t\t\t<tr>
\t\t\t\t\t{# <td>{{ dossier_medical.id }}</td> #}
\t\t\t\t\t<td>{{ dossier_medical.numeroDossier }}</td>
\t\t\t\t\t<td>{{ dossier_medical.dateCreation ? dossier_medical.dateCreation|date('d/m/Y H:i') : '' }}</td>
\t\t\t\t\t<td>{{ dossier_medical.nomMedecin }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% for image in dossier_medical.images %}
\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/' ~ image.image) }}\" alt=\"{{ image.nom }}\" style=\"width: 100px; height: auto;\">
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</td>
\t\t\t\t\t{# <td>{{ dossier_medical.image }}</td> #}
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_dossier_medical_show', {'id': dossier_medical.id}) }}\">Voir</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_dossier_medical_edit', {'id': dossier_medical.id}) }}\">Modifier</a>
\t\t\t\t\t\t{# <a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_image_new', {'id': dossier_medical.id}) }}\">Ajouter une image</a> #}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">Aucun dosssier en cour</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_dossier_medical_new') }}\">Creer</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_home') }}\">Retour à l'accueil</a>
{% endblock %}
", "dossier_medical/index.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/dossier_medical/index.html.twig");
    }
}
