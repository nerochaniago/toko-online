$(document).ready(function () {
    if (screen.width > 1024) {
        AOS.init({
            easing: 'ease-in-out-sine',
            once: true,
        });
    }
  
    if(screen.width <= 425){
         $(".drop").attr("data-toggle", "collapse").attr("href", "#collapseExample").attr("role", "button").attr("aria-expanded", "false").attr("aria-controls", "collapseExample");
         $(".list").addClass("collapse").attr('id', 'collapseExample');

         $(".drop1").attr("data-toggle", "collapse").attr("href", "#collapseExample1").attr("role", "button").attr("aria-expanded", "false").attr("aria-controls", "collapseExample1");
         $(".list1").addClass("collapse").attr('id', 'collapseExample1');

         $(".drop2").attr("data-toggle", "collapse").attr("href", "#collapseExample2").attr("role", "button").attr("aria-expanded", "false").attr("aria-controls", "collapseExample2");
         $(".list2").addClass("collapse").attr('id', 'collapseExample2');
    }

    if(screen.width > 991){

        $("#aboutimg").attr('src', 'images/about.jpg');
    }

    else{

        $("#aboutimg").attr('src', 'images/aboutpage.jpg');
    }

    });
