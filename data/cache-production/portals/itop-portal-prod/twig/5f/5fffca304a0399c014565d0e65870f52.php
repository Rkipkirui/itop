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

/* itop-portal-base/portal/templates/bricks/filter/tile.html.twig */
class __TwigTemplate_836f01797a5f684cea94ede962c0c5e4 extends Template
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
";
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetTargetBrickClass", [], "any", false, false, false, 4) == "Combodo\\iTop\\Portal\\Brick\\BrowseBrick")) {
            // line 5
            yield "    ";
            $context["sTargetBrickUrl"] = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = ($context["app"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["url_generator"] ?? null) : null), "generate", ["p_browse_brick_mode", ["sBrickId" => CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetTargetBrickId", [], "any", false, false, false, 5), "sBrowseMode" => CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetTargetBrickTab", [], "any", false, false, false, 5)]], "method", false, false, false, 5);
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 6
($context["brick"] ?? null), "GetTargetBrickClass", [], "any", false, false, false, 6) == "Combodo\\iTop\\Portal\\Brick\\ManageBrick")) {
            // line 7
            yield "    ";
            $context["sTargetBrickUrl"] = CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["app"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["url_generator"] ?? null) : null), "generate", ["p_manage_brick", ["sBrickId" => CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetTargetBrickId", [], "any", false, false, false, 7), "sGroupingTab" => CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetTargetBrickTab", [], "any", false, false, false, 7)]], "method", false, false, false, 7);
        }
        // line 9
        yield "
<div class=\"col-xs-12 col-sm-";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetWidth", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
\t";
        // line 11
        yield from $this->unwrap()->yieldBlock('pTileWrapper', $context, $blocks);
        // line 36
        yield "</div>";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pTileWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "\t\t<div class=\"tile tile-filter-brick\" id=\"brick-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetId", [], "any", false, false, false, 12), "html", null, true);
        yield "\" data-brick-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetId", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
\t\t\t<a href=\"#\" onclick=\"return false;\" class=\"tile_decoration\">
\t\t\t\t<span class=\"icon ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetDecorationClassHome", [], "any", false, false, false, 14), "html", null, true);
        yield "\"></span>
\t\t\t</a>
\t\t\t<div class=\"tile_body\">
\t\t\t\t<div class=\"tile_title\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetTitleHome", [], "any", false, false, false, 17)), "html", null, true);
        yield "</div>
\t\t\t\t";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "HasDescription", [], "any", false, false, false, 18)) {
            // line 19
            yield "\t\t\t\t\t<div class=\"tile_description\">";
            yield $this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetDescription", [], "any", false, false, false, 19));
            yield "</div>
\t\t\t\t";
        }
        // line 21
        yield "\t\t\t\t<div class=\"tile_filterbox\">
\t\t\t\t\t<form method=\"post\" action=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sTargetBrickUrl"] ?? null), "html", null, true);
        yield "\" class=\"form-inline\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"sSearchValue\" placeholder=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetSearchPlaceholderValue", [], "any", false, false, false, 24)), "html", null, true);
        yield "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"sDataLoading\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("\\Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_LAZY"), "html", null, true);
        yield "\" />
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<span class=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetSearchSubmitClass", [], "any", false, false, false, 28), "html", null, true);
        yield "\"></span>
\t\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["brick"] ?? null), "GetSearchSubmitLabel", [], "any", false, false, false, 29)), "html", null, true);
        yield "
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "itop-portal-base/portal/templates/bricks/filter/tile.html.twig";
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
        return array (  126 => 29,  122 => 28,  117 => 26,  112 => 24,  107 => 22,  104 => 21,  98 => 19,  96 => 18,  92 => 17,  86 => 14,  78 => 12,  71 => 11,  66 => 36,  64 => 11,  60 => 10,  57 => 9,  53 => 7,  51 => 6,  48 => 5,  46 => 4,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/filter/tile.html.twig", "C:\\laragon\\www\\itop\\env-production\\itop-portal-base\\portal\\templates\\bricks\\filter\\tile.html.twig");
    }
}
