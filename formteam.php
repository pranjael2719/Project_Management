<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		body {
		background: #2f2f2f;
		}
		.form-design{
		width:500px;
		padding:30px;
		margin:40px auto;
		background: #2f2f2f;
		border-radius: 10px;
		 border: 1px solid white;
		}
		.form-design .box{
		padding: 30px;
		border-radius: 10px;
		margin-bottom: 20px;
		background: magenta;
		color: white;
		}
    </style>
</head>
<body>
<div class='form-design'><div class='box'>

<?php

    session_start();
    $rand_number = rand(100000, 10000000);
    $secret_key = base64_encode($rand_number);
    #echo $secret_key;
    $user = $_SESSION['login_user'];
    $teamname = $_POST['teamname'];
    
    include("config.php");
    $sno = $_SESSION['sno'];
    $sql="SELECT Max_Students FROM classroom WHERE Sr_no='$sno'";
    $result=mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);
    if($row['Max_Students']==NULL){
        echo "The team size is not yet mentioned by the teacher.";
    }
    else{
        $sql = "SELECT Group_Code FROM project_code WHERE Roll_No='$user' AND Sr_no= '$sno ' ";
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
    }


?>
</div>
</div>
</body>
</html>