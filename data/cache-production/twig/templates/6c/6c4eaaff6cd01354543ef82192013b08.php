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

/* application/object/set/option_renderer.html.twig */
class __TwigTemplate_f60a2939ce8d3b55d6a8ac5bf507b04e extends Template
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
        yield "<div class=\"option ibo-input-select--autocomplete-item\" role=\"option\" >

    ";
        // line 4
        yield "    <span class=\"ibo-input-select--autocomplete-item-image\" data-template-add-class=\"class\" data-template-condition=\"has_image\" data-template-css-background-image=\"picture_url\" data-template-text=\"initials\"></span>

    ";
        // line 7
        yield "    <span class=\"ibo-input-select--autocomplete-item-txt\">

        ";
        // line 10
        yield "\t\t<span class=\"object-ref-icon text_decoration\" data-template-condition=\"obsolescence_flag\">
            <span class=\"fas fa-eye-slash object-obsolete fa-1x fa-fw\"></span>
        </span>

        ";
        // line 15
        yield "\t\t<span data-template-text=\"friendlyname\"></span>

        ";
        // line 18
        yield "        ";
        yield from $this->unwrap()->yieldBlock('additional_content', $context, $blocks);
        // line 20
        yield "
        ";
        // line 22
        yield "\t\t<div data-template-condition=\"has_additional_field\">
\t\t\t<i data-template-text=\"additional_field\"></i>
\t\t</div>

\t</span>


</div>";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_additional_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "application/object/set/option_renderer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  90 => 19,  83 => 18,  71 => 22,  68 => 20,  65 => 18,  61 => 15,  55 => 10,  51 => 7,  47 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/object/set/option_renderer.html.twig", "C:\\laragon\\www\\itop\\templates\\application\\object\\set\\option_renderer.html.twig");
    }
}
