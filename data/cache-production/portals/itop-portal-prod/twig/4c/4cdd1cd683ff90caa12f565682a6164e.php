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

/* itop-portal-base/portal/templates/layout.html.twig */
class __TwigTemplate_4935cc5be05527ee193c1442fe838854 extends Template
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
            'pPageExtraMetas' => [$this, 'block_pPageExtraMetas'],
            'pPageTitle' => [$this, 'block_pPageTitle'],
            'pPageStylesheets' => [$this, 'block_pPageStylesheets'],
            'pStyleinline' => [$this, 'block_pStyleinline'],
            'pPageScripts' => [$this, 'block_pPageScripts'],
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pPageBodyWrapper' => [$this, 'block_pPageBodyWrapper'],
            'pEnvBannerWrapper' => [$this, 'block_pEnvBannerWrapper'],
            'pNavigationWrapper' => [$this, 'block_pNavigationWrapper'],
            'pNavigationTopMenuWrapper' => [$this, 'block_pNavigationTopMenuWrapper'],
            'pNavigationTopMenuLogo' => [$this, 'block_pNavigationTopMenuLogo'],
            'pNavigationTopBricks' => [$this, 'block_pNavigationTopBricks'],
            'pPageUIExtensionNavigationMenuTopbar' => [$this, 'block_pPageUIExtensionNavigationMenuTopbar'],
            'pNavigationSideMenuWrapper' => [$this, 'block_pNavigationSideMenuWrapper'],
            'pNavigationSideMenu' => [$this, 'block_pNavigationSideMenu'],
            'pPageUIExtensionNavigationMenuSidebar' => [$this, 'block_pPageUIExtensionNavigationMenuSidebar'],
            'pNavigationSideMenuLogo' => [$this, 'block_pNavigationSideMenuLogo'],
            'pMainWrapper' => [$this, 'block_pMainWrapper'],
            'pMainHeader' => [$this, 'block_pMainHeader'],
            'pMainContent' => [$this, 'block_pMainContent'],
            'pPageUIExtensionMainContent' => [$this, 'block_pPageUIExtensionMainContent'],
            'pPageFooter' => [$this, 'block_pPageFooter'],
            'pModalForAllWrapper' => [$this, 'block_pModalForAllWrapper'],
            'pModalForAlert' => [$this, 'block_pModalForAlert'],
            'pPageOverlay' => [$this, 'block_pPageOverlay'],
            'pPageUIExtensionBody' => [$this, 'block_pPageUIExtensionBody'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
            'pPageLiveScriptHelpers' => [$this, 'block_pPageLiveScriptHelpers'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
            'pPageExtensionsScripts' => [$this, 'block_pPageExtensionsScripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
";
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.current_user", [], "array", true, true, false, 4) &&  !(null === (($_v0 = ($context["app"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["combodo.current_user"] ?? null) : null)))) {
            // line 5
            yield "\t";
            $context["bUserConnected"] = true;
            // line 6
            yield "    ";
            $context["bUserCanLogOff"] = CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["app"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["combodo.current_user"] ?? null) : null), "CanLogOff", [], "method", false, false, false, 6);
            // line 7
            yield "\t";
            $context["sUserFullname"] = ((CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["app"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["combodo.current_user"] ?? null) : null), "Get", ["first_name"], "method", false, false, false, 7) . " ") . CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["app"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["combodo.current_user"] ?? null) : null), "Get", ["last_name"], "method", false, false, false, 7));
            // line 8
            yield "\t";
            $context["sUserEmail"] = CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["app"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["combodo.current_user"] ?? null) : null), "Get", ["email"], "method", false, false, false, 8);
            // line 9
            yield "\t";
            $context["sUserPhotoUrl"] = (($_v5 = ($context["app"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["combodo.current_contact.photo_url"] ?? null) : null);
        } else {
            // line 11
            yield "\t";
            $context["bUserConnected"] = false;
            // line 12
            yield "    ";
            $context["bUserCanLogOff"] = false;
            // line 13
            yield "\t";
            $context["sUserFullname"] = "";
            // line 14
            yield "\t";
            $context["sUserEmail"] = "";
            // line 15
            yield "\t";
            $context["sUserPhotoUrl"] = ((($_v6 = ($context["app"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["combodo.portal.base.absolute_url"] ?? null) : null) . "img/user-profile-default-256px.png");
        }
        // line 17
        yield "
<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t";
        // line 25
        yield "\t";
        yield from $this->unwrap()->yieldBlock('pPageExtraMetas', $context, $blocks);
        // line 27
        yield "\t<title>";
        yield from $this->unwrap()->yieldBlock('pPageTitle', $context, $blocks);
        yield "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('add_itop_version')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["app"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 28), "favicon", [], "any", false, false, false, 28)), "html", null, true);
        yield "\"/>

\t";
        // line 30
        yield from $this->unwrap()->yieldBlock('pPageStylesheets', $context, $blocks);
        // line 77
        yield "
\t";
        // line 78
        yield from $this->unwrap()->yieldBlock('pStyleinline', $context, $blocks);
        // line 86
        yield "
\t";
        // line 87
        yield from $this->unwrap()->yieldBlock('pPageScripts', $context, $blocks);
        // line 164
        yield "</head>
<body class=\"";
        // line 165
        yield from $this->unwrap()->yieldBlock('pPageBodyClass', $context, $blocks);
        yield "\" data-gui-type=\"portal\">
\t";
        // line 166
        yield from $this->unwrap()->yieldBlock('pPageBodyWrapper', $context, $blocks);
        // line 409
        yield "\t
\t";
        // line 410
        yield from $this->unwrap()->yieldBlock('pPageLiveScripts', $context, $blocks);
        // line 555
        yield "
\t";
        // line 556
        yield from $this->unwrap()->yieldBlock('pPageExtensionsScripts', $context, $blocks);
        // line 564
        yield "</body>
</html>
";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageExtraMetas(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "\t";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        if ((array_key_exists("sPageTitle", $context) &&  !(null === ($context["sPageTitle"] ?? null)))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sPageTitle"] ?? null), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("ITOP_APPLICATION_SHORT"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("Page:DefaultTitle", Twig\Extension\CoreExtension::constant("ITOP_APPLICATION_SHORT")), "html", null, true);
        }
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageStylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "        ";
        // line 32
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v8 = ($context["app"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/bootstrap/css/bootstrap.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 34
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v9 = ($context["app"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 36
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v10 = ($context["app"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/dataTables.bootstrap.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v11 = ($context["app"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/fixedHeader.bootstrap.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v12 = ($context["app"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/responsive.bootstrap.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v13 = ($context["app"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/scroller.bootstrap.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v14 = ($context["app"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/select.bootstrap.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v15 = ($context["app"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/css/select.dataTables.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 43
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v16 = ($context["app"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/font-open-sans/font-open-sans.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 45
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v17 = ($context["app"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/font-combodo/font-combodo.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 47
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v18 = ($context["app"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/font-awesome/css/all.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 49
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v19 = ($context["app"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/typeahead/css/typeaheadjs.bootstrap.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v20 = ($context["app"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("css/selectize.default.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v21 = ($context["app"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/magnific-popup/dist/magnific-popup.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v22 = ($context["app"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/c3/c3.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t";
        // line 54
        yield "\t\t<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v23 = ($context["app"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v24 = ($context["app"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 54), "themes", [], "any", false, false, false, 54), "bootstrap", [], "any", false, false, false, 54))), "html", null, true);
        yield "\" rel=\"stylesheet\" id=\"css_bootstrap_theme\">
\t\t";
        // line 56
        yield "\t\t<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v25 = ($context["app"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v26 = ($context["app"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 56), "themes", [], "any", false, false, false, 56), "portal", [], "any", false, false, false, 56))), "html", null, true);
        yield "\" rel=\"stylesheet\" id=\"css_portal\">
\t\t";
        // line 58
        yield "\t\t<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v27 = ($context["app"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/tippy.js/dist/tippy.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v28 = ($context["app"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/tippy.js/animations/shift-away-subtle.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t";
        // line 61
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 61), "css_files", [], "any", true, true, false, 61)) {
            // line 62
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (($_v29 = ($context["app"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["ui_extensions_helper"] ?? null) : null), "css_files", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
                // line 63
                yield "\t\t\t\t<link href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('add_itop_version')->getCallable()($context["css_file"]), "html", null, true);
                yield "\" rel=\"stylesheet\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['css_file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "        ";
        }
        // line 66
        yield "\t\t";
        // line 67
        yield "\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true, false, 67), "properties", [], "any", false, true, false, 67), "themes", [], "any", false, true, false, 67), "custom", [], "any", true, true, false, 67)) {
            // line 68
            yield "\t\t\t<link href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v30 = ($context["app"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v31 = ($context["app"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 68), "themes", [], "any", false, false, false, 68), "custom", [], "any", false, false, false, 68))), "html", null, true);
            yield "\" rel=\"stylesheet\">
\t\t";
        }
        // line 70
        yield "\t\t";
        // line 71
        yield "\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true, false, 71), "properties", [], "any", false, true, false, 71), "themes", [], "any", false, true, false, 71), "others", [], "any", true, true, false, 71)) {
            // line 72
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v32 = ($context["app"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 72), "themes", [], "any", false, false, false, 72), "others", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 73
                yield "\t\t\t\t<link href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v33 = ($context["app"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()($context["theme"])), "html", null, true);
                yield "\" rel=\"stylesheet\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "\t\t";
        }
        // line 76
        yield "\t";
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pStyleinline(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "        ";
        // line 80
        yield "        ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (($_v34 = ($context["app"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["ui_extensions_helper"] ?? null) : null), "css_inline", [], "any", false, false, false, 80))) {
            // line 81
            yield "            <style>
                ";
            // line 82
            yield CoreExtension::getAttribute($this->env, $this->source, (($_v35 = ($context["app"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["ui_extensions_helper"] ?? null) : null), "css_inline", [], "any", false, false, false, 82);
            yield "
            </style>
        ";
        }
        // line 85
        yield "\t";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "\t\t<script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v36 = ($context["app"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/jquery/dist/jquery.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v37 = ($context["app"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/ajax_hook.js")), "html", null, true);
        yield "\"></script>
\t\t";
        // line 90
        if ($this->env->getFunction('is_development_environment')->getCallable()()) {
            // line 91
            yield "\t\t\t\t<script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v38 = ($context["app"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/jquery-migrate/dist/jquery-migrate.js")), "html", null, true);
            yield "\"></script>
\t\t";
        } else {
            // line 93
            yield "\t\t\t\t<script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v39 = ($context["app"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/jquery-migrate/dist/jquery-migrate.min.js")), "html", null, true);
            yield "\"></script>
        ";
        }
        // line 95
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v40 = ($context["app"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v41 = ($context["app"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/magnific-popup/dist/jquery.magnific-popup.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v42 = ($context["app"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/blueimp-file-upload/js/jquery.iframe-transport.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v43 = ($context["app"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/blueimp-file-upload/js/jquery.fileupload.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v44 = ($context["app"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/utils.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v45 = ($context["app"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/toolbox.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v46 = ($context["app"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/d3/d3.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v47 = ($context["app"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/c3/c3.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v48 = ($context["app"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/bootstrap/js/bootstrap.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v49 = ($context["app"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/bootstrap-patches.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v50 = ($context["app"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/bootstrap-portal-modal.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v51 = ($context["app"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/latinise/latinise.min.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 108
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v52 = ($context["app"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/@popperjs/core/dist/umd/popper.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v53 = ($context["app"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/tippy.js/dist/tippy-bundle.umd.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 111
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v54 = ($context["app"] ?? null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/jquery-visible/js/jquery.visible.min.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 113
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v55 = ($context["app"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/jquery-base64/js/jquery.base64.min.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 115
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v56 = ($context["app"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/moment/min/moment-with-locales.min.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 117
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v57 = ($context["app"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net/js/jquery.dataTables.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v58 = ($context["app"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/js/dataTables.bootstrap.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v59 = ($context["app"] ?? null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v60 = ($context["app"] ?? null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net-responsive/js/dataTables.responsive.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v61 = ($context["app"] ?? null)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net-scroller/js/dataTables.scroller.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v62 = ($context["app"] ?? null)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/datatables.net-select/js/dataTables.select.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v63 = ($context["app"] ?? null)) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/datatables/js/datetime-moment.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v64 = ($context["app"] ?? null)) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/dataTables.accentNeutraliseForFilter.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 126
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v65 = ($context["app"] ?? null)) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/export.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 128
        yield "        ";
        yield $this->extensions['Combodo\iTop\Portal\Twig\CKEditorExtension']->injectCKEditorResources();
        yield "
        ";
        // line 130
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v66 = ($context["app"] ?? null)) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/highlight/highlight.min.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 132
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v67 = ($context["app"] ?? null)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 134
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v68 = ($context["app"] ?? null)) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/typeahead/js/typeahead.bundle.min.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v69 = ($context["app"] ?? null)) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("lib/handlebars/js/handlebars.min-768ddbd.js")), "html", null, true);
        yield "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v70 = ($context["app"] ?? null)) && is_array($_v70) || $_v70 instanceof ArrayAccess ? ($_v70["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/leave_handler.js")), "html", null, true);
        yield "\"></script>

        ";
        // line 140
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v71 = ($context["app"] ?? null)) && is_array($_v71) || $_v71 instanceof ArrayAccess ? ($_v71["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/selectize.js")), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v72 = ($context["app"] ?? null)) && is_array($_v72) || $_v72 instanceof ArrayAccess ? ($_v72["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/jquery.itop-set-widget.js")), "html", null, true);
        yield "\"></script>
        ";
        // line 143
        yield "        <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v73 = ($context["app"] ?? null)) && is_array($_v73) || $_v73 instanceof ArrayAccess ? ($_v73["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/form_handler.js")), "html", null, true);
        yield "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v74 = ($context["app"] ?? null)) && is_array($_v74) || $_v74 instanceof ArrayAccess ? ($_v74["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/form_field.js")), "html", null, true);
        yield "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v75 = ($context["app"] ?? null)) && is_array($_v75) || $_v75 instanceof ArrayAccess ? ($_v75["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/subform_field.js")), "html", null, true);
        yield "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v76 = ($context["app"] ?? null)) && is_array($_v76) || $_v76 instanceof ArrayAccess ? ($_v76["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/field_set.js")), "html", null, true);
        yield "\"></script>
\t\t";
        // line 148
        yield "\t\t<script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v77 = ($context["app"] ?? null)) && is_array($_v77) || $_v77 instanceof ArrayAccess ? ($_v77["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal_form_handler.js")), "html", null, true);
        yield "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v78 = ($context["app"] ?? null)) && is_array($_v78) || $_v78 instanceof ArrayAccess ? ($_v78["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal_form_field.js")), "html", null, true);
        yield "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v79 = ($context["app"] ?? null)) && is_array($_v79) || $_v79 instanceof ArrayAccess ? ($_v79["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal_form_field_html.js")), "html", null, true);
        yield "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v80 = ($context["app"] ?? null)) && is_array($_v80) || $_v80 instanceof ArrayAccess ? ($_v80["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal_form_field_set.js")), "html", null, true);
        yield "\"></script>
\t\t";
        // line 153
        yield "\t\t<script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v81 = ($context["app"] ?? null)) && is_array($_v81) || $_v81 instanceof ArrayAccess ? ($_v81["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("node_modules/clipboard/dist/clipboard.min.js")), "html", null, true);
        yield "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v82 = ($context["app"] ?? null)) && is_array($_v82) || $_v82 instanceof ArrayAccess ? ($_v82["combodo.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/clipboardwidget.js")), "html", null, true);
        yield "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($_v83 = ($context["app"] ?? null)) && is_array($_v83) || $_v83 instanceof ArrayAccess ? ($_v83["combodo.portal.base.absolute_url"] ?? null) : null) . $this->env->getFilter('add_itop_version')->getCallable()("js/portal-clipboard.js")), "html", null, true);
        yield "\"></script>

\t\t";
        // line 158
        yield "\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 158), "js_files", [], "any", true, true, false, 158)) {
            // line 159
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (($_v84 = ($context["app"] ?? null)) && is_array($_v84) || $_v84 instanceof ArrayAccess ? ($_v84["ui_extensions_helper"] ?? null) : null), "js_files", [], "any", false, false, false, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
                // line 160
                yield "\t\t\t\t<script type=\"text/javascript\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('add_itop_version')->getCallable()($context["js_file"]), "html", null, true);
                yield "\"></script>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "        ";
        }
        // line 163
        yield "\t";
        yield from [];
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageBodyClass(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageBodyWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('pEnvBannerWrapper', $context, $blocks);
        // line 177
        yield "\t\t
\t\t";
        // line 178
        yield from $this->unwrap()->yieldBlock('pNavigationWrapper', $context, $blocks);
        // line 331
        yield "\t\t
\t\t";
        // line 332
        yield from $this->unwrap()->yieldBlock('pMainWrapper', $context, $blocks);
        // line 359
        yield "\t\t
\t\t<footer id=\"footer-wrapper\">
\t\t\t";
        // line 361
        yield from $this->unwrap()->yieldBlock('pPageFooter', $context, $blocks);
        // line 364
        yield "\t\t</footer>
\t
\t\t";
        // line 366
        yield from $this->unwrap()->yieldBlock('pModalForAllWrapper', $context, $blocks);
        // line 375
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('pModalForAlert', $context, $blocks);
        // line 394
        yield "
\t\t";
        // line 395
        yield from $this->unwrap()->yieldBlock('pPageOverlay', $context, $blocks);
        // line 402
        yield "
\t\t";
        // line 403
        yield from $this->unwrap()->yieldBlock('pPageUIExtensionBody', $context, $blocks);
        // line 408
        yield "\t";
        yield from [];
    }

    // line 167
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pEnvBannerWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 168
        yield "\t\t\t";
        if (((($_v85 = ($context["app"] ?? null)) && is_array($_v85) || $_v85 instanceof ArrayAccess ? ($_v85["combodo.current_environment"] ?? null) : null) != "production")) {
            // line 169
            yield "\t\t\t\t<div id=\"envbanner\" class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t";
            // line 170
            yield $this->env->getFilter('dict_format')->getCallable()("Portal:EnvironmentBanner:Title", Twig\Extension\CoreExtension::upper($this->env->getCharset(), (($_v86 = ($context["app"] ?? null)) && is_array($_v86) || $_v86 instanceof ArrayAccess ? ($_v86["combodo.current_environment"] ?? null) : null)));
            yield "
\t\t\t\t\t<button type=\"button\" onclick=\"window;location.href='";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v87 = ($context["app"] ?? null)) && is_array($_v87) || $_v87 instanceof ArrayAccess ? ($_v87["url_generator"] ?? null) : null), "generate", ["p_home", ["switch_env" => "production"]], "method", false, false, false, 171), "html", null, true);
            yield "'\">
\t\t\t\t\t\t";
            // line 172
            yield $this->env->getFilter('dict_s')->getCallable()("Portal:EnvironmentBanner:GoToProduction");
            yield "
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 176
        yield "\t\t";
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pNavigationWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 179
        yield "\t\t\t";
        // line 180
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('pNavigationTopMenuWrapper', $context, $blocks);
        // line 253
        yield "
\t\t\t";
        // line 255
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('pNavigationSideMenuWrapper', $context, $blocks);
        // line 330
        yield "\t\t";
        yield from [];
    }

    // line 180
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pNavigationTopMenuWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 181
        yield "\t\t\t\t<nav class=\"navbar navbar-fixed-top navbar-default visible-xs\" id=\"topbar\" role=\"navigation\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
        // line 189
        yield from $this->unwrap()->yieldBlock('pNavigationTopMenuLogo', $context, $blocks);
        // line 198
        yield "\t\t\t\t\t\t\t<p class=\"navbar-text\">
\t\t\t\t\t\t\t\t<a class=\"navbar-link user_infos\" href=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 199), "generate", ["p_user_profile_brick"], "method", false, false, false, 199), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t\t<span class=\"user_photo\" style=\"background-image: url('";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sUserPhotoUrl"] ?? null), "html", null, true);
        yield "');\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"user_fullname\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sUserFullname"] ?? null), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t";
        // line 207
        yield from $this->unwrap()->yieldBlock('pNavigationTopBricks', $context, $blocks);
        // line 225
        yield "\t\t\t\t\t\t\t\t";
        if (($context["bUserConnected"] ?? null)) {
            // line 226
            yield "\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 227), "generate", ["p_user_profile_brick"], "method", false, false, false, 227), "html", null, true);
            yield "\"><span class=\"brick_icon fas fa-user fa-2x fa-fw\"></span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil"), "html", null, true);
            yield "</a></li>
\t\t\t\t\t\t\t\t\t";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["allowed_portals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
                // line 229
                yield "\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "id", [], "any", false, false, false, 229) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v88 = ($context["app"] ?? null)) && is_array($_v88) || $_v88 instanceof ArrayAccess ? ($_v88["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 229), "id", [], "any", false, false, false, 229))) {
                    // line 230
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["sIconClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "id", [], "any", false, false, false, 230) == "backoffice")) ? ("far fa-list-alt") : ("fas fa-external-link-alt"));
                    // line 231
                    yield "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "url", [], "any", false, false, false, 231), "html", null, true);
                    yield "\" target=\"_blank\"><span class=\"brick_icon ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sIconClass"] ?? null), "html", null, true);
                    yield " fa-2x fa-fw\"></span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "label", [], "any", false, false, false, 231)), "html", null, true);
                    yield "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 233
                yield "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['aPortal'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            yield "                                    ";
            if (($context["bUserCanLogOff"] ?? null)) {
                // line 235
                yield "                                        ";
                // line 236
                yield "\t\t\t\t\t\t\t\t\t    ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["allowed_portals"] ?? null)) > 1)) {
                    // line 237
                    yield "                                            <li role=\"separator\" class=\"divider\"></li>
                                        ";
                }
                // line 239
                yield "\t\t\t\t\t\t\t\t\t    <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v89 = ($context["app"] ?? null)) && is_array($_v89) || $_v89 instanceof ArrayAccess ? ($_v89["combodo.absolute_url"] ?? null) : null), "html", null, true);
                yield "pages/logoff.php\"><span class=\"brick_icon fas fa-sign-out-alt fa-2x fa-fw\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Navigation:Dropdown:Logout"), "html", null, true);
                yield "</a></li>
                                    ";
            }
            // line 241
            yield "\t\t\t\t\t\t\t\t";
        }
        // line 242
        yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

                        ";
        // line 245
        yield from $this->unwrap()->yieldBlock('pPageUIExtensionNavigationMenuTopbar', $context, $blocks);
        // line 250
        yield "\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t";
        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pNavigationTopMenuLogo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        yield "\t\t\t\t\t\t\t\t<a class=\"navbar-brand pull-right\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v90 = ($context["app"] ?? null)) && is_array($_v90) || $_v90 instanceof ArrayAccess ? ($_v90["combodo.conf.app_icon_url"] ?? null) : null), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t\t";
        // line 191
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v91 = ($context["app"] ?? null)) && is_array($_v91) || $_v91 instanceof ArrayAccess ? ($_v91["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 191), "logo", [], "any", false, false, false, 191))) {
            // line 192
            yield "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v92 = ($context["app"] ?? null)) && is_array($_v92) || $_v92 instanceof ArrayAccess ? ($_v92["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 192), "logo", [], "any", false, false, false, 192), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v93 = ($context["app"] ?? null)) && is_array($_v93) || $_v93 instanceof ArrayAccess ? ($_v93["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 192), "name", [], "any", false, false, false, 192)), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 194
            yield "\t\t\t\t\t\t\t\t\t\tiTop
\t\t\t\t\t\t\t\t\t";
        }
        // line 196
        yield "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        yield from [];
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pNavigationTopBricks(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 208
        yield "\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
        if ( !array_key_exists("oBrick", $context)) {
            yield "active";
        }
        yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 209), "generate", ["p_home"], "method", false, false, false, 209), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon fas fa-home fa-2x\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Page:Home"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (($_v94 = ($context["app"] ?? null)) && is_array($_v94) || $_v94 instanceof ArrayAccess ? ($_v94["brick_collection"] ?? null) : null), "navigation_menu_ordering", [], "any", false, false, false, 214));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 215
            yield "\t\t\t\t\t\t\t\t\t\t";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetActive", [], "any", false, false, false, 215) && CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetVisibleNavigationMenu", [], "any", false, false, false, 215)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 215)))) {
                // line 216
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
                if ((array_key_exists("oBrick", $context) && (CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "id", [], "any", false, false, false, 216) == CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "id", [], "any", false, false, false, 216)))) {
                    yield "active";
                }
                yield "\" data-brick-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 216), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 217), "generate", [CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 217), ["sBrickId" => CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 217)]], "method", false, false, false, 217), "html", null, true);
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 217), CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 217), [], "array", false, true, false, 217), "hash", [], "array", true, true, false, 217)) {
                    yield "#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v95 = (($_v96 = (($_v97 = ($context["app"] ?? null)) && is_array($_v97) || $_v97 instanceof ArrayAccess ? ($_v97["combodo.portal.instance.routes"] ?? null) : null)) && is_array($_v96) || $_v96 instanceof ArrayAccess ? ($_v96[CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 217)] ?? null) : null)) && is_array($_v95) || $_v95 instanceof ArrayAccess ? ($_v95["hash"] ?? null) : null), "html", null, true);
                }
                yield "\" ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 217), CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 217), [], "array", false, true, false, 217), "navigation_menu_attr", [], "array", true, true, false, 217)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v98 = (($_v99 = (($_v100 = ($context["app"] ?? null)) && is_array($_v100) || $_v100 instanceof ArrayAccess ? ($_v100["combodo.portal.instance.routes"] ?? null) : null)) && is_array($_v99) || $_v99 instanceof ArrayAccess ? ($_v99[CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 217)] ?? null) : null)) && is_array($_v98) || $_v98 instanceof ArrayAccess ? ($_v98["navigation_menu_attr"] ?? null) : null));
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
                yield " ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetModal", [], "any", false, false, false, 217)) {
                    yield "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                yield ">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon ";
                // line 218
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetDecorationClassNavigationMenu", [], "any", false, false, false, 218), "html", null, true);
                yield "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetTitleNavigationMenu", [], "any", false, false, false, 219)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 223
            yield "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['brick'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "\t\t\t\t\t\t\t\t";
        yield from [];
    }

    // line 245
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageUIExtensionNavigationMenuTopbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 246
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 246), "html", [], "any", false, true, false, 246), Twig\Extension\CoreExtension::constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array", true, true, false, 246)) {
            // line 247
            yield "                                ";
            yield (($_v101 = CoreExtension::getAttribute($this->env, $this->source, (($_v102 = ($context["app"] ?? null)) && is_array($_v102) || $_v102 instanceof ArrayAccess ? ($_v102["ui_extensions_helper"] ?? null) : null), "html", [], "any", false, false, false, 247)) && is_array($_v101) || $_v101 instanceof ArrayAccess ? ($_v101[Twig\Extension\CoreExtension::constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU")] ?? null) : null);
            yield "
                            ";
        }
        // line 249
        yield "                        ";
        yield from [];
    }

    // line 255
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pNavigationSideMenuWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 256
        yield "\t\t\t\t<nav class=\"navbar-default hidden-xs col-sm-3 col-md-2\" id=\"sidebar\" role=\"navigation\">
\t\t\t\t\t<div class=\"user_card bg-primary\">
\t\t\t\t\t\t<div class=\"user_photo\" style=\"background-image: url('";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sUserPhotoUrl"] ?? null), "html", null, true);
        yield "');\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user_infos\">
\t\t\t\t\t\t\t<div class=\"user_fullname\">";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sUserFullname"] ?? null), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t<div class=\"user_email dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"user_options\">
\t\t\t\t\t\t\t\t\t";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sUserEmail"] ?? null), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu user_options\" aria-labelledby=\"user_options\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 268), "generate", ["p_user_profile_brick"], "method", false, false, false, 268), "html", null, true);
        yield "\"><span class=\"brick_icon fas fa-user fa-lg fa-fw\"></span>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["allowed_portals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
            // line 270
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "id", [], "any", false, false, false, 270) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v103 = ($context["app"] ?? null)) && is_array($_v103) || $_v103 instanceof ArrayAccess ? ($_v103["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 270), "id", [], "any", false, false, false, 270))) {
                // line 271
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                $context["sGlyphiconClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "id", [], "any", false, false, false, 271) == "backoffice")) ? ("far fa-list-alt") : ("fas fa-external-link-alt"));
                // line 272
                yield "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "url", [], "any", false, false, false, 272), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v104 = ($context["app"] ?? null)) && is_array($_v104) || $_v104 instanceof ArrayAccess ? ($_v104["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 272), "allowed_portals", [], "any", false, false, false, 272), "opening_mode", [], "any", false, false, false, 272) == "tab")) {
                    yield "target=\"_blank\"";
                }
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "label", [], "any", false, false, false, 272)), "html", null, true);
                yield "\"><span class=\"brick_icon ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sGlyphiconClass"] ?? null), "html", null, true);
                yield " fa-lg fa-fw\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["aPortal"], "label", [], "any", false, false, false, 272)), "html", null, true);
                yield "</a></li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 274
            yield "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['aPortal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        yield "                                    ";
        if (($context["bUserCanLogOff"] ?? null)) {
            // line 276
            yield "                                        ";
            // line 277
            yield "\t\t\t\t\t\t\t\t\t    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["allowed_portals"] ?? null)) > 1)) {
                // line 278
                yield "                                            <li role=\"separator\" class=\"divider\"></li>
                                        ";
            }
            // line 280
            yield "\t\t\t\t\t\t\t\t\t    <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v105 = ($context["app"] ?? null)) && is_array($_v105) || $_v105 instanceof ArrayAccess ? ($_v105["combodo.absolute_url"] ?? null) : null), "html", null, true);
            yield "pages/logoff.php\"><span class=\"brick_icon fas fa-sign-out-alt fa-lg fa-fw\"></span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Navigation:Dropdown:Logout"), "html", null, true);
            yield "</a></li>
                                    ";
        }
        // line 282
        yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t";
        // line 287
        yield from $this->unwrap()->yieldBlock('pNavigationSideMenu', $context, $blocks);
        // line 307
        yield "\t\t\t\t\t</div>

                    ";
        // line 309
        yield from $this->unwrap()->yieldBlock('pPageUIExtensionNavigationMenuSidebar', $context, $blocks);
        // line 314
        yield "
\t\t\t\t\t";
        // line 315
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v106 = ($context["app"] ?? null)) && is_array($_v106) || $_v106 instanceof ArrayAccess ? ($_v106["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 315), "logo", [], "any", false, false, false, 315))) {
            // line 316
            yield "\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t";
            // line 317
            yield from $this->unwrap()->yieldBlock('pNavigationSideMenuLogo', $context, $blocks);
            // line 326
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 328
        yield "\t\t\t\t</nav>
\t\t\t";
        yield from [];
    }

    // line 287
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pNavigationSideMenu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 288
        yield "\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
        // line 289
        if ( !array_key_exists("oBrick", $context)) {
            yield "active";
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 290), "generate", ["p_home"], "method", false, false, false, 290), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon fas fa-home fa-2x\"></span>
\t\t\t\t\t\t\t\t\t\t";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Page:Home"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (($_v107 = ($context["app"] ?? null)) && is_array($_v107) || $_v107 instanceof ArrayAccess ? ($_v107["brick_collection"] ?? null) : null), "navigation_menu_ordering", [], "any", false, false, false, 295));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 296
            yield "\t\t\t\t\t\t\t\t\t";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetActive", [], "any", false, false, false, 296) && CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetVisibleNavigationMenu", [], "any", false, false, false, 296)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 296)))) {
                // line 297
                yield "\t\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
                if ((array_key_exists("oBrick", $context) && (CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "id", [], "any", false, false, false, 297) == CoreExtension::getAttribute($this->env, $this->source, ($context["oBrick"] ?? null), "id", [], "any", false, false, false, 297)))) {
                    yield "active";
                }
                yield "\" data-brick-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 297), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 298), "generate", [CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 298), ["sBrickId" => CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetId", [], "any", false, false, false, 298)]], "method", false, false, false, 298), "html", null, true);
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 298), CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 298), [], "array", false, true, false, 298), "hash", [], "array", true, true, false, 298)) {
                    yield "#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v108 = (($_v109 = (($_v110 = ($context["app"] ?? null)) && is_array($_v110) || $_v110 instanceof ArrayAccess ? ($_v110["combodo.portal.instance.routes"] ?? null) : null)) && is_array($_v109) || $_v109 instanceof ArrayAccess ? ($_v109[CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 298)] ?? null) : null)) && is_array($_v108) || $_v108 instanceof ArrayAccess ? ($_v108["hash"] ?? null) : null), "html", null, true);
                }
                yield "\" ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 298), CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 298), [], "array", false, true, false, 298), "navigation_menu_attr", [], "array", true, true, false, 298)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v111 = (($_v112 = (($_v113 = ($context["app"] ?? null)) && is_array($_v113) || $_v113 instanceof ArrayAccess ? ($_v113["combodo.portal.instance.routes"] ?? null) : null)) && is_array($_v112) || $_v112 instanceof ArrayAccess ? ($_v112[CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetRouteName", [], "any", false, false, false, 298)] ?? null) : null)) && is_array($_v111) || $_v111 instanceof ArrayAccess ? ($_v111["navigation_menu_attr"] ?? null) : null));
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
                yield " ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetModal", [], "any", false, false, false, 298)) {
                    yield "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                yield ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon ";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetDecorationClassNavigationMenu", [], "any", false, false, false, 299), "html", null, true);
                yield "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["brick"], "GetTitleNavigationMenu", [], "any", false, false, false, 300)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 304
            yield "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['brick'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        yield from [];
    }

    // line 309
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageUIExtensionNavigationMenuSidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 310
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 310), "html", [], "any", false, true, false, 310), Twig\Extension\CoreExtension::constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array", true, true, false, 310)) {
            // line 311
            yield "                            ";
            yield (($_v114 = CoreExtension::getAttribute($this->env, $this->source, (($_v115 = ($context["app"] ?? null)) && is_array($_v115) || $_v115 instanceof ArrayAccess ? ($_v115["ui_extensions_helper"] ?? null) : null), "html", [], "any", false, false, false, 311)) && is_array($_v114) || $_v114 instanceof ArrayAccess ? ($_v114[Twig\Extension\CoreExtension::constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU")] ?? null) : null);
            yield "
                        ";
        }
        // line 313
        yield "                    ";
        yield from [];
    }

    // line 317
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pNavigationSideMenuLogo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 318
        yield "\t\t\t\t\t\t\t\t";
        // line 319
        yield "\t\t\t\t\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, (($_v116 = ($context["app"] ?? null)) && is_array($_v116) || $_v116 instanceof ArrayAccess ? ($_v116["kernel"] ?? null) : null), "debug", [], "any", false, false, false, 319) == true)) {
            // line 320
            yield "\t\t\t\t\t\t\t\t\t<div style=\"position: fixed; bottom: 0px; left: 0px; z-index: 9999;\">Debug: Screen size <span class=\"hidden-sm hidden-md hidden-lg\">XS</span><span class=\"hidden-xs hidden-md hidden-lg\">SM</span><span class=\"hidden-xs hidden-sm hidden-lg\">MD</span><span class=\"hidden-xs hidden-sm hidden-md\">LG</span></div>
\t\t\t\t\t\t\t\t";
        }
        // line 322
        yield "\t\t\t\t\t\t\t\t<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v117 = ($context["app"] ?? null)) && is_array($_v117) || $_v117 instanceof ArrayAccess ? ($_v117["combodo.conf.app_icon_url"] ?? null) : null), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v118 = ($context["app"] ?? null)) && is_array($_v118) || $_v118 instanceof ArrayAccess ? ($_v118["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 322), "name", [], "any", false, false, false, 322)), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v119 = ($context["app"] ?? null)) && is_array($_v119) || $_v119 instanceof ArrayAccess ? ($_v119["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 323), "logo", [], "any", false, false, false, 323), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v120 = ($context["app"] ?? null)) && is_array($_v120) || $_v120 instanceof ArrayAccess ? ($_v120["combodo.portal.instance.conf"] ?? null) : null), "properties", [], "any", false, false, false, 323), "name", [], "any", false, false, false, 323)), "html", null, true);
        yield "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        yield from [];
    }

    // line 332
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pMainWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 333
        yield "\t\t<div class=\"container-fluid\" id=\"main-wrapper\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">
                    <section class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
                            ";
        // line 338
        yield from $this->loadTemplate($this->extensions['Combodo\iTop\Portal\Twig\TemplatesTwigExtension']->GetTemplate("session_messages"), "itop-portal-base/portal/templates/layout.html.twig", 338)->unwrap()->yield($context);
        // line 339
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"row\" id=\"main-header\">
\t\t\t\t\t\t";
        // line 342
        yield from $this->unwrap()->yieldBlock('pMainHeader', $context, $blocks);
        // line 344
        yield "\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"row\" id=\"main-content\">
\t\t\t\t\t\t";
        // line 346
        yield from $this->unwrap()->yieldBlock('pMainContent', $context, $blocks);
        // line 348
        yield "\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 352
        yield from $this->unwrap()->yieldBlock('pPageUIExtensionMainContent', $context, $blocks);
        // line 357
        yield "\t\t</div>
\t\t";
        yield from [];
    }

    // line 342
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pMainHeader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 343
        yield "\t\t\t\t\t\t";
        yield from [];
    }

    // line 346
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pMainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 347
        yield "\t\t\t\t\t\t";
        yield from [];
    }

    // line 352
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageUIExtensionMainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 353
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 353), "html", [], "any", false, true, false, 353), Twig\Extension\CoreExtension::constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT"), [], "array", true, true, false, 353)) {
            // line 354
            yield "                    ";
            yield (($_v121 = CoreExtension::getAttribute($this->env, $this->source, (($_v122 = ($context["app"] ?? null)) && is_array($_v122) || $_v122 instanceof ArrayAccess ? ($_v122["ui_extensions_helper"] ?? null) : null), "html", [], "any", false, false, false, 354)) && is_array($_v121) || $_v121 instanceof ArrayAccess ? ($_v121[Twig\Extension\CoreExtension::constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT")] ?? null) : null);
            yield "
                ";
        }
        // line 356
        yield "\t\t\t";
        yield from [];
    }

    // line 361
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageFooter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 362
        yield "\t\t\t\t";
        // line 363
        yield "\t\t\t";
        yield from [];
    }

    // line 366
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pModalForAllWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 367
        yield "\t\t\t<div class=\"modal fade\" id=\"modal-for-all\" role=\"dialog\" tabindex=\"-1\">
\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
                        ";
        // line 370
        yield from $this->loadTemplate($this->extensions['Combodo\iTop\Portal\Twig\TemplatesTwigExtension']->GetTemplate("loader"), "itop-portal-base/portal/templates/layout.html.twig", 370)->unwrap()->yield($context);
        // line 371
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        yield from [];
    }

    // line 375
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pModalForAlert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 376
        yield "\t\t\t<div class=\"modal fade\" id=\"modal-for-alert\" role=\"dialog\" tabindex=\"-1\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Portal:Button:Close"), "html", null, true);
        yield "\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\"></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Portal:Button:Close"), "html", null, true);
        yield "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        yield from [];
    }

    // line 395
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageOverlay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 396
        yield "\t\t\t<div id=\"page_overlay\" class=\"global_overlay\">
\t\t\t\t<div class=\"overlay_content\">
                    ";
        // line 398
        yield from $this->loadTemplate($this->extensions['Combodo\iTop\Portal\Twig\TemplatesTwigExtension']->GetTemplate("loader"), "itop-portal-base/portal/templates/layout.html.twig", 398)->unwrap()->yield($context);
        // line 399
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        yield from [];
    }

    // line 403
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageUIExtensionBody(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 404
        yield "\t\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true, false, 404), "html", [], "any", false, true, false, 404), Twig\Extension\CoreExtension::constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY"), [], "array", true, true, false, 404)) {
            // line 405
            yield "\t\t\t\t";
            yield (($_v123 = CoreExtension::getAttribute($this->env, $this->source, (($_v124 = ($context["app"] ?? null)) && is_array($_v124) || $_v124 instanceof ArrayAccess ? ($_v124["ui_extensions_helper"] ?? null) : null), "html", [], "any", false, false, false, 405)) && is_array($_v123) || $_v123 instanceof ArrayAccess ? ($_v123[Twig\Extension\CoreExtension::constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY")] ?? null) : null);
            yield "
\t\t\t";
        }
        // line 407
        yield "\t\t";
        yield from [];
    }

    // line 410
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageLiveScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 411
        yield "\t\t<script type=\"text/javascript\">
\t\t\t";
        // line 412
        yield from $this->unwrap()->yieldBlock('pPageLiveScriptHelpers', $context, $blocks);
        // line 481
        yield "
            \$(document).ready(function ()
            {
                const oBodyElem = \$('body');

                ";
        // line 486
        yield from $this->unwrap()->yieldBlock('pPageReadyScripts', $context, $blocks);
        // line 552
        yield "\t\t\t});
\t\t</script>
\t";
        yield from [];
    }

    // line 412
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageLiveScriptHelpers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 413
        yield "\t\t\t\t// Helper to get the application root url
\t\t\t\tvar GetAbsoluteUrlAppRoot = function()
\t\t\t\t{
\t\t\t\t\treturn '";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v125 = ($context["app"] ?? null)) && is_array($_v125) || $_v125 instanceof ArrayAccess ? ($_v125["combodo.absolute_url"] ?? null) : null), "html", null, true);
        yield "';
\t\t\t\t};
\t\t\t\t// Note: We might want to expose URLs instead of this kind of stuff... 🤔
\t\t\t\tvar GetAddSessionMessageUrl = function()
\t\t\t\t{
\t\t\t\t\treturn '";
        // line 421
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v126 = ($context["app"] ?? null)) && is_array($_v126) || $_v126 instanceof ArrayAccess ? ($_v126["url_generator"] ?? null) : null), "generate", ["p_session_message_add"], "method", false, false, false, 421);
        yield "';
\t\t\t\t};
\t\t\t\t/**
\t\t\t\t * @param sUrl {string} The URL to append the new param to
\t\t\t\t * @param sParamName {string} Name of the parameter
\t\t\t\t * @param sParamValue {string} Value of the param, needs to be already URL encoded
\t\t\t\t * @return {string} The sUrl parameters with the sParamName / sParamValue append at the right place
\t\t\t\t * @deprecated 3.0.0 N°4176
\t\t\t\t */
\t\t\t\tvar AddParameterToUrl = function(sUrl, sParamName, sParamValue)
\t\t\t\t{
\t\t\t\t\tsUrl += (sUrl.split('?')[1] ? '&':'?') + sParamName + '=' + sParamValue;
\t\t\t\t\treturn sUrl;
\t\t\t\t};
\t\t\t\t// Test is sString is a valid JSON string
\t\t\t\t// TODO 3.0.0: Move to CombodoGlobalToolbox and deprecate this one
\t\t\t\tvar IsJSONString = function(sString)
\t\t\t\t{
\t\t\t\t\ttry {
\t\t\t\t\t\tJSON.parse(sString);
\t\t\t\t\t} catch (oException) {
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar GetContentLoaderTemplate = function()
\t\t\t\t{
\t\t\t\t\treturn '<div class=\"content_loader\"><div class=\"icon glyphicon glyphicon-refresh\"></div><div class=\"message\">";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Page:PleaseWait"), "html", null, true);
        yield "</div></div>';
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar ShowLoginDialog = function()
\t\t\t\t{
                    var oModalElem = \$('#modal-for-alert').clone();
                    oModalElem.attr('id', '');
                    oModalElem.find('.modal-content .modal-header .modal-title').html('";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Error:HTTP:401"), "js"), "html", null, true);
        yield "');
                    oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html('";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Portal:ErrorUserLoggedOut"), "js"), "html", null, true);
        yield "');

                    oModalElem.find('.modal-content .modal-body button').replaceWith( \$('<button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:window.location.reload();\">";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:LogOff:ClickHereToLoginAgain"), "js"), "html", null, true);
        yield "</button>') );

                    oModalElem.appendTo('body');
                    oModalElem.modal('show');
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar ShowErrorDialog = function(sBody, sTitle)
\t\t\t\t{
\t\t\t\t    if(sTitle === undefined)
\t\t\t\t\t{
\t\t\t\t\t    sTitle = '";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Error:HTTP:500"), "js"), "html", null, true);
        yield "';
\t\t\t\t\t}
\t\t\t\t    if(sBody === undefined)
\t\t\t\t\t{
                        sBody = '";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("Error:XHR:Fail", Twig\Extension\CoreExtension::constant("ITOP_APPLICATION_SHORT")), "js"), "html", null, true);
        yield "';
\t\t\t\t\t}
\t\t\t\t\tvar oModalElem = \$('#modal-for-alert');
                    oModalElem.find('.modal-content .modal-header .modal-title').text(sTitle);
                    oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').text(sBody);
                    oModalElem.modal('show');
\t\t\t\t};
\t\t\t";
        yield from [];
    }

    // line 486
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageReadyScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 487
        yield "\t\t\t\t\t// Add proprietary header to identify our XHR calls
\t\t\t\t\t\$(document).ajaxSend(function(oEvent, oXHR, oOptions) {
\t\t\t\t\t\toXHR.setRequestHeader('X-Combodo-Ajax', 'true');
\t\t\t\t\t});
\t\t\t\t\t// Handle AJAX errors (exceptions (500), logout (401), ...)
\t\t\t\t\t\$(document).ajaxError(function(oEvent, oXHR, oSettings, sError){
\t\t\t\t\t    if(oXHR.status === 401)
\t\t\t\t\t\t{
\t\t\t\t\t\t    ShowLoginDialog();
\t\t\t\t\t\t}
                        else if(oXHR.status === 404)
                        {
                            ShowErrorDialog('";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:ObjectDoesNotExist"), "js"), "html", null, true);
        yield "', '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Error:HTTP:404"), "js"), "html", null, true);
        yield "');
                        }
                      else if(oXHR.status === 0 && oXHR.readyState === 0)
                        {
                            //DO NOTHING the ajax call has been aborted
                        }
                        else if(oXHR.responseText !== undefined && IsJSONString(oXHR.responseText) === true)
                        {
                            var oData = JSON.parse(oXHR.responseText);
                            // Catching AJAX exception with detailed error.
                            if( (oData.error_message !== undefined) && (oData.error_title !== undefined) )
                            {
                                ShowErrorDialog(oData.error_message, oData.error_title);
                            } else
                            {
                                ShowErrorDialog();
                            }
                        } else
                        {
                            ShowErrorDialog();
                        }
                    });
                // All processing that should be done on an ajax return
                \$(document).ajaxSuccess(function ()
                {
                    // Init tooltips from async. markup, small timeout to allow markup to be built if necessary
                    setTimeout(function ()
                    {
                        CombodoTooltip.InitAllNonInstantiatedTooltips();
                    }, 1000);
                });

                // Enable tooltips based on existing HTML markup, for markup added dynamically after DOM ready (AJAX, ...) see .ajaxSuccess()...
                CombodoTooltip.InitAllNonInstantiatedTooltips();
                // ... object form which are handled with the following
                oBodyElem.on('form_built', function (oEvent)
                {
                    CombodoTooltip.InitAllNonInstantiatedTooltips(\$(oEvent.target), true);
                });
                // ... refresh of the dataTables
                oBodyElem.on('init.dt draw.dt', function (oEvent)
                {
                    CombodoTooltip.InitAllNonInstantiatedTooltips(\$(oEvent.target), true);
                });

                // Initialize confirmation message handler when a form with touched fields is closed
                oBodyElem.leave_handler({
                    'message': '";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("Portal:Form:Close:Warning"), "html", null, true);
        yield "',
                    'extra_events': {
                        'body': ['hide.bs.modal']
                    }
                });
                ";
        yield from [];
    }

    // line 556
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pPageExtensionsScripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 557
        yield "        ";
        // line 558
        yield "        ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (($_v127 = ($context["app"] ?? null)) && is_array($_v127) || $_v127 instanceof ArrayAccess ? ($_v127["ui_extensions_helper"] ?? null) : null), "js_inline", [], "any", false, false, false, 558))) {
            // line 559
            yield "\t\t\t<script type=\"text/javascript\">
\t\t\t\t";
            // line 560
            yield CoreExtension::getAttribute($this->env, $this->source, (($_v128 = ($context["app"] ?? null)) && is_array($_v128) || $_v128 instanceof ArrayAccess ? ($_v128["ui_extensions_helper"] ?? null) : null), "js_inline", [], "any", false, false, false, 560);
            yield "
\t\t\t</script>
        ";
        }
        // line 563
        yield "\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "itop-portal-base/portal/templates/layout.html.twig";
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
        return array (  1711 => 563,  1705 => 560,  1702 => 559,  1699 => 558,  1697 => 557,  1690 => 556,  1679 => 546,  1627 => 499,  1613 => 487,  1606 => 486,  1593 => 473,  1586 => 469,  1573 => 459,  1568 => 457,  1564 => 456,  1554 => 449,  1523 => 421,  1515 => 416,  1510 => 413,  1503 => 412,  1496 => 552,  1494 => 486,  1487 => 481,  1485 => 412,  1482 => 411,  1475 => 410,  1470 => 407,  1464 => 405,  1461 => 404,  1454 => 403,  1447 => 399,  1445 => 398,  1441 => 396,  1434 => 395,  1422 => 387,  1412 => 380,  1406 => 376,  1399 => 375,  1391 => 371,  1389 => 370,  1384 => 367,  1377 => 366,  1372 => 363,  1370 => 362,  1363 => 361,  1358 => 356,  1352 => 354,  1349 => 353,  1342 => 352,  1337 => 347,  1330 => 346,  1325 => 343,  1318 => 342,  1312 => 357,  1310 => 352,  1304 => 348,  1302 => 346,  1298 => 344,  1296 => 342,  1291 => 339,  1289 => 338,  1282 => 333,  1275 => 332,  1265 => 323,  1258 => 322,  1254 => 320,  1251 => 319,  1249 => 318,  1242 => 317,  1237 => 313,  1231 => 311,  1228 => 310,  1221 => 309,  1215 => 305,  1209 => 304,  1202 => 300,  1198 => 299,  1171 => 298,  1162 => 297,  1159 => 296,  1155 => 295,  1149 => 292,  1144 => 290,  1138 => 289,  1135 => 288,  1128 => 287,  1122 => 328,  1118 => 326,  1116 => 317,  1113 => 316,  1111 => 315,  1108 => 314,  1106 => 309,  1102 => 307,  1100 => 287,  1093 => 282,  1085 => 280,  1081 => 278,  1078 => 277,  1076 => 276,  1073 => 275,  1067 => 274,  1051 => 272,  1048 => 271,  1045 => 270,  1041 => 269,  1035 => 268,  1028 => 264,  1022 => 261,  1016 => 258,  1012 => 256,  1005 => 255,  1000 => 249,  994 => 247,  991 => 246,  984 => 245,  979 => 224,  973 => 223,  966 => 219,  962 => 218,  935 => 217,  926 => 216,  923 => 215,  919 => 214,  913 => 211,  908 => 209,  901 => 208,  894 => 207,  888 => 196,  884 => 194,  876 => 192,  874 => 191,  869 => 190,  862 => 189,  855 => 250,  853 => 245,  848 => 242,  845 => 241,  837 => 239,  833 => 237,  830 => 236,  828 => 235,  825 => 234,  819 => 233,  809 => 231,  806 => 230,  803 => 229,  799 => 228,  793 => 227,  790 => 226,  787 => 225,  785 => 207,  776 => 201,  772 => 200,  768 => 199,  765 => 198,  763 => 189,  753 => 181,  746 => 180,  741 => 330,  738 => 255,  735 => 253,  732 => 180,  730 => 179,  723 => 178,  718 => 176,  711 => 172,  707 => 171,  703 => 170,  700 => 169,  697 => 168,  690 => 167,  685 => 408,  683 => 403,  680 => 402,  678 => 395,  675 => 394,  672 => 375,  670 => 366,  666 => 364,  664 => 361,  660 => 359,  658 => 332,  655 => 331,  653 => 178,  650 => 177,  647 => 167,  640 => 166,  630 => 165,  625 => 163,  622 => 162,  613 => 160,  608 => 159,  605 => 158,  600 => 155,  596 => 154,  591 => 153,  587 => 151,  583 => 150,  579 => 149,  574 => 148,  570 => 146,  566 => 145,  562 => 144,  557 => 143,  553 => 141,  548 => 140,  543 => 137,  538 => 135,  533 => 134,  528 => 132,  523 => 130,  518 => 128,  513 => 126,  509 => 124,  505 => 123,  501 => 122,  497 => 121,  493 => 120,  489 => 119,  485 => 118,  480 => 117,  475 => 115,  470 => 113,  465 => 111,  461 => 109,  456 => 108,  452 => 106,  448 => 105,  444 => 104,  440 => 103,  436 => 102,  432 => 101,  428 => 100,  424 => 99,  420 => 98,  416 => 97,  412 => 96,  407 => 95,  401 => 93,  395 => 91,  393 => 90,  389 => 89,  384 => 88,  377 => 87,  372 => 85,  366 => 82,  363 => 81,  360 => 80,  358 => 79,  351 => 78,  346 => 76,  343 => 75,  334 => 73,  329 => 72,  326 => 71,  324 => 70,  318 => 68,  315 => 67,  313 => 66,  310 => 65,  301 => 63,  296 => 62,  293 => 61,  289 => 59,  284 => 58,  279 => 56,  274 => 54,  270 => 52,  266 => 51,  262 => 50,  257 => 49,  252 => 47,  247 => 45,  242 => 43,  238 => 41,  234 => 40,  230 => 39,  226 => 38,  222 => 37,  217 => 36,  212 => 34,  207 => 32,  205 => 31,  198 => 30,  181 => 27,  176 => 26,  169 => 25,  162 => 564,  160 => 556,  157 => 555,  155 => 410,  152 => 409,  150 => 166,  146 => 165,  143 => 164,  141 => 87,  138 => 86,  136 => 78,  133 => 77,  131 => 30,  126 => 28,  121 => 27,  118 => 25,  109 => 17,  105 => 15,  102 => 14,  99 => 13,  96 => 12,  93 => 11,  89 => 9,  86 => 8,  83 => 7,  80 => 6,  77 => 5,  75 => 4,  72 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "itop-portal-base/portal/templates/layout.html.twig", "C:\\laragon\\www\\itop\\env-production\\itop-portal-base\\portal\\templates\\layout.html.twig");
    }
}
