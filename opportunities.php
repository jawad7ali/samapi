<?php
  
  // Include Configuration File 

  include 'includes/config.php';

    // Include Database Class 


   //include 'classes/database.php';

  //Class for Oppertunity
  
  include 'classes/Oppertunity.php';
  
  //object of Oppertunity
  
  $oppertunity = new Oppertunity();  
  
  //Include Top Section 
  
  include_once 'includes/top.php'; 

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
                <table class="table">
                    <thead>
                    <tr>
                        <th >Title</th>
                        <th >Solicitation Number</th>
                        <th >Department</th>
                        <th >Office</th>
                        <th >Type</th>
                        <th >Archive Type</th>
                        <th >Archive Date</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($oppertunity->get_data() as $data){ ?>
                   <tr>
                       <td ><?php echo $data->title?></td>
                       <td ><?php echo $data->solicitationNumber?></td>
                       <td ><?php echo $data->department?></td>
                       <td ><?php echo $data->office?></td>
                       <td ><?php echo $data->type?></td>
                       <td ><?php echo $data->archiveType?></td>
                       <td ><?php echo $data->archiveDate?></td>
                       
                   </tr>
                    <?php } ?>

                    </tbody>

                </table>

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