<?php
session_start();
if($_POST["u"] ==  "nn" && $_POST["p"] == "nn") { 
$_SESSION["pass"] = "yes"; 
  header('Location: myweb.php');

}else { 
   header('Location: login_page.php');
}
?>