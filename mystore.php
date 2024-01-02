<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboard.css">

    <style>
        text {
            font-size: 10%;
            color: rgb(180, 51, 51);

        }
    </style>

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
			<li>
				<a href="slider.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text" href="slider.php" >Dashboard</span>
				</a>
			</li>
			<li  class="active">
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
        <main>
			<div class="head-title">
				<div class="left">
					<h1>My Store</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">My Store</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
				
			</div>
            <ul class="box-info">
				<li>
					<i class='bx bxs-send' ></i>
					<span class="text">
						<h3>Bills</h3>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-mobile' ></i>
					<span class="text">
						<h3>Mobile Recharge</h3>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-tv' ></i>
					<span class="text">
						<h3>DTH Recharge</h3>
						<p></p>
					</span>
				</li>
				
			
				<li>
					<i class='bx bxs-train' " ></i>
					<span class="text">
						<h3>Train Tickets</h3>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-bus' ></i>
					<span class="text">
						<h3>Bus Tickets</h3>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-movie' " ></i>
					<span class="text">
						<h3>Movie Tickets</h3>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' " ></i>
					<span class="text">
						<h3>Electricity Bills</h3>
						<p></p>
					</span>
				</li>
                <li>
					<i class='bx bxs-bell' " ></i>
					<span class="text">
						<p><h3>order food</h3></p>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-shopping-bag-alt' " ></i>
					<span class="text">
						<h3>Buy cloths</h3>
						<p></p>
					</span>
				</li>
                <li>
					<i class='bx bxs-home' " ></i>
					<span class="text">
						<h3>Buy Grocery</h3>
						<p></p>
					</span>
				</li>
                <li>
					<i class='bx bxs-group' " ></i>
					<span class="text">
						<h3>Mutual Funds</h3>
						<p></p>
					</span>
				</li>
				
                <li>
					<i class='bx bxs-offer' " ></i>
					<span class="text">
						<h3>Special Offers</h3>
						<p></p>
					</span>
				</li>
				
				
				
				
			</ul>
        </main>
	</section>
	<!-- CONTENT -->
	

	<script src="dashboard.js"></script>
</body>
</html>