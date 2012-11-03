<?php
// functions to get lists and return them as an array
echo ("checkpoint 293 pdj");
$result = mysql_query("SELECT * FROM 'item'");
while($row = mysql_fetch_array($result))
echo $row['id'] . " " . $row['subject'] . " " . $row['description'] . "<br />";
}
echo ("checkpoint 670 apq");
?>
