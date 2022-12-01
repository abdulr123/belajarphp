<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat Halaman Landing Page Sederhana</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <!-- untuk menu navigasi -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>aR.Web</a></div>
            <a href="#" class="tombol-menu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#tutors">Tutors</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/belajarphp/aR.Web/admin/" class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="assets/ilustrasi.jpg"/>
            <div class="kolom">
                <p class="deskripsi">Belajar Pemrorgraman Web #onlineaja</p>
                <h2>Tetap Sehat, Tetap Semangat</h2>
                <p>Belajar tidak harus dengan tatap muka, tapi cukup dengan belajar online.</p>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Ingin Belajar Lebih Jauh</p>
                <h2>abdulrahmann.com</h2>
                <p>Website yang menampung kumpulan tutorial belajar dasar pemrograman website.
                Mulai dari perancangan sistem basis data sampai dengan pembuatan aplikasi berbasis website dan android.</p>
                <p><a href="https://abdulrahmann.com" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/online-learning-isometric-concept_1284-17947.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
        </section>

        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Tutors</p>
                    <h2>Tutors</h2>
                    <p>Ini adalah pendamping belajar yang sudah banyak meluluskan peserta pelatihan</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="https://abdulrahmann.com/wp-content/uploads/2022/09/abdulrahman1.jpeg"/>
                        <p>Abdul Rahman</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://abdulrahmann.com/wp-content/uploads/2022/09/abdulrahman1.jpeg"/>
                        <p>John Doe</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://abdulrahmann.com/wp-content/uploads/2022/09/abdulrahman1.jpeg"/>
                        <p>Michael Dell</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://abdulrahmann.com/wp-content/uploads/2022/09/abdulrahman1.jpeg"/>
                        <p>Bruce Wills</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Partners</p>
                    <h2>Partners</h2>
                    <p>Perusahaan yang sudah join dalam pengembangan aR.Web</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/black-wheat-and-mortarboard.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-63.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-62.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/encircled-branches-and-book.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-64.jpg"/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- untuk contact -->
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>aR.Web.</h3>
                    <p>Website resmi yang membantu proses pembuatan aplikasi usaha anda.</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Kami hadir mengusung visi "Permudah Bisnis Anda Dengan Solusi Digital"</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl. Edelwis Karang Sari Perumahan G.M No.402 | Kode Pos: 11111</p>
                    
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>YouTube: </b>Programming aR.Web</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>aR.Web.</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>