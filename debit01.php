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
 
    <link rel="stylesheet" href="db.css">
    
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
					<h1>Debit Card/Credit card</h1>
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
							<a class="active" href="qc.php">QR Code Scan</a>
                        
						</li>
						
						
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="amqr.php">Amount</a>
						
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
                        <li>
							<a class="active" href="payqc.php">Payment Option</a>
                        
						</li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
							<a class="active" href="#">Debit Card/Credit Card</a>
                        
						</li>
					</ul>
				</div>
            </div>
            
            <div class="wrapper" style="margin-top: 100px;">
                <div class="payment">
                  <div class="payment-logo">
                    <p>p</p>
                  </div>
                  
                  
                  <h2 style="color:white;">Payment Gateway</h2>
                  <div class="form">
					<div class="card space icon-relative">
						<label class="label">Card holder:</label>
						<input type="text" class="input" placeholder="Jaydip Makvana">
						<i class="fas fa-user"></i>
					  </div>
                    
                    <div class="card space icon-relative">
                      <label class="label">Card number:</label>
                      <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="0000 0000 0000 0000">
                      <i class="far fa-credit-card"></i>
                    </div>
                    <div class="card-grp space">
                      <div class="card-item icon-relative">
                        <label class="label">Expiry date:</label>
                        <input type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="00 / 00">
                        <i class="far fa-calendar-alt"></i>
                      </div>
                      <div class="card-item icon-relative">
                        <label class="label">CVC:</label>
                        <input type="text" class="input" data-mask="000" placeholder="000">
                        <i class="fas fa-lock"></i>
                      </div>
                    </div>
                      
                    <div class="btn">
                      Pay
                    </div> 
                    
                  </div>
                </div>
              </div>
              
                  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
              
    <script src="bank.js"></script>
	<script src="dashboard.js"></script>
    <script src="debit.js"></script>
    

</body>
</html>