<!-- Content area -->
<div class="content">
	<!-- Table -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title"> Manage Admin </h5>
    	</div>
    	<div class="panel-body">
    		<div class="text-right">
            	<a href="<?= base_url('admin/addadmin'); ?>" class="btn btn-primary"> Add <i class="icon-add position-right"></i></a>
            </div>
        </div>
    	<div class="panel-body">
			<div class="table-responsive">
				<table id="admin-grid" class="table datatable-basic">
		            <thead>
		                <tr>
		                    <th>ID</th>
		                    <th>Profile Image </th>
		                    <th>Username</th>
		                    <th>Roles</th>		                    
		                    <th>Status</th>
		                    <th>Created</th>
		                    <th>Actions </th>
		                </tr>
		            </thead>
		        </table>
			</div>
		</div>
	</div>
	<!-- /table -->
</div>
</div>
<script type= 'text/javascript'>
jQuery(document).ready(function () {
    var url = '<?php echo base_url(); ?>admin/adminlist';
    jQuery('#admin-grid').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": url,
        "aoColumns": [
			null,
			{ "bSortable": false },	
			null,
			null,
			null,			
			null,			
			{ "bSortable": false },			
		]
    });
});
</script>	    