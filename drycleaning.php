<!DOCTYPE html>
<html>
<body>
	<?php
		$client=$_POST["client"];
		$phonenumber=$_POST["phone"];
		$clothing=    ;
		$email=$_POST["email"];
		$connect=mysqli_connect("");
		if (mysqli_connect_errno()){
			print "Failed to connect to SQL: ".mysqli_connect_error();
		} else{
			print "Connected to Server! <br>";
		}
		$sqlquery="	INSERT into ClothingLog
					Values ('$client', '$phonenumber', '$clothing', '$email')";
		$neworder=mysqli_query($connect, $sqlquery);
		if (mysqli_query($connect, $sqlquery)) {
    		print "New record created successfully";
	?>
</body>
</html>