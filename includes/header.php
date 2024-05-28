<?php
	$logged = 'login';
	$nameType = 'Login';
	if(isset($_COOKIE['isLoged'])) {
		$logged = 'logout';
		$nameType = 'Logout';
	}
	$login_logout = "<li><a href='$logged.php'><span class='user'>$nameType</span></a></li>";
?>
<style>
        a {
            color: black;
        }
    </style>
<header>
	<div class="nav_toggle" onclick="toggle_class();">
		<span class="toggle_icon"></span>	
	</div>
	
	<div onclick="remove_class()">
	<div class="main_nav">
		<h2><span>Restoran Pondok</span></h2>
		<ul class="default_links">	
			<!-- <?= $login_logout?> -->
			<li><a href="<?=$logged;?>.php"><?=$nameType?></a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="menu.php">Menu</a></li>
			<li><a href="basket.php">Order</a></li>
		</ul>
		<p class="clear"></p>
	</div>
	<!-- <p class="clear"></p> -->
	</div>
</header>

<div class="responive_nav">
	<div class="nav_section_img">
		<div class="nav_section_div">
			<img src="image/resto.svg" width="92" height="92" alt="Logo Restaurant" class="logo">
			<!-- <h3><a href="index.php"><span>Restaurant UTS</span></a></h3> -->
		</div>
	</div>
	<br><br><br><br>
	<div class="nav_section">
		<ul>
			<?=$login_logout?>
			<li><a href="index.php"><span class="home">Home</span></a></li>
			<li><a href="menu.php"><span class="menu">Menu</span></a></li>
			<li><a href="basket.php"><span class="order">Order</span></a></li>
		</ul>
	</div>
</div>
