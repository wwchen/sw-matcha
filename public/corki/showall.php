<?php

$link = mysql_connect('corkico.domaincommysql.com', 'corkico', 'Social_Sipper12'); 
if (!$link) { 
  die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db('email',$link); 

$query = "SELECT * FROM email";
$result = mysql_query($query) or die(mysql_error());

echo "<table>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['datetime'] . "</td><td>" . $row['email'] . "</td>";
  echo "</tr>\n";
}
echo "</table>";

mysql_close($link);

?> 
