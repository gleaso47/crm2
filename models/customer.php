<?php include'header.php' ?>
<?php
$customer = ORM::for_table('Customers')->create();

$name = $_POST["name"];
$customer->name = $name;

$phoneNumber = $_POST["phone"];;
$customer->phone = $phoneNumber;

$email = $_POST["email"];
$customer->email = $email;

$address = $_POST["address"];
$customer->address = address;

$state =$_POST["state"];
$customer->state = $state;

$city = $_POST["city"];
$customer->city = $city;

$customer->save();
echo "<h2>$name was created.</h2>";?>

<?php include'footer.php' ?>
