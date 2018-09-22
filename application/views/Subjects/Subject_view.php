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
            <h3 class="box-title">View Teacher</h3>
			<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>index.php/Teachers/grid_view">Back</a> </div>
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
                                                         <h4 class="box-title"> Profile :</h4> 
                                                      </div><!--panel heading end-->
                                                      
                                                      <!--main panel body-->
                                                   <div class="box-body" style="min-height:360px;">
                                                      <div class="col-sm-12" style="padding-left:30px;">
                                                      <img class="img-responsive col-sm-10 img-thumbnail" 
                                                      src="../Copy of Teachers/<?php echo base_url() ?>/upload/profile/<?php echo $teacher_row['displaypicture']; ?>"/></div>
                                                    <?php /*?><div class="col-sm-12 form-group text-center" style="margin-top:25px;">
                                                    <b><?php echo $teacher_row['position'] ?></b><br />
                                                    <?php echo $teacher_row['first_name']?>&nbsp;
                                                    <?php echo $teacher_row['middle_name']?>&nbsp;
                                                    <?php echo $teacher_row['last_name']?>&nbsp;<br />
                                                    <?php echo $teacher_row['phone'] ?><br />
                                                    <a><?php echo $teacher_row['email'] ?></a>
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
                                                 <h4 class="box-title"> Details :</h4> 
                                              </div><!--panel heading end-->
                                              
                                              <!--main panel body-->
                                          <div class="box-body" style="min-height:360px;">
                                          <div class="col-sm-6"> 
                                           <div class="col-sm-12 form-group ">
                                            <label>Name :</label>
                                            <?php echo $teacher_row['first_name']?>&nbsp;
                                            <?php echo $teacher_row['middle_name']?>&nbsp;
                                            <?php echo $teacher_row['last_name']?>&nbsp;
                                            </div>
                                            <div class="col-sm-12 form-group ">
                                            <label>Qualification :</label>
                                            <?php echo $teacher_row['qualification']?>&nbsp;
                                            </div>
                                            <div class="col-sm-12 form-group ">
                                            <label>Date Of Birth  :</label>
                                            <?php echo $teacher_row['date_of_birth']?>&nbsp;
                                            </div>
                                            <div class="col-sm-12 form-group ">
                                            <label>Gender :</label>
                                            <?php echo $teacher_row['gender_type']?>&nbsp;
                                            </div> 
                                            <div class="col-sm-12 form-group ">
                                            <label>Position :</label>
                                            <?php echo  $teacher_row['position'] ?>&nbsp;
                                            </div>
											<div class="col-sm-12 form-group ">
                                                <label>Mobile :</label>
                                                <?php echo $teacher_row['phone']?>&nbsp;
                                            </div> 
                                            </div>
                                             <div class="col-sm-6">
                                            <div class="col-sm-12 form-group ">
                                                <label>Address :</label>
                                                <?php echo $teacher_row['address']?>&nbsp;
                                            </div>
                                     
                                            <div class="col-sm-12 form-group ">
                                                <label>City :</label>
                                               <?php echo $teacher_row['city'] ?>&nbsp;
                                            </div> 
                                            
                                            <div class="col-sm-12 form-group ">
                                                <label>Country :</label>
                                                <?php echo $teacher_row['country_name'] ?>&nbsp;
                                            </div>  
                                             <div class="col-sm-12 form-group">
                                                <label>Zipcode :</label>
                                               <?php echo $teacher_row['zipcode'] ?>&nbsp;
                                               
                                            </div>
                                            
                                                
                                            
                                            <div class="col-sm-12 form-group ">
                                                <label>Email ID :</label>
                                               <a> <?php echo $teacher_row['email']?>&nbsp;</a>
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
