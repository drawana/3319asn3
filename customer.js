window.onload = function () {
    prepareListener();
}

function prepareListener() {
    var droppy;
    droppy = document.getElementById("pickcust");
    droppy.addEventListener("change", getCust);
}

function getCust() {
    this.form.submit();
}