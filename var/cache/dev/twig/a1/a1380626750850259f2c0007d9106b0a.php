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

/* dossier_medical/_form.html.twig */
class __TwigTemplate_ec53a3233841146ef35f31ff518ff1e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier_medical/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier_medical/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "w-50 m-auto border p-3 my-3"]]);
        yield "
";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        yield "
";
        // line 6
        yield "<button class=\"btn btn-outline-dark btn-primary col-4 mt-3\" type=\"submit\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 6, $this->source); })()), "Eregistrer")) : ("Eregistrer")), "html", null, true);
        yield "</button>
";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_end');
        yield "

<script>
document.addEventListener('turbo:load', () => {
    if (document.getElementById('add-image-btn')) return;
    const collectionHolder = document.querySelector('[data-prototype]');
    const addButton = document.createElement('button');
    addButton.setAttribute('id', 'add-image-btn');
    addButton.innerText = 'Ajouter une image';
    collectionHolder.append(addButton);
    addButton.addEventListener('click', () => {
        const prototype = collectionHolder.dataset.prototype;
        const index = collectionHolder.querySelectorAll('input[type=\"file\"]').length;
        const newForm = prototype.replace(/__name__/g, index);
        const div = document.createElement('div');
        div.innerHTML = newForm;
        collectionHolder.insertBefore(div, addButton);
    });
});
</script>


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
        return "dossier_medical/_form.html.twig";
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
        return array (  61 => 7,  56 => 6,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'w-50 m-auto border p-3 my-3'}}) }}
{{ form_widget(form) }}
{# <div data-prototype=\"{{ form_widget(form.images.vars.prototype)|e('html_attr') }}\">
\t{{ form_widget(form.images) }}
</div> #}
<button class=\"btn btn-outline-dark btn-primary col-4 mt-3\" type=\"submit\">{{ button_label|default('Eregistrer') }}</button>
{{ form_end(form) }}

<script>
document.addEventListener('turbo:load', () => {
    if (document.getElementById('add-image-btn')) return;
    const collectionHolder = document.querySelector('[data-prototype]');
    const addButton = document.createElement('button');
    addButton.setAttribute('id', 'add-image-btn');
    addButton.innerText = 'Ajouter une image';
    collectionHolder.append(addButton);
    addButton.addEventListener('click', () => {
        const prototype = collectionHolder.dataset.prototype;
        const index = collectionHolder.querySelectorAll('input[type=\"file\"]').length;
        const newForm = prototype.replace(/__name__/g, index);
        const div = document.createElement('div');
        div.innerHTML = newForm;
        collectionHolder.insertBefore(div, addButton);
    });
});
</script>


", "dossier_medical/_form.html.twig", "/Users/macbookm1pro/Document/formation beauvoir/Symfony/hopital_Coeur_de_Soins/templates/dossier_medical/_form.html.twig");
    }
}
