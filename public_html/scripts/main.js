function scroller()
{
	window.scrollTo({top: 0, behavior: "smooth"});
}

var checker = window.matchMedia( "(max-width: 764px)" );
if (!checker.matches) {
   $(document).ready(function() {
		var NavY = $('#topmenu').offset().top;
		 
		var stickyNav = function(){
		var ScrollY = $(window).scrollTop();
			  
		if (ScrollY > NavY) { 
			$('#topmenu').addClass('przyklejone');
		} else {
			$('#topmenu').removeClass('przyklejone'); 
			}
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
			stickyNav();
		});
	});
}


$(function () {
	$('.menu').click(function () {
		$('aside nav').toggle('slow');
	})
}
);

var checker = 0;
sessionStorage.setItem("warunek", 0);

function pageScroll() {
	var styleOfScroll = document.getElementById("scrollId");
	if (sessionStorage.getItem("warunek") == 0) {	
		styleOfScroll.style.opacity = "100%";
		styleOfScroll.style.backgroundColor = "#EE6C4D";
		sessionStorage.setItem("warunek", 1);
		scroll()
	} else {
		clearTimeout(scrolldelay);
		styleOfScroll.style.opacity = "70%";
		styleOfScroll.style.backgroundColor = "#778DA9";
		sessionStorage.setItem("warunek", 0);
    }	
}

function scroll() {
	window.scrollBy(0, 2);
	scrolldelay = setTimeout(scroll, 10);
}
var images = ["img/rozkowy2.jpg", "img/wantowy2.jpg", "img/1.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg"];
var licznik = 0;
function imageNew() {
	if (licznik < 6) {
		var upFigure = document.createElement("FIGURE");
		upFigure.classList.add('foto');
		var upImg = document.createElement("IMG");
		upImg.src = images[licznik];
		var image = document.getElementById("galery").appendChild(upFigure).appendChild(upImg);
		licznik++;
	} else {
		var button = document.getElementById("imageShower");
		button.value = "To już jest koniec! Nie ma już nic!";

    }
}
window.onload = function () {
	if ("sekundy" in localStorage) {
		var sekunda = localStorage.getItem("sekundy")
	} else {
		var sekunda = "0" + 0;
	}

	if ("minuty" in localStorage) {
		var minuta = localStorage.getItem("minuty")
	} else {
		var minuta = "0" + 0;
	}

	if ("godziny" in localStorage) {
		var godzina = localStorage.getItem("godziny")
	} else {
		var godzina = "0" + 0;
	}

	var czas;
	
	setInterval(function () {
		localStorage.setItem("sekundy", sekunda);
		localStorage.setItem("minuty", minuta);
		localStorage.setItem("godziny", godzina);

		czas = godzina + ":" + minuta + ":" + sekunda
		document.getElementById("zegarek").innerHTML = czas;
		
		if (sekunda == 59) {
			sekunda = "00";
			minuta++;
			if (minuta < 10) {
				minuta = "0" + minuta;
			}
			if (minuta == 59) {
				minuta = "00";
				godzina++;
				if (godzina < 10) {
					godzina = "0" + godzina;
                }
			}
		} else {
			sekunda++;
			if (sekunda < 10) {
				sekunda = "0" + sekunda;
			}			
        }
	}, 1000);
}




