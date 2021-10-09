<?php
$conn = mysqli_connect('127.0.0.1','root','','sekolah');
if (mysqli_connect_error()) {
  printf('koneksi gagal : '.mysqli_connect_error());
  exit();
}