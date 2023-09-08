<?php 
    require 'sessionChecker.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home | Hangry</title>
    </head>
<body>
<div class="main-body-content">
    <div class="div-carousel" data-carousel>
		<ul data-slides>
			<li class="slide" data-active>
				<img src="images/carousel-1.png" class="carousel-img">
			</li>
		</ul>
		<div class="div-carousel-content-box">
            <img src="images/Hangry Logo.png" alt="" class="business-logo-2">
			<p class="txt-carousel">
            Dive into a world of flavors and elevate your dining experience with Hangry Restaurant. 
            Your next culinary adventure is just a click away!
			</p>
			<button class="btn-shop-now-1" onClick="window.location.href='menu.php'">BROWSE MENU</button>
		</div>
	</div>

    <div class="home-title-header-1">
        Our Menus
    </div>

    <div class="home-title-subheader-1">
        International Cuisine Inspired Restaurant
    </div>

    <div class="menu-section">

        <!-- Generate the "box-menu" div for every menu in database -->
        <div class="box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="images/Savory Southwest Fiesta Bowl.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">
                        Savory Southwest Fiesta Bowl
                    </p>
                    <p class="menu-price">Php 250.00</p>
                    <p class="menu-status">OUT OF STOCK</p>
                    <!-- <button class="btn-menu-1">ADD TO CART</button>-->
                    <button class="btn-menu-1" onclick="window.location.href='viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
        </div>

        <div class="box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="images/Tropical Mango Tango.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Tropical Mango Tango</p>
                    <p class="menu-price">Php 350.00</p>
                    <button class="btn-menu-1">ADD TO CART</button>
                    <button class="btn-menu-1" onclick="window.location.href='viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
        </div>

        <div class="box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="images/Asian Fusion Umami.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Asian Fusion Umami</p>
                    <p class="menu-price">Php 250.00</p>
                    <button class="btn-menu-1">ADD TO CART</button>
                    <button class="btn-menu-1" onclick="window.location.href='viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
        </div>

        <div class="box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="images/Spicy Thai Basil Delight.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Spicy Thai Basil Delight</p>
                    <p class="menu-price">Php 200.00</p>
                    <button class="btn-menu-1">ADD TO CART</button>
                    <button class="btn-menu-1" onclick="window.location.href='viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
        </div>

        <div class="box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="images/Mediterranean Mezze Medley Bowl.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Mediterranean Mezze Medley Bowl</p>
                    <p class="menu-price">Php 300.00</p>
                    <button class="btn-menu-1">ADD TO CART</button>
                    <button class="btn-menu-1" onclick="window.location.href='viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
        </div>

        <div class="box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="images/Zen Garden Delight.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Zen Garden Delight</p>
                    <p class="menu-price">Php 450.00</p>
                    <button class="btn-menu-1">ADD TO CART</button>
                    <button class="btn-menu-1" onclick="window.location.href='viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
        </div>


    </div>

    <div class="about-our-food-section">
        <img src="images/about.png" alt="" class="about-image">
        <div class="box-about-our-food-content">
            <p class="home-title-subheader-2">ABOUT OUR FOOD</p>
            <p class="txt-about-content">
            Our food comes from various cuisines 
            from all over the world. It’s a platform that caters to people who are 
            feeling both hungry and adventurous, allowing them to experience different 
            flavors delivered in the comfort of their homes.
            <br><br>
            “Let HANGRY satisfy your wanderlust for flavors, delivered right at your door.”
            </p>
        </div>
    </div>
</div>
<?php require 'footers/footer.php';?> 
</body>
</html>