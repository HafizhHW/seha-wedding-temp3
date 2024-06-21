function loadPage(halaman) {
    // Buat request AJAX ke get_data.php dengan parameter halaman
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "get_data.php?halaman=" + halaman, true);
    xhr.onload = function() {
      // Jika request berhasil, update konten div dengan data baru
      if (xhr.status === 200) {
        document.getElementById("data-tamu").innerHTML = xhr.responseText;
      } else {
        console.error("Error: " + xhr.statusText);
      }
    };
    xhr.send();
  }
  