<!DOCTYPE html>
<html>
 <head>
  <title>Simple Sub Pre Order</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
	 <nav class="navbar navbar-default"></nav>
	 <div class="container">
	 	<div class="panel panel-default">
		  <div class="panel-heading">
		  	<h2>Submit Order</h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		      <div class="col-md-12">
			     <form method="post" action="">
				  <div class="form-group">
				  	<table class="table table-border">
				  		<thead>
					  		<tr>
					  			<th>Full Name</th>
					  			<th>Delivery Date</th>
					  			<th>Bread</th>
					  			<th>Sauce</th>
					  			<th>Sandwich Type</th>
					  			<th>Cheese</th>
					  			<th>Veggies</th>
					  			<th></th>
					  			<th></th>
					  		</tr>
				  		</thead>
				  		<tbody>
				  			<?php 
						      	$data = file_get_contents('pending_order.json');

						      	$data = json_decode($data);

								foreach ($data as $row) {
							  ?>
				  			<tr>
				  				<td><?php echo $row->fname; ?></td>
				  				<td><?php echo $row->deliver_date; ?></td>
				  				<td><?php echo $row->bread; ?></td>
				  				<td><?php echo $row->sauce; ?></td>
				  				<td><?php echo $row->sandwich_type; ?></td>
				  				<td><?php echo $row->cheese; ?></td>
				  				<td><?php echo $row->veggies; ?></td>
				  				<td>
				  					<a class="btn btn-success" href="edit.php">Update Order</a>
				  				</td>
				  				<td>
				  					<a class="btn btn-danger" href="delete.php">Cancel Order</a>
				  				</td>
				  			</tr>
				  		    <?php } ?>
				  		</tbody>
				  	</table>
				  </div>
				  <a href="submit.php" class="btn btn-primary">Submit</a>
				</form>
		      </div>
			</div>
		  </div>
		</div>
	 </div>
 </body>
</html>
