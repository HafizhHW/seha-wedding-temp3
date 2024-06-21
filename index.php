<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Tambahkan link Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Tambahkan link SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Tambahkan script SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Fancy Box CDN Old -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"> -->
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Data AOS CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous">
    <!-- simplyCountdown -->
    <link rel="stylesheet" href="assets/countdown/simplyCountdown.theme.default.css">
    <script src="assets/countdown/simplyCountdown.min.js"></script>
    <!-- Fancy Box CDN New -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <!-- My Style -->
    <link rel="stylesheet" href="./assets/styles.css">
    <!-- My Script -->
    <script src="script.js"></script>


    <title>Seha Wedding</title>
</head>

<body>
    <div class="index" id="index">
        <section id="hero" class="hero hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center">
            <main>

                <img src="assets/images/leaf-left.png" alt="" class="img-top">

                <h2>THE WEDDING OF</h2>
                <h1>Sekar & Hafizh</h1>
                <h3>Sabtu, 7 September 2024</h3>
                <h4>Kepada
                    <br><span>Bapak/Ibu/Saudara/i, </span>
                </h4>
                <p>Di Tempat</p>
                <p>Mohon maaf bila ada kesalahan pada penulisan nama/gelar</p>

                <a href="#home" class="btn btn-lg mt-4" onclick="enableScroll()"> <i class="bi bi-envelope-paper-heart"></i>
                    Lihat Undangan</a>

                <img src="assets/images/leaf-right.png" alt="" class="img-bottom">

            </main>
        </section>

        <section id="home" class="home">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2>The Wedding of</h2>
                        <div class="cropper border border-3 border-light shadow mb-4 mx-auto">
                            <!-- <img src="" alt=""> -->
                        </div>
                        <h1>Sekar & Hafizh</h1>
                        <div class="simply-countdown mb-1"></div>

                        <a href="https://calndr.link/e/tKA1R9eyBl?s=google" target="_blank" rel="noopener noreferrer" class="btn btn-lg mb-5 mt-3"> <i class="bi bi bi-calendar3"></i> Save The Date</a>

                    </div>
                    <div class="card-home">
                        <p>Maha Suci Allah yang telah menciptakan pasangan-pasangan semuanya,baik dari apa yang ditumbuhkan
                            oleh bumi dan dari diri mereka maupun dari apa yang tidak mereka ketahui.
                            <br><br>Yasin (36:36)
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="couple" id="couple">
            <div class="container-fluid">
                <div class="row row-cols-lg-2 row-cols-1  ">
                    <div class="col-md-6 woman">
                        <div class="row">
                            <div class="col-md-4">
                                <h1 data-aos="fade-right" data-aos-duration="800">Mempelai Wanita</h1>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                            <div class="card-content">
                                <h2>Sekar Ayu Galuh Gunawan, S.E</h2>
                                <p>Putri dari Bpk Agus Gunawan dan Ibu Agung Prihatiningsih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 man ">
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                <h1 data-aos="fade-left" data-aos-duration="800">Mempelai Pria</h1>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                            <div class="card-content">
                                <h2>Hafizh Hadiayana Wijaya, S.Kom</h2>
                                <p>Putra dari Alm. Bpk H. Mamat Wijaya dan Ibu Hj. Nengsih</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="event-header" id="event-header">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-10">
                        <h1>Event</h1>
                    </div>
                    <div class="col-md-8 col-10">
                        <p>
                            Dengan segala kerendahan hati kami bermaksud ingin mengundang Bapak/Ibu/Saudara/i sekalian guna hadir didalam acara pernikahan kami yang akan diselenggarakan pada:
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="event" class="event">
            <div class="container-fluid">
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-6 col-md-10 col-sm-10">
                        <table style="width:100%" class="">
                            <tr>
                                <td rowspan="3" class="akad-resepsi text-white">Akad</td>
                                <td>
                                    <div class="row ">
                                        <div class="col-4 tgl">07</div>
                                        <div class="col-8 ">
                                            <div class="row">
                                                <div class="col text-center">Sabtu</div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-center">September 2024</div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row"><span> <i class="bi bi-clock">&nbsp;</i>08:00 - 10:00</span></div>
                                            <div class="row">
                                                <div class="col">Lokasi Acara</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Kediaman mempelai wanita</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Jl. Durian VI No.38, Lumpang, Kec. Parung Panjang, Kabupaten Bogor, Jawa Barat 16360</div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-center">
                                                    <a href="https://goo.gl/maps/pYQ3Y3SeJhZVAfRZ9" target="_blank" class="btn btn-light btn-lg"><i class="bi bi-geo-alt-fill"></i> Lihat Peta</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-lg-6 col-md-10 col-sm-10">
                        <table style="width:100%" class="">
                            <tr>
                                <td rowspan="3" class="akad-resepsi text-white">Resepsi</td>
                                <td>
                                    <div class="row ">
                                        <div class="col-4 tgl">07</div>
                                        <div class="col-8 ">
                                            <div class="row">
                                                <div class="col text-center">Sabtu</div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-center">September 2024</div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row"><span> <i class="bi bi-clock">&nbsp;</i>10:00 - Selesai</span></div>
                                            <div class="row">
                                                <div class="col">Lokasi Acara</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Kediaman mempelai wanita</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Jl. Durian VI No.38, Lumpang, Kec. Parung Panjang, Kabupaten Bogor, Jawa Barat 16360</div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-center">
                                                    <a href="https://goo.gl/maps/pYQ3Y3SeJhZVAfRZ9" target="_blank" class="btn btn-light btn-lg"><i class="bi bi-geo-alt-fill"></i> Lihat Peta</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery" id="gallery">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-8 text-center">
                        <h1>Our Gallery</h1>
                    </div>
                </div>

                <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center mb-5">

                    <div class="col mt-3">
                        <a data-fancybox="gallery" data-src="https://source.unsplash.com/1200x768/?wedding">
                            <img src="https://source.unsplash.com/300x200/?wedding" class="img-fluid w-100 rounded" />
                        </a>
                    </div>

                    <div class="col mt-3">
                        <a data-fancybox="gallery" data-src="https://picsum.photos/id/1/1200/768">
                            <img src="https://picsum.photos/id/1/300/200" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a data-fancybox="gallery" data-src="https://unsplash.it/1200/768.jpg?image=256">
                            <img src="https://unsplash.it/1200/768.jpg?image=256" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a data-fancybox="gallery" data-src="https://unsplash.it/1200/768.jpg?image=257">
                            <img src="https://unsplash.it/1200/768.jpg?image=257" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a data-fancybox="gallery" data-src="https://unsplash.it/1200/768.jpg?image=258">
                            <img src="https://unsplash.it/1200/768.jpg?image=258" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a data-fancybox="gallery" data-src="https://unsplash.it/1200/768.jpg?image=259">
                            <img src="https://unsplash.it/1200/768.jpg?image=259" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <div class="col mt-3">
                        <a data-fancybox="gallery" data-src="https://unsplash.it/1200/768.jpg?image=270">
                            <img src="https://unsplash.it/1200/768.jpg?image=270" class="img-fluid w-100 rounded" />
                        </a>
                    </div>
                    <!-- OLD LightBox -->
                    <!-- <div class="col mt-3">
                        <a href="https://picsum.photos/id/251/1200/768" class="fancybox" data-fancybox="OurGallery" data-caption="Couple3">
                            <img src="https://picsum.photos/id/251/270/300" alt="Couple3" class="img-fluid w-100 rounded">
                        </a>
                    </div> -->
                </div>
            </div>
        </section>

        <section class="gift" id="gift">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-8 text-center">
                        <h1>Gift</h1>
                        <h2>Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami, dapat
                            melalui : </h2>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-lg-6 col-md-4 col-10">
                        <div class="card text-center mb-5">
                            <div class="row">
                                <div class="col text-end">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png" class="img-fluid" alt="BCA" style="width: 100px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-start mx-3 mt-4 norek">Nomo Rekening</div>
                            </div>
                            <div class="row">
                                <div class="col text-start mx-3">4971858588</div>
                            </div>
                            <div class="row">
                                <div class="col text-start mx-3 owner">Nama Pemilik</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 text-start mx-3">Hafizh Hadiayana Wijaya</div>
                                <div class="col-xs-4 text-end">
                                    <button class="btn btn-light btn-sm rounded-4" data-nomer="4971858588" onclick="salin(this)" autofocus><i class="bi bi-copy"></i>&nbsp;Salin</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-4 col-10">
                        <div class="card text-center mb-5">
                            <div class="row">
                                <div class="col text-end">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/1280px-Bank_Mandiri_logo_2016.svg.png" class="img-fluid" alt="MANDIRI" style="width: 100px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-start mx-3 mt-4 norek">Nomo Rekening</div>
                            </div>
                            <div class="row">
                                <div class="col text-start mx-3">1640003030287</div>
                            </div>
                            <div class="row">
                                <div class="col text-start mx-3 owner">Nama Pemilik</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 text-start mx-3">Sekar Ayu Galuh Gunawan</div>

                                <div class="col-xs-4 text-end">
                                    <button class="btn btn-light btn-sm rounded-4" data-nomer="1640003030287" onclick="salin(this)" autofocus><i class="bi bi-copy"></i>&nbsp;Salin</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rsvp" id="rsvp">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-10 text-center">
                        <h1>Konfirmasi Kehadiran</h1>
                        <!-- <p>Silahkan mengisi form kehadiran anda</p> -->
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body shadow">
                                <form id="form-tamu">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama:</label>
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="konfirmasi" class="form-label">Konfirmasi Kehadiran:</label>
                                        <select class="form-select" name="konfirmasi_kehadiran" required>
                                            <option value="" selected disabled>Pilih opsi</option>
                                            <option value="Hadir">Hadir</option>
                                            <option value="Tidak Hadir">Tidak Hadir</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 position-relative">
                                        <label for="ucapan" class="form-label">Ucapan:</label>
                                        <textarea class="form-control" name="ucapan" id="ucapan" required></textarea>
                                        <!-- Tambahkan elemen untuk menampilkan sisa karakter -->
                                        <div class="sisa-karakter position-absolute bottom-0 end-0 pe-3 pb-1 text-muted small " id="sisa-karakter"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                        <!-- Menambahkan style agar data tamu ditampilkan secara vertikal -->
                        <div id="data-tamu" class="mt-4">
                            <!-- <h2>Data Tamu:</h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="audio-container">
            <audio id="song" autoplay loop>
                <source src="assets/audio/sound.mp3" type="audio/mp3">
            </audio>

            <div class="audio-icon-wrapper" style="display: none;">
                <i class="bi bi-disc"></i>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/my_script.js"></script>
    <script src="assets/myJS.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" integrity="sha256-pQBbLkFHcP1cy0C8IhoSdxlm0CtcH5yJ2ki9jjgR03c=" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="loadPage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="assets/gallery.js" defer></script>

</body>

</html>