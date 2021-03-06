<?php include'header.php' ?>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/dashboard.php">Dashboard</a>
		</li>
		<li><a href="/customers.php">Customers</a>
		<li class="active">Update Customer</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
	<h1>Customer 
		<small><i class="ace-icon fa fa-angle-double-right"></i> Update Customer</small>
	</h1>
</div><!-- /.page-header -->
<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
<?php
	$type=$_GET['type'];

	if($type === 'add') {
	$customer = ORM::for_table('Customers')->create();

	$name = $_POST["name"];
	$customer->Name = $name;

	$phoneNumber = $_POST["phone"];;
	$customer->phone = $phoneNumber;

	$email = $_POST["email"];
	$customer->email = $email;

	$address = $_POST["address"];
	$customer->address = $address;

	$state =$_POST["state"];
	$customer->state = $state;

	$city = $_POST["city"];
	$customer->city = $city;


	$zip = $_POST["zip"];
	$customer->zip = $zip;

	$customer->save();
	echo "<h2>$name was created.</h2>";
	}
	elseif($type === 'edit') {
		$id=$_GET['id'];

	$name = $_POST["name"];

	$phoneNumber = $_POST["phone"];

	$email = $_POST["email"];

	$address = $_POST["address"];

	$state =$_POST["state"];

	$city = $_POST["city"];

	$zip = $_POST["zip"];

	ORM::raw_execute("UPDATE Customers " .
							 "SET Name = :name , " .
							 "Email = :email  ," .
							 "Phone = :phone  ," .
							 "Address = :address , " .
							 "City = :city  ," .
							 "State = :state , " .
							 "Zip = :zip  " .
							 "WHERE ID = :id ",
							 array(
								 "id"=> $id,
								 "name"=> $name,
								 "phone"=> $phone,
								 "email"=> $email,
								 "address"=> $address,
								 "city"=> $city,
								 "state"=> $state,
								 "zip"=> $zip
							 )
);
	echo "<h2>$name was updated.</h2>";
	}
	elseif ($type === 'delete') {
		$id=$_GET['id'];

		ORM::raw_execute("UPDATE Customers " .
                 "SET Active = 0  " .
                 "WHERE ID = ? ",
								 array($id)
	);
		//$customer->save();
	  echo "<h2>Success! $name was deleted.</h2>";

	};
?>
</div>
</div>
<?php include'footer.php' ?>
