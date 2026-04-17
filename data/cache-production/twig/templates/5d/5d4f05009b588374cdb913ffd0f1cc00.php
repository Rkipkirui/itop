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

/* application/object/set/set_renderer.html.twig */
class __TwigTemplate_38acee6650b04a085c420dbf6a1611e0 extends Template
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
        yield "<span data-template-attr-title=\"friendlyname\">

    ";
        // line 4
        yield "    ";
        if (($context["obsolescence_flag"] ?? null)) {
            // line 5
            yield "    <span class=\"object-ref-icon text_decoration\">
        <span class=\"fas fa-eye-slash object-obsolete fa-1x fa-fw\"></span>
    </span>
    ";
        }
        // line 9
        yield "
    ";
        // line 11
        yield "    <span data-template-text=\"friendlyname\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["friendlyname"] ?? null), "html", null, true);
        yield "</span>

</span>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "application/object/set/set_renderer.html.twig";
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
        return array (  58 => 11,  55 => 9,  49 => 5,  46 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/object/set/set_renderer.html.twig", "C:\\laragon\\www\\itop\\templates\\application\\object\\set\\set_renderer.html.twig");
    }
}
