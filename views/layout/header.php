<header>
  <div class="header-row">
    <div class="logo">
      <a href="/">
        <img src="assets/img/logos/egitim360-logo.png" alt="">
      </a>
    </div>

    <div class="menuD desktop">
      <div class="menu-item blue-border">
        <a href="https://www.einstein.com.tr/" target="_blank">[e]instein</a>
      </div>
      <div class="menu-item purple-border">
        <a href="https://www.egitim360.cloud/#egitim360" target="_blank">eğitim360 nedir?</a>
      </div>
      <div class="menu-item cyan-border">
        <a href="https://www.egitim360.cloud/#features" target="_blank">özellikler</a>
      </div>
      <div class="menu-item purple-light-border">
        <a href="https://www.egitim360.cloud/#lmsPart" target="_blank">lms</a>
      </div>
      <div class="menu-item blue-border">
        <a href="http://destek.egitim360.cloud/" target="_blank">destek</a>
      </div>
    </div>
    <div class="contact desktop">
      <a href="javascript:;">
        <span>iletişim</span>
      </a>
    </div>

    <div class="mobile-menu">
      <ul>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

  </div>
</header>

<div class="menuM mobile">
    <nav class="menu-content">
        <div class="menu-item"> <a href="https://www.einstein.com.tr/" target="_blank">[e]instein</a> </div>
        <div class="menu-item"> <a href="https://www.egitim360.cloud/#egitim360" target="_blank">eğitim360 nedir?</a> </div>
        <div class="menu-item"> <a href="https://www.egitim360.cloud/#features" target="_blank">özellikler</a> </div>
        <div class="menu-item"> <a href="https://www.egitim360.cloud/#lmsPart" target="_blank">lms</a> </div>
        <div class="menu-item"> <a href="javascript:;" class="contact">iletişim</a> </div>
    </nav>
    <div class="catalog-link ">
      <a class="mb-big-btn contact" href="javasciprt:;" target="_blank">Ücretsiz Hesap Oluştur</a>
    </div>
</div>


<!-- Form -->
<div class="contact-wrap">
  <div class="contact-close"></div>
  <div class="contact-img">
    <img src="assets/img/backgrounds/contact.png" alt="">
  </div>

  <div class="form-container">
    <form id="_form" class="ui form segment contact-form">
        <p class="form-title">Demo hesap oluşturun</p>
        <div class="two fields">
          <div class="field">
            <img src="assets/img/icons/name.png" alt="">
            <input id="name" placeholder="Ad" name="name" type="text">
          </div>
          <div class="field">
            <img src="assets/img/icons/surname.png" alt="">
            <input id="surname" placeholder="Soyad" name="surname" type="text">
          </div>
        </div>
        <div class="field">
          <img src="assets/img/icons/email.png" alt="">
          <input id="email" name="email" placeholder="Email" type="text">
        </div>
        <div class="two fields">
          <div class="field">
            <img src="assets/img/icons/subject.png" alt="">
            <select id="subject" class="ui fluid search dropdown" name="subject">
              <option value="">Konu Seçiniz</option>
              <option value="basvuru">Başvuru</option>
              <option value="talep">Talep</option>
              <option value="yardim">Yardım</option>
            </select>
          </div>
          <div class="field">
            <img src="assets/img/icons/services.png" alt="">
            <select id="service" class="ui fluid search dropdown" name="services">
              <option value="">Hizmet Seçiniz</option>
              <option value="kuruma-ozel-egitim-talebi">Kuruma Özel E-Eğitim Talebi </option>
              <option value="katalog-egitim-talebi">Katalog E-Eğitim Talebi</option>
              <option value="lms-talebi">Kurumunuz için LMS Talebi</option>
              <option value="is-basvurusu">İş Başvurusu</option>
            </select>
          </div>
        </div>
        <div class="field">
          <img class="message-img" src="assets/img/icons/messages.png" alt="">
          <textarea id="message" rows="3" placeholder="Mesajınız" name="message"></textarea>
        </div>
        <div class="ui primary button clear">Formu Temizle</div>
        <div id="_form_action" class="ui primary submit button">Gönder</div>
        <div class="ui error message"></div>
     </form>

     <div class="cards form-success">
       <div class="success-icon-wrap">
         <img src="assets/img/backgrounds/success.png" alt="">
       </div>
       <div class="success-text-wrap">
         <p class="success-title">Tebrikler</p>
         <p class="success-exp">Mesajını başarılı bir şekilde iletildi.</p>
         <a href="javascript:;" class="close-success"> Tamam </a>
       </div>
     </div>
  </div>

</div>


<script>

var recaptchaVerified = false;
var correctCaptcha = function(response) {
  recaptchaVerified = true;
};
var expiredCaptcha = function() {
  recaptchaVerified = false;
};


  $("#_form_action").click(function() {

    if ($('#_form').form('is valid')) {

      var name = $("#name").val();
      var surname = $("#surname").val();
      var email = $("#email").val();
      var subject = $("#subject").val();
      var service = $("#service").val();
      var message = $("#message").val();

        $.ajax({

            type: "post",
            url: "form.php",

            data: "name=" + name + "&surname=" + surname + "&email=" + email + "&subject=" + subject + "&service=" + service + "&message=" + message,

            success: function(html) {

                if (html == 'true') {

                  $(".form-container").addClass("is-flipped")

                } else if (html == 'false') {

                  $('.negative').transition('fade');
                  $("#_form_action").addClass("disable");
                  setTimeout(function(){
                    $("#_form_action").removeClass("disable");
                    $('.negative').transition('fade');
                  }, 5000);

                } else {

                  $('.info').transition('fade');
                  $("#_form_action").addClass("disable");
                  setTimeout(function(){
                    $("#_form_action").removeClass("disable");
                    $('.info').transition('fade');
                  }, 5000);

                }

                $("#_form_action").attr("disabled", true);
                setTimeout(function() {
                    $("#_form_action").attr("disabled", false)
                }, 3000);

            }
        });

        return false;
     }
     else{
       $('.negative').transition('fade');
       $("#_form_action").addClass("disable");
       setTimeout(function(){
         $("#_form_action").removeClass("disable");
         $('.negative').transition('fade');
       }, 3000);
     }

  });


  </script>
