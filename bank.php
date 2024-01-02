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
					<h1>Bank Transfer </h1>
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
							<a class="active" href="#">Bank Transfer</a>
                        
						</li>
					</ul>
				</div>
            </div>
            <div>
            
            
                <div class="box107" style="margin: auto; margin-top: 50px;">
                                
                        <form action="amount.php" method="POST" autocomplete="off" style="margin: auto; padding-top: 10px;">
                            <h3 class="title">Bank Account Details</h3><br>
                            <div class="input-container">
                            <input type="text" name="name" class="input" />
                            <label for="">Account Holder Name</label>
                            <span>Account Holder Name</span>
                            </div>
                            <div class="input-container">
                            <input type="email" name="email" class="input" />
                            <label for="">IFSC Code</label>
                            <span>IFSC Code</span>
                            </div>
                            <div class="input-container">
                            <input type="tel" name="tele" class="input" />
                            <label for="">Account Number</label>
                            <span>Account Number</span>
                            </div>
                            <div class="input-container textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Remarks</label>
                            <span>Remarks</span>
                            </div>
                            <input type="submit" value="Submit" class="btn" />
                        </form>
                        </div>
                        <script src="bank.js"></script>
            </div>

	<script src="dashboard.js"></script>
    

</body>
</html>