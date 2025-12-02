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

/* partials/navbar.html.twig */
class __TwigTemplate_7080a3b75899ed3451685a1fd59f68be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        // line 1
        yield "<section>
\t<a class=\"btn m-auto btn-outline-dark btn-primary\" href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
\t<hr class=\"divider\"/></hr>

\t";
        // line 5
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "\t<a class=\"btn btn-outline-dark btn-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
            yield "\">Ajouter un patient</a>
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"";
            // line 7
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossier_medical_index");
            yield "\">Choisir un Dossier</a>
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"";
            // line 8
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rdv_index");
            yield "\">Prendre un RDV</a>
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"";
            // line 9
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\">Choisir un Medecin ou un Patient</a>
\t<hr class=\"divider\"/></hr>
\t";
            // line 17
            yield "\t<a class=\"btn btn-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
            yield "\">consultation</a>
\t<a class=\"btn btn-primary\" href=\"";
            // line 18
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_specialite_index");
            yield "\">specialite</a>
\t<a class=\"btn btn-primary\" href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_observation_index");
            yield "\">observation</a>
\t<a class=\"btn btn-primary\" href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prescription_index");
            yield "\">prescription</a>
\t<a class=\"btn btn-primary\" href=\"";
            // line 21
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_index");
            yield "\">image</a>
\t";
        }
        // line 23
        yield "</section>
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
        return "partials/navbar.html.twig";
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
        return array (  99 => 23,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  77 => 17,  72 => 9,  68 => 8,  64 => 7,  59 => 6,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section>
\t<a class=\"btn m-auto btn-outline-dark btn-primary\" href=\"{{ path('app_home') }}\">Accueil</a>
\t<hr class=\"divider\"/></hr>

\t{% if app.user %}
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"{{ path('app_user_new') }}\">Ajouter un patient</a>
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"{{ path('app_dossier_medical_index') }}\">Choisir un Dossier</a>
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"{{ path('app_rdv_index') }}\">Prendre un RDV</a>
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"{{ path('app_user_index') }}\">Choisir un Medecin ou un Patient</a>
\t<hr class=\"divider\"/></hr>
\t{# {% if app.user %}
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"{{ path('app_logout') }}\">Deconnection</a>
\t{% else %}
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"{{ path('app_login') }}\">Connection</a>
\t<a class=\"btn btn-outline-dark btn-primary\" href=\"{{ path('app_register') }}\">S'enregistrer</a>
\t{% endif %} #}
\t<a class=\"btn btn-primary\" href=\"{{ path('app_consultation_index') }}\">consultation</a>
\t<a class=\"btn btn-primary\" href=\"{{ path('app_specialite_index') }}\">specialite</a>
\t<a class=\"btn btn-primary\" href=\"{{ path('app_observation_index') }}\">observation</a>
\t<a class=\"btn btn-primary\" href=\"{{ path('app_prescription_index') }}\">prescription</a>
\t<a class=\"btn btn-primary\" href=\"{{ path('app_image_index') }}\">image</a>
\t{% endif %}
</section>
", "partials/navbar.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/partials/navbar.html.twig");
    }
}
