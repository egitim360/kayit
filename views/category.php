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
              <div class="detailsItem">
                  <ul>
                    <li class="listLabel">
                      <span> Video Türü </span>
                      <ul class="lesson-tags">

                      </ul>
                    </li>
                  </ul>
              </div>
              <div class="detail-tags">
                <ul>
                  <li>
                    <img src="assets/img/aa/1.png" alt="">
                  </li>
                  <li>
                    <img src="assets/img/aa/2.png" alt="">
                  </li>
                  <li>
                    <img src="assets/img/aa/3.png" alt="">
                  </li>
                  <li>
                    <img src="assets/img/aa/4.png" alt="">
                  </li>
                  <li>
                    <img src="assets/img/aa/5.png" alt="">
                  </li>

                </ul>
              </div>
            </div>
            <div class="detail-right">
              <div class="detail-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at interdum ex, in iaculis mi. Vivamus ac sodales dui. Aenean fringilla justo ut odio aliquam, id efficitur lectus hendrerit. In eu ex tortor. Integer eget faucibus diam. Donec iaculis scelerisque diam, a varius nibh sodales ut. Nunc ac venenatis ipsum, consequat posuere velit. Cras a fringilla neque. <br><br>

                Duis faucibus accumsan purus eget luctus. Aliquam blandit cursus elit. Ut at libero tellus. Phasellus euismod, ex at egestas facilisis, metus quam sodales mauris, eget pellentesque ante felis a urna. Suspendisse eget quam justo. Phasellus euismod mi eget consectetur pulvinar. Duis quis arcu finibus, lacinia mauris nec, suscipit sem. Cras enim erat, imperdiet eget enim eu, iaculis tincidunt enim. Quisque convallis ante mi. Nam vitae scelerisque ipsum. Fusce volutpat faucibus finibus. Duis  malesuada, eros sed fringilla posuere, velit lorem euismod urna, vel tempor mi lectus nec ante. Ut in tristique quam. Praesent sodales nisl eu faucibus laoreet. Nam odio neque, lobortis id elementum id, luctus non nunc.<br><br>

                Curabitur non scelerisque nulla. Sed quam nisl, volutpat eu vestibulum nec, laoreet vel purus. Nullam egestas eros eu turpis vulputate malesuada. Aenean fermentum tellus eget justo blandit scelerisque. Mauris sed suscipit sem, nec venenatis massa. Curabitur iaculis nunc a ligula auctor semper. Nunc quis dolor sed libero pulvinar tincidunt vel at turpis. Duis scelerisque dui eros. Integer tristique, ante et laoreet laoreet, sem velit pulvinar libero, id euismod elit lectus sodales sapien. Sed  purus nulla, pellentesque sed ultrices id, vulputate id diam. Suspendisse sed magna vitae risus lacinia lobortis quis eget nisi. Mauris et imperdiet quam, in dignissim leo. Curabitur sodales lorem ut est luctus, at gravida felis faucibus.<br><br>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at interdum ex, in iaculis mi. Vivamus ac sodales dui. Aenean fringilla justo ut odio aliquam, id efficitur lectus hendrerit. In eu ex tortor. Integer eget faucibus diam. Donec iaculis scelerisque diam, a varius nibh sodales ut. Nunc ac venenatis ipsum, consequat posuere velit. Cras a fringilla neque.<br><br>

                Duis faucibus accumsan purus eget luctus. Aliquam blandit cursus elit. Ut at libero tellus. Phasellus euismod, ex at egestas facilisis, metus quam sodales mauris, eget pellentesque ante felis a urna. Suspendisse eget quam justo. Phasellus euismod mi eget consectetur pulvinar. Duis quis arcu finibus, lacinia mauris nec, suscipit sem. Cras enim erat, imperdiet eget enim eu, iaculis tincidunt enim. Quisque convallis ante mi. Nam vitae scelerisque ipsum. Fusce volutpat faucibus finibus. Duis  malesuada, eros sed fringilla posuere, velit lorem euismod urna, vel tempor mi lectus nec ante. Ut in tristique quam. Praesent sodales nisl eu faucibus laoreet. Nam odio neque, lobortis id elementum id, luctus non nunc.<br><br>

                Curabitur non scelerisque nulla. Sed quam nisl, volutpat eu vestibulum nec, laoreet vel purus. Nullam egestas eros eu turpis vulputate malesuada. Aenean fermentum tellus eget justo blandit scelerisque. Mauris sed suscipit sem, nec venenatis massa. Curabitur iaculis nunc a ligula auctor semper. Nunc quis dolor sed libero pulvinar tincidunt vel at turpis. Duis scelerisque dui eros. Integer tristique, ante et laoreet laoreet, sem velit pulvinar libero, id euismod elit lectus sodales sapien. Sed  purus nulla, pellentesque sed ultrices id, vulputate id diam. Suspendisse sed magna vitae risus lacinia lobortis quis eget nisi. Mauris et imperdiet quam, in dignissim leo. Curabitur sodales lorem ut est luctus, at gravida felis faucibus.
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
