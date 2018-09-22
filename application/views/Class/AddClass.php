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
        <h3 class="box-title">Add Class Information</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" action="<?php echo base_url()?>index.php/Classes/addclass" enctype="multipart/form-data">
        <div class="box-body">
          <div class="col-sm-12">
            <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Personal Details</div>
            <div class="panel panel-primary col-sm-12"  style="padding:12px;">
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="classname">Class Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="classname" name="classname" placeholder="class name" 
				  value="<?php echo set_value('classname')?>" onkeyup="isalphanum(this)">
                  <?php echo form_error('classname','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="classnum">Class Number</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="classnum" name="classnum" placeholder="Class Number" 
				  value="<?php echo set_value('classnum')?>" onkeyup="isalphanum(this)">
				  </div>
                <div class="col-sm-4 form-group">
                  <label for="capacity">Class Capacity</label>
                  <span style="color:#FF0000">*</span>
                  <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Class Capacity" min="1"
				  value="<?php echo set_value('capacity')?>" onkeyup="isnum(this)">
                  <?php echo form_error('capacity','<div style="color:#FF0000;">','</div>'); ?> </div>
              </div>
			  
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="startdate">Class Starting On:</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control datepicker" id="startdate" name="startdate" placeholder="yyyy-mm-dd"
				  value="<?php echo set_value('startdate')?>"><?php echo form_error('startdate','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="enddate">Class Ending On:</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control datepicker" id="enddate" name="enddate" placeholder="yyyy-mm-dd"
				  value="<?php echo set_value('enddate')?>"><?php echo form_error('enddate','<div style="color:#FF0000;">','</div>'); ?>
                </div>
				 <div class="form-group col-sm-4">
                  <label for="enddate">Class Teacher <small>(incharge)</small>:</label>
				  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_teacher" ';
                        echo form_dropdown('cbo_teacher',$cbo_teacher,set_value('cbo_teacher'), $attributes);
                   ?>
				  <?php echo form_error('cbo_teacher','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
			  <div class="row">
                <div class="form-group col-sm-4">
                  <label for="loation">Class Location</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="location" name="location" placeholder="Class Location" 
				  value="<?php echo set_value('location')?>" onkeyup="">
                </div>
			  </div>
			  </div>
			  </div>
			  </div>
			  
             
        <!-- /.box-body -->
        <div class="box-footer" align="right">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Classes/grid_view"> <i class="fa fa-arrow-left"></i> Back</a> </div>
      </form>
    </div>
  </div>
</div>
</section>
</div>
<!-- /.content-wrapper -->
