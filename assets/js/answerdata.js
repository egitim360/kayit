S = {
  questionData:[],
  answerData:[],
  count:0,
  key:0,

  init:function(){
    S.answerFunc();
    S.inputClick();

    $(".submit.step .summary").niceScroll({
      cursorcolor:"#fff",
      cursorwidth:"4px",
      background:"#515151",
      cursorborder:"1px solid #fff",
      cursorborderradius:0,
      touchbehavior:true
    });  // a world full of color!
  },

  answerFunc:function(){

    var totalStep = $(".step").length -1;
    var totalQuestion = $(".form-group").length -1;
    $(".forward").click(function(){
      if(S.count < totalStep){
        S.count ++;
      }
      if(S.count == totalStep && S.key == 0 ){
        S.key = 1;
        for(var i = 0; i < totalQuestion; i++){
          S.questionData.push($(".form-group:eq("+ i +") p.input-title").text());
          if($(".form-group:eq("+i+") input").val() != undefined){
            if($(".form-group:eq("+i+") input:checked").val() != undefined){
              S.answerData.push($(".form-group:eq("+i+") input:checked").val())
            }
            else{
              S.answerData.push($(".form-group:eq("+i+") input").val())
            }
          }
          else if($(".form-group:eq("+i+") select").val() != undefined){
            S.answerData.push($(".form-group:eq("+i+") select").val())
          }
          else if($(".form-group:eq("+i+") textarea").val() != undefined){
            S.answerData.push($(".form-group:eq("+i+") textarea").val());
          }
          else{
            //S.answerData.push("-")
          }
          /* Result Screen */
          $(".summary-content").append("<li><strong style='color: #515151'>"+(i+1)+"</strong><h5>"+S.questionData[i]+"</h5> <p>"+S.answerData[i]+"</p></li>");
        }
      }
    });

    $(".backward").click(function(){
      if (S.count > 0){
        S.count = S.count - 1;
        S.key = 0;

        /*Reset*/
        $(".summary-content").html('');
        S.answerData = [];
        S.questionData = [];
        /*Reset*/
      }
    });

  },

  inputClick:function(){
    $(".text-area").css({"opacity":"0", "transition":"ease all 0.4s", "pointer-events":"none", "height": "0","overflow": "hidden", "margin":"0"});
    $(".version_2").click(function(){
      if($(this).find("input").attr("show-message") == "true"){
        $(this).parent().next().css({"opacity":"1", "pointer-events":"initial", "height": "auto","overflow": "hidden","margin":"1rem"});
      }
      else{
        $(".text-area").css({"opacity":"0", "pointer-events":"none", "height": "0","overflow": "hidden","margin":"0"});
        $(this).parents(".step").find("textarea").val("");
      }
    })
  }
};

$(document).ready(function() {
  S.init();
});
