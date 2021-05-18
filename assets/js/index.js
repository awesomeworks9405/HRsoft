var d = new Date();
document.getElementById('fullyear').innerHTML = d.getFullYear();

// initializing AOS ease
AOS.init({
    duration: 1200,
    easing: 'slide-up'
});
// preloader
$(window).load(function () {
    $(".preloader").delay(2000).fadeOut("slow");
});

// contact form with php ajax jquery
$(".contact").submit(function(event){
    event.preventDefault();
    $.ajax({
        url:"contact.php",
        type : 'POST',
        data : $('form').serialize(),
        success : function(data){
            $("#result").html(data);
            $('.alert-box').css('opacity','1');
        }
    });
});

$('#close-alert').on('click', function(){
    $('.alert-box').css('opacity','0');
})
// fixed menu switches.
$(window).on('scroll', function () {
    var scroll = $(window).scrollTop(),
        mainHeader = $('#menu-bar');
        scrolltop = $('#scrollTop');
    // menubar switch/changes with scroll action
    if (scroll > 10) {
        mainHeader.addClass("top-menu2");
    } else {
        mainHeader.removeClass("top-menu2");
    }
    // scroll-to-top icon display 
    if (scroll > 500) {
        scrolltop.css('opacity','1');
    } else {
        scrolltop.css('opacity','0');
    }
});

$('#menuToggle').on('click',function() {
    var t = $('#menuToggle').attr('aria-label');
    if(t == 'true'){
        $('#menuToggle').attr('aria-label','false');
        $('#s-menu-bar').css('margin-left','-25px');
    }
    else if(t == 'false'){
        $('#menuToggle').attr('aria-label','true');
        $('#s-menu-bar').css('margin-left','-80%');
    }
});
function Scroll(id,distance) {
    $(id).click(function(){
        $('html, body').animate({ scrollTop: distance}, 1200);
    });
}
Scroll('#scrollTop',0);

$('.link-drop').click(function(e){
    e.preventDefault();
    var a = $(this).attr('href');
    $('html,body').animate({scrollTop: $(a).offset().top-120}, 1000);
})

var owl = $('.custom1');
owl.owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items: 1,
    margin: 60,
    loop:true,
    autoplay:true,
    autoplayTimeout: 10000,
    autoplayHoverPause:true
});

var owl2 = $('.custom2');
owl2.owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'bounceIn',
    items: 1,
    margin: 60,
    loop:true,
    autoplay:true,
    autoplayTimeout: 10000,
    autoplayHoverPause:true
});

// initializing hamburger 
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
    forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
        this.classList.toggle("is-active");
        }, false);
    });
}