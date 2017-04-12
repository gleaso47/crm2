<?php include 'header.php' ?>
<form action="customer.php" method="post">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Customer Name </label>
		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="name" placeholder="Customer Name" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email</label>

		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="email" placeholder="Customer Email" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="phone" placeholder="Phone Number" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="address" placeholder="Address" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> City </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="city" placeholder="City" class="col-xs-10 col-sm-5" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> State </label>

		<div class="col-sm-9">
			<input type="text" id="form-field-1" name="state" placeholder="State" class="col-xs-10 col-sm-5" />
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
<?php include 'footer.php' ?>
