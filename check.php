<body background="image/6.jpg">
<?php
	session_start();
	require_once "mysqli_connect.inc.php";
	$stdid  = $_POST['stdid'];
	$stdpwd = $_POST['stdpwd'];

	if (empty($stdid) OR empty($stdpwd)) {
		echo "<div class=text-shadow>";
		echo "欄位不可空白。<br><br>(2秒後自動返回)";
	  echo "<meta http-equiv=REFRESH CONTENT=2;url=index.php>";
echo "</div>";	 
	}else{
	  $sql="SELECT * from stddata where std_id='".$stdid."' and std_pwd='".$stdpwd."'";
	  $result = $mydb->query($sql);	//執行query指令，查詢使用者身分
	  if($result->num_rows > 0){    //帳號與密碼正確
			$_SESSION['stdid']=$stdid;  //設定此使用者的SESSION變數

			echo "<meta http-equiv=REFRESH CONTENT=0;url=sss.php>";
		}else{
		echo "<div class=text-shadow>";
echo "帳號或密碼錯誤，請重新輸入。<br><br>(2秒後自動返回)";
		echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
echo "</div>";		
		
	  }
	}
?></body>
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