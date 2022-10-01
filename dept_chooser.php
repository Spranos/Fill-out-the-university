
<?php
date_default_timezone_set("Asia/Shanghai");
	session_start(); 
	require_once "mysqli_connect.inc.php";
  if(isset($_SESSION['stdid'])){
    $stdid  = $_SESSION['stdid'];
    $deptid = $_GET['deptid']; //接收main.php傳來的deptid
    $_SESSION['deptid']=$deptid;
    //列出學校名稱
    $sql="SELECT w.std_id, d.dept_id, d.school_name, d.dept_name, s.std_name, d.dept_score, s.std_score, s.std_id
          FROM 108wish as w, 107data as d, stddata as s
          WHERE  w.dept_id = d.dept_id and w.std_id = s.std_id and d.dept_id = '".$deptid."' 
          Order by s.std_score desc";
      $result = $mydb->query($sql); 
      $numrows = $result->num_rows;
      $fake="-1";
      while($row = $result->fetch_array()){
        if($row[1]!=$fake){
                echo "<h1>".$deptid." ".$row[2]." ".$row[3]."</h1><hr>";
                $fake=$row[1];
        }
      }
  }else{
    echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
  }

?>
<!DOCTYPE html>
<html>
<head>
 <title>討論區</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<br><br><br><br>
<div class="container">
 <h3 class="text-center">校系留言板</h3>
<input type="button" value="回主頁面" onclick="location.href='main.php'"class="button">
 <hr>
<?php
        //找出學校的訊息並列出
      $sql = "SELECT msg,date FROM `msg` where dept_id='".$deptid."' order by pkey";
      $result = $mydb->query($sql); 
      $numrows = $result->num_rows;
      if($numrows > 0 ){
              while($row = $result->fetch_array())
        echo $row[0].'<div style="float:right;">'.$row[1].'</div><br>';
      }else{
      echo '想當第一個討論這學校的人嗎?';  
      }
?>        
 <hr>
 <p class="pull-right">以匿名的身份留言</p>
 <h4>新增留言</h4>

 <form action="msg-add.php" method="post">
 <textarea name="msg" class="form-control"></textarea>
 <br>
 <input type="submit" name="send" value="送出" class="btn btn-primary btn-sm pull-right">
 <input type="reset" name="send" value="清空" class="btn btn-primary btn-sm pull-left">
 </form>
</div>
</body>
</html>
<style>
.style1{
  text-align:right;
}
.style2{
  font-size:24px;
  color:#036FDC;
}

</style>