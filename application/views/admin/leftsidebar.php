<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								
								<div class="media-body">
									<span class="media-heading text-semibold"> <?php echo PROJECT ?> </span>
									<div class="text-size-mini text-muted">
										<i class="icon-user-plus text-size-small"></i> &nbsp;<?php echo $pagecontent['username']; ?>
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="<?php echo base_url('admin'); ?>/"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="<?php if($method == 'dashboard'){?> active <?php } ?>"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>

								<li class="<?php if($method == 'manageshop' || $method == 'addshop' ||  $method == 'editshop'){?> active <?php } ?>">
									<a href="<?php echo base_url('admin/manageadmin'); ?>"> <i class="icon-office"></i> <span> Shop Administration </span></a>
									<ul> 
										<li class="<?php if($method == 'addadmin'){ ?> active <?php } ?>" ><a href="<?php echo base_url('admin/addadmin'); ?>"> <i class="icon-add"></i> <span> New Shop </span> </a></li>	
										<li class="<?php if($method == 'manageadmin'){ ?> active <?php } ?>" ><a href="<?php echo base_url('admin/manageadmin'); ?>"> <i class="icon-list"></i> <span> Manage Shops </span></a></li>	
									</ul>
								</li>

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>