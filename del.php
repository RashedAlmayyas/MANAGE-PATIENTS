
<!--
 ***   ***        ****             *   *          ***   ***
***** *****       *   *            *   *         ***** *****
***********       *   *            ** **         ***********
 *********        ****     *****   * * *          *********                                            
  *******         * *              *   *           *******
   *****          *  *             *   *            *****
    ***           *   *            *   *             ***
     *                                                *
-->
<?php
$id = (int)$_POST['del'];
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['del'])) {
    del($id);
}
function del($id)
{
    $servername = "";
    $username = "root";
    $password = "";
    $dbname = "manage patients";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM patient WHERE id= $id ";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
header("Location: index.php");
exit();
        } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
