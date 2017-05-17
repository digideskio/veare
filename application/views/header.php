<?=doctype('html5')."\n"; ?>
<?=html('lang="'.config('lang_abbr').'"', '', false)?>
<head>
	<?
	// title
	echo title('vea.re | '.variable($meta_title, 'welcome').' | visionary design', 'veare');
	echo favicon('favicon');
	echo meta();
	// echo css('default', FALSE);
	?>
	<link rel="stylesheet" href="<?=base_url(TRUE)?>libs/css/app.min.css" media="screen" charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="theme-color" content="rgb(240, 170, 30)">
	<link rel="icon" sizes="192x192" href="veare-logo-highres.png">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7074034-1', 'auto');
  ga('require', 'linkid');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');

function viewport() {
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
  	//Non-IE
  	myWidth = window.innerWidth;
  	myHeight = window.innerHeight;
  }
	if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
  	//IE 6+ in 'standards compliant mode'
  	myWidth = document.documentElement.clientWidth;
  	myHeight = document.documentElement.clientHeight;
  }
  ga('send', 'event', 'Viewport', 'Size', myWidth+'x'+myHeight,{'nonInteraction': 1});
}

	var trackingLink = document.querySelectorAll('[data-link-tracking]');
	for (var i = 0; i < trackingLink.length; i++) {
    trackingLink[i].addEventListener('click', function(event) {
      ga('send', 'event', 'Interaction', 'Link', this.getAttribute('data-link-tracking'));
    });
}

	</script>
</head>
<?
	if( mobile() == true && ipad() != true)
	{
		$class = ' class="mobile portrait loaded-mobile'.variable($body_class).'"';
	}
	elseif( ipad() == true )
	{
		$class = ' class="tablet loaded-tablet '.variable($body_class).'"';
	}
	else
	{
		$class = ' class="hovers screen '.variable($body_class).'"';
	}
?>
<body<?=$class?> data-page_class="<?=$body_class?>" id="html_body" data-url="<?=base_url();?>" onLoad="viewport()">
	<div id="menu_icon" data-link-tracking="menu-icon-link"><div class="veare-sprite"></div></div>
	<div id="body">
		<div id="header">
			<a href="<?=base_url(TRUE)?>home" id="logo" class="no-flicker ajax-link" data-nav="#nav" data-link-tracking="logo-link">
<svg version="1.1" id="logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="141.094px" height="116.544px" viewBox="0 0 141.094 116.544" enable-background="new 0 0 141.094 116.544"
	 xml:space="preserve">
<g>
	<polygon id="Logo_2_" points="81.365,13.826 57.994,60.144 39.731,23.949 140.455,23.949 128.37,0 0,0 58.01,115
		109.029,13.826 	"/>
	<linearGradient id="Logo_Shadow_2_" gradientUnits="userSpaceOnUse" x1="75.9995" y1="27" x2="103.9995" y2="27">
		<stop  offset="0" style="stop-color:#000;stop-opacity:0.25"/>
		<stop  offset="1" style="stop-color:#000;stop-opacity:0.05"/>
	</linearGradient>
	<polygon id="Logo_Shadow_1_" fill="url(#Logo_Shadow_2_)" points="76,24 104,24 101.062,30 	"/>
</g>
</svg>

				<!--<img class="async-img" data-src-x2="<?=base_url(TRUE)?>layout/veare-icons@2x.png" data-src-x1="<?=base_url(TRUE)?>layout/veare-icons.png" alt="veare - visionary design, interface design, iOS, webdesign" />-->
			</a>
		</div>
		<div class="wrapper">
