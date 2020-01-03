<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title"><?=$nazivAPP?></div>
</div>

<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
    <li class="menu-text show-for-large"><?php echo $nazivAPP ?></li>
    <li><a href="index.php">Početna</a></li>
    <li>
        <a href="#">Zadatci</a>
        <ul class="menu vertical">
        <li><a href="zadatak1.php">Prvi Zadatak</a></li>
        <li><a href="zadatak2.php">Drugi Zadatak</a></li>
        <li><a href="zadatak3.php">Treći Zadatak</a></li>
        <li><a href="zadatak4.php">Četvrti Zadatak</a></li>
        <li><a href="zadatak5.php">Peti Zadatak</a></li>
        <li><a href="test.php">Test</a></li>
        </ul>
    </li> 
  </div>
</div>