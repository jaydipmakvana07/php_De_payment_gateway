<?php 

						error_reporting(0);

						$host = "localhost";
						$user = "root";
						$pass = "";
						$db = "form";

						$con = new mysqli($host,$user,$pass,$db);

						if(!$con) {

							echo" there are some problem while connecting the database";


						}

						
						$phone =  $_POST['phone'] ;
						

						$qry01 = "INSERT INTO `table02`(`id`, `amount`) VALUES ('[value-1]','$phone')";

						$insert = mysqli_query($con,$qry01);



						?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
  ></script>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="bt.css">
    
	<title>Payment Gateway</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="#">Payment Gateway</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="slider.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="#" href="slider.php" >Dashboard</span>
				</a>
			</li>
			<li>
				<a href="mystore.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="#">My Store</span>
				</a>
			</li>
			<li class="active">
				<a href="send.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="#">Send Money</span>
				</a>
			</li>
			<li>
				<a href="msg.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="#">Message</span>
				</a>
			</li>
			<li>
				<a href="help.php">
					<i class='bx bxs-group' ></i>
					<span class="$">Contact us</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="#">Settings</span>
				</a>
			</li>
			<li>
				<a href="index.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="">Logout</span>
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
					<h1>Payment Option</h1>
					<ul class="breadcrumb">
						<li>
							<a href="send.php">Send Money</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="send.php">Home</a>
                        
						</li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
							<a class="active" href="cont.php">To Contact</a>
                        
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="amcont.php">Amount</a>
						
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
                        <li>
							<a class="active" href="#">Payment Option</a>
                        
						</li>
					</ul>
				</div>
            </div>
			<div>
            
            
                <div class="box108" style="margin: auto; margin-top: 100px;">
                                
                        <div  style="margin: auto; padding-top: 10px;">
                            <h3 class="title">Payment Option</h3><br>
                            <div class="input-container">
                            
                            <div>
								<a href="wall03.php">
								
								<input type="submit" value="By Wallet" class="btn" /></div>
							</a>
                            <div>
								<a href="upi03.php">
								
								<input type="submit" value="UPI" class="btn" /></div>
							</a>
                            <div>
								<a href="net03.php">
								
								<input type="submit" value="Net Banking" class="btn" /></div>
							</a>
							<div >
							<a href="debit03.php">
							<input type="submit" value="Debit Card/Credit Card"  class="btn" />
							</a>
							</div>   
							</div>  
						</div>
                    </div>
                        <script src="bank.js"></script>
            </div>
	<script src="dashboard.js"></script>
    

</body>
</html>