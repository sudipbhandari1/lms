$(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},600);
        return false;
    });

});

$('#myCarousel').carousel({
    interval: 5000
});





function printpdf()
{
    myWindow = window.open("js/pdfwebpage.html");
    myWindow.close();  //optional, to close the new window as soon as it opens
//this ensures user doesn't have to close the pop-up manually
}

function printTrigger(elementId) {
    var getMyFrame = document.getElementById(elementId);
    getMyFrame.focus();
    getMyFrame.contentWindow.print();
}










