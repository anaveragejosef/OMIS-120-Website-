<html>
<body>
	<?php
		$client=$_POST["client"];
		$orderid=$_POST["orderid"];
		$connect=mysqli_connect("");
		if (mysqli_connect_errno()){
			print "Failed to connect to SQL: ".mysqli_connect_error();
		} else{
			print "Connected to Server! <br>";
		}
		$sqlquery="	Select clothing
					From Clothinglog
					Where name="$client" AND orderid="$orderid" ";//AND condition="$clean"?
		$ordercheck=mysqli_query($connect, $sqlquery);
	?>
</body>
</html>