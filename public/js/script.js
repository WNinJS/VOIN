$('a[href^="#"]').click(function () { 
     elementClick = $(this).attr("href");
    destination = $(elementClick).offset().top;
    {
    $('html,body').animate( { scrollTop: destination }, 1500);
    } 
    return false;
})