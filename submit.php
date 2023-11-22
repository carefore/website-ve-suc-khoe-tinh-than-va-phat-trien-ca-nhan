<?php
// Kết nối đến MySQL (ví dụ sử dụng localhost, username, và password)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Lấy thông tin từ form
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Chèn thông tin vào cơ sở dữ liệu
$sql = "INSERT INTO user_info (fullname, email, message) VALUES ('$fullname', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
