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

/* UserInfo.html.twig */
class __TwigTemplate_6d70684db3ecb0c9435fdb0e0a7efb66 extends Template
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
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oMultiColumn_69a9cf32605b0210587804 = Combodo\iTop\Application\UI\Base\Layout\MultiColumn\MultiColumnUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oMultiColumn_69a9cf32605b0210587804, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddColumn','AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oMultiColumn_69a9cf32605b0210587804, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oMultiColumn_69a9cf32605b0210587804);
        array_push($context['UIBlockParent'], $oMultiColumn_69a9cf32605b0210587804);
        ob_start();
        // line 5
        yield "\t";
        if ((null != CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "user", [], "any", false, false, false, 5))) {
            // line 6
            yield "\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = [];
            $sId = $aParams['sId'] ?? NULL;
            $oColumn_69a9cf32607cb535043831 = Combodo\iTop\Application\UI\Base\Layout\MultiColumn\Column\ColumnUIBlockFactory::MakeStandard(            $sId            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oColumn_69a9cf32607cb535043831, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oColumn_69a9cf32607cb535043831, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oColumn_69a9cf32607cb535043831);
            array_push($context['UIBlockParent'], $oColumn_69a9cf32607cb535043831);
            ob_start();
            // line 7
            yield "\t\t";
            $context["title"] = $this->env->getFilter('dict_s')->getCallable()("MyAccount:SubTitle:user");
            // line 8
            yield "\t\t";
            $context["Infos"] = CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "user", [], "any", false, false, false, 8);
            // line 9
            yield "\t\t";
            $context["edit_link"] = CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "user_link", [], "any", false, false, false, 9);
            // line 10
            yield "\t\t";
            yield from $this->loadTemplate("section.html.twig", "UserInfo.html.twig", 10)->unwrap()->yield($context);
            // line 11
            yield "\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 12
            yield "\t";
        }
        // line 13
        yield "\t";
        if ((null != CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "contact", [], "any", false, false, false, 13))) {
            // line 14
            yield "\t\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = [];
            $sId = $aParams['sId'] ?? NULL;
            $oColumn_69a9cf3261373223692253 = Combodo\iTop\Application\UI\Base\Layout\MultiColumn\Column\ColumnUIBlockFactory::MakeStandard(            $sId            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oColumn_69a9cf3261373223692253, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oColumn_69a9cf3261373223692253, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oColumn_69a9cf3261373223692253);
            array_push($context['UIBlockParent'], $oColumn_69a9cf3261373223692253);
            ob_start();
            // line 15
            yield "\t\t\t";
            $context["title"] = $this->env->getFilter('dict_s')->getCallable()("MyAccount:SubTitle:contact");
            // line 16
            yield "\t\t\t";
            $context["Infos"] = CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "contact", [], "any", false, false, false, 16);
            // line 17
            yield "\t\t\t";
            $context["edit_link"] = CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "contact_link", [], "any", false, false, false, 17);
            // line 18
            yield "\t\t\t";
            yield from $this->loadTemplate("section.html.twig", "UserInfo.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "\t\t";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 20
            yield "\t";
        }
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
        return "UserInfo.html.twig";
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
        return array (  173 => 20,  164 => 19,  161 => 18,  158 => 17,  155 => 16,  152 => 15,  126 => 14,  123 => 13,  120 => 12,  111 => 11,  108 => 10,  105 => 9,  102 => 8,  99 => 7,  73 => 6,  70 => 5,  45 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "UserInfo.html.twig", "C:\\laragon\\www\\itop\\env-production\\combodo-my-account-user-info\\templates\\UserInfo.html.twig");
    }
}
