<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem tệp đã được tải lên mà không có lỗi
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $file_types = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Kiểm tra xem tệp có được phép không (bạn có thể sửa đổi để cho phép các loại tệp cụ thể)
    $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf","doc","docx");

    if (!in_array($file_types, $allowed_types)) {
      echo "Xin lỗi, chỉ cho phép tệp JPG, JPEG, PNG, GIF và PDF.";
    } else {
      // Di chuyển tệp đã tải lên vào thư mục được chỉ định
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        // Tải tệp lên thành công, bây giờ lưu thông tin vào cơ sở dữ liệu
        $filename = $_FILES["file"]["name"];
        $filesize = $_FILES["file"]["size"];
        $filetype = $_FILES["file"]["type"];

        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "file_upload_downd_load";

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if ($conn->connect_error) {
          die("Kết nối thất bại" . $conn->connect_error);
        }

        $sql = "INSERT INTO files (filename, filesize, filetype) VALUES ('$filename', '$filesize', '$filetype')";

        if ($conn->query($sql) === TRUE) {
          echo "Tệp " . basename($_FILES["file"]["name"]) . " đã được tải lên và thông tin đã được lưu trong cơ sở dữ liệu.";
        } else {
          echo "Xin lỗi, có lỗi khi tải lên tệp của bạn và lưu thông tin trong cơ sở dữ liệu: " . $conn->error;
        }

        $conn->close();
      } else {
        echo "Xin lỗi, có lỗi khi tải lên tệp của bạn.";
      }
    }
  } else {
    echo "Không có tệp nào được tải lên.";
  }
?>
