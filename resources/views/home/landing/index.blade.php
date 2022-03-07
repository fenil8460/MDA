<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="{{URL::asset('assets/images/favicon.png') }}"/>
<style type="text/css">
img {
    height: auto; 
    max-width: 0%;

}
 /* .sticky {
  position: relative!important;
  top: 0;
  background: none!important;
} */
.hero-text{
  z-index: unset !important;
}
.hero-info.section.section-padding{
  z-index: 2;
}
.hero-items:after {
    position: unset !important;
}
.fa-chevron-right:before, .fa-chevron-left:before {
    font-size: 37px;
}
.slideshow-navigation-button{
  opacity: 1 !important;
}
.downarrow{opacity: 0;}
.hero-content{margin-left: 35px!important;}
</style>
<script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                  ".hero-text").style.visibility = "hidden";
                
            } else {
                document.querySelector(
                  ".hero-text").style.visibility = "visible";
                  document.querySelector(
                  "#registionbutton").style.visibility = "visible";
                   document.querySelector(
                  "#footer").style.visibility = "visible";
                       document.querySelector(
                  ".slide-title").style.visibility = "visible";

            }
        };
    </script>
@extends('home.landing.master')
@include('home.landing.header')
@section('index')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
<script>!function(e){"undefined"==typeof module?this.charming=e:module.exports=e}(function(e,n){"use strict";n=n||{};var t=n.tagName||"span",o=null!=n.classPrefix?n.classPrefix:"char",r=1,a=function(e){for(var n=e.parentNode,a=e.nodeValue,c=a.length,l=-1;++l<c;){var d=document.createElement(t);o&&(d.className=o+r,r++),d.appendChild(document.createTextNode(a[l])),n.insertBefore(d,e)}n.removeChild(e)};return function c(e){for(var n=[].slice.call(e.childNodes),t=n.length,o=-1;++o<t;)c(n[o]);e.nodeType===Node.TEXT_NODE&&a(e)}(e),e});
</script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

    <div id="hero-2" class="section section-2 section-hero hero" data-set="2">
        <div class="hero-text" style="visibility: hidden;">
          <a href="#footer" id="down"  style="text-decoration: none;color: white;"><i class="fa fa-arrow-circle-down" style="left: 92%;z-index: 100;top: 41%;position: absolute;cursor: pointer; font-size: 25px;" aria-hidden="true"></i></a>
            <div class="hero-info section section-padding">

                <div class="hero-content section-content colors-color">
                    <!--<h1 class="hero-header" ><span style="font-size: 18px;
                    background: -webkit-linear-gradient(#20148F, #068C71);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">Masti Dance Academy</span></h1>-->
  <!-- <p class="buttons-group"><a class="button button-dark" href="/classes/">Find
                            a Class</a></p> -->
  <h1 class="hero-header" ><span style="font-size: 3em;
  color: #FFF;">Masti Dance Academy</span></h1>
                    <h2 class="hero-sub-header">Masti, Shortcut to <span style="color:white">Happiness</span></h2>
                    <div class="hero-intro">
                        <!--<p style=" font-size: 20px;  background: -webkit-linear-gradient(#20148F, #068C71);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;"><strong>Masti Dance Academy is proud to be the home of an energetic community of people who
                            love sharing the joy of dance.</p></strong>-->
                            <!-- <span  style=" font-size: 20px;  
  color: #FFF;line-height: 1.2;">Masti Dance Academy is proud to be the home of an energetic community of people who love sharing the joy of dance.</span> -->
                    </div>
                    <p class="buttons-group">
                      <a class="button button-dark" href="/classes/">Find a Class</a>
                      <a class="button button-dark"
                            href="/free-trial-class">Free Trial Class</a></p>     
                </div>
            </div>
        </div>
 </div>
   <div class="hero-items f0">
<section style="opacity: 0.7">

  <div class="swiper-container slideshow">

    <div class="swiper-wrapper">

      <div class="swiper-slide slide">
        <div class="slide-image" style="background-image: url('/assets/images/IMG_20201113_221119_348.webp')"></div>
        <span class="slide-title" ></span>
      </div>

      <div class="swiper-slide slide">
        <div class="slide-image" style="background-image: url('/assets/images/Ages 6 to 8 (4)_slider.webp')"></div>
        <span class="slide-title"></span>
      </div>

      <div class="swiper-slide slide">
        <div class="slide-image" style="background-image: url('assets/images/Ages 14 to 16 (5)_slider.webp')"></div>
        <span class="slide-title"></span>
      </div>


    </div>

    <div class="slideshow-pagination"></div>

    <div class="slideshow-navigation">
      <div class="slideshow-navigation-button prev"><span class="fa fa-chevron-left"></span></div>
      <div class="slideshow-navigation-button next"><span class="fa fa-chevron-right"></span></div>
    </div>

  </div>

</section>


</div>

<script>
    // The Slideshow class.

    document.addEventListener('DOMContentLoaded', function() {
     window.addEventListener('scroll', myFunction);

var navbar = document.getElementById("navbarTogglerDemo01");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= 300) {
    $("#down").addClass("downarrow");
  } else {
    $("#down").removeClass("downarrow");
  }
}
});
class Slideshow {
    constructor(el) {
        
        this.DOM = {el: el};
      
        this.config = {
          slideshow: {
            delay: 30000,
            pagination: {
              duration: 3,
            }
          }
        };
        
        // Set the slideshow
        this.init();
      
    }
    init() {
      
      var self = this;
      
      // Charmed title
      this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
      this.DOM.slideTitle.forEach((slideTitle) => {
        charming(slideTitle);
      });
      
      // Set the slider
      this.slideshow = new Swiper (this.DOM.el, {
          
          loop: true,
          autoplay: {
            delay: this.config.slideshow.delay,
            disableOnInteraction: false,
          },
          speed: 500,
          preloadImages: true,
          updateOnImagesReady: true,
          
          // lazy: true,
          // preloadImages: false,

          pagination: {
            el: '.slideshow-pagination',
            clickable: true,
            bulletClass: 'slideshow-pagination-item',
            bulletActiveClass: 'active',
            clickableClass: 'slideshow-pagination-clickable',
            modifierClass: 'slideshow-pagination-',
            renderBullet: function (index, className) {
              
              var slideIndex = index,
                  number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);
              
              var paginationItem = '<span class="slideshow-pagination-item">';
              paginationItem += '<span class="pagination-number">' + number + '</span>';
              paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
              paginationItem += '</span>';
            
              return paginationItem;
              
            },
          },

          // Navigation arrows
          navigation: {
            nextEl: '.slideshow-navigation-button.next',
            prevEl: '.slideshow-navigation-button.prev',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        
          on: {
            init: function() {
              self.animate('next');
            },
          }
        
        });
      
        // Init/Bind events.
        this.initEvents();
        
    }
    initEvents() {
        
        this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
        //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

        this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));
        
        this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));
            
    }
    animate(direction = 'next') {
      
        // Get the active slide
        this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
        this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
        this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
        this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');
      
        // Reverse if prev  
        this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();
      
        // Get old slide
        this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
        if (this.DOM.oldSlide) {
          // Get parts
          this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
          this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span'); 
          // Animate
          this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
            TweenMax.to(letter, .3, {
              ease: Quart.easeIn,
              delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
              y: '50%',
              opacity: 0
            });
          });
        }
      
        // Animate title
        this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
          TweenMax.to(letter, .6, {
            ease: Back.easeOut,
            delay: pos*.05,
            startAt: {y: '50%', opacity: 0},
            y: '0%',
            opacity: 1
          });
        });
      
        // Animate background
        TweenMax.to(this.DOM.activeSlideImg, 1.5, {
            ease: Expo.easeOut,
            startAt: {x: direction === 'next' ? 200 : -200},
            x: 0,
        });
      
        //this.animatePagination()
    
    }
    animatePagination(swiper, paginationEl) {
            
      // Animate pagination
      this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
      this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
      this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');
      
      console.log(swiper.pagination);
      // console.log(swiper.activeIndex);
      
      // Reset and animate
        TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
        TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
          startAt: {scaleX: 0},
          scaleX: 1,
        });
      
      
    }
    
}

const slideshow = new Slideshow(document.querySelector('.slideshow'));

</script>
<style type="text/css">

  section {
  width: 100%;
  height: 57%;
}

.swiper-container {
  width: 100%;
  height: 100%;
}

.slide {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  text-align: center;
  font-size: 18px;
  background: #fff;
  overflow: hidden;
}
.slide-image {
  position: absolute;
  top: -200px;
  left: -200px;
  width: calc(100% + 400px);
  height: calc(100% + 400px);
  background-position: 0% 0%;
  background-size: cover;
}
.slide-title {
  font-size: 4rem;
  line-height: 1;
  max-width: 40%;
  margin-top: 350px;
  white-space: normal;
  word-break: break-word;
  color: #FFF;
  z-index: 100;
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase;
  font-weight: normal;
}
@media (min-width: 45em) {
  .slide-title {
    font-size: 7vw;
    max-width: none;
  }
}
.slide-title span {
  white-space: pre;
  display: inline-block;
  opacity: 0;
}

.slideshow {
  position: relative;
}
.slideshow-pagination {
  opacity: 0;
  position: absolute;
  bottom: 5rem;
  left: 0;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  transition: .3s opacity;
  z-index: 10;
}
.slideshow-pagination-item {
  display: flex;
  align-items: center;
}
.slideshow-pagination-item .pagination-number {
  opacity: 0.5;
}
.slideshow-pagination-item:hover, .slideshow-pagination-item:focus {
  cursor: pointer;
}
.slideshow-pagination-item:last-of-type .pagination-separator {
  width: 0;
}
.slideshow-pagination-item.active .pagination-number {
  opacity: 1;
}
.slideshow-pagination-item.active .pagination-separator {
  width: 10vw;
}
.slideshow-navigation-button {
  opacity: 0;
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 5rem;
  z-index: 1000;
  transition: all .3s ease;
  color: #FFF;
}
.slideshow-navigation-button:hover, .slideshow-navigation-button:focus {
  cursor: pointer;
  background: rgba(0, 0, 0, 0.5);
}
.slideshow-navigation-button.prev {
  left: 0;
}
.slideshow-navigation-button.next {
  right: 0;
}

.pagination-number {
  font-size: 1.8rem;
  color: #FFF;
  font-family: 'Oswald', sans-serif;
  padding: 0 0.5rem;
}

.pagination-separator {
  display: none;
  position: relative;
  width: 40px;
  height: 2px;
  background: rgba(255, 255, 255, 0.25);
  transition: all .3s ease;
}
@media (min-width: 45em) {
  .pagination-separator {
    display: block;
  }
}
.pagination-separator-loader {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #FFFFFF;
  transform-origin: 0 0;
}
  .hero-items{top:-45px!important;}
  .hero-text{margin-top: 224px;}
  @media screen and  (max-width: 1000px) {
    .slide-image {
  top: 0px;
  left: -132px;
  width: calc(100% + 139px);
  height: calc(100% + 0px);
 
}

  }
    @media all and (device-width: 360px) 
    {.slide-image {  left: -33px;} }

    @media all and (device-width: 411px) 
    {.slide-image {  left: -74px;} }
      @media all and (device-width: 414px) 
    {.slide-image {  left: -56px;} }
    @media all and (device-width: 768px) 
    {.slide-image {  left: -22px;} }
     @media all and (device-width: 540px) 
    {.slide-image {  left: -22px;} 
}</style>
@include('home.landing.footer')