<?php 
require_once "mysqli_connect.inc.php";

$pkey  = $_GET['pkey'];

$sql = "DELETE FROM 108wish WHERE pkey=".$pkey;

if($mydb->query($sql) == TRUE){
    echo "志願刪除成功。";
}else{
    echo "志願刪除失敗。";
}
echo '<meta http-equiv=REFRESH CONTENT=0;url=main.php>';
$mydb->close();
?>