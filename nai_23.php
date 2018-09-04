<head>
<title>Nai</title></head>
<body bgnaiCor=>
<table width=100% bgcolCor=pink><tr><td>
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

<?php include ("bb.php"); session_start();
 if(!isset($_SESSION["pass"]) ||$_SESSION["pass"] != "yes") {
 header('Location: ../login_page.php');exit;
 }

 include ("bb.php");?>
<?php
for($naiR=1;$naiR<=5;$naiR++) {
	echo($naiR);

	for($naiC=1;$naiC<=7-$naiR;$naiC++) {
		echo("*");	
	}
	
	for($naiC=2;$naiC<=$naiR;$naiC++) {
		echo(" ");	
	}

	echo($naiR);

	echo "<br/>";
}


include ('myweb_footer.php');
?>