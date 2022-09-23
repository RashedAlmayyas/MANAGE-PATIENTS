<?php
$servername = "";
$username = "root";
$password = "";
$dbname = "manage patients";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$addr = mysqli_real_escape_string($conn, $_POST['addr']);
$da = mysqli_real_escape_string($conn, $_POST['da']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);


$sql = "INSERT INTO patient (fullname, age, addr ,da, phone)
VALUES ('$fullname', '$age',  '$addr', '$da' , '$phone' )";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php");
exit();
?>