<html>
<head>
<script>
function newdoc() {
    window.location.assign("delete.php")
}
function newdoc1() {
    window.location.assign("update.php")
}
function newdoc2() {
    window.location.assign("select.php")
}
</script>
</head>
<body>
<h1>A small example page to insert some data in to the MySQL database using PHP</h1>
<form action="process.php" method="post">
Name: <input type="text" name="fname" /><br><br>
Register number: <input type="text" name="num" /><br><br>
 
<input type="submit" />
<input type="button" value="delete" onclick="newdoc()">
<input type="button" value="update" onclick="newdoc1()">
<input type="button" value="select" onclick="newdoc2()">

</form>
</body>
</html>