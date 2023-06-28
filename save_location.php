<?php 
// Lấy thông tin vị trí từ yêu cầu AJAX
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Tạo nội dung để lưu vào file
$fileContent = "Vĩ độ: " . $latitude . "\nKinh độ: " . $longitude;

// Đường dẫn tới file
$filePath = 'id.txt';

// Ghi nội dung vào file
file_put_contents($filePath, $fileContent);

// Phản hồi về trình duyệt
echo "Lưu vị trí thành công!";
?>
