function showHide() {
    const panel = document.getElementById("List");
    const currentWidth = window.getComputedStyle(panel).width;
    var allLinks = document.getElementById("allLinks");

    if (currentWidth === "0px") {
        panel.style.width = "80%";
        allLinks.style.maxWidth = "100%";
    } else {
        panel.style.width = "0";
        allLinks.style.maxWidth = "0";
    }
}


function closeSuccess() {
    document.getElementById("successMessage").style.display = "none";
}
