<?php
$servername = "localhost";
$database = "project";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$studentjsondata = file_get_contents('student.json');
$data = json_decode($studentjsondata, true);
$id = $data['id'];
$name = $data['name'];
$sql = "SELECT name FROM project WHERE id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "  Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>