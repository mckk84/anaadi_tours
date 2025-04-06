//Genenral 

$(document).ready(function(){

    var dheight = $(document).height();
    console.log("section="+(dheight - 100)+"px");
    $(".section").css('min-height', (dheight - 180)+"px");

    console.log(base_url);
    var path = window.location.href;
    path = path.replace(base_url, "");
    console.log("path="+path);
    
    $(".nav-item a").each(function () {
        var href = $(this).attr('href');
        href = href.replace(base_url, "");
        if (path === href) 
        {
            console.log("h="+href);
            var ele = $(this).parent().parent().parent();
            if( ele.attr('class') == "sidebar" )
            {
                ele.find('a.nav-link').eq(0).addClass('collapsed');

                $(this).removeClass('collapsed');
            }
            else
            {
                $(this).addClass('active');
                ele.removeClass('collapsed');
                ele.attr("area-expanded", true);
                ele.find(".nav-content").addClass("show");
            }
        }
    });
})