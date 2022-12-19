<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="dashboard.css">
</head>

<body>
	<input type="checkbox" id="check">

	<header>:
		<label for="">

			<i class="fa fa-bars" aria-hidden="true" id="sidebarbtn"></i>
		</label>
		<div class="leftarea">
			<h3> <span>ADMIN</span></h3>
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

		<a href="./edit.php"><i class="fa fa-minus" aria-hidden="true"></i><span>Edit</span></a>
		<a href="./delete.php"><img src="" style="height: 20px; margin-right:0px;"><span>Delete</span></a>
	</div>
	<div class="content" style="padding: 0;padding-top: 60px">
		<div style="padding: 40px">
			<div class="card " style="border-radius: 35px">
				<div class="card-header" style="border-top-right-radius: 35px;border-top-left-radius: 35px">
					<h3>Events</h3>
				</div>
				<div class="card-body">
					<a href="add" class="rounded-circle fas fa-plus fa-2x btn btn-light"></a>
					<br><br>
					<table class="table">
						<thead class="thead-light" style="background-color: pink">
							<tr>
								<th>Image</th>
								<th>Name</th>
								<th>Description</th>
								<th>price</th>
								<th style="text-align: right;"> Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							include('config.php');
							$query = mysqli_query($con, "SELECT * FROM fruits");
							while ($row = mysqli_fetch_assoc($query)) {
							?>
								<tr>
									<th>
										<img src="./productimg/<?php echo $row['img']; ?>" class="rounded-circle" width="60">
									</th>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['description']; ?></td>
									<td><?php echo $row['price']; ?></td>
									<td style="float: right;">
										<a href="edit?id=<?php echo $row['id']; ?>">
											<button class="btn btn-outline-success">EDIT</button>
										</a>
										<a href="delete?id=<?php echo $row['id']; ?>">
											<button class="btn btn-outline-danger">DELETE</button>
										</a>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>

</html>