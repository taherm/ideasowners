<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
	<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
	<script src="{{asset('master/style-switcher/style.switcher.js')}}" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
	<script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('vendor/common/common.min.js')}}"></script>
	<script src="{{asset('vendor/jquery.validation/jquery.validation.min.js')}}"></script>
	<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
	<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
	<script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
	<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
	<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('vendor/vide/vide.min.js')}}"></script>
	<script src="{{asset('/js/instafeed.min.js')}}"></script>
	<!-- Theme Base, Components and Settings -->
	<script src="{{asset('js/theme.js')}}"></script>

	<!-- Current Page Vendor and Views -->
	<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

	<!-- Current Page Vendor and Views -->
	<script src="{{asset('js/views/view.contact.js')}}"></script>

	<!-- Theme Custom -->
	<script src="{{asset('js/custom.js')}}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{asset('js/theme.init.js')}}"></script>

<script type="text/javascript">
    var feed = new Instafeed({
      get: 'user',
      userId: '18973642',
      limit:'4',
      resolution:'low_resolution',
      accessToken: '18973642.1677ed0.4afd9743af5545219d07f80c56ea9c71',
      template: '  <div class="col-sm-3"><a href="@{{link}}"><img src="@{{image}}" class="img-thumbnail img-responsive"/></a> </div>'
            });
    feed.run();
</script>



	<script type="text/javascript">

var revapi;

	jQuery(document).ready(function() {

	   revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:500,

			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:3,

			navigationType:"bullet",     // use none, bullet or thumb
			navigationArrows:"solo",     // nexttobullets, solo (old name verticalcentered), none

			navigationStyle:"round",     // round, square, navbar, round-old, square-old, navbar-old 


			navigationHAlign:"center",   // left,center,right
			navigationVAlign:"bottom",   // top,center,bottom
			navigationHOffset:0,		 // offset position from aligned position
			navigationVOffset:0,		 // offset position from aligned position

			soloArrowLeftHalign:"left",	 // left,center,right
			soloArrowLeftValign:"bottom",// top,center,bottom
			soloArrowLeftHOffset:20,	 // offset position from aligned position
			soloArrowLeftVOffset:20,	 // offset position from aligned position

			soloArrowRightHalign:"right",	// left,center,right
			soloArrowRightValign:"bottom",	// top,center,bottom
			soloArrowRightHOffset:20,		// offset position from aligned position
			soloArrowRightVOffset:20,		// offset position from aligned position

			touchenabled:"on",
			onHoverStop:"on"

		});

	});	//ready

</script>









