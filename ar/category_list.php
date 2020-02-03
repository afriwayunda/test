<h2>Category List Data</h2>       
<div class="col-xs-12 text-right">
    <div class="form-group">
	<?php include ('category/add_category.php');?>
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#addAsset">
        <i class="fas fa-plus-circle"> Add New</i>
        </button>                
    </div>
</div>
	<hr>
	<table id="example" class="table table-striped table-hover table-sm table-bordered" >
		<thead class="thead-dark">
			<tr>
				<th>Num</th>
				<th>Category Name</th>
				<th>Action</th>	
			</tr>
		</thead>
		<tbody>
			<?php
			include('config.php');
				$sql = mysqli_query($connect, "SELECT * FROM tbl_category ORDER BY id DESC") or die(mysqli_error($connect));
				if(mysqli_num_rows($sql) > 0){
					$num = 1;
					while($data = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$num.'</td>
							<td>'.$data['category_name'].'</td>
							<td>
								<a href="edit.php?id='.$data['id'].'" class="badge badge-warning">Edit</a>
								<a href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr>
						<td colspan="6">Data Not Found</td>
					</tr>
					';
				}
			?>
		<tbody>
	</table>	