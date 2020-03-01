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
  if(isset($_GET['id'])){
    $condition = " and id=".$_GET['id']." ";  
  }
  //Main query
  $pages = new Paginator;
  $pages->default_ipp = 10;
  $sql_forms = $data_fe->query("SELECT * FROM opportunities WHERE 1 ".$condition."");
  $pages->items_total = $sql_forms->num_rows;
  $pages->mid_range = 2;
  $pages->paginate();
  $result = $data_fe->query("SELECT * FROM opportunities WHERE 1 ".$condition." ORDER BY id desc ".$pages->limit."");
  $data  =   $result->fetch_assoc();

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
            <div class="page-content">
              <div class="table-header">
                    opportunity Detail
              </div>
              <br>
              <div class="">
                <div class="row"> 
                  
                    <div class="col-md-3">
                      <p><strong>Title</strong></p>
                      <p><?php echo $data['title']?></p>
                    </div>

                     <div class="col-md-3">
                      <p><strong>Solicitation Number</strong></p>
                      <p><a target="_blank" href="https://beta.sam.gov/opp/<?php echo $data['noticeId']?>/view"><?php echo $data['solicitationNumber'];?></a></p>
                      <p>Posted Date: <?php echo date( 'm-d-Y h:i:s A' ,strtotime($data['postedDate'])); ?></p>
                    </div>

                    <div class="col-md-3">
                      <p><strong>Notice Id</strong></p>
                      <p><?php echo $data['noticeId']?></p>
                    </div>

                    <div class="col-md-3">
                      <p><strong>Department</strong></p>
                      <p><?php echo $data['department']?></p>
                    </div>

                  </div>
                  <br><br>
                  <div class="row">
                    <div class="col-md-3">
                      <p><strong>sub Tier</strong></p>
                      <p><?php echo $data['subTier']?></p>
                    </div>

                    <div class="col-md-3">
                      <p><strong>Office</strong></p>
                      <p><?php echo $data['office']?></p>
                    </div>

                    <div class="col-md-3">
                      <p><strong>Base Type</strong></p>
                      <p><?php echo $data['baseType']?></p>
                    </div>

                    <div class="col-md-3">
                      <p><strong>Status</strong></p>
                      <p><?php echo $data['active']; ?></p>
                    </div>
                  </div>
                  <br><br>
                  <div class="row"> 
                    <div class="col-md-10">
                      <p><strong>Description</strong></p>
                      <p><?php echo json_decode(str_replace("\t", " ", str_replace("\n", " ", $data['description'])))[0]->content ?></p>
                    </div>

                    </div>
                  </div>
                   
                </div>
                  
            
        

    

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