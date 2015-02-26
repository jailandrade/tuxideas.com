/**
 * Functions used for animation of elements in tuxideas.com
 * @author Mikhail Cruz Andrade
 */

function scrolling(){

	var nav = document.querySelector('.site-header-brand'),
	logo = document.querySelector('.site-logo'),
	scrollTop = document.body.scrollTop,
	menu = document.querySelector('.site-navigation');

	if(window.scrollY != scrollTop){
		addClass(nav, 'scrolled');
		logo.style.display = 'none';
		addClass(menu, 'scrolled');
	}
	else {
		removeClass(nav, 'scrolled');
		removeClass(menu, 'scrolled');
		logo.style.display = '';
	}

}

function addClass(el, className){
	if (el.classList)
	  el.classList.add(className);
	else
	  el.className += ' ' + className;
}

function removeClass(el, className){
	if (el.classList)
		el.classList.remove(className)
	else
		el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
}
