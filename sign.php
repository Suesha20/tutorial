<html>
<body>
<?php
$user1 = $_POST["user1"];
$pass1 = $_POST["pass1"];
$mail1 = $_POST["mail1"];
$no1 = $_POST["no1"];
if ($user1 ==" " || $pass1 ==" " || $mail1==" " || $no1==" ")
{
echo "Enter the details properly!!";
}
else
{
echo "signup successful!!";
}
?>
</body>
</html>
