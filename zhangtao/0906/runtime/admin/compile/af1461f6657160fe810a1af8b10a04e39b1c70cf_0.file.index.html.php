<?php
/* Smarty version 3.1.30, created on 2017-09-13 19:59:41
  from "D:\phpStudy\anzhuang\WWW\new-two\0906\admin\tpl\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b91dad47d777_58117911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af1461f6657160fe810a1af8b10a04e39b1c70cf' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0906\\admin\\tpl\\index.html',
      1 => 1505303980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:nav.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59b91dad47d777_58117911 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php $_smarty_tpl->_subTemplateRender("file:nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">管理首页</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-4 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<span class="arrow glyphicon glyphicon-user"></span>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $_smarty_tpl->tpl_vars['count']->value['admin'];?>
</div>
							<div>账户数量</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<a href="#"><span class="pull-left">账户列表</span></a>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<span class="arrow glyphicon glyphicon-comment">
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">888</div>
							<div>未读留言</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<a href="#"><span class="pull-left">留言列表</span></a>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<span class="arrow glyphicon glyphicon-camera">
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><?php echo $_smarty_tpl->tpl_vars['count']->value['photo'];?>
</div>
							<div>图片数量</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<a href=""><span class="pull-left">相册列表</span></a>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>	
	</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                留言列表
            </div>
            <!--header-->
            <div class="panel-body">
            <div class="panel-body">
				<div class="row">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th style="width: 60px;">编号</th>
							<th>标题</th>
							<th>Email</th>
							<th>是否查看</th>
							<th style="width: 180px;">添加时间</th>
						</tr>

						<tr>
							<td>1</td>
							<td><a href="shownotice.php?id=1">demo</a></td>
							<td>itbing@sina.cn</td>
							<td>未查看</td>
							<td>2015-10-19 00:44:49</td>
						</tr>

						<tr>
							<td>2</td>
							<td><a href="shownotice.php?id=1">demo</a></td>
							<td>itbing@sina.cn</td>
							<td>未查看</td>
							<td>2015-10-19 00:44:49</td>
						</tr>

						<tr>
							<td>3</td>
							<td><a href="shownotice.php?id=1">demo</a></td>
							<td>itbing@sina.cn</td>
							<td>已查看</td>
							<td>2015-10-19 00:44:49</td>
						</tr>

					</table>
				</div>
				 <div class="row" style="padding: 0px;">
                    <div class="col-sm-6">
                        <div>记录数：100 页数：1/50</div>
                    </div>
                    <div class="col-sm-6">
                        <div style="margin: 0px;text-align: right">
                            <ul class="pagination" style="margin: 2px 0;">
								
                            </ul>
                        </div>
                    </div>
                </div><!-- /.row -->
	    </div><!-- /.panel-body -->
        </div><!-- /.panel -->
</div>
<!-- 版权开始处 -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
