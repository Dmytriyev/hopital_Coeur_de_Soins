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

/* image/index.html.twig */
class __TwigTemplate_83ba56c4c96714bfc3e18b3f6c2afcfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "image/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "image/index.html.twig"));

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

        yield "Images
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
        yield "\t<h1>Images</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t";
        // line 13
        yield "\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            yield "\t\t\t\t<tr>
\t\t\t\t\t";
            // line 22
            yield "\t\t\t\t\t<td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
\t\t\t\t\t";
            // line 23
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 23))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"http:";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 25))), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 25))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "nom", [], "any", false, false, false, 25), "html", null, true);
                yield "\" style=\"width: 100px; height: auto;\"></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            } else {
                // line 28
                yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">Aucune image trouvé</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            // line 32
            yield "\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">Voir</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\">Modifier</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
            
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "\t\t</tbody>
\t</table>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_index");
        yield "\">Retour à la liste</a>
\t";
        // line 43
        yield "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "image/index.html.twig";
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
        return array (  175 => 43,  171 => 41,  167 => 39,  156 => 34,  152 => 33,  149 => 32,  143 => 28,  133 => 25,  130 => 24,  128 => 23,  123 => 22,  120 => 20,  116 => 19,  108 => 13,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Images
{% endblock %}

{% block body %}
\t<h1>Images</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t{# <th>Id</th> #}
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for image in images %}
\t\t\t\t<tr>
\t\t\t\t\t{# <td>{{ image.id }}</td> #}
\t\t\t\t\t<td>{{ image.nom }}</td>
\t\t\t\t\t{% if image.image is not null %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"http:{{ asset('uploads/images/' ~ image.image) }}\" target=\"_blank\" rel=\"noopener noreferrer\"><img src=\"{{ asset('uploads/images/' ~ image.image) }}\" alt=\"{{ image.nom }}\" style=\"width: 100px; height: auto;\"></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"4\">Aucune image trouvé</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_image_show', {'id': image.id}) }}\">Voir</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_image_edit', {'id': image.id}) }}\">Modifier</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
            
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t<a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_dossier_medical_index') }}\">Retour à la liste</a>
\t{# <a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_image_new', {'id': dossier_medical.id}) }}\">Ajouter une image</a> #}
\t{# <a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_home') }}\">Retour à l'accueil</a> #}
{% endblock %}
", "image/index.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/image/index.html.twig");
    }
}
