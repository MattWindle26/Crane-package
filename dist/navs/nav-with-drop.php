<?php
$path = $_SERVER['DOCUMENT_ROOT'];
?>
<?php include $path . '/includes/header.php' ?>

<div class="header-items" >
  <a href="/" ><img src="/images/crane-images/logo.svg" class="logo" ></a>
  <div class="nav-trigger">
    <img src="/images/crane-images/menu.svg" >
  </div>
  <nav class="nav-bar">
    <img class="close" src="/images/crane-images/close.svg" >
    <ul>
      <li><a href="#" >Home</a></li>
      <li><a href="#" >About</a></li>
      <li class="has-dropdown" >
        <a href="#">Conditions </a><span><img src="/images/crane-images/close.svg" ></span>
        <ul class="dropdown">
          <li><a href="#" >Home</a></li>
          <li><a href="#" >Home</a></li>
          <li><a href="#" >Home</a></li>
          <li><a href="#" >Home</a></li>
        </ul>
      </li>
      <li><a href="#" >Services</a></li>
      <li><a href="#" >Book</a></li>
      <li><a href="#" >Contact</a></li>
  </nav>
</div>

<?php include $path . '/includes/footer.php' ?>
