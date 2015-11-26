<!DOCTYPE html>
<html>
	<head>
		<title>Delete Supplier</title>
		<meta charset="utf-8">
		<meta content="noindex" name="robots">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link rel="stylesheet" href="/home/ayesh/group/Bootstrap.min.css">
        	<link rel="stylesheet" href="/home/ayesh/group/style.css">
	</head>

	<body>
		<form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
				<legend>View Supplier</legend>

				<!-- Search input-->
				<div class="form-group">
  					<label class="col-md-4 control-label" for="sid">Supplier ID</label>
  						<div class="col-md-2">
    							<input id="sid" name="sid" placeholder="supplier id" class="form-control input-md" type="search">
    							<p class="help-block">enter valid id</p>
  						</div>
				</div>

				<!-- Search input-->
					<div class="form-group">
  						<label class="col-md-4 control-label" for="sname">Supplier Name</label>
  							<div class="col-md-4">
    								<input id="sname" name="sname" placeholder="name" class="form-control input-md" type="search">
    								<p class="help-block">enter the full name</p>
  							</div>
						</div>

				

				<!-- Button -->
					<div class="form-group">
  						<label class="col-md-4 control-label" for="delete"></label>
  							<div class="col-md-4">
    								<button id="delete" name="delete" class="btn btn-danger">Delete</button>
  							</div>
					</div>

				
	
			</fieldset>
			</form>

			
			<?php
        			include "supControl.php";
        			include_once "Supplier.php";
        			//creates the model class
        			$sup = new Supplier();
        
        			if (isset($_POST['delete'])) {
           				$key = $_POST['sid']; 
           				$result = supControl::Delete($key);
           				//prints the alert
           
          				  if ($result > 0) {
                				echo "Done";
            				} else {
                				echo "Error";
			            }
        			}
        
        		?>

		<script src="/home/ayesh/group/jquery-2.1.4.min.js"></script>
        	<script src="/home/ayesh/group/bootstrap.min.js"></script>
        	<script src="/home/ayesh/group/script.js"></script>
	</body>
</html>
