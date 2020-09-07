//Header Background Color Change
$(window).scroll(function() {
    var top = $(window).scrollTop();
    if(top>=60) {
        $("header").addClass("scrollDownHeader");
    } else 
    if ($("header").hasClass("scrollDownHeader")) {
        $("header").removeClass("scrollDownHeader");
    }
})

//Header Text Color Change
$(window).scroll(function() {
    var top = $(window).scrollTop();
    if(top>=60) {
        $(".headerText").addClass("scrollDownHeaderText");
        $('#searchInputField').attr("id","alternateSearchColor");
    } else 
    if ($(".headerText").hasClass("scrollDownHeaderText")) {
        $(".headerText").removeClass("scrollDownHeaderText");
        $('#alternateSearchColor').attr("id","searchInputField");
    }
})

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