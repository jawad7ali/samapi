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
  $condition    = "";
  
  //Main query
  $pages = new Paginator;
  $pages->default_ipp = 10;

  $sql_forms = $data_fe->query("SELECT * FROM wage_determination WHERE 1 ".$condition."");

  
  $pages->items_total = $sql_forms->num_rows;
  $pages->mid_range = 2;
  $pages->paginate(); 
   
  $result = $data_fe->query("SELECT * FROM wage_determination WHERE 1 ".$condition." ORDER BY wId desc ".$pages->limit."");


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
                      Latest wage determination

                </div>
                <?php 
                if($pages->items_total>0){
                     
                     ?>
                <div style="margin: 10px 0">
                 <?php echo $pages->display_items_per_page();?>
                </div>
                <?php  } ?>

               


                 <?php 
                 if(isset($_SESSION['wage']['save']) and $_SESSION['wage']['save']!=''){
                 ?> 
                 <div class="pull-left alert alert-success no-margin alert-dismissable">
                    <button class="close" type="button" data-dismiss="alert">
                      <i class="ace-icon fa fa-times"></i>
                    </button>

                    <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
                      <?php echo $_SESSION['wage']['save'];?>
                  </div>
                <?php } unset($_SESSION['wage']['save']); ?>
                <div class="dataTables_wrapper">
                <table class="table">
                    <thead>
                    <tr>
                        <th >Title</th>
                        <th >fullReferenceNumber</th>
                        <th >shortReferenceNumber</th>
                        <th >isActive</th>
                        <th >isStandard</th>
                        <!-- <th >Action</th> -->
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($pages->items_total>0){
                        $n  =   1;
                       while($data  =   $result->fetch_assoc()){ 
            ?>
                        <tr>
                            <td ><?php echo $data['title']?></td>
                            <td ><?php echo $data['fullReferenceNumber'];?></td>
                            <td ><?php echo $data['shortReferenceNumber'];?></td>
                            <td ><?php echo $data['isActive'];?></td>
                            <td ><?php echo $data['isStandard'];?></td>
                           <!--  <td > 
                            <button class="btn btn-xs btn-danger" onClick="if(confirm('Are sure you want to delete')){ window.location='<?php echo base_url;?>process/process_wage_determination.php?action=d&wId=<?php echo $data['wId'];?>'}">
                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                              </button>
  
                             </td> -->
                     

                            
                        </tr>
                    <?php }}else{?>
                        <tr>
                          No records founded !
                        </tr>
                   
                    <?php }  ?>

                    </tbody>

                </table>
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
             <?php } ?>

    

    <div class="clearfix"></div>

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <?php include_once 'includes/footer.php'; ?>
     
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
