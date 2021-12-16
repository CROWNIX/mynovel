const plus = document.querySelector(".fa-plus-circle");
const minus = document.querySelector(".fa-minus-circle");
const purchaseAmount = document.querySelector(".jumlahBeli");
const priceText = document.querySelector(".harga");
let stokInput = document.querySelector(".detail-stok");
let priceInput = document.querySelector(".detail-harga");
const novelPrice = document.querySelector(".novel-price");
let pesananStok = document.querySelector(".pesanan-stok");
let pesananHarga = document.querySelector(".pesanan-harga");
let subTotalInput = document.querySelector(".total");
if (purchaseAmount == null || priceText == null || novelPrice == null) {
} else {
	let buyNumber = parseInt(purchaseAmount.textContent);
	const price = novelPrice.value;
	let totalTagihan = document.querySelector("#total-tagihan");
	let ongkosKirim = 10000;
	let subTotal = document.querySelector("#sub-total");
	if (totalTagihan == null) {
	} else {
		totalTagihan.textContent = price * buyNumber;
		subTotal.textContent = parseInt(totalTagihan.textContent) + ongkosKirim;
		subTotalInput.value = subTotal.textContent;
	}

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
		stokInput.value = buyNumber;
		priceInput.value = price * buyNumber;
		priceText.textContent = price * buyNumber;
		pesananStok.value = buyNumber;
		pesananHarga.value = price * buyNumber + ongkosKirim;
		totalTagihan.textContent = price * buyNumber;
		subTotal.textContent = parseInt(totalTagihan.textContent) + ongkosKirim;
		subTotalInput.value = subTotal.textContent;

		count();
	});

	minus.addEventListener("click", function () {
		buyNumber -= 1;
		if (buyNumber == 0) {
			buyNumber = 1;
		}
		purchaseAmount.textContent = buyNumber;
		stokInput.value = buyNumber;
		priceInput.value = price * buyNumber;
		priceText.textContent = price * buyNumber;
		pesananStok.value = buyNumber;
		pesananHarga.value = price * buyNumber + ongkosKirim;
		totalTagihan.textContent = price * buyNumber;
		subTotal.textContent = parseInt(totalTagihan.textContent) + ongkosKirim;
		subTotalInput.value = subTotal.textContent;

		count();
	});
}

function previewImg() {
	const cover = document.querySelector("#cover");
	const imageLabel = document.querySelector(".cover-label");
	const coverPreview = document.querySelector(".cover-preview");
	const coverName = document.querySelector(".cover-name");

	coverName.textContent = cover.files[0].name;
	imageLabel.style.opacity = 0;

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
	const image2Name = document.querySelector(".image2-name");

	image2Name.textContent = image2.files[0].name;
	imageLabel.style.opacity = 0;

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
	const image3Name = document.querySelector(".image3-name");

	image3Name.textContent = image3.files[0].name;
	imageLabel.style.opacity = 0;

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
	const image4Name = document.querySelector(".image4-name");

	image4Name.textContent = image4.files[0].name;
	imageLabel.style.opacity = 0;

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
	const image5Name = document.querySelector(".image5-name");

	image5Name.textContent = image5.files[0].name;
	imageLabel.style.opacity = 0;

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
	const judul = document.querySelector(".flash-data").dataset.judul;
	const pesan = document.querySelector(".flash-data").dataset.pesan;
	const aksi = document.querySelector(".flash-data").dataset.aksi;
	if (judul) {
		Swal.fire({
			title: judul,
			text: pesan,
			icon: aksi,
			confirmButtonText: "Ok",
		});
	}
}

// Select Option
$(document).ready(function () {
	loadKabupaten();
	loadKecamatan();
});

function loadKabupaten() {
	$("#provinsi_id").change(function () {
		let getProvinsi = $("#provinsi_id").val();
		$.ajax({
			type: "post",
			dataType: "JSON",
			url: "http://localhost/mynovel/Select/getDataKabupaten",
			data: { provinsi: getProvinsi },
			success: function (data) {
				let html = `<option value="">--Pilih kabupaten--</option>`;
				for (let i = 0; i < data.length; i++) {
					html += `<option value="${data[i].id}">${data[i].kabupaten}</option>`;
				}

				$("#kabupaten_id").html(html);
			},
		});
	});
}

function loadKecamatan() {
	$("#kabupaten_id").change(function () {
		let getKabupaten = $("#kabupaten_id").val();
		$.ajax({
			type: "post",
			dataType: "JSON",
			url: "http://localhost/mynovel/Select/getDataKecamatan",
			data: { kabupaten: getKabupaten },
			success: function (data) {
				let html = `<option value="">--Pilih Kecamatan--</option>`;
				for (let i = 0; i < data.length; i++) {
					html += `<option value="${data[i].id}">${data[i].kecamatan}</option>`;
				}

				$("#kecamatan_id").html(html);
			},
		});
	});
}
