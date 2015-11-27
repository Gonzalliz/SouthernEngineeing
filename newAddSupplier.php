<!DOCTYPE html>

<html>
	<head>
		<title>Add Supplier</title>
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
					<legend>Add Supplier Form</legend>

					<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="sname">Supplier Name</label>  
  								<div class="col-md-4">
  									<input id="sname" name="sname" placeholder="supplier name" class="form-control input-md" required="" type="text">
  								</div>
						</div>


					<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="nic">NIC</label>  
  								<div class="col-md-2">
  									<input id="nic" name="nic" placeholder="nic" class="form-control input-md" required="" type="text">
    						  </div>
						</div>
					
					<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="prv">Priviledge</label>  
  								<div class="col-md-2">
  									<input id="prv" name="prv" placeholder="priviledge" class="form-control input-md" required="" type="text">
    							</div>
						</div>

					<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="lpn">Land Phone Number</label>  
  								<div class="col-md-2">
  									<input id="lpn" name="lpn" placeholder="land-line" class="form-control input-md" required="" type="text">
 								</div>
						</div>

					<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="mpn">Mobile Number</label>  
  								<div class="col-md-2">
  									<input id="mpn" name="mpn" placeholder="mobile" class="form-control input-md" required="" type="text">
  								</div>
						</div>

					<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="email">Email</label>  
  								<div class="col-md-4">
  									<input id="email" name="email" placeholder="email" class="form-control input-md" required="" type="text">
								</div>
						</div>

					<!-- Text input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="adr">Address</label>  
  								<div class="col-md-6">
  									<input id="adr" name="adr" placeholder="address" class="form-control input-md" required="" type="text">
    							</div>
						</div>

					<!-- Password input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="npwd">New Password</label>
  								<div class="col-md-2">
    								<input id="npwd" name="npwd" placeholder="password" class="form-control input-md" required="" type="password">
    									<span class="help-block">type a password with alphanumeric characters</span>
  								</div>
						</div>

					<!-- Password input-->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="vpwd">Verify Password</label>
  								<div class="col-md-2">
    								<input id="vpwd" name="vpwd" placeholder="password" class="form-control input-md" required="" type="password">
    									<span class="help-block">Type the above password again</span>
  								</div>
						</div>

					<!-- Button -->
						<div class="form-group">
  							<label class="col-md-4 control-label" for="sbt"></label>
  								<div class="col-md-8">
    									<button id="sbt" name="sbt" class="btn btn-success">Insert</button>
  								</div>
						</div>
				</fieldset>
			</form>
			
			<?php
        			include "supControl.php";
        			include_once "Supplier.php";
        			if (isset($_POST['sbt'])) {
            			//creates the model class
					if(filter_input(INPUT_POST,'npwd')==filter_input(INPUT_POST,'vpwd')){
            					$newSup = new Supplier();
            					//setting values to model Item
            					$newSup->setName(filter_input(INPUT_POST, 'sname'));
            					$newSup->setNIC(filter_input(INPUT_POST, 'nic'));
            					$newSup->setPrev(filter_input(INPUT_POST, 'prv'));
            					$newSup->setLPN(filter_input(INPUT_POST, 'lpn'));
            					$newSup->setMPN(filter_input(INPUT_POST, 'mpn'));
            					$newSup->setEmail(filter_input(INPUT_POST, 'email'));
            					$newSup->setADR(filter_input(INPUT_POST, 'adr'));
            					$newSup->setPWD(filter_input(INPUT_POST, 'npwd'));
            					$reulst = supControl::Insert($newSup);
            					//prints the alert
            					if ($reulst > 0) {
                					echo "Data Inserted Successfully.";
            					} else {
               						echo "Error Inserting Record.";
            					}
					}else{
						echo "Enter valid password.";
					}
        			}
        		?>

		<script src="/home/ayesh/group/jquery-2.1.4.min.js"></script>
        	<script src="/home/ayesh/group/bootstrap.min.js"></script>
        	<script src="/home/ayesh/group/script.js"></script>
	</body>

</html>
