<header>
  <!-- Navbar class used to locat the navbar in the landing page -->
  <nav class="navbar navbar-default">
    <a class="navbar-brand" href="index.php"></a>
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- once logo is done properly into the images folder <a href="index.php"><img src="Images/Logo.png" alt="logo" style="width: 80px;"></a> -->

        <!-- Constractor of the lnding page and other pages linked -->
      </div>
      <ul class="nav navbar-nav">
        <!-- highlights relevant site -->
        <li <?= $_GET['page'] == 'home' ? ' class="active"' : ''; ?>><a href="index.php?page=home"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li <?= $_GET['page'] == 'product' ? ' class="active"' : ''; ?>><a href="products.php?page=product">Products</a></li>
        <li <?= $_GET['page'] == 'account' ? ' class="active"' : ''; ?>><a href="login.php?page=account">My Account</a></li>
        <li <?= $_GET['page'] == 'contact' ? ' class="active"' : ''; ?>><a href="contactUs.php?page=contact">Contact Us</a></li>
        <li <?= $_GET['page'] == 'about' ? ' class="active"' : ''; ?>><a href="aboutUs.php?page=about">About Us</a></li>
        <li <?= $_GET['page'] == 'cart' ? ' class="active"' : ''; ?>><a href="cart.php?page=cart">Checkout</a></li>
      </ul>
      <!-- form used to enter search queries -->
      <!--
      <form class="navbar-form navbar-right" action="/productSearch.php">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Search" />
          <input type="submit" class="btn btn-primary" value="Search" />
        </div>
      </form>
      -->
    </div>
  </nav>
</header>
