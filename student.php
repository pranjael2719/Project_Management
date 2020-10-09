<!DOCTYPE html>
    <head>
        <title>
            Student
        </title>
    </head>
    <body>
        <?php 
            include("config.php");
            session_start();
            $myusername=$_SESSION['login_user'];
            $sql = "SELECT teach_sub.Subject FROM teach_sub INNER JOIN auto_role ON teach_sub.Auto=auto_role.Auto WHERE roll_no='$myusername'";
            $result = mysqli_query($db,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($db));
                exit();
            }
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
              
                echo $row["Subject"];
            }
        ?>
    </body>
</html>