<?php  
  // Include Configuration File 
  include 'includes/config.php';

  // Include Database Class 
  include 'classes/database.php';
  $data = new database();

  //Class for Pagination 
  include 'classes/paginator.class.php';
  
  //Include Top Section 
  include_once 'includes/top.php'; 

  $data_fe =  $data->con;
  $condition ='';
  if(isset($_GET['search']) && isset($_GET['search_by'])){
    $condition = " and ".$_GET['search_by']." like '%".$_GET['search']."%' ";  
  }
  //Main query
  $pages = new Paginator;
  $pages->default_ipp = 10;
  $sql_forms = $data_fe->query("SELECT * FROM opportunities WHERE 1 ".$condition."");
  $pages->items_total = $sql_forms->num_rows;
  $pages->mid_range = 2;
  $pages->paginate();
  $result = $data_fe->query("SELECT * FROM opportunities WHERE 1 ".$condition." ORDER BY id desc ".$pages->limit."");
?>
  <body class="no-skin">
    <style type="text/css">
      .cont-opp{
        padding: 15px;
        background-color: #eee;
      }
      .p-n-margin{
        margin: 0 0 0 0;
      }
      .row-content:hover{
        border: 1px solid green;  
      }
      .row-content{
        padding: 2px;
      }
    </style>
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
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="">Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ul><!-- /.breadcrumb -->
            </div>
            <div class="page-content" style="overflow-x: auto">
              <div class="table-header">
                      Latest opportunities 
              </div>
                <div class="row" style="margin: 10px 0">
                <?php 
                  if($pages->items_total>0){
                ?>
                 <?php echo $pages->display_items_per_page();?>
                <?php  } ?>
                    <form method="GET" action="">
                      <div class="col-xs-3">
                      <div id="dynamic-table_filter" class="dataTables_filter">
                        <label>Search: <input name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; ?><?php } ?>" type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table" style="display: inline-block;"></label>
                      </div>
                    </div>
                    <div class="col-xs-3">
                      <span class="text-muted">Search By</span> 
                      <select name="search_by" class="border rounded text-muted" >
                        <option selected="" value="title">Title</option>
                        <option value="solicitationNumber">Solicitation Number</option> 
                        <option value="department">Department</option> 
                        <option value="noticeId">Notice Id</option> 
                        <option value="subTier">Sub Tier</option> 
                        <option value="office">Office</option> 
                        <option value="baseType">Base Type</option>
                      </select>
                    </div>
                    <div class="col-xs-1">
                      <input type="submit" name="" value="Filter" class="btn btn-success">
                    </div>
                  </form>
                  
                </div>
                 <?php 
                 if(isset($_SESSION['oppertunity']['save']) and $_SESSION['oppertunity']['save']!=''){
                 ?> 
                 <div class="pull-left alert alert-success no-margin alert-dismissable">
                    <button class="close" type="button" data-dismiss="alert">
                      <i class="ace-icon fa fa-times"></i>
                    </button>
                    <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
                      <?php echo $_SESSION['oppertunity']['save'];?>
                  </div>
                <?php } unset($_SESSION['oppertunity']['save']); ?>

               

                <?php 
                if($pages->items_total>0){
                  $n  =   1;
                  while($data  =   $result->fetch_assoc()){ 
                ?>
                 <div class="row row-content" > 

                <div class="col-md-8">

                
                <div class="row"> 
                  
                    <div class="col-md-12">
                      <!-- <p><strong>Title</strong></p> -->
                      <p><a target="_blank" href="https://beta.sam.gov/opp/<?php echo $data['noticeId']?>/view"><strong><?php echo $data['title']?></strong></a></p>
                    </div>

                     <div class="col-md-12">
                        <!-- <p><strong>Description</strong></p> -->
                        <p><?php echo json_decode(str_replace("\t", " ", str_replace("\n", " ", $data['description'])))[0]->content ?></p>
                        <p>....</p>
                      <!-- 
                      <p><strong>Solicitation Number</strong></p>
                      <p><a target="_blank" href="https://beta.sam.gov/opp/<?php echo $data['noticeId']?>/view"><?php echo $data['solicitationNumber'];?></a></p>
                      <p>Posted Date: <?php echo date( 'm-d-Y h:i:s A' ,strtotime($data['postedDate'])); ?></p> -->
                    </div>

                    <div class="col-md-12">
                      <p><strong>Department/Ind. Agency</strong></p>
                      <p><?php echo $data['department']?></p>
                    </div>

                    <div class="col-md-12">
                      <p><strong>Sub-tier</strong></p>
                      <p><?php echo $data['subTier']?></p>
                    </div>

                    <div class="col-md-12">
                      <p><strong>Office</strong></p>
                      <p><?php echo $data['office']?></p>
                    </div>

                  </div>

                  </div>
                  <div class="col-md-4">
                    <div class="cont-opp">
                      <strong> Contract Opportunities</strong>
                    </div>
                    <br>
                    <p class="p-n-margin"><strong>Notice ID</strong></p>
                    <p><?php echo $data['noticeId']?></p>

                    <p class="p-n-margin"><strong>Current Response Date</strong></p>
                    <p><?php echo $data['lastResponseDate']?></p>

                    <p class="p-n-margin"><strong>Last Updated Date</strong></p>
                    <p><?php echo $data['lastUpdatedDate']?></p>

                    <p class="p-n-margin"><strong>Last Published Date</strong></p>
                    <p><?php echo $data['postedDate']?></p>

                    <p class="p-n-margin"><strong>Type</strong></p>
                    <p><?php echo json_decode($data['type'])->value; ?></p>
                  </div>
             </div>
             <hr>
               <?php } } ?>
               
               <!--  <div class="dataTables_wrapper">
                <table class="table">
                    <thead>
                    <tr>
                        <th >Title</th>
                        <th >Solicitation Number</th>
                        <th >Notice Id</th>
                        <th >Department</th>
                        <th >Sub Tier</th>
                        <th >Office</th>
                        <th >Type</th>
                        <th >Status</th>
                        <th >Posted Date</th>
                        <th >Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    
                     if($pages->items_total>0){
                        $n  =   1;
                        while($data  =   $result->fetch_assoc()){ 
                    ?>
                   <tr>
                      <td width="40%"><?php echo $data['title']?></td>
                      <td ><a target="_blank" href="https://beta.sam.gov/opp/<?php echo $data['noticeId']?>/view"><?php echo $data['solicitationNumber'];?></a></td>

                      <td width="40%"><?php echo $data['noticeId']?></td>
                      <td width="40%"><?php echo $data['department']?></td>
                      <td width="40%"><?php echo $data['subTier']?></td>
                      <td width="40%"><?php echo $data['office']?></td>
                      <td width="40%"><?php echo $data['baseType']?></td>
                      <td width="40%"><?php echo $data['active']?></td>
                      <td width="20%"><?php echo date( 'm-d-Y h:i:s A' ,strtotime($data['postedDate'])); ?></td>
                       <td > 
                        <a href="<?php echo base_url;?>opportunity_detail.php?id=<?php echo $data['id']?>" class="btn btn-xs btn-info" >
                          <i class="ace-icon fa fa-eye bigger-120"></i>
                        </a>
                         <button class="btn btn-xs btn-danger" onClick="if(confirm('Are sure you want to delete')){ window.location='<?php echo base_url;?>process/process_opportunities.php?action=d&id=<?php echo $data['id'];?>'}">
                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
  
                      </td>
                     

                   </tr>
                    <?php   } }else{?>
                        <tr>
                          No records founded !
                        </tr>
                   
                    <?php }  ?>

                    </tbody>

                </table> -->

                <div class="clearfix"></div>
                  
                   <?php 

                      if($pages->items_total > 0) {
                      
                      if(isset($_GET['page']) and $_GET['page']!='' and $_GET['page']!=1){
                          $start = $_GET['page']*$_GET['ipp']-1;
                         
                      }else{
                        $start = 1;
                      }


                      $valuess = $pages->items_per_page*$pages->current_page;

                      if($pages->items_total<$valuess){
                        $end = $pages->items_total;
                      }else{
                        $end = $valuess;
                      }

                    ?>
      
                 <div class="row">
                      <div class="col-xs-6">
                        <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing <?php echo $start;?> to <?php echo $end;?> of <?php echo $pages->items_total;?> entries
                        </div>
                      </div>
                      <div class="col-xs-6">
                          <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">  <?php echo $pages->display_pages();?>
                            
                          </div>
                        </div>
                  </div>
               </div>
            <!-- <?php } ?> -->

    

    <div class="clearfix"></div>

            </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->
     
     <?php 
     // Footer
     include_once 'includes/footer.php';

    ?>
     
     <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
  
    </div><!-- /.main-container -->
 
    <?php 
    // Scripts
    include_once 'includes/script.php';
     ?>
    </body>
</html>