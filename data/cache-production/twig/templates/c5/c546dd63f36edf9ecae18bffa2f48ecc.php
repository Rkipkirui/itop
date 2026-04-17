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

/* application/links/indirect/block-indirect-linkset-edit-table/layout.js.twig */
class __TwigTemplate_cd677a21321f20d27f71c98b213dabba extends Template
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
            yield "oWidget";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 4), "GetInputId", [], "method", false, false, false, 4), "html", null, true);
            yield " = new LinksWidget(
        '";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 5), "GetLinkedSetId", [], "method", false, false, false, 5), "html", null, true);
            yield "',
        '";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 6), "GetClass", [], "method", false, false, false, 6), "html", null, true);
            yield "',
        '";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 7), "GetAttCode", [], "method", false, false, false, 7), "html", null, true);
            yield "',
        '";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 8), "GetInputId", [], "method", false, false, false, 8), "html", null, true);
            yield "',
        '";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 9), "GetNameSuffix", [], "method", false, false, false, 9), "html", null, true);
            yield "',
        ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sDuplicates", [], "any", false, false, false, 10), "html", null, true);
            yield ",
        ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sWizHelper", [], "any", false, false, false, 11), "html", null, true);
            yield ",
        '";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 12), "GetExternalKeyToRemote", [], "method", false, false, false, 12), "html", null, true);
            yield "',
        ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSDoSearch", [], "any", false, false, false, 13), "html", null, true);
            yield ",
        ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "iMaxAddedId", [], "any", false, false, false, 14), "html", null, true);
            yield ",
        ";
            // line 15
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "aRemoved", [], "any", false, false, false, 15));
            yield "
);
oWidget";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 17), "GetInputId", [], "method", false, false, false, 17), "html", null, true);
            yield ".Init();
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
        return "application/links/indirect/block-indirect-linkset-edit-table/layout.js.twig";
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
        return array (  100 => 3,  94 => 17,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/links/indirect/block-indirect-linkset-edit-table/layout.js.twig", "C:\\laragon\\www\\itop\\templates\\application\\links\\indirect\\block-indirect-linkset-edit-table\\layout.js.twig");
    }
}
