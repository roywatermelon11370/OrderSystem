<?php 
    session_start();
    unset($_SESSION["memberName"]);
    unset($_SESSION["loginMember"]);
    unset($_SESSION["memberLevel"]);
    header("location: index.html");
?>