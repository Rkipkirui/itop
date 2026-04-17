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

/* itop-portal-base/portal/templates/bricks/manage/tile-default.html.twig */
class __TwigTemplate_a1cda4b2c830a30c55c40f200b603c61 extends Template
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
            'pTileWrapper' => [$this, 'block_pTileWrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
<div class=\"col-xs-12 col-sm-";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetWidth", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
    ";
        // line 5
        yield from $this->unwrap()->yieldBlock('pTileWrapper', $context, $blocks);
        // line 21
        yield "</div>";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pTileWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 6), "generate", [CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetRouteName", [], "any", false, false, false, 6), ["sBrickId" => CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetId", [], "any", false, false, false, 6)]], "method", false, false, false, 6), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 6), CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetRouteName", [], "any", false, false, false, 6), [], "array", false, true, false, 6), "hash", [], "array", true, true, false, 6)) {
            yield "#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = (($_v1 = (($_v2 = ($context["app"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["combodo.portal.instance.routes"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetRouteName", [], "any", false, false, false, 6)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["hash"] ?? null) : null), "html", null, true);
        }
        yield "\"
        ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 7), CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetRouteName", [], "any", false, false, false, 7), [], "array", false, true, false, 7), "navigation_menu_attr", [], "array", true, true, false, 7)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v3 = (($_v4 = (($_v5 = ($context["app"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["combodo.portal.instance.routes"] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetRouteName", [], "any", false, false, false, 7)] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["navigation_menu_attr"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 8
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetModal", [], "any", false, false, false, 8)) {
            yield "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
        }
        // line 9
        yield "        class=\"tile";
        yield "\" id=\"brick-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetId", [], "any", false, false, false, 9), "html", null, true);
        yield "\" data-brick-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetId", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
        <div class=\"tile_decoration\">
            <span class=\"icon ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetDecorationClassHome", [], "any", false, false, false, 11), "html", null, true);
        yield "\"></span>
        </div>
        <div class=\"tile_body\">
            <div class=\"tile_title\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetTitleHome", [], "any", false, false, false, 14)), "html", null, true);
        yield "</div>
            ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "HasDescription", [], "any", false, false, false, 15)) {
            // line 16
            yield "                <div class=\"tile_description\">";
            yield $this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetDescription", [], "any", false, false, false, 16));
            yield "</div>
            ";
        }
        // line 18
        yield "        </div>
        </a>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "itop-portal-base/portal/templates/bricks/manage/tile-default.html.twig";
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
        return array (  120 => 18,  114 => 16,  112 => 15,  108 => 14,  102 => 11,  93 => 9,  88 => 8,  73 => 7,  64 => 6,  57 => 5,  52 => 21,  50 => 5,  46 => 4,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/manage/tile-default.html.twig", "C:\\laragon\\www\\itop\\env-production\\itop-portal-base\\portal\\templates\\bricks\\manage\\tile-default.html.twig");
    }
}
