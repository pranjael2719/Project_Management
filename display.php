<?php
session_start();
include("config.php");
$Auto = $_GET['Auto'];
$myusername = $_SESSION["login_user"];
   
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Document</title>
        <link rel="stylesheet" href="Button.css">

        <script>
            $(document).ready(function() {
                $('#Mybtn').click(function() {
                    $('#MyForm').toggle(500);
                });
            });
            $(document).ready(function() {
                $('#Mybtn2').click(function() {
                    $('#MyForm1').toggle(500);
                });
            });
        </script>
    </head>

    <body>
        
        <button id="Mybtn2" class="corner-button"><span>Team Size</span></button>
        <form id="MyForm" action="view.php" method="post">
            <button type="submit" class="corner-button" name="submit" value="View Team"><span>View Team</span></button>
        </form>
		<div class="form-design">
			<div class="box">
        <form id="MyForm1" action="" method="POST">
            <label>Fix team size </label><br><br>
            <input type="text" name="team" placeholder="Enter the Team Size" /><br><br>
            <button type="submit" class="btn btn-default" name="submit" value="Submit">Submit</button>
        </form>
		</div>
		</div>
        <?php
            if(!empty($_POST)){
                if($_POST["submit"]=="Submit"){
                    $size=$_POST['team'];
                    $sql1= "UPDATE classroom SET Max_Students='$size'WHERE Sr_no= '$Auto '";
                    if($db->query($sql1) ===TRUE){
                        echo "<script>alert('Team size fixed.')</script>";
                        //$a="display.php?Auto=".$sno;
                        //header("location: ".$a);
                    }
                    else{
                        echo "Error: " . $sql . "<br>" . $db->error;
                    }
                }
            }
        ?>
    </body>

    </html>
