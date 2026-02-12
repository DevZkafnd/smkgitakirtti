(function ($) {
	"use strict";

	// Spinner
	var spinner = function () {
		setTimeout(function () {
			if ($("#spinner").length > 0) {
				$("#spinner").removeClass("show");
			}
		}, 1);
	};
	spinner();

	// Initiate the wowjs
	new WOW().init();

	// Sticky Navbar
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			$(".sticky-top").addClass("shadow-sm").css("top", "0px");
		} else {
			$(".sticky-top").removeClass("shadow-sm").css("top", "-100px");
		}
	});

	//Get the button
	let mybutton = document.getElementById("btn-back-to-top");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction();
	};

	function scrollFunction() {
		if (
			document.body.scrollTop > 20 ||
			document.documentElement.scrollTop > 20
		) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}
	// When the user clicks on the button, scroll to the top of the document
	mybutton.addEventListener("click", backToTop);

	function backToTop() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}

	// Facts counter
	$('[data-toggle="counter-up"]').counterUp({
		delay: 10,
		time: 2000,
	});

	// Roadmap carousel
	$(".roadmap-carousel").owlCarousel({
		autoplay: true,
		smartSpeed: 1000,
		margin: 25,
		loop: true,
		dots: false,
		nav: true,
		navText: [
			'<i class="bi bi-chevron-left"></i>',
			'<i class="bi bi-chevron-right"></i>',
		],
		responsive: {
			0: {
				items: 1,
			},
			576: {
				items: 2,
			},
			768: {
				items: 3,
			},
			992: {
				items: 4,
			},
			1200: {
				items: 5,
			},
		},
	});

	// init Isotope
	var $grid = $("#product-list").isotope({
		// options
	});
	// filter items on button click
	$(".filter-button-group").on("click", "button", function () {
		var filterValue = $(this).attr("data-filter");
		$grid.isotope({ filter: filterValue });
	});

	$(document).on("click", '[data-toggle="lightbox"]', function (event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});

	// Testimonials carousel
	$(".testimonial-carousel").owlCarousel({
		autoplay: true,
		smartSpeed: 1000,
		margin: 25,
		loop: true,
		center: true,
		dots: false,
		nav: true,
		navText: [
			'<i class="bi bi-chevron-left"></i>',
			'<i class="bi bi-chevron-right"></i>',
		],
		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 2,
			},
			992: {
				items: 3,
			},
		},
	});
})(jQuery);

// This adds some nice ellipsis to the description:
document.querySelectorAll(".projcard-description").forEach(function (box) {
	$clamp(box, { clamp: 6 });
});

var buttons = document.querySelectorAll(".gallery-btn");
var activeClassName = "btn-active";

function activeState(items, activeName) {
	for (var i = 0; i < items.length; i++) {
		if (items[i].classList.contains(activeName)) {
			items[i].classList.remove(activeName);
		}
	}
}

for (var i = 0; i < buttons.length; i++) {
	buttons[i].addEventListener("click", function (e) {
		activeState(buttons, activeClassName);
		e.target.classList.add(activeClassName);
	});
}

const selectProvinsi = document.getElementById("provinsi");
if (selectProvinsi) {
	fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
		.then((response) => response.json())
		.then((regencies) => {
			var data = regencies;
			var tampung = "<option>- Pilih Provinsi -</option>";
			data.forEach((element) => {
				tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
			});
			selectProvinsi.innerHTML = tampung;
		});

	selectProvinsi.addEventListener("change", (e) => {
		var provinsi = e.target.options[e.target.selectedIndex].dataset.reg;
		fetch(
			`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsi}.json`
		)
			.then((response) => response.json())
			.then((districts) => {
				var data = districts;
				var tampung = "<option>- Pilih Kab / Kota -</option>";
				data.forEach((element) => {
					tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
				});
				const elKabupaten = document.getElementById("kabupaten");
				if (elKabupaten) elKabupaten.innerHTML = tampung;
			});
	});
}

const selectKabupaten = document.getElementById("kabupaten");
if (selectKabupaten) {
	selectKabupaten.addEventListener("change", (e) => {
		var kabupaten = e.target.options[e.target.selectedIndex].dataset.reg;
		fetch(
			`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabupaten}.json`
		)
			.then((response) => response.json())
			.then((districts) => {
				var data = districts;
				var tampung = "<option>- Pilih Kecamatan -</option>";
				data.forEach((element) => {
					tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
				});
				const elKecamatan = document.getElementById("kecamatan");
				if (elKecamatan) elKecamatan.innerHTML = tampung;
			});
	});
}

const selectKecamatan = document.getElementById("kecamatan");
if (selectKecamatan) {
	selectKecamatan.addEventListener("change", (e) => {
		var kecamatan = e.target.options[e.target.selectedIndex].dataset.reg;
		fetch(
			`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecamatan}.json`
		)
			.then((response) => response.json())
			.then((districts) => {
				var data = districts;
				var tampung = "<option>- Pilih Kelurahan -</option>";
				data.forEach((element) => {
					tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
				});
				const elKelurahan = document.getElementById("kelurahan");
				if (elKelurahan) elKelurahan.innerHTML = tampung;
			});
	});
}

const eyeIcons = {
	closed:
		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon"><path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" /><path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" /><path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" /></svg>',
	open: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>',
};

function addListeners() {
	const toggleButton = document.querySelector(".toggle-button");

	if (!toggleButton) {
		return;
	}

	toggleButton.addEventListener("click", togglePassword);
}

function togglePassword() {
	const passwordField = document.querySelector("#password");
	const toggleButton = document.querySelector(".toggle-button");

	if (!passwordField || !toggleButton) {
		return;
	}

	toggleButton.classList.toggle("open");

	const isEyeOpen = toggleButton.classList.contains("open");

	toggleButton.innerHTML = isEyeOpen ? eyeIcons.open : eyeIcons.closed;
	passwordField.type = isEyeOpen ? "text" : "password";
}

document.addEventListener("DOMContentLoaded", addListeners);
