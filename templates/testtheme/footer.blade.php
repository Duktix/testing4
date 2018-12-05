@if(!empty(getSetting('html','footer')))
	{!! getSetting('html','footer') !!}
@endif

<!-- Back to top -->    
<a href="#" class="back-to-top" id="back-to-top"> <i class="fa fa-angle-up"></i> </a>

<script>
jQuery(document).ready(function(){
	jQuery('#slide-toggle').click(function(){
		jQuery('#sliding').toggleClass('on');
		if(jQuery('#sliding').hasClass('on')){
			jQuery('#sliding .sliding-overlay').fadeIn();
		}else{
			jQuery('#sliding .sliding-overlay').fadeOut();
		}
		return false;
	})
})
</script>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ IncludeAsset('js/bootstrap.min.js') }}"></script>
<!-- Jquery easing -->                                                      
<script type="text/javascript" src="{{ IncludeAsset('js/jquery.easing.1.3.min.js') }}"></script>
<!--sticky header-->
<script type="text/javascript" src="{{ IncludeAsset('js/jquery.sticky.js') }}"></script>

<!--common script for all pages-->
<script src="{{ IncludeAsset('js/jquery.app.js') }}"></script>
