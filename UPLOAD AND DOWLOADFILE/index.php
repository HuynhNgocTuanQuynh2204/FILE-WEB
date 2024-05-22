<?php
include("menu.php");
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
    <title>File upload and download</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Upload a file</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="file" class="form-label">select file</label>
                <input type="file" class="form-control" name="file" id="file">
            </div>
            <button type="submit" class="btn btn-primary">Upload file </button>
        </form>
    </div>
</body>
</html>