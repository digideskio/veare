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
<body<?=$class?> data-page_class="<?=$body_class?>" id="html_body" data-url="<?=base_url();?>">
	<div id="menu_icon"><div class="veare-sprite"></div></div>
	<div id="body">
		<div id="header">
			<a href="<?=base_url(TRUE)?>home" id="logo" class="no-flicker ajax-link" data-nav="#nav">
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
