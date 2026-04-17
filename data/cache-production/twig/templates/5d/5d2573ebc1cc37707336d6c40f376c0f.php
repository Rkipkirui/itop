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

/* base/layouts/activity-panel/tab-toolbar/caselog.html.twig */
class __TwigTemplate_543b39e851c742aeaf130762a0a1c8b7 extends Template
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
            'bExtraCSSClasses' => [$this, 'block_bExtraCSSClasses'],
            'bDataTabType' => [$this, 'block_bDataTabType'],
            'bExtraDataAttributes' => [$this, 'block_bExtraDataAttributes'],
            'bTabToolbarFirstRow' => [$this, 'block_bTabToolbarFirstRow'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base/layouts/activity-panel/tab-toolbar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/tab-toolbar/layout.html.twig", "base/layouts/activity-panel/tab-toolbar/caselog.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bExtraCSSClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "ibo-activity-panel--tab-toolbar-for-caselog ibo-activity-panel--tab-toolbar-for-caselog-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iRank"] ?? null), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bDataTabType(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "caselog";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bExtraDataAttributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "data-caselog-attribute-code=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sAttCode"] ?? null), "html", null, true);
        yield "\" data-caselog-attribute-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aData"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "\" data-caselog-rank=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 7), "html", null, true);
        yield "\"";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bTabToolbarFirstRow(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasCaseLogTabEntryForm", [($context["sAttCode"] ?? null)], "method", false, false, false, 10)) {
            // line 11
            yield "        <div class=\"ibo-activity-panel--tab-entry-form\" data-role=\"ibo-activity-panel--tab-entry-form\">
            ";
            // line 12
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabEntryForm", [($context["sAttCode"] ?? null)], "method", false, false, false, 12), ["bInitOpened" => CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsEntryFormOpened", [], "method", false, false, false, 12)]);
            yield "
        </div>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/tab-toolbar/caselog.html.twig";
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
        return array (  107 => 12,  104 => 11,  101 => 10,  94 => 9,  77 => 7,  66 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/tab-toolbar/caselog.html.twig", "C:\\laragon\\www\\itop\\templates\\base\\layouts\\activity-panel\\tab-toolbar\\caselog.html.twig");
    }
}
