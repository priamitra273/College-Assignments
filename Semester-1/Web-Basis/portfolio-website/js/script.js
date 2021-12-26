const txtElement = ['Moch Priamitra Nur Alif'];
let count = 0;
let txtIndex = 0;
let currentTxt = '';
let words = '';

(function ngetik(){

	if(count == txtElement.length){
		count = 0;
	}

	currentTxt = txtElement[count];

	words = currentTxt.slice(0, ++txtIndex);
	document.querySelector('.efek-ngetik').textContent = words;

	if(words.length == currentTxt.length){
		count++;
		txtIndex = 0;
	}

	setTimeout(ngetik, 500);

})();

// owl carousel script
$('.carousel').owlCarousel({
	margin: 20,
	loop: true,
	autoplay: true,
	autoplayTimeOut: 2000,
	autoplayHoverPause: true,
	responsive: {
		0:{
			items: 1,
			nav: false
		},
		600:{
			items: 2,
			nav: false
		},
		1000:{
			items: 3,
			nav: false
		}
	}
});

$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
	});

	// toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
});
