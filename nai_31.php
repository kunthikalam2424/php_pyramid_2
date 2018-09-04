<head>
<title>Nai</title></head>
<body bgcolor=>
<table width=100% bgcolor=pink><tr><td>
<span style="font-size:30px;">Hello</span>
</td></tr></table>
<table width=100% bgcolor=#dddddd><tr>
<td><a href='../myweb.php'>home</a></td>
<td><a href='../multi_form.php'>multiple</a></td>
<td><a href='../friend.php'>friend</a></td>
<td><a href='../me.php'>about us</a></td>
<td><a href="../logout.php">logout</a></td>
</tr></table>
<body>
<?php
 session_start();
 if(!isset($_SESSION["pass"]) ||$_SESSION["pass"] != "yes") {
 header('Location: ../login_page.php');exit;
 }

 include ("bb.php");?>
<?php
for($NaiC=1;$naiC<=5;$naiC++) {

	for($naiR=$naiC;$naiR<=5;$naiR++) {
		echo($naiC);	
	}

	for($naiR=2;$naiR<=$naiC;$naiR++) {
		echo("..");
	}

	for($naiR=0;$naiR<=5-$naiC;$naiR++) {
		echo("*");	
	}

	echo "<br/>";
}
include ('myweb_footer.php');
?>