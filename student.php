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
            $sql = "SELECT teach_sub.Subject FROM teach_sub INNER JOIN auto_roll ON teach_sub.Auto=auto_roll.Auto WHERE roll_no='$myusername'";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            
        ?>
    </body>
</html>