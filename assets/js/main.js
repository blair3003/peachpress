const initApp = () => {
	// add listeners
	const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
	mobileMenuToggle.addEventListener("click", toggleMenu);
};

document.addEventListener("DOMContentLoaded", initApp);


const toggleMenu = () => {
	const menu = document.getElementById("site-navigation");
	menu.classList.toggle("toggle");

	const closed = document.querySelector(".fa-bars");
	closed.classList.toggle("toggle");
	
	const open = document.querySelector(".fa-times");
	open.classList.toggle("toggle");

}