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

/* application/links/indirect/block-object-picker-dialog/layout.ready.js.twig */
class __TwigTemplate_a3ab4d3c7cd6bd7e1f41ab4bbbe6e523 extends Template
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
        // line 3
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "
\$('#dlg_";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 5), "GetLinkedSetId", [], "method", false, false, false, 5), "html", null, true);
            yield "').dialog({
    width: \$(window).width()*0.8,
    height: \$(window).height()*0.8,
    title:\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("UI:AddObjectsOf_Class_LinkedWith_Class", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 8), "GetLinkedClassLabel", [], "method", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 8), "GetClassLabel", [], "method", false, false, false, 8)), "html", null, true);
            yield "\" ,
    autoOpen: false,
    modal: true,
    resizeStop: oWidget";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 11), "GetInputId", [], "method", false, false, false, 11), "html", null, true);
            yield ".UpdateSizes,
    buttons: [
        { 
            text: \"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:Cancel"), "html", null, true);
            yield "\",
            class: \"ibo-is-alternative ibo-is-neutral\",
            click: function() {
                \$(this).dialog('close');
            } 
        },
        { 
            text:  \"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:Add"), "html", null, true);
            yield "\",
            class: \"ibo-is-regular ibo-is-primary\",
            id: \"btn_ok_";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 23), "GetLinkedSetId", [], "method", false, false, false, 23), "html", null, true);
            yield "\",
            click: function() {
                return oWidget";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 25), "GetInputId", [], "method", false, false, false, 25), "html", null, true);
            yield ".DoAddObjects();
            } 
        },
    ],

});

\$('#SearchFormToAdd_";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 32), "GetLinkedSetId", [], "method", false, false, false, 32), "html", null, true);
            yield " form').on('submit.uilinksWizard', oWidget";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 32), "GetInputId", [], "method", false, false, false, 32), "html", null, true);
            yield ".SearchObjectsToAdd);
\$('#SearchFormToAdd_";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 33), "GetLinkedSetId", [], "method", false, false, false, 33), "html", null, true);
            yield "').on('resize', oWidget";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 33), "GetInputId", [], "method", false, false, false, 33), "html", null, true);
            yield ".UpdateSizes);

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "application/links/indirect/block-object-picker-dialog/layout.ready.js.twig";
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
        return array (  110 => 3,  101 => 33,  95 => 32,  85 => 25,  80 => 23,  75 => 21,  65 => 14,  59 => 11,  53 => 8,  47 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/links/indirect/block-object-picker-dialog/layout.ready.js.twig", "C:\\laragon\\www\\itop\\templates\\application\\links\\indirect\\block-object-picker-dialog\\layout.ready.js.twig");
    }
}
