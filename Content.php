
<?php
include_once("connection.php");
?>
<!--slider-->
<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="img/toys-banner-1.jpg" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                    </h2>
                </div>
            </li>
            <li><img src="img/toys-banner-2.jpg" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                    </h2>
                </div>
            </li>
            <li><img src="img/toys-banner-3.jpg" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                    </h2>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->
<!-- End slider area -->
    
    <!--Introduction of functions-->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load products from DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--A product -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img style="height: 12rem;" src="product-imgs/<?php echo $row['Pro_image']?>" width="260" height="260">
                                    <div class="product-hover">
                                        <a href="?page=quanly_product details&ma=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a style="color: black!important;" href="?page=quanly_product details&ma=<?php echo  $row['Product_ID']?>"> <?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$<?php echo  $row['Price']?></ins>
                                </div> 
                            </div>
                
                <?php
				}
				?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <div class="single-wid-product">
                            <a href="index.php"><img src="img/images (1).png" alt="" class="product-thumb"></a>
                            <h2><a  style="color: black!important;" href="index.php">Model assembly </a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$5</ins> <del>$7</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="index.php"><img src="img/img 1.jpg" alt="" class="product-thumb"></a>
                            <h2><a style="color: black!important;"  href="index.php">Yellow car</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$12.5</ins> <del>$15</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="index.php"><img src="img/img 6.jpg" alt="" class="product-thumb"></a>
                            <h2><a style="color: black!important;"  href="index.php">PiO choco</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$8</ins> <del>$10</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <div class="single-wid-product">
                            <a href="index.php"><img src="img/images (4).jpg" alt="" class="product-thumb"></a>
                            <h2><a style="color: black!important;"  href="index.php">Round square triangle</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$3</ins> <del>$6</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a   href="index.php"><img src="img/toys2.jpg" alt="" class="product-thumb"></a>
                            <h2><a style="color: black!important;" href="index.php">Tractor</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>2</ins> <del>$5</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="index.php"><img src="img/img 3.jpg" alt="" class="product-thumb"></a>
                            <h2><a style="color: black!important;"  href="index.php">Bicycle children</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$45</ins> <del>$50</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <div class="single-wid-product">
                            <a style="color: black" href="index.php"><img src="img/img 5.jpg" alt="" class="product-thumb"></a>
                            <h2><a style="color: black!important;"  href="index.php"></a>House</h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$15</ins> <del>$24</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="index.php"><img src="img/img 4.jpg" alt="" class="product-thumb"></a>
                            <h2><a style="color: black!important;"  href="index.php">Optimus Prime</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$10</ins> <del>$14</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="index.php"><img src="img/images (9).jpg" alt="" class="product-thumb"></a>
                            <h2><a  style="color: black!important;" href="index.php">Lego</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$8</ins> <del>$10</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
   
  