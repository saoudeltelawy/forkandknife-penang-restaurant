<!-- Dynamic Nav  -->

<!-- <li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="menu.php">Our Menu</a></li>
<li><a href="contact.php">Contact Us</a></li> -->

<?php  

    include('config.php');
?>
<ul>

<?php 


 foreach ($navItems as $item ) {
      echo "<li>
          <a href=\"item[reference]\">$item[title]</a>
      </li>";
 }



?>
</ul>
