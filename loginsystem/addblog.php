<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect1.php';
    $sid = $_POST["sid"];
    $sname = $_POST["sname"];
    $branch = $_POST["branch"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = "INSERT INTO `svit` (`sid`, `sname`, `branch`, `title`, `content`, `date`) VALUES ('$sid', '$sname', '$branch', '$title', '$content',current_timestamp())";
    
    $result = mysqli_query($con, $sql);
    
}  
?>



<!doctype html>
<html lang="en">
  <head>
      
      <title></title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- Bootstrap CSS v5.0.2 -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    </head>
    <body>

    <div class="container my-4">
     <h1 class="text-center">Add your blog here...</h1>
     <form action="/loginsystem/addblog.php" method="post">
     <div class="form-group">
            <label for="username">Student Id</label>
            <input type="text" class="form-control" id="sid" name="sid" aria-describedby="emailHelp">
            
        </div><div class="form-group">
            <label for="sname">Student name</label>
            <input type="text" class="form-control" id="sname" name="sname" aria-describedby="emailHelp">
            
        </div><div class="form-group">
            <label for="username">Branch</label>
            <input type="text" class="form-control" id="branch" name="branch" aria-describedby="emailHelp">
            
        <div class="form-group">
            <label for="username">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div><br>
         
        <button type="submit" class="btn btn-primary">Add blog</button>
     </form>
    </div><br>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>