(function(raoh){
/**
 * Main application script.
 * @author raohmaru
 * @version 1.0
 */
$.extend(raoh, 
{
	LANG : "es",
	
	/**
	 * Common scripts.
	 * @method
	 */
	init : function()
	{
		// Footer bottom fix for some browsers
		if(!raoh.isMobile) {
			raoh.bg.init();
		} else {
			document.documentElement.className += " ismobile";
		}
	},
	
	home :
	{
		/**
		 * Init the home page scripts.
		 * @method
		 */
		init : function()
		{
			// For browser doesn't support CSS3 animations
			if(!Modernizr.cssanimations)
				$("#home-logo").css({opacity:0.0, visibility:"visible"}).animate({opacity: 1.0}, 2000);
				
			// Menu animation
			var top = [0, 40, 80],
				d;
			$("#menu LI").each(function(idx)
			{
				d = 1000+idx*200;
				// Modern browsers with support for CSS3 animations
				if(Modernizr.cssanimations)
				{
					$(this).delay(d).queue(function()
					{
						// Trick to start the CSS3 animations with delay and set final animation state
						$(this).removeClass('menu-anim-start');
						$(this).addClass('menu-item-anim '+this.id+'-anim-end');
					});
				}
				// No CSS3 animations support
				else
					$(this).delay(d).animate({
						top:top[idx],
						opacity: 1
					}, 500+idx*100);
			});
			
			// Footer animation
			if(Modernizr.csstransitions)
				// Trick to start the CSS3 transition with delay
				setTimeout(function(){ $("#footer").addClass('footer-anim'); }, 2000);
			else
				$("#footer").delay(2000).animate({ height:34 }, 500);
		}
	},
	
	portfolio : 
	{
		HOME: 'home',
		/**
		 * Init the portfolio page scripts.
		 * @method
		 */
		init : function()
		{
			raoh.portfolio.render();
			
			$(".scrollable").each(function(i)
			{
				var $this = $(this);
				var $li = $this.find("li");
				var w = $li.outerWidth();
					w = w * $li.length + w/2;
				var $ul = $this.find("UL").width(w),
					$as = $this.find("A");
					
				new iScroll(this, {
					vScroll : false,
					// Prevent mouse click while scrolling
					onScrollMove : function() {
						if(scrolling) return
						scrolling = true;
						$as.bind('click.iscrollprevent', function(e){ e.preventDefault();});
						raoh.portfolio.hide();
					},
					onScrollEnd : function() {
						setTimeout(function(){
							$as.unbind('click.iscrollprevent');
							scrolling = false;
						},100);
					}
				});
				
				var scrolling = false;
				$as
					.mouseover(function(e)
					{
						e.preventDefault();
						if(!scrolling)
							raoh.portfolio.showSummary(this, e);
					})
					.click(function(e) {
						e.preventDefault();
						if(!scrolling)
							raoh.portfolio.showFull(this, e);
					});
			});
		
			$(window).hashchange( raoh.portfolio.hashchange );
			if( raoh.tools.hash().length > 0 )
				raoh.portfolio.hashchange();
				
			$(window).keyup(function(e){
				if (e.which == 27)  // Esc
					raoh.portfolio.hide();				
			});
		},
		
		/**
		 * Renders the works list from JSON data and the details box
		 * @method
		 */
		render : function()
		{
			$("#content").append(
			'<aside id="portfolio-details">' +
				'<h3>' +
					'<span id="portfolio-details-close" class="sprite icon-close" title="Cerrar"></span>' +
					'<a href="#" id="portfolio-details-title" rel="nofollow">' +
						'<b></b>' +
					'</a>' +
				'</h3>' + 
				'<h4 id="portfolio-details-abstract"></h4>' +
				'<div id="portfolio-details-content" class="portfolio-desc">' +
					'<img id="portfolio-details-img" alt="Una muestra del proyecto" />' +
					'<div></div>' +
				'</div>' +
				'<span id="portfolio-details-arrow"></span>' +
			'</aside>');
			
			$("#portfolio-details H3 A, #portfolio-details H4")
				.click(function(e)
				{
					raoh.portfolio.showFull(raoh.portfolio.a[0], e);
					if( !$("#portfolio-details").hasClass('expand') )
						return false;
				});
		},
		
		hashchange : function()
		{
			var hash = raoh.tools.hash(),
				$det = $("#portfolio-details");
			
			if(hash == '' || hash == raoh.portfolio.HOME)
			{
				if( $det.hasClass('expand') )
					raoh.portfolio.hide();
				return;
			}
			
			// Shows box from hidden state...
			if( $det.hasClass('expand') )
			{
				raoh.portfolio.loadContent(hash);
				if( $det.css("display") == "none" )
					$det.slideDown(200).queue(function(){ $det.addClass('shadow'); });
			}
			// ... or resizes box
			else
			{
				var	pos = {
					top: $det.css('top'),
					left: $det.css('left'),
					position: ''
				};
				$det.stop(true, true)
					.removeAttr('style')
					.addClass('expand')
					.removeClass('shadow')
					.css('position', 'fixed');
				var box = $det.offset();
					box.width = $det.width();
					box.height = $det.height();
					box.top = ($(window).height() - box.height) / 2 + $(window).scrollTop() - 17;
				if(isNaN(parseInt(pos.top)))
					pos = box;
				$det.removeClass('expand')
					.css(pos)
					.animate(box)
					.addClass('expand').queue(function()
					{
						$det.removeAttr('style').addClass('shadow').css('position', 'fixed');
						raoh.portfolio.loadContent(hash);
					});
			}
			
			if( !$(document).hasEvent("mouseup") )
			{
				$(document).mouseup(raoh.portfolio.hide);
				//$(window).resize(raoh.portfolio.hide);
			}
		},
		
		a : null,
		/**
		 * Shows the details box with a summary of the project.
		 * @method
		 */
		showSummary : function(a, e)
		{
			var $a = $(a),
				link = $a[0].href,
				$det = $("#portfolio-details"),
				id = $a[0].id.split("-");
				
			if( $("#portfolio-details").hasClass('expand') )
				return false;
			
			// Write details in the HTML
			$("#portfolio-details-title").attr("href", $a.attr("href"));
			$("#portfolio-details-title B").text($a.attr("title"));
			$("#portfolio-details-abstract").html( $a.attr("data-abstract") );
			$("#portfolio-details-content").removeAttr('style');
			
			// Gets the real width without the distorting jQuery.effects
			var $dummy = $('<div id="portfolio-details">').html($det.html());
			document.body.appendChild($dummy[0]);
			var w = $dummy.outerWidth(),
				h = $dummy.outerHeight();
			document.body.removeChild($dummy[0]);
			
			// Box positioning
			var left = e.pageX-w/2;
			$det.removeClass('expand').stop(true, true).removeAttr('style').css( {
				left: left < 0 ? 0 : left,
				top: $a.parents("DIV.scrollable").offset().top-h+10
			} ).addClass('shadow').show(200);
			
			if(raoh.portfolio.a != null)
				raoh.portfolio.a.children().removeClass('active');
			
			$a.children().addClass('active');
			raoh.portfolio.a = $a;
		},
		/**
		 * Shows the details box with the full description of the project.
		 * @method
		 */
		showFull : function(a, e)
		{
			var $a = $(a),
				link = $a[0].href,
				$det = $("#portfolio-details"),
				id = $a[0].id.split("-");
			
			// If mobile, redirect to view work page
			if(raoh.isMobile)
			{
				location = link;
				return;
			}
			
			if($det.hasClass('expand'))
				return;
			
			// Hash navigation (replaces /portfolio/work1 -> /portfolio#work1)
			location = link.replace(/\/([a-z0-9_\-]*)$/i, "#$1");
			
			// Hides the box when clicking or resizing the document
			if( !$(document).hasEvent("mouseup") )
				$(document).mouseup(raoh.portfolio.hide);
			//$(window).resize(raoh.portfolio.hide);
		},
		/**
		 * Fills and shows the content of the details box.
		 * @method
		 */
		loadContent : function(id)
		{
			function writeHTML()
			{
				var db = raoh.portfolio.db,
					w = null;
				for(var cat in db)
				{
					cat = db[cat];
					for(var i=0; i<cat.length; i++)
					{
						w = cat[i];
						if(w.L == id)
						{
							var bg = "url("+w.I2+")";
							if(Modernizr.multiplebgs)
								bg = "none, url(/img/portfolio-work-bg.png), " + bg;
							
							$("#portfolio-details").css( "background-image", bg );
							$("#portfolio-details-title").attr("href", "/portfolio/"+w.L);
							$("#portfolio-details-title B").text( w.T );
							$("#portfolio-details-abstract").html( w.A2 );
							$("#portfolio-details-content DIV").html( w.D );
							$("#portfolio-details-img").attr( "src", w.I );
							if( $("#portfolio-details").css("display") == "none" )
								$("#portfolio-details-content").show(0);
							else
								$("#portfolio-details-content").fadeIn();
							return;
						}
					};
				};
			}
			
			if( typeof(raoh.portfolio.db) == "undefined")
				$.getJSON("/js/portfolio.json?"+parseInt(Math.random()*1000000), function(data)
				{
					raoh.portfolio.db = data;
					writeHTML();
				});
			else
				writeHTML();
		},
		/**
		 * Hides the details box.
		 * @method
		 */
		hide : function(e)
		{
			var $det = $("#portfolio-details");
			
			if(!$det.is(':visible'))
				return;
			
			// Do not hide if clicked on the details box (but not on the close button)
			if(typeof(e) != "undefined" && e.target.id != "portfolio-details-close")
			{
				var t = e.target;
				if( t.id == "portfolio-details" ) 
					return;
				
				while(true)
				{
					t = t.parentNode;
					if(t && t.id == "portfolio-details")
						return;
					if(!t || t.id == "content")  // Parent top limit
						break;
				}
			}
			
			// If hiding from a work view, let the hashchange listener do the job
			var hash = raoh.tools.hash();
			if( hash.length > 0 && hash != raoh.portfolio.HOME )
			{
				location = location.pathname + "#"+raoh.portfolio.HOME;
				return;
			}
			
			$det.stop().removeClass('shadow').slideUp(150, function(){
				$det.removeClass('expand');
			});
			$(document).unbind('mouseup', raoh.portfolio.hide);
			//$(window).unbind('resize', raoh.portfolio.hide);
			
			if(raoh.portfolio.a != null)
				raoh.portfolio.a.children().removeClass('active');
		}
	},
	
	e404 :
	{
		/**
		 * Init the home error 404 page scripts.
		 * @method
		 */
		init : function()
		{
			// For browser doesn't support CSS3 animations
			if(!Modernizr.cssanimations)
				$("#e404-logo").animate({width:199, height:228}, 1000);
				
			// Hello animation
			if(Modernizr.csstransitions)
				// Trick to start the CSS3 transition with delay
				setTimeout(function(){ $("#e404-hello").addClass('anim'); }, 1000);
			else
				$("#e404-hello P").delay(1000).animate({
					top:0,
					opacity: 1
				}, 500);
		}
	},
	
	tools :
	{
		/**
		 * Filters the hash of the location.
		 * @method
		 */
		hash : function(in_array, not_empty)
		{
			var hash = location.hash.replace("#", "");
			
			if(typeof(in_array) == "undefined")
				return hash;
			
			for(var i=0; i<in_array.length; i++)
				if(hash == in_array[i])
					return hash;
			
			if(hash == '' && not_empty !== true) return '';
			
			return false;
		},
		
		randomInt: function(min, max) {
			if(!max) {
				if(!min) {
					min = 1;
				}
				max = min;
				min = 0;
			}
			return parseInt( Math.round( Math.random()*(max-min) + min ) );
		},

		// http://sampsonblog.com/749/simple-throttle-function
		throttle: function(callback, limit) {
			var wait = false;
			return function () {
				if (!wait) {
					callback.apply(callback, arguments);
					wait = true;
					setTimeout(function () {
						wait = false;
					}, limit);
				}
			}
		}
	},
	
	form :
	{
		EMPTY : /^\s*$/,
		EMAIL : /\w{1,}[@][\w\-]{1,}([.]([\w\-]{2,})){1,3}$/,
		/**
		 * Validates a form.
		 * @method
		 */
		validate : function(form)
		{
			var fields = $(form).find("INPUT:text, TEXTAREA"),
				error = false;
			for(var i=0; i<fields.length; i++)
			{
				if( raoh.form.EMPTY.test(fields[i].value) )
				{
					$(fields[i]).addClass('error');
					error = true;
				}
				else
				{
					$(fields[i]).removeClass('error');
				}
			};
			
			return !error;
		}
	},
	
	bg: {
		init: function() {
			var canvas = document.getElementById('bgcanvas'),
				cnv_width,
				cnv_height,
				ctx;
			var FILL_COLOR = "rgb(100,100,100)";

			if(canvas && canvas.getContext){
				ctx = canvas.getContext('2d');
				start();
			} else {
				return;
			}

			function start() {
				// draw();
				window.addEventListener('mousemove', raoh.tools.throttle(mousemoveListener, 50));
				window.addEventListener('resize', resizeCanvas, false);
				resizeCanvas();
			}

			function resizeCanvas() {
				canvas.width  = cnv_width  = window.innerWidth;
				canvas.height = cnv_height = window.innerHeight;
			}

			function mousemoveListener(e) {
				draw();
				drawPixels(e.clientX, e.clientY);
			}

			function drawPixels(x, y) {
				var sz = raoh.tools.randomInt(1, 20);
				x += raoh.tools.randomInt(-15, 15);
				y += raoh.tools.randomInt(-15, 15);
				
				if(raoh.tools.randomInt()) {
					ctx.fillStyle = FILL_COLOR;
					ctx.fillRect(x, y, sz, sz);		
				} else {
					ctx.strokeStyle = FILL_COLOR;
					ctx.lineWidth = raoh.tools.randomInt(1, 4);
					ctx.strokeRect(x, y, sz, sz);
				}
			}

			function draw() {
				// ctx.clearRect(0, 0, cnv_width, cnv_height);
				ctx.fillStyle = "rgba(238,238,238,.1)";  // #eee
				ctx.fillRect(0, 0, cnv_width, cnv_height);	
				// window.requestAnimationFrame(draw);
			}
		}
	}
});
})(window.raoh || (window.raoh = {}));