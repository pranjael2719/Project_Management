<!DOCTYPE html>
<html>
<head>
    <title>
        Login Page
    </title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script>
	function check(){
    var s=0;
    // Fetching the value of userid and passsword from the form 
    
    var username = document.forms["login"]["username"].value;   //userid 
    var password = document.forms["login"]["password"].value;    //password
    var match=(/^(([0-9]{2}[A-Za-z]{3}[0-9]{4})|([0-9]{6}))$/g); //regular expression for userid
	if(!match.test(username)){
		document.getElementById('email1').style.borderColor = 'red';
		document.getElementById('inuser').innerHTML = 'Invalid Username';
		document.getElementById('inuser').style.color = 'red';
        return false;
	}
	return true;
	}
	</script>
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
                            <form action="" method="POST" onsubmit="return check()" name='login'>
                                <div class="form-group mb-3">
                                    <label for="email1">User ID </label>
                                    <input type="text" class="form-control" id="email1" aria-describedby="emailHelp" style="border-radius: 40px" placeholder="User ID" required name="username">
                                    <p id='inuser'></p>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" id="pass" style="border-radius: 40px" placeholder="Password" required name="password">
									<p id='inpass'></p>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" value="Sign in">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
</body>

<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $category = mysqli_real_escape_string($db,$_POST['category']); 
      $sql = "SELECT * FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1 and $category=="student") {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: student.php");
      }
      elseif($count == 1 and $category=="teacher") {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        
        header("location: teacher.php");
     }
      else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
