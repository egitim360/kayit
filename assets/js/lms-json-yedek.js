J = {
  fileName :[],
  jsonCode: null,
  Barcode: [],
  EducationName: [],
  Status: [],
  Time: [],
  Slide: [],
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
    J.dataFunction.init();
    J.jsonData();
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
        J.Explanation.push(data.Explanation);
        J.Type.push(data.Type);
        J.StartingDate.push(data.StartingDate);
        J.EndDate.push(data.EndDate);
        J.Tags.push(data.Tags);
      });
    }


  },

  dataFunction:{
    init:function(){
      var lastMouseMove,
          lastMouseMoveTab;
      $(".activeSliderTab .item").on({
        mousemove:function(){
          J.currentSlide = $(".activeItem").attr("id");// Get Active Item Id
          J.arrayNumber = jQuery.inArray( J.currentSlide, J.Barcode)// Find Position in array
          J.activeTags = J.Tags[J.arrayNumber].split(",").length;

          J.splitTags = [];//Reset Tags
          for(var i = 0; i < J.activeTags; i++){
            J.splitTags.push(J.Tags[J.arrayNumber].split(",")[i]);
          }

          clearTimeout(lastMouseMoveTab);
          lastMouseMoveTab = setTimeout(function() {
            if($(".activeSliderTab .showDetailTab").length > 0){
              J.dataFunction.detailData();
            }
          },500);
        },

        mouseleave:function(){
          if($(".showDetailTab").length <= 0){
             J.activeTags = null;
             J.splitTags = [];
             J.arrayNumber = null;
          }
        },


        click:function(){
          J.splitTags = [];//Reset Tags
          for(var i = 0; i < J.activeTags; i++){
            J.splitTags.push(J.Tags[J.arrayNumber].split(",")[i]);
          }
          J.dataFunction.detailData();
        },

      });
    },

    detailData: function(){
      //$(".activeSliderTab .detail-status").text(J.Status);
      $(".activeSliderTab .slide-number").text(J.Slide[J.arrayNumber]);
      $(".activeSliderTab .duration").text(J.Time[J.arrayNumber]);
      $(".activeSliderTab .detail-title").text(J.EducationName[J.arrayNumber]);
      $(".activeSliderTab .detail-exp, .activeSliderTab .detail-text .lesson-exp").text(J.Explanation[J.arrayNumber]);
      $(".activeSliderTab .start-date .list-items, .activeSliderTab .end-date .list-items, .activeSliderTab .tags .list-items, .activeSliderTab .detailsItem .lesson-subject").empty();
      for(var y = 0; y < J.splitTags.length; y++){
        $(".activeSliderTab .tags .list-items").append('<a href="javascript:;">' + J.splitTags[y] + '</a>');
        $(".activeSliderTab .detailsItem .lesson-subject").append('<li> <a href="javascript:;">' + J.splitTags[y] + '</a> </li>');
      }


      /* Add Logo Src */
      $(".activeSliderTab .detail-content .title img.logo").attr("src", "/egitimler/" + J.Barcode[J.arrayNumber] + "/logo/logo.png");

      /* Add Img Src */
      $(".activeSliderTab .video-detail-background .img-cover").css({
        "background-image":"url(egitimler/"+J.Barcode[J.arrayNumber]+"/image/detail-photo.jpg)"
      })

      /*Add Video Link to Button*/
      $(".activeSliderTab .overview-action .play-video-button").attr("href","/egitimler/" + J.Barcode[J.arrayNumber] + "/video/detail-video.mp4");


      $(".activeSliderTab .video-detail-tab .video-player video").remove();
      $(".activeSliderTab .video-detail-background .img-cover").css({
        "opacity":"1"
      })
      $(".activeSliderTab .video-detail-tab .video-player").attr("videoName", J.Barcode[J.arrayNumber]);

    }
  }

};

$(document).ready(function() {
  J.init();
});
