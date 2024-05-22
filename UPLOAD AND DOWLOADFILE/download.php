<?php
include("menu.php");
?>
<?php
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "file_upload_downd_load";

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if ($conn->connect_error) {
            die("Kết nối thất bại" . $conn->connect_error);
        }
    
        //Feich the upload files from the database

        $sql ="SELECT * FROM files";
        $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Upload file</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Upload file</h2>
        <table class="table table-bordered table-stripes ">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Display the upload files and download links
                if($result->num_rows >0 ){
                    while($row = $result->fetch_assoc()){
                    $file_path ="uploads/".$row['filename'];
                  ?>
                  <tr>
                    <td><?php echo $row['filename']; ?></td>
                    <td><?php echo $row['filesize']; ?> bytes</td>
                    <td><?php echo $row['filetype']; ?></td>    
                    <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
                  </tr>
                  <?php
                    } 
                }else{
                        ?>
                        <tr>
                            <td colspan="4">Chưa có tệp được tải lên</td>
                        </tr>
                        <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
  $conn->close();
  ?>