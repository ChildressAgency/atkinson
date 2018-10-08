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
  
  //team member modal
  $('#team-member-info').on('show.bs.modal', function(e){
    var teamMember = $(e.relatedTarget);
    var teamMemberName = teamMember.data('member_name');
    var teamMemberImage = teamMember.data('team_member_image');
    var teamMemberTitle = teamMember.data('team_member_title');
    var teamMemberBio = teamMember.data('team_member_bio');

    var modal = $(this);
    modal.find('#team-member-image').attr('src', teamMemberImage).attr('alt', teamMemberName);
    modal.find('#team-member-name').text(teamMemberName);
    modal.find('#team-member-title').text(teamMemberTitle);
    modal.find('#team-member-bio').html(teamMemberBio);
  });
});