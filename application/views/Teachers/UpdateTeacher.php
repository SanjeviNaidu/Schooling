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
            <h3 class="box-title">Update Teacher</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="<?php echo base_url()?>index.php/Teachers/updateteacher/<?php echo $teacher_row['id'] ?>" enctype="multipart/form-data">
            <div class="box-body">
              <div class="col-sm-6">
                <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Personal Details</div>
                <div class="panel panel-primary col-sm-12"  style="padding:12px;">
                  <div class="row">
                    <div class="form-group col-sm-4">
                      <label for="firstname">First Name</label>
                      <span style="color:#FF0000">*</span>
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" 
				  value="<?php echo $teacher_row['first_name']; ?>" onkeyup="isalpha(this)">
                      <?php echo form_error('firstname','<div style="color:#FF0000;">','</div>'); ?> </div>
                    <div class="col-sm-4 form-group">
                      <label for="middlename">Middle Name</label>
                      <span style="color:#FF0000">*</span>
                      <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" 
				  value="<?php echo $teacher_row['middle_name'];?>" onkeyup="isalpha(this)">
                      <?php echo form_error('middlename','<div style="color:#FF0000;">','</div>'); ?> </div>
                    <div class="col-sm-4 form-group">
                      <label for="lastname">Last Name</label>
                      <span style="color:#FF0000">*</span>
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" 
				  value="<?php echo $teacher_row['last_name']; ?>" onkeyup="isalpha(this)">
                      <?php echo form_error('lastname','<div style="color:#FF0000;">','</div>'); ?> </div>
                  </div>
                  <div class="form-group">
                    <label for="Email">Email Address</label>
                    <span style="color:#FF0000">*</span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" 
				  value="<?php echo $teacher_row['email'];?>" onkeyup="ValidateEmail(this)">
                    <?php echo form_error('email','<div style="color:#FF0000;">','</div>'); ?> </div>
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="dateofbirth">Date of Birth</label>
                      <span style="color:#FF0000">*</span>
                      <input type="text" class="form-control datepicker" id="dob" name="dob" placeholder="Date of Birth" 
				  value="<?php echo $teacher_row['date_of_birth']; ?>">
                      <?php echo form_error('dob','<div style="color:#FF0000;">','</div>'); ?> </div>
                    <div class="col-sm-6 form-group">
                      <label for="gender">Gender</label>
                      <?php $attributes = 'class = "form-control" id = "cbo_sex" ';
                       echo form_dropdown('cbo_sex',$cbo_sex, $teacher_row['gender_id'], $attributes);
                 ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="Address" >Current Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="<?php echo $teacher_row['address']?>">
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-4">
                      <label for="CityName">City Name</label>
                      <input type="text" class="form-control" id="city" name="city" placeholder="City Name" value="<?php echo $teacher_row['city']?>">
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="Country">Country</label>
                      <?php
                            $attributes = 'class = "form-control" id = "cbo_country" ';
                            echo form_dropdown('cbo_country',$cbo_country,$teacher_row['country_id'], $attributes);
                        ?>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="Zipcode">Zipcode</label>
                      <span style="color:#FF0000">*</span>
                      <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode" value="<?php echo $teacher_row['zipcode']?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="phone">Phone Number</label>
                      <span style="color:#FF0000">*</span>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="<?php echo $teacher_row['phone']?>" onkeyup="isnum(this)">
                      <?php echo form_error('phone','<div style="color:#FF0000;">','</div>'); ?> </div>
                    <div class="form-group col-sm-6">
                      <label for="bloodgroup">Blood Group (Optional)</label>
                      <?php $attributes = 'class = "form-control" id = "cbo_blood_group" name = "cbo_blood_group"';
                        echo form_dropdown('cbo_blood_group',$cbo_blood_group,$teacher_row['blood_group_id'], $attributes);
                   ?>
                    </div>
                  </div>
			<input type="hidden" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $teacher_row['username']?>">
             <input type="hidden" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $teacher_row['password']?>">
                  <div class="form-group">
                    <label for="educ">Qualification</label>
                    <span style="color:#FF0000">*</span>
                    <input type="text" class="form-control" id="qual" name="qual" placeholder="Highest Education Degree" 
				value="<?php echo $teacher_row['qualification']?>" 
				onkeyup="isalphanum(this)">
                    <?php echo form_error('qual','<div style="color:#FF0000;">','</div>'); ?> </div>
                  <div class="form-group col-sm-6">
                    <label for="displaypicture"> Profile Image </label>
                    </br>
                    <label class="customUpload btnUpload  btn btn-success"  style="color: #ffffff;  margin-right: 10px;"> <span class="logo-label"><i class="fa fa-upload" aria-hidden="true"></i> Choose File </span>
                    <input type="file" id="displaypicture" name="displaypicture" 
				value="<?php echo $teacher_row['displaypicture']?>" accept="image/jpg, image/jpeg, image/png" />
                    </label>
                    <p class="help-block">* Only JPEG and JPG supported </p>
                    <p class="help-block">* Max 3 MB Upload </p>
                  </div>
                  <div class="col-sm-6 form-group">
                    <label>Profile Image </label>
                    <br />
                    <input type="hidden" name="displaypicture_hidden"  id="displaypicture_hidden"
                        value="<?php echo $teacher_row['displaypicture']; ?>"/>
                    <?php if( $teacher_row['displaypicture'] == ''){ ?>
                    <img class=" img-responsive col-sm-4" src="<?php echo base_url() ?>upload/profile/Capture.JPG"/>
                    <?php }else{ ?>
                    <img class=" img-responsive col-sm-4" 
                        src="<?php echo base_url() ?>upload/profile/<?php echo $teacher_row['displaypicture']; ?>"/>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="h4"><i class="fa fa-building" aria-hidden="true"></i> School Details</div>
                <div class="panel panel-primary col-sm-12"  style="padding:12px;">
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="empcode">Employee Code</label>
                      <input type="text" class="form-control" id="EmpCode" name="EmpCode" placeholder="Employee Code" disabled="disabled" title="Auto generated value Not editable" value="<?php echo $teacher_row['emp_code'] ?>">
                    </div>
                    <div class="col-sm-6 form-group">
                      <label for="position">Current Position</label>
                      <span style="color:#FF0000">*</span>
                      <input type="text" class="form-control" id="position" name="position" placeholder="Designation"
				value="<?php echo $teacher_row['position'] ?>">
                      <?php echo form_error('position','<div style="color:#FF0000;">','</div>'); ?> </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <label for="Doj">Date of Join</label>
                      <input type="text" class="form-control" id="doj" name="doj" placeholder="Date of Join"  
				value="<?php echo $teacher_row['date_of_joining'] ?>" readonly="" title="You can't modify this field" >
                    </div>
                    <?php if(strtoupper($_SESSION['USER_TYPE']) == '' ){ ?>
                    <div class="col-sm-6 form-group">
                      <label for="Dol">Date of Releaving</label>
                      <input type="text" class="form-control datepicker" id="dol" name="dol" placeholder="Date of Leave"  
				value="<?php echo set_value('dol')?> " ></div>
                    <?php } ?>
                  </div>
                  <?php if(strtoupper($_SESSION['USER_TYPE']) == '' ){?>
				  <div class="row">
                  <div class="col-sm-6 form-group">
                    <label for="Status">Status </label>
                    <?php
							$cbo_status = 
							 array(   
							 			'Active' => 'Active',
									    'InActive' =>'InActive'
									  
									);
							$attributes = 'class = "form-control" id = "cbo_status"';
							echo form_dropdown('cbo_status',$cbo_status, $teacher_row['status'], $attributes);
							   ?>
							   
							 
                  </div>
				  </div>
                  <?php }?>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer" align="right">
              <button type="submit" class="btn btn-primary">Save</button>
              <button type="reset" class="btn btn-primary">Reset</button>
              <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Teachers/grid_view"> <i class="fa fa-arrow-left"></i> Back</a> </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->
