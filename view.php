<?php
    session_start();
    include("config.php");
    $Auto = $_SESSION['sno'];
    
    $myusername = $_SESSION["login_user"];
    $sql="SELECT DISTINCT Group_Code from project_code WHERE Sr_No='$Auto'";
    $result = mysqli_query($db,$sql);
    $a=1;
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $group=$row["Group_Code"];
        if ($group=="NULL"){
            continue;
        }
        $sql1="SELECT project_code.Team_Name,student.Name,student.Roll_No FROM student INNER JOIN project_code ON student.Roll_no=project_code.Roll_no WHERE project_code.Group_Code='$group' AND project_code.Sr_No='$Auto' ";
        $result1 = mysqli_query($db, $sql1);
        echo "Group ".$a."<br>";
        $flag=0;
        while ($row1 = mysqli_fetch_array($result1)) {
            if ($flag==0){
                echo "Project Title: ".$row1["Team_Name"]."<br>";
                $flag=1;
            }
            echo $row1["Name"] ."  ".$row1["Roll_No"]."<br>";
        }
        $a=$a+1;
    }
?>