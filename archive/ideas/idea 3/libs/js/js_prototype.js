$(function(){
	var _stage 		= $('#stage');
	var _window 	= $(window);
	if( _stage.height() < _window.height() )
	{
		$("body").height(_window.height());
	}
	else
	{
		$("body").height(_stage.height());
	}
	
	$("#meta_nav li a").click(function(){
		$("#meta_nav li").removeClass("active");
		$(this).parent('li').addClass("active");
		return false;
	});
	$("#nav li a").click(function(){
		$("#nav li a.active").removeClass("active");
		$(this).addClass("active");
		return false;
	});
	// -------------------------------------------
	// sidebar hide & show
	$("#sidebar_handle").click(function(){
		var sidebar = $("#sidebar_box");
		if(sidebar.hasClass("open")){
			// slide closed
			sidebar.animate({width:'70px'},300, 'swing', function(){
				sidebar.removeClass("open").addClass("closed")
			}).find("#sidebar").animate({width:'70px'},300, 'swing');
			// switch logo
			var logo_big = $("#logo .logo-big");
			var logo_small = $("#logo .logo-small");
			logo_big.animate({
				left: '-200px',
				opacity: '0.0'
			},200, 'swing', function(){
				logo_big.addClass('hidden').removeClass('visible');
				logo_small.animate({
					left: '10px',
					opacity: '1.0'
				},200, 'swing', function(){
					logo_small.removeClass('hidden').addClass('visible');	
				});
			});
			
			// hide nav text
			sidebar.find("#nav li a").animate({'paddingLeft': '0px'},300, 'swing');
			sidebar.find("#nav li span.text").animate({
				opacity: '0.0'
			    }, { queue: false, duration: 100 })
			  .animate({
			  marginLeft: '-200px'
			    }, 300 );
			// reorder follow nav
			sidebar.find("#follow_nav").addClass('vertical').animate({
				width: '50px',
				height: '120px',
				marginLeft: '+=5px'
			},300, 'swing');
		}
		else
		{
			// show sidebar
			sidebar.animate({width:'180px'},200, 'swing', function(){
				sidebar.removeClass("closed").addClass("open");
			}).find("#sidebar").animate({width:'180px'},200, 'swing');
			// switch logo
			var logo_big = $("#logo .logo-big");
			var logo_small = $("#logo .logo-small");
			logo_small.animate({
				left: '-200px',
				opacity: '0.0'
			},200, 'swing', function(){
				logo_small.addClass('hidden').removeClass('visible');
				logo_big.animate({
					left: '15px',
					opacity: '1.0'
				},200, 'swing', function(){
					logo_big.removeClass('hidden').addClass('visible');	
				});
			});
			// show text
			sidebar.find("#nav li a").animate({'paddingLeft': '70px'},300, 'swing');
			// sidebar.find("#nav li span.text").animate({
			// 	marginLeft: '0px',
			// 	opacity: '1.0'
			// },300, 'swing');
			sidebar.find("#nav li span.text").animate({
			  marginLeft: '0px'
			    }, { queue: false, duration: 300 } ).delay(200).animate({'opacity':'1.0'}, 100);
			// reorder follow nav
			sidebar.find("#follow_nav").removeClass('vertical').animate({
				width: '160px',
				height: '30px',
				marginLeft: '-=5px'
			},300, 'swing');		
		}
	});
	// $("#featured").click(function(){
	// 	$("#featured_loader").animate({
	// 		width: '100%'
	// 	}, 300, 'swing', function(){
	// 		$("#featured img").hide();
	// 		$("#featured img.hidden").show().removeClass('hidden');
	// 		$("#featured_loader").animate({
	// 			width: '0%'
	// 		}, 200, 'swing');
	// 	});
	// 	$("#featured img:last-child").after('<img class="hidden" style="display: none;" src="./media/images/featured_2.png" alt="" />');
	// });
});