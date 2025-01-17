
// Make everything a function, and then call the functions when needed, examples below.

// Lazyload.min.js configuration for class="lazy" as well as data-bg for divs, and allow lazyloading of iframes, video, divs and sections.


$(document).ready(function(){
    var lazyLoadInstance = new LazyLoad({elements_selector:"img.lazy, video.lazy, div.lazy, section.lazy, header.lazy, footer.lazy"});
});


 

 $(document).ready(function($) {           
    var anchorLink = $(window.location.hash);
      if ( anchorLink.length ) {
        var offsetSize = parseInt($("#nav-main").innerHeight()+10);
        $("html, body").animate({scrollTop: anchorLink.offset().top - offsetSize }, 500);
      }
  });

$(document).ready(function () {
  var navbarCollapse = function() {
      if($("#nav-main.fixed-top").length === 0) {
          return;
      }
      if ($("#nav-main.fixed-top").offset().top > 50) {
          $("#nav-main").addClass("navbar-scrolled");
      } else {
          $("#nav-main").removeClass("navbar-scrolled");
      }
  };
  // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    $('.close-btn, .overlay').on('click', function () {
        $('.sidebar-menu').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('.menu-btn').on('click', function () {
        $('.sidebar-menu').addClass('active');
        $('.overlay').addClass('active');
    });
});
