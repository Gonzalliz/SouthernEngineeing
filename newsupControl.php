<?php
include_once 'Supplier.php';

class CustomerController {
    /*
     * This method adds a new customer to the database
     */
    public static function Insert($Supplier) {
       	$ser = "localhost";
        $us = "root";
        $pw = "ayesh";
        $db = "Supplier";

        $con = new mysqli($ser,$us,$pw,$db);
	$result = 0;
 	if($con->connect_error)
                die("Connection Failed : ". $con->connect->error);
	else
	{
		$n = $Supplier->getName();
		$l = $Supplier->getLPN();
		$m = $Supplier->getMPN();
		$adr = $Supplier->getADR();
		$email = $Supplier->getEmail();
		$nic = $Supplier->getNIC();
		$pwd = $Supplier->getPWD();
		$prv = $Supplier->getPRV();

		$q1 = "INSERT INTO Supplier(Name,Landline,Mobile,Address,Email,NIC,Password,Priviledge) VALUES('$n','$l','$m','$adr','$email','$nic','$pwd','$prv')";

		        if($con->query($q1)===TRUE)
                		echo "New Record Ceated.";
        		else
                		echo "Error : ".$q1."<br>". $con->error;

		
	}      
        $con->close();
        return $result;
    }

   public static function Update($customer) {
	$ser = "localhost";
        $us = "root";
        $pw = "ayesh";
        $db = "Supplier";

        $con = new mysqli($ser,$us,$pw,$db);
	$result = 0;
 	if($con->connect_error)
                die("Connection Failed : ". $con->connect->error);
	else
	{
		$n = $Supplier->getName();
		$l = $Supplier->getLPN();
		$m = $Supplier->getMPN();
		$adr = $Supplier->getADR();
		$email = $Supplier->getEmail();
		$nic = $Supplier->getNIC();
		$pwd = $Supplier->getPWD();
		$prv = $Supplier->getPRV();

		$q2 = "UPDATE Supplier SET Name = '$n',Landline = '$l',Mobile = '$m',Address = '$adr',Email = '$email',NIC = '$nic',Password = '$pwd',Priviledge = '$prv'";

		if($con->query($q2)===TRUE)
                	echo "New Record Ceated.";
        	else
                	echo "Error : ".$q2."<br>". $con->error;

		
	}
        
        $con->close();
        return $result;
    }


    public static function Delete($ci) {
        $ser = "localhost";
        $us = "root";
        $pw = "ayesh";
        $db = "Supplier";

        $con = new mysqli($ser,$us,$pw,$db);
	$result = 0;
 	if($con->connect_error)
                die("Connection Failed : ". $con->connect->error);
	else
	{
		
       		$q3 = "DELETE FROM Supplier WHERE (sID ='$ci') ";


		if($con->query($q3)===TRUE)
                	echo "New Record Ceated.";
        	else
                	echo "Error : ".$q3."<br>". $con->error;

		
	}
        
        $con->close();
        return $result;
    }
	
     public static function Search($key) {
	$ser = "localhost";
        $us = "root";
        $pw = "ayesh";
        $db = "Supplier";

        $con = new mysqli($ser,$us,$pw,$db);
        $itemList = array();
        if ($con) {
            
            if(empty($key)){
                //search all customers
                $sql = "SELECT 'Name','Landline','Mobile','Address','Email','NIC' From Supplier";
                $pstm = $con->prepare($sql);
            }else{
                ///search specific customer
                $sql = $sql = "SELECT 'Name','Landline','Mobile','Address','Email','NIC' From Supplier WHERE `sID`= '$key'";
                $pstm = $con->prepare($sql);
                $pstm->bind_param("s", $key);
            
            }
            
            $pstm->execute();
            
            
            $pstm->bind_result($n,$l,$m,$adr,$email,$nic);
            while ($pstm->fetch()) {
                $sup = new Supplier();
                $sup->setCid($n);                
                $sup->setCustomerName($l);
                $sup->setCustomerLandPhoneNumber($m);
                $sup->setCustomerMobilePhoneNumber($adr);
                $sup->setCustomerEmail($email);
                $sup->setCustomerNIC($nic);
                array_push($itemList,$sup);
            }
        }
        $con->close();
        return $itemList;
    }
	
 }   

?>
