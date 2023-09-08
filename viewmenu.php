<?php 
    require 'sessionChecker.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Menu | Hangry</title>
        <script defer src="js/imagezoom.js"></script>
    </head>
<body class="orange-background"> 
<div class="main-body-content">
    <div class="viewproduct-content-box-1">
		<div class="div-for-viewproduct-image-display"><!-- This is the div for the main image displayed in the page that can be zoomed in by your cursor upon hovering over it -->
			<img id="viewproduct-main-image" src="images/Tropical Mango Tango.png" class="viewproduct-main-image">
			<div id="img-zoom-display" class="img-zoom-display"></div>
		</div>
	</div>
	
	<div class="viewproduct-content-box-2">
		<br>
		<a href="menu.php" class="back-hyperlink">&#10094; BACK</a>
		<p class="txt-viewproduct-product-name">
			Tropical Mango Tango
		</p>
		<p class="txt-viewproduct-product-stock">STOCKS: 10</p>
		<div class="div-viewproduct-rating">
			<!-- <ul>
				<li><img src="icons/star-fill.svg" class="icon-star"></li>
				<li><img src="icons/star-fill.svg" class="icon-star"></li>
				<li><img src="icons/star-fill.svg" class="icon-star"></li>
				<li><img src="icons/star-fill.svg" class="icon-star"></li>
				<li><img src="icons/star-half.svg" class="icon-star"></li>
				<li><a href="#review">(39 Ratings)</a></li>
			</ul> -->
		</div>
		<p class="txt-viewproduct-product-price">
			PHP 350.00
		</p>
		<div class="div-viewproduct-1">
			<button class="btn-action-viewproduct" onclick="window.location.href='checkout.php';">Buy Now</button>
			<button class="btn-action-viewproduct">Add to Cart</button>
		</div>
		<br>
		<p class="txt-viewproduct-header">PRODUCT DESCRIPTION</p>
		<p class="txt-viewproduct-product-description">
			Get ready to tango with the flavors of the tropics! 
			This bowl features juicy mango chunks, grilled chicken, coconut rice, 
			and a zesty mango-lime dressing. It's a dance of sweet and savory that 
			will transport your taste buds to a beachside paradise.
		</p>
	</div>
    
    <!-- <div class="viewproduct-content-box-3">

    </div> -->
    
    <?php require 'footers/footer.php';?> 
</div>
</body>
</html>