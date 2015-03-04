$(document).ready(function() {   
    $('#click1').click(function(e){ 
      if ($("#Bauplanungdetail").hasClass("bg_hidden")){
      $("#Bauplanungdetail")
        .removeClass("bg_hidden")
        .stop()
        .fadeOut("fast");
    }
    else{
      $("#Bauplanungdetail")
        .addClass("bg_hidden")
        .stop()
        .fadeIn("fast");  

    }
  });
    $('#click2').click(function(e){ 
      if ($("#Gewerkedetail").hasClass("bg_hidden")){
      $("#Gewerkedetail")
        .removeClass("bg_hidden")
        .stop()
        .fadeOut("fast");
    }
    else{
      $("#Gewerkedetail")
        .addClass("bg_hidden")
        .stop()
        .fadeIn("fast");  

    }
  });
      $('#click3').click(function(e){ 
      if ($("#Bauherrdetail").hasClass("bg_hidden")){
      $("#Bauherrdetail")
        .removeClass("bg_hidden")
        .stop()
        .fadeOut("fast");
    }
    else{
      $("#Bauherrdetail")
        .addClass("bg_hidden")
        .stop()
        .fadeIn("fast");  

    }
  });    
    $('#click5').click(function(e){ 
      if ($("#Architektdetail").hasClass("bg_hidden")){
      $("#Architektdetail")
        .removeClass("bg_hidden")
        .stop()
        .fadeOut("fast");
    }
    else{
      $("#Architektdetail")
        .addClass("bg_hidden")
        .stop()
        .fadeIn("fast");  

    }
  });
      $('#click4').click(function(e){ 
      if ($("#Bauunternehmerdetail").hasClass("bg_hidden")){
      $("#Bauunternehmerdetail")
        .removeClass("bg_hidden")
        .stop()
        .fadeOut("fast");
    }
    else{
      $("#Bauunternehmerdetail")
        .addClass("bg_hidden")
        .stop()
        .fadeIn("fast");  

    }
  });    

$('#recall').datetimepicker({
	timeFormat: " HH:mm",
  dateFormat: "dd.mm.y" 
});
$('#calledon').datetimepicker({
	timeFormat: " HH:mm",
  dateFormat: "dd.mm.y" 
});
    
});






