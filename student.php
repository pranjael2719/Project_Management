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
            $sql = "SELECT teach_sub.Subject,teach_sub.Auto FROM teach_sub INNER JOIN auto_role ON teach_sub.Auto=auto_role.Auto WHERE roll_no='$myusername'";
            $result = mysqli_query($db,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($db));
                exit();
            }
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    
                        <h5 class="card-title"><?php echo $row["Subject"]; ?></h5>
                        <a href="<?php echo "create.php?Auto=".$row["Auto"]?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <?php
            }
        ?>
    </body>
</html>
