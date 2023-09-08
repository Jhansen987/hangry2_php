<?php require '../headers/admin-header.php';?> 
<!DOCTYPE html>
<html>
    <head>
        <title>View Order | Hangry</title>
    </head>
<body class="orange-background">
<div class="main-body-content">
    <div class="content-box-5">
		<a href="manageorders.php">&laquo; BACK</a>
	</div>
	<div class="content-box-7">
		<div class="content-box-main-header">ORDER ID # 123456789</div><br>
		<div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">DATE ORDERED</span><br>
					September 24, 2023
				</p>
		</div>

        <div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">PRICE TO PAY</span><br>
					Php 1080.00
				</p>
		</div>

        <div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">MODE OF PAYMENT</span><br>
					Cash on Delivery
				</p>
		</div>

        <div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">ORDER STATUS</span><br>
					Shipped
				</p>
		</div>
        <br>
        <div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">FIRST NAME</span><br>
					Jhansen Reinier
				</p>
		</div>
        <div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">LAST NAME</span><br>
					Ocado
				</p>
		</div>
        <div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">USERNAME</span><br>
					Ocularist
				</p>
		</div>
        <br>
        <div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">EMAIL ADDRESS</span><br>
					<span class="txt-box-info-email txt-light-gray">jhansenreinier.ocado.cics@ust.edu.ph</span>
				</p>
		</div>
        <br>
        <div class="box-info-3">
				<p class="txt-checkout-content-1">
					<span class="txt-content-header-2">CONTACT NUMBER:</span><br>
					O9162599275
				</p>
		</div>

        <div class="box-checkout-info-1">
				<div class="box-shipping-address">
					<p class="txt-checkout-content-1">
						<span class="txt-content-header-1">SHIPPING ADDRESS</span><br>
						#100 Benito Greenheights Subdivision Phase 3 Nangka, Marikina City
					</p>
				</div>
			</div>
        <br>
        <div class="content-box-main-header">ACTIONS AVAILABLE</div>
        
        <br><br>
        
        <button class="btn-vieworder-action">Set Order Status to <b>Delivered</b></button>

        <br><br>

        <div class="content-box-main-header">ORDERED ITEMS</div><br>
		<br>
		<div class="div-for-ordered-items">
			
			<div class="checkout-box-product">
				<div class="div-checkout-product-image"><img src="../images/Savory Southwest Fiesta Bowl.png" alt="" class="checkout-product-image"></div>
				<div class="div-checkout-product-info">
					Savory Southwest Fiesta Bowl
				</div>
				<div class="div-checkout-product-info quantity">x 1</div>
				<div class="div-checkout-product-info price">PHP 250.00</div>
			</div>
			
			<div class="checkout-box-product">
				<div class="div-checkout-product-image"><img src="../images/Tropical Mango Tango.png" alt="" class="checkout-product-image"></div>
				<div class="div-checkout-product-info">
					Tropical Mango Tango
				</div>
				<div class="div-checkout-product-info quantity">x 1</div>
				<div class="div-checkout-product-info price">PHP 350.00</div>
			</div>
			
			<div class="checkout-box-product">
				<div class="div-checkout-product-image"><img src="../images/Spicy Thai Basil Delight.png" alt="" class="checkout-product-image"></div>
				<div class="div-checkout-product-info">
					Spicy Thai Basil Delight
				</div>
				<div class="div-checkout-product-info quantity">x 1</div>
				<div class="div-checkout-product-info price">PHP 200.00</div>
			</div>
			
			<div class="checkout-box-product">
				<div class="div-checkout-product-image"><img src="../images/Asian Fusion Umami.png" alt="" class="checkout-product-image"></div>
				<div class="div-checkout-product-info">
					Asian Fusion Umami
				</div>
				<div class="div-checkout-product-info quantity">x 1</div>
				<div class="div-checkout-product-info price">PHP 250.00</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>