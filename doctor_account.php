<!DOCTYPE html>
<html lang="en">
<head>
<title>MedTech Solution</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Tab logo -->
<link href="assets/img/tab_logo.png" rel="icon">
<!-- main js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="javascript/main.js"></script>
<!-- Template Main CSS File --> 
<link href="stylesheet/styleme.css" rel="stylesheet" type="text/css" media="screen, projection"/>
<!-- google fonts -->
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>
<script src="https://kit.fontawesome.com/yourcode.js"></script>

<style>
	.inputs{
		width:60%;
		border: 2px solid dodgerBlue;
		border-radius: 8px;
		margin: 8px 0px;
		padding:8px;
		box-sizing:border-box;
		outline:none;
		
	}
	
	.inputs:focus{
		border-color: #0066cc;
		box-shadow:0 0 8px 0 #0066cc;
	}
	
	

	.Button a{
	border-radius:4px;
	font-family: "Amiri";
    background: #3498db;
    color: #fff;
	padding:7px 123px;
	border: none;
	text-align:center;
	text-decoration: none;
	margin-left:55px;
	}	
	
	.Button a:hover {
    background: #088bf0;
    color: #fff;
	}
	
	label{
			font-family:"Amiri";
			color:#088bf0;
			font-size:19px;
	}

	
	
	
	
</style>


</head>
<body>
<!-- this is a navbar for before login -->
<?php include('outer_navbar.php');?>

<section class="home">
    <div class="flex-parent">
	
		<div class="boxone">
            
			<h1 style="text-align:center;padding-right:80px;font-family:Amiri;color:#088bf0;font-size:30px;">Create Account</h1>
			<label style="padding-right:91px;">Email Id     : </label><input class="inputs" type="email" name="doct_email" size="30" placeholder="Email...."><br>
			<label style="padding-right:111px;">Name : </label><input class="inputs"  type="text" name="doct_name" size="30" placeholder="First Middle Last"><br>
			<label style="padding-right:48px;">Specialization : </label><input class="inputs"  type="text" name="doct_spec" size="30" placeholder="Designation...."><br>
			<label style="padding-right:100px;"> Gender : </label>
				<label>Male </label><input type="radio" id="male" value="male" name="gender" style="padding-left:10px;margin:0px 0px;">
				<label>Female </label><input type="radio" id="female" value="female" name="gender"><br>
				
		    <label style="padding-right:75px;">Passsword : </label><input class="inputs"  type="password" name="doct_pass" size="30" placeholder="Password...."><br>
			<label>Conform Passsword : </label><input class="inputs"  type="password" name="doct_con_pass" size="30" placeholder="Conform Password...."><br>
			
			
			<p class="Button"><a href="#">Create Account</a></p>
		</div>	
		
        <!-- i m doctor -->
        <div class="boxone">
            <img src="assets/img/doctor_login.png" alt="Doctor" width="400" height="400">
            
        </div>
        <!-- i m Patient -->
     </div>  
</section>


</body>
</html>

