 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Document</title>
        <style>
			body{
			background: #2f2f2f;
			}
			.form-design2{
			width:500px;
			padding:30px;
			margin:40px auto;
			background: #2f2f2f;
			border-radius: 10px;
			 border: 1px solid white;
			}
			.form-design2 .box{
			padding: 30px;
			border-radius: 10px;
			margin-bottom: 20px;
			background: magenta;
			color: white;
			font-size: 20px;
			}
			.form-design2 h1{
			 text-align: center;
			 border-radius: 10px 10px 0 0;
			color: white;
			text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.13);
			font: normal 35px 'Bitter', serif;
			background: magenta;
			padding: 20px 30px 15px 30px;
			margin: -30px -30px 30px -31px;
			}
			.form-design2 label{
			display: block;
			font: 15px Arial, Helvetica, sans-serif;
			color: white;
			margin-bottom: 15px;
			}
			.form-design2 input[type="text"],
			.form-design2 input[type="date"],
			.form-design2 input[type="email"],
			.form-design2 input[type="number"],
			.form-design2 input[type="password"],
			.form-design2 textarea,
			.form-design2 select {
			display: block;
			box-sizing: border-box;
			width: 100%;
			padding: 8px;
			border-radius: 6px;
			border: 2px solid #fff;
			}
			.form-design2 .sec{
			font: normal 20px 'Bitter', serif;
			color: white;
			margin-bottom: 10px;
			}
			.form-design2 .sec span {
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
			.form-design2 button{
			  
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
			.form-design2 button[type="reset"]{
			 margin-left: 328px;
			}
			.form-design2 button:hover{
			background: #FF1493;
			box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
			}
		</style>

        <script>
            $(document).ready(function() {
                $('#Mybtn').click(function() {
                    $('#MyForm').toggle(500);
                });
            });
            $(document).ready(function() {
                $('#Mybtn2').click(function() {
                    $('#MyForm1').toggle(500);
                });
            });
        </script>
    </head>

<?php
session_start();
include("config.php");
$Auto = $_GET['Auto'];
$_SESSION['sno']= $Auto;
$myusername = $_SESSION["login_user"];
$sql = "SELECT Group_Code FROM project_code WHERE Roll_no = '$myusername' and Group_Code!='NULL' AND project_code.Sr_No='$Auto' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if ($count != 0) {
    $secret = $row['Group_Code'];

    echo "<div class='form-design2'><h1>".$secret."</h1><br><br><div class='box'>";
    $sql = "SELECT student.Name FROM student INNER JOIN project_code ON student.Roll_no=project_code.Roll_no WHERE project_code.Group_Code='$secret' AND project_code.Sr_No='$Auto' ";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo $row["Name"] . "<br>";
    }
	echo "</div></div>";
} else {
   
?>

    <body>
        <button id="Mybtn" class="corner-button"><span>Create Team</span></button>
        <button id="Mybtn2" class="corner-button"><span>Join Team</span></button>
		
		<div class="top">
			<div class="box">
        <form id="MyForm" action="formteam.php" method="post">
            <label>Project Name</label><br><br>
            <input type="text" name="teamname" placeholder="Project Name" /><br><br>

            <button type="submit" class="btn btn-default" name="submit" value="Submit">Submit</button>
        </form>

		</div>
		</div>
		<div class="form-design">
			<div class="box">
        <form id="MyForm1" action="jointeam.php" method="POST">
            <label>Secret Key</label><br><br>
            <input type="text" name="secret" placeholder="Enter the Secret Key" /><br><br>

            <button type="submit" class="btn btn-default" name="submit" value="Submit">Submit</button>
        </form>
        </div>
		</div>
    </body>

    </html>
<?php


}
?>