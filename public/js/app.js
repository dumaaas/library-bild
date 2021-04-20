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
      $('.disabled-btn').removeAttr('disabled');
    } else {
      $('.disabled-btn').attr('disabled', 'disabled');
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
  $(".forma").submit(function (e) {
    e.preventDefault();
  });

  // Open Modal
  modal = $(".modal");
  $(".show-modal").on('click', function() {
    modal.removeClass('hidden');
  })
  // Close Modal
  $(".close-modal").on('click', function() {
    modal.addClass('hidden');
  })

  // Vrati Knjigu Modal
    vratiModal = $(".vrati-modal");
    $(".show-vratiModal").on('click', function() {
      vratiModal.removeClass('hidden');
    })
    // Close Modal
    $(".close-modal").on('click', function() {
      vratiModal.addClass('hidden');
    })

    // Otpisi Knjigu Modal
    otpisiModal = $(".otpisi-modal");
    $(".show-otpisiModal").on('click', function() {
      otpisiModal.removeClass('hidden');
    })
    // Close Modal
    $(".otpisi-modal").on('click', function() {
      otpisiModal.addClass('hidden');
    })

    // Izbrisi Zapis Modal
    izbrisiModal = $(".izbrisi-modal");
    $(".show-izbrisiModal").on('click', function() {
      izbrisiModal.removeClass('hidden');
    })
    // Close Modal
    $(".izbrisi-modal").on('click', function() {
      izbrisiModal.addClass('hidden');
    })
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

// Category icon upload
$("#icon-upload").change(function () {
  $("#icon-output").text(this.files[0].name);
});

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
      let [firstName, secondName] = [x.children[1].children[0], y.children[1].children[0]]
      //check if the two rows should switch place:
      if (firstName.innerHTML.toLowerCase() > secondName.innerHTML.toLowerCase()) {
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
//ucenikEvidencija, evidencijaIznajmljivanja - funkcija promjene statusa
$(".reservedBook").click(function () {
  var checkMark = $(this);
  var changeColorStatus = checkMark.closest("tr").find(".borderColor")
  var changeTextStatus = checkMark.closest("tr").find(".borderText")
  changeColorStatus.removeClass('border-yellow-500')
  changeColorStatus.removeClass('bg-transparent')
  changeColorStatus.addClass('bg-yellow-200')
  changeTextStatus.text('Potvrdjene rezervacije')
  changeTextStatus.removeClass('text-yellow-500')
  changeTextStatus.addClass('text-yellow-700')
  checkMark.parent().addClass('hidden')
  checkMark.parent().next().removeClass('hidden')
  var backgroundRowChange = checkMark.closest("tr")
  backgroundRowChange.removeClass('bg-gray-200')
})

$(".deniedBook").click(function () {
  var checkMark = $(this);
  var changeColorStatus = checkMark.closest("tr").find(".borderColor")
  var changeTextStatus = checkMark.closest("tr").find(".borderText")
  changeColorStatus.removeClass('border-yellow-500')
  changeColorStatus.removeClass('bg-transparent')
  changeColorStatus.addClass('bg-red-200')
  changeTextStatus.text('Odbijene rezervacije')
  changeTextStatus.removeClass('text-yellow-500')
  changeTextStatus.addClass('text-red-800')
  checkMark.parent().addClass('hidden')
  checkMark.parent().next().removeClass('hidden')
  var backgroundRowChange = checkMark.closest("tr")
  backgroundRowChange.removeClass('bg-gray-200')
})

// Form validation for new librarian
function validacijaBibliotekar() {

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

  if (nameBibliotekar.length == 0) {
    $('#validateNameBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti ime i prezime!</p>');
  }

  if (jmbgBibliotekar.length == 0) {
    $('#validateJmbgBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti JMBG!</p>');
  }

  if (emailBibliotekar.length == 0) {
    $('#validateEmailBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti validnu e-mail adresu!</p>');
  }

  if (usernameBibliotekar.length == 0) {
    $('#validateUsernameBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti korisnicko ime!</p>');
  }

  if (pwBibliotekar.length == 0) {
    $('#validatePwBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti sifru!</p>');
  }

  if (pw2Bibliotekar.length == 0) {
    $('#validatePw2Bibliotekar').append('<p style="color:red;font-size:13px;">Morate ponoviti sifru!</p>');
  }
}

function clearErrorsNameBibliotekar() {
  $("#validateNameBibliotekar").empty();
}

function clearErrorsJmbgBibliotekar() {
  $("#validateJmbgBibliotekar").empty();
}

function clearErrorsEmailBibliotekar() {
  $("#validateEmailBibliotekar").empty();
}

function clearErrorsUsernameBibliotekar() {
  $("#validateUsernameBibliotekar").empty();
}

function clearErrorsPwBibliotekar() {
  $("#validatePwBibliotekar").empty();
}

function clearErrorsPw2Bibliotekar() {
  $("#validatePw2Bibliotekar").empty();
}

$("#sacuvajBibliotekara").keypress(function (e) {
  if (e.which == 13) {
    validacijaBibliotekar();
    return false;
  }
});

// Form validation for editing librarian info
function validacijaBibliotekarEdit() {

  $("#validateNameBibliotekarEdit").empty();
  $("#validateJmbgBibliotekarEdit").empty();
  $("#validateEmailBibliotekarEdit").empty();
  $("#validateUsernameBibliotekarEdit").empty();
  $("#validatePwBibliotekarEdit").empty();
  $("#validatePw2BibliotekarEdit").empty();


  let nameBibliotekarEdit = $("#imePrezimeBibliotekarEdit").val();
  let jmbgBibliotekarEdit = $("#jmbgBibliotekarEdit").val();
  let emailBibliotekarEdit = $("#emailBibliotekarEdit").val();
  let usernameBibliotekarEdit = $("#usernameBibliotekarEdit").val();
  let pwBibliotekarEdit = $("#pwBibliotekarEdit").val();
  let pw2BibliotekarEdit = $("#pw2BibliotekarEdit").val();

  if (nameBibliotekarEdit.length == 0) {
    $('#validateNameBibliotekarEdit').append('<p style="color:red;font-size:13px;">Morate unijeti ime i prezime!</p>');
  }

  if (jmbgBibliotekarEdit.length == 0) {
    $('#validateJmbgBibliotekarEdit').append('<p style="color:red;font-size:13px;">Morate unijeti JMBG!</p>');
  }

  if (emailBibliotekarEdit.length == 0) {
    $('#validateEmailBibliotekarEdit').append('<p style="color:red;font-size:13px;">Morate unijeti validnu e-mail adresu!</p>');
  }

  if (usernameBibliotekarEdit.length == 0) {
    $('#validateUsernameBibliotekarEdit').append('<p style="color:red;font-size:13px;">Morate unijeti korisnicko ime!</p>');
  }

  if (pwBibliotekarEdit.length == 0) {
    $('#validatePwBibliotekarEdit').append('<p style="color:red;font-size:13px;">Morate unijeti sifru!</p>');
  }

  if (pw2BibliotekarEdit.length == 0) {
    $('#validatePw2BibliotekarEdit').append('<p style="color:red;font-size:13px;">Morate ponoviti sifru!</p>');
  }
}

function clearErrorsNameBibliotekarEdit() {
  $("#validateNameBibliotekarEdit").empty();
}

function clearErrorsJmbgBibliotekarEdit() {
  $("#validateJmbgBibliotekarEdit").empty();
}

function clearErrorsEmailBibliotekarEdit() {
  $("#validateEmailBibliotekarEdit").empty();
}

function clearErrorsUsernameBibliotekarEdit() {
  $("#validateUsernameBibliotekarEdit").empty();
}

function clearErrorsPwBibliotekarEdit() {
  $("#validatePwBibliotekarEdit").empty();
}

function clearErrorsPw2BibliotekarEdit() {
  $("#validatePw2BibliotekarEdit").empty();
}

$("#sacuvajBibliotekaraEdit").keypress(function (e) {
  if (e.which == 13) {
    validacijaBibliotekarEdit();
    return false;
  }
});

// Form validation for new student
function validacijaUcenik() {

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

  if (nameUcenik.length == 0) {
    $('#validateNameUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti ime i prezime!</p>');
  }

  if (jmbgUcenik.length == 0) {
    $('#validateJmbgUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti JMBG!</p>');
  }

  if (emailUcenik.length == 0) {
    $('#validateEmailUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti validnu e-mail adresu!</p>');
  }

  if (usernameUcenik.length == 0) {
    $('#validateUsernameUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti korisnicko ime!</p>');
  }

  if (pwUcenik.length == 0) {
    $('#validatePwUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti sifru!</p>');
  }

  if (pw2Ucenik.length == 0) {
    $('#validatePw2Ucenik').append('<p style="color:red;font-size:13px;">Morate ponoviti sifru!</p>');
  }
}

function clearErrorsNameUcenik() {
  $("#validateNameUcenik").empty();
}

function clearErrorsJmbgUcenik() {
  $("#validateJmbgUcenik").empty();
}

function clearErrorsEmailUcenik() {
  $("#validateEmailUcenik").empty();
}

function clearErrorsUsernameUcenik() {
  $("#validateUsernameUcenik").empty();
}

function clearErrorsPwUcenik() {
  $("#validatePwUcenik").empty();
}

function clearErrorsPw2Ucenik() {
  $("#validatePw2Ucenik").empty();
}

$("#sacuvajUcenika").keypress(function (e) {
  if (e.which == 13) {
    validacijaUcenik();
    return false;
  }
});

// Form validation for editing student info
function validacijaUcenikEdit() {

  $("#validateNameUcenikEdit").empty();
  $("#validateJmbgUcenikEdit").empty();
  $("#validateEmailUcenikEdit").empty();
  $("#validateUsernameUcenikEdit").empty();
  $("#validatePwUcenikEdit").empty();
  $("#validatePw2UcenikEdit").empty();


  let nameUcenikEdit = $("#imePrezimeUcenikEdit").val();
  let jmbgUcenikEdit = $("#jmbgUcenikEdit").val();
  let emailUcenikEdit = $("#emailUcenikEdit").val();
  let usernameUcenikEdit = $("#usernameUcenikEdit").val();
  let pwUcenikEdit = $("#pwUcenikEdit").val();
  let pw2UcenikEdit = $("#pw2UcenikEdit").val();

  if (nameUcenikEdit.length == 0) {
    $('#validateNameUcenikEdit').append('<p style="color:red;font-size:13px;">Morate unijeti ime i prezime!</p>');
  }

  if (jmbgUcenikEdit.length == 0) {
    $('#validateJmbgUcenikEdit').append('<p style="color:red;font-size:13px;">Morate unijeti JMBG!</p>');
  }

  if (emailUcenikEdit.length == 0) {
    $('#validateEmailUcenikEdit').append('<p style="color:red;font-size:13px;">Morate unijeti validnu e-mail adresu!</p>');
  }

  if (usernameUcenikEdit.length == 0) {
    $('#validateUsernameUcenikEdit').append('<p style="color:red;font-size:13px;">Morate unijeti korisnicko ime!</p>');
  }

  if (pwUcenikEdit.length == 0) {
    $('#validatePwUcenikEdit').append('<p style="color:red;font-size:13px;">Morate unijeti sifru!</p>');
  }

  if (pw2UcenikEdit.length == 0) {
    $('#validatePw2UcenikEdit').append('<p style="color:red;font-size:13px;">Morate ponoviti sifru!</p>');
  }
}

function clearErrorsNameUcenikEdit() {
  $("#validateNameUcenikEdit").empty();
}

function clearErrorsJmbgUcenikEdit() {
  $("#validateJmbgUcenikEdit").empty();
}

function clearErrorsEmailUcenikEdit() {
  $("#validateEmailUcenikEdit").empty();
}

function clearErrorsUsernameUcenikEdit() {
  $("#validateUsernameUcenikEdit").empty();
}

function clearErrorsPwUcenikEdit() {
  $("#validatePwUcenikEdit").empty();
}

function clearErrorsPw2UcenikEdit() {
  $("#validatePw2UcenikEdit").empty();
}

$("#sacuvajUcenikaEdit").keypress(function (e) {
  if (e.which == 13) {
    validacijaUcenikEdit();
    return false;
  }
});

// Form validation for new book
function validacijaKnjiga() {

  $("#validateNazivKnjiga").empty();
  $("#validateKategorija").empty();
  $("#validateZanr").empty();
  $("#validateAutori").empty();
  $("#validateIzdavac").empty();
  $("#validateGodinaIzdavanja").empty();
  $("#validateKnjigaKolicina").empty();


  let nazivKnjiga = $("#nazivKnjiga").val();
  let kategorija = $("#kategorijaInput").val();
  let zanr = $("#zanroviInput").val();
  let autori = $("#autoriInput").val();
  let izdavac = $("#izdavac").val();
  let godinaIzdavanja = $("#godinaIzdavanja").val();
  let knjigaKolicina = $("#knjigaKolicina").val();

  if (nazivKnjiga.length == 0) {
    $('#validateNazivKnjiga').append('<p style="color:red;font-size:13px;">Morate unijeti naziv knjige!</p>');
  }

  if (kategorija.length == 0) {
    $('#validateKategorija').append('<p style="color:red;font-size:13px;">Morate selektovati kategoriju!</p>');
  }

  if (zanr.length == 0) {
    $('#validateZanr').append('<p style="color:red;font-size:13px;">Morate selektovati zanr!</p>');
  }

  if (autori.length == 0) {
    $('#validateAutori').append('<p style="color:red;font-size:13px;">Morate odabrati autore!</p>');
  }

  if (izdavac == null) {
    $('#validateIzdavac').append('<p style="color:red;font-size:13px;">Morate selektovati izdavaca!</p>');
  }

  if (godinaIzdavanja == null) {
    $('#validateGodinaIzdavanja').append('<p style="color:red;font-size:13px;">Morate selektovati godinu izdavanja!</p>');
  }

  if (knjigaKolicina.length == 0) {
    $('#validateKnjigaKolicina').append('<p style="color:red;font-size:13px;">Morate unijeti kolicinu!</p>');
  }
}

function clearErrorsNazivKnjiga() {
  $("#validateNazivKnjiga").empty();
}

function clearErrorsKategorija() {
  $("#validateKategorija").empty();
}

function clearErrorsZanr() {
  $("#validateZanr").empty();
}

function clearErrorsAutori() {
  $("#validateAutori").empty();
}

function clearErrorsIzdavac() {
  $("#validateIzdavac").empty();
}

function clearErrorsGodinaIzdavanja() {
  $("#validateGodinaIzdavanja").empty();
}

function clearErrorsKnjigaKolicina() {
  $("#validateKnjigaKolicina").empty();
}

$("#sacuvajKnjigu").keypress(function (e) {
  if (e.which == 13) {
    validacijaKnjiga();
    return false;
  }
});

// Form validation for new specification of the book
function validacijaSpecifikacija() {

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

  if (brStrana.length == 0) {
    $('#validateBrStrana').append('<p style="color:red;font-size:13px;">Morate unijeti broj strana!</p>');
  }

  if (pismo == null) {
    $('#validatePismo').append('<p style="color:red;font-size:13px;">Morate selektovati pismo!</p>');
  }

  if (povez == null) {
    $('#validatePovez').append('<p style="color:red;font-size:13px;">Morate selektovati povez!</p>');
  }

  if (format == null) {
    $('#validateFormat').append('<p style="color:red;font-size:13px;">Morate selektovati format!</p>');
  }

  if (isbn.length == 0) {
    $('#validateIsbn').append('<p style="color:red;font-size:13px;">Morate unijeti ISBN!</p>');
  }
}

function clearErrorsBrStrana() {
  $("#validateBrStrana").empty();
}

function clearErrorsPismo() {
  $("#validatePismo").empty();
}

function clearErrorsPovez() {
  $("#validatePovez").empty();
}

function clearErrorsFormat() {
  $("#validateFormat").empty();
}

function clearErrorsIsbn() {
  $("#validateIsbn").empty();
}

$("#sacuvajSpecifikaciju").keypress(function (e) {
  if (e.which == 13) {
    validacijaSpecifikacija();
    return false;
  }
});

// Form validation for renting books
function validacijaIzdavanje() {

  $("#validateUcenikIzdavanje").empty();
  $("#validateDatumIzdavanja").empty();

  let ucenikIzdavanje = $("#ucenikIzdavanje").val();
  let datumIzdavanja = $("#datumIzdavanja").val();

  if (ucenikIzdavanje == null) {
    $('#validateUcenikIzdavanje').append('<p style="color:red;font-size:13px;">Morate selektovati ucenika!</p>');
  }

  if (datumIzdavanja.length == 0) {
    $('#validateDatumIzdavanja').append('<p style="color:red;font-size:13px;">Morate selektovati datum izdavanja!</p>');
  }
}

function clearErrorsUcenikIzdavanje() {
  $("#validateUcenikIzdavanje").empty();
}

function clearErrorsDatumIzdavanja() {
  $("#validateDatumIzdavanja").empty();
}

$("#izdajKnjigu").keypress(function (e) {
  if (e.which == 13) {
    validacijaIzdavanje();
    return false;
  }
});

// Form validation for making reservations
function validacijaRezervisanje() {

  $("#validateUcenikRezervisanje").empty();
  $("#validateDatumRezervisanja").empty();

  let ucenikRezervisanje = $("#ucenikRezervisanje").val();
  let datumRezervisanja = $("#datumRezervisanja").val();

  if (ucenikRezervisanje == null) {
    $('#validateUcenikRezervisanje').append('<p style="color:red;font-size:13px;">Morate selektovati ucenika!</p>');
  }

  if (datumRezervisanja.length == 0) {
    $('#validateDatumRezervisanja').append('<p style="color:red;font-size:13px;">Morate selektovati datum rezervisanja!</p>');
  }
}

function clearErrorsUcenikRezervisanje() {
  $("#validateUcenikRezervisanje").empty();
}

function clearErrorsDatumRezervisanja() {
  $("#validateDatumRezervisanja").empty();
}

$("#rezervisiKnjigu").keypress(function (e) {
  if (e.which == 13) {
    validacijaRezervisanje();
    return false;
  }
});

// Form validation for new category
function validacijaKategorija() {

  $("#validateNazivKategorije").empty();

  let nazivKategorije = $("#nazivKategorije").val();

  if (nazivKategorije.length == 0) {
    $('#validateNazivKategorije').append('<p style="color:red;font-size:13px;">Morate unijeti naziv kategorije!</p>');
  }
}

function clearErrorsNazivKategorije() {
  $("#validateNazivKategorije").empty();
}

$("#sacuvajKategoriju").keypress(function (e) {
  if (e.which == 13) {
    validacijaKategorija();
    return false;
  }
});

// Form validation for editing category info
function validacijaKategorijaEdit() {

  $("#validateNazivKategorijeEdit").empty();

  let nazivKategorijeEdit = $("#nazivKategorijeEdit").val();

  if (nazivKategorijeEdit.length == 0) {
    $('#validateNazivKategorijeEdit').append('<p style="color:red;font-size:13px;">Morate unijeti naziv kategorije!</p>');
  }
}

function clearErrorsNazivKategorijeEdit() {
  $("#validateNazivKategorijeEdit").empty();
}

$("#sacuvajKategorijuEdit").keypress(function (e) {
  if (e.which == 13) {
    validacijaKategorijaEdit();
    return false;
  }
});

// Form validation for new author
function validacijaAutor() {

  $("#validateImePrezimeAutor").empty();

  let imePrezimeAutor = $("#imePrezimeAutor").val();

  if (imePrezimeAutor.length == 0) {
    $('#validateImePrezimeAutor').append('<p style="color:red;font-size:13px;">Morate unijeti ime i prezime autora!</p>');
  }
}

function clearErrorsImePrezimeAutor() {
  $("#validateImePrezimeAutor").empty();
}

$("#sacuvajAutora").keypress(function (e) {
  if (e.which == 13) {
    validacijaAutor();
    return false;
  }
});

// Form validation for editing author info
function validacijaAutorEdit() {

  $("#validateImePrezimeAutorEdit").empty();

  let imePrezimeAutorEdit = $("#imePrezimeAutorEdit").val();

  if (imePrezimeAutorEdit.length == 0) {
    $('#validateImePrezimeAutorEdit').append('<p style="color:red;font-size:13px;">Morate unijeti ime i prezime autora!</p>');
  }
}

function clearErrorsImePrezimeAutorEdit() {
  $("#validateImePrezimeAutorEdit").empty();
}

$("#sacuvajAutoraEdit").keypress(function (e) {
  if (e.which == 13) {
    validacijaAutorEdit();
    return false;
  }
});

// Form validation for new genre
function validacijaZanr() {

  $("#validateNazivZanra").empty();

  let nazivZanra = $("#nazivZanra").val();

  if (nazivZanra.length == 0) {
    $('#validateNazivZanra').append('<p style="color:red;font-size:13px;">Morate unijeti naziv zanra!</p>');
  }
}

function clearErrorsNazivZanra() {
  $("#validateNazivZanra").empty();
}

$("#sacuvajZanr").keypress(function (e) {
  if (e.which == 13) {
    validacijaZanr();
    return false;
  }
});

// Form validation for new publisher
function validacijaIzdavac() {

  $("#validateNazivIzdavac").empty();

  let nazivIzdavac = $("#nazivIzdavac").val();

  if (nazivIzdavac.length == 0) {
    $('#validateNazivIzdavac').append('<p style="color:red;font-size:13px;">Morate unijeti naziv izdavaca!</p>');
  }
}

function clearErrorsNazivIzdavac() {
  $("#validateNazivIzdavac").empty();
}

$("#sacuvajIzdavac").keypress(function (e) {
  if (e.which == 13) {
    validacijaIzdavac();
    return false;
  }
});

// Form validation for new book bind
function validacijaPovez() {

  $("#validateNazivPovez").empty();

  let nazivPovez = $("#nazivPovez").val();

  if (nazivPovez.length == 0) {
    $('#validateNazivPovez').append('<p style="color:red;font-size:13px;">Morate unijeti naziv poveza!</p>');
  }
}

function clearErrorsNazivPovez() {
  $("#validateNazivPovez").empty();
}

$("#sacuvajPovez").keypress(function (e) {
  if (e.which == 13) {
    validacijaPovez();
    return false;
  }
});

// Form validation for new book format
function validacijaFormat() {

  $("#validateNazivFormat").empty();

  let nazivFormat = $("#nazivFormat").val();

  if (nazivFormat.length == 0) {
    $('#validateNazivFormat').append('<p style="color:red;font-size:13px;">Morate unijeti naziv formata!</p>');
  }
}

function clearErrorsNazivFormat() {
  $("#validateNazivFormat").empty();
}

$("#sacuvajFormat").keypress(function (e) {
  if (e.which == 13) {
    validacijaFormat();
    return false;
  }
});

// Form validation for new book script
function validacijaPismo() {

  $("#validateNazivPismo").empty();

  let nazivPismo = $("#nazivPismo").val();

  if (nazivPismo.length == 0) {
    $('#validateNazivPismo').append('<p style="color:red;font-size:13px;">Morate unijeti naziv pisma!</p>');
  }
}

function clearErrorsNazivPismo() {
  $("#validateNazivPismo").empty();
}

$("#sacuvajPismo").keypress(function (e) {
  if (e.which == 13) {
    validacijaPismo();
    return false;
  }
});

// Form validation for reseting password - student
function validacijaSifraUcenik() {

  $("#validatePwResetUcenik").empty();
  $("#validatePw2ResetUcenik").empty();

  let pwResetUcenik = $("#pwResetUcenik").val();
  let pw2ResetUcenik = $("#pw2ResetUcenik").val();

  if (pwResetUcenik.length == 0) {
    $('#validatePwResetUcenik').append('<p style="color:red;font-size:13px;">Morate unijeti sifru!</p>');
  }

  if (pw2ResetUcenik.length == 0) {
    $('#validatePw2ResetUcenik').append('<p style="color:red;font-size:13px;">Morate ponoviti sifru!</p>');
  }
}

function clearErrorsPwResetUcenik() {
  $("#validatePwResetUcenik").empty();
}

function clearErrorsPw2ResetUcenik() {
  $("#validatePw2ResetUcenik").empty();
}

$("#resetujSifruUcenik").keypress(function (e) {
  if (e.which == 13) {
    validacijaSifraUcenik();
    return false;
  }
});

// Form validation for reseting password - librarian
function validacijaSifraBibliotekar() {

  $("#validatePwResetBibliotekar").empty();
  $("#validatePw2ResetBibliotekar").empty();

  let pwResetBibliotekar = $("#pwResetBibliotekar").val();
  let pw2ResetBibliotekar = $("#pw2ResetBibliotekar").val();

  if (pwResetBibliotekar.length == 0) {
    $('#validatePwResetBibliotekar').append('<p style="color:red;font-size:13px;">Morate unijeti sifru!</p>');
  }

  if (pw2ResetBibliotekar.length == 0) {
    $('#validatePw2ResetBibliotekar').append('<p style="color:red;font-size:13px;">Morate ponoviti sifru!</p>');
  }
}

function clearErrorsPwResetBibliotekar() {
  $("#validatePwResetBibliotekar").empty();
}

function clearErrorsPw2ResetBibliotekar() {
  $("#validatePw2ResetBibliotekar").empty();
}

$("#resetujSifruBibliotekar").keypress(function (e) {
  if (e.which == 13) {
    validacijaSifraBibliotekar();
    return false;
  }
});

function sortTableDate(row) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = $(".sortTableDate");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table[0].rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[row];
      y = rows[i + 1].getElementsByTagName("TD")[row];
      let first = $(x).text().split('.')
      let [d1, m1, y1] = [parseInt(first[0]), parseInt(first[1]), parseInt(first[2])]
      let second = $(y).text().split('.')
      let [d2, m2, y2] = [parseInt(second[0]), parseInt(second[1]), parseInt(second[2])]
      //check if the two rows should switch place:
      if (y1 > y2) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      } else if ((y1 == y2) && (m1 > m2)) {
        shouldSwitch = true;
        break;
      } else if ((y1 == y2 && m1 == m2) && d1 > d2) {
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

$('#uceniciMenu').on('click', function () {
  $('.uceniciMenu').toggle();
})

$(document).on('mouseup', function (e){
  var uceniciMenu = $(".uceniciMenu");
  if (!uceniciMenu.is(e.target) 
       && uceniciMenu.has(e.target).length === 0 
       && !$(e.target).is('.uceniciMenu'))
  {
    uceniciMenu.slideUp();
  }
});

$('#bibliotekariMenu').on('click', function () {
  $('.bibliotekariMenu').toggle();
})

$(document).on('mouseup', function (e){
  var uceniciMenu = $(".bibliotekariMenu");
  if (!uceniciMenu.is(e.target) 
       && uceniciMenu.has(e.target).length === 0 
       && !$(e.target).is('.bibliotekariMenu'))
  {
    uceniciMenu.slideUp();
  }
});

$('#knjigeMenu').on('click', function () {
  $('.knjigeMenu').toggle();
})

$(document).on('mouseup', function (e){
  var uceniciMenu = $(".knjigeMenu");
  if (!uceniciMenu.is(e.target) 
       && uceniciMenu.has(e.target).length === 0 
       && !$(e.target).is('.knjigeMenu'))
  {
    uceniciMenu.slideUp();
  }
});

$('#transakcijeMenu').on('click', function () {
  $('.transakcijeMenu').toggle();
})

$(document).on('mouseup', function (e){
  var uceniciMenu = $(".transakcijeMenu");
  if (!uceniciMenu.is(e.target) 
       && uceniciMenu.has(e.target).length === 0 
       && !$(e.target).is('.transakcijeMenu'))
  {
    uceniciMenu.slideUp();
  }
});

$('#datumMenu').on('click', function () {
  $('.datumMenu').toggle();
})

$(document).on('mouseup', function (e){
  var uceniciMenu = $(".datumMenu");
  if (!uceniciMenu.is(e.target) 
       && uceniciMenu.has(e.target).length === 0 
       && !$(e.target).is('.datumMenu'))
  {
    uceniciMenu.slideUp();
  }
});


function filterFunction(id, dropdown) {
  var input, filter, ul, li, a, i;
  console.log(id);
  console.log(dropdown);

  input = document.getElementById(id);
  filter = input.value.toUpperCase();
  div = document.getElementById(dropdown);
  text = div.getElementsByTagName("p");
  label = div.getElementsByTagName("label");
  img = div.getElementsByTagName("img");

  for (i = 0; i < text.length; i++) {
    txtValue = text[i].textContent || text[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      text[i].style.display = "";
      label[i].style.display = "";
      if (img[i] !== undefined) {
        img[i].style.display = "";
      }
    } else {
      text[i].style.display = "none";
      label[i].style.display = "none";
      if (img[i] !== undefined) {
        img[i].style.display = "none";
      }
    }
  }
}

// Multiple select dropdown list - new book
function dropdown() {
  return {
    options: [],
    selected: [],
    show: false,
    open() {
      this.show = true
    },
    close() {
      this.show = false
    },
    isOpen() {
      return this.show === true
    },
    select(index, event) {

      if (!this.options[index].selected) {
        this.options[index].selected = true;
        this.options[index].element = event.target;
        this.selected.push(index);
      } else {
        this.selected.splice(this.selected.lastIndexOf(index), 1);
        this.options[index].selected = false
      }
    },
    remove(index, option) {
      this.options[option].selected = false;
      this.selected.splice(index, 1);
    },
    loadOptions() {
      const options = document.getElementById('kategorija').options;
      for (let i = 0; i < options.length; i++) {
        this.options.push({
          value: options[i].value,
          text: options[i].innerText,
          selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
        });
      }
    },
    loadOptionsZanrovi() {
      const options = document.getElementById('zanr').options;
      for (let i = 0; i < options.length; i++) {
        this.options.push({
          value: options[i].value,
          text: options[i].innerText,
          selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
        });
      }
    },
    loadOptionsAutori() {
      const options = document.getElementById('autori').options;
      for (let i = 0; i < options.length; i++) {
        this.options.push({
          value: options[i].value,
          text: options[i].innerText,
          selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
        });
      }
    },
    selectedValues() {
      return this.selected.map((option) => {
        return this.options[option].value;
      })
    }
  }
}

function funkcijaDatumVracanja(){
  var selectedDate = new Date($('#datumIzdavanja').val());
  var numberOfDaysToAdd = 20;

  selectedDate.setDate(selectedDate.getDate() + numberOfDaysToAdd);

  var day = selectedDate.getDate();
  var month = selectedDate.getMonth() + 1;
  var year = selectedDate.getFullYear();

  var newDate = [day, month, year].join('/');

  document.getElementById('datumVracanja').value = newDate;
}

//click on one and check all checkboxes (vratiKnjigu.php)
$('.select-all').click(function() {
  if ($(this).is(':checked')) {
      $('.form-checkbox').prop('checked', true);
      $('tr').addClass('bg-gray-200');
  } else {
      $('.form-checkbox').prop('checked', false);
      $('tr').removeClass('bg-gray-200');
  }
});

$('.form-checkbox').click(function() {
  if ($(this).is(':checked')) {
    $(this).closest('tr').addClass('bg-gray-200');
  } else {
    $(this).closest('tr').removeClass('bg-gray-200');
  }
})

// Header - dropdown for create button
$('#dropdownCreate').click(function () {
  $('.dropdown-create').toggle();
});

$(document).on('mouseup', function (e){
  var dropdownCreate = $(".dropdown-create");
  if (!dropdownCreate.is(e.target) 
       && dropdownCreate.has(e.target).length === 0 
       && !$(e.target).is('.dropdownCreate'))
  {
    dropdownCreate.slideUp();
  }
});

// Header - dropdown for profile button
$('#dropdownProfile').click(function () {
  $('.dropdown-profile').toggle();
});

$(document).on('mouseup', function (e){
  var dropdownProfile = $(".dropdown-profile");
  if (!dropdownProfile.is(e.target) 
       && dropdownProfile.has(e.target).length === 0 
       && !$(e.target).is('.dropdownProfile'))
  {
    dropdownProfile.slideUp();
  }
});

// Category - table - dropdown
$(".dotsCategory").click(function () {
  var dotsCategory = $(this);
  var dropdownCategory = dotsCategory.closest("td").find(".dropdown-category");
  dropdownCategory.toggle();
})

$(document).on('mouseup', function (e){
  var dropdownCategory = $(".dropdown-category");
  if (!dropdownCategory.is(e.target) 
       && dropdownCategory.has(e.target).length === 0)
  {
    dropdownCategory.slideUp();
  }
});
