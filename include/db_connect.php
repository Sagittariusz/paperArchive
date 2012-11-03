<?php
$con = mysql_connect("localhost","paperArchive","NbuFQZa8mUBQdC6F");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("paperArchive", $con);

// some code
?>
