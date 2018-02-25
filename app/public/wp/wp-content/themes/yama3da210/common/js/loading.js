			$('head').append('<style type="text/css">.wrapper { opacity:0; } #homeWrap { display: none; } #loadWrap { display: block; }</style>');
			jQuery.event.add(window,"load",function() { // 全ての読み込み完了後に呼ばれる関数
				$("#loadWrap").fadeOut(function(){
					$('#homeWrap').fadeIn(800);
					$('.wrapper').animate({opacity:'1'}, 800);
				});
				$(window).trigger('resize');
			});
