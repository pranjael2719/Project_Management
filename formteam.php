<?php

    session_start();
    $rand_number = rand(100000, 10000000);
    $secret_key = base64_encode($rand_number);
    #echo $secret_key;
    $user = $_SESSION['login_user'];
    $teamname = $_POST['teamname'];
    
    include("config.php");
    $sno = $_SESSION['sno'];

    echo $sno;

    $sql = "SELECT (Group_Code) FROM project_code WHERE Roll_No='$user' AND Sr_no= '$sno ' ";

    $result = mysqli_query($db, $sql);

    
    
    $count = mysqli_num_rows($result);

   
    
    $row = mysqli_fetch_array($result);

    $groupcode = $row['Group_Code'];

    if($groupcode != "NULL") echo " You already have a team ";
    else{
        $sql1= "UPDATE project_code SET Group_Code='$secret_key',Team_Name='$teamname' WHERE Roll_No='$user' AND Sr_no= '$sno '";
        
        
        if($db->query($sql1) ===TRUE){
            echo "New Record Inserted";
            $a="create.php?Auto=".$sno;
            header("location: ".$a);
        }
        else{
            echo "Error: " . $sql . "<br>" . $db->error;
        }


    }


?>