<?php
// functions to get lists and return them as an array
$result = mysql_query("SELECT * FROM 'item'");
while($row = mysql_fetch_array($result))
  echo $row['id'] . " " . $row['subject'] . " " . $row['description'] . "<br />";
  }
?>
