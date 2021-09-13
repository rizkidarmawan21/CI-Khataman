
$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#titlemodal').html('Tambah Data Binadhor');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama').val('');
    $('#alamat').val('');
    $('#kelas').val('');
    $('#jenjang').val('');
    $('#jenkel').val('');
    $('#nama_ayah').val('');
    $('#lahir').val('');
    $('#temp_lahir').val('');
    $('#no_telp').val('');
    $('#statuss').val('');
    $('#id').val(data.id);
  });
  
  $('.tampilModalUbah').on('click', function () {
    $('#titlemodal').html('Edit Data Binadhor');
    $('.modal-footer button[type=submit]').html('Edit Data');
    $('.modal-body form').attr('action', 'http://localhost/khataman/binadhor/ubah');

    const id = $(this).data('id');
    $.ajax({
      url: 'http://localhost/khataman/binadhor/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#kelas').val(data.kelas);
        $('#jenjang').val(data.jenjang);
        $('#temp_lahir').val(data.temp_lahir);
        $('#lahir').val(data.lahir);
        $('#alamat').val(data.alamat);
        $('#jenkel').val(data.jenkel);
        $('#nama_ayah').val(data.nama_ayah);
        $('#no_telp').val(data.no_telp);
        $('#statuss').val(data.statuss);
        $('#id').val(data.id);
      },
    });
  });
});




$(function () {
  $('.tombolTambahBilghoib').on('click', function () {
    $('#titlemodal').html('Tambah Data Bilghoib');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama').val('');
    $('#alamat').val('');
    $('#kelas').val('');
    $('#jenjang').val('');
    $('#jenkel').val('');
    $('#nama_ayah').val('');
    $('#lahir').val('');
    $('#temp_lahir').val('');
    $('#no_telp').val('');
    $('#id').val(data.id);
  });
  
  $('.tampilModalUbahbilghoib').on('click', function () {
    $('#titlemodal').html('Edit Data Bilghoib');
    $('.modal-footer button[type=submit]').html('Edit Data');
    $('.modal-body form').attr('action', 'http://localhost/khataman/bilghoib/ubah');

    const id = $(this).data('id');
    $.ajax({
      url: 'http://localhost/khataman/bilghoib/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#kelas').val(data.kelas);
        $('#jenjang').val(data.jenjang);
        $('#temp_lahir').val(data.temp_lahir);
        $('#lahir').val(data.lahir);
        $('#alamat').val(data.alamat);
        $('#jenkel').val(data.jenkel);
        $('#nama_ayah').val(data.nama_ayah);
        $('#no_telp').val(data.no_telp);
        $('#id').val(data.id);
      },
    });
  });

});



$(function () {
  $('.tombolTambahSerbina').on('click', function () {
    $('#titlemodal').html('Tambah Seragam Binadhor');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama').val('');
    $('#ukuran').val('');
    $('#id').val(data.id);
  });
  
  $('.tampilModalUbahserbina').on('click', function () {
    $('#titlemodal').html('Edit Seragam Binadhor');
    $('.modal-footer button[type=submit]').html('Edit Data');
    $('.modal-body form').attr('action', 'http://localhost/khataman/seragam/ubah');

    const id = $(this).data('id');
    $.ajax({
      url: 'http://localhost/khataman/seragam/getubah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#ukuran').val(data.ukuran);
        $('#id').val(data.id);
      },
    });
  });

});


$(function () {
  $('.tombolTambahSerbilghoib').on('click', function () {
    $('#titlemodal').html('Tambah Seragam Bilghoib');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama').val('');
    $('#ukuran').val('');
    $('#id').val(data.id);
  });
  
  $('.tampilModalUbahserbilghoib').on('click', function () {
    $('#titlemodal').html('Edit Seragam Bilghoib');
    $('.modal-footer button[type=submit]').html('Edit Data');
    $('.modal-body form').attr('action', 'http://localhost/khataman/seragam/ubahserbilghoib');

    const id = $(this).data('id');
    $.ajax({
      url: 'http://localhost/khataman/seragam/getubahserbilghoib',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#ukuran').val(data.ukuran);
        $('#id').val(data.id);
      },
    });
  });

});

// console.log('ok');


$(function () {  
  $('.ModalBayar').on('click', function () {
    $('#titlemodal').html('Bayar Binadhor');
    $('.modal-footer button[type=submit]').html('Bayar & Print');
    $('.modal-body form').attr('action', 'http://localhost/khataman/pembayaran/bayar');

    const id = $(this).data('id');
    $.ajax({
      url: 'http://localhost/khataman/pembayaran/getbayar',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#statuss').val(data.statuss);
        $('#id').val(data.id);
      },
    });
  });

  
});

$(function () {  

  $('.ModalBayarbilghoib').on('click', function () {
    $('#titlemodal').html('Bayar Bilghoib');
    $('.modal-footer button[type=submit]').html('Bayar & Print');
    $('.modal-body form').attr('action', 'http://localhost/khataman/pembayaran/bayarbil');

    const id = $(this).data('id');
    $.ajax({
      url: 'http://localhost/khataman/pembayaran/getbayarbil',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#statuss').val(data.statuss);
        $('#id').val(data.id);
      },
    });
  });

});