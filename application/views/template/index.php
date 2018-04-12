
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
	section {
    padding: 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
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
		var masuk = "<?=site_url('dashboard/login'); ?>";
		var admin = "<?=site_url('dashboard/validasi'); ?>";
		var data = $("#form").serialize();  
			$.ajax({
				url: masuk,
				method: "post",
				data: data,
				success:function(data){
					window.location = admin;
				}
			});
		});
	});

</script>