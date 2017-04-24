<?php
	include 'header.php';
	$customers = ORM::for_table('Customers')->find_many();

	$id=$_GET['id'];
	$customer=ORM::forTable('Customers')
		->where('ID', $id)
		->find_one();
?>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/dashboard.php">Dashboard</a>
		</li>
		<li><a href="/customers.php">Customers</a>
		<li class="active">Edit Customer</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
	<h1>Customer
		<small><i class="ace-icon fa fa-angle-double-right"></i> Edit Customer</small>
	</h1>
</div><!-- /.page-header -->
<div class="row">
	<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
<form class="form-horizontal" role="form" action="customer.php?id=<?php echo $customer->ID ?>&type=edit" method="post">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="name"> Name</label>

		<div class="col-sm-9">
			<input type="text" id="name" name="name" placeholder="Customer Name" value="<?php echo $customer->Name ?>" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email</label>

		<div class="col-sm-9">
			<input type="text" id="email" name="email" placeholder="Customer Email" value="<?php echo $customer->Email ?>" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone </label>

		<div class="col-sm-9">
			<input type="text" id="phone" name="phone" placeholder="Phone Number" value="<?php echo $customer->Phone ?>" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

		<div class="col-sm-9">
			<input type="text" id="address" name="address" placeholder="Address" value="<?php echo $customer->Address ?>" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> City </label>

		<div class="col-sm-9">
			<input type="text" id="city" name="city" placeholder="City" value="<?php echo $customer->City ?>" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> State </label>

		<div class="col-sm-9">
			<input type="text" id="state" name="state" placeholder="State" value="<?php echo $customer->State ?>" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> State </label>

		<div class="col-sm-9">
			<input type="text" id="zip" name="zip" placeholder="Zip Code" value="<?php echo $customer->Zip ?>" class="col-xs-10 col-sm-5" />
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
