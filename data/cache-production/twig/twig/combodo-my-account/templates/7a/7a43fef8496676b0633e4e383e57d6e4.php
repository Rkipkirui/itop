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

/* section.html.twig */
class __TwigTemplate_e29c11351a0f056162ef2beed6cf23a5 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["Infos"] ?? null), "picture", [], "any", false, false, false, 4)) {
            // line 5
            yield "<div id=\"ibo-panel-ez-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["index"] ?? null), "html", null, true);
            yield "\" class=\"ibo-panel ibo-content-block ibo-block  ibo-has-icon ibo-has-medallion-icon  ibo-is-neutral
ibo-is-opened\" data-role=\"ibo-panel\">
\t<div class=\"ibo-panel--header\" data-role=\"ibo-panel--header\">
\t\t<div class=\"ibo-panel--header-left\" data-role=\"ibo-panel--header-left\">
\t\t\t<div class=\"ibo-panel--icon\" data-role=\"ibo-panel--icon\">
\t\t\t\t<div class=\"ibo-panel--icon-background ibo-panel--icon-background--must-cover\" data-role=\"ibo-panel--icon-background\"
\t\t\t\t     style=\"background-image: url('";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["Infos"] ?? null), "picture", [], "any", false, false, false, 11), "html", null, true);
            yield "');\"></div>
\t\t\t</div>
";
        } else {
            // line 14
            yield "<div id=\"ibo-panel-ez-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["index"] ?? null), "html", null, true);
            yield "\" class=\"ibo-panel ibo-content-block ibo-block  ibo-is-neutral ibo-is-opened\" data-role=\"ibo-panel\">
\t<div class=\"ibo-panel--header\" data-role=\"ibo-panel--header\">
\t\t<div class=\"ibo-panel--header-left\" data-role=\"ibo-panel--header-left\">
";
        }
        // line 18
        yield "
\t\t\t<div class=\"ibo-panel--titles\" data-role=\"ibo-panel--titles\">
\t\t\t\t<div class=\"ibo-panel--title\" data-role=\"ibo-panel--title\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 23
        if (($context["edit_link"] ?? null)) {
            // line 24
            yield "\t\t<div class=\"ibo-panel--header-right\" data-role=\"ibo-panel--header-right\">
\t\t\t";
            // line 25
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = [];
            $sId = $aParams['sId'] ?? NULL;
            $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
            $oToolbar_69a9cf3274ca3377509713 = Combodo\iTop\Application\UI\Base\Component\Toolbar\ToolbarUIBlockFactory::MakeForButton(            $sId            ,             $aContainerClasses            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oToolbar_69a9cf3274ca3377509713, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oToolbar_69a9cf3274ca3377509713, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oToolbar_69a9cf3274ca3377509713);
            array_push($context['UIBlockParent'], $oToolbar_69a9cf3274ca3377509713);
            ob_start();
            // line 26
            yield "\t\t\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sIconClasses" => "fas fa-pen", "sTooltipText" => $this->env->getFilter('dict_s')->getCallable()("UI:Links:ActionRow:Edit"), "sURL" => ($context["edit_link"] ?? null), "sTarget" => "_blank", "sId" => "value"];
            if (!isset($aParams['sIconClasses'])) {
                throw new Exception('section.html.twig: Missing parameter sIconClasses for UIButton at line 26');
            }
            $sIconClasses = $aParams['sIconClasses'];
            if (!isset($aParams['sTooltipText'])) {
                throw new Exception('section.html.twig: Missing parameter sTooltipText for UIButton at line 26');
            }
            $sTooltipText = $aParams['sTooltipText'];
            $sURL = $aParams['sURL'] ?? '';
            $sTarget = $aParams['sTarget'] ?? NULL;
            $sId = $aParams['sId'] ?? NULL;
            $oButton_69a9cf3274d49757177920 = Combodo\iTop\Application\UI\Base\Component\Button\ButtonUIBlockFactory::MakeIconLink(            $sIconClasses            ,             $sTooltipText            ,             $sURL            ,             $sTarget            ,             $sId            );
            $aSetters = ['Label','Tooltip','IconClass','ActionType','Color','OnClickJsCode','JsCode','IsDisabled','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oButton_69a9cf3274d49757177920, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oButton_69a9cf3274d49757177920, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oButton_69a9cf3274d49757177920);
            ob_start();
            // line 28
            yield "\t\t\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 29
            yield "\t\t</div>
\t\t";
        }
        // line 31
        yield "\t</div>
\t<div class=\"ibo-panel--body\" data-role=\"ibo-panel--body\">
\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["Infos"] ?? null));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 34
            yield "\t\t\t";
            if (("picture" != $context["label"])) {
                // line 35
                yield "\t\t\t";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                $aParams = ["sLabel" => ($context["label"] ?? null), "sValueHtml" => ($context["value"] ?? null)];
                if (!isset($aParams['sLabel'])) {
                    throw new Exception('section.html.twig: Missing parameter sLabel for UIField at line 35');
                }
                $sLabel = $aParams['sLabel'];
                $sValueHtml = $aParams['sValueHtml'] ?? '';
                $sDescription = $aParams['sDescription'] ?? '';
                $oField_69a9cf3274f23689314368 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeSmall(                $sLabel                ,                 $sValueHtml                ,                 $sDescription                );
                $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
                foreach ($aSetters as $sSetter) {
                    if (isset($aParams["{$sSetter}"])) {
                        $sCmd = "Set{$sSetter}";
                        call_user_func([$oField_69a9cf3274f23689314368, $sCmd], $aParams["{$sSetter}"]);
                    }
                }
                $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
                foreach ($aAdders as $sAdder) {
                    if (isset($aParams["{$sAdder}"])) {
                        call_user_func([$oField_69a9cf3274f23689314368, $sAdder], $aParams["{$sAdder}"]);
                    }
                }
                end($context['UIBlockParent'])->AddSubBlock($oField_69a9cf3274f23689314368);
                array_push($context['UIBlockParent'], $oField_69a9cf3274f23689314368);
                ob_start();
                // line 36
                yield "\t\t\t";
                $sHtml = trim(ob_get_contents());
                ob_end_clean();
                if (strlen($sHtml) > 0) {
                    end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
                }
                array_pop($context['UIBlockParent']);
                ob_start();
                // line 37
                yield "\t\t\t";
            }
            // line 38
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "\t</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "section.html.twig";
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
        return array (  221 => 39,  215 => 38,  212 => 37,  203 => 36,  172 => 35,  169 => 34,  165 => 33,  161 => 31,  157 => 29,  148 => 28,  113 => 26,  86 => 25,  83 => 24,  81 => 23,  75 => 20,  71 => 18,  63 => 14,  57 => 11,  47 => 5,  45 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "section.html.twig", "C:\\laragon\\www\\itop\\env-production\\combodo-my-account-user-info\\templates\\section.html.twig");
    }
}
