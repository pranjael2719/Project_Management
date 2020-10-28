<?php
session_start();
include("config.php");
$Auto = $_GET['Auto'];
$_SESSION['sno']= $Auto;
$myusername = $_SESSION["login_user"];
   
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
            <input type="text" name="team" placeholder="Enter the Team Size" /><br><br>
            <input type="submit" class="btn btn-default" name="submit" value="Submit" />
        </form>
    </body>

    </html>
