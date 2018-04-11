<?php
/*
 * **************************************************************
 *  Script : 1											*		*
 *  Version : 											*		*
 *  Date : 07 April 2018 - 07:00 s/d 17:00				*	R 	*
 *  Author : Ivannofick Ad'ha Nugraha					*	A 	*
 *  Email : Ivannofick@gmail.com 						*		*
 *  Description : index atau disebut halaman home 		*		*
 * **************************************************************
 */
/**
 * Description of Access
 *
 * @author Ivannofick
 */
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/android-icon-48x48.png" />
	<title>T-shirt Store</title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome/css/font-awesome.min.css">
<script src="<?php echo base_url();?>assets/js/popper.js" type="text/javascript" ></script>
<script src="<?php echo base_url();?>assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"	type="text/javascript" ></script>
<style type="text/css">
	.ukgambar{
		width: 20px;
	}
	#labels{
		margin: 0;
	}
	#forgotpass{
		float: right;
	}
</style>
<body>
<div class="modal fade" id="id01" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div style="text-align: center;">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></br>
		<img src="<?php echo base_url();?>assets/img/icon/ms-icon-70x70.png">
        <h5 class="modal-title" id="exampleModalLongTitle">DodolanKaos</h5><hr>
    </div>
<form id="form" method="post">
		  	<div class="modal-body"> 
				<div class="container">
			    	<div class="form-group">
			    		<p id="labels">Username</p>
						<input type="text" name="username" id="username" class="form-control"><br>
						<p id="labels" style="float: left;">Password</p><a id="forgotpass" href="#">Forgot Password?</a>
						<input type="password" name="password" class="form-control" id="password">
						<input type="checkbox" onclick="myFunction()">Show Password
			    	</div>
			    </div>
		  	</div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		    	<button type="button" class="btn btn-primary" id="signin">Sign In</button>
		    </div>
</form>
    </div>
  </div>
</div>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/icon/ms-icon-70x70.png"> Dodolan Kaos</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Oblong</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Kerad</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" id="logins" href="#"><i class="fa fa-sign-in"></i> Login</a>
		      </li>
		    </ul>
		  </div>
	</nav></br>
</body>
</html>
<script type="text/javascript">
$("#success-alert").hide();
	$(document).ready(function() {
		$("#logins").click(function(){
			$('#id01').modal('show');
		});
	});
	function myFunction() {
	    var x = document.getElementById("password");
	    if (x.type === "password") {
	        x.type = "text";
	    } else {
	        x.type = "password";
	    }
	}
	$(document).ready(function(){
		$("#signin").click(function(){
		var masuk = "<?=site_url('Dashboard/login'); ?>";
		var data = $("#form").serialize();  
			$.ajax({
				url: masuk,
				method: "post",
				data: data,
				beforesend:function(data){
					alert('mohon tunggu');
				}
			});
		});
	});

</script>