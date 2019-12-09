<?php
require 'config/config.php';
require 'config/logonC.php';
$total=null;


?>

<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 

		<title>Homepage
		</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/radio.css">
		<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}</style>


		

    </head>
	<body style="background-color: 	#FF00FF;">
		<form action="productone.php" method="post"> 

		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header" style="color: red;">
				<div class="container">
					<ul class="header-links pull-left">
						<li style="color: red;"><img src="./img/moby.jpg" alt="" style="width:150px;height:90px;background-color: red; ">
</i></a></li><li style="color: red;"><a href="index.php"><img src="./img/logout.jpg" alt="" style="width:20px;height:20px;background-color: red; ">
</i>Log-Out</a></li>
						
					</ul>
					<ul class="header-links pull-right">
						<li>
							<a href="cartform.php"><img src="./img/myaccount.jpg" style="width: 45px; height: 45px; background-color: blur; padding: 10px;">My Account</a>
						</li>
						
						
						</li>
					</ul>

					
				</div>
			</div>
			<!-- /TOP HEADER -->

            <div><b><h1 style="text-align: center; color:black;"></h1></b></div>		<!-- NAVIGATION -->
		<nav id="navigation" style="background-color: #FF7F50; text-align: center;">
			<!-- container -->
			<div class="container" style="background-color:	#FF7F50; text-align: center;">
				<!-- responsive-nav -->
				<div id="responsive-nav" style="text-align: center;">
					<!-- NAV -->
					<ul class="product-link pull-middle" >
						<li style="width: 1174px; height: 34px" class="auto-style5" >
							<a href="index.php"><span class="auto-style6">Home</span></a><span class="auto-style6">&nbsp;&nbsp;
							</span>
						<a href="LaptopProductN.php"><span class="auto-style6">Laptops</span></a><span class="auto-style6"> &nbsp;&nbsp;
						
						<a href="PhoneSmartN.php" style="">Smartphones</a>&nbsp;&nbsp;
						<a href="cameraN.php">Cameras</a>&nbsp;&nbsp;
						</span>
						<a href="tvhomeN.php"><span class="auto-style6">Smart TV</span></a></li>

					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
	
		<!-- SECTION -->
	<div class="container-fluid">
				<!-- row -->
				<div class="row">

					
					<div class="col-md-3" style="background-color:#800080;border-radius: 10px;">
						

										<div class="product">
											<div class="product-img">
												<img style="width: 100px;"><?php echo'<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>'?>

                                        
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row1['product_name'] ?></a></h3>
												<h4 class="product-price" name="price"><p>$<?php echo $row1['product_price'];
                                                 ?></p></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
												</div>
											</div>
											
										</div>
										

										
									
									
									<div id="slick-nav-1" class="products-slick-nav"></div>
	
			       </div><!--col md 3  -->
			       <div class="col-md-6" style="text-align:center;padding:15px; background-color:	#FF69B4	; border-radius: 55px; height:450px; border: solid black;">
			       	
			       	<p style="color:#008000"><b>Product details:</b> </p><br>
			       	<ul style="color:#008000;">
			     Hisense’s ULED technologies amplifies color, contrast, brightness and provides smooth motion— raising the bar for picture quality<br>
Your favorite content is always front and center to binge-watch or pick up where you left off with Android TV<br>
With the Google Assistant built in, you can quickly access entertainment, get answers, and control devices around your home—all with just your voice<br>
Dolby Vision HDR + HDR10 provides high dynamic range which adds details, dramatic color, contrast and brightness<br>
				
              <!-- Default input -->
              <input name="qty" type="number" value="1" aria-label="Search" class="auto-style3" style="width: 100px; height:45px; padding: 5px; border-radius: 10px;">
              <button class="btn btn-primary btn-md my-0 p" name="product1" onclick="myFunction()" type="submit" style="width: 150px; height: 45px; border-radius: 10px; font-size: medium">&nbsp;Add to cart
                <i class="fa fa-shopping-cart"></i>
              </button>



									

            



			       	</ul>
			       </div>
			       <div class="col-md-3" style="background-color:#FF69B4; border-radius: 10px; border: solid black;">
			           
			           
			           	<p><b><font size="2"> Select color,size and delivery method</p>
			           <div style="width: 150px;">
			           
			           	 <tr>
			           	 	<td>Color: </td>
			           	 <td><label><input type="radio" name="color" value="Black">Black</label>
      <label><input type="radio" name="color" value="Silver"> Silver</label>  
      <label><input type="radio" name="color" value="Pink">Pink</label></td></tr></div><hr>
	              <div>
	              	<tr>
	              		<td><b>Size:</b></td>
			          <label><input type="radio" name="size" value="Small">Small</label>
      <label><input type="radio" name="size" value="Medium">Medium</label>  
      <label><input type="radio" name="size" value="Large">Large</label></tr></div><hr>
<div>
	<tr> <td><b>Delivery Method: </b></td>

			          <label><input type="radio" name="delivery" value="Free delivery">Free delivery</label>
      <label><input type="radio" name="delivery" value="5">Two Days delivery $5 extra</label>  
      <label><input type="radio" name="delivery" value="10">Express delivery $10 extra</labe></label></tr></div>


			             </div>  
			          

                  

			       </div>

            </div>
	 
			   </div><!--row-->
			   <hr>
			   
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     



									
									<div id="slick-nav-1" class="products-slick-nav"></div>

								<!--</div>-->

								<!-- /tab -->
							<!--</div>-->
						<!--</div>-->


					<!--</div>-->
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

										<?php 

										     $id=$row1['id'];
										     $productprice=$row1['product_price'];
										    $productname=$row1['product_name'];
										    $productimage='<img src="data:image/jpeg;base64,'.base64_encode( $row1['product_image'] ).'"/>';
										    

										   
										    
                                              if (isset($_POST['product1'])) 

                                              {
                                              	$pqtr=$_POST['qty'];
                                             

                                              	  $radioVal=$_POST['color'];
										     if ($radioVal=="Black") 
										     {
										          $color="Black";
										     }
										     if ($radioVal=="Silver") {
										     	$color="Silver";
										     	# code...
										     }
										     if ($radioVal=="Pink") {
										     	$color="Pink";
										     	# code...
										     }
										     $radioSize=$_POST['size'];
										     if ($radioSize=="Small") {
										     	$size="Small";
										     	# code...
										     }
										     if ($radioSize=="Medium") {
										     	$size="Medium";
										     	# code...
										     }
										     if ($radioSize=="Large") {
										     	$size="Large";
										     	# code...
										     }
										     $Rdelivery=$_POST['delivery'];
										     if ($Rdelivery=="Free delivery") {
										     	$delivery="Free delivery";
										     	$total=$productprice*$pqtr;
										     	# code...
										     }
										     if ($Rdelivery=="5") {
										     	$delivery="Two Days Delivery $5 extra";
										     	$total=($productprice*$pqtr)+5;
										     	
										     }
										     if ($Rdelivery=="10") {
										     	$delivery="Express delivery $10 extra";
										     	$total=($productprice*$pqtr)+10;
										     	# code...
										     }

                                                   
 
                                                  $query=" insert into cart values ('$id','$productimage','$productname','$color','$size','$productprice','$delivery','$pqtr','$total')";
                                                  $query_run=mysqli_query($con,$query);



                                                 

                                              }


										?>

		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		
		<!-- /HOT DEAL SECTION -->

		

		<!-- SECTION -->
		
					
<script>
function myFunction() {
  alert("Item Added to cart");
}
</script>
		
			

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</form>


	</body>
</html>
