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

/* partials/header.html.twig */
class __TwigTemplate_5561c73a5d40b73735f33fe5a097bc61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        yield "<!-- Navbar -->
<nav id=\"nav\" class=\"navbar navbar-expand-lg bg-body-Primary \">
\t<!-- Container wrapper -->
\t<div id=\"nav-container\" class=\"d-flex align-items-center \">
\t\t<!-- Navbar brand -->
\t\t<a  class=\"navbar-brand me-2 \" href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
\t\t\t<img id=\"logo\" src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/Hopital.png"), "html", null, true);
        yield "\" height=\"40\" alt=\" Logo\"/>
\t\t</a>

\t\t<!-- Toggle button -->
\t\t<button data-mdb-collapse-init class=\"navbar-toggler\" type=\"button\" data-mdb-target=\"#navbarButtonsExample\" aria-controls=\"navbarButtonsExample\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">Hopital Coeur de Soins</button>
\t\t<!-- Collapsible wrapper -->
\t\t<div
\t\t\tclass=\"collapse navbar-collapse\" id=\"navbarButtonsExample\">
\t\t\t<!-- Left links -->
\t\t\t<ul id=\"logo-text\" class=\"navbar-nav me-auto text-secondary-emphasis mb-2 mb-lg-0 \">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a id=\"nom_site\" class=\" nav-link\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Hopital Coeur de Soins</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- Left links -->
\t\t\t<div id=\"dropdown\" class=\"d-flex align-items-center  position-absolute top-1 end-0\">
\t\t\t\t";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "\t\t\t\t\t<p id=\"nom_connect\" class=\" m-auto display-7 px-2 fw-bold text-secondary-emphasis\">Bonjour
\t\t\t\t\t\t";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25)), "html", null, true);
            yield "
\t\t\t\t\t\t";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "prenom", [], "any", false, false, false, 26)), "html", null, true);
            yield "</p>
\t\t\t\t";
        }
        // line 28
        yield "\t\t\t\t<div class=\"nav-item px-3 me-3 me-lg-0 dropdown\">
\t\t\t\t\t<a data-mdb-dropdown-init class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" aria-expanded=\"false\">Mon compte</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_profil");
            yield "\">Mes informations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"/></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se deconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 40
            yield "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">S'enregistrer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 47
        yield "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Collapsible wrapper -->
\t</div>
\t<!-- Container wrapper -->
</nav>
<!-- Navbar -->
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
        return "partials/header.html.twig";
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
        return array (  133 => 47,  127 => 44,  121 => 41,  118 => 40,  112 => 37,  105 => 33,  102 => 32,  100 => 31,  95 => 28,  90 => 26,  86 => 25,  83 => 24,  81 => 23,  73 => 18,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar -->
<nav id=\"nav\" class=\"navbar navbar-expand-lg bg-body-Primary \">
\t<!-- Container wrapper -->
\t<div id=\"nav-container\" class=\"d-flex align-items-center \">
\t\t<!-- Navbar brand -->
\t\t<a  class=\"navbar-brand me-2 \" href=\"{{ path('app_home') }}\">
\t\t\t<img id=\"logo\" src=\"{{ asset('/images/Hopital.png') }}\" height=\"40\" alt=\" Logo\"/>
\t\t</a>

\t\t<!-- Toggle button -->
\t\t<button data-mdb-collapse-init class=\"navbar-toggler\" type=\"button\" data-mdb-target=\"#navbarButtonsExample\" aria-controls=\"navbarButtonsExample\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">Hopital Coeur de Soins</button>
\t\t<!-- Collapsible wrapper -->
\t\t<div
\t\t\tclass=\"collapse navbar-collapse\" id=\"navbarButtonsExample\">
\t\t\t<!-- Left links -->
\t\t\t<ul id=\"logo-text\" class=\"navbar-nav me-auto text-secondary-emphasis mb-2 mb-lg-0 \">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a id=\"nom_site\" class=\" nav-link\" href=\"{{ path('app_home') }}\">Hopital Coeur de Soins</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- Left links -->
\t\t\t<div id=\"dropdown\" class=\"d-flex align-items-center  position-absolute top-1 end-0\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<p id=\"nom_connect\" class=\" m-auto display-7 px-2 fw-bold text-secondary-emphasis\">Bonjour
\t\t\t\t\t\t{{ app.user.nom | capitalize }}
\t\t\t\t\t\t{{ app.user.prenom | capitalize }}</p>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"nav-item px-3 me-3 me-lg-0 dropdown\">
\t\t\t\t\t<a data-mdb-dropdown-init class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" aria-expanded=\"false\">Mon compte</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_my_profil') }}\">Mes informations</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"/></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Se deconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">Se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_register') }}\">S'enregistrer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Collapsible wrapper -->
\t</div>
\t<!-- Container wrapper -->
</nav>
<!-- Navbar -->
", "partials/header.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/partials/header.html.twig");
    }
}
