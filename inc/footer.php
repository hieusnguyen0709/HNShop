</div>

   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Thông tin</h4>
						<ul>
						<li><a href="#"><span>Về chúng tôi</span></a></li>
						<li><a href="#"><span>Dịch vụ khách hàng</span></a></li>
						<li><a href="#"><span>Giao dịch và Hoàn trả</span></a></li>
						<li><a href="contact.php"><span>Liên hệ với chúng tôi</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Tại sao lại là HNShop</h4>
						<ul>
						<li><a href="contact.php"><span>Về chúng tôi</span></a></li>
						<li><a href="#"><span>Dịch vụ khách hàng</span></a></li>
						<li><a href="#"><span>Chính sách bảo mật</span></a></li>
						<li><a href="contact.php"><span>Site Map</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Tài khoản</h4>
						<ul>
							<li><a href="login.php"><span>Đăng nhập</span></a></li>
							<li><a href="cart.php"><span>Xem giỏ hàng</span></a></li>
							<li><a href="wishlist.php"><span>My Wishlist</span></a></li>
							<li><a href="orderdetails.php"><span>Theo dõi đơn hàng</span></a></li>
							<li><a href="contact.php"><span>Trợ giúp</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Liên Hệ</h4>
						<ul>
							<li><span>Mr. Hiếu: 0365549764</span></li>
							<li><span>Mr.Huy: 0971376033</span></li>						
						</ul>
						<div class="social-icons">
							<h4>Theo dõi chúng tôi</h4>
					   		  <ul>
							      <li class="facebook"><a href="https://www.facebook.com/SuperLoPho/" target="_blank"></a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
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
