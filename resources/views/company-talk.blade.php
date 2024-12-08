<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Study FIK UPNVJ</title>
    <link href="css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/script.js"></script>
    <script src="js/headerFooter.js"></script>
</head>

<body>
<special-header></special-header>
    <main class="m-10">
        <section class="slideshow-container">
            <div class="mySlides fade">
                <img src="https://new-fik.upnvj.ac.id/wp-content/uploads/2024/11/compass.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://new-fik.upnvj.ac.id/wp-content/uploads/2024/11/WhatsApp-Image-2024-11-18-at-10.47.26-1536x865.jpeg"
                    style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://new-fik.upnvj.ac.id/wp-content/uploads/2024/11/compass2.jpg"
                    style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </section>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <section class="flex flex-col justify-center gap-2">
            <div class="px-20">
                <h1 class="text-2xl font-bold">Transformasi Teknologi Informasi: HMIF UPN Veteran Jakarta Gelar Company Sharing Session di Telkomsigma</h1>
                <p>Himpunan Mahasiswa Informatika (HMIF) Fakultas Ilmu Komputer UPN Veteran Jakarta sukses
                    menggelar kunjungan perusahaan bertajuk Company Sharing Session (COMPASS). Dengan mengusung tema
                    “Transformasi Teknologi Informasi dalam Dunia Industri: Peluang Karier di Era Digital”, sebanyak 50
                    mahasiswa S1 Informatika dari berbagai semester mengunjungi kantor PT Sigma Cipta Caraka
                    (Telkomsigma)
                    pada Rabu (13/11).
                </p>
            </div>
            <div class="px-20">
                <h1 class="text-xl font-bold">Telkomsigma sebagai Tuan Rumah Inspiratif</h1>
                <p>
                    Sebagai tuan rumah, Telkomsigma menyambut baik kedatangan para mahasiswa yang ingin memperdalam wawasan tentang transformasi teknologi informasi dan peluang karier di era digital. Acara ini memberikan gambaran menyeluruh tentang proses kerja di industri IT, budaya perusahaan, serta berbagai peluang karier yang tersedia bagi generasi muda.
                    Acara dibuka dengan sambutan dari perwakilan Divisi Strategic and People Management, dilanjutkan dengan presentasi profil perusahaan oleh Melinda Teja, Head of Corporate Communications Telkomsigma. Amanda Charitas, Performance Management di Divisi Human Capital, memaparkan budaya kerja yang inklusif dan kolaboratif di Telkomsigma. Sesi puncak diisi oleh Nuzli Latief Hernawan, VP Infrastructure, Network, and Cloud Delivery, yang berbagi pengalaman kerja, sistem teknologi informasi, hingga pentingnya sinergi antara humaniora, sains, dan teknologi dalam menjawab tantangan masa depan.
                    Materi yang disampaikan mencakup beragam topik, seperti tips sukses di perkuliahan, tren teknologi masa depan, hingga strategi menghadapi tantangan karier. Antusiasme mahasiswa sangat terlihat dalam sesi tanya jawab yang interaktif, di mana mereka aktif menggali informasi seputar karier dan teknologi informasi.
                </p>
            </div>
        </section>
    </main>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
    <special-footer></special-footer>
</body>

</html>