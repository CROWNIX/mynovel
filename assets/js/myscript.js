const plus = document.querySelector(".fa-plus-circle");
const minus = document.querySelector(".fa-minus-circle");
const purchaseAmount = document.querySelector(".jumlahBeli");
const priceText = document.querySelector(".harga");
if (purchaseAmount == null || priceText == null) {
} else {
	let buyNumber = parseInt(purchaseAmount.textContent);
	const price = parseInt(priceText.textContent);

	function count() {
		let number = priceText.textContent.split("");
		let index = 0;

		for (let i = number.length; i > 0; i--) {
			index += 1;
			// console.log(index);
			if (index % 3 == 0) {
				number.splice(i - 1, 0, ".");
			}
		}
		if (number[0] == ".") {
			number.shift();
		}
		return (priceText.textContent = number.join(""));
	}
	count();

	plus.addEventListener("click", function () {
		buyNumber += 1;
		purchaseAmount.textContent = buyNumber;
		priceText.textContent = price * buyNumber;

		count();
	});

	minus.addEventListener("click", function () {
		buyNumber -= 1;
		if (buyNumber == 0) {
			buyNumber = 1;
		}
		purchaseAmount.textContent = buyNumber;
		priceText.textContent = price * buyNumber;

		count();
	});
}

function previewImg() {
	const cover = document.querySelector("#cover");
	const imageLabel = document.querySelector(".cover-label");
	const coverPreview = document.querySelector(".cover-preview");

	imageLabel.textContent = cover.files[0].name;

	const fileCover = new FileReader();
	fileCover.readAsDataURL(cover.files[0]);
	fileCover.onload = function (e) {
		coverPreview.src = e.target.result;
		coverPreview.style.opacity = 1;
	};
}

function previewImg2() {
	const image2 = document.querySelector("#image2");
	const imageLabel = document.querySelector(".image2-label");
	const image2Preview = document.querySelector(".image2-preview");

	imageLabel.textContent = image2.files[0].name;

	const fileImage2 = new FileReader();
	fileImage2.readAsDataURL(image2.files[0]);
	fileImage2.onload = function (e) {
		image2Preview.src = e.target.result;
		image2Preview.style.opacity = 1;
	};
}

function previewImg3() {
	const image3 = document.querySelector("#image3");
	const imageLabel = document.querySelector(".image3-label");
	const image3Preview = document.querySelector(".image3-preview");

	imageLabel.textContent = image3.files[0].name;

	const fileImage3 = new FileReader();
	fileImage3.readAsDataURL(image3.files[0]);
	fileImage3.onload = function (e) {
		image3Preview.src = e.target.result;
		image3Preview.style.opacity = 1;
	};
}

function previewImg4() {
	const image4 = document.querySelector("#image4");
	const imageLabel = document.querySelector(".image4-label");
	const image4Preview = document.querySelector(".image4-preview");

	imageLabel.textContent = image4.files[0].name;

	const fileImage4 = new FileReader();
	fileImage4.readAsDataURL(image4.files[0]);
	fileImage4.onload = function (e) {
		image4Preview.src = e.target.result;
		image4Preview.style.opacity = 1;
	};
}

function previewImg5() {
	const image5 = document.querySelector("#image5");
	const imageLabel = document.querySelector(".image5-label");
	const image5Preview = document.querySelector(".image5-preview");

	imageLabel.textContent = image5.files[0].name;

	const fileImage5 = new FileReader();
	fileImage5.readAsDataURL(image5.files[0]);
	fileImage5.onload = function (e) {
		image5Preview.src = e.target.result;
		image5Preview.style.opacity = 1;
	};
}

const flashData = document.querySelector(".flash-data");
if (flashData == null) {
} else {
	const flashData = document.querySelector(".flash-data").dataset.flashdata;
	if (flashData) {
		Swal.fire({
			title: "Novel",
			text: "Tidak Ditemukan",
			icon: "info",
			confirmButtonText: "Ok",
		});
	}
}
