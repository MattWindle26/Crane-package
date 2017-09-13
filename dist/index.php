<?php
$path = $_SERVER['DOCUMENT_ROOT'];
?>
<?php include $path . '/includes/header.php' ?>
<main class="home" >
  <h2>Header Elements</h2>
  <nav>
    <a href="/navs/nav-no-drop.php" >Nav no dropdown</a>
    <a href="/navs/nav-with-drop.php" >Nav with dropdown</a>
    <a href="/navs/nav-no-drop-alt.php" >Nav no dropdown alternative</a>
    <a href="/navs/nav-with-drop-alt.php" >Nav with dropdown alternative</a>
  </nav>
  <h2>Banner Elements</h2>
  <nav>
    <a href="/banners/banner-full.php" >Banner full</a>
    <a href="/banners/banner-full-logo.php" >Banner full with logo</a>
    <a href="/banners/banner-full-logo-with-nav.php" >Banner full with logo with nav</a>
    <a href="/banners/banner-full-with-side-section.php" >banner full with side section</a>
  </nav>
  <h2>Other</h2>
  <nav>
    <a href="/others/accordian.php" >Accordian</a>
  </nav>
</main>

<?php include $path . '/includes/footer.php' ?>
