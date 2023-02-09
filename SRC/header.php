<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<header>
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-headr">
        <!-- logo goes here -->
      </div>
      <ul class ="navbar-nav">
        <li <?= $_GET['page'] == 'home' ? ' class="active"' : ''; ?>></li>
        <li <?= $_GET['page'] == 'product' ? ' class="active"' : ''; ?>></li>
        <li <?= $_GET['page'] == 'account' ? ' class="active"' : ''; ?>></li>
        <li <?= $_GET['page'] == 'contact' ? ' class="active"' : ''; ?>></li>
        <li <?= $_GET['page'] == 'About us' ? ' class="active"' : ''; ?>></li>
        <li <?= $_GET['page'] == 'cart' ? ' class="active"' : ''; ?>></li>
        <li <?= $_GET['page'] == 'checkout' ? ' class="active"' : ''; ?>></li>
      </ul>
    </div>
   </nav>
</header>

<!-- use </?php include 'header.php'; ?> to use this but get rid of / -->
