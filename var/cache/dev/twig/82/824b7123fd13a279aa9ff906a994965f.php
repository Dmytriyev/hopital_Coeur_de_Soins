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
class __TwigTemplate_f2608c61c2ab176ec3121bf42b9c507b extends Template
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

        yield "Dossier Medical
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
        yield "\t<h1>Dossier Medical</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t";
        // line 15
        yield "\t\t\t<tr>
\t\t\t\t<th>Numero de dossier</th>
\t\t\t\t<td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 17, $this->source); })()), "numeroDossier", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Date de creation</th>
\t\t\t\t<td>";
        // line 21
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 21, $this->source); })()), "dateCreation", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 21, $this->source); })()), "dateCreation", [], "any", false, false, false, 21), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom de medecin</th>
\t\t\t\t<td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 25, $this->source); })()), "nomMedecin", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Image</th>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 30, $this->source); })()), "images", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 31
            yield "\t\t\t\t\t\t<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 31))), "html", null, true);
            yield "\"><img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "\" style=\"width: 100px; height: auto;\"></a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "\t\t\t\t</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\">Ajouter une image</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prescription_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">Ajouter une prescription</a>
\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prescription_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        yield "\">prescription</a>

\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\">Ajouter une consultation</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\">Voir des consultations</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_observation_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\">Ajouter une observation</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_observation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\">Voir des observation</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_index");
        yield "\">Retour à la liste</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["dossier_medical"]) || array_key_exists("dossier_medical", $context) ? $context["dossier_medical"] : (function () { throw new RuntimeError('Variable "dossier_medical" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\">Modifier</a>

\t";
        // line 49
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
        return array (  195 => 49,  190 => 47,  186 => 46,  182 => 45,  178 => 44,  174 => 43,  170 => 42,  165 => 40,  161 => 39,  157 => 38,  150 => 33,  137 => 31,  133 => 30,  125 => 25,  118 => 21,  111 => 17,  107 => 15,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossier Medical
{% endblock %}

{% block body %}
\t<h1>Dossier Medical</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t{# <tr>
\t\t\t    <th>Id</th>
\t\t\t    <td>{{ dossier_medical.id }}</td>
\t\t\t</tr> #}
\t\t\t<tr>
\t\t\t\t<th>Numero de dossier</th>
\t\t\t\t<td>{{ dossier_medical.numeroDossier }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Date de creation</th>
\t\t\t\t<td>{{ dossier_medical.dateCreation ? dossier_medical.dateCreation|date('d/m/Y H:i') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom de medecin</th>
\t\t\t\t<td>{{ dossier_medical.nomMedecin }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Image</th>
\t\t\t\t<td>
\t\t\t\t\t{% for image in dossier_medical.images %}
\t\t\t\t\t\t<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{{ asset('uploads/images/' ~ image.image) }}\"><img src=\"{{ asset('uploads/images/' ~ image.image) }}\" alt=\"{{ image.nom }}\" style=\"width: 100px; height: auto;\"></a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_image_new', {'id': dossier_medical.id}) }}\">Ajouter une image</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_prescription_new', {'id': dossier_medical.id}) }}\">Ajouter une prescription</a>
\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_prescription_index', {'id': dossier_medical.id}) }}\">prescription</a>

\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_consultation_new', {'id': dossier_medical.id}) }}\">Ajouter une consultation</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_consultation_show', {'id': dossier_medical.id}) }}\">Voir des consultations</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_observation_new', {'id': dossier_medical.id}) }}\">Ajouter une observation</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_observation_show', {'id': dossier_medical.id}) }}\">Voir des observation</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_dossier_medical_index') }}\">Retour à la liste</a>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_dossier_medical_edit', {'id': dossier_medical.id}) }}\">Modifier</a>

\t{{ include('dossier_medical/_delete_form.html.twig') }}
{% endblock %}
", "dossier_medical/show.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/dossier_medical/show.html.twig");
    }
}
