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

/* base/components/input/select/select.html.twig */
class __TwigTemplate_cb6c6296f7c335397edfb54df00479fd extends Template
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
            'iboInput' => [$this, 'block_iboInput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('iboInput', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboInput(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasLabel", [], "method", false, false, false, 4) && CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method", false, false, false, 4))) {
            // line 5
            yield "        ";
            yield from $this->loadTemplate("base/components/input/inputlabel.html.twig", "base/components/input/select/select.html.twig", 5)->unwrap()->yield($context);
            // line 6
            yield "    ";
        }
        // line 7
        yield "    <select id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 7), "html", null, true);
        yield "\"
            ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubmitOnChange", [], "method", false, false, false, 8)) {
            yield " onChange=\"this.form.submit();\" ";
        }
        // line 9
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMultiple", [], "method", false, false, false, 9)) {
            yield " multiple ";
        }
        // line 10
        yield "            class=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 10)) {
            yield "ibo-is-hidden";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 10)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 10), "html", null, true);
        }
        yield "\"
            ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 11)) {
            // line 12
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 13
                yield "                    data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sName"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sValue"], "html", null, true);
                yield "\"
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['sName'], $context['sValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "            ";
        }
        // line 16
        yield "    >
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 18
            yield "            ";
            yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "    </select>
    ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasLabel", [], "method", false, false, false, 21) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method", false, false, false, 21))) {
            // line 22
            yield "        ";
            yield from $this->loadTemplate("base/components/input/inputlabel.html.twig", "base/components/input/select/select.html.twig", 22)->unwrap()->yield($context);
            // line 23
            yield "    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/input/select/select.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  135 => 23,  132 => 22,  130 => 21,  127 => 20,  118 => 18,  114 => 17,  111 => 16,  108 => 15,  97 => 13,  92 => 12,  90 => 11,  79 => 10,  74 => 9,  70 => 8,  63 => 7,  60 => 6,  57 => 5,  54 => 4,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/input/select/select.html.twig", "C:\\laragon\\www\\itop\\templates\\base\\components\\input\\select\\select.html.twig");
    }
}
