<?php 
	include 'header.php'; 

$customers = ORM::for_table('Customers')->find_many();

/* $person->name = 'Joe Bloggs';
$person->age = 40;

$person->save(); */
?>
<div class="page-header">
	<h1>Projects 
		<small><i class="ace-icon fa fa-angle-double-right"></i> Add New Project</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form">
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
			<div class="clearfix form-actions">
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