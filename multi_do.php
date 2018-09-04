<?php
include("myweb_header.php");
?>
<html>
<center>
<head><title>�ٵäٳ  <?php echo $_GET["mul"]; ?>  </title>
</head>
<body bgcolor="#ffffdd">

<table border=1 width=50%>
<?php
$m = $_GET["mul"];
for($i=1;$i<=12;$i++){
echo "<tr><td>$i * $m = </td><td>". $i * $m . "</td></tr>";
} 

?>

<?php
include("myweb_footer.php");
?>
</table>

</body></html> </center>

