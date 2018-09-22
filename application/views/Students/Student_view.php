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
            <h3 class="box-title">View Student Details</h3>
			<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>index.php/Students/grid_view">Back</a> </div>
          </div>
          <!-- /.box-header -->
		  <div class="box-body" style="padding:0px">
                          
                                        <div class="col-sm-12" style="padding:0px">   
                                          <div class="col-sm-3">
                                            <div class="box-group  col-sm-12" style="padding:0px;">
                                             <!--panel success-->
                                               <div class="box box-default">
                                               <!--panel heading-->
                                                      <div class="box-header with-border">
                                                         <h4 class="box-title">Student Profile :</h4> 
                                                      </div><!--panel heading end-->
                                                      
                                                      <!--main panel body-->
                                                   <div class="box-body">
                                                      <div class="col-sm-12" style="padding-top:10px">
                                                      <img class="img-responsive col-sm-12 img-thumbnail" 
                                                      src="<?php echo base_url() ?>/upload/profile/<?php echo $student_row['displaypicture']; ?>"/></div>
                                                    <?php /*?><div class="col-sm-12 form-group text-center" style="margin-top:25px;">
                                                    <b><?php echo $student_row['position'] ?></b><br />
                                                    <?php echo $student_row['first_name']?>&nbsp;
                                                    <?php echo $student_row['middle_name']?>&nbsp;
                                                    <?php echo $student_row['last_name']?>&nbsp;<br />
                                                    <?php echo $student_row['phone'] ?><br />
                                                    <a><?php echo $student_row['email'] ?></a>
                                                    </div><?php */?>
                                                  </div>
                                               </div>
                                            </div>
                                          </div>
                                       
                                           <div class="col-sm-9">
                                          <div class="box-group col-sm-12" style="padding:0px;">
                                             <!--panel success-->
                                       <div class="box box-default">
                                       <!--panel heading-->
                                              <div class="box-header with-border">
                                                 <h4 class="box-title">Student Details :</h4> 
                                              </div><!--panel heading end-->
                                              
                                              <!--main panel body-->
                                          <div class="box-body">
                                          <div class="col-sm-6"> 
                                           <div class="col-sm-12 form-group ">
                                            <label>Name :</label>
                                            <?php echo $student_row['first_name']?>&nbsp;
                                            <?php echo $student_row['middle_name']?>&nbsp;
                                            <?php echo $student_row['last_name']?>&nbsp;
                                            </div>
                                            <div class="col-sm-12 form-group">
                                            <label>Class :</label>
                                            <?php echo $student_row['class_name']?>&nbsp;
                                            </div>
											<div class="col-sm-12 form-group ">
                                            <label>Parent Name :</label>
                                            <?php echo $parent_row['first_name']?>&nbsp;
                                            <?php echo $parent_row['middle_name']?>&nbsp;
                                            <?php echo $parent_row['last_name']?>&nbsp;
                                            </div>
                                            <div class="col-sm-12 form-group ">
                                            <label>Date Of Birth  :</label>
                                            <?php echo $student_row['date_of_birth']?>&nbsp;
                                            </div>
                                            <div class="col-sm-12 form-group ">
                                            <label>Gender :</label>
                                            <?php echo $student_row['gender_type']?>&nbsp;
                                            </div> 
                                            <?php /*?><div class="col-sm-12 form-group ">
                                            <label>Position :</label>
                                            <?php echo  $student_row['position'] ?>&nbsp;
                                            </div><?php */?>
											<div class="col-sm-12 form-group ">
                                                <label>Mobile :</label>
                                                <?php echo $student_row['phone']?>&nbsp;
                                            </div> 
                                            </div>
                                             <div class="col-sm-6">
                                            <div class="col-sm-12 form-group ">
                                                <label>Address :</label>
                                                <?php echo $student_row['address']?>&nbsp;
                                            </div>
                                     
                                            <div class="col-sm-12 form-group ">
                                                <label>City :</label>
                                               <?php echo $student_row['city'] ?>&nbsp;
                                            </div> 
                                            
                                            <div class="col-sm-12 form-group ">
                                                <label>Country :</label>
                                                <?php echo $student_row['country_name'] ?>&nbsp;
                                            </div>  
                                             <div class="col-sm-12 form-group">
                                                <label>Zipcode :</label>
                                               <?php echo $student_row['zipcode'] ?>&nbsp;
                                               
                                            </div>
                                            
                                                
                                            
                                            <div class="col-sm-12 form-group ">
                                                <label>Email ID :</label>
                                               <a> <?php echo $student_row['email']?>&nbsp;</a>
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
    </div>
  </section>
</div>
<!-- /.content-wrapper -->
