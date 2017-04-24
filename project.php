<?php include'header.php' ?>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/dashboard.php">Dashboard</a>
		</li>
		<li><a href="/projects.php">Projects</a></li>
		<li class="active">Update Project</li>
	</ul><!-- /.breadcrumb -->
</div>
<?php
	$type=$_GET['type'];

	if($type === 'add') {
	   $project = ORM::for_table('Projects')->create();

	   $name = $_POST["projectName"];
	   $project->projectName = $name;

	   $customerId = $_POST["customerId"];;
	   $project->customerID = $customerID;

     $dueDate = $_POST["dueDate"];
 		 $project->DueDate = $dueDate;

 	   $startDate = $_POST["startDate"];
		 $project->startDate = $startDate;

     $hourlyRate = $_POST["hourlyRate"];
		 $project->HourlyRate = $hourlyRate;

	   $project->save();
     echo "<h2>$name was created.</h2>";
	}
	elseif($type === 'edit') {
		 $id=$_GET['id'];

	   $name = $_POST["projectName"];

     $dueDate = $_POST["dueDate"];

	   $startDate = $_POST["startDate"];

     $hourlyRate = $_POST["hourlyRate"];

     ORM::raw_execute("UPDATE Projects " .
							 "SET ProjectName = :name,  " .
							 "DueDate = :dueDate , " .
							 "StartDate = :startDate , " .
							 "HourlyRate = :hourlyRate  " .
							 "WHERE ID = :id ",
							 array(
								 "id"=> $id,
								 "name"=> $name,
								 "dueDate"=> $dueDate,
								 "startDate"=> $startDate,
								 "hourlyRate" => $hourlyRate
							 )
					 	);
		echo "<h2>$name was updated.</h2>";
	}
	elseif ($type === 'delete') {
		$id=$_GET['id'];

		ORM::raw_execute("UPDATE Projects " .
                 "SET Active = 0  " .
                 "WHERE ID = ? ",
								 array($id)
	);
	  echo "<h2>Success!</h2>";

	};
?>
<?php include'footer.php' ?>
