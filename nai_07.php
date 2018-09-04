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
include ("bb.php");

for($naiC=1;$naiC<=7;$naiC++) {
	for($naiR=0;$naiR<=7-$naiC;$naiR++) {
	echo(".");
	}
	for($naiR=1;$naiR<=1;$naiR++){
		echo($naiR);
	}
	for($naiR=3;$naiR<=1+$naiC;$naiR++){
		echo($naiR-1);
	}

		echo($naiC);

	for($naiR=$naiC;$naiR>=1;$naiR--){
		echo($naiR);
	}

	echo "<br/>";
}
include ('myweb_footer.php');
?>