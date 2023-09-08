<?php require '../headers/admin-header.php';?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Manage Menus | Hangry</title>
    </head>
<body>
<div class="main-body-content">
    <div class="home-title-header-2">MANAGE MENUS</div>
    <div class="div-for-searchbar">
        <input id="searchproduct" class="searchbar" type="text" name="searchproduct" placeholder = "Search a product..">
		<button class="btn-search-icon"><img src="../icons/search-icon-yellow.svg" alt="" class="search-icon"></button>
    </div>
    <div class="div-for-center">
        <button class="btn-add-menu" onclick="window.location.href='addmenu.php';">+ Add New Menu</button>
    </div>
    <div class="menu-section">

        <!-- Generate the "admin-box-menu" div for every menu in database -->
        <div class="admin-box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="../images/Savory Southwest Fiesta Bowl.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">
                        Savory Southwest Fiesta Bowl
                    </p>
                    <p class="menu-price">Php 250.00</p>
                    <p class="menu-status">OUT OF STOCK</p>
                    <!-- <button class="btn-menu-1">EDIT MENU</button>-->
                    <button class="btn-menu-1" onclick="window.location.href='editmenu.php';">EDIT MENU</button>
                    <button class="btn-menu-1" onclick="window.location.href='admin-viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
            <button class="btn-remove-item-1">
                <img src="../icons/trash-white-icon.svg" alt="" class="btn-icons-2">
            </button>
        </div>

        <div class="admin-box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="../images/Tropical Mango Tango.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Tropical Mango Tango</p>
                    <p class="menu-price">Php 350.00</p>
                    <button class="btn-menu-1" onclick="window.location.href='editmenu.php';">EDIT MENU</button>
                    <button class="btn-menu-1" onclick="window.location.href='admin-viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
            <button class="btn-remove-item-1">
                <img src="../icons/trash-white-icon.svg" alt="" class="btn-icons-2">
            </button>
        </div>

        <div class="admin-box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="../images/Asian Fusion Umami.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Asian Fusion Umami</p>
                    <p class="menu-price">Php 250.00</p>
                    <button class="btn-menu-1" onclick="window.location.href='editmenu.php';">EDIT MENU</button>
                    <button class="btn-menu-1" onclick="window.location.href='admin-viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
            <button class="btn-remove-item-1">
                <img src="../icons/trash-white-icon.svg" alt="" class="btn-icons-2">
            </button>
        </div>

        <div class="admin-box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="../images/Spicy Thai Basil Delight.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Spicy Thai Basil Delight</p>
                    <p class="menu-price">Php 200.00</p>
                    <button class="btn-menu-1" onclick="window.location.href='editmenu.php';">EDIT MENU</button>
                    <button class="btn-menu-1" onclick="window.location.href='admin-viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
            <button class="btn-remove-item-1">
                <img src="../icons/trash-white-icon.svg" alt="" class="btn-icons-2">
            </button>
        </div>

        <div class="admin-box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="../images/Mediterranean Mezze Medley Bowl.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Mediterranean Mezze Medley Bowl</p>
                    <p class="menu-price">Php 300.00</p>
                    <button class="btn-menu-1" onclick="window.location.href='editmenu.php';">EDIT MENU</button>
                    <button class="btn-menu-1" onclick="window.location.href='admin-viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
            <button class="btn-remove-item-1">
                <img src="../icons/trash-white-icon.svg" alt="" class="btn-icons-2">
            </button>
        </div>

        <div class="admin-box-menu">
            <div class="menu-table">
                <div class="div-menu-image">
                    <img src="../images/Zen Garden Delight.png" alt="" class="menu-image">
                </div>
                <div class="div-menu-info">
                    <p class="menu-name">Zen Garden Delight</p>
                    <p class="menu-price">Php 450.00</p>
                    <button class="btn-menu-1" onclick="window.location.href='editmenu.php';">EDIT MENU</button>
                    <button class="btn-menu-1" onclick="window.location.href='admin-viewmenu.php';">VIEW MENU</button>
                </div>
            </div>
            <button class="btn-remove-item-1">
                <img src="../icons/trash-white-icon.svg" alt="" class="btn-icons-2">
            </button>
        </div>

    </div>
</div>
<?php require '../footers/admin-footer.php';?>
</body>
</html>