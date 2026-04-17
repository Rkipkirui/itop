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

/* base/components/input/inputwithlabel.html.twig */
class __TwigTemplate_f5d7f8cb31b720c85c02dc445ba34a85 extends Template
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
            'iboInputLabel' => [$this, 'block_iboInputLabel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('iboInputLabel', $context, $blocks);
        // line 10
        yield "
";
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboInputLabel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method", false, false, false, 2)) {
            // line 3
            yield "        <label for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasDescription", [], "method", false, false, false, 3)) {
                yield " class=\"ibo-input-with-label--label ibo-has-description\" data-tooltip-content=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 3);
                yield "\" data-tooltip-max-width=\"600px\" data-tooltip-html-enabled=\"true\"";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 3);
            yield "</label>
        ";
            // line 4
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetInput", [], "method", false, false, false, 4));
            yield "
    ";
        } else {
            // line 6
            yield "        ";
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetInput", [], "method", false, false, false, 6));
            yield "
        <label for=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasDescription", [], "method", false, false, false, 7)) {
                yield " class=\"ibo-input-with-label--label ibo-has-description\" data-tooltip-content=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 7);
                yield "\" data-tooltip-max-width=\"600px\" data-tooltip-html-enabled=\"true\"";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 7);
            yield "</label>
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/input/inputwithlabel.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  84 => 7,  79 => 6,  74 => 4,  61 => 3,  58 => 2,  51 => 1,  45 => 10,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/input/inputwithlabel.html.twig", "C:\\laragon\\www\\itop\\templates\\base\\components\\input\\inputwithlabel.html.twig");
    }
}
