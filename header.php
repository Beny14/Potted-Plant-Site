<?php
	session_start();
	$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>
<head>
	<title>Shop plant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" href="styleMai.css">
			<link rel="stylesheet" href="css/styleShopCarD.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <!-- Start NavBar -->
        <nav class="navbar navbar-expand-lg navbar-light p-4">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><span class="menuStyle">Home</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php"><span class="menuStyle">Shop</span></a>
              </li>
							<li class="nav-item">
                <a class="nav-link" href="gallery.php"><span class="menuStyle">Gallery</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span class="menuStyle">About Us</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><span class="menuStyle">Contact</span></a>
              </li>
            </ul>

						<ul class="nav navbar-nav icon-nav">
							<span class="user-session">Welcome <?php if (isset($_SESSION['userId'])) { echo "<a href='includes/logout.php' title='LogOut'>" . $_SESSION['userUid'] . "</a>"; }else{ echo 'Guest'; } ?></span>
              <li class="nav-item">
								<a class="nav-link" href="account.php">
									<i class="fas fa-user icon"></i>
								</a>
              </li>
							<li class="nav-item">
								<a class="nav-link" href="#">
								 <i class="fas fa-search icon" title="Search"></i>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">
								 <i class="fas fa-shopping-cart icon" title="Shopping-cart"><span class="badge badge-pill badge-light shop-cart">0</span></i>
								</a>
							</li>
            </ul>

          </div>
        </nav>
        <!-- End NavBar-->
      </div> <!-- End col-lg-12 -->
    </div> <!-- End row -->
  </div> <!-- End container-fluid -->
