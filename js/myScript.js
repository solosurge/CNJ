//___________Nav Bar Click On effect__________
$(document).ready(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
     $(".main_nav ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     });
});

//___________Toggle Text______________________
$(document).ready(function() {
    $('.first-p').hide();   
    $( "img.Zheka" ).hover(function() {
    $(this).next().slideToggle(500);
    });
});

/*________________PHP load dynamic page______________

    function swapContent(cv){
    $("#myDiv").html("Put animated .gif here").show();
    var url="myphpscript.php";
    $.post(url, {contentVar: cv},function(data){
        $("#myDiv").html(data).show();
    });
}
_____________________________________*/
