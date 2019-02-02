<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='root';
$db='movieList';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
if ( isset( $_GET['submit'] ) ) {
$actorName=$_GET["actorName"];
$genre=$_GET["genre"];
$yearOfRelease=$_GET["yearOfRelease"];
$sql="SELECT * from movieList WHERE actorName like '$actorName' AND genre like '$genre' AND yearOfRelease='$yearOfRelease'";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<table><tr><th>Name</th><th>Actor Name</th><th>Actress Name</th><th>genre</th><th>Year Of Release</th></tr>";
	while($row=mysqli_fetch_assoc($result))
	{
		echo"<tr><td>".$row["name"]."</td><td>".$row["actorName"]."</td><td>".$row["actressName"]."</td><td>".$row["genre"]."</td><td>".$row["yearOfRelease"]."</td></tr>";
	}
	echo"</table>";
}
else
{
	echo "No Preferences";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Movie List</title>
</head>
<body>
<form action="movielist.php" method="get">
	Actor Name:<input type="text" name="actorName"><br>
	Genre:<input type="text" name="genre"><br>
	Year of Release:<input type="number" name="yearOfRelease"><br>
	<input type="submit" name="submit">

</form>
</body>
</html>
