$(function() {

	$('.tombolTambahData').on('click', function() {

		$('#judulModal').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
	});
	
	$('.tampilModalUbah').on('click' , function() {
		
		$('#judulModal').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

		const id_1 = $(this).data('id');

		// console.log(id);

		$.ajax({
			url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
			data: {id : id_1},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				// console.log(data);
				$('#nama').val(data.nama);
				$('#nrp').val(data.nrp);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}
		});		
	});
});