<?php
session_start();
if (!isset($_SESSION['username']))
{
	header('Location: login.php');
}
else{
	echo "masuk pak eko";
	echo "<p> selamat datang ".$_SESSION['username']." </p>";
	echo "<a href='logout.php'/>Logout</a> ";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boothcamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT no, username, password FROM latihan";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="add.php" method="post">
		<input type="text" name="no">
		<br>
		<input type="text" name="username">
		<br>
		<input type="text" name="password">
		<br>
		<input type="submit" name="tambah user">
	</form>
	<form action='berhasillogin.php' method="get">
		<input type="text" name="search">
		<input type="submit" value="search">
	</form>
	<table>
		<tr>
			<th>no</th>
			<th>username</th>
			<th>password</th>
			<th>action</th>
		</tr>

		<?php 
		if ($result->num_rows > 0) {
    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$row["no"]."</td>";
				echo "<td>".$row["username"]."</td>";
				echo "<td>".$row["password"]."</td>"; 
				echo "<td><a href=''>edit</a> | <a href=''>delet</a></td>"; 
				echo "</tr>";
			}
		} else {
			echo "0 results";
		}
		?>
	</table>
</body>
</html>