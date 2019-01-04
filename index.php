<?php
	require("db.php");	
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">	
		<form method="post" action="insert.php" class="my-5 mx-5" enctype="multipart/form-data">
		Select image to upload:
			<input type="file" name="image">
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputEmail4">Email</label>
			  <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email"> 
			</div>
			<div class="form-group col-md-6">
			  <label for="inputPassword4">Password</label>
			  <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputAddress">Address</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="add">
		  </div>
		  <div class="form-group">
			<label for="inputAddress2">Gender</label>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="male">
			  <label class="form-check-label" for="inlineRadio1">Male</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="female">
			  <label class="form-check-label" for="inlineRadio2">female</label>
			</div>
		  </div>
		 
			
			<div class="form-group">
			  <label for="inputState">State</label>
			  <select name="state" class="form-control">
				<option selected>Choose...</option>
				<option value="guj">guj</option>
				<option value="mp">mp</option>
				<option value="kerla">kerla</option>
			  </select>
			</div>
		
		  
		  <div class="form-group">
		  <label>city</label>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="vadodara" name="city[]">
			  <label class="form-check-label" for="inlineCheckbox1">vadodara</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="surat" name="city[]">
			  <label class="form-check-label" for="inlineCheckbox2">surat</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="mumbai" name="city[]">
			  <label class="form-check-label" for="inlineCheckbox3">mumbai</label>
			</div>
		  </div>
		  <button type="submit" class="btn btn-primary" name="Submit">Sign in</button>
		</form>
		
		<div class="">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">gedner</th>
      <th scope="col">email</th>
      <th scope="col">addd</th>
	  <th scope="col">city</th>
	  <th scope="col">state</th>
    </tr>
  </thead>
  <tbody>
  <?php
            $sql = "SELECT * FROM emp";
            $result = mysqli_query($conn,$sql);
 
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>
						<td><img width='85' height='100' src=".$row['image']."></td>
                        <td>".$row['type']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['address']."</td>
						<td>".$row['city']."</td>
						<td>".$row['state']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
			
  
  </tbody>
</table>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>