$(function () {
    $("#header").load("header.html");
    $("#footer").load("footer.html");
   

});
$(document).ready(function () {
    $("#myBtn").click(function () {
        $('.toast').toast('show');
    });
});