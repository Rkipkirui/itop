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

/* itop-portal-base/portal/templates/bricks/tile.html.twig */
class __TwigTemplate_4f21f3abef636ed2dd33622ec8d89170 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetWidth", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
\t";
        // line 5
        yield from $this->unwrap()->yieldBlock('pTileWrapper', $context, $blocks);
        // line 22
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
        yield "\t\t<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 6), "generate", [CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 6), ["sBrickId" => CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetId", [], "any", false, false, false, 6)]], "method", false, false, false, 6), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 6), CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 6), [], "array", false, true, false, 6), "hash", [], "array", true, true, false, 6)) {
            yield "#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = (($_v1 = (($_v2 = ($context["app"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["combodo.portal.instance.routes"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 6)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["hash"] ?? null) : null), "html", null, true);
        }
        yield "\"
\t\t\t";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 7), CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 7), [], "array", false, true, false, 7), "navigation_menu_attr", [], "array", true, true, false, 7)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($_v3 = (($_v4 = (($_v5 = ($context["app"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["combodo.portal.instance.routes"] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetRouteName", [], "any", false, false, false, 7)] ?? null) : null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["navigation_menu_attr"] ?? null) : null));
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
        yield "\t\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetModal", [], "any", false, false, false, 8)) {
            yield "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
        }
        // line 9
        yield "\t\t\t class=\"tile";
        yield "\" id=\"brick-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetId", [], "any", false, false, false, 9), "html", null, true);
        yield "\" data-brick-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetId", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
\t\t<div class=\"tile_decoration\">
\t\t\t<span class=\"icon ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetDecorationClassHome", [], "any", false, false, false, 11), "html", null, true);
        yield "\"></span>
\t\t\t
\t\t</div>
\t\t\t<div class=\"tile_body\">
\t\t\t\t<div class=\"tile_title\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetTitleHome", [], "any", false, false, false, 15)), "html", null, true);
        yield "</div>
\t\t\t\t";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "HasDescription", [], "any", false, false, false, 16)) {
            // line 17
            yield "\t\t\t\t\t<div class=\"tile_description\">";
            yield $this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetDescription", [], "any", false, false, false, 17));
            yield "</div>
\t\t\t\t";
        }
        // line 19
        yield "\t\t\t</div>
\t\t</a>
\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "itop-portal-base/portal/templates/bricks/tile.html.twig";
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
        return array (  121 => 19,  115 => 17,  113 => 16,  109 => 15,  102 => 11,  93 => 9,  88 => 8,  73 => 7,  64 => 6,  57 => 5,  52 => 22,  50 => 5,  46 => 4,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/tile.html.twig", "C:\\laragon\\www\\itop\\env-production\\itop-portal-base\\portal\\templates\\bricks\\tile.html.twig");
    }
}
