<?php
$path = $_SERVER['DOCUMENT_ROOT'];
?>
<?php include $path . '/page-includes/header.php' ?>


<div class="main-container" >
  <main>
    <h1>Welcome to Crane</h1>
    <h2>Crane is awesome to make websites</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="accordion">
      <div class="accordion__item">
        <div class="accordion__item__title">
          <h3>Title here</h3>
         </div>
          <div class="accordion__item__content">
            <p>
              Put all your content here
            </p>
        </div>
      </div>
      <div class="accordion__item">
        <div class="accordion__item__title">
          <h3>Title here</h3>
         </div>
          <div class="accordion__item__content">
            <p>
              Put all your content here
            </p>
        </div>
      </div>
    </div>

  </main>
  <?php include $path . '/page-includes/sidebar.php' ?>
</div>
<?php include $path . '/page-includes/jumps.php' ?>


<?php include $path . '/page-includes/footer.php' ?>
