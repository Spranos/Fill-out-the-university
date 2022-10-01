<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<style>
.bigbox{
		width: 250px;
  		height: 205px;
  		margin: 0px auto;
  		position: relative;
  		margin-top: 300px;
  		padding:15px 30px;
  		font-family:DFKai-sb;
		font-size: 20px;
		background: rgba(20%,20%,15%,0.6);
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
	 .box2{
	 	font-size: 25px;
	 }
</style>
</head>
<body background="image/10.jpg">

	 	<div class='bigbox'>

         
	<form action="update.php" method="post">
		 <div class="box2">請輸入現在密碼:</div><input type="password" name="o_pwd" style="font-size:20px;">
		<p>
		<div class="box2">請輸入修改密碼:</div><input type="password" name="n_pwd" style="font-size: 20px;">
		<p>
		<input type="submit" name="send" value="修改" style="width:75px;height:30px;font-size:20px;position:relative; left:160px; top: 10px;font-family:DFKai-sb ">
	</form>	
		<form action="main.php" method="post">
          <input type="submit" name="send" value="取消" style="width:75px;height:30px;font-size:20px;position:relative; left:0px; top: -40px;font-family:DFKai-sb ">
          	</form>	

</div>
</body>
</html>
<style type="text/css">
.text-shadow {
    font-size: 50px;
    color: #fae187;
    text-shadow: 0px 3px 1px rgb(219,219,219);
    font-family: 'Comic Sans MS', cursive, sans-serif;
    font-style: italic;
}
<!--
#D2{
    position:relative;
    animation:TestMove2 5s infinite alternate; /*IE*/
    -moz-animation:TestMove2 5s infinite alternate; /*FireFox*/
    -webkit-animation:TestMove2 5s infinite alternate; /*Chrome, Safari*/
}
@keyframes TestMove2{
    from {left:0%;}
    to {left:80%;}
}
@-moz-keyframes TestMove2{
    from {left:0%;}
    to {left:80%;}
}
@-webkit-keyframes TestMove2{
    from {left:0%;}
    to {left:80%;}
}
-->
</style>
<div style="width:600px;padding:30px;margin-top: 240px;">
<div id="D2"><div class="text-shadow">change the password . . .</div></div>
</div>
 <div style="width:600px;height:500px;margin-top:-420px;margin-left: 1200px;"  >
 <img src="image/11.gif" width="100%" height="100%">
</div>


