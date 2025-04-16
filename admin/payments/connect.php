<?php
$dbhost							= "sql102.infinityfree.com";
$dbuser							= "if0_38761672";
$dbpass							= "Sz35FDm5dzf";
$dbname							= "if0_38761672_bhub";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>