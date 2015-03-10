(function($){
  $.wf={};
  wf=$.wf
 wf.input_empty_label_focus=function(){
    $(this).addClass("focus");if ($(this).hasClass("empty")) {$(this).val("");$(this).removeClass("empty")};
  };
  wf.input_empty_label_blur=function(){
    $(this).removeClass("focus");if ($(this).val()==""){$(this).addClass("empty");$(this).val($(this).attr("data-empty-text"))}else{$(this).removeClass("empty")}
  };
  wf.input_empty_label=function(input){
    input.focus(wf.input_empty_label_focus).blur(wf.input_empty_label_blur);
    input.trigger("blur");
  }
  $(function(){
    $("input[data-empty-text]").each(function(){
      wf.input_empty_label($(this));
    });
  });  
})(jQuery)