//Header Background Color Change
$(window).scroll(function () {
  var top = $(window).scrollTop();
  if (top >= 60) {
    $("header").addClass("scrollDownHeader");
    if ($("#navigationContainer ul").hasClass("blackBg"))
      $("#navigationContainer ul").removeClass("blackBg");
    $("#navigationContainer ul").addClass("whiteBg");
    $(".dropdown-content").addClass("scrolled-down");
  } else {
    if ($("header").hasClass("scrollDownHeader"))
      $("header").removeClass("scrollDownHeader");
    if ($("#navigationContainer ul").hasClass("whiteBg"))
      $("#navigationContainer ul").removeClass("whiteBg");
    $("#navigationContainer ul").addClass("blackBg");
    if ($(".dropdown-content").hasClass("scrolled-down"))
      $(".dropdown-content").removeClass("scrolled-down");
  }
});

//Header Text Color Change
$(window).scroll(function () {
  var top = $(window).scrollTop();
  if (top >= 60) {
    $(".headerText").addClass("scrollDownHeaderText");
    $("#searchInputField").attr("id", "alternateSearchColor");
  } else if ($(".headerText").hasClass("scrollDownHeaderText")) {
    $(".headerText").removeClass("scrollDownHeaderText");
    $("#alternateSearchColor").attr("id", "searchInputField");
  }
});

//Show Search Input Function
function showSearch() {
  if ($(".headerText").hasClass("scrollDownHeaderText")) {
    var element = document.getElementById("alternateSearchColor");
  } else {
    var element = document.getElementById("searchInputField");
  }
  element.classList.add("showSearch");
  element.classList.remove("defaultSearch");
  if ($(".headerText").hasClass("scrollDownHeaderText")) {
    document.getElementById("alternateSearchColor").focus();
  } else {
    document.getElementById("searchInputField").focus();
  }
}

//Hide Search Input Function
function removeSearchInput() {
  if ($(".headerText").hasClass("scrollDownHeaderText")) {
    var element = document.getElementById("alternateSearchColor");
  } else {
    var element = document.getElementById("searchInputField");
  }
  element.classList.add("defaultSearch");
  element.classList.remove("showSearch");
}

function onToggleMenu() {
  let checkBox = document.getElementById("checkBtn");
  let check = document.getElementById("check");
  if (!check.checked) checkBox.classList.add("checkedBox");
  else checkBox.classList.remove("checkedBox");
}
