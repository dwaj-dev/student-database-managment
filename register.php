<?php
session_start();

// $servername = "localhost";
// $username = "id20415074_root";
// $password = "Qwerty@12345";
// $dbname = "id20415074_data_db";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$student_id = $_POST['student_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dmission_year = $_POST['admission_year'];
$address = $_POST['address'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$mentor = $_POST['mentor'];

$photo = $_FILES['photo']['tmp_name'];
$photoType = $_FILES['photo']['type'];
$photoName = $_FILES['photo']['name'];
$photoPath = "uploads/" . $photoName;
move_uploaded_file($photo, $photoPath);

$sql = "SELECT * FROM student WHERE student_id='$student_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<script>alert('Error: student_id $student_id already exists in the database.');</script>";
  echo "<script>window.location.href='index.php';</script>";
} else {
  $sql = "INSERT INTO student (student_id, name, email, mobile, admission_year, address, department, gender, mentor, photo)
        VALUES ('$student_id', '$name', '$email', '$mobile', '$admission_year', '$address', '$department', '$gender', '$mentor', '$photoPath')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Great.!! New record created successfully :)');</script>";
    echo "<script>window.location.href='index.php';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
