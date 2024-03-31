<?php
// Kết nối đến cơ sở dữ liệu
include 'connect.php';

// Truy vấn để lấy tên người dùng từ cơ sở dữ liệu (giả sử có một bảng tên là 'users')
$sql = "SELECT username FROM users WHERE id = 1"; // Thay thế '1' bằng ID của người dùng cụ thể nếu cần

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Lặp qua các hàng kết quả và lấy tên người dùng
    while ($row = $result->fetch_assoc()) {
        $username = $row['username'];
    }
} else {
    $username = "Guest"; // Gán một giá trị mặc định nếu không tìm thấy tên người dùng
}
?>