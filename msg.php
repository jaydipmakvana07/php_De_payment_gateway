<!DOCTYPE html>
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
			<li >
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
				<a href="http://localhost/php/send.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Send Money</span>
				</a>
			</li>
			<li class="active">
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
					<h1>Message</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Message</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Messages</h3>
                            
							<form action="#">
								<div class="form-input">
									<input type="search" placeholder="Search...">
									<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
								</div>
							</form>
                            <i class='bx bx-filter' ></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="img/praful.jpg">
                                        <p>Praful Reshiya</p>
                                    </td>
                                    <td>02-02-2022</td>
                                    <td><span class="status completed">Seen</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/sandip.jpg">
                                        <p>Sandip Nakiya</p>
                                    </td>
                                    <td>01-02-2022</td>
                                    <td><span class="status completed">Seen</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/bhargav.jpg">
                                        <p>Bhargav Makwana</p>
                                    </td>
                                    <td>28-01-2022</td>
                                    <td><span class="status process">Unseen</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/meet.jpg">
                                        <p>Meet Busa</p>
                                    </td>
                                    <td>25-01-2022</td>
                                    <td><span class="status completed">Seen</span></td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>    
				
			</div>
        </main>
	</section>
	<!-- CONTENT -->
	

	<script src="dashboard.js"></script>
</body>
</html>