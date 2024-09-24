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

            }
        ?>
        <!-- <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="bi bi-pencil"></i>เข้าสู่ระบบ</a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
      </ul>
   
  </div>
</nav>
    หมวดหมู่: 
    <select name="category">
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <?php
    if (!isset($_SESSION['id'])){
    
    echo "<a href='login.php' style='float: right;'>เข้าสู่ระบบ</a>";
    
    }else{
    echo "<span style='float: right;'>
            ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;
            <a href='logout.php'>ออกจากระบบ</a>
          </span>";
    echo "<div><a href='newpost.php'>สร้างกระทู้ใหม่</a></div>";
    
    }
    ?>

    <ul>
        <?php
        for($i=1;$i<=10;$i=$i+1)
        {
            echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a>";
            if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
                echo "&nbsp;&nbsp;<a href='delete.php?id=$i'>ลบ</a>";
            }
            echo "</li>";
        }
        ?>
        
        
    </ul>
    </div>
</body>
</html>