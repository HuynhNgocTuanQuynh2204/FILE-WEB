<?php
include("dbcon.php");
session_start();

if(isset($_POST['add_subreplies'])){
  $cmt_id = $_POST['cmt_id'];
  $reply_msg = $_POST['reply_msg'];
  if(isset($_SESSION['auth_user_id'])) {
    $user_id = $_SESSION["auth_user_id"];
  $query = "INSERT INTO comment_replies (user_id, comment_id, reply_msg) VALUES ('$user_id', '$cmt_id', '$reply_msg')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "Comment Replies to user";
    } else {
        echo "Something Went Wrong";
    }
} else {
    // Người dùng chưa đăng nhập, trả về thông báo hoặc chuyển hướng đến trang đăng nhập
    echo "Vui lòng đăng nhập để thêm bình luận hoặc trả lời.";
    // Hoặc chuyển hướng:
    // header("Location: login.php");
    exit(); // Kết thúc quá trình xử lý
}
}





if(isset($_POST["view_comment_data"])){
    $cmt_id = $_POST["cmt_id"];
    $query1 = "SELECT * FROM comment_replies WHERE comment_id='$cmt_id'";
    $qr_run = mysqli_query($conn,$query1 );

    $result_array =[];
    if(mysqli_num_rows($qr_run) > 0){
         foreach($qr_run as $row){
            $user_id = $row["user_id"];
            $user_query = "SELECT * FROM users WHERE id='$user_id' LIMIT 1";
            $run_qr_query = mysqli_query($conn,$user_query);
            $user_result = mysqli_fetch_array($run_qr_query);

            array_push( $result_array,['cmt'=>$row, 'user'=> $user_result ]);
         }
         header('Content-type:application/json');
         echo json_encode($result_array);      
    }else{
        echo "Give a comment";
    }
    
}



if (isset($_POST['add_reply'])) {
    $cmt_id = $_POST['comment_id']; 
    $reply = $_POST['reply_msg']; 
    if(isset($_SESSION['auth_user_id'])) {
    $user_id = $_SESSION['auth_user_id'];
    $query = "INSERT INTO comment_replies (user_id, comment_id, reply_msg) VALUES ('$user_id', '$cmt_id', '$reply')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "Comment Replies";
    } else {
        echo "Something Went Wrong";
    }
} else {
    // Người dùng chưa đăng nhập, trả về thông báo hoặc chuyển hướng đến trang đăng nhập
    echo "Vui lòng đăng nhập để thêm bình luận hoặc trả lời.";
    // Hoặc chuyển hướng:
    // header("Location: login.php");
    exit(); // Kết thúc quá trình xử lý
}
}


if(isset($_POST["comment_load_data"])){
    $commentts = "SELECT * FROM comments";
    $run_qr = mysqli_query($conn,$commentts);

    $array_result =[];
    if(mysqli_num_rows($run_qr) > 0){
         foreach($run_qr as $row){
            $user_id = $row["user_id"];
            $user_query = "SELECT * FROM users WHERE id='$user_id' LIMIT 1";
            $run_qr_query = mysqli_query($conn,$user_query);
            $user_result = mysqli_fetch_array($run_qr_query);

            array_push( $array_result,['cmt'=>$row, 'user'=> $user_result ]);
         }
         header('Content-type:application/json');
         echo json_encode($array_result);
    }else{
        echo "Give a comment";
    }
}


if(isset($_POST["add_comment"])){
    $msg = $_POST["msg"];
    if(isset($_SESSION['auth_user_id'])) {
        $user_id = $_SESSION["auth_user_id"];
    $comment = "INSERT INTO comments (user_id, msg) VALUES ('$user_id', '$msg')";
    $run = mysqli_query($conn, $comment);
    if($run){
        echo "Comment added successfully";
    } else {
        echo "Comment not added successfully";
    }
} else {
    // Người dùng chưa đăng nhập, trả về thông báo hoặc chuyển hướng đến trang đăng nhập
    echo "Vui lòng đăng nhập để thêm bình luận hoặc trả lời.";
    // Hoặc chuyển hướng:
    // header("Location: login.php");
    exit(); // Kết thúc quá trình xử lý
}
}
?>
