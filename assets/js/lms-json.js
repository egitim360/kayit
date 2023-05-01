J = {
  fileName :[],
  Barcode: [],
  EducationName: [],
  Status: [],
  Time: [],
  Slide: [],
  TargetGroup:[],
  LessonGains:[],
  LessonGainsImg:[],
  LessonSubjects:[],
  Explanation: [],
  Type: [],
  StartingDate: [],
  EndDate: [],
  Tags: [],
  keyJson: 0,
  tabKey: 0,
  totalData :0,
  jsonRun:0,

  /*Variables*/
  currentSlide:null,
  arrayNumber:0,
  activeTags:0,
  splitTags:[],

  init: function() {
    J.jsonData();
    J.dataFunction.init();
  },

  jsonData:function(){

    J.totalData = $(".swiper-slide").length;
    for(var i = 0; i < J.totalData;  i++){
      J.fileName.push($(".swiper-slide:eq(" + i + ")").attr("id"));

      $.get('egitimler/' + J.fileName[i] + '/json/lesson.json', function (data) {

        J.Barcode.push(data.Barcode);
        J.EducationName.push(data.EducationName);
        J.Status.push(data.Status);
        J.Time.push(data.Time);
        J.Slide.push(data.Slide);
        J.TargetGroup.push(data.TargetGroup);
        J.LessonGains.push(data.LessonGains);
        J.LessonGainsImg.push(data.LessonGainsImg);
        J.LessonSubjects.push(data.LessonSubjects);
        J.Explanation.push(data.Explanation);
        J.Type.push(data.Type);
        J.StartingDate.push(data.StartingDate);
        J.EndDate.push(data.EndDate);

        J.Tags.push(data.Tags.split(","));

      });
    }
  },

  dataFunction:{
    init:function(){
      var lastMouseMove,
          lastMouseMoveTab;

          if($(window).width() > 1080){
            $(".activeSliderTab .item").on({
              mousemove:function(){
                J.currentSlide = $(".activeItem").attr("id");// Get Active Item Id
                J.arrayNumber = jQuery.inArray( J.currentSlide, J.Barcode)// Find Position in array

                clearTimeout(lastMouseMoveTab);
                lastMouseMoveTab = setTimeout(function() {
                  if($(".activeSliderTab .showDetailTab").length > 0){
                    J.dataFunction.detailData();
                  }
                },500);
              },

              mouseleave:function(){
                if($(".showDetailTab").length <= 0){
                   J.currentSlide = null;
                }
              },

              click:function(){
                J.currentSlide = $(".activeItem").attr("id");// Get Active Item Id
                J.arrayNumber = jQuery.inArray( J.currentSlide, J.Barcode)// Find Position in array

                clearTimeout(lastMouseMoveTab);
                lastMouseMoveTab = setTimeout(function() {
                  if($(".activeSliderTab .showDetailTab").length > 0){
                    J.dataFunction.detailData();
                  }
                },500);
              }

            });
          }
          else{
            $(".activeSliderTab .item").on({
              click:function(){
                J.currentSlide = $(".activeItem").attr("id");// Get Active Item Id
                J.arrayNumber = jQuery.inArray( J.currentSlide, J.Barcode)// Find Position in array

                clearTimeout(lastMouseMoveTab);
                lastMouseMoveTab = setTimeout(function() {
                  if($(".activeSliderTab .showDetailTab").length > 0){
                    J.dataFunction.detailData();
                  }
                },500);
              }
            });
          }
    },

    detailData: function(){
      /*Reset Slides*/
      $(".activeSliderTab .video-detail-tab .video-player video").remove();
      $(".activeSliderTab .video-detail-background .img-cover").css({
        "opacity":"1"
      });
      $(".activeSliderTab .video-detail-tab .video-player").attr("videoName", J.Barcode[J.arrayNumber]);

      /* Add Video & Img Src */
      $(".activeSliderTab .video-detail-background .img-cover").css({
        "background-image":"url(egitimler/"+J.Barcode[J.arrayNumber]+"/image/detail-photo.jpg)"
      })
      $(".activeSliderTab .overview-action .play-video-button").attr("href","/egitimler/" + J.Barcode[J.arrayNumber] + "/video/detail-video.mp4");


      $(".activeSliderTab .start-date .list-items, .activeSliderTab .end-date .list-items, .activeSliderTab .tags .list-items, .activeSliderTab .detailsItem .lesson-subject").empty();
      $(".activeSliderTab .detail-content .title img.logo").attr("src", "/egitimler/" + J.Barcode[J.arrayNumber] + "/logo/logo.png"); //Logo
      $(".activeSliderTab .slide-number").text(J.Slide[J.arrayNumber]);
      $(".activeSliderTab .duration").text(J.Time[J.arrayNumber]);
      $(".activeSliderTab .detail-title").text(J.EducationName[J.arrayNumber]);
      $(".activeSliderTab .detail-exp").text(J.Explanation[J.arrayNumber]);
      for(var i = 0; i < J.Tags[J.arrayNumber].length; i++){
        $(".activeSliderTab .tags .list-items").append('<a href="javascript:;">' + J.Tags[J.arrayNumber][i] + '</a>');
      }


      /*Details Tab*/
      $(".activeSliderTab .lesson-name li").remove();
      $(".activeSliderTab .lesson-name").append('<li> <p>' + (J.EducationName[J.arrayNumber]) + ' </p> </li>'); //Education Name

      // Target Group
      $(".activeSliderTab .lesson-target-group li").remove();
      $(".activeSliderTab .lesson-target-group").append('<li> <p>' + (J.TargetGroup[J.arrayNumber]) + '</p> </li>'); //Target Group

      // Lesson Duration
      $(".activeSliderTab .lesson-time li").remove();
      $(".activeSliderTab .lesson-time").append('<li> <p>' + (J.Time[J.arrayNumber]) + ' </p> </li>'); // Duration

      // Earnings
      $(".activeSliderTab .detail-left .lesson-gains li").remove("");
      if((J.LessonGains[J.arrayNumber]) != ""){
        $(".activeSliderTab .detail-left .lesson-gains").css({"opacity":"1"});
        $(".activeSliderTab .detail-left .lesson-gains").append('<li> <p>' + J.LessonGains[J.arrayNumber] + '</p> </li> ');
      }
      else{
        $(".activeSliderTab .detail-left .lesson-gains").css({"opacity":"0"});
      }

      // Detail Text
      $(".activeSliderTab .detail-text .lesson-exp p").remove();
      $(".activeSliderTab .detail-text .lesson-exp").append('<p>' + J.Explanation[J.arrayNumber] + '</p>');

      // Subjects
      $(".activeSliderTab .lesson-subjects ul").remove();
      if((J.LessonSubjects[J.arrayNumber]) != ""){
        $(".activeSliderTab .lesson-subjects").css({"opacity":"1", "height":"initial", "margin":"20px 0"});
        $(".activeSliderTab .lesson-subjects").append(J.LessonSubjects[J.arrayNumber]);
      }
      else{
        $(".activeSliderTab .lesson-subjects").css({"opacity":"0", "height":"0", "margin":"0"});
      }

      // Earning Img
      $(".activeSliderTab .lesson-subjects ul").remove();
      if((J.LessonSubjects[J.arrayNumber]) != ""){
        $(".activeSliderTab .lesson-subjects").css({"opacity":"1", "height":"initial", "margin":"20px 0"});
        $(".activeSliderTab .lesson-subjects").append(J.LessonSubjects[J.arrayNumber]);
      }
      else{
        $(".activeSliderTab .lesson-subjects").css({"opacity":"0", "height":"0", "margin":"0"});
      }

      // Gains Img
      $(".activeSliderTab .detail-right .lesson-gains ul").remove();
      if((J.LessonGainsImg[J.arrayNumber]) != ""){
        $(".activeSliderTab .detail-right .lesson-gains").css({"opacity":"1"});
        $(".activeSliderTab .detail-right .lesson-gains").append(J.LessonGainsImg[J.arrayNumber]);
      }
      else{
        $(".activeSliderTab .detail-right .lesson-gains").css({"opacity":"0"});
      }










    }
  }

};

$(document).ready(function() {
  J.init();
});
