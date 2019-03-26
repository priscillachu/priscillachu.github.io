
<?php

$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$telephone = filter_input(INPUT_POST, 'telephone');
$cakeType = filter_input(INPUT_POST, 'cakeType');
$specialRequests = filter_input(INPUT_POST, 'specialRequests');

$host = "localhost";
$dbfirst_name = "root";
$dblast_name = "";
$dbemail = "";
$telephone = "";
$cakeType = "";
$specialRequests = "";
$dbname = "p&b_database";

//Create connection
$conn = new mysqli ($host, $dbfirst_name, $dblast_name, $dbemail, $telephone, $cakeType, $specialRequests);

if (mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_error() .') ' . mysqli_connect_error());
}
else{
	$sql = " INSERT INTO customer_data (first_name, last_name, email, telephone, cakeType, specialRequests)
	values ('$dbfirst_name', '$dblast_name', '$dbemail', '$telephone', '$cakeType', '$specialRequests') ";
	if ($conn->query($sql)){
		echo "Request has been submitted!";
	}
	else{
		echo "Error: ". $sql ."<br>". $conn->error;
	}
}

if(!empty($first_name)){

}
else{
	echo "Please enter your first name.";
	die();
}

if(!empty($last_name)){

}
else{
	echo "Please enter your last name.";
	die();
}
$conn->close();

if(!empty($email)){

}
else{
	echo "Please enter your email.";
	die();
}

if(!empty($telephone)){

}
else{
	echo "Please enter your phone number.";
	die();
}

if(!empty($cakeType)){

}
else{
	echo "Please specify what type of cake you are ordering.";
	die();
}

if(!empty($specialRequests)){

}
else{
	echo "Please include more detail. If you want to be surprised, write N/A in the text box.";
	die();
}

?>