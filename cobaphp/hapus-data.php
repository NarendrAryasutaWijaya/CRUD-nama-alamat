<?php include './connection.php';

$id = $_GET['id'];

$sql = "
    delete from siswa
    where id = '" . $id . "';
";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: /cobaphp/index.php");
 }else{
     printf('failed: ' . mysqli_errno($conn) );
     exit();
 }