

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f5576db3b7.js"></script>
</head>
<body>

	  <div class="container text-center">
  		<h1 class="bg-light py-4 text-info"><i class="fas fa-plug"></i>Electronic shop</h1>	
  	</div>	
   
  	<div class="d-flex justify-content-center">
  	  <form method="POST" action="../process.php"  class="w-50">
        	 	<input type="text" name ="userid" class="form-control" placeholder="ID" autocomplete="off">
        	 	<input type="text" name ="proname" class="form-control" placeholder="Product Name" autocomplete="off">
          	 
             	<div class="row">
            	 		<div class="col">
            	 				<input type="text" name="seller" class="form-control" placeholder="Seller" autocomplete="off">
            	 		</div>

            	 		<div class="col">
            	 				<input type="text" name="price" class="form-control" placeholder="Price" autocomplete="off">
            	 		</div>
        	 	</div>
             <div class="d-flex justify-content-center">
              <input type="submit" name = "submit" value="submit">
               <input type="submit" name = "delete" value="delete">
            
              <button class="btn btn-warning" id="btn-update">Update</button>
         

            </div>
        	 </form>

	</div>


<?php
include_once('../connection.php');
$query="select * from data";
$result=mysqli_query($conn,$query);
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Userid</th>
      <th scope="col">Proname</th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
    </tr>

    <?php
      while($rows=mysqli_fetch_assoc($result)){
    ?>
      <tr>
        <td><?php echo $rows['userid'];  ?></td>
        <td><?php echo $rows['proname'];  ?></td>
        <td><?php echo $rows['seller'];  ?></td>
        <td><?php echo $rows['price'];  ?></td>
      </tr>

      <?php
      }
      ?>    
  </thead>
</table>


</body>
</html>


