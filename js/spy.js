// For adjusting anchor links due to the fixed header nav.
var offset = 59;
$('.bs-docs-sidenav li a').click(function(event) {
    event.preventDefault();
    $($(this).attr('href'))[0].scrollIntoView();
    scrollBy(0, -offset);
});