const flashData = $('.flash-data').data('flashdata');
console.log(flashDt)
if (flashData){
    Swal({
            title: 'Data Barang',
            text: 'Berhasil' + flashData,
            type: 'success'
        });
}