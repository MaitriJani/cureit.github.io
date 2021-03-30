<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
   
	
	<title>Cure | Listings</title>
	
   
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
        
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="displayproducts.css">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!--================================ Main STYLE SHEETs====================================-->
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!--================================FONTAWESOME==========================================-->
		
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        
	<!--================================GOOGLE FONTS=========================================-->
	
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
	<link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />
		
</head>
<body>
	<div class="preloader"><span class="preloader-gif"></span></div>
	<div class="theme-wrap clearfix">
		<!--================================responsive log and menu==========================================-->
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
		</div>
		<!--================================HEADER==========================================-->
		<?php include_once('includes/header.php');?>
		
		<!--================================PAGE TITLE==========================================-->
		<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
			<h4 class="white">Featured Medicines</h4>
		</div><!-- section title end -->
		<div class="sc-page"><!--sc-page-->
			<!--================================PRICING PLAN SECTION 1==========================================-->
		
			<section class="pricing-section padding-top-70 padding-bottom-40">
				<div class="container"><!-- section container -->
					<div class="row pricing-wrap style-2 clearfix">
						
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<?php
$sql="SELECT * from tblpage where PageType='listings'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<STRONG style="color: black"><?php  echo $row->PageTitle;?></STRONG>
							<p style="padding-right: 50px"><?php  echo $row->PageDescription;?></p>
						</div><?php $cnt=$cnt+1;}} ?>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8"><!-- .pricing -->
		<!-------------------------product listings---------------------->
        <section class="text-gray-600 body-font">
		<h3>Featured Products</h3>

				<div class="container px-5 py-24 mx-auto">
					<div class="flex flex-wrap -m-4">
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="index.php"><img alt="Aspirin" class="object-cover object-center w-full h-full block" src="images/aspirin.jpg"></a>
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Painkiller</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">Aspirin</h2>
						<p class="mt-1">₹ 3.30</p>
						<form method="get" action="/page2">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						
						</div>
					</div>
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="index.php"><img alt="Cetriz" class="object-cover object-center w-full h-full block" src="images/cetriz.jpg">
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Allergies</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">Cetriz</h2>
						<p class="mt-1">₹ 16.56</p>
						<form method="get" action="/page2">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						</div>
					</div>
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="index.php"><img alt="Fepamol" class="object-cover object-center w-full h-full block" src="images/fepamol.jpg">
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Fever</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">Fepamol</h2>
						<p class="mt-1">₹ 17.44</p>
						<form method="get" action="/page2">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						</div>
					</div>
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="index.php"><img alt="cetrizine_hydrochloride" class="object-cover object-center w-full h-full block" src="images/cetrizine_hydrochloride.jpg">
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Allergies</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">cetrizine_hydrochloride</h2>
						<p class="mt-1">₹ 60.00</p>
						<form method="get" action="/page2">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						</div>
					</div>
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="index.php"><img alt="Abirapro" class="object-cover object-center w-full h-full block" src="images/abirapro.jpg">
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Cancer</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">Abirapro 250mg Tablet 120'S</h2>
						<p class="mt-1">₹ 20,000.00</p>
						<form method="get" action="/page2">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						</div>
					</div>
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="index.php"><img alt="SINAREST LEVO NEW Tablet 10's" class="object-cover object-center w-full h-full block" src="images/sinarest.jpg">
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Cough and cold</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">SINAREST LEVO NEW Tablet 10's
</h2>
						<p class="mt-1">₹ 70.34</p>
						<form method="get" action="/page2">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						</div>
					</div>
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="index.php"><img alt="Dulotin 10mg Tablet 10'S" class="object-cover object-center w-full h-full block" src="images/dulotin.jpg">
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Depression</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">Dulotin 10mg Tablet 10'S</h2>
						<p class="mt-1">₹ 49.20</p>
						<form method="get" action="/page2">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						</div>
					</div>
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="index.php"><img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images/obezita.jpg">
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Weight loss</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">Obezita 120mg Capsule 10'S</h2>
						<p class="mt-1"> ₹ 376.00</p>
						<form method="get" action="/page2">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						</div>
					</div>
					</div>
  					</div>
		</section>

		<!--------------------------featured products end here----------------------------->

						</div><!-- pricing end -->
						
					</div><!-- .row pricing end -->
				</div><!-- container end -->
<?php include_once('includes/footer.php');?>
	</div>
	
	
	<!--================================JQuery===========================================-->
        
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.js"></script><!-- jquery 1.11.2 -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	
	<!--================================BOOTSTRAP===========================================-->
        
	<script src="bootstrap/js/bootstrap.min.js"></script>	
	
	<!--================================NAVIGATION===========================================-->
	
	<script type="text/javascript" src="js/menu.js"></script>
	
	<!--================================SLIDER REVOLUTION===========================================-->
		
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider.js"></script>
	
	<!--================================MAP===========================================-->
		
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM&amp;sensor=false"></script>
	<script type="text/javascript" src="js/map.js"></script>
	<!-- map with geo locations -->
	
	<script type="text/javascript" src="js/jquery.mapit.js"></script>
	<script src="js/initializers.js"></script>
	
	<!--================================OWL CARESOUL=============================================-->
		
	<script src="js/owl.carousel.js"></script>
    <script src="js/triger.js" type="text/javascript"></script>
		
	<!--================================FunFacts Counter===========================================-->
		
	<script src="js/jquery.countTo.js"></script>
	
	<!--================================jquery cycle2=============================================-->
	
	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>	
	
	<!--================================waypoint===========================================-->
		
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->
	
	<!--================================RATINGS===========================================-->	
	
	<script src="js/jquery.raty-fa.js"></script>
	<script src="js/rate.js"></script>
	
	<!--================================ testimonial ===========================================-->
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			
			<div class="rg-image-wrapper">
				<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
						<h5></h5>
						<div class="caption-metas">
							<p class="position"></p>
							<p class="orgnization"></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</script>	
	<script type="text/javascript" src="assets/testimonial/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/gallery.js"></script>
	
	<!--================================custom script===========================================-->
		
	<script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>