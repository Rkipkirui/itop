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

/* application/object/set/item_renderer.html.twig */
class __TwigTemplate_b75de453121cfa2488ef8a2f9f7442a1 extends Template
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
            'additional_content' => [$this, 'block_additional_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"friendlyname\">

    ";
        // line 4
        yield "    <span class=\"object-ref-icon text_decoration\" data-template-condition=\"obsolescence_flag\">
        <span class=\"fas fa-eye-slash object-obsolete fa-1x fa-fw\"></span>
    </span>

    ";
        // line 9
        yield "    <span data-template-text=\"friendlyname\"></span>

    ";
        // line 12
        yield "    ";
        yield from $this->unwrap()->yieldBlock('additional_content', $context, $blocks);
        // line 14
        yield "
</div>";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_additional_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "application/object/set/item_renderer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  73 => 13,  66 => 12,  60 => 14,  57 => 12,  53 => 9,  47 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/object/set/item_renderer.html.twig", "C:\\laragon\\www\\itop\\templates\\application\\object\\set\\item_renderer.html.twig");
    }
}
