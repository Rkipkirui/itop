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

/* personaltokens.html.twig */
class __TwigTemplate_5cb57bdeed568f086ce95ea161237877 extends Template
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
        if ((null != CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "token_value", [], "any", false, false, false, 4))) {
            // line 5
            yield "\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sTitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "token_name", [], "any", false, false, false, 5), "sContent" => "", "sId" => "refresh_token_alert_ok", "IsHidden" => false, "IsCollapsible" => true, "IsClosable" => false, "AddHtml" => CoreExtension::getAttribute($this->env, $this->source,             // line 6
($context["Section"] ?? null), "token_value", [], "any", false, false, false, 6)];
            $sTitle = $aParams['sTitle'] ?? '';
            $sContent = $aParams['sContent'] ?? '';
            $sId = $aParams['sId'] ?? NULL;
            $oAlert_69a9cf3e48de6423936449 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(            $sTitle            ,             $sContent            ,             $sId            );
            $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oAlert_69a9cf3e48de6423936449, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oAlert_69a9cf3e48de6423936449, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oAlert_69a9cf3e48de6423936449);
            array_push($context['UIBlockParent'], $oAlert_69a9cf3e48de6423936449);
            ob_start();
            // line 7
            yield "\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
        } else {
            // line 9
            yield "\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sTitle" => "fake title", "sContent" => "", "sId" => "refresh_token_alert_ok", "IsHidden" => true, "IsCollapsible" => true, "IsClosable" => false];
            $sTitle = $aParams['sTitle'] ?? '';
            $sContent = $aParams['sContent'] ?? '';
            $sId = $aParams['sId'] ?? NULL;
            $oAlert_69a9cf3e48e97801065649 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(            $sTitle            ,             $sContent            ,             $sId            );
            $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oAlert_69a9cf3e48e97801065649, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oAlert_69a9cf3e48e97801065649, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oAlert_69a9cf3e48e97801065649);
            array_push($context['UIBlockParent'], $oAlert_69a9cf3e48e97801065649);
            ob_start();
            // line 11
            yield "fake message
\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
        }
        // line 14
        yield "
\t";
        // line 15
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sTitle" => "", "sContent" => "", "sId" => "operation_fail_alert", "IsHidden" => true, "IsCollapsible" => true, "IsClosable" => false];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_69a9cf3e48f4a534730908 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForFailure(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_69a9cf3e48f4a534730908, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_69a9cf3e48f4a534730908, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_69a9cf3e48f4a534730908);
        array_push($context['UIBlockParent'], $oAlert_69a9cf3e48f4a534730908);
        ob_start();
        // line 16
        yield "Operation failed
\t";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 18
        yield "
<div id=\"deletion_popup\">
</div>

<div id=\"ibo-panel-ez-token\" class=\"ibo-panel ibo-content-block ibo-block  ibo-is-neutral ibo-is-opened\" data-role=\"ibo-panel\">
\t<div class=\"ibo-panel--header\" data-role=\"ibo-panel--header\">
\t\t<div class=\"ibo-panel--header-left\" data-role=\"ibo-panel--header-left\">
\t\t\t<div class=\"ibo-panel--titles\" data-role=\"ibo-panel--titles\">
\t\t\t\t<div class=\"ibo-panel--title\" data-role=\"ibo-panel--title\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        yield "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ibo-panel--header-right\" data-role=\"ibo-panel--header-right\">
\t\t\t";
        // line 30
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oToolbar_69a9cf3e49a3f776622481 = Combodo\iTop\Application\UI\Base\Component\Toolbar\ToolbarUIBlockFactory::MakeForButton(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oToolbar_69a9cf3e49a3f776622481, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oToolbar_69a9cf3e49a3f776622481, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oToolbar_69a9cf3e49a3f776622481);
        array_push($context['UIBlockParent'], $oToolbar_69a9cf3e49a3f776622481);
        ob_start();
        // line 31
        yield "
\t\t\t\t";
        // line 32
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sIconClasses" => "fas fa-plus", "CSSClasses" => ["ibo-quick-create--icon token-edit-button"], "sTooltipText" => $this->env->getFilter('dict_s')->getCallable()("UI:Links:ActionRow:AddToken"), "sTarget" => "TokenAdd", "sId" => "TokenAdd", "DataAttributes" => ["token-id" => "0"]];
        if (!isset($aParams['sIconClasses'])) {
            throw new Exception('personaltokens.html.twig: Missing parameter sIconClasses for UIButton at line 32');
        }
        $sIconClasses = $aParams['sIconClasses'];
        $sTooltipText = $aParams['sTooltipText'] ?? '';
        $sName = $aParams['sName'] ?? NULL;
        $sValue = $aParams['sValue'] ?? NULL;
        $bIsSubmit = $aParams['bIsSubmit'] ?? false;
        $sId = $aParams['sId'] ?? NULL;
        $oButton_69a9cf3e49ad5010768506 = Combodo\iTop\Application\UI\Base\Component\Button\ButtonUIBlockFactory::MakeIconAction(        $sIconClasses        ,         $sTooltipText        ,         $sName        ,         $sValue        ,         $bIsSubmit        ,         $sId        );
        $aSetters = ['Label','Tooltip','IconClass','ActionType','Color','OnClickJsCode','JsCode','IsDisabled','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oButton_69a9cf3e49ad5010768506, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oButton_69a9cf3e49ad5010768506, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oButton_69a9cf3e49ad5010768506);
        ob_start();
        // line 35
        yield "\t\t\t";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 36
        yield "\t\t</div>
\t</div>
\t<div class=\"ibo-panel--body\" data-role=\"ibo-panel--body\">
\t\t";
        // line 39
        yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "oDatatable", [], "any", false, false, false, 39));
        yield "
\t</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "personaltokens.html.twig";
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
        return array (  258 => 39,  253 => 36,  244 => 35,  212 => 32,  209 => 31,  182 => 30,  175 => 26,  165 => 18,  155 => 16,  128 => 15,  125 => 14,  114 => 11,  86 => 9,  76 => 7,  54 => 6,  47 => 5,  45 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "personaltokens.html.twig", "C:\\laragon\\www\\itop\\env-production\\authent-token\\templates\\personaltokens.html.twig");
    }
}
