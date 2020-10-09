<!DOCTYPE html>
    <head>
        <title>
            Student
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <?php 
            include("config.php");
            session_start();
            $myusername=$_SESSION['login_user'];
            $sql = "SELECT classroom.Subject_Name,classroom.Sr_No FROM classroom INNER JOIN project_code ON classroom.Sr_No=project_code.Sr_No WHERE Roll_no='$myusername'";
            $result = mysqli_query($db,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($db));
                exit();
            }
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["Subject_Name"]; ?></h5>
                        <a href="<?php echo "create.php?Auto=".$row["Sr_No"]?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <?php
            }
        ?>
    </body>
</html>
