<?php
require('define.php');
$query_1 = " SELECT username,id,email FROM  user_details WHERE username='".$_SESSION['username']."';"
$result_1 = mysqli_query($query_1);
?>
