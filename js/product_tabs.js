function openImage(imageName) {
    var i;
    var x = document.getElementsByClassName("image");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    document.getElementById(imageName).style.display = "block"; 
}