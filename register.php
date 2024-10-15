
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
        function Onblurpwd(){
            let pwd1 = document.getElementById("pwd1");
            let pwd2 = document.getElementById("pwd2");
            if(pwd1.value !== pwd2.value){
                alert("รหัสผ่านทั้งสองช่องไม่ตรงกัน");
                pwd1.value="";
                pwd2.value="";
            }
        }
    </script>
</head>

<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
                <?php
                    session_start();
                    if(isset($_SESSION['add_login'])){
                        if($_SESSION['add_login'] == 'error'){
                           echo "<div class = 'alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
                        }
                        else{
                            echo "<div class = 'alert alert-success'>เพิ่มบัญชีเรียบร้อยแล้ว</div>";
                        }
                        unset($_SESSION['add_login']);
                    }
                ?>
                <div class="card border-primary">
                    <h5 class="card-header bg-primary text-white">เข้าสู่ระบบ</h5>
                    <div class="card-body">
                        <form action="register_save.php" method="post"><div class="row">
                                <label class="col-lg-3 col-form-label" for="login">ชื่อบัญชี:</label>
                                <div class="col-lg-9">
                                    <input id="login" type="text" name="login" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="login">รหัสผ่าน:</label>
                                <div class="col-lg-9">
                                    <input id="pwd1" type="password" name="pwd" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="login">ใส่รหัสผ่านซ้ำ:</label>
                                <div class="col-lg-9">
                                    <input id="pwd2" type="password" name="pwd2" class="form-control" onblur="Onblurpwd()" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="login">ชื่อ-นามสกุล:</label>
                                <div class="col-lg-9">
                                    <input id="name" type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="gender">เพศ:</label>
                                <div class="col-lg-9">
                                    <input id="gender" type="radio" name="gender" value="m" required> male <br>
                                    <input id="gender" type="radio" name="gender" value="f" required> female <br>
                                    <input id="gender" type="radio" name="gender" value="o" required> other <br>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="login">Email:</label>
                                <div class="col-lg-9">
                                    <input id="email" type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3" >
                                <label class="col-lg-3 col-form-label" for="login"></label>
                                <div class="col-lg-9">
                                    <input class="btn btn-primary" type="submit" value="สมัคสมาชิก" required>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>