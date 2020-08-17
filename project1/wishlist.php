<?php session_start();?>
<?php include"des/header.php"; 
 include"des/nav.php"; 
?>
</div>

<div class="header-icons">


<?php
if (!isset($_SESSION['id'])) {
$_SESSION['id'] = 0;

}
$id = $_SESSION['id'];
include 'database/connection.php';
$select = "SELECT * FROM wishlist WHERE id_user = '$id'";
$result = $conn->query($select);
?>
<?php
foreach ($result as $key) {	

$id_p = $key['id_product'];
$select_p = "SELECT * FROM product WHERE id= '$id_p'";
$result_p = $conn->query($select_p);
$key_p = $result_p->fetch_assoc();
$price = $key_p['price'];
$name = $key_p['name'];

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

<div class="header-cart-buttons">
<div class="header-cart-wrapbtn">

<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
View wishlist
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


<div class="header-cart-buttons">
<div class="header-cart-wrapbtn">

<a href="wishlist.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
View wishlist
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
<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="422423312a2702273a232f322e276c212d2f">[email&#160;protected]</a>
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

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
<h2 class="l-text2 t-center">
Cart
</h2>
</section>


<section class="cart bgwhite p-t-70 p-b-100">
<div class="container">

<?php


$id = $_SESSION['id'];
include 'database/connection.php';
$select = "SELECT * FROM wishlist WHERE id_user = '$id'";
$result = $conn->query($select);
?>
<div class="container-table-cart pos-relative">
<div class="wrap-table-shopping-cart bgwhite">
<table class="table-shopping-cart">
<tr class="table-head">
<th class="column-1"></th>
<th class="column-2">Product</th>
<th class="column-3">Price</th>

</tr>
<?php
foreach ($result as $key) {	



$id_p = $key['id_product'];
$select_p = "SELECT * FROM product WHERE id= '$id_p'";
$result_p = $conn->query($select_p);
$key_p = $result_p->fetch_assoc();
$price = $key_p['price'];
$name = $key_p['name'];


?>
<tr class="table-row">
<td class="column-1">
<div class="cart-img-product b-rad-4 o-f-hidden">
<img src="admin/examples/database/upload/<?php echo $key_p['img'];?>" alt="IMG-PRODUCT">
</div>
</td>
<td class="column-2"><a href="product.php?id=<?php echo $key_p['id']?>" class="block2-name dis-block s-text3 p-b-5">
<?php echo $key_p['name'];?>
</a></td>
<td class="column-3"><?php echo $key_p['price'];?></td>
<td class="column-4">
<div class="flex-w bo5 of-hidden w-size17">
<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
</button>
<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">
<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
</button>
</div>
</td>


</tr>
<?php }?>

</table>
</div>
</div>
<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
<div class="flex-w flex-m w-full-sm">
<div class="size11 bo4 m-r-10">
<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
</div>
<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">

<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
Apply coupon
</button>
</div>
</div>
<div class="size10 trans-0-4 m-t-10 m-b-10">

<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
Update Cart
</button>
</div>
</div>

<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
<h5 class="m-text20 p-b-24">
Cart Totals
</h5>

<div class="flex-w flex-sb-m p-b-12">
<span class="s-text18 w-size19 w-full-sm">
Subtotal:
</span>
<span class="m-text21 w-size20 w-full-sm">
$39.00
</span>
</div>

<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
<span class="s-text18 w-size19 w-full-sm">
Shipping:
</span>
<div class="w-size20 w-full-sm">
<p class="s-text8 p-b-23">
There are no shipping methods available. Please double check your address, or contact us if you need any help.
</p>
<span class="s-text19">
Calculate Shipping
</span>
 <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
<select class="selection-2" name="country">
<option>Select a country...</option>
<option>US</option>
<option>UK</option>
<option>Japan</option>
</select>
</div>
<div class="size13 bo4 m-b-12">
<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
</div>
<div class="size13 bo4 m-b-22">
<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
</div>
<div class="size14 trans-0-4 m-b-10">

<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
Update Totals
</button>
</div>
</div>
</div>

<div class="flex-w flex-sb-m p-t-26 p-b-30">
<span class="m-text22 w-size19 w-full-sm">
Total:
</span>
<span class="m-text21 w-size20 w-full-sm">
$39.00
</span>
</div>
<div class="size15 trans-0-4">

<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
Proceed to Checkout
</button>
</div>
</div>
</div>
</section>

<?php include"des/footer.php"; 

?>