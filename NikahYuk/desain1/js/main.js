

$(window).on("load", function(){

    // home section slideshow
    let slideIndex = $(".slide.active").index();
    const slideLen = $(".slide").length;

    function slideShow(){
        $(".slide").removeClass("active").eq(slideIndex).addClass("active");
        if(slideIndex==slideLen-1){
            slideIndex=0;
        }
        else{
            slideIndex++;
        }
        setTimeout(slideShow, 5000);
    }
    slideShow();
})

$(document).ready(function(){

    // FIXED HEADER
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $(".header").addClass("fixed"); 
        }
        else{
            $(".header").removeClass("fixed");
        }
    })

    // GALLERY POPUP
    const wHeight = $(window).height();
    $(".gallery-popup .gp-img").css("max-height", wHeight + "px");

    let itemIndex = 0;
    const totalGalleryItems = $(".gallery-item").length;
    
    $(".gallery-item").click(function(){
        itemIndex = $(this).index();
        $(".gallery-popup").addClass("open");
        $(".gallery-popup .gp-img").hide();
        gpSlideShow();
    })


    $(".gp-controls .next").click(function(){
        if(itemIndex == totalGalleryItems-1){
            itemIndex = 0;
        }
        else{
            itemIndex++;
        }
        $(".gallery-popup .gp-img").fadeOut(function(){
            gpSlideShow();
        })
    })

    $(".gp-controls .prev").click(function(){
        if(itemIndex == 0){
            itemIndex = totalGalleryItems-1;
        }
        else{
            itemIndex--;
        }
        $(".gallery-popup .gp-img").fadeOut(function(){
            gpSlideShow();
        })
    })

    function gpSlideShow(){
        const imgSrc =$(".gallery-item").eq(itemIndex).find("img").attr("data-large");
        $(".gallery-popup .gp-img").fadeIn().attr("src", "img/" + imgSrc);
        $(".gp-counter").text((itemIndex+1)+"/"+ totalGalleryItems);
    }

    // CLOSE GALLERY POPUP
    $(".gp-close").click(function(){
        $(".gallery-popup").removeClass("open");
    })

    // hide gallery popup when clicked outside of gp-container
    $(".gallery-popup").click(function(event){
        if($(event.target).hasClass("open")){
            $(".gallery-popup").removeClass("open");
        }
    })
})


let copyButtons = document.querySelectorAll(".norek-copy button");

copyButtons.forEach(function(button) {
  button.addEventListener("click", function() {
    let copyText = button.closest(".norek-copy");
    let input = copyText.querySelector("input.text");
    input.select();
    document.execCommand("copy");
    copyText.classList.add("active");
    window.getSelection().removeAllRanges();
    setTimeout(function() {
      copyText.classList.remove("active");
    }, 2500);
  });
});

