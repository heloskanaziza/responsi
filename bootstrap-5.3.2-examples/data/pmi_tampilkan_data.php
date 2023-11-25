<?php
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
$sql = "SELECT * FROM pmi";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border='1px'><tr>
<th>nama</th>
<th>latitude</th>
<th>longitude</th>
<th>alamat</th>
<th>no_telepon</th>";

// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>".$row["nama"]."</td><td>".
    $row["latitude"]."</td><td>".
    $row["longitude"]."</td><td>".
    $row["alamat"]."</td><td align='right'>".
    $row["no_telepon"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
?>
