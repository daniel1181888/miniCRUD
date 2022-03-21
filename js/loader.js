function pageLoader() {
    myVar = setTimeout(showPage, 700);
}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("content").style.display = "block";
}