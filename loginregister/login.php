<?php 
session_start();
require_once("connMysql.php");
if(isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"]!="")) {
    if($_SESSION["memberLevel"]=="deliver"){
		header("Location: ../options/deliver.php");
    }
    else if($_SESSION["memberLevel"]=="store"){
		header("location: ../options/store.php");
    }
    else if($_SESSION["memberLevel"]=="customer"){
        header("location: ../dishes/main.php");
    }
}

if(isset($_POST["username"]) && isset($_POST["passwd"])){
	//繫結登入會員資料
	$query_RecLogin = "SELECT username, passwd, level FROM profile WHERE username=?";
	$stmt=$db_link->prepare($query_RecLogin);
	$stmt->bind_param("s", $_POST["username"]);
  	$stmt->execute();
	//取出帳號密碼的值綁定結果
	$stmt->bind_result($username, $passwd, $level);	
	$stmt->fetch();
	$stmt->close();
	//比對密碼，若登入成功則呈現登入狀態
	if(password_verify($_POST["passwd"],$passwd)){
		//設定登入者的名稱及等級
		$_SESSION["loginMember"]=$username;
		$_SESSION["memberLevel"]=$level;
		//使用Cookie記錄登入資料
		if(isset($_POST["rememberme"])&&($_POST["rememberme"]=="true")){
			setcookie("remUser", $_POST["username"], time()+365*24*60);
			setcookie("remPass", $_POST["passwd"], time()+365*24*60);
    	}
    	else{
			if(isset($_COOKIE["remUser"])){
				setcookie("remUser", $_POST["username"], time()-100);
				setcookie("remPass", $_POST["passwd"], time()-100);
			}
		}
		if($_SESSION["memberLevel"]=="customer"){
			header("Location: ../dishes/main.php");
    	}
    	else if($_SESSION["memberLevel"]=="deliver"){
			header("Location: ../options/deliver.php");	
    	}
    	else if($_SESSION["memberLevel"]=="store") {
      		header("Location: ../options/store.php");	
    	}

  }
  else{
		header("Location: loginpage.php?errMsg=1");
	}
}
?>