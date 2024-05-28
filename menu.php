<?php 
	require_once "admin/includes/functions.php";
	require_once "admin/includes/db.php";
	
	$bfast = "";
	$lunch = "";
	$dinner = "";
	$special = "";
	$get_recent = $db->query("SELECT * FROM food");
	if($get_recent->num_rows) {
		while($row = $get_recent->fetch_assoc()) {
			if($row['food_category'] == "Breakfast") {
				$bfast .= "<div class='card'>
							<a href='detail.php?fid=".$row['id']."'>
								<img src='image/FoodPics/".$row['id'].".jpg'/> 
								<div class='descriptions'>
									<h1>".$row['food_name']."</h4>
									<p class='desc'>".substr($row['food_description'], 0, 50)."...</p>
									<p class='price'>Rp".$row['food_price']."</p>
								</div>
								<p class='clear'></p>	
							</a>
						</div>";
			}elseif($row['food_category'] == "Lunch") {
				$lunch .=	"<div class='card'>
							<a href='detail.php?fid=".$row['id']."'>
								<img src='image/FoodPics/".$row['id'].".jpg'/> 
								<div class='descriptions'>
									<h1>".$row['food_name']."</h4>
									<p class='desc'>".substr($row['food_description'], 0, 50)."...</p>
									<p class='price'>Rp".$row['food_price']."</p>
								</div>
								<p class='clear'></p>	
							</a>
						</div>";
			}elseif($row['food_category'] == "Dinner") {
				$dinner .= "<div class='card'>
							<a href='detail.php?fid=".$row['id']."'>
								<img src='image/FoodPics/".$row['id'].".jpg'/> 
								<div class='descriptions'>
									<h1>".$row['food_name']."</h4>
									<p class='desc'>".substr($row['food_description'], 0, 50)."...</p>
									<p class='price'>Rp".$row['food_price']."</p>
								</div>
								<p class='clear'></p>	
							</a>
						</div>";
			}elseif($row['food_category'] == "Special") {
				$special .= "<div class='card'>
							<a href='detail.php?fid=".$row['id']."'>
								<img src='image/FoodPics/".$row['id'].".jpg'/> 
								<div class='descriptions'>
									<h1>".$row['food_name']."</h4>
									<p class='desc'>".substr($row['food_description'], 0, 50)."...</p>
									<p class='price'>Rp".$row['food_price']."</p>
								</div>
								<p class='clear'></p>	
							</a>
						</div>";
			}
		}
	}else{
		header("location; index.php");
		exit;
	}
?>

<!Doctype html>

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<head>
	<title>Restoran Pondok | Menu</title>
	<link rel="stylesheet" href="css/main.css" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="js/jquery.min.js" ></script>
	<script src="js/myscript.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
<?php require "includes/header.php"; ?>
	<div class="parallax" onclick="remove_class()">
		<div class="parallax_head">
			<h2 data-aos="zoom-in">Menu</h2>
			<h3 data-aos="zoom-in">We Serve All Kind Of food</h3>
		</div>
	</div>

	<div class="content" onclick="remove_class()">
		<div data-aos="zoom-in-down" class="inner_content on_parallax">
			<h2><span class="fresh">BreakFast Menu</span></h2>
			<div class="parallax_content">
				<?php echo ($bfast == "") ? "<h3 style=' center; text-align: center; font-weight: lighter; padding: 10px 0px; background: #ff8787; color: #333;'>Your shopping basket is empty</h3>" : $bfast; ?>
				<p class="clear"></p>
			</div>
		</div>
	</div>

	<div class="content" onclick="remove_class()">
		<div data-aos="zoom-in-down" class="inner_content on_parallax">
			<h2><span class="fresh">Lunch Menu</span></h2>
			<div class="parallax_content">
				<?php echo ($lunch == "") ? "<h3 style=' text-align: center; font-weight: lighter; padding: 10px 0px; background: #ff8787; color: #333;'>Your shopping basket is empty</h3>" : $lunch; ?>
				<p class="clear"></p>
			</div>
		</div>
	</div>

	<div class="content" onclick="remove_class()">
		<div data-aos="zoom-in-down" class="inner_content on_parallax">
			<h2><span class="fresh">Dinner Menu</span></h2>
			<div class="parallax_content">
				<?php echo ($dinner == "") ? "<h3 style=' text-align: center; font-weight: lighter; padding: 10px 0px; background: #ff8787; color: #333;'>Your shopping basket is empty</h3>" : $dinner; ?>
				<p class="clear"></p>
			</div>
		</div>
	</div>

	<div class="content" onclick="remove_class()">
		<div data-aos="zoom-in-down" class="inner_content on_parallax">
			<h2><span class="fresh">Special Menu</span></h2>
			<div class="parallax_content">
				<?php echo ($special == "") ? "<h3 style=' text-align: center; font-weight: lighter; padding: 10px 0px; background: #ff8787; color: #333;'>Your shopping basket is empty</h3>" : $special; ?>
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

	<script>
	AOS.init();
	</script>
</body>
</html>