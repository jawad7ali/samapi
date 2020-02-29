<?php

 // Include Configuration File 

  include 'includes/config.php';

    // Include Database Class 


  include 'classes/database.php';
  
  $data = new database(); 

  
  //Class for Pagination 
  
  include 'classes/paginator.class.php';
  
  //object of of pagination Class
  
  
  //Include Top Section 
  
  include_once 'includes/top.php'; 

  $data_fe =  $data->con;
  
  //Main query
  $sql_forms = $data_fe->query("SELECT aId FROM awards");
  $totalawards = $sql_forms->num_rows;

  $sql_forms = $data_fe->query("SELECT lId FROM assistance_listing");
  $assistance_listing = $sql_forms->num_rows;

  $sql_forms = $data_fe->query("SELECT cId FROM contract_data");
  $contract_data = $sql_forms->num_rows;

  $sql_forms = $data_fe->query("SELECT eId FROM entity_information");
  $entity_information = $sql_forms->num_rows;

  $sql_forms = $data_fe->query("SELECT id FROM opportunities");
  $opportunities = $sql_forms->num_rows;

  $sql_forms = $data_fe->query("SELECT wId FROM wage_determination");
  $wage_determination = $sql_forms->num_rows;
  
  $sql_forms = $data_fe->query("SELECT fId FROM federal_hierarchy");
  $federal_hierarchy = $sql_forms->num_rows;

   ?>
  
  <body class="no-skin">
     
    <?php 
    // header Section 
    include_once 'includes/header.php';
    ?>

    <div class="main-container ace-save-state" id="main-container">
       <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>


    <?php 
    // Sidebar
    include_once 'includes/sidebar.php';

    ?> 

      <!-- Section main-content -->

    <div class="main-content">
       
      
    <style type="text/css">
    
    </style>
    
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
					<li class="active">Dashboard</li>
				</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<!-- <form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form> -->
				</div><!-- /.nav-search -->
			</div>
			<style type="text/css">
      	.infobox {
    		width: 343px;
		}
		.infobox .infobox-content{
			    max-width: 240px;
		}
      </style>
			<div class="page-content">
				<div class="page-header">
					<h1>
						Dashboard
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							overview &amp; stats
						</small>
					</h1>
				</div><!-- /.page-header -->

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->

						<div class="row">
							<div class="space-6"></div>

							<div class="col-sm-12 infobox-container">
								<div class="row">
								<div class="col-sm-4">
									<a href="<?php echo base_url; ?>opportunities.php">
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-file"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $opportunities; ?></span>
												<div class="infobox-content">Total  Opportunities </div>
											</div>

											<!-- <div class="stat stat-success">8%</div> -->
										</div>
									</a>
								</div>
								<div class="col-sm-4">
									<a href="<?php echo base_url; ?>awards.php">
										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-users"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $totalawards; ?></span>
												<div class="infobox-content">Total Awards</div>
											</div>
										</div>
									</a>
								</div>
								<div class="col-sm-4">
									<a href="<?php echo base_url; ?>assistance-listing.php">
										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $assistance_listing; ?></span>
												<div class="infobox-content">Total  Assistance Listing </div>
											</div>
											<!-- <div class="stat stat-important">4%</div> -->
										</div>
									</a>
								</div>
							</div>
								<div class="row">
									<div class="space-6"></div>
								<div class="col-sm-4">
								<a href="<?php echo base_url; ?>contract-data.php">
									<div class="infobox infobox-pink">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-shopping-cart"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number"><?php echo $contract_data; ?></span>
											<div class="infobox-content">Total Contract Data </div>
										</div>
										<!-- <div class="stat stat-important">4%</div> -->
									</div>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="<?php echo base_url; ?>entity-information.php">
									<div class="infobox infobox-pink">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-shopping-cart"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number"><?php echo $entity_information; ?></span>
											<div class="infobox-content">Total Entity Information</div>
										</div>
										<!-- <div class="stat stat-important">4%</div> -->
									</div>
								</a>
 								</div>
 								<div class="col-sm-4">
 								<a href="<?php echo base_url; ?>federal-hierarchy.php">
									<div class="infobox infobox-pink">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-shopping-cart"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number"><?php echo $federal_hierarchy; ?></span>
											<div class="infobox-content">Total Federal Hierarchy </div>
										</div>
										<!-- <div class="stat stat-important">4%</div> -->
									</div>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="space-6"></div>	
							<div class="col-sm-4">
								<a href="<?php echo base_url; ?>wage-determination.php">
									<div class="infobox infobox-pink">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-shopping-cart"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number"><?php echo $wage_determination; ?></span>
											<div class="infobox-content">Total wage-determination</div>
										</div>
										<!-- <div class="stat stat-important">4%</div> -->
									</div>
								</a>
							</div>
							   

								 
							</div>

							<div class="vspace-12-sm"></div>
 
						</div><!-- /.row -->
 

 

						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->


			<?php 
			  $data_fe =  $data->con;
			   
			  $result = $data_fe->query("SELECT * FROM opportunities ORDER BY postedDate desc limit 20 ");
			?>

              <div class="table-header">
                      Latest opportunities 
              </div> 
 
                <div class="dataTables_wrapper">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="40%">Title</th>
                        <th >Solicitation Number</th>
                        <th >Posted Date</th>
                        <!-- <th >Action</th> -->
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while($data  =   $result->fetch_assoc()){
                    ?>
                   <tr>
                      <td ><?php echo $data['title']?></td>
                      <td ><a target="_blank" href="https://beta.sam.gov/opp/<?php echo $data['noticeId']?>/view"><?php echo $data['solicitationNumber'];?></a></td>
                      <td ><?php echo date( 'm-d-Y h:i:s A' ,strtotime($data['postedDate'])); ?></td>
                     <!--   <td > 
                            <button class="btn btn-xs btn-danger" onClick="if(confirm('Are sure you want to delete')){ window.location='<?php echo base_url;?>process/process_opportunities.php?action=d&id=<?php echo $data['id'];?>'}">
                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                      </td> -->
                     

                   </tr>
                    <?php   } ?>


                    </tbody>

                </table>

                <div class="clearfix"></div>
                   
      
                
               </div> 

    

    <div class="clearfix"></div>

            

		</div>
	</div><!-- /.main-content -->