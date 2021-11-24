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

const flashData = document.querySelector(".flash-data").dataset.flashdata;
if (flashData) {
	Swal.fire({
		title: "Novel",
		text: "Tidak Ditemukan",
		icon: "info",
		confirmButtonText: "Ok",
	});
}
