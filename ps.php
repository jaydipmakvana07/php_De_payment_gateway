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
      
            
            <div class="wrapper" style="margin-top: 100px;">
                <div class="payment">
                  <div class="payment-logo1" >
                    <p >&#10003;</p>
                  </div>
                  
                  
                  <h2 style="color:white;">Payment Successful</h2>
                  <div class="form">
                    <div style="color: aliceblue;">
                        <div>
                            <span>Payment Type: Payment by Wallet</span>
                        
                            
                        </div><br>
                        
                        <div>
                            <span>Reciver Name: _______________________</span>
                        
                            
                        </div><br>
                        <div>
                            <span>Bank Name: ___________________</span>
                        
                            
                        </div><br>
                        
                        <div>
                            <span>Gmail: ___________________@gmail.com</span>
                        
                            
                        </div><br>
                        <div>
                            <span>Mobile Number: 0000-000-000</span>
                        
                            
                        </div><br>
                        <div>
                            <span>Transaction ID: 0000-0000-0000</span>
                        
                            
                        </div><br>
                        <div>
                            <span>Total Amount: 0000.00</span>
                        
                            
                        </div><br>
                        <div>
                            <span>Remarks: ______________________</span>
                        
                            
                        </div><br>
                        <br>
                        
                        
                        
                        
                    
                    
                    <a href="slider.php">
                      
                    <div class="btn">
                      Go to Home
                    </div> 
                </a>
                    
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