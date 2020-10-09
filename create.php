<?php
    session_start();
    include ("config.php");
    $Auto=$_GET['Auto'];
    $myusername=$_SESSION["login_user"];
    $sql = "SELECT secret_key FROM auto_role WHERE roll_no = '$myusername' and secret_key!='NULL' AND auto_role.Auto='$Auto' ";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count==0){
        //displaying the team members
    }
    else{
        $rand_number = rand(100000,10000000);
        $secret_key = base64_encode($rand_number);
        echo $secret_key; 
    }
?>