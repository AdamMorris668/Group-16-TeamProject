
<header>
  <!-- Navbar class used to locat the navbar in the landing page -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'home' ? ' active' : '' ?>"><a class="nav-link" href="index.php?page=home"><i class="fa fa-fw fa-home"></i>Home</a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'product' ? ' active' : '' ?>"><a class="nav-link" href="products.php?page=product">Products</a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'account' ? ' active' : '' ?>"><a class="nav-link" href="login.php?page=account">My Account</a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'contact' ? ' active' : '' ?>"><a class="nav-link" href="contactUs.php?page=contact">Contact Us</a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'about' ? ' active' : '' ?>"><a class="nav-link" href="aboutUs.php?page=about">About Us</a></li>
          <li class="nav-item<?= isset($_GET['page']) && $_GET['page'] == 'cart' ? ' active' : '' ?>"><a class="nav-link" href="cart.php?page=cart">Checkout</a></li>
        </ul>
      </div>
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
