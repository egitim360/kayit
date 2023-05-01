
  <body >

    <?php if ($page <> 'giris') { ?>

      <script src=" assets/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
      
      <div class="loading">
        <img src="assets/loading/lms-loading.gif" alt="">
      </div>

    <?php }

      include_once 'views/layout/header.php';

        switch($page) {

          case 'section';
              include_once 'section.php';
          break;

        }

        include_once 'views/layout/footer.php';

    ?>

    <div class="cookie-policy">
      <div class="cookie-holder">
          Bu web sitesinde size daha iyi hizmet sunabilmek için çerez kullanılmaktadır.
          Kullandığımız çerezleri görüntüleyebilmek ve daha fazla bilgi almak için
          <a href="https://www.einstein.com.tr/cerez-politikasi" target="_blank">Gizlilik ve Çerez Politikası</a>
          sayfasını inceleyebilirsiniz.
          <a href="javascript:void(0)" class="close-btn">Anladım</a>
          <a href="javascript:void(0)" class="close-btn2"></a>
      </div>
    </div>





    <script src=" assets/js/TweenMax.min.js" charset="utf-8"></script>
    <script src=" assets/js/jquery.mCustomScrollbar.js" charset="utf-8"></script>
    <script src=" assets/js/semantic.min.js" charset="utf-8"></script>
    <script src=" assets/js/swiper.min.js" charset="utf-8"></script>
    <script src=" assets/js/inview.js" charset="utf-8"></script>
    <script src=" assets/js/lity.min.js" charset="utf-8"></script>
    <script src=" assets/js/cookie.js" charset="utf-8"></script>
    <script src=" assets/js/lms-json.js" charset="utf-8"></script>
    <script src=" assets/js/lms-main.js" charset="utf-8"></script>
  </body>
</html>
