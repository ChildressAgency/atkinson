jQuery(document).ready(function($){
  
  //menu open/close
  $('.navbar-toggle').on('click', function(){
    $('#megaNav').fadeToggle(500);
  });
  $(document).keydown(function(e){
    if(e.keyCode == 27){
      $('#megaNav').fadeOut(500);
    }
  });
  
  //change masthead bg
  $(window).scroll(function(){
    if($(document).scrollTop() > 50){
      $('.masthead.homepage').removeClass('clear-bg');
    }
    else{
      $('.masthead.homepage').addClass('clear-bg');
    }
  });
  
  //home-hero continue
  $('#continue').on('click', function(e){
    e.preventDefault;
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 136
        }, 1000);
        return false;
      }
    }    
  }); 

  $('#technologyCarousel .carousel-inner .item').carouselHeights();
  $('#flightOperationsCarousel .carousel-inner .item').carouselHeights();
  $('#maintenanceCarousel .carousel-inner .item').carouselHeights();
  
  //modal sections
  $('#pop-up').on('show.bs.modal', function(e){
    var popUpItem = $(e.relatedTarget);
    var popUpItemTitle = popUpItem.data('pop_up_item_title');
    var popUpItemImage = popUpItem.data('pop_up_item_image_url');
    var popUpItemSubtitle = popUpItem.data('pop_up_item_subtitle');
    var popUpItemContent = popUpItem.data('pop_up_item_content');

    var modal = $(this);
    modal.find('#pop-up-image').attr('src', popUpItemImage).attr('alt', popUpItemTitle);
    modal.find('#pop-up-title').text(popUpItemTitle);
    modal.find('#pop-up-subtitle').text(popUpItemSubtitle);
    modal.find('#pop-up-content').html(popUpItemContent);
  });
});

/*
 Normalize Carousel Heights - pass in Bootstrap Carousel items. 
 https://coderwall.com/p/uf2pka/normalize-twitter-bootstrap-carousel-slide-heights
*/
$.fn.carouselHeights = function () {
  var items = $(this), //grab all slides
    heights = [], //create empty array to store height values
    tallest; //create variable to make note of the tallest slide

  var normalizeHeights = function () {
    items.each(function () { //add heights to array
      heights.push($(this).height());
    });
    tallest = Math.max.apply(null, heights); //cache largest value
    items.each(function () {
      $(this).css('min-height', tallest + 'px');
    });
  };

  normalizeHeights();

  $(window).on('resize orientationchange', function () {
    //reset vars
    tallest = 0;
    heights.length = 0;

    items.each(function () {
      $(this).css('min-height', '0'); //reset min-height
    });
    normalizeHeights(); //run it again 
  });
};