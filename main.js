/**
 * Created by ferrilata on 08/07/16.
 */
function toggle() {
    var elt = document.getElementById("hidden-nav");

    if (elt.getAttribute('style')!=null
        && elt.getAttribute('style').indexOf('block')!=-1) {
        elt.setAttribute('style', 'display: none;');
    } else {
        elt.setAttribute('style', 'display: block;');
    }
    
    elt = document.getElementsByClassName("toggle-btn")[0];
    if (elt.classList.contains("clicked")){
        elt.classList.remove("clicked");
    } else {
        elt.classList.add("clicked");
    }
}