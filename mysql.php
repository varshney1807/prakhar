<?php
require ("connect.php");
$date= date("Y-m-d");
$write = mysql_query("INSERT INTO people VALUES ('','prakhar','varshney','m','$date')");
$update= mysql_query("UPDATE people SET dob='1993-02-18' WHERE id=1");
?>