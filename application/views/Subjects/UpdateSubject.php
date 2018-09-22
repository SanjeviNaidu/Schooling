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
      <form role="form" method="post" action="<?php echo base_url()?>index.php/Subjects/updatesubject/<?php echo $cbo_class['id']?>" 
	  enctype="multipart/form-data">
	  <div class="box-body">
          <div class="col-sm-4">
            <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Class Details</div>
            <div class="panel panel-primary col-sm-12"  style="padding:12px;">
              <div class="row">
                <div class="form-group col-sm-12">
                  <label for="selectclass">Select Class</label>
                  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_class" name = "cbo_class"';
                        echo form_dropdown('cbo_class',$cbo_class,$cbo_class['class_name'], $attributes);
                   ?></div>
                
              </div>
			  </div>
          </div>
		  
        <div class="col-sm-6">
            <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Update Subjects</div>
            <div class="panel panel-primary col-sm-12"  style="padding:12px;">
			<?php foreach ($subject_row as $row): ?>
            <div class="form-group">
                <input type="text" name="subject_name[]" id="subject_name[]" class="form-control" value="<?php echo $row['subject_name']?>">
				 </div>
			  
		<?php endforeach ?>
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
