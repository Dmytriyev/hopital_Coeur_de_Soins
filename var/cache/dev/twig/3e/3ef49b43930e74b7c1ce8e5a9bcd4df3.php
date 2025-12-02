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

/* user/index.html.twig */
class __TwigTemplate_e3d69ee6b11cae8801653b82380f68ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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

        yield "Utilisateurs";
        
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
        yield "    <h1>Utilisateurs</h1>

    <table class=\"table\">
        <thead>
            <tr>
                ";
        // line 12
        yield "                <th>Email</th>
                <th>Roles</th>
                ";
        // line 15
        yield "                <th>Genre</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Matricule</th>
                <th>Post</th>
                <th>Numero de secu</th>
                <th>Telephone de confiance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            yield "            <tr>
                ";
            // line 32
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                <td>";
            // line 33
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 33)), "html", null, true)) : (""));
            yield "</td>
                ";
            // line 35
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "genre", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 36)), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateNaissance", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateNaissance", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "matricule", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "post", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numeroSecu", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "telephoneConfiance", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td>
                    <a  class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">Voir</a>
                    <a  class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 50
        if (!$context['_iterated']) {
            // line 51
            yield "            <tr>
                <td colspan=\"15\">Aucun Utilisateur trouver</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </tbody>
    </table>

    <a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\">Creer</a>
    <a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"";
        // line 59
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
        return "user/index.html.twig";
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
        return array (  218 => 59,  214 => 58,  209 => 55,  200 => 51,  198 => 50,  190 => 47,  186 => 46,  181 => 44,  177 => 43,  173 => 42,  169 => 41,  165 => 40,  161 => 39,  157 => 38,  153 => 37,  149 => 36,  144 => 35,  140 => 33,  135 => 32,  132 => 30,  127 => 29,  111 => 15,  107 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateurs{% endblock %}

{% block body %}
    <h1>Utilisateurs</h1>

    <table class=\"table\">
        <thead>
            <tr>
                {# <th>Id</th> #}
                <th>Email</th>
                <th>Roles</th>
                {# <th>Password</th> #}
                <th>Genre</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Matricule</th>
                <th>Post</th>
                <th>Numero de secu</th>
                <th>Telephone de confiance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                {# <td>{{ user.id }}</td> #}
                <td>{{ user.email }}</td>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                {# <td>{{ user.password }}</td> #}
                <td>{{ user.genre }}</td>
                <td>{{ user.nom | capitalize }}</td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.dateNaissance ? user.dateNaissance|date('d/m/Y') : '' }}</td>
                <td>{{ user.adresse }}</td>
                <td>{{ user.telephone }}</td>
                <td>{{ user.matricule }}</td>
                <td>{{ user.post }}</td>
                <td>{{ user.numeroSecu }}</td>
                <td>{{ user.telephoneConfiance }}</td>
                <td>
                    <a  class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_user_show', {'id': user.id}) }}\">Voir</a>
                    <a  class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_user_edit', {'id': user.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"15\">Aucun Utilisateur trouver</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_user_new') }}\">Creer</a>
    <a class=\"btn btn-outline-dark btn-primary mb-3\" href=\"{{ path('app_home') }}\">Retour à l'accueil</a>
{% endblock %}
", "user/index.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/user/index.html.twig");
    }
}
