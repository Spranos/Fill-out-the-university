<?php 
session_start();
//將session清空
unset($_SESSION['stdid']);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
?>