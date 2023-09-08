<?php 
    require 'sessionChecker.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Orders | Hangry</title>
    </head>
<body class="orange-background">
<div class="main-body-content">
    <div class="home-title-header-2">MY ORDERS</div>
    
    <div class="div-for-searchbar">
        <input id="searchorderID" class="searchbar" type="text" name="searchorderID" placeholder = "Search Order ID..">
		<button class="btn-search-icon"><img src="icons/search-icon-yellow.svg" alt="" class="search-icon"></button>
    </div>

    <div class="myorders-section">
        <div class="box-order">
            <p class="box-order-id">
                ORDER ID<br>123456789
            </p>
            <p class="box-order-txt-subheader">
                Date Ordered<br>
                <span class="box-order-txt-info">September 24, 2023</span>
            </p>
            <p class="box-order-txt-subheader">
                Mode of Payment<br>
                <span class="box-order-txt-info">Cash on Delivery</span>
            </p>
            <p class="box-order-txt-subheader">
                Price to Pay<br>
                <span class="box-order-txt-info">Php 1080.00</span>
            </p>
            <p class="box-order-txt-subheader">
                Order Status<br>
                <span class="box-order-txt-info">Shipped</span>
            </p>
            <button class="btn-box-order" onclick="window.location.href='vieworder.php';">VIEW DETAILS</button>
        </div>

        <div class="box-order">
            <p class="box-order-id">
                ORDER ID<br>323456789
            </p>
            <p class="box-order-txt-subheader">
                Date Ordered<br>
                <span class="box-order-txt-info">September 24, 2023</span>
            </p>
            <p class="box-order-txt-subheader">
                Mode of Payment<br>
                <span class="box-order-txt-info">Cash on Delivery</span>
            </p>
            <p class="box-order-txt-subheader">
                Price to Pay<br>
                <span class="box-order-txt-info">Php 1080.00</span>
            </p>
            <p class="box-order-txt-subheader">
                Order Status<br>
                <span class="box-order-txt-info">Shipped</span>
            </p>
            <button class="btn-box-order" onclick="window.location.href='vieworder.php';">VIEW DETAILS</button>
        </div>

        <div class="box-order">
            <p class="box-order-id">
                ORDER ID<br>423456789
            </p>
            <p class="box-order-txt-subheader">
                Date Ordered<br>
                <span class="box-order-txt-info">September 24, 2023</span>
            </p>
            <p class="box-order-txt-subheader">
                Mode of Payment<br>
                <span class="box-order-txt-info">Cash on Delivery</span>
            </p>
            <p class="box-order-txt-subheader">
                Price to Pay<br>
                <span class="box-order-txt-info">Php 1080.00</span>
            </p>
            <p class="box-order-txt-subheader">
                Order Status<br>
                <span class="box-order-txt-info">Shipped</span>
            </p>
            <button class="btn-box-order" onclick="window.location.href='vieworder.php';">VIEW DETAILS</button>
        </div>

        <div class="box-order">
            <p class="box-order-id">
                ORDER ID<br>523456789
            </p>
            <p class="box-order-txt-subheader">
                Date Ordered<br>
                <span class="box-order-txt-info">September 24, 2023</span>
            </p>
            <p class="box-order-txt-subheader">
                Mode of Payment<br>
                <span class="box-order-txt-info">Cash on Delivery</span>
            </p>
            <p class="box-order-txt-subheader">
                Price to Pay<br>
                <span class="box-order-txt-info">Php 1080.00</span>
            </p>
            <p class="box-order-txt-subheader">
                Order Status<br>
                <span class="box-order-txt-info">Shipped</span>
            </p>
            <button class="btn-box-order" onclick="window.location.href='vieworder.php';">VIEW DETAILS</button>
        </div>
        
    </div>
</div>
<?php require 'footers/footer.php';?> 
</body>
</html>