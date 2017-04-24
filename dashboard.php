<?php include 'header.php' ?>
<?php
	$customers = ORM::for_table('Customers')->where('Active', True)->find_many();

	$projects = ORM::forTable('Projects')
		->table_alias('p')
    ->select('p.*')
    ->select('c.Name', 'CustomerName')
		->select('c.Phone', 'CustomerPhone')
		->join('Customers','c.ID = p.CustomerID', 'c')
		->where('p.Active', 1)
		->find_many();

	$customersWithProjects = ORM::forTable('Customers')
		->table_alias('c')
		->select('c.*')
		->select('p.ProjectName', 'ProjectName')
		->join('Projects','p.CustomerID = c.ID', 'p')
		->where('p.Active', 1)
		->find_many();
?>
	<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<i class="ace-icon fa fa-check green"></i>
					Welcome to Bits Please
					<strong class="green">
						BitsPlease 2017
						<small>(v1.0)</small>
				</div>
				<div class="space-6"></div>
				<div class="hr hr32 hr-dotted"></div>

				<div class="row">
					<div>
						<div class="widget-box transparent">
							<div class="widget-header widget-header-flat">
								<h4 class="widget-title lighter">
									<i class="ace-icon fa fa-star orange"></i>
									Current Projects
								</h4>

								<div class="widget-toolbar">
									<a href="#" data-action="collapse">
										<i class="ace-icon fa fa-chevron-up"></i>
									</a>
								</div>
							</div>
							<div>
								<table id="simple-table" class="table  table-bordered table-hover">
									<thead>
										<tr>
											<th>Company Name</th>
											<th>Domain</th>
											<th>Due Date</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach($projects as $project){
										echo "
										<tr>
											<td>" . $project->CustomerName . "</td>
											<td>" . $project->ProjectName . "</td>
											<td>" . $project->DueDate . "</td>
										</tr>"
									;} ?>
							</tbody>
							</table>
							</div><!-- /.span -->
						</div><!-- /.widget-box -->
					</div><!-- /.col -->

				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->

<?php include 'footer.php' ?>
