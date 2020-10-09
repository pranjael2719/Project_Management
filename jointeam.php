<?php
    session_start();
    include ("config.php");

   $username =$_SESSION['login_user'];
    // getting the secret key for the user
    
    $secret = $_POST['secret'];

    // Now insert the record into the database 

    $sql = "SELECT Team_Name from project_code where Group_Code='$secret'";
    $result = mysqli_query($db, $sql);
    
    $count = mysqli_num_rows($result);

    if($count >0 ){

 
    $row = mysqli_fetch_array($result);

    

    $team_name = $row['Team_Name'];

    $sql1 = "INSERT INTO project_code(Group_Code,Team_Name) values('$secret','$team_name') WHERE Roll_No='$username' ";
    
    if($db->query($sql1) ===TRUE){
        echo "New Record Inserted";
    }
    else{
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
    else{
        echo "<h1>This team does not exsistes</h1>";
    }

    
?>