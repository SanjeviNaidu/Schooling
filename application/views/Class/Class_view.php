<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-sm-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">View Class Details</h3>
			<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>index.php/Classes/grid_view">Back</a> </div>
          </div>
          <!-- /.box-header -->
		  <div class="box-body" style="padding:0px">
            <div class="col-sm-12" style="padding:0px">   
                                          <div class="col-sm-8">
                                          <div class="box-group col-sm-12" style="padding:0px;">
                                             <!--panel success-->
                                      		 <div class="box box-default">
                                       <!--panel heading-->
                                              <div class="box-header with-border">
                                                 <h4 class="box-title"> Details :</h4> 
                                              </div><!--panel heading end-->
                                              
                                              <!--main panel body-->
                                          <div class="box-body" style="min-height:360px;">
                                          <div class="col-sm-6"> 
										  <div class="col-sm-12 form-group ">
                                            <label>Class Number :</label>
                                            <?php echo $class_row['class_number']?>&nbsp;
                                            </div>
											<div class="col-sm-12 form-group ">
                                            <label>Class Name :</label>
                                            <?php echo $class_row['class_name']?>&nbsp;
                                            </div>
                                           <div class="col-sm-12 form-group ">
                                            <label>Class Teacher Name :</label>
											<a href="">
                                            <?php echo $class_row['first_name']?>&nbsp;
                                            <?php echo $class_row['middle_name']?>&nbsp;
                                            <?php echo $class_row['last_name']?>&nbsp;</a>
                                            </div>
											<div class="col-sm-12 form-group ">
                                            <label>Status :</label>
											<?php if(strtoupper($class_row['status']) != 'INACTIVE'   ){?>
											<span class="label" style="background-color:green; padding:5px; 
											color:#fff"><?php echo $class_row['status'];?></span>
                               				<?php }elseif(strtoupper($class_row['status']) != 'ACTIVE'  ){?>
											<span class="label" style="background-color:red; padding:5px; 
											color:#fff"><?php echo $class_row['status'];?></span>
                                            <?php }?>
											</div>
                                           </div>
										  <div class="col-sm-6">
											 <div class="col-sm-12 form-group ">
                                            <label>Class Capacity :</label>
                                            <?php echo $class_row['class_capacity']?>&nbsp;
                                            </div>
											<div class="col-sm-12 form-group ">
                                            <label>Class Starting date :</label>
                                            <?php echo $class_row['class_starting_date']?>&nbsp;
                                            </div>
                                           <div class="col-sm-12 form-group ">
                                            <label>Class Ending date :</label>
                                            <?php echo $class_row['class_ending_date']?>&nbsp;
                                            </div>
											<div class="col-sm-12 form-group ">
                                            <label>Number of Active Students :</label>
                                            <?php echo $number_of_students['number_of_students']?>&nbsp;
                                            </div>
                                           </div>
                                             
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
          </div> 
           </div>
          
        </div>
  </section>
</div>
<!-- /.content-wrapper -->
