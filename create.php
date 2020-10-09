<?php
 echo $_GET['Auto'];
 $rand_number = rand(100000,10000000);
 $secret_key = base64_encode($rand_number);
 echo $secret_key;

 
?>