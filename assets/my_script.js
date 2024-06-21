

function salin(button) {
    var nomorRekening = button.getAttribute('data-nomer');
    navigator.clipboard.writeText(nomorRekening)
        .then(function() {
            console.log('Nomor rekening berhasil disalin: ' + nomorRekening);
            // Ubah teks tombol menjadi "Berhasil disalin"
            button.innerHTML = '<i class="bi bi-check-circle"></i>&nbsp;Berhasil disalin';
            // Kembalikan teks tombol setelah 2 detik
            setTimeout(function() {
                button.innerHTML = '<i class="bi bi-copy"></i>&nbsp;Salin';
            }, 2000);
        })
        .catch(function(error) {
            console.error('Gagal menyalin nomor rekening: ', error);
            alert('Gagal menyalin nomor rekening. Silakan coba lagi.');
        });
}