<body background="image/10.jpg"><?php 
	session_start();
	require_once "mysqli_connect.inc.php";
	$o_pwd = $_POST['o_pwd'];
	$n_pwd = $_POST['n_pwd'];
	$stdid = $_SESSION['stdid'];
		if(isset($_SESSION['stdid'])){
				if (empty($o_pwd) OR empty($n_pwd)) {
					?>
<div class="text-shadow">
					<?php
	  echo "欄位不可空白。<br><br>(2秒後自動返回)";
	  ?></div>

	  <?php
	  echo "<meta http-equiv=REFRESH CONTENT=2;url=change.php>"
	  ;
	  
	}else{	 

	 $sql="SELECT * from stddata where std_id='".$stdid."' and std_pwd='".$o_pwd."'";

	  $result = $mydb->query($sql);	//執行query指令，查詢使用者身分
	  if($result->num_rows > 0){    //帳號與密碼正確
					 $sql = "UPDATE stddata SET std_pwd='".$n_pwd."' WHERE std_pwd='".$o_pwd."'and std_id='".$stdid."'";
						if($mydb->query($sql) == TRUE){
   						 echo "資料修改成功。";
   						 echo "<meta http-equiv=REFRESH CONTENT=0;url=main.php>";

								}else{
 							 echo "資料修改失敗。";
 							 echo "<meta http-equiv=REFRESH CONTENT=2;url=main.php>";
							}
						}else{	
?>

<div class="text-shadow">
<?php
						 echo "
						 o(╥﹏╥)o密碼錯誤";
   				 echo "<meta http-equiv=REFRESH CONTENT=2;url=change.php>";

			}

	  }
	  ?></div>
	  <?php
	}else{
$mydb->close();
		 echo '請登入在後再來';
		 echo "<meta http-equiv=REFRESH CONTENT=2;url=index.php>";
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