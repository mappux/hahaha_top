<?php
SESSION_START();
	$nome=(INPUT_POST,nome,FILTER_SANITIZE_STRING);
	$email=(INPUT_POST,email,FILTER_SANITIZE_STRING);
	
	$result="insert int cadastro (nome,email)values('$nome','$email')";
	$resultado=mysqli_query($con,$result);
 ?>
 