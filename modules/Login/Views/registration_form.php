<html>
	<?php
	if (isset($this->session->userdata['logged_in'])) {
	header("user_authentication/user_login_process");
	}
	?>
	<head>
		<title>
			GYMKHANA &mdash; Registration Form
		</title>
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/fav.png')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery.validate.js"></script>
		<style type="text/css">
			text{
			        font-size:20px;
			        color:red;
			     }
		</style>	

	</head>

	<body>
		<?php echo validation_errors(); ?>
		<div id="main" style="margin-top:-60px;">
		<div id="login">
			<h2>
				Registration Form
			</h2>
			<hr/>
			<form action="new_user_registration" method="POST">
			<br/>

			<label>Create Username<text> * </text>:</label>
			<input type="text" name="username" placeholder="Username" value="" size="50" required="" /><br/><br/>

			<label>Email<text> * </text>: </label>
			<input type="text" name="email_value" value="" size="50" placeholder="Email" required="" />
			<br/><br/>

			<label>Password<text> * </text>:</label>
			<input type="password" name="password" value="" size="50" placeholder="**********" required="" /><br/><br/>

			<label>Conform Password<text> * </text>:</label>
			<input type="password" name="passconf" value="" size="50" placeholder="**********" required="" /><br/><br/>


			<div><input type="submit" value="Submit" /></div>
			</form>
					<a href="<?php echo base_url();?>"><center>For Login Click Here</center></a>
			</div>
		</div>
	</body>
	
</html>