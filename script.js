$(document).ready(function () {
    function loadData(halaman) {
        $.ajax({
            type: "GET",
            url: "get_data.php",
            data: {
                halaman: halaman
            },
            success: function (data) {
                $("#data-tamu").html(data);
            }
        });
    }

    loadData(1); // Load data pertama kali

    
    $("#form-tamu").submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "save_data.php",
            data: $(this).serialize(),
            success: function () {
                // Tambahkan SweetAlert dengan waktu submit
                var waktuSubmit = new Date().toLocaleString();
                Swal.fire({
                    icon: 'success',
                    title: 'Submit Berhasil!',
                    text: 'Terima kasih atas konfirmasi dan ucapan Anda.',
                    timer: 2500, // Tampilkan selama 5 detik
                });

                // Reload data pada halaman yang aktif setelah submit berhasil
                var halamanAktif = $(".pagination .active a").text();
                loadData(halamanAktif);
                $("#form-tamu")[0].reset();

            }
        });
    });

    
    
    // // Panggil fungsi untuk memeriksa resolusi layar saat halaman dimuat
    // checkScreenWidth();
    
    // // Panggil fungsi untuk memeriksa resolusi layar saat ukuran layar berubah
    // $(window).resize(function () {
    //     checkScreenWidth();
    // });
    
    // // Fungsi untuk memeriksa resolusi layar
    // function checkScreenWidth() {
        //     // Ambil lebar layar
        //     var screenWidth = $(window).width();
        
        //     // Jika lebar layar lebih besar dari 768px (ukuran resolusi ponsel)
        //     if (screenWidth > 768) {
            //         // Sembunyikan halaman index
            //         $("#index-page").hide();
            //         // Tampilkan halaman error
            //         $("#error-page").show();
            //         // Sembunyikan navbar mobile
            //         $(".footer-navbar").hide();
            //     } else {
                //         // Tampilkan halaman index
                //         $("#index-page").show();
    //         // Sembunyikan halaman error
    //         $("#error-page").hide();
    //         // Tampilkan navbar mobile
    //         $(".footer-navbar").show();
    //     }
    // }

    $(document).ready(function() {
        $('.nav-link').click(function() {
          // Menghapus kelas active dari semua link navbar
          $('.nav-link').removeClass('active');
          // Menambahkan kelas active pada link yang sedang diklik
          $(this).addClass('active');
        });
      });
    
    // Fungsi untuk menampilkan modal error-page
    // function showErrorPage() {
    //     document.getElementById('error-page').style.display = 'block';
    // }

    // // Fungsi untuk menutup modal error-page
    // function closeErrorPage() {
    //     document.getElementById('error-page').style.display = 'none';
    // }
    
    // // Panggil fungsi showErrorPage() jika perangkat yang digunakan bukan mobile
    // if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
    //     showErrorPage();
    // }
    let lastScrollTop = 0; // Simpan posisi scroll sebelumnya
  
 

    window.addEventListener("scroll", function() {
      let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    
      if (currentScroll > lastScrollTop) {
        // Scroll ke bawah, sembunyikan navbar
        document.querySelector('.navbar').style.display = "none";
      } else {
        // Scroll ke atas, tampilkan kembali navbar
        document.querySelector('.navbar').style.display = "block";
      }
    
      lastScrollTop = currentScroll;
    });

    // document.addEventListener("DOMContentLoaded", function() {
    //     const navbar = document.querySelector('.navbar');
        
    //     window.addEventListener('scroll', function() {
    //       if (window.pageYOffset === 0) {
    //         navbar.style.display = 'none'; // Sematikan navbar saat posisi scroll di bagian atas
    //       } else {
    //         navbar.style.display = 'block'; // Nyalakan kembali navbar saat posisi scroll tidak di bagian atas
    //       }
    //     });
    //   });
    
});
