<?php
/* Smarty version 3.1.30, created on 2017-09-12 16:28:38
  from "E:\nne\htdocs\newdady\object\day12\admin\tpl\cat_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b7ef16aa6e46_68363376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '457e17dedf436c41876a1efd4f9b3e99094aede9' => 
    array (
      0 => 'E:\\nne\\htdocs\\newdady\\object\\day12\\admin\\tpl\\cat_add.html',
      1 => 1482120308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:navigater.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59b7ef16aa6e46_68363376 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
<div id="wrapper">
    <!-- Navigation -->
    <?php $_smarty_tpl->_subTemplateRender("file:navigater.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">分类管理</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<form id="form1" action="cat_insert.php" method="post" role="form" enctype="multipart/form-data">

    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="col-lg-6">

                <div class="form-group">
                    <label>分类名称</label>
                    <input type="text" name="cat_name" class="form-control" value="" placeholder="分类名"/>
                </div>

                <div class="form-group" style="width:180px;">
                    <label>请选择父分类</label>
					<select name="parent_id" id="" class="form-control">
						<option value="0">根分类...</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catList']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
                </div>

                <div class="form-group">
                    <label>分类排序</label>
                    <input type="text" name="sort_order" class="form-control" value="" placeholder="排序"/>
                </div>

                <input type="submit" class="btn btn-primary" value="　提交　" />
                <input id="btnClear" type="reset" class="btn btn-default" value="　重置　" />
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
    <!-- 版权开始处 -->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
