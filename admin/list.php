<?php 
include('config.php');
$query = "SELECT * FROM `form` ORDER BY `id` DESC";
$results = mysqli_query($con,$query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php include('header.php');?>
	<div class="container">
		<div class="row">
			<div class="col-12 table-responsive">
				<table id="list" class="table-sm table text-center table-bordered">
					<thead>
						<tr>
							<td>S.No.</td>
							<td>Patient Name</td>
							<td>Patient ID.</td>
							<td>Ref. No.</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($results as $result): ?>
							<tr>
								<td style="width: 20%"><?=++$i?></td>
								<td style="width: 20%"><?=$result['name']?></td>
								<td style="width: 20%"><?=$result['patient_id']?></td>
								<td style="width: 20%"><?=$result['ref_no']?></td>
								<td style="width: 20%">
									<ul class="list-inline">
										<li class="list-inline-item">
									<a href="view.php?id=<?=$result['id']?>">View</a>
										</li>
										<li class="list-inline-item">
									<a target="_blank" href="pdf.php?id=<?=$result['id']?>">PDF</a>
										</li>
									</ul>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table><br><br>
			</div>
		</div>
	</div>
</body>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
    $('#list').DataTable();
} );
</script>

</html>