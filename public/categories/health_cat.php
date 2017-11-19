<html>
<?php
	include("..\database.php");
	
	$query = "SELECT * FROM createevent WHERE location = 'IC Lab 2'";
	$result = mysqli_query($connection, $query);
	
	if(!$result){
		die("Database query failed!");
	}else{
		$num_rows = mysqli_num_rows($result);
		if($num_rows>0){ 
?>

		<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
								<p>
								<tr>
									<th>Event Title &nbsp;&nbsp;&nbsp;&nbsp;</th>
									<th>Date Start &nbsp;&nbsp;&nbsp;&nbsp;</th>           
									<th>Time </th>
								</tr>
								</p>
								</thead>
							
								<tbody>
									<?php
										while ($num_rows = mysqli_fetch_array($result)) { ?>
											<tr>
												<td><?php echo $num_rows['event_title']; ?></td>
												<td><?php echo $num_rows['start_date']; ?></td>                                        
												<td><?php echo $num_rows['start_time']; ?> - <?php echo $num_rows['end_time']; ?></td>
											</tr>
									<?php } ?>
								</tbody>
                            </table>
		</div>
		<?php
							}else{ ?>
							<h1 class="table-responsive">
								<small>No Records Found!</small>
							</h1>
							
							<?php
							}
							?>
							<?php
							}
							mysqli_close($connection);
							?>
</html>