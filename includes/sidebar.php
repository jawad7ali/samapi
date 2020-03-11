	<?php
              $filename= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
              $page = pathinfo($filename, PATHINFO_FILENAME);
    ?>
	<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				 
				<ul class="nav nav-list">
					<li <?php if($page=='') {?>class="active"<?php } ?>>
						<a href="">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
                    <li <?php if($page=='opportunities') {?>class="active"<?php } ?>>
                        <a href="<?php echo base_url; ?>opportunities.php">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Opportunities </span>
                        </a>
                    </li>
                  <!--   <li <?php if($page=='awards') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>awards.php">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> All Award </span>
						</a>
					</li>
					<li <?php if($page=='assistance-listing') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>assistance-listing.php">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Assistance Listing </span>
						</a>
					</li>

					<li <?php if($page=='contract-data') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>contract-data.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Contract Data </span>
						</a>
					</li>
					<li <?php if($page=='entity-information') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>entity-information.php">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">  Entity Information</span>
						</a>
					</li>
					<li <?php if($page=='federal-hierarchy') {?>class="active"<?php } ?> >
						<a href="<?php echo base_url; ?>federal-hierarchy.php">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Federal Hierarchy </span>
						</a>
					</li>
					<li <?php if($page=='wage-determination') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>wage-determination.php">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text">wage-determination</span>
						</a>
					</li> -->
 
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>