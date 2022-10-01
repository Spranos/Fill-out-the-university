<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    .text-shadow {
    font-size: 55px;
    color: #ffcd8f;
    font-family:DFKai-sb;
}
  </style>
</head>
<body background="image/10.jpg">
  <?php
  session_start(); 
  require_once "mysqli_connect.inc.php";
  if(isset($_SESSION['stdid'])){
    $stdid  = $_SESSION['stdid'];
    $deptid = $_GET['deptid']; //接收main.php傳來的deptid
    $_SESSION['deptid']=$deptid;

    //到108wish,107data,stddata去撈出已填報deptid志願代碼的資料
    $sql="SELECT w.std_id, d.dept_id, d.school_name, d.dept_name, s.std_name, d.dept_score, s.std_score, s.std_id
          FROM 108wish as w, 107data as d, stddata as s
          WHERE  w.dept_id = d.dept_id and w.std_id = s.std_id and d.dept_id = '".$deptid."' 
          Order by s.std_score desc";
      $result = $mydb->query($sql); 
      $numrows = $result->num_rows;
      $fake="-1";
      //避免重複印出學校
      while($row = $result->fetch_array()){
        if($row[1]!=$fake){  ?>
               <div class="text-shadow">
              <?php  
              echo $deptid.$row[2].$row[3].$row[5]."<hr>";
              echo '<input type ="button" onclick="history.back()" value="回上一頁" style=""></input>';
                $fake=$row[1];
        }?></div>
         <?php
         //如果找到了自己的排名則用紅色顯示
        if($row[7]==$stdid){
           echo '<div style="margin-bottom:15px;margin-top:15px;color:#F48E8E;font-size:40px;font-family:DFKai-sb;">';
            echo $row[7].$row[4]."(".$row[6].")";
             echo '</div>';
        }else{
        //對手則用白色
        echo '<span style="font-size:20px;font-family:Microsoft JhengHei;color:#FFFFFF;">';
           echo $row[7]." ".$row[4]."(".$row[6].")<p>";
          echo '</span>';
          
      }
     
  } 
}else{
    echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
  }
?>
<div style="width:600px;height:500px;margin-top:250px;margin-left: 400px;"  >
 <img src="image/14.gif" width="100%" height="100%">
</div>

<div style="width:600px;height:500px;margin-top:-500px;margin-left: 1200px;"  >
 <img src="image/15.gif" width="100%" height="100%">
</div>

</body>
</html>