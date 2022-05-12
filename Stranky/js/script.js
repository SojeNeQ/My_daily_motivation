(function($){
    $(function(){
        // sem příjde naše jQuery
        // ---------------------------------

        /* *** Scroll to section *** */

        $(".jq--scroll--knizky").click(function(){
            $("html, body").animate({scrollTop: $(".jq--knizky").offset().top}, 2500);
        });

        $(".jq--scroll--recenze").click(function(){
            $("html, body").animate({scrollTop: $(".jq--recenze").offset().top}, 1600);
        });

        /* *** Mobile navigation *** */

        $(".jq--nav--icon").click(function(){

            $(".nav-background").slideToggle();
                $(".mobile-nav-back").slideToggle();
                $("nav ul").fadeToggle();

        });

        /* Podmínky */

        $(".jq--images--hamburger").click(function(){
            
            if($(".jq--images--hamburger").attr("src") == "images/hamburgerMenu.png"){

                $($(".jq--images--hamburger").attr("src","images/crossMenu.png"));

            }
            
            else{

                $($(".jq--images--hamburger").attr("src","images/hamburgerMenu.png"));

            }
        });

    });
})(jQuery);