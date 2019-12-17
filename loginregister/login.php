<?php 
require_once("connMysql.php");
session_start();
if(isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"]!="")) {
    if($_SESSION["memberQuantity"]=="deliver"){
		header("Location: ../options/deliver.php");
    }
    else if($_SESSION["memberQuantity"]=="store"){
		header("location: ../options/store.php");
    }
    else {
        header("location: ../dishes/main.php")
    }
}


?>