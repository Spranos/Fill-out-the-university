<?php
date_default_timezone_set("Asia/Shanghai");
	session_start(); 
	require_once "mysqli_connect.inc.php";
 if(isset($_SESSION['stdid'])){
    $stdid = $_SESSION['stdid'];
    	$msg = $_POST['msg'];
    	$dept_id = $_SESSION['deptid'];
    	if(empty($msg)){
    		//回上一頁
	  echo"<script>history.go(-1);</script>";
	  	}else{

//設定日期格式
$date=date("m/d G:i");
$SaveNewMsg="INSERT INTO msg (msg,dept_id,date) VALUES ('".$msg."','".$dept_id."','".$date."')";
		if($mydb->query($SaveNewMsg) == TRUE){
			//echo "新增志願成功。";
			$mydb->close();
			echo"<script>history.go(-1);</script>";
		}else{
			echo "留言失敗。";
		}
	}
//新增完畢轉回留言板
}
?>
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