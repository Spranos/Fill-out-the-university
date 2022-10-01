<?php
session_start();
require_once "mysqli_connect.inc.php";

if(isset($_SESSION['stdid']))
{
	$stdid  = $_SESSION['stdid'];
	$deptid = $_GET['deptid'];
	//判斷是否有填寫過志願
	    $sql="select w.dept_id from 108wish as w,stddata as s where w.std_id=s.std_id and w.dept_id = '".$deptid."'and s.std_id='".$stdid."'";
	$result = $mydb->query($sql);	
	if($result->num_rows > 0){  ?>
                      <body background="image/10.jpg">
				<?php	echo"<div class=text-shadow>";
			echo "已經填選過此志願，請勿重複填選";
					echo '<meta http-equiv=REFRESH CONTENT=2;url=main.php>';
						  echo"</div>";  ?>

<?php	}else{


	//確認代碼正確
    $sql="select * from 107data where dept_id = '".$deptid."'";
	$result = $mydb->query($sql);	//執行query指令，到資料庫進行查詢。
	if($result->num_rows > 0){
		$sql = "INSERT INTO 108wish (std_id, dept_id) VALUES ('".$stdid."', '".$deptid."')";
		if($mydb->query($sql) == TRUE){
			//echo "新增志願成功。";
			$mydb->close();
			echo '<meta http-equiv=REFRESH CONTENT=0;url=main.php>';
		}else{
			echo "新增志願失敗。";
		}
	}else{
			?>"<div class=text-shadow>";
<?php					echo "志願代碼錯誤，請查明後重新填報。";
		echo '<meta http-equiv=REFRESH CONTENT=2;url=main.php>';
		
	  echo "<meta http-equiv=REFRESH CONTENT=2;url=main.php>";
	 
	  ?>"</div>";
<?php
	}
}
}else{
	header("location:index.php");
    exit();
}
?></body>
<style>
.text-shadow {
    font-size: 108px;
    color:#ba90cf;
    text-shadow: 3px 3px 1px rgb(163,163,163);
    font-family: 'Comic Sans MS', cursive, sans-serif;
	text-align:center;
	margin-top:300px;
    }
</style>