<!DOCTYPE html>
    <head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            Teacher
        </title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
		<div class="container">
        <?php 
            include("config.php");
            session_start();
            $myusername=$_SESSION['login_user'];
            $sql = "SELECT Subject_Name,Sr_No,Slot FROM classroom WHERE Emp_ID='$myusername'";
            $result = mysqli_query($db,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($db));
                exit();
            }
            $count=0;
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
                <div class="card">
					<div class="face face1">
						<div class="content">
								<img src="subject_name.png">
								<h3><?php echo $row["Subject_Name"]."  "; echo $row["Slot"];?></h3>
						</div>
					</div>
					<div class="face face2">
						<div class="content">
							<a href="<?php echo "display.php?Auto=".$row["Sr_No"]?>">Go somewhere</a>
						</div>
                    </div>
                </div>
                <?php
            }
        ?>
        </div>
    </body>
</html>
