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

/* base/components/input/set/layout.ready.js.twig */
class __TwigTemplate_32f371d1b1fc8f8964fd49907adab521 extends Template
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
        yield "
";
        // line 4
        yield "
";
        // line 6
        $context["oDataProvider"] = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataProvider", [], "method", false, false, false, 6);
        // line 7
        yield "let oWidget";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
        yield " = \$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
        yield "').selectize({

    ";
        // line 10
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "IsAjaxProviderType", [], "any", false, false, false, 10)) {
            // line 11
            yield "    preload: true, ";
            // line 12
            yield "    loadingClass: '',
    ";
        }
        // line 14
        yield "    itemClass: 'item attribute-set-item',
    hasError: ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasError", [], "method", false, false, false, 15)), "html", null, true);
        yield ",
    placeholder: '";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPlaceholder", [], "method", false, false, false, 16), "html", null, true);
        yield "',

    ";
        // line 19
        yield "    plugins: {
        ";
        // line 21
        yield "        'combodo_update_operations' : {
            initial: ";
        // line 22
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetInitialValue", [], "method", false, false, false, 22);
        yield "
        },
        ";
        // line 25
        yield "        'combodo_auto_position' : {
            maxDropDownHeight: 300, ";
        // line 27
        yield "        },
        ";
        // line 29
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasAddOptionButton", [], "method", false, false, false, 29)) {
            // line 30
            yield "        'combodo_add_button' : {
            title: '";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAddButtonTitle", [], "method", false, false, false, 31), "html", null, true);
            yield "'
        },
        ";
        }
        // line 34
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMultiValuesSynthesis", [], "method", false, false, false, 34)) {
            // line 35
            yield "        'combodo_multi_values_synthesis' : {

            tooltip_links_will_be_created_for_all_objects: '";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeCreatedForAllObjects"), "html", null, true);
            yield "',
            tooltip_links_will_be_deleted_from_all_objects: '";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeDeletedFromAllObjects"), "html", null, true);
            yield "',
            tooltip_links_will_be_created_for_one_object: '";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeCreatedFor1Object"), "html", null, true);
            yield "',
            tooltip_links_will_be_deleted_from_one_object: '";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeDeletedFrom1Object"), "html", null, true);
            yield "',
            tooltip_links_will_be_created_for_x_objects: '";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeCreatedForXObjects"), "html", null, true);
            yield "',
            tooltip_links_will_be_deleted_from_x_objects: '";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkWillBeDeletedFromXObjects"), "html", null, true);
            yield "',
            tooltip_links_exist_for_all_objects: '";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkExistForAllObjects"), "html", null, true);
            yield "',
            tooltip_links_exist_for_one_object: '";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkExistForOneObject"), "html", null, true);
            yield "',
            tooltip_links_exist_for_x_objects: '";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:Bulk:LinkExistForXObjects"), "html", null, true);
            yield "'
        },
        ";
        }
        // line 48
        yield "        ";
        // line 49
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRemoveItemButton", [], "method", false, false, false, 49)) {
            // line 50
            yield "        'remove_button' : {},
        ";
        }
        // line 52
        yield "
        ";
        // line 54
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMinItems", [], "method", false, false, false, 54))) {
            // line 55
            yield "        'combodo_min_items' : {
            minItems: ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMinItems", [], "method", false, false, false, 56), "html", null, true);
            yield ",
            errorTitle: '";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:Input:ChangeNotAllowed"), "js"), "html", null, true);
            yield "',
            errorMessage: '";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("UI:Component:Input:Set:MinimumItems", CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMinItems", [], "method", false, false, false, 58)), "js"), "html", null, true);
            yield "'
        },
        ";
        }
        // line 61
        yield "    },

    ";
        // line 64
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMaxItems", [], "method", false, false, false, 64))) {
            // line 65
            yield "    maxItems: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMaxItems", [], "method", false, false, false, 65), "html", null, true);
            yield ",
    ";
        }
        // line 67
        yield "
    ";
        // line 69
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMaxOptions", [], "method", false, false, false, 69))) {
            // line 70
            yield "    maxOptions: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMaxOptions", [], "method", false, false, false, 70), "html", null, true);
            yield ",
    ";
        }
        // line 72
        yield "
    ";
        // line 74
        yield "    valueField: '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetDataValueField", [], "method", false, false, false, 74), "html", null, true);
        yield "',
    labelField: '";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetDataLabelField", [], "method", false, false, false, 75), "html", null, true);
        yield "',
    searchField: ";
        // line 76
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetDataSearchFields", [], "method", false, false, false, 76));
        yield ",
    optgroupField: '";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetGroupField", [], "method", false, false, false, 77), "html", null, true);
        yield "',
    tooltipField: '";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetTooltipField", [], "method", false, false, false, 78), "html", null, true);
        yield "',

    ";
        // line 81
        yield "    options: ";
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetOptions", [], "method", false, false, false, 81));
        yield ",

    ";
        // line 84
        yield "    optgroups: ";
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetOptionsGroups", [], "method", false, false, false, 84));
        yield ",

    ";
        // line 87
        yield "    items: ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValue", [], "method", false, false, false, 87);
        yield ",

    inputClass: 'ibo-input ibo-input-selectize ibo-input-set attribute-set selectize-input',

    ";
        // line 92
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "IsAjaxProviderType", [], "any", false, false, false, 92)) {
            // line 93
            yield "    load: function (query, callback) {
        let me = this;
        \$.ajax({
            url: '";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('get_absolute_url_app_root')->getCallable()(), "html", null, true);
            yield "pages/ajax.render.php?route=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetRoute", [], "method", false, false, false, 96), "html", null, true);
            yield "&search=' + query + '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetParamsAsQueryString", [], "any", false, false, false, 96), "js"), "html", null, true);
            yield "',
            type: 'POST',
            dataType: 'json',
            data: me.convertParamArray('";
            // line 99
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetPostParamsAsJsonString", [], "method", false, false, false, 99);
            yield "'),
            error: function (e) {
                callback();
                console.error(e);
                if(!me.settings.hasError) {
                    me.toggleErrorClass(true);
                }
            },
            success: function (res) {

                // Handle errors
                if(!me.settings.hasError){
                    me.toggleErrorClass(!res.success);
                    if(!res.success) return;
                }

                // Retrieve current input value
                let aSelectedItems = me.getValue();
                // Filter old options data to keep selected values
                // (options with force flag will be kept event if they doesn't be part of the current value)
                let options = Object.values(me.options);
                me.optionsBeforeFilter = options;
                options = options.filter(item => (typeof(item.force) !== \"undefined\" && item.force === true) || aSelectedItems.includes(item['";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetDataValueField", [], "method", false, false, false, 121), "html", null, true);
            yield "']));
                // Merge kept and new values
                options = \$.merge(options, res.search_data);
                // Compute groups
                \$.each(options, function(index, value) {
                    me.addOptionGroup(value['";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetGroupField", [], "method", false, false, false, 126), "html", null, true);
            yield "'], {
                        label: value['";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetGroupField", [], "method", false, false, false, 127), "html", null, true);
            yield "'],
                        value: value['";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oDataProvider"] ?? null), "GetGroupField", [], "method", false, false, false, 128), "html", null, true);
            yield "']
                    });
                });
                // Clear all options
                me.clearOptions();
                // Add merged values
                callback(options);
                // Restore input value
                aSelectedItems.forEach(function(item) {
                    me.addItem(item, true);
                });
            }
        });
    },
    ";
        }
        // line 143
        yield "
    ";
        // line 145
        yield "    render: {

        ";
        // line 148
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasOptionsTemplate", [], "method", false, false, false, 148)) {
            // line 149
            yield "        option: function(option) {
            return CombodoGlobalToolbox.RenderTemplate('#";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 150), "html", null, true);
            yield "_options_template', option, this.settings.optionClass)[0].outerHTML;
        },
        ";
        }
        // line 153
        yield "
        ";
        // line 155
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasItemsTemplate", [], "method", false, false, false, 155)) {
            // line 156
            yield "        item: function (item) {
            return CombodoGlobalToolbox.RenderTemplate('#";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 157), "html", null, true);
            yield "_items_template', item, this.settings.itemClass)[0].outerHTML;
        },
        ";
        }
        // line 160
        yield "
    },

    onInitialize: function(){

        /**
         * Function to convert param array.
         *
         * EVAL_JAVASCRIPT{code_to_eval}
         */
        this.convertParamArray = function(paramArray){
            let postParam = JSON.parse(paramArray);
            let data = {};
            Object.entries(postParam).forEach(([key, value]) => {
                let matches = null;
                if(typeof(value) === 'string'){
                    matches = value.match(/^EVAL_JAVASCRIPT{(.*)}\$/);
                }
                if(matches != null){
                    data[key] = eval(matches[1]);
                }
                else{
                    data[key] = value;
                }
            });
            return data;
        };

        /**
         * Function to show error.
         *
         */
        this.toggleErrorClass = function(bValue){
            this.\$control.toggleClass('selectize-input-error', bValue);
        };

        ";
        // line 197
        yield "        this.toggleErrorClass(this.settings.hasError);
    },

    onDropdownOpen: function (oDropdownElem) {
        oDropdownElem.addClass('set-dropdown');
    },

    ";
        // line 205
        yield "    onItemAdd: function(value, \$item){
        \$item.addClass(this.settings.itemClass);
        \$item.attr({
            'data-tooltip-content': this.options[value][this.settings.tooltipField],
            'data-tooltip-html-enabled': true
        });
        CombodoTooltip.InitTooltipFromMarkup(\$item);

        ";
        // line 213
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnItemAddJs", [], "method", false, false, false, 213))) {
            // line 214
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnItemAddJs", [], "method", false, false, false, 214);
            yield "
        ";
        }
        // line 216
        yield "    },

    ";
        // line 219
        yield "    onItemRemove: function(value, \$item){
        ";
        // line 220
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnItemRemoveJs", [], "method", false, false, false, 220))) {
            // line 221
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnItemRemoveJs", [], "method", false, false, false, 221);
            yield "
        ";
        }
        // line 223
        yield "    },
    
    ";
        // line 226
        yield "    onOptionRemove: function(value, \$item){
        ";
        // line 227
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnOptionRemoveJs", [], "method", false, false, false, 227))) {
            // line 228
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnOptionRemoveJs", [], "method", false, false, false, 228);
            yield "
        ";
        }
        // line 230
        yield "    },

    ";
        // line 233
        yield "    onOptionAdd: function(value, \$item){
        ";
        // line 234
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnOptionAddJs", [], "method", false, false, false, 234))) {
            // line 235
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnOptionAddJs", [], "method", false, false, false, 235);
            yield "
        ";
        }
        // line 237
        yield "    },

    onBlur: function(){
        this.clearOptionGroups()
        this.addOption(this.optionsBeforeFilter)
    },

    ";
        // line 245
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasAddOptionButton", [], "method", false, false, false, 245) && CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasAddOptionButtonJsOnClick", [], "method", false, false, false, 245))) {
            // line 246
            yield "    onAdd: function(){
        ";
            // line 247
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAddOptionButtonJsOnClick", [], "method", false, false, false, 247);
            yield "

    },
    ";
        }
        // line 251
        yield "
});



";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/input/set/layout.ready.js.twig";
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
        return array (  498 => 251,  491 => 247,  488 => 246,  485 => 245,  476 => 237,  470 => 235,  468 => 234,  465 => 233,  461 => 230,  455 => 228,  453 => 227,  450 => 226,  446 => 223,  440 => 221,  438 => 220,  435 => 219,  431 => 216,  425 => 214,  423 => 213,  413 => 205,  404 => 197,  366 => 160,  360 => 157,  357 => 156,  354 => 155,  351 => 153,  345 => 150,  342 => 149,  339 => 148,  335 => 145,  332 => 143,  314 => 128,  310 => 127,  306 => 126,  298 => 121,  273 => 99,  263 => 96,  258 => 93,  255 => 92,  247 => 87,  241 => 84,  235 => 81,  230 => 78,  226 => 77,  222 => 76,  218 => 75,  213 => 74,  210 => 72,  204 => 70,  201 => 69,  198 => 67,  192 => 65,  189 => 64,  185 => 61,  179 => 58,  175 => 57,  171 => 56,  168 => 55,  165 => 54,  162 => 52,  158 => 50,  155 => 49,  153 => 48,  147 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  111 => 35,  108 => 34,  102 => 31,  99 => 30,  96 => 29,  93 => 27,  90 => 25,  85 => 22,  82 => 21,  79 => 19,  74 => 16,  70 => 15,  67 => 14,  63 => 12,  61 => 11,  58 => 10,  50 => 7,  48 => 6,  45 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/input/set/layout.ready.js.twig", "C:\\laragon\\www\\itop\\templates\\base\\components\\input\\set\\layout.ready.js.twig");
    }
}
