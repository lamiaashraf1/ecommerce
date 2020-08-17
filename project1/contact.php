<?php 
session_start();
?>
<?php include"des/header.php";?>
<?php include"des/nav.php";?>
</div>

<div class="header-icons">
<a href="#" class="header-wrapicon1 dis-block">
<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
</a>
<span class="linedivide1"></span>
<div class="header-wrapicon2">
<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
<span class="header-icons-noti">0</span>
<?php
if (!isset($_SESSION['id'])) {
$_SESSION['id'] = 0;

}
$id = $_SESSION['id'];
include 'database/connection.php';
$select = "SELECT * FROM cart WHERE id_user = '$id'";
$result = $conn->query($select);
?>
<?php
foreach ($result as $key) {	
$quantity=0;
$id_p = $key['id_product'];
$select_p = "SELECT * FROM product WHERE id= '$id_p'";
$result_p = $conn->query($select_p);
$key_p = $result_p->fetch_assoc();
$price = $key_p['price'];
$name = $key_p['name'];
$count_cart = $key['quantity'];
$count_final= ($quantity +($count_cart*$price));
?>
<div class="header-cart header-dropdown">
<ul class="header-cart-wrapitem">
<li class="header-cart-item">
<div class="header-cart-item-img">
<img src="admin/examples/database/upload/<?php echo $key_p['img'];?>" alt="IMG">
</div>
<div class="header-cart-item-txt">
<a href="product.php?id=<?php echo $key_p['id']?>" class="block2-name dis-block s-text3 p-b-5">
<?php echo $key_p['name'];?>
</a>
<span class="header-cart-item-info">
<?php echo $key_p['price'];?>
</span>
</div>
</li>
</ul>
<div class="header-cart-total">
<?php echo "$count_final"; ?>
</div>
<div class="header-cart-buttons">
<div class="header-cart-wrapbtn">

<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
View Cart
</a>
</div>
<div class="header-cart-wrapbtn">

<a href="database/signout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
Check Out
</a>
</div>
</div>
</div>

<?php } ?>
</div>
</div>
</div>
</div>

<div class="wrap_header_mobile">

<a href="index.php" class="logo-mobile">
<img src="images/icons/logo.png" alt="IMG-LOGO">
</a>

<div class="btn-show-menu">

<div class="header-icons-mobile">
<a href="#" class="header-wrapicon1 dis-block">
<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
</a>
<span class="linedivide2"></span>
<div class="header-wrapicon2">
<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
<span class="header-icons-noti">0</span>

<div class="header-cart header-dropdown">
<ul class="header-cart-wrapitem">
<li class="header-cart-item">
<div class="header-cart-item-img">
<img src="images/item-cart-01.jpg" alt="IMG">
</div>
<div class="header-cart-item-txt">
 <a href="#" class="header-cart-item-name">
White Shirt With Pleat Detail Back
</a>
<span class="header-cart-item-info">
1 x $19.00
</span>
</div>
</li>
<li class="header-cart-item">
<div class="header-cart-item-img">
<img src="images/item-cart-02.jpg" alt="IMG">
</div>
<div class="header-cart-item-txt">
<a href="#" class="header-cart-item-name">
Converse All Star Hi Black Canvas
</a>
<span class="header-cart-item-info">
1 x $39.00
</span>
</div>
</li>
<li class="header-cart-item">
<div class="header-cart-item-img">
<img src="images/item-cart-03.jpg" alt="IMG">
</div>
<div class="header-cart-item-txt">
<a href="#" class="header-cart-item-name">
Nixon Porter Leather Watch In Tan
</a>
<span class="header-cart-item-info">
1 x $17.00
</span>
</div>
</li>
</ul>
<div class="header-cart-total">
Total: $75.00
</div>
<div class="header-cart-buttons">
<div class="header-cart-wrapbtn">

<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
View Cart
</a>
</div>
<div class="header-cart-wrapbtn">

<?php
$id = $_SESSION['id'];
include 'database/connection.php';

?>

<a id="check"  class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" data_user="<?php echo $_SESSION['id'];?>" >
Check Out
</a>
</div>
</div>
</div>
</div>
</div>
<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</div>
</div>
</div>

<div class="wrap-side-menu">
<nav class="side-menu">
<ul class="main-menu">
<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
<span class="topbar-child1">
Free shipping for standard order over $100
</span>
</li>
<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
<div class="topbar-child2-mobile">
<span class="topbar-email">
<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d5b5c4e55587d58455c504d5158135e5250">[email&#160;protected]</a>
</span>
<div class="topbar-language rs1-select2">
<select class="selection-1" name="time">
<option>USD</option>
<option>EUR</option>
</select>
</div>
</div>
</li>
<li class="item-topbar-mobile p-l-10">
<div class="topbar-social-mobile">
<a href="#" class="topbar-social-item fa fa-facebook"></a>
<a href="#" class="topbar-social-item fa fa-instagram"></a>
<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
</div>
</li>
<li class="item-menu-mobile">
<a href="index.php">Home</a>

<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
</li>
<li class="item-menu-mobile">
<a href="product.php">Shop</a>
</li>
<li class="item-menu-mobile">
<a href="product.php">Sale</a>
</li>
<li class="item-menu-mobile">
<a href="cart.php">Features</a>
</li>
<li class="item-menu-mobile">
<a href="blog.php">Blog</a>
</li>
<li class="item-menu-mobile">
<a href="about.php">About</a>
</li>
<li class="item-menu-mobile">
<a href="contact.php">Contact</a>
</li>
</ul>
</nav>
</div>
</header>

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-06.jpg);">
<h2 class="l-text2 t-center">
Contact
</h2>
</section>

<section class="bgwhite p-t-66 p-b-60">
<div class="container">
<div class="row">
<div class="col-md-6 p-b-30">
<div class="p-r-20 p-r-0-lg">
<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
</div>
</div>
<div class="col-md-6 p-b-30">
	<div id="data" ></div>
<form class="leave-comment">
<h4 class="m-text26 p-b-36 p-t-15">
Send us your message
</h4>
<div class="bo4 of-hidden size15 m-b-20">
<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name" id="name">
</div>
<div class="bo4 of-hidden size15 m-b-20">
<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Phone Number" id="phone">
</div>
<div class="bo4 of-hidden size15 m-b-20">
<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address" id="email">
</div>
<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message" id="message"></textarea>
<div class="w-size25">

<a id="send-message" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
Send
</a>
</div>
</form>
</div>
</div>
</div>
</section>


<?php include"des/footer.php";?>