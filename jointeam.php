
<?php
    // have to check for the team size yet .. 
    
    session_start();
    include ("config.php");
    $username =$_SESSION['login_user'];
    $sno = $_SESSION['sno'];
    // getting the secret key for the user
    
    $secret = $_POST['secret'];
    
    // Now insert the record into the database 
    
    $sql = "SELECT Team_Name from project_code where Group_Code='$secret' and Sr_No='$sno' ";
    $result = mysqli_query($db, $sql);
    
    $count = mysqli_num_rows($result);
    if($count >0 ){
    
    $row = mysqli_fetch_array($result);
    
    $team_name = $row['Team_Name'];
    
    // INSERT IS NOT TO BE USED TO WHILE UPDATING THE TABLE USE THE UPDATE KEY 
    $sql="SELECT * FROM project_code WHERE Group_Code='$secret' AND Sr_No='$sno' ";
    $result = mysqli_query($db, $sql);
    $count=mysqli_num_rows($result);
    $sql1="SELECT Max_Students FROM classroom WHERE Sr_No='$sno' ";
    $result1 = mysqli_query($db, $sql1);
    $row1 = mysqli_fetch_array($result1);
    if($count==$row1['Max_Students']){
        echo "Team is Full.";
    }
    else{
        $sql1= "UPDATE project_code SET Group_Code='$secret',Team_Name='$team_name' WHERE Roll_No='$username' AND Sr_no= '$sno '";
        
        if($db->query($sql1) ===TRUE){
            echo "New Record Inserted";
            $a="create.php?Auto=".$sno;
            header("location: ".$a);
        }
        else{
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }
    }
    else{
        echo "<h1>This team does not exsistes</h1>";
    }

    
?>