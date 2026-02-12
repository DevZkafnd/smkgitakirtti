// tombol-hapus
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal({
		title: "Apakah anda yakin",
		text: "data ini akan dihapus?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus Data!",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});

// tombol-baca
$(".tombol-baca").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal({
		title: "Baca Pesan",
		text: "tandai sudah dibaca?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Baca",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});

// tombol-keluar
$(".tombol-keluar").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal({
		title: "Apakah anda yakin",
		text: "ingin logout?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Logout",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});

// tombol-konfirmasi
$(".tombol-konfirmasi").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal({
		title: "Konfirmasi",
		text: "Pastikan data yang anda masukkan sudah benar?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Konfirmasi",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});

// tombol-login
$(".tombol-login").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal({
		title: "Konfirmasi",
		text: "Pastikan data yang anda masukkan sudah benar?",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Konfirmasi",
		cancelButtonText: "Batal",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
