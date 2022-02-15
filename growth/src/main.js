		$(document).ready(function() {

			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				nav: true,
				dots: false,
				center: true,
				animateOut: 'fadeOutLeft',
				animateIn: 'fadeInRight',
				smartSpeed: 450,
				lazyLoad: true,
				navText: [
					"<i class='ti-angle-left'></i>",
					"<i class='ti-angle-right'></i>"
				],
				autoplay: true,
				autoplayHoverPause: true,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 3
					},
					1000: {
						items: 3
					}
				}
			});
			$('#videoModal').on('hidden.bs.modal', function() {
				var $this = $(this).find('iframe'),
					tempSrc = $this.attr('src');
				$this.attr('src', "");
				$this.attr('src', tempSrc);
			});
		});