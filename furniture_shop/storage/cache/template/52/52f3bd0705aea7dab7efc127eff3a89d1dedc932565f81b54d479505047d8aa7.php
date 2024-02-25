<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/payment/pp_express_order.twig */
class __TwigTemplate_1f54947056f756499654799f76f5b62006df7019ea9471ffccdca7849ab7d17d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["text_transaction"] ?? null);
        echo "</legend>
  <div id=\"paypal-transaction\"></div>
</fieldset>

<fieldset>
  <legend>";
        // line 7
        echo ($context["text_payment"] ?? null);
        echo "</legend>
  <table class=\"table table-bordered\">
    <tr>
      <td>";
        // line 10
        echo ($context["text_capture_status"] ?? null);
        echo "</td>
      <td id=\"capture-status\">";
        // line 11
        echo ($context["capture_status"] ?? null);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 14
        echo ($context["text_amount_authorised"] ?? null);
        echo "</td>
      <td>";
        // line 15
        echo ($context["total"] ?? null);
        echo "
\t  \t";
        // line 16
        if ((($context["capture_status"] ?? null) != "Complete")) {
            // line 17
            echo "        &nbsp;&nbsp;&nbsp;
        <button type=\"button\" id=\"button-void\" data-loading=\"";
            // line 18
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-danger\">";
            echo ($context["button_void"] ?? null);
            echo "</button>
        ";
        }
        // line 19
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 22
        echo ($context["text_amount_captured"] ?? null);
        echo "</td>
      <td id=\"paypal-captured\">";
        // line 23
        echo ($context["captured"] ?? null);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 26
        echo ($context["text_amount_refunded"] ?? null);
        echo "</td>
      <td id=\"paypal-refund\">";
        // line 27
        echo ($context["refunded"] ?? null);
        echo "</td>
    </tr>
  </table>
</fieldset>

";
        // line 32
        if ((($context["capture_status"] ?? null) != "Complete")) {
            // line 33
            echo "\t<fieldset id=\"capture-form\">
\t\t<legend>";
            // line 34
            echo ($context["tab_capture"] ?? null);
            echo "</legend>
\t\t<form id=\"paypal-capture\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-capture-amount\">";
            // line 37
            echo ($context["entry_capture_amount"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"amount\" value=\"";
            // line 39
            echo ($context["capture_remaining"] ?? null);
            echo "\" id=\"input-capture-amount\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-capture-complete\">";
            // line 43
            echo ($context["entry_capture_complete"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"complete\" value=\"1\" id=\"input-capture-complete\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-capture\" data-loading=\"";
            // line 49
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_capture"] ?? null);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t</form>
\t</fieldset>
";
        }
        // line 54
        echo "<script type=\"text/javascript\"><!--
\t\$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token=";
        // line 55
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');

\t\$('#button-capture').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/payment/pp_express/capture&user_token=";
        // line 59
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'amount=' + \$('#input-capture-amount').val() + '&complete=' + (\$('#paypal-capture-complete').prop('checked') == true ? 1 : 0),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-capture').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-capture').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#paypal-capture').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#paypal-capture').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\$('#paypal-captured').text(json['captured']);
\t\t\t\t\t\$('#paypal-capture-amount').val(json['remaining']);

\t\t\t\t\tif (json['capture_status']) {
\t\t\t\t\t\t\$('#capture-status').text(json['capture_status']);

\t\t\t\t\t\t\$('#button-void').remove();

\t\t\t\t\t\t\$('#capture-form').remove();
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t\$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token=";
        // line 91
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');
\t\t\t}
\t\t});
\t});

\t\$('#button-void').on('click', function() {
\t\tif (confirm('";
        // line 97
        echo twig_escape_filter($this->env, ($context["text_confirm_void"] ?? null), "js");
        echo "')) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/payment/pp_express/void&user_token=";
        // line 99
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-void').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-void').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#paypal-capture').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#capture-status').text(json['capture_status']);

\t\t\t\t\t\t\$('#button-void').remove();

\t\t\t\t\t\t\$('#capture-form').remove();
\t\t\t\t\t}

\t\t\t\t\t\$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token=";
        // line 122
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');
\t\t\t\t}
\t\t\t});
\t\t}
\t});

\t\$('#paypal-transaction').delegate('button', 'click', function() {
\t\tvar element = this;

\t\t\$.ajax({
\t\t\turl: \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#tab-pp-express').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token=";
        // line 148
        echo ($context["user_token"] ?? null);
        echo "&order_id=";
        echo ($context["order_id"] ?? null);
        echo "');
\t\t\t\t}
\t\t\t}
\t\t});
\t});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_express_order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 148,  246 => 122,  218 => 99,  213 => 97,  202 => 91,  165 => 59,  156 => 55,  153 => 54,  143 => 49,  134 => 43,  127 => 39,  122 => 37,  116 => 34,  113 => 33,  111 => 32,  103 => 27,  99 => 26,  93 => 23,  89 => 22,  84 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  64 => 14,  58 => 11,  54 => 10,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/pp_express_order.twig", "");
    }
}
