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
<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d7d0c2d9d4f1d4c9d0dcc1ddd49fd2dedc">[email&#160;protected]</a>
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

<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
<a href="index.php" class="s-text16">
Home
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<a href="blog.php" class="s-text16">
Blog
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<span class="s-text17">
Black Friday Guide: Best Sales & Discount Codes
</span>
</div>

<section class="bgwhite p-t-60 p-b-25">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-9 p-b-80">
<div class="p-r-50 p-r-0-lg">
<div class="p-b-40">
<div class="blog-detail-img wrap-pic-w">
<img src="images/blog-04.jpg" alt="IMG-BLOG">
</div>
<div class="blog-detail-txt p-t-33">
<h4 class="p-b-11 m-text24">
Black Friday Guide: Best Sales & Discount Codes
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
28 Dec, 2018
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
<p class="p-b-25">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed turpis sed lorem dignissim vulputate nec cursus ante. Nunc sit amet tempor magna. Donec eros sem, porta eget leo et, varius eleifend mauris. Donec eu leo congue, faucibus quam eu, viverra mauris. Nulla consectetur lorem mi, at scelerisque metus hendrerit vitae. Proin vel magna vel neque porta ultricies non eget mauris. Suspendisse potenti.
</p>
<p class="p-b-25">
Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.
</p>
</div>
<div class="flex-m flex-w p-t-20">
<span class="s-text20 p-r-20">
Tags
</span>
<div class="wrap-tags flex-w">
<a href="#" class="tag-item">
Streetstyle
</a>
<a href="#" class="tag-item">
Crafts
</a>
</div>
</div>
</div>
<div id="data"></div>
<form class="leave-comment">
<h4 class="m-text25 p-b-14">
Leave a Comment
</h4>
<p class="s-text8 p-b-40">
Your email address will not be published. Required fields are marked *
</p>
<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" id="comment" placeholder="Comment..."></textarea>
<div class="bo12 of-hidden size19 m-b-20">
<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" id="name" placeholder="Name *">
</div>
<div class="bo12 of-hidden size19 m-b-20">
<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" id="email" placeholder="Email *">
</div>

<div class="w-size24">

<a id="post_comment" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
Post Comment
</a>
</div>
</form>
</div>
</div>
<div class="col-md-4 col-lg-3 p-b-80">
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

<h4 class="m-text23 p-t-65 p-b-34">
Featured Products
</h4>
<ul class="bgwhite">

<?php
include 'database/connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM blog WHERE id = $id";
$result = $conn->query($select);
$key = $result->fetch_assoc();

?>

<li class="flex-w p-b-20">
<a href="product-detail.php" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
<img src="admin/examples/database/upload/<?php echo $key['img'];?>">
</a>
<div class="w-size23 p-t-5">
<a href="blog-detail.php?id=<?php echo $key['id']?>" class="block2-name dis-block s-text3 p-b-5">
	
<?php echo $key['name'];?>
</a>
<span class="dis-block s-text17 p-t-6">
<?php echo $key['price'];?>
</span>
</div>
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

<?php include"des/footer.php";?>

