<?php
/* Smarty version 3.1.39, created on 2022-06-06 06:31:49
  from 'C:\xampp\htdocs\transport\templates\user\login.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_629d51fde97e09_40644716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a6c44becb03aa6943eaeb22345ae78623c444af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\transport\\templates\\user\\login.tpl.html',
      1 => 1630646412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629d51fde97e09_40644716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1148440963629d51fde95fd7_01869846';
?>
<main id="main" class=" alert-info">
	<div id="login-left"></div>
	<div id="login-right">
		<div class="card col-md-8">
			<div class="card-body">
				<form method="post" action="index.php?module=user&func=login">
					<div class="form-group">
						<label for="uname" class="control-label">Username</label>
						<input type="text" id="uname" name="user[uname]" class="form-control">
					</div>
					<div class="form-group">
						<label for="pass" class="control-label">Password</label>
						<input type="password" id="pass" name="user[pass]" class="form-control">
					</div>
					<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
				</form>
			</div>
		</div>
	</div>
  </main>
<?php echo '<script'; ?>
>
	$("#uname").focus();
<?php echo '</script'; ?>
>
<style>
	#login-right{
      position: absolute;
      right:0;
      width:40%;
      height: calc(100%);
      background:white;
      display: flex;
      align-items: center;
  }
  #login-left{
      position: absolute;
      left:0;
      width:60%;
      height: calc(100%);
      background:#00000061;
      display: flex;
      align-items: center;
  }
  #login-right .card{
      margin: auto
  }
  #login-left {
    background: url(./img/hotel-cover.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
	img#cimg,.cimg{
		max-height: 10vh;
		max-width: 6vw;  
  }
</style><?php }
}
