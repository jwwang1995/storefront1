<?PHP


$name=$_POST['name'];
$surname=$_POST['surname'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$phone=$_POST['usrtel'];
$email=$_POST['email'];
		
	print "<p>Name: $name </br>
			Surname: $surname </br>
			Address: $address </br>
			City: $city </br>
			State: $state </br>
			Zip Code: $zipcode </br> </p>";
?>