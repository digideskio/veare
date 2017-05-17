<?=doctype('html5')."\n"; ?>
<?=html('lang="'.config('lang_abbr').'"', '', false)?>
<head>
	<?
	echo favicon('favicon');
	echo meta();
	echo css('default', FALSE);
	// title 
	echo title('vea.re | '.variable($meta_title, 'welcome').' | visionary design', 'veare');
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
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
		$class = ' class="hovers screen'.variable($body_class).'"';
	}
?>
<body<?=$class?> data-page_class="<?=$body_class?>" id="html_body" data-url="<?=base_url();?>">
	<div id="menu_icon"><div class="veare-sprite"></div></div>
	<div id="body">
		<div id="header">
			<a href="<?=base_url(TRUE)?>home" id="logo" class="no-flicker ajax-link" data-nav="#nav">
				<!-- <img class="img-optimized" data-src-x2="<?=base_url(TRUE)?>layout/veare-icons@2x.png" data-src-x1="<?=base_url(TRUE)?>layout/veare-icons.png" alt="veare - visionary design, interface design, iOS, webdesign" /> -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="141px" height="115px" viewBox="0 0 141 115" enable-background="new 0 0 141 115" xml:space="preserve">
<g>
	<polygon id="Logo_2_" fill="#EFAA1F" points="81.365,13.826 57.994,60.144 39.73,23.949 140.455,23.949 128.37,0 0,0 58.01,115 
		109.029,13.826 	"/>
	<linearGradient id="Logo_Shadow_2_" gradientUnits="userSpaceOnUse" x1="75.9995" y1="27" x2="103.9995" y2="27">
		<stop  offset="0" style="stop-color:#CF5C28"/>
		<stop  offset="1" style="stop-color:#E47A25;stop-opacity:0.7"/>
	</linearGradient>
	<polygon id="Logo_Shadow_1_" fill="url(#Logo_Shadow_2_)" points="75.999,24 103.999,24 101.062,30 	"/>
</g>
</svg>

				
			</a>
		</div>
		<div class="wrapper">