<?php 
	session_start();
session_destroy();
 ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<style>
.bigbox{
		width: 230px;
  		height: 125px;
  		margin: 0px auto;
  		position: relative;
  		margin-top: -40px;
  		padding:15px 20px;
  		font-family:DFKai-sb;
		font-size: 20px;
		background: rgba(15%,15%,15%,0.6);
		color: #ffffff;
		border-radius:30px;
		}
		.box1{
		font-family:DFKai-sb;
		color: #ffffff;
		text-align:center;
		line-height:300px;	
	font-size: 40px;
		}

</style>
</head>
<body background="image/6.jpg">
		<div class='box1'>
		 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
  <h4 class="animated tada"> 108學年度四技甄選志願填報系統 </h4>

      
	 </div>	
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
  <h4 class="animated swing">
	 	<div class='bigbox'>
 
	<form action="check.php" method="post">
		學號:<input type="text" name="stdid">
		<p>
		密碼:<input type="password" name="stdpwd">
		<p>
			<input type="reset" name="send" value="重置 "autocomplete="off"style="width:60px;height:23px;font-size:17px;position:relative; left:50px; top: 0px;font-family:DFKai-sb ">
		<input type="submit" name="send" value="登入" autocomplete="off"style="width:px;height:23px;font-size:17px;position:relative; left:100px; top: 0px;font-family:DFKai-sb ">
	</form>	

</div></h4>
 
 <div style="margin-top:-50px;">
<img src="image/7.gif" style="width:400px;height:450px;">
 </div>

  <div style="margin-top:-460px;">
 <img src="image/9.gif" style="float:right;width:400px;height:450px;" >
 </div>

</body>
</html>
