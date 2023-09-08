<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel = "stylesheet" href="css/navheader.css">
    <link rel = "stylesheet" href="css/style-main.css">
    <script defer src="js/header.js"></script>
</head>
<body>

<div id="black-screen" class="black-screen"></div>
<div id="black-screen-2" class="black-screen-2">
    <div class="box-searchbar-popup">
        <div class="box-popup-header">
            <button class="btn-close-popup" onclick="searchbarPopup()">X</button>
        </div>
        <form action="menu.php" method="get">
            <input type="text" id="nav-searchproduct" name="nav-searchproduct" class="nav-searchbar" placeholder="Search a Product..">
            <input type="submit" class="btn-nav-search" value="Search">
        </form>
    </div>
</div>
<nav class="main-nav">
    <div class="div-account-username">
        <a href="#">
            <img src="icons/user_icon.svg" class="header-icons-1">
            Guest
        </a>
        <ul>
            <li><a href="login.php">Sign In</a></li>
        </ul>
    </div>
    <div class="div-account-features">
        <button class="btn-search-2" onclick="searchbarPopup()">
            <img src="icons/search-icon.svg" class="header-icons-1">
        </button>
    </div>
    <div class="div-hamburger">
        <button class="btn-hamburger" onclick="responsiveNav()">
            <img src="icons/hamburger_icon.svg" alt="" class="header-icons-1">
        </button>
    </div>

    <!-- BUSINESS LOGO -->
    <div class="div-business-logo">
        <a href="home.php">
            <img src="images/Hangry Logo.png" alt="" class="business-logo">
        </a>
    </div>
    <div class="nav-links">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li>
                <a href="#">OTHERS
                    <img src="icons/down-arrow-white-icon.svg" alt="" class="header-icons-2">
                </a>
                <ul>
                    <li><a href="faq.php" target="_blank" rel="noopener noreferrer">FAQs</a></li>
                    <li><a href="privacypolicy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a></li>
                    <li><a href="termsofservice.php" target="_blank" rel="noopener noreferrer">Terms of Service</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<!-- MOBILE NAV MENU -->
<nav id="mobile-nav-menu" class="mobile-nav-menu">
    <div class="div-for-close-button">
        <button class="btn-close-nav" onclick="responsiveNav()">X</button>
    </div>
    <div class="mobile-div-username">
        <img src="icons/user_icon-gray.svg" class="header-icons-1">
        Guest
    </div>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
    <button id="mobile-subdropdown-btn-1" class="btn-mobile-nav-link" onclick="responsiveSubDropdown1()">
        Others
        <img src="icons/down-arrow-icon-gray.svg" alt="" id="nav-arrow-1" class="mobile-nav-icon-1">
    </button>
    <div id="mobile-subdropdown-1" class="mobile-nav-subdropdown">
        <ul>
            <li><a href="faq.php" target="_blank" rel="noopener noreferrer">FAQs</a></li>
            <li><a href="privacypolicy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a></li>
            <li><a href="termsofservice.php" target="_blank" rel="noopener noreferrer">Terms of Service</a></li>
        </ul>   
    </div>
    <button class="btn-mobile-nav-link" onclick="window.location.href='login.php';">Sign In</button>
    <br><br><br>
</nav>

</body>
</html>