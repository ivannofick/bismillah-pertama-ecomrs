
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

<div id="header">
	<?php 
	/*
	 * Variabel $headernya diambil dari libraries template.php
	 * (application/libraries/template.php)
	 * */
	echo $headernya; ?>
</div>

<div id="content">
	<?php 
	/*
	 * Variabel $contentnya diambil dari libraries template.php
	 * (application/libraries/template.php)
	 * */
	echo $contentnya; ?>
</div>

<div id="footer">
	<?php 
	/*
	 * Variabel $footernya diambil dari libraries template.php
	 * (application/libraries/template.php)
	 * */
	echo $footernya; ?>
</div>

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