// scroll
$('a[href^="#"]').click(function () { 
     elementClick = $(this).attr("href");
    destination = $(elementClick).offset().top;
    {
    $('html,body').animate( { scrollTop: destination }, 1500);
    } 
    return false;
});

const navSlide = () => {

	// toggle nav
	const burger = document.querySelector('.burger');
	const nav =  document.querySelector('.nav-links');

	burger.addEventListener('click', () => {
		nav.classList.toggle('nav-active');

		// burger animation
		burger.classList.toggle('toggle');
	});




}

navSlide();