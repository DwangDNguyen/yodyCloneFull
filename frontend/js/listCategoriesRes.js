const tabMenus = document.querySelectorAll(".header-menu-tablet-items");

tabMenus.forEach((menu, index) => {
	menu.onclick = function () {
		document
			.querySelector(".active-menu-tablet")
			.classList.remove("active-menu-tablet");
		this.classList.add("active-menu-tablet");
	};
});
const optionsFilter = document.querySelectorAll(".main-category");
const contentOptions = document.querySelectorAll(".sub-category");
const subOptionsFilter = document.querySelectorAll(".title-category");
const subContentOptions = document.querySelectorAll(".category");
let indexCheck = 0;
let indexCheckSub = 0;

optionsFilter.forEach((option, index) => {
	const content = contentOptions[index];
	option.onclick = function () {
		if (indexCheck === 0) {
			content.classList.remove("show");
			this.classList.remove("more");

			indexCheck = 1;
		} else {
			content.classList.add("show");
			this.classList.add("more");

			indexCheck = 0;
		}
	};
});

subOptionsFilter.forEach((option, index) => {
	const content = subContentOptions[index];
	option.onclick = function () {
		// if (indexCheck === 0) {
		// 	content.classList.remove("sub-show");
		// 	this.classList.remove("sub-more");

		// 	indexCheckSub = 1;
		// } else {
		// 	content.classList.add("sub-show");
		// 	this.classList.add("sub-more");

		// 	indexCheckSub = 0;
		// }
		content.classList.toggle("sub-show");
		this.classList.toggle("sub-more");
	};
});
