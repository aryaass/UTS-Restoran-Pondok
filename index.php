<?php 
	// session_start();
	require_once ('account.php');
	require_once "admin/includes/functions.php";
	require_once "admin/includes/db.php";
	
	$resultsUser;
	$idUser = '';
	$welcome = '';
	$welcomeName = '';

	if(isset($_COOKIE['isLoged'])) {
		$welcome = getUserById($_COOKIE['isLoged']);
		$welcomeName = 'Hi ,'.$welcome['fname'].' '.$welcome['lname'];
		$welcomeName = '<span style="font-size: 72px;">'.$welcomeName.'</span><br>';
	}
	
	$get_recent = $db->query("SELECT * FROM food LIMIT 9");
	
	$result = "";
	
	if($get_recent->num_rows) {
		
		while($row = $get_recent->fetch_assoc()) {
			
			$result .= "<div class='parallax_item'>
				
							<a href='detail.php?fid=".$row['id']."'><img src='image/FoodPics/".$row['id'].".jpg' width='80px' height='80px' /> 
							<div class='detail'>
								
								<h4>".$row['food_name']."</h4>
								<p class='desc'>".substr($row['food_description'], 0, 33)."...</p>
								<p class='price'>#".$row['food_price']."</p>
								
							</div>
							<p class='clear'></p>
							</a>
							
						</div>";
			
		}
		
	}else{
		
	}
	
?>

<!Doctype html>

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<head>
	<title>Restoran Pondok | Home</title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/lightbox.min.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="js/jquery.min.js" ></script>
	<script src="js/myscript.js"></script>
	<script src="js/lightbox.min.js" ></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
	<?php require "includes/header.php"; ?>
	<div class="parallax" onclick="remove_class()">
		<div class="parallax_head">
			<h2 data-aos="zoom-in" ><?=$welcomeName?>Welcome To Our Restaurant</h2>
			<h3 data-aos="zoom-in" >We Are Very Excited To Cook For You</h3>
		</div>
	</div>

	<div class="content" onclick="remove_class()">
		<div class="inner_content on_parallax">
			<h2><span class="fresh">Food Varieties</span></h2>
			<div class="parallax_content">
				<div class="multicol">

					<div data-aos="fade-right" class="image_display">
						<a href="image/dish.jpg" data-lightbox="image-2"><img src="image/dish.jpg" alt="image/dish.jpg" width="100%" /></a>
					</div>

					<div data-aos="fade-up-right" class="image_display">
						<a href="image/dish_2.jpg" data-lightbox="image-4"><img src="image/dish_2.jpg" alt="image/dish_2.jpg" width="100%" /></a>
					</div>

					<div data-aos="fade-up" class="image_display">
						<a href="image/dish_3.jpg" data-lightbox="image-1"><img src="image/dish_3.jpg" alt="image/dish_3.jpg" width="100%" /></a>
					</div>

					<div data-aos="fade-up" class="image_display">
						<a href="image/dish_4.jpg" data-lightbox="image-3"><img src="image/dish_4.jpg" alt="image/dish_4.jpg" width="100%" />
					</div>
					
					<div data-aos="fade-up-left" class="image_display">
						<a href="image/dish_5.jpg" data-lightbox="image-5"><img src="image/dish_5.jpg" alt="image/dish_5.jpg" width="100%" /></a>
					</div>
						
					<div data-aos="fade-right" class="image_display">
						<a href="image/dish_6.jpg" data-lightbox="image-6"><img src="image/dish_6.jpg" alt="image/dish_6.jpg" width="100%" /></a>
					</div>
						
					<div data-aos="fade-up-right" class="image_display">
						<a href="image/dish_7.jpg" data-lightbox="image-7"><img src="image/dish_7.jpg" alt="image/dish_7.jpg" width="100%" /></a>
					</div>

					<div data-aos="fade-left" class="image_display">
						<a href="image/dish_8.jpg" data-lightbox="image-8"><img src="image/dish_8.jpg" alt="image/dish_8.jpg" width="100%" /></a>
					</div>
					
					<div data-aos="fade-up" class="image_display">
						<a href="image/dish_9.jpg" data-lightbox="image-9"><img src="image/dish_9.jpg" alt="image/dish_9.jpg" width="100%" /></a>
					</div>
					
					<div data-aos="fade-left" class="image_display">
						<a href="image/dish_10.jpg" data-lightbox="image-10"><img src="image/dish_10.jpg" alt="image/dish_10.jpg" width="100%" /></a>
					</div>
					
					<div data-aos="fade-up" class="image_display">
						<a href="image/dish_20.jpg" data-lightbox="image-20"><img src="image/dish_20.jpg" alt="image/dish_20.jpg" width="100%" /></a>
					</div>
					
					<div data-aos="fade-left" class="image_display">
						<a href="image/dish_21.jpg" data-lightbox="image-21"><img src="image/dish_21.jpg" alt="image/dish_21.jpg" width="100%" /></a>
					</div>
					
					<div data-aos="fade-left" class="image_display">
						<a href="image/dish_22.jpg" data-lightbox="image-22"><img src="image/dish_22.jpg" alt="image/dish_22.jpg" width="100%" /></a>
					</div>
					
					<div data-aos="fade-left" class="image_display">
						<a href="image/dish_23.jpg" data-lightbox="image-23"><img src="image/dish_23.jpg" alt="image/dish_23.jpg" width="100%" /></a>
					</div>
					
				</div>
				<p class="clear"></p>
			</div>
		</div>
	</div>

	<div class="content" onclick="remove_class()">
		<div class="inner_content">
			<div class="contact">
				<div data-aos="fade-right" class="left">
					<h3>LOCATION</h3>
					<p>Serpong, Tangerang</p>
					<p>Universitas Multimedia Nusantara</p>
				</div>

				<div data-aos="fade-left" class="left">
					<h3>CONTACT</h3>
					<p>080123456789, 080123456789</p>
					<p>admin@gmail.com</p>
				</div>
				
				<p class="left"></p>
				<div class="icon_holder">
					<a href="#"><img src="image/icons/Facebook.png" alt="image/icons/Facebook.png" /></a>
					<a href="#"><img src="image/icons/Google+.png" alt="image/icons/Google+.png"  /></a>
					<a href="#"><img src="image/icons/Twitter.png" alt="image/icons/Twitter.png"  /></a>
				</div>
			</div>
		</div>
	</div>

	<script>AOS.init();</script>
	
</body>
</html>