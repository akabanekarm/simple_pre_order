<?php
	if(isset($_POST['update_order'])){
		if(!empty($_POST['deliver_date']) || !empty($_POST['bread']) || !empty($_POST['sauce']) || !empty($_POST['sandwich_type']) || !empty($_POST['cheese']) || !empty($_POST['veggies'])){

			$input = array(
				'fname'	 => $_POST['fname'],
				'deliver_date'	 => $_POST['deliver_date'],
				'bread' 		 => $_POST['bread'],
				'sauce' 		 => $_POST['sauce'],
				'sandwich_type'  => $_POST['sandwich_type'],
				'cheese' 		 => $_POST['cheese'],
				'veggies' 		 => $_POST['veggies']
			);

			$data[] = $input;

			$data = json_encode($data , JSON_PRETTY_PRINT);
			file_put_contents('pending_order.json', $data);

			header("location: submit_order.php");

		}
		else{
			echo "<script>alert('You need to complete the form');</script>";
		}
	}
?>
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
		  	<h2>Order Listing</h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		      <div class="col-md-10">
			     <form method="post" action="">
			     <?php 
					      	$data = file_get_contents('pending_order.json');
					      	$data = json_decode($data);
							foreach ($data as $row) {
				  ?>
				  <div class="form-group">
				    <label>Date</label>
				    <input type="hidden" name="fname"  value="<?php echo $row->name;  ?>" >
				    <input type="text" name="deliver_date" class="form-control" value="<?php echo $row->deliver_date ?>">
				  </div>
				  <div class="form-group">
				    <label>Select Bread</label>
				    <select class="form-control" name="bread">
				      <option><?php echo $row->bread ?></option>
				      <option>Whole Wheat</option>
				      <option>Italian Herb</option>
				      <option>Jalapeno Parmesan</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Select Sauce</label>
				    <select class="form-control" name="sauce">
				      <option><?php echo $row->sauce ?></option>
				      <option>Mayo</option>
				      <option>Mustard</option>
				      <option>Honey Mustard</option>
				      <option>Spicy Mayo</option>
				    </select>
				  </div>
				 <div class="form-group">
				    <label>Sandwich Type</label>
				    <select class="form-control" name="sandwich_type">
				      <option><?php echo $row->sandwich_type ?></option>
				      <option>Turkey Bacon Club</option>
				      <option>Oven Roasted Turkey</option>
				      <option>Italian (Salami , Ham & Pepperoni)</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Select Cheese</label>
				    <select class="form-control" name="cheese">
				      <option><?php echo $row->cheese ?></option>
				      <option>American</option>
				      <option>Swiss</option>
				      <option>Peperjack</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Select Veggies</label>
				    <select class="form-control" name="veggies">
				      <option><?php echo $row->veggies ?></option>
				      <option>Cucumber</option>
				      <option>Lettuce</option>
				      <option>Pepers - Banana</option>
				      <option>Pepers - Jalapeno</option>
				      <option>Peppers - Green and Red</option>
				      <option>Pickles</option>
				      <option>Spinach</option>
				      <option>Tomato</option>
				      <option>Olives</option>
				      <option>Onions</option>
				    </select>
				  </div>
				  <?php } ?>
				  <a href="submit.php" class="btn btn-success" name="update_order">Save Changes</button>
				</form>
		      </div>
			</div>
		  </div>
		</div>
	 </div>
 </body>
</html>