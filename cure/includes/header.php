<link rel="stylesheet" type="text/css" href="displayproducts.css">


<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<div class="header">
            <div class="top-toolbar"><!--header toolbar-->
                <div class="container">
                    <div class="row">
                       
                        <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                            <div class="top-contact-info">
                                <ul>
<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    <li class="toolbar-email"><i class="fa fa-envelope-o"></i> <?php  echo htmlentities($row->Email);?></li>
                                 <li class="toolbar-contact"><i class="fa fa-phone"></i> +<?php  echo htmlentities($row->MobileNumber);?></li><?php $cnt=$cnt+1;}} ?>
                                    <li><a class="toolbar-new-listing" href="admin/login.php"> Log in</a></li>
                                    <li><a class="toolbar-new-listing" href="admin/register.php">Register</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--header toolbar end-->

            <!-----------------------------------------main navigation----------------------------------->
            <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="index.php">
      
      <span class="font-serif text-5xl subpixel-antialiased font-bold tracking-wider text-green-600 " >CURE</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-yellow-500 font-sans text-xl antialiased text-green-500"  href="index.php">HOME</a>
      <a class="mr-5 hover:text-yellow-500 font-sans text-xl antialiased text-green-500" href="listings.php">LISTINGS</a>
      <a class="mr-5 hover:text-yellow-500 font-sans text-xl antialiased text-green-500" href="faq.php">FAQ</a>
      <a class="mr-5 hover:text-yellow-500 font-sans text-xl antialiased text-green-500" href="about.php">ABOUT</a>
      <a class="mr-5 hover:text-yellow-500 font-sans text-xl antialiased text-green-500" href="contact.php">CONTACT</a>

    </nav>
    
  </div>
</header>
            <!--------------------------main navigation end----------------------->

        </div>