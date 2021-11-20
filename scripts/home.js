$(document).ready(function(){
    // debug if foud doc
    // alert('js doc found');

    //set page as active page
    var activePageItem = document.getElementById('navHomeBtn')
    // both bellow work
        // (1) attribute = it's self + itemX
    // activePageItem.setAttribute("class", activePageItem.getAttribute("class") + " navActive");
        // (2) rewrite the item as a whole 
    activePageItem.setAttribute("class","dropBtn navActive");


})