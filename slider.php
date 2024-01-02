
<?php 

error_reporting(0);

$host = "localhost";
$user = "root";
$pass = "";
$db = "form";

$conn = mysqli_connect($host,$user,$pass,$db);

$sql = " SELECT * FROM `table02` INNER JOIN table01 on table02.id =table01.id ORDER BY table02.id DESC LIMIT 5; ";




$result = mysqli_query($conn,$sql);


?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboard.css">

	<title>Payment Gateway</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Payment Gateway</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="slider.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text" href="slider.php" >Dashboard</span>
				</a>
			</li>
			<li>
				<a href="mystore.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="send.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Send Money</span>
				</a>
			</li>
			<li>
				<a href="msg.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="help.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Contact us</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="index.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.jpeg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download statement</span>
				</a>
			</div>
			<?php 

			$qry = "SELECT sum(amount) FROM table02";
			$res = mysqli_query($conn,$qry);
			$y = mysqli_fetch_row($res);
			
			$z =(int)$y[0];
			$x = '190000';

			$j = $x-$z;
			
			

			
			
			?>

			

			<ul class="box-info">
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3><?php echo $j; ?></h3>
						<p>Total Balance</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Pending Transaction</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Friends</p>
					</span>
				</li>
				
			</ul>


			<div class="table-data" >
				<div class="order">
					<div class="head">
						<h3>Recent Transaction</h3>

						<form action="#">
							<div class="form-input">
								<input type="search" id="myInput" placeholder="Search...">
								<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
							</div>
						</form>
						<i class='bx bx-filter' ></i>
					</div>


					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Amount</th>
								<th>Status</th>
							</tr>
						</thead>
						
					<tbody >
							<tr>
					


					

				
					<?php
					while($data = $result->fetch_assoc()){
						
						
						echo'<td><img src="img/un02.webp">'.$data['name'].'</td>';
						echo'<td ><span class="status pending"> - '.$data['amount'].'</span></td>';
						echo'<td><span class="status completed">Completed</span></td>';
						echo'</br>';
						
						echo'</tr>';

						
						


					}
					?>
					
					
						
							
						</tbody>
					</table>'
				


				</div>
				<div class="todo">
					<div class="head">
						<h3>Wish List</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Wish List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Wish List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>wish List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>wish List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>wish List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
						
				</div>
			</div>
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
	


	<script src="dashboard.js"></script>
	<script src="recent.js"></script>
</body>
</html>