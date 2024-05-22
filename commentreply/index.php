<?php
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>

<?php
if (isset($_SESSION['status'])) {
?>
<div class="alert"><?php echo $_SESSION['status']; ?></div>
<?php
unset($_SESSION['status']); // Xóa session status sau khi hiển thị để tránh hiển thị lại ở các lần tải trang sau
}
?>


 <div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                  <div class="card">
                    <div class="card-header">
                        <h4>This is a blog heading</h4>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore deleniti pariatur quos blanditiis reiciendis sed dolorem aliquam, quam odio debitis incidunt nam nulla inventore odit optio possimus ipsam beatae! Temporibu!Lorem
                        <hr>
                        <div class="main-comment">

                        <div id="error_status"></div>
                            <textarea  class="comment_textbox form-control mb-1" rows="2"></textarea>
                            <button type="button" class="btn btn-primary add_comment_btn">Comment</button>
                            <hr>
                            <div class="comment-container">
                              
                            </div>
                        </div>

                    </div>
                  </div>
            </div>
        </div>
    </div>
 </div>
<?php
include("includes/footer.php");
?>
