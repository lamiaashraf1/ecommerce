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
<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e78186948f82a7829f868a978b82c984888a">[email&#160;protected]</a>
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


<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
<h2 class="l-text2 t-center">
Women
</h2>
<p class="m-text13 t-center">
New Arrivals Women Collection 2018
</p>
</section>

<section class="bgwhite p-t-55 p-b-65">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
<div class="leftbar p-r-20 p-r-0-sm">

<h4 class="m-text14 p-b-7">
Categories
</h4>
<ul class="p-b-54">
<li class="p-t-4">
<a href="#" class="s-text13 active1">
All
</a>
</li>
<li class="p-t-4">
<a href="#" class="s-text13">
Women
</a>
</li>
<li class="p-t-4">
<a href="#" class="s-text13">
Men
</a>
</li>
<li class="p-t-4">
<a href="#" class="s-text13">
Kids
</a>
</li>
<li class="p-t-4">
<a href="#" class="s-text13">
Accesories
</a>
</li>
</ul>

<h4 class="m-text14 p-b-32">
Filters
</h4>
<div class="filter-price p-t-22 p-b-50 bo3">
<div class="m-text15 p-b-17">
Price
</div>
<div class="wra-filter-bar">
<div id="filter-bar"></div>
</div>
<div class="flex-sb-m flex-w p-t-16">
<div class="w-size11">

<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
Filter
</button>
</div>
<div class="s-text3 p-t-10 p-b-10">
Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
</div>
</div>
</div>
<div class="filter-color p-t-22 p-b-50 bo3">
<div class="m-text15 p-b-12">
Color
</div>
<ul class="flex-w">
<li class="m-r-10">
<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
<label class="color-filter color-filter1" for="color-filter1"></label>
</li>
<li class="m-r-10">
<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
<label class="color-filter color-filter2" for="color-filter2"></label>
</li>
<li class="m-r-10">
<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
<label class="color-filter color-filter3" for="color-filter3"></label>
</li>
<li class="m-r-10">
<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
<label class="color-filter color-filter4" for="color-filter4"></label>
</li>
<li class="m-r-10">
<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
<label class="color-filter color-filter5" for="color-filter5"></label>
</li>
<li class="m-r-10">
<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
<label class="color-filter color-filter6" for="color-filter6"></label>
</li>
<li class="m-r-10">
<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
<label class="color-filter color-filter7" for="color-filter7"></label>
</li>
</ul>
</div>
<div class="search-product pos-relative bo4 of-hidden">
<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">
<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
<i class="fs-12 fa fa-search" aria-hidden="true"></i>
</button>
</div>
</div>
</div>
<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

<div class="flex-sb-m flex-w p-b-35">
<div class="flex-w">
<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
<select class="selection-2" name="sorting">
<option>Default Sorting</option>
<option>Popularity</option>
<option>Price: low to high</option>
<option>Price: high to low</option>
</select>
</div>
<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
<select class="selection-2" name="sorting">
<option>Price</option>
<option>$0.00 - $50.00</option>
<option>$50.00 - $100.00</option>
<option>$100.00 - $150.00</option>
<option>$150.00 - $200.00</option>
<option>$200.00+</option>
</select>
</div>
</div>
<span class="s-text8 p-t-5 p-b-5">
Showing 1–12 of 16 results
</span>
</div>

<div class="row">
<?php
include 'database/connection.php';

$id = $_GET['id'];
$select = "SELECT * FROM product WHERE category = '$id'";
$result = $conn->query($select);
foreach ($result as $key) {
	
?>


<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="admin/examples/database/upload/<?php echo $key['img'];?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">

<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Add to Cart
</button>
</div>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="product-detail.php?id=<?php echo $key['id']?>" class="block2-name dis-block s-text3 p-b-5">
<?php echo $key['name'];?>
</a>

</div>
</div>
</div>
<?php } ?>
</div>

<div class="pagination flex-m flex-w p-t-26">
<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
</div>
</div>
</div>
</div>
</section>

<?php include"des/footer.php"; ?>