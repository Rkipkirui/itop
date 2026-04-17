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

/* base/components/input/set/layout.html.twig */
class __TwigTemplate_27cdf681b2c2940dada2e55e5cf356eb extends Template
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
        yield "
";
        // line 5
        yield "<select
    id=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 6), "html", null, true);
        yield "\"
    name=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 7), "html", null, true);
        yield "\"
    multiple
    style=\"display: none;\"
    ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsDisabled", [], "method", false, false, false, 10) == true)) {
            // line 11
            yield "        disabled
    ";
        }
        // line 13
        yield ">
</select>

";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasOptionsTemplate", [], "method", false, false, false, 17)) {
            // line 18
            yield "    <template id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 18), "html", null, true);
            yield "_options_template\">
        ";
            // line 19
            yield from $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOptionsTemplate", [], "method", false, false, false, 19), "base/components/input/set/layout.html.twig", 19)->unwrap()->yield($context);
            // line 20
            yield "    </template>
";
        }
        // line 22
        yield "
";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasItemsTemplate", [], "method", false, false, false, 24)) {
            // line 25
            yield "    <template id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 25), "html", null, true);
            yield "_items_template\">
        ";
            // line 26
            yield from $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetItemsTemplate", [], "method", false, false, false, 26), "base/components/input/set/layout.html.twig", 26)->unwrap()->yield($context);
            // line 27
            yield "    </template>
";
        }
        // line 29
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/input/set/layout.html.twig";
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
        return array (  98 => 29,  94 => 27,  92 => 26,  87 => 25,  85 => 24,  82 => 22,  78 => 20,  76 => 19,  71 => 18,  69 => 17,  64 => 13,  60 => 11,  58 => 10,  52 => 7,  48 => 6,  45 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/input/set/layout.html.twig", "C:\\laragon\\www\\itop\\templates\\base\\components\\input\\set\\layout.html.twig");
    }
}
