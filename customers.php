<?php
	include 'header.php';

	$customers = ORM::for_table('Customers')->where('Active', True)->find_many();
?>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Home</a>
		</li>
		<li class="active">Customers</li>
	</ul><!-- /.breadcrumb -->
</div>
<div class="page-header">
	<h1>Customers
		<small><i class="ace-icon fa fa-angle-double-right"></i> Customer Information</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-xs-12">
				<table id="simple-table" class="table  table-bordered table-hover">
					<thead>
						<tr>
							<th class="detail-col">Details</th>
							<th>Company Name</th>
							<th>Address</th>
							<th>Email</th>
							<th>Phone</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($customers as $customer){
						$_SESSION["id"] = $customer->ID;
						echo "<tr>
							<td class='center'>
								<div class='action-buttons'>
									<a href='#' class='green bigger-140 show-details-btn'>
										<i class='ace-icon fa fa-angle-double-down'></i>
										<span class='sr-only'>Details</span>
									</a>
								</div>
							</td>
							<td><a href='editCustomers.php?id=$customer->ID'>" . $customer->Name . "</a></td>
							<td>" . $customer->Address . "</td>
							<td>" . $customer->Email . "</td>
							<td>" . $customer->Phone . "</td>
							<td>
								<div class='hidden-sm hidden-xs btn-group'>

									<button class='btn btn-xs btn-info'><a href='editCustomers.php?id=$customer->ID' class='tooltip-info' data-rel='tooltip' title='Edit'><i class='ace-icon fa fa-pencil bigger-120' style='color:white;'></i></a></button>
									<button class='btn btn-xs btn-danger'><a href='customer.php?id=$customer->ID&type=delete' class='tooltip-error' data-rel='tooltip' title='Delete'><i class='ace-icon fa fa-trash-o bigger-120' style='color:white;'></i></a></button>
								</div>
								<div class='hidden-md hidden-lg'>
									<div class='inline pos-rel'>
										<button class='btn btn-minier btn-primary dropdown-toggle' data-toggle='dropdown' data-position='auto'><i class='ace-icon fa fa-cog icon-only bigger-110'></i></button>
										<ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>
											<li>
												<a href='editCustomers.php?$customer->ID' class='tooltip-success' data-rel='tooltip' title='Edit'>
												<span class='green'>
													<i class='ace-icon fa fa-pencil-square-o bigger-120'></i>
												</span>
												</a>
											</li>

									<li>
										<a href='customer.php?$customer->ID&type=delete' class='tooltip-error' data-rel='tooltip' title='Delete'>
											<span class='red'>
												<i class='ace-icon fa fa-trash-o bigger-120'></i>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</td>
				</tr>"	;} ?>
			</tbody>
		</table>
	</div><!-- /.span -->
</div><!-- /.row -->

<?php include 'footer.php'; ?>


<!-- PAGE SPECIFIC SCRIPTS -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="assets/js/dataTables.buttons.min.js"></script>
<script src="assets/js/buttons.flash.min.js"></script>
<script src="assets/js/buttons.html5.min.js"></script>
<script src="assets/js/buttons.print.min.js"></script>
<script src="assets/js/buttons.colVis.min.js"></script>
<script src="assets/js/dataTables.select.min.js"></script>


<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header

					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});

				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});



				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}




				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/


			})
		</script>
