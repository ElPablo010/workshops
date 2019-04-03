$(document).ready(function() {
    $('.toggle-nav').click(function(e) {
        $('.responsive-nav').slideToggle(500);
 
        e.preventDefault();
    });

    $('#back').on('click', function() {
        window.history.back();
    });

    // Back to top button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            $('#terugNaarBoven').css("display", "block");
        } else {
            $('#terugNaarBoven').css("display", "none");
        }
    }
    
    $('#terugNaarBoven').on('click', function() {
        $('html, body').animate({
            scrollTop: $('html, body').offset().top
        }, 1000, 'linear');
    });

    
});