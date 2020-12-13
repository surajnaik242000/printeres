<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        echo " no one is not logged in ";
        exit();
    }
    if(!$_SESSION['username']=='steve')
    {
    	echo " admin not logged in ";
    	exit();
    }
?>