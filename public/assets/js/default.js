var mapApp;
var tabsApp;
var heroApp;
var slidesApp;
(function($){
	'use strict';
	$(document).ready(function() {
		MM.init();
		MS.init();
		MC.init();
		MA.init();
		TR.init();
		$('[data-lightbox], .gallery-icon a').attr('rel', 'lightbox-gallery').fancybox({
			openEffect: 'fade',
			closeEffect: 'fade',
			prevEffect: 'fade',
			nextEffect: 'fade',
			padding: 0,
			helpers: {title: {type: 'inside'}, overlay: {css: {'background-color': 'rgba(0,0,0,0.5)'}}}
		});
		$('[data-popup]').addPopups();
		$('[data-videopopup]').addVideoPopup();
		$('[data-iframe]').addIFrame();
		if (!Modernizr.objectfit) {
			$('.of-fix').each(function () {
				var c = $(this),
					i = c.find('img').prop('src');
				if(i) {
					c.css('backgroundImage', 'url(' + i + ')').addClass('of-fix-fit');
				}  
			});
		}
	});
	$(window).on('load', function() {
		MA.start();
		equalizer.init();
		equalall.init();
	});
	var TR = {
		init: function() {
			$('[data-registration]').on('click', function() {
				var type = $(this).attr('data-registration');
				fbq('trackCustom', 'RegisterButton', {
					content_type: type
				}); 
			});
		}
	};
	var MA = {
		top: 0,
		last: 0,
		init: function() {
			$(window).on('scroll.direction', function(){
				MA.last = MA.top;
				MA.top = $(this).scrollTop();
				$('body').toggleClass('scrolled-up', MA.top < MA.last);
			});
		},
		start: function() {
			var wp1 = new Waypoint({
				element: $('body'),
				handler: function(direction) {
					$('body').toggleClass('scrolled', direction === 'down');
				},
				offset: -120
			});
			var wp2 = new Waypoint({
				element: $('body'),
				handler: function(direction) {
					$('body').toggleClass('scrolled-menu', direction === 'down');
				},
				offset: -300
			});
		}
	};
	var equalizer = {
		resizing: false,
		resizer: {},
		init: function() {
			if($('[data-equal]').length) {
				this.resize();
				$(window).on('resize.equalizer', function() {
					if(!equalizer.resizing) {
						equalizer.resizing = true;
					}
					clearTimeout(equalizer.resizer);
					equalizer.resizer = setTimeout(function(){equalizer.resize();}, 250);
				});
			}
		},
		resize: function() {
			$('[data-equal]').each(function() {
				var name = $(this).attr('data-equal'),
					sizer = $(this).attr('data-equalitem'),
					width = $(this).width(),
					items = $(this).find(name + ':visible'),
					itemwidth = items.width(),
					columns = Math.round(width/itemwidth),
					sets = [],
					current = 0,
					count = 1,
					s, m;
				items.each(function() {
					var set = Math.ceil(count/columns), obj;
					if(set !== current) {
						current = set;
						sets.push(current);
					}
					obj = (sizer === undefined) ? $(this) : $(this).find(sizer);
					obj.attr('data-equalset', set).css('height', 'auto');
					count += 1;
				});
				if(columns > 1) {
					for(s=0; s < sets.length; s++) {
						m = -1;
						$(this).find('[data-equalset=' + sets[s] + ']').each(function() {
							m = Math.max(m, $(this).height());
						}).height(m);
					}
				}
			});
			this.resizing = false;
		}
	};
	var equalall = {
		resizing: false,
		resizer: {},
		init: function() {
			if($('[data-equalall]').length) {
				this.resize();
				$(window).on('resize.equalall', function() {
					if(!equalall.resizing) {
						equalall.resizing = true;
					}
					clearTimeout(equalall.resizer);
					equalall.resizer = setTimeout(function(){equalall.resize();}, 250);
				});
			}
		},
		resize: function() {
			$('[data-equalall]').each(function() {
				var name = $(this).attr('data-equalall'),
					sizer = $(this).attr('data-equalallitem'),
					items = $(this).find(name + ':visible'),
					height = -1;
				items.each(function() {
					var obj = $(this).find(sizer);
					obj.css('height', 'auto');
					height = Math.max(height, obj.height());
				});
				items.each(function() {
					$(this).find(sizer).css('height', height);
				});
			});
			this.resizing = false;
		}
	};
	mapApp = {
		z: 1,
		view: false,
		display: 'grid',
		created: false,
		markers: {},
		toggle: function() {
			if(!this.view) {
				$('#map').removeClass('hide');
				$('.map-key').removeClass('hide');
				$('#map-view').text('Close Map');
				if(!this.created) {
					this.create($('#map'));
				}
			} else {
				$('#map').addClass('hide');
				$('.map-key').addClass('hide');
				$('#map-view').text('View on Map');
			}
			this.view = !this.view;
			return false;
		},
		close: function() {
			$('#map').removeClass('hide');
			this.create($('#map'));
		},
		create: function(obj) {
			var markers = obj.find('.marker');
			var args = {
				zoom: 13,
				center: new google.maps.LatLng(0, 0),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			this.created = true;
			this.map = new google.maps.Map(obj[0], args);
			this.map.markers = [];
			markers.each(function() {
				var id = $(this).attr('data-id');
				mapApp.markers['m' + id] = {
					lat: $(this).attr('data-lat'),
					lng: $(this).attr('data-lng'),
					icon: $(this).attr('data-icon'),
					html: $(this).html()
				};
				mapApp.marker(id);
			});
			this.center();
		},
		marker: function(id) {
			var info = this.markers['m' + id];
			var latlng = new google.maps.LatLng(info.lat, info.lng),
				icon = info.icon, iconfile;
			switch(icon) {
				case 'location': {
					iconfile = (id <= 50) ? 'location-' + id + '.svg' : 'location-0.svg';
					break;
				}
				case 'office': {
					iconfile = 'office.svg';
					break;
				}
				default: {
					iconfile = 'location.svg';
					break;
				}
			}
			var marker = new google.maps.Marker({
				map: this.map,
				position: latlng,
				icon: mapApp.geticon(iconfile)
			});
			marker.setValues({id: id, iconfile: iconfile});
			this.map.markers.push(marker);
			if(info.html) {
				var infowindow = new google.maps.InfoWindow({
					content: info.html
				});
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(mapApp.map, marker);
				});
				google.maps.event.addListener(marker, 'mouseover', function() {
					marker.setZIndex(google.maps.Marker.MAX_ZINDEX + mapApp.z++);
					marker.setIcon(mapApp.geticon('h-' + marker.get('iconfile')));
				});
				google.maps.event.addListener(marker, 'mouseout', function() {
					marker.setIcon(mapApp.geticon(marker.get('iconfile')));
				});
			}
		},
		geticon: function(f) {
			return new google.maps.MarkerImage(mywp.template_url + '/assets/map/' + f, new google.maps.Size(24, 30), new google.maps.Point(0, 0), new google.maps.Point(12, 30));
		},
		mouseeffect: function(p, c) {
			google.maps.event.trigger(this.map.markers[p], c);
		},
		center: function() {
			var bounds = new google.maps.LatLngBounds();
			$.each(this.map.markers, function(i, marker) {
				var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
				bounds.extend( latlng );
			});
			if(this.map.markers.length == 1) {
				this.map.setCenter(bounds.getCenter());
				this.map.setZoom(13);
			} else {
				this.map.fitBounds(bounds);
			}
		}
	};
	tabsApp = {
		tab: function(id, t) {
			$('#tabs-' + id).attr('data-current', t);
		}
	};
	slidesApp = {
		Objects: {},
		init: function() {
			$('.slides').each(function() {
				var set = $(this).attr('data-set');
				var count = Number($(this).attr('data-count'));
				if(count > 1) {
					$(this).addClass('slides-slide');
					slidesApp.Objects['slides' + set] = {
						Set: set,
						Record: count,
						Control: {},
						Wait: 5000,
						Pos: 1,
						Playing: true,
						setup: function() {
							this.delay();
						},
						clicked: function(s) {
							this.stop();
							switch(s) {
								case 'prev' : {
									this.prev();
									break;
								}
								case 'next' : {
									this.next();
									break;
								}
								default : {
									this.show(Number(s));
								}
							}
						},
						delay: function() {
							this.Control = setTimeout('slidesApp.Objects.slides' + this.Set + '.next();', this.Wait);
						},
						prev: function() {
							this.show((this.Pos-1 === 0) ? this.Record : this.Pos-1);
						},
						next: function() {
							this.show((this.Pos !== this.Record) ? this.Pos+1 : 1);
						},
						show: function(p) {
							this.Pos = p;
							$('#slides-' + this.Set).attr('data-current', p);
							if(this.Playing) {
								this.delay();
							}
						},
						stop: function() {
							if(this.Playing) {
								clearTimeout(this.Control);
								this.Playing = false;
							}
						}
					};
					slidesApp.Objects['slides' + set].setup();
				} else {
					$(this).addClass('slides-single');
				}
			});
			$('.slides-holder').on('click', function(e) {
				e.stopPropagation();
			});
			$('.slides-holder').on('mousedown touchstart', function(e) {
				e.stopPropagation();
				var set = $(this).attr('data-set');
				slidesApp.Direction = 'next';
				slidesApp.Holder = $(this);
				slidesApp.Set = set;
				slidesApp.Spot = e.pageX;
				slidesApp.Objects['slides' + set].stop();
				$(window).on('mousemove touchmove', function(e) {
					slidesApp.Move = Math.max(Math.min(e.pageX - slidesApp.Spot, 100), -100);
					var a = Math.abs(slidesApp.Move);
					slidesApp.Holder.css({
						'transform' : 'translateX(' + slidesApp.Move + 'px)',
						'filter' : 'blur(' + a/10 + 'px)'
					});
					slidesApp.Direction = (slidesApp.Move > 0) ? 'prev' : 'next';
				});
				$(window).on('mouseup touchend', function() {
					$(window).off('mouseup touchend mousemove touchmove');
					slidesApp.Holder.css({
						'transform' : 'translateX(0)',
						'filter' : 'blur(0)'
					});
					slidesApp.Objects['slides' + set].clicked(slidesApp.Direction);
				});
			});
			$(window).on('touchcancel', function() {
				$(window).off('mousemove touchmove');
			});
			$('.slides .button').on('click mousedown touchstart', function(e) {
				e.stopPropagation();
			});
			$('.slides button').on('click', function(e) {
				e.stopPropagation();
				var set = $(this).attr('data-set');
				var slide = $(this).attr('data-slide');
				slidesApp.Objects['slides' + set].clicked(slide);
			});
		}
	};
	heroApp = {
		Objects: {},
		setup: function() {
			this.Width = $(document).width();
			if(Modernizr.mq('(min-width: 501px)')) {
				this.Mobile = false;
			} else {
				this.Mobile = true;
			}
		},
		init: function() {
			$('.hero').each(function() {
				var set = $(this).attr('data-set');
				var vars = document['hero_vars_' + set];
				var v1, v2, p, t;
				if(!this.Mobile) {
					v1 = vars['video_mp4'];
					v2 = vars['video_webm'];
					p = vars['placeholder'];
				} else {
					v1 = vars['video_mp4_mobile'];
					v2 = vars['video_webm_mobile'];
					p = vars['placeholder_mobile'];
				}
				t = 	'<video id="hero-player-' + set + '" autoplay webkit-playsinline playsinline muted loop poster="' + p + '" preload="auto">';
				t += 		'<source src="' + v1 + '" type="video/mp4">';
				t += 		'<source src="' + v2 + '" type="video/webm">';
				t += 	'</video>';
				$('#hero-video-' + set).append(t).removeClass('hero-hidevideo');
				$('#hero-image-' + set).remove();
				var $vid = $('#hero-player-' + set);
				var vid = $vid[0];
				vid.load();
				vid.play();
				/*$('#hero-player-' + set).on('canplaythrough', function() {
					$(this).off('canplaythrough');
					$(this).get(0).play();
				});*/
			});
		}
	};
	var MM = {
		Open: false,
		Created: false,
		init: function() {
			$('.mobile-toggle').click(function(e) {
				e.preventDefault();
				if(MM.Open) {
					$('html').removeClass('menu-open');
					$('#menu-mobile-items').removeClass('hide');
				} else {
					if(!MM.Created) {
						MM.create();
					}
					setTimeout(function() {
						$('html').addClass('menu-open');
					}, 0);
				}
				MM.Open = !MM.Open;
			});
		},
		create: function() {
			var n = 0;
			$('#menu-mobile-items li').each(function() {
				var l = $(this).find('ul'),
					a;
				if(l.length) {
					n += 1;
					a = $(this).find('a:first');
					$(this).find('a:first').after('<i id="mm-icon-' + n + '" class="fas fa-bars fam"></i>');
					$('#mm-icon-' + n).attr('data-mmid', n).attr('data-open', 'no').click(function(e) {
						e.preventDefault();
						var o = $(this).attr('data-open');
						var i = $(this).attr('data-mmid');
						if(o === 'no') {
							$(this).attr('data-open', 'yes');
							$('#mm-icon-' + i).removeClass('fa-bars').addClass('fa-chevron-down');
							$('#mm-sub-' + i).addClass('mm-show');
						} else {
							$(this).attr('data-open', 'no');
							$('#mm-icon-' + i).removeClass('fa-chevron-down').addClass('fa-bars');
							$('#mm-sub-' + i).removeClass('mm-show');
						}
					});
					l.attr('id', 'mm-sub-' + n);
				}
			});
			MM.Created = true;
		}
	};
	var MS = {
		Open: false,
		init: function() {
			$('#header-search button').click(function(e) {
				e.preventDefault();
				if(MS.Open) {
					$('html').removeClass('search-open');
					$('#header-search button i').addClass('fa-search').removeClass('fa-times');
				} else {
					$('html').addClass('search-open');
					$('#header-search-input').focus();
					$('#header-search button i').removeClass('fa-search').addClass('fa-times');
				}
				MS.Open =! MS.Open;
			});
		}
	};
	var MC = {
		init: function() {
			$('.do-scroll').slick({
				arrows: true,
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 3,
				slidesToScroll: 3,
				responsive: [
					{
						breakpoint: 921,
						settings: {
							arrows: false,
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},{
						breakpoint: 601,
						settings: {
							arrows: false,
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
			$('.boxes-holder .do-scroll-1').parent().parent().addClass('slider-parent');
			$('.boxes-holder .do-scroll-2').parent().parent().addClass('slider-parent');
			$('.do-scroll-2').slick({
				arrows: true,
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 2,
				slidesToScroll: 2,
				responsive: [
					{
						breakpoint: 601,
						settings: {
							arrows: false,
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
			$('.do-scroll-1').slick({
				arrows: true,
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 1,
				slidesToScroll: 1
			});
		}
	};
	$.fn.addPopups = function(){
		return this.each(function(){
			$(this).click(function(t){
				t.preventDefault();
				var e = Math.min($(window).height(), 800);
				return window.open($(this).attr('href'), 'SitePopup', 'width=600, height=' + e + ', resizable=yes, scrollbars=yes');
			});
		});
	};
	$.fn.addVideoPopup = function(){
		return this.each(function(){
			$(this).fancybox({
				padding: 0,
				openEffect: 'none',
				closeEffect: 'none',
				aspectRatio: true,
				width: 800,
				height: 450,
				helpers : {
					media: {},
					title: {
						type: 'inside'
					},
					overlay : {
						css : {
							'background-color' : 'rgba(0,0,0,0.5)'
						}
					}
				}
			});
		});
	};
	$.fn.addIFrame = function(){
		return this.each(function(){
			$(this).fancybox({
				padding: 0,
				type: 'iframe',
				openEffect: 'none',
				closeEffect: 'none',
				width: 800,
				height: '80%',
				helpers : {
					media: {},
					overlay : {
						css : {
							'background-color' : 'rgba(0,0,0,0.5)'
						}
					}
				}
			});
		});
	};
})(jQuery);