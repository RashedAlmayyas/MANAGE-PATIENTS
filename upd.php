<?php



$id = (int)$_POST['upd'];
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['upd'])) {
    upd($id);
}
function upd($id)
{
    $servername = "";
    $username = "root";
    $password = "";
    $dbname = "manage patients";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $fullname =  $_REQUEST['fullname'];
    $age =  $_REQUEST['age'];
    $addr =  (int)$_REQUEST['addr'];
    $da =  $_REQUEST['da'];
    $phone =  $_REQUEST['phone'];
    $sql = "UPDATE patient SET fullname='$fullname', age='$age', addr='$addr', da='$da', phone='$phone' WHERE id=$id";
    
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}