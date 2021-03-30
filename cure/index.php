<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
    
	<title>Welcome to Cure </title>
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
        
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  
		
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
		<?php include_once('includes/header.php');?>
		
		<!--================================Revolution SLIDER SECTION==========================================-->
		
		<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Welcome to Cure
        <br class="hidden lg:inline-block">, all your medicines at one place
      </h1>
      <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
      <div class="flex justify-center">
	  <form method="get" action="/login.php">
        <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-200 hover:text-black rounded text-lg">Login</button>
		</form>
		<form method="get" action="/register.php">
		<button class="ml-4 inline-flex text-black-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-green-500 hover:text-white rounded text-lg">Register</button>
		</form>
	</div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="headerimg.png">
    </div>
  </div>
</section>

		
		<section id="search-form">
			<div class="container">
				<div class="search-form-wrap">
					<form class="clearfix" name="search" action="serviceman-search.php" method="post">
						
						<div class="select-field-wrap pull-left">
		
							<input class="input-field" type="text" placeholder="Location" name="location" style="height:55px;" required="required">	
							</select>
						</div>
						<div class="select-field-wrap pull-left">
							<select class="search-form-select" name="categories" >
								<option class="options" value="all-categories">all categories</option>
								<?php 

$sql2 = "SELECT * from   tblcategory ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->Category);?>"><?php echo htmlentities($row->Category);?></option>
 <?php } ?> 
							</select>
						</div>
						<div class="submit-field-wrap pull-right">
							<input class="search-form-submit bgyallow-1 white" name="search" type="submit"/>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!--------------------------featured products start here----------------------------->
		<!--ALL PRODUCTS-->
		
		<section class="text-gray-600 body-font">
		<h3>Featured Products</h3>

				<div class="container px-5 py-24 mx-auto">
					<div class="flex flex-wrap -m-4">
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="aspirin.php"><img alt="Aspirin" class="object-cover object-center w-full h-full block" src="images/aspirin.jpg"></a>
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Painkiller</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">Aspirin</h2>
						<p class="mt-1">₹ 3.30</p>
						<form method="get" action="inquire.php">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg" >Inquire</button>
						</form>
						
						</div>
					</div>
					<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
						<a class="block relative h-48 rounded overflow-hidden">
						<a href="medicine-detail0.php"><img alt="Cetriz" class="object-cover object-center w-full h-full block" src="images/cetriz.jpg">
						</a>
						<div class="mt-4">
						<h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Allergies</h3>
						<h2 class="text-gray-900 title-font text-lg font-medium">Cetriz</h2>
						<p class="mt-1">₹ 16.56</p>
						<form method="get" action="inquire.php">
						
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
						<form method="get" action="inquire.php">
						
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
						<form method="get" action="inquire.php">
						
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
						<form method="get" action="inquire.php">
						
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
						<form method="get" action="inquire.php">
						
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
						<form method="get" action="inquire.php">
						
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
						<form method="get" action="inquire.php">
						
						<button type="submit" class="ml-4 justify-center text-black-900 bg-green-100 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-500 rounded text-lg">Inquire</button>
						</form>
						</div>
					</div>
					</div>
  					</div>
		</section>

		<!--------------------------featured products end here----------------------------->

		<!------------------------------category----------------------------------->
		
		<section class="categories-section padding-top-20 padding-bottom-40">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>Category</h4>
					<div class="title-divider">
						<div class="line"></div>
						<i class="fa fa-star-o"></i>
						<div class="line"></div>
					</div>
				</div><!-- section title end -->
				<div class="row category-section-wrap cat-style-2">
					<div class="col-md-12 col-sm-6 col-xs-12"><!-- category column -->
						<div class="cat-wrap shadow-1">
							
							<h5><i class="fa fa-heart bgblue-1 white"></i>Local Service Category </h5>
							<div class="cat-list-wrap">
								<ul class="cat-list">
									<?php
$sql="SELECT Category, count(ID) as total from tblperson group by Category";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
									<li><a href="view-category-detail.php?viewid=<?php echo htmlentities ($row->Category);?>"><?php  echo htmlentities($row->Category);?> <span>(<?php  echo htmlentities($row->total);?>)</span></a></li>
									<?php $cnt=$cnt+1;}} ?>
									
								</ul>
							</div>
						</div>
						
						<div class="listing-border-bottom bgblue-1"></div>
					</div><!-- category column end -->
					</div>
			</div><!-- section container end -->
		</section>
		
		<!------------------------------category ends----------------------------------->

		<!-----------------------------HOW IT WORKS----------------------------------->
		<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">How it works?</h1>
      <!----<p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>--->
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
		<i class="fa fa-user bg-blue black"></i>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Create an account</h2>
          
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
		<i class="fa fa-bullhorn bg-blue black"></i>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Post medicines for free</h2>
          
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
		
		<i class="fa fa-thumbs-up black"></i>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Deal done</h2>
         
        </div>
      </div>
    </div>
  </div>
</section>
		
		

		<!-----------------------------HOW IT WORKS----------------------------------->

		
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