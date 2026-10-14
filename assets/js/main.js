/**
* Main JavaScript for Burhani Engineering Technology
*/

(function () {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate Fancybox
   */
  if (typeof window.Fancybox !== 'undefined') {
    window.Fancybox.bind(".glightbox", {
      groupAttr: "data-gallery",
      animated: true,
      dragToClose: false,
      showClass: "fancybox-fadeIn",
      hideClass: "fancybox-fadeOut",
      hideScrollbar: true,
      Images: {
        zoom: true,
      },
      Thumbs: {
        type: "classic",
      },
      Toolbar: {
        display: {
          left: [],
          middle: ["infobar"],
          right: ["zoom", "slideShow", "fullScreen", "close"],
        },
      },
    });
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function (swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function (e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

  /**
   * Lite YouTube Embeds Loader
   */
  document.querySelectorAll('.youtube-player').forEach(player => {
    player.addEventListener('click', function () {
      const videoId = this.getAttribute('data-video-id');
      const videoTitle = this.getAttribute('data-video-title') || 'YouTube Video';
      if (!videoId) return;

      const iframe = document.createElement('iframe');
      iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1`);
      iframe.setAttribute('title', videoTitle);
      iframe.setAttribute('frameborder', '0');
      iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
      iframe.setAttribute('allowfullscreen', 'true');
      iframe.className = 'w-100 h-100';

      this.innerHTML = '';
      this.appendChild(iframe);
    });
  });

  /**
   * Product Gallery Thumbnail Click Logic
   */
  document.querySelectorAll('.thumbnail-gallery a').forEach(thumbnailLink => {
    thumbnailLink.addEventListener('click', function (e) {
      e.preventDefault(); // Prevent opening lightbox
      
      const newImageSrc = this.getAttribute('href');
      
      // Find the parent gallery container
      const galleryContainer = this.closest('.product-gallery');
      if (galleryContainer) {
        const mainImageAnchor = galleryContainer.querySelector('.main-image a');
        const mainImageImg = galleryContainer.querySelector('.main-image img');
        
        if (mainImageAnchor && mainImageImg) {
          mainImageAnchor.setAttribute('href', newImageSrc);
          mainImageImg.setAttribute('src', newImageSrc);
          
          const allThumbnails = Array.from(galleryContainer.querySelectorAll('.thumbnail-gallery a'));
          const index = allThumbnails.indexOf(this);
          mainImageAnchor.setAttribute('data-index', index);
        }
      }
    });
  });

  document.querySelectorAll('.main-image a').forEach(mainImageLink => {
    mainImageLink.addEventListener('click', function(e) {
      // If it has glightbox class, fancybox already handles it automatically, but we are removing it 
      // from HTML so it doesn't duplicate the image. We handle the opening manually.
      if (!this.classList.contains('glightbox') && typeof window.Fancybox !== 'undefined') {
        e.preventDefault();
        const index = parseInt(this.getAttribute('data-index')) || 0;
        
        const galleryContainer = this.closest('.product-gallery');
        const thumbs = galleryContainer.querySelectorAll('.thumbnail-gallery a.glightbox');
        
        const items = Array.from(thumbs).map(thumb => ({
          src: thumb.getAttribute('href'),
          type: 'image'
        }));
        
        if (items.length > 0) {
          window.Fancybox.show(items, {
            startIndex: index,
            groupAttr: "data-gallery",
            animated: true,
            dragToClose: false,
            showClass: "fancybox-fadeIn",
            hideClass: "fancybox-fadeOut",
            hideScrollbar: true,
            Images: {
              zoom: true,
            },
            Thumbs: {
              type: "classic",
            },
            Toolbar: {
              display: {
                left: [],
                middle: ["infobar"],
                right: ["zoom", "slideShow", "fullScreen", "close"],
              },
            },
          });
        }
      }
    });
  });

})();