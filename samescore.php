<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
    <style>
.text-shadow {
    font-size: 71px;
    color: #ffcd8f;
    font-family:DFKai-sb;
}
.box1{
  font-size:35px;
    color:#FFF9A5;
    font-family:DFKai-sb;
    margin-top:-100px; 
  }
  .box2{
  font-size:50px;
    color:#FFC4C4;
    font-family:DFKai-sb;
    margin-top:80px; 
  }
   .box3{
  font-size:30px;
    color:#FFffff;
    font-family:DFKai-sb;
  }
  </style>
}
</head>
<body background="image/10.jpg">

  <?php   
  session_start(); 
  require_once "mysqli_connect.inc.php";
  $stdid  = $_SESSION['stdid'];
  $score = $_GET['std_score'];
  if(isset($_SESSION['stdid'])){


//從資料庫搜尋與自己的分數同分的學生所填寫的志願
$sql2="SELECT * from 108wish as w,107data as d,stddata as s where s.std_id=w.std_id and w.dept_id=d.dept_id and s.std_score='".$score."' order by  s.std_id";
          $result2 = $mydb->query($sql2); 
          $fake='-1';
          ?>  
          <div class="text-shadow">
          <?php echo "您的級分".$score."分<p>"; ?>
          </div>
<input type="button" value="回上一頁" onclick="location.href='main.php'"class="button"style="width:100px;height:25px;font-size:15px;position:relative; left:450px; top: -110px;"></input><p>'>
          
            <div class="box1">
          <?php
          echo "與您同分的學生所填的學校";?> </div>
          <?php
          //如果查到自己的志願不顯示
        while($row2 = $result2->fetch_array()){
           if($row2['std_id']==$stdid){

          //判斷是否為同一個人的志願
        }elseif($row2['std_id']!=$fake){
            $fake=$row2['std_id'];  ?>


            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <div id="target" class="animated fadeIn">
            <div class="box2">
        <?php    echo $row2['std_id'].$row2['std_name'].'<p>';  ?>
            </div>
            </div>


            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <div id="target" class="animated fadeInUp">
            <div class="box3">
        <?php
            echo $row2['school_name'].$row2['dept_name'].$row2['dept_score']."分<p>";?>
            </div>
          



            <div class="box3">
             <?php 
          }else{
             echo $row2['school_name'].$row2['dept_name'].$row2['dept_score']."分<p>";
          }  
        }        
       }
 ?>
 </div>
 <div style="position:fixed;width:450px;height:450px;margin-top:-1100px;margin-left:1000px;"  >
  <img src="image/13.gif" width="100%" height="100%"></div>

  <div style="position:fixed;width:450px;height:450px;margin-top:-1100px;margin-left:1400px;"  >
  <img src="image/12.gif" width="100%" height="100%"></div>
  
</body>
</html>
