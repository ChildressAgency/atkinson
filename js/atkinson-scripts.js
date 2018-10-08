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