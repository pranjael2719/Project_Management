<?php
    session_start();
    include("config.php");
    $Auto = $_SESSION['sno'];
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, array("Group_No","Project Title",'Name', 'Registration No'));
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
        while ($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
            array_unshift($row1,$a);
            fputcsv($output, $row1);
        }
        $a=$a+1;
    }
?>

