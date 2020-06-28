const baseURL = "http://localhost/ci-sekolah/index.php";

$(document).ready(function () {
	$("#myTable").DataTable();
});

$(document).on("click", ".show-confirm", function (e) {
	let button = $(this); // Button that triggered the modal
	let del = button.data('del'); // Extract info from data-* attributes

	bootbox.confirm("Are you sure?", function (result) {
		/* callback code */
		if (result) {
			window.location.href = baseURL + del;
		}
	});
});

$("#idPetugas").on("change", function () {
	let id = $(this).val();
	console.log(id);

	$.ajax({
		url: baseURL + "/petugas/getGuru",
		data: { id: id },
		dataType: "json",
		type: "post",
		success: function (result, status) {
			console.log(result);

			if (result != null) {
				$("#nama").val(result.nama_guru);
				$("#level").val("guru");

				$("#nama").attr("readonly", true);
				$("#level").attr("readonly", true);
				$("#level option:not(:selected)").attr("disabled", true);
			} else {
				$("#nama").val("");
				$("#level").val("");

				$("#nama").attr("readonly", false);
				$("#level").attr("readonly", false);
				$("#level option:not(:selected)").attr("disabled", false);
			}
		},
		error: function (xhr, status, error) {
			console.log(error);
		},
	});
});
