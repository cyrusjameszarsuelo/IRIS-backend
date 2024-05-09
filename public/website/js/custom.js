$(document).ready(function(){
    
    $('.nav-link').removeClass("active");
    let navbarActive = localStorage.getItem("navbar");
    goToByScroll(navbarActive);
    
    $(`#${navbarActive}`).addClass("active");

    // home-slider
    $(".nav-link").click(function(e) {
        $('.nav-link').removeClass("active");

        tempStorage(this.id);

        // Prevent a page reload when a link is pressed
        let element = document.getElementById('home-container');

        if (element.classList.contains('home-slider')) {
            e.preventDefault();
            $(this).addClass("active");
            // Call the scroll function4
            goToByScroll(this.id);
        }

        
        
    });

    // This is a functions that scrolls to #{blah}link
    function goToByScroll(id) {
        if(id){
            // Remove "link" from the ID
            id = id.replace("link-", "");
            // Scroll
            $('html,body').animate({
                scrollTop: $("#" + id).offset().top
            }, 'slow');
        }
    }

    function tempStorage(id){
        localStorage.setItem("navbar", id);
    }
});