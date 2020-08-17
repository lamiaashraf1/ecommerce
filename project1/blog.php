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
<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="224443514a4762475a434f524e470c414d4f">[email&#160;protected]</a>
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

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-05.jpg);">
<h2 class="l-text2 t-center">
Blog
</h2>
</section>

<section class="bgwhite p-t-60">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-9 p-b-75">
<div class="p-r-50 p-r-0-lg">

<div class="item-blog p-b-80">
<a href="blog-detail.php" class="item-blog-img pos-relative dis-block hov-img-zoom">
<img src="images/blog-04.jpg" alt="IMG-BLOG">
<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
28 Dec, 2018
</span>
</a>
<div class="item-blog-txt p-t-33">
<h4 class="p-b-11">
<a href="blog-detail.php" class="m-text24">
Black Friday Guide: Best Sales & Discount Codes
</a>
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
Cooking, Food
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
8 Comments
</span>
</div>
<p class="p-b-12">
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
</p>
<a href="blog-detail.php" class="s-text20">
Continue Reading
<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
</a>
</div>
</div>

<div class="item-blog p-b-80">
<a href="blog-detail.php" class="item-blog-img pos-relative dis-block hov-img-zoom">
<img src="images/blog-05.jpg" alt="IMG-BLOG">
<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
26 Dec, 2018
</span>
</a>
<div class="item-blog-txt p-t-33">
<h4 class="p-b-11">
<a href="blog-detail.php" class="m-text24">
The White Sneakers Nearly Every Fashion Girls Own
</a>
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
Fashion, Life style
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
8 Comments
</span>
</div>
<p class="p-b-12">
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
</p>
<a href="blog-detail.php" class="s-text20">
Continue Reading
<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
</a>
</div>
</div>

<div class="item-blog p-b-80">
<a href="blog-detail.php" class="item-blog-img pos-relative dis-block hov-img-zoom">
<img src="images/blog-08.jpg" alt="IMG-BLOG">
<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
22 Dec, 2018
</span>
</a>
<div class="item-blog-txt p-t-33">
<h4 class="p-b-11">
<a href="blog-detail.php" class="m-text24">
Black Friday Guide: Best Sales & Discount Codes
</a>
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
Cooking, Food
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
8 Comments
</span>
</div>
<p class="p-b-12">
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
</p>
<a href="blog-detail.php" class="s-text20">
Continue Reading
<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
</a>
</div>
</div>

<div class="item-blog p-b-80">
<a href="blog-detail.php" class="item-blog-img pos-relative dis-block hov-img-zoom">
<img src="images/blog-02.jpg" alt="IMG-BLOG">
<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
18 Dec, 2018
</span>
</a>
<div class="item-blog-txt p-t-33">
<h4 class="p-b-11">
<a href="blog-detail.php" class="m-text24">
Black Friday Guide: Best Sales & Discount Codes
</a>
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
Cooking, Food
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
8 Comments
</span>
</div>
<p class="p-b-12">
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
</p>
<a href="blog-detail.php" class="s-text20">
Continue Reading
<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
</a>
</div>
</div>

<div class="item-blog p-b-80">
<a href="blog-detail.php" class="item-blog-img pos-relative dis-block hov-img-zoom">
<img src="images/blog-03.jpg" alt="IMG-BLOG">
<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
16 Dec, 2018
</span>
</a>
<div class="item-blog-txt p-t-33">
<h4 class="p-b-11">
<a href="blog-detail.php" class="m-text24">
Black Friday Guide: Best Sales & Discount Codes
</a>
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
Cooking, Food
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
8 Comments
</span>
</div>
<p class="p-b-12">
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
</p>
<a href="blog-detail.php" class="s-text20">
Continue Reading
<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
</a>
</div>
</div>
</div>

<div class="pagination flex-m flex-w p-r-50">
<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
</div>
</div>
<div class="col-md-4 col-lg-3 p-b-75">
<div class="rightbar">

<div class="pos-relative bo11 of-hidden">
<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">
<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
<i class="fs-13 fa fa-search" aria-hidden="true"></i>
</button>
</div>

<h4 class="m-text23 p-t-56 p-b-34">
Categories
</h4>
<ul>
<li class="p-t-6 p-b-8 bo6">
<a href="#" class="s-text13 p-t-5 p-b-5">
Fashion
</a>
</li>
<li class="p-t-6 p-b-8 bo7">
<a href="#" class="s-text13 p-t-5 p-b-5">
Beauty
</a>
</li>
<li class="p-t-6 p-b-8 bo7">
<a href="#" class="s-text13 p-t-5 p-b-5">
Street Style
</a>
</li>
<li class="p-t-6 p-b-8 bo7">
<a href="#" class="s-text13 p-t-5 p-b-5">
Life Style
</a>
</li>
<li class="p-t-6 p-b-8 bo7">
<a href="#" class="s-text13 p-t-5 p-b-5">
DIY & Crafts
</a>
</li>
</ul>



<h4 class="m-text23 p-t-50 p-b-16">
Archive
</h4>
<ul>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
July 2018
</a>
<span class="s-text13">
(9)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
June 2018
</a>
<span class="s-text13">
(39)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
May 2018
</a>
<span class="s-text13">
(29)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
April 2018
</a>
<span class="s-text13">
(35)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
March 2018
</a>
<span class="s-text13">
(22)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
February 2018
</a>
<span class="s-text13">
(32)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
January 2018
</a>
<span class="s-text13">
(21)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
December 2017
</a>
<span class="s-text13">
(26)
</span>
</li>
</ul>

<h4 class="m-text23 p-t-50 p-b-25">
Tags
</h4>
<div class="wrap-tags flex-w">
<a href="#" class="tag-item">
Fashion
</a>
<a href="#" class="tag-item">
Lifestyle
</a>
<a href="#" class="tag-item">
Denim
</a>
<a href="#" class="tag-item">
Streetstyle
</a>
<a href="#" class="tag-item">
Crafts
</a>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include"des/footer.php"; 

?>