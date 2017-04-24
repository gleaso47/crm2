<?php include 'header.php'; ?>

<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/dashboard.php">Dashboard</a>
		</li>
		<li><a href="/projects.php">Projects</a></li>
		<li class="active">Add Project</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
	<h1>Projects 
		<small><i class="ace-icon fa fa-angle-double-right"></i> Add New Project</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
		<form action="project.php" class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Project Name </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="enter domain name" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-select-2"> Customer Name </label>
				<div class="col-sm-9">
					<select class="form-control col-xs-10 col-sm-5" id="form-field-select-2" multiple="multiple">
						<?php foreach($customers as $customer){
							echo "<option value=" . $customer->ID . ">" . $customer->Name . "</option>";} 
						?>
					</select>
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> Start Date </label>
				<div class="col-sm-3">
					<div class="input-group">
						<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="mm-dd-yyyy" />
						<span class="input-group-addon">
							<i class="fa fa-calendar bigger-110"></i>
						</span>
					</div>
				</div>
				<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-2"> Due Date </label>
				<div class="col-sm-3">
					<div class="input-group">
						<input class="form-control date-picker" id="id-date-picker-2" type="text" data-date-format="mm-dd-yyyy" />
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
					<input type="text" id="form-field-4" placeholder="enter hourly rate for project" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="clearfix form-actions" >
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="button">
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
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script>
	//datepicker plugin
	//link
		$('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true
		})
	//show datepicker when clicking on the icon
		.next().on(ace.click_event, function(){
			$(this).prev().focus();
		});
			
	//or change it into a date range picker
		$('.input-daterange').datepicker({autoclose:true});
			
</script>