<?php
session_start();
if(!isset($_SESSION["pass"]) ||$_SESSION["pass"] != "yes") {
header("Location: login_page.php");exit;
}

include("myweb_header.php");

?>

<table> <tr><td><a href="https://www.facebook.com/praetiwa?sk=wall&fref=gs&dti=1912424862155190&hc_location=group_dialog"><img src="mm.jpg" width= "160" height="200"><tr><td></a> </table>
เหมียว
<?php
include("myweb_footer.php");
?>