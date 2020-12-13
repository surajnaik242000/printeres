<?php
function chek($arr)
{
foreach ($arr as $key) 
        {
        if(empty($_POST[$key]))
        {
        print("$key is empty");
        $flag=0;
        exit();
        }
        }
}
 ?>