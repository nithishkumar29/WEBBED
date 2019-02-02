<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='root';
$db='movieList';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
if ( isset( $_POST['submit'] ) ) {
	$name=$_POST['name'];
	$actorName=$_POST["actorName"];
	$actressName=$_POST["actressName"];
	$genre=$_POST["genre"];
	$yearOfRelease=$_POST["yearOfRelease"];
	$sql="INSERT INTO movieList (name, actorName, actressName, genre, yearOfRelease, rating) values ('$name','$actorName','$actressName','$genre','$yearOfRelease','0')";
	if(mysqli_query($conn, $sql))
	{
		echo "SUCCESS";
	}
	else
		echo"FAILURE";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Movie</title>
</head>
<body>
<form action="addmovietolist.php" method="POST">
	MovieName:<input type="text" name="name"><br>
	Actor Name:<input type="text" name="actorName"><br>
	Actress Name:<input type="text" name="actressName"><br>
	Genre:<input type="text" name="genre"><br>
	Year Of Release:<input type="number" name="yearOfRelease">
	<input type="submit" name="submit">
</form>
</body>
</html>