<?php
$servername = "localhost";
$database = "project";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
$studentjsondata = file_get_contents('student.json');
$data = json_decode($studentjsondata, true);
$id = $data['id'];
$name = $data['name'];
$sql = "DELETE FROM project WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
};
mysqli_close($conn);
?>