
<?php
include_once('connection.php');

if(isset($_POST['submit'])){

		$userid = $_POST['userid'];
		$proname = $_POST['proname'];
		$seller = $_POST['seller'];
		$price = $_POST['price'];
		
		$query = "insert into data(userid,proname,seller,price)values('$userid','$proname','$seller','$price')";
		
		if($conn->query($query))
			{
				  echo "<div class='alert alert-success'>Record was saved.</div>";
			}
			else
			{
				 echo "<div class='alert alert-danger'>Unable to save record.</div>";
			}
	}


	if(isset($_POST['delete'])){

			  $sql = ' DELETE FROM data';
   
			   if (mysqli_query($conn, $sql)) {
			      echo "Record deleted successfully";
			   } else {
			      echo "Error deleting record: " . mysqli_error($conn);
			   }
		
		
		}


?>