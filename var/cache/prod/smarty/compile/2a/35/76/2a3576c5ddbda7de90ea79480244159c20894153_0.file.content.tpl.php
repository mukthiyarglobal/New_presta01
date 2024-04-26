<?php
/* Smarty version 3.1.39, created on 2024-04-26 14:43:14
  from '/var/www/html/prestashop/admin756qmtm0k/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_662b702aa0abd9_69640497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3576c5ddbda7de90ea79480244159c20894153' => 
    array (
      0 => '/var/www/html/prestashop/admin756qmtm0k/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662b702aa0abd9_69640497 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
