<!DOCTYPE html>
<html>
	<head>
		<title>View Supplier</title>
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
    								<p class="help-block">eneter the full name</p>
  							</div>
						</div>

				<!-- Button -->
					<div class="form-group">
  						<label class="col-md-4 control-label" for="view"></label>
  							<div class="col-md-4">
    								<button id="view" name="view" class="btn btn-success">View</button>
  							</div>
					</div>
				


				<!-- Button -->
					<div class="form-group">
  						<label class="col-md-4 control-label" for="back"></label>
  							<div class="col-md-4">
    								<button id="back" name="back" class="btn btn-warning">Back</button>
  							</div>
					</div>

				
	
			</fieldset>
			</form>

		<div id="itemTable" class = "table-responsive">
            		<table class = "table">
                		<thead>
                		    <tr>
                		        <th>SupplierID</th>
                		        <th>Name</th>
                		        <th>NIC</th>
                		        <th>LandPhone</th>
                		        <th>Mobile</th>
                		        <th>Address</th>
                		        <th>Email</th>        
                    		    </tr>
                		</thead>
                		<tbody>
                    			<?php
                    				include "dbcontroller//ItemController.php";
                    				include_once "model//Item.php";
                    				//creates the model class
                    				$newItem = new Item();
                    				if (isset($_GET['view'])) {
                        				$key = $_GET['sid'];
                                                	$search = supControl::Search($key);
                        				if (!empty($search)) {
                            					foreach ($search as $s) {
                                					echo "<tr>
                                    					<td>{$s->getName()}</td>
                                    					<td>{$s->getLPN()}</td>
                                    					<td>{$s->getMPN()}</td>
                                    					<td>{$s->getADR()}</td>
                                    					<td>{$s->getEmail()}</td>
                                    					<td>{$s->getNIC()}</td>
                                      					</tr>";
                            					}
                        				} else {
                            					echo '<h3>No items found</h3>';
                        				}
                    				}
                    ?>

                </tbody>

       			        </tbody>
            		</table>
        	</div>

		<script src="/home/ayesh/group/jquery-2.1.4.min.js"></script>
        	<script src="/home/ayesh/group/bootstrap.min.js"></script>
        	<script src="/home/ayesh/group/script.js"></script>
	</body>
</html>
