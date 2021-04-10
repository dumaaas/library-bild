//open and close hamburger menu
$(function () {
  var hamburger = $('#hamburger');
  var sidebar = $('.sidebar');

  hamburger.on('click', function () {
    if (sidebar.hasClass('sidebar-active')) { // if menu is opened
      //close menu by removing active class
      sidebar.removeClass('sidebar-active');
      //make hamburger shape change 
      hamburger.removeClass('fa-times');
      hamburger.addClass('fa-bars');
      //hide text and arrow
      $(".sidebar-item").addClass("hidden");
      $(".sidebar-item").removeClass("inline");
      //hide/close all opened submenues
      $('.aside-item').hide();
      //change all arrows which are up to down 
      $('.arrow').removeClass('fa-angle-up');
      $('.arrow').addClass('fa-angle-down');
    } else {
      //open menu
      sidebar.addClass('sidebar-active');
      //make hamburger shape change
      hamburger.addClass('fa-times');
      hamburger.removeClass('fa-bars');
      //show text and arrow 
      $(".sidebar-item").removeClass("hidden");
      $(".sidebar-item").addClass("inline");
    }
  });
});

//open close submenu
$(function () {
  var asideArrow = $('.asideArrow');
  asideArrow.on('click', function () {
    //find on which arrow is clicked
    var num = this.id.match(/\d+/)[0];
    //toggle submenu on click
    $('#aside-item_' + num).slideToggle();
    //change arrow on up or down
    if ($('#arrow-collapse_' + num).hasClass('fa-angle-down')) {
      $('#arrow-collapse_' + num).addClass('fa-angle-up');
      $('#arrow-collapse_' + num).removeClass('fa-angle-down');
    } else {
      $('#arrow-collapse_' + num).addClass('fa-angle-down');
      $('#arrow-collapse_' + num).removeClass('fa-angle-up');
    }
  });
});

$(function () {
  $('.form-checkbox').click(function () {
    if ($('.form-checkbox:checked').length > 0) {
      $('#vratiKnjigu').removeAttr('disabled');
    } else {
      $('#vratiKnjigu').attr('disabled', 'disabled');
    }
  });
});


$(document).ready(function () {
  //this will execute on page load(to be more specific when document ready event occurs)
  if ($('.activity-card').length > 6) {
    $('.activity-card:gt(6)').hide();
    $('.activity-showMore').show();
  }
});


$('.activity-showMore').on('click', function () {
  //toggle elements with class .ty-compact-list that their index is bigger than 2
  $('.activity-card:gt(6)').toggle();
  //change text of show more element just for demonstration purposes to this demo
  $(this).text() === 'Show more' ? $(this).text('Show less') : $(this).text('Show more');
});

function AddReadMore() {
  //This limit you can set after how much characters you want to show Read More.
  var carLmt = 1000;
  // Text to show when text is collapsed
  var readMoreTxt = " ... Prikazi vise &#8681;";
  // Text to show when text is expanded
  var readLessTxt = " Prikazi manje &#8657;";


  //Traverse all selectors with this class and manupulate HTML part to show Read More
  $(".addReadMore").each(function() {
      if ($(this).find(".firstSec").length)
          return;

      var allstr = $(this).text();
      if (allstr.length > carLmt) {
          var firstSet = allstr.substring(0, carLmt);
          var secdHalf = allstr.substring(carLmt, allstr.length);
          var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
          $(this).html(strtoadd);
      }

  });
  //Read More and Read Less Click Event binding
  $(document).on("click", ".readMore,.readLess", function() {
      $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
  });
}

$(function() {
  //Calling function after Page Load
  AddReadMore();
});
