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

/* application/links/direct/block-direct-linkset-edit-table/layout.js.twig */
class __TwigTemplate_9653f909a175eba786c0b543fb3ebf39 extends Template
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksDirectWidget", [], "any", false, false, false, 4), "GetInputId", [], "method", false, false, false, 4), "html", null, true);
            yield " = \$('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksDirectWidget", [], "any", false, false, false, 4), "GetInputId", [], "method", false, false, false, 4), "html", null, true);
            yield "').directlinks({
    class_name: '";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksDirectWidget", [], "any", false, false, false, 5), "GetClass", [], "method", false, false, false, 5), "html", null, true);
            yield "',
    att_code: '";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksDirectWidget", [], "any", false, false, false, 6), "GetAttCode", [], "method", false, false, false, 6), "html", null, true);
            yield "',
    input_name: '";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sInputName", [], "any", false, false, false, 7), "html", null, true);
            yield "',
    submit_to: '";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sSubmitUrl", [], "any", false, false, false, 8), "html", null, true);
            yield "',
    oWizardHelper: ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sWizHelper", [], "any", false, false, false, 9), "html", null, true);
            yield ",
    do_search: '";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSDoSearch", [], "any", false, false, false, 10), "html", null, true);
            yield "'
});
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
        return "application/links/direct/block-direct-linkset-edit-table/layout.js.twig";
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
        return array (  78 => 3,  71 => 10,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  51 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/links/direct/block-direct-linkset-edit-table/layout.js.twig", "C:\\laragon\\www\\itop\\templates\\application\\links\\direct\\block-direct-linkset-edit-table\\layout.js.twig");
    }
}
