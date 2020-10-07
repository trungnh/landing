<!DOCTYPE html>
<?php
session_start();
$product_path = '/product/' . basename(dirname(__FILE__)) . '/';
$meta = [
	'title' => 'Bàn Là Hơi Nước Cầm Tay', // Tiêu đề trang
	'description' => 'Bàn Là Hơi Nước Cầm Tay', // Mô tả trang
	'keywords' => 'Bàn Là Hơi Nước Cầm Tay', // Từ khóa tìm kiếm
	'tracking_price' => 499000
];
$pixel_ids = [
	'431191577595737',
	'605048266910941',
	'1141041256264616',
	];
$pixel_view_string = '';
foreach($pixel_ids as $id) {
	$pixel_view_string  .= 'fbq("init", "'.$id.'");';
}
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (!isset($_SESSION['form_key'])) {
	$_SESSION['form_key'] = generateKey();
}
function generateKey()
{
    //Get the IP-address of the user
    $ip = $_SERVER['REMOTE_ADDR'];
     
    //We use mt_rand() instead of rand() because it is better for generating random numbers.
    //We use 'true' to get a longer string.
    //See http://www.php.net/mt_rand for a precise description of the function and more examples.
    $uniqid = uniqid(mt_rand(), true);
     
    //Return the hash
    return md5($ip . $uniqid);
}
?>
<html>
<head>
	  <meta charset="UTF-8">
	  <title><?php echo $meta['title']; ?></title>
	  <meta http-equiv="Cache-Control" content="no-cache">
	  <meta http-equiv="Expires" content="-1">
	  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
	  <meta name="description" content="<?php echo $meta['description']; ?>">
	  <script id='script_viewport' type='text/javascript'>window.trung_viewport = function () {var width = window.outerWidth > 0 ? window.outerWidth : window.screen.width;var widthDevice = width;var is_desktop = width >= 768;var content = "";if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {window.ladi_is_desktop = is_desktop;}if (!is_desktop) {widthDevice = 420;} else {widthDevice = 960;}content = "width=" + widthDevice + ", user-scalable=no";var scale = 1;if (!is_desktop && widthDevice != window.screen.width && window.screen.width > 0) {scale = window.screen.width / widthDevice;}if (scale != 1) {content += ", initial-scale=" + scale + ", minimum-scale=" + scale + ", maximum-scale=" + scale;}var docViewport = document.getElementById("viewport");if (!docViewport) {docViewport = document.createElement("meta");docViewport.setAttribute("id", "viewport");docViewport.setAttribute("name", "viewport");document.head.appendChild(docViewport);}docViewport.setAttribute("content", content);};window.trung_viewport();</script>
	  <link rel="canonical" href="<?php echo $actual_link;?>" />
	  <meta property="og:url" content="<?php echo $actual_link;?>" />
	  <meta property="og:title" content="<?php echo $meta['title']; ?>" />
	  <meta property="og:type" content="website" />
	  <meta property="og:image" content="<?php echo $product_path; ?>imgs/og_image.png">
	  <meta property="og:description" content="<?php echo $meta['description']; ?>" />
	  <meta name="format-detection" content="telephone=no" />
	  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	  <link rel="dns-prefetch">
	  <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
	  <link rel="preload" href="https://fonts.googleapis.com/css?family=Open Sans:bold,regular|Roboto:bold,regular|Tinos:bold,regular|Source Sans Pro:bold,regular&display=swap" as="style" onload="this.onload = null;this.rel
	  = 'stylesheet';">
	  <style type="text/css">
	  <?php echo file_get_contents('style.css');?>
	  </style>
	  <script type='text/javascript'>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');<?php echo $pixel_view_string;?>fbq("track", "ViewContent");</script>
	  <script type='text/javascript'>
	  var ACTION_PATH = '<?php echo $product_path; ?>action';
	  </script>
</head>
<body>
	<div class="wraper">
		<div id="section1" class="section" data-top="0" data-left="0">
			<div class="container">
				<div class="top-button-wraper">
					<div id="button1" class="button animation absolute" onclick="gotoForm()">
						<div id="button_text1" class="button-text element animation">
							 <p class="headline"><span style="color: rgb(255, 255, 255);">Tôi muốn mua giá ưu đãi</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="section2" class="section">
			<div class="container">
				<div class="fotorama"
					 data-nav="thumbs"
					 data-autoplay="1500">
				  <a href="<?php echo $product_path; ?>imgs/photo/1.jpg"><img src="<?php echo $product_path; ?>imgs/photo/1.jpg"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/2.jpg"><img src="<?php echo $product_path; ?>imgs/photo/2.jpg"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/3.png"><img src="<?php echo $product_path; ?>imgs/photo/3.png"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/4.jpg"><img src="<?php echo $product_path; ?>imgs/photo/4.jpg"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/5.jpg"><img src="<?php echo $product_path; ?>imgs/photo/5.jpg"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/6.jpg"><img src="<?php echo $product_path; ?>imgs/photo/6.jpg"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/7.gif"><img src="<?php echo $product_path; ?>imgs/photo/7.gif"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/8.jpg"><img src="<?php echo $product_path; ?>imgs/photo/8.jpg"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/9.jpg"><img src="<?php echo $product_path; ?>imgs/photo/9.jpg"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/10.png"><img src="<?php echo $product_path; ?>imgs/photo/10.png"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/11.jpg"><img src="<?php echo $product_path; ?>imgs/photo/11.jpg"></a>
				  <a href="<?php echo $product_path; ?>imgs/photo/12.jpg"><img src="<?php echo $product_path; ?>imgs/photo/12.jpg"></a>
				</div>
				<div style="height:20px;">&nbsp;</div>
				<div id="product-name" class="element">
				   <h1 class="headline"><?php echo $meta['title']?></h1>
				</div>
				<div id="price-area" class="element"
					style="width:100%; height:130px; position:relative; text-align:center"
				>
				<img src="<?php echo $product_path; ?>imgs/price.jpg" style="width:100%;"/>
				</div>
				<?php /*
				<div id="price-area" class="element"
					style="width:100%; height:130px; position:relative;"
				>
					<div id="old-price" class="absolute element">
					   <span class="headline">1.200.000đ</h2>
					</div>
					<div id="regular-price" class="absolute element">
					   <span class="headline">499.000đ</h2>
					</div>
					<div id="line1" class="absolute element">
					   <div class="line">
						  <div class="line-container"></div>
					   </div>
					</div>
					<div class="price-note absolute">
						<div id="paragraph1" class="element">
						   <p class="paragraph">(Tiết kiệm 701.000vnđ so với giá niêm yết)</p>
						</div>
						<div id="paragraph2" class="element">
						   <p class="paragraph">Chỉ còn&nbsp;<span style="font-weight: bold; color: rgb(255, 23, 68);">59</span><span style="font-weight: bold; color: rgb(0, 0, 0);">&nbsp;suất ưu đãi</span></p>
						</div>
					</div>
				</div>
				*/ ?>
				
				<div id="btn-cta1" class="btn-cta"
				style="width:100%; height:120px; position:relative;"
				>
					<div id="shape1" class="shape-wrap absolute element animation">
					   <div class="	">
						  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(33,150,243,1)">
							 <path d="M21,9A1,1 0 0,1 22,10A1,1 0 0,1 21,11H16.53L16.4,12.21L14.2,17.15C14,17.65 13.47,18 12.86,18H8.5C7.7,18 7,17.27 7,16.5V10C7,9.61 7.16,9.26 7.43,9L11.63,4.1L12.4,4.84C12.6,5.03 12.72,5.29 12.72,5.58L12.69,5.8L11,9H21M2,18V10H5V18H2Z"></path>
						  </svg>
					   </div>
					</div>
					<div id="button2" class="insite-button button absolute" onclick="gotoForm()">
						<div id="button_text2" class="button-text element animation">
							 <p class="headline"><span style="color: rgb(255, 255, 255);">Mua Ngay</span></p>
						</div>
					</div>
				</div>
				<div class="delivery-info" style="width:100%; text-align:center">
					<img src="<?php echo $product_path; ?>imgs/deliver.png" />
				</div>
				<div id="purchase-form1" class="purchase-form"
				style="width: 90%;margin: auto;"
				>
					<form autocomplete="off" method="post" class="trung-form">
						<input name="form_key" required="" class="trung-form-control" type="hidden" value="<?php echo $_SESSION['form_key'];?>">
						<input name="referal" required="" class="trung-form-control" type="hidden" value="<?php echo $actual_link;?>">
						<div id="form-item1" class="form-item">
							<input autocomplete="off" tabindex="1" name="name" required="" class="trung-form-control" type="text" placeholder="Họ và tên" value="">
						</div>
						<div id="form-item2" class="form-item">
							<input autocomplete="off" tabindex="2" name="phone" required="" class="trung-form-control" type="tel" placeholder="Nhập Số điện thoại" pattern="[0-9]{9,12}" value="">
						</div>
						<div id="form-item3" class="form-item">
							<input autocomplete="off" tabindex="3" name="street" required="" class="trung-form-control" type="text" placeholder="Nhập địa chỉ" value="">
						</div>
						<div id="form-item4" class="form-item">
							<input autocomplete="off" tabindex="4" name="note" class="trung-form-control" type="text" placeholder="Ghi chú" value="">
						</div>
						<div id="button3" class="button">
							<div id="button_text3" class="button-text element animation">
								 <p class="headline"><span style="color: rgb(255, 255, 255);">Mua Ngay</span>&nbsp;<img src="<?php echo $product_path; ?>imgs/loading.gif" class="loading"></p>
							</div>
						</div>
					</form>
				</div>
				<br/>
				<div class="purchase-form-note">
					<div id="paragraph3" class="element">
					   <p class="paragraph">✅Kiểm Tra Hàng Trước Khi Thanh Toán</p>
					</div>
					<div id="paragraph4" class="element">
					   <p class="paragraph">💢 Vui lòng điền đúng số điện thoại thì chúng tôi mới liên lạc lại được</p>
					</div>
					<div id="paragraph5" class="element">
					   <p class="paragraph">
						✅ <span style="font-weight: normal;">Chúng tôi cam kết không bán, trao đổi, hoặc sử dụng các hình thức thương mại khác với những thông tin cá nhân của bạn 
					   <a href="https://www.khohangsi.online/chinh-sach-bao-mat" target="_blank" data-replace-href="https://www.khohangsi.online/chinh-sach-bao-mat">xem thêm chính sách bảo mật</a></span>
					   </p>
					</div>
				</div>
				<br/>
				<div class="cert-info" style="width:100%; text-align:center">
					<img src="<?php echo $product_path; ?>imgs/cert.png" style="width:100%;"/>
				</div>
				<div style="height:10px;">&nbsp;</div>
				<div id="line2" style="width:70%; margin:auto">
					<div class="line">
					  <div class="line-container"></div>
				   </div>
				</div>
			</div>
		</div>
		<div style="height:30px;">&nbsp;</div>
		<div id="section3" class="section">
			<div class="container">
				<div id="headline1" class="element">
				   <h2 class="headline"><?php echo $meta['title'];?></h1>
				</div>
				<div style="height:10px;">&nbsp;</div>
				<div id="paragraph6" class="element">
					<p class="paragraph">
					&nbsp;Việc là quần áo khiến bạn mất nhiều thời gian và công sức?<br>
					&nbsp;Sử dụng bàn là truyền thống chỉ cần 1 phút bất cẩn là sẽ bị cháy hoặc ố quần áo?<br>
				   ✅ Là ủi hiệu quả với các loại vải quần áo, váy vest,..<br>
				   ✅ An toàn cho người sử dụng không bị cháy hay ố bẩn nên quần áo.<br>
				   ✅ Tô thủy tinh trong suốt, sang trọng, có thể dễ dàng thấy được thực phẩm đựng bên trong. <br>
				   ✅ Thiết kế gập cổ bỏ túi đem du lịch, công tác xa nhà.<br>
				   <span style="font-weight: bold;">★ Thông tin sản phẩm:</span>&nbsp;<br>
				   ✔ <span style="font-style: italic;">Xuất xứ</span>: Nhật Bản<br>
				   ✔ <span style="font-style: italic;">Kích thước</span>: 29x18x14cm<br>
				   ✔ <span style="font-style: italic;">Chất liệu</span>: Nhựa PC<br>
					</p>
				</div>
				<div id="product-images" class="element">
				   <div class="group">
					  <img src="<?php echo $product_path; ?>imgs/photo/desc.jpg">
				   </div>
				</div>
				<div class="btn-cta"
				style="width:100%; height:120px; position:relative;"
				>
					<div id="shape12" class="shape-wrap absolute element animation">
					   <div class="shape">
						  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(33,150,243,1)">
							 <path d="M21,9A1,1 0 0,1 22,10A1,1 0 0,1 21,11H16.53L16.4,12.21L14.2,17.15C14,17.65 13.47,18 12.86,18H8.5C7.7,18 7,17.27 7,16.5V10C7,9.61 7.16,9.26 7.43,9L11.63,4.1L12.4,4.84C12.6,5.03 12.72,5.29 12.72,5.58L12.69,5.8L11,9H21M2,18V10H5V18H2Z"></path>
						  </svg>
					   </div>
					</div>
					<div id="button21" class="insite-button button absolute" onclick="gotoForm()">
						<div id="button_text21" class="button-text element animation">
							 <p class="headline"><span style="color: rgb(255, 255, 255);">Mua Ngay</span></p>
						</div>
					</div>
				</div>
				<div class="element">
				   <div class="group">
					  <img src="<?php echo $product_path; ?>imgs/photo/use.jpg">
				   </div>
				</div>
				<div class="btn-cta"
				style="width:100%; height:120px; position:relative;"
				>
					<div class="shape-wrap absolute element animation">
					   <div class="shape">
						  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(33,150,243,1)">
							 <path d="M21,9A1,1 0 0,1 22,10A1,1 0 0,1 21,11H16.53L16.4,12.21L14.2,17.15C14,17.65 13.47,18 12.86,18H8.5C7.7,18 7,17.27 7,16.5V10C7,9.61 7.16,9.26 7.43,9L11.63,4.1L12.4,4.84C12.6,5.03 12.72,5.29 12.72,5.58L12.69,5.8L11,9H21M2,18V10H5V18H2Z"></path>
						  </svg>
					   </div>
					</div>
					<div class="insite-button button absolute" onclick="gotoForm()">
						<div class="button-text element animation">
							 <p class="headline"><span style="color: rgb(255, 255, 255);">Mua Ngay</span></p>
						</div>
					</div>
				</div>
				<div class="element">
				   <div class="group">
					  <img src="<?php echo $product_path; ?>imgs/photo/comment_fb.jpg">
				   </div>
				</div>
				<div class="element">
				   <div class="group">
					  <img src="<?php echo $product_path; ?>imgs/photo/comment.jpg" onclick="gotoForm()">
				   </div>
				</div>
				
			</div>
		</div>
		<div id="section3" class="section"
		style="background-color: rgb(37, 37, 37);"
		>
			<div class="container">
				<div style="height:20px;">&nbsp;</div>
				<div id="headline2" class="element">
				   <h3 class="headline">Giảm 70%</h3>
				</div>
				<div class="element">
				   <div class="group">
					  <img src="<?php echo $product_path; ?>imgs/price2.jpg">
				   </div>
				</div>
				<div style="height:10px;">&nbsp;</div>
				<div class="element" style="position: relative;height:170px;overflow: hidden;">
					<div class="countdown" style="position: absolute;top:0;left:2px;">
					</div>
				</div>
				<div id="purchase-form2" class="purchase-form"
				style="width: 90%;margin: auto;"
				>
					<form autocomplete="off" method="post" class="trung-form">
						<input name="form_key" required="" class="trung-form-control" type="hidden" value="<?php echo $_SESSION['form_key'];?>">
						<input name="referal" required="" class="trung-form-control" type="hidden" value="<?php echo $actual_link;?>">
						<div id="form-item5" class="form-item">
							<input autocomplete="off" tabindex="5" name="name" required="" class="trung-form-control" type="text" placeholder="Họ và tên" value="">
						</div>
						<div id="form-item6" class="form-item">
							<input autocomplete="off" tabindex="6" name="phone" required="" class="trung-form-control" type="tel" placeholder="Nhập Số điện thoại" pattern="[0-9]{9,12}" value="">
						</div>
						<div id="form-item7" class="form-item">
							<input autocomplete="off" tabindex="7" name="street" required="" class="trung-form-control" type="text" placeholder="Nhập địa chỉ" value="">
						</div>
						<div id="form-item8" class="form-item">
							<input autocomplete="off" tabindex="8" name="note" class="trung-form-control" type="text" placeholder="Ghi chú" value="">
						</div>
						<div id="button9" class="button">
							<div id="button_text9" class="button-text element animation">
								 <p class="headline"><span style="color: rgb(255, 255, 255);">Mua Ngay</span>&nbsp;<img src="<?php echo $product_path; ?>imgs/loading.gif" class="loading"></p>
							</div>
						</div>
					</form>
				</div>
				<div style="height:10px;">&nbsp;</div>
				<div id="paragraph7" style="width:95%; margin:auto">
					<p class="paragraph" style="color:#ffffff">
						<span style="font-weight: 400;">
							✅ MIỄN PHÍ GIAO HÀNG TRÊN MỌI MIỀN TỔ QUỐC<br>
							✅ ĐƯỢC KIỂM TRA HÀNG VÀ THỬ HÀNG THOẢI MÁI<br>
							✅ ƯNG Ý THÌ NHẬN, KHÔNG ƯNG Ý THÌ TRẢ LẠI, KHÔNG MẤT GÌ CẢ<br>
						</span>
						<span style="font-weight: normal;">Chúng tôi cam kết không bán, trao đổi, hoặc sử dụng các hình thức thương mại khác với những thông tin cá nhân của bạn <a style="color:#ffffff" href="https://www.khohangsi.online/chinh-sach-bao-mat" target="_blank" data-replace-href="https://www.khohangsi.online/chinh-sach-bao-mat">xem thêm chính sách bảo mật</a></span>
					</p>
				</div>
				<div style="height:20px;">&nbsp;</div>
			</div>
		</div>
		
		<div id="section4" class="section"
		>
			<div class="container">
				<div class="confirmation-info" style="width:100%; text-align:center">
					<img src="<?php echo $product_path; ?>imgs/confirmation.png" />
				</div>
				<div class="feedback-info" style="width:100%; text-align:center">
					<img src="<?php echo $product_path; ?>imgs/feedback.png" />
					<img src="<?php echo $product_path; ?>imgs/photo/feedback.jpg" />
				</div>
				<div id="button4" class="button fly-button" onclick="gotoForm()">
					<div id="button_text3" class="button-text element animation">
						 <p class="headline"><span style="color: rgb(255, 255, 255);">499K - MIỄN PHÍ GIAO HÀNG - MUA NGAY</span></p>
					</div>
				</div>
				<div style="height:60px;">&nbsp;</div>
			</div>
		</div>	
		
		<div id="section5">
			<!-- Footer Start-->
			<div class="footer-area footer-padding">
				<div class="container-fluid ">
					<div class="row d-flex justify-content-between">
						<div class="col-xl-3 col-lg-3 col-md-8 col-sm-8">
							 <div class="single-footer-caption mb-50">
							   <div class="single-footer-caption mb-30">
								  <!-- logo -->
								  <div class="footer-logo mb-35">
								   <a href="index.html"><img src="/assets/img/logo/logo2_footer.png" alt=""></a>
							   </div>
							   <div class="footer-tittle">
								   <div class="footer-pera">
									   <p>FaviMart - Thế Giới Đồ Gia Dụng Thông Minh</p>
								   </div>
							   </div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
					<div class="single-footer-caption mb-50">
						<div class="footer-tittle">
							<h4>Hướng dẫn & Chính sách</h4>
							<ul>
								<li><a href="/chinh-sach-su-dung.html">Chính sách sử đụng & bảo mật</a></li>
								<li><a href="/chinh-sach-doi-tra.html">Chính sách đổi trả & bảo hành</a></li>
								<li><a href="/lien-he.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
					<div class="single-footer-caption mb-50">
						<div class="footer-tittle">
							<h4>Thông tin liên hệ</h4>
							<ul>
								<li><a href="#">HOTLINE (0338) 716 078</a></li>
								<li><a href="#">Email: lienhe@favimart.site</a></li>
								<li><a href="#">Địa chỉ: P108, tầng 10, Royal city, 234 Nguyễn Trãi, Đống Đa, Hà Nội</a></li>
							</ul>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		  <div style="height:60px;">&nbsp;</div>
		  <!-- Footer End-->
		</div>
		
		<div id="popup1" class="overlay">
			<div class="popup">
				<h2>Thành Công!</h2>
				<a class="close" onclick="closePopup();">&times;</a>
				<div class="content">
					Cám ơn quý khách đã đặt hàng. Shop sẽ liên hệ và lên đơn cho quý khách ngay..
				</div>
				<button class="message-close" onclick="closePopup();">OK</button>
			</div>
		</div>
		<div id="notify" class="element notify-transition" style="opacity: 0; top: -162px;">
		   <div class="notify">
			  <div class="notify-image"><img src="/notification/1.jpg"></div>
			  <div class="notify-title">Toàn Nguyễn</div>
			  <div class="notify-content">O36888797x</div>
			  <div class="notify-time">1 phút trước</div>
		   </div>
		</div>
	</div>
	<link href="https://fonts.googleapis.com/css?family=Open Sans:bold,regular|Roboto:bold,regular|Tinos:bold,regular|Source Sans Pro:bold,regular&amp;display=swap" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	<script type="text/javascript">
		<?php echo file_get_contents('countDown.min.js');?>
	</script type="text/javascript">
	<script>function gotoForm(){$("html,body").animate({scrollTop:$("#headline2").offset().top},"slow")}function openPopup(){$(".overlay").addClass("active")}function closePopup(){$(".overlay").removeClass("active")}function serializeToJson(t){var e="{";for(var n in t){var o=t[n];e+='"'+o.name+'":"'+o.value+'",'}var i=e.length-1;return e=e.substr(0,i),e+="}",console.log("_string: ",e),JSON.parse(e)}$("#button3").click(function(){if(!$("#button3").hasClass("disabled")){$("#button3").addClass("disabled"),$(".loading").addClass("active");var t=serializeToJson($("#purchase-form1 form").serializeArray()),e=!0;""!=t.name&&""!=t.phone&&""!=t.street||(e=!1),1==e?$.post(ACTION_PATH,t,function(t,e){fbq("track","Purchase",{value:<?php echo $meta['tracking_price'];?>,currency:"VND"}),openPopup(),$("#button3").removeClass("disabled"),$(".loading").removeClass("active")}):alert("Bạn hãy nhập đầy đủ thông tin nhé!")}}),$("#button9").click(function(){if(!$("#button9").hasClass("disabled")){$("#button9").addClass("disabled"),$(".loading").addClass("active");var t=serializeToJson($("#purchase-form2 form").serializeArray()),e=!0;""!=t.name&&""!=t.phone&&""!=t.street||(e=!1),1==e?$.post(ACTION_PATH,t,function(t,e){fbq("track","Purchase",{value:<?php echo $meta['tracking_price'];?>,currency:"VND"}),openPopup(),$("#button9").removeClass("disabled"),$(".loading").removeClass("active")}):alert("Bạn hãy nhập đầy đủ thông tin nhé!")}});var cd=new Countdown({cont:document.querySelector(".countdown"),countdown:!1,date:Date.now()-2e7,outputTranslation:{hour:"Giờ",minute:"Phút",second:"Giây"},endCallback:null,outputFormat:"hour|minute|second"});cd.start(),setTimeout(function(){document.getElementById("notify").style.opacity="1",document.getElementById("notify").style.top=null,setTimeout(function(){document.getElementById("notify").style.opacity="0",document.getElementById("notify").style.top="-162px"},5e3)},5e3),setInterval(function(){var t=notifObj[Math.floor(Math.random()*notifObj.length)];$(".notify-image img").attr("src",t.image),$(".notify-title").html(t.title),$(".notify-content").html(t.content),$(".notify-time").html(t.time),document.getElementById("notify").style.opacity="1",document.getElementById("notify").style.top=null,setTimeout(function(){document.getElementById("notify").style.opacity="0",document.getElementById("notify").style.top="-162px"},5e3)},15e3);var notifObj=[{image:"/notification/3.jpg",title:"Thị Hương",content:"Ship 1 bộ về CC An Bình City",time:"2 phút trước"},{image:"/notification/2.jpg",title:"Chị Nhung",content:"Ship cho tôi 2 cái",time:"1 phút trước"},{image:"/notification/4.jpg",title:"Thảo Thanh",content:"09821579xx Bán mình 2 bộ",time:"1 phút trước"},{image:"/notification/1.jpg",title:"Toàn Nguyễn",content:"O36888797x",time:"1 phút trước"},{image:"/notification/5.jpg",title:"Ngọc Tuấn",content:"090400826x Bán A 1 bộ",time:"20 giây trước"},{image:"/notification/6.jpg",title:"Hồng Phạm",content:"Cho Anh đặt 5 bộ về ...",time:"1 phút trước"},{image:"/notification/7.jpg",title:"Thu Thủy",content:"09821579xx Mình đặt 1 bộ",time:"1 phút trước"}];</script>
	
</body>
	
</html>