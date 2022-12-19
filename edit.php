<?php

include('config.php');
if (isset($_POST['submit'])) {
	session_start();
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description= $_POST['description'];
	
	$photo = $_FILES['photo']['name'];
	move_uploaded_file($tempimgname, "./images/fruits/$photo");

if ($photo !== null) {
		$tempimgname = $_FILES['photo']['tmp_name'];
		move_uploaded_file($tempimgname, "./images/members/$photo");
		$query = mysqli_query($con, "UPDATE fruits SET name='$name',description='$description',image='$image',price='$price' WHERE id='$id'");
	} else {
		$query = mysqli_query($con, "UPDATE fruits SET name='$name',description='$description', price='$price' WHERE id='$id'");
	}
	if ($query == true) {
?>
		<script type="text/javascript">
			window.alert("fruit Updated Successfully")
			window.location.href = 'dashboard';
		</script>
	<?php
	} else {
	?>
		<script type="text/javascript">
			window.alert("Failed To Update fruitshop")
		</script>
<?php
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./edit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Edit</title>
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
               <a href="logout" class="logoutbtn">logout</a>

           </div>
       </header>

       <div class="sidebar">
           
               
           <center>
                <img src="./images/p.png" alt="" class="profile">
                   <h4>name</h4>
           </center>
           <a href="./dashboard.php"><i class="fa-address-book"></i><span>Dashboard</span></a>
           <a href="./add.php"><i class="fa fa-plus-square" aria-hidden='true'></i><span>Add</span></a>
           <i class="fa fa-pencil-square-o" aria-hidden="true"></i>

           <a href=""><i  class="fa fa-minus" aria-hidden="true"></i><span>Edit</span></a>
           <a href=",/delete.php"><img src="./images/delete.png" style="height: 20px; margin-right: ;"><span>Delete</span></a>
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
    <div class="content" style="padding: 0;padding-top: 60px">
		<div style="padding: 40px">
			<div class="card " style="border-radius: 35px">
				<div class="card-header" style="border-top-right-radius: 35px;border-top-left-radius: 35px">
					<h3>EDIT Fruit</h3>
				</div>
				<div class="card-body">
					<?php
					include('config.php');
					$idd = $_GET['id'];
					$query = mysqli_query($con, "SELECT * FROM fruits WHERE id='$idd'");
					$row = mysqli_fetch_assoc($query)
					?>
     <center>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-row">
			<div class="form-group col-md-4 col-lg-4 col-xs-12">
				<div class="col-xs-12">
					<label for="inputName">Name<b style="color: red">*</b></label>
					<input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control" id="inputEmail4" required="true">
				</div>
				<div class="col-xs-12">
					<label for="inputImage">image<b style="color: red">*</b>:-</label>
					<input type="file" value="<?php echo $row['img'] ?>" id="inputEmail4" required="true" name="image">
					<br>
				</div>
				<div class="col-xs-12">
					<label for="inputName">description<b style="color: red">*</b></label>
					<input type="text" name="description" value="<?php echo $row['description'] ?>" class="form-control" id="inputEmail4" required="true">
				</div>
				<div class="col-xs-12">
					<label for="inputName">price<b style="color: red">*</b></label>
					<input type="text" name="price" value="<?php echo $row['price'] ?>"class="form-control" id="inputEmail4" required="true">
				</div>
				<div>
				<input type="submit" class="btn" name='sunmit'>
                 </div>
	</form>
	

</body>
</html>