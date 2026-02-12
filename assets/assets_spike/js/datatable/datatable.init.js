$(function () {
	// responsive table
	$("#config-table").DataTable({
		responsive: true,
	});

	$("#all-student").DataTable({
		columnDefs: [
			{
				targets: [0],
				orderData: [0, 1],
			},
			{
				targets: [1],
				orderData: [1, 0],
			},
			{
				targets: [3],
				orderData: [3, 0],
			},
		],
	});
});
