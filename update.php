<html>
<body>
 
 
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("form", $con);
 
$sql = "UPDATE detail SET name='ram' WHERE id=12";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo " record updated successfully";
 
mysql_close($con)
?>
</body>
</html>
 