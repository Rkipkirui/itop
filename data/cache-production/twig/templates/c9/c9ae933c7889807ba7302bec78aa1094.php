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

/* application/display-block/block-chart-ajax-pie/layout.js.twig */
class __TwigTemplate_c11f871f4e15d803889296d572fb3ce2 extends Template
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
// Calculate height of graph : 200px (minimum height for the chart) + 20*iNbLinesToAddForName for the legend
var iChartDefaultHeight = 200,
        iChartLegendHeight = 20 * ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "iNbLinesToAddForName", [], "any", false, false, false, 6), "html", null, true);
        yield " ,
        iChartTotalHeight = (iChartDefaultHeight+iChartLegendHeight);
\$('#my_chart_";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 8), "html", null, true);
        yield "').height(iChartTotalHeight+'px');

var chart = c3.generate({
    bindto: d3.select('#my_chart_";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 11), "html", null, true);
        yield "'),
    data: {
        columns: ";
        // line 13
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSColumns", [], "any", false, false, false, 13);
        yield ",
        type: 'pie',
        names: ";
        // line 15
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSNames", [], "any", false, false, false, 15);
        yield ",
        onclick: function (d) {
            var aURLs = ";
        // line 17
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSURLs", [], "any", false, false, false, 17);
        yield ";
            window.location.href = aURLs[d.index];
        },
        order: null
    },
    legend: {
        show: true,
        position: 'right'
    },
    tooltip: {
        format: {
            value: function (value) {
                return value;
            }
        }
    },
});

if (typeof (charts) === \"undefined\")
{
    charts = [];
    refreshChart = [];
}
var idxChart = charts.length;
charts.push(chart);
var refreshChart";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 42), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        yield "='\t\$.post(\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sURLForRefresh", [], "any", false, false, false, 42), "js"), "html", null, true);
        yield "&refresh='+idxChart+'\",\"\", function (data) {'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'charts['+idxChart+'].unload();'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t'setTimeout(function () {eval(data.js);},50);'+
\t\t\t\t\t\t\t\t\t\t\t\t\t\t'});';

refreshChart.push(refreshChart";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sId", [], "any", false, false, false, 47), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        yield ");";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "application/display-block/block-chart-ajax-pie/layout.js.twig";
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
        return array (  111 => 47,  101 => 42,  73 => 17,  68 => 15,  63 => 13,  58 => 11,  52 => 8,  47 => 6,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/display-block/block-chart-ajax-pie/layout.js.twig", "C:\\laragon\\www\\itop\\templates\\application\\display-block\\block-chart-ajax-pie\\layout.js.twig");
    }
}
