$(document).ready(function(){

    /* scroll */
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });

    /* timer */
    function update() {
        var Now = new Date(), Finish = new Date();
        Finish.setHours( 23);
        Finish.setMinutes( 59);
        Finish.setSeconds( 59);
        if( Now.getHours() === 23  &&  Now.getMinutes() === 59  &&  Now.getSeconds === 59) {
            Finish.setDate( Finish.getDate() + 1);
        }
        var sec = Math.floor( ( Finish.getTime() - Now.getTime()) / 1000);
        var hrs = Math.floor( sec / 3600);
        sec -= hrs * 3600;
        var min = Math.floor( sec / 60);
        sec -= min * 60;
        $(".timer .hours").text( pad(hrs) + 'ч');
        $(".timer .minutes").text( pad(min) + 'м');
        $(".timer .seconds").text( pad(sec) + 'с');
        setTimeout( update, 200);
    }
    function pad(s) { return ('00'+s).substr(-2) }
    update();

});


$(window).on("load", function(){

    $(".reviews").owlCarousel({
        items: 1,
        loop: true,
        autoHeight: true,
        smartSpeed: 300,
        mouseDrag: true,
        pullDrag: true,
        dots: false,
        nav: true,
        navText: ''
    });

});