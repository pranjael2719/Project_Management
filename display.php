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

    echo "The team secret key for members to join is ".$secret."<br><br>    ";
    $sql = "SELECT student.Name FROM student INNER JOIN project_code ON student.Roll_no=project_code.Roll_no WHERE project_code.Group_Code='$secret' AND project_code.Sr_No='$Auto' ";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo $row["Name"] . "<br>";
    }
} else {
   
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Document</title>
        <style>
         

            #MyForm1 {
                display: none;
                width: 300px;
                border: 1px solid #ccc;
                padding: 14px;
                background: #ececec;
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

    <body>
        
        <button id="Mybtn2" class="btn btn-primary">Team Size</button>
        <form id="MyForm" action="view.php" method="post">
            <input type="submit" class="btn btn-default" name="submit" value="View Team" />
        </form>

        <form id="MyForm1" action="teamsize.php" method="POST">
            <label>Fix team size </label><br><br>
            <input type="text" name="secret" placeholder="Enter the Team Size" /><br><br>

            <input type="submit" class="btn btn-default" name="submit" value="Submit" />
        </form>
    </body>

    </html>
<?php


}
?>