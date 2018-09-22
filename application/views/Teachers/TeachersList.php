<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="box">
	  <div class="box-header with-border">
		<span class="h3">Teachers List</span>
        <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>index.php/Teachers/addteacher"><i 
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
				<th>Picture</th>
                <th>Name</th>
                <th>Position</th>
			    <th>EmailId</th>
                <th>Phone No.</th>
                <th>Qualification</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $slno = 0; ?>
              <?php foreach ($teacher as $row): ?>
              <?php $slno = $slno + 1; ?>
              <tr>
			  <td align="center"><input type="checkbox" name="<?php echo $row['id'];?>" id="<?php echo $row['id'];?>" value="<?php echo $row['id'];?>" /></td>
                <td><?php echo $slno; ?></td>
				<td><img class=" img-responsive img-sm"  
                src="<?php echo base_url() ?>upload/profile/<?php echo $row['displaypicture']; ?>"/></td>
				<td><a href="<?php echo base_url(); ?>index.php/Teachers/single_view/<?php echo $row['id'] ?>"> <?php echo $row['first_name'];?>&nbsp; <?php echo $row['middle_name'];?>&nbsp; <?php echo $row['last_name'];?></a></td>
                <td><?php echo $row['position']; ?></td>
				<td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['qualification']; ?></td>
				<?php if(strtoupper($row['status']) != 'INACTIVE'   ){?>
                                <td class="text-center"><span class="label" style="background-color:green; padding:5px; color:#fff"><?php echo $row['status'];?></span></td>
                                <?php }elseif(strtoupper($row['status']) != 'ACTIVE'  ){?>
                                <td class="text-center"><span class="label" style="background-color:red; padding:5px; color:#fff"><?php echo $row['status'];?></span></td>
                               
                                <?php }?>
				
				
                <td align="center"><a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>index.php/Teachers/updateteacher/<?php echo $row["id"] ?>" title="Click to Update this TestCase"><i class="fa fa-edit fa-fw fa-lg"></i></a>
                 <?php if(strtoupper($_SESSION['USER_TYPE']) == '' ){ ?>
                  <a class="btn btn-danger btn-sm" href="" onClick="show_confirm('delete_record','<?php echo $row["id"] ?>')" title="Click to Delete this TestCase"><i class="fa fa-trash fa-fw fa-lg"></i></a>
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
