<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-lg-6 content-left">
            <a class="navbar-brand" href="/">
              <img class="logo" src="assets/img/egitim360-logo.png" alt="">
            </a>
         </div>
        <!-- /content-left -->
        <div class="col-lg-6 content-right" id="start">
            <div id="wizard_container">
                <div id="top-wizard">
                  <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="POST">
                    <input id="website" name="website" type="text" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard">
                      <h2 class="main_question"><strong></strong>eğitim360 demo başvuru formu</h2>
                        <!-- /step-1 -->
                        <div class="step">
                            <h5 class="main_question"><strong></strong></h5>
                            <div class="form-group">
                              <p class="input-title"> Müşteri/Cari Kod</p>
                              <input type="text" name="current-code" class="form-control required" placeholder="Müşteri/Cari Kod" onchange="getVals(this, 'current-code');">
                            </div>
                            <div class="form-group">
                              <p class="input-title"> Firma Adı</p>
                              <input type="text" name="company-name" class="form-control required" placeholder="Firma Adı">
                            </div>
                            <div class="form-group">
                              <p class="input-title"> Kurumsal Unvan</p>
                                <input type="text" name="title" class="form-control required" placeholder="Kurumsal Unvan">
                            </div>
                            <div class="form-group">
                              <p class="input-title"> Sicil No</p>
                              <input type="text" name="registration-number" class="form-control required" placeholder="Sicil No">
                            </div>
                        </div>
                        <!-- /step-2 -->
                        <div class="step">
                            <h5 class="main_question"><strong></strong></h5>
                            <div class="form-group">
                              <p class="input-title"> Ülke</p>
                              <select id="country" name="country" class="form-control">
                                  <!--<option value="Afghanistan">Afghanistan</option>
                                  <option value="Åland Islands">Åland Islands</option>
                                  <option value="Albania">Albania</option>
                                  <option value="Algeria">Algeria</option>
                                  <option value="American Samoa">American Samoa</option>
                                  <option value="Andorra">Andorra</option>
                                  <option value="Angola">Angola</option>
                                  <option value="Anguilla">Anguilla</option>
                                  <option value="Antarctica">Antarctica</option>
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Armenia">Armenia</option>
                                  <option value="Aruba">Aruba</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Austria">Austria</option>
                                  <option value="Azerbaijan">Azerbaijan</option>
                                  <option value="Bahamas">Bahamas</option>
                                  <option value="Bahrain">Bahrain</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Barbados">Barbados</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Belize">Belize</option>
                                  <option value="Benin">Benin</option>
                                  <option value="Bermuda">Bermuda</option>
                                  <option value="Bhutan">Bhutan</option>
                                  <option value="Bolivia">Bolivia</option>
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                  <option value="Botswana">Botswana</option>
                                  <option value="Bouvet Island">Bouvet Island</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                                  <option value="Bulgaria">Bulgaria</option>
                                  <option value="Burkina Faso">Burkina Faso</option>
                                  <option value="Burundi">Burundi</option>
                                  <option value="Cambodia">Cambodia</option>
                                  <option value="Cameroon">Cameroon</option>
                                  <option value="Canada">Canada</option>
                                  <option value="Cape Verde">Cape Verde</option>
                                  <option value="Cayman Islands">Cayman Islands</option>
                                  <option value="Central African Republic">Central African Republic</option>
                                  <option value="Chad">Chad</option>
                                  <option value="Chile">Chile</option>
                                  <option value="China">China</option>
                                  <option value="Christmas Island">Christmas Island</option>
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                  <option value="Colombia">Colombia</option>
                                  <option value="Comoros">Comoros</option>
                                  <option value="Congo">Congo</option>
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                  <option value="Cook Islands">Cook Islands</option>
                                  <option value="Costa Rica">Costa Rica</option>
                                  <option value="Cote D'ivoire">Cote D'ivoire</option>
                                  <option value="Croatia">Croatia</option>
                                  <option value="Cuba">Cuba</option>
                                  <option value="Cyprus">Cyprus</option>
                                  <option value="Czech Republic">Czech Republic</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Djibouti">Djibouti</option>
                                  <option value="Dominica">Dominica</option>
                                  <option value="Dominican Republic">Dominican Republic</option>
                                  <option value="Ecuador">Ecuador</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="El Salvador">El Salvador</option>
                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                  <option value="Eritrea">Eritrea</option>
                                  <option value="Estonia">Estonia</option>
                                  <option value="Ethiopia">Ethiopia</option>
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                  <option value="Faroe Islands">Faroe Islands</option>
                                  <option value="Fiji">Fiji</option>
                                  <option value="Finland">Finland</option>
                                  <option value="France">France</option>
                                  <option value="French Guiana">French Guiana</option>
                                  <option value="French Polynesia">French Polynesia</option>
                                  <option value="French Southern Territories">French Southern Territories</option>
                                  <option value="Gabon">Gabon</option>
                                  <option value="Gambia">Gambia</option>
                                  <option value="Georgia">Georgia</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Gibraltar">Gibraltar</option>
                                  <option value="Greece">Greece</option>
                                  <option value="Greenland">Greenland</option>
                                  <option value="Grenada">Grenada</option>
                                  <option value="Guadeloupe">Guadeloupe</option>
                                  <option value="Guam">Guam</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Guernsey">Guernsey</option>
                                  <option value="Guinea">Guinea</option>
                                  <option value="Guinea-bissau">Guinea-bissau</option>
                                  <option value="Guyana">Guyana</option>
                                  <option value="Haiti">Haiti</option>
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Hong Kong">Hong Kong</option>
                                  <option value="Hungary">Hungary</option>
                                  <option value="Iceland">Iceland</option>
                                  <option value="India">India</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                  <option value="Iraq">Iraq</option>
                                  <option value="Ireland">Ireland</option>
                                  <option value="Isle of Man">Isle of Man</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Italy">Italy</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Japan">Japan</option>
                                  <option value="Jersey">Jersey</option>
                                  <option value="Jordan">Jordan</option>
                                  <option value="Kazakhstan">Kazakhstan</option>
                                  <option value="Kenya">Kenya</option>
                                  <option value="Kiribati">Kiribati</option>
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                  <option value="Korea, Republic of">Korea, Republic of</option>
                                  <option value="Kuwait">Kuwait</option>
                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                  <option value="Latvia">Latvia</option>
                                  <option value="Lebanon">Lebanon</option>
                                  <option value="Lesotho">Lesotho</option>
                                  <option value="Liberia">Liberia</option>
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                  <option value="Liechtenstein">Liechtenstein</option>
                                  <option value="Lithuania">Lithuania</option>
                                  <option value="Luxembourg">Luxembourg</option>
                                  <option value="Macao">Macao</option>
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                  <option value="Madagascar">Madagascar</option>
                                  <option value="Malawi">Malawi</option>
                                  <option value="Malaysia">Malaysia</option>
                                  <option value="Maldives">Maldives</option>
                                  <option value="Mali">Mali</option>
                                  <option value="Malta">Malta</option>
                                  <option value="Marshall Islands">Marshall Islands</option>
                                  <option value="Martinique">Martinique</option>
                                  <option value="Mauritania">Mauritania</option>
                                  <option value="Mauritius">Mauritius</option>
                                  <option value="Mayotte">Mayotte</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                                  <option value="Monaco">Monaco</option>
                                  <option value="Mongolia">Mongolia</option>
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option>
                                  <option value="Morocco">Morocco</option>
                                  <option value="Mozambique">Mozambique</option>
                                  <option value="Myanmar">Myanmar</option>
                                  <option value="Namibia">Namibia</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Nepal">Nepal</option>
                                  <option value="Netherlands">Netherlands</option>
                                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                                  <option value="New Caledonia">New Caledonia</option>
                                  <option value="New Zealand">New Zealand</option>
                                  <option value="Nicaragua">Nicaragua</option>
                                  <option value="Niger">Niger</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Niue">Niue</option>
                                  <option value="Norfolk Island">Norfolk Island</option>
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                  <option value="Norway">Norway</option>
                                  <option value="Oman">Oman</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="Palau">Palau</option>
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                  <option value="Panama">Panama</option>
                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                  <option value="Paraguay">Paraguay</option>
                                  <option value="Peru">Peru</option>
                                  <option value="Philippines">Philippines</option>
                                  <option value="Pitcairn">Pitcairn</option>
                                  <option value="Poland">Poland</option>
                                  <option value="Portugal">Portugal</option>
                                  <option value="Puerto Rico">Puerto Rico</option>
                                  <option value="Qatar">Qatar</option>
                                  <option value="Reunion">Reunion</option>
                                  <option value="Romania">Romania</option>
                                  <option value="Russian Federation">Russian Federation</option>
                                  <option value="Rwanda">Rwanda</option>
                                  <option value="Saint Helena">Saint Helena</option>
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                  <option value="Saint Lucia">Saint Lucia</option>
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                  <option value="Samoa">Samoa</option>
                                  <option value="San Marino">San Marino</option>
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Serbia">Serbia</option>
                                  <option value="Seychelles">Seychelles</option>
                                  <option value="Sierra Leone">Sierra Leone</option>
                                  <option value="Singapore">Singapore</option>
                                  <option value="Slovakia">Slovakia</option>
                                  <option value="Slovenia">Slovenia</option>
                                  <option value="Solomon Islands">Solomon Islands</option>
                                  <option value="Somalia">Somalia</option>
                                  <option value="South Africa">South Africa</option>
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                  <option value="Spain">Spain</option>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="Sudan">Sudan</option>
                                  <option value="Suriname">Suriname</option>
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                  <option value="Swaziland">Swaziland</option>
                                  <option value="Sweden">Sweden</option>
                                  <option value="Switzerland">Switzerland</option>
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                  <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                  <option value="Tajikistan">Tajikistan</option>
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                  <option value="Thailand">Thailand</option>
                                  <option value="Timor-leste">Timor-leste</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Tokelau">Tokelau</option>
                                  <option value="Tonga">Tonga</option>
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                  <option value="Tunisia">Tunisia</option>-->
                                  <option value="Turkiye">Türkiye</option>
                                  <!--<option value="Turkmenistan">Turkmenistan</option>
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                  <option value="Tuvalu">Tuvalu</option>
                                  <option value="Uganda">Uganda</option>
                                  <option value="Ukraine">Ukraine</option>
                                  <option value="United Arab Emirates">United Arab Emirates</option>
                                  <option value="United Kingdom">United Kingdom</option>
                                  <option value="United States">United States</option>
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                  <option value="Uruguay">Uruguay</option>
                                  <option value="Uzbekistan">Uzbekistan</option>
                                  <option value="Vanuatu">Vanuatu</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Viet Nam">Viet Nam</option>
                                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                                  <option value="Western Sahara">Western Sahara</option>
                                  <option value="Yemen">Yemen</option>
                                  <option value="Zambia">Zambia</option>
                                  <option value="Zimbabwe">Zimbabwe</option>-->
                              </select>
                            </div>
                            <div class="form-group">
                              <p class="input-title"> LMS Domain Adresi</p>

                              <div class="input-group">
                                <input type="text" name="domain" class="form-control required" placeholder="Ör. einstein-lms" aria-label=".egitim360.cloud (LMS Domain Adresi)" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <span class="input-group-text" id="basic-addon2">.egitim360.cloud</span>
                                </div>
                              </div>

                            </div>
                            <div class="form-group">
                              <p class="input-title"> Firma Web Adresi</p>
                              <input type="url" name="web-adress" class="form-control required" onblur="checkURL(this)" placeholder="( Firma Web Adresi)">
                            </div>
                            <div class="form-group">
                              <p class="input-title"> Firma Telefonu</p>
                              <input type="tel" name="phone" class="form-control required" placeholder="Firma Telefonu">
                            </div>
                        </div>
                        <!-- /step-3 -->
                        <div class="step">
                            <h5 class="main_question"><strong></strong></h5>
                            <div class="form-group">
                              <p class="input-title"> Kurumsal Kullanıcı E-Posta Adresi</p>
                              <input type="email" name="company-mail" class="form-control required" placeholder="Kurumsal Kullanıcı E-Posta Adresi">
                            </div>
                            <div class="form-group">
                              <p class="input-title"> Alternatif E-Posta Adresi</p>
                              <input type="email" name="company-mail-alternative" class="form-control" placeholder="Alternatif E-Posta Adresi">
                            </div>
                        </div>
                        <!-- /step-4 -->
                        <div class="step">
                            <h5 class="main_question"><strong></strong></h5>
                            <div class="form-group">
                              <p class="input-title"> Ad Soyad</p>
                              <input type="text" name="name-surname" class="form-control required" placeholder="Adı Soyadı">
                            </div>
                            <div class="form-group">
                              <p class="input-title"> Cinsiyet </p>
                              <div class="label-wrap">
                                <label class="container_radio version_2" style="color: #515151;">Erkek
                                    <input type="radio" name="question_1" value="Erkek" class="required" onchange="getVals(this, 'question_1');">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio version_2" style="color: #515151; left: 25px;">Kadın
                                    <input type="radio" name="question_1" value="Kadın" class="required" onchange="getVals(this, 'question_1');">
                                    <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                            <!--div class="form-group">
                              <p class="input-title"> Departman</p>
                              <input type="text" name="department" class="form-control required" placeholder="Departmanı">
                            </div-->
                            <!--div class="form-group">
                              <p class="input-title"> Görevi</p>
                              <input type="text" name="task" class="form-control required" placeholder="Görevi">
                            </div-->
                            <div class="form-group">
                              <p class="input-title"> Cep Telefonu</p>
                              <input type="tel" name="cellphone" class="form-control required" placeholder="Cep Telefonu">
                            </div>
                            <div class="form-group">
                              <p class="input-title"> Alternatif Cep Telefonu</p>
                              <input type="tel" name="cellphone-alternative" class="form-control" placeholder="Cep Telefonu(Alternatif)">
                            </div>
                            <div class="form-group terms">
                                <label class="container_check"><a href="#" data-toggle="modal" data-target="#terms-txt">Lütfen Şartlar ve Koşullarımızı kabul edin.</a>
                                    <input type="checkbox" name="terms" value="Yes" class="required">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!--final-step -->
                        <div class="submit step">
                          <h3 class="main_question">Özetle</h3>
                          <div class="summary">
                            <ul class="summary-content">

                            </ul>
                          </div>
                        </div>

                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Geri</button>
                            <button type="button" name="forward" class="forward">İleri</button>
                            <button id="_form_action" type="submit" name="process" class="submit">Onay</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </div>
                </form>

                <div class="success-step">
                  <img src="assets/img/success.png" alt="">
                  <p class="sc-title">Başvurunuz alındı,</p>
                  <p class="sc-desc">Başvurunuz ile ilgili en kısa sürede sizinle irtibata geçilecektir.</p>
                </div>
                <!-- /Wizard container -->
            </div>
            <!-- /content-right-->
        </div>
        <!-- /row-->
    </div>

    <script>

    function checkURL (abc) {
        var string = abc.value;
        if (!~string.indexOf("http")) {
          string = "http://www." + string;
        }
        abc.value = string;
        return abc
      }
    </script>

    <script>

      $("#_form_action").click(function() {

          var musterikod = $('input[name=current-code]').val();
          var firma = $('input[name=company-name]').val();
          var unvan = $('input[name=title]').val();
          var sicilno = $('input[name=registration-number]').val();
          var ulke = $('select[name=country]').val();
          var domain = $('input[name=domain]').val();
          var webadress = $('input[name=web-adress]').val();
          var sirketTelefon = $('input[name=phone]').val();
          var sirketMail = $('input[name=company-mail]').val();
          var sirketMailAlternative = $('input[name=company-mail-alternative]').val();
          var adSoyad = $('input[name=name-surname]').val();
          var q1 = $('input[name=question_1]:checked').val();
          //var departman = $('input[name=department]').val();
          //var gorevi = $('input[name=task]').val();
          var cepTelefon = $('input[name=cellphone]').val();
          var cepTelefonAlternative= $('input[name=cellphone-alternative]').val();

            $.ajax({

                type: "post",
                url: "survey.php",

                data: "musterikod=" + musterikod + "&firma=" + firma + "&unvan=" + unvan + "&sicilno=" + sicilno + "&ulke=" + ulke + "&domain=" + domain + "&webadress=" + webadress + "&sirketTelefon=" + sirketTelefon + "&sirketMail=" + sirketMail + "&sirketMailAlternative=" + sirketMailAlternative + "&adSoyad=" + adSoyad + "&q1=" + q1 + "&cepTelefon=" + cepTelefon + "&cepTelefonAlternative=" + cepTelefon,

                success: function(html) {

                    if (html == 'true') {
                      $("form, #progressbar").addClass("hide");
                      $(".success-step").addClass("show");
                      $("#loader_form").css({
                        "display":"none"
                      })
                    }
                    else{
                      console.log("Form Gönderilemedi")
                      $("#_form_action").removeClass("disabled");
                      $("#loader_form").css({
                        "display":"none"
                      })
                    }

                }
            });

            $("#loader_form").css({
              "display":"block"
            })
            $("#_form_action").addClass("disabled");
            /*setTimeout(function() {
                $("#_form_action").removeClass("disabled")
            }, 3000);*/

            return false;
      });


      </script>
