<?php

  foreach($output as $categoryId => $category){
  ?>
  <div class="lolomoRow activeSliderTab lolomoRow_title_card">
    <h2 class="rowHeader">
      <span class="rowTitle" aria-label="">
        <div class="row-header-title"><?php echo "$categories[$categoryId] "?></div>
      </span>
    </h2>

    <div id="" class="slider-wrapper main-slider">
      <div class="swiper-wrapper">
          <?php
            foreach($category as $item){
          ?>
          <div class="item swiper-slide" id="<?php echo $item['Barcode']; ?>">
            <div class="video-card">
              <div class="video-poster">
                  <img class="video-cover-img" src="<?php echo $item['LessonImg']  ?>" alt="">
              </div>
              <div class="video-player">

              </div>
              <div class="video-overlay">
                <div class="video-info">
                  <!-- <i class="play icon outline-border center-icon"></i> -->
                  <div class="video-title"><?php echo $item['LessonName']; ?></div>
                  <div class="video-meta">
                    <!--<span class="video-status">
                      <?php echo $item['LessonStatus']; ?>
                    </span>-->
                    <span class="video-time">
                      <?php echo $item['LessonTime']; ?>
                    </span>
                    <span class="slayt-number">
                      <?php echo $item['LessonSlide']; ?>
                    </span>
                  </div>
                  <div class="video-tags">
                    <?php echo $item['LessonTags']; ?>
                  </div>
                  <div class="video-detail-arrow">
                    <svg id="chevron-down" viewBox="0 0 60 19">    <path fill="currentColor" d="M59.5615866,2.44258873 L31.1899791,17.6617954 C30.7515658,17.9123173 30.2505219,18.1002088 30.0626305,18.1002088 C29.874739,18.1002088 29.6242171,18.0375783 29.5615866,18.0375783 C29.4363257,17.9749478 28.9979123,17.7244259 28.559499,17.5365344 L0.501043841,2.44258873 C0.187891441,2.31732777 0,1.94154489 0,1.62839248 C0,1.50313152 0.0626304802,1.37787056 0.12526096,1.18997912 L0.501043841,0.501043841 C0.688935282,0.187891441 1.00208768,0 1.31524008,0 C1.50313152,0 1.62839248,0 1.75365344,0.12526096 L29.1858038,14.8434238 C29.3736952,14.9686848 29.6868476,15.0313152 30,15.0313152 C30.3131524,15.0313152 30.6263048,14.9686848 30.8141962,14.8434238 L58.2463466,0.12526096 C58.6847599,-0.12526096 59.2484342,0 59.4989562,0.501043841 L59.874739,1.18997912 C60.125261,1.62839248 60,2.19206681 59.5615866,2.44258873"></path></svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="title-card-focus-ring"></div>
          </div>
          <?php
            }
          ?>
      </div>

      <div class="swiper-button-next">
        <div class="slide-next"></div>
      </div>
      <div class="swiper-button-prev">
        <div class="slide-prev"></div>
      </div>
    </div>

    <div class="video-detail-tab">
        <div class="background">
          <div class="video-detail-background">
            <div class="img-cover" style=""></div>
          </div>
          <div class="ei-video-player">
            <div class="video-player">

            </div>
          </div>
          <div class="vignette"></div>
          <div class="nav-shadow"></div>
        </div>
        <div class="detail-content">
          <h3>
            <div class="title">
             <img alt="" class="logo" src="">
            </div>
          </h3>
          <div class="tabs overview show" id="tab-Overview">
            <div class="overview-info">
              <div class="video-meta">
                  <!--<span class="detail-status">...</span>-->
                  <span class="detail-year strong">2019</span>
                  <span class="important-box">
                    <span class="slide-number">...</span>
                  </span>
                  <span class="duration strong">...</span>
              </div>
              <div class="detail-title">...</div>
              <div class="detail-exp">
                ...
              </div>
              <div class="overview-action">
                <a class="mr-10 play-video-button" href="" data-lity="">
                  <div class="ei-button ei-flat-button-uppercase ei-flat-button-primary">
                      <i class="play icon"></i>
                      <span class="ei-flat-button-text">
                        BAŞLA
                      </span>
                  </div>
                </a>
              </div>
              <div class="meta-lists">
                <div class="tags inline-list">
                    <span class="list-label">Türü:</span>
                    <span class="list-items"></span>
                </div>
              </div>
            </div>
            <div class="ei-play-hitzone" role="presentation"></div><!-- Play Video Hidden Link -->
          </div>

          <div class="tabs " id="tab-ShowDetails">
            <div class="detail-left">
              <div class="lesson-main-info">
                <ul class="lesson-name">
                  <span> EĞİTİM ADI </span>
                </ul>
                <ul class="lesson-target-group">
                  <span>HEDEF KİTLE</span>
                </ul>
                <ul class="lesson-time">
                  <span>SÜRE</span>
                </ul>
                <ul class="lesson-gains">
                  <span>KAZANIMLAR</span>
                </ul>
              </div>
            </div>
            <div class="detail-right">
              <div class="detail-text">
                <div class="lesson-exp">
                  <span>EĞİTİME GENEL BAKIŞ</span>
                </div>
                <div class="lesson-subjects">
                  <span>KONULAR</span>
                </div>
                <div class="lesson-gains">
                  <span>KAZANIMLAR</span>
                </div>
              </div>
            </div>
          </div>

          <ul class="menu" role="tablist">
            <li class="Overview current" data-tab-id="tab-Overview">
              <a role="link" tabindex="0">GENEL BAKIŞ</a>
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
  <?php
    }
  ?>
