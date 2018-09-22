<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="box">
	  <div class="box-header with-border">
		<span class="h3">Subject List</span>
        <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>index.php/Subjects/addsubject"><i 
	class="fa fa-plus fa-fw"></i>Add New</a>
	
      </div>
    </div>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <div class="col-sm-12" >
		
          <table id="example1" class="table table-bordered table-striped table-responsive table-hover">
            <thead>
              <tr>
			  <th><input type="checkbox" name="all" id="all" value="all" /></th>
                <th>Sl No</th>
				<th>Class name</th>
                <th>Subjects Code</th>
                <th>Subjects name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $slno = 0; ?>
              <?php foreach ($subject as $row): ?>
              <?php $slno = $slno + 1; ?>
              <tr>
			  <td align="center"><input type="checkbox" name="<?php echo $row['id'];?>" id="<?php echo $row['id'];?>" 
			  value="<?php echo $row['id'];?>" /></td>
                <td><?php echo $slno; ?></td>
				<td><?php echo $row['class_name']; ?></td>
				<td><?php echo $row['subject_code']?></td>
				<td><?php echo $row['subject_name']?></td>
				<td align="center"><a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>index.php/Subjects/updatesubject/<?php echo $row["class_id"] ?>" title="Click to Update"><i class="fa fa-edit fa-fw fa-lg"></i></a>
                 <?php if(strtoupper($_SESSION['USER_TYPE']) == '' ){ ?>
                  <a class="btn btn-danger btn-sm" href="" onClick="show_confirm('delete_record','<?php echo $row["id"] ?>')" title="Click to Delete"><i class="fa fa-trash fa-fw fa-lg"></i></a>
                  <?php } ?>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <!-- table end-->
        </div>
      </div>
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
	function show_confirm(act,gotoid)
	{
	if(act=="edit")
	var r=confirm("Do you really want to edit?");
	else
	var r=confirm("Do you really want to delete?");
	
	if (r==true){
	window.location="<?php echo base_url();?>index.php/Project/"+act+"/"+gotoid;
	}
	
	}
	</script>
