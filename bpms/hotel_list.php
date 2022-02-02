<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=lada_new_file"><i class="fa fa-plus"></i> Add New File</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Hotel Name</th>
						<th>Hotel location</th>
						<th>Hotel Standard</th>						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$type = array('',"Admin","Project Manager","Employee");
					$qry = $conn->query("SELECT *,concat(hotel_name,' ',hotel_location) as name FROM hotel order by concat(hotel_name,' ',hotel_location) asc");
					// $qry = $conn->query("SELECT * FROM filing ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['hotel_name']) ?></b></td>
						<td><b><?php echo $row['hotel_location'] ?></b></td>
						<td><b><?php echo $row['hotel_standard'] ?></b></td>						
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item view_file" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item" href="./index.php?page=hotel_edit&id=<?php echo $row['id'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_hotel" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.view_file').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> User Details","lada_view.php?id="+$(this).attr('data-id'))
	})
	$('.delete_hotel').click(function(){
	_conf("Are you sure to delete this file?","delete_hotel",[$(this).attr('data-id')])
	})
	})
	function delete_hotel($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_hotel',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>