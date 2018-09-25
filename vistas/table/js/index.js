$(document).ready(function() {
	//Only needed for the filename of export files.
	//Normally set in the title tag of your page.

	var today = new Date().format('m-d-Y h:i:s');

	document.title = 'LaptopAssignation');

	// DataTable initialisation
	$('#example').DataTable(
		{
			"dom": '<"dt-buttons"Bf><"clear">lirtp',
			"paging": true,
			"autoWidth": true,
			"buttons": [
				'colvis',
				'copyHtml5',
        'csvHtml5',
				'excelHtml5',
      //  'pdfHtml5',
				'print'
			]
		}
	);
});
