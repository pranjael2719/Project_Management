<!DOCTYPE html>
<html>
<head>
    <title>
        Login Page
    </title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="col-md-6 d-none d-md-flex bg-image"></div>
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <div style="text-align: center;">
                                <h3>Login to Continue</h3><br>
                            </div>
                            <form action="" method="POST" onsubmit="return check()">
                                <div class="form-group mb-3">
                                    <label for="email1">User ID </label>
                                    <input type="text" class="form-control" id="email1" aria-describedby="emailHelp" style="border-radius: 40px" placeholder="User ID" required name="username">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" id="pass" style="border-radius: 40px" placeholder="Password" required name="password">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" value="Sign in">
                            </form>
                            <?php
                                if (!empty($_POST)){
                                    if ($_POST["email1"]=="student"){
                                        header("Location: http://localhost/Project_Management/student.php");
                                    }
                                    else{
                                        header("Location: http://localhost/Project_Management/teacher.php");
                                    }
                                } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
</body>