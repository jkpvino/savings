<!-- Content area -->
<div class="content">
	<!-- Table -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title"> Admin </h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
    	</div>

    	<!-- <div class="panel-body">
    		Starter pages include the most basic components that may help you start your development process - basic grid example, panel, table and form layouts with standard components. Nothing extra.
    	</div> -->

    	<div class="panel-body">
			<div class="table-responsive">
			<?php if(validation_errors()){?> 
			<div class="alert alert-block alert-danger fade in">
			    <button type="button" class="close close-sm" data-dismiss="alert">
			        <i class="fa fa-times"></i>
			    </button>
			    <?php echo validation_errors(); ?>
			</div>
			<?php } ?>

				<form method="post" id="apiMerchant" action="<?= base_url('admin/addadmin'); ?>"> 
					<fieldset>
						<div class="form-group">
							<label class="control-label col-lg-3">Name</label>
							<div class="col-lg-8">
								<div class="input-group">
									<span class="input-group-addon bg-primary"><i class="icon-user"></i></span>
									<input type="text" name="fullname" id="fullname" value="<?= set_value('fullname') ?>" class="form-control" placeholder="Full Name">
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend class="text-bold">  </legend>
						<div class="form-group">
							<label class="control-label col-lg-3">UserName</label>
							<div class="col-lg-8">
								<div class="input-group">
									<span class="input-group-addon bg-primary"><i class="icon-user-lock"></i></span>
									<input type="text" value="<?= set_value('username') ?>" name="username" id="username" class="form-control" placeholder="Username">
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend class="text-bold">  </legend>
						<div class="form-group">
							<label class="control-label col-lg-3">Password</label>
							<div class="col-lg-8">
								<div class="input-group">
									<span class="input-group-addon bg-primary"><i class="icon-key"></i></span>
									<input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password">
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend class="text-bold">  </legend>
						<div class="form-group">
							<label class="control-label col-lg-3">Email</label>
							<div class="col-lg-8">
								<div class="input-group">
									<span class="input-group-addon bg-primary"><i class="icon-mail5"></i></span>
									<input type="text" value="<?= set_value('email') ?>" id="email" name="email" class="form-control" placeholder="Email">
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend class="text-bold">  </legend>
						<div class="form-group">
							<label class="control-label col-lg-3">Roles</label>
							<div class="col-lg-8">
								<div class="input-group">
									<span class="input-group-addon bg-primary"><i class="icon-folder-upload2"></i></span>
									<select class="form-control" id="roles" name="roles">
		                                <option value="20">Sub Admin</option> <?php ?>
		                               <?php if($pagecontent['roles']== 10){ echo '<option value="10">Super Admin</option>'; }?>
		                            </select>
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend class="text-bold">  </legend>
						<div class="form-group">
							<label class="control-label col-lg-3">Status</label>
							<div class="col-lg-8">
								<div class="input-group">
									<span class="input-group-addon bg-primary"><i class="icon-folder-upload2"></i></span>
									<select class="form-control" id="status" name="status">
		                                <option value=""> -- Select -- </option>
		                                <option value="1">Active</option>
		                                <option value="0">Inactive</option>
		                            </select>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br>

					<fieldset>
					<div class="text-right">
						<button class="btn btn-primary" name="submit" id="submit" type="submit">Submit <i class="icon-arrow-right14 position-right"></i></button>
					</div>
					</fieldset>
				</form>

			</div>
		</div>
	</div>
	<!-- /table -->
</div>



<script type="text/javascript">
	$(document).ready(function(){
		$(".checkbox").click(function(){			 
		    $('.checker span', this).toggleClass('checked unchecked');
		    var $checkbox='';
		       $checkbox = $(".checker",this).find(':checkbox');
		     //	 alert($checkbox.html());
        $checkbox.attr('checked',!$checkbox.attr("checked"));
		});


		$("#apiMerchant").submit(function(event) {
    		var form = $(this);
    
    	form.find("input:not(:checked)").each(function() {
        var input  = $(this),
            hidden = $("<input/>").attr({
                type: "hidden",
                name: input.attr("name"),
                value: "0",
            });
        hidden.insertAfter(input[type='checkbox']);
    });
})
	})


 
</script>







