<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
			<li class="active">
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
					<h1>QR Code scan </h1>
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
							<a class="active" href="#">QR Code Scan</a>
                        
						</li>
					</ul>
				</div>
				
				<section class="todo">
                <script src="qr.min.js"></script>
                <style>
                .result{
                    background-color: rgb(69, 219, 69);
                    color:#fff;
                    padding:50px;
                   
                }
                .row{
                    display:flex;
                    margin-top: auto;
                    margin-bottom: auto;
                    margin-left: auto;
                  
                }
                .col{
                    display:flex;
                   
                   
                    text-align: center;
                }
                
                
                </style>
              
            <body>
                <div class="row" >
                    
                <div class="col">
                    <h4 style="text-align: center; color: rgb(0, 153, 255);">SCAN RESULT</h4>
                    <div style="width: 500px; margin: 100px; padding-left: 100px;" id="reader"></div>
                </div>
                <div class="col" style="margin: auto; text-align: center;">
                    
                 
                <a href="amqr.php"   >
                    <div id="result" class="box-info" height="40px"  style="color: rgb(14, 97, 14);">Result Here</div>
				</a>	
                </div>    
                </div>
                
                <script type="text/javascript">
                function onScanSuccess(qrCodeMessage) {
                    document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
                }
                function onScanError(errorMessage) {
                //handle scan error
                }
                var html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader", { fps: 10, qrbox: 250 });
                html5QrcodeScanner.render(onScanSuccess, onScanError);
        
            </script>
	</section>

	<script src="dashboard.js"></script>
</body>
</html>