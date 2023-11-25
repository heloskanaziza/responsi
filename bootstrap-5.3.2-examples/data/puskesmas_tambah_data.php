<?php

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];

// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pqweb_responsi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO puskesmas (nama, jenis, alamat, no_telepon)
VALUES ('$nama', '$jenis','$alamat', '$no_telepon')";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
