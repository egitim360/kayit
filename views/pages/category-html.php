
<?php

  $barcode = _read_directory ('egitimler');

  $barcode = _barcode ($barcode);

  $array = array ('01' => 'Zorunlu Eğitimler', '02' => 'Kişisel Gelişim', '03' => 'Yönetimsel Gelişim', '04' => 'Mesleki Gelişim', '05' => 'Hukuk', '06' => 'Finans', '07' => 'Sosyal Sorumluluk');

  foreach ($array as $key => $value) { ?>

    <div class="lolomoRow lolomoRow_title_card">
      <h2 class="rowHeader">
        <span class="rowTitle" aria-label="gündemdekiler">
          <div class="row-header-title"><?php echo $value ?></div>
        </span>
      </h2>

      <!-- Slider -->
      <div id="gundemdekiler" class="slider-wrapper owl-carousel">
          <div class="item">
            <div class="video-card">
              <div class="video-poster">
                  <img class="video-cover-img" src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABbDDcoOSYafK7-LUUkmFKywPoH4b6jfCrgXOjbX-OazJIuiUDL7YE7qFayD823-c3-1i9ZgGIuisCcKib8aNGIGUWWMAr3XF7Ma7FhH0WicpCqxfBd0PRxCmjB6wdA.jpg?r=cc8" alt="">
              </div>
              <div class="video-player">
                <video loop>
                   <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                   <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/ogg">
                   Your browser does not support the video tag.
                </video>
              </div>
              <div class="video-overlay">
                <div class="video-info">
                  <i class="play icon outline-border"></i>
                  <div class="video-title">Eintesin Eğitim Test Videosu ve daha fazlası</div>
                  <div class="video-meta">
                    <span class="video-status red yellow green ">
                      Yeni
                    </span>
                    <span class="video-time">
                      1 sa. 16 dk.
                    </span>
                    <span class="video-time">
                      3 Sezon
                    </span>
                  </div>
                  <div class="video-tags">
                    <span>kişisel-gelişim</span>
                    <span>kişisel-gelişim</span>
                    <span>kişisel-gelişim</span>
                  </div>
                  <div class="video-detail-arrow">
                    <svg id="chevron-down" viewBox="0 0 60 19">    <path fill="currentColor" d="M59.5615866,2.44258873 L31.1899791,17.6617954 C30.7515658,17.9123173 30.2505219,18.1002088 30.0626305,18.1002088 C29.874739,18.1002088 29.6242171,18.0375783 29.5615866,18.0375783 C29.4363257,17.9749478 28.9979123,17.7244259 28.559499,17.5365344 L0.501043841,2.44258873 C0.187891441,2.31732777 0,1.94154489 0,1.62839248 C0,1.50313152 0.0626304802,1.37787056 0.12526096,1.18997912 L0.501043841,0.501043841 C0.688935282,0.187891441 1.00208768,0 1.31524008,0 C1.50313152,0 1.62839248,0 1.75365344,0.12526096 L29.1858038,14.8434238 C29.3736952,14.9686848 29.6868476,15.0313152 30,15.0313152 C30.3131524,15.0313152 30.6263048,14.9686848 30.8141962,14.8434238 L58.2463466,0.12526096 C58.6847599,-0.12526096 59.2484342,0 59.4989562,0.501043841 L59.874739,1.18997912 C60.125261,1.62839248 60,2.19206681 59.5615866,2.44258873"></path></svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="title-card-focus-ring"></div>
          </div>
          <div class="item">
            <div class="video-card">
              <div class="video-poster">
                  <img class="video-cover-img" src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABe9vcnqjIG9OshkL_eEzgluk6MNLiY92QyHRXPEzvlHN4QpVG5DLJ-iaP1fU8hrm-trrBk6s2oulam9cr1aiySBZDvFtIF3YwSnE9zYFprlnfFbeXuopxKjBTmXoAEUhLmr8bfwgPKctXti9GDhsYgDHyBCcsvE.jpg?r=b4e" alt="">
              </div>
              <div class="video-player">
                <video loop>
                   <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                   <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/ogg">
                   Your browser does not support the video tag.
                </video>
              </div>
              <div class="video-overlay">
                <div class="video-info">
                  <i class="play icon outline-border"></i>
                  <div class="video-title">Eintesin Eğitim Test Videosu ve daha fazlası</div>
                  <div class="video-meta">
                    <span class="video-status red yellow green">
                      Yeni
                    </span>
                    <span class="video-time">
                      1 sa. 16 dk.
                    </span>
                    <span class="video-time">
                      3 Sezon
                    </span>
                  </div>
                  <div class="video-tags">
                    <span>kişisel-gelişim</span>
                    <span>kişisel-gelişim</span>
                    <span>kişisel-gelişim</span>
                  </div>
                  <div class="video-detail-arrow">
                    <svg id="chevron-down" viewBox="0 0 60 19">    <path fill="currentColor" d="M59.5615866,2.44258873 L31.1899791,17.6617954 C30.7515658,17.9123173 30.2505219,18.1002088 30.0626305,18.1002088 C29.874739,18.1002088 29.6242171,18.0375783 29.5615866,18.0375783 C29.4363257,17.9749478 28.9979123,17.7244259 28.559499,17.5365344 L0.501043841,2.44258873 C0.187891441,2.31732777 0,1.94154489 0,1.62839248 C0,1.50313152 0.0626304802,1.37787056 0.12526096,1.18997912 L0.501043841,0.501043841 C0.688935282,0.187891441 1.00208768,0 1.31524008,0 C1.50313152,0 1.62839248,0 1.75365344,0.12526096 L29.1858038,14.8434238 C29.3736952,14.9686848 29.6868476,15.0313152 30,15.0313152 C30.3131524,15.0313152 30.6263048,14.9686848 30.8141962,14.8434238 L58.2463466,0.12526096 C58.6847599,-0.12526096 59.2484342,0 59.4989562,0.501043841 L59.874739,1.18997912 C60.125261,1.62839248 60,2.19206681 59.5615866,2.44258873"></path></svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="title-card-focus-ring"></div>
          </div>
          <div class="item">
            <div class="video-card">
              <div class="video-poster">
                  <img class="video-cover-img" src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABdGf5uC4awGjzXidX2IXDQv0SkzhfEVPg8U5w1TpuB4YMz2t4r_5S1ckjt1LkYcF6qO-7ktp5q4hgLSApaIaAPt_OEVwPKnh0A.webp?r=319" alt="">
              </div>
              <div class="video-player">
                <video loop>
                   <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                   <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/ogg">
                   Your browser does not support the video tag.
                </video>
              </div>
              <div class="video-overlay">
                <div class="video-info">
                  <i class="play icon outline-border"></i>
                  <div class="video-title">Eintesin Eğitim Test Videosu ve daha fazlası</div>
                  <div class="video-meta">
                    <span class="video-status red yellow green">
                      Yeni
                    </span>
                    <span class="video-time">
                      1 sa. 16 dk.
                    </span>
                    <span class="video-time">
                      3 Sezon
                    </span>
                  </div>
                  <div class="video-tags">
                    <span>kişisel-gelişim</span>
                    <span>kişisel-gelişim</span>
                    <span>kişisel-gelişim</span>
                  </div>
                  <div class="video-detail-arrow">
                    <svg id="chevron-down" viewBox="0 0 60 19">    <path fill="currentColor" d="M59.5615866,2.44258873 L31.1899791,17.6617954 C30.7515658,17.9123173 30.2505219,18.1002088 30.0626305,18.1002088 C29.874739,18.1002088 29.6242171,18.0375783 29.5615866,18.0375783 C29.4363257,17.9749478 28.9979123,17.7244259 28.559499,17.5365344 L0.501043841,2.44258873 C0.187891441,2.31732777 0,1.94154489 0,1.62839248 C0,1.50313152 0.0626304802,1.37787056 0.12526096,1.18997912 L0.501043841,0.501043841 C0.688935282,0.187891441 1.00208768,0 1.31524008,0 C1.50313152,0 1.62839248,0 1.75365344,0.12526096 L29.1858038,14.8434238 C29.3736952,14.9686848 29.6868476,15.0313152 30,15.0313152 C30.3131524,15.0313152 30.6263048,14.9686848 30.8141962,14.8434238 L58.2463466,0.12526096 C58.6847599,-0.12526096 59.2484342,0 59.4989562,0.501043841 L59.874739,1.18997912 C60.125261,1.62839248 60,2.19206681 59.5615866,2.44258873"></path></svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="title-card-focus-ring"></div>
          </div>
      </div>
      <div class="video-detail-tab">
        <div class="background">
          <div class="video-detail-background">
            <div class="img-cover" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABYcIc1TA_PaOS08BzPiFhPEujnPPxoXdlnWyWA2n40GHtvp6RwS9IWcYTGXHxj1RNgBCpasQVGbRAetceY8_Wvi98XaQ06UIUg.webp?r=ee0');"></div>
          </div>
          <div class="ei-video-player">
            <div class="video-player">
              <video>
                 <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                 <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/ogg">
                 Your browser does not support the video tag.
              </video>
            </div>
          </div>
          <div class="vignette"></div>
          <div class="nav-shadow"></div>
        </div>
        <div class="detail-content">
          <h3>
            <div class="title">
             <img alt="Point Blank" class="logo" src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/jsgGe9NCko3c-j0wGZ7FSwVlHs0/AAAABcJXFaTQNCzMRUmnJkDE6jV8FSBcXuV5SRgJxdEfZ3Z3diYacAoQrgFMUoG9Gl-oH-OZMia6aaV-PZAOjbu3-j3O6AGWPQ49DCpIfvtaFOpH5Vy99jigjgvPYxoYMTK_y9uGaOWKgE7ewf702bK2B2QotS81akzZvnbmOkM2Ew4.webp?r=4e0">
            </div>
          </h3>
          <div class="tabs overview show" id="tab-Overview">
            <div class="overview-info">
              <div class="video-meta">
                  <span class="match-score green">Yeni</span>
                  <span class="year strong">2019</span>
                  <span class="important-box">
                    <span class="important-text">16+</span>
                  </span>
                  <span class="duration strong">1 sa. 43dk.</span>
              </div>
              <div class="supplemental-message">3. Sezonu Şimdi İzleyin</div>
              <div class="synopsis">
                Hamile eşini kurtarmak isteyen acil servis hemşiresi, zamanla ve rüşvetçi polislerle mücadele etmek için yaralı bir cinayet zanlısıyla isteksizce iş birliği yapar.
              </div>
              <div class="overview-action">
                <a class="mr-10" href="javascript:;">
                  <div class="ei-button ei-flat-button-uppercase ei-flat-button-primary">
                      <i class="play icon"></i>
                      <span class="ei-flat-button-text">
                        Oynat
                      </span>
                  </div>
                </a>
                <a href="javascript:;">
                  <div class="ei-button ei-flat-button-uppercase ei-flat-button-with-border">
                      <i class="plus icon"></i>
                      <span class="ei-flat-button-text">
                        LİSTEM
                      </span>
                  </div>
                </a>
                <div class="thumbs-container">
                  <div class="thumbs-component">
                    <div class="thumb-container thumb-up-container">
                      <a href="javascript:;" class="ei-vote-button simpleround">
                          <svg id="thumb-up" viewBox="0 0 44 44">    <path fill="currentColor" d="M14.4914731,10.5133658 C14.5025232,10.3721258 14.5112703,10.2600368 14.5373244,9.92616603 C14.6065316,9.03836208 14.6757357,8.14414039 14.7403047,7.30077512 C14.7465683,7.21894322 14.7465683,7.21894322 14.752828,7.13707632 C14.9046548,5.15090242 15.0272627,3.45867565 15.0272627,3.40867664 L15.0272627,1.53263123 L16.7144227,0.711648736 C16.9560747,0.594059357 17.2924682,0.45883302 17.7131667,0.333356234 C19.0883517,-0.0768040048 20.5613519,-0.154799924 22.0533288,0.363315376 C24.5195179,1.21974305 26.1769774,3.46135556 26.8035959,6.84975024 C27.351817,9.81421638 27.5019717,12.9866944 27.3599098,16.0115829 L34.1297665,16.0259652 L34.2527202,16.036358 C37.3831944,16.3009647 40,18.0263548 40,21.50351 C40,22.0672808 39.9265137,22.5421505 39.8025926,23.0579114 C40.5520589,23.9178872 41,25.0573442 41,26.5026539 C41,28.4265345 40.1989133,29.8141446 38.9529692,30.7147706 C39,31.0829242 39,31.2285855 39,31.5017978 C39,33.4256784 38.1989133,34.8132885 36.9529692,35.7139145 C37,36.1120923 37,36.2277294 37,36.5009417 C37,39.978097 34.3831944,41.703487 31.2527202,41.9680938 L31.1299097,41.9784745 L31.0066614,41.9787481 L21.4308667,42 C17.3598399,42 15.3049785,41.5120961 12.3004159,40.2094732 C10.4281403,39.3976996 9.56555009,39.1413507 7.75086356,38.9901527 L5,38.7609533 L5,22.2682088 L9.98007986,19.4037917 L14.4914731,10.5133658 Z M23.8535989,7.39510873 C22.6962315,1.13672751 18.0272627,3.40867664 18.0272627,3.40867664 C18.0272627,3.82250684 17.4358448,11.340371 17.4358448,11.340371 L12.2509485,21.558043 L8,24.003082 L8,36.0010273 C14,36.5009417 13.6061821,39.0005137 21.4308667,39.0005137 L31,38.9792692 C32.339044,38.866085 34,38.2712124 34,36.5009417 C34,34.730671 32.339044,34.1357984 31,34.0013698 L33,33.9801253 C34.339044,33.8669411 36,33.2720686 36,31.5017978 C36,29.7315271 34.339044,29.1366545 33,29.0022259 L35,28.9809814 C36.339044,28.8677972 38,28.2729247 38,26.5026539 C38,24.7323832 36.339044,24.1375106 35,24.003082 L34,23.9818375 C35.339044,23.8686533 37,23.2737808 37,21.50351 C37,19.7332393 35.339044,19.1383668 34,19.0251826 L24.0526449,19.0040499 C24.2446335,18.1909366 24.845597,12.7592672 23.8535989,7.39510873 Z">
                          </path>
                          </svg>
                      </a>
                    </div>
                    <div class="thumb-container thumb-down-container">
                        <a href="javascript:;" class="ei-vote-button simpleround">
                          <svg id="thumb-down" viewBox="0 0 44 44">    <path fill="currentColor" d="M29.5085269,33.4866342 C29.4974768,33.6278742 29.4887297,33.7399632 29.4626756,34.073834 C29.3934684,34.9616379 29.3242643,35.8558596 29.2596953,36.6992249 C29.2534317,36.7810568 29.2534317,36.7810568 29.247172,36.8629237 C29.0953452,38.8490976 28.9727373,40.5413244 28.9727373,40.5913234 L28.9727373,42.4673688 L27.2855773,43.2883513 C27.0439253,43.4059406 26.7075318,43.541167 26.2868333,43.6666438 C24.9116483,44.076804 23.4386481,44.1547999 21.9466712,43.6366846 C19.4804821,42.780257 17.8230226,40.5386444 17.1964041,37.1502498 C16.648183,34.1857836 16.4980283,31.0133056 16.6400902,27.9884171 L9.87023353,27.9740348 L9.74727981,27.963642 C6.61680565,27.6990353 4,25.9736452 4,22.49649 C4,21.9327192 4.07348633,21.4578495 4.19740742,20.9420886 C3.44794109,20.0821128 3,18.9426558 3,17.4973461 C3,15.5734655 3.80108673,14.1858554 5.04703083,13.2852294 C5,12.9170758 5,12.7714145 5,12.4982022 C5,10.5743216 5.80108673,9.18671152 7.04703083,8.28608555 C7,7.88790771 7,7.77227059 7,7.49905828 C7,4.02190301 9.61680565,2.29651296 12.7472798,2.03190622 L12.8700903,2.02152553 L12.9933386,2.0212519 L22.5691333,2 C26.6401601,2 28.6950215,2.48790389 31.6995841,3.79052685 C33.5718597,4.60230044 34.4344499,4.8586493 36.2491364,5.00984729 L39,5.23904667 L39,21.7317912 L34.0199201,24.5962083 L29.5085269,33.4866342 Z M20.1464011,36.6048913 C21.3037685,42.8632725 25.9727373,40.5913234 25.9727373,40.5913234 C25.9727373,40.1774932 26.5641552,32.659629 26.5641552,32.659629 L31.7490515,22.441957 L36,19.996918 L36,7.99897267 C30,7.49905828 30.3938179,4.99948634 22.5691333,4.99948634 L13,5.02073084 C11.660956,5.133915 10,5.72878756 10,7.49905828 C10,9.26932901 11.660956,9.86420157 13,9.99863023 L11,10.0198747 C9.66095598,10.1330589 8,10.7279314 8,12.4982022 C8,14.2684729 9.66095598,14.8633455 11,14.9977741 L9,15.0190186 C7.66095598,15.1322028 6,15.7270753 6,17.4973461 C6,19.2676168 7.66095598,19.8624894 9,19.996918 L10,20.0181625 C8.66095598,20.1313467 7,20.7262192 7,22.49649 C7,24.2667607 8.66095598,24.8616332 10,24.9748174 L19.9473551,24.9959501 C19.7553665,25.8090634 19.154403,31.2407328 20.1464011,36.6048913 Z"></path>
                          </svg>
                        </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="meta-lists">
                <div class="cast inline-list">
                  <span class="list-label">Başroldekiler:</span>
                  <span class="list-items">
                    <a href="javascript:;">Frank Grillo</a>,
                    <a href="javascript:;">Anthony Mackie</a>,
                    <a href="javascript:;">Marcia Gay Harden</a>
                  </span>
                </div>
                <div class="genres inline-list">
                    <span class="list-label">Türler:</span>
                    <span class="list-items">
                      <a href="/browse/genre/1365">Aksiyon ve Macera</a>,
                      <a href="/browse/genre/9584">Suç Konulu Aksiyon ve Maceralar</a>
                    </span>
                </div>
                <div class="tags inline-list">
                    <span class="list-label">Bu film:</span>
                    <span class="list-items">
                      <a href="/browse/genre/1632671">Ezber Bozan</a>,
                      <a href="/browse/genre/100044">Sert Gerçekçi</a>,
                      <a href="/browse/genre/100041">Heyecanlı</a>
                    </span>
                </div>
              </div>
            </div>
            <div class="ei-play-hitzone" role="presentation"></div><!-- Play Video Hidden Link -->
          </div>

          <div class="tabs " id="tab-OtherVideos">
            <div class="detail-slider ">
              <div class="swiper-wrapper">
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                    <i class="play icon outline-border center-icon"></i>
                    <a role="button" class="ei-icon-button mylist-button" aria-label="Listeme Ekle">
                      <span role="presentation" class="ei-icon-button-icon">
                        <i class="plus icon"></i>
                      </span>
                      <span class="ei-icon-button-tooltip">LİSTEME EKLE</span>
                    </a>
                  </div>
                  <div class="meta">
                    <div class="otherVideoTitle">Eğitim Video 1</div>
                    <span class="duration strong">1 sa. 43dk.</span>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABUoGpq0wDb70-WQ5XhIPIVtOcHDFyD0VMCq1SGTKu8OwCEt4VQMr9mo7lTsV-PjBW9OOjqUDkpAwnFPrPKccGB2g50KPr5DnIj42szg0ehfHZJnRi5ulGjWDoTkI.jpg?r=08c');">
                    <i class="play icon outline-border center-icon"></i>
                    <a role="button" class="ei-icon-button mylist-button" aria-label="Listeme Ekle">
                      <span role="presentation" class="ei-icon-button-icon">
                        <i class="plus icon"></i>
                      </span>
                      <span class="ei-icon-button-tooltip">LİSTEME EKLE</span>
                    </a>
                  </div>
                  <div class="meta">
                    <div class="otherVideoTitle">Eğitim Video 2</div>
                    <span class="duration strong">1 sa. 23dk.</span>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABSCXLggS_9oTMTvfBn556Lsea3Xi6nJoNguU5oFOHirCwodyeesx2V8FWsPaJ63TRcDzqf2g5rAXXgmkEdi-l9GFlRmm4z4l.webp?r=595');">
                    <div class="lock-overlay"></div>
                    <i class="lock icon lock-center-icon"></i>
                  </div>
                  <div class="meta">
                    <div class="otherVideoTitle">Eğitim Video 3</div>
                    <span class="duration strong">1 sa. 23dk.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tabs " id="tab-ShowDetails">
            <div class="detailsItem">
                <ul>
                  <li class="listLabel"><span>Yönetmen </span></li>
                  <li>
                    <a href="/browse/person/20058219">Joe Lynch</a>
                  </li>
                  <li class="listLabel">
                    <span>Oyuncu Kadrosu</span>
                  </li>
                  <li>
                    <a href="/browse/person/30043514">Frank Grillo</a>
                  </li>
                  <li>
                    <a href="/browse/person/20057598">Anthony Mackie</a>
                  </li>
                  <li>
                    <a href="/browse/person/39214">Marcia Gay Harden</a>
                  </li>
                  <li>
                    <a href="/browse/person/30154046">Teyonah Parris</a>
                  </li>
                  <li>
                    <a href="/browse/person/30017597">Boris McGiver</a>
                  </li>
                  <li>
                    <a href="/browse/person/30100769">Christian Cooke</a>
                  </li>
                  <li>
                    <a href="/browse/person/30200682">Markice Moore</a>
                  </li>
                  <li class="listLabel">
                    <span>Senarist </span>
                  </li>
                  <li>
                    <a href="/browse/person/40211083">Adam G. Simon</a>
                  </li>
                </ul>
            </div>
            <div class="detail-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at interdum ex, in iaculis mi. Vivamus ac sodales dui. Aenean fringilla justo ut odio aliquam, id efficitur lectus hendrerit. In eu ex tortor. Integer eget faucibus diam. Donec iaculis scelerisque diam, a varius nibh sodales ut. Nunc ac venenatis ipsum, consequat posuere velit. Cras a fringilla neque. <br><br>

              Duis faucibus accumsan purus eget luctus. Aliquam blandit cursus elit. Ut at libero tellus. Phasellus euismod, ex at egestas facilisis, metus quam sodales mauris, eget pellentesque ante felis a urna. Suspendisse eget quam justo. Phasellus euismod mi eget consectetur pulvinar. Duis quis arcu finibus, lacinia mauris nec, suscipit sem. Cras enim erat, imperdiet eget enim eu, iaculis tincidunt enim. Quisque convallis ante mi. Nam vitae scelerisque ipsum. Fusce volutpat faucibus finibus. Duis  malesuada, eros sed fringilla posuere, velit lorem euismod urna, vel tempor mi lectus nec ante. Ut in tristique quam. Praesent sodales nisl eu faucibus laoreet. Nam odio neque, lobortis id elementum id, luctus non nunc.<br><br>

              Curabitur non scelerisque nulla. Sed quam nisl, volutpat eu vestibulum nec, laoreet vel purus. Nullam egestas eros eu turpis vulputate malesuada. Aenean fermentum tellus eget justo blandit scelerisque. Mauris sed suscipit sem, nec venenatis massa. Curabitur iaculis nunc a ligula auctor semper. Nunc quis dolor sed libero pulvinar tincidunt vel at turpis. Duis scelerisque dui eros. Integer tristique, ante et laoreet laoreet, sem velit pulvinar libero, id euismod elit lectus sodales sapien. Sed  purus nulla, pellentesque sed ultrices id, vulputate id diam. Suspendisse sed magna vitae risus lacinia lobortis quis eget nisi. Mauris et imperdiet quam, in dignissim leo. Curabitur sodales lorem ut est luctus, at gravida felis faucibus.<br><br>

              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at interdum ex, in iaculis mi. Vivamus ac sodales dui. Aenean fringilla justo ut odio aliquam, id efficitur lectus hendrerit. In eu ex tortor. Integer eget faucibus diam. Donec iaculis scelerisque diam, a varius nibh sodales ut. Nunc ac venenatis ipsum, consequat posuere velit. Cras a fringilla neque.<br><br>

              Duis faucibus accumsan purus eget luctus. Aliquam blandit cursus elit. Ut at libero tellus. Phasellus euismod, ex at egestas facilisis, metus quam sodales mauris, eget pellentesque ante felis a urna. Suspendisse eget quam justo. Phasellus euismod mi eget consectetur pulvinar. Duis quis arcu finibus, lacinia mauris nec, suscipit sem. Cras enim erat, imperdiet eget enim eu, iaculis tincidunt enim. Quisque convallis ante mi. Nam vitae scelerisque ipsum. Fusce volutpat faucibus finibus. Duis  malesuada, eros sed fringilla posuere, velit lorem euismod urna, vel tempor mi lectus nec ante. Ut in tristique quam. Praesent sodales nisl eu faucibus laoreet. Nam odio neque, lobortis id elementum id, luctus non nunc.<br><br>

              Curabitur non scelerisque nulla. Sed quam nisl, volutpat eu vestibulum nec, laoreet vel purus. Nullam egestas eros eu turpis vulputate malesuada. Aenean fermentum tellus eget justo blandit scelerisque. Mauris sed suscipit sem, nec venenatis massa. Curabitur iaculis nunc a ligula auctor semper. Nunc quis dolor sed libero pulvinar tincidunt vel at turpis. Duis scelerisque dui eros. Integer tristique, ante et laoreet laoreet, sem velit pulvinar libero, id euismod elit lectus sodales sapien. Sed  purus nulla, pellentesque sed ultrices id, vulputate id diam. Suspendisse sed magna vitae risus lacinia lobortis quis eget nisi. Mauris et imperdiet quam, in dignissim leo. Curabitur sodales lorem ut est luctus, at gravida felis faucibus.
            </div>
          </div>

          <div class="tabs more-like-this" id="tab-MoreLikeThis">
            <div class="detail-slider ">
              <div class="swiper-wrapper">
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                  </div>
                  <div class="meta">
                    <div class="match-score-wrapper">
                      <div class="match-score">
                        %91 Eşleşme
                      </div>
                    </div>
                    <span class="year">2018</span>
                    <span class="important-box">
                      <span class="important-text">16+</span>
                    </span>
                    <span class="duration strong">1 sa. 43dk.</span>
                    <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                  </div>
                  <div class="meta">
                    <div class="match-score-wrapper">
                      <div class="match-score">
                        %91 Eşleşme
                      </div>
                    </div>
                    <span class="year">2018</span>
                    <span class="important-box">
                      <span class="important-text">16+</span>
                    </span>
                    <span class="duration strong">1 sa. 43dk.</span>
                    <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                  </div>
                  <div class="meta">
                    <div class="match-score-wrapper">
                      <div class="match-score">
                        %91 Eşleşme
                      </div>
                    </div>
                    <span class="year">2018</span>
                    <span class="important-box">
                      <span class="important-text">16+</span>
                    </span>
                    <span class="duration strong">1 sa. 43dk.</span>
                    <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                  </div>
                  <div class="meta">
                    <div class="match-score-wrapper">
                      <div class="match-score">
                        %91 Eşleşme
                      </div>
                    </div>
                    <span class="year">2018</span>
                    <span class="important-box">
                      <span class="important-text">16+</span>
                    </span>
                    <span class="duration strong">1 sa. 43dk.</span>
                    <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                  </div>
                  <div class="meta">
                    <div class="match-score-wrapper">
                      <div class="match-score">
                        %91 Eşleşme
                      </div>
                    </div>
                    <span class="year">2018</span>
                    <span class="important-box">
                      <span class="important-text">16+</span>
                    </span>
                    <span class="duration strong">1 sa. 43dk.</span>
                    <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                  </div>
                  <div class="meta">
                    <div class="match-score-wrapper">
                      <div class="match-score">
                        %91 Eşleşme
                      </div>
                    </div>
                    <span class="year">2018</span>
                    <span class="important-box">
                      <span class="important-text">16+</span>
                    </span>
                    <span class="duration strong">1 sa. 43dk.</span>
                    <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                  </div>
                  <div class="meta">
                    <div class="match-score-wrapper">
                      <div class="match-score">
                        %91 Eşleşme
                      </div>
                    </div>
                    <span class="year">2018</span>
                    <span class="important-box">
                      <span class="important-text">16+</span>
                    </span>
                    <span class="duration strong">1 sa. 43dk.</span>
                    <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
                  </div>
                </div>
                <div class="slide-item swiper-slide">
                  <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                  </div>
                  <div class="meta">
                    <div class="match-score-wrapper">
                      <div class="match-score">
                        %91 Eşleşme
                      </div>
                    </div>
                    <span class="year">2018</span>
                    <span class="important-box">
                      <span class="important-text">16+</span>
                    </span>
                    <span class="duration strong">1 sa. 43dk.</span>
                    <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <ul class="menu" role="tablist">
            <li class="Overview current" data-tab-id="tab-Overview">
              <a role="link" tabindex="0">GENEL BAKIŞ</a>
              <span></span>
            </li>
            <li class="OtherVideos" data-tab-id="tab-OtherVideos">
              <a role="link" tabindex="0">EĞİTİMİN DİĞER VİDEOLARI</a>
              <span></span>
            </li>
            <li class="MoreLikeThis" data-tab-id="tab-MoreLikeThis">
              <a role="link" tabindex="0">BENZERLERİ</a>
              <span></span>
            </li>
            <li class="ShowDetails" data-tab-id="tab-ShowDetails">
              <a role="link" tabindex="0">AYRINTILAR</a>
              <span></span>
            </li>
          </ul>
        </div>
        <button class="close-button icon-close" tabindex="0" aria-label="Kapat"></button>
      </div>
    </div>

  <?php } ?>


<div class="lolomoRow lolomoRow_title_card">
  <h2 class="rowHeader">
    <span class="rowTitle" aria-label="gündemdekiler">
      <div class="row-header-title">Gündemdekiler</div>
    </span>
  </h2>

  <!-- Slider -->
  <div id="gundemdekiler" class="slider-wrapper owl-carousel">


      <div class="item">
        <div class="video-card">
          <div class="video-poster">
              <img class="video-cover-img" src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABbDDcoOSYafK7-LUUkmFKywPoH4b6jfCrgXOjbX-OazJIuiUDL7YE7qFayD823-c3-1i9ZgGIuisCcKib8aNGIGUWWMAr3XF7Ma7FhH0WicpCqxfBd0PRxCmjB6wdA.jpg?r=cc8" alt="">
          </div>
          <div class="video-player">
            <video loop>
               <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
               <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/ogg">
               Your browser does not support the video tag.
            </video>
          </div>
          <div class="video-overlay">
            <div class="video-info">
              <i class="play icon outline-border"></i>
              <div class="video-title">Eintesin Eğitim Test Videosu ve daha fazlası</div>
              <div class="video-meta">
                <span class="video-status red yellow green ">
                  Yeni
                </span>
                <span class="video-time">
                  1 sa. 16 dk.
                </span>
                <span class="video-time">
                  3 Sezon
                </span>
              </div>
              <div class="video-tags">
                <span>kişisel-gelişim</span>
                <span>kişisel-gelişim</span>
                <span>kişisel-gelişim</span>
              </div>
              <div class="video-detail-arrow">
                <svg id="chevron-down" viewBox="0 0 60 19">    <path fill="currentColor" d="M59.5615866,2.44258873 L31.1899791,17.6617954 C30.7515658,17.9123173 30.2505219,18.1002088 30.0626305,18.1002088 C29.874739,18.1002088 29.6242171,18.0375783 29.5615866,18.0375783 C29.4363257,17.9749478 28.9979123,17.7244259 28.559499,17.5365344 L0.501043841,2.44258873 C0.187891441,2.31732777 0,1.94154489 0,1.62839248 C0,1.50313152 0.0626304802,1.37787056 0.12526096,1.18997912 L0.501043841,0.501043841 C0.688935282,0.187891441 1.00208768,0 1.31524008,0 C1.50313152,0 1.62839248,0 1.75365344,0.12526096 L29.1858038,14.8434238 C29.3736952,14.9686848 29.6868476,15.0313152 30,15.0313152 C30.3131524,15.0313152 30.6263048,14.9686848 30.8141962,14.8434238 L58.2463466,0.12526096 C58.6847599,-0.12526096 59.2484342,0 59.4989562,0.501043841 L59.874739,1.18997912 C60.125261,1.62839248 60,2.19206681 59.5615866,2.44258873"></path></svg>
              </div>
            </div>
          </div>
        </div>
        <div class="title-card-focus-ring"></div>
      </div>
      <div class="item">
        <div class="video-card">
          <div class="video-poster">
              <img class="video-cover-img" src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABe9vcnqjIG9OshkL_eEzgluk6MNLiY92QyHRXPEzvlHN4QpVG5DLJ-iaP1fU8hrm-trrBk6s2oulam9cr1aiySBZDvFtIF3YwSnE9zYFprlnfFbeXuopxKjBTmXoAEUhLmr8bfwgPKctXti9GDhsYgDHyBCcsvE.jpg?r=b4e" alt="">
          </div>
          <div class="video-player">
            <video loop>
               <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
               <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/ogg">
               Your browser does not support the video tag.
            </video>
          </div>
          <div class="video-overlay">
            <div class="video-info">
              <i class="play icon outline-border"></i>
              <div class="video-title">Eintesin Eğitim Test Videosu ve daha fazlası</div>
              <div class="video-meta">
                <span class="video-status red yellow green">
                  Yeni
                </span>
                <span class="video-time">
                  1 sa. 16 dk.
                </span>
                <span class="video-time">
                  3 Sezon
                </span>
              </div>
              <div class="video-tags">
                <span>kişisel-gelişim</span>
                <span>kişisel-gelişim</span>
                <span>kişisel-gelişim</span>
              </div>
              <div class="video-detail-arrow">
                <svg id="chevron-down" viewBox="0 0 60 19">    <path fill="currentColor" d="M59.5615866,2.44258873 L31.1899791,17.6617954 C30.7515658,17.9123173 30.2505219,18.1002088 30.0626305,18.1002088 C29.874739,18.1002088 29.6242171,18.0375783 29.5615866,18.0375783 C29.4363257,17.9749478 28.9979123,17.7244259 28.559499,17.5365344 L0.501043841,2.44258873 C0.187891441,2.31732777 0,1.94154489 0,1.62839248 C0,1.50313152 0.0626304802,1.37787056 0.12526096,1.18997912 L0.501043841,0.501043841 C0.688935282,0.187891441 1.00208768,0 1.31524008,0 C1.50313152,0 1.62839248,0 1.75365344,0.12526096 L29.1858038,14.8434238 C29.3736952,14.9686848 29.6868476,15.0313152 30,15.0313152 C30.3131524,15.0313152 30.6263048,14.9686848 30.8141962,14.8434238 L58.2463466,0.12526096 C58.6847599,-0.12526096 59.2484342,0 59.4989562,0.501043841 L59.874739,1.18997912 C60.125261,1.62839248 60,2.19206681 59.5615866,2.44258873"></path></svg>
              </div>
            </div>
          </div>
        </div>
        <div class="title-card-focus-ring"></div>
      </div>
      <div class="item">
        <div class="video-card">
          <div class="video-poster">
              <img class="video-cover-img" src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABdGf5uC4awGjzXidX2IXDQv0SkzhfEVPg8U5w1TpuB4YMz2t4r_5S1ckjt1LkYcF6qO-7ktp5q4hgLSApaIaAPt_OEVwPKnh0A.webp?r=319" alt="">
          </div>
          <div class="video-player">
            <video loop>
               <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
               <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/ogg">
               Your browser does not support the video tag.
            </video>
          </div>
          <div class="video-overlay">
            <div class="video-info">
              <i class="play icon outline-border"></i>
              <div class="video-title">Eintesin Eğitim Test Videosu ve daha fazlası</div>
              <div class="video-meta">
                <span class="video-status red yellow green">
                  Yeni
                </span>
                <span class="video-time">
                  1 sa. 16 dk.
                </span>
                <span class="video-time">
                  3 Sezon
                </span>
              </div>
              <div class="video-tags">
                <span>kişisel-gelişim</span>
                <span>kişisel-gelişim</span>
                <span>kişisel-gelişim</span>
              </div>
              <div class="video-detail-arrow">
                <svg id="chevron-down" viewBox="0 0 60 19">    <path fill="currentColor" d="M59.5615866,2.44258873 L31.1899791,17.6617954 C30.7515658,17.9123173 30.2505219,18.1002088 30.0626305,18.1002088 C29.874739,18.1002088 29.6242171,18.0375783 29.5615866,18.0375783 C29.4363257,17.9749478 28.9979123,17.7244259 28.559499,17.5365344 L0.501043841,2.44258873 C0.187891441,2.31732777 0,1.94154489 0,1.62839248 C0,1.50313152 0.0626304802,1.37787056 0.12526096,1.18997912 L0.501043841,0.501043841 C0.688935282,0.187891441 1.00208768,0 1.31524008,0 C1.50313152,0 1.62839248,0 1.75365344,0.12526096 L29.1858038,14.8434238 C29.3736952,14.9686848 29.6868476,15.0313152 30,15.0313152 C30.3131524,15.0313152 30.6263048,14.9686848 30.8141962,14.8434238 L58.2463466,0.12526096 C58.6847599,-0.12526096 59.2484342,0 59.4989562,0.501043841 L59.874739,1.18997912 C60.125261,1.62839248 60,2.19206681 59.5615866,2.44258873"></path></svg>
              </div>
            </div>
          </div>
        </div>
        <div class="title-card-focus-ring"></div>
      </div>
  </div>
  <div class="video-detail-tab">
    <div class="background">
      <div class="video-detail-background">
        <div class="img-cover" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABYcIc1TA_PaOS08BzPiFhPEujnPPxoXdlnWyWA2n40GHtvp6RwS9IWcYTGXHxj1RNgBCpasQVGbRAetceY8_Wvi98XaQ06UIUg.webp?r=ee0');"></div>
      </div>
      <div class="ei-video-player">
        <div class="video-player">
          <video>
             <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
             <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/ogg">
             Your browser does not support the video tag.
          </video>
        </div>
      </div>
      <div class="vignette"></div>
      <div class="nav-shadow"></div>
    </div>
    <div class="detail-content">
      <h3>
        <div class="title">
         <img alt="Point Blank" class="logo" src="https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/jsgGe9NCko3c-j0wGZ7FSwVlHs0/AAAABcJXFaTQNCzMRUmnJkDE6jV8FSBcXuV5SRgJxdEfZ3Z3diYacAoQrgFMUoG9Gl-oH-OZMia6aaV-PZAOjbu3-j3O6AGWPQ49DCpIfvtaFOpH5Vy99jigjgvPYxoYMTK_y9uGaOWKgE7ewf702bK2B2QotS81akzZvnbmOkM2Ew4.webp?r=4e0">
        </div>
      </h3>
      <div class="tabs overview show" id="tab-Overview">
        <div class="overview-info">
          <div class="video-meta">
              <span class="match-score green">Yeni</span>
              <span class="year strong">2019</span>
              <span class="important-box">
                <span class="important-text">16+</span>
              </span>
              <span class="duration strong">1 sa. 43dk.</span>
          </div>
          <div class="supplemental-message">3. Sezonu Şimdi İzleyin</div>
          <div class="synopsis">
            Hamile eşini kurtarmak isteyen acil servis hemşiresi, zamanla ve rüşvetçi polislerle mücadele etmek için yaralı bir cinayet zanlısıyla isteksizce iş birliği yapar.
          </div>
          <div class="overview-action">
            <a class="mr-10" href="javascript:;">
              <div class="ei-button ei-flat-button-uppercase ei-flat-button-primary">
                  <i class="play icon"></i>
                  <span class="ei-flat-button-text">
                    Oynat
                  </span>
              </div>
            </a>
            <a href="javascript:;">
              <div class="ei-button ei-flat-button-uppercase ei-flat-button-with-border">
                  <i class="plus icon"></i>
                  <span class="ei-flat-button-text">
                    LİSTEM
                  </span>
              </div>
            </a>
            <div class="thumbs-container">
              <div class="thumbs-component">
                <div class="thumb-container thumb-up-container">
                  <a href="javascript:;" class="ei-vote-button simpleround">
                      <svg id="thumb-up" viewBox="0 0 44 44">    <path fill="currentColor" d="M14.4914731,10.5133658 C14.5025232,10.3721258 14.5112703,10.2600368 14.5373244,9.92616603 C14.6065316,9.03836208 14.6757357,8.14414039 14.7403047,7.30077512 C14.7465683,7.21894322 14.7465683,7.21894322 14.752828,7.13707632 C14.9046548,5.15090242 15.0272627,3.45867565 15.0272627,3.40867664 L15.0272627,1.53263123 L16.7144227,0.711648736 C16.9560747,0.594059357 17.2924682,0.45883302 17.7131667,0.333356234 C19.0883517,-0.0768040048 20.5613519,-0.154799924 22.0533288,0.363315376 C24.5195179,1.21974305 26.1769774,3.46135556 26.8035959,6.84975024 C27.351817,9.81421638 27.5019717,12.9866944 27.3599098,16.0115829 L34.1297665,16.0259652 L34.2527202,16.036358 C37.3831944,16.3009647 40,18.0263548 40,21.50351 C40,22.0672808 39.9265137,22.5421505 39.8025926,23.0579114 C40.5520589,23.9178872 41,25.0573442 41,26.5026539 C41,28.4265345 40.1989133,29.8141446 38.9529692,30.7147706 C39,31.0829242 39,31.2285855 39,31.5017978 C39,33.4256784 38.1989133,34.8132885 36.9529692,35.7139145 C37,36.1120923 37,36.2277294 37,36.5009417 C37,39.978097 34.3831944,41.703487 31.2527202,41.9680938 L31.1299097,41.9784745 L31.0066614,41.9787481 L21.4308667,42 C17.3598399,42 15.3049785,41.5120961 12.3004159,40.2094732 C10.4281403,39.3976996 9.56555009,39.1413507 7.75086356,38.9901527 L5,38.7609533 L5,22.2682088 L9.98007986,19.4037917 L14.4914731,10.5133658 Z M23.8535989,7.39510873 C22.6962315,1.13672751 18.0272627,3.40867664 18.0272627,3.40867664 C18.0272627,3.82250684 17.4358448,11.340371 17.4358448,11.340371 L12.2509485,21.558043 L8,24.003082 L8,36.0010273 C14,36.5009417 13.6061821,39.0005137 21.4308667,39.0005137 L31,38.9792692 C32.339044,38.866085 34,38.2712124 34,36.5009417 C34,34.730671 32.339044,34.1357984 31,34.0013698 L33,33.9801253 C34.339044,33.8669411 36,33.2720686 36,31.5017978 C36,29.7315271 34.339044,29.1366545 33,29.0022259 L35,28.9809814 C36.339044,28.8677972 38,28.2729247 38,26.5026539 C38,24.7323832 36.339044,24.1375106 35,24.003082 L34,23.9818375 C35.339044,23.8686533 37,23.2737808 37,21.50351 C37,19.7332393 35.339044,19.1383668 34,19.0251826 L24.0526449,19.0040499 C24.2446335,18.1909366 24.845597,12.7592672 23.8535989,7.39510873 Z">
                      </path>
                      </svg>
                  </a>
                </div>
                <div class="thumb-container thumb-down-container">
                    <a href="javascript:;" class="ei-vote-button simpleround">
                      <svg id="thumb-down" viewBox="0 0 44 44">    <path fill="currentColor" d="M29.5085269,33.4866342 C29.4974768,33.6278742 29.4887297,33.7399632 29.4626756,34.073834 C29.3934684,34.9616379 29.3242643,35.8558596 29.2596953,36.6992249 C29.2534317,36.7810568 29.2534317,36.7810568 29.247172,36.8629237 C29.0953452,38.8490976 28.9727373,40.5413244 28.9727373,40.5913234 L28.9727373,42.4673688 L27.2855773,43.2883513 C27.0439253,43.4059406 26.7075318,43.541167 26.2868333,43.6666438 C24.9116483,44.076804 23.4386481,44.1547999 21.9466712,43.6366846 C19.4804821,42.780257 17.8230226,40.5386444 17.1964041,37.1502498 C16.648183,34.1857836 16.4980283,31.0133056 16.6400902,27.9884171 L9.87023353,27.9740348 L9.74727981,27.963642 C6.61680565,27.6990353 4,25.9736452 4,22.49649 C4,21.9327192 4.07348633,21.4578495 4.19740742,20.9420886 C3.44794109,20.0821128 3,18.9426558 3,17.4973461 C3,15.5734655 3.80108673,14.1858554 5.04703083,13.2852294 C5,12.9170758 5,12.7714145 5,12.4982022 C5,10.5743216 5.80108673,9.18671152 7.04703083,8.28608555 C7,7.88790771 7,7.77227059 7,7.49905828 C7,4.02190301 9.61680565,2.29651296 12.7472798,2.03190622 L12.8700903,2.02152553 L12.9933386,2.0212519 L22.5691333,2 C26.6401601,2 28.6950215,2.48790389 31.6995841,3.79052685 C33.5718597,4.60230044 34.4344499,4.8586493 36.2491364,5.00984729 L39,5.23904667 L39,21.7317912 L34.0199201,24.5962083 L29.5085269,33.4866342 Z M20.1464011,36.6048913 C21.3037685,42.8632725 25.9727373,40.5913234 25.9727373,40.5913234 C25.9727373,40.1774932 26.5641552,32.659629 26.5641552,32.659629 L31.7490515,22.441957 L36,19.996918 L36,7.99897267 C30,7.49905828 30.3938179,4.99948634 22.5691333,4.99948634 L13,5.02073084 C11.660956,5.133915 10,5.72878756 10,7.49905828 C10,9.26932901 11.660956,9.86420157 13,9.99863023 L11,10.0198747 C9.66095598,10.1330589 8,10.7279314 8,12.4982022 C8,14.2684729 9.66095598,14.8633455 11,14.9977741 L9,15.0190186 C7.66095598,15.1322028 6,15.7270753 6,17.4973461 C6,19.2676168 7.66095598,19.8624894 9,19.996918 L10,20.0181625 C8.66095598,20.1313467 7,20.7262192 7,22.49649 C7,24.2667607 8.66095598,24.8616332 10,24.9748174 L19.9473551,24.9959501 C19.7553665,25.8090634 19.154403,31.2407328 20.1464011,36.6048913 Z"></path>
                      </svg>
                    </a>
                </div>
              </div>
            </div>
          </div>
          <div class="meta-lists">
            <div class="cast inline-list">
              <span class="list-label">Başroldekiler:</span>
              <span class="list-items">
                <a href="javascript:;">Frank Grillo</a>,
                <a href="javascript:;">Anthony Mackie</a>,
                <a href="javascript:;">Marcia Gay Harden</a>
              </span>
            </div>
            <div class="genres inline-list">
                <span class="list-label">Türler:</span>
                <span class="list-items">
                  <a href="/browse/genre/1365">Aksiyon ve Macera</a>,
                  <a href="/browse/genre/9584">Suç Konulu Aksiyon ve Maceralar</a>
                </span>
            </div>
            <div class="tags inline-list">
                <span class="list-label">Bu film:</span>
                <span class="list-items">
                  <a href="/browse/genre/1632671">Ezber Bozan</a>,
                  <a href="/browse/genre/100044">Sert Gerçekçi</a>,
                  <a href="/browse/genre/100041">Heyecanlı</a>
                </span>
            </div>
          </div>
        </div>
        <div class="ei-play-hitzone" role="presentation"></div><!-- Play Video Hidden Link -->
      </div>

      <div class="tabs " id="tab-OtherVideos">
        <div class="detail-slider ">
          <div class="swiper-wrapper">
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
                <i class="play icon outline-border center-icon"></i>
                <a role="button" class="ei-icon-button mylist-button" aria-label="Listeme Ekle">
                  <span role="presentation" class="ei-icon-button-icon">
                    <i class="plus icon"></i>
                  </span>
                  <span class="ei-icon-button-tooltip">LİSTEME EKLE</span>
                </a>
              </div>
              <div class="meta">
                <div class="otherVideoTitle">Eğitim Video 1</div>
                <span class="duration strong">1 sa. 43dk.</span>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABUoGpq0wDb70-WQ5XhIPIVtOcHDFyD0VMCq1SGTKu8OwCEt4VQMr9mo7lTsV-PjBW9OOjqUDkpAwnFPrPKccGB2g50KPr5DnIj42szg0ehfHZJnRi5ulGjWDoTkI.jpg?r=08c');">
                <i class="play icon outline-border center-icon"></i>
                <a role="button" class="ei-icon-button mylist-button" aria-label="Listeme Ekle">
                  <span role="presentation" class="ei-icon-button-icon">
                    <i class="plus icon"></i>
                  </span>
                  <span class="ei-icon-button-tooltip">LİSTEME EKLE</span>
                </a>
              </div>
              <div class="meta">
                <div class="otherVideoTitle">Eğitim Video 2</div>
                <span class="duration strong">1 sa. 23dk.</span>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABSCXLggS_9oTMTvfBn556Lsea3Xi6nJoNguU5oFOHirCwodyeesx2V8FWsPaJ63TRcDzqf2g5rAXXgmkEdi-l9GFlRmm4z4l.webp?r=595');">
                <div class="lock-overlay"></div>
                <i class="lock icon lock-center-icon"></i>
              </div>
              <div class="meta">
                <div class="otherVideoTitle">Eğitim Video 3</div>
                <span class="duration strong">1 sa. 23dk.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tabs " id="tab-ShowDetails">
        <div class="detailsItem">
            <ul>
              <li class="listLabel"><span>Yönetmen </span></li>
              <li>
                <a href="/browse/person/20058219">Joe Lynch</a>
              </li>
              <li class="listLabel">
                <span>Oyuncu Kadrosu</span>
              </li>
              <li>
                <a href="/browse/person/30043514">Frank Grillo</a>
              </li>
              <li>
                <a href="/browse/person/20057598">Anthony Mackie</a>
              </li>
              <li>
                <a href="/browse/person/39214">Marcia Gay Harden</a>
              </li>
              <li>
                <a href="/browse/person/30154046">Teyonah Parris</a>
              </li>
              <li>
                <a href="/browse/person/30017597">Boris McGiver</a>
              </li>
              <li>
                <a href="/browse/person/30100769">Christian Cooke</a>
              </li>
              <li>
                <a href="/browse/person/30200682">Markice Moore</a>
              </li>
              <li class="listLabel">
                <span>Senarist </span>
              </li>
              <li>
                <a href="/browse/person/40211083">Adam G. Simon</a>
              </li>
            </ul>
        </div>
        <div class="detail-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at interdum ex, in iaculis mi. Vivamus ac sodales dui. Aenean fringilla justo ut odio aliquam, id efficitur lectus hendrerit. In eu ex tortor. Integer eget faucibus diam. Donec iaculis scelerisque diam, a varius nibh sodales ut. Nunc ac venenatis ipsum, consequat posuere velit. Cras a fringilla neque. <br><br>

          Duis faucibus accumsan purus eget luctus. Aliquam blandit cursus elit. Ut at libero tellus. Phasellus euismod, ex at egestas facilisis, metus quam sodales mauris, eget pellentesque ante felis a urna. Suspendisse eget quam justo. Phasellus euismod mi eget consectetur pulvinar. Duis quis arcu finibus, lacinia mauris nec, suscipit sem. Cras enim erat, imperdiet eget enim eu, iaculis tincidunt enim. Quisque convallis ante mi. Nam vitae scelerisque ipsum. Fusce volutpat faucibus finibus. Duis  malesuada, eros sed fringilla posuere, velit lorem euismod urna, vel tempor mi lectus nec ante. Ut in tristique quam. Praesent sodales nisl eu faucibus laoreet. Nam odio neque, lobortis id elementum id, luctus non nunc.<br><br>

          Curabitur non scelerisque nulla. Sed quam nisl, volutpat eu vestibulum nec, laoreet vel purus. Nullam egestas eros eu turpis vulputate malesuada. Aenean fermentum tellus eget justo blandit scelerisque. Mauris sed suscipit sem, nec venenatis massa. Curabitur iaculis nunc a ligula auctor semper. Nunc quis dolor sed libero pulvinar tincidunt vel at turpis. Duis scelerisque dui eros. Integer tristique, ante et laoreet laoreet, sem velit pulvinar libero, id euismod elit lectus sodales sapien. Sed  purus nulla, pellentesque sed ultrices id, vulputate id diam. Suspendisse sed magna vitae risus lacinia lobortis quis eget nisi. Mauris et imperdiet quam, in dignissim leo. Curabitur sodales lorem ut est luctus, at gravida felis faucibus.<br><br>

          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at interdum ex, in iaculis mi. Vivamus ac sodales dui. Aenean fringilla justo ut odio aliquam, id efficitur lectus hendrerit. In eu ex tortor. Integer eget faucibus diam. Donec iaculis scelerisque diam, a varius nibh sodales ut. Nunc ac venenatis ipsum, consequat posuere velit. Cras a fringilla neque.<br><br>

          Duis faucibus accumsan purus eget luctus. Aliquam blandit cursus elit. Ut at libero tellus. Phasellus euismod, ex at egestas facilisis, metus quam sodales mauris, eget pellentesque ante felis a urna. Suspendisse eget quam justo. Phasellus euismod mi eget consectetur pulvinar. Duis quis arcu finibus, lacinia mauris nec, suscipit sem. Cras enim erat, imperdiet eget enim eu, iaculis tincidunt enim. Quisque convallis ante mi. Nam vitae scelerisque ipsum. Fusce volutpat faucibus finibus. Duis  malesuada, eros sed fringilla posuere, velit lorem euismod urna, vel tempor mi lectus nec ante. Ut in tristique quam. Praesent sodales nisl eu faucibus laoreet. Nam odio neque, lobortis id elementum id, luctus non nunc.<br><br>

          Curabitur non scelerisque nulla. Sed quam nisl, volutpat eu vestibulum nec, laoreet vel purus. Nullam egestas eros eu turpis vulputate malesuada. Aenean fermentum tellus eget justo blandit scelerisque. Mauris sed suscipit sem, nec venenatis massa. Curabitur iaculis nunc a ligula auctor semper. Nunc quis dolor sed libero pulvinar tincidunt vel at turpis. Duis scelerisque dui eros. Integer tristique, ante et laoreet laoreet, sem velit pulvinar libero, id euismod elit lectus sodales sapien. Sed  purus nulla, pellentesque sed ultrices id, vulputate id diam. Suspendisse sed magna vitae risus lacinia lobortis quis eget nisi. Mauris et imperdiet quam, in dignissim leo. Curabitur sodales lorem ut est luctus, at gravida felis faucibus.
        </div>
      </div>

      <div class="tabs more-like-this" id="tab-MoreLikeThis">
        <div class="detail-slider ">
          <div class="swiper-wrapper">
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
              </div>
              <div class="meta">
                <div class="match-score-wrapper">
                  <div class="match-score">
                    %91 Eşleşme
                  </div>
                </div>
                <span class="year">2018</span>
                <span class="important-box">
                  <span class="important-text">16+</span>
                </span>
                <span class="duration strong">1 sa. 43dk.</span>
                <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
              </div>
              <div class="meta">
                <div class="match-score-wrapper">
                  <div class="match-score">
                    %91 Eşleşme
                  </div>
                </div>
                <span class="year">2018</span>
                <span class="important-box">
                  <span class="important-text">16+</span>
                </span>
                <span class="duration strong">1 sa. 43dk.</span>
                <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
              </div>
              <div class="meta">
                <div class="match-score-wrapper">
                  <div class="match-score">
                    %91 Eşleşme
                  </div>
                </div>
                <span class="year">2018</span>
                <span class="important-box">
                  <span class="important-text">16+</span>
                </span>
                <span class="duration strong">1 sa. 43dk.</span>
                <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
              </div>
              <div class="meta">
                <div class="match-score-wrapper">
                  <div class="match-score">
                    %91 Eşleşme
                  </div>
                </div>
                <span class="year">2018</span>
                <span class="important-box">
                  <span class="important-text">16+</span>
                </span>
                <span class="duration strong">1 sa. 43dk.</span>
                <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
              </div>
              <div class="meta">
                <div class="match-score-wrapper">
                  <div class="match-score">
                    %91 Eşleşme
                  </div>
                </div>
                <span class="year">2018</span>
                <span class="important-box">
                  <span class="important-text">16+</span>
                </span>
                <span class="duration strong">1 sa. 43dk.</span>
                <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
              </div>
              <div class="meta">
                <div class="match-score-wrapper">
                  <div class="match-score">
                    %91 Eşleşme
                  </div>
                </div>
                <span class="year">2018</span>
                <span class="important-box">
                  <span class="important-text">16+</span>
                </span>
                <span class="duration strong">1 sa. 43dk.</span>
                <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
              </div>
              <div class="meta">
                <div class="match-score-wrapper">
                  <div class="match-score">
                    %91 Eşleşme
                  </div>
                </div>
                <span class="year">2018</span>
                <span class="important-box">
                  <span class="important-text">16+</span>
                </span>
                <span class="duration strong">1 sa. 43dk.</span>
                <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
              </div>
            </div>
            <div class="slide-item swiper-slide">
              <div class="video-artwork" style="background-image: url('https://occ-0-1489-1490.1.nflxso.net/dnm/api/v6/0DW6CdE4gYtYx8iy3aj8gs9WtXE/AAAABYxuscUUI8y504hcc2P-8Ogew5upKRAW7F50trjCPSb3rDvuqIPRzqpTVhT1mplhwuOGlBuKPZwK2H4wNSmM2C8W5plv41YJDKUPJWcpR45SRlv-LknRDwjgVYZU9psNJQ.webp?r=e06');">
              </div>
              <div class="meta">
                <div class="match-score-wrapper">
                  <div class="match-score">
                    %91 Eşleşme
                  </div>
                </div>
                <span class="year">2018</span>
                <span class="important-box">
                  <span class="important-text">16+</span>
                </span>
                <span class="duration strong">1 sa. 43dk.</span>
                <div class="simsSynopsis">Nişan sahibi bir gazi. Şok edici bir suikast planı. Deliller onu gösteriyor ama o onurunu korumaya kararlı.</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <ul class="menu" role="tablist">
        <li class="Overview current" data-tab-id="tab-Overview">
          <a role="link" tabindex="0">GENEL BAKIŞ</a>
          <span></span>
        </li>
        <li class="OtherVideos" data-tab-id="tab-OtherVideos">
          <a role="link" tabindex="0">EĞİTİMİN DİĞER VİDEOLARI</a>
          <span></span>
        </li>
        <li class="MoreLikeThis" data-tab-id="tab-MoreLikeThis">
          <a role="link" tabindex="0">BENZERLERİ</a>
          <span></span>
        </li>
        <li class="ShowDetails" data-tab-id="tab-ShowDetails">
          <a role="link" tabindex="0">AYRINTILAR</a>
          <span></span>
        </li>
      </ul>
    </div>
    <button class="close-button icon-close" tabindex="0" aria-label="Kapat"></button>
  </div>
</div>
