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

// show cate
const optionsFilter = document.querySelectorAll(
	".container-content_products-cate-option-title"
);
const seeMore = document.querySelectorAll(".see-more");
const seeLess = document.querySelectorAll(".see-less");
const contentOptions = document.querySelectorAll(
	".container-content_products-cate-option-list"
);
// const seeMore = document.querySelectorAll(".see-more");
let indexCheck = 0;
optionsFilter.forEach((option, index) => {
	const content = contentOptions[index];
	option.onclick = function () {
		if (indexCheck === 0) {
			content.classList.remove("show");
			this.classList.remove("more");
			if (index !== 3) {
				optionsFilter[index + 1].style.marginTop = "0px";
			}
			indexCheck = 1;
		} else {
			this.classList.add("more");
			content.classList.add("show");
			if (index !== 3) {
				optionsFilter[index + 1].style.marginTop = "5px";
			}
			indexCheck = 0;
		}
	};
});

// see more
const newContentOptions = [contentOptions[1], contentOptions[3]];

seeMore.forEach((see, index) => {
	const content = newContentOptions[index];
	const less = seeLess[index];
	see.onclick = function () {
		content.classList.toggle("show-more");
		if (content.classList.contains("show-more")) {
			this.style.display = "none";
			less.style.display = "block";
			less.onclick = function () {
				content.classList.remove("show-more");
				see.style.display = "block";
				less.style.display = "none";
			};
		} else {
			this.style.display = "block";
			less.style.display = "none";
		}
	};
});

// check cate
const cates = document.querySelectorAll(
	".container-content_products-cate-option-list-item"
);

cates.forEach((cate, index) => {
	cate.onclick = function () {
		this.classList.toggle("check-cate");
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

// responsive
const tabMenus = document.querySelectorAll(".header-menu-tablet-items");

tabMenus.forEach((menu, index) => {
	menu.onclick = function () {
		document
			.querySelector(".active-menu-tablet")
			.classList.remove("active-menu-tablet");
		this.classList.add("active-menu-tablet");
	};
});

// const prices = document.querySelectorAll(
// 	".container-content_products-cate-option-list-item-price"
// );
// const minPrice = document.querySelectorAll(" .min-price");
// const maxPrice = document.querySelectorAll(" .max-price");

// const priceRange = [
// 	{
// 		min: 0,
// 		max: 99000,
// 	},
// 	{
// 		min: 100000,
// 		max: 199000,
// 	},
// 	{
// 		min: 200000,
// 		max: 349000,
// 	},
// 	{
// 		min: 350000,
// 		max: 499000,
// 	},
// 	{
// 		min: 500000,
// 		max: 699000,
// 	},
// 	{
// 		min: 700000,
// 		max: 2000000,
// 	},
// ];

// prices.forEach((price, index) => {
// 	price.onclick = function () {
// 		document.querySelector("#hidden_minimum_price").value =
// 			priceRange[index].min;
// 		document.querySelector("#hidden_maximum_price").value =
// 			priceRange[index].max;
// 		// console.log(document.querySelector("#hidden_minimum_price").value);
// 		// console.log(document.querySelector("#hidden_maximum_price").value);
// 	};
// });
