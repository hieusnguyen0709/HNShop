</div>

   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4" style="color: DarkGray;">
						<h4>Thông tin</h4>
						<ul>
							Công Ty Cổ Phần Phát Hành Sách TP HCM - HNSHOP - Số 12 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, Thành phố Hồ Chí Minh
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Tại sao lại là HNShop</h4>
						<ul>
						<li><a href="contact.php">Về chúng tôi</a></li>
						<li><a href="contact.php">Dịch vụ khách hàng</a></li>
						<li><a href="#">Chính sách bảo mật</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Tài khoản của tôi</h4>
						<ul>
							<li><a href="login.php">Đăng nhập</a></li>
							<li><a href="cart.php">Xem giỏ hàng</a></li>
							<li><a href="wishlist.php">Wishlist</a></li>
							<li><a href="orderdetails.php">Theo dõi đơn hàng</a></li>
							<li><a href="contact.php">Trợ giúp</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Liên hệ</h4>
						<ul>
							<li><span>+ 0365549764</span></li>
							<li><span>+ 0971376033</span></li>						
						</ul>
						<div class="social-icons">
							<h4>Theo dỗi chúng tôi</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>HNShop</p>
		   </div>
     </div>
    </div>

    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
</html>
