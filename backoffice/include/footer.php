<!--footer section-->

<footer>
  <div class="footer custom-padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 clearfix column">
          <h3 class="footer-title">About Us</h3>
          <p>Earthsave have been installing Solar panels, solar hot water systems, solar skylights, solar pool heating and all associated products here in Brisbane for more than 17 years.</p>
          <div class="social-links-two clearfix">
          <span><img src="images/accredited-installer_logo.png"></span>
          <span style="margin-left:10px;"><img src="images/master-electricians_logo.png"></span>
         
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12 clearfix column">
          <h3 class="footer-title">QUICK LINKS</h3>
          <div class="footer-links">
            <ul>
              <li><a href="#">Home</a></li>             
              <li><a href="https://earthsave.com.au/index.php?id=89">Privacy Policy</a></li>              
              <li><a href="https://earthsave.com.au/index.php?id=7">Contact Us</a></li>
            </ul>
          </div>
        </div>
        
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12 clearfix column">
          <h3 class="footer-title">OUR PRODUCTS</h3>
          <div class="footer-links">
            <ul>
              <li><a href="https://earthsave.com.au/index.php?id=13">Solar Ark</a></li>             
              <li><a href="https://earthsave.com.au/index.php?id=5">Airconditioning</a></li>
              <li><a href="https://earthsave.com.au/index.php?id=6">Commercial Solar</a></li>
            </ul>
          </div>
        </div>
        
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12 clearfix column">
          <h3 class="footer-title">CONTACT</h3>
          <div class="footer-address">
            <p> <i class="icon fa fa-phone"></i> 1300 00 5253 </p>
			  <p> <a href="mailto:info@earthsave.com.au"><i class="icon fa fa-envelope-o"></i>info@earthsave.com.au</a> </p>
            <p> <i class="icon fa fa-map-marker"></i>11 Hudson Road, Albion QLD 4010, Brisbane, Australia</p>
            
            <div class="social-links-two clearfix">
          <a class="facebook img-circle" href="https://www.facebook.com/earthsavesolar/" target="_blank"> <span class="fa fa-facebook-f"></span> </a> 
				<!--<a class="twitter img-circle" href="https://www.facebook.com/earthsavesolar/"> <span class="fa fa-twitter"></span> </a>-->         
          <a class="linkedin img-circle" href="http://instagram.com/earthsaveau"  target="_blank"> <span class="fa fa-linkedin"></span></a> 
          
          </div>
          </div>
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.footer -->
  <div class="copyright ">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="text-center">
            <p>© Copyright 2018. All Rights Reserved for Earthsave.com.au.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">
 (function($) {	
	"use strict";
        $('.sb_variation').on('change', function()
        {
            var get_var	=	'';
            $( ".sb_variation" ).each(function() {
                var val	=	$( this ).val();
                get_var	= get_var + val.replace(/\s+/g, '') + '_';
            });
            var res	=	$('#' + get_var ).val();
			
            var arr = res.split("-");
            var sale_price	=	arr[0];
            var old_price	=	arr[1];
            var vid	=	arr[2];
            if( sale_price == "0" )
            {
                $('#v_msg').html( 'This product is currently out of stock and unavailable.' );
                $('#sale_price').html('');
                $('#old_price').html('');
				$('#sb_add_to_cart').hide();
				$('#quantity').hide();
				$('#product_qty').hide();
            }
            else
            {
                $('#sale_price').html( '&pound;' + sale_price );
                $('#old_price').html('&pound;' + old_price );
                $('#v_msg').html('');
				$('#sb_add_to_cart').show();
				$('#quantity').show();
				$('#product_qty').show();
            }
            $('#variation_id').val( vid );
        });
        $( ".sb_variation" ).trigger( "change" );
        
        $('#sb_add_to_cart').on('click', function()
        {
			if( $('#cart_msg').html() != 'Adding...' )
			{
				$('#cart_msg').html( "Adding..." );
				
				//Getting values
				var variation_id	=	$('#variation_id').val();
				var pid	=	$('#product_id').val();
				var qty	=	$('#product_qty').val();
				$.post('wp-admin/admin-ajax.html',
				{action : 'sb_cart' , product_id:pid, qty:qty,variation_id:variation_id   }).done(function(response) 
				{
					
					$('#cart_msg').html( "add to cart" );
					if( response != 0 )
					{ 
					var cart_url	=	'';
					 					 var cart_url	=	'<br /><a href="cart/index.html">View Cart</a>';
					 						toastr.success('Product Added successfully.'+cart_url, 'Success!', {timeOut: 10000,"closeButton": true, "positionClass": "toast-bottom-right"})	
					}
					else
					{
						toastr.error('Something went wrong, please try it again.', 'Error!', {timeOut: 15000,"closeButton": true, "positionClass": "toast-bottom-right"})	
	
					}
				});
			}

        });
})( jQuery );
	
	
	
    </script> 
<script type='text/javascript' src='js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script> 
<script type='text/javascript' src='js/scripts8686.js?ver=4.5.1'></script> 
<script type='text/javascript' src='js/themee049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/comment-reply.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/bootstrap.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/carousel.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/hover.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/imagesloaded.min55a0.js?ver=3.2.0'></script> 
<script type='text/javascript' src='js/jquery.appear.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/jquery.countToe049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/jquery.mixitup.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/theia-sticky-sidebare049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/jquery.nicescroll.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/jquery.shuffle.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/jquery.smoothscrolle049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/jquery.stellar.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/jquery.stickye049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/jquery.waypointse049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/modernizre049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/validator.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/magnific-popup/jquery.magnific-popup.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/easinge049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/toastr.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/revolution/js/slider.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/revolution/js/tools.mine049.js?ver=4.7.8'></script> 
<script type='text/javascript' src='js/custome049.js?ver=4.7.8'></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>

<script>
	(function($) {
		 $("#flexiselDemo1").flexisel();
	 })(jQuery);
</script>


<!-- Start of HubSpot Embed Code --> 
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4374075.js"></script> 
<!-- End of HubSpot Embed Code -->

</body></html>