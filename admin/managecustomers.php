<?php require '../headers/admin-header.php';?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Manage Customers | Hangry</title>
    </head>
<body class="orange-background">
<div class="main-body-content">
    <div class="home-title-header-2">MANAGE CUSTOMERS</div>
    
    <div class="div-for-searchbar">
        <input id="searchcustomer" class="searchbar" type="text" name="searchcustomer" placeholder = "Search a Customer..">
		<button class="btn-search-icon"><img src="../icons/search-icon-yellow.svg" alt="" class="search-icon"></button>
    </div>

    <div class="myorders-section">
        <div class="box-customer">
            <p class="box-customer-username">
                Ocularist
            </p>
            <p class="box-order-txt-subheader">
                First Name<br>
                <span class="box-order-txt-info">Jhansen Reinier</span>
            </p>
            <p class="box-order-txt-subheader">
                Last Name<br>
                <span class="box-order-txt-info">Ocado</span>
            </p>
            <p class="box-order-txt-subheader">
                Status<br>
                <span class="box-order-txt-info txt-bold-green">ACTIVE</span>
            </p>
            <button class="btn-box-order" onclick="window.location.href='admin-viewcustomer.php';">VIEW CUSTOMER</button>
        </div>

        <div class="box-customer">
            <p class="box-customer-username">
                AquaMarine123
            </p>
            <p class="box-order-txt-subheader">
                First Name<br>
                <span class="box-order-txt-info">Aqua Maria</span>
            </p>
            <p class="box-order-txt-subheader">
                Last Name<br>
                <span class="box-order-txt-info">Lopez</span>
            </p>
            <p class="box-order-txt-subheader">
                Status<br>
                <span class="box-order-txt-info txt-bold-green">ACTIVE</span>
            </p>
            <button class="btn-box-order" onclick="window.location.href='admin-viewcustomer.php';">VIEW CUSTOMER</button>
        </div>

        <div class="box-customer">
            <p class="box-customer-username">
                Belgium45
            </p>
            <p class="box-order-txt-subheader">
                First Name<br>
                <span class="box-order-txt-info">Belle</span>
            </p>
            <p class="box-order-txt-subheader">
                Last Name<br>
                <span class="box-order-txt-info">Santos</span>
            </p>
            <p class="box-order-txt-subheader">
                Status<br>
                <span class="box-order-txt-info txt-bold-red">BLOCKED</span>
            </p>
            <button class="btn-box-order" onclick="window.location.href='admin-viewcustomer.php';">VIEW CUSTOMER</button>
        </div>

        <div class="box-customer">
            <p class="box-customer-username">
                CruzS12345
            </p>
            <p class="box-order-txt-subheader">
                First Name<br>
                <span class="box-order-txt-info">Robert Cruz</span>
            </p>
            <p class="box-order-txt-subheader">
                Last Name<br>
                <span class="box-order-txt-info">Santos</span>
            </p>
            <p class="box-order-txt-subheader">
                Status<br>
                <span class="box-order-txt-info txt-bold-red">BLOCKED</span>
            </p>
            <button class="btn-box-order" onclick="window.location.href='admin-viewcustomer.php';">VIEW CUSTOMER</button>
        </div>
        
    </div>
</div>
<?php require '../footers/admin-footer.php';?>
</body>
</html>