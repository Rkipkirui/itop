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

/* MainPage.html.twig */
class __TwigTemplate_abc617b3eec3fda79753a6e56348aeb5 extends Template
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
        // line 4
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sTitle" => $this->env->getFilter('dict_s')->getCallable()("combodo-my-account/Operation:MainPage/Title")];
        if (!isset($aParams['sTitle'])) {
            throw new Exception('MainPage.html.twig: Missing parameter sTitle for UITitle at line 4');
        }
        $sTitle = $aParams['sTitle'];
        $sId = $aParams['sId'] ?? NULL;
        $oTitle_69a9cf2ff1572243498583 = Combodo\iTop\Application\UI\Base\Component\Title\TitleUIBlockFactory::MakeForPage(        $sTitle        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oTitle_69a9cf2ff1572243498583, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oTitle_69a9cf2ff1572243498583, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oTitle_69a9cf2ff1572243498583);
        array_push($context['UIBlockParent'], $oTitle_69a9cf2ff1572243498583);
        ob_start();
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "MainPage.html.twig";
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
        return array (  45 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "MainPage.html.twig", "C:\\laragon\\www\\itop\\env-production\\combodo-my-account\\templates\\MainPage.html.twig");
    }
}
