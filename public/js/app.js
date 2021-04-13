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


//when chekbox is cheked button is enabled, otherwise it is disabled
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

  // Dropdown
  $('#dropdownStudent').click(function () {
    $('.dropdown-menu-student').toggle();
  });

  $('#dropdownBookRow1').click(function () {
    $('.dropdown-menu-book-row1').toggle();
  });

  $('#dropdownBookRow2').click(function () {
    $('.dropdown-menu-book-row2').toggle();
  });

  $('#dropdownBookRow3').click(function () {
    $('.dropdown-menu-book-row3').toggle();
  });

  $('#dropdownBookRow4').click(function () {
    $('.dropdown-menu-book-row4').toggle();
  });

  $('#dropdownBookDetail').click(function () {
    $('.dropdown-menu-book-detail').toggle();
  });

  $('#dropdownRentalRecordRow1').click(function () {
    $('.dropdown-menu-rental-record-row1').toggle();
  });

  $('#dropdownRentalRecordRow2').click(function () {
    $('.dropdown-menu-rental-record-row2').toggle();
  });

  $('#dropdownRentalRecordRow3').click(function () {
    $('.dropdown-menu-rental-record-row3').toggle();
  });

  $('#dropdownRentalRecordRow4').click(function () {
    $('.dropdown-menu-rental-record-row4').toggle();
  });

  $('#dropdownRentalRecordRow5').click(function () {
    $('.dropdown-menu-rental-record-row5').toggle();
  });

  $('#dropdownRentalRecordRow6').click(function () {
    $('.dropdown-menu-rental-record-row6').toggle();
  });

  $('#dropdownRentalRecordRow7').click(function () {
    $('.dropdown-menu-rental-record-row7').toggle();
  });

  $('#dropdownRentalRecordRow8').click(function () {
    $('.dropdown-menu-rental-record-row8').toggle();
  });

  $('#dropdownRentalRecordDetailsRow1').click(function () {
    $('.dropdown-menu-rental-record-details-row1').toggle();
  });

  $('#dropdownRentalRecordDetailsRow2').click(function () {
    $('.dropdown-menu-rental-record-details-row2').toggle();
  });

  $('#dropdownRentalRecordDetailsRow3').click(function () {
    $('.dropdown-menu-rental-record-details-row3').toggle();
  });

  $('#dropdownRentalRecordDetailsRow4').click(function () {
    $('.dropdown-menu-rental-record-details-row4').toggle();
  });

  $('#dropdownRentalRecordDetailsRow5').click(function () {
    $('.dropdown-menu-rental-record-details-row5').toggle();
  });

  $('#dropdownRentalRecordDetailsRow6').click(function () {
    $('.dropdown-menu-rental-record-details-row6').toggle();
  });

  $('#dropdownRentalRecordDetailsRow7').click(function () {
    $('.dropdown-menu-rental-record-details-row7').toggle();
  });

  $('#dropdownRentalRecordDetailsRow8').click(function () {
    $('.dropdown-menu-rental-record-details-row8').toggle();
  });

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
  $(".addReadMore").each(function () {
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
  $(document).on("click", ".readMore,.readLess", function () {
    $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
  });
}

$(function () {
  //Calling function after Page Load
  AddReadMore();
});

// File upload
function dataFileDnD() {
  return {
    files: [],
    fileDragging: null,
    fileDropping: null,
    humanFileSize(size) {
      const i = Math.floor(Math.log(size) / Math.log(1024));
      return (
        (size / Math.pow(1024, i)).toFixed(2) * 1 +
        " " + ["B", "kB", "MB", "GB", "TB"][i]
      );
    },
    remove(index) {
      let files = [...this.files];
      files.splice(index, 1);

      this.files = createFileList(files);
    },
    drop(e) {
      let removed, add;
      let files = [...this.files];

      removed = files.splice(this.fileDragging, 1);
      files.splice(this.fileDropping, 0, ...removed);

      this.files = createFileList(files);

      this.fileDropping = null;
      this.fileDragging = null;
    },
    dragenter(e) {
      let targetElem = e.target.closest("[draggable]");

      this.fileDropping = targetElem.getAttribute("data-index");
    },
    dragstart(e) {
      this.fileDragging = e.target
        .closest("[draggable]")
        .getAttribute("data-index");
      e.dataTransfer.effectAllowed = "move";
    },
    loadFile(file) {
      const preview = document.querySelectorAll(".preview");
      const blobUrl = URL.createObjectURL(file);

      preview.forEach(elem => {
        elem.onload = () => {
          URL.revokeObjectURL(elem.src); // free memory
        };
      });

      return blobUrl;
    },
    addFiles(e) {
      const files = createFileList([...this.files], [...e.target.files]);
      this.files = files;
      this.form.formData.files = [...files];
    }
  };
}

 // Student image upload
 var loadFileStudent = function(event) {
      var imageStudent = document.getElementById('image-output-student');
      imageStudent.style.display = "block";
      imageStudent.src = URL.createObjectURL(event.target.files[0]);
};

 // Librarian image upload
var loadFileLibrarian = function(event) {
  var imageStudent = document.getElementById('image-output-librarian');
  imageStudent.style.display = "block";
  imageStudent.src = URL.createObjectURL(event.target.files[0]);
};

