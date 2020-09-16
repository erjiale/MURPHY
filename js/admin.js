function product() {
    if (document.getElementById("viewUpdate").style.display="block") {
        document.getElementById("viewUpdate").style.display="none";
        document.getElementById("addProduct").style.display="block";
    } else {
        document.getElementById("addProduct").style.display="block";
    }
    
}

function view() {
    if (document.getElementById("addProduct").style.display="block") {
        document.getElementById("addProduct").style.display="none";
        document.getElementById("viewUpdate").style.display="block";
    } else {
        document.getElementById("viewUpdate").style.display="block";
    }
}

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };
    
    var blankCont = "null";

    $('#imageSelection').on('change', function() {
        imagesPreview(this, 'div.displayProductImage');
    });
});