<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
    <h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
    <nav class="navbar navbar-expand-lg" style="background-color: #d3d3d3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i>Home</a>
      <ul class="navbar-nav">
        <?php
            if (!isset($_SESSION['id'])){
                echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href='login.php'><i class='bi bi-pencil'></i>เข้าสู่ระบบ</a>";
                echo "</li>";
            }else{
                echo "<li class='nav-item dropdown'>";
                  echo "<a class='btn btn-outline-secondary btm-sm dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>";
                  echo "<i class='bi bi-person-lines-fill'></i> $_SESSION[username] </a>";
                  echo "<ul class='dropdown-menu'>";
                    echo "<li><a class='dropdown-item' href='logout.php'><i class='bi bi-power'></i> ออกจากระบบ</a></li>";
                  echo "</ul>";
                echo "</li>";
                
            }
        ?>
      </ul>
    </div>
</nav>
<div class="mt-3">
    <label>หมวดหมู่:</label>
    <span class="dropdown">
        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            --ทั้งหมด--
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
            <li><a class="dropdown-item" href="#">เรื่องทั่วไป</a></li>
            <li><a class="dropdown-item" href="#">เรื่องเรียน</a></li>
        </ul>
    </span>
    <?php
        if(isset($_SESSION['id'])){
            echo"<a href='newpost.php' class='btn btn-success btn-sm' style='float:right;'>";
            echo"<i class='bi bi-plus'></i> สร้างกระทู้ใหม่</a>";
        }
    ?>
</div>
    <!-- <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select> -->
    
    <!-- <?php
    if (!isset($_SESSION['id'])){
    
    echo "<a href='login.php' style='float: right;'>เข้าสู่ระบบ</a>";
    
    }else{
    echo "<span style='float: right;'>
            ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;
            <a href='logout.php'>ออกจากระบบ</a>
          </span>";
    echo "<div><a href='newpost.php'>สร้างกระทู้ใหม่</a></div>";
    
    }
    ?> -->
    
    <table class="table table-striped mt-4">
        <?php
        for($i=1;$i<=10;$i=$i+1)
            {
                echo "<tr><td><a style='text-decoration:none' href=post.php?id=$i>กระทู้ที่ $i</a>";
                if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
                    echo "&nbsp;&nbsp;<a href='delete.php?id=$i' class='btn btn-danger btn-sm me-2' style='float:right'><i class='bi bi-trash'></i></a>";
                }
                echo "</td></tr>";
            }
        ?>
    </table>
    </div>
</body>
</html>