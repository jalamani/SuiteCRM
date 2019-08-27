<?php /* Smarty version 2.6.31, created on 2019-08-27 00:01:11
         compiled from modules/DynamicFields/templates/Fields/Forms/image.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/DynamicFields/templates/Fields/Forms/image.tpl', 51, false),array('function', 'sugar_help', 'modules/DynamicFields/templates/Fields/Forms/image.tpl', 60, false),)), $this); ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_IMAGE_WIDTH'), $this);?>
:</td>
	<td>
		<input id ="width" type="text" name="width" 
		<?php if (! $this->_tpl_vars['vardef']['width'] && ! $this->_tpl_vars['vardef']['height']): ?>
			value="120"
		<?php else: ?>
			value="<?php echo $this->_tpl_vars['vardef']['width']; ?>
"
		<?php endif; ?>
		>
		<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod_strings']['LBL_POPHELP_IMAGE_WIDTH'],'FIXX' => 300,'FIXY' => 200), $this);?>

	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_IMAGE_HEIGHT'), $this);?>
:</td>
	<td>
		<input id ="height" type="text" name="height" 
		<?php if (! $this->_tpl_vars['vardef']['width'] && ! $this->_tpl_vars['vardef']['height']): ?>
			value=""
		<?php else: ?>
			value="<?php echo $this->_tpl_vars['vardef']['height']; ?>
"
		<?php endif; ?>
		>
		<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod_strings']['LBL_POPHELP_IMAGE_HEIGHT'],'FIXX' => 300,'FIXY' => 220), $this);?>

	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_IMAGE_BORDER'), $this);?>
:</td>
	<td>	
		<input type="checkbox" id ="border" name="border" value="1" <?php if (! empty ( $this->_tpl_vars['vardef']['border'] )): ?>checked<?php endif; ?>/>
	</td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>