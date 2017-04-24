<?php include 'header.php'; 
	$users = ORM::for_table('Users')->find_many();
	$projects = ORM::for_table('Projects')->find_many();
	$types = ORM::for_table('TimeType')->find_many();

?>
<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />

<div class="page-header">
	<h1>Time Logs 
		<small><i class="ace-icon fa fa-angle-double-right"></i> Add New Time Log</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
		<form action="time.php" class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-select-1"> User Name </label>
				<div class="col-sm-9">
					<select class="form-control col-xs-10 col-sm-5" id="form-field-select-1">
						<option value="">Select A User</option>
						<?php foreach($users as $user){
							echo "<option value=" . $user->ID . ">" . $user->Username . "</option>";} 
						?>
					</select>
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-select-2"> Project Name </label>
				<div class="col-sm-9">
					<select class="form-control col-xs-10 col-sm-5" id="form-field-select-2">
						<option value="">Select A Project</option>
						<?php foreach($projects as $project){
							echo "<option value=" . $project->ID . ">" . $project->ProjectName . "</option>";} 
						?>
					</select>
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3"> Time Type </label>
				<div class="col-sm-9">
					<select class="form-control col-xs-10 col-sm-5" id="form-field-select-3">
						<option value=""> Select A Type </option>
						<?php foreach($types as $type){
							echo "<option value=" . $type->ID . ">" . $type->Name . "</option>";} 
						?>
					</select>
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="timepicker1"> Time Picker </label>
				<div class="input-group bootstrap-timepicker col-sm-9" style="padding:0 12px !important;">
					<input id="timepicker1" type="text" class="form-control col-xs-10 col-sm-5" />
					<span class="input-group-addon">
						<i class="fa fa-clock-o bigger-110"></i>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" placeholder="enter time log details" class="col-xs-10 col-sm-10" />
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
<script src="assets/js/bootstrap-timepicker.min.js"></script>
<script>
	$('#timepicker1').timepicker({
		minuteStep: 1,
		showSeconds: true,
		showMeridian: false,
		disableFocus: true,
		icons: {
			up: 'fa fa-chevron-up',
			down: 'fa fa-chevron-down'
		}
	}).on('focus', function() {
		$('#timepicker1').timepicker('showWidget');
	}).next().on(ace.click_event, function(){
		$(this).prev().focus();
	});
</script>