$(document).ready(main);

var visible = false;
var menu_bar = document.getElementById('menu-bar');

function main() {
	$('.bt-menu').click(function() {
		if(!visible) {
			$('nav').animate({
				left: '0'
			});
			visible = true;
		} else {
			$('nav').animate({
				left: '100%'
			});
			visible = false;
		}
	});
}
