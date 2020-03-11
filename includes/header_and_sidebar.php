              <?php
              $filename= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
              $page = pathinfo($filename, PATHINFO_FILENAME);

              ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<base href="<?php echo base_url; ?>">
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							GSA GOV
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						 

						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
 

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Admin Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				 
				<ul class="nav nav-list">
					<li <?php if($page=='') {?>class="active"<?php } ?>>
						<a href="index.php">
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
                    <!-- <li <?php if($page=='awards') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>awards.php">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> All Award </span>
						</a>
					</li>
					<li <?php if($page=='assistance-listing') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>assistance-listing.php">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Assistance Listing </span>
						</a>
					</li>

					<li <?php if($page=='contract-data') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>contract-data.php">
							<i class="menu-icon fa fa-list"></i>
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
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Federal Hierarchy </span>
						</a>
					</li>
					<li <?php if($page=='wage-determination') {?>class="active"<?php } ?>>
						<a href="<?php echo base_url; ?>wage-determination.php">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">wage-determination</span>
						</a>
					</li> -->
 
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
