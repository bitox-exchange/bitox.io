(function($) {

$(document).ready(function () {

  /** Global config */
  var config = {
    window: $(window),
    document: $(document),
    body: $('body'),
    siteHeader: $('#header'),
    siteMain: $('#main'),
    siteFooter: $('#footer'),
    siteOverlay: $('#site-overlay'),
    gridBreakpoints: {
      xs: 0,
      sm: 576,
      md: 768,
      lg: 992,
      xl: 1200
    }
  };


  /**
   * Header
   */

  var Header = {
    isHeaderScrolledClass: 'body-header-fixed--scrolled',
    init: function () {
      var self = this;

      config.document.on('scroll', function () {
        // add helper class to body
        // (used for header fixed bg, etc)
        config.document.scrollTop() > 0 ?
          config.body.addClass(self.isHeaderScrolledClass) : config.body.removeClass(self.isHeaderScrolledClass);
      });
    }
  };

  Header.init();

  /**
   * end Header
   */


  /**
   * Primary Menu
   */

  var PrimaryMenu = {
    menu: $('#primary-nav'),
    btnOpen: $('#hamburger'),
    bodyClassOpen: 'primary-nav-open', // added to body for overflow, etc
    init: function () {
      var self = this;

      this.onResize();

      this.btnOpen.on('click', function () {
        !self.isOpen() ? self.open() : self.close();
      });

      this.scrollToSection();
    },
    onResize: function () {
      var self = this;

      config.window.on('resize', function () {
        if (
          (window.innerWidth > config.gridBreakpoints.lg) &&
          self.isOpen()
        ) {
          self.close();
        }
      });
    },
    open: function () {
      $('body').addClass(this.bodyClassOpen);
    },
    close: function () {
      $('body').removeClass(this.bodyClassOpen);
    },
    isOpen: function () {
      return $('body').hasClass(this.bodyClassOpen);
    },
    scrollToSection: function () {
      var self = this;

      self.menu.find('a').on('click', function (e) {
        e.preventDefault();

        var section = $($(this).attr('href'));

        if (section.length) {
          $('html, body').animate({
            scrollTop: section.offset().top - config.siteHeader.outerHeight()
          }, 800);
        }
      });
    }
  };

  PrimaryMenu.init();

  /**
   * end Primary Menu
   */


  /**
   * Language Switcher
   */

  var LanguageSwitcher = {
    langSwitcher: $('#lang-switcher'),
    langList: $('#lang-switcher-list'),
    btn: $('#lang-switcher-btn'),
    classOpen: 'active',
    init: function () {
      var self = this;

      this.btn.on('click', function () {
        !self.isOpen() ? self.open() : self.close();
      });
    },
    open: function () {
      this.langSwitcher.addClass(this.classOpen);
    },
    close: function () {
      this.langSwitcher.removeClass(this.classOpen);
    },
    isOpen: function () {
      return this.langSwitcher.hasClass(this.classOpen);
    }
  };

  LanguageSwitcher.init();

  /**
   * end Language Switcher
   */


  /**
   * Carousels
    */

  var carouselTestimonialsItem = $('.carousel-testimonials__item'),
      carouselTestimonialsSlidesToShow = 1,
      carouselTestimonialsSlidesToShowSm = 1;

  if ((carouselTestimonialsItem.length > 3) && (carouselTestimonialsItem.length < 6)) {
    carouselTestimonialsSlidesToShow = 3;
    carouselTestimonialsSlidesToShowSm = 3;
  }
  if (carouselTestimonialsItem.length >= 6) {
    carouselTestimonialsSlidesToShow = 5;
    carouselTestimonialsSlidesToShowSm = 3;
  }

  $('#carousel-testimonials').slick({
    dots: false,
    arrows: true,
    centerMode: carouselTestimonialsItem.length > 3,
    centerPadding: 0,
    slidesToShow: carouselTestimonialsSlidesToShow,
    asNavFor: '#carousel-testimonials-comment',
    responsive: [
      {
        breakpoint: config.gridBreakpoints.sm,
        settings: {
          slidesToShow: carouselTestimonialsSlidesToShowSm
        }
      }
    ]
  });

  $('#carousel-testimonials-comment').slick({
    dots: false,
    arrows: false,
    slidesToShow: 1,
    asNavFor: '#carousel-testimonials'
  });

  $('#carousel-partners').slick({
    dots: true,
    arrows: false,
    slidesToShow: 4,
    slideToScroll: 2,
    responsive: [
      {
        breakpoint: config.gridBreakpoints.sm,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: config.gridBreakpoints.md,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });

  /**
   * end Carousels
   */

});// end document.ready

})(jQuery);
