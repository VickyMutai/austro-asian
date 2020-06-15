<div class="navbar">
	<div class="logo_div">
		<a href="index.php"><h1>Austro-Asian</h1></a>
	</div>
	<ul>
	  <li><a class="active" href="index.php">Home</a></li>
	  <li style="color:white"><?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		welcome <?php echo $_SESSION['user']['username'] ?>
		|
		<a href="logout.php">logout</a>
<?php }else{ ?>
	<li><a href="login.php">Login</a></li>
<?php } ?></li>
	</ul>
</div>