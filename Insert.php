<?php
$studentjsondata = file_get_contents('student.json');
$data = json_decode($studentjsondata, true);
$id = $data['id'];
$name = $data['name'];
$servername = "localhost";
$database = "project";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
$studentjsondata = file_get_contents('student.json');
$data = json_decode($studentjsondata, true);
$id = $data['id'];
$name = $data['name'];
$sql = "insert into project(id,name)values($id,'$name')";

if ($conn->query($sql) === TRUE) {
  echo "Record inserted successfully";
} else {
  echo "Error in inserting: " . $conn->error;
};
mysqli_close($conn);

?>
