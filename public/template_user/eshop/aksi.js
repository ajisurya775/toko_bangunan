$(document).ready(function(){
    $('#exampleModal').on('show.bs.modal', function (event) {
        var btn = $(event.relatedTarget),
            barang = btn.data('barang'),
            stok = btn.data('stok'),
            gambar = btn.data('gambar'),
            harga = btn.data('harga'),
            deskripsi = btn.data('deskripsi');
            varian = btn.data('varian-id');
            nama_varian = btn.data('varian-name');

        console.log(barang);
        console.log(stok);
        console.log(gambar);
        console.log(harga);
        console.log(deskripsi);
        console.log(varian);
        console.log(nama_varian);

        // $('#exampleModal').find('#nama').text(barang);
        // $('#exampleModal').find('#stok').text(stok);
        // $('#exampleModal').find('#gambar').text(gambar);
        // $('#exampleModal').find('#harga').text(harga);
        // $('#exampleModal').find('#deskripsi').text(deskripsi);
        
      })
})