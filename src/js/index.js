import { Collapse } from 'bootstrap';
import SmoothScroll from 'smooth-scroll';
import Splide from '@splidejs/splide';

(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		console.log('ready');

		var scroll = new SmoothScroll('a[href*="#"]', {
			topOnEmptyHash: true,
			speed: 500,
			speedAsDuration: true,
			offset: 78,
			easing: 'easeInOutQuad',
		});

	var eventMenu = document.getElementById("eventMenu");

	if (eventMenu) {
		var heroHeight = document.getElementById('hero').clientHeight;

		var myScrollFunc = function () {
			var y = window.scrollY;
			if (y >= heroHeight) {
				eventMenu.className = "navbar navbar-expand-lg fixed-top eventHero__menu show"
			} else {
				eventMenu.className = "navbar navbar-expand-lg fixed-top eventHero__menu hide"
			}
		};

		window.addEventListener("scroll", myScrollFunc);
	}

	const programSlider = document.querySelectorAll('.programSlider');

	programSlider.forEach((slider)=>{
		new Splide( slider, {
			perPage: 4,
			perMove: 1,
			arrows: true,
			autoWidth: true,
			pagination: false,
			breakpoints: {
				1600: {
					perPage: 3,
				},
				600: {
					perPage: 1,
				}
			}
		} ).mount();
	});

		const partnersSlider = document.querySelectorAll('.partnersSlider');

		partnersSlider.forEach((slider)=>{
			new Splide( slider, {
				perPage: 3,
				perMove: 1,
				gap: '40px',
				arrows: false,
				pagination: false,
				breakpoints: {
					600: {
						perPage: 1,
					}
				}
			} ).mount();
		});

	});
})(jQuery, this);
