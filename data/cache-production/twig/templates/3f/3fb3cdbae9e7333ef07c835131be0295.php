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

/* base/layouts/activity-panel/activity-entry/edits-entry.html.twig */
class __TwigTemplate_043e26e8958800a563b201564a43967b extends Template
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
            'iboActivityEntryExtraClasses' => [$this, 'block_iboActivityEntryExtraClasses'],
            'iboActivityEntryMainInformationContent' => [$this, 'block_iboActivityEntryMainInformationContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base/layouts/activity-panel/activity-entry/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/activity-entry/layout.html.twig", "base/layouts/activity-panel/activity-entry/edits-entry.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryExtraClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "ibo-edits-entry";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryMainInformationContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttributes", [], "method", false, false, false, 6)) == 1) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttributes", [], "method", false, false, false, 6))) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["descriptions"] ?? null) : null)) == 1))) {
            // line 7
            yield "        <span class=\"ibo-edits-entry--short-description\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShortDescriptionAsHtml", [], "method", false, false, false, 7);
            yield "</span>
    ";
        } else {
            // line 9
            yield "        <a href=\"#\" class=\"ibo-edits-entry--short-description\" data-role=\"ibo-edits-entry--long-description-toggler\">
            ";
            // line 11
            yield "            <span class=\"ibo-edits-entry--long-description-toggler-icon fa fa-caret-down\"></span>
            ";
            // line 12
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShortDescriptionAsHtml", [], "method", false, false, false, 12);
            yield "
        </a>
        <ul class=\"ibo-edits-entry--long-description\" data-role=\"ibo-edits-entry--long-description\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttributes", [], "method", false, false, false, 15));
            foreach ($context['_seq'] as $context["sAttCode"] => $context["aAttData"]) {
                // line 16
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["aAttData"], "descriptions", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["sAttHtmlDescription"]) {
                    // line 17
                    yield "                    <li class=\"ibo-edits-entry--attribute-description\" data-attribute-code=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sAttCode"], "html", null, true);
                    yield "\">";
                    yield $context["sAttHtmlDescription"];
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sAttHtmlDescription'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['sAttCode'], $context['aAttData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "        </ul>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/activity-entry/edits-entry.html.twig";
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
        return array (  117 => 20,  111 => 19,  100 => 17,  95 => 16,  91 => 15,  85 => 12,  82 => 11,  79 => 9,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/activity-entry/edits-entry.html.twig", "C:\\laragon\\www\\itop\\templates\\base\\layouts\\activity-panel\\activity-entry\\edits-entry.html.twig");
    }
}
