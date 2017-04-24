<?php include'header.php' ?>
<?php
	$type=$_GET['type'];

	if($type === 'add') {
	$contact = ORM::for_table('Contacts')->create();

	$firstName = $_POST["firstName"];
	$contact->firstName = $firstName;

  $lastName = $_POST["lastName"];
	$contact->lastName = $lastName;

	$phoneNumber = $_POST["phone"];;
	$contact->phone = $phoneNumber;

	$email = $_POST["email"];
	$contact->email = $email;

	$address = $_POST["address"];
	$contact->address = $address;

	$state =$_POST["state"];
	$contact->state = $state;

	$city = $_POST["city"];
	$contact->city = $city;


	$zip = $_POST["zip"];
	$contact->zip = $zip;

	$contact->save();
	echo "<h2>$name was created.</h2>";
	}
	elseif($type === 'edit') {
		$id=$_GET['id'];

	$firstName = $_POST["firstName"];

  $lastName = $_POST["lastName"];

	$phoneNumber = $_POST["phone"];

	$email = $_POST["email"];

	$address = $_POST["address"];

	$state =$_POST["state"];

	$city = $_POST["city"];

	$zip = $_POST["zip"];


	ORM::raw_execute("UPDATE Contacts " .
							 "SET FirstName = :firstName , " .
               "LastName = :lastName  ," .
							 "Email = :email  ," .
							 "Phone = :phone  ," .
							 "Address = :address , " .
							 "City = :city  ," .
							 "State = :state , " .
							 "Zip = :zip  " .
							 "WHERE ID = :id ",
							 array(
								 "id"=> $id,
								 "firstName"=> $firstName,
                 "lastName"=> $lastName,
								 "phone"=> $phone,
								 "email"=> $email,
								 "address"=> $address,
								 "city"=> $city,
								 "state"=> $state,
								 "zip"=> $zip
							 )
						 );
				echo "<h2>$firstName was updated.</h2>";
	}
	elseif ($type === 'delete') {
		$id=$_GET['id'];

		ORM::raw_execute("UPDATE Contacts " .
                 "SET Active = 0  " .
                 "WHERE ID = ? ",
								 array($id)
	);

	  echo "<h2>Success!</h2>";

	};
?>
<?php include'footer.php' ?>
