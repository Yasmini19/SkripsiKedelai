
<!DOCTYPE html>
<html>
<head>
<title>Kedelai</title>
<!-- meta_tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="connective login form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta_tag_Keywords -->
<link href="<?php echo base_url();?>assets/Login/css/style.css" rel="stylesheet" type="text/css" media="all"><!--style_sheet-->
<link href="<?php echo base_url();?>assets/Login/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"><!--font_awesome_icons-->
<!--web_fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
<!--//web_fonts-->
</head>
<body>
<div class="form">
<h1> Login </h1>
	<div class="form-content">
			<?php echo form_open('Login/cekLogin'); ?>
		<form >
			<div class="form-info">
			
				<!-- <h2>Login</h2> -->
			</div>
			<div class="email-w3l">
				<span class="i1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
				<input class="email" type="text" name="username" placeholder="Username" required="" autocomplete="off">
			</div>
			<div class="pass-w3l">
			<!---728x90--->
			<span class="i2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
				<input class="pass" type="password" name="password" placeholder="Password" required="">
			</div>

			<div class="submit-agileits">
			<input class="login"  style="border-radius: 30px;" type="submit" value="login">
			</div>
			<div class="submit-agileits">
			<a href="<?php echo site_url() ?>/HalamanUtama" ><input align="center" class="login"  style="border-radius: 30px; width: 367px; text-align: center;" value="kembali"></a>
			</div>

			 <?php echo form_close();?>
		</form>
	</div>
</div>
</body>
</html>