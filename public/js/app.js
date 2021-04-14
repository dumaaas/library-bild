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

  // Form
  $(".forma").submit(function(e){
    e.preventDefault();
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
var loadFileStudent = function (event) {
  var imageStudent = document.getElementById('image-output-student');
  imageStudent.style.display = "block";
  imageStudent.src = URL.createObjectURL(event.target.files[0]);
};

// Librarian image upload
var loadFileLibrarian = function (event) {
  var imageStudent = document.getElementById('image-output-librarian');
  imageStudent.style.display = "block";
  imageStudent.src = URL.createObjectURL(event.target.files[0]);
};

function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
//rezervacije promjena statusa
let rezervacije = $('.rezervacije');
rezervacije.on('click', (event) => {
  if (event.target.classList.contains('reservedStatus')) {
    event.target.closest('.changeStatus').classList.add('hidden');
    event.target.closest('.changeStatus').nextElementSibling.classList.remove('hidden');
    event.target.closest('.changeBg').classList.remove('bg-gray-200');
  }
  if (event.target.classList.contains('deniedStatus')) {
    event.target.closest('.changeStatus').classList.add('hidden');
    event.target.closest('.changeStatus').nextElementSibling.nextElementSibling.classList.remove('hidden');
    event.target.closest('.changeBg').classList.remove('bg-gray-200');
  }

})

function changeStyle1() {
  $(".borderColor").removeClass('border-yellow-400')
  $(".borderColor").removeClass('bg-transparent')
  $(".borderColor").addClass('bg-yellow-400')
  $(".borderText").text('Rezervisano')
  $(".borderText").removeClass('text-yellow-400')
  $(".borderText").addClass('text-white')
}

function changeStyle2() {
  $(".borderColor").removeClass('border-yellow-400')
  $(".borderColor").removeClass('bg-transparent')
  $(".borderColor").addClass('bg-red-600')
  $(".borderText").text('Odbijeno')
  $(".borderText").removeClass('text-yellow-400')
  $(".borderText").addClass('text-white')
}

// Form validation for new librarian
function validacijaBibliotekar(){

  $("#validateNameBibliotekar").empty();
  $("#validateJmbgBibliotekar").empty();
  $("#validateEmailBibliotekar").empty();
  $("#validateUsernameBibliotekar").empty();
  $("#validatePwBibliotekar").empty();
  $("#validatePw2Bibliotekar").empty();


  let nameBibliotekar = $("#imePrezimeBibliotekar").val();
  let jmbgBibliotekar = $("#jmbgBibliotekar").val();
  let emailBibliotekar = $("#emailBibliotekar").val();
  let usernameBibliotekar = $("#usernameBibliotekar").val();
  let pwBibliotekar = $("#pwBibliotekar").val();
  let pw2Bibliotekar = $("#pw2Bibliotekar").val();

  if(nameBibliotekar.length == 0){
    $('#validateNameBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti ime i prezime!</p>');
  }

  if(jmbgBibliotekar.length == 0){
    $('#validateJmbgBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti JMBG!</p>');
  }

  if(emailBibliotekar.length == 0){
    $('#validateEmailBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti validnu e-mail adresu!</p>');
  }

  if(usernameBibliotekar.length == 0){
    $('#validateUsernameBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti korisnicko ime!</p>');
  }

  if(pwBibliotekar.length == 0){
    $('#validatePwBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti sifru!</p>');
  }

  if(pw2Bibliotekar.length == 0){
    $('#validatePw2Bibliotekar').append('<p style="color:red;font-size:13px;">Morate ponoviti sifru!</p>');
  }
}

function clearErrorsNameBibliotekar(){
  $("#validateNameBibliotekar").empty();
}

function clearErrorsJmbgBibliotekar(){
  $("#validateJmbgBibliotekar").empty();
}

function clearErrorsEmailBibliotekar(){
  $("#validateEmailBibliotekar").empty();
}

function clearErrorsUsernameBibliotekar(){
  $("#validateUsernameBibliotekar").empty();
}
function clearErrorsPwBibliotekar(){
  $("#validatePwBibliotekar").empty();
}
function clearErrorsPw2Bibliotekar(){
  $("#validatePw2Bibliotekar").empty();
}

$("#sacuvajBibliotekara").keypress(function(e){
  if(e.which == 13){
    validacijaBibliotekar();
    return false;
  }
});

// Form validation for new student
function validacijaUcenik(){

  $("#validateNameUcenik").empty();
  $("#validateJmbgUcenik").empty();
  $("#validateEmailUcenik").empty();
  $("#validateUsernameUcenik").empty();
  $("#validatePwUcenik").empty();
  $("#validatePw2Ucenik").empty();


  let nameUcenik = $("#imePrezimeUcenik").val();
  let jmbgUcenik = $("#jmbgUcenik").val();
  let emailUcenik = $("#emailUcenik").val();
  let usernameUcenik = $("#usernameUcenik").val();
  let pwUcenik = $("#pwUcenik").val();
  let pw2Ucenik = $("#pw2Ucenik").val();

  if(nameUcenik.length == 0){
    $('#validateNameUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti ime i prezime!</p>');
  }

  if(jmbgUcenik.length == 0){
    $('#validateJmbgUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti JMBG!</p>');
  }

  if(emailUcenik.length == 0){
    $('#validateEmailUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti validnu e-mail adresu!</p>');
  }

  if(usernameUcenik.length == 0){
    $('#validateUsernameUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti korisnicko ime!</p>');
  }

  if(pwUcenik.length == 0){
    $('#validatePwUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti sifru!</p>');
  }

  if(pw2Ucenik.length == 0){
    $('#validatePw2Ucenik').append('<p style="color:red;font-size:13px;">Morate ponoviti sifru!</p>');
  }
}

function clearErrorsNameUcenik(){
  $("#validateNameUcenik").empty();
}

function clearErrorsJmbgUcenik(){
  $("#validateJmbgUcenik").empty();
}

function clearErrorsEmailUcenik(){
  $("#validateEmailUcenik").empty();
}

function clearErrorsUsernameUcenik(){
  $("#validateUsernameUcenik").empty();
}
function clearErrorsPwUcenik(){
  $("#validatePwUcenik").empty();
}
function clearErrorsPw2Ucenik(){
  $("#validatePw2Ucenik").empty();
}

$("#sacuvajUcenika").keypress(function(e){
  if(e.which == 13){
    validacijaUcenik();
    return false;
  }
});

// Form validation for new book
function validacijaKnjiga(){

  $("#validateNazivKnjiga").empty();
  $("#validateKategorija").empty();
  $("#validateZanr").empty();
  $("#validateAutori").empty();
  $("#validateIzdavac").empty();
  $("#validateGodinaIzdavanja").empty();


  let nazivKnjiga = $("#nazivKnjiga").val();
  let kategorija = $("#kategorija").val();
  let zanr = $("#zanr").val();
  let autori = $("#autori").val();
  let izdavac = $("#izdavac").val();
  let godinaIzdavanja = $("#godinaIzdavanja").val();

  if(nazivKnjiga.length == 0){
    $('#validateNazivKnjiga').append('<p style="color:red;font-size:13px;">Morate unijeti naziv knjige!</p>');
  }

  if(kategorija == null){
    $('#validateKategorija').append('<p style="color:red;font-size:13px;">Morate selektovati kategoriju!</p>');
  }

  if(zanr == null){
    $('#validateZanr').append('<p style="color:red;font-size:13px;">Morate selektovati zanr!</p>');
  }

  if(autori == null){
    $('#validateAutori').append('<p style="color:red;font-size:13px;">Morate odabrati autore!</p>');
  }

  if(izdavac == null){
    $('#validateIzdavac').append('<p style="color:red;font-size:13px;">Morate selektovati izdavaca!</p>');
  }

  if(godinaIzdavanja == null){
    $('#validateGodinaIzdavanja').append('<p style="color:red;font-size:13px;">Morate selektovati godinu izdavanja!</p>');
  }
}

function clearErrorsNazivKnjiga(){
  $("#validateNazivKnjiga").empty();
}

function clearErrorsKategorija(){
  $("#validateKategorija").empty();
}

function clearErrorsZanr(){
  $("#validateZanr").empty();
}

function clearErrorsAutori(){
  $("#validateAutori").empty();
}
function clearErrorsIzdavac(){
  $("#validateIzdavac").empty();
}
function clearErrorsGodinaIzdavanja(){
  $("#validateGodinaIzdavanja").empty();
}

$("#sacuvajKnjigu").keypress(function(e){
  if(e.which == 13){
    validacijaKnjiga();
    return false;
  }
});

// Form validation for new book
function validacijaSpecifikacija(){

  $("#validateBrStrana").empty();
  $("#validatePismo").empty();
  $("#validatePovez").empty();
  $("#validateFormat").empty();
  $("#validateIsbn").empty();

  let brStrana = $("#brStrana").val();
  let pismo = $("#pismo").val();
  let povez = $("#povez").val();
  let format = $("#format").val();
  let isbn = $("#isbn").val();

  if(brStrana.length == 0){
    $('#validateBrStrana').append('<p style="color:red;font-size:13px;">Morate unijeti broj strana!</p>');
  }

  if(pismo == null){
    $('#validatePismo').append('<p style="color:red;font-size:13px;">Morate selektovati pismo!</p>');
  }

  if(povez == null){
    $('#validatePovez').append('<p style="color:red;font-size:13px;">Morate selektovati povez!</p>');
  }

  if(format == null){
    $('#validateFormat').append('<p style="color:red;font-size:13px;">Morate selektovati format!</p>');
  }

  if(isbn.length == 0){
    $('#validateIsbn').append('<p style="color:red;font-size:13px;">Morate unijeti ISBN!</p>');
  }
}

function clearErrorsBrStrana(){
  $("#validateBrStrana").empty();
}

function clearErrorsPismo(){
  $("#validatePismo").empty();
}

function clearErrorsPovez(){
  $("#validatePovez").empty();
}

function clearErrorsFormat(){
  $("#validateFormat").empty();
}
function clearErrorsIsbn(){
  $("#validateIsbn").empty();
}

$("#sacuvajSpecifikaciju").keypress(function(e){
  if(e.which == 13){
    validacijaSpecifikacija();
    return false;
  }
});