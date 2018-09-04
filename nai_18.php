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
for($naiC=1;$naiC<=5;$naiC++) {
	for($naiR=$naiC;$naiR<=$naiC;$naiR++) {
		echo($naiR);	
	}

	for($naiR=1;$naiR<=$naiC;$naiR++) {
		echo("*");
	}

	echo($naiR-1);

	for($naiR=1;$naiR<=6-$naiC;$naiR++) {
		echo("*");
	}

	echo($naiR+3);

	echo "<br/>";
}include ('myweb_footer.php');
?>