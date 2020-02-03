<h2>Asset List Data</h2>       
<div class="col-xs-12 text-right">
    <div class="form-group">
	<?php include ('asset/add_asset.php');?>
	        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#addAsset">
        <i class="fas fa-plus-circle"> Add New</i>
        </button>                
    </div>
</div>
	<hr>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>Num</th>
                <th>Asset Code</th>
				<th>Asset Name</th>
                <th>Category Name</th>
                <th>Department</th>
                <th>Purchase Date</th>
                <th>Price</th>
                <th>Supplier Name</th>
				<th>Action</th>	
			</tr>
		</thead>
		<tbody>
			<?php
			include('config.php');
				$sql = mysqli_query($connect, "SELECT * FROM tbl_asset ORDER BY id DESC") or die(mysqli_error($connect));
				if(mysqli_num_rows($sql) > 0){
					$num = 1;
					while($data = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$num.'</td>
							<td>'.$data['asset_code'].'</td>
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