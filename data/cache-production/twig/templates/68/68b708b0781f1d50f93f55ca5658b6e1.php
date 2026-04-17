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

/* base/layouts/activity-panel/caselog-entry-form/layout.html.twig */
class __TwigTemplate_51850b44f9b044163e61827d9390ed37 extends Template
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
        // line 1
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "<form id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 2), "html", null, true);
            yield "\"
      class=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsSubmitAutonomous", [], "method", false, false, false, 3) && (($context["bInitOpened"] ?? null) == false))) {
                yield "ibo-is-closed";
            }
            yield "\"
      data-role=\"ibo-caselog-entry-form\"
      data-object-class=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectClass", [], "method", false, false, false, 5), "html", null, true);
            yield "\"
      data-object-id=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectId", [], "method", false, false, false, 6), "html", null, true);
            yield "\"
      data-attribute-code=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttCode", [], "method", false, false, false, 7), "html", null, true);
            yield "\"
      data-attribute-label=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttLabel", [], "method", false, false, false, 8), "html", null, true);
            yield "\"
      data-attribute-type=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttType", [], "method", false, false, false, 9), "html", null, true);
            yield "\"
      data-input-type=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("cmdbAbstractObject::ENUM_INPUT_TYPE_HTML_EDITOR"), "html", null, true);
            yield "\"
      data-input-id=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTextInput", [], "method", false, false, false, 11), "GetId", [], "method", false, false, false, 11), "html", null, true);
            yield "\"
      data-submit-mode=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubmitMode", [], "method", false, false, false, 12), "html", null, true);
            yield "\"
      method=\"post\">
    <div class=\"ibo-caselog-entry-form--actions\">
        <div class=\"ibo-caselog-entry-form--action-buttons--extra-actions\"
             data-role=\"ibo-caselog-entry-form--action-buttons--extra-actions\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetExtraActionButtons", [], "method", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["TextInputActionButton"]) {
                // line 18
                yield "                ";
                yield $this->env->getFunction('render_block')->getCallable()($context["TextInputActionButton"], ["aPage" => ($context["aPage"] ?? null)]);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['TextInputActionButton'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "        </div>
        <div class=\"ibo-caselog-entry-form--action-buttons--main-actions\" data-role=\"ibo-caselog-entry-form--action-buttons--main-actions\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMainActionButtons", [], "method", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["FormActionButton"]) {
                // line 23
                yield "                ";
                yield $this->env->getFunction('render_block')->getCallable()($context["FormActionButton"], ["aPage" => ($context["aPage"] ?? null)]);
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['FormActionButton'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "        </div>
    </div>
    <div class=\"ibo-caselog-entry-form--text-input\" data-role=\"ibo-caselog-entry-form--text-input\">
        ";
            // line 28
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTextInput", [], "method", false, false, false, 28), ["aPage" => ($context["aPage"] ?? null)]);
            yield "
    </div>
    <div class=\"ibo-caselog-entry-form--extra-inputs\" data-role=\"ibo-caselog-entry-form--extra-inputs\">
    </div>
    <div class=\"ibo-caselog-entry-form--lock-indicator ibo-is-hidden\" data-role=\"ibo-caselog-entry-form--lock-indicator\">
        <span class=\"ibo-caselog-entry-form--lock-icon\" data-role=\"ibo-caselog-entry-form--lock-icon\">
            <span class=\"fas fa-lock\"></span>
        </span>
        <span class=\"ibo-caselog-entry-form--lock-message\" data-role=\"ibo-caselog-entry-form--lock-message\"></span>
    </div>
</form>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/caselog-entry-form/layout.html.twig";
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
        return array (  147 => 1,  131 => 28,  126 => 25,  117 => 23,  113 => 22,  109 => 20,  100 => 18,  96 => 17,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/caselog-entry-form/layout.html.twig", "C:\\laragon\\www\\itop\\templates\\base\\layouts\\activity-panel\\caselog-entry-form\\layout.html.twig");
    }
}
