<?php
	include 'header.php';
	$projects = ORM::for_table('Projects')->find_many();
  $customers = ORM::for_table('Customers')->find_many();
	$id=$_GET['id'];
	$project=ORM::for_table('Projects')
		->where('ID', $id)
		->find_one();
?>
<?php
	$customer=ORM::for_table('Customers')
		->where('ID', $project->CustomerID)
		->find_one();
		?>

<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/dashboard.php">Dashboard</a>
		</li>
		<li><a href="/projects.php">Projects</a></li>
		<li class="active">Edit Project</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
	<h1>Projects
		<small><i class="ace-icon fa fa-angle-double-right"></i> Edit Project Information</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-xs-12">
	<form action="project.php?id=<?php echo $project->ID ?>&type=edit" method="post" class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Name </label>
				<div class="col-sm-9">
					<input type="text" id="projectName" name="projectName" placeholder="enter domain name" value="<?php echo $project->ProjectName ?>" class="col-xs-10 col-sm-5" required/>
				</div>
			</div>
			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Customer Name </label>
				<div class="col-sm-9">
					<input type="text" id="customerName" name="customerName" placeholder="enter domain name" value="<?php echo $customer->Name ?>" class="col-xs-10 col-sm-5" disabled/>
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> Start Date </label>
				<div class="col-sm-3">
					<div class="input-group">
						<input class="form-control date-picker" id="startDate" name="startDate" type="date" value="<?php echo $project->StartDate ?>" data-date-format="mm-dd-yyyy" required/>
						<span class="input-group-addon">
							<i class="fa fa-calendar bigger-110"></i>
						</span>
					</div>
				</div>
				<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-2"> Due Date </label>
				<div class="col-sm-3">
					<div class="input-group">
						<input class="form-control date-picker" id="dueDate" name="dueDate" type="date" value="<?php echo $project->DueDate ?>" data-date-format="mm-dd-yyyy" required/>
						<span class="input-group-addon">
							<i class="fa fa-calendar bigger-110"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Hourly Rate </label>
				<div class="col-sm-9">
					<input type="number" id="hourlyRate" name="hourlyRate" placeholder="enter hourly rate for project" value="<?php echo $project->HourlyRate ?>"class="col-xs-10 col-sm-5" required />
				</div>
			</div>
	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Submit
			</button>

			&nbsp; &nbsp; &nbsp;
			<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>
</form>
</div><!-- /.span -->
</div><!-- /.row -->
<?php include 'footer.php' ?>
