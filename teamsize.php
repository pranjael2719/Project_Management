<?php
    session_start();
    include("config.php");
    $sno = $_SESSION['sno'];
    $size=$_POST['team'];
    $sql1= "UPDATE classroom SET Max_Students='$size'WHERE Sr_no= '$sno '";
    if($db->query($sql1) ===TRUE){
        echo "Team size fixed.";
        //$a="display.php?Auto=".$sno;
        //header("location: ".$a);
    }
    else{
        echo "Error: " . $sql . "<br>" . $db->error;
    }

?>
