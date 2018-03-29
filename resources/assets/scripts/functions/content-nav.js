import 'jquery';

class ContentNav {

	constructor(container, tags, menu = '#content-nav') {

		this.posY 					= $(document).scrollTop();

		this.container 				= $(container);
		this.containerHeight 		= this.container.height();
		this.containerOffset 		= this.container.position().top;

		
		this.menu 					= $(menu);
		this.menuHeight;
		this.menuOffset;
		this.pairs					= [];
		this.slider;

		this.tags 					= $(tags, this.container);
		this.currentPair			= null;

		//Do stuff

		this.createMenu();
		this.init();

	}

	/*
	 *    GETTERS AND SETTERS
	 */

	changeSliderHeight(int) {
		$(this.slider).height(int);
	}

	getSliderHeight() {
		return $(this.slider).height();
	}

	/*
	 *    CREATE FUNCTIONS
	 */

	createMenu() {
		var ul;

		this.menu.addClass('content-nav');
		this.menu.append('<span class="content-nav__heading">På denna sidan:</span>');
		this.menu.append('<div class="clearfix content-nav__container"><div class="content-nav__slider relative"></div><ul class="content-nav__menu"></ul></div>');
		
		ul = $('.content-nav__menu', this.menu);
		$.each(this.tags, (index, e) => {

			let id = this.urlify(index+' '+$(e).text());
			$(e).attr('id', id);

			ul.append('<li class="content-nav__item"><a href="#'+ $(e).attr('id') +'">'+ $(e).text() +'</a></li>');

			this.pairs.push({
				'tag': $(e),
				'link': $('li', ul).last(),
			});

		});	

		this.slider = $('.content-nav__slider', this.menu);
		this.menuOffset = this.menu.position().top;
		this.menuHeight = this.menu.height();

	}

	urlify(str) {		
		return str.toLowerCase().replace(/[^a-z0-9]+/g, "-").replace(/^-+|-+$/g, "-").replace(/^-+|-+$/g, '');
	}

	/*
	 *    FIRE THINGS UP!
	 */

	setSlider(normal = true) {
		let h,t;

		let offset = this.pairs[0].link.position().top;

		if(!normal) {
			h = 0;
			t = (this.slider.position().top - offset) + (this.slider.height()/2);
		} else {
			let menuitem = this.currentPair.link;
			

			h = menuitem.height();
			t = menuitem.position().top - offset
		}
		
		console.log(h,t);

		this.slider.css({
			'height': h,
			'top': t,
		});	
	}

	onScrollCommon() {
		this.posY = $(document).scrollTop();
	}

	onSetActiveId() {

		var c = this.currentPair;

		if (this.posY > $(this.pairs[0].tag).position().top) {
			for (var i = 0; i < this.pairs.length; i++) {
				var currentTop = this.pairs[i].tag.position().top;
				if( (this.posY - currentTop) > 0 ) {
					this.currentPair = this.pairs[i];
				}
			}
		} else {
			this.currentPair = null;
			this.setSlider(false);
		}

		if(c != this.currentPair && this.currentPair != null) {
			this.setSlider();
		}
		
	}

	onScrollMenu() {
		if(this.posY >= (this.containerOffset + this.containerHeight - this.menuHeight)) {
			this.menu.removeClass('fixed')
				.addClass('relative')
				.css('top', (this.containerHeight - this.menuHeight - (this.menuOffset - this.containerOffset)));
		} else if (this.posY <= this.menuOffset) {
			this.menu.removeClass(['fixed', 'relative']);
		} else {
			this.menu.addClass('fixed')
				.css('top', 0);
		}
	}

	onReSize() {
		this.menu.css('width', this.menu.parent().width());
	}

	init() {

		$(document).on('scroll', () => { 
			this.onScrollCommon();

			var menuRange = (this.posY - this.containerOffset) / this.containerHeight;
			//this.changeSliderHeight($(this.menuitems[0]).height());

			if (menuRange > 0 && menuRange < 1) {
				this.onScrollMenu();
				this.onSetActiveId();
			} else {
				this.menu.removeClass(['fixed', 'relative']);
				this.currentPair = null;
			}
		});

		$(document).on('resize', () => {  
			this.onReSize();
		});

		this.onReSize();
	}

}

export default ContentNav;