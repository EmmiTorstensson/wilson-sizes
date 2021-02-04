window.onscroll = () => {
	
	var scroll = $(window).scrollTop();

    if (scroll >= window.innerHeight) {
        $('.navigation').addClass('white-header');
    } else {
        $('.navigation').removeClass('white-header');
    }
};