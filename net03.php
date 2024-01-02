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
					<h1>Net Banking</h1>
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
							<a class="active" href="paycont.php">Payment Option</a>
                        
						</li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
							<a class="active" href="#">Net Banking</a>
                        
						</li>
					</ul>
				</div>
            </div>
            <div>
            
            
                <div class="box110" style="margin: auto; margin-top: 100px;">

                    <div  style="margin: auto; padding-top: 20px; ">
                        <h3 class="title" style="text-align: center;">Choose your Banks</h3></br>
                        <div>
                            <div style="margin:23px;">
                                <a href="https://retail.onlinesbi.com/retail/login.htm" class="profile" style="margin: auto;" target="_blank" >
                                    <img src="img/sbi.png"class="profile">
                                </a>
                           
                                <a href="https://netbanking.hdfcbank.com/netbanking/" class="profile" style="margin: auto;" target="_blank" >
                                    <img src="img/hdfc.png"class="profile">
                                </a>
                            
                                <a href="https://feba.bobibanking.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&__START_TRAN_FLAG__=Y&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=012" class="profile" style="margin: auto;" target="_blank" >
                                    <img src="img/bob.png"class="profile">
                                </a>
                           
                                <a href="https://infinity.icicibank.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&__START_TRAN_FLAG__=Y&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=ICI&CTA_FLAG=IWISH" class="profile" style="margin: auto;" target="_blank" >
                                    <img src="img/icici.png"class="profile">
                                </a>
                            </div> 
                            <div style="margin-left: 23px;">

                            
                            
                                <a href="https://indusnet.indusind.com/corp/BANKAWAY?Action.RetUser.Init.001=Y&AppSignonBankId=234&AppType=corporate&CorporateSignonLangId=001" class="profile" style="margin: auto;" target="_blank">
                                    <img src="img/indus.png"class="profile">
                                </a>
                            
                                <a href="#" class="profile" style="margin: auto;"target="_blank" >
                                    <img src="img/boi.png"class="profile">
                                </a>
                           
                                <a href="https://www.unionbankonline.co.in/corp/AuthenticationController?__START_TRAN_FLAG__=Y&FORMSGROUP_ID__=AuthenticationFG&__EVENT_ID__=LOAD&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=026&LANGUAGE_ID=001" class="profile" style="margin: auto;"target="_blank" >
                                    <img src="img/Union.png"class="profile">
                                </a>
                           
                                <a href="https://netbanking.kotak.com/knb2/" class="profile" style="margin: auto;" target="_blank" >
                                    <img src="img/kotak.png"class="profile">
                                </a>
                            
                            
                               
                            </div>
                            
                           
                        
                        </div>
                         
                    </br>
                        <div><input type="submit" value="More Options " class="btn" style="margin-left: 50px;"></div> 
                        
                    </div>    
            </div>
    
            <script src="bank.js"></script>        
	<script src="dashboard.js"></script>
    

</body>
</html>