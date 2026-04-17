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

/* personaltokens.ready.js.twig */
class __TwigTemplate_396fa2f0eb190caa1d1058a9693ee20a extends Template
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
        yield "var \$datatableTokens = \$('#datatable_tokens');

\$datatableTokens.on('click', '.token-refresh-button', function(){
\tvar button = \$(this);
\t\$(button).prop('disabled', true);

\tvar token_id = \$(this).attr('data-token-id');

\tvar refresh_url = '";
        // line 11
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "refresh_token_url", [], "any", false, false, false, 11);
        yield "&token_id=' + token_id;
\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: refresh_url
\t\t})
\t\t.done(function (data) {
\t\t\t\$(button).prop('disabled', false);
\t\t\tvar refresh_alert_ok = \$('#refresh_token_alert_ok');
\t\t\tvar refresh_alert_fail = \$('#operation_fail_alert');
\t\t\tif (data.result == 'ok')
\t\t\t{
\t\t\t\trefresh_alert_fail.addClass('ibo-is-hidden');
\t\t\t\trefresh_alert_ok.find('.ibo-alert--body').html(data.message);
\t\t\t\trefresh_alert_ok.find('.ibo-alert--title').text(data.title);

\t\t\t\trefresh_alert_ok.removeClass('ibo-is-hidden');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\trefresh_alert_ok.addClass('ibo-is-hidden');
\t\t\t\trefresh_alert_fail.removeClass('ibo-is-hidden');
\t\t\t}
\t\t})
\t\t.fail(function (data) {
\t\t\t\$(button).prop('disabled', false);
\t\t\trefresh_alert_ok.addClass('ibo-is-hidden');
\t\t\trefresh_alert_fail.removeClass('ibo-is-hidden');
\t\t});
});

function DisplayFailureAlert(popup_selector){
\t\$(popup_selector).find('#operation_fail_alert').removeClass('ibo-is-hidden');
}

\$datatableTokens.on('click', '.token-delete-button', function(){
\tvar button = \$(this);
\t\$(button).prop('disabled', true);

\tvar token_id = \$(this).attr('data-token-id');
\tvar deletion_label = \$(this).attr('data-deletion-label');

\tvar deletion_popup = \$('#deletion_popup');
\tvar cloned_alert = \$('#operation_fail_alert').clone();
\tcloned_alert.addClass('ibo-is-hidden');

\tdeletion_popup.html(cloned_alert);
\tdeletion_popup.append(deletion_label);

\tdeletion_popup.dialog( { width:'auto', height: 'auto', title: \"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("AuthentToken:Title:DeleteTokenConfirmation"), "html", null, true);
        yield "\",
\t\tcloseOnEscape: true, autoOpen:
\t\t\ttrue, modal:true,
\t\tbuttons: [
\t\t\t{
\t\t\t\tid: \"close_button\",
\t\t\t\ttext: \"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:Cancel"), "html", null, true);
        yield "\",
\t\t\t\tclick: function() {
\t\t\t\t\tdeletion_popup.dialog('close');
\t\t\t\t}
\t\t\t}
\t\t\t,{
\t\t\t\tid: \"confirm_deletion_button\",
\t\t\t\ttext: \"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Links:ActionRow:DeleteToken"), "html", null, true);
        yield "\",
\t\t\t\tclick: function() {
\t\t\t\t\tDeleteToken(button, token_id);
\t\t\t\t}
\t\t\t}
\t\t],
\t});

\t\$(button).prop('disabled', false);
\tvar confirm_deletion_button = \$('#confirm_deletion_button');
\tconfirm_deletion_button.focus();
\tconfirm_deletion_button.addClass(\"ibo-is-primary\");
});

function DeleteToken(button, token_id){
\tvar delete_token_url = '";
        // line 87
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "delete_token_url", [], "any", false, false, false, 87);
        yield "&token_id=' + token_id;
\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: delete_token_url
\t\t})
\t\t.done(function (data) {
\t\t\tif (data.result == 'ok')
\t\t\t{
\t\t\t\t\$('#tokens_row_' + token_id).remove();
\t\t\t\t\$('#deletion_popup').dialog('close');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tDisplayFailureAlert('#deletion_popup');
\t\t\t}
\t\t})
\t\t.fail(function (data) {
\t\t\tDisplayFailureAlert('#deletion_popup');
\t\t});
}

\$('#ibo-panel-ez-token').on('click', '.token-edit-button', function(){
\tvar button = \$(this);
\t\$(button).prop('disabled', true);

\tvar token_id = \$(this).attr('data-token-id');

\tvar edit_token_url = '";
        // line 114
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "edit_token_url", [], "any", false, false, false, 114);
        yield "&token_id=' + token_id ;

\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: edit_token_url
\t\t})
\t\t.done(function (data) {
\t\t\tDisplayEditionPopup(data, token_id);
\t\t})
\t\t.fail(function (data) {
\t\t}
\t);

\t\$(button).prop('disabled', false);
});

function ReleaseObjectLock(token_id){
\tif (token_id == '0'){
\t\t//token creation no lock
\t\treturn;
\t}

\tsOwnershipToken =  \$('#modify_dialog').find('[name = \"ownership_token\"]').val();
\tsToken = '';
\tif (sOwnershipToken != undefined)
\t{
\t\tsToken = '&token='+sOwnershipToken;
\t}

\treleaseLockUrl = GetAbsoluteUrlAppRoot()+'pages/UI.php?operation=release_lock_and_details&class=PersonalToken&id='+token_id+sToken;
\t\$.post(releaseLockUrl);
}

function DisplayEditionPopup(html, token_id){
\tthis.dlg = \$('<div id=\"modify_dialog\" data-role=\"ibo-modal\" class=\"dialog\"></div>');
\tvar modifyDialog = this.dlg;

\tvar cloned_alert = \$('#operation_fail_alert').clone();
\tcloned_alert.addClass('ibo-is-hidden');

\tmodifyDialog.html(cloned_alert);
\tmodifyDialog.append(html);

\tvar save_token_url = '";
        // line 157
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["Section"] ?? null), "save_token_link", [], "any", false, false, false, 157);
        yield "';
\tcurrent_form = modifyDialog.find('form');
\tcurrent_form.on('submit',function(event){
\t\t/* stop form from submitting normally */
\t\tevent.preventDefault();
\t\tvar \$form = \$(this);

\t\tif(CheckFields(\$form.attr('id'), false))
\t\t{
\t\t\tvar posting = \$.post( save_token_url, \$form.serialize());

\t\t\t/* Alerts the results */
\t\t\tposting.done(function( data ) {
\t\t\t\tlocation.reload(true);
\t\t\t});

\t\t\tposting.fail(function( data ) {
\t\t\t\tDisplayFailureAlert('#modify_dialog');
\t\t\t});
\t\t}
\t});

\tmodifyDialog.dialog( { width:'auto', height: 'auto', title: '', closeOnEscape: true, modal:true,
\t\tclose: function () {
\t\t\t//release lock
\t\t\tReleaseObjectLock(token_id);
\t\t\tmodifyDialog.dialog('close');
\t\t\tmodifyDialog.dialog('destroy');
\t\t}
\t});

\t//hide datamodel tab
\tmodifyDialog.find('.ibo-tab-container--tab-header').each(function(){
\t\tif (\$(this).attr('data-tab-id') === \"tab_DataModel\")
\t\t{
\t\t\t\$(this).hide();
\t\t}
\t});
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "personaltokens.ready.js.twig";
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
        return array (  216 => 157,  170 => 114,  140 => 87,  122 => 72,  112 => 65,  103 => 59,  52 => 11,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "personaltokens.ready.js.twig", "C:\\laragon\\www\\itop\\env-production\\authent-token\\templates\\personaltokens.ready.js.twig");
    }
}
