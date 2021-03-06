<?php include 'header.php' ?>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/dashboard.php">Dashboard</a>
		</li>
		<li><a href="/customers.php">Customers</a>
		<li class="active">Add Customer</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
	<h1>Customers
		<small><i class="ace-icon fa fa-angle-double-right"></i> Add New Customer</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-xs-12">
<form class="form-horizontal" role="form" action="customer.php?type=add" method="post">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Customer Name </label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" placeholder="enter customer name" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Email</label>
		<div class="col-sm-9">
			<input type="text" id="form-field-2" name="email" placeholder="Customer Email" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Phone </label>
		<div class="col-sm-9">
			<input type="text" id="form-field-3" name="phone" placeholder="Phone Number" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Address </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-4" name="address" placeholder="Address" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-5"> City </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-5" name="city" placeholder="City" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="space-4"></div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-6"> State </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-6" name="state" placeholder="State" class="col-xs-10 col-sm-5" />
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
	</div></form>
</div><!-- /.span -->
</div><!-- /.row -->
<?php include 'footer.php' ?>
