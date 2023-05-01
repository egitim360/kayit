<!doctype html>
<html>

  <?php if (!isset($_GET['page'])) { $page = 'demo-hesap';} else { $page = $_GET['page']; } ?>
  <!-- Burada bir page yapısı var bu page yapısı aşağıdaki switch bölümünden gelen değerlere bakıyor. Eğer hiçbiri yoksa sectionı çağırıyor
section içinde de anasayfa.php var bunun adını değiştirebilirsin -->

  <?php include 'views/layout/head.php'; ?> <!-- CSS dosyaların ve title description alanı bunun içinde -->

  <body>

    <script src="assets/js/jquery-3.4.1.min.js"></script>

    <div id="preloader">
      <!--div data-loader="circle-side"></div-->
      <img src="assets/img/loading.gif" alt="">
    </div><!-- /Preload -->

    <div id="loader_form">
      <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->

    <?php

       switch($page) {

          case 'demo-hesap';
              $_SESSION["default"] = "demo-hesap";
              include_once 'views/pages/demo-hesap.php';
          break;

          case 'hesap-olustur';
              include_once 'views/pages/lms-kayit.php';
          break;

        }

        include_once 'views/layout/footer.php';
    ?>

    <div class="cd-overlay-nav">
      <span></span>
    </div>
    <!-- /cd-overlay-nav -->

    <div class="cd-overlay-content">
      <span></span>
    </div>

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="termsLabel" style="color: #393939">Şartlar ve Koşullar</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <p>Site’de yer alan <strong>ad-soyad, işletme adı, marka, bilgi ve yöntem </strong>gibi tescilli veya tescilsiz tüm fikri mülkiyet hakları site işleteni ve sahibi firmaya veya belirtilen ilgilisine ait olup, ulusal ve uluslararası hukukun koruması altındadır. Site’nin ziyaret edilmesi veya bu Site’deki hizmetlerden yararlanılması söz konusu fikri mülkiyet hakları konusunda hiçbir hak vermez.</p>
            <p>Site’de yer alan <strong>bilgiler hiçbir şekilde çoğaltılamaz, yayınlanamaz, kopyalanamaz, sunulamaz ve/veya aktarılamaz. </strong></p>
            <p>Site’nin bütünü veya bir kısmı diğer bir internet sitesinde izinsiz olarak kullanılamaz. </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn_1" data-dismiss="modal">Kapalı</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- Cookie -->
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



    <script src="assets/js/common_scripts.min.js"></script>
    <script src="assets/js/velocity.min.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/cookie.js" charset="utf-8"></script>
    <!-- Wizard script -->
    <script src="assets/js/survey_func.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/answerdata.js"></script>

  </body>
</html>
