<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Submit to Send Email</title>
</head>
<body>
    <?php
    if (!empty($_POST["email"])) {
       $username = $_POST["username"];
       $useremail = $_POST["useremail"];
       $userphone = $_POST["userphone"];
       $usermassage = $_POST["usermassage"];
       $toemail = 'tuanquynhaz11@gmail.com';

       $mailheaders = "From: $useremail\r\n".
                      "Reply-To: $useremail\r\n".
                      "Name: $username\r\n".
                      "Phone: $userphone\r\n".
                      "Message: $usermassage\r\n";

                      if (mail($toemail, $username, $mailheaders)) {
                        $message = "Thông tin của bạn đã được nhận thành công.";
                    } else {
                        $message = "Gửi email thất bại. Lỗi: " . error_get_last()['message'];
                    }
                    
    }
    ?>
    <div class="form-container">
        <form action="" method="POST" name="emailContact">
        <div class="input-row">
    <label for="username">Tên <em>*</em></label>
    <input type="text" name="username" id="username" autocomplete="name" required>
</div>
<div class="input-row">
    <label for="useremail">Email <em>*</em></label>
    <input type="email" name="useremail" id="useremail" autocomplete="email" required>
</div>
<div class="input-row">
    <label for="userphone">Số điện thoại <em>*</em></label>
    <input type="tel" name="userphone" id="userphone" autocomplete="tel" required>
</div>
<div class="input-row">
    <label for="usermassage">Nội dung <em>*</em></label>
    <textarea name="usermassage" id="usermassage" autocomplete="off" required></textarea>
</div>

            <div class="input-row">
                <input type="submit" name="send"  value="Gửi">
                <?php if (!empty($message)) { ?>
                <div class="success">
                    <strong><?php echo $message; ?></strong>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>   
</body>
</html>
