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
<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="513730223934113429303c213d347f323e3c">[email&#160;protected]</a>
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



<?php
include 'database/connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM product WHERE id = $id";
$result = $conn->query($select);
$key = $result->fetch_assoc();

?>

<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
<a href="index.php" class="s-text16">
Home
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<a href="product.php" class="s-text16">
Women
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<a href="#" class="s-text16">
T-Shirt
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<span class="s-text17">
<?php echo $key['name']; ?>
</span>
</div>

<div class="container bgwhite p-t-35 p-b-80">
<div class="flex-w flex-sb">
<div class="w-size13 p-t-30 respon5">
<div class="wrap-slick3 flex-sb flex-w">
<div class="wrap-slick3-dots"></div>
<div class="slick3">
<div class="item-slick3" data-thumb="admin/examples/database/upload/<?php echo $key['img'];?>">
<div class="wrap-pic-w">
<img src="admin/examples/database/upload/<?php echo $key['img']; ?>" alt="IMG-PRODUCT">
</div>
</div>
<div class="item-slick3" data-thumb="admin/examples/database/upload/<?php echo $key['img']; ?>">
<div class="wrap-pic-w">
<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
</div>
</div>
<div class="item-slick3" data-thumb="admin/examples/database/upload/<?php echo $key['img']; ?>">
<div class="wrap-pic-w">
<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
</div>
</div>
</div>
</div>
</div>
<div class="w-size14 p-t-30 respon5" data-pro="<?php echo $key['id']?>" data-user="<?php echo $_SESSION['id']?>">
<h4 class="product-detail-name m-text16 p-b-13">
<?php echo $key['name']; ?>
</h4>



<?php
$id_product = $_GET['id'];
$x = $_SESSION['id'];
include 'database/connection.php';
$select = " SELECT Count(rate)  FROM rate WHERE id_product = '$id' AND rate='5' ";
$result = $conn->query($select);
$key_p = $result->fetch_assoc();
$row= (int) $key_p['Count(rate)'];

$select2 = " SELECT Count(rate)  FROM rate WHERE id_product = '$id' AND rate='4' ";
$result2 = $conn->query($select2);
$key_p = $result2->fetch_assoc();
$row2= (int) $key_p['Count(rate)'];

$select3 = " SELECT Count(rate)  FROM rate WHERE id_product = '$id' AND rate='3' ";
$result3 = $conn->query($select3);
$key_p = $result3->fetch_assoc();
$row3= (int)  $key_p['Count(rate)'];

$select4 = " SELECT Count(rate)  FROM rate WHERE id_product = '$id' AND rate='2' ";
$result4 = $conn->query($select4);
$key_p = $result4->fetch_assoc();
$row4= (int)  $key_p['Count(rate)'];

$select5 = " SELECT Count(rate)  FROM rate WHERE id_product = '$id' AND rate='1' ";
$result5 = $conn->query($select5);
$key_p = $result5->fetch_assoc();
$row5= (int) $key_p['Count(rate)'];

$select6 = " SELECT Count(rate)  FROM rate WHERE id_product = '$id' ";
$result6 = $conn->query($select6);
$key_p = $result6->fetch_assoc();
$row6= (int) $key_p['Count(rate)'];
if ($row6==0) {
	$y = 0;
}
else{
$y = (($row *5) +($row2 *4)+($row3 *3)+($row4 *2)+($row5 *1))/($row6);}
$n = floor($y);
$p = 5-$n;
echo $y;
$index = 1;
for ($i=0; $i <$n ; $i++) { 

?>
<i class="far fa-star star text-warning "id='<?php echo $index++ ?>' ></i>
<?php }
for ($m=0; $m <$p ; $m++) { 
?>
<i class="fa fa-star star" id='<?php echo $index++ ?>' ></i>
<?php } ?>
<br>
<span class="m-text17">

<?php echo $key['sale']; ?>
	
</span>
<br>
<p class="s-text8 p-t-10">
Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
</p>

<div class="p-t-33 p-b-60">
<div class="flex-m flex-w p-b-10">
<div class="s-text15 w-size15 t-center">
Size
</div>
<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
<select class="selection-2" name="size">
<option>Choose an option</option>
<option>Size S</option>
<option>Size M</option>
<option>Size L</option>
<option>Size XL</option>
</select>
</div>
</div>
<div class="flex-m flex-w">
<div class="s-text15 w-size15 t-center">
Color
</div>
<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
<select class="selection-2" name="color">
<option>Choose an option</option>
<option>Gray</option>
<option>Red</option>
<option>Black</option>
<option>Blue</option>
</select>
</div>
</div>
<div class="flex-r-m flex-w p-t-10">
<div class="w-size16 flex-m flex-w">
<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
</button>
<input id="input" class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">
<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
</button>
</div>
<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">



<?php
$id = $_SESSION['id'];
include 'database/connection.php';
$id_product = $_GET['id'];


?>
<a id="add" data_p="<?php echo $id_product;?>" data_u="<?php echo $_SESSION['id'];?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Add to Cart
<a/>




</div>
</div>
</div>
</div>
<div class="p-b-45">
<span class="s-text8 m-r-35">SKU: MUG-01</span>
<span class="s-text8">Categories: Mug, Design</span>
</div>

<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
Description
<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
</h5>
<div class="dropdown-content dis-none p-t-15 p-b-23">
<p class="s-text8">
<?php echo $key['discription']; ?>
</p>
</div>
</div>
<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
Additional information
<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
</h5>
<div class="dropdown-content dis-none p-t-15 p-b-23">
<p class="s-text8">
Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
</p>
</div>
</div>
<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
Reviews (0)
<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
</h5>
<div class="dropdown-content dis-none p-t-15 p-b-23">
<p class="s-text8">
Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
</p>
</div>
</div>
</div>
</div>
</div>

<section class="relateproduct bgwhite p-t-45 p-b-138">
<div class="container">
<div class="sec-title p-b-60">
<h3 class="m-text5 t-center">
Related Products
</h3>



</div>

<div class="wrap-slick2">
<div class="slick2">
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">











<?php
include 'database/connection.php';
$id = $_GET['id'];
$select = "SELECT * FROM product WHERE category = '$id'";
$result = $conn->query($select);
foreach ($result as $key) {
	
?>

<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
<img src="admin/examples/database/upload/<?php echo $key['img'];?>">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">

<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
Add to Cart
</button>

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

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>

<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>

<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>

<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>

<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
<script type="text/javascript">
	$(document).ready(function(){
$(".star").click(function(){
 var  rate =$(this).attr("id")
 var id_user = $(this).parent().attr("data-user");
 var id_product = $(this).parent().attr("data-pro");





 $(this).addClass("far fa-star star text-warning");
 $(this).prevAll().addClass("far fa-star star text-warning");

         
       

 	$.post('database/insert_rate.php',{rate:rate,id_user:id_user,id_product:id_product},function(data){
alert(data);
 	});

});
});


</script>

<?php include"des/footer.php"; ?>