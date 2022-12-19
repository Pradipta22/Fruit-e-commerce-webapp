<?php

include('config.php');
if (isset($_POST['submit'])) {
	session_start();
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description= $_POST['description'];
	
	$image = $_FILES['photo']['name'];
	$tempimgname = $_FILES['photo']['tmp_name'];
	move_uploaded_file($tempimgname, "./img/fruits/$image");

	$query = mysqli_query($con, "INSERT INTO fruits (name,description,price,img) VALUES ('$name','$description','$price','$image')");
	if ($query == true) {
?>
<script type="text/javascript">
	window.alert("fruits Added Successfully")
</script>
<?php
	} else {
	?>
<script type="text/javascript">
	window.alert("Failed To Add fruits")
</script>
<?php
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./add.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<title>ADD</title>
</head>

<body>
	<input type="checkbox" id="check">

	<header>
		<label for="">

			<i class="fa fa-bars" aria-hidden="true" id="sidebarbtn"></i>
		</label>
		<div class="leftarea">
			<h3><span>Admin</span></h3>
		</div>

		<div class="rightarea">
			<a href="" class="logoutbtn">logout</a>

		</div>
	</header>

	<div class="sidebar">


		<center>
			<img src="./images/p.png" alt="" class="profile">
			<h4>name</h4>
		</center>
		<a href="./dashboard.php"><i class="fa-address-book"></i><span>Dashboard</span></a>
		<a href="#"><i class="fa fa-plus-square" aria-hidden='true'></i><span>Add</span></a>
		<i class="fa fa-pencil-square-o" aria-hidden="true"></i>

		<a href="./edit.php"><i class="fa fa-minus" aria-hidden="true"></i><span>Edit</span></a>
		<a href="./delete.php"><img src="./images/delete.png" style="height: 20px; margin-right: 0px;"><span>Delete</span></a>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
     <center>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-row">
			<div class="form-group col-md-4 col-lg-4 col-xs-12">
				<div class="col-xs-12">
					<label for="inputName">Name<b style="color: red">*</b></label>
					<input type="text" name="name" class="form-control" id="inputEmail4" required="true">
				</div>
				<div class="col-xs-12">
					<label for="inputImage">image<b style="color: red">*</b>:-</label>
					<input type="file" id="inputEmail4" required="true" name="photo">
					<br>
				</div>
				<div class="col-xs-12">
					<label for="inputName">description<b style="color: red">*</b></label>
					<input type="text" name="description" class="form-control" id="inputEmail4" required="true">
				</div>
				<div class="col-xs-12">
					<label for="inputName">price<b style="color: red">*</b></label>
					<input type="text" name="price" class="form-control" id="inputEmail4" required="true">
				</div>
				<div>
				<input type="submit" class="btn" name='submit'>
                 </div>
	</form>
	</center>
</body>

</html>