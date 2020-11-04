<?php
    session_start();
    include("config.php");
    $Auto = $_SESSION['sno'];
    
    $myusername = $_SESSION["login_user"];
    $sql="SELECT DISTINCT Group_Code from project_code WHERE Sr_No='$Auto'";
    $result = mysqli_query($db,$sql);
    $a=1;
	echo "<div class='form-design'><h1>Teams</h1>";
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $group=$row["Group_Code"];
        if ($group=="NULL"){
            continue;
        }
        $sql1="SELECT project_code.Team_Name,student.Name,student.Roll_No FROM student INNER JOIN project_code ON student.Roll_no=project_code.Roll_no WHERE project_code.Group_Code='$group' AND project_code.Sr_No='$Auto' ";
        $result1 = mysqli_query($db, $sql1);
        
        $flag=0;
        while ($row1 = mysqli_fetch_array($result1)) {
            if ($flag==0){
                echo "<div class='sec'><span>".$a."</span>".$row1["Team_Name"]."</div><br><div class='box'>";
                $flag=1;
            }
            echo $row1["Name"] ."  ".$row1["Roll_No"]."<br>";
        }
        $a=$a+1;
		echo "</div>";
    }
	
?>
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
		.form-design h1{
		 text-align: center;
		 border-radius: 10px 10px 0 0;
		color: white;
		text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.13);
		font: normal 35px 'Bitter', serif;
		background: magenta;
		padding: 20px 30px 15px 30px;
		margin: -30px -30px 30px -31px;
		}
		.form-design label{
		display: block;
		font: 15px Arial, Helvetica, sans-serif;
		color: white;
		margin-bottom: 15px;
		}
		.form-design input[type="text"],
		.form-design input[type="date"],
		.form-design input[type="email"],
		.form-design input[type="number"],
		.form-design input[type="password"],
		.form-design textarea,
		.form-design select {
		display: block;
		box-sizing: border-box;
		width: 100%;
		padding: 8px;
		border-radius: 6px;
		border: 2px solid #fff;
		}
		.form-design .sec{
		font: normal 20px 'Bitter', serif;
		color: white;
		margin-bottom: 10px;
		}
		.form-design .sec span {
		border-radius: 50%;
		border: 4px solid #fff;
		font-size: 14px;
		margin-left: -45px;
		color: white;
		 background: magenta;
		padding: 5px 10px 5px 10px;
		position: absolute;
		margin-top: -3px;
		}
		.form-design button{
		  
		 font: normal 30px 'Bitter', serif;
		 background: magenta;
		padding: 8px 20px 8px 20px;
		box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
		border: 1px solid #257C9E;
		font-size: 15px;
		border-radius: 5px;
		color: #fff;
		text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
		}
		.form-design button[type="reset"]{
		 margin-left: 328px;
		}
		.form-design button:hover{
		background: #FF1493;
		box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
		}
    </style>
</head>
<body>
    <br>
    <form action="download.php">
        <button type="submit" value="Download" >Download</button>
    </form>
	</div>
</body>
</html>