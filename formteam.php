<?php

    session_start();
    $rand_number = rand(100000, 10000000);
    $secret_key = base64_encode($rand_number);
    #echo $secret_key;
    $username = $_SESSION['login_name'];
    $teamname = $_POST['teamname'];
    
    include("config.php");

    $sql = "SELECT Group_Code FROM project_code where Roll_No='$username' ";

    $result = mysqli_query($db, $sql);
    
    $count = mysqli_num_rows($result);
    
    $row = mysqli_fetch_array($result);

    $groupcode = $row['Group_Code'];

    if($groupcode != NULL) echo " You already have a team ";
    else{
        $sql1 = "INSERT INTO project_code (Group_Code,Team_Name) values('$secret_key','$teamname) where Roll_No='$username'";
        
        if($db->query($sql1) ===TRUE){
            echo "New Record Inserted";
        }
        else{
            echo "Error: " . $sql . "<br>" . $db->error;
        }


    }


?>
