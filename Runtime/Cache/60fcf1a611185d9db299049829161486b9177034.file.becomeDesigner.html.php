<?php /* Smarty version Smarty-3.1.6, created on 2016-12-30 00:14:13
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\Index\becomeDesigner.html" */ ?>
<?php /*%%SmartyHeaderCode:486658653655c25439-64907157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60fcf1a611185d9db299049829161486b9177034' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\Index\\becomeDesigner.html',
      1 => 1482845998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '486658653655c25439-64907157',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58653655db3ff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58653655db3ff')) {function content_58653655db3ff($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		/*********************************************************
		 * 第一层-介绍成为设计师的流程
		 * 分为4步：
		 * 1.注册会员 
		 * 2.学会使用设计师工具
		 * 3.填写真实姓名，和简介
		 * 4.上传作品，审核通过
		 */
		.firstfloor{
			margin: 0 auto;
			width: 1180px;
			height: 400px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		
		/**********************************************************
		 *	第二层-设计师申请表单
		 *	填写真实姓名和简介，提交表单，等待审核
		 */
		.secondfloor{
			margin: 0 auto;
			width: 1180px;
			height: 700px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			position: relative;
		}
		.avatar{
			position: absolute;
			left: 310px;
			top:80px;
			height: 100px;
			width: 100px;
			border-radius: 50px;
			background: #eee;
		}
		.welcome_title{
			color: #FE008D;
			position: absolute;
			left: 410px;
			top:100px;
			font-size:45px;
			opacity: 0.5;
			width: 500px;
			height: 100px;
			text-align: center; 
		}
		.designer_apply{
			margin-top: 300px;
			margin-left: 340px;
			height: 500px;
			width: 500px;
			opacity: 0.5;
		}
		.name{
			margin-left:120px;
			width: 300px;
			height: 20px; 
		}
		.summary{
			margin-top: 50px;
			margin-left: 120px;
			width: 500px;
			height: 100px; 
		}
		.summary p{
			float: left;
			margin-top: 0px;
		}
		.summary textarea{
			font-size:13px; 
			height: 150px;
			width: 300px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		textarea:hover{
			 border: 1px solid rgba(100, 100, 100, 0.7);
		}
		.designer_apply .submit_btn{
			float: left;
			font-size: 15px;
			margin-top: 100px;
			margin-left: 120px;
			width: 160px;
			height: 36px;
			border-radius: 5px;
			border: 1px solid rgba(100, 100, 100, 0.7);
		} 
		.submit_btn:hover{
			background: #eee;
			color: #FE008D;
		}
	</style>
</head>
<body>
<!-- 第一层：介绍流程 -->
<div class="firstfloor">
	<div class="designer_procedure"></div>
	<div class="designer_procedure"></div>
	<div class="designer_procedure"></div>
	<div class="designer_procedure"></div>
</div>
<!-- 第二层：申请设计师的表单 -->
<div class="secondfloor">
	<div class="avatar"></div>
	<div class="welcome_title">欢迎成为织心衣设计师</div>
	<form class="designer_apply">
		<div class="name">			
			姓名:<input class="txt" type="txt" name="username" placeholder="请填写真实姓名">
		</div>
		<div class="summary" >
			<p>简介:</p><textarea name="" placeholder="简要谈下您的服装设计经历，若没有可以写业余爱好"></textarea>
		</div>
		<input class="submit_btn" type="submit" name="" value="申请成为设计师">
	</form>
</div>
</body>
</html><?php }} ?>