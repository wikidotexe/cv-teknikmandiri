<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkah Teknik Mandiri</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Memanggil module -->
    <?php include 'connection.php'; ?>
    
    <!-- Header Section -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">CV.Berkah Teknik Mandiri</a>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Service</a>
                    <a href="#process">Work</a>
                    <a href="#clients">Clients</a>
                    <a href="#contact">Contact</a>
                </nav>

                <a href="#contact" class="link-btn">Contact Here</a>

                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->
    
    <!-- Home -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-center">    
                <h3>CV.Berkah Teknik Mandiri</h3>
                <p>Perusahaan yang berdiri sejak tahun 2013 dan bergerak di bidang pemasangan baru dan perawatan mekanikal, elektrikal, dan renovasi tempat usaha dan kantor. Kami menyediakan layanan lengkap dan terpadu untuk memastikan operasional kantor Anda berjalan lancar dan efisien. Dengan tim profesional berpengalaman dan teknologi terkini, kami siap membantu Anda dalam pemeliharaan rutin, perbaikan sistem mekanikal dan elektrikal, serta renovasi ruang kerja sesuai kebutuhan spesifik Anda. Komitmen kami adalah memberikan hasil terbaik dengan fokus pada kualitas, keamanan, dan kepuasan pelanggan</p>
                <a href="#contact" class="link-btn">Contact Here</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home -->
    
    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="image/About/about.png" class="w-100 mb-4 mb-md-0" alt="">
                </div>
            <div class="col-md-6 content">
                <span>About Us</span>
                <h3>True Maintenance for Your Business</h3>
                <p>Kami menyediakan layanan pemeliharaan berkualitas tinggi yang dirancang untuk menjaga bisnis Anda tetap berjalan lancar. Dengan tim ahli yang berpengalaman, kami menangani segala kebutuhan pemeliharaan Anda, mulai dari perbaikan kelistrikan, pemeliharaan mekanikal, hingga solusi jaringan yang handal. Kami berkomitmen untuk memberikan pelayanan terbaik yang memastikan efisiensi dan keberlanjutan operasional bisnis Anda.</p>
                <a href="#content" class="link-btn">More details</a>
            </div>
        </div>
    </div>
    </section>
    <!-- End About -->
    
    <!-- Service -->
    <section class="services" id="services">
    <h1 class="heading">Our Services</h1>
    <div class="box-container container">
        <div class="box">
            <img src="image/Icon/mechanic.svg" style="width: 40px; height: 40px;" alt="">
            <h3>Maintenance Electrical</h3>
            <p>Menawarkan layanan perbaikan dan pemeliharaan sistem kelistrikan untuk rumah, kantor, dan industri, termasuk instalasi, pemeriksaan, dan troubleshooting.</p>
        </div>
        <div class="box">
            <img src="image/Icon/electric.svg" style="width: 40px; height: 40px;" alt="">
            <h3>Maintenance Mechanical</h3>
            <p>Memberikan layanan pemeliharaan dan perbaikan mekanikal, termasuk sistem HVAC, plumbing, dan peralatan industri untuk memastikan kinerja optimal.</p>
        </div>
        <div class="box">
            <img src="image/Icon/ac.svg" style="width: 40px; height: 40px;" alt="">
            <h3>Service AC</h3>
            <p>Menyediakan layanan perawatan dan perbaikan AC, mulai dari pembersihan rutin hingga perbaikan besar untuk memastikan AC Anda tetap dingin dan efisien.</p>
        </div>
        <div class="box">
            <img src="image/Icon/network.svg" style="width: 40px; height: 40px;" alt="">
            <h3>Network</h3>
            <p>Mengatasi masalah jaringan komputer dan internet, termasuk instalasi, konfigurasi, dan pemeliharaan jaringan untuk kinerja yang optimal.</p>
        </div>
        <div class="box">
            <img src="image/Icon/office.svg" style="width: 40px; height: 40px;" alt="">
            <h3>Interior Service</h3>
            <p>Menawarkan layanan desain dan renovasi interior untuk rumah dan kantor, mencakup perencanaan ruang, dekorasi, dan perbaikan untuk meningkatkan estetika dan fungsi.</p>
        </div>
    </div>
    </section>
    <!-- End Service -->
    
    <!-- Work Process -->
    <section class="process" id="process">
    <h1 class="heading">Work Process</h1>
    <div class="box-container container">
        <div class="box">
            <img src="image/Work/work.png" style="width: 300px; height: 300px;" alt="">
            <h3>Spesific Work</h3>
            <p>Kami menangani pekerjaan dengan fokus dan keahlian yang spesifik sesuai kebutuhan Anda, untuk hasil terbaik.</p>
        </div>
        <div class="box">
            <img src="image/Work/work2.png" style="width: 300px; height: 300px;" alt="">
            <h3>Client Survey</h3>
            <p>Kami melakukan survei mendalam untuk memahami kebutuhan dan harapan klien kami, sehingga kami dapat memberikan solusi yang tepat.</p>
        </div>
        <div class="box">
            <img src="image/Work/work3.png" style="width: 300px; height: 300px;" alt="">
            <h3>Work in Progress</h3>
            <p>Kami aktif bekerja pada proyek Anda, memastikan setiap langkah dijalankan dengan teliti dan efisien untuk hasil yang optimal.</p>
        </div>
    </div>
    </section>

    <!-- End Work Process -->
    
    <!-- Clients -->
    <section class="clients" id="clients">
        <h1 class="heading">Our Clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="image/Client/nanny's.png" style="width: 300px; height: 200px;" alt="">
            </div>
            <div class="box">
                <img src="image/Client/upnormal.png" style="width: 200px; height: 200px;" alt="">
            </div>
            <div class="box">
                <img src="image/Client/invio.png" style="width: 300px; height: 200px;" alt="">
            </div>
            <div class="box">
                <img src="image/Client/nobu.png" style="width: 300px; height: 100px;" alt="">
            </div>
            <div class="box">
                <img src="image/Client/torigen.png" style="width: 200px; height: 200px;" alt="">
            </div>
            <div class="box">
                <img src="image/Client/omara.png" style="width: 200px; height: 200px;" alt="">
            </div>
        </div>
    </section>
    <!-- End Clients -->
    
    <!-- Contact -->
    <section class="contact" id="contact">
    <h1 class="heading">Contact</h1>
    <form id="contactForm" action="connection.php" method="POST">
        <span>Nama</span>
        <input type="text" name="name" placeholder="Masukkan nama anda" class="box" required>
        <span>Email</span>
        <input type="email" name="email" placeholder="Masukkan email anda" class="box" required>
        <span>Nomor</span>
        <input type="text" name="number" placeholder="Masukkan nomor anda" class="box" required>
        <span>Tanggal</span>
        <input type="date" name="date" class="box" required>
        <input type="submit" value="Submit" name="submit" class="link-btn">
    </form>
    </section>
    <!-- End Contact -->
    
    <!-- Footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p>0895639830407</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Address</h3>
                <p>Jl. Raya Impres No 65 Kramat Jati Kel.Kampung Tengah Kec.Jakarta Timur, 13540 </p>
            </div>
            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Working</h3>
                <p>After Ofice, Day Night or Weekend</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>arishermawanto003@gmail.com</p>
            </div>
        </div>
        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> <span>wikiarlnm [Kelompok 1 - Pemograman Web Lanjut]</span></div>
    </section>
    <!-- End Footer -->
    
    <!-- Untuk memanggil Javascript -->
    <script src="animation.js"></script>
    <script src="validation.js"></script>
    <!-- Sweet Alert (Pemberitahuan) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
