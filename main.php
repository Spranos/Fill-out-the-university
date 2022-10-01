
  <?php
  session_start(); 
  $count=0;
  require_once "mysqli_connect.inc.php";
  if(isset($_SESSION['stdid'])){
    $stdid = $_SESSION['stdid'];
   
    //==================================================================總管理者
    if(substr($stdid,0,3)=="adm"){
      ?>
         <style type="text/css">
.a007 {
  color: rgba(255,255,255,1);
  transition: all 0.5s;
  position: relative;
  overflow: hidden;
  border: 1px solid rgba(0,0,0,0.5);
  }
  .b1{
    color:#0000AA;
    font-size:50px;
  }
  .div {
    background-color: lightgrey;
    width: 300px;
    border: 25px solid green;
    padding: 25px;
    margin: 25px;
}
 .hr{
height:3pt;
background-color:#33FF33;
 }

/* 头部样式 */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* 导航条 */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* 导航链接 */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* 链接 - 修改颜色 */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
/* 头部样式 */
.header {
  background-color: #f1f1f1;
  padding: 2px;
  text-align: center;
  font-size:32px;
  color :#0000FF;
}

.div-gradient
{
background: linear-gradient(171deg, rgba(170, 218, 125, 1)50%, rgba(171, 255, 129, 0.8)53%); 
background: -moz-linear-gradient(171deg, rgba(170, 218, 125, 1)50%, rgba(171, 255, 129, 0.8)53%); 
background: -webkit-linear-gradient(171deg, rgba(170, 218, 125, 1)50%, rgba(171, 255, 129, 0.8)53%); 
background: -o-linear-gradient(171deg, rgba(170, 218, 125, 1)50%, rgba(171, 255, 129, 0.8)53%); 
}
.div_text_shadow
{ 
text-shadow: 7px 9px 6px #333333; 
}
.D3{
    background:red;
    position:relative;
    animation:TestMove3 2s infinite alternate; /*IE*/
    -moz-animation:TestMove3 2s infinite alternate; /*FireFox*/
    -webkit-animation:TestMove3 2s infinite alternate; /*Chrome, Safari*/
}
@keyframes TestMove3{
    from {background-color:#AAAAAA;}
    to {background-color:#D28EFF;}
}
@-moz-keyframes TestMove3{
    from {background-color:#AAAAAA;}
    to {background-color:#D28EFF;}
}
@-webkit-keyframes TestMove3{
    from {background-color:#AAAAAA;}
    to {background-color:#D28EFF;}
}
</style>
<div class =D3>
  <div class="header">
<h1><marquee direction="right" height="100" scrollamount="35" behavior="alternate"><span style="font-family:DFKai-sb;">中壢高商二年級各班班級已填寫志願學生</span></marquee></h1>
  </div>
  <form action="change.php" method="post">
   <div class="topnav">
    <input type="button" value="登出" onclick="location.href='index.php'"class="button">
    <input type="submit" name="send" value="修改密碼"class="button">
   </div>

   <?php
    //找出導師的學生所填的志願
   echo'<div style="border-width:10px;border-style:dashed;border-color:#77FFEE;padding:5px;">';
       //從資料庫找出所有的學校
        $sql2="SELECT * from 108wish as w,107data as d,stddata as s where s.std_id=w.std_id and w.dept_id=d.dept_id order by d.dept_id,d.school_name desc ";
          $result2 = $mydb->query($sql2); 
          $fake='-1';
        while($row2 = $result2->fetch_array()){
            //學校名子相同就不印出來
                 if($row2['school_name']!=$fake){ 
                  //再用查到的學校去查詢幾個人填這所學校
                   $sql1="SELECT count(*) from 108wish as w,107data as d,stddata as s where s.std_id=w.std_id and w.dept_id=d.dept_id and d.school_name='".$row2['school_name']."'";
          $result1 = $mydb->query($sql1); 
          $row1 = $result1->fetch_array();
        $fake=$row2['school_name'];
        echo '<div style ="div">';
          echo'<div class ="hr">';
           echo "<p>";
          echo '</div>';
         echo'<div class="div_text_shadow">'; 
        echo '<div style =color:#0000FF;text-align:center;font-family:DFKai-sb;font-size:24px>';
         echo "<h1>".$row2['school_name']."-共".$row1[0].'人次填選</h1><p>';
        echo '</div>'; 
         echo '</div>'; 
      }
        echo '<div style =text-align:center;font-size:20px;font-style:italic;>';
        //                          學號            姓名                            校系名稱
         echo '&nbsp;&nbsp'.$row2['std_id'].$row2['std_name'].'&nbsp;&nbsp'.$row2['dept_name'].'<p>';
        echo '</div>';

         } 
       
         echo '</div>';
         echo '</div>';

     
       
    
  //================================================================================導師
  }elseif(substr($stdid,0,3)=="tea"){
      ?>
      <button class="button"onclick="location.href='index.php'"style="vertical-align:middle"><span>登出</span></button>
     <button class="button"onclick="location.href='change.php'"style="vertical-align:middle"><span>修改密碼</span></button>
      <body bgcolor="#D6F1FF">
      <?php
      //確認導師的科系
       $sql="SELECT std_name from stddata where std_id='".$stdid."'";
       $result = $mydb->query($sql);  
       $row = $result->fetch_array();
       $dept =array('','商','國','','資');
       //輸出老師所帶的班級及導師名子
       echo '<div style="font-size:48px;text-align:center;font-weight:bold;font-family:Microsoft JhengHei;color:#5C0BFF">';
     echo $dept[(int)substr($stdid,5,1)] . "二" . substr($stdid,6,1)." ".$row[0];
      echo '</div>';
      echo '<div style="font-size:28px;text-align:center;font-weight:bold;font-family:Microsoft JhengHei;">';
      echo "<br>導師您好，左方是貴班學生填寫的志願，右方您可與學生討論志願事項";
      echo '</div>';
      ?>
<?php   //擷取導師帳號
          $class=substr($stdid,3,4);
          //進去資料庫使用擷取的資料判斷是否有學生未填寫志願
         $sql3 = "SELECT std_name from stddata where std_id not in(select std_id from 108wish) and std_id like '".$class."%'";
         $result3 = $mydb->query($sql3); 
         $numrows = $result3->num_rows;
         if($numrows > 0){         
          echo '<span style="font-size:20px;font-family:Microsoft JhengHei;">';
          echo '未填同學:'; 
          echo '</span>';
         while($row3 = $result3->fetch_array()){
          echo '<span style="font-size:28px;font-family:Microsoft JhengHei;color:#FF0707;font-weight:bold;">';
                   echo $row3[0].'-';
                   echo '</span>';
         }
        }else{
          echo '<span style="font-size:30px;font-family:Microsoft JhengHei;color:#03ad09;font-weight:bold;">';
          echo '全班已填報完成';
        echo '</span>';
        }
 ?>
  </div>
</body>
</html>
      <?php
   //顯示該班所有學生志願
    $class = substr($stdid,3,4);//取下班級代號
    //用班級代號查詢本班學生志願
    $sql="SELECT w.std_id, d.dept_id, d.school_name, d.dept_name,s.std_name,d.dept_score,s.std_score
          FROM   108wish as w, 107data as d ,stddata as s
          WHERE  w.dept_id = d.dept_id  and  w.std_id = s.std_id and w.std_id LIKE '".$class."%'
          Order by w.std_id, d.dept_id";
    $result = $mydb->query($sql); 
    $numrows = $result->num_rows;
    $fake='-1';
    echo '<p><br>'; 
    if($numrows > 0){ 
      while($row = $result->fetch_array()){  
        //判斷是否為同一筆
       if($row[0]!=$fake){    
        ?>  <div class="bigbox">
        <?php 
        echo "<hr id='hr1'>";
        $std=$row[0];
        $fake=$row[0];
?>  <div class="box12">
<?php 
  //找出對應的訊息
    $sql2="SELECT msg,date,ID FROM suggest WHERE std_id ='".$std."'order by pkey";
    $result2 = $mydb->query($sql2); 
    $numrows2 = $result2->num_rows;
    if($numrows2 > 0){    
      while($row2 = $result2->fetch_array()){ 
        if($row2[2]=='1'){
          echo '<div style="color:#0008FF;font-weight:bold;">';
          echo '學生:'.$row2[0];
          echo '</div>';

          echo '<div style="text-align:right;">';
          echo $row2[1]."<p><hr>";
          echo '</div>';
           
        }else{
           echo '<div style="color:#3B8A01;">';
          echo '導師:'.$row2[0];
          echo '</div>';

          echo '<div style="text-align:right;">';
          echo $row2[1]."<p><hr>";
          echo '</div>';
           
        }      
    }
  }else{
    echo '<div style="color:#FF902B;">';
      echo '目前尚無問題或意見';
      echo '</div>';
    }
?>
      <form action="suggest.php" method="post">
        <input type="hidden" name="std" value=<?php echo $std ?>>
        <input type="hidden" name="ID" value="2">
        對話:<input type="text" name="msg">

        <input type="submit" name="send" value="送出">
      </form> 
<?php 
 ?>
       </div>
        <?php

        //std_id, std_name(std_score)------
?> 
        <?php //學號.姓名
    echo '<span class="style2">';
        echo $row[0]." ".$row[4];
        //       分數
        echo "(".$row[6].")";
        echo '</span>';
        //---------------------------------
       }  
       ?> 
       <blockquote>
          <?php
        echo "<p>";
        echo '<span style="font-size:24px;font-family:Microsoft JhengHei;text-indent:10px;">';
        //所填寫的志願
        echo $row[1]." ".$row[2]." ".$row[3]." ".$row[5]."<p>";
          echo '</span>';
?> </blockquote>
        <?php
   }  
 }   
?> </div>
   <?php 
  }else{

  //==================================================================================學生
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <title>專題作品</title>
        <style>

  .box4{
    position:absolute;
    top:0px;
    right:670px;
    font-size:35px;
    position:absolute;
    font-family:DFKai-sb;
    color:#FFFFFF;
      }
  .box1{
    position:absolute;
    top:-245px;
    right:500px;
      }
  .box9{
    position:absolute;
    height:100px;
    width: 100px;
  }
    
    .box3{
    position:fixed;
    width:800px;
    height: 250px;
    margin-top: -10px;
    float:left;
  }
  .box99{
    position:absolute;
    top:33px;
    left:490px;
  }
    </style>
      </head>
      <body background="image/10.jpg">
  }
>
        
        <div class="box4">
導師建議     
  </div>
     
     <div class="box1">

    <?php 
    
    //找出對應的訊息
    $sql="SELECT msg,date,ID
          FROM   suggest 
          WHERE  std_id = '".$stdid."'";
    $result = $mydb->query($sql); 
    $numrows = $result->num_rows;
    if($numrows > 0){    
      while($row = $result->fetch_array()){
        if($row[2]=='1'){
        echo '<div style="color:#0008FF;font-weight:bold;">';
          echo '學生:'.$row[0];
          echo '</div>';

          echo '<div style="text-align:right;">';
          echo $row[1]."<br><hr>";
          echo '</div>';
           
        }else{
           echo '<div style="color:#3B8A01;">';
          echo '導師:'.$row[0];
          echo '</div>';

          echo '<div style="text-align:right;">';
          echo $row[1]."<br><hr>";
          echo '</div>';
           
        }      
      }
    }else{
      echo '目前尚無訊息<hr>';
    }

     ?>

      <form action="suggest.php" method="post">
        <input type="hidden" name="ID" value="1">
        回復:<input type="text" name="msg">

        <input type="submit" name="send" value="送出">
      </form> 
      <hr>
     </div>
   
      <?php
      //找出登入學生資料
   $sql="SELECT std_name,std_score from stddata where std_id='".$stdid."'"; 
    $result = $mydb->query($sql); 
    $row = $result->fetch_array();
 echo '<div style="font-size:35px;
                   font-family:DFKai-sb;color:#FFFFFF">';
    echo  $stdid.$row[0].$row[1]."級分";
    echo '</div>';

//查出學生分數並以此查詢
$sql="SELECT std_score
          FROM   stddata
          WHERE  std_id = '".$stdid."'";
          $result = $mydb->query($sql); 
          $row = $result->fetch_array();  ?>

           <div class="box99">
           <?php  echo '<a href="samescore.php?std_score='.$row['std_score'].'" class="class3" ">   
                同分對手</a>';  ?></div>

  <?php
    //列出登入學生所選志願
    $sql="SELECT w.pkey, d.dept_id, d.school_name, d.dept_name
          FROM   108wish as w, 107data as d 
          WHERE  w.dept_id = d.dept_id  and  w.std_id = '".$stdid."'";
           
    $result = $mydb->query($sql); 
    $numrows = $result->num_rows;
    if($numrows > 0){    
      while($row = $result->fetch_array()){
        $wish=$row[1]." ".$row[2]." ".$row[3];



            echo '</div>';
            echo '<div style="font-size:24px;
                   font-family:DFKai-sb;color:#FCF4A1">';

            
                   //連結討論區
             echo '<a href="school_fd.php?deptid='.$row['dept_id'].'" class="class2">';
                echo $wish."</a>";   
                   


             echo '<a href="dept_chooser.php?deptid='.$row['dept_id'].'">
                      <input type="button" value="討論區" style="border:1px #666 solid; border-radius:5px; cursor:pointer; font-size:10px;"></a>'; 
                    //連結DELETE
        echo '<a href="delete.php?pkey='.$row[0].'">
        <input type="button" value="刪除" style="border:1px #666 solid; border-radius:5px; cursor:pointer; font-size:10px;"></a>'; 
             echo '</div>';
        echo '<p>';
      }
    }else{
      echo "尚未填報志願。<p>";
    }
    if($numrows == 3){
                  echo '<div style="font-size:20px;
                   font-family:DFKai-sb;color:#Ffffff">';
      echo "※志願數已滿。如果要繼續填報，請刪除已填志願。";
                     echo '</div>';
                     ?>
                       <form action="sss1.php" method="post">   

  <input type="button" value="登出" onclick="location.href='sss2.php'" style="width:100px;height:25px;font-size:15px;position:relative; left:245px; top: 20px; ">

  <input type="submit" name="send" value="修改密碼" style="width:100px;height:25px;font-size:15px;position:relative;top: 18px; left:-70px;" >
  </form> 
  <?php
    }else{
            ?>
        <form action="insert1.php" method="post">
       <div style="font-size:24px;
                   font-family:DFKai-sb;color:#CCCCCC">
        校系志願代碼:
       <input type="text" name="deptid">
        <input type="submit" name="send" value="送出">
        </form> </div>

  <form action="sss1.php" method="post">   

  <input type="button" value="登出" onclick="location.href='sss2.php'" style="width:100px;height:25px;font-size:15px;position:relative; left:245px; top: 20px; ">

  <input type="submit" name="send" value="修改密碼" style="width:100px;height:25px;font-size:15px;position:relative;top: 18px; left:-70px;" >
  </form> 
<?php  
      //學生志願加正負三分判斷推薦志願
            $point="SELECT stddata.std_score FROM stddata where std_id='".$stdid."'";
             $result = $mydb->query($point); 
            $row = $result->fetch_array();
            $point=(int)$row[0];
            $add=(int)$point+(int)'3';
            $kill=(int)$point-(int)'3';

           echo '<div style= "font-size:35px;position:absolute;right:630px;top:300px;font-family:DFKai-sb;color:#FFFFFF">';
            ECHO '推薦的志願<P>';
            echo '</div>';
            echo '<div style= "width:800px;
  height:170px;
  overflow:auto;
  right: 10px;
  top:380px;
  position: absolute;
  float: right;
filter: Chroma(Color=green);
scrollbar-face-color: green;
scrollbar-track-color: green;
scrollbar-3dlight-color: green;
scrollbar-darkshadow-color: green;
scrollbar-arrow-color: #ffffff;
scrollbar-shadow-color: green;
scrollbar-highlight-color: green;">';
                    //用正負三分來查詢推薦志願
                    $sql = "SELECT * FROM 107data where dept_score between '".$kill."' and '".$add."' order by pkey";
                   $result = $mydb->query($sql); 
                   while($row = $result->fetch_array()){ 
                   echo '<a href="insert.php?deptid='.$row['dept_id'].'">';
                      
                  echo $row['dept_id']."".$row['school_name']." ".$row['dept_name']." ".$row['dept_score']."級分</a>";
                  echo '<a href="dept_chooser.php?deptid='.$row['dept_id'].'">
                      <input type="button" value="討論區" style="border:1px #666 solid; border-radius:5px; cursor:pointer; font-size:10px;"></a><p>'; 
                        }
            echo '</div>'; 
             
     ?>
    
     <div style="width:500px;height:400px;margin-top:350px;margin-left: 1100px;"  >
       <img src="image/8.gif" width="100%" height="100%" >
    </div> 

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
     <style type="text/css">
      .box10{
  width:900px;
  height:600px;
  overflow:auto;
  left: 0px;
  position: absolute;
  bottom: 0px;
  float: right;
filter: Chroma(Color=green);
scrollbar-face-color: green;
scrollbar-track-color: green;
scrollbar-3dlight-color: green;
scrollbar-darkshadow-color: green;
scrollbar-arrow-color: #ffffff;
scrollbar-shadow-color: green;
scrollbar-highlight-color: green;
}
        </style>
  </head>
  <body>
    <?php 
            echo '<div style="font-size:35px;position:absolute;
                  left:0px; top:300px; font-family:DFKai-sb;color:#FFFFFF">';
            ECHO '全部的志願<P>';
            echo '</div>';
            ?>
            
             <div class="box10">
            <?php
            //所有學校志願
      $sql="SELECT * FROM 107data order by dept_id";
      $result = $mydb->query($sql); 
      while($row = $result->fetch_array()){ 
             ?>
        <style type="text/css">
               a:link{
              text-decoration:none;
              font-size:22px;
              color:#FFA36E;
              font-family:DFKai-sb;

          }
               a:visited {
              color:#FCDEC2;
                          }

               a:hover {
              text-decoration:none;
               background-color:#003377;
               color:#ffffff;
               font-size:30px;
                   font-family:DFKai-sb;

          }
         a.class2 {color:#FFF7A7;}
         a.class2:link {text-decoration: none; color:#FFEB94;font-size:28px;
}
         a.class2:visited {text-decoration: none; color:#FFEB94;}
         a.class2:hover {text-decoration:none;
                        background-color:#003377;
               color:#ffffff;
               font-size:30px;
                   font-family:DFKai-sb;
}
         a.class2:active {text-decoration:none; color: #000;}
        

         a.class3 {color:#FFFFFF;}
         a.class3:link   {font-size: 25px;background: #4E84AB;border-style:solid;border-color:#A7A7A7; }
         a.class3:visited{font-size: 25px;background: #4E84AB;border-style:solid;border-color:#A7A7A7; }
         a.class3:hover  {font-size: 25px;background: #4E84AB;border-style:solid;border-color:#A7A7A7; }
         a.class3:active {font-size: 25px;background: #4E84AB;border-style:solid;border-color:#A7A7A7; }

         
               </style>
              <?php       
                //所有學校志願的討論區按鈕以及填選超連結       
                echo '<a href="insert.php?deptid='.$row['dept_id'].'">';
                echo $row['dept_id']." ".$row['school_name']." ".$row['dept_name']." ".$row['dept_score']."級分</a>";

                echo '<a href="dept_chooser.php?deptid='.$row['dept_id'].'">
                      <input type="button" value="討論區" style="border:1px #666 solid; border-radius:5px; cursor:pointer; font-size:10px;"></a><p>'; 
                 }
                   }
              }
              ?>
  </body>
  </html>
 
      </body>
      </html>
  <?php
      //----------------------------------
}else{
  echo "要先登入喔。<br><br>(2秒後自動返回)";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
 }
?>
<style>
.style1{
  font-size:30px;
}
.style2{
  font-family:Microsoft JhengHei;
  font-size:30px;
  color:#6E00EF;
}    
 .box1{
  overflow:scroll;
    position:absolute;
    width:750px;
    height:210px;
    margin-top:300px;
    margin-right:-450px;
    display:inline-block;
    font-family:DFKai-sb;
    font-size:20px;
    background:#EBEBEB;
  }
   .box2{

    position:absolute;
    font-size:40px;
    width:500px;
    height:400px;
    margin-top:180px;
    margin-left:1025px;
    border:solid 0px;
    background: #ffffff;
    display:inline-block;
  }
   .box12{
    overflow:auto;
    position:relative;
    border-radius:10px;
    float:right;
    width:50%;
    height:150px;
    border:solid 1px #343EFF;
    background:#FEE0BA;
    margin-bottom:5px;
    font-size: 20px;
    color:#000000;
    font-weight:bold;
  }
  #hr1{
    height:3px;
    background-color:#0042FF;
  }
  .bigbox{
    border:solid 0px;
    width:100%;
    height:149px;
    margin-top:50px;
  }
  #hr1{
    height:3px;
    background-color:#0042FF;
  }
  .button {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 12px 14px;
    border: 4px solid #1d51ab;
    border-radius: 84px;
    background: #87c1fa;
    background: -webkit-gradient(linear, left top, left bottom, from(#87c1fa), to(#0050db));
    background: -moz-linear-gradient(top, #87c1fa, #0050db);
    background: linear-gradient(to bottom, #87c1fa, #0050db);
    -webkit-box-shadow: #2a8aff 0px 0px 40px 0px;
    -moz-box-shadow: #2a8aff 0px 0px 40px 0px;
    box-shadow: #2a8aff 0px 0px 40px 0px;
    text-shadow: #3c5b91 1px 0px 10px;
    font: normal normal bold 22px impact;
    color: #ffffff;
    text-decoration: none;
}
.button:hover,
.button:focus {
    border: 4px solid #2e82ff;
    background: #a2e8ff;
    background: -webkit-gradient(linear, left top, left bottom, from(#a2e8ff), to(#0060ff));
    background: -moz-linear-gradient(top, #a2e8ff, #0060ff);
    background: linear-gradient(to bottom, #a2e8ff, #0060ff);
    color: #ffffff;
    text-decoration: none;
}
.button:active {
    background: #517496;
    background: -webkit-gradient(linear, left top, left bottom, from(#517496), to(#0050db));
    background: -moz-linear-gradient(top, #517496, #0050db);
    background: linear-gradient(to bottom, #517496, #0050db);
}
       <style type="text/css">
               a:link{
              text-decoration:none;
              font-size:22px;
              color:#FFA36E;
              font-family:DFKai-sb;

          }
               a:visited {
              color:#FCDEC2;
                          }

               a:hover {
              text-decoration:none;
               background-color:#003377;
               color:#ffffff;
               font-size:30px;
                   font-family:DFKai-sb;

          }
         a.class2 {color:#FFF7A7;}
         a.class2:link {text-decoration: none; color:#FFEB94;font-size:28px;
}
         a.class2:visited {text-decoration: none; color:#FFEB94;}
         a.class2:hover {text-decoration:none;
                        background-color:#003377;
               color:#ffffff;
               font-size:30px;
                   font-family:DFKai-sb;
}
         a.class2:active {text-decoration:none; color: #000;}
        

         a.class3 {color:#FFFFFF;}
         a.class3:link   {font-size: 25px;background: #4E84AB;border-style:solid;border-color:#A7A7A7; }
         a.class3:visited{font-size: 25px;background: #4E84AB;border-style:solid;border-color:#A7A7A7; }
         a.class3:hover  {font-size: 25px;background: #4E84AB;border-style:solid;border-color:#A7A7A7; }
         a.class3:active {font-size: 25px;background: #4E84AB;border-style:solid;border-color:#A7A7A7; }

         
               </style>
</style>
</body>
</html>