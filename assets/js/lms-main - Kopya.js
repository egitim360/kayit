V = {

  randomNumber: [],
  key: 0,
  mobileKey:0,
  msKey: 0,
  x: 1.5,
  transX: 25,
  transX2: 50,
  transX3: -60,
  transXLast: -10,
  videoIdList: [],
  barcode: null,

  init: function() {

    V.Loading.init();
    V.mobileCheck.init();
    V.mobileMenu();
    V.sliderFunc.init();
    V.lessonEvent.init();

    V.videoSoundEvent();
    V.headerEvents.init();
    V.videoTabChange();

    setTimeout(function(){
      V.linkCheck();
    },3000);

  },

  mobileMenu: function(){
    $(".mobile-menu-trigger").click(function(){
      $("body").toggleClass("stop-scrolling");

      $(this).toggleClass("active-trigger");
      $(".mobile-menu").toggleClass("active-menu");
    });
  },

  mobileCheck: {
    init: function() {
      isMobile = {
        Android: function() {
          return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
          return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
          return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
          return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
          return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
        },
        any: function() {
          return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
      };
    },
  },

  Loading: {
    init: function() {
      V.Loading.bodyAnim();
      V.Loading.loadingAnim();
    },
    bodyAnim: function() {
      TweenMax.to($('body'), 0.6, {
        opacity: 1,
        ease: Power1.easeIn,
      });
    },
    loadingAnim: function() {
      if ($(".loading").length > 0) {
        $("body").css({
          "overflow": "hidden"
        });
      }

      setTimeout(function() {
        TweenMax.to($(".loading"), 1, {
          opacity: 0,
          ease: Power1.easeIn,
          onComplete: function() {
            //$(".loading img").removeAttr("src");
            $(".loading").css({
              "display": "none"
            });
            $("body").css({
              "overflow": "auto"
            });
          }
        });

      }, 2000);
    }
  },

  sliderFunc: {
    init: function() {
      V.sliderFunc.detectActiveSlider();
      V.sliderFunc.mainSlider();
      V.sliderFunc.detailSlider();
    },

    /*Detect Active Slider*/
    detectActiveSlider: function() {
      var activeFind = 0;
      $(".main-slider.slider-wrapper, .tallRowContainer").on({
        mouseover: function() {
          if (activeFind == 0) {
            $(".main-slider.slider-wrapper, .tallRowContainer").parent().removeClass("activeSliderTab");
            $(this).parent().addClass("activeSliderTab");
            activeFind = 1;
          }
        },
        mouseleave: function() {
          activeFind = 0;
        }
      });
    },

    mainSlider: function() {
      var swiperMain = new Swiper('.main-slider', {
        slidesPerView: 5,
        center: true,
        spaceBetween: 10,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        on: {
          slideChange: function() {
            console.log('slide changed');
            $(".activeSliderTab .main-slider .item").removeClass("activeDetectLastItem").removeClass("firstItem").removeClass("lastItem");
            setTimeout(function() {
              $(".activeSliderTab .main-slider .swiper-slide-active").nextAll(':lt(3)').addClass("activeDetectLastItem");
              $(".activeSliderTab .main-slider .swiper-slide-active:first").addClass("firstItem");
              $(".activeSliderTab .main-slider .activeDetectLastItem:last").next().addClass("lastItem");
            }, 200);
          }
        },
        breakpoints: {
          1280: {
            slidesPerView: 4,
          },
          800: {
            slidesPerView: 3,
          },
          450: {
            slidesPerView: 2
          }
        }
      });

      var totalSlider = $(".lolomoRow").length;
      for (var i = 0; i < totalSlider; i++) {
        $(".lolomoRow:eq(" + i + ") .main-slider.slider-wrapper .swiper-slide-active").nextAll(':lt(3)').addClass("activeDetectLastItem");
        $(".lolomoRow:eq(" + i + ") .main-slider.slider-wrapper .swiper-slide-active:first").addClass("firstItem");
        $(".lolomoRow:eq(" + i + ") .main-slider.slider-wrapper .activeDetectLastItem:last").next().addClass("lastItem");
      }
    },


    detailSlider: function() {
      var swiper = new Swiper('.detail-slider', {
        slidesPerView: 5,
        center: true,
        spaceBetween: 10,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          800: {
            center: false,
            slidesPerView: 4,
          }
        }

      });
    },

  },

  lessonEvent: {
    init: function() {
      if($(window).width() > 1080){
        if($(".detailActive").length <= 0){
          V.lessonEvent.lessonOnEvent();
        }
      }
      V.lessonEvent.lessonClickEvent();
    },

    lessonOnEvent:function(){
      var lastMouseMove;
      $(".activeSliderTab .item").on({
        mouseover:function(){
          /*Scale Item Animate*/
          $(this).addClass("activeItem");

          if ($(".detailActive").length <= 0 && $(".showDetailTab").length <=0) {
            $(this).addClass("scaleOn");
            $(this).find(".video-overlay").css({"opacity" : "1"});
            if ($(this).hasClass("firstItem") ) {
              $(this).nextAll(':lt(6)').addClass("firstSlideNext");
              $(this).prevAll(':lt(6)').addClass("firstSlidePrev");
            } else if ($(this).hasClass("lastItem")) {
              $(this).nextAll(':lt(6)').addClass("lastSlideNext");
              $(this).prevAll(':lt(6)').addClass("lastSlidePrev");
            } else {
              $(this).nextAll(':lt(6)').addClass("slideRightGlobal");
              $(this).prevAll(':lt(6)').addClass("slideLeftGlobal");
            }
          }
          else {
            $(".item").removeClass("detailActive");
            $(this).addClass("detailActive");
            $(".item").not(".detailActive").css({
              "opacity": "0.7"
            });
          }
        },
        mousemove: function() {
          if ($(this).hasClass("activeItem") && $(".activeItem .video-player video").length < 1 && V.key == 0) {
            clearTimeout(lastMouseMove);
            lastMouseMove = setTimeout(function() {
              $(".activeItem .video-player").append('<video> </video>');
              var videoSrc = $(".activeItem").attr("id");
              $(".activeItem .video-player video").attr("src", "egitimler/" + videoSrc + "/video/slider-video.mp4");

              $(".activeItem .video-poster").css({
                "opacity": "0"
              });

              var promise = document.querySelector('video').play();

              if (promise !== undefined || promise !== null) {
                  promise.then(_ => {
                      // Autoplay started!
                      $(".activeItem .video-player video").get(0).play();
                  }).catch(error => {
                      // Autoplay was prevented.
                      // Show a "Play" button so that user can start playback.
                      console.log("Video Oynatma Hatası Video Yüklenemedi.")
                      $(".activeItem .video-poster").css({
                        "opacity": "1"
                      });
                      return;
                  });
              }
            }, 1300);

          } // Detail Tab Disable
        },
        mouseleave: function() {
            $(".activeSliderTab .item")
              .removeClass("scaleOn")
              .removeClass("activeItem")
              .removeClass("firstSlideNext")
              .removeClass("firstSlidePrev")
              .removeClass("lastSlideNext")
              .removeClass("lastSlidePrev")
              .removeClass("slideRightGlobal")
              .removeClass("slideLeftGlobal");

              $(".video-poster").css({
                "opacity": "1"
              });
              $(".video-overlay").css({
                "opacity": "0"
              });
              $(".item video").remove();
          }
      });

    },

    lessonClickEvent:function(){
      $(".activeSliderTab .item").on({
        click: function() {
          $(".item")
            .removeClass("scaleOn")
            .removeClass("activeItem")
            .removeClass("firstSlideNext")
            .removeClass("firstSlidePrev")
            .removeClass("lastSlideNext")
            .removeClass("lastSlidePrev")
            .removeClass("slideRightGlobal")
            .removeClass("slideLeftGlobal")
            .removeClass("detailActive");
          $(".video-detail-tab .video-player video").remove();
          $(".video-detail-tab").removeClass("showDetailTab"); // Reset Detail Tab
          $(".video-detail-tab").removeClass("showDetailTab2"); // Reset Detail Tab



          $(this).addClass("activeItem");
          $(this).addClass("detailActive");

          setTimeout(function(){
            $(".video-poster").css({
              "opacity": "1"
            });
            $(".video-overlay").css({
              "opacity": "0"
            });

            $(".item").not(".detailActive").css({
              "opacity": "0.7"
            });
          },500);

          // Detail Tab Events
          setTimeout(function(){
            V.detailTabEvents.showFunc();
            V.detailTabEvents.closeFunc();
            V.detailTabEvents.removeVideoTag();
            V.detailTabEvents.menuFunc();
            V.detailTabEvents.videoFunc();
          },300);

          // Show Same Tab
          $(".tabs").removeClass("show");
          $(".overview").addClass("show");
          $(".menu li").removeClass("current");
          $(".menu li.Overview").addClass("current");
          $(".video-detail-tab .background").removeClass("dim");

          /* Remove All Video */
          setTimeout(function(){
            $(".item video").remove();
          },500);

          V.key = 1;
        }
      });
    }
  },

  videoSoundEvent: function() {

    $(".sound-control").click(function() {
      if ($(".einstein-player video").prop('muted')) {
        $(".einstein-player video").prop('muted', false);
        $("#audio-on").css({
          "opacity": "1"
        });
        $("#audio-off").css({
          "opacity": "0"
        });
      } else {
        $(".einstein-player video").prop('muted', true);
        $("#audio-off").css({
          "opacity": "1"
        });
        $("#audio-on").css({
          "opacity": "0"
        });
      }
    });
  },

  detailTabEvents: {

    removeVideoTag: function() {
      var key = 0;
      $(".showDetailTab").on({
        mouseover: function() {
          if (key <= 1) {
            $(".item video").remove();
            $(".video-poster").css({
              "opacity": "1"
            });
            key++;
          }
        },
        mouseleave: function() {
          key = 0;
        }
      });
    },

    showFunc: function() {
      /* Active Detail Tab*/
      var activeBoxHeight = $(".detailActive").outerHeight() * 2 - 120;
      $(".activeSliderTab .video-detail-tab").addClass("showDetailTab");
      $('html,body').animate({
        scrollTop: $('.activeSliderTab .showDetailTab').offset().top - activeBoxHeight
      }, 800, function() {
        $('.activeSliderTab .showDetailTab').focus();
      });

    },

    closeFunc: function() {
      /*Close Detail Tab*/
      $(".close-button").click(function() {
        $(".item, .item-tall").removeClass("detailActive").css({
          "opacity": "1"
        });

        $(".showDetailTab .img-cover").css({
          "opacity": "1"
        });

        // Close Start
        $(".video-detail-tab").addClass("showDetailTab2");
        setTimeout(function() {
          $(".video-detail-tab").removeClass("showDetailTab").removeClass("showDetailTab2");
        }, 800);
        // Close End

        $('.row-header-title').focus();

        /*If Tall Detail Active*/
        $(".boxart-image-in-padded-container").css({
          "opacity": "1"
        });

        // Change Tall Style
        $(".boxart-size-1x2").css({
          "padding": "200% 0 0 0"
        });

        $(".tallRowContainer, .tallRowContainer .video-poster").css({
          "min-height": "auto"
        });

        if($(window).width() > 1280){
          $(".item-tall").css({
            "height": "29vw"
          });
        }
        else{
          $(".item-tall").css({
            "height": "58vw"
          });
        }

        $(".boxart-size-1x2").css({
          "opacity": "1",
          "visibility": "visible"
        });
        //

        //-Remove Detail Videos
        setTimeout(function(){
          $(".video-detail-tab video").remove();
        },200);


        V.key = 0;

      }); // Close Button End


    },

    menuFunc: function() {
      $(".tabs").removeClass("show");
      $(".overview").addClass("show");
      $(".menu li").removeClass("current");
      $(".menu li.Overview").addClass("current");
      $(".video-detail-tab .background").removeClass("dim");

      $(".showDetailTab .menu li").click(function() {
        $(".showDetailTab .menu li").removeClass("current");
        $(this).addClass("current");

        var tab_id = $(this).attr("data-tab-id");
        $('.tabs').removeClass("show");

        setTimeout(function() {
          $(".showDetailTab" + " " + "#" + tab_id).addClass("show");
        }, 400);

        /*Background Opacity Tab Change*/
        if (!$(this).is(".Overview")) {
          $(".video-detail-tab .background").addClass("dim");
          $(".detail-content .title .logo").addClass("small-logo");
          $(".showDetailTab video").get(0).pause();
        } else {
          $(" .video-detail-tab .background").removeClass("dim");
          $(" .detail-content .title .logo").removeClass("small-logo");
          setTimeout(function() {
            $(".showDetailTab video").get(0).play();
          }, 600);
        }

      });

      /*Custom Scrollbar*/
      if($(window).width() > 1080 ){
        $(".detail-text").mCustomScrollbar({
          theme: "minimal"
        });
      }

    },

    videoFunc: function() {
      var key = 0;
      var lastMouseMove;

      if($(window).width() > 1080){
        $(".showDetailTab .ei-play-hitzone").on({
          mouseover: function() {
            if (key == 0) {
              if ($(".showDetailTab video").length < 1) {
                clearTimeout(lastMouseMove);
                lastMouseMove = setTimeout(function() {

                  if ($(".showDetailTab .video-player video").length <= 0) {
                    var videoSrcDetail = $(".showDetailTab .video-player").attr("videoName");
                    $(".showDetailTab .video-player").append('<video> </video>');
                    $(".showDetailTab .video-player video").attr("src", "egitimler/" + videoSrcDetail + "/video/detail-video.mp4");
                  }

                  if ($(".showDetailTab video").attr("src") != undefined) {
                    $(".showDetailTab .img-cover").css({
                      "opacity": "0"
                    }); // Hide Cover Img

                    $(".showDetailTab .video-player video").get(0).play(); //Play Video

                    $('.showDetailTab video').get(0).addEventListener('ended', myHandler, false);
                  } else {
                    $(".showDetailTab .img-cover").css({
                      "opacity": "1"
                    });
                  }

                }, 4000);
              }
            }
          },
          mouseleave: function() {}
        });
      }

      $(".play-video-button").click(function(){
        $('.ei-video-player video').each(function() {
            $(this).get(0).pause();
        });
        $(".video-detail-background .img-cover").css({
          "opacity":"1"
        })
      });


      function myHandler(e) {
        // What you want to do after the event
        $(".activeSliderTab .showDetailTab .img-cover").css({
          "opacity": "1"
        }); // Check Video Done

        $(".showDetailTab .video-player video").remove();
      }
    }
  },

  headerEvents: {
    init: function() {
      V.headerEvents.headerFixed();
    },

    headerFixed: function() {
      if ($(window).scrollTop() > 0) {
        $(".pinning-header-container").css({
          "position": "fixed",
          "background": "#353a3e",
          "top": "0"
        });
      }

      $(window).scroll(function(event) {
        if ($(window).scrollTop() > 0) {
          $(".pinning-header-container").css({
            "position": "fixed",
            "background": "#353a3e",
            "top": "0"
          });
        }
        if ($(window).scrollTop() == 0) {
          $(".pinning-header-container").css({
            "position": "relative",
            "background": "transparent",
          });
        }

      });

    },
  },

  // Another Page Link Func
  linkCheck:function(){
    var clickCode;
    console.log(J.totalData)
    for(var i = 0; i < J.totalData; i++){
      if (window.location.href.indexOf('?' + J.Barcode[i] + '=') > 0) {
          //alert("The URL contains ?reklamlarimiz");
          clickCode = J.Barcode[i];

            $(".lolomoRow").removeClass("activeSliderTab");
            $('#' + clickCode).parents(".lolomoRow").addClass("activeSliderTab");
            $('#' + clickCode).addClass("activeItem");// Reset Active Elements and Set again

            J.currentSlide = clickCode;// Get Active Item Id
            J.arrayNumber = jQuery.inArray( J.currentSlide, J.Barcode)// Find Position in array
            $('#' + clickCode).trigger('click');
        }
      }
  },

  videoTabChange:function(){
    $(window).blur(function(e) {
      $('.video-player video').each(function() {
          $(this).get(0).pause();
      });

      $('.einstein-player video').each(function() {
          $(this).get(0).pause();
      });
    });

    /*$(window).focus(function(e) {
      $('.video-player video').each(function() {
          $(this).get(0).play();
      });

      $('.einstein-player video').each(function() {
          $(this).get(0).play();
      });
    });*/
  },


};

$(document).ready(function() {
  V.init();
});
