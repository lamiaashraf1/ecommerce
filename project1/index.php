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
<li data_p="<?php echo $id_product;?>" data_u="<?php echo $_SESSION['id'];?>" class="far fa-grin-hearts"></li>
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
<?php
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
<div class="header-wrapicon2">
<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
<span class="header-icons-noti">0</span>
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
<?php }?>
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
<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deb8bfadb6bb9ebba6bfb3aeb2bbf0bdb1b3">[email&#160;protected]</a>
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

<section class="slide1">
<div class="wrap-slick1">
<div class="slick1">
<div class="item-slick1 item1-slick1" style="background-image: url(images/master-slide-02.jpg);">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
Women Collection 2018
</span>
<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
New arrivals
</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">

<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Shop Now
</a>
</div>
</div>
</div>
<div class="item-slick1 item2-slick1" style="background-image: url(images/master-slide-03.jpg);">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
Women Collection 2018
</span>
<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
New arrivals
</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">

<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Shop Now
</a>
</div>
</div>
</div>
<div class="item-slick1 item3-slick1" style="background-image: url(images/master-slide-04.jpg);">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
Women Collection 2018
</span>
<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
New arrivals
</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">

<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Shop Now
</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="banner bgwhite p-t-40 p-b-40">
<div class="container">
<div class="row">




<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">


 
<?php include "database/connection.php";
$select_category = "SELECT *  FROM category";
$result_category = $conn->query($select_category);
foreach ($result_category as $key) {
	
?>


<div class="block1 hov-img-zoom pos-relative m-b-30">
<img src="admin/examples/database/upload/<?php echo $key['img'];?>" alt="IMG-BENNER">
<div class="block1-wrapbtn w-size2">

<a  href="product.php?id=<?php echo $key['id']?>" class="block2-name dis-block s-text3 p-b-5">
<?php echo $key['name'];?>

</a>
</div>
</div>
<?php }?>
</div>
<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">



<div class="block2 wrap-pic-w pos-relative m-b-30">
<img src="images/icons/bg-01.jpg" alt="IMG">
<div class="block2-content sizefull ab-t-l flex-col-c-m">
<h4 class="m-text4 t-center w-size3 p-b-8">
Sign up & get 20% off
</h4>
<p class="t-center w-size4">
Be the frist to know about the latest fashion news and get exclu-sive offers
</p>
<div class="w-size2 p-t-25">

<a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
Sign Up
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="newproduct bgwhite p-t-45 p-b-105">
<div class="container">
<div class="sec-title p-b-60">
<h3 class="m-text5 t-center">
Featured Products
</h3>
</div>

<div class="wrap-slick2">
<div class="slick2">


<?php include "database/connection.php";
$select_product = "SELECT *  FROM product";
$result_product = $conn->query($select_product);
foreach ($result_product as $key) {
	
?>


<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="admin/examples/database/upload/<?php echo $key['img'];?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">


<?php
$id = $_SESSION['id'];
include 'database/connection.php';
$x = $key['id'];


?>


<a id="add" data_p="<?php echo $x;?>" data_u="<?php echo $_SESSION['id'];?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Add to Cart
<a/>

</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.php?id=<?php echo $key['id']?>" class="block2-name dis-block s-text3 p-b-5">
<?php echo $key['name'];?>
</a>

<span class="block2-price m-text6 p-r-5">
<?php echo $key['price'];?>
</span>
<span class="block2-newprice m-text6 p-r-5">
<?php echo $key['sale'];?>
</span>
</div>
</div>
</div>

<?php }?>
</div>
</div>
</div>
</section>

<section class="banner2 bg5 p-t-55 p-b-55">
<div class="container">
<div class="row">
<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
<div class="hov-img-zoom pos-relative">
<img src="images/banner-08.jpg" alt="IMG-BANNER">
<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
<span class="m-text9 p-t-45 fs-20-sm">
The Beauty
</span>
<h3 class="l-text1 fs-35-sm">
Lookbook
</h3>
<a href="#" class="s-text4 hov2 p-t-20 ">
View Collection
</a>
</div>
</div>
</div>
<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
<img src="images/shop-item-09.jpg" alt="IMG-BANNER">
<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
<div class="t-center">
<a href="product-detail.php" class="dis-block s-text3 p-b-5">
Gafas sol Hawkers one
</a>
<span class="block2-oldprice m-text7 p-r-5">
$29.50
</span>
<span class="block2-newprice m-text8">
$15.90
</span>
</div>
<div class="flex-c-m p-t-44 p-t-30-xl">
<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
<span class="m-text10 p-b-1 days">
69
</span>
<span class="s-text5">
days
</span>
</div>
<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
<span class="m-text10 p-b-1 hours">
04
</span>
<span class="s-text5">
hrs
</span>
</div>
<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
<span class="m-text10 p-b-1 minutes">
32
</span>
<span class="s-text5">
mins
</span>
</div>
<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
<span class="m-text10 p-b-1 seconds">
05
</span>
<span class="s-text5">
secs
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="blog bgwhite p-t-94 p-b-65">
<div class="container">
<div class="sec-title p-b-52">
<h3 class="m-text5 t-center">
Our Blog
</h3>
</div>
<div class="row">

<?php include "database/connection.php";
$select_blog = "SELECT *  FROM blog";
$result_blog = $conn->query($select_blog);
foreach ($result_blog as $key) {
	
?>
<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">

<div class="block3">
<a href="blog-detail.php?id=<?php echo $key['id']?>" class="block2-name dis-block s-text3 p-b-5">
<img style="height: 200px;" src="admin/examples/database/upload/<?php echo $key['img'];?>">
</a>
<div class="block3-txt p-t-14">

<h4 class="p-b-7">

<?php echo $key['name'];?>
</a>
</h4>
<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
<span class="s-text6">on</span> <span class="s-text7"><?php echo $key['u-date'];?></span>
<p class="s-text8 p-t-16">
<?php echo $key['discription'];?>
</p>
<span class="dis-block s-text17 p-t-6">
<?php echo $key['price'];?>
</span>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</section>

<section class="instagram p-t-20">
<div class="sec-title p-b-52 p-l-15 p-r-15">
<h3 class="m-text5 t-center">
@ follow us on Instagram
</h3>
</div>
<div class="flex-w">

<div class="block4 wrap-pic-w">
<img src="images/gallery-03.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="images/gallery-07.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="images/gallery-09.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="images/gallery-13.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="images/gallery-15.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>
</div>
</section>

<section class="shipping bgwhite p-t-62 p-b-46">
<div class="flex-w p-l-15 p-r-15">
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
<h4 class="m-text12 t-center">
Free Delivery Worldwide
</h4>
<a href="#" class="s-text11 t-center">
Click here for more info
</a>
</div>
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
<h4 class="m-text12 t-center">
30 Days Return
</h4>
<span class="s-text11 t-center">
Simply return it within 30 days for an exchange.
</span>
</div>
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
<h4 class="m-text12 t-center">
Store Opening
</h4>
<span class="s-text11 t-center">
Shop open from Monday to Sunday
</span>
</div>
</div>
</section>

<?php include "des/footer.php"; ?>