<?php include './connection.php';

$name = $_POST['name'];
$address = $_POST['address'];

$sql = "insert into siswa(name, address) values ('" . $name . "','" . $address . "')";

$result = mysqli_query($conn, $sql);
if ($result) {
   header("Location: /cobaphp/index.php");
}else{
    printf('failed: ' . mysqli_errno($conn) );
    exit();
}
