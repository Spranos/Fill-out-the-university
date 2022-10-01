<style>
.text-shadow {
    font-size: 108px;
    color: #ba90cf;
    text-shadow: 3px 3px 1px rgb(163,163,163);
    font-family: 'Comic Sans MS', cursive, sans-serif;
	text-align:center;
	margin-top:300px;
    }
</style>
<body background="image/10.jpg">
<?php
date_default_timezone_set("Asia/Shanghai");
	session_start(); 
	require_once "mysqli_connect.inc.php";
 // if(isset($_SESSION['stdid'])){
    $tea_id = $_SESSION['stdid'];
    	$msg = $_POST['msg'];
    	$ID = $_POST['ID'];
    	$date=date("m/d G:i");
    	
		if(empty($msg)){
			
		echo"<div class=text-shadow>";
			
		echo "沒打東西不給傳!!<br><br>(2秒後自動返回)";
	  echo "<meta http-equiv=REFRESH CONTENT=2;url=main.php>";
	 
	  echo"</div>";
exit();
}elseif(substr($tea_id,0,3)=='tea'){
	$std = $_POST['std'];
    $stdid=$std;
}else{
    $stdid=$tea_id;
	$tea_id='tea'.substr($stdid,0,4);
}

$suggest="INSERT INTO suggest (msg,std_id,tea_id,ID,date) VALUES ('".$msg."','".$stdid."','".$tea_id."','".$ID."','".$date."')";
		if($mydb->query($suggest) == TRUE){
			//echo "新增志願成功。";
			$mydb->close();
			echo'成功';	
		echo "<meta http-equiv=REFRESH CONTENT=0;url=main.php>";
		}else{
			echo "失敗。";
			echo "<meta http-equiv=REFRESH CONTENT=0;url=main.php>";
		}
		?>
