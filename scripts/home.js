$(document).ready(function(){
    // debug if foud doc
    // alert('js doc found');

    //set page as active page
    var activePageItem = document.getElementById('navHomeBtn')

    // both javascript bellow work
        // (1) attribute = it's self + itemX
    // activePageItem.setAttribute("class", activePageItem.getAttribute("class") + " navActive");
        // (2) rewrite the item as a whole 

    // used (2) from above
    activePageItem.setAttribute("class","dropBtn navActive");


})