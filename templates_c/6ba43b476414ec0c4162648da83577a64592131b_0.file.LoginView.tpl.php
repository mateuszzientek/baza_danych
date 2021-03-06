<?php
/* Smarty version 3.1.30, created on 2022-04-25 21:15:45
  from "E:\xampp\htdocs\baza_danych\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6266f361d3fcf1_90788684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ba43b476414ec0c4162648da83577a64592131b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\baza_danych\\app\\views\\LoginView.tpl',
      1 => 1649370672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6266f361d3fcf1_90788684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10210997596266f361d3f435_04210765', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_10210997596266f361d3f435_04210765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <section>
	<form form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
									<div class="fields">
										<div class="field half">
											<label for="id_login">Podaj login</label>
											<input type="text" name="login" id="id_login"  />
										</div>
										<div class="field half">
											<label for="id_pass">Podaj haslo</label>
											<input type="password" name="pass" id="id_pass" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Zaloguj" class="primary" /></li>
									</ul>
								</form>
                            </section>
							<section class="split">
								<section>
									<div class="contact-method">
										
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wyst??pi??y b????dy: </h4>
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol >
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
	<h4>Wynik</h4>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
 z??
	</p>
<?php }?>

</div>
</section>									
</section>
<?php
}
}
/* {/block 'content'} */
}
