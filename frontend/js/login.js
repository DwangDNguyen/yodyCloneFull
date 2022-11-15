const menuOptions = document.querySelectorAll(".options");
const subMenus = document.querySelectorAll(".header-submenu");

menuOptions.forEach((option, index) => {
	const submenu = subMenus[index];
	option.onmouseover = function () {
		submenu.classList.add("active");
		document.querySelector(".modal-overlay").classList.add("active");
	};
	option.onmouseout = function (e) {
		submenu.classList.remove("active");
		document.querySelector(".modal-overlay").classList.remove("active");
	};
});
// scroll, scroll-to-top
const toTop = document.querySelector(".to-top");
window.onscroll = function () {
	document.querySelector(".header").classList.add("scroll");
	toTop.classList.add("to-top-active");
	if (window.pageYOffset === 0) {
		toTop.classList.remove("to-top-active");
	}
};

toTop.onclick = function () {
	document.body.scrollTop = 0;
};

setTimeout(() => {
	const alertSuccess = document.querySelector(".success");
	alertSuccess.style.display = "none";
}, 3000);

const tabMenus = document.querySelectorAll(".header-menu-tablet-items");

tabMenus.forEach((menu, index) => {
	menu.onclick = function () {
		document
			.querySelector(".active-menu-tablet")
			.classList.remove("active-menu-tablet");
		this.classList.add("active-menu-tablet");
	};
});
