<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
#MyForm{
    display: none;
    width: 300px;
    border: 1px solid #ccc;
    padding: 14px;
    background: #ececec;
}	
#MyForm1{
    display: none;
    width: 300px;
    border: 1px solid #ccc;
    padding: 14px;
    background: #ececec;
}

</style>

<script>
$(document).ready(function(){
	$('#Mybtn').click(function(){
  		$('#MyForm').toggle(500);
  });   
});
$(document).ready(function(){
	$('#Mybtn2').click(function(){
  		$('#MyForm1').toggle(500);
  });   
});
</script>
</head>
<body>
<button id="Mybtn" class="btn btn-primary">Create Team</button>
<button id="Mybtn2" class="btn btn-primary">Join Team</button>
<form id="MyForm" action="formteamp.php" method="post">
  	<label>Project Name</label><br><br>
	<input type="text" name="teamname" placeholder="Project Name"/><br><br>
  
  	<input type="submit" class="btn btn-default" name="submit" value="Submit"/>
</form>

<form id="MyForm1" action="jointeam.php" method="POST">
  	<label>Secret Key</label><br><br>
	<input type="text" name="secret" placeholder="Enter the Secret Key"/><br><br>
  
  	<input type="submit" class="btn btn-default" name="submit" value="Submit"/>
</form>
</body>
</html>


<?php
 //echo $_GET['Auto'];
 $rand_number = rand(100000,10000000);
 $secret_key = base64_encode($rand_number);
//  echo $secret_key;

 $message = "";
if(isset($_POST['create'])){ //check if form was submitted
  $input = $_POST['inputText']; //get input text
  $message = "Success! You entered: ".$input;
}    

 
?>