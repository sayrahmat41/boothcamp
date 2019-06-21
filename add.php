<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boothcamp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO latihan (no, username, password)
VALUES ('".$_POST['no']."', '".$_POST['username']."', '".$_POST['password']."')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header('Location: berhasillogin.php');
?>