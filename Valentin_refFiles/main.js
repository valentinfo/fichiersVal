var show = true;

setTimeout(function () { 

	// Closing the alert 
	$('#alert').alert('close'); 
}, 2000); 

function showCheckboxes() {
    console.log("test")
    var checkboxes = document.getElementById("checkBoxes");

    if (show) {
        checkboxes.style.display = "block";
        show = false;
    } else {
        checkboxes.style.display = "none";
        show = true;
    }
}
function showCheckboxes2() {
    console.log("test2")
    var checkboxes = document.getElementById("checkBoxes2");

    if (show) {
        checkboxes.style.display = "block";
        show = false;
    } else {
        checkboxes.style.display = "none";
        show = true;
    }
}