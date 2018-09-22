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
        <h3 class="box-title">Add Subjects</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" action="<?php echo base_url()?>index.php/Subjects/addsubject" enctype="multipart/form-data">
        <div class="box-body">
          <div class="col-sm-4">
            <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Class Details</div>
            <div class="panel panel-primary col-sm-12"  style="padding:12px;">
              <div class="row">
                <div class="form-group col-sm-12">
                  <label for="selectclass">Select Class</label>
                  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_class" name = "cbo_class"';
                        echo form_dropdown('cbo_class',$cbo_class,set_value('cbo_class'), $attributes);
                   ?>
				  </div>
                
              </div>
			  </div>
          </div>
        <div class="col-sm-6">
            <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Add Subjects</div>
            <div class="panel panel-primary col-sm-12"  style="padding:12px;">
            <div class="form-group">
                <label for="subjectone" >Subject 1</label>
                <input type="text" name="subject_name[]" id="subject_name[]" class="form-control">
				 <?php echo form_error('subject_name[0]','<div style="color:#FF0000;">','</div>'); ?>
				 </div>
			<div class="form-group">	 
				 <label for="subjecttwo" >Subject 2</label>
                <input type="text" name="subject_name[]" id="subject_name[]" class="form-control">
              </div>
			  <div class="form-group">	 
				 <label for="subjectthree" >Subject 3</label>
                <input type="text" name="subject_name[]" id="subject_name[]" class="form-control">
              </div>
			  <div class="form-group">	 
				 <label for="subjectfour" >Subject 4</label>
                <input type="text" name="subject_name[]" id="subject_name[]" class="form-control">
              </div>
			  <div class="form-group">	 
				 <label for="subjectfive" >Subject 5</label>
                <input type="text" name="subject_name[]" id="subject_name[]" class="form-control">
              </div>
			  <div class="form-group">	 
				 <label for="subjectsix" >Subject 6</label>
                <input type="text" name="subject_name[]" id="subject_name[]" class="form-control">
              </div>
			  
		 </div>
        </div>
		</div>
        <!-- /.box-body -->
        <div class="box-footer" align="right">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Subjects/grid_view"> <i class="fa fa-arrow-left"></i> Back</a> </div>
      </form>
    </div>
  </div>
</div>
</section>
</div>
<!-- /.content-wrapper -->
