<header>
  <!-- Navbar class used to locat the navbar in the landing page -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img style="height:75px;"  src="images/logo/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bar fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'home' ? ' active' : '' ?>"><a class="nav-link" href="index.php?page=home"><i class="fa fa-fw fa-home"></i>Home</a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'product' ? ' active' : '' ?>"><a class="nav-link" href="products.php?page=product">Products</a></li>
          
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'contact' ? ' active' : '' ?>"><a class="nav-link" href="contactUs.php?page=contact">Contact Us</a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'about' ? ' active' : '' ?>"><a class="nav-link" href="aboutUs.php?page=about">About Us</a></li>
        </ul>
        <form action="search_results.php" method="GET" class="d-flex my-2 my-lg-0 mx-auto">
          <input type="text" name="q" class="form-control me-2" placeholder="Search products...">
          <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Search</button>
        </form>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'basket' ? ' active' : '' ?>"><a class="nav-link " href="user-orders.php?page=orders"><i class="fa fa-history"></i></a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'basket' ? ' active' : '' ?>"><a class="nav-link " href="checkout.php?page=checkout"><i class="fa fa-shopping-basket"></i></a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'wishlist' ? ' active' : '' ?>"><a class="nav-link" href="wishlist.php?page=wishlist"><i class="fa fa-heart"></i></a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'account' ? ' active' : '' ?>">
            <?php if (isset($_SESSION['id'])) { 
            $user_firstname = ucfirst($_SESSION['user_firstname']);  
            ?>
              <a class="nav-link" href="login.php"><i class="fa fa-user-circle"></i><?php echo " " . $user_firstname . " (Logout)" ?></a>
            <?php } else { ?>
              <a class="nav-link" href="login.php"><i class="fa fa-user-circle"></i> Log In</a>
            <?php } ?>
          </li>
        </ul>

      </div>
      <!-- form used to enter search queries -->
      
      <!-- <form class="navbar-form navbar-right" action="/productSearch.php">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Search" />
          <input type="submit" class="btn btn-primary" value="Search" />
        </div>
      </form> -->
     
    </div>
  </nav>
</header>
